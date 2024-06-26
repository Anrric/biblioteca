-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2024 a las 21:21:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `area` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `area`) VALUES
(1, 'Administracion'),
(2, 'Gestion tecnica'),
(3, 'Mediateca'),
(4, 'Ludoteca'),
(5, 'Acervo general');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_localidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `id_estado`, `id_municipio`, `id_localidad`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 4),
(3, 1, 3, 5),
(4, 1, 1, 3),
(5, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellidoP` varchar(15) DEFAULT NULL,
  `apellidoM` varchar(15) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `CURP` varchar(15) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL,
  `confContraseña` varchar(20) DEFAULT NULL,
  `fechaIng` date DEFAULT NULL,
  `id_puesto` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_estatusE` int(11) NOT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellidoP`, `apellidoM`, `edad`, `CURP`, `correo`, `contraseña`, `confContraseña`, `fechaIng`, `id_puesto`, `id_area`, `id_estatusE`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'Perez', 'Diaz', 25, 'JUPEDI12311AD', 'juanito@gmail.com', 'juanito10', 'juanito10', '2020-03-25', 1, 1, 1, NULL, NULL, NULL),
(2, 'Maria', 'Hernandez', 'Urbano', 27, 'MAHEURSAD23', 'juanito1@gmail.com', 'poku123', 'poku123', '2010-01-23', 5, 2, 2, NULL, NULL, NULL),
(3, 'Camilo', 'Altamira', 'Hernandez', 31, 'CAALHE223AS', 'juanito2@gmail.com', 'a1b2c3d4', 'a1b2c3d4', '2002-12-10', 4, 2, 1, NULL, NULL, NULL),
(4, 'Enrique', 'Gutierrez', 'Zuñiga', 36, 'ENGUZU132211D', 'juanito3@gmail.com', 'tarea12', 'tarea12', '2021-03-02', 4, 1, 1, NULL, NULL, NULL),
(5, 'Pedro', 'Hernandez', 'Jimenez', 45, 'PEHEJI1212J', 'juanito4@gmail.com', 'ppppp121', 'ppppp121', '2003-03-30', 2, 4, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'Hidalgo'),
(2, 'Baja California'),
(4, 'Oaxaca'),
(5, 'Tamaulipas'),
(6, 'Nuevo Leon'),
(8, 'Sinaloa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatuse`
--

CREATE TABLE `estatuse` (
  `id_estatusE` int(11) NOT NULL,
  `estatusE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estatuse`
--

INSERT INTO `estatuse` (`id_estatusE`, `estatusE`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(21, 'naranja'),
(22, 'Nike');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatusl`
--

CREATE TABLE `estatusl` (
  `id_estatusL` int(11) NOT NULL,
  `estatusL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estatusl`
--

INSERT INTO `estatusl` (`id_estatusL`, `estatusL`) VALUES
(1, 'En reparacion'),
(2, 'En prestamo'),
(3, 'Disp.Prestamo'),
(4, 'Disp.Blibioteca'),
(10, 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `genero`) VALUES
(1, 'Aventura'),
(2, 'Infantil'),
(3, 'Drama'),
(4, 'Informativo'),
(5, 'Ficcion'),
(20, 'PruebaGeneros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `año` int(11) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_estatusL` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `nombre`, `año`, `autor`, `id_genero`, `id_usuario`, `id_empleado`, `id_estatusL`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'El principito', 1943, 'Antoine Saint', 1, 1, 2, 3, NULL, NULL, '2024-06-20'),
(2, 'Viaje al centro', 1864, 'Julio Verne', 2, 3, 2, 1, NULL, NULL, NULL),
(3, 'El perfume', 1985, 'Patrick Süskind', 5, 5, 2, 2, NULL, NULL, NULL),
(4, 'Ladivinacomedia', 1320, 'Dante Alighieri', 2, 2, 2, 2, NULL, NULL, NULL),
(5, 'Harry Potter', 1997, ' J.K.Rowling', 1, 1, 2, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL,
  `localidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id_localidad`, `localidad`) VALUES
(1, 'Huixmi'),
(2, 'Tlapacoya'),
(3, 'Pitahayas'),
(4, 'Benito Juarez'),
(5, 'Ixcuinquitlapilco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `municipio`) VALUES
(1, 'Pachuca'),
(2, 'Apan'),
(3, 'San Agustin Tlaxiaca'),
(4, 'Ajacuba'),
(5, 'Actopan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL,
  `puesto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id_puesto`, `puesto`) VALUES
(1, 'Director'),
(2, 'Administrador'),
(3, 'Secretario/a'),
(4, 'Auxiliar'),
(5, 'Coordinador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellidoP` varchar(15) DEFAULT NULL,
  `apellidoM` varchar(15) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `CURP` varchar(15) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL,
  `confContraseña` varchar(20) DEFAULT NULL,
  `id_direccion` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidoP`, `apellidoM`, `edad`, `CURP`, `correo`, `contraseña`, `confContraseña`, `id_direccion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Teo', 'Ponce', 'Juarez', 15, 'JUPOJU12311AD', 'juace@gmail.com', '10juanito', '10juanito', 1, NULL, NULL, NULL),
(2, 'Tania', 'Aguilar', 'Martinez', 30, 'TAAGMAADAA', 'tat11@gmail.com', 'contraseña', 'contraseña', 2, NULL, NULL, NULL),
(3, 'Jimena', 'Hernandez', 'Ceron', 25, 'JIHECESDADA', 'jime@gmail.com', 'pa2tito', 'pa2tito', 3, NULL, NULL, NULL),
(4, 'Abraham', 'Lopez', 'Mezquite', 14, 'ABLOMEADKMD', 'loaa@gmail.com', 'aacaxc', 'aacaxc', 4, NULL, NULL, NULL),
(5, 'Rodrigo', 'Paredes', 'Rios', 31, 'ROPARISADADS', 'ripa@gmail.com', 'gokupr', 'gokupr', 5, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`,`id_localidad`,`id_municipio`,`id_estado`),
  ADD KEY `id_estado_idx` (`id_estado`),
  ADD KEY `id_municipio_idx` (`id_municipio`),
  ADD KEY `id_localidad_idx` (`id_localidad`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`,`id_puesto`,`id_area`,`id_estatusE`),
  ADD KEY `id_puesto_idx` (`id_puesto`),
  ADD KEY `id_area_idx` (`id_area`),
  ADD KEY `id_estatusE_idx` (`id_estatusE`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estatuse`
--
ALTER TABLE `estatuse`
  ADD PRIMARY KEY (`id_estatusE`);

--
-- Indices de la tabla `estatusl`
--
ALTER TABLE `estatusl`
  ADD PRIMARY KEY (`id_estatusL`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`,`id_estatusL`,`id_empleado`,`id_usuario`),
  ADD KEY `id_usuario_idx` (`id_usuario`),
  ADD KEY `id_genero_idx` (`id_genero`),
  ADD KEY `id_empleado_idx` (`id_empleado`),
  ADD KEY `id_estatusL_idx` (`id_estatusL`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`,`id_direccion`),
  ADD KEY `id_direccion_idx` (`id_direccion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`),
  ADD CONSTRAINT `id_localidad` FOREIGN KEY (`id_localidad`) REFERENCES `localidades` (`id_localidad`),
  ADD CONSTRAINT `id_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `id_area` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`),
  ADD CONSTRAINT `id_estatusE` FOREIGN KEY (`id_estatusE`) REFERENCES `estatuse` (`id_estatusE`),
  ADD CONSTRAINT `id_puesto` FOREIGN KEY (`id_puesto`) REFERENCES `puestos` (`id_puesto`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `id_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`),
  ADD CONSTRAINT `id_estatusL` FOREIGN KEY (`id_estatusL`) REFERENCES `estatusl` (`id_estatusL`),
  ADD CONSTRAINT `id_genero` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_direccion` FOREIGN KEY (`id_direccion`) REFERENCES `direcciones` (`id_direccion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
