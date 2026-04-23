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


-- Volcando estructura de base de datos para proyectogruma
CREATE DATABASE IF NOT EXISTS `proyectogruma` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyectogruma`;

-- Volcando estructura para tabla proyectogruma.banner
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(200) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.banner: ~4 rows (aproximadamente)
INSERT INTO `banner` (`id`, `titulo`, `descripcion`, `imagen`, `activo`, `fecha_registro`) VALUES
	(1, 'Calidad Gruma', 'Líder mundial en harina de maíz', 'banner1.jpg', 1, '2026-04-15 12:37:52'),
	(2, 'Innovación', 'Productos de alta calidad', 'banner2.jpg', 1, '2026-04-15 12:37:52'),
	(3, 'Sustentabilidad', 'Compromiso con el medio ambiente', 'banner3.jpg', 1, '2026-04-15 12:37:52'),
	(4, 'Maseca', 'Imagen de Maseca', 'banner4.png', 1, '2026-04-15 13:41:35');

-- Volcando estructura para tabla proyectogruma.cat_contenido
CREATE TABLE IF NOT EXISTS `cat_contenido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `descripción` text,
  `id_seccion` int DEFAULT NULL,
  `id_imagen` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.cat_contenido: ~0 rows (aproximadamente)

-- Volcando estructura para tabla proyectogruma.cat_elegirnos
CREATE TABLE IF NOT EXISTS `cat_elegirnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `descripción` text,
  `icono` text,
  `activo` tinyint DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.cat_elegirnos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla proyectogruma.cat_imagenes
CREATE TABLE IF NOT EXISTS `cat_imagenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `url` text,
  `decripción` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.cat_imagenes: ~0 rows (aproximadamente)

-- Volcando estructura para tabla proyectogruma.cat_productos
CREATE TABLE IF NOT EXISTS `cat_productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `id_imagen` varchar(50) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `registro` date DEFAULT NULL,
  `id_marca` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.cat_productos: ~35 rows (aproximadamente)
INSERT INTO `cat_productos` (`id`, `nombre`, `descripcion`, `id_imagen`, `precio`, `activo`, `registro`, `id_marca`) VALUES
	(1, 'TORTILLAS DE MAÍZ BLANCO', 'Guerrero Tortillas de Maíz Blanco más suaves que nunca, elaboradas con maíz blanco para brindar calidad y frescura en cada bocado, ideales para preparar tus platillos mexicanos favoritos o disfrutarlas como base de antojitos tradicionales, certificadas como libres de gluten y fuente de fibra, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% mexicano y se presentan en empaque de 710 g con 30 tortillas prácticas y listas para servir.', 'tortilla.png', 35.00, 1, '2026-04-16', 3),
	(2, 'TORTILLAS DE TRIGO', 'Mission Tortillas de Trigo elaboradas con harina de trigo, suaves y prácticas para preparar tacos, burritos o tus platillos favoritos, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% mexicano y se presentan en empaque de 276 g con 6 tortillas prácticas y listas para servir.', 'tortillas_de_trigo.png', 40.00, 1, '2026-04-16', 2),
	(3, 'TORTILLA CHIPS', 'Mission Tortilla Chips Original elaboradas con maíz y horneadas para ofrecer un sabor auténtico y crujiente, ideales para acompañar tus comidas, preparar botanas o disfrutarlas con salsas, contienen 30% menos aceite que las papas fritas tradicionales, no incluyen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% mexicano y se presentan en empaque de 170 g prácticas y listas para servir.', 'tortilla_chips.png', 40.00, 1, '2026-04-16', 2),
	(4, 'NORTEÑAS AMARILLAS', 'Mission Tostadas de Maíz Amarilla elaboradas con grano entero, horneadas para acompañar tus platillos mexicanos o disfrutarlas como botana ligera y crujiente, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% mexicano y se presentan en empaque de 224 g con 24 tostadas prácticas y listas para servir.', 'norteñas_amarillas.png', 35.00, 1, '2026-04-16', 2),
	(5, 'TOSTADAS CASERAS', 'Guerrero Tostadas Norteñas Clásicas elaboradas con maíz y horneadas para brindar calidad y frescura en cada bocado, ideales para acompañar tus platillos mexicanos o disfrutarlas como botana crujiente, no contienen gluten ni conservadores, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% mexicano y se presentan en empaque de 30 tostadas prácticas y listas para servir.', 'tostadas_caseras.png', 52.00, 1, '2026-04-16', 3),
	(6, 'MASECA AZUL', ' Maseca Azul Harina de Maíz Nixtamalizado adicionada con ácido fólico, hierro y zinc, y restituida con vitamina B1, vitamina B2 y vitamina B3, elaborada con maíz azul para preparar tortillas, antojitos mexicanos o los platillos tradicionales que tú prefieras, no contiene conservadores, colorantes o saborizantes artificiales, está elaborada con todos los ingredientes necesarios para obtener una masa nutritiva y deliciosa, con un rico sabor 100% mexicano y se presenta en empaque de 1 kg práctico y listo para surtir tu despensa básica del hogar.', 'maseca_azul.png', 22.00, 1, '2026-04-16', 1),
	(7, 'MASECA AMARILLA', 'Maseca Amarilla Harina de Maíz Nixtamalizado adicionada con ácido fólico, hierro y zinc, y restituida con vitamina B1, vitamina B2 y vitamina B3, elaborada con maíz amarillo para preparar tortillas, antojitos mexicanos o los platillos tradicionales que tú prefieras, no contiene conservadores, colorantes o saborizantes artificiales, está elaborada con todos los ingredientes necesarios para obtener una masa nutritiva y deliciosa, con un rico sabor 100% mexicano y se presenta en empaque de 1 kg práctico y listo para surtir tu despensa básica del hogar.', 'maseca_amarillo.png', 25.00, 1, '2026-04-16', 1),
	(8, 'HARINA DE MAÍZ', 'Harina de maíz blanco Nixtamalizado adicionado con ácido fólico, hierro, zinc y restituida con vitamina B1, vitamina B2 y vitamina B3, para preparar tortillas, antojitos mexicanos o los que tú prefieras. - No contiene conservadores, colorantes o saborizantes artificiales - Elaborada con todos los ingredientes necesarios para obtener una deliciosa masa para preparar cualquier platillo tradicional - Con un rico sabor 100% mexicano Surte tu despensa básica del hogar en nuestra tienda en línea y disfruta la variedad de productos de nuestro catálogo de abarrotes que te ofrecemos a precios bajos todos los días. ', 'harina_maseca.png', 23.00, 1, '2026-04-16', 1),
	(9, 'MASECA ANTOJITOS', '¡Crea deliciosas recetas desde cero con ingredientes de calidad! La harina es la base fundamental de innumerables preparaciones culinarias, desde panes y pasteles hasta tortillas y platillos tradicionales. Nuestra selección de harina está pensada para satisfacer las necesidades de cocineros caseros y expertos por igual. Ya sea que busques preparar un postre especial, pan casero o cualquier otra delicia, encontrarás el producto perfecto. La masa preparada con ingredientes de primera siempre da mejores resultados, y eso se nota en el sabor y la textura final. ', 'maseca_antojitos.png', 25.00, 1, '2026-04-16', 1),
	(10, 'QUESITOS', 'Tosty Chirulitos Fritos de Maíz sabor Salsa elaborados con maíz y sazonados con el auténtico sabor de salsa mexicana, ideales para acompañar tus comidas o disfrutarlos como botana crujiente y ligera, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto delicioso y auténtico, con un rico sabor 100% mexicano y se presentan en empaque de 48 g prácticas y listas para disfrutar.', 'tosty_quesitos.png', 32.00, 1, '2026-04-16', 4),
	(11, 'BOLITAS DE QUESO', 'Tosty Chirulitos Fritos de Maíz sabor Salsa elaborados con maíz y sazonados con el auténtico sabor de salsa mexicana, ideales para acompañar tus comidas o disfrutarlos como botana crujiente y ligera, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto delicioso y auténtico, con un rico sabor 100% mexicano y se presentan en empaque de 48 g prácticas y listas para disfrutar.', 'tosty_bolitas.png', 31.00, 1, '2026-04-16', 4),
	(12, 'RUMBA PATACONES', 'Rumba Doradita Chips tortillitas fritas de maíz elaboradas para brindar un sabor auténtico y festivo, ideales para acompañar tus comidas, preparar botanas o disfrutarlas en reuniones, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto crujiente y delicioso, con un rico sabor 100% latino y se presentan en empaque de 300 g prácticas y listas para servir.', 'rumba_patacones.png', 32.00, 1, '2026-04-16', 5),
	(13, 'RUMBA RICO', 'Rumba Doradita Chips tortillitas fritas de maíz elaboradas para brindar un sabor auténtico y festivo, ideales para acompañar tus comidas, preparar botanas o disfrutarlas en reuniones, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto crujiente y delicioso, con un rico sabor 100% latino y se presentan en empaque de 300 g prácticas y listas para servir.', 'rumba_tico.png', 40.00, 1, '2026-04-16', 5),
	(14, 'ATOMIX ', 'Mission Atomix Habanero Limón botana de maíz elaborada con el toque picante del habanero y el sabor fresco del limón, ideales para acompañar tus comidas o disfrutarlas como botana crujiente y atrevida, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto delicioso y auténtico, con un rico sabor 100% mexicano y se presentan en empaque de 30 g prácticas y listas para disfrutar.', 'mission_atomix.png', 25.00, 1, '2026-04-16', 2),
	(15, 'ATOMIX ', 'Mission Atomix Chile Limón botana de maíz elaborada con el toque picante del chile y el sabor fresco del limón, ideales para acompañar tus comidas o disfrutarlas como botana crujiente y ligera, bajas en calorías y sodio, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto delicioso y auténtico, con un rico sabor 100% mexicano y se presentan en empaque de 170 g prácticas y listas para disfrutar.', 'mission_chile.png', 25.00, 1, '2026-04-16', 2),
	(16, 'HORNEADAS', 'Mission Horneadas Tostadas de Maíz elaboradas con grano entero, horneadas para acompañar tus platillos mexicanos o disfrutarlas como botana ligera y crujiente, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% mexicano y se presentan en empaque de 224 g con 24 tostadas prácticas y listas para servir.', 'mission_horneadas.png', 50.00, 1, '2026-04-16', 2),
	(17, 'TOSTADAS', 'Guerrero Tostadas Norteñas Clásicas elaboradas con maíz y horneadas para brindar calidad y frescura en cada bocado, ideales para acompañar tus platillos mexicanos o disfrutarlas como botana crujiente, no contienen gluten ni conservadores, están elaboradas con todos los i', 'guerrero_tostadas.png', 40.00, 1, '2026-04-16', 3),
	(18, 'TORTILLAS', 'Guerrero Tortillas de Maíz Blanco más suaves que nunca, elaboradas con maíz blanco para brindar calidad y frescura en cada bocado, ideales para preparar tus platillos mexicanos favoritos o disfrutarlas como base de antojitos tradicionales, certificadas como libres de gluten y fuente de fibra, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% mexicano y se presentan en empaque de 710 g con 30 tortillas prácticas y listas para servir.', 'guerrero_tortillas.png', 35.00, 1, '2026-04-16', 3),
	(19, 'TRONADITAS', 'Tronaditas con Limón & Sal elaboradas con maíz y sazonadas con el toque perfecto de limón y sal, ideales para acompañar tus comidas o disfrutarlas como botana crujiente y ligera, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto delicioso y auténtico, con un rico sabor 100% mexicano y se presentan en empaque de 100 g prácticas y listas para disfrutar.', 'tosty_tronaditas.png', 45.00, 1, '2026-04-16', 4),
	(20, 'PALOMITAS CHEDDAR', 'Tosty Palomitas sabor Queso elaboradas con maíz para microondas, prácticas y fáciles de preparar en minutos, ideales para disfrutar como botana crujiente con el auténtico sabor a mantequilla, no contienen grasas trans, están elaboradas con todos los ingredientes necesarios para obtener un producto delicioso y ligero, con un rico sabor 100% mexicano y se presentan en empaque de 76 g prácticas y listas para servir.', 'tosty_cheddar.png', 18.00, 1, '2026-04-16', 4),
	(21, 'PALOMITAS MANTEQUILLA', 'Tosty Palomitas sabor Mantequilla elaboradas con maíz para microondas, prácticas y fáciles de preparar en minutos, ideales para disfrutar como botana crujiente con el auténtico sabor a mantequilla, no contienen grasas trans, están elaboradas con todos los ingredientes necesarios para obtener un producto delicioso y ligero, con un rico sabor 100% mexicano y se presentan en empaque de 76 g prácticas y listas para servir.', 'tosty_mantequilla.png', 18.00, 1, '2026-04-16', 4),
	(22, 'PALOMITAS NATURAL', 'Tosty Palomitas sabor Natural elaboradas con maíz para microondas, prácticas y fáciles de preparar en minutos, ideales para disfrutar como botana crujiente con el auténtico sabor a mantequilla, no contienen grasas trans, están elaboradas con todos los ingredientes necesarios para obtener un producto delicioso y ligero, con un rico sabor 100% mexicano y se presentan en empaque de 76 g prácticas y listas para servir.', 'tosty_natural.png', 18.00, 1, '2026-04-16', 4),
	(23, 'CHIRULITOS', 'Tosty Chirulitos Fritos de Maíz sabor Salsa elaborados con maíz y sazonados con el auténtico sabor de salsa mexicana, ideales para acompañar tus comidas o disfrutarlos como botana crujiente y ligera, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto delicioso y auténtico, con un rico sabor 100% mexicano y se presentan en empaque de 48 g prácticas y listas para disfrutar.', 'tosty_palitos.png', 30.00, 1, '2026-04-16', 4),
	(24, 'TOSTADAS', 'Rumba Doradita Chips tortillitas fritas de maíz elaboradas para brindar un sabor auténtico y festivo, ideales para acompañar tus comidas, preparar botanas o disfrutarlas en reuniones, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto crujiente y delicioso, con un rico sabor 100% latino y se presentan en empaque de 300 g prácticas y listas para servir.', 'rumba_tostadas.png', 25.00, 1, '2026-04-16', 5),
	(25, 'CACAHUATES JAPONES', 'Rumba cacahuates elaboradas para brindar un sabor auténtico y festivo, ideales para acompañar tus comidas, preparar botanas o disfrutarlas en reuniones, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto crujiente y delicioso, con un rico sabor 100% latino y se presentan en empaque de 300 g prácticas y listas para servir.', 'rumba_japones.png', 26.00, 1, '2026-04-16', 5),
	(26, 'PIKITOS', 'Rumba Doradita Chips tortillitas fritas de maíz elaboradas para brindar un sabor auténtico y festivo, ideales para acompañar tus comidas, preparar botanas o disfrutarlas en reuniones, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto crujiente y delicioso, con un rico sabor 100% latino y se presentan en empaque de 300 g prácticas y listas para servir.', 'rumba_pikitos.png', 30.00, 1, '2026-04-16', 5),
	(27, 'PALMITO', 'La Cima Palmito en Trozos elaborados con corazón de palma de Costa Rica, bajos en calorías y libres de colesterol, ideales para acompañar ensaladas, guisos o disfrutarlos como complemento fresco y nutritivo en tus platillos, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto saludable y delicioso, con un rico sabor natural y se presentan en empaque enlatado práctico y listo para servir.', 'cima_1.png', 25.00, 1, '2026-04-16', 6),
	(28, 'PALMITO', 'La Cima Palmito en Trozos elaborados con corazón de palma de Costa Rica, bajos en calorías y libres de colesterol, ideales para acompañar ensaladas, guisos o disfrutarlos como complemento fresco y nutritivo en tus platillos, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto saludable y delicioso, con un rico sabor natural y se presentan en empaque enlatado práctico y listo para servir.', 'cima_2.png', 45.00, 1, '2026-04-16', 6),
	(29, 'PALMITO', 'La Cima Palmito en Trozos elaborados con corazón de palma de Costa Rica, bajos en calorías y libres de colesterol, ideales para acompañar ensaladas, guisos o disfrutarlos como complemento fresco y nutritivo en tus platillos, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto saludable y delicioso, con un rico sabor natural y se presentan en empaque enlatado práctico y listo para servir.', 'cima_3.png', 20.00, 1, '2026-04-16', 6),
	(30, 'PALMITO SPAGUETI', 'La Cima Palmito en Trozos elaborados con corazón de palma de Costa Rica, bajos en calorías y libres de colesterol, ideales para acompañar ensaladas, guisos o disfrutarlos como complemento fresco y nutritivo en tus platillos, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto saludable y delicioso, con un rico sabor natural y se presentan en empaque enlatado práctico y listo para servir.', 'cima_4.png', 20.00, 1, '2026-04-16', 6),
	(31, 'TORTILLAS', 'Del Fogón Tortillas de Maíz elaboradas con maíz para brindar un sabor auténtico y tradicional, ideales para acompañar tus platillos guatemaltecos o disfrutarlas como base de antojitos, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% centroamericano y se presentan en empaque de 280 g con 10 tortillas prácticas y listas para servir.', 'fogon_tortillas.png', 30.00, 1, '2026-04-16', 7),
	(32, 'TOSTADAS', 'Del Fogón Tortillas de Maíz elaboradas con maíz para brindar un sabor auténtico y tradicional, ideales para acompañar tus platillos guatemaltecos o disfrutarlas como base de antojitos, no contienen conservadores, colorantes o saborizantes artificiales, están elaboradas con todos los ingredientes necesarios para obtener un producto nutritivo y delicioso, con un rico sabor 100% centroamericano y se presentan en empaque de 280 g con 10 tortillas prácticas y listas para servir.', 'fogon_tostadas.png', 35.00, 1, '2026-04-16', 7),
	(33, 'FRIJOL COLADO', 'Luisiana Frijoles Negros Molidos Sabor Tico elaborados con frijoles negros cuidadosamente seleccionados para brindar un sabor auténtico y tradicional de Costa Rica, ideales para acompañar tus comidas, preparar antojitos o disfrutarlos como complemento nutritivo, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto delicioso y saludable, con un rico sabor 100% latino y se presentan en empaque de 400 g prácticos y listos para servir.', 'lusiana_2.png', 20.00, 1, '2026-04-16', 8),
	(34, 'FRIJOL ', 'Luisiana Frijoles Negros Molidos Sabor Tico elaborados con frijoles negros cuidadosamente seleccionados para brindar un sabor auténtico y tradicional de Costa Rica, ideales para acompañar tus comidas, preparar antojitos o disfrutarlos como complemento nutritivo, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto delicioso y saludable, con un rico sabor 100% latino y se presentan en empaque de 400 g prácticos y listos para servir.', 'lusiana_frijol.png', 25.00, 1, '2026-04-16', 8),
	(35, 'ARROZ', 'Luisiana Frijoles Negros Molidos Sabor Tico elaborados con frijoles negros cuidadosamente seleccionados para brindar un sabor auténtico y tradicional de Costa Rica, ideales para acompañar tus comidas, preparar antojitos o disfrutarlos como complemento nutritivo, no contienen conservadores, colorantes o saborizantes artificiales, están elaborados con todos los ingredientes necesarios para obtener un producto delicioso y saludable, con un rico sabor 100% latino y se presentan en empaque de 400 g prácticos y listos para servir.', 'lusiana_arroz.png', 15.00, 1, '2026-04-16', 8);

-- Volcando estructura para tabla proyectogruma.cat_secciones
CREATE TABLE IF NOT EXISTS `cat_secciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.cat_secciones: ~0 rows (aproximadamente)

-- Volcando estructura para tabla proyectogruma.filosofia
CREATE TABLE IF NOT EXISTS `filosofia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `descripcion` text,
  `tipo` varchar(50) DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `activo` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.filosofia: ~6 rows (aproximadamente)
INSERT INTO `filosofia` (`id`, `titulo`, `subtitulo`, `descripcion`, `tipo`, `orden`, `activo`) VALUES
	(1, 'Misión', NULL, 'Somos una empresa global de alimentos que elabora y comercializa productos de maíz y trigo de la más alta calidad, comprometida con la nutrición y el bienestar de las personas, la sustentabilidad del medio ambiente y el desarrollo de nuestras comunidades, generando valor para nuestros colaboradores, clientes, consumidores y accionistas.', 'pilares', 1, 1),
	(2, 'Visión', NULL, 'Ser la empresa de alimentos más importante del mundo basada en maíz y trigo, siendo reconocidos por la calidad superior de nuestros productos y por el compromiso y la pasión de nuestra gente. Queremos estar presentes en la vida cotidiana de las personas alrededor del mundo.', 'pilares', 2, 1),
	(3, 'Objetivo', NULL, 'Crecer de manera rentable y sustentable, expandiendo nuestra presencia global y diversificando nuestro portafolio de productos para satisfacer las necesidades nutricionales de los consumidores en todo el mundo, mientras generamos valor económico, social y ambiental para todos nuestros grupos de interés.', 'pilares', 3, 1),
	(4, 'Esfuerzo', NULL, 'Trabajamos con dedicación y pasión en cada uno de nuestros procesos. Creemos que el esfuerzo constante es la base del éxito y la excelencia.', 'valores', 1, 1),
	(5, 'Compromiso', NULL, 'Nos comprometemos con nuestros consumidores, colaboradores y comunidades. Cada producto refleja nuestra responsabilidad con la calidad y la nutrición.', 'valores', 2, 1),
	(6, 'Perseverancia', NULL, 'Ante los retos, avanzamos. La perseverancia nos ha llevado de una pequeña planta en Nuevo León a ser líderes globales en más de 110 países.', 'valores', 3, 1);

-- Volcando estructura para tabla proyectogruma.historia
CREATE TABLE IF NOT EXISTS `historia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `descripcion` text,
  `anio` varchar(20) DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `activo` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.historia: ~6 rows (aproximadamente)
INSERT INTO `historia` (`id`, `titulo`, `subtitulo`, `descripcion`, `anio`, `imagen`, `tipo`, `orden`, `activo`) VALUES
	(1, 'GRUMA, una empresa con gran visión de negocios', 'GRUMA construyendo negocios alrededor del mundo', 'Somos la compañía global de alimentos, orgullosamente mexicana, líder en la producción de harina de maíz, tortillas y wraps. También participamos en categorías como panes planos, snacks y otros productos alimenticios con presencia internacional.', NULL, 'maiz.jpg', 'acerca', 1, 1),
	(2, 'Fundación en Cerralvo, Nuevo León', NULL, 'Roberto González Barrera funda la primera planta de harina de maíz nixtamalizado.', '1949', NULL, 'timeline', 1, 1),
	(3, 'Expansión a Estados Unidos', NULL, 'GRUMA introduce la tortilla de harina al mercado norteamericano bajo la marca Mission.', '1972', NULL, 'timeline', 2, 1),
	(4, 'Salida a Bolsa', NULL, 'GRUMA comienza a cotizar en la Bolsa Mexicana de Valores y consolida su expansión global.', '1994', NULL, 'timeline', 3, 1),
	(5, 'Expansión global', NULL, 'Entrada a Australia, Asia y Oceanía con diversificación de productos.', '2000s', NULL, 'timeline', 4, 1),
	(6, 'Presencia mundial', NULL, 'Más de 110 países, 72 plantas y miles de colaboradores.', 'Hoy', NULL, 'timeline', 5, 1);

-- Volcando estructura para tabla proyectogruma.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `activo` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyectogruma.marcas: ~8 rows (aproximadamente)
INSERT INTO `marcas` (`id`, `nombre`, `imagen`, `activo`) VALUES
	(1, 'Maseca', 'maseca.png', 1),
	(2, 'Mission', 'mission.png', 1),
	(3, 'Guerrero', 'guerrero.png', 1),
	(4, 'Tosty', 'tosty.png', 1),
	(5, 'Rumba', 'rumba.png', 1),
	(6, 'La Cima', 'cima.png', 1),
	(7, 'Del Fogon', 'fogon.png', 1),
	(8, 'Lusiana', 'lusiana.png', 1);

-- Volcando estructura para procedimiento proyectogruma.ObtenerVinculos
DELIMITER //
CREATE PROCEDURE `ObtenerVinculos`()
    COMMENT 'PA: para la obtención de vinculos'
BEGIN
  SELECT id, red, url, icono, activo, registro
  FROM cat_vinculo
  WHERE activo =1; END//
DELIMITER ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
