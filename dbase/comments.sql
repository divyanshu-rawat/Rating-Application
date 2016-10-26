-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 10:00 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `item` int(11) UNSIGNED NOT NULL,
  `rate` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user`, `item`, `rate`, `date`) VALUES
(83, '::1', 11, 0, '2016-10-24 17:28:34'),
(84, '::1', 10, 1, '2016-10-24 17:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `up` int(11) UNSIGNED NOT NULL,
  `down` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `full_name`, `email`, `comment`, `date`, `active`, `up`, `down`) VALUES
(8, 'Sebastian Sulinski', 'email@mail.com', 'No soul that aspires can ever fail to rise; no heart that loves can ever be abandoned. Difficulties exist only that in overcoming them we may grow strong, and they who have suffered are able to save.', '2012-01-25 08:28:59', 1, 0, 0),
(9, 'Charles Hadden Spurgeon', 'email@mail.com', 'A good character is the best tombstone. Those who loved you, and were helped by you, will remember you when forget-me-nots have withered. Carve your name on hearts, not on marble.A good character is the best tombstone. ', '2012-01-25 08:29:00', 1, 0, 0),
(10, 'William Shakespeare', 'email@mail.com', 'This above all-to thine own self be true, and it must follow, as night follows day, thou canst not then be false to any man.', '2012-01-25 08:29:01', 1, 1, 0),
(11, 'Ivan Panin', 'email@mail.com', 'For every beauty there is an eye somewhere to see it. For every truth there is an ear somewhere to hear it. For every love there is a heart somewhere to receive it. ', '2012-01-25 08:29:03', 1, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
