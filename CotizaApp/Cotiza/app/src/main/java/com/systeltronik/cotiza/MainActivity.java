package com.systeltronik.cotiza;


import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity{
    int id=1;
    //Button iniciar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        /*iniciar= (Button) findViewById(R.id.buttonIniciar);

        iniciar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(MainActivity.this, dispositivos.class);
                //i.putExtra("id",id);
                startActivity(i);
            }
        });*/
    }

    public void Iniciar(View v){
        Intent i = new Intent(this, dispositivos.class);
        //i.putExtra("id",id);
        startActivity(i);
    }
}
