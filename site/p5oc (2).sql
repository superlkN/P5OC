-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 juil. 2020 à 21:38
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p5oc`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `latitude`, `longitude`) VALUES
(1, 47.9309562, -1.6777071);

-- --------------------------------------------------------

--
-- Structure de la table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` text NOT NULL,
  `horaires` text NOT NULL,
  `numero` text NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `footer`
--

INSERT INTO `footer` (`id`, `adresse`, `horaires`, `numero`, `mail`) VALUES
(1, '9 RUE DU CHAMP GUIHORE 35320 CREVIN', ' Lundi - Vendredi 9:00 - 19:00 ', '  02 23 30 92 60  ', '    joel.quellard@sfr.fr     ');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `petite_image` varchar(255) NOT NULL,
  `grande_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `petite_image`, `grande_image`) VALUES
(1, '1.jpg', '1-bis.jpg'),
(2, '2.jpg', '2-bis.jpg'),
(3, '3.jpg', '3-bis.jpg'),
(4, '4.jpg', '4-bis.jpg'),
(5, '5.jpg', '5-bis.jpg'),
(6, '6.jpg', '6-bis.jpg'),
(7, '7.jpg', '7-bis.jpg'),
(8, '8.jpg', '8-bis.jpg'),
(18, '15744236399.jpg', '15744236399-bis.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id`, `chemin`) VALUES
(1, '6.jpg'),
(2, '1.jpg'),
(3, '2.jpg'),
(4, '5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`id`, `content`) VALUES
(1, 'Soci&eacute;t&eacute; &agrave; responsabilit&eacute; limit&eacute;e unipersonnelle est active depuis 2013. &Eacute;tablie &agrave; CREVIN (35320), elle est sp&eacute;cialis&eacute;e dans le secteur d\'activit&eacute; des travaux de menuiserie bois et pvc. Son effectif est compris entre 3 et 4 salari&eacute;s.'),
(2, 'La Menuiserie Quellard a &eacute;t&eacute; cr&eacute;e en 2013 par Mr Quellard Joel. <br />Sp&eacute;cialis&eacute; dans la menuiserie depuis 30 ans, Mr Quellard est &agrave; votre service pour tous vos travaux de menuiseries <br />ext&eacute;rieures et int&eacute;rieures, placards, ainsi que l\'isolation et le placoplatre. <br />L\'entreprise est qualifi&eacute;e RGE.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(128) NOT NULL,
  `isadmin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `motdepasse`, `isadmin`) VALUES
(3, 'superlkn35', 'corentin@gmail.com', '$2y$10$FXcIqmyyBwV9CZaR65lIo.fSjYIH8MMGn9ii6hRaXjvkpfyw12bIi', NULL),
(2, 'superLKN', 'superlkn@gmail.com', '$2y$10$xHZoppLH8XaYVSmaH2w//ea9hiB9qSnMhh.NDRc9NTHLj/tq/5pU.', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
