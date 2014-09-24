package ph.com.melhorcaminho;

import java.util.ArrayList;
import java.util.List;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class NewUF extends Activity {

	// Progress Dialog
	private ProgressDialog pDialog;

	JSONParser jsonParser = new JSONParser();
	EditText inputNome;
	EditText inputSigla;
	EditText inputDesc;

	// url to create new product
	private static String url_create_uf = "http://melhorcaminho.url.ph/create_uf.php";

	// JSON Node nomes
	private static final String TAG_SUCCESS = "success";

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.add_uf);

		// Edit Text
		inputNome = (EditText) findViewById(R.id.inputNome);
		inputSigla = (EditText) findViewById(R.id.inputSigla);

		// Create button
		Button btnCreateUF = (Button) findViewById(R.id.btnCreateUF);

		// button click event
		btnCreateUF.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View view) {
				// creating new product in background thread
				new CreateNewUF().execute();
			}
		});
	}

	/**
	 * Background Async Task to Create new product
	 * */
	class CreateNewUF extends AsyncTask<String, String, String> {

		/**
		 * Before starting background thread Show Progress Dialog
		 * */
		@Override
		protected void onPreExecute() {
			super.onPreExecute();
			pDialog = new ProgressDialog(NewUF.this);
			pDialog.setMessage("Criando UF..");
			pDialog.setIndeterminate(false);
			pDialog.setCancelable(true);
			pDialog.show();
		}

		/**
		 * Creating product
		 * */
		protected String doInBackground(String... args) {
			String nome = inputNome.getText().toString();
			String sigla = inputSigla.getText().toString();

			// Building Parameters
			List<NameValuePair> params = new ArrayList<NameValuePair>();
			params.add(new BasicNameValuePair("nome", nome));
			params.add(new BasicNameValuePair("sigla", sigla));

			// getting JSON Object
			// Note that create product url accepts POST method
			JSONObject json = jsonParser.makeHttpRequest(url_create_uf,
					"POST", params);
			
			// check log cat fro response
			Log.d("Create Response", json.toString());

			// check for success tag
			try {
				int success = json.getInt(TAG_SUCCESS);

				if (success == 1) {
					// successfully created product
					Intent i = new Intent(getApplicationContext(), AllUFs.class);
					startActivity(i);
					
					// closing this screen
					finish();
				} else {
					// failed to create product
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
			// dismiss the dialog once done
			pDialog.dismiss();
		}

	}
}
