CREATE DATABASE IF NOT EXISTS labyermedic;
use labyermedic;
/*Tabla Asistencia*/
CREATE TABLE IF NOT EXISTS asistencias(
	id int not null auto_increment primary key,
    doc varchar(20),
    fecha date,
    hora time
)ENGINE=INNODB;
/*Tabla Roles*/
CREATE TABLE IF NOT EXISTS roles(
	id int not null auto_increment primary key,
    rname varchar(255)
)ENGINE=INNODB;
insert into roles (rname) values ('Administrador'),('RRHH');

select * from roles;
/*SET FOREIGN_KEY_CHECKS=0;
TRUNCATE roles;*/

/*Tabla Empresas*/
CREATE TABLE IF NOT EXISTS empresas(
	id int not null auto_increment primary key,
    ename varchar(255)
)ENGINE=INNODB;

insert into empresas(ename) values ('Yermedic'),('Sideruk'),('JJBoggio');
/*Tabla Estado*/
CREATE TABLE IF NOT EXISTS estados(
	id int not null auto_increment primary key,
    ename varchar(255)
)ENGINE=INNODB;
insert into estados (ename) values ('Habilitado'),('Deshabilitado');
/*Tabla Areas*/
CREATE TABLE IF NOT EXISTS areas(
	id int not null auto_increment primary key,
    aname varchar(255)
)ENGINE=INNODB;

insert into areas (aname) values('Contabilidad'),('Sistemas'),('Direccion Tecnica'),('Almacen'),('Operaciones');
/*Tabla Cargos*/
CREATE TABLE IF NOT EXISTS cargos(
	id int not null auto_increment primary key,
    cname varchar(255)
)ENGINE=INNODB;

insert into cargos(cname)values('Gerente'),('RRHH'),('Sistemas'),('Contador'),('Jefatura'),('Asistente'),('Supervisor'),('Operario');
/*Tabla Tipo_Pension*/
CREATE TABLE IF NOT EXISTS pensiones(
	id int not null auto_increment primary key,
    psname varchar(255)
)ENGINE=INNODB;

insert into pensiones(pname)values('AFP'),('ONP');

/*Tabla pensiones AFP*/
CREATE TABLE IF NOT EXISTS afp(
	id int not null auto_increment primary key,
	afname varchar(255)
)ENGINE=INNODB;

insert into afp(afname) values('Habita'),('Positiva');
/*Tabla Formas_Pago*/
CREATE TABLE IF NOT EXISTS fpagos(
	id int not null primary key auto_increment,
    fpname varchar(255)
)ENGINE=INNODB;

insert into fpagos(fpname) values('Efectivo'),('Deposito');
/*Tabla bancos*/
CREATE TABLE IF NOT EXISTS bancos(
	id int not null auto_increment primary key,
    bname varchar(255)
)ENGINE = INNODB;

insert into bancos(bname)values('BCP'),('Interbank'),('BBVA');
/*Tabla Sexo*/
CREATE TABLE IF NOT EXISTS sexos(
	id int not null auto_increment primary key,
    sname varchar(255)
)ENGINE=INNODB;

insert into sexos(sname)values('Masculino'),('Femenino');
/*Tabla Estado civil*/
CREATE TABLE IF NOT EXISTS estadoC(
	id int not null auto_increment primary key,
    ecname varchar(255)
)ENGINE=INNODB;

insert into estadoC(ecname)values('Soltero'),('Casado'),('Viudo'),('Divorciado');
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

select * from usuarios;
insert into usuarios(uname,uape,unick,upass,fk_rol,fk_estado)values('wilfredo','luna','wifi','1234',1,1),('Prueba','Prueba','prueba','prueba',1,2);

/*Tabla de tipo de documento*/
CREATE TABLE IF NOT EXISTS tpdoc(
	id int not null auto_increment primary key,
    tdname varchar(255)
)ENGINE=INNODB;

insert into tpdoc(tdname)values('DNI'),('Carnet de extrajeria'),('Pasaporte'),('RUC');

/*Tabla de parentesco*/
CREATE TABLE IF NOT EXISTS parentescos(
	id int not null auto_increment primary key,
    prname varchar(255)
)ENGINE=INNODB;

insert into parentescos(prname)values('Hijo(a)'),('Hermano(a)'),('Padre'),('Madre');
/*Tabla Plan Laboral*/
CREATE TABLE IF NOT EXISTS planes(
	id int not null auto_increment primary key,
    plhi time,
    plhs time,
    fk_area int,
    fk_cargo int,
    fk_pen int,
    fk_afp int,
    plsueldo int,
    plpp int,/*periodo de pago*/
    fk_pago int,
    plcuenta varchar(20),
    fk_bank int,
    pltitular varchar(255),
    fk_emp int,
    fk_personal int,
    constraint fk_area_id foreign key (fk_area) references areas(id),
    constraint fk_cargo_id foreign key (fk_cargo) references cargos(id),
    constraint fk_pen_id foreign key (fk_pen) references pensiones(id),
    constraint fk_afp_id foreign key (fk_afp) references afp(id),
    constraint fk_pago_id foreign key (fk_pago) references fpagos(id),
    constraint fk_bank_id foreign key (fk_bank) references bancos(id),
    constraint fk_emp_id foreign key (fk_emp) references empresas(id),
    constraint fk_personal_id foreign key (fk_personal) references personal(id)
)ENGINE=INNODB;

Drop table planes;
/*Tabla personal*/
CREATE TABLE IF NOT EXISTS personal(
	id int not null auto_increment primary key,
    pname varchar(255),
    papellido varchar(255),
    fk_tpdoc int, /*tipo de documento*/
    pdoc varchar(20) unique,
    pnac date,
    pnacionalidad varchar(20),
    pmovil varchar(9),
    fk_sexo int,
    pdireccion text,
    pfam varchar(5),/*familia*/
    pce varchar(255),/*contacto de emergencia*/
    fk_ptc int, /*parentesco*/
    fk_estado int,
    constraint fk_tpdoc_id foreign key(fk_tpdoc)references tpdoc(id),
    constraint fk_sexo_id foreign key (fk_sexo) references sexos(id),
    constraint fk_ptc_id foreign key(fk_ptc)references parentescos(id),
    constraint fk_estados_id foreign key (fk_estado) references estados(id)
)ENGINE=innodb;

/*Tabla de assitencias*/
CREATE TABLE IF NOT EXISTS asistencias(
	id int not null primary key,
    doc varchar(20),
    fecha date,
    hora time
)ENGINE=INNODB;
/*Selects simples*/
select *  from asistencias;
/*Vistas */
CREATE VIEW listaPersonal AS SELECT p.id as 'id_p',pl.id as 'id_pl' FROM personal p INNER JOIN planes pl ON p.fk_pl = pl.id WHERE pl.fk_emp=1;
select * from listaPersonal;
/*drop view listaPersonal;*/
/*Vista usuarios*/
CREATE VIEW usuariosAll AS SELECT u.id as 'id_usuario',u.uname,u.uape,u.unick,u.upass,r.id as 'id_rol',r.rname, e.id as 'id_estado',e.ename FROM usuarios u INNER JOIN roles r ON u.fk_rol = r.id INNER JOIN estados e ON u.fk_estado = e.id ;
select * from usuariosALL;



show tables;