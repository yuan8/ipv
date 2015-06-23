-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 06:32 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--
CREATE DATABASE IF NOT EXISTS `voting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voting`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `url_pic` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `url_pic`, `description`, `start`, `end`, `user_id`) VALUES
(1, 'Voting Cover Book', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non justo eget sem consectetur pretium id nec libero. Nulla non sem a augue imperdiet dapibus a eu ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ut neque id nunc aliquet placerat. Donec vestibulum, elit in consectetur porta, ligula tortor sagittis orci, et pharetra purus massa et neque. Donec in nisl urna. Proin non diam ac velit auctor ullamcorper mollis non sem. Aenean pellentesque accumsan ante, non tristique nisl ultrices nec. Morbi magna ante, pharetra id tristique fermentum, rhoncus non ipsum. Nam luctus diam non quam fermentum, sit amet faucibus mi consectetur. Sed scelerisque tellus vitae blandit condimentum. Sed suscipit elit augue, faucibus semper ligula facilisis id. Sed quis accumsan velit, nec dapibus nisl. Mauris varius dapibus facilisis. Morbi nec metus mi. Quisque tincidunt felis varius felis dictum blandit', '2015-06-13', '2015-06-15', 1),
(2, 'hh', 'pin_love.png', 'bla', '2015-06-14', '2015-06-14', 1),
(3, 'Galau', '', 'hjhdj nafje ncjenj nkejnjk cneakjckje cke cnekj kjekj ekjbke kjekjes evkjesbvkesv esvkbk ensbvkes kjebvke vk vkjbvkjes kbvkje kj kbkjvkjes vesvks vkjbesjv esjkv sen vues kesv hes vjk', '2015-06-14', '2015-06-14', 1),
(4, 'kutua himti', '', 'bala bala', '2015-06-16', '2015-06-15', 1),
(5, 'mencoba add', 'pin_man.png', 'event ini saya buat untuk contoh saja, mencoba sih baru aja mencoba jadi ya di coba siapa tau bisa hahahah siapa tau jadi bagus ya gimana maunya gitu mau gimana lagi ya gitu binggung ni varanya gimana', '2015-06-15', '2015-06-15', 1),
(6, 'Nambah Satu', 'pin_love.png', '  event ini saya buat untuk contoh saja, mencoba sih baru aja mencoba jadi ya di coba siapa tau bisa hahahah siapa tau jadi bagus ya gimana maunya gitu mau gimana lagi ya gitu binggung ni varanya gimana', '2015-06-15', '2015-06-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `memberevents`
--

CREATE TABLE IF NOT EXISTS `memberevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url_pic` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `memberevents`
--

INSERT INTO `memberevents` (`id`, `event_id`, `title`, `url_pic`, `description`, `user_id`) VALUES
(1, 1, 'pikiran positiv', '', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non justo eget sem consectetur pretium id nec libero. Nulla non sem a augue imperdiet dapibus a eu ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ut neque id nunc aliquet placerat. Donec vestibulum, elit in consectetur porta, ligula tortor sagittis orci, et pharetra purus massa et neque. Donec in nisl urna. Proin non diam ac velit auctor ullamcorper mollis non sem. Aenean pellentesque accumsan ante, non tristique nisl ultrices nec. Morbi magna ante, pharetra id tristique fermentum, rhoncus non ipsum. Nam luctus diam non quam fermentum, sit amet faucibus mi consectetur. Sed scelerisque tellus vitae blandit condimentum. Sed suscipit elit augue, faucibus semper ligula facilisis id. Sed quis accumsan velit, nec dapibus nisl. Mauris varius dapibus facilisis. Morbi nec metus mi. Quisque tincidunt felis varius felis dictum blandit', 1),
(2, 1, 'speed', '', '', 1),
(3, 4, 'angga', '', '', 1),
(4, 1, 'banana', '', '/ipv/memberevents/view/1', 1),
(5, 1, 'namanya siapa', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` enum('admin','reguler','','') DEFAULT 'reguler',
  PRIMARY KEY (`id`,`email`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`) VALUES
(1, 'yuan dika lovery', 'yuanputra9@gmail.com', 'yuan.putra', 'uba1', 'reguler'),
(2, 'yanuar', 'y@gmail.com', 'y.p', 'b', 'reguler'),
(3, 'yuan', 'yuanputradewa@gmail.com', 't', 'y', 'reguler');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberevent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `memberevent_id` (`memberevent_id`,`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `memberevent_id`, `user_id`, `created`) VALUES
(7, 1, 1, '2015-06-13 04:46:45'),
(11, 1, 2, '2015-06-13 04:48:23'),
(16, 1, 3, '2015-06-13 20:45:59'),
(18, 2, 1, '2015-06-13 20:50:00'),
(19, 2, 2, '2015-06-13 20:50:57'),
(20, 2, 3, '2015-06-13 20:51:37'),
(21, 3, 1, '2015-06-15 03:46:04'),
(24, 4, 1, '2015-06-06 08:40:01'),
(25, 5, 1, '2015-06-06 08:42:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
