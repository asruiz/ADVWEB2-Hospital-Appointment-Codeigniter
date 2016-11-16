-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 03:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(12) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `specialization` varchar(60) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `day` varchar(60) NOT NULL,
  `fromtime` varchar(128) NOT NULL,
  `totime` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `fname`, `lname`, `email`, `location`, `specialization`, `facility`, `day`, `fromtime`, `totime`, `password`) VALUES
(9, 'Meat', 'Loaf', 'meatloaf@gmail.com', 'Caloocan', '', '', '', '00:00:00', '', '202cb962ac59075b964b07152d234b70'),
(8, 'Fons', 'Tison', 'fons@gmail.com', 'Makati', '', '', '', '00:00:00', '', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(7, 'Denzel', 'Oribiana', 'denzel@gmail.com', 'Caloocan', '', '', '', '00:00:00', '', '202cb962ac59075b964b07152d234b70'),
(16, 'Angel', 'Lau', 'als@gmail.com', 'Manila', 'Cardiologist', 'St. Lukes Hospital', 'Wednesday', '13:00:00', '02:00', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(6, 'Jairus', 'Roguel', 'jai@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Hello', 'Boydon', 'boogie@gmail.com', '0568371ab6ffcbbbba9382da07cd2600'),
(4, 'Jeff', 'Gonzales', 'jeff@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
