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
            //var_dump($datos);
            $respuesta = PersonalModel::registra($tabla,$datos);
            return $respuesta;
        }
    }

    static public function lista(){
        $tabla='personal';
        $respuesta=PersonalModel::lista($tabla);
        return $respuesta;
    }

    public static function listaJJ(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])){
            $tabla="personal";
            $doc=$_POST['doc'];
            $empresa="JJBoggio";
        
            $respuesta=PersonalModel::listaBusq($tabla,$doc,$empresa);
            return $respuesta;
        }else{
            $tabla="personal";
            $doc=" ";
            $empresa="JJBoggio";

            $respuesta=PersonalModel::listaEmpresa($tabla,$doc,$empresa);
            return $respuesta;
        }
    }

    public static function listaY(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])){
            $tabla="personal";
            $doc=$_POST['doc'];
            $empresa="Yermedic";
        
            $respuesta=PersonalModel::listaBusq($tabla,$doc,$empresa);
            return $respuesta;
        }else{
            $tabla="personal";
            $doc=" ";
            $empresa="Yermedic";

            $respuesta=PersonalModel::listaEmpresa($tabla,$doc,$empresa);
            return $respuesta;
        }
    }

    public static function listaS(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])){
            $tabla="personal";
            $doc=$_POST['doc'];
            $empresa="Sideruk";
        
            $respuesta=PersonalModel::listaBusq($tabla,$doc,$empresa);
            return $respuesta;
        }else{
            $tabla="personal";
            $doc=" ";
            $empresa="Sideruk";

            $respuesta=PersonalModel::listaEmpresa($tabla,$doc,$empresa);
            return $respuesta;
        }
    }

    public static function listaG(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])){
            $tabla="personal";
            $doc=$_POST['doc'];
        
            $respuesta=PersonalModel::listaGeneral($tabla,$doc);
            return $respuesta;
        }else{
            $tabla="personal";
            $doc=" ";
            $empresa=" ";

            $respuesta=PersonalModel::listaEmpresa($tabla,$doc,$empresa);
            return $respuesta;
        }
    }

    static public function cambioEst(){
        if(isset($_GET['idd'])&&!empty($_GET['idd'])){
            $tabla = "personal";
            $idd=$_GET['idd'];
            $respuesta=PersonalModel::cambioEst($tabla,$idd);
            return $respuesta;
        }
    }

    static public function BuscarGeneral(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])){
            $tabla="personal";
            $doc=$_POST['doc'];
        
            $respuesta=PersonalModel::BuscarGeneral($tabla,$doc);
            return $respuesta;
        }
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

    public static function empresa(){
        $tabla="empresas";
        $respuesta=PersonalModel::empresa($tabla);
        return $respuesta;
    }

    public static function formap(){
        $tabla="fpagos";
        $respuesta=PersonalModel::formap($tabla);
        return $respuesta;
    }

    public static function banco(){
        $tabla="bancos";
        $respuesta=PersonalModel::banco($tabla);
        return $respuesta;
    }

    public static function planes(){
        if(isset($_GET['idp']) && !empty($_POST['hI'])){
            $tabla="planes";
            $datos=array(
                "hi"=>$_POST['hI'],
                "hS"=>$_POST['hS'],
                "areas"=>$_POST['area'],
                "cargo"=>$_POST['cargo'],
                "pension"=>$_POST['pension'],
                "nafp"=>$_POST['nafp'],
                "empresa"=>$_POST['empresa'],
                "sueldo"=>$_POST['sueldo'],
                "periodoP"=>$_POST['periodoP'],
                "formaP"=>$_POST['formaP'],
                "cuenta"=>$_POST['cuenta'],
                "entidad"=>$_POST['entidad'],
                "titular"=>$_POST['titular'],
                "idp"=>$_GET['idp']
            );
            // var_dump($datos);
            $respuesta=PersonalModel::planes($tabla,$datos);
            return $respuesta;
        }
    }

    /*Horarios Vistas */

    public static function horarioAdmin(){
            $tabla = "personal";
            $respuesta = PersonalModel::horarioAdmin($tabla);
            return $respuesta;
    }

    public static function horarioAdminBuscar(){
        if(isset($_POST['doc'])){
            $doc = $_POST['doc'];
            $tabla = "personal";
            $respuesta = PersonalModel::HAB($tabla,$doc);
            return $respuesta;
        }
    }

    public static function horarioOp(){
        $tabla = "personal";
        $respuesta = PersonalModel::horarioOp($tabla);
        return $respuesta;
    }

    public static function horarioOpBuscar(){
        if(isset($_POST['doc'])){
            $tabla = "personal";
            $doc=$_POST['doc'];
            $respuesta = PersonalModel::HOB($tabla,$doc);
            return $respuesta;
        }
    }

    /*Asistencias */
    public static function asistencias(){
        $tabla = "personal";
        $respuesta = PersonalModel::asistencias($tabla);
        return $respuesta;
    }

    public static function asistenciasBuscar(){
        if(isset($_POST['doc']) ||isset($_POST['fechaI']) && isset($_POST['fechaF'])){
            $tabla="personal";
            $doc=$_POST['doc'];
            $fechaI=$_POST['fechaI'];
            $fechaF=$_POST['fechaF'];
            
            $respuesta = PersonalModel::asistenciasB($tabla,$doc,$fechaI,$fechaF);
            return $respuesta;
        }
    }

    /*Pagos */

    public static function ViewPagos(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])||isset($_POST['fechaI']) && isset($_POST['fechaF']) && !empty($_POST['fechaI'])){
                $tabla="personal";
                $doc=$_POST['doc'];
                $fechaI=$_POST['fechaI'];
                $fechaF=$_POST['fechaF'];
            
            $respuesta=PersonalModel::ViewPagosCompletos($tabla,$doc,$fechaI,$fechaF);
            return $respuesta;
        }else{
                $mes=date('m');
                $tabla="personal";
                $doc= "";
                $fechaI="2022-$mes-01";
                $fechaF="2022-$mes-30";
            $respuesta=PersonalModel::ViewPagos($tabla,$doc,$fechaI,$fechaF);
            return $respuesta;
        }
    }

    public static function ViewPagoSM(){
        if(isset($_POST['doc']) && !empty($_POST['doc'])||isset($_POST['fechaI']) && isset($_POST['fechaF']) && !empty($_POST['fechaI'])){
                $tabla="personal";
                $doc=$_POST['doc'];
                $fechaI=$_POST['fechaI'];
                $fechaF=$_POST['fechaF'];
            
            $respuesta=PersonalModel::ViewPagosSemanal($tabla,$doc,$fechaI,$fechaF);
            return $respuesta;
        }else{
                $mes=date('m');
                $tabla="personal";
                $doc= "";
                $fechaI="2022-$mes-01";
                $fechaF="2022-$mes-30";
            $respuesta=PersonalModel::ViewPagoSB($tabla,$doc,$fechaI,$fechaF);
            return $respuesta;
        }
    }



}