-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 jan. 2022 à 16:27
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE `artistes` (
  `IdArtiste` int(11) NOT NULL,
  `NomArtiste` varchar(20) NOT NULL,
  `PhotoArtiste` varchar(10000) NOT NULL,
  `BioArtiste` text NOT NULL,
  `IdGenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artistes`
--

INSERT INTO `artistes` (`IdArtiste`, `NomArtiste`, `PhotoArtiste`, `BioArtiste`, `IdGenre`) VALUES
(1, 'Céline Dion', 'celinedion.jpg', 'Née le 30 mars 1968 à Charlemagne (Québec), est une chanteuse canadienne.', 4),
(2, 'Feu ! Chatterton', 'feuchatterton.jpg', 'Groupe de musique rock et pop originaire de Paris fondé en 2011.\r\n\r\nLe nom du groupe est la juxtaposition de l\'expression Feu! et de Chatterton, en hommage au poète Thomas Chatterton.', 6),
(3, 'Kyo', 'kyo.jpg', 'Groupe de pop-rock français. Formé en 1994, le groupe est révélé au grand public avec les albums à succès Le Chemin en 2003 et 300 lésions en 2004.', 2),
(4, 'Juliette Armanet', 'juliettearmanet.jpg', 'Née le 4 mars 1984 à Lille, est une auteure-compositrice-interprète française.', 4),
(5, 'Afrojack', 'afrojack.jpg', 'De son vrai nom Nick Leonardus van de Wall, né le 9 septembre 1987 à Spijkenisse (Hollande-du-Sud), est un disc jockey et producteur de musique electro house néerlandais.', 3),
(6, 'Tayc', 'tayc.jpg', 'Julien Bouadjie, dit Tayc, est auteur-compositeur-interprète français, né le 2 mai 1996 à Marseille. Il est le parolier d\'un triple album intitulé Nyxia, sorti en 2019, de deux mixtapes, et de plusieu', 5),
(7, 'Franglish', 'franglish.jpg', 'Franglish, de son vrai nom Gédéon Mundele Ngolo, né le 2 août 1994 dans le 20e arrondissement de Paris, est un rappeur et chanteur français.', 5),
(8, 'Dadju', 'dadju.jpg', 'Né le 2 mai 1991 à Bobigny, en Seine-Saint-Denis, est un auteur-compositeur-interprète français. Il est issu d\'une famille de musiciens : son père Djuna Djanana était un chanteur du groupe Viva La Mus', 5),
(9, 'Jok\'Air', 'jokair.jpg', 'De son vrai nom Melvin Félix Aka, né le 23 septembre 1991 dans le 19e arrondissement de Paris, est un rappeur français d\'origine ivoirienne. D\'abord membre du groupe MZ, il commence sa carrière solo e', 5),
(10, 'Ayo', 'ayo.jpg', 'Chanteuse allemande, née le 14 septembre 1980 à Frechen.', 7),
(11, 'Ninho', 'ninho.png', 'William Nzobazola, est un rappeur, chanteur et auteur-compositeur français, né le 2 avril 1996 à Longjumeau.', 1),
(12, 'Niska', 'niska.jpg', 'Rappeur français né le 6 avril 19944 à Villeneuve-Saint-Georges. Il a grandi à Évry, en Essonne.', 1),
(13, 'Soprano', 'soprano.jpeg', 'Né le 14 janvier 1979 à Marseille, est un rappeur, chanteur et compositeur français. Soprano débute dans le rap avec le groupe Psy 4 de la rime à la fin des années 1990 et courant des années 2000', 1),
(14, 'Stromae', 'stromae.jpg', 'Paul Van Haver, dit Stromae, est un auteur-compositeur-interprète et producteur belge, né le 12 mars 1985 à Etterbeek. Il se fait connaître en 2010 avec la chanson Alors on danse extraite de l\'album Cheese. En parallèle, il crée son propre label Mosaert, afin d\'assurer la production de ce premier album.', 2),
(15, 'Angèle', 'angele.jpg', 'Angèle Van Laeken, dite Angèle, née le 3 décembre 1995 à Uccle, est une auteure-compositrice-interprète, musicienne, productrice, actrice et mannequin belge.', 2),
(16, 'Dj Snake', 'djsnake.jpg', 'DJ Snake, nom de scène de William Grigahcine, est un DJ, compositeur, producteur et réalisateur artistique français né le 13 juin 1986 à Paris. Entre 2011 et 2013, il produit l\'album Born This Way de Lady Gaga, dont la chanson Government Hooker.', 3),
(17, 'Eva', 'eva.jpg', 'Eva Queen, ou simplement appelée Eva, stylisé EV\\, de son vrai nom Eva Garnier, née le 12 mars 2001 à Nice, dans les Alpes-Maritimes, est une chanteuse française. En juillet 2019, elle sort son premier album studio, intitulé Queen.', 5),
(18, 'Red Hot Chilli Peppe', 'rhcp.jpg', 'Les Red Hot Chili Peppers sont un groupe de funk rock américain, originaire de Los Angeles, en Californie. Il est formé en 1983 par Anthony Kiedis et Michael Balzary, auxquels se joignent Hillel Slovak et Jack Irons.', 6),
(19, 'Imany', 'imany.jpg', 'Nadia Mladjao, dite Imany, est une chanteuse, auteure-compositrice-interprète et mannequin française, née le 5 avril 1979 à Martigues.', 7);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `IdAvis` int(11) NOT NULL,
  `NoteAvis` int(10) NOT NULL,
  `ContenuAvis` varchar(250) NOT NULL,
  `DateAvis` datetime NOT NULL,
  `EmojiAvis` varchar(200) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `IdConcert` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`IdAvis`, `NoteAvis`, `ContenuAvis`, `DateAvis`, `EmojiAvis`, `IdUser`, `IdConcert`) VALUES
(1, 0, 'Super concert !! Hâte d\'y retourner', '2022-01-07 16:25:39', '', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `concerts`
--

CREATE TABLE `concerts` (
  `IdConcert` int(11) NOT NULL,
  `TitreConcert` varchar(200) NOT NULL,
  `DateConcert` datetime NOT NULL,
  `LieuConcert` varchar(30) NOT NULL,
  `IdArtiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `concerts`
--

INSERT INTO `concerts` (`IdConcert`, `TitreConcert`, `DateConcert`, `LieuConcert`, `IdArtiste`) VALUES
(1, 'Céline Dion à Paris', '2022-09-16 20:00:00', 'Paris', 1),
(2, 'Céline Dion à Paris', '2022-09-21 20:00:00', 'Paris', 1),
(3, 'Feu ! Chatterton à Caluire-Et-Cuire', '2022-03-05 20:00:00', 'Caluire-Et-Cuire', 2),
(4, 'Feu ! Chatterton à Saint-Etienne', '2022-03-30 20:00:00', 'Saint-Etienne', 2),
(5, 'Feu ! Chatterton à Paris', '2022-02-10 20:00:00', 'Paris', 2),
(6, 'Feu ! Chatterton à Chambéry', '2022-02-10 20:00:00', 'Chambéry', 2),
(7, 'Kyo à Paris', '2022-05-13 20:00:00', 'Paris', 3),
(8, 'Kyo à Villeurbanne', '2022-04-09 20:00:00', 'Villeurbanne', 3),
(9, 'Juliette Armanet à Paris', '2022-02-16 20:00:00', 'Paris', 4),
(10, 'Juliette Armanet à Caluire-Et-Cuire', '2022-03-29 20:00:00', 'Caluire-Et-Cuire', 4),
(11, 'Juliette Armanet à Grenoble', '2022-01-28 20:00:00', 'Grenoble', 4),
(12, 'Afrojack à l\'Alpes d\'Huez', '2022-03-19 20:00:00', 'Alpes d\'Huez', 5),
(13, 'Tayc à Paris', '2022-12-07 20:00:00', 'Paris', 6),
(14, 'Tayc à Lyon', '2022-11-08 20:00:00', 'Lyon', 6),
(15, 'Tayc à Rennes', '2022-11-05 20:00:00', 'Rennes', 6),
(16, 'Franglish à Paris', '2022-11-17 20:00:00', 'Paris', 7),
(17, 'Dadju à Paris', '2022-06-18 20:00:00', 'Paris', 8),
(18, 'Dadju à Grenoble', '2022-02-11 20:00:00', 'Grenoble', 8),
(19, 'Dadju à Toulon', '2022-02-26 20:00:00', 'Toulon', 8),
(20, 'Jok\'Air à Villeurbanne', '2022-01-13 20:00:00', 'Villeurbanne', 9),
(21, 'Jok\'Air à Paris', '2022-02-27 20:00:00', 'Paris', 9),
(22, 'Ayo à Vaugneray', '2022-02-14 20:00:00', 'Vaugneray', 10),
(23, 'Angèle à Lyon', '2022-05-16 20:00:00', 'Lyon', 15),
(24, 'Angèle à Paris', '2022-09-17 20:00:00', 'Paris', 15),
(25, 'Angèle à Strasbourg', '2022-01-29 18:13:39', 'Strasbourg', 15),
(26, 'Dj Snake à Paris', '2022-05-13 18:13:39', 'Paris', 16),
(27, 'Eva à Lyon', '2022-02-05 20:00:00', 'Lyon', 17),
(28, 'Eva à Grenoble', '2022-10-10 20:00:00', 'Grenoble', 17),
(29, 'Imany à Nantes', '2022-01-19 20:00:00', 'Nantes', 19),
(30, 'Imany à Lyon', '2022-01-08 20:00:00', '', 19),
(31, 'Ninho à Lyon', '2022-04-06 20:00:00', 'Lyon', 11),
(32, 'Ninho à Montpellier', '2022-01-06 18:12:17', 'Montpellier', 11),
(33, 'Niska à Lyon', '2022-04-24 20:00:00', 'Lyon', 12),
(34, 'Niska à Nantes', '2022-01-12 18:13:40', 'Nantes', 12),
(35, 'Red Hot Chilli Peppers à Paris', '2022-06-03 18:13:40', 'Paris', 18),
(36, 'Stromae à Grenoble', '2022-01-27 18:13:40', 'Grenoble', 14),
(37, 'Stromae à Lyon', '2022-08-07 18:13:40', 'Lyon', 14),
(38, 'Soprano à St Etienne', '2022-01-22 18:13:40', 'St Etienne', 13),
(41, 'Stromae à Montpellier', '2022-02-04 18:23:06', 'Montpellier', 14),
(42, 'Soprano à Grenoble', '2022-01-29 18:23:06', 'Grenoble', 13),
(43, 'Eva à St Etienne', '2022-03-16 18:23:06', 'St Etienne', 17);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `IdGenre` int(11) NOT NULL,
  `NomGenre` varchar(20) NOT NULL,
  `DescriptionGenre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`IdGenre`, `NomGenre`, `DescriptionGenre`) VALUES
(1, 'Rap', 'Mouvement culturel et musical qui tire ses origines du hip-hop. \r\n					Apparu au début des années 1970 dans les ghettos États-Uniens, le rap se caractérise\r\n					par une diction très rythmée et l’usage de la rime1. Le plus souvent, un morceau de rap \r\n					est une succession de couplets séparés par un refrain. Influencé par d\'autres genres musicaux \r\n					(reggae, blues, et jazz, rock), le rap acquiert une popularité de plus en plus grande \r\n					au fil des années 1980. '),
(2, 'Pop', 'Genre musical apparu dans les années 1960 au Royaume-Uni et aux États-Unis. \r\n					Les chansons pop parlent en général de l\'amour ou des relations amoureuses. Cette musique met \r\n					l\'accent sur la chanson individuelle plutôt que sur l\'album, et utilise essentiellement des morceaux \r\n					courts avec des rythmes associés à la danse1. La musique pop fut beaucoup influencée par les technologies, \r\n					comme l\'enregistrement à pistes multiples (vers la fin des années 1960), et le synthétiseur (durant les années 1970 et 1980).'),
(3, 'Electro', 'Conçu dans les années 1950 avec des générateurs de signaux et de sons synthétiques.\r\n					Avant de pouvoir être utilisée en temps réel, elle a été enregistrée sur bande magnétique, \r\n					ce qui permettait aux compositeurs de manier aisément les sons, par exemple dans l\'utilisation \r\n					de boucles répétitives superposées. Ses précurseurs ont pu bénéficier de studios spécialement équipés\r\n					ou faisaient partie d\'institutions musicales pré-existantes.'),
(4, 'Variétés', 'Rassemble de nombreux genres de musique vocale ou de musique de danse consacrés au divertissement. \r\n					Destinée à un large public, gérée par l\'industrie musicale, elle est souvent opposée à la musique classique dite « savante ». \r\n					Surtout développée à partir de la deuxième moitié du xxe siècle par des émissions radiophoniques et télévisuelles,\r\n					par la vente de disques, de CD et, de nos jours, en téléchargement à partir d\'internet, historiquement, la musique\r\n					de variétés est dérivée des spectacles de music-hall de la fin du xixe siècle.'),
(5, 'Rnb', 'Musique populaire afro-américaine ayant émergé dans les années 19401. \r\n					Le terme est originellement utilisé par les compagnies de disque pour décrire \r\n					des albums ciblant uniquement la communauté afro-américaine urbaine, à une époque \r\n					durant laquelle « un rythme insistant inspiré du jazz » commençait à se populariser.\r\n					Le genre mêle des éléments sonores en provenance du gospel, du blues et du jazz.'),
(6, 'Rock', 'Genre musical apparu dans les années 1950 aux États-Unis et qui s\'est développé en différents \r\n					sous-genres à partir des années 1960, notamment aux États-Unis et au Royaume-Uni. Il prend ses racines dans le rock \'n\' roll \r\n					des années 1940 et 1950, lui-même grandement influencé par le rhythm and blues et la country. Le rock a également \r\n					incorporé des éléments provenant d\'autres genres dont la folk, le blues, le jazz et la musique classique. Le terme\r\n					« rock » est aujourd\'hui utilisé comme un terme générique incluant des formes artistiques comme la pop music, la musique soul.'),
(7, 'Soul', 'Musique populaire afro-américaine ayant émergé à la fin des années 1950 aux États-Unis, dérivée, entre autres, du gospel et du rhythm and blues. Elle est considérée par certains comme un retour du rhythm and blues aux racines dont il est issu : le gospel.');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `IdPhoto` int(11) NOT NULL,
  `NomPhoto` varchar(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `IdConcert` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`IdPhoto`, `NomPhoto`, `IdUser`, `IdConcert`) VALUES
(1, 'angeleconce', 1, 23),
(2, 'concertstro', 1, 35);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `IdUser` int(11) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Admin` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Avatar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IdUser`, `Pseudo`, `Admin`, `Password`, `Mail`, `Avatar`) VALUES
(1, 'Cha', 'Oui', 'mdp_cha', 'cha@gmail.fr', 'iconecat.jpeg'),
(2, 'imad', 'Oui', 'mdp_imad', 'imad@gmail.fr', 'imad.png'),
(15, 'loan', 'Non', 'mdp_lo', 'lo@gmail.fr', 'avatar1.jpg'),
(16, 'so', 'Non', 'mdp_so', 'so@gmail.fr', 'avatar1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`IdArtiste`),
  ADD KEY `IdGenre` (`IdGenre`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`IdAvis`),
  ADD KEY `IdUser` (`IdUser`),
  ADD KEY `IdConcert` (`IdConcert`);

--
-- Index pour la table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`IdConcert`),
  ADD KEY `IdArtiste` (`IdArtiste`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`IdGenre`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`IdPhoto`),
  ADD KEY `IdUser` (`IdUser`),
  ADD KEY `IdConcert` (`IdConcert`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `IdArtiste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `IdAvis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `IdConcert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `IdGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `IdPhoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD CONSTRAINT `artistes_ibfk_1` FOREIGN KEY (`IdGenre`) REFERENCES `genres` (`IdGenre`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `utilisateurs` (`IdUser`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`IdConcert`) REFERENCES `concerts` (`IdConcert`);

--
-- Contraintes pour la table `concerts`
--
ALTER TABLE `concerts`
  ADD CONSTRAINT `concerts_ibfk_1` FOREIGN KEY (`IdArtiste`) REFERENCES `artistes` (`IdArtiste`);

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `utilisateurs` (`IdUser`),
  ADD CONSTRAINT `photos_ibfk_2` FOREIGN KEY (`IdConcert`) REFERENCES `concerts` (`IdConcert`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
