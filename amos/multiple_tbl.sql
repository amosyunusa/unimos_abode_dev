-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2016 at 12:08 AM
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
  `a_date_of_release` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_details`
--

INSERT INTO `album_details` (`id`, `a_title`, `a_date_of_release`) VALUES
(1, 'Amandalla', '10/18/2016'),
(2, 'Dapas', '10/24/2016'),
(3, 'Senegalea', '10/19/2016'),
(4, '', ''),
(5, 'koloma', '10/12/2016'),
(6, 'sss', '10/12/2016');

-- --------------------------------------------------------

--
-- Table structure for table `artist_details`
--

CREATE TABLE `artist_details` (
  `id` int(3) NOT NULL,
  `a_firstname` varchar(32) NOT NULL,
  `a_lastname` varchar(32) NOT NULL,
  `dob` text NOT NULL,
  `file` blob NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_details`
--

INSERT INTO `artist_details` (`id`, `a_firstname`, `a_lastname`, `dob`, `file`, `type`, `size`) VALUES
(1, 'Amos', 'Yunusa', '10/25/2016', '', '', 0),
(2, 'Sema', 'Hadimu', '10/12/2016', '', '', 0),
(3, 'Remin', 'Aluko', '10/19/2016', '', '', 0),
(4, '', '', '', '', '', 0),
(5, 'Amos', 'Yunusa', '10/12/2016', '', '', 0),
(6, 'ddd', 'Sule', '10/12/2016', '', '', 0);

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
(1, 'Sonana', 'Jazz'),
(2, 'Duke', 'New Age'),
(3, 'Jamaica Boy', 'Country'),
(4, '', ''),
(5, 'kkkk', 'Blues'),
(6, 'aaaa', 'R&amp;B');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `artist_details`
--
ALTER TABLE `artist_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `song_details`
--
ALTER TABLE `song_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
