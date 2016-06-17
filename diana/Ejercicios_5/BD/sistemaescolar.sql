-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2016 a las 04:45:18
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemaescolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
`Matricula` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `FechaNacimiento` date NOT NULL,
  `MunicipioId` int(11) NOT NULL,
  `ProgramaId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Matricula`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `Email`, `FechaNacimiento`, `MunicipioId`, `ProgramaId`) VALUES
(1, 'Diana', 'Carrizales', '833 386 4230', 'calle Lucio Blanco #500 col. Fidel Velazquez', 'Diana_Carrizales_dJA@hotmail.com', '1996-05-14', 2, 1),
(2, 'Jesus Alberto', 'Romero Gonzalez', NULL, 'Fraccionamiento Arboledas', 'albertoromero0321@gmail.com', '1991-03-21', 2, 1),
(3, 'Julio Enrique', 'Segura Garcia', NULL, 'Eden', NULL, '1995-12-27', 2, 1),
(4, 'Jessica', 'De la Cruz Hernandez', NULL, 'Los Presidentes', NULL, '1996-07-19', 2, 1),
(5, 'Adrian', 'Benavides Robledo', NULL, 'La Guadilla', NULL, '1996-08-17', 3, 2),
(6, 'Laura Esther', 'Carrizales Espinoza', '833 386 4230', 'Lucio Blanco #500', 'aura_shadain19109@hotmail.com', '1994-10-19', 2, 3),
(11, 'Beatriz', 'Pascual Hernandez', '833 333 77 2', 'Los Mangos', 'beatriz@hotmail.com', '1996-03-05', 2, 1),
(23, 'Jose Antonio', 'Espinosa Alcala', '2642233', 'Calle Mante 1006 Bateria 7', 'ToÃ±o06@hotmail.com', '0000-00-00', 2, 3),
(24, 'Mariel ', 'Orta Contreras', '8332543438', 'Calle Felicia Reyes 234 Col. Insurgentes', 'Mary54@outlook.es', '0000-00-00', 1, 2),
(26, 'Alexis', 'Alarcon Martinez', '833 344 5566', 'Col. Cristal #330', 'alexis.yandel@hotmal.com', '1996-10-20', 3, 3),
(29, 'Diana Guadalupe', 'Espinoza PeÃ±a', '833 344 5522', 'Fcc. Arboledas', 'guadalupe@gmail.com', '1994-12-27', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
`EstadoId` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `No.Municipios` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`EstadoId`, `Nombre`, `No.Municipios`) VALUES
(1, 'Aguas Calientes', 11),
(2, 'Baja California', 5),
(3, 'Coahuila', 67),
(4, 'Chiapas', 122),
(5, 'Tamaulipas', 43),
(6, 'Quintana Roo', 10),
(7, 'Puebla', 217),
(8, 'Sonora', 72);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
`MunicipioId` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `EstadoId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`MunicipioId`, `Nombre`, `EstadoId`) VALUES
(1, 'Abasolo', 5),
(2, 'Altamira', 5),
(3, 'Tampico', 5),
(4, 'Madero', 5),
(5, 'Allende', 3),
(6, 'Hidalgo', 3),
(7, 'Cosio', 1),
(8, 'Tepezala', 1),
(9, 'Soliraridad', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programaeducativo`
--

CREATE TABLE IF NOT EXISTS `programaeducativo` (
`ProgramaId` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programaeducativo`
--

INSERT INTO `programaeducativo` (`ProgramaId`, `Nombre`, `Descripcion`) VALUES
(1, 'Ingenieria en Tecnologias de la Informacion', 'El ingeniero en Tecnologias de la Informacion es un profesionista con la capacidad para analizar, diseñar, desarrollar e implementar sistemas basados en el uso de computadoras. Aplica sus conocimientos para dar solucion a necesidades diversas en aplicaciones comerciales, industriales, tecnicas y de negocios en general.'),
(2, 'Ingenieria en Energia', 'El ingeniero en energia esta orientado al diseño, optimizacion, instalacion,operacion y mantenimiento de sistemas energeticos basados en fuentes renovables y no renovables, asi como al uso eficiente de  energia.'),
(3, 'Ingenieria en Electronica y Telecomunicaciones', 'El Profesional Asociado egresado del Programa Academico de Ingenieria en Electronica y Telecomunicaciones es competente para operar y dar soporte tecnico a sistemas electronicos y de telecomunicaciones.'),
(4, 'Ingenieria Industrial', 'El ingeniero Industrial egresado de la Universidad Politecnica de Altamira es un profesionista etico y humanistico; con solida formacion basada en competencias que le brindan un pensamiento critico ; comprometido con el desarrollo social, ecologico, economico, cientifico y tecnologico del pais.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
 ADD PRIMARY KEY (`EstadoId`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
 ADD PRIMARY KEY (`MunicipioId`);

--
-- Indices de la tabla `programaeducativo`
--
ALTER TABLE `programaeducativo`
 ADD PRIMARY KEY (`ProgramaId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
MODIFY `EstadoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
MODIFY `MunicipioId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `programaeducativo`
--
ALTER TABLE `programaeducativo`
MODIFY `ProgramaId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
