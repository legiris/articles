-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Počítač: wm38.wedos.net:3306
-- Vygenerováno: Pát 05. čec 2013, 20:22
-- Verze MySQL: 5.6.10
-- Verze PHP: 5.4.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `d18105_xdanube`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `volume` tinyint(4) NOT NULL,
  `year` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=11 ;

--
-- Vypisuji data pro tabulku `journal`
--

INSERT INTO `journal` (`id`, `title`, `volume`, `year`) VALUES
(1, 'Issue', 1, 2011),
(2, 'Issue', 2, 2011),
(3, 'Issue', 3, 2011),
(4, 'Issue', 4, 2011),
(5, 'Issue', 1, 2012),
(6, 'Issue', 2, 2012),
(7, 'Issue', 3, 2012),
(8, 'Issue', 4, 2012),
(9, 'Issue', 1, 2013),
(10, 'Issue', 2, 2013);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
