<?php 

require_once './Entidades/clientes.php';
require_once'./db_utilities.php';
require_once './conexion.php';

class clientesDatos
{
	
	function insertarCliente($nombre,$Empresa,$Cargo,$Direccion,$Correo,$Telefono,$Interes){
		$con = new conexion();
		$cn=$con->conectar();
		
		$cliente= new clientes();
		$cliente->nombre=$nombre;
		$cliente->Empresa=$Empresa;
		$cliente->Cargo=$Cargo;
		$cliente->Direccion=$Direccion;
		$cliente->Correo=$Correo;
		$cliente->Telefono=$Telefono;
		$cliente->Interes=$Interes;

		mysqli_select_db($cn,"dbexposicion");

		$sql="INSERT INTO clientes (Nombre,Empresa,CargoEmpresa,Correo,Telefono,Direccion,IdProducto) VALUES (
		'".$cliente->nombre."',
		'".$cliente->Empresa."',
		'".$cliente->Cargo."',
		'".$cliente->Direccion."',
		'".$cliente->Correo."',
		'".$cliente->Telefono."',
		'".$cliente->Interes."'
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