-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 08:47 PM
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
  `course_len` int(4) DEFAULT NULL,
  `designer` varchar(30) DEFAULT NULL,
  `slope` varchar(20) DEFAULT NULL,
  `practiceFacility` varchar(50) DEFAULT NULL,
  `greenFees` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `membership` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `par`, `rating`, `cost`, `course_len`, `designer`, `slope`, `practiceFacility`, `greenFees`, `address`, `website`, `membership`) VALUES
(1, 'MichaelBrooke', '63', 4, '$', 3721, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Mission Creek', '61', 2.5, '$', 3873, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Orchard Greens', '32', 3, '$', 2083, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'The Harvest', '72', 4.3, '$$', 7109, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Gallaghers Canyon', '72', 4.5, '$$$', 6802, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Tower Ranch', '72', 4.9, '$$$', 7212, 'Thomas Mcbroom', '133', 'Range✓ Practice Green✓ Short Game Area✓', 'https://www.golftowerranch.com/wp-content/uploads/', '1789 Tower Ranch Drive, Kelowna, V1P 1T2', 'https://www.golftowerranch.com/', 'https://www.golftowerranch.com/membership/'),
(7, 'Sunset Ranch', '72', 4.5, '$$', 6500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Shadow Ridge', '71', 3.9, '$', 6423, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Kelowna Springs', '71', 4, '$$', 6256, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'OKGC Bear', '72', 4.7, '$$$', 6885, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'OKGC Quail', '71', 4.5, '$$$', 6575, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Black Mountain', '71', 4.4, '$$$', 6408, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Two Eagles', '65', 4, '$$', 5014, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Shannon Lake', '70', 4.5, '$$', 6121, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `name` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`name`, `location`, `website`, `id`) VALUES
('Steve Lawrence', 'Kelowna', 'https://www.stevelawrencegolf.com/', 1),
('GolfTec', 'Kelowna', 'https://www.golftec.com/en-ca/golf-lessons/kelowna', 2);

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
('WC2915', '2023 Masters is Live', 'The Masters Tournament (usually referred to as simply The Masters, or the U.S. Masters outside North America[2][3]) is one of the four major championships in professional golf. Scheduled for the first full week of April, the Masters is the first major of the year, and unlike the others, it is always held at the same location, Augusta National Golf Club, a private course in the city of Augusta, Georgia, in the southeastern United States.', 'ryder', 'Sports'),
('2', 'Courses still open?', 'Hello all, just wondering what courses may still be open and what the opening dates usually are here in the Okanagan.', 'Kelowna123', 'Courses'),
('3', 'New to Area', 'Hi, I just moved to the Okanagan and am looking for a local league to play in or perhaps someone to grab a tee time with. Play at around a 6hcp.', 'BJulian', 'local'),
('4', 'Club Fitting', 'Im wondering if its worth getting fitted for new clubs. Currently using my dads old clubs from the early 2000s and wanting to purchase a new set. Ive only been playing around a year and shoot in the high 90s', 'roco', 'fittings');

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` varchar(20) NOT NULL,
  `cid` int(2) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `comments` text NOT NULL,
  `rating` int(1) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `cid`, `userId`, `comments`, `rating`, `date`) VALUES
('65b2e8e87e0c4', 6, 'ryderv', 'Amazing course! Conditions were perfect.', 4, '2024-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `sims`
--

CREATE TABLE `sims` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sims`
--

INSERT INTO `sims` (`name`, `address`, `location`, `website`, `id`) VALUES
('Simplex Sportszone', '2600 Enterprise Way #200', 'Kelowna', 'https://www.simplexsports.com/', 1),
('Anytime Sim Golf', '889 Vaughan Ave #103', 'Kelowna', 'https://anytimesim.golf/', 2),
('JSquared Golf', '4320 Gallaghers Dr W', 'Kelowna', 'https://jsquaredgolf.com/', 3),
('Golf Evolution', '2544 Enterprise Way', 'Kelowna', 'https://golfevolutionkelowna.ca/', 4),
('Shadow Ridge Simulator', '3509 Carrington Rd', 'West Kelowna', 'https://shadowridgekelowna.com/simulator', 5);

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
('Courses'),
('Clubs'),
('Proffesional Golf'),
('Events'),
('Conditions'),
('GolfBC'),
('Other'),
('Fittings'),
('Practice'),
('Marketplace');

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
