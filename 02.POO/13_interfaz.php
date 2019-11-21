<?php 

    //INTERFAZ
    interface Filtro{
        public function filtrar($elem);        
    }

    //CLASE
    class Filtro_Vocales implements Filtro{
        public function filtrar($cadena){
           return preg_replace('/[aeiou]/','',$cadena)."<br>";
        }
    }

    //INSTANCIO EL OBJETO DE LA CLASE
    $a = new Filtro_Vocales();
    echo $a->filtrar('Dinosaurio');
    echo $a->filtrar('Hola');




?>