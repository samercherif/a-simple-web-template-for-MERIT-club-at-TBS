-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Mai 2017 à 10:55
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `merit`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `event_n` varchar(1230) NOT NULL,
  `event_co` varchar(1230) NOT NULL,
  `event_des` text NOT NULL,
  `event_t` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`event_n`, `event_co`, `event_des`, `event_t`) VALUES
('graphic design', 'Khalil CJ REKIK', 'introduction to the basics of graphic design', '2017-05-18'),
('graphic design II', 'Samer CHerif', 'moving to a more advanced level of graphic design', '2017-05-25'),
('Web development ', 'Samer Cherif', 'introduction to web development with html and css', '2017-06-22'),
('ethical hacking', 'bassem laamouchi', 'introduction to the worls of hacking and stuff ', '2017-06-27'),
('Digital marketing', 'abdelkader', 'digital marketing principales with the magnificient karim ', '2017-07-26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
