-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 03:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fav_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `release_year` int(255) DEFAULT NULL,
  `rating` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `genre`, `author`, `release_year`, `rating`) VALUES
(1, 'WALL-E', 'Family/Sci-fi', 'Andrew Stanton', 2008, 8),
(2, 'The Maze Runner', ' Sci-fi/Action', 'James Dashner', 2014, 7),
(3, 'Tinker Bell', 'Family/Adventure', 'Bradley Raymond', 2008, 7),
(4, 'Spirited Away', ' Fantasy/Adventure', ' Hayao Miyazaki', 2001, 9),
(5, 'My Neighbor Totoro', 'Fantasy/Adventure', ' Hayao Miyazaki', 1986, 9),
(6, 'The Secret Life of Pets', 'Family/Comedy', ' Chris Renaud', 2016, 7),
(7, 'Hotel Transylvania', 'Family/Comedy', 'Genndy Tartakovsky', 2012, 7),
(8, 'Minions', 'Family/Adventure', ' Pierre Coffin, Kyle Balda', 2015, 6),
(9, 'Klaus', 'Family/Comedy', ' Sergio Pablos', 2019, 8),
(10, 'The Silence', 'Horror/Sci-fi', ' John R. Leonetti', 2019, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
