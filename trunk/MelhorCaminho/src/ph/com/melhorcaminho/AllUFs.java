package ph.com.melhorcaminho;

import java.util.ArrayList;
import java.util.HashMap;

import org.json.JSONArray;
import org.json.JSONObject;

import android.app.ListActivity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.TextView;

public class AllUFs extends ListActivity {
	private ProgressDialog pDialog;
	
	JSONParser jParser = new JSONParser();
	
	ArrayList<HashMap<String, String>> ufsList;
	
	private static String url_all_ufs = "http://melhorcaminho.url.ph/get_all_uf.php";
	
	private static final String TAG_SUCCESS = "success";
	private static final String TAG_UFS = "ufs";
	private static final String TAG_ID = "id_uf";
	private static final String TAG_NOME = "nome";
	
	JSONArray ufs = null;
	
	@Override
	public void onCreate(Bundle savedInstanceState){
		super.onCreate(savedInstanceState);
		setContentView(R.layout.all_ufs);
		
		ufsList = new ArrayList<HashMap<String,String>>();
		
		new LoadAllUFs().execute();
		
		ListView lv = getListView();
		
		lv.setOnItemClickListener(new OnItemClickListener() {
			@Override
			public void onItemClick(AdapterView<?> parent, View view, int position, long id){
				String id_uf = ((TextView) view.findViewById(R.id.pid)).getText().toString();
				
				// Starting new intent
                Intent in = new Intent(getApplicationContext(),
                        EditUF.class);
                // sending pid to next activity
                in.putExtra(TAG_ID,id_uf );
 
                // starting new activity and expecting some response back
                startActivityForResult(in, 100);
			}
		});
		
	}
	
	@Override
	protected void onActivityResult(int requestCode, int resultCode, Intent data){
		super.onActivityResult(requestCode, resultCode, data);
		
		if(resultCode == 100){
			Intent intent = getIntent();
			finish();
			startActivity(intent);
		}
	}
	
	class LoadAllUFs extends AsyncTask<String, String, String>{

        /**
         * Before starting background thread Show Progress Dialog
         * */
        @Override
        protected void onPreExecute() {
            super.onPreExecute();
            pDialog = new ProgressDialog(AllUFs.this);
            pDialog.setMessage("Carregando... ");
            pDialog.setIndeterminate(false);
            pDialog.setCancelable(false);
            pDialog.show();
        }	
        
        protected String doInBackground(String...strings args){
        	List<NameValuePair> params = new ArrayList<NameValuePair>();
        	JSONObject json = jParser.makeHttpRequest(url_all_ufs, "GET", params);
        	Log.d("All UFs",json.toString());
        try{
        	int success = json.getInt(TAG_SUCCESS);
        	
        	if(success == 1){
        		ufs = json.getJSONArray(TAG_UFS);
        		
        		for(int i=0; i<ufs.length();i++){
        			JSONObject c = ufs.getJSONObject(i);
        			
        			String id = c.getString(TAG_ID);
        			String nome = c.getString(TAG_NOME);
        			
        			HashMap<String, String> map = new HashMap<String, String>();
        			
        			map.put(TAG_ID, id);
        			map.put(TAG_NOME, nome);
        			
        			ufsList.add(map);
        			
        		}
        	}else{
        		Intent i = new Intent(getApplicationContext(), NewUF.class);
        		i.addFlags(I)
        	}
        }
        	
        }
        
	}
	
}
