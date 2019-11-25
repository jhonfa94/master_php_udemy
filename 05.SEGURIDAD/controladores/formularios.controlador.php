<?php

class ControladorFormularios
{


	/* REGISTRAR USAURIO */
	public static function ctrRegistro()
	{

		/* Guardar Registro en la DB */
		if (isset($_POST["registroNombre"])) {

			if (
				preg_match('/^[a-zA-ZáéíóúñÑÁÉÍÓÚ ]+$/', $_POST["registroNombre"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
				preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroPassword"])
			) {
				# code...
				$tabla = "registros";

				$token = md5($_POST['registroNombre'] . '+' . $_POST['registroEmail']);

				$encriptarPassword = crypt($_POST['registroPassword'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


				$datos = array(
					'token' => $token,
					'nombre' => $_POST['registroNombre'],
					'email' => $_POST['registroEmail'],
					'password' => $encriptarPassword
				);

				//Envio la información al modelo para que la procese y retorne la respuesta
				$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

				return $respuesta;
			} else {
				$respuesta = "error";
				return $respuesta;
			}
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

			#Encriptamos el password para hacer la validación
			$encriptarPassword = crypt($_POST['ingresoPassword'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			if ($respuesta['email'] == $_POST["ingresoEmail"] && $respuesta['password'] == $encriptarPassword) {

				/* echo "<script>

						if ( window.history.replaceState ) {

							window.history.replaceState( null, null, window.location.href );

						}

						window.location ='index.php?pagina=inicio';

					</script>"; */
				# Se actualiza el campo de intentos_fallidos a cero 
				ModeloFormularios::mdlActualizarIntentosFallidos($tabla, 0, $respuesta['token']);

				$_SESSION['validarIngreso'] = ok;

				header("Location: inicio");
			} else {

				if ($respuesta['intentos_fallidos']  < 3) {

					$tabla = "registros";
					$intentos_fallidos = $respuesta['intentos_fallidos'] + 1;

					ModeloFormularios::mdlActualizarIntentosFallidos($tabla, $intentos_fallidos, $respuesta['token']);



					echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
				} else {
					echo '<div class="alert alert-warning">RECAPCHA Debes validar que no eres un robot</div>';
				}

				echo '<script>
	
							if ( window.history.replaceState ) {
	
								window.history.replaceState( null, null, window.location.href );
	
							}
	
						</script>';
			}

			/* echo "<pre>";
			var_dump($respuesta);
			echo "</pre>";
			 */
		}
	}

	/* ACTUALIZAR REGISTRO */
	public static function ctrActualizarRegistro()
	{

		

		/* validamos si viene una variable actualizar nombre */
		if (isset($_POST["actualizarNombre"])) {

			//VALIDAMOS QUE SE TENGA CORRECTAMENTE LOS DATOS DEL FORMULARIO
			if (
				preg_match('/^[a-zA-ZáéíóúñÑÁÉÍÓÚ ]+$/', $_POST["actualizarNombre"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["actualizarEmail"])
			) {

				#SELECCIONO EL USUARIO PARA DETERMINAR EL TOKEN QUE SE TIENE EN LA DB
				$usuario = ModeloFormularios::mdlSeleccionarRegistros('registros', 'token', $_POST['tokenUsuario']);

				$comparaToken = md5($usuario['nombre'] . '+' . $usuario['email']);

				# SI LOS TOKEN COINCIDEN
				if ($comparaToken == $_POST['tokenUsuario']) {
					if ($_POST['actualizarPassword'] != '') {

						//se valida los caracteres de la contraseña
						if (preg_match('/^[0-9a-zA-Z]+$/', $_POST["actualizarPassword"])) {

							$password = crypt($_POST['actualizarPassword'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
							
						}
					} else {
						$password = $_POST['passwordActual'];
					}

					$tabla = "registros";
					$datos = array(
						'token' => $_POST['tokenUsuario'],
						'nombre' => $_POST['actualizarNombre'],
						'email' => $_POST['actualizarEmail'],
						'password' => $password
					);

					//Envio la información al modelo para que la procese y retorne la respuesta
					$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
					return $respuesta;
				} else {
					$respuesta = "error";
					return $respuesta;
				}
			} else {
				$respuesta = "error";
				return $respuesta;
			}
		}
	}

	/* ELIMINAR REGISTRO */
	public function ctrEliminarRegistro()
	{

		if (isset($_POST["eliminarRegistro"])) {

			/* SELECCIONO EL USUARIO PARA DETERMINAR EL TOKEN QUE SE TIENE EN LA DB */
			$usuario = ModeloFormularios::mdlSeleccionarRegistros('registros', 'token', $_POST['eliminarRegistro']);

			$comparaToken = md5($usuario['nombre'] . '+' . $usuario['email']);

			if ($comparaToken == $_POST['eliminarRegistro']) {

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

					header("Location: inicio");
				}
			} else {
				# code...
			}
		}
	}
}
