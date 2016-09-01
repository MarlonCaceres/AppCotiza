package com.systeltronik.cotizador;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;

/**
 * Created by User on 01/09/2016.
 */
public class Dispositivos extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    
    public void Seguir (View v){
        Intent ven= new Intent(this,Dispositivos.class);
        startActivity(ven);
    }
}
