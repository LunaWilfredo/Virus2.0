<?php

class Conexion{
    static public function conectar(){
            $cn=New PDO("mysql:host=localhost;dbname=labyermedic","root","");
            $cn->exec("SET NAMES UTF8");
            return $cn;
    }

    //Test de conexion
    /*try{
        $cn=new PDO("mysql:host=localhost;dbname=labyermedic","root","userroot1@");

        $prueba = $cn->prepare("SELECT * FROM usuarios");
        $prueba->execute();

        $users=[];

        foreach($prueba as $p){
            $users = $p;
        }

        echo json_encode($users);

    }catch(PDOException $e){
        echo $e->getMessage();
    }*/
}

?>