-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2014 a las 21:25:31
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Puesto` varchar(45) NOT NULL,
  `Usuario_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Administrador_Usuario1_idx` (`Usuario_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Carrera_Id` int(11) NOT NULL,
  `Usuario_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Alumno_Carrera1_idx` (`Carrera_Id`),
  KEY `fk_Alumno_Usuario1_idx` (`Usuario_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedratico`
--

CREATE TABLE IF NOT EXISTS `catedratico` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Usuario_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Catedratico_Usuario1_idx` (`Usuario_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecatedratico`
--

CREATE TABLE IF NOT EXISTS `detallecatedratico` (
  `Id` varchar(45) NOT NULL,
  `Catedratico_Id` int(11) NOT NULL,
  `Curso_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Catedratico_has_Curso_Curso1_idx` (`Curso_Id`),
  KEY `fk_Catedratico_has_Curso_Catedratico1_idx` (`Catedratico_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Curso_Id` int(11) NOT NULL,
  `Alumno_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Nota_Curso1_idx` (`Curso_Id`),
  KEY `fk_Nota_Alumno1_idx` (`Alumno_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Contrasena` varchar(45) NOT NULL,
  `Tipo_Usuario_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Usuario_Tipo_Usuario1_idx` (`Tipo_Usuario_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_Administrador_Usuario1` FOREIGN KEY (`Usuario_Id`) REFERENCES `usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_Alumno_Carrera1` FOREIGN KEY (`Carrera_Id`) REFERENCES `carrera` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumno_Usuario1` FOREIGN KEY (`Usuario_Id`) REFERENCES `usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `catedratico`
--
ALTER TABLE `catedratico`
  ADD CONSTRAINT `fk_Catedratico_Usuario1` FOREIGN KEY (`Usuario_Id`) REFERENCES `usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_Curso_has_Carrera_Curso` FOREIGN KEY (`Curso_Id`) REFERENCES `curso` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Curso_has_Carrera_Carrera1` FOREIGN KEY (`Carrera_Id`) REFERENCES `carrera` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_Nota_Curso1` FOREIGN KEY (`Curso_Id`) REFERENCES `curso` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Nota_Alumno1` FOREIGN KEY (`Alumno_Id`) REFERENCES `alumno` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Tipo_Usuario1` FOREIGN KEY (`Tipo_Usuario_Id`) REFERENCES `tipo_usuario` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
