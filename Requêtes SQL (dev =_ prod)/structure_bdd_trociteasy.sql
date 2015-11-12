-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 12 Novembre 2015 à 20:10
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
-- Structure de la table `Note`
--

CREATE TABLE `Note` (
  `idNote` smallint(5) unsigned NOT NULL COMMENT 'ID de la note',
  `idUtilisateur` smallint(5) unsigned NOT NULL COMMENT 'ID de l''utilisateur publiant la note',
  `idProduitService` smallint(5) unsigned NOT NULL COMMENT 'ID du produit/service noté',
  `note` enum('1','2','3','4','5') NOT NULL COMMENT 'note'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idCommentaire` smallint(5) unsigned NOT NULL COMMENT 'ID du commentaire',
  `idUtilisateur` smallint(5) unsigned NOT NULL COMMENT 'ID de l''utilisateur qui publie le commentaire',
  `idProduitService` smallint(5) unsigned NOT NULL COMMENT 'ID du produit/service',
  `commentaire` text NOT NULL COMMENT 'Texte du commentaire'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit_service`
--

CREATE TABLE `produit_service` (
  `idProduitService` smallint(5) unsigned NOT NULL COMMENT 'ID du Produit/Service',
  `nom` varchar(100) NOT NULL COMMENT 'Nom',
  `description` text NOT NULL COMMENT 'Description',
  `type` enum('SERVICE','PRODUIT') NOT NULL COMMENT 'Type (Produit ou Service)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `idTag` smallint(5) unsigned NOT NULL COMMENT 'ID du tag',
  `nom` varchar(20) NOT NULL COMMENT 'Nom du tag'
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
  `registrationDate` datetime NOT NULL COMMENT 'Date d''inscription',
  `lastLoginDate` datetime NOT NULL COMMENT 'Date de dernière connexion',
  `groupe` enum('UTILISATEUR','ADMINISTRATEUR','WEBMASTER') NOT NULL COMMENT 'Groupe d''utilisateurs',
  `adresseIp` varchar(30) NOT NULL COMMENT 'Adresse IP de dernière connexion'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`idNote`,`idUtilisateur`,`idProduitService`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idCommentaire`,`idUtilisateur`,`idProduitService`);

--
-- Index pour la table `produit_service`
--
ALTER TABLE `produit_service`
  ADD PRIMARY KEY (`idProduitService`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`idTag`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Note`
--
ALTER TABLE `Note`
  MODIFY `idNote` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID de la note';
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idCommentaire` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID du commentaire';
--
-- AUTO_INCREMENT pour la table `produit_service`
--
ALTER TABLE `produit_service`
  MODIFY `idProduitService` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID du Produit/Service';
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `idTag` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID du tag';
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID de l''utilisateur';