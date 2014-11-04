package ph.url.appmelhorcaminho;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;


public class MainActivity extends Activity{
	
	Button btnMoney;
	Button btnTemp;
	EditText inputFrom;
	EditText inputTo;
	
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		// Buttons
		btnMoney = (Button) findViewById(R.id.btnMoney);
		btnTemp = (Button) findViewById(R.id.btnTemp);
		
		inputFrom = (EditText) findViewById(R.id.txtFrom);
		inputTo = (EditText) findViewById(R.id.txtTo);
	
		btnMoney.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View view) {
			
				
				Intent i = new Intent(getApplicationContext(), DijkstraMoney.class);
				
				i.putExtra("from", inputFrom.getText().toString());
				i.putExtra("to", inputTo.getText().toString());
				startActivity(i);
				
			}
		});
		
	
		btnTemp.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View view) {
			
				Intent i = new Intent(getApplicationContext(), DijkstraMoney.class);
				startActivity(i);
				
			}
		});
	}
}
