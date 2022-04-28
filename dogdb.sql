-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 04:16 AM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `First_Answer` int(11) NOT NULL,
  `Second_Answer` int(11) NOT NULL,
  `Third_Answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `First_Answer`, `Second_Answer`, `Third_Answer`) VALUES
(0, 17, 6, 18);

-- --------------------------------------------------------

--
-- Table structure for table `dogimg`
--

CREATE TABLE `dogimg` (
  `DogID` int(11) NOT NULL,
  `dog_breed` varchar(60) NOT NULL,
  `Image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dogimg`
--

INSERT INTO `dogimg` (`DogID`, `dog_breed`, `Image`) VALUES
(0, 'bulldog', 'https://i.imgur.com/k6y8dPK.png'),
(1, 'labrador', 'https://i.imgur.com/XhdKGtR.png'),
(2, 'german', 'https://i.imgur.com/Ldv6DXL.png'),
(3, 'poodle', 'https://i.imgur.com/YpORHjJ.png'),
(4, 'golden', 'https://i.imgur.com/RJcBm5V.png'),
(5, 'chihuahua', 'https://i.imgur.com/SNdBHpE.png'),
(6, 'boxer', 'https://i.imgur.com/j8dSbB2.png'),
(7, 'pug', 'https://i.imgur.com/Slmt8ok.png'),
(8, 'husky', 'https://i.imgur.com/Gmo2yb8.png'),
(9, 'greatdane', 'https://i.imgur.com/jc0gwpe.png'),
(10, 'beagle', 'https://i.imgur.com/YHiInCu.png'),
(11, 'bostonterrier', 'https://i.imgur.com/96vo6qU.png'),
(12, 'frenchbulldog', 'https://i.imgur.com/VGYu9ao.png'),
(13, 'bassethound', 'https://i.imgur.com/t5bvn2d.jpg'),
(14, 'pom', 'https://i.imgur.com/J2mXCSl.png'),
(15, 'chowchow', 'https://i.imgur.com/goatpfi.png'),
(16, 'doberman', 'https://i.imgur.com/vsJq569.png'),
(17, 'foxhound', 'https://i.imgur.com/TvViw8I.png'),
(18, 'cockerspaniel', 'https://i.imgur.com/K96LRBU.png'),
(19, 'yorkie', 'https://i.imgur.com/FgSLyEx.png');

-- --------------------------------------------------------

--
-- Table structure for table `dog_breeds`
--

CREATE TABLE `dog_breeds` (
  `DogID` int(11) NOT NULL,
  `Dog_Breed` varchar(45) NOT NULL,
  `Shedding` int(11) NOT NULL,
  `Active` int(11) NOT NULL,
  `Size` int(11) NOT NULL,
  `Intelligence` int(11) NOT NULL,
  `Access to Space` int(11) NOT NULL,
  `Totelrance to Kids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dog_breeds`
--

INSERT INTO `dog_breeds` (`DogID`, `Dog_Breed`, `Shedding`, `Active`, `Size`, `Intelligence`, `Access to Space`, `Totelrance to Kids`) VALUES
(0, 'Bulldog', 3, 2, 3, 2, 2, 5),
(1, 'Labrador Retriever', 4, 4, 4, 5, 2, 5),
(2, 'German Shepherd', 4, 4, 4, 5, 2, 4),
(3, 'Poodle', 1, 5, 4, 5, 3, 5),
(4, 'Golden Retriever', 3, 4, 4, 5, 3, 5),
(5, 'Chihuahua', 2, 3, 1, 1, 2, 3),
(6, 'Boxer', 2, 3, 4, 3, 5, 5),
(7, 'Pug', 5, 2, 3, 1, 1, 5),
(8, 'Husky', 3, 4, 4, 3, 2, 4),
(9, 'Great Dane', 4, 3, 5, 3, 5, 5),
(10, 'Beagle', 3, 3, 3, 3, 2, 5),
(11, 'Boston Terrier', 1, 5, 2, 3, 2, 5),
(12, 'French Bulldog', 1, 3, 1, 2, 2, 5),
(13, 'Basset Hound', 3, 2, 4, 3, 2, 5),
(14, 'Pomeranian', 4, 4, 1, 4, 3, 3),
(15, 'Chow Chow', 5, 2, 3, 3, 3, 4),
(16, 'Doberman', 3, 5, 4, 5, 2, 4),
(17, 'Foxhound', 2, 5, 3, 3, 4, 5),
(18, 'Cocker Spaniel', 1, 5, 3, 4, 2, 4),
(19, 'Yorkshire Terrier', 2, 3, 1, 4, 2, 3);

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

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `question1` int(11) NOT NULL,
  `question2` int(11) NOT NULL,
  `question3` int(11) NOT NULL,
  `question4` int(11) NOT NULL,
  `question5` int(11) NOT NULL,
  `question6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`) VALUES
(0, 1, 2, 3, 4, 5, 3),
(1, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogimg`
--
ALTER TABLE `dogimg`
  ADD PRIMARY KEY (`DogID`);

--
-- Indexes for table `dog_breeds`
--
ALTER TABLE `dog_breeds`
  ADD PRIMARY KEY (`DogID`);

--
-- Indexes for table `quiz_data`
--
ALTER TABLE `quiz_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
