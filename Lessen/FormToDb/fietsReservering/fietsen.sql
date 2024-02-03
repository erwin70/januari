-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 03 feb 2024 om 01:09
-- Serverversie: 8.2.0
-- PHP-versie: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fietsen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stok`
--

DROP TABLE IF EXISTS `stok`;
CREATE TABLE IF NOT EXISTS `stok` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nr` int NOT NULL,
  `soort` int NOT NULL,
  `km` int DEFAULT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `stok`
--

INSERT INTO `stok` (`id`, `nr`, `soort`, `km`, `datum`) VALUES
(2, 14, 1, 8354, '2024-02-01 22:03:07'),
(4, 30, 1, 9578, '2024-02-01 22:07:28'),
(6, 110, 1, 8791, '2024-02-01 22:08:10'),
(3, 18, 1, 7693, '2024-02-01 22:09:05'),
(1, 9, 1, 7662, '2024-02-01 22:09:33'),
(5, 64, 1, 4241, '2024-02-01 22:11:23'),
(12, 87, 3, 0, '2024-02-01 22:13:25'),
(11, 84, 3, 0, '2024-02-01 22:13:54'),
(8, 66, 2, 0, '2024-02-01 22:14:09'),
(10, 82, 2, 0, '2024-02-01 22:14:26'),
(7, 65, 2, 0, '2024-02-01 22:14:53'),
(9, 69, 2, 0, '2024-02-01 22:15:15');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verhuur`
--

DROP TABLE IF EXISTS `verhuur`;
CREATE TABLE IF NOT EXISTS `verhuur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `datum_s` date NOT NULL,
  `datum_e` date NOT NULL,
  `naam` varchar(100) NOT NULL,
  `kamer` int NOT NULL,
  `mail` varchar(100) NOT NULL,
  `ebike` int NOT NULL,
  `h_fiets` int NOT NULL,
  `d_fiets` int NOT NULL,
  `aangemaakt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `verhuur`
--

INSERT INTO `verhuur` (`id`, `datum_s`, `datum_e`, `naam`, `kamer`, `mail`, `ebike`, `h_fiets`, `d_fiets`, `aangemaakt`) VALUES
(1, '2024-02-02', '2024-02-09', 'Leemans', 35, '', 2, 1, 1, '2024-02-01 23:19:54'),
(2, '2024-02-03', '2024-02-03', 'Leemans', 35, '', 1, 0, 1, '2024-02-01 23:19:54'),
(3, '2024-02-03', '2024-02-03', 'Leemans', 35, '', 1, 0, 1, '2024-02-01 23:21:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
