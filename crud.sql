-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2025 at 10:03 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `Ph` varchar(13) NOT NULL,
  `fee` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `age`, `Ph`, `fee`) VALUES
(8, 'Yasmeen', 45, '03703491729', 0),
(10, 'Mahnoor', 45, '0310205984', 1),
(11, 'Hassan', 17, '03703491729', 0),
(13, 'Huzaifa', 14, '03102053044', 1),
(21, 'Yaseen', 15, '03102053044', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `no` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `no`, `password`, `gender`) VALUES
(13, 'Hassan', 'mhassansherazi152@gmail.com', '03703491729', 'Wellcom 4', 1),
(14, 'Huzaifa', 'huzaifa@gmail.com', '03145612311', 'admin', 0),
(15, 'Rafay', 'rafay@gmail.com', '+92561164161', '$2y$10$5r3YcVH/3vfSkIKRUJGJB./7aBbirbEHlawFvJ/4hqqyVp8zudyS6', 1),
(16, 'Hadi', 'hadi@gmail.com', '03102053044', '$2y$10$l4kkhVucBTmXWCc6MiD72eMT6sjstc3ZjuZPfmnSt0LHNkZd0TzcS', 1),
(17, 'razak', 'razak@gmail.com', '03205695687', '$2y$10$G11CLsYx5x./GsEXtyhT9esoQxHX7vQLeKB.TE6kofZoWkuQHUlfm', 1),
(18, 'Ayesha', 'ayesha@gmail.com', '03205694536', '$2y$10$rp2lnM/62eeFzwgQyeUoU.20PlV.alDkG4uBSqsszi4uaXDodahhO', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
