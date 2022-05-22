<?php
require_once './BD/db.php';

class PersonalModel{

    static public function tipodoc($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function estadoc($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function sexo($tabla){
        $sql="SELECT id,SUBSTRING(sname,1,1) as nombre FROM $tabla ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function parent($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function registra($tabla,$datos){
        $sql="INSERT INTO $tabla (pname,papellido,fk_tpdoc,pdoc,pnac,pnacionalidad,pmovil,fk_estadoc,fk_sexo,pfam/*,pdireccion,pce,fk_ptc,fk_estado*/)VALUES(:nombres,:apellidos,:tipodoc,:doc,:fecha,:nacion,:movil,:estadoc,:sexo,:hijos/*,:direccion,:contacto,:parentesco,1*/)";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->bindParam(':nombres',$datos['nombres'],PDO::PARAM_STR);
        $cn->bindParam(':apellidos',$datos['apellidos'],PDO::PARAM_STR);
        $cn->bindParam(':tipodoc',$datos['tipodoc'],PDO::PARAM_INT);
        $cn->bindParam(':doc',$datos['doc'],PDO::PARAM_STR);
        $cn->bindParam(':fecha',$datos['fecha'],PDO::PARAM_STR);
        $cn->bindParam(':nacion',$datos['nacion'],PDO::PARAM_STR);
        $cn->bindParam(':movil',$datos['movil'],PDO::PARAM_STR);
        $cn->bindParam(':estadoc',$datos['estadoc'],PDO::PARAM_INT);
        $cn->bindParam(':sexo',$datos['sexo'],PDO::PARAM_STR);
        $cn->bindParam(':hijos',$datos['hijos'],PDO::PARAM_STR);
        //$cn->bindParam(':direccion',$datos['direccion'],PDO::PARAM_STR);
        //$cn->bindParam(':contacto',$datos['contacto'],PDO::PARAM_STR);
        //$cn->bindParam(':parentesco',$datos['parentesco'],PDO::PARAM_INT);
        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $cn->close();
        $cn=NULL;
    }

    static public function lista($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

}