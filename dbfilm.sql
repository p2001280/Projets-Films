-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 déc. 2021 à 22:07
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbfilm`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id`, `nom`, `prenom`) VALUES
(13, 'Smith', 'Will'),
(14, 'Elba', 'Idriss'),
(15, 'Pitt', 'Brad'),
(16, 'Ward', 'Michael'),
(20, 'Hanks', 'Tom'),
(21, 'Depp', 'Johnny'),
(26, 'Rufin', 'Amouzou'),
(28, 'Maisie', 'Williams'),
(29, 'Maisie', 'Williams'),
(30, 'Miley', 'Cyrus');

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

CREATE TABLE `casting` (
  `film_id` int(11) NOT NULL,
  `acteur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `casting`
--

INSERT INTO `casting` (`film_id`, `acteur_id`) VALUES
(11, 13),
(13, 14),
(1623, 14),
(12, 15),
(30, 21),
(9, 26);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `annee` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `nbVotants` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `nom`, `annee`, `score`, `nbVotants`, `image`) VALUES
(1, 'Star Wars', 1977, 9, 14182, '../upload/61bf636cb67f08.56736559.png'),
(2, 'Pulp Fiction', 1994, 8, 11693, '../upload/61bf638fad9638.81909594.jpg'),
(3, 'Blade Runner', 1982, 9, 8665, '../upload/61bf9277147416.31355245.png'),
(4, 'Titanic', 1997, 9, 8129, '../upload/61bf63c83ec620.71256498.jpeg'),
(5, 'Braveheart', 1995, 8, 8074, '../upload/61bf922db21d05.95634560.jpg'),
(6, 'Empire Strikes Back, The', 1980, 9, 8050, ''),
(7, 'Shawshank Redemption, The', 1994, 9, 7850, ''),
(8, 'Independence Day', 1996, 7, 7138, ''),
(9, 'Usual Suspects, The', 1995, 9, 6981, ''),
(10, 'Raiders of the Lost Ark', 1981, 8, 6488, ''),
(11, 'A Space Odyssey', 1968, 8, 6413, ''),
(12, 'Forrest Gump', 1994, 8, 6269, ''),
(13, 'Aliens', 1986, 8, 5811, '../upload/61bf63ad573e33.14487647.png'),
(14, 'Silence of the Lambs, The', 1991, 8, 5715, ''),
(15, 'Princess Bride, The', 1987, 8, 5522, ''),
(16, 'Terminator 2: Judgment Day', 1991, 8, 5513, '../upload/61bf9347cc4100.82540360.jpg'),
(17, 'Casablanca', 1942, 9, 5489, ''),
(18, 'Monty Python and the Holy Grail', 1974, 8, 5319, ''),
(19, 'Star Trek: First Contact', 1996, 8, 5298, ''),
(20, 'Fargo', 1996, 8, 5293, ''),
(21, 'Twelve Monkeys', 1995, 8, 5287, ''),
(22, 'Trainspotting', 1996, 8, 5233, ''),
(23, 'Godfather, The', 1972, 9, 5211, ''),
(24, 'Se7en', 1995, 8, 5107, ''),
(25, 'Back to the Future', 1985, 8, 5103, '../upload/61bf909e9dbe75.53014170.jpg'),
(26, 'Rock, The', 1996, 8, 4938, ''),
(27, 'Reservoir Dogs', 1992, 8, 4861, ''),
(28, 'Apocalypse Now', 1979, 8, 4860, ''),
(30, 'Apollo 13', 1995, 8, 4778, ''),
(31, 'Clockwork Orange, A', 1971, 8, 4767, ''),
(32, 'Jurassic Park', 1993, 7, 4707, '../upload/61bf2d3454df82.13161474.jpg'),
(33, 'English Patient, The', 1996, 8, 4689, ''),
(34, 'One Flew Over the Cuckoo\'s Nest', 1975, 9, 4545, ''),
(39, 'Terminator, The', 1984, 8, 4225, ''),
(48, 'True Lies', 1994, 7, 3601, ''),
(94, 'Total Recall', 1990, 7, 2305, ''),
(180, 'Predator', 1987, 7, 1604, ''),
(263, 'Conan the Barbarian', 1981, 7, 1271, ''),
(321, 'Twins', 1988, 6, 1126, ''),
(334, 'Last Action Hero', 1993, 6, 1107, ''),
(410, 'Dave', 1993, 7, 962, ''),
(440, 'Kindergarten Cop', 1990, 6, 894, ''),
(471, 'Running Man, The', 1987, 6, 856, ''),
(629, 'Commando', 1985, 6, 673, '../upload/61bf93b411ca28.54783726.jpg'),
(746, 'Conan the Destroyer', 1984, 5, 542, ''),
(932, 'Red Heat', 1988, 6, 402, ''),
(960, 'Terminator 2: 3-D', 1996, 9, 384, ''),
(1106, 'Junior', 1994, 6, 329, ''),
(1339, 'Jingle All the Way', 1996, 6, 262, ''),
(1551, 'Raw Deal', 1986, 5, 215, ''),
(1622, 'Batman and Robin', 1997, 4, 1925, ''),
(1623, 'Avengers Endgame', 2020, 10, 68817, ''),
(1624, 'Her', 2014, 10, 12789, ''),
(1625, 'Spiderman 2', 2004, 8, 12345, ''),
(1626, 'Spiderman 2', 2004, 8, 12345, ''),
(1627, 'Spider-man, no way home', 2022, 9, 12000, '../upload/61bf92b2cc4e90.53907241.jpg'),
(1628, 'The batman', 2022, 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(120) NOT NULL,
  `pwd` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `email`) VALUES
(1, 'Utilisateur1', 'mdp1', 'utilisateur1@gmail.com'),
(3, 'Utilisateur3', 'mdp3', 'utilisateur3@gmail.com'),
(4, 'Utilisateur4', 'mdp4', 'utilisateur4@gmail.com'),
(5, 'Utilisateur5', 'mdp5', 'utilisateur5@gmail.com'),
(7, 'lala', 'xoxo', 'al@gmail.com'),
(8, 'lala', 'xoxo', 'al@gmail.com'),
(10, 'dldld', 'dlldld', 'dl@hotmail.fr'),
(13, 'Floflo75', 'mdpfloflo', 'florentiondupont@gmail.com'),
(21, 'logindelao', 'mdpdelao', 'laochang@gmail.com'),
(23, 'Clara', 'mdpClara', 'clara@gmail.com'),
(30, 'Tidjane', 'tidjane1234', 'tidjane69120@gmail.com'),
(31, 'ruf69', 'pd', 'ruf@gmail.com'),
(32, 'DarkAlexis69', 'mdp', 'alexis@gmail.com'),
(34, 'log12', 'mdp', 'alalal@gmail.com'),
(35, 'log12', 'mdp', 'alalal@gmail.com'),
(36, 'rufinlog', 'XXXXXXXXX', 'rufi@gmail.com'),
(37, 'r', 'r', 'r'),
(38, 'lalala', 'lalal', 'ruf'),
(41, 'Utilisateur1', 'dddddd', 'rufinamouzou@hotmail.fr'),
(42, 'Utilisateur1', 'dddddd', 'rufinamouzou@gmail.com'),
(43, 'Utilisateur1', 'dddddd', 'rufinamouzou@gmail.com'),
(44, 'Utilisateur1', 'dddddd', 'rufinamouzou@gmail.com'),
(45, 'Utilisateur1', 'dddddd', 'rufinamouzou@gmail.com'),
(46, 'Utilisateur1', 'dddddd', 'rufinamouzou@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `casting`
--
ALTER TABLE `casting`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `etrangere_acteurs` (`acteur_id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1629;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `etrangere_acteur` FOREIGN KEY (`acteur_id`) REFERENCES `acteur` (`id`),
  ADD CONSTRAINT `etrangere_film` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
