<?php
#CONTROLADOR PLANTILLA
require_once 'controladores/platilla.controlador.php';

#CONTROLADOR Y MODELO BLOG
require_once 'controladores/blog.controlador.php';
require_once 'modelos/blog.modelo.php';

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();


