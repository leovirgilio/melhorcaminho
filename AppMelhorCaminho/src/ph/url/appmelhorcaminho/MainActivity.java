package ph.url.appmelhorcaminho;

import java.text.Normalizer;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.app.AlertDialog;
import android.app.AlertDialog.Builder;
import android.content.ComponentName;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.Bundle;
import android.provider.Settings;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

@SuppressLint("NewApi")
public class MainActivity extends Activity {

	Button btnMoney;
	// Button btnTemp;
	EditText inputFrom;
	EditText inputTo;
	AlertDialog alerta;


	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);

		// Buttons
		btnMoney = (Button) findViewById(R.id.btnMoney);
		// btnTemp = (Button) findViewById(R.id.btnTemp);

		inputFrom = (EditText) findViewById(R.id.txtFrom);
		inputTo = (EditText) findViewById(R.id.txtTo);

		btnMoney.setOnClickListener(new View.OnClickListener() {

			@Override
			public void onClick(View view) {

				Intent i = new Intent(getApplicationContext(),
						DijkstraMoney.class);

				i.putExtra("from", removerAcentos(inputFrom.getText()
						.toString()));
				i.putExtra("to", removerAcentos(inputTo.getText().toString()));
				Log.d(inputFrom.getText().toString(), "From");
				Log.d(inputTo.getText().toString(), "To");
				startActivity(i);

			}

		});

	}


	public static String removerAcentos(String str) {
		return Normalizer.normalize(str, Normalizer.Form.NFD).replaceAll(
				"[^\\p{ASCII}]", "");
	}
}
