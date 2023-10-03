-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 01:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_besar1`
--

-- --------------------------------------------------------

--
-- Table structure for table `complete`
--

CREATE TABLE `complete` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `ratting` varchar(100) NOT NULL,
  `episode` varchar(500) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complete`
--

INSERT INTO `complete` (`id`, `judul`, `ratting`, `episode`, `gambar`) VALUES
(1, 'Genjitsu Shugi Yuusha no Oukoku Saikenki Part 2', '7,47', '13 episode', 'comp1.jpg'),
(2, 'slow loop', '7,25', '12 episode', 'comp2.jpg'),
(4, 'futsal boys', '76', '12 episode', 'comp3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `top10as`
--

CREATE TABLE `top10as` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `ratting` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top10as`
--

INSERT INTO `top10as` (`id`, `gambar`, `judul`, `genre`, `ratting`, `status`, `deskripsi`) VALUES
(4, 'fm.jpg', 'Fullmetal Alchemist: Brotherhood', ' Action, Adventure, Drama, Fantasy, Military, shounen', '9.14', 'complete', ''),
(5, 'gin.jpg', 'Gintama Season 4', ' Action, Comedy, Sci-Fi,  Historical, Parody, Samurai, shounen', '9.08', 'complete', ''),
(6, 'steins.jpg', 'Steins;Gate', 'Drama, Sci-Fi, Suspense,  Psychological, Time Travel', '9.08', 'complete', ''),
(7, 'singeki.jpg', 'Shingeki no Kyojin Season 3 Part 2', 'Action, Drama, Gore, Military, Survival', '9.07', 'complete', ''),
(8, 'gin2.jpg', 'Gintama Season 2', 'Action, Comedy, Sci-Fi, Historical, Parody, Samurai', '9.05', 'complete', ''),
(9, 'hxh.jpg', 'Hubter X Hunter', ' Action, Adventure, Fantasy, shounen', '9.05', 'complete', ''),
(10, 'fruits.jpg', 'Fruits Basket: The Final', 'Drama, Romance, Supernatural, shoujo', '9.04', 'complete', ''),
(11, 'gine.jpg', 'Gintama\': Enchousen', 'Action, Comedy, Sci-Fi,  Gag Humor, Historical, Parody, Samurai, shounen', '9.04', 'complete', ''),
(12, 'gintf.jpg', 'Gintama: The Final', ' Action, Comedy, Drama, Sci-Fi, Gag Humor, Historical, Parody, Samurai', '9.04', 'complete', ''),
(13, 'sxf.jpg', 'Spy x Family', 'Action, Comedy, Childcare, Shounen', '9.04', 'ongoing', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'nikiniki', '$2y$10$2RoqErxSbKkX7tqnZKLjwuAGRTEcRfsZV1VMPh0bB4AkzTiCF.e66'),
(2, 'owner', '$2y$10$d7erXIp6zAu/DNQ/cs3UBuxGYYlxEGZGJkYKLjH7xQZmsWB9PLbzS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complete`
--
ALTER TABLE `complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top10as`
--
ALTER TABLE `top10as`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complete`
--
ALTER TABLE `complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `top10as`
--
ALTER TABLE `top10as`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
