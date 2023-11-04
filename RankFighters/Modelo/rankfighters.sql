-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 12:02:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rankfighters`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `iddeporte` int(11) NOT NULL,
  `nombredeporte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`iddeporte`, `nombredeporte`) VALUES
(12, 'Baloncesto'),
(13, 'Futbol'),
(14, 'Voleibol'),
(15, 'Beisbol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `IdUsuario` int(11) NOT NULL,
  `idequipo` int(11) NOT NULL,
  `nombreequipo` varchar(50) NOT NULL,
  `idinsteducat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`IdUsuario`, `idequipo`, `nombreequipo`, `idinsteducat`) VALUES
(1, 28, 'Leones', 4),
(2, 29, 'Comadreja', 3),
(1, 30, 'Tigres', 1),
(2, 31, 'Tiburones', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equiposxevento`
--

CREATE TABLE `equiposxevento` (
  `idequipoevento` int(11) NOT NULL,
  `idequipo` int(11) NOT NULL,
  `idevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equiposxevento`
--

INSERT INTO `equiposxevento` (`idequipoevento`, `idequipo`, `idevento`) VALUES
(1, 28, 1),
(2, 29, 3),
(4, 29, 3),
(3, 29, 5),
(5, 30, 2),
(6, 31, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `descripcion`) VALUES
(0, 'En Proceso'),
(4, 'Finalizado'),
(5, 'Comenzando'),
(6, 'Aplazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL,
  `nombreevento` varchar(50) NOT NULL,
  `iddeporte` int(11) NOT NULL,
  `lugarevento` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafinal` date NOT NULL,
  `idestado` int(11) NOT NULL,
  `linkfoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idevento`, `nombreevento`, `iddeporte`, `lugarevento`, `fechainicio`, `fechafinal`, `idestado`, `linkfoto`) VALUES
(1, '6 VS 6', 12, 1, '2023-10-18', '2023-10-18', 0, 'XXX'),
(2, '5 VS 5', 12, 1, '2023-10-18', '2023-10-18', 5, 'XXX'),
(3, '11 VS 11', 13, 2, '2023-10-19', '2023-10-19', 5, 'XXX'),
(4, '11 VS 11', 13, 3, '2023-10-19', '2023-10-19', 5, 'XXX'),
(5, '3 VS 3', 14, 4, '2023-10-27', '2023-10-27', 6, 'XXX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insteduc`
--

CREATE TABLE `insteduc` (
  `idinsteduc` int(11) NOT NULL,
  `NombreIE` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Celular` varchar(50) NOT NULL,
  `idEncargado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `insteduc`
--

INSERT INTO `insteduc` (`idinsteduc`, `NombreIE`, `Direccion`, `Celular`, `idEncargado`) VALUES
(1, 'IE. Tomas Cadavid Restrepo', ' Cra. 55 #3448', ' 2751291', 1),
(2, 'IE. Liceo Antioqueño', ' Cra. 55 #3448', ' 3751291', 2),
(3, 'IE. La Salle', ' Cra. 18 #32-48', ' 5751291', 1),
(4, 'IE. El Consejo De Bello', ' Cra. 22 #34-48', ' 4751291', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `idtipodoc` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`idtipodoc`, `Descripcion`) VALUES
(1, 'Tarjeta Identidad'),
(2, 'Cedula Extranjera'),
(3, 'Pasaporte'),
(4, 'Cedula Ciudadana ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Usuario'),
(7, 'Ayudante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `idTipodoc` int(11) NOT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  `documento` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idTipodoc`, `idTipoUsuario`, `documento`, `Nombre`, `Apellido`, `Fecha`, `Direccion`, `Correo`, `Telefono`, `contraseña`) VALUES
(1, 1, 2, 1025888855, 'Carlos', 'Henao', '0000-00-00', 'carrera 56A n47-49', 'Usuario@gmail.com', '4513041', '123'),
(2, 1, 1, 1025884555, 'Lina', 'Puerta', '2000-08-12', 'Cra. 57a #37-115', 'Administrador@gmail.com', '5513041', '123'),
(3, 2, 7, 1023788855, 'Sofia', 'Puerta', '1995-08-02', 'Cra. 57a  #21-15', 'Ayudante@gmail.com', '4283041', '123'),
(4, 1, 2, 1025888855, 'Samuel', 'Henao', '2006-08-06', 'carrera 88 #39-40', 'samuel0607123@gmail.com', '46512653', 'samuel123123'),
(5, 3, 2, 2147483647, 'Santiago ', 'Rodriguez', '2000-02-12', 'carrera 24a 36-24', 'santiagozaz89@gmail.com', '2517523', 'santiago123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`iddeporte`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idequipo`),
  ADD KEY `idinsteducat` (`idinsteducat`) USING BTREE,
  ADD KEY `idUsuario` (`IdUsuario`);

--
-- Indices de la tabla `equiposxevento`
--
ALTER TABLE `equiposxevento`
  ADD PRIMARY KEY (`idequipoevento`),
  ADD KEY `idevento` (`idevento`),
  ADD KEY `idequipo` (`idequipo`,`idevento`) USING BTREE;

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`) USING BTREE;

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idevento`),
  ADD KEY `idestado` (`idestado`),
  ADD KEY `lugarevento` (`lugarevento`),
  ADD KEY `iddeporte` (`iddeporte`,`idestado`) USING BTREE;

--
-- Indices de la tabla `insteduc`
--
ALTER TABLE `insteduc`
  ADD PRIMARY KEY (`idinsteduc`),
  ADD KEY `idEncargado` (`idEncargado`) USING BTREE;

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`idtipodoc`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idTipoUsuario` (`idTipoUsuario`),
  ADD KEY `idTipodoc` (`idTipodoc`,`idTipoUsuario`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `iddeporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `equiposxevento`
--
ALTER TABLE `equiposxevento`
  MODIFY `idequipoevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `insteduc`
--
ALTER TABLE `insteduc`
  MODIFY `idinsteduc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`idinsteducat`) REFERENCES `insteduc` (`idinsteduc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipos_ibfk_2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equiposxevento`
--
ALTER TABLE `equiposxevento`
  ADD CONSTRAINT `equiposxevento_ibfk_1` FOREIGN KEY (`idequipo`) REFERENCES `equipos` (`idequipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equiposxevento_ibfk_2` FOREIGN KEY (`idevento`) REFERENCES `eventos` (`idevento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`iddeporte`) REFERENCES `deportes` (`iddeporte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`idestado`) REFERENCES `estado` (`idestado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_ibfk_3` FOREIGN KEY (`lugarevento`) REFERENCES `insteduc` (`idinsteduc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `insteduc`
--
ALTER TABLE `insteduc`
  ADD CONSTRAINT `insteduc_ibfk_1` FOREIGN KEY (`idEncargado`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idTipodoc`) REFERENCES `tipodoc` (`idtipodoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
