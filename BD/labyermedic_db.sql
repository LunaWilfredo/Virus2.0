CREATE DATABASE labyermedic;
use labyermedic;
show tables;

/*Tabla Roles*/
CREATE TABLE IF NOT EXISTS roles(
	id int not null auto_increment primary key,
    rname varchar(255)
)ENGINE=INNODB;
/*SET FOREIGN_KEY_CHECKS=0;
TRUNCATE roles;*/

/*Tabla Empresas*/
CREATE TABLE IF NOT EXISTS empresas(
	id int not null auto_increment primary key,
    ename varchar(255)
)ENGINE=INNODB;

/*Tabla Estado*/
CREATE TABLE IF NOT EXISTS estados(
	id int not null auto_increment primary key,
    esname varchar(255)
)ENGINE=INNODB;

/*Tabla Areas*/
CREATE TABLE IF NOT EXISTS areas(
	id int not null auto_increment primary key,
    aname varchar(255)
)ENGINE=INNODB;

/*Tabla Cargos*/
CREATE TABLE IF NOT EXISTS cargos(
	id int not null auto_increment primary key,
    cname varchar(255)
)ENGINE=INNODB;

/*Tabla Tipo_Pension*/
CREATE TABLE IF NOT EXISTS pensiones(
	id int not null auto_increment primary key,
    psname varchar(255)
)ENGINE=INNODB;

/*Tabla pensiones AFP*/
CREATE TABLE IF NOT EXISTS afp(
	id int not null auto_increment primary key,
	afname varchar(255)
)ENGINE=INNODB;

/*Tabla Formas_Pago*/
CREATE TABLE IF NOT EXISTS fpagos(
	id int not null primary key auto_increment,
    fpname varchar(255)
)ENGINE=INNODB;

/*Tabla bancos*/
CREATE TABLE IF NOT EXISTS bancos(
	id int not null auto_increment primary key,
    bname varchar(255)
)ENGINE = INNODB;

/*Tabla Sexo*/
CREATE TABLE IF NOT EXISTS sexos(
	id int not null auto_increment primary key,
    sname varchar(255)
)ENGINE=INNODB;

/*Tabla Estado civil*/
CREATE TABLE IF NOT EXISTS estadoC(
	id int not null auto_increment primary key,
    ecname varchar(255)
)ENGINE=INNODB;

/*Tabla de tipo de documento*/
CREATE TABLE IF NOT EXISTS tpdoc(
	id int not null auto_increment primary key,
    tdname varchar(255)
)ENGINE=INNODB;

/*Tabla de parentesco*/
CREATE TABLE IF NOT EXISTS parentescos(
	id int not null auto_increment primary key,
    prname varchar(255)
)ENGINE=INNODB;

/*Tabla Asistencia*/
CREATE TABLE IF NOT EXISTS asistencias(
	id int not null auto_increment primary key,
    doc varchar(20),
    fecha date,
    hora time
)ENGINE=INNODB;

/*Tabla usuarios*/
CREATE TABLE IF NOT EXISTS usuarios(
	id int not null auto_increment primary key,
    uname varchar(255),
    uape varchar(255),
    unick varchar(255),
    upass varchar(12),
    fk_rol int ,
    fk_estado int ,
    constraint fk_rol_id foreign key(fk_rol)references roles(id),
    constraint fk_estado_id foreign key(fk_estado) references estados(id)
)ENGINE = INNODB;

/*Tabla personal*/
CREATE TABLE IF NOT EXISTS personal(
	id INT not null auto_increment primary key,
    pname VARCHAR (255),
    papellido VARCHAR (255),
    fk_tpdoc INT , /*tipo de documento*/
    pdoc VARCHAR (20) unique,
    pnac VARCHAR(20),
    pnacionalidad VARCHAR(255),
    pmovil VARCHAR (9),
    fk_estadoc INT,/*estado civil*/
    fk_sexo INT ,
    pfam INT(5),/*familia e hijos*/
    pdireccion VARCHAR(255),
    pcemerg VARCHAR(255),/*contacto de emergencia*/
    fk_ptc INT, /*parentesco*/
    fk_estado INT,
    constraint fk_tpdoc_id foreign key(fk_tpdoc)references tpdoc(id),
    CONSTRAINT fk_estacoc_id FOREIGN KEY (fk_estadoc)REFERENCES estadoc(id),
    constraint fk_sexo_id foreign key (fk_sexo) references sexos(id),
    constraint fk_ptc_id foreign key(fk_ptc)references parentescos(id),
    constraint fk_estados_id foreign key (fk_estado) references estados(id)
)ENGINE=INNODB;

/*Tabla Plan Laboral*/
CREATE TABLE IF NOT EXISTS planes(
	id int not null auto_increment primary key,
    plhi VARCHAR(20) ,
    plhs VARCHAR(20) ,
    fk_area INT ,
    fk_cargo INT ,
    fk_pen INT ,
    fk_afp INT ,
    plsueldo INT ,
    plpp INT ,/*periodo de pago*/
    fk_pago INT ,
    plcuenta VARCHAR(20) ,
    fk_bank INT ,
    pltitular VARCHAR(255),
    fk_emp INT ,
    fk_personal INT ,
    constraint fk_area_id foreign key (fk_area) references areas(id),
    constraint fk_cargo_id foreign key (fk_cargo) references cargos(id),
    constraint fk_pen_id foreign key (fk_pen) references pensiones(id),
    constraint fk_afp_id foreign key (fk_afp) references afp(id),
    constraint fk_pago_id foreign key (fk_pago) references fpagos(id),
    constraint fk_bank_id foreign key (fk_bank) references bancos(id),
    constraint fk_emp_id foreign key (fk_emp) references empresas(id),
    constraint fk_personal_id foreign key (fk_personal) references personal(id)
)ENGINE=INNODB;

/*Selects simples*/
select *  from asistencias;

/* Selects completos */

SELECT p.id AS 'idp', 
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
p.pcemerg AS 'contaco', 
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
 FROM personal p 
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
 ORDER BY p.id DESC;
 
/*Vistas */
CREATE VIEW listaPersonal AS SELECT p.id as 'id_p',pl.id as 'id_pl' FROM personal p INNER JOIN planes pl ON p.fk_pl = pl.id WHERE pl.fk_emp=1;
select * from listaPersonal;
/*drop view listaPersonal;*/
/*Vista usuarios*/
CREATE VIEW usuariosAll AS SELECT u.id as 'id_usuario',u.uname,u.uape,u.unick,u.upass,r.id as 'id_rol',r.rname, e.id as 'id_estado',e.ename FROM usuarios u INNER JOIN roles r ON u.fk_rol = r.id INNER JOIN estados e ON u.fk_estado = e.id ;
select * from usuariosALL;



