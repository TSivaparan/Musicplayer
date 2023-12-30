-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 01:48 AM
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
-- Database: `music_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` enum('Tamil','Sinhala','English','Others') NOT NULL DEFAULT 'Others',
  `artist` varchar(100) NOT NULL,
  `album` varchar(100) NOT NULL,
  `music` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `user_id`, `name`, `language`, `artist`, `album`, `music`) VALUES
(10, 1, 'Mathaka amathakailu', 'Sinhala', 'Thiwanka Dilshan', '1559484575_807847055606544_hirumusic.jpg', 'Mathaka Amathakailu-Thiwanka Dilshan-www.hirufm.lk.mp3'),
(11, 2, 'Dewangana', 'Sinhala', 'Kanchana Anuradhi', 'download.jfif', 'Hada Nim Naden Nadhen (Dewangana Aa) - Kanchana Anuradhi, Supun Perera [www.sangeethe.com].mp3'),
(12, 1, 'Thenmoli', 'Tamil', 'Anirudth', 'thirusitambalam.jfif', 'Thenmozhi-MassTamilan.dev.mp3'),
(13, 2, 'Rowdy Baby', 'Tamil', 'Yuvan', 'download (1).jfif', 'Rowdy-Baby-MassTamilan.org.mp3'),
(14, 1, 'I AM Rider ', 'English', 'Eren.E', 'e466e05ccae0d7e02dba04d6600f3d1f.jpg', 'I-Am-a-Rider(PaglaSongs).mp3'),
(15, 1, 'Perfect', 'English', 'Ed Sheeran', 'artworks-000312036720-6amh2o-t500x500.jpg', 'perfect.mp3'),
(16, 1, 'Tum Hi Ho', 'Others', 'Ankit Tiwani', 'download (3).jfif', 'Tum-Hi-Ho-MassTamilan.io.mp3'),
(22, 1, 'Thai-kelavi', 'Tamil', 'Anirudth', 'thirusitambalam.jfif', 'Thaai-Kelavi-MassTamilan.dev.mp3'),
(23, 2, 'Shape of you', 'English', 'Ed Sheeran', 'download (2).jfif', 'Ed_Sheeran_-_Shape_Of_You.mp3'),
(24, 2, 'Ahinsakawi', 'English', 'Dimanka', 'Ahinsakawi-Dimanka-Wellalage.jpg', 'Ahinsakawi-අහිංසකාවී-Dimanka-Wellalage_.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`) VALUES
(1, 'siva', '$2y$10$lsFeX2EDDDOVeRwFs/UDgefB4SnNsQKoVHXIWAo0nwh0gcD4tBUOO', 'siva@gmail.com'),
(2, 'vithu', '$2y$10$cqXaVh5OfhaFZV08N21Meu96qHlPLi.oiife9j9bYEzJKCXOV7TCy', 'vithu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
