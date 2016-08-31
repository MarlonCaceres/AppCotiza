package com.systeltronik.cotizador;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText user,pass;
    private Cursor fila;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        user= (EditText) findViewById(R.id.txtUser);
        pass= (EditText) findViewById(R.id.txtPass);
    }

    public void Ingresar(View v){
        DBHelper admin= new DBHelper(this, "user", (SQLiteDatabase.CursorFactory) this, 1);
        SQLiteDatabase db= admin.getWritableDatabase();

        String name=user.getText().toString();
        String pw=pass.getText().toString();

        if (name==null && pass==null){

        }

        fila= db.rawQuery("SELECT Usuario,Contrasenia FROM ? Where Usuario= ? and Contrasenia= ?", new String[]{name,pw});
        while(fila.moveToFirst()==true){
            String usuario=fila.getString(0);
            String contrasenia=fila.getString(1);
            if(name.equals(usuario) && pw.equals(contrasenia)){
                Intent cotizacion=new Intent (this, Cotizacion.class);
                startActivity(cotizacion);
                user.setText("");
                pass.setText("");
            }else{
                Toast mensaje =Toast.makeText(getApplicationContext(),"Usuario o Contraseña Incorrecta.", Toast.LENGTH_SHORT );
                mensaje.show();
            }

        }
    }

    public void Salir(View v){
        finish();
    }

    public void Seguir (View v){
        Intent ven= new Intent(this,Cotizacion.class);
        startActivity(ven);
    }
}
