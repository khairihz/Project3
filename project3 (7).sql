-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 27 avr. 2018 à 09:04
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
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Report` tinyint(1) NOT NULL DEFAULT '0',
  `number_e` varchar(255) NOT NULL,
  `post_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `author`, `comment`, `comment_date`, `Report`, `number_e`, `post_fk`) VALUES
(46, 1, 'Khairi', 'Excellent Merci        ', '2018-04-27 07:57:30', 0, '', 0),
(47, 1, 'Christophe', 'Merci pour ce livre :D pour ce blog également .        ', '2018-04-27 07:58:08', 0, '', 0),
(48, 2, 'khairi', 'époustouflant !!!!        ', '2018-04-27 07:58:55', 0, '', 0),
(49, 2, 'jean', 'Nice man        ', '2018-04-27 07:59:03', 0, '', 0),
(50, 2, 'Doe', 'Thx , am learning french :D         ', '2018-04-27 07:59:19', 0, '', 0),
(51, 2, 'Troller', 'Zut... C&#39;est trop mauvais :/         ', '2018-04-27 08:03:59', 0, '', 0),
(52, 4, 'khairi', 'Merveilleux         ', '2018-04-27 08:00:06', 0, '', 0),
(53, 4, 'Christophe', 'Sympa        ', '2018-04-27 08:00:19', 0, '', 0),
(54, 4, 'Jhon', 'lol , pathétique .        ', '2018-04-27 08:00:36', 1, '', 0),
(55, 3, 'khairi', 'Excellent        ', '2018-04-27 08:00:53', 0, '', 0),
(56, 3, 'Christophe ', 'merci beaucoup        ', '2018-04-27 08:01:02', 0, '', 0),
(57, 5, 'Khairi', 'j&#39;ai hâte de lire votre prochain chapitre         ', '2018-04-27 08:01:46', 0, '', 0),
(58, 5, 'Christophe', 'Merci pour cette aventure        ', '2018-04-27 08:01:56', 0, '', 0),
(59, 5, 'jean', 'Excellent :D        ', '2018-04-27 08:02:18', 0, '', 0),
(60, 5, 'karim', 'ce n&#39;est pas comme d&#39;habitude        ', '2018-04-27 08:02:35', 0, '', 0),
(61, 5, 'Deadpool', 'Je dis des gros mots ***** ***** *** *** lol *** **** ***        ', '2018-04-27 08:03:32', 1, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `number_e` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `number_e`) VALUES
(1, 10, 'Le commencement', '&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra aliquam nunc ac tempus. Cras tincidunt volutpat convallis. Praesent eget risus facilisis, auctor libero nec, sollicitudin sapien. Sed eget malesuada velit. Integer pulvinar fermentum dolor, et ullamcorper elit varius sed. Etiam in metus in nulla fringilla aliquam. Integer et scelerisque leo, quis ullamcorper elit. Aenean condimentum risus vel eros cursus consequat. Nulla neque nisl, finibus eget commodo eget, hendrerit vitae tellus.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Cras et sapien vel erat hendrerit tempor. Nullam pulvinar orci finibus ligula congue, quis fringilla justo faucibus. Phasellus ultricies nunc eu leo eleifend bibendum non sed felis. Praesent commodo lorem vitae laoreet dictum. Integer ac dolor at tortor convallis varius. Nunc sagittis neque nisl, in tempus dolor pharetra at. Integer et purus facilisis, molestie dolor ac, ultrices neque. Pellentesque hendrerit tellus at lectus vehicula, at hendrerit massa ullamcorper. Praesent diam enim, molestie id posuere eget, tristique ut purus. Aenean eu odio commodo, aliquet lacus quis, iaculis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc metus. Mauris a libero eget tortor dignissim laoreet. Sed ex lectus, pellentesque sed sem sit amet, varius porta magna.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Pellentesque venenatis commodo tincidunt. Aenean massa nibh, fringilla sit amet lorem nec, fermentum hendrerit erat. Vivamus dui tortor, aliquet at massa ac, elementum tincidunt elit. Nullam fringilla suscipit pellentesque. Integer eget ullamcorper ligula. Nulla facilisi. Maecenas sit amet aliquam nisi, imperdiet sodales turpis. Curabitur volutpat tempus lectus vitae lacinia. Sed ut est ut tellus feugiat imperdiet. Maecenas feugiat, mauris ut eleifend dignissim, nulla nisl varius nibh, in euismod ex sapien eu est. Donec tortor arcu, laoreet eu lobortis bibendum, auctor vel arcu. Integer tempus nunc iaculis faucibus volutpat.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Proin tincidunt diam sed elit blandit, consectetur bibendum urna interdum. Vivamus ac odio tellus. Donec maximus dui non diam eleifend ornare. Proin molestie nunc dictum, rutrum erat at, accumsan augue. Sed auctor enim vel dui egestas condimentum. Nam sit amet cursus massa. Ut lobortis pulvinar ornare. Praesent mattis efficitur vehicula. Vivamus commodo justo quis enim tristique tempor. Etiam eget rhoncus metus. Proin tempus vestibulum est id rhoncus. Suspendisse accumsan ut quam vitae venenatis. Quisque a mollis enim. In sollicitudin nulla eu ligula sagittis scelerisque.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Suspendisse euismod nulla non placerat iaculis. Cras accumsan in dolor vitae pretium. Sed sit amet velit lobortis, efficitur libero at, vehicula nisi. Etiam in rutrum neque. Etiam vitae eros vitae diam sollicitudin auctor nec id nulla. Phasellus efficitur nisl et lectus pellentesque euismod. Maecenas tincidunt dolor at odio ullamcorper aliquet. Cras maximus accumsan mauris, vel viverra dolor. Morbi facilisis diam non nisl gravida, sed mattis dolor feugiat. Etiam ut blandit odio, ac finibus turpis. Proin non tellus lorem. Aenean ac odio at libero varius euismod at eget metus. Sed ut orci luctus, mollis nisl quis, facilisis erat. Vestibulum venenatis mattis placerat. Suspendisse porta ante et ipsum interdum, quis viverra tortor mollis. Nulla magna dolor, egestas dictum molestie at, faucibus ut nisi.&#60;/p&#62;', '2018-04-27 07:55:18', '1'),
(2, 10, 'La bête d&#39;alaska', '&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra aliquam nunc ac tempus. Cras tincidunt volutpat convallis. Praesent eget risus facilisis, auctor libero nec, sollicitudin sapien. Sed eget malesuada velit. Integer pulvinar fermentum dolor, et ullamcorper elit varius sed. Etiam in metus in nulla fringilla aliquam. Integer et scelerisque leo, quis ullamcorper elit. Aenean condimentum risus vel eros cursus consequat. Nulla neque nisl, finibus eget commodo eget, hendrerit vitae tellus.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Cras et sapien vel erat hendrerit tempor. Nullam pulvinar orci finibus ligula congue, quis fringilla justo faucibus. Phasellus ultricies nunc eu leo eleifend bibendum non sed felis. Praesent commodo lorem vitae laoreet dictum. Integer ac dolor at tortor convallis varius. Nunc sagittis neque nisl, in tempus dolor pharetra at. Integer et purus facilisis, molestie dolor ac, ultrices neque. Pellentesque hendrerit tellus at lectus vehicula, at hendrerit massa ullamcorper. Praesent diam enim, molestie id posuere eget, tristique ut purus. Aenean eu odio commodo, aliquet lacus quis, iaculis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc metus. Mauris a libero eget tortor dignissim laoreet. Sed ex lectus, pellentesque sed sem sit amet, varius porta magna.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Pellentesque venenatis commodo tincidunt. Aenean massa nibh, fringilla sit amet lorem nec, fermentum hendrerit erat. Vivamus dui tortor, aliquet at massa ac, elementum tincidunt elit. Nullam fringilla suscipit pellentesque. Integer eget ullamcorper ligula. Nulla facilisi. Maecenas sit amet aliquam nisi, imperdiet sodales turpis. Curabitur volutpat tempus lectus vitae lacinia. Sed ut est ut tellus feugiat imperdiet. Maecenas feugiat, mauris ut eleifend dignissim, nulla nisl varius nibh, in euismod ex sapien eu est. Donec tortor arcu, laoreet eu lobortis bibendum, auctor vel arcu. Integer tempus nunc iaculis faucibus volutpat.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Proin tincidunt diam sed elit blandit, consectetur bibendum urna interdum. Vivamus ac odio tellus. Donec maximus dui non diam eleifend ornare. Proin molestie nunc dictum, rutrum erat at, accumsan augue. Sed auctor enim vel dui egestas condimentum. Nam sit amet cursus massa. Ut lobortis pulvinar ornare. Praesent mattis efficitur vehicula. Vivamus commodo justo quis enim tristique tempor. Etiam eget rhoncus metus. Proin tempus vestibulum est id rhoncus. Suspendisse accumsan ut quam vitae venenatis. Quisque a mollis enim. In sollicitudin nulla eu ligula sagittis scelerisque.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Suspendisse euismod nulla non placerat iaculis. Cras accumsan in dolor vitae pretium. Sed sit amet velit lobortis, efficitur libero at, vehicula nisi. Etiam in rutrum neque. Etiam vitae eros vitae diam sollicitudin auctor nec id nulla. Phasellus efficitur nisl et lectus pellentesque euismod. Maecenas tincidunt dolor at odio ullamcorper aliquet. Cras maximus accumsan mauris, vel viverra dolor. Morbi facilisis diam non nisl gravida, sed mattis dolor feugiat. Etiam ut blandit odio, ac finibus turpis. Proin non tellus lorem. Aenean ac odio at libero varius euismod at eget metus. Sed ut orci luctus, mollis nisl quis, facilisis erat. Vestibulum venenatis mattis placerat. Suspendisse porta ante et ipsum interdum, quis viverra tortor mollis. Nulla magna dolor, egestas dictum molestie at, faucibus ut nisi.&#60;/p&#62;', '2018-04-27 07:55:48', '2'),
(3, 10, 'Rencontre avec une peluche blanche', '&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra aliquam nunc ac tempus. Cras tincidunt volutpat convallis. Praesent eget risus facilisis, auctor libero nec, sollicitudin sapien. Sed eget malesuada velit. Integer pulvinar fermentum dolor, et ullamcorper elit varius sed. Etiam in metus in nulla fringilla aliquam. Integer et scelerisque leo, quis ullamcorper elit. Aenean condimentum risus vel eros cursus consequat. Nulla neque nisl, finibus eget commodo eget, hendrerit vitae tellus.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Cras et sapien vel erat hendrerit tempor. Nullam pulvinar orci finibus ligula congue, quis fringilla justo faucibus. Phasellus ultricies nunc eu leo eleifend bibendum non sed felis. Praesent commodo lorem vitae laoreet dictum. Integer ac dolor at tortor convallis varius. Nunc sagittis neque nisl, in tempus dolor pharetra at. Integer et purus facilisis, molestie dolor ac, ultrices neque. Pellentesque hendrerit tellus at lectus vehicula, at hendrerit massa ullamcorper. Praesent diam enim, molestie id posuere eget, tristique ut purus. Aenean eu odio commodo, aliquet lacus quis, iaculis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc metus. Mauris a libero eget tortor dignissim laoreet. Sed ex lectus, pellentesque sed sem sit amet, varius porta magna.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Pellentesque venenatis commodo tincidunt. Aenean massa nibh, fringilla sit amet lorem nec, fermentum hendrerit erat. Vivamus dui tortor, aliquet at massa ac, elementum tincidunt elit. Nullam fringilla suscipit pellentesque. Integer eget ullamcorper ligula. Nulla facilisi. Maecenas sit amet aliquam nisi, imperdiet sodales turpis. Curabitur volutpat tempus lectus vitae lacinia. Sed ut est ut tellus feugiat imperdiet. Maecenas feugiat, mauris ut eleifend dignissim, nulla nisl varius nibh, in euismod ex sapien eu est. Donec tortor arcu, laoreet eu lobortis bibendum, auctor vel arcu. Integer tempus nunc iaculis faucibus volutpat.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Proin tincidunt diam sed elit blandit, consectetur bibendum urna interdum. Vivamus ac odio tellus. Donec maximus dui non diam eleifend ornare. Proin molestie nunc dictum, rutrum erat at, accumsan augue. Sed auctor enim vel dui egestas condimentum. Nam sit amet cursus massa. Ut lobortis pulvinar ornare. Praesent mattis efficitur vehicula. Vivamus commodo justo quis enim tristique tempor. Etiam eget rhoncus metus. Proin tempus vestibulum est id rhoncus. Suspendisse accumsan ut quam vitae venenatis. Quisque a mollis enim. In sollicitudin nulla eu ligula sagittis scelerisque.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Suspendisse euismod nulla non placerat iaculis. Cras accumsan in dolor vitae pretium. Sed sit amet velit lobortis, efficitur libero at, vehicula nisi. Etiam in rutrum neque. Etiam vitae eros vitae diam sollicitudin auctor nec id nulla. Phasellus efficitur nisl et lectus pellentesque euismod. Maecenas tincidunt dolor at odio ullamcorper aliquet. Cras maximus accumsan mauris, vel viverra dolor. Morbi facilisis diam non nisl gravida, sed mattis dolor feugiat. Etiam ut blandit odio, ac finibus turpis. Proin non tellus lorem. Aenean ac odio at libero varius euismod at eget metus. Sed ut orci luctus, mollis nisl quis, facilisis erat. Vestibulum venenatis mattis placerat. Suspendisse porta ante et ipsum interdum, quis viverra tortor mollis. Nulla magna dolor, egestas dictum molestie at, faucibus ut nisi.&#60;/p&#62;', '2018-04-27 07:56:09', '3'),
(4, 10, 'Mon enfance', '&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra aliquam nunc ac tempus. Cras tincidunt volutpat convallis. Praesent eget risus facilisis, auctor libero nec, sollicitudin sapien. Sed eget malesuada velit. Integer pulvinar fermentum dolor, et ullamcorper elit varius sed. Etiam in metus in nulla fringilla aliquam. Integer et scelerisque leo, quis ullamcorper elit. Aenean condimentum risus vel eros cursus consequat. Nulla neque nisl, finibus eget commodo eget, hendrerit vitae tellus.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Cras et sapien vel erat hendrerit tempor. Nullam pulvinar orci finibus ligula congue, quis fringilla justo faucibus. Phasellus ultricies nunc eu leo eleifend bibendum non sed felis. Praesent commodo lorem vitae laoreet dictum. Integer ac dolor at tortor convallis varius. Nunc sagittis neque nisl, in tempus dolor pharetra at. Integer et purus facilisis, molestie dolor ac, ultrices neque. Pellentesque hendrerit tellus at lectus vehicula, at hendrerit massa ullamcorper. Praesent diam enim, molestie id posuere eget, tristique ut purus. Aenean eu odio commodo, aliquet lacus quis, iaculis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc metus. Mauris a libero eget tortor dignissim laoreet. Sed ex lectus, pellentesque sed sem sit amet, varius porta magna.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Pellentesque venenatis commodo tincidunt. Aenean massa nibh, fringilla sit amet lorem nec, fermentum hendrerit erat. Vivamus dui tortor, aliquet at massa ac, elementum tincidunt elit. Nullam fringilla suscipit pellentesque. Integer eget ullamcorper ligula. Nulla facilisi. Maecenas sit amet aliquam nisi, imperdiet sodales turpis. Curabitur volutpat tempus lectus vitae lacinia. Sed ut est ut tellus feugiat imperdiet. Maecenas feugiat, mauris ut eleifend dignissim, nulla nisl varius nibh, in euismod ex sapien eu est. Donec tortor arcu, laoreet eu lobortis bibendum, auctor vel arcu. Integer tempus nunc iaculis faucibus volutpat.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Proin tincidunt diam sed elit blandit, consectetur bibendum urna interdum. Vivamus ac odio tellus. Donec maximus dui non diam eleifend ornare. Proin molestie nunc dictum, rutrum erat at, accumsan augue. Sed auctor enim vel dui egestas condimentum. Nam sit amet cursus massa. Ut lobortis pulvinar ornare. Praesent mattis efficitur vehicula. Vivamus commodo justo quis enim tristique tempor. Etiam eget rhoncus metus. Proin tempus vestibulum est id rhoncus. Suspendisse accumsan ut quam vitae venenatis. Quisque a mollis enim. In sollicitudin nulla eu ligula sagittis scelerisque.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Suspendisse euismod nulla non placerat iaculis. Cras accumsan in dolor vitae pretium. Sed sit amet velit lobortis, efficitur libero at, vehicula nisi. Etiam in rutrum neque. Etiam vitae eros vitae diam sollicitudin auctor nec id nulla. Phasellus efficitur nisl et lectus pellentesque euismod. Maecenas tincidunt dolor at odio ullamcorper aliquet. Cras maximus accumsan mauris, vel viverra dolor. Morbi facilisis diam non nisl gravida, sed mattis dolor feugiat. Etiam ut blandit odio, ac finibus turpis. Proin non tellus lorem. Aenean ac odio at libero varius euismod at eget metus. Sed ut orci luctus, mollis nisl quis, facilisis erat. Vestibulum venenatis mattis placerat. Suspendisse porta ante et ipsum interdum, quis viverra tortor mollis. Nulla magna dolor, egestas dictum molestie at, faucibus ut nisi.&#60;/p&#62;', '2018-04-27 07:56:21', '4'),
(5, 10, 'fraîcheur d&#39;antan', '&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra aliquam nunc ac tempus. Cras tincidunt volutpat convallis. Praesent eget risus facilisis, auctor libero nec, sollicitudin sapien. Sed eget malesuada velit. Integer pulvinar fermentum dolor, et ullamcorper elit varius sed. Etiam in metus in nulla fringilla aliquam. Integer et scelerisque leo, quis ullamcorper elit. Aenean condimentum risus vel eros cursus consequat. Nulla neque nisl, finibus eget commodo eget, hendrerit vitae tellus.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Cras et sapien vel erat hendrerit tempor. Nullam pulvinar orci finibus ligula congue, quis fringilla justo faucibus. Phasellus ultricies nunc eu leo eleifend bibendum non sed felis. Praesent commodo lorem vitae laoreet dictum. Integer ac dolor at tortor convallis varius. Nunc sagittis neque nisl, in tempus dolor pharetra at. Integer et purus facilisis, molestie dolor ac, ultrices neque. Pellentesque hendrerit tellus at lectus vehicula, at hendrerit massa ullamcorper. Praesent diam enim, molestie id posuere eget, tristique ut purus. Aenean eu odio commodo, aliquet lacus quis, iaculis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac nunc metus. Mauris a libero eget tortor dignissim laoreet. Sed ex lectus, pellentesque sed sem sit amet, varius porta magna.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Pellentesque venenatis commodo tincidunt. Aenean massa nibh, fringilla sit amet lorem nec, fermentum hendrerit erat. Vivamus dui tortor, aliquet at massa ac, elementum tincidunt elit. Nullam fringilla suscipit pellentesque. Integer eget ullamcorper ligula. Nulla facilisi. Maecenas sit amet aliquam nisi, imperdiet sodales turpis. Curabitur volutpat tempus lectus vitae lacinia. Sed ut est ut tellus feugiat imperdiet. Maecenas feugiat, mauris ut eleifend dignissim, nulla nisl varius nibh, in euismod ex sapien eu est. Donec tortor arcu, laoreet eu lobortis bibendum, auctor vel arcu. Integer tempus nunc iaculis faucibus volutpat.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;Proin tincidunt diam sed elit blandit, consectetur bibendum urna interdum. Vivamus ac odio tellus. Donec maximus dui non diam eleifend ornare. Proin molestie nunc dictum, rutrum erat at, accumsan augue. Sed auctor enim vel dui egestas condimentum. Nam sit amet cursus massa. Ut lobortis pulvinar ornare. Praesent mattis efficitur vehicula. Vivamus commodo justo quis enim tristique tempor. Etiam eget rhoncus metus. Proin tempus vestibulum est id rhoncus. Suspendisse accumsan ut quam vitae venenatis. Quisque a mollis enim. In sollicitudin nulla eu ligula sagittis scelerisque.&#60;/p&#62;&#13;&#10;&#60;p style=&#34;margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#39;Open Sans&#39;, Arial, sans-serif;&#34;&#62;&#60;span style=&#34;text-decoration: line-through;&#34;&#62;Suspendisse euismod nulla non placerat iaculis. Cras accumsan in dolor vitae pretium. Sed sit amet velit lobortis, efficitur libero at, vehicula nisi. Etiam in rutrum neque. Etiam vitae eros vitae diam sollicitudin auctor nec id nulla. Phasellus efficitur nisl et lectus pellentesque euismod. Maecenas tincidunt dolor at odio ullamcorper aliquet. Cras maximus accumsan mauris, vel viverra dolor. Morbi facilisis diam non nisl gravida, sed mattis dolor feugiat. Etiam ut blandit odio, ac finibus turpis. Proin non tellus lorem. Aenean ac odio at libero varius euismod at eget metus. Sed ut orci luctus, mollis nisl quis, facilisis erat. Vestibulum venenatis mattis placerat. Suspendisse porta&#60;/span&#62; ante et ipsum interdum, quis viverra tortor mollis. Nulla magna dolor, egestas dictum molestie at, faucibus ut nisi.&#60;/p&#62;', '2018-04-27 07:57:01', '5');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
