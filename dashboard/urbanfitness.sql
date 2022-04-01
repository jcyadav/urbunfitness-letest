-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 12:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanfitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodtracker`
--

CREATE TABLE `foodtracker` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodtracker`
--

INSERT INTO `foodtracker` (`id`, `user_id`, `food_name`, `unit`, `date`, `time`) VALUES
(8, 1, 'Apples', '250g', '2022-04-01', '06:55:00'),
(9, 2, 'Egg', '2pc', '2022-04-01', '05:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `sleeptracker`
--

CREATE TABLE `sleeptracker` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `sleep_time` time NOT NULL,
  `wakeup_time` time NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sleeptracker`
--

INSERT INTO `sleeptracker` (`id`, `user_id`, `sleep_time`, `wakeup_time`, `date`, `time`) VALUES
(6, 1, '00:00:00', '06:00:00', '2022-04-01', '06:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`) VALUES
(1, 'Jaichand ', 'yadavjaichand31@gmail.com', '43b673d008bb4f6852f181b2a6dec86f', '8917763609'),
(2, 'JC', 'jaichandy037@gmail.com', '4ab871f5d2cfae9f6dc3d26338a4692a', '9026176583');

-- --------------------------------------------------------

--
-- Table structure for table `watertracker`
--

CREATE TABLE `watertracker` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `water_glass` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watertracker`
--

INSERT INTO `watertracker` (`id`, `user_id`, `water_glass`, `date`, `time`) VALUES
(7, 1, 'Amul Milk', '2022-04-01', '06:00:00'),
(8, 2, 'Bislery Water', '2022-04-01', '06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `workoutracker`
--

CREATE TABLE `workoutracker` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `workout_name` varchar(255) NOT NULL,
  `workout_time` time NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workoutracker`
--

INSERT INTO `workoutracker` (`id`, `user_id`, `workout_name`, `workout_time`, `date`, `time`) VALUES
(2, 1, 'Jeam', '05:00:00', '2022-04-01', '04:56:00'),
(3, 2, 'Running', '04:59:00', '2022-04-01', '05:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodtracker`
--
ALTER TABLE `foodtracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleeptracker`
--
ALTER TABLE `sleeptracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watertracker`
--
ALTER TABLE `watertracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workoutracker`
--
ALTER TABLE `workoutracker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodtracker`
--
ALTER TABLE `foodtracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sleeptracker`
--
ALTER TABLE `sleeptracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `watertracker`
--
ALTER TABLE `watertracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `workoutracker`
--
ALTER TABLE `workoutracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
