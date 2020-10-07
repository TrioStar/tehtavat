-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 10.09.2020 klo 14:08
-- Palvelimen versio: 5.6.35
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Rakenne taululle `admins`
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
-- Rakenne taululle `events`
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
-- Rakenne taululle `news`
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
-- Vedos taulusta `news`
--

INSERT INTO `news` (`newsID`, `title`, `content`, `publishdate`, `closedate`, `userID`) VALUES
(1, 'fake', 'moi', '2020-05-04', '2020-05-31', 1);

-- --------------------------------------------------------

--
-- Rakenne taululle `player`
--

CREATE TABLE `player` (
  `playerID` int(10) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `seatID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vedos taulusta `player`
--

INSERT INTO `player` (`playerID`, `username`, `password`, `name`, `email`, `age`, `phone`, `banned`, `seatID`) VALUES
(4, 'lee', '$2y$10$U5zcXsawUbAZEq1tQmOTXON1cQJYNvkVSRvBWyYNcDRsmt4b2NK7W', '0', '0', '18', NULL, 0, NULL),
(5, '', '$2y$10$C3Jdr0vUn5L/yCsAFJ95bumOc3.Z5MJVs25qmaI670QXkQ2XCaGoC', '', '', '18', NULL, 0, NULL),
(6, '', '$2y$10$CW5jpowY0agQ5mWrUainkeLpyHSwRxdEEewCd9Q53rp9IdNH.T9BK', 'r', '', '15', NULL, 0, NULL),
(7, '', '$2y$10$28X6JwtwP51lArYgPrayhOwW0emWyHGSiLEsECI6oR16TUneur1YG', '', '', '16', NULL, 0, NULL),
(8, 'aa', '$2y$10$vtineGjBN1JLMFLDOExvJuQ5mA73GUywZd4thgPJUD6s5XVmMlgAi', 'a', 'a', '16', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Rakenne taululle `playertournament`
--

CREATE TABLE `playertournament` (
  `playertournamentID` int(10) NOT NULL,
  `playerID` int(10) NOT NULL,
  `turnausID` int(10) NOT NULL,
  `ranking` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Rakenne taululle `rules`
--

CREATE TABLE `rules` (
  `requlationID` int(10) NOT NULL,
  `ruletext` text NOT NULL,
  `applied` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Rakenne taululle `seat`
--

CREATE TABLE `seat` (
  `seatID` int(10) NOT NULL,
  `seatnumber` int(6) NOT NULL,
  `open` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Rakenne taululle `team`
--

CREATE TABLE `team` (
  `teamID` int(10) NOT NULL,
  `teamnameID` int(10) NOT NULL,
  `teamname` varchar(15) NOT NULL,
  `members` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Rakenne taululle `teamtournament`
--

CREATE TABLE `teamtournament` (
  `teamtournamentID` int(11) NOT NULL,
  `teamID` int(10) NOT NULL,
  `tournausID` int(11) NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Rakenne taululle `tournament`
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
-- Rakenne taululle `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `truename` varchar(45) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `users`
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
  MODIFY `playerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`seatID`) REFERENCES `player` (`seatID`);

--
-- Rajoitteet taululle `teamtournament`
--
ALTER TABLE `teamtournament`
  ADD CONSTRAINT `teamtournament_ibfk_1` FOREIGN KEY (`teamtournamentID`) REFERENCES `player` (`playerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
