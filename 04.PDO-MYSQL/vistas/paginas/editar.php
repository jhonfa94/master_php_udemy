<?php

if (isset($_GET['id'])) {


	$item = "id";
	$valor = $_GET['id'];

	$usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
	/* echo "<pre>";
	var_dump($usuario);
	echo "</pre>"; */
}


?>
<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">

			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?= $usuario['nombre'] ?>" id="nombre" placeholder="Escriba su nombre" name="actualizarNombre">

			</div>

		</div>

		<div class="form-group">


			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="email" class="form-control" value="<?= $usuario['email'] ?>" id="email" placeholder="Escriba su email" name="actualizarEmail">

			</div>

		</div>

		<div class="form-group">

			<div class="input-group">

				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="password" class="form-control" id="pwd" placeholder="Escriba su contraseña" name="passwordActual">

				<input type="hidden" name="actualizarPassword" value="<?= $usuario['password'] ?>">
				<input type="hidden" name="idUsuario" value="<?= $usuario['id'] ?>">

			</div>

		</div>

		<?php
			$actualizar = ControladorFormularios::ctrActualizarRegistro();
			if ($actualizar == 'ok') {
				echo "<script>

				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}

				setTimeout(() => {
					window.location ='index.php?pagina=inicio'
				}, 3000);

				</script>";
				echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';
				

			} 
			
		?>

		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>

</div>