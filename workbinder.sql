-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 04:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workbinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(20) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `client_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_email`) VALUES
(1, 'a', 'a@gmail.com'),
(2, 'b', 'b@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobID` int(3) NOT NULL,
  `jobTitle` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `jobTag` varchar(50) NOT NULL,
  `budget` int(5) NOT NULL,
  `jobDetails` varchar(150) NOT NULL,
  `delivery` date NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `jobTitle`, `category`, `location`, `jobTag`, `budget`, `jobDetails`, `delivery`, `contact`) VALUES
(45, '  Movie Making  ', 'Design', '  Dhaka  ', '  Illustrator, Premiere  ', 4000, '  Create a short film about eve-teasing.  ', '2020-10-12', 'mkshovan@gmail.com'),
(48, ' Hell ', 'Writing', ' iran ', ' bombering', 60000, 'destroy USA', '2020-10-10', 'mkshovan@gmail.com'),
(53, 'Crafting', 'Craft-Quill', 'Bandarban', 'Paper Folding, Origami', 4000, 'Need to make OLAF', '2020-02-01', 'tithi@gmail.com'),
(55, ' Tuition Class 12 ', 'Tuition', ' Chittagong ', ' SSC Science ', 5000, ' 3 days. All subjects. ', '2020-10-10', 'mk@gmail.com'),
(56, 'Tuition', 'Tuition', 'London', 'HSC Sci', 5000, 'ls,ekjg7ws,emjnys,okjhld,kmj sijhtretksmijeui kmjn', '2020-10-10', 'ahasun@dasjd.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `project_id` int(20) NOT NULL,
  `doer_id` int(20) NOT NULL,
  `client_id` int(20) NOT NULL,
  `client_pay_status` int(10) NOT NULL,
  `work_status` varchar(40) NOT NULL,
  `budget` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `description`) VALUES
(3, 'alj;df', 'sd;ljflaksj;dflkjasd'),
(4, 'hey', 'hey'),
(7, 'sdjh.', ''),
(9, 'naimur978@gmail.com', 'hey there!'),
(10, 'naimur978@gmail.com', 'hey'),
(11, 'naimur978@gmail.com', 'sjhflkjsa'),
(14, 'naimur978@gmail.com', 'habijabi'),
(15, 'naimur978@gmail.com', 'Not that serious...'),
(16, 'naimur978@gmail.com', 'not a big deal...\n');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`, `phone`) VALUES
('abc', 'abc@yahoo.com', '7396611f8cddf4160b8d6708bb930e0ebf08ded7', '7624836284623'),
('ahasunul kader', 'ahasun@gmail.com', 'b8eadb43a433af9567eff426b94c4a6973dbc59c', '74587684638746'),
('Botol Akram', 'chui@hotmail.com', '7396611f8cddf4160b8d6708bb930e0ebf08ded7', ''),
('naimur', 'naimur978@gmail.com', 'bcd2b338bfe4cb405b9158d462cbc7bed02d0498', '73264873246'),
('naimur', 'naimur@gmail.com', '7396611f8cddf4160b8d6708bb930e0ebf08ded7', ''),
('hassan sakeer', 'sakeernovember@gmail.com', '2b7a7d643064af6da74c24c91093fae7e1f7fbfe', '632846324'),
('dsf', 'sjdafh@gmail.com', '9c36e6f7f8565196a12ce45c34ca159aac3557be', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
