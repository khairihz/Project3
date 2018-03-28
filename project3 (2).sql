-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 28 mars 2018 à 08:54
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
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `Report` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `Report`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53', 0),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16', 0),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52', 0),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49', 0),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13', 0),
(6, 19, 'khairi', 'il va rien conquérir du tout ! Reactjs en marche', '2018-03-10 03:35:28', 0),
(7, 19, 'khairi', 'lol', '2018-03-10 03:35:46', 0),
(8, 2, 'anis', 'Vuejs c\'est le meilleur back end de la terre \r\nen ce moment !!!!!! les gens ne sont pas au courant encore', '2018-03-10 03:36:16', 0),
(9, 2, 'khairi', 'oui oui c\'est ça ', '2018-03-10 03:36:29', 0),
(10, 2, 'khairi', 'j\'ai l\'impression de perdre mn temps avec du php\r\n', '2018-03-10 03:36:43', 0),
(11, 1, 'khaireddine', 'Hello world !', '2018-03-10 06:12:21', 0),
(12, 1, 'kh', 'hhqsqD', '2018-03-10 06:13:22', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(1, 10, 'Salut les zozors', 'Le&nbsp;Lorem Ipsum&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', '2018-03-26 03:49:11'),
(19, 10, 'Pourquoi l&#39;utiliser?', 'D&#39;o&ugrave; vient-il?\r\n\r\nContrairement &agrave; une opinion r&eacute;pandue, le Lorem Ipsum n&#39;est pas simplement du texte al&eacute;atoire. Il trouve ses racines dans une oeuvre de la litt&eacute;rature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s&#39;est int&eacute;ress&eacute; &agrave; un des mots latins les plus obscurs, consectetur, extrait d&#39;un passage du Lorem Ipsum, et en &eacute;tudiant tous les usages de ce mot dans la litt&eacute;rature classique, d&eacute;couvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du &quot;De Finibus Bonorum et Malorum&quot; (Des Supr&ecirc;mes Biens et des Supr&ecirc;mes Maux) de Cic&eacute;ron. Cet ouvrage, tr&egrave;s populaire pendant la Renaissance, est un trait&eacute; sur la th&eacute;orie de l&#39;&eacute;thique. Les premi&egrave;res lignes du Lorem Ipsum, &quot;Lorem ipsum dolor sit amet...&quot;, proviennent de la section 1.10.32.\r\n\r\nL&#39;extrait standard de Lorem Ipsum utilis&eacute; depuis le XVI&egrave; si&egrave;cle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du &quot;De Finibus Bonorum et Malorum&quot; de Cic&eacute;ron sont aussi reproduites dans leur version originale, accompagn&eacute;e de la traduction anglaise de H. Rackham (1914).', '2018-03-27 03:27:00');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
