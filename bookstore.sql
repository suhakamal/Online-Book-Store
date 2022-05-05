-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 07:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET utf16 COLLATE utf16_general_ci;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `BookName` varchar(50) DEFAULT NULL,
  `Author` varchar(70) DEFAULT NULL,
  `Catogary` varchar(20) DEFAULT NULL,
  `SubCatogary` varchar(20) DEFAULT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Price` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `BookName`, `Author`, `Catogary`, `SubCatogary`, `Image`, `Price`) VALUES
(1, 'Ringworld', 'Larry Nive', 'Fiction', NULL, 'Ringworld.png', 15),
(2, 'The Time Machine', 'Herbert Ge', 'Fiction', NULL, 'Time.jpg', 20),
(3, 'Nineteen Eighty-Four', 'George Orw', 'Fiction', NULL, 'nineteen.jpg', 30),
(4, 'The Skylark of Space', 'E. E. Smit', 'Fiction', NULL, 'sky.jpg', 30),
(5, 'The economists\' hour ', 'binyamin appelbaum', 'Political', NULL, 'hour.jpg', 45),
(6, 'Shortest way home ', 'pete buttigieg', 'Political', NULL, 'shortest.jpg', 30),
(7, 'The meritocracy trap ', 'Daniel markovits ', 'Political', NULL, 'trap.jpg', 20),
(8, 'Audience of one', 'James poniewozik', 'Political', NULL, 'audiance.jpg', 25),
(9, 'The Dimond Eye ', 'kate quinn', 'Historical ', NULL, 'eye.jpg', 40),
(10, 'The Magnolia palace ', 'Fiona Davis ', 'Historical ', NULL, 'palace.jpg', 53),
(11, 'violeta ', 'isable allende ', 'Historical', NULL, 'violeta.jpg', 55),
(12, 'The Tobacco wives ', 'adele myers ', 'Historical ', NULL, 'wives.jpg', 50),
(17, 'Madeline', 'Ludwig Bemelmans', 'Children', 'Pictured Stories', 'mad.jpg', 19),
(18, 'The Sad Rabbit', 'john doe', 'Children', 'Pictured Stories', 'sad.jpg', 15),
(19, 'The Cat In The Hat', 'Hawa Musa', 'Children', 'Non-Pictured Stories', 'cat.jpg', 23),
(20, 'Tom and Jerry', 'Kingsman', 'Children', 'Non-Pictured Stories', 'tom.jpg', 34);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `BookName` varchar(10) DEFAULT NULL,
  `quantaty` int(3) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(10) DEFAULT NULL,
  `LastName` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(1, 'Suha', 'Kamal', '', ''),
(2, 'Suha', 'Kamal', '', ''),
(3, 'Suha', 'Kamal', '', ''),
(4, 'Suha', 'Kamal', '', ''),
(5, 'Suha', 'Kamal', 'suha@gmail.com', '123'),
(6, 'Suha', 'Kamal', 'wiam@gmail.com', 'qwe'),
(7, 'kamal', 'abuzaid', 'kamal@abuzaid', 'uty'),
(8, 'Samah', 'Samah', 'samah@gmail.com', 'soso'),
(9, 'Samah', 'Kamal', 'samo@gmail.com', '123'),
(10, NULL, NULL, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
