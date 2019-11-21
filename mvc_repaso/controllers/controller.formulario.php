<?php 

    class ControladorFormuario{

        # FUNCION PARA PROCESAR LOS DATOS DEL FORMULARIO
        public static function ctrRegistrar(){
            if (isset($_POST['registroNombre'])) {
                $nombre = $_POST['registroNombre'];
                $email = $_POST['registroEmail'];
                $password = $_POST['registroPassword'];
                $registro = "$nombre $email $password";
                return $registro;
                //return "ok"; //indicamos que le registro esta 
            }
        }
        

    }
    

?>