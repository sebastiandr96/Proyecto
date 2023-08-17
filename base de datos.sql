CREATE DATABASE mascotas;

USE mascotas;

CREATE TABLE `usuario` (
  `id_usuario` int PRIMARY KEY,
  `nombres` varchar(100),
  `apellidos` varchar(50),
  `telefono` varchar(30),
  `correo` varchar(100)
  Contraseña varchar (50) 
);

CREATE TABLE `mascotas` (
  `id_mascota` int PRIMARY KEY,
  `nombre` varchar(50),
  `raza` varchar(100),
  `edad` int,
   `color` varchar(50),
   `peso` varchar(10),
   `tipo_alimento` int(50),
   `id_usuario` int,
   imagen  varchar (50)
   foreign key (`id_usuario`) references `usuario` (`id_usuario`),
   foreign key (`tipo_alimento`) references `tipo_alimento` (`id_alimento`)
);

create table  `tipo_alimento` (
`id_alimento` int primary key,
`marca` varchar (50),
`categoria` varchar (50)
);

create table `seg_control_profe`(
`id_seg_control` int primary key,
`especialidad` varchar (100),
`nombre_especialista`varchar(100),
`apellido_especialista`varchar(100),
`observaciones`varchar(200),
`fecha`date,
id_mascota` int ,
foreign key (`id_mascota`) references `mascotas` (`id_mascota`),

);

CREATE TABLE `seg_condicion` (
  `id_condicion` int primary key,
  `condicion` varchar(100),
  `fecha` date,
  `seguimiento` varchar (100)
  id_mascota` int ,
foreign key (`id_mascota`) references `mascotas` (`id_mascota`),
);

create table `seg_vacunas`(
id_vacuna int primary key 
fecha_vacuna date
vacuna varchar()
`id_mascota` int, 
   foreign key (`id_mascota`) references `mascota` (`id_mascota`),
   

);

