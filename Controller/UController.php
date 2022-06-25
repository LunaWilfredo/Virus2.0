<?php
require_once 'Model/UModel.php'; 

class UsuariosController{

    static public function prelogin($user,$clave)
    {
        if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['claveuser']) && !empty($_POST['claveuser'])){
            $user=$_POST['username'];
            $clave=$_POST['claveuser'];
            $tabla="usuarios";

            $respuesta=UsuariosModel::prelogin($user,$clave,$tabla);
            return $respuesta;
        }
    }

    static public function login($user,$clave)
    {
            $user=$_POST['username'];
            $clave=$_POST['claveuser'];
            $tabla="usuarios";
        if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['claveuser']) && !empty($_POST['claveuser'])){
            $respuesta=UsuariosModel::login($user,$clave,$tabla);
            if($respuesta == 'ok'){
                session_start();
                $_SESSION['user'] = $user;
                header('Location:body.php');
            }else{
                header('Location:index.php');
            }
        }
        return $respuesta;
    }

    static public function log($user)
    {
        $tabla="usuarios";
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
            $respuesta = UsuariosModel::datosuser($user,$tabla);
            return $respuesta;
        }
    }

    public function cerrarSesion($cerrar)
    {
        if(isset($_GET['cerrar']) && $_GET['cerrar']=='ok'){
            $salir = $_GET['cerrar'];
            if($salir == "ok"){
                session_unset();
            }
            header('Location: ./index.php');
            $salir = "ok";
        }
        return $salir;
    }

    static public function roles()
    {
        $tabla='roles';
        $respuesta=UsuariosModel::roles($tabla);
        return $respuesta;
    }

    static public function area()
    {
        $tabla="areas";
        $respuesta=UsuariosModel::area($tabla);
        return $respuesta;
    }

    static public function registro()
    {
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

    static public function lista()
    {
        $tabla='usuarios';
        $respuesta=UsuariosModel::lista($tabla);
        return $respuesta;
    }

    static public function borrar($idb)
    {
        if(isset($_GET['idb']) && !empty($_GET['idb'])){
            $tabla = "usuarios";
            $idb = $_GET['idb'];
            $respuesta = UsuariosModel::borrar($tabla,$idb);
            return $respuesta;
        }
    }

    //vistas de cantidades
    static public function cantidadU()
    {
        $tabla="usuarios";
        $respuesta=UsuariosModel::cantidadU($tabla);
        return $respuesta;
    }

}