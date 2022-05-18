<?php
require_once './BD/db.php';

class PersonalModel{

    static public function tipod($tabla){
        $sql = "SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function estadoC($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function sexo($tabla){
        $sql="SELECT id,SUBSTRING(sname,1,1) as nombre FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function parentesco(){
        $sql ="SELECT * FROM parentescos";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();
        
        $cn->close();
        $cn=NULL;
    }

    static public function registro(){

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