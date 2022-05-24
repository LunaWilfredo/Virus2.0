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
                "fecha"=>$_POST['fecha'],
                "nacion"=>$_POST['nacion'],
                "movil"=>$_POST['movil'],
                "estadoc"=>$_POST['ecivil'],
                "sexo"=>$_POST['sexo'],
                "hijos"=>$_POST['hijos'],
                "direccion"=>$_POST['direccion'],
                "contacto"=>$_POST['contacto'],
                "relacion"=>$_POST['relacion']
            );
            var_dump($datos);
            $respuesta = PersonalModel::registra($tabla,$datos);
            return $respuesta;
        }
    }

    static public function lista(){
        $tabla='personal';
        $respuesta=PersonalModel::lista($tabla);
        return $respuesta;
    }

    /* Tablas de plan laboral*/

    public static function area(){
        $tabla="areas";
        $respuesta=PersonalModel::area($tabla);
        return $respuesta;
    }

    public static function cargos(){
        $tabla="cargos";
        $respuesta=PersonalModel::cargos($tabla);
        return $respuesta;
    }

    public static function pension(){
        $tabla="pensiones";
        $respuesta=PersonalModel::pension($tabla);
        return $respuesta;
    }

    public static function afp(){
        $tabla="afp";
        $respuesta=PersonalModel::afp($tabla);
        return $respuesta;
    }

    public static function afp(){
        $tabla="afp";
        $respuesta=PersonalModel::afp($tabla);
        return $respuesta;
    }
    
}