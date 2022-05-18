<?php

require_once 'Model/PModel.php';

class PersonalController{

    static public function tipod(){
        $tabla="tpdoc";
        $respuesta=PersonalModel::tipod($tabla);
        return $respuesta;
    }

    static public function estadoC(){
        $tabla="estadoC";
        $respuesta=PersonalModel::estadoC($tabla);
        return $respuesta;
    }

    static public function sexo(){
        $tabla="sexos";
        $respuesta=PersonalModel::sexo($tabla);
        return $respuesta;
    }

    static public function parentesco(){
        $tabla="parentescos";
        $respuesta=PersonalModel::parentesco($tabla);
        return $respuesta;
    }

    static public function registro(){
        if(isset($_POST['nombres'])&&!empty($_POST['nombres'])){
            $tabla = "personal";
            $datos=array(
                'nombre'=>$_POST['nombres'],
                'apellidos'=>$_POST['apellidos'],
                'tipodoc'=>$_POST['Tdoc'],
                'doc'=>$_POST['doc'],
                'fecha'=>$_POST['fechaNac'],
                'nacionalidad'=>$_POST['nacionalidad'],
                'movil'=$_POST['movil'],
                'estadoc'=>$_POST['ecivil'],
                'sexo'=>$_POST['sexo'],
                'hijos'=>$_POST['hijos'],
                'direccion'=>$_POST['direccion'],
                'contacto'=>$_POST['emergencia'],
                'parentesco'=>$_POST['parentesco']
            );
            var_dump($datos);
            //$respuesta=PersonalModal::registro($tabla,$datos);
            //return $respuesta;
        }
    }

    static public function listar(){
        $tabla="personal";
        $respuesta = PersonalModal::listar($tabla);
        return $respuesta;
    }
}