<?php
require_once 'Model/PModel.php';

class PersonalController{

    static public function tipodoc(){
        $tabla="tpdoc";
        $respuesta=PersonalModel::tipodoc($tabla);
        return $respuesta;
    }

    static public function estadoc(){
        $tabla="estadoC";
        $respuesta=PersonalModel::estadoc($tabla);
        return $respuesta;
    }

    static public function sexo(){
        $tabla="sexos";
        $respuesta=PersonalModel::sexo($tabla);
        return $respuesta;
    }

    static public function parent(){
        $tabla="parentescos";
        $respuesta=PersonalModel::parent($tabla);
        return $respuesta;
    }

    static public function registra(){
        if(isset($_POST['nombres']) && !empty($_POST['nombres'])){
            $tabla = "personal";
            $datos = array(
                "nombres"=>$_POST['nombres'],
                "apellidos"=>$_POST['apellidos'],
                "tipodoc"=>$_POST['Tdoc'],
                "doc"=>$_POST['doc'],
                "fecha"=>$_POST['fechaNac'],
                "nacionalidad"=>$_POST['nacionalidad'],
                "movil"=>$_POST['movil'],
                "estadoc"=>$_POST['ecivil'],
                "sexo"=>$_POST['sexo'],
                "hijos"=>$_POST['hijos'],
                "direccion"=>$_POST['direccion'],
                "contacto"=>$_POST['emergencia'],
                "parentesco"=>$_POST['parentesco']
            );
            $respuesta = PersonalModel::registra($tabla,$datos);
            return $respuesta;
            var_dump($datos);
        }
    }

    static public function lista(){
        $tabla='personal';
        $respuesta=PersonalModel::lista($tabla);
        return $respuesta;
    }

}