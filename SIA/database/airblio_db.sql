-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 06:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airblio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL,
  `iban` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `email`, `first_name`, `last_name`, `cell`, `adress`, `client_password`, `iban`, `role`) VALUES
(1, 'john.doe@exemple.com', 'john', 'doe', '0123456789', '10 rue paris', 'john123', '0123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_intervention` int(11) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `type_commande` varchar(100) NOT NULL,
  `profondeur` double NOT NULL,
  `statut` varchar(100) NOT NULL,
  `date_creation` date NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cell` int(11) NOT NULL,
  `adresse` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `email`, `first_name`, `last_name`, `password`, `cell`, `adresse`, `role`) VALUES
(1, 'joyce.doe@exemple.com', 'joyce', 'doe', 'joyce123', 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `equipe`
--

CREATE TABLE `equipe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `adress`, `status`) VALUES
(1, '', '5 rue paris', 'en cours');

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_intervention` int(11) NOT NULL,
  `total_heures` int(11) NOT NULL,
  `prix_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facture`
--

INSERT INTO `facture` (`id`, `id_client`, `id_intervention`, `total_heures`, `prix_total`) VALUES
(1, 1, 1, 500, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `intervenant`
--

CREATE TABLE `intervenant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_equipe` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `couts_horaire` double NOT NULL,
  `volume_horaire` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intervenant`
--

INSERT INTO `intervenant` (`id`, `id_equipe`, `status`, `location`, `couts_horaire`, `volume_horaire`) VALUES
(1, 1, 'en cours', '5 rue paris', 20, 30);

-- --------------------------------------------------------

--
-- Table structure for table `intervention`
--

CREATE TABLE `intervention` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_equipe` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `nombre_heures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intervention`
--

INSERT INTO `intervention` (`id`, `id_equipe`, `status`, `date_debut`, `date_fin`, `nombre_heures`) VALUES
(1, 1, 'en cours', '2022-03-30', '2023-03-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materiel_client`
--

CREATE TABLE `materiel_client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_client` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `date_creation` date NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `date_dernier_controle` date NOT NULL,
  `periode_validite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materiel_intervention`
--

CREATE TABLE `materiel_intervention` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_intervention` int(11) NOT NULL,
  `date_creation` date NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `date_dernier_controle` date NOT NULL,
  `periode_validite` int(11) NOT NULL,
  `statut` varchar(100) NOT NULL,
  `cout_location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `objet_connecte`
--

CREATE TABLE `objet_connecte` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_materiel` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mesure_capteur` double NOT NULL,
  `unite_mesure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objet_connecte`
--

INSERT INTO `objet_connecte` (`id`, `id_materiel`, `nom`, `mesure_capteur`, `unite_mesure`) VALUES
(1, 1, 'objet connecte 1', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `intervenant`
--
ALTER TABLE `intervenant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `intervention`
--
ALTER TABLE `intervention`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `materiel_client`
--
ALTER TABLE `materiel_client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `materiel_intervention`
--
ALTER TABLE `materiel_intervention`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `objet_connecte`
--
ALTER TABLE `objet_connecte`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intervenant`
--
ALTER TABLE `intervenant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intervention`
--
ALTER TABLE `intervention`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materiel_client`
--
ALTER TABLE `materiel_client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materiel_intervention`
--
ALTER TABLE `materiel_intervention`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objet_connecte`
--
ALTER TABLE `objet_connecte`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
