package ph.com.melhorcaminho;
 
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
 
import org.apache.http.NameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
 
import android.app.ListActivity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.TextView;
 
public class AllUFs extends ListActivity {
 
    // Progress Dialog
    private ProgressDialog pDialog;
 
    // Creating JSON Parser object
    JSONParser jParser = new JSONParser();
 
    ArrayList<HashMap<String, String>> ufsList;
 
    // url to get all ufs list
    private static String url = "http://melhorcaminho.url.ph/get_all_uf.php";
 
    // JSON Node nomes
    private static final String TAG_SUCCESS = "success";
    private static final String TAG_UFS = "ufs";
    private static final String TAG_ID = "pid";
    private static final String TAG_NOME = "nome";
 
    // ufs JSONArray
    JSONArray ufs = null;
 
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.all_ufs);
 
        // Hashmap for ListView
        ufsList = new ArrayList<HashMap<String, String>>();
 
        // Loading ufs in Background Thread
        new LoadAll().execute();
 
        // Get listview
        ListView lv = getListView();
 
        // on seleting single product
        // launching Edit UF Screen
        lv.setOnItemClickListener(new OnItemClickListener() {
 
            @Override
            public void onItemClick(AdapterView<?> parent, View view,
                    int position, long id) {
                // getting values from selected ListItem
                String pid = ((TextView) view.findViewById(R.id.pid)).getText()
                        .toString();
 
                // Starting new intent
                Intent in = new Intent(getApplicationContext(),
                        EditUF.class);
                // sending id to next activity
                in.putExtra(TAG_ID, pid);
 
                // starting new activity and expecting some response back
                startActivityForResult(in, 100);
            }
        });
 
    }
 
    // Response from Edit UF Activity
    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        // if result code 100
        if (resultCode == 100) {
            // if result code 100 is received
            // means user edited/deleted product
            // reload this screen again
            Intent intent = getIntent();
            finish();
            startActivity(intent);
        }
 
    }
 
    /**
     * Background  Task to Load all product by making HTTP Request
     * */
    class LoadAll extends AsyncTask<String, String, String> {
 
        /**
         * Before starting background thread Show Progress Dialog
         * */
        @Override
        protected void onPreExecute() {
            super.onPreExecute();
            pDialog = new ProgressDialog(AllUFs.this);
            pDialog.setMessage("Loading ufs. Please wait...");
            pDialog.setIndeterminate(false);
            pDialog.setCancelable(false);
            pDialog.show();
        }
 
        /**
         * getting All ufs from url
         * */
        protected String doInBackground(String... args) {
            // Building Parameters
            List<NameValuePair> params = new ArrayList<NameValuePair>();
            // getting JSON string from URL
            JSONObject json = jParser.makeHttpRequest(url, "GET", params);
 
            // Check your log cat for JSON reponse
            Log.d("Todos os UFs: ", json.toString());
 
            try {
                // Checking for SUCCESS TAG
                int success = json.getInt(TAG_SUCCESS);
 
                if (success == 1) {
                    // ufs found
                    // Getting Array of ufs
                    ufs = json.getJSONArray(TAG_UFS);
 
                    // looping through All UFs
                    for (int i = 0; i < ufs.length(); i++) {
                        JSONObject c = ufs.getJSONObject(i);
 
                        // Storing each json item in variable
                        String id = c.getString(TAG_ID);
                        String nome = c.getString(TAG_NOME);
 
                        // creating new HashMap
                        HashMap<String, String> map = new HashMap<String, String>();
 
                        // adding each child node to HashMap key => value
                        map.put(TAG_ID, id);
                        map.put(TAG_NOME, nome);
 
                        // adding HashList to ArrayList
                        ufsList.add(map);
                    }
                } else {
                    // no  found
                    // Launch Add New product Activity
                    Intent i = new Intent(getApplicationContext(),
                            NewUF.class);
                    // Closing all previous activities
                    i.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
                    startActivity(i);
                }
            } catch (JSONException e) {
                e.printStackTrace();
            }
 
            return null;
        }
 
        /**
         * After completing background task Dismiss the progress dialog
         * **/
        protected void onPostExecute(String file_url) {
            // dismiss the dialog after getting all ufs
            pDialog.dismiss();
            // updating UI from Background Thread
            runOnUiThread(new Runnable() {
                public void run() {
                    /**
                     * Updating parsed JSON data into ListView
                     * */
                    ListAdapter adapter = new SimpleAdapter(
                            AllUFs.this, ufsList,
                            R.layout.list_item, new String[] { TAG_ID,
                                    TAG_NOME},
                            new int[] { R.id.pid, R.id.nome });
                    // updating listview
                    setListAdapter(adapter);
                }
            });
 
        }
 
    }
}