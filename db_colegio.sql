-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 08-10-2018 a las 20:54:06
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_alumno_curso`
--

CREATE TABLE `tb_alumno_curso` (
  `tb_alumno_id` int(11) NOT NULL,
  `tb_curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_alumo`
--

CREATE TABLE `tb_alumo` (
  `tb_alumno_curso` int(11) NOT NULL,
  `tb_alumno_tarea` int(11) NOT NULL,
  `tb_alumno_docente` int(11) NOT NULL,
  `tb_usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_colegio`
--

CREATE TABLE `tb_colegio` (
  `tb_colegio_id` int(4) NOT NULL,
  `tb_colegio_nombre` varchar(20) NOT NULL,
  `tb_colegio_distrito` varchar(20) NOT NULL,
  `tb_colegio_direccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curso`
--

CREATE TABLE `tb_curso` (
  `tb_curso_id` int(4) NOT NULL,
  `tb_curso_nombre` varchar(20) NOT NULL,
  `tb_curso_colegio_id` int(11) NOT NULL,
  `tb_curso_grupo` char(1) NOT NULL,
  `tb_docente_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_docente`
--

CREATE TABLE `tb_docente` (
  `tb_docente_id` int(4) NOT NULL,
  `tb_docente_colegio_id` int(11) NOT NULL,
  `tb_docente_desc` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_notificacion`
--

CREATE TABLE `tb_notificacion` (
  `tb_notificacion_id` int(4) NOT NULL,
  `tb_usuario1_id` int(4) NOT NULL,
  `tb_usuario2_id` int(4) NOT NULL,
  `tb_notificacion_tipo` varchar(1) NOT NULL,
  `fecha` datetime NOT NULL,
  `tb_publicion_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_publicacion`
--

CREATE TABLE `tb_publicacion` (
  `tb_publicacion_id` int(4) NOT NULL,
  `tb_publicacion_asunto` varchar(40) NOT NULL,
  `tb_publicacion_desc` int(150) NOT NULL,
  `tb_publicacion_tipo` char(1) NOT NULL,
  `tb_usuario_receptor_id` int(4) NOT NULL,
  `tb_usuario_emisor_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tarea`
--

CREATE TABLE `tb_tarea` (
  `tb_tarea_id` int(4) NOT NULL,
  `tb_tarea_nombre` varchar(20) NOT NULL,
  `tb_tarea_desc` varchar(40) NOT NULL,
  `tb_tarea_id_curso` int(4) NOT NULL,
  `tb_tarea_fec_ini` date NOT NULL,
  `tb_tarea_fecha_fin` date DEFAULT NULL,
  `tb_tarea_nota` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tarea_curso`
--

CREATE TABLE `tb_tarea_curso` (
  `tb_tarea_id` int(4) NOT NULL,
  `tb_curso_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `tb_usuario_id` int(4) NOT NULL,
  `tb_usuario_nom` varchar(20) NOT NULL,
  `tb_usuario_ape` varchar(20) NOT NULL,
  `tb_usuario_email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tb_usuario_tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_alumno_curso`
--
ALTER TABLE `tb_alumno_curso`
  ADD PRIMARY KEY (`tb_alumno_id`,`tb_curso_id`),
  ADD KEY `fk_curso_id` (`tb_curso_id`);

--
-- Indices de la tabla `tb_alumo`
--
ALTER TABLE `tb_alumo`
  ADD KEY `fk_usuario_id` (`tb_usuario_id`);

--
-- Indices de la tabla `tb_colegio`
--
ALTER TABLE `tb_colegio`
  ADD PRIMARY KEY (`tb_colegio_id`);

--
-- Indices de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`tb_curso_id`),
  ADD KEY `fk_docente_id` (`tb_docente_id`);

--
-- Indices de la tabla `tb_docente`
--
ALTER TABLE `tb_docente`
  ADD PRIMARY KEY (`tb_docente_id`);

--
-- Indices de la tabla `tb_notificacion`
--
ALTER TABLE `tb_notificacion`
  ADD KEY `fk_publicacion_id` (`tb_publicion_id`),
  ADD KEY `fk_emisor_id` (`tb_usuario1_id`),
  ADD KEY `fk_receptor_id` (`tb_usuario2_id`);

--
-- Indices de la tabla `tb_publicacion`
--
ALTER TABLE `tb_publicacion`
  ADD PRIMARY KEY (`tb_publicacion_id`);

--
-- Indices de la tabla `tb_tarea`
--
ALTER TABLE `tb_tarea`
  ADD PRIMARY KEY (`tb_tarea_id`),
  ADD KEY `fk_curso` (`tb_tarea_id_curso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`tb_usuario_id`),
  ADD UNIQUE KEY `tb_usuario_email` (`tb_usuario_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_colegio`
--
ALTER TABLE `tb_colegio`
  MODIFY `tb_colegio_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `tb_curso_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_publicacion`
--
ALTER TABLE `tb_publicacion`
  MODIFY `tb_publicacion_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `tb_usuario_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_alumno_curso`
--
ALTER TABLE `tb_alumno_curso`
  ADD CONSTRAINT `fk_alumno_id` FOREIGN KEY (`tb_alumno_id`) REFERENCES `tb_alumo` (`tb_usuario_id`);

--
-- Filtros para la tabla `tb_alumo`
--
ALTER TABLE `tb_alumo`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`tb_usuario_id`) REFERENCES `usuario` (`tb_usuario_id`);

--
-- Filtros para la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD CONSTRAINT `fk_docente_id` FOREIGN KEY (`tb_docente_id`) REFERENCES `tb_docente` (`tb_docente_id`);

--
-- Filtros para la tabla `tb_notificacion`
--
ALTER TABLE `tb_notificacion`
  ADD CONSTRAINT `fk_receptor_id` FOREIGN KEY (`tb_usuario2_id`) REFERENCES `usuario` (`tb_usuario_id`);

--
-- Filtros para la tabla `tb_tarea`
--
ALTER TABLE `tb_tarea`
  ADD CONSTRAINT `fk_curso` FOREIGN KEY (`tb_tarea_id_curso`) REFERENCES `tb_curso` (`tb_curso_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
