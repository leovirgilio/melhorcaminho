package ph.com.melhorcaminho;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends Activity {

	Button btnVerUF;
	Button btnNovoUF;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);

		setContentView(R.layout.activity_main);

		btnVerUF = (Button) findViewById(R.id.btnVerUF);
		btnNovoUF = (Button) findViewById(R.id.btnNovoUF);

		btnVerUF.setOnClickListener(new View.OnClickListener() {
			
			@Override
			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				Intent i = new Intent (getApplicationContext(), AllUFs.class);
				startActivity(i);
			}
		});
		
        btnNovoUF.setOnClickListener(new View.OnClickListener() {
        	 
            @Override
            public void onClick(View view) {
                // Launching create new product activity
                Intent i = new Intent(getApplicationContext(), NewUF.class);
                startActivity(i);
 
            }
        });
	}
}
