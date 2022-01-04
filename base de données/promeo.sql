-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 04 jan. 2022 à 15:46
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `promeo`
--

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id` int(11) NOT NULL,
  `tache` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `tache`) VALUES
(1, 'teste ajouter'),
(2, 'finir le dm demain'),
(3, 'tache a venie'),
(4, 'enfin sa marche'),
(12, 'sa marche');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `token`) VALUES
(1, 'kyliann', 'kyliann693@gmail.com', '$2y$12$YKowWilTTEA4s63NRqZAaepYD751Hm/Ijo.j/DhrxWrqbHyRbiaDq', '::1', 'ce984e656ec30da2ccfb99ea6c47e3cdfd21eab002e886d5b2cdd53efcfb84eda1c54580eeca0686f7038fbe780d6114969718205bd053e3b6584c4125745899'),
(2, 'teste', 'teste@gmail.com', '$2y$12$Cl0UvT1T.QBsmo4vq1xAkONivo/.tdaWAw.0JrsGyGoc7pVw/o4L6', '::1', 'a2f1400cd1a9cf73eb79f1ae2a23f52e4434be2528cc823bba2dfcb8b466599651ce57749c206339868cad18abf4cf740521bfdc183d3d3e6c2723eda4c3505c'),
(3, 'testetet', 'teste12@gmail.com', '$2y$12$.sICL2ti3PQBcXndTR4cteLWURvSKiTbL8UMADsolHQC1w9pdmtfW', '::1', 'ca6cccc079f1e1b9b718bd5bb5717920463ac588cfdbb91e600844dc1968effd175a0eaf125e3d93d65d503238f341b3c2594700560b55764d6cab733239cc64'),
(4, 'killian', 'killian@gmail.com', '$2y$12$OCVoDHaTXYjbfS4odlaAaOPHNuam7qs78MShENevJeBZ8jtsDCbhS', '::1', 'cc0b2d9e177b499b66e8ded41bc38e32ccad3f7f7ddeb10604578b5c38634c5cc7357ab5b67fc3bec7ef8247a890ae14a80e0554d912b6b9cc6bd0c04df7a2f4'),
(5, 'max', 'max@gmail.com', '$2y$12$GUTlStsYzUr4LCAEqqQFYeVF7KbjuVbCSmu4m99sd1JS5AycOx8na', '::1', 'd640c6afc77a6f04a19bb04389872555f4d128d4c153097cc821534e1bed6b35727e857baeafd241194852d6688aac8166b4a48bbce84b1218eede3899d88ed7');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
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
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
