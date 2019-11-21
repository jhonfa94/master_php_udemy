<?php 
    /* 
        Cuando la variable es estática, se accede a ella mediante el operador de resolución de ámbito, doble dos-puntos :: anteponiendo la palabra clave self o parent según si trata de una variable de la misma clase o de otra de la cual se ha heredado, respectivamente:
    */
    class Persona {

        public $nombre;
        public $genero;
        private $edad;
        protected $passaporte;
        public static $tipoSandre = "A+";

        public function saludar(){
            echo $this->nombre . "<br>";
        }

        public function hola(){
           echo self::$tipoSandre."<br>";           
        }

        //Esto seria para la calse qu extiende o hereda
        //echo parent::$tipoSandre."<br>";


    }

    /* 
        Para acceder al atributo static, no se tiene necesidad de crear otra instancia del objeto, 
        sino que mediante los :: se llama
    */
    echo Persona::$tipoSandre."<br>";
    
    /* 
        Tambien se presta para modificar
    */
    Persona::$tipoSandre="O+";
    echo Persona::$tipoSandre."<br>";

    /* 
        Ya para acceder a los elementos que se se tienen en la clase se instancia el objeto
    */
    $persona1 = new Persona();
    $persona1->nombre ="Fabio";
    echo $persona1->nombre."<br";



?>