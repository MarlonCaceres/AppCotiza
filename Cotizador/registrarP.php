<?php 
require_once './Controlador/productosControlador.php';

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$categoria=$_POST['categorias'];
$detalle=$_POST['detalle'];

$imagen_foto=$_FILES['imagen']['name'];
$imagen_ruta=$_FILES['imagen']['tmp_name'];
$destino="./images/Productos/".$imagen_foto;

if($nombre==null||$precio==null||$cantidad==null||$categoria==null||$detalle==null||$imagen_foto==null){
	header('Location: producto.php?id=1');
}else{
	if ($categoria=="Seleccione"){
		header('Location: producto.php?id=2');
	}else{
		$productosCon= new productosControlador();
		copy($imagen_ruta, $destino);
		if($productosCon->insertarProducto($nombre,$precio,$cantidad,$detalle,$categoria,$destino)){
			echo 'Registro Correcto';
		}
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro OK</title>
</head>
<body>

</body>
</html>