-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 14 juin 2024 à 14:19
-- Version du serveur : 8.0.37
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `feaRIEND_crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(225) NOT NULL,
  `price` int NOT NULL,
  `discount` tinyint(1) NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `name`, `content`, `category`, `price`, `discount`, `images`) VALUES
(3, 'MousTigre', 'Découvrez l\'ultime créature exotique pour les amateurs de sensations fortes et de l\'impossible à ignorer : le Moustigre du Bengal ! Imaginez un Bengal majestueux, avec la grâce et la puissance d\'un tigre, combiné à la délicatesse d\'un moustique... de 2,5 mètres de long. Oui, vous avez bien lu.', 'animaux dangereux', 2300, 0, ''),
(4, 'Chagon', 'La Terreur Miniature de Vos Rêves! Imaginez un chat domestique typique. Maintenant, donnez-lui des écailles scintillantes, une queue crénelée et la capacité de cracher de minuscules flammes. Ce prédateur de poche combine l\'élégance féline avec le potentiel destructeur d\'un dragon, le tout dans un format compact et adorablement mortel. Attention : Le Chat-Dragon nécessite un extincteur à portée de main en tout temps. Nous déclinons toute responsabilité pour les meubles calcinés ou les sourcils brûlés.', 'animaux domestiques', 2100, 0, ''),
(5, 'Ligorille', 'Le Gardien Ultime de Votre Domaine!\r\nImaginez la puissance majestueuse d\'un lion combinée à la force brute d\'un gorille. Ce colosse hybride est la solution idéale pour ceux qui croient que la meilleure défense est une attaque féroce et poilue. Avec une crinière royale et des muscles à faire pâlir n\'importe quel culturiste, le Ligorille est là pour dissuader les intrus, les curieux et même les oiseaux trop bruyants.', 'animaux de sécurités', 4000, 0, ''),
(6, 'Rhinorque', 'Votre Nouveau Compagnon de Dévastation! Le Rhinorque est parfait pour ceux qui pensent qu\'un peu de chaos quotidien ajoute du piquant à la vie. Avec sa taille titanesque et son appétit insatiable, il vous garantit des journées pleines d\'action et des nuits... eh bien, des nuits où vous dormirez les yeux grands ouverts.', 'animaux dangereux', 13000, 1, ''),
(7, 'eiefjpiejf', 'eifj oiejfoiejf jeojf oizej fiozeiofj eozijf oiejfoi jezofj ioezjfpi jzepfjp ezjfpij pjfepizj fpiejpif jezpj fpiezjfpi ezjfpi jpiezfj pijezpifj pezjf piezjfpi jezpifj ezpfj piejzp fjezpij fpiezjfp jezpifj pezijf pizejf piezjfpij ezpifjpzej fpijez pjifj izejf ipzpzfj.', 'animaux dangereux', 546, 1, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
