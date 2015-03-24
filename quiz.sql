-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 01:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `code` text,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `code`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`, `img`) VALUES
(2, 'ajbs', '', 'akjb', 'jb', 'jmb', 'jb,', '1', NULL),
(3, 'jmb', '', 'hjb', 'jkb', 'jhv', 'jkv', '1', NULL),
(4, 'kjb', '', 'ed', 'de', 'wqd', 'hjv', '2', '3'),
(5, 'kjb', '', 'kjbn', 'lkjb', 'lkb', 'lkbn', '3', '4'),
(7, 'sbflbflkbjdskbldskjb', NULL, 'hjbvkljb', 'kljb', 'kjb', 'kjlb', '3', NULL),
(8, 'kjasbdkj', NULL, 'rfknlkl', 'nlk', 'nkln', 'kl', '3', '6'),
(9, 'Additionally it prevents the default action (which for form means sending the request to the server and reloading the current page), but only if the form does not contain action, data-action, or x-action attributes.', NULL, 'Adele', 'Alia', 'Ariana', 'Aishwarya', '1', '7'),
(10, 'kln', NULL, 'knlkn', 'klnlk', 'klnlk', 'klnkln', '2', '8'),
(11, 'jkbkj', NULL, 'lknlkn', 'lkn', 'lkn', 'lkn', '4', '9'),
(12, 'uyguhjhgjhjhjhgjhgjhgjhgjhgjhgh', NULL, 'kjn', 'ng', 'gc', 'hfc', '3', NULL),
(13, 'kjahsdkjhsadkjhaskdjhaskjdhaksjhdkjashdkjh', NULL, 'asd', 'asd', 'asd', 'dsa', '4', NULL),
(14, 'tahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaatahaa', NULL, 'libra', 'libra', 'not-libra', 'libra', 'not', NULL),
(15, 'oaksjdlkasjdlkasjdlkasjdlkj', NULL, 'ouhsdfuh', 'ousdf', 'sf', 'pou', '2', NULL),
(16, 'As luck would have it, this is just a flexbox thing. I solved it with some combination of flex-wrap: wrap, display: flex, and setting my own flex attributes (at the time of posting, angular-material had set the flex attributes incorrectly. This has since been corrected). As luck would have it, this is just a flexbox thing. I solved it with some combination of flex-wrap: wrap, display: flex, and setting my own flex attributes (at the time of posting, angular-material had set the flex attributes incorrectly. This has since been corrected).As luck would have it, this is just a flexbox thing. I solved it with some combination of flex-wrap: wrap, display: flex, and setting my own flex attributes (at the time of posting, angular-material had set the flex attributes incorrectly. This has since been corrected).', NULL, 'As luck would have it, this is just a flexbox thing. I solved it with some combination of flex-wrap: wrap, display: flex, and setting my own flex attributes (at the time of posting, angular-material had set the flex attributes incorrectly. This has s', 'As luck would have it, this is just a flexbox thing. I solved it with some combination of flex-wrap: wrap, display: flex, and setting my own flex attributes (at the time of posting, angular-material had set the flex attributes incorrectly. This has s', 'As luck would have it, this is just a flexbox thing. I solved it with some combination of flex-wrap: wrap, display: flex, and setting my own flex attributes (at the time of posting, angular-material had set the flex attributes incorrectly. This has s', 'As luck would have it, this is just a flexbox thing. I solved it with some combination of flex-wrap: wrap, display: flex, and setting my own flex attributes (at the time of posting, angular-material had set the flex attributes incorrectly. This has s', '2', NULL),
(17, 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', NULL, 'lala', 'lalalala', 'lalalalalalala', 'la', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `q_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`q_id`, `user_id`, `answer`) VALUES
(8, 1001, 1),
(3, 1001, 2),
(9, 1001, 2),
(5, 1001, 2),
(13, 1001, 2),
(7, 1001, 2),
(16, 1001, 2),
(2, 1001, 2),
(4, 1001, 2),
(12, 1001, 2);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`user_id`, `name`, `score`) VALUES
(1000, 'as', 0),
(1001, 'Mriyam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` char(128) NOT NULL,
  `level` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `level`) VALUES
(1000, 'admin', '$2y$10$Ea2OfYAH5QC/2SFdQBveXurpt1GU0gfKhJHUEJASCRlsMyyI/N1Na', 1),
(1001, 'abcd', '$2y$10$YrZWP9os2yUifmQbmX0RZOG5yzOLJMw2GnD4IIMVXK3KnEvxIs4IO', 0),
(1002, 'tahaa', '$2y$10$nSylEiKRjHca1wmPcEj.deS4l2/0fVo9jyxLvPSdbqLMmd7VSftTq', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `img` (`img`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
