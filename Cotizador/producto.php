<?php
	require_once 'menu.php';
	require_once 'db_utilities.php';

	$categorias=AllCategoria();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="centrar inicio">Registro Producto</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4 col-xs-2"></div>
		<div class="col-md-6 col-xs-8 centrar">
			<form action="registrarP.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label for="exampleInputEmail1">Nombre:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="nombre" placeholder="Control inalambrico dimmer">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Precio:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="precio" placeholder="30.50">
						</div>
					</div>				
				</div>
					
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Cantidad:</label>	
						</div>
						<div class="col-md-5 col-xs-2">
							<input class="form-control" type="text" name="cantidad" placeholder="20">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Imagen:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<input type="file" name="imagen">
						</div>
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Categoria:</label>
						</div>
						<div class="col-md-5 col-xs-2">
							<select name="categorias" class="form-control">
					          <option>Seleccione</option>
					          <?php
								while($categoria = $categorias -> fetch_assoc()){
							  ?>
							  <option value='<?php echo $categoria['Id']?>'>
							  	<?php echo $categoria['Categoria'];?>
							  </option>
							  <?php }?>
					        </select>
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-3 col-xs-2">
							<label>Detalle:</label>	
						</div>
						<div class="col-md-5 col-xs-2">
							<textarea class="form-control" rows="5" name="detalle" placeholder="Sensor que permite el control. "></textarea>
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