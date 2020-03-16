-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 10:26 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chambres_agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `cahier_bord`
--

CREATE TABLE IF NOT EXISTS `cahier_bord` (
  `id_cahier` int(11) NOT NULL AUTO_INCREMENT,
  `id_employe` varchar(200) NOT NULL,
  `motif` varchar(200) NOT NULL,
  `date_depart` date NOT NULL,
  `date_retour` date NOT NULL,
  `compteur_depart` int(11) NOT NULL,
  `compteur_arrive` int(11) NOT NULL,
  `km_parcouru` int(11) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `prix_auto` varchar(20) NOT NULL,
  `prix_carb` varchar(20) NOT NULL,
  `fonction` varchar(200) NOT NULL,
  `id_voiture` int(11) NOT NULL,
  `etat_misdion` int(11) NOT NULL,
  PRIMARY KEY (`id_cahier`),
  KEY `id_voiture` (`id_voiture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cahier_bord`
--

INSERT INTO `cahier_bord` (`id_cahier`, `id_employe`, `motif`, `date_depart`, `date_retour`, `compteur_depart`, `compteur_arrive`, `km_parcouru`, `destination`, `prix_auto`, `prix_carb`, `fonction`, `id_voiture`, `etat_misdion`) VALUES
(3, '17', 'visite????', '2018-04-20', '2018-04-28', 150000, 151000, 1000, 'dakhela', '150', '150000', '', 9, 1),
(4, '16', 'visite????', '2018-04-25', '2018-04-27', 150000, 151000, 1000, 'dakhela', '150', '150000', '', 7, 1),
(5, '15', 'visite????', '2018-04-16', '2018-04-17', 150000, 0, 0, 'dakhela', '150', '150000', '', 8, 0),
(6, '15', 'visite????', '2018-04-16', '2018-04-17', 150000, 0, 0, 'dakhela', '150', '150000', '', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `id_employe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Fonction` varchar(200) NOT NULL,
  `cin` varchar(50) NOT NULL,
  `code_bud` varchar(50) NOT NULL,
  `date_effet` date NOT NULL,
  `regime_affi` varchar(50) NOT NULL,
  `adhesion` varchar(50) NOT NULL,
  `annee_de_naissance` date NOT NULL,
  `etat_civil` varchar(50) NOT NULL,
  `nbr_enfant` int(11) NOT NULL,
  `situation_conj` varchar(50) NOT NULL,
  `residence` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `sit_ancienne` varchar(50) NOT NULL,
  `sit_nouvelle` varchar(50) NOT NULL,
  `recrute_compter` date NOT NULL,
  `num_affi` int(11) DEFAULT NULL,
  `num_imma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_employe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id_employe`, `Nom`, `Prenom`, `Fonction`, `cin`, `code_bud`, `date_effet`, `regime_affi`, `adhesion`, `annee_de_naissance`, `etat_civil`, `nbr_enfant`, `situation_conj`, `residence`, `grade`, `sit_ancienne`, `sit_nouvelle`, `recrute_compter`, `num_affi`, `num_imma`) VALUES
(15, 'elkafi', 'khalid', 'ingenieur', 'Q6354', '62', '2018-11-11', '65', 'No', '2017-11-30', 'Non-Marie', 0, 'lmk', 'marrakech', 'Administrateur', '1 ere grade', '32', '2017-11-30', 21, 32),
(16, 'benhima kk,k,', 'abdellatif ', 'ingenieur ', 'Q6354 ', '62 ', '0000-00-00', '65 ', 'No ', '0000-00-00', 'Non-Marie ', 0, 'lmk ', 'marrakech ', 'Administrateur ', '1 ere grade ', '32 ', '0000-00-00', 21, 32),
(17, 'Ramoun', 'simo', 'ingenieur', 'Q6354', '62', '2018-11-11', '65', 'No', '2017-11-30', 'Non-Marie', 0, 'lmk', 'marrakech', 'Administrateur', '1 ere grade', '32', '2017-11-30', 21, 32);

-- --------------------------------------------------------

--
-- Table structure for table `repartation`
--

CREATE TABLE IF NOT EXISTS `repartation` (
  `id_reparation` int(11) NOT NULL AUTO_INCREMENT,
  `id_voiture` int(11) NOT NULL,
  `type_reparation` varchar(300) NOT NULL,
  `Descriptif` varchar(300) NOT NULL,
  `prix_rep` float NOT NULL,
  `Date_Reparation` date NOT NULL,
  PRIMARY KEY (`id_reparation`),
  KEY `id_voiture` (`id_voiture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `repartation`
--

INSERT INTO `repartation` (`id_reparation`, `id_voiture`, `type_reparation`, `Descriptif`, `prix_rep`, `Date_Reparation`) VALUES
(6, 7, 'Chengement de piece', 'iyufgi iygui uygfi', 1235, '2018-04-13'),
(7, 8, 'Chengement de piece', 'mmmmmmmmmmm', 1541230, '2018-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `vidange`
--

CREATE TABLE IF NOT EXISTS `vidange` (
  `Id_vidange` int(11) NOT NULL AUTO_INCREMENT,
  `id_voiture` int(11) NOT NULL,
  `Type_vidange` varchar(500) NOT NULL,
  `type_huile` varchar(50) NOT NULL,
  `Descriptif` text NOT NULL,
  `prix_vidange` double NOT NULL,
  PRIMARY KEY (`Id_vidange`),
  KEY `id_voiture` (`id_voiture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `vidange`
--

INSERT INTO `vidange` (`Id_vidange`, `id_voiture`, `Type_vidange`, `type_huile`, `Descriptif`, `prix_vidange`) VALUES
(10, 2, 'Vidange Simple', '5 000 KM', 'ougezfo oezuhfoze', 1234),
(11, 8, 'Vidange avec filtre a gazoil', '7 000 KM', 'momp', 43214321),
(12, 8, 'Vidange avec filtre d''aire', '20 000 KM', 'lnonlnlnln', 6584);

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `id_voiture` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` varchar(300) NOT NULL,
  `date_circulation` date NOT NULL,
  `N_chassis` varchar(300) NOT NULL,
  `Etat` varchar(300) NOT NULL,
  `KM_actuel` float NOT NULL,
  `Date_assurance` date NOT NULL,
  `Date_vignette` date NOT NULL,
  `Date_visite` date NOT NULL,
  `Etat_visite` varchar(500) NOT NULL,
  `Date_derniervidange` date NOT NULL,
  `km_pr_vidange` int(11) NOT NULL,
  `Matricule` varchar(500) NOT NULL,
  PRIMARY KEY (`id_voiture`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`id_voiture`, `Marque`, `date_circulation`, `N_chassis`, `Etat`, `KM_actuel`, `Date_assurance`, `Date_vignette`, `Date_visite`, `Etat_visite`, `Date_derniervidange`, `km_pr_vidange`, `Matricule`) VALUES
(2, 'Dacia ', '2018-04-11', 'ABABAB ', 'Bonne', 12000, '2018-04-19', '0000-00-00', '2018-04-26', 'BONNE ', '2018-04-18', 19000, 'GDGDHDa '),
(7, 'ferari', '2018-11-30', 'f98797', 'Mauvaise', 6464, '2017-11-30', '2017-11-30', '2017-11-30', 'RIUVGUR', '2017-11-30', 548, 'g5489698'),
(8, 'lambo', '2017-11-30', 'f98797', 'Mauvaise', 6464, '2017-11-30', '2017-11-30', '2018-11-30', 'RIUVGUR', '2017-11-30', 68498, 'g5489698'),
(9, 'mercecedes', '2016-10-31', 'f984', 'Mauvaise', 6464, '2017-11-30', '2018-11-30', '2017-12-30', 'RIUVGUR', '2017-11-30', 68498, 'g5489698');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `repartation`
--
ALTER TABLE `repartation`
  ADD CONSTRAINT `repartation_ibfk_1` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id_voiture`);

--
-- Constraints for table `vidange`
--
ALTER TABLE `vidange`
  ADD CONSTRAINT `vidange_ibfk_1` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id_voiture`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
