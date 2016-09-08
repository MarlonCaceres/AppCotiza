<?php

require_once "./Datos/productosDatos.php";

class productosControlador
{
	
	function insertarProducto($nombre,$precio,$cantidad,$detalle,$Fkcategorias,$imagen)
	{
		$obj= new productosDatos;
		return $obj->insertarProducto($nombre,$precio,$cantidad,$detalle,$Fkcategorias,$imagen);
	}
}
?>