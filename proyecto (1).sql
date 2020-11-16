-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-11-2020 a las 19:16:57
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `Id_Cliente` int(50) NOT NULL,
  `Nombre_Cliente` varchar(100) NOT NULL,
  `Ap_Paterno_C` varchar(100) NOT NULL,
  `Ap_Materno_C` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono_C` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_producto`
--

DROP TABLE IF EXISTS `detalle_producto`;
CREATE TABLE IF NOT EXISTS `detalle_producto` (
  `Id_Detalle_Producto` int(50) NOT NULL,
  `Nombre_Detalle_Producto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_producto`
--

INSERT INTO `detalle_producto` (`Id_Detalle_Producto`, `Nombre_Detalle_Producto`) VALUES
(1, 'rosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `Id_Empleado` int(50) NOT NULL,
  `Nombre_Empleado` varchar(100) NOT NULL,
  `Ap_Paterno` varchar(100) NOT NULL,
  `Ap_Materno` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Cargo` varchar(100) NOT NULL,
  `Telefono` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `Nombre_Empleado`, `Ap_Paterno`, `Ap_Materno`, `Direccion`, `Cargo`, `Telefono`) VALUES
(123456, 'Sergio', 'Valencia', 'Sanchez', 'la paz', 'Administrador', 24165454),
(8376155, 'Vladimir', 'Huanca', 'Quispe', 'la paz', 'Administrador', 24165454),
(321654, 'juan', 'perez', 'perez', 'av. juan pablo II', 'Vendedor', 2223456),
(123456, 'John', 'Valencia', 'Sanchez', 'la paz', 'Administrador', 24165454),
(123456, 'John', 'Valencia', 'Sanchez', 'la paz', 'Vendedor', 24165454),
(123456, 'John', 'Valencia', 'Sanchez', 'la paz', 'Seguridad', 24165454),
(8375133, 'Sergio', 'Mendez', 'MariÃ±o', 'la paz', 'Administrador', 24165454),
(123456, 'John', 'Valencia', 'Sanchez', 'la paz', 'Administrador', 24165454),
(2456, 'PEDRO', 'Mendez', 'Sanchez', 'la paz', 'Administrador', 24165454),
(123456, 'PEDRO', 'Valencia', 'Sanchez', 'la paz', 'Administrador', 24165454),
(2456, 'Sergio', 'Valencia', 'MariÃ±o', 'la paz', 'Administrador', 24165454);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `Id_Empresa` int(50) NOT NULL,
  `Nombre_Empresa` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Id_Empleado` int(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Cargo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Id_Empleado`, `Password`, `Cargo`) VALUES
(8376155, '67130044', 'Administrador'),
(321654, '123456', 'Vendedor'),
(123456, '1237322928', 'Administrador'),
(123456, '2566105807', 'Vendedor'),
(123456, '1951355713', 'Seguridad'),
(8375133, '1396707551', 'Administrador'),
(2456, '6659930023', 'Administrador'),
(123456, '4476243071', 'Administrador'),
(123456, '3569402134', 'Administrador'),
(123456, '3569402134', 'Administrador'),
(2456, '3856736954', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `npedido` int(100) NOT NULL,
  `ncarnet` int(100) NOT NULL,
  `nombrec` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `nitfactura` varchar(100) NOT NULL,
  `cantidad` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`npedido`, `ncarnet`, `nombrec`, `direccion`, `nitfactura`, `cantidad`) VALUES
(1, 123, 'sdf', 'sdf', '12', 4),
(1, 123456, 'Sergio valencia', 'zona miraflores', '1234', 4),
(1, 1234, 'Sergio valencia', 'zona miraflores', '1325', 1),
(1, 1234, 'Sergio valencia', 'zona miraflores', '5464', 1),
(1, 1234, 'Sergio valencia', 'zona miraflores', '1325', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `Id_Producto` int(50) NOT NULL,
  `Id_Detalle_Producto` int(50) NOT NULL,
  `Stock` int(50) NOT NULL,
  `Id_Proveedor` int(50) NOT NULL,
  `Observacion` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Id_Detalle_Producto`, `Stock`, `Id_Proveedor`, `Observacion`) VALUES
(1, 1, 28, 1, 'rosas rojas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `Id_Proveedor` int(50) NOT NULL,
  `Id_Empresa` int(50) NOT NULL,
  `Nombre_Proveedor` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id_empleado` int(11) NOT NULL,
  `Hora_ingreso` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_empleado`, `Hora_ingreso`) VALUES
(8464328, '12/05/2019 3:58am'),
(456123, '12/06/2019 6:19am'),
(2456, '10/02/2020 6:50pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroi`
--

DROP TABLE IF EXISTS `registroi`;
CREATE TABLE IF NOT EXISTS `registroi` (
  `id_empleado` int(11) NOT NULL,
  `Hora_salida` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registroi`
--

INSERT INTO `registroi` (`id_empleado`, `Hora_salida`) VALUES
(8464328, '12/05/2019 3:57am'),
(456123, '12/06/2019 06:20:08 AM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE IF NOT EXISTS `telefono` (
  `Numero` int(50) NOT NULL,
  `Id_Empleado` int(50) NOT NULL,
  `Id_Cliente` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `Id_Venta` int(50) NOT NULL,
  `Nombre_Detalle_Producto` varchar(100) NOT NULL,
  `Cantidad` int(100) NOT NULL,
  `Fcha_Venta` varchar(100) NOT NULL,
  `Observaciones` varchar(200) NOT NULL,
  `Factura` varchar(100) NOT NULL,
  `Id_Producto` int(50) NOT NULL,
  `Id_Cliente` int(50) NOT NULL,
  `Id_Empleado` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id_Venta`, `Nombre_Detalle_Producto`, `Cantidad`, `Fcha_Venta`, `Observaciones`, `Factura`, `Id_Producto`, `Id_Cliente`, `Id_Empleado`) VALUES
(1, 'rosas ', 12, '12/05/2019 8:00pm', 'rosas rojas', '111', 1, 1, 8464328),
(3434, 's', 12, '12/05/2019 8:06pm', 'gft', '2794509006', 1, 1, 1),
(1, 'rosas', 12, '12/06/2019 5:16am', 'rosas rojas', '2412908186', 1, 8454, 8464328),
(1, 'rosas', 5, '12/06/2019 6:21am', 'rosas rojas', '8711017599', 1, 3333, 321654);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
