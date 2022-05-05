-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 03:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_data`
--

CREATE TABLE `quiz_data` (
  `ID` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Ans1` varchar(100) NOT NULL,
  `Ans2` varchar(100) NOT NULL,
  `Ans3` varchar(100) NOT NULL,
  `Ans4` varchar(100) NOT NULL,
  `Ans5` varchar(100) NOT NULL,
  `Img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_data`
--

INSERT INTO `quiz_data` (`ID`, `Question`, `Ans1`, `Ans2`, `Ans3`, `Ans4`, `Ans5`, `Img`) VALUES
(0, 'How active are you?', 'Not very', 'A little', 'So-so', 'Active', 'Athlete', 'https://i.imgur.com/hX3SXti.png'),
(1, 'What is your preferred shedding levels?', 'Minimum', 'A little', 'Some fur', 'Fur is okay', 'Fur tornado', 'https://i.imgur.com/nDcgsVF.png'),
(2, 'Which size do you prefer?', 'Tiny', 'Small', 'Medium', 'Large', 'Humongous', 'https://i.imgur.com/7cXzt79.png'),
(3, 'How intelligent do you want your dog to be?', 'Brain empty', 'A bit smart', 'Moderately', 'Smart enough', 'Very smart', 'https://i.imgur.com/H8LOHsd.png'),
(4, 'How big of a space can you provide?', 'Apartment', 'Apartment with park', 'Park area', 'House with small yard', 'House with big yard', 'https://i.imgur.com/nv7Kz4m.png'),
(5, 'How often will the dogs interact with children?', 'Not at all', 'A little bit', 'Sometimes', 'Often', 'All the time', 'https://i.imgur.com/WEofRYj.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_data`
--
ALTER TABLE `quiz_data`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
