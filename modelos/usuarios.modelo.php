<?php
require_once "conexion.php";
class ModeloUsuarios{
    /*--=============================================
        MOSTRAR USUARIOS
    =============================================*/
    static public function mdlMostrarUsuarios($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR); //stmt enlazar parámetro, PARAM_STR es parámetro string
        $stmt -> execute();
        return $stmt -> fetch(); //fetch retorna solo una linea de la tabla de la BD
    }
}