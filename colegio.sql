-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-06-2014 a las 01:00:43
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `colegio`
--
CREATE DATABASE IF NOT EXISTS `colegio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `colegio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Puesto` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Id`, `Nombre`, `Puesto`) VALUES
(1, 'Lisseth Avila', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Carrera_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Alumno_Carrera1_idx` (`Carrera_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Id`, `Nombre`, `Telefono`, `Direccion`, `Carrera_Id`) VALUES
(1, 'Susana Dominguez', '3344-5566', 'Quetzaltenango', 1),
(3, 'Jorge  Gutierrez', '7777777', ' Quetzaltenango', 5),
(4, 'Tomas Mazariegos', '7766-5544', 'Quetzaltenango', 4),
(6, 'Fernando Caceres', '3344-5566', ' Quetzaltenango', 6),
(7, 'Carlos Sanchez', '7766-0099', 'Quetzaltenango', 7),
(8, 'Cesar Lopez', '7744-2233', 'Quetzaltenango', 8),
(9, 'Monica Benitez', '7766-0099', 'Quetzaltenango', 1),
(10, 'Esteban Rosales', '7766-8877', 'Quetzaltenango', 2),
(11, 'Heidi Rosales', '7788-9900', 'Quetzaltenango', 3),
(15, 'Carolina Reyes', '2233-4455', 'Quetzaltenango', 2),
(16, 'Camila Flores', '4455-6677', 'Quetzaltenango', 5),
(17, 'Rosa Juarez', '9988-0077', 'Quetzaltenango', 4),
(23, 'Maria Rosales', '3344-5566', 'Quetzaltenango', 3),
(24, 'Jorge Martinez', '8877-0099', 'Quetzaltenango', 4),
(25, 'Marcela Reyes', '3344-5566', 'Quetzaltenango', 5),
(26, 'luis Molina', '7777777', 'Quetzaltenango', 4),
(27, 'Maria Gutierrez', '5566-7788', 'Quetzaltenango', 6),
(29, 'Jorge  Gutierrez', '7777777', 'Quetzaltenango', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Perito en Administracion de Empresas', 'Esta carrera es de 3 años'),
(2, 'Perito Contador', 'Esta carrera es de 3 años'),
(3, 'Perito en Mercadotecnia', 'Esta carrera es de 3 años'),
(4, 'Perito en Dibujo', 'Esta carrera es de 3 años'),
(5, 'Bach en Computacion', 'Esta carrera es de 2 años'),
(6, 'Bach en Ciencias y Letras', 'Esta carrera es de 2 años'),
(7, 'Bach en Mecanica', 'Esta carrera es de 2 años'),
(8, 'Bach en Medicina', 'Esta carrera es de 2 años');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedratico`
--

CREATE TABLE IF NOT EXISTS `catedratico` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `catedratico`
--

INSERT INTO `catedratico` (`Id`, `Nombre`, `Telefono`, `Direccion`) VALUES
(1, 'Marta Sanchez', '2233-4411', 'Quetzaltenango'),
(2, 'Marco Reyes', '7766-0099', 'Quetzaltenango'),
(3, 'Sandra Castillo', '8877-0099', 'Guatemala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegio`
--

CREATE TABLE IF NOT EXISTS `colegio` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Evento_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Colegio_Evento1_idx` (`Evento_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`Id`, `Nombre`) VALUES
(1, 'Matematica'),
(2, 'Computacion'),
(3, 'Fisica'),
(4, 'Quimica'),
(5, 'Etica'),
(6, 'Contabilidad'),
(7, 'Estadistica'),
(8, 'Administracion'),
(9, 'Ingles'),
(10, 'Sociologia'),
(11, 'Etica'),
(12, 'Taller'),
(13, 'Programacion'),
(14, 'Ciencias Sociales'),
(15, 'Mercadotecnia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecatedratico`
--

CREATE TABLE IF NOT EXISTS `detallecatedratico` (
  `Id` int(11) NOT NULL,
  `Catedratico_Id` int(11) NOT NULL,
  `Curso_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Catedratico_has_Curso_Curso1_idx` (`Curso_Id`),
  KEY `fk_Catedratico_has_Curso_Catedratico1_idx` (`Catedratico_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallecatedratico`
--

INSERT INTO `detallecatedratico` (`Id`, `Catedratico_Id`, `Curso_Id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecurso`
--

CREATE TABLE IF NOT EXISTS `detallecurso` (
  `Id` varchar(45) NOT NULL,
  `Curso_Id` int(11) NOT NULL,
  `Carrera_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Curso_has_Carrera_Carrera1_idx` (`Carrera_Id`),
  KEY `fk_Curso_has_Carrera_Curso_idx` (`Curso_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallecurso`
--

INSERT INTO `detallecurso` (`Id`, `Curso_Id`, `Carrera_Id`) VALUES
('1', 1, 3),
('2', 2, 3),
('3', 3, 3),
('4', 4, 3),
('5', 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Mision', 'Formar personas respetuosas, autónomas, responsables y competentes. Ciudadanos globales con capacidad de liderar procesos de cambio fundamentados en el bien común'),
(2, 'Vision', 'Ser reconocidos  nacional e internacionalmente por la integralidad de la propuesta educativa, centrada en la formación del ser y el desarrollo de competencias que responden a estándares de calidad, mediante procesos pedagógicos que reconoce la individualidad y promueven la autonomía del estudiantes'),
(3, 'Valores', 'Compromiso -------- Respeto -------- Responsabilidad -------- Tolerancia -------- Rentabilidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Curso_Id` int(11) NOT NULL,
  `Alumno_Id` int(11) NOT NULL,
  `Tipo_Nota_Id` int(11) NOT NULL,
  `Nota` int(3) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Nota_Curso1_idx` (`Curso_Id`),
  KEY `fk_Nota_Alumno1_idx` (`Alumno_Id`),
  KEY `fk_Nota_Tipo_Nota1_idx` (`Tipo_Nota_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`Id`, `Curso_Id`, `Alumno_Id`, `Tipo_Nota_Id`, `Nota`) VALUES
(1, 1, 11, 1, 8),
(2, 1, 11, 2, 14),
(3, 1, 11, 3, 16),
(4, 1, 11, 4, 43),
(5, 2, 11, 1, 5),
(6, 2, 11, 2, 17),
(7, 2, 11, 3, 14),
(8, 2, 11, 4, 34),
(9, 3, 11, 1, 7),
(10, 3, 11, 2, 14),
(11, 3, 11, 3, 12),
(12, 3, 11, 4, 39),
(13, 4, 11, 1, 8),
(14, 4, 11, 2, 16),
(15, 4, 11, 3, 12),
(16, 4, 11, 4, 45),
(17, 5, 11, 1, 6),
(18, 5, 11, 2, 15),
(19, 5, 11, 3, 20),
(20, 5, 11, 4, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_nota`
--

CREATE TABLE IF NOT EXISTS `tipo_nota` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_nota`
--

INSERT INTO `tipo_nota` (`Id`, `Nombre`) VALUES
(1, 'Parcial_1'),
(2, 'Parcial_2'),
(3, 'Zona'),
(4, 'Final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Id`, `Nombre`) VALUES
(1, 'Administrador'),
(2, 'Catedratico'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Contrasena` varchar(45) NOT NULL,
  `Tipo_Usuario_Id` int(11) NOT NULL,
  `Catedratico_Id` int(11) DEFAULT NULL,
  `Administrador_Id` int(11) DEFAULT NULL,
  `Alumno_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Usuario_Tipo_Usuario1_idx` (`Tipo_Usuario_Id`),
  KEY `fk_Usuario_Catedratico1_idx` (`Catedratico_Id`),
  KEY `fk_Usuario_Administrador1_idx` (`Administrador_Id`),
  KEY `fk_Usuario_Alumno1_idx` (`Alumno_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Contrasena`, `Tipo_Usuario_Id`, `Catedratico_Id`, `Administrador_Id`, `Alumno_Id`) VALUES
(3, 'Lisseth', 'liss', 1, NULL, 1, NULL),
(4, 'Marta', 'mar', 2, 1, NULL, NULL),
(5, 'Heidi', 'hei', 3, NULL, NULL, 11);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_Alumno_Carrera1` FOREIGN KEY (`Carrera_Id`) REFERENCES `carrera` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `colegio`
--
ALTER TABLE `colegio`
  ADD CONSTRAINT `fk_Colegio_Evento1` FOREIGN KEY (`Evento_Id`) REFERENCES `evento` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallecatedratico`
--
ALTER TABLE `detallecatedratico`
  ADD CONSTRAINT `fk_Catedratico_has_Curso_Catedratico1` FOREIGN KEY (`Catedratico_Id`) REFERENCES `catedratico` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Catedratico_has_Curso_Curso1` FOREIGN KEY (`Curso_Id`) REFERENCES `curso` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallecurso`
--
ALTER TABLE `detallecurso`
  ADD CONSTRAINT `fk_Curso_has_Carrera_Carrera1` FOREIGN KEY (`Carrera_Id`) REFERENCES `carrera` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Curso_has_Carrera_Curso` FOREIGN KEY (`Curso_Id`) REFERENCES `curso` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_Nota_Alumno1` FOREIGN KEY (`Alumno_Id`) REFERENCES `alumno` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Nota_Curso1` FOREIGN KEY (`Curso_Id`) REFERENCES `curso` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Nota_Tipo_Nota1` FOREIGN KEY (`Tipo_Nota_Id`) REFERENCES `tipo_nota` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Administrador1` FOREIGN KEY (`Administrador_Id`) REFERENCES `administrador` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Alumno1` FOREIGN KEY (`Alumno_Id`) REFERENCES `alumno` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Catedratico1` FOREIGN KEY (`Catedratico_Id`) REFERENCES `catedratico` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Tipo_Usuario1` FOREIGN KEY (`Tipo_Usuario_Id`) REFERENCES `tipo_usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
