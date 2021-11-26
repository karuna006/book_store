-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 01:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `added_date`, `status`) VALUES
(1, 'Junior Level Books Introduction to Computer	', '2021-11-26 12:03:40', 0),
(2, 'Publish News Letter', '2021-11-26 12:04:38', 0),
(3, 'Client Server Computing', '2021-11-26 12:04:45', 0),
(4, 'Mobile Computing', '2021-11-26 12:04:51', 0),
(5, 'Data Structure Using C', '2021-11-26 12:04:58', 0),
(6, 'Amit Garg ', '2021-11-26 12:11:14', 1),
(7, 'Amit Garg', '2021-11-26 12:11:25', 1),
(8, 'Lalit Kumar', '2021-11-26 12:11:33', 1),
(9, 'Vinay Kumar Singhal', '2021-11-26 12:11:40', 1),
(10, 'Sharad Kumar Verma', '2021-11-26 12:11:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `edition` varchar(255) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `edition`, `added_date`, `status`) VALUES
(1, 'Sample1', 'sample2', 'sample3', 'sample4', '2021-11-26 11:07:14', 0),
(3, 'sample data', 'rawdata', 'demo', 'sample', '2021-11-26 11:29:42', 0),
(4, 'Amit Garg', 'Junior Level Books Introduction to Computer', 'Reader\'s Zone', '2011', '2021-11-26 11:37:23', 1),
(5, 'Amit Garg', ' Publish News Letter', 'MCA Department, MIET Meerut', '2011', '2021-11-26 11:37:55', 1),
(6, 'Lalit Kumar', 'Client Server Computing', 'Sun India Publications, New Delhi', '2012', '2021-11-26 11:38:26', 1),
(7, 'Vinay Kumar Singhal', ' Mobile Computing', ' K Nath & Sons, Meerut', '2011', '2021-11-26 11:38:49', 1),
(8, 'Sharad Kumar Verma', ' Data Structure Using C', 'Thakur Publications Lucknow', '2015', '2021-11-26 11:39:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `added_date`, `status`) VALUES
(1, 'Reader\'s Zone', '2021-11-26 12:17:38', 0),
(2, ' MCA Department, MIET Meerut', '2021-11-26 12:17:48', 0),
(3, ' Sun India Publications, New Delhi', '2021-11-26 12:18:02', 0),
(4, ' K Nath & Sons, Meerut', '2021-11-26 12:18:09', 0),
(5, 'Thakur Publications Lucknow', '2021-11-26 12:18:18', 0),
(6, 'Reader\'s Zone', '2021-11-26 12:28:45', 1),
(7, 'MCA Department, MIET Meerut', '2021-11-26 12:28:54', 1),
(8, 'Sun India Publications, New Delhi', '2021-11-26 12:29:02', 1),
(9, ' K Nath & Sons, Meerut ', '2021-11-26 12:29:11', 1),
(10, 'Thakur Publications Lucknow', '2021-11-26 12:29:19', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
