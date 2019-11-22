<?php 
	$usuarios = ControladorFormularios::ctrSeleccionarRegistros();
	/* echo "<pre>";
	var_dump($usuarios);
	echo "</pre>"; */
?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($usuarios as $key => $value):?>
		<tr>
			<td> <?=$value['nombre']?> </td>
			<td> <?=$value['email']?> </td>
			<td> <?=$value['fecha']?> </td>
		
			<td>
				<div class="btn-group">
					<button class="btn btn-warning ">
					 	<i class="fas fa-pencil-alt"></i>
					</button>
					<button class="btn btn-danger ">
						<i class="fas fa-trash-alt"></i>
					</button>
				</div>
			</td>
		</tr>
		<?php endforeach?>
		
	</tbody>
</table>