<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=pos",
                        "root",
                        "");
        $link->exec("set names utf8"); //validacion de caracteres latinos
        return $link;
    }    // Conectar es un método y en todo los métodos lo recomendable es ponerlos en static
}