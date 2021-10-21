-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 oct. 2021 à 09:02
-- Version du serveur :  5.7.35
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `northmarina`
--

-- --------------------------------------------------------

--
-- Structure de la table `bateau`
--

DROP TABLE IF EXISTS `bateau`;
CREATE TABLE IF NOT EXISTS `bateau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `immat_bateau` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bateau`
--

INSERT INTO `bateau` (`id`, `immat_bateau`) VALUES
(4, 'NIB 299'),
(3, 'FQD 248'),
(5, ' QYW 676'),
(6, 'MMP 879'),
(7, 'JXZ 270'),
(8, 'FMK 267'),
(9, 'LPH 430'),
(10, 'MBX 243'),
(11, 'JNW 106'),
(12, 'WVF 592'),
(13, 'YDQ 569'),
(14, 'YPY 138');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `date_recrutement` date NOT NULL,
  `id_fonction` int(11) NOT NULL,
  `commentaire` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `avertissements` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_bin NOT NULL,
  `moniteur` varchar(6) COLLATE utf8_bin NOT NULL,
  `plongee` varchar(6) COLLATE utf8_bin NOT NULL,
  `formateur` varchar(30) COLLATE utf8_bin NOT NULL,
  `service` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_fonction` (`id_fonction`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `nom`, `prenom`, `date_recrutement`, `id_fonction`, `commentaire`, `avertissements`, `tel`, `moniteur`, `plongee`, `formateur`, `service`) VALUES
(15, 'Pojkla', 'Mickael', '2021-02-08', 6, '', '', '150502qsd', 'non', 'non', 'Sam', 1),
(16, 'Belaires', 'Sam', '2021-02-08', 6, '', '', '240102', 'non', 'non', 'Mickael', 1),
(8, 'Wang', 'Dieu-Michel-Aimé', '2021-02-04', 6, 'pécheur', '', '66310', '0', '0', 'Mickael', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `id` int(11) NOT NULL,
  `libelle` char(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `libelle`) VALUES
(4, 'Chef d\'équipe Sécurité'),
(3, 'Sécurité'),
(2, 'Pêcheur Confirmé'),
(1, 'Pêcheur Novice'),
(5, 'Commercial'),
(6, 'Manager'),
(7, 'Adjoint chef de la Sécurité'),
(8, 'Chef de la Sécurité'),
(9, 'Responsable Général'),
(10, 'PDG');

-- --------------------------------------------------------

--
-- Structure de la table `mules`
--

DROP TABLE IF EXISTS `mules`;
CREATE TABLE IF NOT EXISTS `mules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `immat` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `mules`
--

INSERT INTO `mules` (`id`, `immat`) VALUES
(1, 'AMP-897'),
(2, 'JXP-751');

-- --------------------------------------------------------

--
-- Structure de la table `peche`
--

DROP TABLE IF EXISTS `peche`;
CREATE TABLE IF NOT EXISTS `peche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `poisson_peche` int(11) NOT NULL,
  `poisson_coffre` int(11) DEFAULT NULL,
  `date2` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `peche`
--

INSERT INTO `peche` (`id`, `id_client`, `poisson_peche`, `poisson_coffre`, `date2`, `heure`) VALUES
(37, 1, 12, 0, '2021-02-04', '00:16:49'),
(48, 16, 290, 10, '2021-02-10', '00:17:31'),
(47, 16, 300, 0, '2021-02-10', '00:17:31'),
(46, 12, 300, 0, '2021-02-08', '00:03:35'),
(45, 12, 45, 0, '2021-02-04', '00:17:50'),
(44, 12, 45, 0, '2021-02-04', '00:17:50'),
(43, 6, 300, 4, '2021-02-04', '00:17:46'),
(42, 8, 300, 0, '2021-02-04', '00:17:12'),
(41, 1, 300, 0, '2021-02-04', '00:17:03'),
(49, 15, 12, 12, '2021-10-21', '00:11:01');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `date_service` date NOT NULL,
  `date_fin_service` date DEFAULT NULL,
  `heure_service` time NOT NULL,
  `heure_fin_service` time DEFAULT NULL,
  `id_bateau` int(11) DEFAULT NULL,
  `id_mule` int(11) DEFAULT NULL,
  `id_employes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_service`),
  KEY `id_bateau` (`id_bateau`),
  KEY `id_mule` (`id_mule`),
  KEY `id_employes` (`id_employes`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `date_service`, `date_fin_service`, `heure_service`, `heure_fin_service`, `id_bateau`, `id_mule`, `id_employes`) VALUES
(31, '2021-02-15', NULL, '00:16:45', NULL, NULL, NULL, 15),
(32, '2021-10-09', NULL, '00:15:48', NULL, NULL, NULL, 16),
(33, '2021-10-21', NULL, '00:11:00', NULL, NULL, NULL, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
