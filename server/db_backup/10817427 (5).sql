-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 01:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10817427`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `postId` varchar(40) NOT NULL,
  `user` varchar(15) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`postId`, `user`, `content`) VALUES
('TI9947', 'ryder', '\"It’ll be at least a few months until the actual hearing takes place.\"'),
('WC2915', 'ryder', 'The course was cleared once for 21 minutes by an earlier band of storms. The air horns sounded again at 4:22 p.m. as another set of arrived, forcing the evacuation of patrons and sending players and officials searching for cover.');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `par` text NOT NULL,
  `rating` float NOT NULL,
  `cost` text DEFAULT NULL,
  `course_len` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `par`, `rating`, `cost`, `course_len`) VALUES
(1, 'MichaelBrooke', '63', 4, '$', 3721),
(2, 'Mission Creek', '61', 2.5, '$', 3873),
(3, 'Orchard Greens', '32', 3, '$', 2083),
(4, 'The Harvest', '72', 4.3, '$$', 7109),
(5, 'Gallaghers Canyon', '72', 4.5, '$$$', 6802),
(6, 'Tower Ranch', '72', 4.9, '$$$', 7212),
(7, 'Sunset Ranch', '72', 4.5, '$$', 6500),
(8, 'Shadow Ridge', '71', 3.9, '$', 6423),
(9, 'Kelowna Springs', '71', 4, '$$', 6256),
(10, 'OKGC Bear', '72', 4.7, '$$$', 6885),
(11, 'OKGC Quail', '71', 4.5, '$$$', 6575),
(12, 'Black Mountain', '71', 4.4, '$$$', 6408),
(13, 'Two Eagles', '65', 4, '$$', 5014),
(14, 'Shannon Lake', '70', 4.5, '$$', 6121);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(40) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user` varchar(15) NOT NULL,
  `topic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `user`, `topic`) VALUES
('WC2915', '2023 Masters is Live', 'The Masters Tournament (usually referred to as simply The Masters, or the U.S. Masters outside North America[2][3]) is one of the four major championships in professional golf. Scheduled for the first full week of April, the Masters is the first major of the year, and unlike the others, it is always held at the same location, Augusta National Golf Club, a private course in the city of Augusta, Georgia, in the southeastern United States.', 'ryder', 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `ranges`
--

CREATE TABLE `ranges` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ranges`
--

INSERT INTO `ranges` (`name`, `address`, `location`, `website`, `id`) VALUES
('World Beat Family Golf', '625 Old Vernon Rd', 'Kelowna', 'https://www.worldbeatgolf.com/', 1),
('Kelowna Driving Range', '3810 Casorso Rd', 'Kelowna', 'https://www.kelownadrivingrange.com/', 2),
('The Golf Centre', '3810 Casorso Rd', 'Kelowna', 'https://thegolfcentrekelowna.ca/', 3),
('Two Eagles', '3509 Carrington Rd', 'West Kelowna', 'http://www.twoeaglesgolf.com/driving-range.html', 4),
('Gallaghers Canyon Practice Facility', '3509 Carrington Rd', 'West Kelowna', 'http://www.twoeaglesgolf.com/driving-range.html', 5),
('The Okanagan Golf Academy', '3200 Via Centrale', 'Kelowna', 'https://www.okanagangolfclub.com/golf_academy', 6),
('The Harvest Practice Facility', '2725 K. L. O. Rd', 'Kelowna', 'https://www.harvestgolf.com/golf/practice-facility', 7);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic`) VALUES
('Sports'),
('News'),
('Gaming'),
('Fashion'),
('Art'),
('History'),
('Politics'),
('Animals'),
('Travel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `password`) VALUES
('ryderv1919', 'ryder', 'rvanoerle5@gmai', '482c811da5d5b4b'),
('ryderv', 'ryder', 'rvanoerle12@gma', '482c811da5d5b4b'),
('ryder', 'ryder', 'ryder@gmail.com', 'password123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranges`
--
ALTER TABLE `ranges`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
