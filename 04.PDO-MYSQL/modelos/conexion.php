<?php 

    class Conexion{

        static public function conectar(){
            
            #PDO('nombre del servidor o IP','base de datos','usuario','contraseña');
            $link = new PDO("mysql:host=localhost;dbname=curso-php",
                            "root",
                            "root"
                            );
            
            /* Especificamos que la sintaxis sea utf8 */
            $link->exec("set names utf8");
            
            return $link;
        
                    

        }

    }

?>