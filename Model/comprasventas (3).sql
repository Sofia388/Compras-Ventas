-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2021 a las 05:53:42
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comprasventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Codigo` int(100) NOT NULL,
  `Cliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Codigo`, `Cliente`) VALUES
(3329, 'Ethan'),
(3345, 'Sofia'),
(3352, 'Juanito'),
(3358, 'Melany'),
(3385, 'Pepe'),
(3386, 'Andres'),
(3387, 'Pedro'),
(3398, 'Alejandro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depto`
--

CREATE TABLE `depto` (
  `idDepto` int(10) UNSIGNED NOT NULL,
  `Codigo` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(10) UNSIGNED NOT NULL,
  `DardeBaja_2` varchar(50) DEFAULT NULL,
  `Motivo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagocompra`
--

CREATE TABLE `pagocompra` (
  `Trabajador_Usuario` int(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Cheque` varchar(100) NOT NULL,
  `ValordeCheque` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagocompra`
--

INSERT INTO `pagocompra` (`Trabajador_Usuario`, `Fecha`, `Hora`, `Cheque`, `ValordeCheque`) VALUES
(1, '0000-00-00', '00:00:22', '00016', '500.00'),
(2, '0000-00-00', '22:27:00', '0018', '900.00'),
(3, '0000-00-00', '11:08:00', '00023', '800.00'),
(4, '0000-00-00', '22:28:00', '00017', '1000.00'),
(6, '0000-00-00', '14:50:00', '00019', '900.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoventa`
--

CREATE TABLE `pagoventa` (
  `Trabajador_Usuarios` int(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Cheque` varchar(100) NOT NULL,
  `ValordeCheque` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagoventa`
--

INSERT INTO `pagoventa` (`Trabajador_Usuarios`, `Fecha`, `Hora`, `Cheque`, `ValordeCheque`) VALUES
(1, '0000-00-00', '22:01:00', '00015', '100.00'),
(2, '0000-00-00', '22:01:00', '00015', '100.00'),
(3, '0000-00-00', '22:26:00', '0019', '800.00'),
(4, '0000-00-00', '11:10:00', '00028', '700.00'),
(9, '0000-00-00', '15:19:00', '00018', '7000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Codigo` int(100) NOT NULL,
  `Proveedores` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Codigo`, `Proveedores`) VALUES
(2285, 'Alejandro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRoles` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` varchar(100) NOT NULL,
  `Depto_idDepto` int(10) UNSIGNED NOT NULL,
  `Estado_idEstado` int(10) UNSIGNED NOT NULL,
  `Roles_idRoles` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Depto_idDepto`, `Estado_idEstado`, `Roles_idRoles`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES
('cvalladares', 123, 2019, 2019006, 'cvalladares', 'Gonzales', '2019@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `depto`
--
ALTER TABLE `depto`
  ADD PRIMARY KEY (`idDepto`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `pagocompra`
--
ALTER TABLE `pagocompra`
  ADD PRIMARY KEY (`Trabajador_Usuario`);

--
-- Indices de la tabla `pagoventa`
--
ALTER TABLE `pagoventa`
  ADD PRIMARY KEY (`Trabajador_Usuarios`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Usuario_FKIndex1` (`Roles_idRoles`),
  ADD KEY `Usuario_FKIndex2` (`Estado_idEstado`),
  ADD KEY `Usuario_FKIndex3` (`Depto_idDepto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `depto`
--
ALTER TABLE `depto`
  MODIFY `idDepto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagoventa`
--
ALTER TABLE `pagoventa`
  MODIFY `Trabajador_Usuarios` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
