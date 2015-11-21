-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 19 Novembre 2015 à 14:06
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `trocItEasy`
--
CREATE DATABASE IF NOT EXISTS `trocItEasy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trocItEasy`;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` smallint(6) unsigned NOT NULL,
  `idCategorie` smallint(6) unsigned NOT NULL,
  `idUtilisateur` smallint(6) unsigned NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` enum('BIEN','SERVICE') NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` smallint(6) unsigned NOT NULL,
  `idTagCategorie` smallint(6) unsigned NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` smallint(6) unsigned NOT NULL,
  `idNote` smallint(6) unsigned NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` smallint(6) unsigned NOT NULL,
  `idAnnonce` smallint(6) unsigned NOT NULL,
  `note` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tagCategorie`
--

CREATE TABLE `tagCategorie` (
  `id` smallint(6) unsigned NOT NULL,
  `nom` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tagNote`
--

CREATE TABLE `tagNote` (
  `id` smallint(6) unsigned NOT NULL,
  `idNote` smallint(6) unsigned NOT NULL,
  `nom` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` smallint(5) unsigned NOT NULL COMMENT 'ID de l''utilisateur',
  `nom` varchar(30) NOT NULL COMMENT 'Nom',
  `prenom` varchar(30) NOT NULL COMMENT 'Prénom',
  `adresseEmail` varchar(60) NOT NULL COMMENT 'Adresse email de connexion',
  `motDePasse` varchar(40) NOT NULL COMMENT 'Mot de passe',
  `credit` int(10) NOT NULL,
  `registrationDate` datetime NOT NULL COMMENT 'Date d''inscription',
  `lastLoginDate` datetime NOT NULL COMMENT 'Date de dernière connexion',
  `groupe` enum('UTILISATEUR','ADMINISTRATEUR','WEBMASTER','VISITEUR') NOT NULL COMMENT 'Groupe d''utilisateurs',
  `lastLoginIp` varchar(30) NOT NULL COMMENT 'Adresse IP de dernière connexion',
  `tokenId` varchar(90) NOT NULL COMMENT 'Identifiant unique de l''utilisateur',
  `statutCompte` enum('ACTIF','INACTIF') NOT NULL COMMENT 'Statut du compte actif/inactif'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `adresseEmail`, `motDePasse`, `credit`, `registrationDate`, `lastLoginDate`, `groupe`, `lastLoginIp`, `tokenId`, `statutCompte`) VALUES
(1, '', '', 'VISITEUR', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'VISITEUR', '', '', 'INACTIF'),
(7, 'PAMART', 'Nicolas', 'pamart.nicolas@free.fr', '$2y$10$/q60I6LXd1nY.GEprJ4e3uMXwAhAN0JyW', 100, '2015-11-19 12:54:38', '0000-00-00 00:00:00', 'UTILISATEUR', '::1', 'e1d31e4f869e58ea63b92ecd10d85cb4', 'INACTIF');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUtilisateur` (`idUtilisateur`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTagCategorie` (`idTagCategorie`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNote` (`idNote`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAnnonce` (`idAnnonce`);

--
-- Index pour la table `tagCategorie`
--
ALTER TABLE `tagCategorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tagNote`
--
ALTER TABLE `tagNote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNote` (`idNote`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tagCategorie`
--
ALTER TABLE `tagCategorie`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tagNote`
--
ALTER TABLE `tagNote`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID de l''utilisateur',AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `fk_id_categorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_utilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_id_tag_categorie` FOREIGN KEY (`idTagCategorie`) REFERENCES `tagCategorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_id_note` FOREIGN KEY (`idNote`) REFERENCES `note` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_id_annonce` FOREIGN KEY (`idAnnonce`) REFERENCES `annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
