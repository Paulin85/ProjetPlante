-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 21 mai 2019 à 17:20
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetplante`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id_capteur` int(11) NOT NULL,
  `temperature_capteur` float NOT NULL,
  `humidite_capteur` float NOT NULL,
  `luminosite_capteur` float NOT NULL,
  `Temps_capteur` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `temperature_capteur`, `humidite_capteur`, `luminosite_capteur`, `Temps_capteur`) VALUES
(1, 17, 50, 50, '00:00:00.000000'),
(3, 17, 65, 54, '00:00:00.000000'),
(4, 17, 65, 54, '00:00:00.000000'),
(5, 15, 43, 67, '11:11:11.000000'),
(6, 15, 43, 67, '11:11:11.000000'),
(7, 25, 23, 78, '22:22:22.000000');

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

CREATE TABLE `plante` (
  `id` int(11) NOT NULL,
  `nom` text,
  `categorie` text,
  `description` varchar(500) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `humidite` float DEFAULT NULL,
  `temperature` float DEFAULT NULL,
  `luminosite` float DEFAULT NULL,
  `floraison` varchar(28) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`id`, `nom`, `categorie`, `description`, `photo`, `humidite`, `temperature`, `luminosite`, `floraison`) VALUES
(1, 'Oeillet', 'Plante Ornementale / Caryophyllacées', ' 20 à 80 cm\r\n variété importante de couleurs et de formes', 'https://www.google.com/search?q=oeillet&rlz=1C1CHB', 50, -10, 50, 'Mai à septembre'),
(2, 'Capucines', 'Tropaeolacées', ' plante grimpante annuelle\r\n vertus médicinales dans de très nombreux \r\n traitements homéopathiques\r\n fleurs vivement colorées : jaune, orange et rouge\r\n Luttent contre les pucerons', 'https://www.google.com/search?q=capucines&rlz=1C1C', 50, 15, 50, 'Juin à Septembre'),
(3, 'Jonquilles', 'Amarylidacées', 'C\'est une plante vivace, herbacée, bulbeuse de 0,20 à 0,40 m de hauteur.', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, -10, 50, 'Février à Mai'),
(4, 'Roses trémière', 'Malvacées', ' feuilles sont plus ou moins arrondies\r\n 1,50 m de haut\r\n fleurs de couleurs rosées', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, -10, 50, 'Juin à septembre'),
(5, 'Pétunia Mexicain', 'Acanthacées', ' violette, rose, blanche\r\n plante ornementale, parfois envahissante\r\n', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, -5, 50, 'Juillet à septembre'),
(6, 'Iris', 'Iridaceae', ' nuances de bleu et de violet, blanc, rouge, jaune\r\n résistant aux maladies et aux insectes', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 5, 50, 'Mai à juillet'),
(7, 'Géranium', 'Geraniaceae', ' Plantes de 10 à 40 cm\r\n Fleurs de couleurs rose\r\n Fleurs à 5 - 6pétales', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 10, 50, 'Avril et octobre / Mai- Août'),
(8, 'Muguet', 'Liliaceae', ' fleurs sont toutes disposées en grappe \r\n    (20 clochettes maximum par brin)\r\n tige de 15 à 25 cm\r\n fleurs blanche\r\n', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 5, 50, 'Avril à mai'),
(9, 'Tulipe', 'Liliaceae', ' Feuilles assez peu nombreuses\r\n Fleurs bicolore, jaune, rouge', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 10, 50, 'Avril'),
(10, 'Rhododendron', 'Ericaceae', ' 80cm à 10m (selon les espèces)\r\n Fleurs blanches, jaunes, mauves, \r\noranges, roses ou rouge.', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 10, 50, 'Avril à mai'),
(11, 'Camélia', 'Theaceae', ' Jusqu\'à 3 m\r\n Fleurs blanches, rouges, roses', 'https://www.google.com/search?q=cam%C3%A9lia&rlz=1', 50, 10, 50, 'Mars à mai'),
(12, 'Cyclamen', 'Primulaceae', ' 5 à 25 cm\r\n Fleurs blanches, violettes, rouges, roses', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 16, 50, 'Automne'),
(13, 'Jacinthe', 'Hyacinthaceae', ' 20 à 30 cm\r\n Fleur blanche, bleu, jaune, rose, rouge, violet', 'https://www.google.com/search?q=jacinthe&rlz=1C1CH', 50, 10, 50, 'Avril à juin'),
(14, 'Hortensia', 'Hydrangeaceae', ' Plante de 1 à 2 mètres de hauteur\r\n Les fleurs fertiles sont situés au centre \r\net celle stériles sur la périphéries', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 5, 50, 'Juin - Octobre'),
(15, 'Clématite', 'Renonculacées', ' Plante de 2 à 10 mètres\r\n Feuilles vertes à saveur herbacées\r\n Fleurs blanches', 'https://www.google.com/search?q=cl%C3%A9matite&rlz', 50, 5, 50, 'Mars à Octobre'),
(16, 'Lila', 'Oléacées', ' Plante de 2 à 5mètres\r\n Feuilles ovales\r\n Fleurs violette ou roses avec de l\'odeur', 'https://www.google.com/search?rlz=1C1CHBD_frFR820F', 50, 5, 50, 'Avril à Juin'),
(17, 'Pensée sauvage', 'Violaceae', ' Plante de 30 cm \r\n Aussi nomée violette des champs\r\n', 'https://www.google.com/search?q=pens%C3%A9e+sauvag', 50, 5, 50, 'Mars à Juillet');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` text NOT NULL,
  `prenom_utilisateur` text NOT NULL,
  `email_utilisateur` varchar(30) NOT NULL,
  `mdp_utilisateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Index pour la table `plante`
--
ALTER TABLE `plante`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `plante`
--
ALTER TABLE `plante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
