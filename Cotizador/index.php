<?php
	require_once './db_utilities.php';
	require_once 'menu.php';
	$Servicios=AllServicios();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="centrar inicio">Registro Clientes</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4 col-xs-2"></div>
		<div class="col-md-6 col-xs-8 centrar">
			<form action="insertar.php" method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<label for="exampleInputEmail1">Nombre:</label>
						</div>
						<div class="col-md-5 col-xs-5">
							<input class="form-control" type="text" name="nombre" placeholder="Juan Zapata">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<label>Empresa:</label>
						</div>
						<div class="col-md-5 col-xs-5">
							<input class="form-control" type="text" name="empresa" placeholder="Systeltronik">
						</div>
					</div>				
				</div>
					
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<label>Cargo:</label>	
						</div>
						<div class="col-md-5 col-xs-5">
							<input class="form-control" type="text" name="cargo" placeholder="Director">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<label>Direccion:</label>	
						</div>
						<div class="col-md-5 col-xs-5">
							<input class="form-control" type="text" name="direccion" placeholder="Av. 6 de Diciembre">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<label>Correo:</label>
						</div>
						<div class="col-md-5 col-xs-5">
							<input class="form-control" type="text" name="correo" placeholder="systeltronik@gmail.com">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<label>Telefono:</label>
						</div>
						<div class="col-md-5 col-xs-5">
							<input class="form-control" type="text" name="telefono" placeholder="098 555 5555">
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-3">
							<label>Producto Interes:</label>
						</div>
						<div class="col-md-5 col-xs-5">
							<select name="Pinteres" class="form-control">
								<option value="0">Seleccione</option>
								<?php while ($Servicio=$Servicios->fetch_assoc()){

								?>
								<option value="<?php echo $Servicio['Id'] ?>"><?php echo $Servicio['Nombre']?></option>
								<?php }
								?>
							</select>
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<input type="submit" class="btn btn-default" value="Registar">
						</div>
					</div>				
				</div>
			</form>
		</div>
		<div class="col-md-3 col-xs-2"></div>
	 </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>