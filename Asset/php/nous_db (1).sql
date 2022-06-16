-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 juin 2022 à 19:16
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nous_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaire`
--

CREATE TABLE `beneficiaire` (
  `id_benef` int(11) NOT NULL,
  `date_benef` date NOT NULL,
  `montant_benef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compt` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id_compt`, `solde`, `id_membre`) VALUES
(1, 20000000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id_groupe` int(11) NOT NULL,
  `nombre_membre` int(11) NOT NULL,
  `intitule` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id_groupe`, `nombre_membre`, `intitule`) VALUES
(1, 50, 'Groupe1'),
(2, 50, 'Groupe2');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `login` text NOT NULL,
  `pass` varchar(50) NOT NULL,
  `groupuser` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `prenom`, `adresse`, `fonction`, `login`, `pass`, `groupuser`, `telephone`, `id_groupe`) VALUES
(1, 'COUMARE', 'Adja', 'ACI', 'Codeuse', 'admin@gmail.com', 'cool1', 'admin', 11223344, 1),
(2, 'DJIKINE', 'Mamadou', 'ACI', 'Codeur', 'membre@gmail.com', 'qerty', 'membre', 33445566, 1),
(3, 'ASSIMI', 'GOITA', 'KATI', 'PRESI', 'goita@gmail.com', 'goita', 'admin', 2345678, 1),
(4, 'MARIKO', 'ISSA', 'SEVE', 'PRE', 'ma@gmail.com', 'azerty', 'Admin', 526372525, 1),
(5, 'MARIKO', 'ISSA', 'sebe', 'c', 'ma@gmail.com', '', 'membre', 52637252, 2),
(6, 'KASSOGUE', 'Napinrin', 'BACO DJIKORONI', 'CODEUR', 'membre@gmail.com', 'cool', 'membre', 77889944, 2),
(7, 'LY', 'Ali', 'ACI', 'ok', 'ali@gmail.com', 'ali', 'membre', 445566777, 2);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paiement` int(11) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `montant` int(11) NOT NULL,
  `date_paiement` date NOT NULL,
  `numero_compte` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id_paiement`, `mode`, `montant`, `date_paiement`, `numero_compte`, `id_membre`) VALUES
(1, 'Orange Money', 334455, '2022-06-14', 1223, 0),
(2, 'Moov Money', 44556, '2022-07-09', 11223, 0),
(3, 'Moov Money', 8765432, '2022-06-14', 1234567, 0),
(4, 'OM', 12345678, '2022-06-14', 1234567, 3),
(5, 'Moov Money', 23456, '0000-00-00', 3, 0),
(6, 'Moov Money', 789456, '2022-06-15', 55444, 0),
(7, 'Moov Money', 87777, '2022-06-15', 41444, 0),
(8, 'Orange Money', 4731, '2022-06-15', 21445, 0),
(9, 'Orange Money', 4731, '2022-06-15', 21445, 0),
(10, 'Moov Money', 45647, '2022-07-01', 354, 0),
(11, 'Moov Money', 45647, '2022-07-01', 354, 0),
(12, 'Moov Money', 1427854, '2022-06-08', 7894, 0),
(13, '', 0, '0000-00-00', 0, 0),
(14, '', 0, '0000-00-00', 0, 0),
(15, '', 0, '0000-00-00', 0, 0),
(16, '', 0, '0000-00-00', 0, 0),
(17, 'Moov Money', 147881, '2022-06-03', 7844, 0),
(18, '', 0, '0000-00-00', 0, 0),
(19, 'Moov Money', 14789, '2022-06-09', 478, 0),
(20, 'Moov Money', 12444, '2022-07-02', 47412, 0),
(21, 'Moov Money', 12444, '2022-07-02', 47412, 0),
(22, '', 0, '0000-00-00', 0, 0),
(23, '', 0, '0000-00-00', 0, 0),
(24, 'Orange Money', 14144, '2022-06-17', 4777, 0),
(25, 'Orange Money', 4566988, '2022-06-24', 74747, 0);

-- --------------------------------------------------------

--
-- Structure de la table `planification`
--

CREATE TABLE `planification` (
  `id_plani` int(11) NOT NULL,
  `date_plani` date NOT NULL,
  `heure` int(11) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `planification`
--

INSERT INTO `planification` (`id_plani`, `date_plani`, `heure`, `lien`) VALUES
(1, '2022-06-14', 21, 'ertyuikjhlfgh'),
(2, '2022-06-01', 22, 'azertyuio'),
(3, '2022-06-15', 13, 'ghjklm');

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

CREATE TABLE `tchat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `messag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tchat`
--

INSERT INTO `tchat` (`id`, `pseudo`, `messag`) VALUES
(1, 'MARIKO', 'Oui cv et toi?'),
(2, 'Adja', 'Bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `transfert`
--

CREATE TABLE `transfert` (
  `id_trans` int(11) NOT NULL,
  `mode_trans` varchar(50) NOT NULL,
  `montant_trans` int(11) NOT NULL,
  `date_trans` date NOT NULL,
  `id_compt` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transfert`
--

INSERT INTO `transfert` (`id_trans`, `mode_trans`, `montant_trans`, `date_trans`, `id_compt`, `id_membre`) VALUES
(1, 'OM', 100, '2022-06-14', 1, 3),
(2, 'Moov Money', 234512, '2022-06-14', 0, 0),
(3, 'Moov Money', 7844, '2022-06-15', 0, 0),
(4, '', 0, '0000-00-00', 0, 0),
(5, '', 0, '0000-00-00', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  ADD PRIMARY KEY (`id_benef`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compt`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD KEY `id_groupe` (`id_groupe`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paiement`),
  ADD KEY `id_membre` (`id_membre`) USING BTREE;

--
-- Index pour la table `planification`
--
ALTER TABLE `planification`
  ADD PRIMARY KEY (`id_plani`);

--
-- Index pour la table `tchat`
--
ALTER TABLE `tchat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transfert`
--
ALTER TABLE `transfert`
  ADD PRIMARY KEY (`id_trans`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `beneficiaire`
--
ALTER TABLE `beneficiaire`
  MODIFY `id_benef` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_paiement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `planification`
--
ALTER TABLE `planification`
  MODIFY `id_plani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tchat`
--
ALTER TABLE `tchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `transfert`
--
ALTER TABLE `transfert`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
