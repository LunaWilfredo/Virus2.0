<?php
require_once 'Model/PModel.php';

class PersonalController{

    static public function tipodoc(){
        $tabla="tpdoc";
        $respuesta=PersonalModel::tipodoc($tabla);
        return $respuesta;
    }

    static public function sex(){
        $tabla="sexos";
        $respuesta=PersonalModel::sex($tabla);
        return $respuesta;
    }
}