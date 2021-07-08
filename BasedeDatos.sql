-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-07-2021 a las 21:12:13
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id16793435_turismo`
--
CREATE DATABASE IF NOT EXISTS `id16793435_turismo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id16793435_turismo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `distrito` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `nombre`, `descripcion`, `departamento`, `provincia`, `distrito`, `imagen`, `descuento`, `precio`) VALUES
(1, 'Puquio', 'Puquio es una bella ciudad que es importante por ser la capital de la provincia de Lucanas, a la cual pertenece y que se encuentra dentro del departamento de Ayacucho. Esta ciudad, según se piensa, podría haberse formado por los distintos asentamientos mineros que existían en la zona. <br>\r\nPuquio, presenta entre sus atractivos turísticos a su Plaza de Armas, aquella se caracteriza por ser una de las que mayor extensión presentan en Lucanas. Alrededor de la plaza, todavía hoy, puede apreciarse una homogénea arquitectura residencial, donde predomina el diseño de inicios Republicanos, con edificaciones donde se presentan balcones elaborados con el uso de madera, así como también otros elementos característicos. <br>\r\nIncluye: Alojamiento, desayuno, Almuerzo y cena. <br>\r\nItinerario:<br>\r\n- Duración 3 días por persona<br>\r\n- Se recomienda llevar ropa abrigadora (casacas, chompa, gorros, ropa impermeable)<br>\r\n► Primera parada: La Iglesia Matriz <br>\r\n► Segunda parada: Pila Pata<br>\r\n► Tercera parada: Lago Yauriwiri<br>', 'Ayacucho', 'Lucas', 'Puquio', '1436365fe5f4750bb40f96649873a919.jpg', 0.10, 280.00),
(2, 'Cabana Sur', 'La ciudad de Cabana se encuentra localizada dentro de la provincia de Pallasca de la que es capital, en el departamento de Ancash. Esta ciudad cuenta con una superficie total de 150.29 Km2, dentro de los cuales se encuentran cuatro barrios además de cinco caseríos. Cabana, cuyo nombre quiere decir “Mirador” se asienta sobre una hermosa colina en cuyo centro se encuentra su hermosa y amplia plaza de Armas.\r\n<br>\r\nEn Cabana además se reconocen estructuras arqueológicas y también vestigios históricos, una de ellas es el Fortín de los Pachas que, según se piensa, habría servido como un centro religioso y defensivo de la zona conocida como Conchucos y donde se rendía culto a Katequilla que, según los antiguos creyentes, era capaz de predecir el futuro.\r\n<br>\r\nIncluye: Alojamiento, desayuno, Almuerzo y cena. <br>\r\nItinerario:<br>\r\n- Duración 3 días por persona<br>\r\n- Se recomienda llevar ropa abrigadora (casacas, chompa, gorros, ropa impermeable).<br>\r\n- Los días festivos son los más coloridos como semana santa y el 28 de Julio.<br>\r\n► Primera parada: Museo Arqueológico Zonal de Cabana<br>\r\n► Segunda parada: Las ocho lagunas<br>\r\n► Tercera parada: Fortín de los Pachas<br>', 'Ayacucho', 'Lucanas', 'Cabana Sur', '1f0eec190b3916bc426256bb69f88ead.jpg', 0.10, 160.00),
(3, 'Sana Ana de Huaycachuacho', 'El distrito de Santa Ana de Huaycahuacho se ubica políticamente en la provinicia de Lucanas, departamento de Ayacucho. Geográficamente está localizado en la margen derecha del río Sondondo, aluyente del río Pampas, cuyas aguas desembocan en el Océano Atlántico. Su superficie está determinada por uno de los ramales secundarios de la cadena montañosa de la cordillera occidental; en donde se encuentran laderas de pendientes pronunciadas y también terrazas llanas; los que son surcados por una serie de quebradas por donde discurren algunos manantiales.\r\n<br>\r\nDentro de este territorio se distribuyen una serie de pisos ecológicos originados por la variación altitudinal, el cual fluctúa de los 2,700 msnm. hasta los 4,300 msnm.; en cada uno de estos pisos ecológicos se encuentran diversas plantas y animales. Igualmente cada una de estas variaciones climáticas han sido aprovechadas para tener agricultura y ganadería, aunque para ellos la falta de agua es uno de los factores para su óptima explotación.\r\n<br>\r\nIncluye: Alojamiento, desayuno, Almuerzo y cena. <br>\r\nItinerario:<br>\r\n- Duración 3 días por persona<br>\r\n- Se recomienda llevar ropa abrigadora (casacas, chompa, gorros, ropa impermeable), como también ropa de baño.<br>\r\n► Primera parada: Anta<br>\r\n► Segunda parada: Baños termales<br>\r\n► Tercera parada: Tucsa<br>\r\n► Cuarta parada: Qorihuayrachina<br>', 'Ayacucho', 'Lucanas', 'Santa Ana de Huaycachuacho', 'a3af645f217d280d0f62882086ea1341.jpg', 0.10, 190.00),
(4, 'Andamarca', 'Andamarca es considerada la capital histórica de los rucanas, palabra quechua que significa “personas trabajadoras”. Esta cultura (700 - 1400 d. C.) se desarrolló en la zona hasta ser finalmente sojuzgada por el Inca Pachacútec. Presenta andenerías preincas que funcionan con un sistema hidráulico subterráneo.\r\n<br>\r\nSu flora y fauna tiene una vegetación nativa entre las que destacan los molles, maguey, eucaliptos, retamas, entre otras.<br>\r\nIncluye: Alojamiento, desayuno, Almuerzo y cena. <br>\r\nItinerario:<br>\r\n- Duración 3 días por persona<br>\r\n- Se recomienda llevar ropa abrigadora (casacas, chompa, gorros, ropa impermeable), como también ropa de baño.<br>\r\n► Primera parada: El Complejo Arqueológico de Caniche <br>\r\n► Segunda parada: Baños termales Ccollpa <br>\r\nSu flora y fauna tiene una vegetación nativa entre las que destacan los molles, maguey, eucaliptos, retamas, entre otras.', 'Ayacucho', 'Lucanas', 'Andamarca', 'c60b8aa0968ed36b9c6b5f472fc33f49.jpg', 0.10, 230.00),
(5, 'Aucará', 'Milenaria ciudad situada al norte de la Provincia de Lucanas y al Sur de Huamanga capital del departamento de Ayacucho, Fundado por el Mítico y Legendario Molle Quiro.“Capital Histórica y Arqueológica del Imperio “Wari, Antamarcas, Rucanas y Soras”.Importante Centro Político y Administrativo Preinca, “Wari”,“Chanca”, Inca Colonial en la Provincia de Lucanas.\r\n<br>\r\nUBICACION: Aucará, capital del distrito del mismo nombre se encuentra a 3250 m.s.n.m. y está localizado entre los paralelos de 14º16’39” Latitud Sur y 73º53’23” Longitud Oeste. CLIMA: Goza de un clima cálido templado y seco, con temperaturas de 14.5ºC y 24ºC, con humedad relativa promedio de 55% con lluvias promedio anual de 650Mn. en los meses de Diciembre a Marzo.\r\n<br>\r\nIncluye: Alojamiento, desayuno, Almuerzo y cena. <br>\r\nItinerario:<br>\r\n- Duración 3 días por persona<br>\r\n- Se recomienda llevar ropa abrigadora (casacas, chompa, gorros, ropa impermeable).<br>\r\n- Los días festivos son los más coloridos como semana santa y el 28 de Julio.<br>\r\n► Primera parada: Plaza Mayor Felipe Guzmán Poma de Ayala<br>\r\n► Segunda parada: Laguna Ccochapampa<br>\r\n► Tercera parada: Tucohuaccanqui<br>', 'Ayacucho', 'Lucanas', 'Aucará', 'da9acabd322777b7af5c997edb8ddda9.jpg', 0.10, 150.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id` int(11) NOT NULL,
  `codpaquete` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenido` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `categoria` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descuento` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `codpaquete`, `contenido`, `precio`, `cantidad`, `categoria`, `descuento`) VALUES
(1, 'Viaje por el Valle de Sondondo', 'El paquete incluye los lugares como: <br>\r\nDuración: 3 días<br>\r\n► Puquio <br>\r\n► Aucará <br>\r\n► Andamarca <br>\r\n► Huaycahuacho <br>', 1500.00, 5, 'oro', 0.10),
(2, 'Tuor1', 'incluye muchos destinos', 2000.00, 8, 'plata', 0.10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblDetalleVenta`
--

CREATE TABLE `tblDetalleVenta` (
  `id` int(11) NOT NULL,
  `idVenta` int(11) DEFAULT NULL,
  `nombreProducto` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precioUnitario` decimal(20,2) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descuento` decimal(20,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblDetalleVenta`
--

INSERT INTO `tblDetalleVenta` (`id`, `idVenta`, `nombreProducto`, `precioUnitario`, `cantidad`, `descuento`) VALUES
(81, 79, 'Machu Picchu', 900.00, 1, 0.20000000),
(82, 80, 'Machu Picchu', 10.00, 1, 0.99000000),
(83, 81, 'Sana Ana de Huaycachuacho', 190.00, 5, 0.10000000),
(84, 83, 'Puquio', 280.00, 2, 0.10000000),
(85, 84, 'Cabana Sur', 160.00, 1, 0.10000000),
(86, 85, 'Puquio', 280.00, 3, 0.10000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblVenta`
--

CREATE TABLE `tblVenta` (
  `id` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PaypalDatos` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `correo` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` decimal(60,2) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblVenta`
--

INSERT INTO `tblVenta` (`id`, `ClaveTransaccion`, `PaypalDatos`, `fecha`, `correo`, `total`, `status`) VALUES
(79, 'j646tpng4qva8ea85577469h27', '', '2021-06-14 02:17:04', 'willisampantay@gmail.com', 720.00, 'pendiente'),
(80, 'mpt7e75n3l9epoudl5bdgobap8', 'Existoso', '2021-06-14 23:36:01', 'miguelpretell59@gmail.com', 0.10, 'completo'),
(81, 'tq77pn0t07ldj2e144d8dajpn5', '', '2021-06-20 19:01:17', 'paluluman911@gmail.com', 855.00, 'pendiente'),
(82, 'vut1t2koq1lqrbku17cgi77hek', '', '2021-06-22 02:10:48', 'edhisonjesus7532@hotmail.com', 0.00, 'pendiente'),
(83, 'vt4vvt63bfhjn9e8vd3iv86bsr', '', '2021-06-22 02:13:34', 'temporal@gmail.com', 504.00, 'pendiente'),
(84, 'gt1ocprbqshtquea23jfplbv7e', '', '2021-06-22 03:10:53', 'miguelpretell59@gmail.com', 144.00, 'pendiente'),
(85, 'vt4vvt63bfhjn9e8vd3iv86bsr', '', '2021-06-22 21:17:08', 'leonel.18inga@gmail.com', 756.00, 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dni`, `email`, `direccion`) VALUES
(1, 'Miguel', 'Pretell Partida', '01020304', 'miguelpretell59@gmail.com', 'Av.santa Elvira');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `usuario`, `contrasena`, `imagen`) VALUES
(17, 'Erick', 'Salazar', 'ericksalazar@gmail.com', '997705698', 'erickS', '1234', '73167840ee071bbe8a31957bc7448478.jpg'),
(19, 'Miguel', 'Pretell Partida', 'miguelpretell59@gmail.com', '999770924', 'mig1234', 'mig1234', '08364f0e00193197452b1c6c4787c89e.jpg'),
(20, 'Willians', 'Pantoja', 'wilpantojaa@uch.pe', '987654321', 'williansP', '123456', 'f70c3da7eb1ea0e286c3321f3f58d09a.jpg'),
(21, 'Angelly', 'Gutierrez', 'anggutierrezz@uch.pe', '987654321', 'angellyG', '123456', '39b109ac7496c32062d05571ad7d6f7f.jpg'),
(22, 'Bruno', 'Rivera', 'bruriveraf@uch.pe', '987654321', 'brunoR', '123456', '6058faf2ef6129dd3ac5802d05b6a6c9.jpg'),
(23, 'Angelo', 'Salvador', 'angsalvadorq@uch.pe', '987654321', 'angeloS', '123456', '05f963fdc0a3b55663f9c60190b1639e.jpg'),
(24, 'Miguel', 'Pretell Partida', 'miguelpretell59@gmail.com', '+51999770924', 'kodsm', '1023', '5f9352c285fddd48744702956b1c0b5a.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblDetalleVenta`
--
ALTER TABLE `tblDetalleVenta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblVenta`
--
ALTER TABLE `tblVenta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblDetalleVenta`
--
ALTER TABLE `tblDetalleVenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `tblVenta`
--
ALTER TABLE `tblVenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
