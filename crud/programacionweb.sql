-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.10-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para programacionweb
CREATE DATABASE IF NOT EXISTS `programacionweb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `programacionweb`;


-- Volcando estructura para tabla programacionweb.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `personas_id` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `paterno` varchar(30) NOT NULL DEFAULT '0',
  `materno` varchar(30) NOT NULL DEFAULT '0',
  `nombres` varchar(35) NOT NULL DEFAULT '0',
  `fecha_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `feha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`personas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
