<?php 

    class Conexion{

        public static function conectar(){
            $link = new PDO("mysql:host=localhost;dbname=blog-php",
                        "root",
                        "root"
            );

            $link->exec("set name utf8");
            
            return $link;

        }
        
    }
