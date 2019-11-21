<?php 
    echo "<h1>Espagueti</h1>";
    $automovil1 = array(
        'marca' => 'Toyota',
        'modelo' => 'Carolla'
    );

    $automovil2 = array(
        'marca' => 'Volkswagen',
        'modelo' => 'Jetta'
    );

    function imprimir ($automovil){
        echo "Hola, soy un <b>$automovil[marca]</b> modelo <b>$automovil[modelo]</b> <br>";
    }

    imprimir($automovil1);
    imprimir($automovil2);

    echo "<hr>";

    echo "<h1>Imperactivo</h1>";

    class Automovil {
        public $marca;
        public $modelo;

        public function imprimir(){
           echo "Hola soy un $this->marca modelo $this->modelo <br>";
        }
    }

    $a = new Automovil();
    $a->marca="Toyota";
    $a->modelo="Carolla";
    $a->imprimir();

    $b = new Automovil();
    $b->marca="Volkswagen";
    $b->modelo="Jetta";
    $b->imprimir();



?>