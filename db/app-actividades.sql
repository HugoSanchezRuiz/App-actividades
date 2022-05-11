CREATE DATABASE app_actividades

USE app_actividades

CREATE TABLE tbl_usuario( 
    id_usuario int(4) NOT NULL PRIMARY KEY auto_increment,
    nombre_usuario varchar(20) NULL,
    correo_usuario varchar(50) NULL ,    
    contra_usuario char(8) NULL
    
);

CREATE TABLE tbl_actividad(
    id_actividad int(4) NOT NULL PRIMARY KEY auto_increment,
    nombre_actividad varchar(30) NULL,
    desc_actividad varchar(120) NULL,
    lugar_actividad varchar (60) NULL,
    foto_actividad varchar (40) NULL,
    id_usuario int(4) NUll

);

CREATE TABLE tbl_actividad_gustada(
    id_act_gust int(4) NOT NULL PRIMARY KEY auto_increment,
    id_usuario int(4) NOT NULL,
    id_actividad int(4) NOT NULL
);
/*Alter tables*/

Alter table `tbl_actividad`
      ADD Constraint`id_usuario_fk` Foreign key (`id_usuario`)
        References `tbl_usuario` (`id_usuario`);

Alter table `tbl_actividad_gustada`
      ADD Constraint`id_usuario_fk2` Foreign key (`id_usuario`)
        References `tbl_usuario` (`id_usuario`);

Alter table `tbl_actividad_gustada`
      ADD Constraint`id_actividad_fk` Foreign key (`id_actividad`)
        References `tbl_actividad` (`id_actividad`);

