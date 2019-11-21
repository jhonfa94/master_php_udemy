<?php 
    #declaro la clase
    class Producto{
        #defino algunas propiedades
        public $nombre;
        public $precio;
        protected $estado;

        #defino el método set_estado_producto()
        protected function setEstado($estado){
            $this->estado=$estado;
        }

        public function verProducto(){
           echo "Hola soy el producto: <b>$this->nombre</b> <br>";
           echo "Tengo un precio de: <b>$this->precio</b> <br>";
           echo "Me encuentro con un estado de: <b>$this->estado</b> <br>";
        }

        # constructor de la clase
        function __construct(){
            $this->setEstado('en uso');
        }

        # destructor de la clase
        function __destruct()
        {
            $this->setEstado('Liberado');
            echo "El objeto ha sido destruido <br>";
            echo "El objeto ha sido: $this->estado <br>";
        }

    }//clase

    //Creo objeto del producto 
    $_producto = new Producto();
    $_producto->nombre = "Leche Colanta";
    $_producto->precio = 2000;
    $_producto->verProducto();


?>