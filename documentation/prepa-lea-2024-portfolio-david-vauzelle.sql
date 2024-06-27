-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 10:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prepa-lea-2024-portfolio-david-vauzelle`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `nom` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `telephone`, `message`) VALUES
(1, 'Dupont', 'nicolas.dupont@exemple.fr', '0710203040', 'Petit test pour vérifier le bon fonctionnement du formulaire de contact.'),
(3, 'Durand', 'alain.durand@exemple.fr', '0610203040', 'Bonjour,\r\nVotre profil est intéressant, êtes vous toujours à la recherche d\'une alternance ?\r\nCordialement.'),
(4, 'Martin', 'eric.martin@exemple.fr', '0600000000', 'Bonjour,\r\nVotre porfolio n\'est pas totalement fini, mais vous êtes sur la bonne voie.\r\nCourgage à vous !\r\nCordialement.');

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int NOT NULL,
  `titre` varchar(250) NOT NULL,
  `description-accueil` text NOT NULL,
  `description-detail` text NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alt` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description-accueil`, `description-detail`, `image`, `alt`) VALUES
(1, 'Sélection de mes jeux vidéo préférés !', 'Projet réalisé pendant ma pré-qualification \"Développeur web / web mobile\" à L\'Ecole Atypique.\r\n\r\n', 'L\'idée de ce projet était de réaliser un site sur lequel je présente une sélection de mes jeux vidéo préférés.\r\n\r\nLa page d\'accueil présente brièvement les jeux listés.\r\n\r\nChaque page de jeu est structurée de la même façon de sorte à retrouver :\r\n- Informations\r\n- Description\r\n- Vidéos\r\n- Galerie d\'images\r\n\r\nJ\'ai également ajouté une page contact depuis laquelle les visiteurs du site peuvent m\'envoyer des commentaires.\r\n\r\nProjet réaliser en à l\'aide des outils :\r\n- VS Code\r\n- GitHub\r\n- Laragon\r\n\r\net avec les langages :\r\n- HTML5\r\n- CSS3\r\n- PHP', './images/projets/photo-1-projet-1.jpg', 'Une image de présentation d\'un projet'),
(3, 'Projet test', 'azerty', 'dbgfjdgdjtdktfj', NULL, NULL),
(5, 'Projet Test 2', 'Deuxième projet test.', 'Ce projet à pour simple but de vérifier que l\'ajout d\'une réalisation est fonctionnelle en \"Admin\".', NULL, NULL),
(6, 'Projet Test 2', 'Alors la modification', 'ezfz', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
