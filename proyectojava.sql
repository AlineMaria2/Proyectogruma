-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyectojava
CREATE DATABASE IF NOT EXISTS `proyectojava` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyectojava`;

-- Volcando estructura para tabla proyectojava.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `telefono` varchar(50) DEFAULT '',
  `numero_cliente` int unsigned DEFAULT NULL,
  `genero` varchar(50) DEFAULT '',
  `activo` binary(50) DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  `credito` int DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectojava.cliente: ~3 rows (aproximadamente)
INSERT INTO `cliente` (`id_cliente`, `nombre`, `telefono`, `numero_cliente`, `genero`, `activo`, `credito`) VALUES
	(1, 'Juan Pérez', '9991234567', 1001, 'Masculino', _binary 0x3100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 5000),
	(2, 'María López', '9997654321', 1002, 'Femenino', _binary 0x3100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 3000),
	(3, 'Carlos Ruiz', '9993456789', 1003, 'Masculino', _binary 0x3100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 4500);

-- Volcando estructura para tabla proyectojava.produccion
CREATE TABLE IF NOT EXISTS `produccion` (
  `id_producto` int NOT NULL,
  `nombre_prod` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cantidad_prod` int NOT NULL,
  `codigo_prod` text NOT NULL,
  `Tipo` text NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectojava.produccion: ~9 rows (aproximadamente)
INSERT INTO `produccion` (`id_producto`, `nombre_prod`, `cantidad_prod`, `codigo_prod`, `Tipo`) VALUES
	(1, 'Cal', 150, 'CAL-001', 'Agrícola'),
	(2, 'Cal', 200, 'CAL-002', 'De Construcción'),
	(3, 'Cal', 80, 'CAL-003', 'Química'),
	(4, 'Adhesivos', 120, 'ADH-001', 'American Finish White'),
	(5, 'Adhesivos', 90, 'ADH-002', 'AF Porcelánico'),
	(6, 'Adhesivos', 75, 'ADH-003', 'Pegazulejo B3 Blanco'),
	(7, 'Recubrimiento', 60, 'REC-001', 'Masilla American Finish'),
	(8, 'Recubrimiento', 110, 'REC-002', 'Mezcla de Albañilería'),
	(9, 'Recubrimiento', 95, 'REC-003', 'Pasta Fina Blanca');

-- Volcando estructura para tabla proyectojava.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` int NOT NULL,
  `id_cliente` int NOT NULL,
  `id_producto` int NOT NULL,
  `cantidad_prod` int NOT NULL,
  `precio` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_venta`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectojava.venta: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
