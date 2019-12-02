-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2019 at 01:14 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: film
--
CREATE DATABASE IF NOT EXISTS film DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE film;

-- --------------------------------------------------------

--
-- Table structure for table film
--

CREATE TABLE IF NOT EXISTS film (
  id_film int(11) NOT NULL AUTO_INCREMENT,
  titre varchar(200) NOT NULL,
  synopsis text NOT NULL,
  duree int(11) NOT NULL,
  dateSortie date NOT NULL,
  id_producteur int(11) NOT NULL,
  budget bigint(20) NOT NULL,
  PRIMARY KEY (id_film),
  KEY id_producteur (id_producteur)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table film
--

INSERT INTO film (id_film, titre, synopsis, duree, dateSortie, id_producteur, budget) VALUES
(2, 'Titanic', 'Titanic est une romance dramatique américaine écrite, produite et réalisée par James Cameron, sortie en 1997. Intégrant à la fois des aspects historiques et fictionnels, le film est basé sur le récit du naufrage du RMS Titanic et met en vedette Leonardo DiCaprio et Kate Winslet.\r\n\r\nElle raconte l\'histoire de deux jeunes passagers du paquebot Titanic en avril 1912. L\'un, Rose, est une passagère de première classe qui tente de se suicider pour se libérer des contraintes imposées par son entourage, et le second, Jack, est un vagabond embarqué à la dernière minute en troisième classe pour retourner aux États-Unis. Ils se rencontrent par hasard lors de la tentative de suicide de Rose et vivent une histoire d\'amour vite troublée par le naufrage du navire.', 194, '1997-11-01', 1, 200000000),
(3, 'Avatar', 'L’action se déroule en 21543 sur Pandora, une des lunes de Polyphème, une planète géante gazeuse en orbite autour d\'Alpha Centauri A, le système stellaire le plus proche de la Terre. L’exolune, recouverte d’une jungle luxuriante, est le théâtre du choc entre des humains, venus exploiter un minerai rare susceptible de résoudre la crise énergétique sur Terre, et la population autochtone, les Na’vis, qui vivent en parfaite symbiose avec leur environnement et tentent de se défendre face à l’invasion militarisée. Un programme est créé par les Terriens, le programme Avatar, qui va leur permettre de contrôler des corps Na’vi clonés associés aux gènes d\'êtres humains, afin de s’insérer dans la population et de tenter de négocier avec elle. En effet, un clan Na\'vi important, les Omaticaya, est installé dans un arbre-maison gigantesque situé sur un des principaux gisements de ce minerai convoité par les Terriens, l\'unobtanium. Les militaires protégeant les équipes de recherche voient d\'un mauvais œil le projet Avatar, beaucoup trop lent pour eux. Ils sont convaincus que la force brutale tirée de leur avance technologique leur permettrait de conquérir la planète en quelques jours. Le personnage central de l’histoire est Jake Sully, un Marine paraplégique qui, via son avatar, va devoir choisir son camp avec pour enjeu, le destin de la planète.', 162, '2009-12-10', 1, 425000000);

-- --------------------------------------------------------

--
-- Table structure for table film_genre
--

CREATE TABLE IF NOT EXISTS film_genre (
  id int(11) NOT NULL AUTO_INCREMENT,
  id_film int(11) NOT NULL,
  id_genre int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY id_film (id_film),
  KEY id_genre (id_genre)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table film_genre
--

INSERT INTO film_genre (id, id_film, id_genre) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table film_societeProduction
--

CREATE TABLE IF NOT EXISTS film_societeProduction (
  id int(11) NOT NULL AUTO_INCREMENT,
  id_film int(11) NOT NULL,
  id_societeProduction int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY id_film (id_film),
  KEY id_societeProduction (id_societeProduction)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table film_societeProduction
--

INSERT INTO film_societeProduction (id, id_film, id_societeProduction) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 1),
(5, 3, 4),
(6, 3, 3),
(7, 3, 6),
(8, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table genre
--

CREATE TABLE IF NOT EXISTS genre (
  id_genre int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  PRIMARY KEY (id_genre)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table genre
--

INSERT INTO genre (id_genre, nom) VALUES
(1, 'Catastrophe'),
(2, 'Drame historique'),
(3, 'Romance'),
(4, 'Comédie'),
(5, 'Horreur'),
(6, 'Drame'),
(7, 'Drame'),
(8, 'Science-fiction');

-- --------------------------------------------------------

--
-- Table structure for table personne
--

CREATE TABLE IF NOT EXISTS personne (
  id int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(100) NOT NULL,
  prenom varchar(100) NOT NULL,
  dateNaissance date NOT NULL,
  biograpahie text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table personne
--

INSERT INTO personne (id, nom, prenom, dateNaissance, biograpahie) VALUES
(1, 'Cameron', 'James', '1954-08-16', 'James Cameron, fils de Phillip, un ingénieur électricien, et Shirley, une artiste, est né et a passé sa jeunesse au Canada, près des chutes du Niagara. Il a deux frères et deux sœurs. En 1971, il déménage à Brea (Californie), États-Unis, où il sera diplômé de physique à l\'université d\'État de Californie. Mais ses premiers gagne-pain seront mécanicien et conducteur de camions car il nourrit une tout autre ambition : le cinéma. Son premier court métrage : Xenogenesis, est financé par un consortium de dentistes.'),
(2, 'Dicaprio', 'Leonardo', '1974-11-11', 'Leonardo DiCaprio, né le 11 novembre 1974 à Los Angeles, est un acteur, scénariste et producteur de cinéma américain.\r\nGrandissant dans les quartiers populaires de Los Angeles tels que Los Feliz puis Hollywood, le jeune Leonardo DiCaprio prend comme modèle le fils de sa belle-mère Peggy Ann Saunders, Adam Farrar, qui commence dès l\'enfance une carrière d\'acteur. Il décide alors de se lancer lui aussi, encouragé par ses parents. Il montre rapidement un talent évident pour la comédie et se voit proposer des rôles à la télévision, puis au cinéma. Après avoir été choisi parmi de très nombreux candidats pour jouer face à son acteur préféré Robert De Niro dans Blessures secrètes en 1993, il se fait particulièrement remarquer la même année grâce à son film suivant, Gilbert Grape, où il incarne face à Johnny Depp un jeune garçon déficient intellectuel, rôle pour lequel il est nommé à l\'Oscar du meilleur acteur dans un second rôle à l\'âge de 19 ans.'),
(3, 'Winslet', 'Kate', '1975-10-05', 'Née à Reading, dans le Berkshire, Kate Winslet est la deuxième des quatre enfants de Sally Ann (née Bridges), serveuse de bar, et de Roger Winslet, fournisseur de piscines. Ses parents ont été des « acteurs occasionnels », ce qui conduit la jeune femme à commenter qu\'elle n\'a « pas eu une éducation privilégiée » et que leur vie quotidienne était de « vivre au jour le jour ». Ses grands-parents maternels, Linda (née Plumb) et Oliver Bridges, ont fondé et dirigé le Reading Repertory Theatre, et son oncle, Robert Bridges, est apparu dans la comédie musicale Oliver!, produite au West End. Sa sœur aînée, Anna, et sa sœur cadette, Beth, sont également actrices. Seul son jeune frère, Joss, n\'a pas poursuivi de carrière d\'acteur.'),
(4, 'Worthington', 'Sam', '1976-08-02', 'Samuel Henry John « Sam » Worthington naît à Godalming dans le comté de Surrey par l\'union de Ronald W. Worthington, un employé et Jeanne J. Worthington (née Martyn), femme au foyer. Il a une sœur aînée, Lucinda. Très vite, alors qu\'il est âgé de six mois, ses parents emménagent en Australie dans la banlieue de Perth Warnbro, commune de Rockingham'),
(5, 'Saldana', 'Zoe', '1978-06-18', 'Née de parents originaires de République dominicaine et de Porto Rico, elle grandit dans le Queens à New York. Quand elle a 9 ans, son père décède dans un accident de voiture. Elle repart alors avec sa mère et sa sœur en République dominicaine. Là, elle s\'inscrit dans une école de danse où elle s\'initie à un certain nombre de styles et notamment le ballet.');

-- --------------------------------------------------------

--
-- Table structure for table personne_film_jouer
--

CREATE TABLE IF NOT EXISTS personne_film_jouer (
  id int(11) NOT NULL AUTO_INCREMENT,
  nomRole varchar(100) NOT NULL,
  prenomRole varchar(100) NOT NULL,
  descriptionRole text NOT NULL,
  id_personne int(11) NOT NULL,
  id_film int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY id_film (id_film),
  KEY id_personne (id_personne)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table personne_film_jouer
--

INSERT INTO personne_film_jouer (id, nomRole, prenomRole, descriptionRole, id_personne, id_film) VALUES
(1, 'Dawson', 'Jack', 'Le 10 avril 1912, Rose embarque sur le Titanic à Southampton avec sa mère, Ruth DeWitt Bukater, son fiancé, Caledon Hockley, et leurs domestiques', 2, 2),
(2, 'DeWitt Bukater', 'Rose', 'dans un pub du port, quatre hommes disputent une partie de poker, dont l\'enjeu final devient les deux billets de traversée de 3e classe, sur le Titanic, misés par Olaf et Sven, deux immigrants Suédois. En remportant la partie, Jack et Fabrizio (son ami, un immigrant Italien) embarquent in extremis sur le paquebot, sans passer par le contrôle sanitaire, ni être enregistrés sur la liste des passagers.', 3, 2),
(3, 'Sully', 'Jake', 'Jake Sully est recruté pour faire partie du programme Avatar car il possède le même génotype que son frère jumeau, un scientifique participant au programme retenu après une longue formation mais qui vient d\'être assassiné par un voleur.', 4, 3),
(4, 'Neytiri', '', 'La Tsahik charge sa fille Neytiri d\'apprendre les usages Omaticaya à Jake et de le familiariser avec leur mode de vie', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table societeProduction
--

CREATE TABLE IF NOT EXISTS societeProduction (
  id int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table societeProduction
--

INSERT INTO societeProduction (id, nom) VALUES
(1, '20th Century Fox'),
(2, 'Paramount Pictures'),
(3, 'Lightstorm Entertainment'),
(4, 'Dune Entertainment'),
(5, 'Giant Studios'),
(6, 'Ingenious Film Partners');

--
-- Constraints for dumped tables
--

--
-- Constraints for table film
--
ALTER TABLE film
  ADD CONSTRAINT film_ibfk_1 FOREIGN KEY (id_producteur) REFERENCES personne (id) ON DELETE CASCADE;

--
-- Constraints for table film_genre
--
ALTER TABLE film_genre
  ADD CONSTRAINT film_genre_ibfk_1 FOREIGN KEY (id_film) REFERENCES film (id_film),
  ADD CONSTRAINT film_genre_ibfk_2 FOREIGN KEY (id_film) REFERENCES film (id_film) ON DELETE CASCADE,
  ADD CONSTRAINT film_genre_ibfk_3 FOREIGN KEY (id_genre) REFERENCES genre (id_genre) ON DELETE CASCADE;

--
-- Constraints for table film_societeProduction
--
ALTER TABLE film_societeProduction
  ADD CONSTRAINT film_societeproduction_ibfk_1 FOREIGN KEY (id_film) REFERENCES film (id_film) ON DELETE CASCADE,
  ADD CONSTRAINT film_societeproduction_ibfk_2 FOREIGN KEY (id_societeProduction) REFERENCES societeProduction (id) ON DELETE CASCADE;

--
-- Constraints for table personne_film_jouer
--
ALTER TABLE personne_film_jouer
  ADD CONSTRAINT personne_film_jouer_ibfk_1 FOREIGN KEY (id_film) REFERENCES film (id_film) ON DELETE CASCADE,
  ADD CONSTRAINT personne_film_jouer_ibfk_2 FOREIGN KEY (id_personne) REFERENCES personne (id) ON DELETE CASCADE,
  ADD CONSTRAINT personne_film_jouer_ibfk_3 FOREIGN KEY (id_film) REFERENCES film (id_film) ON DELETE CASCADE,
  ADD CONSTRAINT personne_film_jouer_ibfk_4 FOREIGN KEY (id_personne) REFERENCES personne (id) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
