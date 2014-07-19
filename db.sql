-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 18 Juillet 2014 à 19:38
-- Version du serveur: 5.5.37
-- Version de PHP: 5.4.4-14+deb7u12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `e1395529`
--

-- --------------------------------------------------------

--
-- Structure de la table `mi_adresse`
--

CREATE TABLE IF NOT EXISTS `mi_adresse` (
  `ID_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `no_rue` int(11) NOT NULL,
  `rue` varchar(30) NOT NULL,
  `codepostal` varchar(7) NOT NULL,
  `ID_ville` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ID_adresse`),
  KEY `ID_ville` (`ID_ville`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `mi_adresse`
--

INSERT INTO `mi_adresse` (`ID_adresse`, `no_rue`, `rue`, `codepostal`, `ID_ville`) VALUES
(0, 0, '0', '0', 1),
(1, 111, 'Ch. de la Pointe-Nord', 'H3E 0B3', 1),
(2, 3440, 'Rue Provost', 'J4X 1W3', 1),
(3, 6260, 'Rue Jarry', 'K1Z 2X5', 1),
(4, 500, 'Av. Stravinski', 'J4X 2X8', 2),
(5, 2321, 'Av. Auguste', 'Z3W 4S2', 2),
(6, 234, 'Rue Rome', 'J5X 3S1', 2),
(7, 4725, 'Av. Colomb', 'J4X 9Y5', 2),
(8, 8900, 'Crois. du Louvre', 'J5A 7Z9', 2),
(9, 4630, 'Boul. Cavendish', 'K7C 1F6', 1),
(10, 4695, 'Rue Villeret', 'K7C 8S2', 1),
(11, 580, 'Av. Bilaudeau', 'K6T 1S9', 1),
(12, 3809, 'Rue Joseph', 'K9V 2K8', 1),
(13, 3456, 'Av. Gascon', 'K8F 3K9', 1),
(14, 5573, 'Ch. Upper-Lachine', 'K9V 2K2', 1),
(15, 2532, 'Rue French', 'L8B 4H7', 1),
(16, 4356, 'Av. Colomb', 'J8G 4S2', 2),
(23, 3899, 'Autoroute des Laurentides', 'H7L 3H7', 3),
(24, 1500, 'Cunard ', 'H7S 2B7', 3),
(25, 7373, '7373 Bd Langelie', 'H1S 1V7', 4),
(26, 555, 'Boulevard René-Lévesque Ouest', 'H2Z 1B1', 1),
(27, 4, 'Westmount Square', 'H3Z 2S6', 1),
(36, 1, 'ee', 'H4X 2S3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mi_agence`
--

CREATE TABLE IF NOT EXISTS `mi_agence` (
  `ID_agence` int(11) NOT NULL AUTO_INCREMENT,
  `nom_agence` varchar(50) NOT NULL,
  `courriel_agence` varchar(50) NOT NULL,
  `siteweb` varchar(50) NOT NULL,
  `telephone_agence` varchar(14) NOT NULL,
  `ID_adresse` int(11) NOT NULL,
  `ID_photo` int(11) NOT NULL,
  PRIMARY KEY (`ID_agence`),
  KEY `ID_adresse` (`ID_adresse`),
  KEY `ID_photo` (`ID_photo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `mi_agence`
--

INSERT INTO `mi_agence` (`ID_agence`, `nom_agence`, `courriel_agence`, `siteweb`, `telephone_agence`, `ID_adresse`, `ID_photo`) VALUES
(0, '0', '0', '0', '0', 0, 0),
(1, 'Proprio Direct', 'info@propriodirect.com', 'http://www.propriodirect.com', '(514) 856-4444', 23, 1),
(2, 'RE/MAX', 'info@remax.ca', 'http://www.remax.ca/', '(905) 878-7777', 24, 1),
(3, 'Century 21', 'info@century21.ca', 'http://www.century21.ca', '(514) 899-9078', 25, 1),
(4, 'Du Proprio', 'info@duproprio.com', 'http://www.duproprio.com', '1 866 387-7677', 26, 1),
(5, 'Royal Le Page', 'info@royallepage.ca', 'http://www.royallepage.ca', '(416) 510-5790', 27, 1),
(8, 'qqq', 'qqq@qqq.qq', 'www.qqq.com', '2222222222', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `mi_annonce`
--

CREATE TABLE IF NOT EXISTS `mi_annonce` (
  `ID_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `Date_annonce` date DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `ID_statut` int(11) DEFAULT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `ID_adresse` int(11) DEFAULT NULL,
  `ID_typedebien` int(11) DEFAULT NULL,
  `nb_chambre` int(11) DEFAULT NULL,
  `nb_salledebains` int(11) DEFAULT NULL,
  `nb_pieces` int(11) DEFAULT NULL,
  `info_general` text,
  `superficie_habitable` int(11) DEFAULT NULL,
  `annee_construction` year(4) DEFAULT NULL,
  `annee_evaluation` year(4) DEFAULT NULL,
  `evaluation_dubatiment` int(11) DEFAULT NULL,
  `evaluation_duterrain` int(11) DEFAULT NULL,
  `etat` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_annonce`),
  KEY `ID_statut` (`ID_statut`),
  KEY `ID_user` (`ID_user`),
  KEY `ID_adresse` (`ID_adresse`),
  KEY `ID_typedebien` (`ID_typedebien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `mi_annonce`
--

INSERT INTO `mi_annonce` (`ID_annonce`, `Date_annonce`, `prix`, `ID_statut`, `ID_user`, `ID_adresse`, `ID_typedebien`, `nb_chambre`, `nb_salledebains`, `nb_pieces`, `info_general`, `superficie_habitable`, `annee_construction`, `annee_evaluation`, `evaluation_dubatiment`, `evaluation_duterrain`, `etat`) VALUES
(1, '2014-07-12', 189500, 1, 1, 7, 1, 2, 1, 7, 'Construction de qualité * Construction Cholette * Immeuble retiré de la rue passante * Unité de coin * Pièces vastes et éclairées * Foyer au gaz naturel * 2 Chambres à coucher * 2 terrases * 2 pas du stationnement incitatif Chevrier * Près du Prestigieux Dix-30 * 15 mins du centre-ville de Montreal *', 100, 2004, 2011, 100000, 10000, 'on'),
(2, '2014-07-09', 520000, 1, 1, 1, 1, 3, 2, 6, 'Situé, dans le tout nouveau complexe Zuni, sur Pointe-Nord de l''Ile-des-Soeurs à 5 minutes du centre-ville de Montréal. Concept aux lignes épurées, vous serez également comblés par son superbe panorama sur Montréal. Unité de coin, très lumineux, avec vue sur le centre-ville et le fleuve. Condo de 2 chambres à coucher, 2 salles de bains, un très grand balcon de coin. Une piscine sur le toit, un centre sportif, une salle communautaire et une cour intérieure sont également à votre disposition. ', 1160, 2011, 2014, 200000, 220000, 'on'),
(3, '2014-07-10', 214000, 2, 2, 2, 2, 2, 1, 4, 'Superbe condo de 2 chambres avec cuisine et salon à aire\r\nouverte avec foyer au bois au salon.Construction Prével de\r\nqualité\r\n\r\nSituation géographique idéale, à la jonction des autoroutes\r\n20 et 13 et à moins de 5 min de l''aéroport P-E Trudeau et à\r\n10 min du centre ville. Venez profiter du grand parc situé\r\nface à l''immeuble. Vous vous retrouverai en moins de 10\r\nminutes à pieds du fameux canal Lachine et de ses pistes\r\ncyclables', 80, 1987, 2014, 100000, 1140000, 'on'),
(4, '2014-07-11', 395000, 1, 3, 3, 2, 2, 2, 9, 'Magnifique condo La Comtesse au coeur de Saint-Leonard.Finition haute gamme,avec ascenseur .Beaucoup de fenestration ,plafonds de 9 pieds armoire de cuisine et SDB en thermoplastique.2 grande chambres a coucher,2 salle de bains dont une avec bain en coin et douche séparée .Salle de lavage séparée.Salon avec foyer électrique ,air climatise mural', 1415, 2005, 2013, 200000, 195000, 'on'),
(5, '2014-07-12', 224000, 1, 1, 4, 1, 2, 1, 5, 'Possiblement l''un des plus beaux condos du quartier, cette unité de coin vous surprendra par ses généreuses pièces et sa luminosité. Cuisine IKEA récente de bois avec ilot mobile. Salle de bain rénovée et spacieuse avec douche séparée. L''immeuble en copropriété a aussi eu plusieurs améliorations au fil du temps. Un vrai clé en main à découvrir.', 800, 1990, 2012, 100000, 120000, 'on'),
(6, '2014-07-12', 129000, 1, 4, 5, 1, 1, 1, 6, 'Grand 3 1/2 spacieux à aire ouverte très ensoleillé. Un unité de coin avec entrée privée. Deux stationnements. Possibilité d''occupation rapide. Idéal pour un jeune couple ou une personne seule. Devenez propriétaire pour le prix d''un loyer ! Grande terrasse, cabanon (Rubbermaid pouvant loger plusieurs gros meubles), 2 stationnements extérieurs.', 55, 1987, 2010, 100000, 50000, 'on'),
(7, '2014-07-12', 129900, 1, 4, 6, 1, 1, 1, 6, '3 1/2 sécuritaire avec ASCENCEUR. Très ensoleillé. Pourrait être libre pour 1 mai 2014. Piste cyclable devant l''immeuble et à 20 min. de marche du centre commercial. Salon, salle à manger et cuisine à aire ouverte. Grande chambre avec walk-in. S. de bain avec douche et bain séparés. Chute à déchets. Stationnement. Très belle vue sur montagnes.', 72, 2008, 2011, 114000, 9000, 'on'),
(8, '2014-07-12', 119900, 1, 3, 8, 1, 2, 1, 10, 'Ce condominium, aménagé avec goût et entretenu avec soin,\r\nest parfait pour vous, jeunes couples, professionnels,\r\nretraités et autres. Sans contredit un clé en main!\r\n\r\nLes planchers de bois ajoutent à son charme moderne, Situé\r\ndans un coin d''immeuble, la fenestration de ce logis offre\r\nune luminosité que vous apprécierez tout au long de\r\nl''année, mettant en valeur le salon et la salle à diner à\r\naire ouverte.', 106, 2007, 2013, 100000, 12000, 'on'),
(9, '2014-07-12', 419000, 1, 1, 9, 10, 4, 2, 7, 'Charmant 3+1 chambre a coucher, salon et salle à manger en plan aire ouverte et haut plafonds, ensoleille. Cuisine avec charmant patio. Grand jardin anglaise prive,spacieuse. Garage, terrasse, SS fini, avec heatpump. Beaucoup améliorations. Location de rêve a pas de magazines, restaurants, cafés,Méga Hôpitaux MUHC, transport, écoles, parc, banques', 1350, 1953, 2009, 200000, 230000, 'on'),
(10, '2014-07-12', 420000, 1, 3, 10, 10, 4, 2, 8, 'Magnifique propriété avec 3+1 CAC construit en 2002,très lumineux et très bien situé sur un rue tranquille,près de tous les services.La cuisine avec dînette,s/familial avec poêle au gaz.Le deuxième niveau: 3 grandes chambres et s/bain avec douche séparée.Cour clôturée avec piscine hors-terre,terrasse et cabanon. Fantastique maison familiale.', 6200, 2003, 2008, 300000, 130000, 'on'),
(11, '2014-07-14', 389000, 1, 1, 11, 10, 2, 1, 4, 'Duplex bien entretenue. 2 x 4.5. Présentement loué jusqu''au 30 juin 2015. Salle familliale au sous-sol et garage. Le garage est libre à l''acheteur. Bons locataires. Secteur de choix, près des transports.', 1500, 2004, 2012, 100000, 120000, 'on'),
(12, '2014-07-14', 579000, 1, 2, 12, 11, 3, 2, 6, 'Le mur du côté de la rue Dupuis a été réparé en 2010\r\nl''entrée et le câble électriques vers l''immeuble - en 2010\r\nLa cuisine #3809 refaite en 2010', 1340, 2003, 2010, 200000, 100000, 'on'),
(13, '2014-07-14', 577000, 1, 3, 13, 11, 2, 1, 4, 'Tres beau triplex ,bien entretenu Plateau proche des services, a distance de marche du Technopole Angus. Très beau RDC, deux salles de bains, sous sol fini , proche du Centre Ville, stationnement facile et garage, deux logent bien loués et rénoves ,facile a visiter , confort, revenu et location , RDC disponible a l''acheteur ', 1750, 1941, 2009, 400000, 100000, 'on'),
(14, '2014-07-14', 569000, 1, 4, 14, 11, 3, 1, 8, 'OPPORTUNITÉ D''INVESTISSEMENT EXCEPTIONNEL! TRIPLEX avec commerce. $33,000 des revenus locatifs. Situé à proximité du nouvel hôpital. À distance de marche du métro Vendôme, écoles, parcs, centre de loisirs. Accès rapide aux centres commerciaux, autoroutes 20/15. N''a pas été sur le marché depuis plus de 50 ans! Appelez-moi pour une visite.', 2570, 1930, 2009, 400000, 100000, 'on'),
(15, '2014-07-14', 550000, 1, 5, 15, 11, 2, 1, 5, 'Triplex 2 logements avec 3 chambres chacun et immense salon; et une garçonnière, tous ayant leur propre entrée électrique (2013 Garçonnière), toujours faciles à louer. Le rez-de-chaussée et bachelor sont disponibles pour occupation immédiate des acheteurs. Garage.', 1200, 1962, 2001, 340000, 220000, 'on'),
(16, '2014-07-15', 189500, 1, 5, 16, 10, 2, 1, 7, 'Construction de qualité * Construction Cholette * Immeuble retiré de la rue passante * Unité de coin * Pièces vastes et éclairées * Foyer au gaz naturel * 2 Chambres à coucher * 2 terrases * 2 pas du stationnement incitatif Chevrier * Près du Prestigieux Dix-30 * 15 mins du centre-ville de Montreal *', 1057, 2004, 2014, 500000, 100000, 'on'),
(31, '2014-07-18', 33, 1, 2, 36, 1, 3, 2, 2, 'ddd', 33, 2033, 0000, 0, 0, 'off');

-- --------------------------------------------------------

--
-- Structure de la table `mi_billets`
--

CREATE TABLE IF NOT EXISTS `mi_billets` (
  `ID_billet` int(11) NOT NULL AUTO_INCREMENT,
  `ID_user` int(11) NOT NULL,
  `titre_billet` varchar(50) NOT NULL,
  `contenue_billet` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_billet`),
  KEY `ID_user` (`ID_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `mi_billets`
--

INSERT INTO `mi_billets` (`ID_billet`, `ID_user`, `titre_billet`, `contenue_billet`, `Date`) VALUES
(1, 1, 'Différence entre surface habitable et loi Carrez', 'Les nouvelles dispositions de la Loi Alur, imposent d’établir une distinction entre la surface habitable et celle prévue dans le cadre de la Loi Carrez. La première à pour vocation de mettre en évidence les surfaces affectées uniquement à l’usage quotidien, la seconde plus étendues regroupe toutes les surfaces construites et couvertes du bien. - \r\n\r\n\r\n**Source: http://www.lebonagent.fr/blog-immobilier/#sthash.nYxCaMI7.dpuf', '2014-07-15 22:01:41'),
(2, 1, 'Le Mans une équipe qui s’impose sur son secteur', 'L’équipe du Mans (Sarthe – 72), prend son rythme de croisière en devant un acteur reconnu sur son secteur. Les 3 animateurs locaux, Emmanuel, Cyril et Romain font régulièrement des ventes et les auditeurs qui les ont rejoint prennent petit à petit leurs marques sur l’Anjou… Bienvenue à Coralie et Jean-Claude.\r\n\r\n**Source: http://www.lebonagent.fr/blog-immobilier/le-mans-une-equipe-qui-simpose-sur-son-secteur/#sthash.OOO3XfMP.dpuf\r\n                                ', '2014-07-15 22:02:28'),
(3, 1, 'Visiter des biens immobiliers pour s’amuser…', 'Un article étonnant dans Elle fait allusion à une nouvelle mode, appelée bizarrement « La Névrose immobilière », que j’aurais plutôt intitulée « Le fantasme immobilier » fait apparaitre un nouveau phénomène de passe temps. En effet, certaines personnes en mal d’idées, d’inspiration ou tout simplement en recherche d’occupation, s’amuseraient à visiter des appartements comme des maisons. Cherchant à la fois à fantasmer ou à se projeter dans des projets futurs. Ce jeu implique forcément des professionnels de l’immobilier objets de cette manipulation, devant rapidement percevoir la réalité d’un éventuel projet ou la simple duperie! \r\n\r\n**Source: http://www.lebonagent.fr/blog-immobilier/visiter-des-biens-immobiliers-pour-samuser/#sthash.z4nd1ZoA.dpuf', '2014-07-15 22:08:42');

-- --------------------------------------------------------

--
-- Structure de la table `mi_categorie`
--

CREATE TABLE IF NOT EXISTS `mi_categorie` (
  `ID_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `mi_categorie`
--

INSERT INTO `mi_categorie` (`ID_categorie`, `categorie`) VALUES
(1, 'residentiel'),
(2, 'commercial'),
(3, 'multilogement'),
(4, 'terrain'),
(5, 'ferme');

-- --------------------------------------------------------

--
-- Structure de la table `mi_commentaire`
--

CREATE TABLE IF NOT EXISTS `mi_commentaire` (
  `ID_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `ID_billet` int(11) NOT NULL,
  `contenu_commentaire` varchar(250) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID_user` int(11) NOT NULL,
  PRIMARY KEY (`ID_commentaire`),
  KEY `ID_billet` (`ID_billet`),
  KEY `ID_user` (`ID_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `mi_commentaire`
--

INSERT INTO `mi_commentaire` (`ID_commentaire`, `ID_billet`, `contenu_commentaire`, `Date`, `ID_user`) VALUES
(1, 1, 'Merci! C''est cool!', '2014-07-15 22:04:53', 2),
(2, 3, 'Bon!\r\n                             ', '2014-07-15 22:09:13', 4);

-- --------------------------------------------------------

--
-- Structure de la table `mi_forfaits`
--

CREATE TABLE IF NOT EXISTS `mi_forfaits` (
  `ID_forfait` int(11) NOT NULL AUTO_INCREMENT,
  `nom_forfait` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `duree` int(11) NOT NULL,
  PRIMARY KEY (`ID_forfait`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `mi_forfaits`
--

INSERT INTO `mi_forfaits` (`ID_forfait`, `nom_forfait`, `prix`, `description`, `duree`) VALUES
(0, '0', 0, '0', 0),
(1, 'standard', 80, 'bla', 6);

-- --------------------------------------------------------

--
-- Structure de la table `mi_photo`
--

CREATE TABLE IF NOT EXISTS `mi_photo` (
  `ID_photo` int(11) NOT NULL AUTO_INCREMENT,
  `ID_type_photo` int(11) NOT NULL,
  `chemin_large` varchar(50) NOT NULL,
  `chemin_thumbnail` varchar(50) NOT NULL,
  `ID_annonce` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_photo`),
  KEY `ID_type_photo` (`ID_type_photo`),
  KEY `ID_annonce` (`ID_annonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `mi_photo`
--

INSERT INTO `mi_photo` (`ID_photo`, `ID_type_photo`, `chemin_large`, `chemin_thumbnail`, `ID_annonce`) VALUES
(0, 1, '', '', NULL),
(1, 2, '', '', NULL),
(2, 2, '', '', NULL),
(7, 1, 'img/photos/large/logoUser_12.jpg', 'img/photos/large/logoUser_12.jpg', NULL),
(8, 1, 'img/photos/large/logoUser_12.jpg', 'img/photos/large/logoUser_12.jpg', NULL),
(10, 1, 'img/photos/large/tn_12.jpg', 'img/photos/large/tn_12.jpg', 12),
(11, 1, 'img/photos/large/12_3.jpg', 'img/photos/large/12_3.jpg', 12),
(12, 1, 'img/photos/large/3_1.jpg', 'img/photos/large/3_1.jpg', 3),
(13, 1, 'img/photos/large/tn_3.jpg', 'img/photos/large/tn_3.jpg', 3),
(15, 1, 'img/photos/annonce/31_1.jpg', 'img/photos/annonce/31_1.jpg', 31);

-- --------------------------------------------------------

--
-- Structure de la table `mi_province`
--

CREATE TABLE IF NOT EXISTS `mi_province` (
  `ID_province` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `province` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_province`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `mi_province`
--

INSERT INTO `mi_province` (`ID_province`, `province`) VALUES
(1, 'QC');

-- --------------------------------------------------------

--
-- Structure de la table `mi_role`
--

CREATE TABLE IF NOT EXISTS `mi_role` (
  `ID_role` int(11) NOT NULL AUTO_INCREMENT,
  `type_role` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `mi_role`
--

INSERT INTO `mi_role` (`ID_role`, `type_role`) VALUES
(0, '0'),
(1, 'courtier');

-- --------------------------------------------------------

--
-- Structure de la table `mi_statut`
--

CREATE TABLE IF NOT EXISTS `mi_statut` (
  `ID_statut` int(11) NOT NULL AUTO_INCREMENT,
  `statut` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_statut`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `mi_statut`
--

INSERT INTO `mi_statut` (`ID_statut`, `statut`) VALUES
(1, 'vendre'),
(2, 'louer'),
(3, 'hors ligne');

-- --------------------------------------------------------

--
-- Structure de la table `mi_transactions`
--

CREATE TABLE IF NOT EXISTS `mi_transactions` (
  `ID_transaction` int(11) NOT NULL AUTO_INCREMENT,
  `ID_user` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID_forfait` int(11) NOT NULL,
  `ID_agence` int(11) NOT NULL,
  `confirmation_paiement` int(11) NOT NULL,
  PRIMARY KEY (`ID_transaction`),
  KEY `ID_user` (`ID_user`),
  KEY `ID_agence` (`ID_agence`),
  KEY `ID_forfait` (`ID_forfait`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mi_type_debien`
--

CREATE TABLE IF NOT EXISTS `mi_type_debien` (
  `ID_typedebien` int(11) NOT NULL AUTO_INCREMENT,
  `typedebien` varchar(20) NOT NULL,
  `ID_categorie` int(11) NOT NULL,
  PRIMARY KEY (`ID_typedebien`),
  KEY `ID_categorie` (`ID_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `mi_type_debien`
--

INSERT INTO `mi_type_debien` (`ID_typedebien`, `typedebien`, `ID_categorie`) VALUES
(1, 'Condo', 1),
(2, 'Appartement', 1),
(3, 'Maison', 1),
(4, 'Chalet', 1),
(5, 'Bungalow', 1),
(6, 'Condo commercial', 2),
(7, 'Location d''espace', 2),
(8, 'Bâtisse industriel', 2),
(9, 'Condo industriel', 2),
(10, 'Duplex', 3),
(11, 'Triplex', 3),
(12, 'Quadruplex', 3),
(13, 'Quintuplex', 3),
(14, 'Terrain vacant', 4),
(15, 'Terre à bois', 4),
(16, 'Ferme', 5);

-- --------------------------------------------------------

--
-- Structure de la table `mi_type_photo`
--

CREATE TABLE IF NOT EXISTS `mi_type_photo` (
  `ID_type_photo` int(11) NOT NULL AUTO_INCREMENT,
  `type_photo` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_type_photo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `mi_type_photo`
--

INSERT INTO `mi_type_photo` (`ID_type_photo`, `type_photo`) VALUES
(1, 'Logo'),
(2, 'Photo'),
(3, 'Thumbnail');

-- --------------------------------------------------------

--
-- Structure de la table `mi_utilisateurs`
--

CREATE TABLE IF NOT EXISTS `mi_utilisateurs` (
  `ID_utilisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `courriel` varchar(50) NOT NULL,
  `nom_utilisateur` varchar(20) NOT NULL,
  `mot_de_passe` varchar(256) NOT NULL,
  `sexe` enum('M','F') NOT NULL,
  `DOB` date NOT NULL,
  `ID_adresse` int(11) NOT NULL,
  `ID_forfait` int(11) DEFAULT NULL,
  `ID_agence` int(11) DEFAULT NULL,
  `ID_photo` int(11) DEFAULT NULL,
  `ID_role` int(11) NOT NULL,
  `telephone_utilisateur` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_utilisateurs`),
  KEY `ID_adresse` (`ID_adresse`),
  KEY `ID_forfait` (`ID_forfait`),
  KEY `ID_agence` (`ID_agence`),
  KEY `ID_photo` (`ID_photo`),
  KEY `ID_role` (`ID_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `mi_utilisateurs`
--

INSERT INTO `mi_utilisateurs` (`ID_utilisateurs`, `nom`, `prenom`, `courriel`, `nom_utilisateur`, `mot_de_passe`, `sexe`, `DOB`, `ID_adresse`, `ID_forfait`, `ID_agence`, `ID_photo`, `ID_role`, `telephone_utilisateur`) VALUES
(1, 'Sanchez', 'Adriana', 'sanchez@propriodirect.com', 'Sanchez', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'F', '1994-07-01', 1, 1, 1, 1, 1, '514 456-2345'),
(2, 'Requiz', 'Pedro', 'Pedro@remax.ca', 'Pedro', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'M', '1970-07-07', 2, 1, 2, 2, 1, '514 787-1245'),
(3, 'Amendola', 'Innocenza', 'Amendola@century21.ca', 'Amendola', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'F', '1980-07-07', 2, 1, 3, 1, 1, '514 456-980'),
(4, 'Antunes', 'Daniel', 'Antunes@duproprio.com', 'Daniel', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'M', '1970-07-14', 3, 1, 4, 1, 1, '514 456-1290'),
(5, 'Fritz', 'Patricia', 'Fritz@royallepage.ca', 'Fritz', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'F', '1960-07-15', 3, 1, 5, 1, 1, '514 456-8900'),
(12, 'diane', 'd', 'mmm@ffff.ca', 'd', '18ac3e7343f016890c510e93f935261169d9e3f565436429830faf0934f4f8e4', 'M', '1980-03-03', 0, 0, 0, 0, 0, '1232323212'),
(13, 'vvv', 'd', 'ssss@ffff.ca', 'gggg', 'f6e0a1e2ac41945a9aa7ff8a8aaa0cebc12a3bcc981a929ad5cf810a090e11ae', 'M', '1980-03-03', 0, 0, 0, 0, 0, '1232323212'),
(14, 'bbb', 'bbb', 'bbb@bbb.ca', 'bbbb', '81cc5b17018674b401b42f35ba07bb79e211239c23bffe658da1577e3e646877', 'M', '1980-03-05', 0, 0, 0, 0, 0, '1111111111'),
(15, 'aaa', 'aaa', 'aaa@aaa.aa', 'aaa', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', 'M', '1980-04-06', 0, 0, 8, 0, 0, '1111111111');

-- --------------------------------------------------------

--
-- Structure de la table `mi_ville`
--

CREATE TABLE IF NOT EXISTS `mi_ville` (
  `ID_ville` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ID_province` int(11) unsigned NOT NULL,
  `ville` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_ville`),
  KEY `ID_province` (`ID_province`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `mi_ville`
--

INSERT INTO `mi_ville` (`ID_ville`, `ID_province`, `ville`) VALUES
(1, 1, 'Montréal'),
(2, 1, 'Brossard'),
(3, 1, 'Laval'),
(4, 1, 'St-Léonard');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `mi_adresse`
--
ALTER TABLE `mi_adresse`
  ADD CONSTRAINT `mi_adresse_ibfk_1` FOREIGN KEY (`ID_ville`) REFERENCES `mi_ville` (`ID_ville`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_agence`
--
ALTER TABLE `mi_agence`
  ADD CONSTRAINT `mi_agence_ibfk_1` FOREIGN KEY (`ID_adresse`) REFERENCES `mi_adresse` (`ID_adresse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_agence_ibfk_2` FOREIGN KEY (`ID_photo`) REFERENCES `mi_photo` (`ID_photo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_annonce`
--
ALTER TABLE `mi_annonce`
  ADD CONSTRAINT `mi_annonce_ibfk_1` FOREIGN KEY (`ID_statut`) REFERENCES `mi_statut` (`ID_statut`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_annonce_ibfk_3` FOREIGN KEY (`ID_adresse`) REFERENCES `mi_adresse` (`ID_adresse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_annonce_ibfk_4` FOREIGN KEY (`ID_typedebien`) REFERENCES `mi_type_debien` (`ID_typedebien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_annonce_ibfk_6` FOREIGN KEY (`ID_user`) REFERENCES `mi_utilisateurs` (`ID_utilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_billets`
--
ALTER TABLE `mi_billets`
  ADD CONSTRAINT `mi_billets_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `mi_utilisateurs` (`ID_utilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_commentaire`
--
ALTER TABLE `mi_commentaire`
  ADD CONSTRAINT `mi_commentaire_ibfk_1` FOREIGN KEY (`ID_billet`) REFERENCES `mi_billets` (`ID_billet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_commentaire_ibfk_2` FOREIGN KEY (`ID_user`) REFERENCES `mi_utilisateurs` (`ID_utilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_photo`
--
ALTER TABLE `mi_photo`
  ADD CONSTRAINT `mi_photo_ibfk_2` FOREIGN KEY (`ID_annonce`) REFERENCES `mi_annonce` (`ID_annonce`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_photo_ibfk_1` FOREIGN KEY (`ID_type_photo`) REFERENCES `mi_type_photo` (`ID_type_photo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_transactions`
--
ALTER TABLE `mi_transactions`
  ADD CONSTRAINT `mi_transactions_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `mi_utilisateurs` (`ID_utilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_transactions_ibfk_2` FOREIGN KEY (`ID_agence`) REFERENCES `mi_agence` (`ID_agence`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_transactions_ibfk_3` FOREIGN KEY (`ID_forfait`) REFERENCES `mi_forfaits` (`ID_forfait`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_type_debien`
--
ALTER TABLE `mi_type_debien`
  ADD CONSTRAINT `mi_type_debien_ibfk_1` FOREIGN KEY (`ID_categorie`) REFERENCES `mi_categorie` (`ID_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_utilisateurs`
--
ALTER TABLE `mi_utilisateurs`
  ADD CONSTRAINT `mi_utilisateurs_ibfk_1` FOREIGN KEY (`ID_adresse`) REFERENCES `mi_adresse` (`ID_adresse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_utilisateurs_ibfk_2` FOREIGN KEY (`ID_forfait`) REFERENCES `mi_forfaits` (`ID_forfait`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_utilisateurs_ibfk_3` FOREIGN KEY (`ID_agence`) REFERENCES `mi_agence` (`ID_agence`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_utilisateurs_ibfk_4` FOREIGN KEY (`ID_photo`) REFERENCES `mi_photo` (`ID_photo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mi_utilisateurs_ibfk_5` FOREIGN KEY (`ID_role`) REFERENCES `mi_role` (`ID_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mi_ville`
--
ALTER TABLE `mi_ville`
  ADD CONSTRAINT `mi_ville_ibfk_1` FOREIGN KEY (`ID_province`) REFERENCES `mi_province` (`ID_province`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
