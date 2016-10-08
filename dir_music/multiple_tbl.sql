-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 05:57 PM
-- Server version: 5.6.30-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiple_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_details`
--

CREATE TABLE `album_details` (
  `id` int(3) NOT NULL,
  `a_title` varchar(32) NOT NULL,
  `a_date_of_release` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_details`
--

INSERT INTO `album_details` (`id`, `a_title`, `a_date_of_release`) VALUES
(1, 'Azonto', '2016-10-04'),
(2, 'Adoma', '2016-10-19'),
(3, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `artist_details`
--

CREATE TABLE `artist_details` (
  `id` int(3) NOT NULL,
  `a_firstname` varchar(32) NOT NULL,
  `a_lastname` varchar(32) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_details`
--

INSERT INTO `artist_details` (`id`, `a_firstname`, `a_lastname`, `dob`) VALUES
(1, 'Amos', 'Yunusa', '1984-02-03'),
(2, 'Hassan', 'Abubakar', '1989-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `song_details`
--

CREATE TABLE `song_details` (
  `id` int(3) NOT NULL,
  `song_name` varchar(32) NOT NULL,
  `song_type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song_details`
--

INSERT INTO `song_details` (`id`, `song_name`, `song_type`) VALUES
(1, 'Kilomba', 'Jazz'),
(2, 'Manhunta', 'R&B'),
(3, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_details`
--
ALTER TABLE `album_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_details`
--
ALTER TABLE `artist_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song_details`
--
ALTER TABLE `song_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_details`
--
ALTER TABLE `album_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `artist_details`
--
ALTER TABLE `artist_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `song_details`
--
ALTER TABLE `song_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
