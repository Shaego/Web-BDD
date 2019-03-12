-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 28 Février 2019 à 16:59
-- Version du serveur :  5.6.37
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `BdAeroport`
--

-- --------------------------------------------------------

--
-- Structure de la table `tblAeroport`
--

CREATE TABLE IF NOT EXISTS `tblAeroport` (
  `codeAeroport` char(3) NOT NULL,
  `nomAeroport` varchar(50) NOT NULL,
  `noTelAeroport` varchar(14) NOT NULL,
  `HeureGmt` smallint(6) NOT NULL,
  `codeVille` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblBillet`
--

CREATE TABLE IF NOT EXISTS `tblBillet` (
  `noBillet` int(11) NOT NULL,
  `noVol` char(5) NOT NULL,
  `dateVole` date NOT NULL,
  `noSiege` varchar(4) NOT NULL,
  `codeClasse` char(2) NOT NULL,
  `prixBillet` decimal(6,2) NOT NULL,
  `typeRepas` varchar(30) NOT NULL,
  `noReservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblClasseBillet`
--

CREATE TABLE IF NOT EXISTS `tblClasseBillet` (
  `codeClasse` char(2) NOT NULL,
  `nomClasse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblClient`
--

CREATE TABLE IF NOT EXISTS `tblClient` (
  `noClient` int(11) NOT NULL,
  `nomClient` varchar(25) NOT NULL,
  `prenomClient` varchar(25) NOT NULL,
  `noTelClient` varchar(14) NOT NULL,
  `adresseClient` varchar(50) NOT NULL,
  `escompte` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblCompagnieAerienne`
--

CREATE TABLE IF NOT EXISTS `tblCompagnieAerienne` (
  `codeCie` char(2) NOT NULL,
  `nomCie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblPays`
--

CREATE TABLE IF NOT EXISTS `tblPays` (
  `codePays` char(2) NOT NULL,
  `nomPays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblReservation`
--

CREATE TABLE IF NOT EXISTS `tblReservation` (
  `noReservation` int(11) NOT NULL,
  `dateReservation` date NOT NULL,
  `statutReservation` varchar(15) NOT NULL,
  `modePaiement` varchar(20) NOT NULL,
  `statutPaiement` varchar(9) NOT NULL,
  `noClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblTypeAppareil`
--

CREATE TABLE IF NOT EXISTS `tblTypeAppareil` (
  `codeTypeAppareil` varchar(15) NOT NULL,
  `descTypeAppareil` varchar(20) NOT NULL,
  `vitesseCroisiere` smallint(6) NOT NULL,
  `autonomieVol` smallint(6) NOT NULL,
  `nbSieges` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblVille`
--

CREATE TABLE IF NOT EXISTS `tblVille` (
  `codeVille` char(3) NOT NULL,
  `nomVille` varchar(50) NOT NULL,
  `codePays` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblVol`
--

CREATE TABLE IF NOT EXISTS `tblVol` (
  `noVol` char(5) NOT NULL,
  `aeroportDepart` char(3) NOT NULL,
  `aeroportArrivee` char(3) NOT NULL,
  `heureDepart` time(6) NOT NULL,
  `heureArrivee` time(6) NOT NULL,
  `distanceToKm` smallint(6) NOT NULL,
  `dureeTotalePrevue` tinyint(4) NOT NULL,
  `codeTypeAppareil` varchar(15) NOT NULL,
  `codeCie` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tblAeroport`
--
ALTER TABLE `tblAeroport`
  ADD PRIMARY KEY (`codeAeroport`),
  ADD KEY `codeVille` (`codeVille`);

--
-- Index pour la table `tblBillet`
--
ALTER TABLE `tblBillet`
  ADD PRIMARY KEY (`noBillet`),
  ADD KEY `noVol` (`noVol`),
  ADD KEY `codeClasse` (`codeClasse`),
  ADD KEY `noReservation` (`noReservation`);

--
-- Index pour la table `tblClasseBillet`
--
ALTER TABLE `tblClasseBillet`
  ADD PRIMARY KEY (`codeClasse`);

--
-- Index pour la table `tblClient`
--
ALTER TABLE `tblClient`
  ADD PRIMARY KEY (`noClient`);

--
-- Index pour la table `tblCompagnieAerienne`
--
ALTER TABLE `tblCompagnieAerienne`
  ADD PRIMARY KEY (`codeCie`);

--
-- Index pour la table `tblPays`
--
ALTER TABLE `tblPays`
  ADD PRIMARY KEY (`codePays`);

--
-- Index pour la table `tblReservation`
--
ALTER TABLE `tblReservation`
  ADD PRIMARY KEY (`noReservation`),
  ADD KEY `noClient` (`noClient`);

--
-- Index pour la table `tblTypeAppareil`
--
ALTER TABLE `tblTypeAppareil`
  ADD PRIMARY KEY (`codeTypeAppareil`);

--
-- Index pour la table `tblVille`
--
ALTER TABLE `tblVille`
  ADD PRIMARY KEY (`codeVille`),
  ADD KEY `codePays` (`codePays`);

--
-- Index pour la table `tblVol`
--
ALTER TABLE `tblVol`
  ADD PRIMARY KEY (`noVol`),
  ADD KEY `aeroportDepart` (`aeroportDepart`),
  ADD KEY `aeroportArrivee` (`aeroportArrivee`),
  ADD KEY `codeTypeAppareil` (`codeTypeAppareil`),
  ADD KEY `codeCie` (`codeCie`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tblAeroport`
--
ALTER TABLE `tblAeroport`
  ADD CONSTRAINT `tblaeroport_ibfk_1` FOREIGN KEY (`codeVille`) REFERENCES `tblVille` (`codeVille`);

--
-- Contraintes pour la table `tblBillet`
--
ALTER TABLE `tblBillet`
  ADD CONSTRAINT `tblbillet_ibfk_1` FOREIGN KEY (`noVol`) REFERENCES `tblVol` (`noVol`),
  ADD CONSTRAINT `tblbillet_ibfk_2` FOREIGN KEY (`codeClasse`) REFERENCES `tblClasseBillet` (`codeClasse`),
  ADD CONSTRAINT `tblbillet_ibfk_3` FOREIGN KEY (`noReservation`) REFERENCES `tblReservation` (`noReservation`);

--
-- Contraintes pour la table `tblReservation`
--
ALTER TABLE `tblReservation`
  ADD CONSTRAINT `tblreservation_ibfk_1` FOREIGN KEY (`noClient`) REFERENCES `tblClient` (`noClient`);

--
-- Contraintes pour la table `tblVille`
--
ALTER TABLE `tblVille`
  ADD CONSTRAINT `tblville_ibfk_1` FOREIGN KEY (`codePays`) REFERENCES `tblPays` (`codePays`);

--
-- Contraintes pour la table `tblVol`
--
ALTER TABLE `tblVol`
  ADD CONSTRAINT `tblvol_ibfk_1` FOREIGN KEY (`aeroportDepart`) REFERENCES `tblAeroport` (`codeAeroport`),
  ADD CONSTRAINT `tblvol_ibfk_2` FOREIGN KEY (`aeroportArrivee`) REFERENCES `tblVille` (`codeVille`),
  ADD CONSTRAINT `tblvol_ibfk_3` FOREIGN KEY (`codeTypeAppareil`) REFERENCES `tblTypeAppareil` (`codeTypeAppareil`),
  ADD CONSTRAINT `tblvol_ibfk_4` FOREIGN KEY (`codeCie`) REFERENCES `tblCompagnieAerienne` (`codeCie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
