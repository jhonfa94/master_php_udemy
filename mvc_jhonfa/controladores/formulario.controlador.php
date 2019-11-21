<?php

class ControladoFormularios{

    /* Registro */
    static public function ctrRegistro(){
        /* Verfico si viene variables post */
        if (isset($_POST['registroNombre'])) {

            //return $_POST['registroNombre']."<br>" . $_POST['registroEmail']."<br>";
            return "ok";
            
        } 
        
    }

}
