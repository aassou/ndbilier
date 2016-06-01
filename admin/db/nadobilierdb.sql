-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 01 Juin 2016 à 17:54
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `nadobilierdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_company`
--

CREATE TABLE IF NOT EXISTS `t_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `ceo` varchar(100) DEFAULT NULL,
  `adress` text,
  `birthDate` date DEFAULT NULL,
  `description` text,
  `telefon1` varchar(50) DEFAULT NULL,
  `telefon2` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `t_company`
--

INSERT INTO `t_company` (`id`, `name`, `ceo`, `adress`, `birthDate`, `description`, `telefon1`, `telefon2`, `email`, `logo`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 'Annahda Lil Iaamar', 'Rabie El Mahi', 'Quartier Ouled Brahim N°B-1 en face Lycée Nador Jadid (Anaanaa), Nador', '2010-01-01', 'Annahda Lil Iaamar est un groupe de promotion immobiliere, leader sur la ville de Nador et la région de l''Oriental.', '(00212) 05 36 33 10 31', '(00212) 05 36 33 10 32', 'groupe_annahda@gmail.com', 'img/companies/annahda-logo.jpg', '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(2, 'MerlaTrav', 'Yassine Charkaoui', 'Hay Al Matar En face de l''institution AR''RISSALA 2', '2010-01-01', 'MerlaTrav est une societe de construction et promotion immobiliere sur la ville de Nador.', '0536381458', '0661668860', 'merlatrav@gmail.com', 'img/companies/merlatrav-logo.jpg', '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(3, 'MarocPromo', 'Mustapha El Mouassaoui', 'Bd Amir Sidi Mohamed, N. 91-93, Nador - Maroc', '1991-01-01', 'MarocPromo est un promoteur immobiliere leader sur la marche de la construction et la promotion immobilière a Nador depuis plus de 25 ans.', '0661940038', '0536607245', 'contact@marocpromo.ma', 'img/companies/marocpromo-logo.jpg', '2016-05-21 00:00:00', 'ceonodom', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_project`
--

CREATE TABLE IF NOT EXISTS `t_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `nameArabic` varchar(255) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `adress` text,
  `size` decimal(12,2) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `description` text,
  `descriptionArabic` text,
  `status` varchar(50) DEFAULT NULL,
  `construction` int(12) DEFAULT NULL,
  `finition` int(12) DEFAULT NULL,
  `idCompany` int(12) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `t_project`
--

INSERT INTO `t_project` (`id`, `name`, `nameArabic`, `titre`, `adress`, `size`, `birthDate`, `description`, `descriptionArabic`, `status`, `construction`, `finition`, `idCompany`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 'Gaza', 'ØºØ²Ø©', '1231288/123123', 'Rue ONDA 12301239 Nador', '120.00', '2016-01-01', 'R&eacute;sidence Gaza est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 20, 5, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(2, 'Rafah', 'Ø±ÙØ­', '09000/123123', 'Rue Al Matar 901 Nador', '300.00', '2015-04-01', 'R&eacute;sidence Rafah est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 30, 25, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(3, 'Khattabi', 'Ø®Ø·Ø§Ø¨ÙŠ', 'AI991/BBCNC', 'Rue Nador Al Jadid 4801 Nador', '455.00', '2015-01-01', 'R&eacute;sidence Khattabi est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 50, 35, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(4, 'Kamar', 'Ù‚Ù…Ø±', 'OLDOL/2981', 'Rue ONDA 300 Nador', '700.00', '2014-10-01', 'R&eacute;sidence Kamar est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 60, 35, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(5, 'Ahlam', 'Ø±ÙŠÙ‡Ø§Ù…', 'POLS/123123', 'Rue Sélouane 9288 Nador', '330.00', '2014-01-01', 'R&eacute;sidence Ahlam est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 80, 65, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(6, 'Riham', 'Ø£Ø­Ù„Ø§Ù…', '1029/INKO12', 'Rue Al Matar 09100 Nador', '409.00', '2013-12-01', 'R&eacute;sidence Riham est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 80, 65, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(7, 'Sajed', 'Ø³Ø§Ø¬Ø¯', 'I8271/0909', 'Rue Salam 2900 Nador', '199.00', '2013-08-01', 'R&eacute;sidence Sajed est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 90, 75, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(8, 'Ghofran', 'ØºÙØ±Ø§Ù†', 'T9000/910', 'Rue 80 metres 2999 Nador', '744.00', '2012-08-01', 'R&eacute;sidence Ghofran est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 90, 85, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(9, 'Badr', 'Ø¨Ø¯Ø±', 'MQS/46771', 'Rue Nador Al Jadid 10992 Nador', '540.00', '2012-01-01', 'R&eacute;sidence Badr est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 100, 75, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(10, 'Al Aksa', 'Ø§Ù„Ø£Ù‚ØµÙ‰', '1AA288/123123', 'Rue Al Matar 4758 Nador', '249.00', '2011-08-01', 'R&eacute;sidence Al Aksa est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 100, 85, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(11, 'Annahda 11', 'Ø§Ù„Ù†Ù‡Ø¶Ø© 11', 'BVJK88/1PLOKQ', 'Rue Sahili 7002 Nador', '911.00', '2011-01-01', 'R&eacute;sidence Annahda 11 est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 100, 85, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(12, 'Annahda 12', 'Ø§Ù„Ù†Ù‡Ø¶Ø© 12', 'AKD981/09191', 'Rue Sahili 7001 Nador', '617.00', '2010-08-01', 'R&eacute;sidence Annahda 12 est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 100, 95, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(13, 'Annahda 13', 'Ø§Ù„Ù†Ù‡Ø¶Ø© 13', 'Q0DZE/101001', 'Rue ONDA 23912 Nador', '518.00', '2010-01-01', 'R&eacute;sidence Annahda 13 est un projet cr&eacute;&eacute; par le Groupe Annahda Lil Iaamar, afin  de r&eacute;pondre au besoins de ses clients dans la r&eacute;gion de Nador. ', NULL, '0', 100, 100, 1, '2016-05-18 00:00:00', 'ceonodom', NULL, NULL),
(14, 'Dawlize', 'Ø¯ÙˆÙ„ÙŠØ²', '-/-', 'Quartier Al-Matar - Nador', NULL, NULL, 'Luxueux projet des commerces aux rez de chauss&eacute;s et des appartements lumineux et spacieux aux &eacute;tages.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(15, 'Marchica', 'Ù…Ø§Ø±Ø´ÙŠÙƒØ§', '-/-', 'Corniche Marchica - Nador', NULL, NULL, 'Propri&eacute;t&eacute; Marchica est un programme r&eacute;sidentiel urbain de maisons &agrave; R+2 b&eacute;n&eacute;ficiant d''un emplacement du premier choix &agrave; Nador, &agrave; proximit&eacute; de la corniche &lt;\nMarchica&gt; et du quartier r&eacute;sidentiel &lt;Fatwaki&gt;', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(16, 'El Fid', 'Ø§Ù„ÙÙŠØ¶', '-/-', 'Quartiers habites et des equipements socio-economiques - Nador', NULL, NULL, 'R&eacute;sidence EL FID est un complexe immobilier situ&eacute au coeur de Nador, &agrave; proximit&eacute; des quartiers habit&eacute;s et des &eacute;quipements socio-&eacute;conomiques. Le projet R&eacute;sidence EL FID offre un large choix d''appartements &agrave; des prix tr&egrave;s attractifs.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(17, 'GHOFRANE', 'ØºÙØ±Ø§Ù†', '-/-', 'Quartier Al Matar - Nador', NULL, NULL, 'Projet luxueux avec un commerce au rez de chauss&eacute;s et un appartement lumineux et spacieux &agrave; l''&eacute;tage.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(18, 'Villa Lina', 'ÙÙŠÙ„Ø§ Ù„ÙŠÙ†Ø§', '-/-', 'Entre Quartiers Laarassi/Fetwaki - Nador', NULL, NULL, 'Situ&eacute; entre les quartiers Laarasi et Fatwaki, quatre merveilleuses villas hautes et moyen standing allant de 100 m2 &agrave; 220 m2.\nLe rez de chauss&eacute;e est compos&eacute; de deux salons/s&eacute;jour donnant sur le jardin et une grande cuisine avec balcon.\nL''&eacute;tage est sous forme de deux belles chambres, cuisine et salle de bain.\nLes villas vous offre un cadre de vie de grande qualit&eacute; en plein centre de Nador.\nLe prix est &agrave; partir de 1 600 000 DH.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(19, 'JAOUARA', 'Ø¬ÙˆÙ‡Ø±Ø©', '-/-', 'Jaadar - Nador', NULL, NULL, 'R&eacute;sidence JAOUARA offre un large choix d''habitat et commerces &eacute;tudi&eacute; pour votre bien &ecirc;tre et disposant de tous les &eacute;quipements pour faciliter le quotidien de ses habitants.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(20, 'EL KHEIR', 'Ø§Ù„Ø®ÙŠØ±', '-/-', 'Quartier Al Matar - Nador', NULL, NULL, 'Lancement de la commercialisation d''un luxueux projet d''appartements &agrave; des prix attractifs dans le quartier d''Al-Matar, au coeur de la nouvelle ville de NADOR.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(21, 'Al Baraka', 'Ø§Ù„Ø¨Ø±ÙƒØ©', '-/-', 'Quartier Al Matar - Nador', NULL, NULL, 'Lancement de la commercialisation d''un luxueux projet d''appartements &agrave; des prix attractifs dans le quartier d''Al-Matar, au coeur de la nouvelle ville de NADOR.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(22, 'Assouna', 'Ø§Ù„Ø³Ù†Ø©', '-/-', 'Quartier Al Matar - Nador', NULL, NULL, 'Ce programme immobilier neuf est situe dans le cœur de la nouvelle Ville de Nador (AL MATAR) , &agrave; deux pas de la Mosqu&eacute;e ASSOUNA.\nOffrant un grand choix d''appartements de 2 ou 3 pieces avec salon marocain, une cuisine, 2 ou 3 chambres, balcon, une salle de bains, interphone, loge de gardiens et Ascenseur.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(23, 'El Bostane', 'Ø§Ù„Ø¨Ø³ØªØ§Ù†', '-/-', 'Nador Al Jadid - Nador', NULL, NULL, 'Projet d''appartements luxueux &agrave; des prix attractifs situ&eacute; &agrave c&ocirc;te de Nador Aljadid.\nR&eacute;sidence El BOSTANE  offre un large choix d''habitat et de commerces &eacute;tudi&eacute; pour votre bien &ecirc;tre et disposant de tous les &eacute;quipements pour faciliter le quotidien de ses habitants.', NULL, '0', NULL, NULL, 3, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(24, 'Arrissala 1', 'Ø§Ù„Ø±Ø³Ø§Ù„Ø© 1', '-/-', 'Hay Al Matar - Nador', NULL, NULL, 'Le projet r&eacute;sidence ARRISSALA est un projet immobilier de vision d''avenir, qui tend &agrave; offrir un cadre de vie agr&eacute;able, qui va de pair avec les aspirations de nos concitoyens.\nEn esperant vous satisfaire bient&ocirc;t.', NULL, '0', NULL, NULL, 2, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(25, 'Arrissala 2', 'Ø§Ù„Ø±Ø³Ø§Ù„Ø© 2', '-/-', 'Hay Al Matar - Nador', NULL, NULL, 'Le projet r&eacute;sidence ARRISSALA 2 est un projet immobilier qui s''inscrit dans la continuit&eacute; du projet ARRISSALA 1.\nEn esperant vous satisfaire bient&ocirc;t.', NULL, '0', NULL, NULL, 2, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(26, 'Nassim 1', 'Ù†Ø³ÙŠÙ… 1', '-/-', 'Hay Al Matar - Nador', NULL, NULL, 'Le projet r&eacute;sidence NASSIM 1 est un projet immobilier,\nqui s''inscrit dans la continuit&eacute; de nos ambitions pr&eacute;c&eacute;dentes .\nEn esperant vous satisfaire bient&ocirc;t.', NULL, '0', NULL, NULL, 2, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(27, 'Nassim 2', 'Ù†Ø³ÙŠÙ… 2', '-/-', 'Hay Al Matar - Nador', NULL, NULL, 'Le projet r&eacute;sidence NASSIM 1 est un projet immobilier,\nqui s''inscrit dans la continuit&eacute; de nos ambitions pr&eacute;c&eacute;dentes .\nEn esperant vous satisfaire bient&ocirc;t.', NULL, '0', NULL, NULL, 2, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(28, 'Nissma', 'Ù†Ø³Ù…Ø©', '-/-', 'Hay Al Matar - Nador', NULL, NULL, 'Le projet r&eacute;sidence Nissma est un projet immobilier,\nqui s''inscrit dans la continuite de nos ambitions pr&eacute;c&eacute;dentes .\nEn esperant vous satisfaire bient&ocirc;t.', NULL, '0', NULL, NULL, 2, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(29, 'Almasjid Alkabir', 'Ø§Ù„Ù…Ø³Ø¬Ø¯ Ø§Ù„ÙƒØ¨ÙŠØ±', '-/-', 'Hay Al Matar - Nador', NULL, NULL, 'Le projet r&eacute;sidence Almasjid Alkabir est un projet immobilier,\nqui s''inscrit dans la continuit&eacute; de nos ambitions pr&eacute;c&eacute;dentes .\nEn esperant vous satisfaire bient&ocirc;t.', NULL, '0', NULL, NULL, 2, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL),
(30, 'Charkaoui', 'Ø§Ù„Ø´Ø±Ù‚Ø§ÙˆÙŠ', '-/-', 'Hay Al Matar - Nador', NULL, NULL, 'Le projet r&eacute;sidence Charkaoui est un projet immobilier,\nqui s''inscrit dans la continuit&eacute; de nos ambitions pr&eacute;c&eacute;dentes .\nEn esperant vous satisfaire bient&ocirc;t.', NULL, '0', NULL, NULL, 2, '2016-05-21 00:00:00', 'ceonodom', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_projectpicture`
--

CREATE TABLE IF NOT EXISTS `t_projectpicture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `idProject` int(12) DEFAULT NULL,
  `idCompany` int(12) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Contenu de la table `t_projectpicture`
--

INSERT INTO `t_projectpicture` (`id`, `name`, `url`, `description`, `idProject`, `idCompany`, `created`, `createdBy`, `updated`, `updatedBy`) VALUES
(1, 'Image 1', 'http://groupannahda.com/wp-content/uploads/2015/09/chop-13.jpg', NULL, 1, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(2, 'Image 2', 'http://groupannahda.com/wp-content/uploads/2015/06/chop-15572bc0402f81.jpg', NULL, 2, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(3, 'Image 3', 'http://groupannahda.com/wp-content/uploads/2014/05/chop-4-3-2.jpg', NULL, 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(4, 'Image 4', 'http://groupannahda.com/wp-content/uploads/2014/05/chop-12-1.jpg', NULL, 4, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(5, 'Image 5', 'http://groupannahda.com/wp-content/uploads/2015/09/chop-25.jpg', NULL, 5, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(6, 'Image 6', 'http://groupannahda.com/wp-content/uploads/2015/09/chop-41.jpg', NULL, 6, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(7, 'Image 7', 'http://groupannahda.com/wp-content/uploads/2014/05/IMG-20160329-WA0001-767x1024.jpg', NULL, 7, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(8, 'Image 8', 'http://groupannahda.com/wp-content/uploads/2015/01/chop-15.jpg', NULL, 8, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(9, 'Image 9', 'http://groupannahda.com/wp-content/uploads/2015/01/chop-9-1.jpg', NULL, 9, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(10, 'Image 10', 'http://groupannahda.com/wp-content/uploads/2015/03/chop-gho-12.jpg', NULL, 10, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(11, 'Image 11', 'http://groupannahda.com/wp-content/uploads/2015/03/chop-2-11-2.jpg', NULL, 11, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(12, 'Image 12', 'http://groupannahda.com/wp-content/uploads/2015/05/IMG-20160318-WA0031-1024x819.jpg', NULL, 12, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(13, 'Image 13', 'http://groupannahda.com/wp-content/uploads/2015/01/chop-9-1.jpg', NULL, 13, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(14, 'Image 1 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2014/07/001.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(16, 'Image 3 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2014/07/chop-1-3.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(17, 'Image 4 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2014/08/chop3.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(18, 'Image 5 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2015/02/chop-25.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(19, 'Image 6 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2014/05/chop-1-4.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(20, 'Image 7 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2014/05/chop-9-2.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(21, 'Image 8 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2014/05/chop-2-1.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(22, 'Image 9 Residence Rafah ', 'http://groupannahda.com/wp-content/uploads/2014/05/chop-19-768x1024.jpg', 'Image Residence Rafah', 3, 1, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(23, 'Image 19', 'http://groupannahda.com/wp-content/uploads/2014/08/chop3.jpg', 'Image 19 Residence Rafah', 3, 1, '2016-01-29 05:02:43', 'ceonodom', NULL, NULL),
(24, 'Image 1', 'http://groupannahda.com/wp-content/uploads/2014/08/chop-753e8cbadbf2f5.jpg', 'Image 1 Annahda 13', 13, 1, '2016-01-29 05:16:19', 'ceonodom', NULL, NULL),
(25, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/dawlize-1.jpg', NULL, 14, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(26, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/dawlize-2.jpg', NULL, 14, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(27, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/dawlize-3.jpg', NULL, 14, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(28, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/dawlize-4.jpg', NULL, 14, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(29, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/dawlize-5.jpg', NULL, 14, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(30, 'Image 6', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/dawlize-6.jpg', NULL, 14, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(31, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/114.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(32, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/4.1.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(33, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/4.2.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(34, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/4.3.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(35, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/81.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(36, 'Image 6', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/54.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(37, 'Image 7', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/64.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(38, 'Image 8', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/74.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(39, 'Image 9', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/9.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(40, 'Image 10', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/27.jpg', NULL, 15, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(41, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/1.png', NULL, 16, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(42, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/33.jpg', NULL, 16, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(43, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/4.png', NULL, 16, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(44, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/3.png', NULL, 16, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(45, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/5.png', NULL, 16, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(46, 'Image 6', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/2.png', NULL, 16, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(47, 'Image 7', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/09/6.jpg', NULL, 16, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(48, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/ghofrane_7.jpg', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(49, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/ghofrane_6.jpg', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(50, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/ghofrane_1.jpg', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(51, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/ghofrane_5.jpg', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(52, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/ghofrane_4.jpg', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(53, 'Image 6', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/ghofrane_2.jpg', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(54, 'Image 7', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/ghofrane_3.jpg', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(55, 'Image 8', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/10/slide2.png', NULL, 17, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(56, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/DSC_0340.jpg', NULL, 18, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(57, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/DSC_0339.jpg', NULL, 18, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(58, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/4.jpg', NULL, 18, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(59, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/2.jpg', NULL, 18, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(60, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/11.jpg', NULL, 18, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(61, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/etage.jpg', NULL, 19, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(62, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/Facade3.jpg', NULL, 19, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(63, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/Facade2.jpg', NULL, 19, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(64, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2015/05/1.-REZ-DE-CHAUSSEE-1024x512.jpg', NULL, 20, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(65, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2015/07/0.-situation.jpg', NULL, 20, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(66, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2015/07/0.-f1.jpg', NULL, 20, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(67, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/IMG_8314.jpg', NULL, 21, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(68, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/IMG_8297.jpg', NULL, 21, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(69, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/photo-3.jpg', NULL, 21, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(70, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/6-etages-1-2-3-41.jpg', NULL, 21, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(71, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/5-PLAN-DE-SITUATION1.jpg', NULL, 21, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(72, 'Image 6', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/1-facade11.jpg', NULL, 21, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(73, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/8.jpg', NULL, 22, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(74, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/7.jpg', NULL, 22, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(75, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/6.jpg', NULL, 22, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(76, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/41.jpg', NULL, 22, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(77, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/06/31.jpg', NULL, 22, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(78, 'Image 6', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/17.jpg', NULL, 22, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(79, 'Image 1', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/BSTNE_1.11.jpg', NULL, 23, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(80, 'Image 2', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/BSTNE_101.jpg', NULL, 23, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(81, 'Image 3', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/BSTNE_71.jpg', NULL, 23, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(82, 'Image 4', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/BSTNE_51.jpg', NULL, 23, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(83, 'Image 5', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/BSTNE_21.jpg', NULL, 23, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(84, 'Image 6', 'http://marocpromo.ma/accueil/wp-content/uploads/2014/07/BSTNE_12.jpg', NULL, 23, 3, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(85, 'Image 1', 'https://static.wixstatic.com/media/ca32d3_51cdec7070a04aa599b7aceb9fb5fe4b.jpg', NULL, 24, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(86, 'Image 2', 'https://static.wixstatic.com/media/ca32d3_965b91a823a84985826ed0e445f9f2fc.jpg', NULL, 24, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(87, 'Image 3', 'https://static.wixstatic.com/media/ca32d3_aa1a33bd9f1340378846518df54968fb.jpg', NULL, 24, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(88, 'Image 4', 'https://static.wixstatic.com/media/ca32d3_a678b3fc9f9c4cd0ad6194882998e0fb.jpg', NULL, 24, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(89, 'Image 5', 'https://static.wixstatic.com/media/ca32d3_86c60fd40bf747a98551c25fc9d8ec89.jpg', NULL, 24, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(90, 'Image 6', 'https://static.wixstatic.com/media/ca32d3_fb3f90208e06496e9fc2b0c5fdca3a68.jpg', NULL, 24, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(91, 'Image 1', 'https://static.wixstatic.com/media/ca32d3_0a05ca34f3654f208f1968d545c863f7.jpg', NULL, 25, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(92, 'Image 2', 'https://static.wixstatic.com/media/ca32d3_4d818cf14a0c43e6b37c8a1ff12160a1.jpg', NULL, 25, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(93, 'Image 3', 'https://static.wixstatic.com/media/ca32d3_d5691941119e4f1481c8a9c8d9bafc84.jpg', NULL, 25, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(94, 'Image 4', 'https://static.wixstatic.com/media/ca32d3_17aea00eee654e718fd424d95401d784.jpg', NULL, 25, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(95, 'Image 5', 'https://static.wixstatic.com/media/ca32d3_7a24f09a19a746cbbf428bc14c13d424.jpg', NULL, 25, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(96, 'Image 6', 'https://static.wixstatic.com/media/ca32d3_8c8611773571464caec052e522f2a3ba.jpg', NULL, 25, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(97, 'Image 1', 'https://static.wixstatic.com/media/ca32d3_0ee99e177b024042bf37598bd500eafb.jpg', NULL, 26, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(98, 'Image 2', 'https://static.wixstatic.com/media/ca32d3_7f4924fefccc4dcd9c2d8eb4f5d7847a.jpg', NULL, 26, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(99, 'Image 3', 'https://static.wixstatic.com/media/ca32d3_5f951b08689f4085b2dd7ba9c7bb6263.jpg', NULL, 26, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(100, 'Image 4', 'https://static.wixstatic.com/media/ca32d3_377c9250eb484f06b5b55122d8542891.jpg', NULL, 26, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(101, 'Image 5', 'https://static.wixstatic.com/media/ca32d3_5af84746e6c14decb89642de3dc7e4e9.jpg', NULL, 26, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(102, 'Image 6', 'https://static.wixstatic.com/media/ca32d3_6256193aa013408eb3185103cb639cd6.jpg', NULL, 26, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(103, 'Image 1', 'https://static.wixstatic.com/media/ca32d3_661da33e06fb48fdb86e6c3ee3d1547d.jpg', NULL, 27, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(104, 'Image 2', 'https://static.wixstatic.com/media/ca32d3_ea5f660eff0945b3939c15f975dd66ee.jpg', NULL, 27, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(105, 'Image 3', 'https://static.wixstatic.com/media/ca32d3_9b9c2629735d418593f7ddf122fe30e7.jpg', NULL, 27, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(106, 'Image 4', 'https://static.wixstatic.com/media/ca32d3_7af74c5c865a4ae2944f5947bdeff6c8.jpg', NULL, 27, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(107, 'Image 5', 'https://static.wixstatic.com/media/ca32d3_7deb2b7b699c4f919a6015f728c18698.jpg', NULL, 27, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(108, 'Image 6', 'https://static.wixstatic.com/media/ca32d3_b37fd1cba8f946a4aec25bd392a77665~mv1.jpg', NULL, 27, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(109, 'Image 1', 'https://static.wixstatic.com/media/ca32d3_a705a802532948009c3edb6d97257a29.jpg', NULL, 28, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(110, 'Image 2', 'https://static.wixstatic.com/media/ca32d3_0c41342e56924a4e86ea81181705bcc9.jpg', NULL, 28, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(111, 'Image 3', 'https://static.wixstatic.com/media/ca32d3_f4fa9f999f164062a7657e384b86c914.jpg', NULL, 28, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(112, 'Image 4', 'https://static.wixstatic.com/media/ca32d3_bea1f2ad954f484cb518e1c39552afda.jpg', NULL, 28, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(113, 'Image 5', 'https://static.wixstatic.com/media/ca32d3_6649eee1657e42f88d98f9b319af6d86.jpg', NULL, 28, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(114, 'Image 6', 'https://static.wixstatic.com/media/ca32d3_33f01bcc96be471a9a32fa78c52262ad.jpg', NULL, 28, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(115, 'Image 1', 'https://static.wixstatic.com/media/ca32d3_3e12018f4b2c4342aeb17310ae540d34.jpg', NULL, 29, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(116, 'Image 2', 'https://static.wixstatic.com/media/ca32d3_0c6dfac97f4a4c9aab44d7ff85210a34.jpg', NULL, 29, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(117, 'Image 3', 'https://static.wixstatic.com/media/ca32d3_cc4dd3303e964a73bd66379ea7ccebcc.jpg', NULL, 29, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(118, 'Image 4', 'https://static.wixstatic.com/media/ca32d3_488ae49acf5f477296fc44a9f401ff08.jpg', NULL, 29, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(119, 'Image 5', 'https://static.wixstatic.com/media/ca32d3_9f7c952cecfa4726bb21d7d6c151837c.jpg', NULL, 29, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(120, 'Image 6', 'https://static.wixstatic.com/media/ca32d3_004b6929311944a7aee214701defaa7a.jpg', NULL, 29, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(121, 'Image 1', 'https://static.wixstatic.com/media/ca32d3_f762f74119a74345a241874388a9bc62.jpg', NULL, 30, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(122, 'Image 2', 'https://static.wixstatic.com/media/ca32d3_146fe5c5c7fd44bc8cd596850dfdaf77.jpg', NULL, 30, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(123, 'Image 3', 'https://static.wixstatic.com/media/ca32d3_166acb26c9604a79ad85608e6e1522eb.jpg', NULL, 30, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(124, 'Image 4', 'https://static.wixstatic.com/media/ca32d3_f95fd8c835124319838bd09d86715e95.jpg', NULL, 30, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(125, 'Image 5', 'https://static.wixstatic.com/media/ca32d3_fad4fdc77b6d4e5db24ce3c58a201847.jpg', NULL, 30, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL),
(126, 'Image 6', 'https://static.wixstatic.com/media/ca32d3_c6b038bfc53a47558838844f7311e0e4.jpg', NULL, 30, 2, '2016-01-28 00:00:00', 'ceonodom', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
