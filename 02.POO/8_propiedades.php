<?php 
    class Persona {

        public $nombre;
        public $genero;
        private $edad;
        protected $passaporte;
        public static $tipoSandre = "A+";


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