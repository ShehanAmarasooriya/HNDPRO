-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 06:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventbrite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'dil@gmail.com', '12345', 'Dilanka');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `create_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `event_create_datetime` varchar(100) NOT NULL,
  `event_start_date` varchar(100) NOT NULL,
  `event_start_time` varchar(50) NOT NULL,
  `event_end_date` varchar(50) NOT NULL,
  `event_end_time` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `author` varchar(100) NOT NULL,
  `event_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `description`, `category`, `event_create_datetime`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `location`, `image`, `author`, `event_type`) VALUES
(15, 'Circus Skills', '\r\n                    \r\nDance is a type of performance art practiced all over the world.\r\nPerforming arts\r\nAcrobatics Ballet Circus skills Clown Dance\r\nGeneral Gymnastics Magic\r\nMime Music Opera\r\nProfessional wrestling\r\nPuppetry\r\nSpeech Theatre Ventriloquism\r\nvte\r\nPerforming arts are a form of art in which artists use their voices, bodies or inanimate objects to convey artistic expression. It is different from visual arts', 'Art_and_drama', 'December-13-2018 19:51:21', '2019-04-14', '18:51', '2019-04-16', '18:51', 'Srilanka', 'homepage1drama_0.jpg', 'Shehan', 'openEvent'),
(16, 'Roman theatre', '\r\n    Western theatre developed and expanded considerably under the Romans. The Roman historian Livy wrote that the Romans first experienced theatre in the 4th century BCE, with a performance by Etruscan actors.[23] Beacham argues that they had been familiar with "pre-theatrical practices" for some time before that recorded contact                ', 'art_and_drama', 'December-13-2018 19:55:42', '2019-04-18', '23:00', '2019-14-02', '15:34', 'America', 'under-35-rj.jpg', 'Shehan', 'openEvent'),
(19, 'Excibition In Art', '\r\n                    An art exhibition is traditionally the space in which art objects (in the most general sense) meet an audience. The exhibit is universally understood to be for some temporary period unless, as is rarely true, it is stated to be a "permanent exhibition".', 'exhibition', 'December-13-2018 20:39:55', '2019-07-05', '14:33', '2019-09-07', '02:33', 'Colombo 02', 'watercolor9thAnnual_THUMBNAIL.jpg', 'Shehan', 'openEvent'),
(24, 'Cricket in Srilanka', 'Cricket news, scores and highlights produced by Cricket Australia''s digital content team. Follow @CAComms for official CA communication.\r\n\r\n\r\n                    ', 'sports', 'December-13-2018 21:07:48', '2019-12-28', '02:34', '2019-12-31', '02:32', 'Colombo 05', '7-003_usage.jpg', 'Shehan', 'openEvent'),
(25, 'Health Of Life', 'From Public Healthpublic health initiatives to personal wellbeing, find online courses covering a wide variety of health and medical subjects.\r\n                    ', 'health_and_wellness', 'December-13-2018 21:09:42', '2019-06-25', '08:00', '2019-06-26', '09:00', 'Colombo 05', 'positive-health-wellness.jpg', 'Shehan', 'openEvent'),
(26, 'Digital Dream', '\r\n                    Technology can be the knowledge of techniques, processes, and the like, or it can be embedded in machines to allow for operation without detailed knowledge of their workings. ', 'technology', 'December-13-2018 21:11:39', '2019-12-28', '09:00', '2019-12-28', '17:00', 'Kelaniya', '245511e13ecc1888b3cf9bdc3d1c8218.jpg', 'Shehan', 'closedEvent'),
(34, 'Beer festivals', 'The best guide to food and drink events in Seattle.\r\n                    ', 'food_and_drink', 'March-09-2019 15:48:59', '2019-05-09', '20:00', '2019-05-09', '10:00', 'London', 'food1.jpg', 'Dilanka', 'closedEvent'),
(35, ' Drink Business', '\r\n                    The theme of the 6th National Food & Drink Business Conference and Exhibition is Collaborating For An Innovative Food Island. Dairy, Meat, Poultry, Seafood, Bakery, Confectionery, Convenience Foods, Fresh Produce, Snacks, Brewing, Distilling, Soft Drinks, Bottled Water', 'food_and_drink', 'March-09-2019 15:58:56', '2019-04-16', '17:00', '2019-04-17', '08:00', 'America', 'food2.jpg', 'Dilanka', 'openEvent'),
(36, 'For Eating', '\r\n                    We have over 190,000 members across the country who work to champion beer and cider drinkers as well as pub and club goers. Our campaigns range from protecting pubs threatened with closure, fighting unfair taxation on beer and cider and ensuring fair competition and choice in the pub and beer market', 'food_and_drink', 'March-09-2019 16:36:17', '2019-04-05', '20:00', '2019-04-06', '14:03', 'Gampaha', 'food3.jpg', 'Dilanka', 'openEvent'),
(37, 'Rice and Curry', 'Among the most nutrient dense foods on the planet. A single ounce (28 grams) contains 11 grams of fiber, and a large part of the recommended intake for magnesium, manganese, calcium and various other nutrients\r\n                    ', 'food_and_drink', 'March-09-2019 16:44:41', '2019-04-18', '12:00', '2019-04-18', '12:00', 'Naiwala', 'food4.jpg', 'Dilanka', 'openEvent');

-- --------------------------------------------------------

--
-- Table structure for table `event_tag`
--

CREATE TABLE IF NOT EXISTS `event_tag` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(13, 'Shehan', 'shehan@gmail.com', '1234'),
(14, 'Amarasooriya', 'amarasooriya@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `create_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_count`
--

CREATE TABLE IF NOT EXISTS `user_count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `allow_participation` int(11) NOT NULL,
  `currnt_participation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user_count`
--

INSERT INTO `user_count` (`id`, `event_id`, `allow_participation`, `currnt_participation`) VALUES
(3, 12, 100, 0),
(4, 14, 250, 0),
(5, 15, 20, 0),
(6, 16, 100, 0),
(7, 18, 30, 0),
(8, 19, 20, 0),
(9, 24, 100, 0),
(10, 26, 20, 0),
(11, 27, 45, 0),
(12, 28, 20, 0),
(13, 29, 34, 0),
(14, 30, 45, 0),
(15, 31, 45, 0),
(16, 32, 56, 0),
(17, 33, 56, 0),
(18, 34, 100, 0),
(19, 35, 100, 0),
(20, 36, 20, 0),
(21, 37, 25, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
