<?php 

require_once'./Entidades/productos.php';
require_once'./db_utilities.php';
require_once './conexion.php';

class productosDatos
{
	
	function insertarProducto($nombre,$precio,$cantidad,$detalle,$Fkcategorias,$imagen){
		$con = new conexion();
		$cn=$con->conectar();
		
		$producto= new productos();
		$producto->nombre=$nombre;
		$producto->Precio=$precio;
		$producto->Cantidad=$cantidad;
		$producto->Detalle=$detalle;
		$producto->Categoria=$Fkcategorias;
		$producto->Imagen=$imagen;

		mysqli_select_db($cn,"dbexposicion");

		$sql="INSERT INTO productos (Nombre,Precio,Cantidad,Detalles,IdCategoria,Imagen) VALUES (
		'".$producto->nombre."',
		'".$producto->Precio."',
		'".$producto->Cantidad."',
		'".$producto->Detalle."',
		'".$producto->Categoria."',
		'".$producto->Imagen."'
		)";

		if(mysqli_query($cn,$sql))
		{
			return true;
		}else{
			return false;
		}
		mysqli_close($cn);
		
	}
}

?>