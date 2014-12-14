-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2014 at 10:27 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spiker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_content`
--

CREATE TABLE IF NOT EXISTS `cms_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_title` varchar(100) NOT NULL,
  `msg_content` varchar(500) NOT NULL,
  `content_position` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cms_content`
--

INSERT INTO `cms_content` (`id`, `msg_title`, `msg_content`, `content_position`) VALUES
(8, 'About Codeigniter', 'CodeIgniter is an open source rapid development web application framework, for use in building dynamic web sites with PHP. The first public version of CodeIgniter was released on February 28, 2006, and the latest stable version 2.2.0 was released June 5, 2014.\r\nCodeIgniter is loosely based on the popular Model-View-Controller development pattern. While controller classes are a necessary part of development under CodeIgniter, models and views are optional.\r\nCodeIgniter is most often noted for its', 'right'),
(9, 'Feature of Codeigniter', 'Model-View-Controller Based System\r\nExtremely Light Weight\r\nFull Featured database classes with support for several platforms.\r\nActive Record Database Support\r\nForm and Data Validation\r\nSecurity and XSS Filtering\r\nSession Management\r\nSupport for Hooks and Class Extensions\r\nLarge library of "helper" functions', 'right'),
(11, 'National security', 'The CIA admitted that some mistakes had been made, but insisted that the interrogation programme had saved lives and was "critical" to the agency''s understanding of al-Qaeda.\r\n\r\nA version of the report was finished in 2012, but there were disagreements about what should be published. Part of this process was a "classification review" by the CIA into what information should remain secret.\r\n\r\nWhen the report was published, Downing Street said any requests for redactions from the UK had been made b', 'left');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
