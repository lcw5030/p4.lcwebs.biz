-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2013 at 04:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lcwebsbi_p4_lcwebs_biz`
--
CREATE DATABASE IF NOT EXISTS `lcwebsbi_p4_lcwebs_biz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lcwebsbi_p4_lcwebs_biz`;

-- --------------------------------------------------------

--
-- Table structure for table `bibs`
--

CREATE TABLE IF NOT EXISTS `bibs` (
  `5kPRH` int(2) NOT NULL,
  `10kPRH` int(2) NOT NULL,
  `10kRaceDetails` varchar(255) NOT NULL,
  `10kPRM` int(2) NOT NULL,
  `10kPRS` int(2) NOT NULL,
  `HalfRaceName` varchar(255) NOT NULL,
  `MarathonPRTime` time NOT NULL,
  `MarathonRaceName` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bib_id` int(11) NOT NULL AUTO_INCREMENT,
  `5kPRM` int(2) NOT NULL,
  `5kPRS` int(2) NOT NULL,
  `5kRaceDetails` varchar(255) NOT NULL,
  `halfMarathonPRH` int(2) NOT NULL,
  `halfMarathonPRM` int(2) NOT NULL,
  `halfMarathonPRS` int(2) NOT NULL,
  `halfMarathonRaceDetails` varchar(255) NOT NULL,
  `marathonPRH` int(2) NOT NULL,
  `marathonPRM` int(2) NOT NULL,
  `marathonPRS` int(2) NOT NULL,
  `marathonRaceDetails` varchar(255) NOT NULL,
  PRIMARY KEY (`bib_id`),
  UNIQUE KEY `user_id_2` (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `bibs`
--

INSERT INTO `bibs` (`5kPRH`, `10kPRH`, `10kRaceDetails`, `10kPRM`, `10kPRS`, `HalfRaceName`, `MarathonPRTime`, `MarathonRaceName`, `user_id`, `bib_id`, `5kPRM`, `5kPRS`, `5kRaceDetails`, `halfMarathonPRH`, `halfMarathonPRM`, `halfMarathonPRS`, `halfMarathonRaceDetails`, `marathonPRH`, `marathonPRM`, `marathonPRS`, `marathonRaceDetails`) VALUES
(0, 0, '', 0, 0, '', '00:00:00', '', 10, 36, 0, 0, '', 0, 0, 0, '', 0, 0, 0, ''),
(0, 0, '', 0, 0, '', '00:00:00', '', 11, 38, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(225) NOT NULL AUTO_INCREMENT,
  `created` int(225) NOT NULL,
  `modified` int(225) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` varchar(225) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `created`, `modified`, `user_id`, `post_id`, `content`) VALUES
(2, 1387560298, 1387560298, 1, 0, 'comment'),
(3, 1387561508, 1387561508, 1, 0, 'commne');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `modified`, `user_id`, `content`) VALUES
(1, 1387487417, 1387487417, 1, 'test'),
(2, 1387556780, 1387556780, 1, 'test'),
(3, 1387770497, 1387770497, 10, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE IF NOT EXISTS `races` (
  `race_id` int(11) NOT NULL AUTO_INCREMENT,
  `race_name` varchar(225) NOT NULL,
  `race_date` date NOT NULL,
  `race_start_time` int(11) NOT NULL,
  `race_fee` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`race_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `races`
--

INSERT INTO `races` (`race_id`, `race_name`, `race_date`, `race_start_time`, `race_fee`, `user_id`) VALUES
(22, 'Test', '2013-12-17', 0, 0, 1),
(23, 'new race', '2013-12-31', 0, 0, 1),
(24, 'new race', '2013-12-23', 0, 0, 1),
(25, '', '0000-00-00', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `races_users`
--

CREATE TABLE IF NOT EXISTS `races_users` (
  `first_name` int(11) NOT NULL,
  `last_name` int(11) NOT NULL,
  `race_id` int(11) NOT NULL,
  `race_users_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`race_users_id`),
  KEY `race_id` (`race_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `races_users`
--

INSERT INTO `races_users` (`first_name`, `last_name`, `race_id`, `race_users_id`) VALUES
(0, 0, 0, 1),
(0, 0, 0, 2),
(0, 0, 0, 3),
(0, 0, 0, 4),
(0, 0, 0, 5),
(0, 0, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` int(255) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`, `bio`) VALUES
(1, 1387470189, 1387470944, '4077b24e8010ba6b5be43ff40919909834e577c4', 'a044e147532a06e100b0dce4b7cfe606407c2735', 0, '', 'Dennis', 'Dennis', 0, 'This is about me'),
(2, 1387722763, 1387722763, '4ce158395b10064fe0d43aedf4e0ec0faef606c8', '0d7255f754f0adcb9142ffe85df593d24d5e9a14', 0, '', 'uytu', 'yutu', 0, ''),
(3, 1387731762, 1387731762, '513e054886d4be195f4e0489ed4b0083595f19d6', '835d42b80c2de470f60e37c65dcdd2fcf191b9dc', 0, '', 'Andy', 'Norbs', 0, ''),
(4, 1387731902, 1387731902, 'aa48495dbacd615ee5683815b6c5c8b526e162c9', '6c3ca83eee272535031b0927416dd3e1be07e0de', 0, '', 'test2', 'test2', 0, ''),
(5, 1387731920, 1387731920, '950fadd0e059071b5faf9a1d4f7ebb32b93ac683', '6c3ca83eee272535031b0927416dd3e1be07e0de', 0, '', 'test2', 'test2', 0, ''),
(6, 1387731952, 1387731952, 'c8342f42136739cf65f296cfcc51de3f33aea48a', 'a0dcfd05d91ecf1831521ba7bc187f76900b7e93', 0, '', 'test3', 'test3', 0, ''),
(7, 1387745183, 1387745183, '63433314c1c2504b549154ab9c4df8af14fbbcf1', '192c67b3958cf8f12d8ea3edee08c1ffd1c72dce', 0, '', 'test4', 'test4', 0, ''),
(8, 1387746120, 1387746120, '14130925cac0ab4b359c10cb7debea8259b4339a', '6431884256291a9a339bc66d8fd4b3d3d367a134', 0, '', 'test5', 'test5', 0, ''),
(9, 1387746588, 1387746588, 'dab402d377729f3b81408ee9f0762be0598c7118', '98f26edb80dddcd72116424b0a24f54ba7347328', 0, '', 'test6', 'test6', 0, ''),
(10, 1387746692, 1387746692, '8c1cd52bbe43f200a86bb9982996875a2b726cf8', '448daa542755f3e0b94c73ed6d4d131e54b49951', 0, '', 'test7', 'test7', 0, ''),
(11, 1387769897, 1387769897, 'c2bec0c163ea0dac9092d0d5004859b8c9344fc6', 'ad036df97b42a8ace5af9c87663eca2298b14335', 0, '', 'test9', 'test9', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_users`
--

CREATE TABLE IF NOT EXISTS `users_users` (
  `user_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK. Follower',
  `user_id_followed` int(11) NOT NULL COMMENT 'Followed',
  PRIMARY KEY (`user_user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_users`
--

INSERT INTO `users_users` (`user_user_id`, `created`, `user_id`, `user_id_followed`) VALUES
(1, 1387556788, 1, 1),
(2, 1387747619, 10, 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bibs`
--
ALTER TABLE `bibs`
  ADD CONSTRAINT `bibs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `races`
--
ALTER TABLE `races`
  ADD CONSTRAINT `races_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_users`
--
ALTER TABLE `users_users`
  ADD CONSTRAINT `users_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
