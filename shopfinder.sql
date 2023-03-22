-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2023 at 10:34 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `choosedplace`
--

CREATE TABLE `choosedplace` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `addresses` varchar(128) NOT NULL,
  `gps` varchar(128) NOT NULL,
  `price` varchar(30) NOT NULL,
  `exactPlaceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `choosedplacefeatures`
--

CREATE TABLE `choosedplacefeatures` (
  `id` int(11) NOT NULL,
  `rank` varchar(30) NOT NULL,
  `choosedPlaceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `choosedplacefile`
--

CREATE TABLE `choosedplacefile` (
  `id` int(11) NOT NULL,
  `files` varchar(256) NOT NULL,
  `choosedPlaceId` int(11) DEFAULT NULL,
  `choosedPlaceAddress` enum('asia','africa') NOT NULL,
  `exactPlace` varchar(60) NOT NULL,
  `title` varchar(130) NOT NULL,
  `houseDescription` varchar(256) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateDeleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choosedplacefile`
--

INSERT INTO `choosedplacefile` (`id`, `files`, `choosedPlaceId`, `choosedPlaceAddress`, `exactPlace`, `title`, `houseDescription`, `price`, `datePosted`, `dateDeleted`) VALUES
(20, 'OliiSketch1.png', NULL, 'asia', 'No 73 Military zone highway road', 'Shopping', 'Shopping mall for groceries, cloths, fruits, drinks, etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97185.81927083507!2d-74.69802568359378!3d40.429739999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3dd33e08bbae7%3A0xdea863854bfbae92!2sStop%20%26%20Shop%20Pharmacy!5e0!3m2!1sen!2sng!4v1679045470148!5m2!1sen!2sng', '2023-03-17 09:10:54', NULL),
(21, 'doughnuts.jpg', NULL, 'africa', 'No 73 Military zone highway road', 'Buying & Selling', 'Shopping mall for groceries, cloths, fruits, drinks, etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97084.98075204004!2d-74.56490868359376!3d40.4994694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c634c9c35c17%3A0x2bffaea6f7d860d5!2sStop%20%26%20Shop!5e0!3m2!1sen!2sng!4v1679045974108!5m2!1sen!2sng', '2023-03-17 10:32:19', NULL),
(22, 'ecommerce.jpg', NULL, 'africa', 'No 73 Military zone highway road', 'Shopping', 'Shopping mall for groceries, cloths, fruits, drinks, etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3123.2186577275475!2d-121.37118238470862!3d38.482596178892315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac4113b7585c9%3A0x69bc3852d20ef680!2sWalmart%20Supercenter!5e0!3m2!1sen!2sng!4v1679046403264!5m2!1sen!2sng', '2023-03-17 10:41:05', NULL),
(23, 'supermarket.jpg', NULL, 'africa', 'No 73 Military zone highway road', 'Delivery', 'Shopping mall for groceries, cloths, fruits, drinks, etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199665.8181370238!2d-121.58299697040684!3d38.5619189517606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sng!4v1679058272587!5m2!1sen!2sng', '2023-03-17 14:05:14', NULL),
(24, '2016-lamborghini-huracan-Price-and-LP-610-4-Roadster.jpg', NULL, 'africa', 'No 73 Military zone highway road', 'Vehicle Repair Shop', 'Shopping mall for groceries, cloths, fruits, drinks, etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3122.043168475439!2d-121.469472884708!3d38.509715277307386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809acfe79f4a3ba7%3A0xaa7f0b39e6e111c2!2sUSA%20WHEEL%20%26%20TIRE%20INC!5e0!3m2!1sen!2sng!4v1679070390739!5m2!1sen!2sng', '2023-03-17 17:29:23', '2023-03-20 10:55:53'),
(25, 'Yellow-Ferrari-458-Italia-Spider.jpg', NULL, 'asia', 'No 1 Asia Rd', 'Shop for Groceries', 'Shop for buying of groceries', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12487.382260009235!2d-121.4706234!3d38.5142725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ad02252f7cf3b%3A0xfc8bcb34f37956ca!2sRoma&#39;s%20Pizzeria!5e0!3m2!1sen!2sng!4v1679150084002!5m2!1sen!2sng', '2023-03-18 02:18:00', NULL),
(26, 'Bentley-Flying-Spur-V8-00.jpg', NULL, 'asia', 'No 3 Shopping mall Aberdeen', 'Shopping mall', 'Shop for peoples daily shopping on many items ', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12487.382260009235!2d-121.4706234!3d38.5142725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ad02252f7cf3b%3A0xfc8bcb34f37956ca!2sRoma&#39;s%20Pizzeria!5e0!3m2!1sen!2sng!4v1679174023880!5m2!1sen!2sng', '2023-03-18 02:32:47', NULL),
(30, '2015-Aston-Martin-Rapide-S-.jpg', NULL, 'asia', 'No 1 Mission Road', 'Sports wear shop', 'Shop for all kinds of sports wear for football, basketball, swimming, gym, etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54036.081519448315!2d150.86263214609832!3d-32.17039517259683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b0b690fbe81e701%3A0x40609b490437e70!2sAberdeen%20NSW%202336%2C%20Australia!5e0!3m2!1sen!2sng!4v1679204361300!5m2!1sen!2sng', '2023-03-19 07:02:13', NULL),
(31, 'imageshy.jpg', NULL, 'asia', 'No 3 highway road', 'Shop for fruits', 'Shop where u can buy all kinds of fruits like banana, lemon, etc.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3377.047565812548!2d150.88701311536326!3d-32.17599204062194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b0b663eb69fdcc3%3A0x15336843078335e9!2sAberdeen%20Motel!5e0!3m2!1sen!2sng!4v1679205945797!5m2!1sen!2sng', '2023-03-19 07:06:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exactplace`
--

CREATE TABLE `exactplace` (
  `id` int(11) NOT NULL,
  `gpsLocationId` int(11) NOT NULL,
  `exactLocation` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exactplace`
--

INSERT INTO `exactplace` (`id`, `gpsLocationId`, `exactLocation`) VALUES
(1, 1, 'Main market'),
(2, 1, 'DmGs'),
(3, 1, 'electronics market');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `star` varchar(256) NOT NULL,
  `textarea` varchar(300) NOT NULL,
  `userId` int(11) NOT NULL,
  `shopId` int(11) NOT NULL,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deletedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gpslocation`
--

CREATE TABLE `gpslocation` (
  `id` int(11) NOT NULL,
  `statesId` int(11) NOT NULL,
  `locations` varchar(150) NOT NULL,
  `checkInDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checkOutDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gpslocation`
--

INSERT INTO `gpslocation` (`id`, `statesId`, `locations`, `checkInDate`, `checkOutDate`) VALUES
(1, 1, 'onitsha', '2020-12-08 17:23:44', '2020-12-09 09:37:49'),
(2, 1, 'awka', '2020-12-08 17:23:44', '2020-12-09 09:37:49'),
(3, 1, 'asaba', '2020-12-08 17:23:44', '2020-12-09 09:37:49'),
(4, 1, 'nnewi', '2020-12-08 17:23:44', '2020-12-09 09:37:49'),
(5, 1, 'awada', '2020-12-17 19:59:50', '2020-12-17 19:59:50'),
(6, 1, 'obosi', '2020-12-17 20:00:21', '2020-12-17 20:00:21'),
(7, 1, 'woriwo', '2020-12-17 20:00:36', '2020-12-17 20:00:36'),
(8, 1, 'africa', '2023-03-17 04:21:59', '2023-03-17 04:21:59'),
(9, 1, 'asia', '2023-03-17 04:21:59', '2023-03-17 04:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `states` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `states`) VALUES
(1, 'Anambra'),
(2, 'Delta'),
(3, 'Enugu'),
(4, 'Lagos'),
(5, 'Abuja');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `oName` varchar(30) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `userType` enum('admin','vendor','client') NOT NULL DEFAULT 'client',
  `dateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `oName`, `email`, `phone`, `pass`, `userType`, `dateCreated`) VALUES
(3, 'Tony', 'Val', 'Kind', 'tony@gmail.com', '0623471650', '444', 'admin', '2021-08-01 15:40:12'),
(4, 'Love', 'Loveth', 'Lovey', 'love@gmail.com', '0902345644', '12313', 'vendor', '2023-03-15 11:56:51'),
(5, 'Dan', 'Vitalis', 'Danny', 'dan@gmail.com', '0918376633', '123', 'client', '2023-03-15 12:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `userspreferedplace`
--

CREATE TABLE `userspreferedplace` (
  `id` int(11) NOT NULL,
  `usersChoice` varchar(256) NOT NULL,
  `bookedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userspreferedplace`
--

INSERT INTO `userspreferedplace` (`id`, `usersChoice`, `bookedDate`) VALUES
(197, 'No 73 Military zone highway road', '2023-03-19 02:00:22'),
(198, 'Africa', '2023-03-19 02:07:31'),
(199, 'No 73 Military zone highway road', '2023-03-19 02:52:31'),
(200, 'No 1 Asia Rd', '2023-03-19 02:52:41'),
(201, 'No 73 Military zone highway road', '2023-03-19 03:06:00'),
(202, 'No 73 Military zone highway road', '2023-03-19 05:59:59'),
(203, 'No 73 Military zone highway road', '2023-03-19 06:00:30'),
(204, 'No 73 Military zone highway road', '2023-03-19 06:06:39'),
(205, 'No 73 Military zone highway road', '2023-03-19 06:06:48'),
(206, 'No 1 Asia Rd', '2023-03-19 06:06:51'),
(207, 'No 3 Shopping mall Aberdeen', '2023-03-19 06:06:55'),
(208, 'No 73 Military zone highway road', '2023-03-19 06:07:05'),
(209, 'No 3 Shopping mall Aberdeen', '2023-03-19 06:07:11'),
(210, 'No 73 Military zone highway road', '2023-03-19 06:09:27'),
(211, 'No 73 Military zone highway road', '2023-03-19 06:09:27'),
(212, 'No 73 Military zone highway road', '2023-03-19 06:13:23'),
(213, 'No 73 Military zone highway road', '2023-03-19 06:14:41'),
(214, 'No 1 Asia Rd', '2023-03-19 06:14:47'),
(215, 'No 73 Military zone highway road', '2023-03-19 06:15:21'),
(216, 'asdfasdf', '2023-03-19 06:58:42'),
(217, 'No 73 Military zone highway road', '2023-03-19 06:59:11'),
(218, 'No 1 Mission Road', '2023-03-19 07:02:37'),
(219, 'No 3 highway road', '2023-03-19 07:06:49'),
(220, 'No 1 Asia Rd', '2023-03-19 07:28:48'),
(221, 'No 73 Military zone highway road', '2023-03-19 07:29:03'),
(222, 'No 3 Shopping mall Aberdeen', '2023-03-19 07:29:14'),
(223, 'No 73 Military zone highway road', '2023-03-19 07:33:11'),
(224, 'No 1 Asia Rd', '2023-03-19 07:33:38'),
(225, 'No 1 Mission Road', '2023-03-19 07:33:55'),
(226, 'No 73 Military zone highway road', '2023-03-19 07:50:20'),
(227, 'No 1 Asia Rd', '2023-03-19 07:50:34'),
(228, 'No 1 Asia Rd', '2023-03-19 07:55:56'),
(229, 'No 73 Military zone highway road', '2023-03-19 08:18:58'),
(230, 'No 1 Asia Rd', '2023-03-19 09:03:01'),
(231, 'No 73 Military zone highway road', '2023-03-19 09:12:09'),
(232, 'No 73 Military zone highway road', '2023-03-19 09:13:38'),
(233, 'No 1 Asia Rd', '2023-03-19 09:13:54'),
(234, 'No 73 Military zone highway road', '2023-03-19 09:14:14'),
(235, 'No 73 Military zone highway road', '2023-03-19 09:14:38'),
(236, 'No 1 Asia Rd', '2023-03-19 09:25:55'),
(237, 'No 73 Military zone highway road', '2023-03-19 09:35:38'),
(238, 'a', '2023-03-19 09:35:48'),
(239, 'No 1 Asia Rd', '2023-03-19 09:35:58'),
(240, 'No 73 Military zone highway road', '2023-03-19 09:36:02'),
(241, 'No 3 Shopping mall Aberdeen', '2023-03-19 09:36:06'),
(242, 'No 1 Mission Road', '2023-03-19 09:36:11'),
(243, 'No 73 Military zone highway road', '2023-03-19 09:36:20'),
(244, 'No 3 Shopping mall Aberdeen', '2023-03-19 09:36:25'),
(245, 'No 1 Asia Rd', '2023-03-19 11:30:13'),
(246, 'No 73 Military zone highway road', '2023-03-19 12:48:06'),
(247, 'No 73 Military zone highway road', '2023-03-19 13:35:20'),
(248, 'No 73 Military zone highway road', '2023-03-19 13:58:57'),
(249, 'No 73 Military zone highway road', '2023-03-19 17:59:12'),
(250, 'No 73 Military zone highway road', '2023-03-19 17:59:13'),
(251, 'No 73 Military zone highway road', '2023-03-19 22:00:50'),
(252, 'No 1 Asia Rd', '2023-03-19 22:01:27'),
(253, 'No 73 Military zone highway road', '2023-03-19 22:40:15'),
(254, 'No 1 Asia Rd', '2023-03-19 22:46:41'),
(255, 'No 73 Military zone highway road', '2023-03-19 22:48:03'),
(256, 'No 73 Military zone highway road', '2023-03-19 22:51:39'),
(257, 'No 73 Military zone highway road', '2023-03-20 00:34:07'),
(258, 'No 1 Asia Rd', '2023-03-20 05:38:37'),
(259, 'No 73 Military zone highway road', '2023-03-20 07:37:48'),
(260, 'No 73 Military zone highway road', '2023-03-20 10:54:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choosedplace`
--
ALTER TABLE `choosedplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choosedplacefeatures`
--
ALTER TABLE `choosedplacefeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choosedplacefile`
--
ALTER TABLE `choosedplacefile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exactplace`
--
ALTER TABLE `exactplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `join foreign key with user id and feedback userId` (`userId`),
  ADD KEY `join foreign key with choosedPlaceFile and feedback shopId` (`shopId`);

--
-- Indexes for table `gpslocation`
--
ALTER TABLE `gpslocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userspreferedplace`
--
ALTER TABLE `userspreferedplace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choosedplace`
--
ALTER TABLE `choosedplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choosedplacefeatures`
--
ALTER TABLE `choosedplacefeatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choosedplacefile`
--
ALTER TABLE `choosedplacefile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `exactplace`
--
ALTER TABLE `exactplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gpslocation`
--
ALTER TABLE `gpslocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userspreferedplace`
--
ALTER TABLE `userspreferedplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `join foreign key with choosedPlaceFile and feedback shopId` FOREIGN KEY (`shopId`) REFERENCES `choosedplacefile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `join foreign key with user id and feedback userId` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
