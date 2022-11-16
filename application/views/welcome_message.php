<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>ANSCAR</title>
</head>
<body>
	<div style="background-color:rgb(247,249,249)">
	<div class="container">
		<br>
		<div class="row">
			<center><h2>Registra tus datos</h2>
			<hr>
			<h2 style="color:red"> Nos pondremos en contacto contigo.</h2></center>
		</div>
		<br>
		<div class="mb-5">
			<?php echo form_open('welcome/agregar', ['id' => 'form-persona']); ?>  
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Nombre</label>
						<input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
					</div>

					<div class="form-group col-sm-4">
						<label for="">Primer Apellido</label>
						<input type="text" name="primerapellido" class="form-control" required placeholder="Primer Apellido" id="primerapellido">
					</div>

					<div class="form-group col-sm-4">
						<label for="">Segundo Apellido</label>
						<input type="text" name="segundoapellido" class="form-control" required placeholder="Segundo Apellido" id="segundoapellido">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Fecha de Nacimiento</label>
						<input type="date" name="fechanacimiento" class="form-control" required id="fechanacimiento">
					</div>
					<div class="form-group col-sm-4">
						<label for="">Genero</label>
						<input type="text" name="genero" class="form-control" required placeholder="Femenino - Masculino" id="genero">
					</div>
					<div class="form-group col-sm-4">
						<label for="">Celular</label>
						<input type="text" name="celular" class="form-control" required placeholder="Celular" id="celular">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Guardar</button>
			<?php echo form_close(); ?>
		</div>

		<div class="row">
			<div class="card col 12">
				<div class="card-header">
					<center><h4>CONTACTOS</h4></center>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Fecha de Nacimiento</th>
								<th scope="col">Genero</th>
								<th scope="col">Celular</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$count = 0;
								foreach ($personas as $persona){
									echo '
										<tr>
											<td>'.++$count.'</td>
											<td>'.$persona->nombre.' '.$persona->primerapellido.' '.$persona->segundoapellido.'</td>
											<td>'.$persona->fechanacimiento.'</td>
											<td>'.$persona->genero.'</td>
											<td>'.$persona->celular.'</td>
											<td><button type="button" class="btn btn-info text-white" onclick="llenar_datos('.$persona->id.', `'.$persona->nombre.'`,`'.$persona->primerapellido.'`, `'.$persona->segundoapellido.'`, `'.$persona->fechanacimiento.'`, `'.$persona->genero.'`,`'.$persona->celular.'`,)">Editar</button></td>
											<td><a href="'.base_url('welcome/eliminar/'.$persona->id).'" type="button" class="btn btn-danger">Eliminar</a></td>
										</tr>
									';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	<script>
		let url= "<?php echo base_url('welcome/editar'); ?>";
		const llenar_datos = (id, nombre, primerapellido, segundoapellido, fechanacimiento, genero, celular) => {
			let path = url+"/"+id;
			document.getElementById('form-persona').setAttribute('action', path);
			document.getElementById('nombre').value = nombre;
			document.getElementById('primerapellido').value = primerapellido;
			document.getElementById('segundoapellido').value = segundoapellido;
			document.getElementById('fechanacimiento').value = fechanacimiento;
			document.getElementById('genero').value = genero;
			document.getElementById('celular').value = celular;
		};
	</script>
</body>
</html>