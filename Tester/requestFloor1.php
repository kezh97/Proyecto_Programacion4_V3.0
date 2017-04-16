<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://use.fontawesome.com/27a20b4327.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		#wrapper-body{
			margin-left: 270px;
			margin-right: 10px;
			padding: 5px 5px;
			height: 600px;
		}

		#contenedor img{
			width: 720px;
			height: 450px;
		}

		.border{
			border: 1px solid black;
		}

		#content{
			height: 500px;
		}

		.divider{
			height: 10px;
			border: 0;
			box-shadow: 0 10px 10px -10px #8c8b8b inset;
		}

	</style>
</head>
<body>
	<?php include 'navHeader.php'; ?>
	<?php include 'navSide.php'; ?>

	<div id="wrapper-body">
		<h1>Piso 1: Laboratorios </h1>
		<hr class="divider">
		<div class="row" id="content">
			<h1 style="font-size: 40px;"></h1>
			<div class="col-md-5" id="contenedor">
				<img src="img/Laboratorio1.png">
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-4">
				<p>Día de solicitud: <input type="text" id="datepicker" class="form-control"></p>
				<p>Aula: <select class="form-control">
					<option>IS-21</option>
					<option>SS-55</option>
					<option>PO-44</option>
				</select>
				</p>
				<p>Turno: <select class="form-control">
					<option>1 (9am - 12pm)</option>
					<option>2 (12:30pm - 3:00pm)</option>
					<option>3 (3:30pm - 6:00pm)</option>
					<option>4 (6:30pm - 9:30pm)</option>
				</select>	
				</p>
				<div class="form-group" style="text-align: center;">
					<button type="button" class="btn btn-primary">Solicitar aula</button>
				</div>
				
			</div>
		</div>
		
		
	</div>

	<script>
  	$( function() {
    	$( "#datepicker" ).datepicker();
  	});
  </script>
</body>
</html>