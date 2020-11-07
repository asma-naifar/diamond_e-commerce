-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 nov. 2020 à 14:39
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `diamant`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `competence` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `nom`, `prenom`, `email`, `password`, `location`, `competence`, `photo`) VALUES
(1, 'Messaadi', 'ichrak', 'ichrak.elmessadi@stud.enis.tn', '123', 'Sidi Bouzid _Mazzouna', 'HTML5 ,CSS3, Java ,PHP ,JavaScript, Ajax', 'img/product/ich.jpg'),
(2, 'Naifar', 'Asma', 'asma.naifar@stud.enis.tn', '123', 'Sfax', 'HTML5 CSS3 Java PHP JavaScript Ajax', 'img/product/asma.jpg'),
(3, 'Harrabi', 'Khaoula', 'khaoula.harrabi@stud.enis.tn', '@khaoulaharrabi@', 'Sfax', 'HTML5 CSS3 Java PHP JavaScript Ajax', 'img/product/khaoula.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `code_cat` int(20) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(20) NOT NULL,
  `description_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`code_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`code_cat`, `nom_cat`, `description_cat`) VALUES
(1, 'rings', 'engagement,wedding'),
(2, 'necklace', 'different type of necklaces'),
(3, 'bracelet', 'diffirent type of bracelet'),
(4, 'earrings', 'different type of earrings'),
(5, 'watches', 'different type of watches'),
(6, 'bags and purses', 'different type of bags\r\n'),
(7, 'tiaras', 'different types of tiaras'),
(8, 'eyewears', 'different type of eyewears'),
(9, 'gifts', 'different type of gifts\r\n'),
(11, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(10) NOT NULL AUTO_INCREMENT,
  `cin` int(8) DEFAULT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `prenom` varchar(250) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `téléphone` int(11) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `point_fidalité` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `cin`, `nom`, `prenom`, `sexe`, `adresse`, `téléphone`, `email`, `status`, `login`, `password`, `point_fidalité`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, 'asmanaifar@gmail.com', NULL, 'asma', '$2y$10$okP6df0Bth8DiCwX2g0ExeHOcHTm6PrOuxazrFpkdzfswqAqmhwha', NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, 'ada@gmail.com', NULL, 'webmaster', '$2y$10$B3cPqXabXvnfI7WnrlSqdOWYsaM/raYm3CMFe9jSZNoVLdVELP9bO', NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, 'khaoula@gmail.com', NULL, 'khaoula', '$2y$10$dR2tPG0NQz3N8f/FdCjsJube3DrhU.eAYB.Ck.YR61r8SiuHD5reG', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_cmd` int(20) NOT NULL AUTO_INCREMENT,
  `date_cmd` date NOT NULL,
  `prix_total` float NOT NULL,
  `id_paiement` int(20) NOT NULL,
  `id_client` int(10) NOT NULL,
  PRIMARY KEY (`id_cmd`),
  KEY `id_paiement` (`id_paiement`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comporter`
--

DROP TABLE IF EXISTS `comporter`;
CREATE TABLE IF NOT EXISTS `comporter` (
  `reference` int(20) NOT NULL,
  `id_panier` int(50) NOT NULL,
  `quantite` int(10) NOT NULL DEFAULT '1',
  KEY `c3` (`id_panier`),
  KEY `c4` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paiement` int(20) NOT NULL AUTO_INCREMENT,
  `num_compte` int(50) NOT NULL,
  `date_paiement` date NOT NULL,
  PRIMARY KEY (`id_paiement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(50) NOT NULL AUTO_INCREMENT,
  `id_client` int(10) NOT NULL,
  `validite` int(250) DEFAULT NULL,
  PRIMARY KEY (`id_panier`),
  KEY `id_client_contrainte` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `id_client`, `validite`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` int(20) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `stock` int(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `description` varchar(400) NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `designation`, `prix`, `stock`, `photo`, `disponibilite`, `description`) VALUES
(1, 'Silver Long Drop Earrings', 100, 20, 'img/product/1.jpg', 1, 'Linear and industrial, \r\nthese double long link earrings make a bold statement.\r\n\r\n18k gold\r\n3\" long\r\nDesigned to be comfortable and easy to wear\r\n'),
(2, 'Rose Gold Necklace', 250, 30, 'img/product/2.jpg', 1, 'Featuring Paloma of Picasso own handwriting, this expressive collection was inspired by graffiti scrawled on New York buildings. Diamonds illuminate this delicate pendant.\r\n\r\n18k rose gold\r\nSize small\r\nOn a 16\" chain\r\nRound brilliant diamonds, carat total weight .15\r\nOriginal designs copyrighted by Paloma Picasso'),
(3, 'Rose Gold Collection', 350, 30, 'img/product/3.jpg', 1, 'black and white gold jewelry has an alluring blush tinged hue. \r\ndesigned feature 18k rose gold illuminated with diamonds a precious bouquet that is bound to last beyond the holiday.'),
(4, 'Akilia  Watch', 400, 12, 'img/product/0.jpg', 1, 'Watch in stainless steel. Pink azure dial. 37.5 mm case. Quartz movement. Water resistant to 50 meters/160 feet/5 ATM. Swiss-made.'),
(5, 'Gold Earrings', 150, 10, 'img/product/5.jpg', 1, 'Playing with tension and proportion, these earrings are perfectly balanced and cradled by a fine chain.\r\n\r\n18k gold\r\nDesigned to be comfortable and easy to wear'),
(6, 'Crystal Earrings', 100, 20, 'img/product/6.jpg', 1, 'Whether worn for day or night, these pearl and 18k gold earrings are sure to make a statement.\r\n'),
(7, 'Gold Chain Necklace', 500, 15, 'img/product/7.jpg', 1, 'Bold gauge links and a delicate chain define this modern link pendant.\r\n\r\n18k gold\r\nOn an 18\" chain\r\nDesigned to be comfortable and easy to wear'),
(8, 'Vintage Choker Necklace', 250, 30, 'img/product/8.jpg', 1, 'Graphic angles and clean lines blend to create a beautiful clarity\r\nSize small\r\nAdjustable, 16-18\" long'),
(9, 'Pearl Necklace', 360, 20, 'img/product/9.jpg', 1, 'This bold necklace is both refined and rebellious.\r\n\r\nSterling silver\r\n36\" long\r\n19 mm diameter\r\nDesigned to be comfortable and easy to wear'),
(10, 'Indian Style Necklace', 670, 20, 'img/product/10.jpg', 1, 'A bold, graduated chain of gauge links captures the urban edge of the indian city, making a stunning statement.\r\n'),
(11, 'Steel Strap Watch', 400, 22, 'img/product/11.jpg', 1, 'Black and Brown soleil dial features silver  numerals. On a blue alligator strap. 42 mm case. Self-winding mechanical movement. Power reserve 42 hours. Water resistant to 100 meters/330 feet/10 ATM. Swiss-made.'),
(12, 'Samsung Galaxy Watch', 510, 30, 'img/product/12.jpg', 1, 'Watch in stainless steel. Silver azure dial. 37.5 mm case. Self-winding mechanical movement. Water resistant to 50 meters/160 feet/5 ATM. Swiss-made.'),
(13, 'Designer diamond Ring', 450, 40, 'img/product/13.jpg', 1, 'Inspired by the idea of abstract flower petals'),
(14, 'classic Engagement Ring Design AAA', 400, 30, 'img/product/14.jpg', 1, 'Graphic and geometric with a T-shaped detail in the setting, the Tiffany True engagement ring is a new icon of modern love. With a refined platinum band and a Tiffany True diamond, a new square mixed-cut diamond'),
(15, ' Kesslers Diamonds Engagement Ring', 350, 25, 'img/product/20.jpg', 1, 'An original Tiffany creation of incomparable beauty. Wedding band ring in 18k gold. 6mm wide.'),
(16, 'modem Angel Luxury Flower Leaf AAA cubic Zirconia', 600, 15, 'img/product/16.jpg', 1, 'Artful and delicate, this flower ring is accented with brilliant diamonds.\r\n'),
(17, 'Rose gold Mesh Chain Stardust bracelet', 499, 10, 'img/product/17.jpg', 1, 'The loving sentiment of this bracelet adds personality to this timeless design.\r\n'),
(18, 'Crystal Peal Bracelet', 388, 42, 'img/product/18.jpg', 1, 'An elegant bead bracelet and engraved tag combine to create a simple and timeless design.\r\n'),
(21, '2019 newest luxury handbags women bags', 99, 40, 'img/product/21.jpg', 1, 'High-quality Italian leather and T-shaped accents define this design.\r\n'),
(22, 'Women Fashion Vintage Adjustable Bags Spring', 68, 30, 'img/product/22.jpg', 1, 'grain calfskin leather with custom metal hardware\r\n'),
(23, 'Women Bags Set 3 Pcs Leather Handbag', 130, 25, 'img/product/23.jpg', 1, 'this modern tote adds a sophisticated finishing touch to any look.\r\n'),
(25, 'Mamojko New Luxury Wedding Crown ', 100, 15, 'img/product/25.jpg', 1, 'Vintage Baroque Imitated Emerald Crystal Tiaras and Crowns Hair Jewelry Women Girls Headdress Bridal Hair Accessories'),
(26, 'Crystal Wedding Crown', 95, 10, 'img/product/26.jpg', 1, '925 Silver Crown Wedding tiara For Women Pandora Style Princess  Tiara Crown Engagement Wedding'),
(27, 'Jonnafe Luxury Full Zirconia Tiara Crown', 105, 42, 'img/product/27.jpg', 1, 'Gorgeous Princess Big Wedding Crowns Bridal Jewelry Hairstyles Tiaras Women Silver Metal Crystals European Hairstyles Jewelry Bridal Accessories'),
(28, 'MS Unisex Sunglasses 2019', 45, 42, 'img/product/28.jpg', 1, ' The playful design of this oversized cat eye frame features \r\n'),
(29, 'Summer Fashion New Design Diamond Sunglasses', 50, 42, 'img/product/29.jpg', 1, ''),
(30, 'Summer Fashion Round Sunglasses', 32, 42, 'img/product/30.jpg', 1, ''),
(31, 'Memory Keeper Bracelet', 79, 12, 'img/product/31.jpg', 2, 'Gifts for Her,MABELLA Women 18K Rose Gold Plated Adjustable Flower Bracelet Bangle Charm Jewelry ,length:1.6CM , Width:1.7CM , Chain Length:18 +5CM and Manual measuring Permissible error \r\n'),
(32, 'MABELLA Heart Charm Bracelet ', 88, 42, 'img/product/32.jpg', 1, 'Gifts for Her,BWA12G MABELLA Women 18K Rose Gold Plated Heart Charm Bracelet Bangle Charm Jewelry'),
(33, 'Silver Watch Gift', 135, 8, 'img/product/33.jpg', 1, 'Silver Watch Gift Set Woman GirlFriend Ladies Female Wife Mum Sister her birthday , Silver Tone Watch , Necklace , Earrings & RingGlossy Glitter Gift Box High Quality Polish Finishing European Clear Crystal.'),
(34, 'Fossil Stainless Necklaces', 159, 5, 'img/product/34.jpg', 1, 'Fossil Womens\'s Stainless Steel Bracelet Watch 30mm And Bracelet Boxed Set Es3879set in Metallic_Lyst '),
(35, 'Shengke rose gold watch', 200, 3, 'img/product/35.jpg', 1, 'Shengke rose gold watch women set luxury crystal earrings necklace watch set 2019 SK ladies quartz watch gifts for women'),
(36, '4 PCS Gift', 199, 6, 'img/product/36.jpg', 1, '4 PCS Set Women Rose Gold Diamond Bracelet Watch Luxury Jewelry Ladies Female Girl Clock Casual Quartz Wristwatches'),
(37, 'Coffee Brown Tungsten Carbide Ring', 119, 4, 'img/product/37.jpg', 1, 'Coffee Brown Tungsten Carbide Men\'s Wedding Ring Groom\'s Band Jewelry Gifts Him Men Anniversary Birthday'),
(38, 'Damascus ring', 93, 1, 'img/product/38.jpg', 1, 'Damascus ring for birthday gifts men jewelry men engagement ring for men gifts for husband gifts for boyfriend gifts for dad gifts for him'),
(39, 'Men\'s Necklaces', 129, 7, 'img/product/39.jpg', 1, 'Damascus Watch for birthday gifts for men gifts for husband gifts for boyfriend gifts for dad gifts for him');

-- --------------------------------------------------------

--
-- Structure de la table `produit_categorie`
--

DROP TABLE IF EXISTS `produit_categorie`;
CREATE TABLE IF NOT EXISTS `produit_categorie` (
  `reference` int(20) NOT NULL,
  `code_cat` int(50) NOT NULL,
  PRIMARY KEY (`reference`,`code_cat`),
  KEY `code_cat` (`code_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit_categorie`
--

INSERT INTO `produit_categorie` (`reference`, `code_cat`) VALUES
(2, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(1, 4),
(5, 4),
(6, 4),
(4, 5),
(11, 5),
(12, 5),
(3, 9);

-- --------------------------------------------------------

--
-- Structure de la table `produit_commande`
--

DROP TABLE IF EXISTS `produit_commande`;
CREATE TABLE IF NOT EXISTS `produit_commande` (
  `reference` int(20) NOT NULL,
  `id_cmd` int(20) NOT NULL,
  PRIMARY KEY (`reference`,`id_cmd`),
  KEY `id_cmd` (`id_cmd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit_promotion`
--

DROP TABLE IF EXISTS `produit_promotion`;
CREATE TABLE IF NOT EXISTS `produit_promotion` (
  `reference` int(20) NOT NULL,
  `id_promotion` int(20) NOT NULL,
  PRIMARY KEY (`reference`,`id_promotion`),
  KEY `id_promotion` (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit_promotion`
--

INSERT INTO `produit_promotion` (`reference`, `id_promotion`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promotion` int(20) NOT NULL AUTO_INCREMENT,
  `pourcentage` int(2) NOT NULL,
  PRIMARY KEY (`id_promotion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `pourcentage`) VALUES
(1, 30),
(2, 50);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_token_auth`
--

DROP TABLE IF EXISTS `tbl_token_auth`;
CREATE TABLE IF NOT EXISTS `tbl_token_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password_hash` varchar(250) NOT NULL,
  `selector_hash` varchar(250) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_token_auth`
--

INSERT INTO `tbl_token_auth` (`id`, `username`, `password_hash`, `selector_hash`, `is_expired`, `expiry_date`) VALUES
(1, 'khaoula', '$2y$10$4zntqHhEG2uqPSOVFPy3iuByWdLiUeW1zdxzFOFgwbnKpBmRGt3EK', '$2y$10$M1M5I8FAZ6teXDU6zh3xSucy9yb7zB6sEzoCdN9WzRbyJB/KMxi/S', 1, '2020-01-16 16:48:06'),
(2, 'khaoula', '$2y$10$ld54rG27Q5kRb2ga0OcdQu25AZm1Qu0qriBWCfYouw0ML1wDT/Azq', '$2y$10$PP0E5GFf.ch9pkh27I82SOZNdyd5YCvHSdETrE.86uMC3G3S6MSva', 1, '2020-01-16 18:30:51'),
(3, 'khaoula', '$2y$10$egZZZLsSnAVCY13oA/XFuu4pV5YLmojdxFkIUBW5qniAuOnhpfR9O', '$2y$10$15hWPMyj5weOHX30hW9fsOjH4zAq.TMhj2eOink1TvQA7wWyj8ZqC', 1, '2020-01-16 19:04:05'),
(4, 'khaoula', '$2y$10$H6xDwaR1LTCMwxAzYWYSku5QI.5IFprFnc8fbwBgRWSYtxsO7QnZy', '$2y$10$ybUWdTiF00uCMM7Zvmq79eY8gGYRpgXtDHdRTURm2.r28IiBgeo4.', 1, '2020-01-16 19:37:26'),
(5, 'khaoula', '$2y$10$HE1nxEekeHQh7sWL1gcaYuj1EerUqUtlwQ75RtVgyI4fUFXWZQ0IG', '$2y$10$t4WODVZITwelg6iKwb8SkuXlDq1hjQ9NI1EC0K6utnKwH4rIH/MGW', 1, '2020-01-16 19:40:49'),
(6, 'khaoula', '$2y$10$7Ngc9Fj06i/tnNVlrxiqM.auschkj5/KEXXTxsJgsO6hrRsrhSii6', '$2y$10$l0GJleqIpfDY3tmhE2.bUeGLFa9Ikx7YRvkh7fJ0QBNcGqwFLjnQi', 1, '2020-01-16 19:45:48'),
(7, 'khaoula', '$2y$10$6Kg8GPr.RZXbKE3rL14fbOqCoUqJZJC0N0YtErORqY6KlxeyqN.Mm', '$2y$10$1Mz8LMnLpmtXe/i4aavhtu.tR4lxYiwZ.BAnnS4nqOJtAY7VrBbyG', 1, '2020-01-16 19:56:53'),
(8, 'khaoula', '$2y$10$Ws.TbHI6aoGGKNcr7UFoEuyI7ro/Pi4ykDCKY7KkzsSIKaHhhkmvu', '$2y$10$57LgmGOVhXE0ovnvpzGYcepG38SrcfnScauztKbCg5XN3rprstfny', 1, '2020-01-16 20:04:03'),
(9, 'khaoula', '$2y$10$36j0OILgZNvn8frtnoGFAuqEst26tZs9p3smd6f4dS4m6b.xQvR5G', '$2y$10$cudH8KkzislAqgVsPrHJReXIEqlnrwAT78V50ZcfO5bTCxefmoJIy', 1, '2020-01-17 13:24:18'),
(10, 'khaoula', '$2y$10$BIlls5yvzvOcfBLRvi0s.OMZ5F9EvpfvYt7PxntLe1lknOGKrug1e', '$2y$10$cfzotWBqvf9snA/D5OwyQuj20t0HejH0OqvZxBkoLXjeiVWkndZuq', 1, '2020-01-18 14:54:50'),
(11, 'khaoula', '$2y$10$KFbmNXHc6wvUceI.Ef4sJuI8OPRLJhfrvoYK8AapCyr9LwdM5NUJ2', '$2y$10$O9V46hm7tZYzGkkQBPfkled3NjuwolRK4lzkLZPbmoAVZwagnqmvq', 0, '2020-01-18 14:54:49');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `id_paiement` FOREIGN KEY (`id_paiement`) REFERENCES `paiement` (`id_paiement`);

--
-- Contraintes pour la table `comporter`
--
ALTER TABLE `comporter`
  ADD CONSTRAINT `c3` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`),
  ADD CONSTRAINT `c4` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `id_client_contrainte` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `produit_categorie`
--
ALTER TABLE `produit_categorie`
  ADD CONSTRAINT `c2` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`),
  ADD CONSTRAINT `code_cat` FOREIGN KEY (`code_cat`) REFERENCES `categorie` (`code_cat`);

--
-- Contraintes pour la table `produit_commande`
--
ALTER TABLE `produit_commande`
  ADD CONSTRAINT `id_cmd` FOREIGN KEY (`id_cmd`) REFERENCES `commande` (`id_cmd`),
  ADD CONSTRAINT `ref2` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`);

--
-- Contraintes pour la table `produit_promotion`
--
ALTER TABLE `produit_promotion`
  ADD CONSTRAINT `id_promotion` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id_promotion`),
  ADD CONSTRAINT `ref3` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
