-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 12:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `87043_myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectId` int(11) NOT NULL,
  `projectTitle` varchar(255) NOT NULL,
  `projectDescription` text NOT NULL,
  `projectImage` varchar(255) NOT NULL,
  `projectCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectId`, `projectTitle`, `projectDescription`, `projectImage`, `projectCategory`) VALUES
(1, 'Gamble Project', 'A Gambling website made using HTML, PHP And Javascript', 'gambelingProject.png', 'Webdesign'),
(2, 'Yande.re', 'A photo, video and music uploading website made using HTML and PHP. you can upload your own images , video\' and music you can also make your own custom playlists for music.', 'yandere.png', 'Webdesign'),
(3, 'Tune Store', 'A music listening application where you can save your own playlist and load it in when you start the application', 'tunestore.png', 'C#'),
(4, 'Movie Master', 'A C# application that lets you add a movie title to a list and give it genre\'s', 'moviemaster.png', 'C#'),
(5, 'Dragrace', 'An application where when you click the start button the 4 players go to the finish at a random speed.', 'dragrace.png', 'C#'),
(6, 'IPhone Layout', 'A responsive layout made to imitate the design style of apple.', 'iphone.png', 'Webdesign'),
(7, 'VH and Overflow', 'A website to demonstrate the usage of Viewport Height and overflow.', 'overflow.png', 'Webdesign'),
(8, 'LED Switch', 'lets you turn on and off individual LED lights using two different buttons.', 'ledswitch.png', 'Embedded Systems'),
(9, 'LED Wave', 'Had 4 LED Modes off, on, flashing and wave. can change mode using the button', 'ledwave.png', 'Embedded Systems');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
