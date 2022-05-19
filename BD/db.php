<?php

class Conexion{
    static public function conectar(){
        try{
            $cn = New PDO("mysql:host=localhost;dbname=labyermedic","root","userroot1@");
            $cn->exec("SET NAMES UTF-8");
            return $cn;
        }catch(PDOException $e){
            echo $e->getMessage('Error de coe
            nexion');
        }
        
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