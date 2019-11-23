<?php

class ControladorFormularios
{


	/* REGISTRAR USAURIO */
	public static function ctrRegistro()
	{

		/* Guardar Registro en la DB */
		if (isset($_POST["registroNombre"])) {

			$tabla = "registros";
			$datos = array(
				'nombre' => $_POST['registroNombre'],
				'email' => $_POST['registroEmail'],
				'password' => $_POST['registroPassword']
			);

			//Envio la información al modelo para que la procese y retorne la respuesta
			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;
		}
	}

	/* SELECCIONAR REGISTRO */
	public static function ctrSeleccionarRegistros($item, $valor)
	{
		$tabla = "registros";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;
	}

	/* INGRESAR AL SISTEMA */
	public function ctrIngreso()
	{
		if (isset($_POST["ingresoEmail"])) {

			$tabla = "registros";
			$item = "email";
			$valor = $_POST['ingresoEmail'];


			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

			if ($respuesta['email'] == $_POST["ingresoEmail"] && $respuesta['password'] == $_POST["ingresoPassword"]) {

				/* echo "<script>

						if ( window.history.replaceState ) {

							window.history.replaceState( null, null, window.location.href );

						}

						window.location ='index.php?pagina=inicio';

					</script>"; */

				$_SESSION['validarIngreso'] = ok;

				header("Location: index.php?pagina=inicio");
			} else {
				echo '<script>

						if ( window.history.replaceState ) {

							window.history.replaceState( null, null, window.location.href );

						}

					</script>';

				echo '<div class="alert alert-danger">Erro al ingresar al sistema, el email o la contraseña no coincide</div>';
			}

			/* echo "<pre>";
			var_dump($respuesta);
			echo "</pre>";
			 */
		}
	}

	/* ACTUALIZAR REGISTRO */
	public static function ctrActualizarRegistro()	{

		/* validamos si viene una variable actualizar nombre */
		if (isset($_POST["actualizarNombre"])) {

			if ($_POST['actualizarPassword'] != '') {
				$password = $_POST['actualizarPassword'];
			} else {
				$password = $_POST['passwordActual'];
			}

			$tabla = "registros";
			$datos = array(
				'id' => $_POST['idUsuario'],
				'nombre' => $_POST['actualizarNombre'],
				'email' => $_POST['actualizarEmail'],
				'password' => $password
			);

			//Envio la información al modelo para que la procese y retorne la respuesta
			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
			return $respuesta;
		}
	}

	/* ELIMINAR REGISTRO */
	public function ctrEliminarRegistro()
	{

		if (isset($_POST["eliminarRegistro"])) {

			$tabla = "registros";
			$valor = $_POST['eliminarRegistro'];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

			if ($respuesta == 'ok') {
				/* echo "<script>

						if ( window.history.replaceState ) {

							window.history.replaceState( null, null, window.location.href );

						}

						window.location ='index.php?pagina=inicio';

					</script>"; */

				header("Location: index.php?pagina=inicio");
			}
		}
	}
}
