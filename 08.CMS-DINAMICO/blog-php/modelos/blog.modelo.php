<?php
require_once 'conexion.php';

class ModeloBlog
{ 
    public static function mdlMostrarblog($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt = NULL;


    }
}
