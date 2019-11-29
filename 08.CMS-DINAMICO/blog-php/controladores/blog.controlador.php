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

    /* MOSTRAR ARTICULOS Y CATEGORIAS CON INNER JOIN */
    public static function ctrMostrarConInnerJoin(){

        $tabla1 = "categorias";
        $tabla2 = "articulos";

        $respuesta = ModeloBlog::mdlMostrarConInnerJoin($tabla1,$tabla2);

        return $respuesta;


    }

}
