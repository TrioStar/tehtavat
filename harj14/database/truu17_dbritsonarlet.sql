-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 77.86.252.86
-- Generation Time: May 26, 2020 at 10:33 AM
-- Server version: 5.6.35
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truu17_dbritsonarlet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(10) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `truename` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(10) NOT NULL,
  `days` varchar(100) NOT NULL,
  `times` varchar(100) NOT NULL,
  `lastregister` date DEFAULT NULL,
  `place` int(100) NOT NULL,
  `info` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `publishdate` date NOT NULL,
  `closedate` date NOT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `title`, `content`, `publishdate`, `closedate`, `userID`) VALUES
(1, 'fake', 'moi', '2020-05-04', '2020-05-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `playerID` int(10) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `banned` int(11) NOT NULL,
  `seatID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playertournament`
--

CREATE TABLE `playertournament` (
  `playertournamentID` int(10) NOT NULL,
  `playerID` int(10) NOT NULL,
  `turnausID` int(10) NOT NULL,
  `ranking` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `requlationID` int(10) NOT NULL,
  `ruletext` text NOT NULL,
  `applied` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seatID` int(10) NOT NULL,
  `seatnumber` int(6) NOT NULL,
  `open` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` int(10) NOT NULL,
  `teamnameID` int(10) NOT NULL,
  `teamname` varchar(15) NOT NULL,
  `members` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teamtournament`
--

CREATE TABLE `teamtournament` (
  `teamtournamentID` int(11) NOT NULL,
  `teamID` int(10) NOT NULL,
  `tournausID` int(11) NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `tournamentID` int(10) NOT NULL,
  `game` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `aika` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `singleplayer` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `truename` varchar(45) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `truename`, `nickname`, `password`) VALUES
(1, 'Star', 'admin', '$2y$10.pNu0NJpQ1.V8z5xaadpm/LywG3AYibLGVTKA5qDMi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`playerID`),
  ADD KEY `paikkaID` (`seatID`);

--
-- Indexes for table `playertournament`
--
ALTER TABLE `playertournament`
  ADD PRIMARY KEY (`playertournamentID`),
  ADD KEY `pelaajaID` (`playerID`),
  ADD KEY `turnausID` (`turnausID`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`requlationID`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seatID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`),
  ADD UNIQUE KEY `tiiminjoukkueID` (`teamnameID`);

--
-- Indexes for table `teamtournament`
--
ALTER TABLE `teamtournament`
  ADD PRIMARY KEY (`teamtournamentID`),
  ADD UNIQUE KEY `tournausID` (`tournausID`),
  ADD UNIQUE KEY `teamID` (`teamID`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tournamentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `playerID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playertournament`
--
ALTER TABLE `playertournament`
  MODIFY `playertournamentID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seatID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `tournamentID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`playerID`) REFERENCES `playertournament` (`playerID`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`seatID`) REFERENCES `player` (`seatID`);

--
-- Constraints for table `teamtournament`
--
ALTER TABLE `teamtournament`
  ADD CONSTRAINT `teamtournament_ibfk_1` FOREIGN KEY (`teamtournamentID`) REFERENCES `player` (`playerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
