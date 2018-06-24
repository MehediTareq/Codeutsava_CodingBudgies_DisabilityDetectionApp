-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 10:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disability`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `usern` varchar(20) NOT NULL,
  `passwrd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `usern`, `passwrd`) VALUES
(1, 'doc1', 'docc');

-- --------------------------------------------------------

--
-- Table structure for table `mental`
--

CREATE TABLE `mental` (
  `id` int(11) NOT NULL,
  `usern` varchar(20) NOT NULL,
  `self` int(11) NOT NULL,
  `inter` int(11) NOT NULL,
  `commun` int(11) NOT NULL,
  `work` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `doi` int(11) NOT NULL,
  `global` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mental`
--

INSERT INTO `mental` (`id`, `usern`, `self`, `inter`, `commun`, `work`, `total`, `doi`, `global`) VALUES
(17, 'akaa', 2, 2, 2, 3, 9, 2, 11),
(20, 'akank', 2, 1, 2, 1, 6, 3, 9),
(21, 'akank', 2, 2, 2, 2, 8, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstn` varchar(16) NOT NULL,
  `lastn` varchar(16) NOT NULL,
  `usern` varchar(20) NOT NULL,
  `pswrd` varchar(16) NOT NULL,
  `gndr` varchar(16) NOT NULL,
  `email` varchar(320) NOT NULL,
  `dates` date NOT NULL,
  `mobilen` varchar(320) NOT NULL,
  `street` int(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstn`, `lastn`, `usern`, `pswrd`, `gndr`, `email`, `dates`, `mobilen`, `street`, `city`, `state`) VALUES
(4, 'akanksha', 'SINGH', 'akank', 'akanksha', 'female', 'akankshasingh22397@gmail.com', '2018-02-15', '9589903129', 5, 'RAIPUR', 'CHHATTISGARH'),
(8, 'annu', 'soni', 'akaa', 'annuuuuu', 'female', 'annu@gmail.com', '2018-02-15', '8962469267', 5, 'raipur', 'ch');

-- --------------------------------------------------------

--
-- Table structure for table `visual`
--

CREATE TABLE `visual` (
  `id` int(11) NOT NULL,
  `usern` varchar(20) NOT NULL,
  `leftp` int(11) NOT NULL,
  `rightp` int(11) NOT NULL,
  `per` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visual`
--

INSERT INTO `visual` (`id`, `usern`, `leftp`, `rightp`, `per`) VALUES
(2, 'akank', 98, 98, 98.14),
(3, 'akank', 100, 100, 100),
(4, 'akank', 100, 100, 100),
(5, 'akank', 100, 100, 100),
(6, 'akank', 100, 100, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passwrd` (`passwrd`),
  ADD UNIQUE KEY `usern` (`usern`);

--
-- Indexes for table `mental`
--
ALTER TABLE `mental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobilen` (`mobilen`),
  ADD UNIQUE KEY `usern` (`usern`);

--
-- Indexes for table `visual`
--
ALTER TABLE `visual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mental`
--
ALTER TABLE `mental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `visual`
--
ALTER TABLE `visual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
