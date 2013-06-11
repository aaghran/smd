-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2013 at 07:31 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smd`
--

-- --------------------------------------------------------

--
-- Table structure for table `facebooks`
--
create database smd;
use smd;
CREATE TABLE IF NOT EXISTS `facebooks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `fb_url` varchar(100) NOT NULL,
  `approved` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `facebooks`
--

INSERT INTO `facebooks` (`id`, `c_id`, `fb_url`, `approved`, `created_at`, `updated_at`) VALUES
(1, 2, 'https://www.facebook.com/IndianArmyOfficialPage', 0, NULL, NULL),
(2, 3, 'https://www.facebook.com/IAFJaiHind', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `googleplus`
--

CREATE TABLE IF NOT EXISTS `googleplus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `google_url` varchar(100) DEFAULT '0',
  `approved` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `googleplus`
--

INSERT INTO `googleplus` (`id`, `c_id`, `google_url`, `approved`, `created_at`, `updated_at`) VALUES
(1, 2, '0', 0, NULL, NULL),
(2, 3, '0', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `linkedins`
--

CREATE TABLE IF NOT EXISTS `linkedins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `linkedin_url` varchar(100) NOT NULL,
  `approved` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `linkedins`
--

INSERT INTO `linkedins` (`id`, `c_id`, `linkedin_url`, `approved`, `created_at`, `updated_at`) VALUES
(1, 2, '0', 0, NULL, NULL),
(2, 3, '0', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_organizations'),
('app', 'default', '002_create_users'),
('app', 'default', '003_create_facebooks'),
('app', 'default', '004_create_twitters'),
('app', 'default', '005_create_googleplus'),
('app', 'default', '006_create_linkedins');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` varchar(250) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `org_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `description`, `link`, `created_at`, `updated_at`, `org_id`) VALUES
(2, 'Indian Army', 'Ministry Of Defence ', 'http://indianarmy.nic.in/', NULL, NULL, 0),
(3, 'Indian Airforce', 'vayu sena', 'careerairforce.nic.in', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `twitters`
--

CREATE TABLE IF NOT EXISTS `twitters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `twitter_url` varchar(100) NOT NULL,
  `approved` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `twitters`
--

INSERT INTO `twitters` (`id`, `c_id`, `twitter_url`, `approved`, `created_at`, `updated_at`) VALUES
(1, 2, 'https://twitter.com/Indian_Army', 0, NULL, NULL),
(2, 3, 'https://twitter.com/IAFIndia', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fname`, `lname`, `role`, `created_at`, `updated_at`) VALUES
(1, 'aaghran', 'gijoe1', 'aaghran', 'aag', 'a', 0, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
