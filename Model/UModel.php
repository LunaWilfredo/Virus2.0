<?php 
require_once './BD/db.php';
 
class UsuariosModel{

    static public function prelogin($user,$clave,$tabla)
    {
        $sql="SELECT unick,upass,fk_estado FROM $tabla WHERE unick='$user' AND upass='$clave'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function login($user,$clave,$tabla)
    {
        $sql="SELECT * FROM $tabla WHERE unick='$user' AND upass='$clave'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        if($cn->execute()){
            return 'ok';
        }

        $cn->close();
        $cn=NULL;
    }

    static public function datosuser($user,$tabla)
    {
        $sql="SELECT *,substring(uname,1,1) AS 'inicial' FROM $tabla WHERE unick='$user'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function roles($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function area($tabla)
    {
        $sql = "SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();

        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function registro($tabla,$datos)
    {
        $sql = "INSERT INTO $tabla (uname,uape,unick,upass,fk_rol,fk_estado) VALUES (:nombre,:apellido,:nick,:pass,:rol,1);";
        $cn = Conexion::conectar()->prepare($sql);
        $cn->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $cn->bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
        $cn->bindParam(":nick",$datos['nick'],PDO::PARAM_STR);
        $cn->bindParam(":pass",$datos['pass'],PDO::PARAM_STR);
        $cn->bindParam(":rol",$datos['rol'],PDO::PARAM_STR);
        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $cn->close();
        $cn=NULL;
    }

    static public function lista($tabla)
    {
        $sql="SELECT u.id as 'id_usuario',u.uname as 'nombre',u.uape as 'apellido',u.unick as 'nick',u.upass as 'password',r.id as 'id_rol',r.rname as 'rol', e.id as 'id_estado',e.ename as 'estado' FROM $tabla u INNER JOIN roles r ON u.fk_rol = r.id INNER JOIN estados e ON u.fk_estado = e.id;";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function borrar($tabla,$idb)
    {
        $sql = "DELETE FROM $tabla WHERE id = '$idb' ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn;

        $cn->close();
        $cn=NULL;
    }

    //vista de cantidades
    static public function cantidadU($tabla)
    {
        $sql="SELECT COUNT(id) as 'cantidad' FROM $tabla ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    //Graficos
    static public function Ugrafico($tabla){
        $sql=" SELECT COUNT(u.id) AS 'cantidad',e.ename AS 'estado' FROM usuarios u
        INNER JOIN estados e ON e.id=u.fk_estado
        GROUP BY e.ename;";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

} 