-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2018 at 09:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VotingSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `Candidate`
--

CREATE TABLE `Candidate` (
  `cID` int(255) NOT NULL,
  `candidateId` varchar(100) NOT NULL,
  `name` char(100) NOT NULL,
  `voteCount` int(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Candidate`
--

INSERT INTO `Candidate` (`cID`, `candidateId`, `name`, `voteCount`) VALUES
(1, 'CAN123', 'Ankit', 12),
(2, 'CAN124', 'Ashutosh', 8);

-- --------------------------------------------------------

--
-- Table structure for table `Voter`
--

CREATE TABLE `Voter` (
  `vId` int(255) NOT NULL,
  `emailId` varchar(100) NOT NULL,
  `voterId` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `voterName` char(100) NOT NULL,
  `voteId` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Voter`
--

INSERT INTO `Voter` (`vId`, `emailId`, `voterId`, `password`, `voterName`, `voteId`) VALUES
(1, 'voter@gmail.com', 'voter', 'voter', 'voter', 2),
(2, 'dee@gmail.com', 'Dee123', 'Dee123', 'Deepak', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Candidate`
--
ALTER TABLE `Candidate`
  ADD PRIMARY KEY (`cID`),
  ADD UNIQUE KEY `candidateId` (`candidateId`);

--
-- Indexes for table `Voter`
--
ALTER TABLE `Voter`
  ADD PRIMARY KEY (`vId`),
  ADD UNIQUE KEY `emailId` (`emailId`),
  ADD UNIQUE KEY `voterId` (`voterId`),
  ADD KEY `voteId` (`voteId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Candidate`
--
ALTER TABLE `Candidate`
  MODIFY `cID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Voter`
--
ALTER TABLE `Voter`
  MODIFY `vId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Voter`
--
ALTER TABLE `Voter`
  ADD CONSTRAINT `Voter_ibfk_1` FOREIGN KEY (`voteId`) REFERENCES `Candidate` (`cID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
