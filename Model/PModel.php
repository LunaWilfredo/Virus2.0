<?php
require_once '';

class PersonalModel{

    static public function tipod($tabla){
        $sql = "SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function listar($tabla){
        $sql = "SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fecthAll();

        $cn->close();
        $cn=NULL;
    }

}