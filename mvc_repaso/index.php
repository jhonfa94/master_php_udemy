<?php 

# Llamo al controlador para visalizar el template
require_once 'controllers/controller.template.php';
require_once 'controllers/controller.formulario.php';

//instancio la clase para luego llamar al metodo de mostrar template
$template = new ctrTemplate();
$template->mostrarTemplate();





