<?php 
    class Clase1{
        public function saludar(){
        echo "Soy una composición <br>";
        }
    }

    class Clase3{
        private $InstanciaC1;
        function saludar(){
            $InstanciaC1 = new Clase1();
            $InstanciaC1->saludar();
        }
    }

    $InstanciaC3 = new Clase3();
    $InstanciaC3->saludar();


?>
