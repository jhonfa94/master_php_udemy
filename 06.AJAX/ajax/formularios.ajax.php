<?php

require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";

/*=============================================
Clase de AJAX
=============================================*/

class AjaxFormularios{

	/*=============================================
	VALIDAR EMAIL EXISTENTE
	=============================================*/	
	public $validarEmail;

	public function ajaxValidarEmail(){

		$item = "email";
		$valor = $this->validarEmail;

		$respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
		
		echo json_encode($respuesta);
	}

	/*=============================================
	VALIDAR TOKEN EXISTENTE
	=============================================*/	
	public $validarToken;

	public function ajaxValidarToken(){

		$item = "token";
		$valor = $this->validarToken;

		$respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
		
		echo json_encode($respuesta);
	}

}

/*=============================================
Objeto de AJAX que recibe la variable POST
=============================================*/

if(isset($_POST["validarEmail"])){

	$valEmail = new AjaxFormularios();
	$valEmail -> validarEmail = $_POST["validarEmail"];
	$valEmail -> ajaxValidarEmail();

}

/*=============================================
Objeto de AJAX que recibe la variable POST
=============================================*/

if(isset($_POST["validarToken"])){

	$valToken = new AjaxFormularios();
	$valToken -> validarToken = $_POST["validarToken"];
	$valToken -> ajaxValidarToken();

}