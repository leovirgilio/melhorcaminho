package ph.url.appmelhorcaminho;

import java.text.Normalizer;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.Intent;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;


@SuppressLint("NewApi") public class MainActivity extends Activity{
	
	Button btnMoney;
//	Button btnTemp;
	EditText inputFrom;
	EditText inputTo;
	boolean b_IsConnect = isNetworkAvailable();
	
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		// Buttons
		btnMoney = (Button) findViewById(R.id.btnMoney);
//		btnTemp = (Button) findViewById(R.id.btnTemp);
		
		inputFrom = (EditText) findViewById(R.id.txtFrom);
		inputTo = (EditText) findViewById(R.id.txtTo);
		
	
		btnMoney.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View view) {
			
				
				Intent i = new Intent(getApplicationContext(), DijkstraMoney.class);
				
				if(b_IsConnect){
					i.putExtra("from", removerAcentos(inputFrom.getText().toString()));
					i.putExtra("to", removerAcentos(inputTo.getText().toString()));
					startActivity(i);
				}else{
		            AlertDialog.Builder dialog = new AlertDialog.Builder(this);
		            dialog.setTitle("MyException Occured");
		            dialog.setNeutralButton("Cool", null);
		            dialog.create().show();
				}
				
				
				
			}
		});
		
		
	

	}

	public static String removerAcentos(String str) {
	    return Normalizer.normalize(str, Normalizer.Form.NFD).replaceAll("[^\\p{ASCII}]", "");
	}
	
	

	private boolean isNetworkAvailable() {
	        ConnectivityManager connectivityManager = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);
	        NetworkInfo activeNetworkInfo = connectivityManager
	                .getActiveNetworkInfo();
	        return activeNetworkInfo != null;
	    }
}
