<?php
require_once './BD/db.php';

class PersonalModel{

    static public function tipodoc($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function estadoc($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function sexo($tabla)
    {
        $sql="SELECT id,SUBSTRING(sname,1,3) as nombre FROM $tabla ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function parent($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function registra($tabla,$datos)
    {
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

    static public function lista($tabla)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre', 
        p.papellido AS 'apellido',
        tp.tdname AS 'tipodoc', 
        p.pdoc AS 'documento',
        p.pnac AS 'nacimiento',
        p.pnacionalidad AS 'nacionalidad',
        p.pmovil AS 'movil',
        ec.ecname AS 'estadocivil', 
        s.sname AS 'sexo',
        p.pfam AS 'hijos',
        p.pdireccion AS 'direccion', 
        p.pcemerg AS 'contacto', 
        pt.prname AS 'parentesco', 
        pl.plhi AS 'hora_ingreso',
        pl.plhs AS 'hora_salida',
        a.aname AS 'area',
        c.cname AS 'cargo',
        ps.psname AS 'pension',
        af.afname AS 'afp_name',
        pl.plsueldo AS 'sueldo',
        pl.plpp AS 'periodo_pago',
        fp.fpname AS 'forma_pago',
        pl.plcuenta AS 'cuenta',
        bk.bname AS 'banco',
        pl.pltitular AS 'titular_cuenta',
        SUBSTRING(e.ename,1,1) AS 'empresa', 
        es.ename AS 'estado'
         FROM $tabla p 
         LEFT JOIN tpdoc tp ON p.fk_tpdoc = tp.id 
         LEFT JOIN estadoC ec ON p.fk_estadoc = ec.id
         LEFT JOIN sexos s ON p.fk_sexo = s.id
         LEFT JOIN parentescos pt ON p.fk_ptc = pt.id
         LEFT JOIN estados es ON p.fk_estado = es.id
         LEFT JOIN planes pl ON pl.fk_personal = p.id
         LEFT JOIN areas a ON pl.fk_area = a.id
         LEFT JOIN cargos c ON pl.fk_cargo = c.id
         LEFT JOIN pensiones ps ON pl.fk_pen = ps.id
         LEFT JOIN afp af ON pl.fk_afp = af.id
         LEFT JOIN fpagos fp ON pl.fk_pago = fp.id
         LEFT JOIN bancos bk ON pl.fk_bank = bk.id
         LEFT JOIN empresas e ON pl.fk_emp = e.id
         ORDER BY p.id DESC;";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function BuscarGeneral($tabla,$doc)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre', 
        p.papellido AS 'apellido',
        tp.tdname AS 'tipodoc', 
        p.pdoc AS 'documento',
        p.pnac AS 'nacimiento',
        p.pnacionalidad AS 'nacionalidad',
        p.pmovil AS 'movil',
        ec.ecname AS 'estadocivil', 
        s.sname AS 'sexo',
        p.pfam AS 'hijos',
        p.pdireccion AS 'direccion', 
        p.pcemerg AS 'contacto', 
        pt.prname AS 'parentesco', 
        pl.plhi AS 'hora_ingreso',
        pl.plhs AS 'hora_salida',
        a.aname AS 'area',
        c.cname AS 'cargo',
        ps.psname AS 'pension',
        af.afname AS 'afp_name',
        pl.plsueldo AS 'sueldo',
        pl.plpp AS 'periodo_pago',
        fp.fpname AS 'forma_pago',
        pl.plcuenta AS 'cuenta',
        bk.bname AS 'banco',
        pl.pltitular AS 'titular_cuenta',
        e.ename AS 'empresa', 
        es.ename AS 'estado'
         FROM $tabla p 
         LEFT JOIN tpdoc tp ON p.fk_tpdoc = tp.id 
         LEFT JOIN estadoC ec ON p.fk_estadoc = ec.id
         LEFT JOIN sexos s ON p.fk_sexo = s.id
         LEFT JOIN parentescos pt ON p.fk_ptc = pt.id
         LEFT JOIN estados es ON p.fk_estado = es.id
         LEFT JOIN planes pl ON pl.fk_personal = p.id
         LEFT JOIN areas a ON pl.fk_area = a.id
         LEFT JOIN cargos c ON pl.fk_cargo = c.id
         LEFT JOIN pensiones ps ON pl.fk_pen = ps.id
         LEFT JOIN afp af ON pl.fk_afp = af.id
         LEFT JOIN fpagos fp ON pl.fk_pago = fp.id
         LEFT JOIN bancos bk ON pl.fk_bank = bk.id
         LEFT JOIN empresas e ON pl.fk_emp = e.id 
         WHERE p.pname = '$doc' 
         OR p.papellido = '$doc' 
         OR p.pdoc = '$doc'
         OR e.ename = '$doc'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function listaEmpresa($tabla,$doc,$empresa)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre', 
        p.papellido AS 'apellido',
        p.pdoc AS 'documento', 
        a.aname AS 'area',
        SUBSTRING(e.ename,1,1) AS 'empresa', 
        es.ename AS 'estado'
        FROM $tabla p 
        LEFT JOIN tpdoc tp ON p.fk_tpdoc = tp.id 
        LEFT JOIN estados es ON p.fk_estado = es.id
        LEFT JOIN planes pl ON pl.fk_personal = p.id
        LEFT JOIN areas a ON pl.fk_area = a.id 
        LEFT JOIN empresas e ON pl.fk_emp = e.id 
        WHERE e.ename = '$empresa' AND p.fk_estado = 1
        ORDER BY p.pname; ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function listaBusq($tabla,$doc,$empresa)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre', 
        p.papellido AS 'apellido',
        p.pdoc AS 'documento', 
        a.aname AS 'area',
        SUBSTRING(e.ename,1,1) AS 'empresa', 
        es.ename AS 'estado'
        FROM $tabla p 
        LEFT JOIN tpdoc tp ON p.fk_tpdoc = tp.id 
        LEFT JOIN estados es ON p.fk_estado = es.id
        LEFT JOIN planes pl ON pl.fk_personal = p.id
        LEFT JOIN areas a ON pl.fk_area = a.id 
        LEFT JOIN empresas e ON pl.fk_emp = e.id 
        WHERE p.pname = '$doc' OR 
        p.papellido = '$doc' OR
        p.pdoc = '$doc'
        AND e.ename = '$empresa'
        ORDER BY p.pname; ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function listaGeneral($tabla,$doc)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre', 
        p.papellido AS 'apellido',
        p.pdoc AS 'documento', 
        a.aname AS 'area',
        SUBSTRING(e.ename,1,1) AS 'empresa', 
        es.ename AS 'estado'
        FROM $tabla p 
        LEFT JOIN tpdoc tp ON p.fk_tpdoc = tp.id 
        LEFT JOIN estados es ON p.fk_estado = es.id
        LEFT JOIN planes pl ON pl.fk_personal = p.id
        LEFT JOIN areas a ON pl.fk_area = a.id 
        LEFT JOIN empresas e ON pl.fk_emp = e.id 
        WHERE p.pname = '$doc' OR 
        p.papellido = '$doc' OR
        p.pdoc = '$doc'
        OR e.ename = '$doc'
        ORDER BY p.pname; ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function cambioEst($tabla,$idd)
    {
        $sql="UPDATE $tabla SET fk_estado = 2 WHERE id = $idd";
        $cn=Conexion::conectar()->prepare($sql);
        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        
        $cn->close();
        $cn=NULL;
    }

    // Tablas de plan laboral
    public static function area($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function cargos($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function pension($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function afp($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function empresa($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function formap($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function banco($tabla)
    {
        $sql="SELECT * FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function planes($tabla,$datos)
    {
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

    //Vistas Horarios
    public static function horarioAdmin($tabla)
    {
        $sql="  SELECT p.id AS 'idp', 
        p.pname AS 'nombre' ,
        p.papellido AS 'apellido',
        p.pdoc AS 'documento',
        a.aname AS 'area',
        ep.ename AS 'empresa',
        pl.plhi AS 'ingreso',
        pl.plhs AS 'salida'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id 
        LEFT JOIN areas a ON pl.fk_area = a.id
        LEFT JOIN empresas ep ON pl.fk_emp = ep.id
        WHERE (pl.fk_area >= 1) AND (pl.fk_area != 5);";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function HAB($tabla,$doc)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre' ,
        p.papellido AS 'apellido',
        p.pdoc AS 'documento',
        a.aname AS 'area',
        ep.ename AS 'empresa',
        pl.plhi AS 'ingreso',
        pl.plhs AS 'salida'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id 
        LEFT JOIN areas a ON pl.fk_area = a.id
        LEFT JOIN empresas ep ON pl.fk_emp = ep.id
        WHERE pl.fk_area !=5 AND p.pdoc ='$doc' OR p.pname ='$doc' 
        OR p.papellido ='$doc'OR a.aname='$doc';";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function horarioOp($tabla)
    {
        $sql="  SELECT p.id AS 'idp', 
        p.pname AS 'nombre' ,
        p.papellido AS 'apellido',
        p.pdoc AS 'documento',
        a.aname AS 'area',
        ep.ename AS 'empresa',
        pl.plhi AS 'ingreso',
        pl.plhs AS 'salida'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id 
        LEFT JOIN areas a ON pl.fk_area = a.id
        LEFT JOIN empresas ep ON pl.fk_emp = ep.id
        WHERE (pl.fk_area = 5);";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function HOB($tabla,$doc)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre' ,
        p.papellido AS 'apellido',
        p.pdoc AS 'documento',
        a.aname AS 'area',
        ep.ename AS 'empresa',
        pl.plhi AS 'ingreso',
        pl.plhs AS 'salida'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id 
        LEFT JOIN areas a ON pl.fk_area = a.id
        LEFT JOIN empresas ep ON pl.fk_emp = ep.id
        WHERE pl.fk_area = 5 AND p.pdoc ='$doc' OR p.pname ='$doc' 
        OR p.papellido ='$doc'OR a.aname='$doc';";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    // Asistencias
    public static function asistencias($tabla)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre' ,
        p.papellido AS 'apellido',
        p.pdoc AS 'documento',
        a.aname AS 'area',
        ep.ename AS 'empresa',
        ast.fecha AS 'fecha',
        ast.hora AS 'hora'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id 
        LEFT JOIN areas a ON pl.fk_area = a.id
        LEFT JOIN empresas ep ON pl.fk_emp = ep.id
        LEFT JOIN asistencias ast ON ast.doc = p.pdoc
        WHERE ast.fecha = CURDATE()
        ORDER BY p.id DESC,p.pdoc,ast.fecha ;";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function asistenciasB($tabla,$doc,$fechaI,$fechaF)
    {
        $sql="SELECT p.id AS 'idp', 
        p.pname AS 'nombre' ,
        p.papellido AS 'apellido',
        p.pdoc AS 'documento',
        a.aname AS 'area',
        ep.ename AS 'empresa',
        ast.fecha AS 'fecha',
        ast.hora AS 'hora'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id 
        LEFT JOIN areas a ON pl.fk_area = a.id
        LEFT JOIN empresas ep ON pl.fk_emp = ep.id
        LEFT JOIN asistencias ast ON ast.doc = p.pdoc
        WHERE ast.fecha BETWEEN '$fechaI' AND '$fechaF' OR p.pname='$doc'
        OR p.papellido='$doc' OR p.pdoc = '$doc'
        ORDER BY p.id DESC,p.pdoc,ast.fecha ;";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    // Pagos 
    public static function ViewPagosCompletos($tabla,$doc,$fechaI,$fechaF)
    {
        $sql="SELECT p.id AS 'idp',p.pname AS 'Nombres',p.papellido AS 'Apellidos',
        a.aname AS 'area', SUBSTRING(ep.ename,1,1) AS 'empresa',pl.plsueldo AS 'sueldo',
        ROUND(COUNT(ast.doc)/2) AS 'asistencias',(30-ROUND(COUNT(ast.doc)/2)) AS 'Faltas',
        ((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30)) AS'DescFaltas',
        ap.monto AS 'AFP%',(pl.plsueldo * ap.monto ) AS 'AFPDesc',
        (pl.plsueldo * 0.15) AS 'DescSeguro',(pl.plsueldo-((pl.plsueldo * ap.monto )+
        (pl.plsueldo * 0.15)+((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30)))) AS 'Total'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id
        INNER JOIN empresas ep ON ep.id=pl.fk_emp
        INNER JOIN areas a ON a.id=pl.fk_area
        INNER JOIN asistencias ast ON p.pdoc = ast.doc
        INNER JOIN afp ap ON ap.id = pl.fk_afp
        WHERE p.pdoc = '$doc' OR ast.fecha
        BETWEEN '$fechaI' AND '$fechaF' GROUP BY p.pdoc";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }
    
    public static function ViewPagos($tabla,$doc,$fechaI,$fechaF)
    {
        $sql="SELECT p.id AS 'idp',p.pname AS 'Nombres',p.papellido AS 'Apellidos',
        a.aname AS 'area', SUBSTRING(ep.ename,1,1) AS 'empresa',pl.plsueldo AS 'sueldo',
        ROUND(COUNT(ast.doc)/2) AS 'asistencias',(30-ROUND(COUNT(ast.doc)/2)) AS 'Faltas',
        ((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30)) AS'DescFaltas',
        ap.monto AS 'AFP%',(pl.plsueldo * ap.monto ) AS 'AFPDesc',
        (pl.plsueldo * 0.15) AS 'DescSeguro',(pl.plsueldo-((pl.plsueldo * ap.monto )+
        (pl.plsueldo * 0.15)+((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30)))) AS 'Total'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id
        INNER JOIN empresas ep ON ep.id=pl.fk_emp
        INNER JOIN areas a ON a.id=pl.fk_area
        INNER JOIN asistencias ast ON p.pdoc = ast.doc
        INNER JOIN afp ap ON ap.id = pl.fk_afp
        WHERE ast.fecha BETWEEN '$fechaI' AND '$fechaF' GROUP BY p.pdoc";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function ViewPagosSemanal($tabla,$doc,$fechaI,$fechaF)
    {
        $sql="SELECT p.id AS 'idp',p.pname AS 'Nombres',p.papellido AS 'Apellidos',
        a.aname AS 'area', SUBSTRING(ep.ename,1,1) AS 'empresa',pl.plsueldo AS 'sueldo',
        ROUND(COUNT(ast.doc)/2) AS 'asistencias',(30-ROUND(COUNT(ast.doc)/2)) AS 'Faltas',
        ((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30)) AS'DescFaltas',
        ap.monto AS 'AFP%',(pl.plsueldo * ap.monto ) AS 'AFPDesc',
        (pl.plsueldo * 0.15) AS 'DescSeguro',(pl.plsueldo-((pl.plsueldo * ap.monto )+
        (pl.plsueldo * 0.15)+((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30)))) AS 'Total'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id
        INNER JOIN empresas ep ON ep.id=pl.fk_emp
        INNER JOIN areas a ON a.id=pl.fk_area
        INNER JOIN asistencias ast ON p.pdoc = ast.doc
        INNER JOIN afp ap ON ap.id = pl.fk_afp
        WHERE p.pdoc = '$doc' OR ast.fecha
        BETWEEN '$fechaI' AND '$fechaF' GROUP BY p.pdoc";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    public static function ViewPagoSB($tabla,$doc,$fechaI,$fechaF)
    {
        $sql="SELECT p.id AS 'idp',p.pname AS 'Nombres',p.papellido AS 'Apellidos',
        a.aname AS 'area', SUBSTRING(ep.ename,1,1) AS 'empresa',pl.plsueldo AS 'sueldo',
        ROUND(COUNT(ast.doc)/2) AS 'asistencias',(30-ROUND(COUNT(ast.doc)/2)) AS 'Faltas',
        ((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30/8)) AS'DescFaltas',
        ap.monto AS 'AFP%',(pl.plsueldo * ap.monto ) AS 'AFPDesc',
        (pl.plsueldo * 0.15) AS 'DescSeguro',(pl.plsueldo-((pl.plsueldo * ap.monto )+
        (pl.plsueldo * 0.15)+((30-ROUND(COUNT(ast.doc)/2))*(pl.plsueldo/30)))) AS 'Total'
        FROM $tabla p 
        INNER JOIN planes pl ON pl.fk_personal=p.id
        INNER JOIN empresas ep ON ep.id=pl.fk_emp
        INNER JOIN areas a ON a.id=pl.fk_area
        INNER JOIN asistencias ast ON p.pdoc = ast.doc
        INNER JOIN afp ap ON ap.id = pl.fk_afp
        WHERE ast.fecha BETWEEN '$fechaI' AND '$fechaF' GROUP BY p.pdoc";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    // Actualizar

    static public function BuscarId($tabla,$idu)
    {
        $sql="SELECT p.id AS 'idp',p.pname AS 'nombre',p.papellido AS 'apellido',tp.tdname AS 'tipodoc',p.pdoc AS 'documento',p.pnac AS 'nacimiento',p.pnacionalidad AS 'nacionalidad',p.pmovil AS 'movil',ec.ecname AS 'estadocivil',s.sname AS 'sexo',p.pfam AS 'hijos',p.pdireccion AS 'direccion',p.pcemerg AS 'contaco',pt.prname AS 'parentesco' FROM $tabla p LEFT JOIN tpdoc tp ON p.fk_tpdoc = tp.id LEFT JOIN estadoC ec ON p.fk_estadoc = ec.id LEFT JOIN sexos s ON p.fk_sexo = s.id LEFT JOIN parentescos pt ON p.fk_ptc = pt.id LEFT JOIN estados es ON p.fk_estado = es.id WHERE p.id='$idu'";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function ActualizarDatos($tabla,$datos,$idu)
    {
        $sql="UPDATE $tabla SET `pname`=:nombres,`papellido`=:apellidos,`fk_tpdoc`=:tipodoc,pdoc=:doc,`pnac`=:fecha,pnacionalidad=:nacion,`pmovil`=:movil,`fk_estadoc`=:estadoc,`fk_sexo`=:sexo,`pfam`=:hijos,`pdireccion`=:direccion,`pcemerg`=:contacto,`fk_ptc`=:relacion WHERE id = $idu";

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

    static public function BuscarPlan($tabla,$idu)
    {
        $sql="SELECT pl.id AS 'idpl',
        pl.plhi AS 'hora_ingreso',
        pl.plhs AS 'hora_salida',
        a.aname AS 'area',
        c.cname AS 'cargo',
        ps.psname AS 'pension',
        af.afname AS 'afp_name',
        pl.plsueldo AS 'sueldo',
        pl.plpp AS 'periodo_pago',
        fp.fpname AS 'forma_pago',
        pl.plcuenta AS 'cuenta',
        bk.bname AS 'banco',
        pl.pltitular AS 'titular_cuenta',
        e.ename AS 'empresa', 
        es.ename AS 'estado'
        FROM $tabla p 
        LEFT JOIN estados es ON p.fk_estado = es.id
        LEFT JOIN planes pl ON pl.fk_personal = p.id
        LEFT JOIN areas a ON pl.fk_area = a.id
        LEFT JOIN cargos c ON pl.fk_cargo = c.id
        LEFT JOIN pensiones ps ON pl.fk_pen = ps.id
        LEFT JOIN afp af ON pl.fk_afp = af.id
        LEFT JOIN fpagos fp ON pl.fk_pago = fp.id
        LEFT JOIN bancos bk ON pl.fk_bank = bk.id
        LEFT JOIN empresas e ON pl.fk_emp = e.id 
        WHERE p.id=$idu ";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function ActualizarPlanes($tabla,$datos,$idpl)
    {
        $sql="UPDATE $tabla SET plhi=:hi,plhs=:hS,fk_area=:areas,fk_cargo=:cargo,fk_pen=:pension,fk_afp=:nafp,plsueldo=:sueldo,plpp=:periodoP,fk_pago=:formaP,plcuenta=:cuenta,fk_bank=:entidad,pltitular=:titular,fk_emp=:empresa WHERE id =$idpl ";
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

        if($cn->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $cn->close();
        $cn=NULL;
    }
    //vista de cantidades
    static public function cantidadP($tabla)
    {
        $sql="SELECT COUNT(id) as 'cantidad' FROM $tabla";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function cantidadPH($tabla)
    {
        $sql="SELECT COUNT(id) as 'cantidad' FROM $tabla WHERE fk_estado = 1";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function cantidadPDH($tabla)
    {
        $sql="SELECT COUNT(id) as 'cantidad' FROM $tabla WHERE fk_estado = 2";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function cantidadAdmin($tabla)
    {
        $sql="SELECT COUNT(p.id) as 'cantidad' FROM $tabla p INNER JOIN planes pl ON p.id=pl.fk_personal WHERE pl.fk_cargo!=4";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function cantidadOP($tabla)
    {
        $sql="SELECT COUNT(p.id) as 'cantidad' FROM $tabla p INNER JOIN planes pl ON p.id=pl.fk_personal WHERE pl.fk_cargo = 4";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function cantidadEmp($tabla,$empresa)
    {
        $sql="SELECT COUNT(p.id) as 'cantidad' FROM $tabla p INNER JOIN planes pl ON p.id=pl.fk_personal WHERE pl.fk_emp = $empresa";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    //graficos
    static public function Pgrafico($tabla){
        $sql="SELECT COUNT(p.id) AS 'cantidad',e.ename AS 'estado' FROM personal p
        INNER JOIN estados e ON e.id=p.fk_estado
        GROUP BY e.ename";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }

    static public function Egrafico($tabla){
        $sql="SELECT COUNT(pl.id) AS 'cantidad',ep.ename AS 'empresa' FROM planes pl
        INNER JOIN empresas ep ON ep.id=pl.fk_emp
        GROUP BY ep.ename";
        $cn=Conexion::conectar()->prepare($sql);
        $cn->execute();
        return $cn->fetchAll();

        $cn->close();
        $cn=NULL;
    }
}