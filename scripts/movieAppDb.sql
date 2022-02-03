-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.27 - MySQL Community Server - GPL
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for movieapp
CREATE DATABASE IF NOT EXISTS `movieapp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `movieapp`;

-- Dumping structure for table movieapp.genres
DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres`
(
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping structure for table movieapp.movies
DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies`
(
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `boxart` varchar(255) NOT NULL,
    `genre` int(11) NOT NULL,
    `additionalApiDataId` int(11) NOT NULL,
    `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
