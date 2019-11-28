<?php

class ControladorBlog
{ 

    /* Mostrar contenido tabla blog */
    public static function ctrMostrarBlog(){

        $tabla = "blog";

        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);
        
        
        return $respuesta;

    }

    /* Mostrar contenido tabla blog */
    public static function ctrMostrarCategorias(){

        $tabla = "categorias";

        $respuesta = ModeloBlog::mdlMostrarCategorias($tabla);
        
        
        return $respuesta;

    }

}
