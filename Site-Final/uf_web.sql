-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 24 juin 2019 à 09:20
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `uf_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `capacite`
--

DROP TABLE IF EXISTS `capacite`;
CREATE TABLE IF NOT EXISTS `capacite` (
  `ID_capacite` int(6) NOT NULL AUTO_INCREMENT,
  `Nom_capacite` varchar(40) NOT NULL,
  `Note` decimal(1,0) NOT NULL,
  `ID_User` int(6) NOT NULL,
  PRIMARY KEY (`ID_capacite`),
  KEY `fk_capacite_IDuser` (`ID_User`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capacite`
--

INSERT INTO `capacite` (`ID_capacite`, `Nom_capacite`, `Note`, `ID_User`) VALUES
(1, 'Infrastructure et reseaux', '7', 3),
(2, 'Langage C', '6', 3),
(3, 'Langage SQL', '7', 3),
(4, 'Anglais', '9', 3),
(5, 'HTML', '7', 1),
(6, 'CSS', '8', 1),
(7, 'JavaScript', '6', 1),
(8, 'PHP', '4', 1),
(9, 'SQL', '8', 2),
(10, 'PHP', '7', 2),
(11, 'HTML/CSS', '6', 2),
(12, 'Gestion de projet', '7', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID_Contact` int(6) NOT NULL AUTO_INCREMENT,
  `Mail` varchar(30) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Linkedin` varchar(80) NOT NULL,
  `Github` varchar(80) NOT NULL,
  `No_rue` int(3) NOT NULL,
  `Nom_rue` varchar(50) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `CodePostal` decimal(5,0) NOT NULL,
  `Departement` varchar(20) NOT NULL,
  `ComplementAdd` varchar(50) DEFAULT NULL,
  `ID_User` int(6) NOT NULL,
  PRIMARY KEY (`ID_Contact`),
  KEY `FK_Contact_IDuser` (`ID_User`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`ID_Contact`, `Mail`, `Tel`, `Linkedin`, `Github`, `No_rue`, `Nom_rue`, `Ville`, `CodePostal`, `Departement`, `ComplementAdd`, `ID_User`) VALUES
(1, 'bruno.dehon@ynov.com', 659848864, 'https://fr.linkedin.com/in/bruno-dehon-30a7b1180', 'https://github.com/ElectroSpy', 11, 'Avenue de la Guadeloupe', 'Villepreux', '78450', 'Yvelines', NULL, 1),
(2, 'marie.dravigny@gmail.com', 651110699, '#', 'https://github.com/Notulys', 127, 'Avenue JB Clement', 'Boulogne-Billancourt', '92100', 'Hauts-de-Seine', NULL, 3),
(3, 'rafaelmetayer@gmail.com', 628504485, 'https://www.linkedin.com/in/rafa%C3%ABl-metayer-b22117176/', 'https://github.com/RafaelMetayer', 8, 'Impasse des glycines', 'Trie-Chateau', '60590', 'Oise', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `exp_pro`
--

DROP TABLE IF EXISTS `exp_pro`;
CREATE TABLE IF NOT EXISTS `exp_pro` (
  `ID_xp` int(6) NOT NULL AUTO_INCREMENT,
  `Entreprise` varchar(20) NOT NULL,
  `Date_debut` year(4) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Poste` varchar(40) NOT NULL,
  `Date_fin` year(4) DEFAULT NULL,
  `ID_user` int(6) NOT NULL,
  PRIMARY KEY (`ID_xp`),
  KEY `FK_expro_ID_User` (`ID_user`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `exp_pro`
--

INSERT INTO `exp_pro` (`ID_xp`, `Entreprise`, `Date_debut`, `Description`, `Poste`, `Date_fin`, `ID_user`) VALUES
(5, 'Carrefour', 2017, '- Agent de caisse\r\n- Mise en rayon et balisage\r\n- Renseignement client\r\n- Animation Black Friday', 'Agent polyvalent', 2018, 1),
(4, 'Carrefour', 2016, '-Stage en entreprise à Carrefour au service trésorerie', 'Stagiaire tresorerie', 2016, 1),
(2, 'Lidl', 2017, '-Agent de caisse\r\n-Mise en rayon\r\n-Accueil client\r\n', 'Employe polyvalent', 2019, 3),
(3, 'Independante', 2019, '-Aide au devoirs pour collégiens', 'Cours du soir', NULL, 3),
(1, 'Independante', 2016, '-Garde des enfants', 'Babysitting', 2017, 3),
(6, 'ADP', 2019, '-Programmation intranet confluence', 'Stagiaire informatique', 2019, 1),
(7, 'Tyco Electronics', 2014, '-Découverte du monde de l\'entreprise', 'Stagiaire service metrologie', 2014, 2),
(8, 'Groupe Prevoir', 2018, '- Distribution du courrier dans les différents services de l’entreprise\r\n- Récupération et mise sous plis des lettres client et réseau commercial\r\n- Numérisation et archivage des dossiers clients', 'Service Courrier et numerisation', 2018, 2),
(9, 'Fujitsu', 2019, '- Découverte du Framework de développement RunMyProcess (RMP)\r\n-Suggestion de code pour la  transition vers la nouvelle plateforme Myre (React)\r\n- Saisie de la documentation', 'Stagiaire service informatique', 2019, 2);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `ID_formation` int(6) NOT NULL AUTO_INCREMENT,
  `Date_debut` year(4) NOT NULL,
  `Diplome` varchar(40) NOT NULL,
  `Nom_ecole` varchar(40) NOT NULL,
  `Ville_ecole` varchar(20) NOT NULL,
  `CodePostal` decimal(5,0) NOT NULL,
  `Date_fin` year(4) DEFAULT NULL,
  `ID_user` int(6) NOT NULL,
  PRIMARY KEY (`ID_formation`),
  KEY `fk_Formation_IDuser` (`ID_user`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`ID_formation`, `Date_debut`, `Diplome`, `Nom_ecole`, `Ville_ecole`, `CodePostal`, `Date_fin`, `ID_user`) VALUES
(1, 2014, 'Baccalaureat Economique et Social', 'Lycee Prevert', 'Boulogne-Billancourt', '92100', 2017, 3),
(2, 2017, 'Droit (1ere annee)', 'Universite', 'Versailles', '78000', 2018, 3),
(3, 2019, 'Bachelor en informatique', 'YNOV', 'Nanterre', '92000', NULL, 3),
(4, 2014, 'Baccalaureat Commerce mention B', 'Lycee Prevert', 'Versailles', '78000', 2017, 1),
(5, 2017, 'BTS Commerce', 'Universite', 'Trappes', '78190', 2018, 1),
(6, 2018, 'Bachelor en informatique', 'YNOV', 'Nanterre', '92000', NULL, 1),
(7, 2010, 'Brevet des colleges mention TB', 'College Guy de Maupassant', 'Chaumont-en-Vexin', '60240', 2015, 2),
(8, 2015, 'Baccalaureat Scientifique mention AB', 'Lycee Louise Michel', 'Gisors', '27140', 2018, 2),
(9, 2018, 'Bachelor en informatique', 'YNOV', 'Nanterre', '92000', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_User` int(6) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `Age` decimal(2,0) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Permis` varchar(6) NOT NULL,
  `Metier` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_User`, `Nom`, `Prenom`, `Age`, `Date_naissance`, `Permis`, `Metier`) VALUES
(1, 'DEHON', 'Bruno', '21', '1998-06-16', 'B', 'Informatique'),
(2, 'METAYER', 'Rafael', '19', '2000-05-20', 'B', 'Base de donnees'),
(3, 'DRAVIGNY', 'Marie', '20', '1999-01-28', 'B', 'Developpement logiciel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
