<?php
	require_once './db_utilities.php';
	require_once 'menu.php';
	$productos=AllProductos();
	$clientes=AllClientes();
	/*while($producto = $productos -> fetch_assoc()){
		echo $producto['Nombre'];
	}*/

	if($_POST){
		$usuario=$_POST['usuarios'];
		echo $usuario;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cotizar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="row">
	<div class="col-md-4 col-xs-4"></div>
	<div class="col-md-4 col-xs-4 centrar">
	<br>
	<span class="btn btn-lg" > Seleccione un Cliente</span>
		<select name="usuarios" class="form-control">
		  <option>Seleccione</option>
		  <?php
			while($cliente = $clientes -> fetch_assoc()){
		  ?>
		    <option value='<?php echo $cliente['Id']?>'>
		    	<?php echo $cliente['Nombre'];?>
		    </option>
		  <?php }?>
		</select>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-2 col-xs-2 ">
		
	</div>
	<div class="col-md-8 col-xs-8">
		<div class="row">
			<div class="col-md-2">
				<span class="btn btn-lg" >Cliente: </span>
			</div>
			<div class="col-md-3">
				<label class="form-control" type="text" name="Usuario" disabled>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<span class="btn btn-lg" >Fecha: </span>
			</div>
			<div class="col-md-3">
				<label class="form-control" type="text" name="Usuario" disabled>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<span class="btn btn-lg" >Direccion: </span>
			</div>
			<div class="col-md-3">
				<label class="form-control" type="text" name="Usuario" disabled>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<span class="btn btn-lg" >Telefono: </span>
			</div>
			<div class="col-md-3">
				<label class="form-control" type="text" name="Usuario" disabled>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<span class="btn btn-lg" >Correo: </span>
			</div>
			<div class="col-md-5">
				<label class="form-control" type="text" name="Usuario" disabled>
			</div>
		</div>
		<hr>
	</div>
	<div class="col-md-2 col-xs-2">
		
	</div>
</div>
<div class="row">
	<div class="col-md-2 col-xs-2"></div>
	<div class="col-md-8 col-xs-8 ">
		<div class="row">
			<div class="col-md-1">
				<input type="text" name="cantidad">
			</div>
		</div>
	</div>
	<div class="col-md-2 col-xs-2"></div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>