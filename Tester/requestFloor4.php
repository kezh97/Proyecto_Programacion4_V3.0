	<?php include 'header.php' ?>
	<?php include 'navHeader.php'; ?>
	<?php include 'navSide.php'; ?>

	<div id="wrapper-body">
		<h1>Piso 4: Laboratorios </h1>
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
					<option>LP-22</option>
					<option>SE-55</option>
					<option>WO-84</option>
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