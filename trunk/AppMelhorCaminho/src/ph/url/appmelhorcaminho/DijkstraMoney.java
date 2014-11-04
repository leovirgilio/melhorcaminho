package ph.url.appmelhorcaminho;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.ListActivity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;

public class DijkstraMoney extends ListActivity {

	private ProgressDialog pDialog;

	JSONParser jParser = new JSONParser();

	ArrayList<HashMap<String, String>> dijkstraList;

	private static String url = "http://melhorcaminho.url.ph/dijResolve_money.php";

	private static final String TAG_SUCCESS = "success";
	private static final String TAG_DIJKSTRAS = "dijresolves";
	private static final String TAG_FROM = "FromNodeName";
	private static final String TAG_TO = "ToNodeName";
	private static final String TAG_COST = "Cost";
	private String from;
	private String to;
	private ListView listView;

	JSONArray dijkstras = null;

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.dijresolve_money);

		Intent i = getIntent();
		from = i.getStringExtra("from");
		to = i.getStringExtra("to");
		dijkstraList = new ArrayList<HashMap<String, String>>();

		new LoadDijkstra().execute();

		listView = (ListView) findViewById(R.id.list);

	}

	class LoadDijkstra extends AsyncTask<String, String, String> {
		@Override
		protected void onPreExecute() {
			super.onPreExecute();
			pDialog = new ProgressDialog(DijkstraMoney.this);
			pDialog.setMessage("Pesquisando o melhor caminho...");
			pDialog.setIndeterminate(false);
			pDialog.setCancelable(false);
			pDialog.show();

		}

		protected String doInBackground(String... args) {
			List<NameValuePair> params = new ArrayList<NameValuePair>();
			params.add(new BasicNameValuePair("fromNode",from));
			params.add(new BasicNameValuePair("toNode",to));

			JSONObject json = jParser.makeHttpRequest(url, "POST", params);

			Log.i("Log", jParser.makeHttpRequest(url, "POST", params).toString());
			Log.d("Dijkstra: ", json.toString());
			
			System.out.print(json.toString());

			
			
			try {
				int success = json.getInt(TAG_SUCCESS);

				if (success == 1) {
					dijkstras = json.getJSONArray(TAG_DIJKSTRAS);

					for (int i = 0; i < dijkstras.length(); i++) {
						JSONObject c = dijkstras.getJSONObject(i);

						String from = c.getString(TAG_FROM);
						String to = c.getString(TAG_TO);
						String cost = c.getString(TAG_COST);

						HashMap<String, String> map = new HashMap<String, String>();

						map.put(TAG_FROM, from);
						map.put(TAG_TO, to);
						map.put(TAG_COST, cost);

						dijkstraList.add(map);
						Log.d("List: ", dijkstraList.toString());

					}
				} else {
					
					Intent i = new Intent(getApplicationContext(),
							MainActivity.class);
					// Closing all previous activities
					i.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
					startActivity(i);
				}
			} catch (JSONException e) {
				Log.d("Fude","oi");
				e.printStackTrace();
			}
			return null;
		}
		
		protected void onPostExecute(String file_url){
			pDialog.dismiss();
			
			runOnUiThread(new Runnable() {
				
				@Override
				public void run() {
					// TODO Auto-generated method stub
					ListAdapter adapter = new SimpleAdapter(
							DijkstraMoney.this, dijkstraList,
							R.layout.list_money, new String[]{TAG_FROM, TAG_TO, TAG_COST},
							new int[]{R.id.FromNodeName, R.id.ToNodeName, R.id.cost});
					setListAdapter(adapter);
					
				}
			});
		}
	}
}
