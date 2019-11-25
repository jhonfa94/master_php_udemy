<?php 

	if (!isset($_SESSION['validarIngreso'])) {
		
		header("Location: registro");		
		
	}else{

		if ($_SESSION['validarIngreso']!= "ok") {
			
			//echo "<script>window.location='index.php?pagina=registro'</script>";
			header("Location: registro");
		
		}
		
	}

	$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null,null);
	/* echo "<pre>";
	var_dump($usuarios);
	echo "</pre>"; */

	



?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($usuarios as $key => $value):?>
		<tr>
			<td> <?=($key+1)?> </td>
			<td> <?=$value['nombre']?> </td>
			<td> <?=$value['email']?> </td>
			<td> <?=$value['fecha']?> </td>
		
			<td>
				<div class="btn-group">
					<div class="p-1">
						<a href="index.php?pagina=editar&token=<?=$value['token']?>" class="btn btn-warning ">
							<i class="fas fa-pencil-alt"></i>
						</a>
					</div>

					<div class="p-1">
						<form method="post">
							<input type="hidden" value="<?=$value['token']?>" name="eliminarRegistro">
							<button type="submit" href="index.php?pagina=editar" class="btn btn-danger ">
								<i class="fas fa-trash-alt"></i>
							</button>
						</form>

						<?php 
							$eliminar = new ControladorFormularios();
							$eliminar->ctrEliminarRegistro();
						
						?>


					</div>

				</div>
			</td>
		</tr>
		<?php endforeach?>
		
	</tbody>
</table>