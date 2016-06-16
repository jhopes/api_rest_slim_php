<?php
require './Conexion/Conexion.php'; 

class getprueba {
    public static function readfacultad($ID){
    $idb = Conexion::getConnection();
    $sql = "SELECT * FROM facultad WHERE id_facultad=".$ID;   //prepared statements 
    $query = $idb->prepare($sql);
    $query->execute();
    $resultado = $query->fetchAll();
    return $resultado;
    }
    public static function Createfacultad(){
    $idb = Conexion::getConnection();
    $sql = "INSERT INTO facultad(facultad, abv) VALUES('ddd','dddd')";   //prepared statements 
    $query = $idb->prepare($sql);
    $query->execute();
    ///$query->close();
    }
}

