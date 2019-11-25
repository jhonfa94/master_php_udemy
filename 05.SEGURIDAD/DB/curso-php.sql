-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.7-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para curso-php
CREATE DATABASE IF NOT EXISTS `curso-php` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `curso-php`;

-- Volcando estructura para tabla curso-php.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL DEFAULT '',
  `email` text NOT NULL DEFAULT '',
  `password` text NOT NULL DEFAULT '',
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla curso-php.registros: ~0 rows (aproximadamente)
DELETE FROM `registros`;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` (`id`, `nombre`, `email`, `password`, `fecha`) VALUES
	(1, 'Jhon', 'jhonfa@gmail.com', 'jhonfa123', '2019-11-22 14:54:00'),
	(2, 'Fabio ', 'fabio@gmail.com', 'jasljf9p8wrlkjdo', '2019-11-22 15:21:21'),
	(3, 'Duvan ', 'duvancho@duv.com.co', 'adfqhrjoreijoiwjr', '2019-11-22 16:35:09');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
