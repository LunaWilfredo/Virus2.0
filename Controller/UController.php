<?php
require_once 'Model/UModel.php'; 

class UsuariosController{

    static public function roles(){
        $tabla='roles';
        $respuesta=UsuariosModel::roles($tabla);
        return $respuesta;
    }

    static public function area(){
        $tabla="areas";
        $respuesta=UsuariosModel::area($tabla);
        return $respuesta;
    }

    static public function registro(){
        if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
            $tabla="usuarios";
            $datos = array(
                "nombre"=>$_POST['nombre'],
                "apellido"=>$_POST['apellido'],
                "nick"=>$_POST['nick'],
                "pass"=>$_POST['pass'],
                "rol"=>$_POST['rol']
            );
           $respuesta = UsuariosModel::registro($tabla,$datos);
           return $respuesta;
           var_dump($respuesta);
        }
    }

    static public function lista(){
        $tabla='usuarios';
        $respuesta=UsuariosModel::lista($tabla);
        return $respuesta;
    }

    static public function borrar($idb){
        if(isset($_GET['idb']) && !empty($_GET['idb'])){
            $tabla = "usuarios";
            $idb = $_GET['idb'];
            $respuesta = UsuariosModel::borrar($tabla,$idb);
            return $respuesta;
        }
    }

}