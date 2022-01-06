-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 06 jan. 2022 à 21:26
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
-- Base de données : `filrouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `actors`
--

CREATE TABLE `actors` (
  `id_actor` int(11) NOT NULL,
  `image_actor` varchar(150) NOT NULL,
  `name_actor` varchar(55) NOT NULL,
  `name_actor_perso` varchar(50) NOT NULL,
  `description_actor` text NOT NULL,
  `rating_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actors`
--

INSERT INTO `actors` (`id_actor`, `image_actor`, `name_actor`, `name_actor_perso`, `description_actor`, `rating_actor`) VALUES
(1, '/img/avatar-ragnar.jpg', 'Travis Fimmel', 'Ragnar Lodbrok', 'Ragnar Lothbrok est un personnage principal dans la première, deuxième, troisième et quatrième saison de Vikings. Il est interprété par Travis Fimmel et fait ses débuts dans l\'épisode \"Cap à l\'Ouest\". Il est un puissant guerrier Viking qui croit qu\'il est destiné à la grandeur. ', 9),
(2, '/img/avatar_lagertha.jpg', 'Katheryn Winnick', 'Lagertha', 'Lagertha est un personnage principal dans la première, deuxième, troisième, quatrième et cinquième saisons de Vikings. Elle est interprétée par Katheryn Winnick et fait ses débuts dans l\'épisode \"Cap à l\'Ouest\". Lagertha est une Skjaldmö, elle est également Jarl de Hedeby et anciennement Reine de Kattegat', 5),
(5, '/img/avatar_bjorn.png', 'Alexander Ludwig', 'Bjorn', 'Björn Côtes-de-Fer est un personnage principal dans la première, deuxième, troisième et quatrième, cinquième et sixième saison de Vikings. Il est interprété par Alexander Ludwig dans la deuxième, troisième, quatrième, cinquième et sixième saison et par Nathan O\'Toole.', 1),
(6, '/img/avatar-ivar.jpg', 'Alex Høgh Andersen', 'Ivar', 'Ivar le Désossé est un personnage principal dans la deuxième, troisième et quatrième saisons de Vikings. Depuis la quatrième saison il est interprété par Alex Høgh Andersen. Ivar fait ses débuts dans l\'épisode \"Le Désossé\". ', 2);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 3, 'Victor', 'dshouihgdsohgsdo', '2022-01-05 05:16:14');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  `picture_article` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`, `picture_article`) VALUES
(2, 'Test 01', 'Test 01 DESCRIPTION', '2022-01-05 05:06:41', '/img/wallpaper01.jpg'),
(3, 'TEST 02', 'TEST 02 DESCRIPTION', '2022-01-05 05:10:33', '/img/wallpaper01.jpg'),
(4, 'TEST 03', 'TEST 03 DESCRIPTION', '2022-01-05 05:10:33', '/img/wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `first_name_user` varchar(100) NOT NULL,
  `login_user` varchar(100) NOT NULL,
  `mdp_user` varchar(100) NOT NULL,
  `type_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `first_name_user`, `login_user`, `mdp_user`, `type_user`) VALUES
(19, 'Dias', 'Vitor', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id_actor`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actors`
--
ALTER TABLE `actors`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
