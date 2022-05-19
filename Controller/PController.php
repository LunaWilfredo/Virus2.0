<?php

require_once '';

class PersonalController{

    static public function tipod(){
        $tabla="tpdoc";
        $respuesta=PersonalModel::tipod($tabla);
        return $respuesta;
    }

    static public function listar(){
        $tabla="personal";
        $respuesta = PersonalModal::listar($tabla);
        return $respuesta;
    }
}