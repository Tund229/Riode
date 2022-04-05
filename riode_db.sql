-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 30 mars 2022 à 09:28
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `riode_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name_contact` text NOT NULL,
  `mail_contact` text NOT NULL,
  `comment_contact` text NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact_us`
--

INSERT INTO `contact_us` (`id_contact`, `name_contact`, `mail_contact`, `comment_contact`) VALUES
(14, 'Tundé', 'Tund@gmail.com', 'Commentaire'),
(13, 'Tundé', 'tunde@gmail.com', 'Commentaire');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `register_email` varchar(255) NOT NULL,
  `register_password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `register_name` varchar(25) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`register_id`, `register_email`, `register_password`, `register_date`, `register_name`) VALUES
(13, 'hacovalil@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '2022-03-29 17:54:00', 'TundÃ©'),
(12, 'poiiu@gm.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-29 17:17:15', 'uyu'),
(11, 'tundegounon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-03-29 16:28:50', '12345'),
(10, '2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-03-29 13:51:39', 'Tunde'),
(9, 'un@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-29 13:22:30', 'Tunde');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
