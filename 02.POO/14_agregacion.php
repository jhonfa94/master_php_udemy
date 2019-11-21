<?php 

    class Clase1{
        public function saludar(){
           echo "Soy una agregación <br>";
        }
    }

    class Clase2{
        public function saludar($InstanciaC1){
           $InstanciaC1->saludar();
        }
    }

    $InstanciaC1 = new Clase1();
    $InstanciaC2 = new Clase2();

    $InstanciaC2->saludar($InstanciaC1);
    $InstanciaC1->saludar();


?>