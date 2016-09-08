<?php 
require_once('db_credentials.php');

$conexion= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$resultado='';

if ($conexion->connect_errno)
{
	echo 'Error en la conexion';
	exit;
}

function AllCategoria(){
	global $conexion,$resultado;
	$sql='SELECT * FROM categorias';
	return $conexion->query($sql);
}

function AllServicios(){
	global $conexion,$resultado;
	$sql='SELECT * FROM productoespecial';
	return $conexion->query($sql);
}

function AllClientes(){
	global $conexion,$resultado;
	$sql='SELECT * FROM clientes';
	return $conexion->query($sql);	
}

function ver_Nombre($nombre)
{
	global $conexion, $resultado;
	$sql = "SELECT * FROM productos WHERE nombre_producto LIKE '%{$nombre}%' AND Cantidad>=1";
	return $conexion-> query($sql);
}

function AllProductos(){
	global $conexion, $resultado;
	$sql = "SELECT * FROM productos";
	return $conexion-> query($sql);	
}

function actualizar($id,$detalle,$tipo,$precio,$cantidad,$imagen)
{
	global $conexion,$resultado;
	$sql="UPDATE productos SET Detalle = '{$detalle}', Tipo_producto= '{$tipo}', Precio_producto='{$precio}', Cantidad='{$cantidad}', Imagen='{$imagen}' WHERE Id = {$id}";
	$conexion->query($sql);
}



function IngresarCliente($nombre, $Empresa, $CargoEmpresa, $Correo, $Telefono, $Direccion, $IdProductoInteres){
	global $conexion, $resultado;
	$sql="INSERT INTO clientes (Nombre,Empresa,CargoEmpresa,Correo,Telefono,Direccion,IdProducto) VALUES ($nombre, $Empresa, $CargoEmpresa, $Correo, $Telefono, $Direccion, $IdProductoInteres)";
	$conexion->query($sql);
}

function ver_Id( $id )
{
	global $conexion;
	$sql="SELECT * FROM productos WHERE Id={$id}";
	$resultado = $conexion->query($sql);	
	if($resultado ->num_rows)
		return $resultado->fetch_assoc();
	return $resultado;
}

function compra($id,$cantidad)
{
	global $conexion;
	$prod=ver_Id($id);
	$cant= $prod['Cantidad']-$cantidad;
	$sql="UPDATE productos SET Cantidad='{$cant}' WHERE Id={$id}";
	$conexion->query($sql);
}
 ?>

