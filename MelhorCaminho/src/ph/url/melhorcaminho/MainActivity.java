package ph.url.melhorcaminho;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.apache.http.HttpResponse;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.Menu;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

public class MainActivity extends Activity {

	private String jsonResult;
	private String url = "http://cpriyankara.coolpage.biz/employee_details.php";
	private ListView listView;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		listView = (ListView) findViewById(R.id.listView1);

		accessWebService();
	}

	public boolean onCreateOpptionsMenu(Menu menu) {
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

	private class JsonReadTask extends AsyncTask<String, Void, String> {

		@Override
		protected String doInBackground(String... params) {
			HttpClient httpclient = new DefaultHttpClient();
			HttpPost httpost = new HttpPost(params[0]);

			try {
				HttpResponse response = httpclient.execute(httpost);
				jsonResult = inputStreamToString(
						response.getEntity().getContent()).toString();
			} catch (ClientProtocolException e) {
				e.printStackTrace();
			} catch (IOException e) {
				e.printStackTrace();
			}
			return null;
		}

		private StringBuilder inputStreamToString(InputStream is) {
			String rLine = "";
			StringBuilder answer = new StringBuilder();
			BufferedReader rd = new BufferedReader(new InputStreamReader(is));

			try {
				while ((rLine = rd.readLine()) != null) {
					answer.append(rLine);
				}
			} catch (IOException e) {
				Toast.makeText(getApplicationContext(),
						"Erro..." + e.toString(), Toast.LENGTH_LONG).show();
			}
			return answer;
		}

		@Override
		protected void onPostExecute(String result) {
			ListDrwaer();
		}
	}

	public void accessWebService() {
		JsonReadTask task = new JsonReadTask();

		task.execute(new String[] { url });
	}

	public void ListDrwaer() {
		List<Map<String, String>> employeeList = new ArrayList<Map<String, String>>();

		try {
			JSONObject jsonRespnse = new JSONObject(jsonResult);
			JSONArray jsonMainNode = jsonRespnse.optJSONArray("emp_info");

			for (int i = 0; i < jsonMainNode.length(); i++) {
				JSONObject jsonChildNode = jsonMainNode.getJSONObject(i);
				String name = jsonChildNode.optString("employee name");
				String number = jsonChildNode.optString("employee no");
				String outPut = name + "-" + number;

				employeeList.add(createEmployee("employees", outPut));

			}
		} catch (JSONException e) {
			Toast.makeText(getApplicationContext(), "Erro..." + e.toString(),
					Toast.LENGTH_LONG).show();
		}

		SimpleAdapter simpleAdapter = new SimpleAdapter(this, employeeList,
				android.R.layout.simple_list_item_1,
				new String[] { "employees" }, new int[] { android.R.id.text1 });

		listView.setAdapter(simpleAdapter);
	}

	private HashMap<String, String> createEmployee(String name, String number) {
		HashMap<String, String> employeeNameNo = new HashMap<String, String>();
		employeeNameNo.put(name, number);
		return employeeNameNo;

	}

}