-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2016 at 08:33 AM
-- Server version: 5.6.30-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_album`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_info`
--

CREATE TABLE `album_info` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(32) NOT NULL,
  `album_title` varchar(32) NOT NULL,
  `song_name` varchar(32) NOT NULL,
  `music_type` varchar(32) NOT NULL,
  `album` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table is for My Music Database Album';

--
-- Dumping data for table `album_info`
--

INSERT INTO `album_info` (`id`, `artist_name`, `album_title`, `song_name`, `music_type`, `album`, `date`) VALUES
(51, 'Oyelade Elijah', 'Spirit Pray', 'Spirit Pray', 'R&B', 'True Legend 2010 DVDRip XviD-sailo1_arc.avi', '2016-10-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_info`
--
ALTER TABLE `album_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_info`
--
ALTER TABLE `album_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
