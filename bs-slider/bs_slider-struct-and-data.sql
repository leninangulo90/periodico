-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2014 a las 04:45:58
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bs_slider`
--
CREATE DATABASE IF NOT EXISTS `bs_slider` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bs_slider`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autosgta`
--

CREATE TABLE IF NOT EXISTS `autosgta` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `autosgta`
--

INSERT INTO `autosgta` (`auto_id`, `titulo`, `descripcion`, `foto`, `autor`) VALUES
(1, 'Rhino', 'El Rhino (llamado Tanque en GTA Advance) es un tanque militar utilizado por el Ejército que tiene aparición en GTA, GTA: London 1969, GTA: London 1961, GTA 2, GTA III, GTA: VC, GTA A, GTA: SA, GTA: LCS, GTA: VCS, GTA: CW y GTA V. Es un vehículo muy grande, pesado, lento y con la más elevada resistencia que cualquier otro vehículo en GTA, aunque no es indestructible. Tiene la particular característica de que todo aquél vehículo que lo embista (excepto otro tanque) estallará al instante. Posee también un cañón situado encima del armazón principal que se puede disparar y que gira 360°.', 'Rhino.jpg', 'SirOne'),
(2, 'Infernus', '<p>El Infernus es un automóvil estilo superdeportivo de dos puertas que ha aparecido en cada juego de la saga, apareció desde Grand Theft Auto III hasta Grand Theft Auto V.</p>\r\n<p>El Infernus es un coche muy rápido y de poca altura, siendo unos de los vehículos mas rápidos de la saga GTA.</p>', 'Infernus.jpg', 'SirOne'),
(3, 'Cheetah', '<p>El Cheetah es uno de los autos más rápidos de la Saga Grand Theft Auto. Su velocidad punta lo hace especialmente útil para las huidas, y en algunos juegos tiene la ventaja de ser bastante manejable, así que es muy difícil perder el control por su buen agarre. Además hay que agregar que, especialmente en el Grand Theft Auto: Vice City es posible doblar las curvas cerradas de forma fácil, aunque esto requiere un gran dominio del vehículo, y del propio juego (utilizando el freno y la dirección del doblado) . Lo único que tienen en común los tres modelos es el motor trasero y la tracción también trasera. Según el modelo, ello hace que su control sea mejor o más difícil.</p>', 'Cheetah.jpg', 'Encore'),
(4, 'Dominator', '<p>Es un Muscle car moderno, de gran tamaño en comparación de otros vehículos deportivos del juego, tiene una mezcla de diseños moderno y clásico. Es parecido al Hellenbach de Grand Theft Auto: Chinatown Wars.</p>', 'Dominator.png', 'Encore'),
(5, 'Jet', '<p>El Jet es un avión de pasajeros que aparece en Grand Theft Auto V. Tomando la apariencia de Grand Theft Auto IV que antes solía ser un decorado. Es posiblemente el 2° vehículo controlable más grande en el juego, siendo sólo más pequeño que el Avión de carga. A diferencia de su predecesor, el AT-400 , el avión lleva los nombres de varias aerolíneas, junto con el clásico Fly Us.</p>', 'Jet.jpg', 'Lava-Lava'),
(6, 'Helicóptero FIB', '<p>Es un Frogger especial, utilizado por el FIB, tiene un color negro con el logo del FIB, y un foco como tiene el Buzzard. Este helicóptero no aparece persiguiendo al jugador o en lugar especifico y la única manera de obtenerlo es con un Savegame. Es lo que sería el helicóptero de Trevor Philips sin el graffiti de Industrias Trevor Philips.</p>', 'HelicopteroFIB.jpg', 'Lumpa-Lumpa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
