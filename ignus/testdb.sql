-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 11:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clash_of_bands`
--

CREATE TABLE `clash_of_bands` (
  `serial no.` int(11) NOT NULL,
  `participant_name` varchar(50) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `clash_of_bands`
--

INSERT INTO `clash_of_bands` (`serial no.`, `participant_name`, `participant_id`) VALUES
(1, 'abc', 3),
(2, 'test', 4),
(3, 'hgfh', 5);

-- --------------------------------------------------------

--
-- Table structure for table `dance`
--

CREATE TABLE `dance` (
  `serial_number` int(11) NOT NULL,
  `participant_name` varchar(50) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dance`
--

INSERT INTO `dance` (`serial_number`, `participant_name`, `participant_id`) VALUES
(1, 'abc', 3),
(2, 'test', 4);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_name` varchar(50) NOT NULL,
  `event_rules` text NOT NULL,
  `members` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_name`, `event_rules`, `members`) VALUES
('clash of bands', 'Rule', '5'),
('singing', 'rules', '1'),
('dance', '1\r\n2', '3'),
('event name', 'rule 1 \r\nrule 2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `singing`
--

CREATE TABLE `singing` (
  `serial number` int(11) NOT NULL,
  `participant_name` varchar(50) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singing`
--

INSERT INTO `singing` (`serial number`, `participant_name`, `participant_id`) VALUES
(1, 'milind', 2),
(2, 'abc', 3),
(3, 'test', 4),
(4, 'hgfh', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'Participant'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'HARSHIT', 'harshit2996@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Administrator'),
(2, 'milind', 'singhal.1@gnail.com', '1214682d2fb169239385f7aa5a2db09e', 'Participant'),
(3, 'abc', 'abc@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Participant'),
(4, 'test', 'test@abc.com', 'e01b9ad913f0274a0e84c3015858e6dc', 'Participant'),
(5, 'hgfh', 'wesag@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Participant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clash_of_bands`
--
ALTER TABLE `clash_of_bands`
  ADD PRIMARY KEY (`serial no.`);

--
-- Indexes for table `dance`
--
ALTER TABLE `dance`
  ADD PRIMARY KEY (`serial_number`),
  ADD KEY `participant_name` (`participant_name`,`participant_id`),
  ADD KEY `participant_name_2` (`participant_name`,`participant_id`);

--
-- Indexes for table `singing`
--
ALTER TABLE `singing`
  ADD PRIMARY KEY (`serial number`),
  ADD UNIQUE KEY `serial no.` (`participant_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clash_of_bands`
--
ALTER TABLE `clash_of_bands`
  MODIFY `serial no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dance`
--
ALTER TABLE `dance`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `singing`
--
ALTER TABLE `singing`
  MODIFY `serial number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
