-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2015 at 07:39 AM
-- Server version: 5.5.34
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msg_id`, `sender`, `message`) VALUES
(1, 'hemel', 'hey!!'),
(2, 'Bob', 'Bob''s Uncle'),
(3, 'Josh', 'let''s go'),
(4, 'Josh', 'let''s go'),
(5, 'Josh', 'let''s go'),
(6, 'Josh', 'let''s go'),
(7, 'Josh', 'let''s go'),
(8, 'Josh', 'let''s go'),
(9, 'Josh', 'let''s go'),
(10, 'Josh', 'let''s go'),
(11, 'Josh', 'let''s go'),
(12, 'Hena', 'see u soon'),
(13, 'Hena', 'see u soon'),
(14, 'Hena', 'see u soon'),
(15, 'Hena', 'see u soon'),
(16, 'Hemel', ':)'),
(17, 'hemel', 'hello'),
(18, 'hemel', 'hello'),
(19, 'hemel', 'hello'),
(20, 'hemel', 'hello'),
(21, 'hemel', 'hello'),
(22, 'hemel', 'hello'),
(23, 'optima', 'hello'),
(24, 'optime', 'hy there!'),
(25, 'Hasna', 'savar'),
(26, 'Arman', 'thesis');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
