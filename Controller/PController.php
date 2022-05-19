<?php
require_once 'Model/PModel.php';

class PersonalController{

    static public function tipodoc(){
        $tabla="tpdoc";
        $respuesta=PersonalModel::tipodoc($tabla);
        return $respuesta;
    }
}