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
        $sql="INSERT INTO $tabla ( `pname`, `papellido`, `fk_tpdoc`, `pdoc`, `pnac`, `pnacionalidad`, `pmovil`, `fk_estadoc`, `fk_sexo`, `pfam`, `pdireccion`, `pcemerg`, `fk_ptc`, `fk_estado`) VALUES (:nombres,:apellidos,:tipodoc,:doc,:fecha,:nacion,:movil,:estadoc,:sexo,:hijos,:direccion,:contacto,:relacion,1)";

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
        $cn->bindParam(':hijos',$datos['hijos'],PDO::PARAM_INT);
        $cn->bindParam(':direccion',$datos['direccion'],PDO::PARAM_STR);
        $cn->bindParam(':contacto',$datos['contacto'],PDO::PARAM_STR);
        $cn->bindParam(':relacion',$datos['relacion'],PDO::PARAM_INT);

        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $cn->close();
        $cn=NULL;
    }

    static public function lista($tabla){
        $sql="SELECT p.id AS 'idp', p.pname AS 'nombre', p.papellido AS 'apellido', tp.tdname AS 'tipodoc', p.pdoc AS 'documento',
        p.pnac AS 'nacimiento',p.pnacionalidad AS 'nacionalidad',p.pmovil AS 'movil', ec.ecname AS 'estadocivil', s.sname AS 'sexo',
         p.pfam AS 'hijos',p.pdireccion AS 'direccion', p.pcemerg AS 'contacto', pt.prname AS 'parentesco', es.ename AS 'estado' 
         FROM $tabla p 
         LEFT JOIN tpdoc tp ON p.fk_tpdoc = tp.id 
         LEFT JOIN estadoC ec ON p.fk_estadoc = ec.id
         LEFT JOIN sexos s ON p.fk_sexo = s.id
         LEFT JOIN parentescos pt ON p.fk_ptc = pt.id
         LEFT JOIN estados es ON p.fk_estado = es.id ;";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    /*Tablas de plan laboral */

    public static function area($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function cargos($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function pension($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function afp($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function empresa($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function formap($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function banco($tabla){
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function planes($tabla,$datos){
        $sql="INSERT INTO $tabla (`plhi`, `plhs`, `fk_area`, `fk_cargo`, `fk_pen`, `fk_afp`, `plsueldo`, `plpp`, `fk_pago`, `plcuenta`, `fk_bank`, `pltitular`, `fk_emp`, `fk_personal`) VALUES (:hi,:hS,:areas,:cargo,:pension,:nafp,:sueldo,:periodoP,:formaP,:cuenta,:entidad,:titular,:empresa,:idp)";
        $cn=Conexion::conectar()->prepare($sql);

        $cn->bindParam(':hi',$datos['hi'],PDO::PARAM_STR);
        $cn->bindParam(':hS',$datos['hS'],PDO::PARAM_STR);
        $cn->bindParam(':areas',$datos['areas'],PDO::PARAM_INT);
        $cn->bindParam(':cargo',$datos['cargo'],PDO::PARAM_INT);
        $cn->bindParam(':pension',$datos['pension'],PDO::PARAM_INT);
        $cn->bindParam(':nafp',$datos['nafp'],PDO::PARAM_INT);
        $cn->bindParam(':sueldo',$datos['sueldo'],PDO::PARAM_STR);
        $cn->bindParam(':periodoP',$datos['periodoP'],PDO::PARAM_INT);
        $cn->bindParam(':formaP',$datos['formaP'],PDO::PARAM_INT);
        $cn->bindParam(':cuenta',$datos['cuenta'],PDO::PARAM_STR);
        $cn->bindParam(':entidad',$datos['entidad'],PDO::PARAM_INT);
        $cn->bindParam(':titular',$datos['titular'],PDO::PARAM_STR);
        $cn->bindParam(':empresa',$datos['empresa'],PDO::PARAM_INT);
        $cn->bindParam(':idp',$datos['idp'],PDO::PARAM_STR);

        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $cn->close();
        $cn=NULL;
    }
}