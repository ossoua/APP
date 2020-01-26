-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 26, 2020 at 02:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving_aces`
--

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `id_box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`id_box`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `date`, `nom`, `value`, `id_user`) VALUES
(4, '2019-11-18', 'Temperature du corps', '37', 4),
(5, '2019-11-18', 'Temperature du corps 2', '38', 4),
(6, '2019-12-09', 'Réaction à un stimulus visuel', '37(ms)', 4),
(7, '2019-12-09', 'Temps de réaction à un stimulus visuel', '34(ms)', 8),
(8, '2019-12-17', 'Température du corps', '38°', 8),
(9, '2020-01-01', 'Température du corps', '35,5', 12),
(10, '2020-01-03', 'Température du corps', '35,7', 12),
(11, '2020-01-08', 'Température du corps', '35,6', 12),
(12, '2020-01-10', 'Température du corps', '36,1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `data_test`
--

CREATE TABLE `data_test` (
  `id_data_test` int(11) NOT NULL,
  `id_data` int(11) NOT NULL,
  `id_test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `FAQ`
--

CREATE TABLE `FAQ` (
  `id_question` int(11) NOT NULL,
  `question` text NOT NULL,
  `date` date NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FAQ`
--

INSERT INTO `FAQ` (`id_question`, `question`, `date`, `answer`) VALUES
(1, 'Où trouver le résultat de mes tests ?', '2020-01-25', 'Pour trouvez les résultats de vos tests, rendez-vous sur l\'espace client en haut à droite !'),
(2, 'Comment devenir Administrateur ?', '2020-01-25', 'Pour devenir Administrateur, rendez-vous sur Espace client puis Profil. Un lien apparaîtra pour faire votre demande de droits Administrateur.'),
(3, 'Comment obtenir mes données psychotechniques sous forme de graphique ?', '2020-01-25', 'Pour obtenir le résultat de vos tests sous forme graphique, rendez-vous sur votre Espace Client et cliquer sur le bouton graphiques dans votre page de Tests !');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id_sensor` int(11) NOT NULL,
  `id_test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `access_code` int(11) NOT NULL,
  `password` varchar(88) NOT NULL,
  `name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `access_code`, `password`, `name`, `first_name`, `adress`, `mail`, `phone`, `admin`) VALUES
(4, 10000000, '$2y$10$qalRnWcNt8OgCvB49odZo.y35hyQzdaGm1o6g8REabBCXPcsjrzEy', 'Martinez', 'Theo', '64 rue Dutot', 'theomartinez2@gmail.com', '', 1),
(8, 10000007, '$2y$10$GCfw6MjhdZ.k9rTXECDncOZto00ELHN6qYfP55COoeoM47ITDgatS', 'De Miguel', 'Amaury', '64 rue Dutot', 'amaurydemiguel@gmail.com', '', 0),
(12, 10000002, '$2y$10$Q9a9wwC1sRKvHpsOxsIJIeCvhHFluirJIgEVpawHabrgyiSWeG.0m', 'Martinez', 'Théo', '64 rue Duto', 'kureji35006@gmail.com', '', 0),
(62, 10000010, '', '', '', '', '', '', 0),
(63, 10000011, '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id_box`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_test`
--
ALTER TABLE `data_test`
  ADD PRIMARY KEY (`id_data_test`);

--
-- Indexes for table `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id_sensor`),
  ADD KEY `id_test` (`id_test`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD UNIQUE KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `id_boitier` (`id_box`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `id_box` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `FAQ`
--
ALTER TABLE `FAQ`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `sensor`
--
ALTER TABLE `sensor`
  ADD CONSTRAINT `sensor_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`id_test`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `test_ibfk_2` FOREIGN KEY (`id_box`) REFERENCES `box` (`id_box`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
