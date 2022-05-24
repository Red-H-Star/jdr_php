-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 10 mai 2022 à 15:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jdrphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `idClasse` int(11) NOT NULL AUTO_INCREMENT,
  `nomClasse` varchar(50) DEFAULT NULL,
  `pdvClasse` int(11) DEFAULT NULL,
  `jdSClasse` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idClasse`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`idClasse`, `nomClasse`, `pdvClasse`, `jdSClasse`) VALUES
(1, 'Guerrier', 10, 'Force, Constitution'),
(2, 'Roublard', 8, 'Dextérité, Intelligence'),
(3, 'Magicien', 6, 'Intelligence, Sagesse');

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

DROP TABLE IF EXISTS `personnages`;
CREATE TABLE IF NOT EXISTS `personnages` (
  `idPerso` int(11) NOT NULL AUTO_INCREMENT,
  `nomPerso` varchar(50) DEFAULT NULL,
  `racePerso` varchar(50) DEFAULT NULL,
  `classePerso` varchar(50) DEFAULT NULL,
  `niveauPerso` int(11) DEFAULT NULL,
  `FORpersonnage` int(11) DEFAULT NULL,
  `DEXpersonnage` int(11) DEFAULT NULL,
  `CONpersonnage` int(11) DEFAULT NULL,
  `INTpersonnage` int(11) DEFAULT NULL,
  `SAGpersonnage` int(11) DEFAULT NULL,
  `CHApersonnage` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPerso`),
  KEY `racePerso` (`racePerso`),
  KEY `classePerso` (`classePerso`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`idPerso`, `nomPerso`, `racePerso`, `classePerso`, `niveauPerso`, `FORpersonnage`, `DEXpersonnage`, `CONpersonnage`, `INTpersonnage`, `SAGpersonnage`, `CHApersonnage`) VALUES
(1, 'Gobbi', 'Gobelin', 'Guerrier', 1, 8, 14, 10, 10, 8, 8);

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

DROP TABLE IF EXISTS `races`;
CREATE TABLE IF NOT EXISTS `races` (
  `idRace` int(11) NOT NULL AUTO_INCREMENT,
  `nomRace` varchar(50) DEFAULT NULL,
  `bonusFOR` int(11) DEFAULT NULL,
  `bonusDEX` int(11) DEFAULT NULL,
  `bonusCON` int(11) DEFAULT NULL,
  `bonusINT` int(11) DEFAULT NULL,
  `bonusSAG` int(11) DEFAULT NULL,
  `bonusCHA` int(11) DEFAULT NULL,
  `taille` char(1) DEFAULT NULL,
  `vitesse` float(3,1) DEFAULT NULL,
  PRIMARY KEY (`idRace`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `races`
--

INSERT INTO `races` (`idRace`, `nomRace`, `bonusFOR`, `bonusDEX`, `bonusCON`, `bonusINT`, `bonusSAG`, `bonusCHA`, `taille`, `vitesse`) VALUES
(1, 'Gobelin', -1, 2, 0, 0, -1, -1, 'P', 9.0),
(2, 'Humain', 1, 1, 1, 1, 1, 1, 'M', 9.0),
(3, 'Demi-Orc', 2, 0, 1, 0, 0, 0, 'M', 9.0),
(4, 'Nain_des_montagnes', 2, 0, 2, 0, 0, 0, 'M', 7.5),
(5, 'Nain_des_collines', 0, 0, 2, 0, 1, 0, 'M', 7.5),
(6, 'Haut-Elfe', 0, 2, 0, 1, 0, 0, 'M', 9.0),
(7, 'Elfe_des_bois', 0, 2, 0, 0, 1, 0, 'M', 10.5),
(8, 'Elfe_noir', 0, 2, 0, 0, 0, 1, 'M', 9.0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `nomUser`, `mdp`, `email`) VALUES
(1, 'root', 'beer', 'root13@gmail.com'),
(13, 'CrashTest', 'test101', 'crash13@test.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
