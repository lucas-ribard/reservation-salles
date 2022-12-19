-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 19 déc. 2022 à 14:35
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`) VALUES
(3, 'ddd', 'ddd', '2022-12-15 10:02:05', '2022-12-15 10:50:00', 1),
(4, 'RDV à la maison de mickey', 'on vas rendre visite a mickey', '2022-12-13 08:10:00', '2022-12-13 08:50:00', 1),
(5, 'Réunion', 'réunion avec la délégation martienne', '2022-12-16 16:32:00', '2022-12-16 16:50:00', 2),
(6, 'Rituel du mardi matin', 'Comme d\'habitude nous allons sacrifier u n nouveau née a notre grand dieux des ténèbres et de la souffrance\"ArIthmaTique\". C\'est au tour du groupe 5 d\'amener des bougie donc n’oublier pas s\'il vous plait ! <3\r\nJe vous rappelle que ceux qui seront absent seront obligé de faire des équations différentielles donc si vous tenait à la vie n’oublier pas de venir !', '2022-12-20 09:15:49', '2022-12-20 09:59:49', 2),
(8, 'le matin est une Torture', 'c\'est lundi matin', '2022-12-19 08:00:00', '2022-12-19 08:59:00', 2),
(9, 'ce soir c\'est le weekend', 'test pour un pb d\'heure de 8h a 9h', '2022-12-23 08:01:00', '2022-12-23 08:50:00', 1),
(10, 'PB heure sur lundi ? 11h à 12h', 'osecour', '2022-12-19 11:17:31', '2022-12-19 11:50:31', 1),
(11, 'PB résolut je suis trop fort', 'mon code est dégelasse mais il marche', '2022-12-19 12:29:19', '2022-12-19 12:30:19', 1),
(15, 'Laisser moi partir T-T', 'osecour', '2022-12-23 19:00:00', '2022-12-23 19:59:00', 2),
(17, 'amogus', 'ye', '2022-12-20 17:00:00', '2022-12-20 17:59:00', 2),
(18, 'amogus', 's', '2022-12-20 16:00:00', '2022-12-20 16:59:00', 2),
(19, 'amogus', 's', '2022-12-21 16:00:00', '2022-12-21 16:59:00', 2),
(20, 'amogus', 's', '2022-12-22 16:00:00', '2022-12-22 16:59:00', 2),
(21, 'amogus', 's', '2022-12-22 17:00:00', '2022-12-22 17:59:00', 2),
(22, 'amogus', 's', '2022-12-20 15:00:00', '2022-12-20 15:59:00', 2),
(23, 'amogus', 's', '2022-12-21 15:00:00', '2022-12-21 15:59:00', 2),
(24, 'amogus', 's', '2022-12-22 15:00:00', '2022-12-22 15:59:00', 2),
(25, 'amogus', 's', '2022-12-23 16:00:00', '2022-12-23 16:59:00', 2),
(26, 'amogus', 's', '2022-12-23 15:00:00', '2022-12-23 15:59:00', 2),
(27, 'amogus', 's', '2022-12-23 14:00:00', '2022-12-23 14:59:00', 2),
(28, 'amogus', 's', '2022-12-22 14:00:00', '2022-12-22 14:59:00', 2),
(29, 'amogus', 's', '2022-12-22 13:00:00', '2022-12-22 13:59:00', 2),
(30, 'amoguss', 's', '2022-12-21 13:00:00', '2022-12-21 13:59:00', 2),
(31, 'amogus', 's', '2022-12-20 13:00:00', '2022-12-20 13:59:00', 2),
(32, 'a&#039;p&#039;o&#039;s&#039;t&#039;r&#039;o&#039;p&#039;h&#039;e', '&#039;ah !&#039;\r\nDenis Brogniart - 2018', '2022-12-19 19:00:00', '2022-12-19 19:59:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'RIB', 'bob');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
