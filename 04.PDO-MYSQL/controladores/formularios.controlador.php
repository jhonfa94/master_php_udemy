<?php

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/

	public static function ctrRegistro(){

		/* Guardar Registro en la DB */
		if(isset($_POST["registroNombre"])){

			$tabla = "registros";
			$datos = array(	'nombre'=>$_POST['registroNombre'],
						    'email'=>$_POST['registroEmail'],
							'password'=>$_POST['registroPassword']    
			);

			//Envio la información al modelo para que la procese y retorne la respuesta
			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);

			return $respuesta;        
		}
		
	}

	/* Seleccionar Registros */
	public static function ctrSeleccionarRegistros(){
		$tabla = "registros";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla);
		
		return $respuesta;



	}


}