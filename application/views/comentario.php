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
			<center><h2>Dejanos tus comentarios</h2>
			<hr>
			<font color="blue"><h4>Cada día estamos mejorando, para ofrecerte los mejores productos.</h4></font></center>
		</div>
		<br>
		<div class="mb-5">
			<?php echo form_open('coment/agregar', ['id' => 'form-comenta']); ?>  
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Nombre Completo</label>
						<input type="text" name="nombre" class="form-control" required placeholder="Nombre Completo" id="nombre">
					</div>

					<div class="form-group col-sm-4">
						<label for="">Celular</label>
						<input type="text" name="celular" class="form-control" required placeholder="Celular" id="celular">
					</div>

					<div class="form-group col-sm-4">
						<label for="">Correo</label>
						<input type="mail" name="correo" class="form-control" required placeholder="Correo" id="correo">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12" >
						<label for="">Comentarios</label>
						<input type="text" name="opinion" class="form-control" required id="Opinion" >
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Guardar</button>
			<?php echo form_close(); ?>
		</div>

		<div class="row">
			<div class="card col 12">
				<div class="card-header">
					<center><h4>COMENTARIOS</h4></center>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Celular</th>
								<th scope="col">Correo</th>
								<th scope="col">Comentarios</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$count = 0;
								foreach ($comentarios as $comenta){
									echo '
										<tr>
											<td>'.++$count.'</td>
											<td>'.$comenta->nombre.'</td>
											<td>'.$comenta->celular.'</td>
											<td>'.$comenta->correo.'</td>
											<td>'.$comenta->opinion.'</td>
											<td><button type="button" class="btn btn-info text-white" onclick="llenar_datos('.$comenta->id.', `'.$comenta->nombre.'`,`'.$comenta->celular.'`, `'.$comenta->correo.'`, `'.$comenta->opinion.'`)">Editar</button></td>
											<td><a href="'.base_url('coment/eliminar/'.$comenta->id).'" type="button" class="btn btn-danger">Eliminar</a></td>
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
		let url= "<?php echo base_url('coment/editar'); ?>";
		const llenar_datos = (id, nombre, celular, correo, opinion) => {
			let path = url+"/"+id;
			document.getElementById('form-comenta').setAttribute('action', path);
			document.getElementById('nombre').value = nombre;
			document.getElementById('celular').value = celular;
			document.getElementById('correo').value = correo;
			document.getElementById('opinion').value = opinion;
		};
	</script>
</body>
</html>