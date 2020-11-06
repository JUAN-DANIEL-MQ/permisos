-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2020 a las 07:53:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `id_usuario`, `id_rol`) VALUES
(1, 1, 2),
(3, 4, 1),
(4, 6, 4),
(5, 11, 2),
(6, 7, 2),
(7, 1, 4),
(8, 9, 2),
(9, 9, 1),
(10, 8, 4),
(11, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`) VALUES
(1, 'Estudiante'),
(2, 'Docente'),
(4, 'Administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuarios` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuarios`, `correo`, `clave`) VALUES
(1, 'JUAN DANIEL MAMANI ', 'juandanielquispe12345@gmail.com', '91626c85825660803224648b50fc15d0'),
(4, 'JORGE DANIEL GUTIERREZ', 'jorgemenortu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'MARGARITA LOPEZ CONTRERAS', 'margaritalopez12364@htmail.com', 'e3d93bd7027198ebf9267d151740123a'),
(6, 'LUIS ENRIQUE MALDONADO', 'luisitocomunica@gmail.com', '43c16015339d757c550752fab81bd4d3'),
(7, 'JORGE LUIS CASABLANCA', 'jorgitolmlalye@gmail.com', 'a5d215ddcdbaa4d18d4e17b168ddaac1'),
(8, 'JAVIER MASIAS CAZAS', 'javimaxicasas@gmail.com', '71449e919e62a62b42ebdf08d3d6cf09'),
(9, 'LIMBER HUACHALLA', 'limhuachalla@gmail.com', '7f6dd4595eece559a11f935835b7c3cf'),
(10, 'ROYER MANZANEDA DELGADO', 'roymanzasdelgado@gmail.com', '0c8570855505ebbdcb12aa5c72a277dd'),
(11, 'MARIA NEGRETE OVIEDO', 'negreteoviedomar@gmail.com', '3680b1f8a0a4e72e6e93c39dd4cec64e'),
(12, 'CAROLINA SALDIAS NINA', 'carolinasaldiasnina@gmail.com', 'fbbabbc81d27aac30a0bf99a3839c12b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fk_usu` (`id_usuario`),
  ADD KEY `id_fk_rol` (`id_rol`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `id_fk_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_fk_usu` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
