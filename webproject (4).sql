-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 03:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `Rate` int(11) DEFAULT NULL,
  `GroupID` int(11) NOT NULL,
  `Photo_Name` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `First_Name`, `Last_Name`, `Email`, `Password`, `Gender`, `type`, `Rate`, `GroupID`, `Photo_Name`) VALUES
(81, 'adbbasab', 'ajdk', 'aaaa@admin.com', '111', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19.jpeg'),
(82, 'adbbasab', 'ajdk', 'aaaa@admin.com', '111', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19.jpeg'),
(83, 'aly', 'adsdad', 'aly@gmail.com', 'qqqq', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19 (1).jpeg'),
(84, 'aly', 'adsdad', 'aly@gmail.com', 'qqqq', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19 (1).jpeg'),
(85, 'aly', 'adsdad', 'aly@gmail.com', 'qqqq', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19 (1).jpeg'),
(86, 'aly', 'adsdad', 'aly@gmail.com', 'qqqq', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19 (1).jpeg'),
(87, 'aly', 'adsdad', 'aly@gmail.com', 'qqqq', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19 (1).jpeg'),
(88, 'aly', 'adsdad', 'aly@gmail.com', 'qqqq', 'Male', 'admin', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19 (1).jpeg'),
(89, 'ahmed', 'amr', 'masoreesha@yahoo.com', 'maso99', 'Male', 'admin', 0, 0, '3.jpg'),
(90, 'ahmed', 'amr', 'masoreesha@yahoo.com', 'maso99', 'Male', 'admin', 0, 0, '3.jpg'),
(91, 'ahmed', 'amr', 'masoreesha@yahoo.com', 'maso99', 'Male', 'admin', 0, 0, '3.jpg'),
(92, 'ahmed', 'amr', 'masoreesha@yahoo.com', 'maso99', 'Male', 'admin', 0, 0, '3.jpg'),
(93, 'mariam', 'kawa', 'mariam@admin.com', '11111', '', 'admin', 0, 0, '2.jpg'),
(94, 'mariam', 'aly', 'masoamr@gmail.com', '1111', '', 'admin', 0, 0, '2.jpg'),
(95, 'mariam', 'aly', 'masoamr@gmail.com', '1111', '', 'admin', 0, 0, '2.jpg'),
(96, 'ahmed', 'amr', 'masoreesha@yahoo.com', 'maso99', 'Male', 'admin', 0, 0, '3.jpg'),
(97, 'mariam', 'elkawa', 'mariam@admin.com', 'lalalalal', '', 'admin', 0, 0, '2.jpg'),
(98, 'xzzxzx', 'xzzxxz', 'aly@gmail.com', 'zxzxz', 'Male', 'admin', 0, 0, '2.jpg'),
(99, 'xzzxzx', 'xzzxxz', 'aly@gmail.com', 'zxzxz', 'Male', 'admin', 0, 0, '2.jpg'),
(100, 'maso', 'bbvbv', 'masoamr@gmail.com', '4444444', 'Male', 'admin', 0, 0, '2015-06-02 18.35.31.jpg'),
(101, 'abdelrahman', 'amr', 'boody@gmail.com', '11111', 'Male', 'user', 0, 0, 'logo1.jpg'),
(102, 'mariam', 'kawa', 'mariam@gmail.com', '1111', 'Female', 'user', 0, 0, 'IMG20190603004503.jpg'),
(113, 'Aly', 'Yasser', 'Yasser1423@yahoo.com', '12345678', 'male', 'hicker', 0, 0, 'WhatsApp Image 2020-11-28 at 11.44.19 (2)'),
(114, 'maso', 'Amr', 'ahmedmaso@gmail.com', '123', 'Male', 'user', 0, 0, 'WhatsApp Image 2021-02-11 at 14.57.17.jpeg'),
(115, 'ahmed', 'maso', 'ahmedmaso2000@gmail.com', '1234', 'Male', 'user', 0, 11, 'halfdome.jpg'),
(122, 'layla', 'ahmed', 'layla@gmail.com', '1212', 'Female', 'admin', 0, 0, 'avafem.jpg'),
(124, 'mohamed', 'sasa', 'sasamah@gmail.com', '12345', 'male', 'user', 5, 11, ''),
(125, 'heba', 'ahmed', 'heba@GMAIL.COM', '12345', 'female', 'user', NULL, 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `GroupID` int(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `country` varchar(20) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `Hicker` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`GroupID`, `place`, `datetime`, `country`, `photo`, `Hicker`) VALUES
(9, 'fayoum', '2021-02-14 13:47:00.000000', 'Egypt', '429028.jpg', ''),
(11, 'dahab', '2021-02-10 18:35:20.000000', 'egypt', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MessageId` int(11) NOT NULL,
  `RecieverId` int(11) NOT NULL,
  `SenderId` int(11) NOT NULL,
  `Message` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`MessageId`, `RecieverId`, `SenderId`, `Message`) VALUES
(1, 102, 114, 'hi'),
(2, 114, 102, 'Hi There!');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `First_Name` varchar(21) NOT NULL,
  `Last_Name` varchar(21) NOT NULL,
  `Amount` int(21) NOT NULL,
  `Product` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `UserId`, `First_Name`, `Last_Name`, `Amount`, `Product`) VALUES
(118, 114, 'maso', 'Amr', 220, 'fayoum'),
(119, 114, 'maso', 'Amr', 800, 'alexandria');

-- --------------------------------------------------------

--
-- Table structure for table `profileimages`
--

CREATE TABLE `profileimages` (
  `id` int(11) NOT NULL,
  `dataemail` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ImageUserId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `GroupID` (`GroupID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageId`),
  ADD KEY `RecieverId` (`RecieverId`),
  ADD KEY `SenderId` (`SenderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `profileimages`
--
ALTER TABLE `profileimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ImageUserId` (`ImageUserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `profileimages`
--
ALTER TABLE `profileimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`GroupID`) REFERENCES `groups` (`GroupID`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`RecieverId`) REFERENCES `data` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`SenderId`) REFERENCES `data` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `data` (`id`);

--
-- Constraints for table `profileimages`
--
ALTER TABLE `profileimages`
  ADD CONSTRAINT `profileimages_ibfk_1` FOREIGN KEY (`ImageUserId`) REFERENCES `data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
