<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Comprar</title>
</head>
<body>
	<div style="background-color:rgb(247,249,249)">
	<div class="container">
		<br>
		<div class="row">
			<center><h2>Estas a un paso de tener tu producto</h2>
			<hr>
			<font color="red"><h4>Ingresa tus datos y un asesor se hará cargo de tu compra.</h4></font></center>
		</div>
        <br>
		<div class="mb-5">
			<?php echo form_open('Controlcomprar/agregar', ['id' => 'form-modelcomprar']); ?>  
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">Tipo de Producto</label>
						<input type="text" name="tipoproducto" class="form-control" required placeholder="Consola - Juego" id="tipoproducto">
					</div>

					<div class="form-group col-8">
						<label for="">Nombre de producto</label>
						<input type="text" name="nproducto" class="form-control" required placeholder="...PlayStation4" id="nproducto">
					</div>

					<div class="form-group col-4">
						<label for="">Tipo de Pago</label>
						<input type="text" name="tipopago" class="form-control" required placeholder="Tarjeta - Efectivo" id="tipopago">
					</div>
					<div class="form-group col-4">
						<label for="">Tu Nombre completo</label>
						<input type="text" name="name" class="form-control" required placeholder="Nombre Cliente " id="name">
					</div>
					<div class="form-group col-4">
						<label for="">Numero de Contaco</label>
						<input type="text" name="contacto" class="form-control" required placeholder="Celular - Telefono" id="contacto">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block">REGISTRAR COMPRA</button>
			<?php echo form_close(); ?>
		</div>

		<div class="row">
			<div class="card col 12">
				<div class="card-header">
					<center><h4>COMPRAS</h4></center>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Tipo de Producto</th>
								<th scope="col">Nombre de Producto</th>
								<th scope="col">Tipo de Pago</th>
								<th scope="col">Nombre</th>
								<th scope="col">Telefono</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$count = 0;
								foreach ($botoncompra as $modelcomprar){
									echo '
										<tr>
											<td>'.++$count.'</td>
											<td>'.$modelcomprar->tipoproducto.'</td>
											<td>'.$modelcomprar->nproducto.'</td>
											<td>'.$modelcomprar->tipopago.'</td>
											<td>'.$modelcomprar->name.'</td>
                                            <td>'.$modelcomprar->contacto.'</td>
											<td><button type="button" class="btn btn-info text-white" onclick="llenar_datos('.$modelcomprar->id.', `'.$modelcomprar->tipoproducto.'`,`'.$modelcomprar->nproducto.'`, `'.$modelcomprar->tipopago.'`, `'.$modelcomprar->name.'`, `'.$modelcomprar->contacto.'`)">Editar</button></td>
											<td><a href="'.base_url('Controlcomprar/eliminar/'.$modelcomprar->id).'" type="button" class="btn btn-danger">Eliminar</a></td>
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
		let url= "<?php echo base_url('Controlcomprar/editar'); ?>";
		const llenar_datos = (id, tipoproducto, nproducto, tipopago, name, contacto) => {
			let path = url+"/"+id;
			document.getElementById('form-modelcomprar').setAttribute('action', path);
			document.getElementById('tipoproducto').value = tipoproducto;
			document.getElementById('nproducto').value = nproducto;
			document.getElementById('tipopago').value = tipopago;
			document.getElementById('name').value = name;
			document.getElementById('contacto').value = contacto;
		};
	</script>
</body>
</html>