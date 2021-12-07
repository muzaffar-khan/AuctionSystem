-- phpMyAdmin SQL Dump
-- version 5.1.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 12:06 PM
-- Server version: 8.0.13
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bidding`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_products`
--

CREATE TABLE IF NOT EXISTS `add_products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `desp` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `add_products`
--

INSERT INTO `add_products` (`p_id`, `p_name`, `category`, `price`, `image`, `desp`) VALUES
(7, 'Loudspeaker', 'Electronic', '1500', 'Loudspeaker.jpg', 'Vintage Speaker'),
(5, 'Diamond Ring', 'Jewellery', '757000', 'ring.jpg', 'Marquise Diamond Ring'),
(6, 'Pocket Watch', 'Jewellery', '2500', 'watch.jpg', 'Vintage Waltham pocket watch'),
(8, 'Pendant', 'Jewellery', '15000', 'chain.jpg', 'Gorgeous golden brass pendant with 4 flower prongs');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pwd`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE IF NOT EXISTS `bidding` (
  `bid_id` int(3) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `bid_price` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `add` varchar(100) NOT NULL,
  `ph` bigint(10) NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bid_id`, `date`, `product_name`, `category`, `price`, `bid_price`, `name`, `email`, `add`, `ph`) VALUES
(6, '2021-12-06', 'Pocket Watch', 'Jewellery', '3500', '2500', 'Muzaffar', 'muzaffar@gmail.com', 'Mumbai', 9876543280),
(2, '2021-12-07', 'Diamond Ring', 'Jewellery', '3500', '75700', 'Muzaffar', 'muzaffar@gmail.com', 'Mumbai', 9876543280),
(5, '2021-11-26', 'Loudspeaker', 'Electronic', '25000', '1500', 'Danish', 'danish123@gmail.com', 'Mumbai', 9876543219),
(4, '2021-11-22', 'Loudspeaker', 'Electronic', '25000', '1500', 'Danish', 'danish123@gmail.com', 'Mumbai', 9876543219);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `f_name`, `l_name`, `email`, `pass`, `dob`, `gender`, `address`, `phone`) VALUES
(4, 'Danish', 'Jamadar', 'danish123@gmail.com', '12345', '11-06-2001', 'male', 'Mumbai', '9876543219');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
