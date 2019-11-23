<?php
//REQUIERO LA CONEXION DE LA DB
require_once "conexion.php";

//INSTANCIO LA CONEXION DE LA DB
//$conexion = Conexion::conectar();

class ModeloFormularios
{

    /* REGISTRO
        Recibe los siguiente parametros:
        - Nombre de la tabla
        - Datos (Vienen en un arry)

        
    */
    /* CREAR REGISTRO */
    static public function mdlRegistro($tabla, $datos)    {

        #prepare() Prepra una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parámetros.

        //statement : declaracion



        $stmt  = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,email,password) 
                VALUES(:nombre,:email,:password)");

        #binParam()Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close(); //Cerramos la conexión

        $stmt = null; //forma de reforzar la seguridad del sistema


    }

    /* SELECCIONAR REGISTROS O REGISTRO */
    public static function mdlSeleccionarRegistros($tabla, $item, $valor) {

        if ($item == null && $valor == null) {

            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha,'%Y-%m-%d') AS fecha FROM $tabla ORDER BY id DESC");

            $stmt->execute();

            return $stmt->fetchAll();
        } else {

            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha,'%Y-%m-%d') AS fecha FROM $tabla WHERE $item = :$item  ORDER BY id DESC");

            $stmt->bindParam(":$item", $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }



        $stmt->close(); //Cerramos la conexión

        $stmt = null; //forma de reforzar la seguridad del sistema

    }

    /* ACTUALIZAR REGISTRO */
    public static function mdlActualizarRegistro($tabla, $datos) {

        $stmt  = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre,email=:email,password=:password WHERE id = :id");

        #binParam()Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
        $stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close(); //Cerramos la conexión

        $stmt = null; //forma de reforzar la seguridad del sistema

    }

    /* ELIMINAR REGISTRO */
    public static function mdlEliminarRegistro($tabla, $valor) {

        $stmt  = Conexion::conectar()->prepare("DELETE FROM  $tabla WHERE id = :id");

        $stmt->bindParam(":id", $valor, PDO::PARAM_INT);       

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close(); //Cerramos la conexión

        $stmt = null; //forma de reforzar la seguridad del sistema

    }
}
