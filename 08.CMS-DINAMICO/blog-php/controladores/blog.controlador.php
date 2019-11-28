<?php

class ControladorBlog
{ 

    /* Mostrar contenido tabla blog */
    public static function ctrMostrarBlog(){

        $tabla = "blog";

        $respuesta = ModeloBlog::mdlMostrarblog($tabla);
        
        
        return $respuesta;

    }

}
