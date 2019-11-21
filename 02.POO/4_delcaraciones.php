<?php 

    class Bloque{

        //declaracion de una propiedad
        const CONSTANTE = 'mi constante';

        //declaración de una propiedad
        public $var = 'Valor por defecto';
        
        //declaración de un método
        public function imprimirVar(){
            echo $this->var;
        }


    }

    $bloque = new Bloque();
    $bloque->imprimirVar();

?>