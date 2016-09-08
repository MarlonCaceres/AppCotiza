<?php 
require_once 'db_utilities.php';
require_once './Controlador/clienteControlador.php';

$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$cargo=$_POST['cargo'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$interes=$_POST['Pinteres'];

if($nombre==null||$empresa==null||$cargo==null||$direccion==null||$correo==null||$telefono==null||$interes==null){
	header('Location: index.php?error=1');
}else{
	switch ($interes) {
		case '1':
			$clienteCon= new clienteControlador();
			if ($clienteCon->insertarCliente($nombre,$empresa,$cargo,$direccion,$correo,$telefono,$interes)){
				header('Location: cotizar.php?id=1');	
			}else{
				echo 'error';
			}
			
			break;
		case '2':
			$clienteCon= new clienteControlador();
			if ($clienteCon->insertarCliente($nombre,$empresa,$cargo,$correo,$telefono,$direccion,$interes)){
				header('Location: cotizar.php?id=2');	
			}else{
				echo 'error';
			}
			break;
		case '3':
			$clienteCon= new clienteControlador();
			if ($clienteCon->insertarCliente($nombre,$empresa,$cargo,$correo,$telefono,$direccion,$interes)){
				header('Location: cotizar.php?id=3');	
			}else{
				echo 'error';
			}
			break;
		default:
			header('Location: index.php?error=2');
			break;
	}
}

 ?>
