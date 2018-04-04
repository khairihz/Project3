-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 04 avr. 2018 à 03:55
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `project3`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `Report` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `author`, `comment`, `comment_date`, `Report`) VALUES
(1, 3, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53', 1),
(2, 3, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16', 1),
(3, 2, 'MultiKiller', '+1 !', '2010-03-25 17:12:52', 1),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49', 1),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tot qu\'on ne le pense !', '2010-03-27 22:02:13', 1),
(6, 3, 'khairi', 'il va rien conquérir du tout ! Reactjs en marche', '2018-03-10 03:35:28', 0),
(7, 3, 'khairi', 'lol', '2018-03-10 03:35:46', 1),
(8, 2, 'anis', 'Vuejs c\'est le meilleur back end de la terre \r\nen ce moment !!!!!! les gens ne sont pas au courant encore', '2018-03-10 03:36:16', 0),
(9, 2, 'khairi', 'oui oui c\'est ça ', '2018-03-10 03:36:29', 1),
(10, 2, 'khairi', 'Excellent', '2018-03-10 03:36:43', 0),
(11, 2, 'khaireddine', 'Hello world !', '2018-03-10 06:12:21', 0),
(12, 2, 'Christophe', 'Nice man', '2018-03-10 06:13:22', 0),
(13, 2, 'khaiirhz', 'salut', '0000-00-00 00:00:00', 0),
(14, 2, 'Mysticmind', 'Je teste la table ', '2018-04-02 00:00:00', 1),
(15, 2, 'hello', 'hello        ', '0000-00-00 00:00:00', 0),
(16, 2, 'Dreamprint', 'i hope this solution will work !!!!!!!!!!!!!!!! PLEAAAAAAAAAAAAASE Apache catch the data PLEASSSSSSSE :&#39;((((((((((', '0000-00-00 00:00:00', 0),
(17, 3, 'last test', 'last test        ', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `number_e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `number_e`) VALUES
(2, 10, 'Une aventure qui commence', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at dui vel quam rhoncus hendrerit. Duis odio velit, lacinia a vehicula non, interdum convallis massa. Mauris elementum magna ex, et ornare justo lacinia a. Duis ut nisl vitae elit ullamcorper malesuada in ac neque. Aenean eget ex vel ligula congue fermentum non ac lacus. Curabitur vehicula eros at velit tristique venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer lobortis dui sed vehicula tincidunt. Sed fermentum magna dui, quis auctor orci sodales at. Quisque bibendum velit vitae lorem ultricies maximus.\r\n\r\nVestibulum porttitor, turpis eget lobortis ultrices, tortor nisi luctus justo, ac ornare magna augue non justo. Maecenas ultricies lacus maximus ipsum finibus molestie. Nunc laoreet augue nulla, ut accumsan ipsum aliquet a. Maecenas nec lacus quis sapien vulputate pharetra. Maecenas pellentesque nec dolor quis porta. Proin in nulla vitae sem consequat consectetur sed eget arcu. Ut malesuada, felis eget venenatis convallis, tortor urna euismod eros, eu finibus ligula diam nec metus. Proin quis condimentum nulla. Donec id turpis dui. Etiam maximus neque velit, vel mattis arcu accumsan vel. Integer rhoncus sapien metus, sed pellentesque eros ultricies non.\r\n\r\nFusce vel orci ipsum. Mauris luctus ornare magna, at tincidunt est pretium et. Fusce tempor condimentum semper. Quisque ac dictum mauris, in mollis tellus. Aliquam erat volutpat. Suspendisse gravida sagittis neque, ut scelerisque dolor vestibulum eget. Fusce in enim metus. Sed faucibus felis dolor, id posuere dolor vehicula nec. Maecenas consequat diam vel justo tristique tempus. Etiam volutpat pellentesque ipsum at rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec dictum justo sit amet leo luctus vulputate.\r\n\r\nNulla sapien erat, efficitur a hendrerit sit amet, elementum non velit. Phasellus ullamcorper, nunc sit amet tempor bibendum, velit tellus eleifend nibh, sed aliquam justo nisl in ligula. Aenean non risus augue. Nulla pellentesque nisi vel accumsan eleifend. Sed mattis ullamcorper elit, a faucibus enim varius rutrum. Suspendisse auctor ligula at lacus ornare, sed maximus metus elementum. Morbi ornare leo risus, in semper orci placerat fringilla.\r\n\r\nMaecenas a orci eget neque accumsan lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi cursus pretium metus non accumsan. In vel odio urna. Proin erat diam, molestie eget tincidunt eleifend, dapibus quis justo. Nam commodo vestibulum lorem vel commodo. Aenean rhoncus viverra diam, scelerisque rhoncus quam gravida ac. Nullam vulputate odio vitae est consequat, ut vestibulum arcu fermentum. Phasellus sit amet congue eros. Vivamus maximus nisi non arcu efficitur, in lacinia turpis consectetur. Proin lacinia sapien et turpis elementum, et rutrum est laoreet. Ut commodo orci id risus luctus bibendum.', '2018-03-28 17:00:29', 2),
(3, 10, 'Une vue magnifique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at dui vel quam rhoncus hendrerit. Duis odio velit, lacinia a vehicula non, interdum convallis massa. Mauris elementum magna ex, et ornare justo lacinia a. Duis ut nisl vitae elit ullamcorper malesuada in ac neque. Aenean eget ex vel ligula congue fermentum non ac lacus. Curabitur vehicula eros at velit tristique venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer lobortis dui sed vehicula tincidunt. Sed fermentum magna dui, quis auctor orci sodales at. Quisque bibendum velit vitae lorem ultricies maximus.\r\n\r\nVestibulum porttitor, turpis eget lobortis ultrices, tortor nisi luctus justo, ac ornare magna augue non justo. Maecenas ultricies lacus maximus ipsum finibus molestie. Nunc laoreet augue nulla, ut accumsan ipsum aliquet a. Maecenas nec lacus quis sapien vulputate pharetra. Maecenas pellentesque nec dolor quis porta. Proin in nulla vitae sem consequat consectetur sed eget arcu. Ut malesuada, felis eget venenatis convallis, tortor urna euismod eros, eu finibus ligula diam nec metus. Proin quis condimentum nulla. Donec id turpis dui. Etiam maximus neque velit, vel mattis arcu accumsan vel. Integer rhoncus sapien metus, sed pellentesque eros ultricies non.\r\n\r\nFusce vel orci ipsum. Mauris luctus ornare magna, at tincidunt est pretium et. Fusce tempor condimentum semper. Quisque ac dictum mauris, in mollis tellus. Aliquam erat volutpat. Suspendisse gravida sagittis neque, ut scelerisque dolor vestibulum eget. Fusce in enim metus. Sed faucibus felis dolor, id posuere dolor vehicula nec. Maecenas consequat diam vel justo tristique tempus. Etiam volutpat pellentesque ipsum at rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec dictum justo sit amet leo luctus vulputate.\r\n\r\nNulla sapien erat, efficitur a hendrerit sit amet, elementum non velit. Phasellus ullamcorper, nunc sit amet tempor bibendum, velit tellus eleifend nibh, sed aliquam justo nisl in ligula. Aenean non risus augue. Nulla pellentesque nisi vel accumsan eleifend. Sed mattis ullamcorper elit, a faucibus enim varius rutrum. Suspendisse auctor ligula at lacus ornare, sed maximus metus elementum. Morbi ornare leo risus, in semper orci placerat fringilla.\r\n\r\nMaecenas a orci eget neque accumsan lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi cursus pretium metus non accumsan. In vel odio urna. Proin erat diam, molestie eget tincidunt eleifend, dapibus quis justo. Nam commodo vestibulum lorem vel commodo. Aenean rhoncus viverra diam, scelerisque rhoncus quam gravida ac. Nullam vulputate odio vitae est consequat, ut vestibulum arcu fermentum. Phasellus sit amet congue eros. Vivamus maximus nisi non arcu efficitur, in lacinia turpis consectetur. Proin lacinia sapien et turpis elementum, et rutrum est laoreet. Ut commodo orci id risus luctus bibendum.', '2018-03-28 17:13:44', 3),
(4, 10, 'Hello', 'Salut', '2018-04-03 14:56:17', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(10, 'Jean Forteroche', 'jeanforteroche@gmail.com', '$2y$10$XN0AY3jVtDBBVberRXQiy.Kuc5FH7aUoie84BiMOGoznyB9IHD42S', '2018-02-11 10:03:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
