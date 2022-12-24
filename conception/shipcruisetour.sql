-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 24 déc. 2022 à 14:57
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shipcruisetour`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_ch` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_t` int(11) DEFAULT NULL,
  `id_navire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_ch`, `prix`, `id_t`, `id_navire`) VALUES
(1, 500, 3, 7),
(2, 300, 2, 1),
(11, 333, 3, 7);

-- --------------------------------------------------------

--
-- Structure de la table `croisiere`
--

CREATE TABLE `croisiere` (
  `id_croisiere` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `id_navire` int(11) NOT NULL,
  `prix` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `nbr_nuit` int(11) DEFAULT NULL,
  `port_depart` int(11) DEFAULT NULL,
  `date_depart` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `croisiere`
--

INSERT INTO `croisiere` (`id_croisiere`, `nom`, `id_navire`, `prix`, `image`, `nbr_nuit`, `port_depart`, `date_depart`) VALUES
(4, 'bahamas', 7, 444, 'exemple2.jpg', 1, 28, '2022-12-22'),
(5, 'bahamas', 1, 32, 'exemple3.jpg', 3, 28, '2022-12-22'),
(6, 'hatim', 1, 2, 'cruise.png', 1, 28, '2022-12-23'),
(12, 'hatim', 1, 222222, 'cruise.png', 1, 29, '2022-12-24'),
(13, 'hatim', 1, 222222, 'cruise.png', 1, 29, '2022-12-24');

-- --------------------------------------------------------

--
-- Structure de la table `navire`
--

CREATE TABLE `navire` (
  `id_n` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `nbr_ch` int(11) DEFAULT NULL,
  `nbr_place` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `navire`
--

INSERT INTO `navire` (`id_n`, `nom`, `nbr_ch`, `nbr_place`) VALUES
(1, 'navire 1', 50, 1000),
(7, 'navire 4', 333, 6543);

-- --------------------------------------------------------

--
-- Structure de la table `port`
--

CREATE TABLE `port` (
  `id_p` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `pays` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `port`
--

INSERT INTO `port` (`id_p`, `nom`, `pays`) VALUES
(28, 'casa', 'maroc'),
(29, 'bahamas', 'maroc'),
(30, 'tanger', 'maroc'),
(31, 'barcelone', 'spain');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reserv` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_croisiere` int(11) DEFAULT NULL,
  `date_reserv` date DEFAULT NULL,
  `prix_reserv` double DEFAULT NULL,
  `id_chambre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `id_croisiere` int(11) NOT NULL,
  `id_port` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`id_croisiere`, `id_port`) VALUES
(13, 28),
(13, 30);

-- --------------------------------------------------------

--
-- Structure de la table `type_chambre`
--

CREATE TABLE `type_chambre` (
  `id_t` int(11) NOT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_chambre`
--

INSERT INTO `type_chambre` (`id_t`, `type`) VALUES
(1, '1 personne'),
(2, '2 personne'),
(3, '3 personne'),
(4, '+3 personne');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `pass` varchar(225) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `nom`, `prenom`, `email`, `pass`, `role`) VALUES
(8, 'oussama', 'ouallaf', 'oussama@gmail.com', '$2y$10$yhpbdhgS2hmQ3DGaldk0Wu/XREft2h9wpBynYllhzGoSx/CW6LYXK', 1),
(12, 'oussama', 'gg', 'yc@gmail.com', '$2y$10$yhpbdhgS2hmQ3DGaldk0Wu/XREft2h9wpBynYllhzGoSx/CW6LYXK', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_ch`),
  ADD KEY `chambre_ibfk_1` (`id_t`),
  ADD KEY `fk_navire` (`id_navire`);

--
-- Index pour la table `croisiere`
--
ALTER TABLE `croisiere`
  ADD PRIMARY KEY (`id_croisiere`),
  ADD KEY `port_depart` (`port_depart`),
  ADD KEY `croisiere_ibfk_2` (`id_navire`);

--
-- Index pour la table `navire`
--
ALTER TABLE `navire`
  ADD PRIMARY KEY (`id_n`);

--
-- Index pour la table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reserv`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_croisiere` (`id_croisiere`),
  ADD KEY `id_chambre` (`id_chambre`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id_croisiere`,`id_port`),
  ADD KEY `fk_port` (`id_port`);

--
-- Index pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  ADD PRIMARY KEY (`id_t`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_ch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `croisiere`
--
ALTER TABLE `croisiere`
  MODIFY `id_croisiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `navire`
--
ALTER TABLE `navire`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `port`
--
ALTER TABLE `port`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reserv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_t`) REFERENCES `type_chambre` (`id_t`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_navire` FOREIGN KEY (`id_navire`) REFERENCES `navire` (`id_n`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `croisiere`
--
ALTER TABLE `croisiere`
  ADD CONSTRAINT `croisiere_ibfk_1` FOREIGN KEY (`port_depart`) REFERENCES `port` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `croisiere_ibfk_2` FOREIGN KEY (`id_navire`) REFERENCES `navire` (`id_n`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `user` (`id_u`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_croisiere`) REFERENCES `croisiere` (`id_croisiere`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id_ch`);

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `fk_croisiere` FOREIGN KEY (`id_croisiere`) REFERENCES `croisiere` (`id_croisiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_port` FOREIGN KEY (`id_port`) REFERENCES `port` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
