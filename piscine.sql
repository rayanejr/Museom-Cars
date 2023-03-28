-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Juin 2022 à 22:03
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `label_article` varchar(250) NOT NULL,
  `photo_article` varchar(250) NOT NULL,
  `decription_article` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `label_article`, `photo_article`, `decription_article`, `price`, `createdAt`, `likes`, `category_id`, `quantite`) VALUES
(5, ' rolls roys', 'articles/R.jpg', 'voiture de collection creer durant les année 1970.Elle de couleur beige et décapotable', '180', '2022-06-24 18:11:49', 7, 4, 2),
(6, '  peugeot 1986', 'articles/62ba1c532e0b2.jpg', 'voiture de collection creer durant les annï¿½e 1986.Elle de couleur bleu ï¿½lï¿½ctrique', '160', '2022-06-27 20:26:49', 1, 6, 5),
(7, 'Lamborghini', './articles/62ba1dc08d753.jpg', 'Lamborghini verte', '120', '2022-06-27 21:14:40', 0, 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `label_category` varchar(250) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_category`, `label_category`) VALUES
(1, 'Mercedes'),
(2, 'Audi'),
(4, 'Rolls Roys'),
(5, 'Lamborghini'),
(6, 'peugeot');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id_message`, `fullname`, `email`, `subject`, `message`, `datetime`) VALUES
(1, 'taher chourabi', 'tchourabi@gmail.com', 'test', 'hello world', '2022-06-24 08:41:38'),
(2, 'taher chourabi', 'tchourabi@gmail.com', 'test', 'hello world', '2022-06-24 08:43:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `avatar` varchar(2000) NOT NULL DEFAULT 'default.png',
  `note` int(11) DEFAULT NULL,
  `reset_mdp` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `fullname`, `email`, `password`, `role`, `status`, `avatar`, `note`, `reset_mdp`) VALUES
(12, 'JERBI Rayane', 'rayane.jerbi@edu.ece.fr', 'f42f040056d7351245ee33e97a91c45a704ba5c5', 'ROLE_ADMIN', 1, 'users/62b5d236c0b60.jpg', 6, NULL),
(24, 'baccouche aladin', 'baccouche.aladin@yahoo.com', '2bc75458c71213661aa42ba9badc52862dfd3e44', 'ROLE_USER', 1, 'users/62ba137944844.jpg', NULL, 0),
(25, 'Mathis Jankovic', 'mathis.jankovic@edu.ece.fr', '68a2e0e703f5cd0ef2e3eca147467957147206d8', 'ROLE_ADMIN', 1, './users/62ba14f53eac7.jpg', NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
