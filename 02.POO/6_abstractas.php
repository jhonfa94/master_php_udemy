<?php 

    /* 
        Las clases abstractas son aquellas que no necesitan ser instanciadas pero sin embargo, serán heredadas en algún momento. Se definen anteponiendo la palabra clave abstract:
    */

    abstract class servicio{

        abstract public function saludar($nombre);

        public function carta($nombre, $almuerzo){
           echo $this->saludar($nombre);
           echo "Le puedo ofrecer: <br>";

           foreach ($almuerzo as $clave => $valor) {
               echo "$clave: $valor <br>";
           }
        }

    }

    //Clase que hereda del sevicio
    class mesero extends servicio{
        public function saludar($nombre){
            return "Buenas tarder señor(a): $nombre <br>";
        }
    }

    //creamos el objeto a partir de la clase mesero
    $mesero1 = new mesero();
    $nombrePersona = "Jhon Fabio"; 
    $almuerzo = array(
        'sopa' =>'Fideos',
        'Seco' =>'Carne Res, Papitas, Ensalada',
        'Jugo' =>'Mora',
    );

    $mesero1->carta($nombrePersona,$almuerzo);



?>