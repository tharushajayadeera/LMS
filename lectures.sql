-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 08:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lectures`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE `dbms` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbms`
--

INSERT INTO `dbms` (`id`, `file`, `type`, `size`) VALUES
(1, '37261-2._entity_-_relationship_modeling2.ppt', 'applicatio', 209),
(2, '2894-3._relational_model2.pptx', 'applicatio', 63),
(3, '54512-normalization.ppt', 'applicatio', 479),
(4, '54878-sql_query.ppt', 'applicatio', 478),
(5, '68428-file_based_systems.ppt', 'applicatio', 1298),
(6, '45621-1._introduction_to_databases.ppt', 'applicatio', 213),
(7, '44300-1._introduction_to_databases.ppt', 'applicatio', 213),
(8, '98321-sql-create_and_insert.ppt', 'applicatio', 397),
(9, '49974-chennotation.jpg', 'image/jpeg', 46),
(10, '68443-lesson_5.pptx', 'applicatio', 1639),
(11, '77667-normalization_sample_answer.docx', 'applicatio', 37),
(12, '53150-insert-code.txt', 'text/plain', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `file`, `type`, `size`) VALUES
(1, '65047-html.pptx', 'applicatio', 304),
(2, '4371-cascading_stylesheets.ppt', 'applicatio', 284),
(3, '16000-javascript.pptx', 'applicatio', 373),
(4, '44488-php-modified.ppt', 'applicatio', 541),
(5, '60491-cookies_sessions.ppt', 'applicatio', 213),
(6, '69691-lab_1_html.doc', 'applicatio', 37),
(7, '61730-phpassignment.doc', 'applicatio', 45),
(8, '27402-js6.html', 'text/html', 0),
(9, '74193-js1.html', 'text/html', 0),
(10, '41611-lesson_3.pptx', 'applicatio', 491),
(11, '33844-js1.html', 'text/html', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbms`
--
ALTER TABLE `dbms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
