package com.systeltronik.cotizador;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by User on 31/08/2016.
 */
public class DBHelper extends SQLiteOpenHelper {
    public DBHelper(Context context, String name, SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("create table usuarios(Id integer primary key autoincrement, Nombres text not null, Apellidos text not null," +
                " Cedula text not null, Telefono text not null, Direccion text not null, Usuario text not null, Contrasenia text not null)");
        db.execSQL("insert into usuarios values (null,'MR','CA','1717171717','1234567890','VVicentina','admin','admin')");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("create table usuarios(Id integer primary key autoincrement, Nombres text not null, Apellidos text not null," +
                " Cedula text not null, Telefono text not null, Direccion text not null, Usuario text not null, Contrasenia text not null)");
        db.execSQL("insert into usuarios values (null,'MR','CA','1717171717','1234567890','VVicentina','admin','admin')");
    }
}
