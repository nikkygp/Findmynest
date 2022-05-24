-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 06:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_findmynest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ads`
--

CREATE TABLE `tbl_ads` (
  `ad_id` int(10) NOT NULL,
  `ad_title` varchar(30) NOT NULL,
  `ad_description` varchar(1500) NOT NULL,
  `ad_price` varchar(15) NOT NULL,
  `ad_cat` varchar(20) NOT NULL,
  `ad_type` varchar(20) NOT NULL,
  `ad_loc` varchar(20) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `createdDate` varchar(30) NOT NULL,
  `room` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `ad_feature` varchar(15) NOT NULL,
  `area` varchar(10) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `feature1` varchar(30) NOT NULL,
  `feature2` varchar(30) NOT NULL,
  `feature3` varchar(30) NOT NULL,
  `feature4` varchar(30) NOT NULL,
  `feature5` varchar(30) NOT NULL,
  `feature6` varchar(30) NOT NULL,
  `feature7` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `seller_name` varchar(30) NOT NULL,
  `seller_email` varchar(40) NOT NULL,
  `ad_status` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ads`
--

INSERT INTO `tbl_ads` (`ad_id`, `ad_title`, `ad_description`, `ad_price`, `ad_cat`, `ad_type`, `ad_loc`, `lat`, `lng`, `createdDate`, `room`, `bathroom`, `bedroom`, `ad_feature`, `area`, `image1`, `image2`, `image3`, `feature1`, `feature2`, `feature3`, `feature4`, `feature5`, `feature6`, `feature7`, `username`, `seller_name`, `seller_email`, `ad_status`, `status`) VALUES
(36, 'House For Sale', 'Good Furnished House For Sale', '5000000', 'Sale', 'House', 'Kanjirappally', '9.568339218436321', '76.77342798471321', '07/12/2021', 4, 4, 4, 'no', '3500', '1.jpg', '1.jpg', '1.jpg', 'Semi-furnished', '1', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '10', 'nikkygeorgephilip2018@gmail.com', '', '', '', 0),
(38, 'House For Sale', 'Good Furnished House For Sale', '5000000', 'Sale', 'House', 'Erumely', '9.48558006451264', '76.846963103774', '07/12/2021', 4, 4, 4, 'no', '3500', '4.jpg', '4.jpg', '4.jpg', 'Fully-Furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '10', 'nikkygeorgephilip2018@gmail.com', '', '', '', 1),
(41, 'Villa For Rent In Mundakkayam', 'Villa For Rent', '10000', 'Rent', 'Villa', 'Mundakkayam', '9.543447410482715', '76.86964912084441', '08/12/2021', 4, 3, 4, 'no', '3300', 'g9.jpg', 'g9.jpg', 'g9.jpg', 'Semi-furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'athul@gmail.com', '', '', '', 2),
(43, 'Villa For Sale', 'Furnished Villa For Sale', '10000000', 'Sale', 'Villa', 'Punalur', '9.018518881573721', '76.91682754013743', '08/12/2021', 5, 4, 4, 'no', '4000', 'g7.jpg', 'g7.jpg', 'g7.jpg', 'Fully-Furnished', '1', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '12', 'ligin@gmail.com', '', '', '', 2),
(45, 'House For Sale', 'Beautiful House', '8000000', 'Sale', 'House', 'Erumely', '9.48558006451264', '76.846963103774', '08/12/2021', 5, 4, 4, 'no', '3600', 'v3.jpg', 'v3.jpg', 'v3.jpg', 'Semi-furnished', '1', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '10', 'ligin@gmail.com', '', '', '', 2),
(46, 'Villa For Rent', 'Water Front Villa For Rent', '30000', 'Rent', 'Villa', 'Kottarakkara', '9.000952819724585', '76.76845059248087', '08/12/2021', 4, 3, 3, 'no', '3500', 'v2.jpg', 'v2.jpg', 'v2.jpg', 'Fully-Furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '7', 'ligin@gmail.com', '', '', '', 2),
(50, 'Villa For Rent', 'Villa In Town ', '35000', 'Rent', 'Villa', 'Erattupetta', '9.69612615319776', '76.7684301919772', '08/12/2021', 4, 4, 2, 'no', '3250', 'v5.jpg', 'v5.jpg', 'v5.jpg', 'Fully-Furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '10', 'athul@gmail.com', '', '', '', 3),
(58, 'Villa For Sale In Mundakkayam', 'Good Furnished Villa For Sale', '12000000', 'Sale', 'Villa', 'Erumely', '9.48558006451264', '76.846963103774', '15/12/2021', 4, 4, 4, 'yes', '3700', 'h2.jpg', 'h2.jpg', 'h2.jpg', 'Semi-furnished', '1', 'Less than 1 KM', 'Less than 1 KM', '', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', 'sold', 1),
(59, 'Apartment For Rent', 'Good Apartment For Rent', '30000', 'Rent', 'Apartment', 'Erumely', '9.48558006451264', '76.846963103774', '15/12/2021', 3, 3, 3, 'yes', '3000', 'ap5.jpg', 'ap5.jpg', 'ap5.jpg', 'Fully-Furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', 'sold', 1),
(60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'Sale', 'House', 'Kottayam', '9.483409390807568', '76.84656236819369', '15/12/2021', 4, 4, 4, 'yes', '3400', 'h1.jpg', 'h1.jpg', 'h1.jpg', 'Semi-furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', '', 2),
(61, 'House For Sale', 'Good Furnished House For Sale', '25500000', 'Sale', 'House', 'Mundakkayam', '9.543447410482715', '76.86964912084441', '15/12/2021', 4, 4, 4, 'yes', '3600', 'h7.jpg', 'h7.jpg', 'h7.jpg', 'Fully-Furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', '', 2),
(62, 'House For Sale', 'Good Furnished House For Sale', '9500000', 'Sale', 'House', 'Kottayam', '9.543447410482715', '76.86964912084441', '15/12/2021', 4, 4, 4, 'yes', '3600', 'h7.jpg', 'h7.jpg', 'h7.jpg', 'Semi-furnished', '1', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', '', 2),
(63, 'Good looking House For Sale', 'Good Furnished House For Sale', '9000000', 'Sale', 'House', 'Mundakkayam', '9.543447410482715', '76.86964912084441', '15/12/2021', 4, 4, 4, 'yes', '3600', 'h7.jpg', 'h7.jpg', 'h7.jpg', 'Fully-Furnished', '1', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', '', 2),
(64, 'House For Sale', 'Good Furnished House For Sale', '8500000', 'Sale', 'House', 'Kottayam', '9.543447410482715', '76.86964912084441', '15/12/2021', 4, 4, 4, 'yes', '3600', 'h7.jpg', 'h7.jpg', 'h7.jpg', 'Semi-furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', '', 2),
(66, 'Good House For Sale', 'Good Furnished House For Sale', '12500000', 'Sale', 'House', 'Erumely', '9.543447410482715', '76.86964912084441', '15/12/2021', 4, 4, 4, 'yes', '3600', 'h7.jpg', 'h7.jpg', 'h7.jpg', 'Semi-furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', '', 2),
(67, 'Good Semi-Furnished House', 'Good Semi-Furnished House For Sale in Erumely', '14500000', 'Sale', 'House', 'Erumely', '9.543447410482715', '76.86964912084441', '04/04/2022', 4, 4, 4, 'yes', '3450', 'h7.jpg', 'h7.jpg', 'h7.jpg', 'Semi-furnished', '2', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', 'Less than 1 KM', '12', 'jerin@gmail.com', 'Nikky', 'nikky@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agents`
--

CREATE TABLE `tbl_agents` (
  `agent_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `place` varchar(30) NOT NULL,
  `createdDate` varchar(30) NOT NULL,
  `commission` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'agent',
  `avg_rating` varchar(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agents`
--

INSERT INTO `tbl_agents` (`agent_id`, `name`, `email`, `password`, `address`, `phone`, `place`, `createdDate`, `commission`, `role`, `avg_rating`, `status`) VALUES
(2, 'Nikky', 'nikky@gmail.com', 'bV4ExUM/', 'Parathodu', '7594959975', 'Kottayam', '09/12/2021', '3', 'agent', '3.5', 1),
(3, 'Athul', 'athuls@gmail.com', 'bV4ExUM/', 'Parathodu', '7594959975', 'Erumely', '10/12/2021', '9', 'agent', '', 1),
(4, 'Ligin', 'ligin@gmail.com', 'bV4ExUM/', 'Kannimala', '6282522293', 'Kottayam', '09/12/2021', '7', 'agent', '4', 1),
(5, 'Ajith', 'ajith@gmail.com', 'bV4ExUM/', 'Street V', '8921347184', 'Erumely', '10/12/2021', '10', 'agent', '4', 1),
(6, 'Sam', 'sam@gmail.com', 'bV4ExUM/', 'Kannimala', '6284122293', 'Kottayam', '09/12/2021', '8', 'agent', '4', 1),
(7, 'Ananthu', 'ananthu@gmail.com', 'bV4ExUM/', 'Street V', '8521347184', 'Alappuzha', '10/12/2021', '5', 'agent', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(10) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `seller_email` varchar(20) NOT NULL,
  `appointment_status` varchar(20) NOT NULL DEFAULT 'Request Send',
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `ad_id`, `user`, `date`, `time`, `message`, `seller_email`, `appointment_status`, `status`) VALUES
(1, 60, 'nikkygeorgephilip2018@gmail.com', '2022-04-04', '09:30 am', 'I want to discuss more about the property( House For Sale In Mundakkayam)', 'nikky@gmail.com', 'Approved', 1),
(3, 61, 'nikkygeorgephilip2018@gmail.com', '2022-04-07', '10:30 am', 'I want to discuss more about the property( House For Sale)', 'nikky@gmail.com', 'Request Send', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `en_id` int(10) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `m_from` varchar(40) NOT NULL,
  `date_from` varchar(30) NOT NULL,
  `m_to` varchar(40) NOT NULL,
  `date_to` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `reply` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`en_id`, `ad_id`, `m_from`, `date_from`, `m_to`, `date_to`, `message`, `reply`, `status`) VALUES
(26, 61, 'nikkygeorgephilip2018@gmail.com', '01/04/2022 10:30:57am', 'nikky@gmail.com', '', 'dds', '', 1),
(27, 61, 'nikkygeorgephilip2018@gmail.com', '04/04/2022 08:54:45am', 'nikky@gmail.com', '', 'kjkj', '', 1),
(28, 62, 'nikkygeorgephilip2018@gmail.com', '06/04/2022 12:35:29pm', 'nikky@gmail.com', '', 'is it available', '', 1),
(29, 62, 'nikkygeorgephilip2018@gmail.com', '12/04/2022 10:24:17am', 'nikky@gmail.com', '', 'jdwqkd', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favourites`
--

CREATE TABLE `tbl_favourites` (
  `fav_id` int(20) NOT NULL,
  `ad_id` bigint(30) NOT NULL,
  `ad_title` varchar(100) NOT NULL,
  `ad_description` varchar(1500) NOT NULL,
  `ad_price` varchar(30) NOT NULL,
  `ad_type` varchar(20) NOT NULL,
  `ad_cat` varchar(20) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `ad_loc` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_favourites`
--

INSERT INTO `tbl_favourites` (`fav_id`, `ad_id`, `ad_title`, `ad_description`, `ad_price`, `ad_type`, `ad_cat`, `image1`, `ad_loc`, `username`, `status`) VALUES
(4, 40, 'Villa For Sale In Pala', 'Good Villa For Sale In Pala', '7500000', 'Villa', 'Sale', 'g14.jpg', 'Pala', 'nikkygeorgephilip2018@gmail.com', 0),
(5, 44, 'Apartment For Rent', 'Good Apartment For Rent', '15000', 'Apartment', 'Rent', 'ap1.jpg', 'Ponkunnam', 'nikkygeorgephilip2018@gmail.com', 0),
(6, 42, 'House For Rent In Haripad', 'Good Semi Furnished House In City', '7000', 'House', 'Rent', 'g10.jpg', 'Haripad', '', 0),
(11, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(12, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(13, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(14, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(15, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(16, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(17, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(18, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(19, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(20, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(21, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(22, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(23, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(24, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(25, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(26, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(27, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(28, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(29, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(30, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(31, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(32, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(33, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(34, 61, 'House For Sale', 'Good Furnished House For Sale', '25500000', 'House', 'Sale', 'h7.jpg', 'Mundakkayam', 'nikkygeorgephilip2018@gmail.com', 0),
(35, 61, 'House For Sale', 'Good Furnished House For Sale', '25500000', 'House', 'Sale', 'h7.jpg', 'Mundakkayam', 'nikkygeorgephilip2018@gmail.com', 0),
(36, 61, 'House For Sale', 'Good Furnished House For Sale', '25500000', 'House', 'Sale', 'h7.jpg', 'Mundakkayam', 'nikkygeorgephilip2018@gmail.com', 0),
(37, 61, 'House For Sale', 'Good Furnished House For Sale', '25500000', 'House', 'Sale', 'h7.jpg', 'Mundakkayam', 'nikkygeorgephilip2018@gmail.com', 0),
(38, 61, 'House For Sale', 'Good Furnished House For Sale', '25500000', 'House', 'Sale', 'h7.jpg', 'Mundakkayam', 'nikkygeorgephilip2018@gmail.com', 0),
(39, 59, 'Apartment For Rent', 'Good Apartment For Rent', '30000', 'Apartment', 'Rent', 'ap5.jpg', 'Erumely', 'nikkygeorgephilip2018@gmail.com', 0),
(40, 45, 'House For Sale', 'Beautiful House', '8000000', 'House', 'Sale', 'v3.jpg', 'Erumely', 'nikkygeorgephilip2018@gmail.com', 0),
(41, 60, 'House For Sale In Mundakkayam', 'House For Sale', '8500000', 'House', 'Sale', 'h1.jpg', 'Kottayam', 'nikkygeorgephilip2018@gmail.com', 0),
(42, 61, 'House For Sale', 'Good Furnished House For Sale', '25500000', 'House', 'Sale', 'h7.jpg', 'Mundakkayam', 'nikkygeorgephilip2018@gmail.com', 0),
(43, 46, 'Villa For Rent', 'Water Front Villa For Rent', '30000', 'Villa', 'Rent', 'v2.jpg', 'Kottarakkara', 'nikkygeorgephilip2018@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loanapplication`
--

CREATE TABLE `tbl_loanapplication` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `loan_amt` varchar(50) NOT NULL,
  `prop_des` varchar(200) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `loan_status` varchar(20) NOT NULL DEFAULT 'Applied',
  `status` int(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_loanapplication`
--

INSERT INTO `tbl_loanapplication` (`id`, `name`, `address`, `state`, `district`, `mobile`, `email`, `age`, `occupation`, `loan_amt`, `prop_des`, `bank`, `income`, `date`, `user_id`, `loan_status`, `status`) VALUES
(13, 'Nikky', 'Kannimala', 'Kerala', 'Idukki', '7594959975', 'nikkygeorgephilip201@gmail.com', '24', 'Business', '2550505', 'Erumely', 'Catholic Syrian Bank Ltd', '25000', '07/03/2022', 'nikkygeorgephilip2018@gmail.com', 'Applied', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE `tbl_notifications` (
  `id` int(20) NOT NULL,
  `notification` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time` varchar(200) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notifications`
--

INSERT INTO `tbl_notifications` (`id`, `notification`, `username`, `date_time`, `type`, `status`) VALUES
(3, 'Your Ad has been activated', 'nikkygeorgephilip2018@gmail.com', '07/12/2021 09:01:39pm', 'Ad Activated', 1),
(4, 'Your Ad has been activated', 'nikkygeorgephilip2018@gmail.com', '07/12/2021 10:22:42pm', 'Ad Activated', 1),
(5, 'Your Ad has been activated', 'athul@gmail.com', '08/12/2021 08:56:28am', 'Ad Activated', 1),
(6, 'Your Ad has been activated', 'athul@gmail.com', '08/12/2021 08:56:30am', 'Ad Activated', 1),
(7, 'Your Ad has been activated', 'ligin@gmail.com', '08/12/2021 08:56:32am', 'Ad Activated', 1),
(8, 'Your Ad has been activated', 'ligin@gmail.com', '08/12/2021 08:56:34am', 'Ad Activated', 1),
(9, 'Your Ad has been activated', 'ligin@gmail.com', '08/12/2021 09:47:56am', 'Ad Activated', 1),
(10, 'Your Ad has been activated', 'ligin@gmail.com', '08/12/2021 09:47:59am', 'Ad Activated', 1),
(11, 'Your Ad has been activated', 'ligin@gmail.com', '08/12/2021 10:10:08am', 'Ad Activated', 1),
(12, 'Your Ad has been activated', 'athul@gmail.com', '08/12/2021 10:10:12am', 'Ad Activated', 1),
(13, 'Your Ad has been activated', 'athul@gmail.com', '08/12/2021 10:10:16am', 'Ad Activated', 1),
(14, 'Your Ad has been activated', 'athul@gmail.com', '08/12/2021 10:12:41am', 'Ad Activated', 1),
(15, 'Your Ad has been activated', 'nikkygeorgephilip2018@gmail.com', '02/02/2022 10:06:32am', 'Ad Activated', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `added_on` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`id`, `name`, `amount`, `payment_status`, `added_on`) VALUES
(17, 'Nikky', '600', 'pending', '2022-05-05 08:37:36'),
(18, 'Nikky', '600', 'pending', '2022-05-05 08:39:43'),
(19, 'Nikky', '600', 'pending', '2022-05-05 08:42:43'),
(20, 'Nikky', '600', 'Completed', '2022-05-05 08:50:47'),
(21, 'Nikky', '600', 'Completed', '2022-05-05 08:51:34'),
(22, '', '600', 'Completed', '2022-05-06 05:42:07'),
(23, 'Nikky', '600', 'Completed', '2022-05-06 05:54:37'),
(24, 'Nikky', '600', 'Completed', '2022-05-06 05:55:11'),
(25, 'Nikky', '600', 'Completed', '2022-05-06 06:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_places`
--

CREATE TABLE `tbl_places` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `district` varchar(40) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_places`
--

INSERT INTO `tbl_places` (`id`, `name`, `district`, `lat`, `lng`, `status`) VALUES
(16, 'Kanjirappally', 'Kottayam', 9.568339218436321, 76.77342798471321, 1),
(17, 'Ponkunnam', 'Kottayam', 9.566161965216555, 76.75622388604857, 1),
(19, 'Ranny', 'Pathanamthitta', 9.3924072813407, 76.78140699296648, 1),
(20, 'Mundakkayam', 'Kottayam', 9.543447410482715, 76.86964912084441, 1),
(21, 'Pala', 'Kottayam', 9.71488636460711, 76.68278340624758, 1),
(22, 'Erattupetta', 'Kottayam', 9.69612615319776, 76.7684301919772, 1),
(24, 'Adoor', 'Pathanamthitta', 9.159934451138499, 76.73881389160378, 1),
(25, 'Kottarakkara', 'Kollam', 9.000952819724585, 76.76845059248087, 1),
(26, 'Changanassery', 'Kottayam', 9.456076706130558, 76.5281391799423, 1),
(27, 'Cherthala', 'Alappuzha', 9.694251759228157, 76.34011335994636, 1),
(28, 'Punalur', 'Kollam', 9.018518881573721, 76.91682754013743, 1),
(29, 'Haripad', 'Alappuzha', 9.282645273012397, 76.45545619675364, 1),
(30, 'Mavelikara', 'Alappuzha', 9.284924186281245, 76.53876728674791, 1),
(31, 'Kanjirappally', 'Kottayam', 9.568339218436321, 76.77342798471321, 1),
(32, 'Erumely', 'Kottayam', 9.483409390807568, 76.84656236819369, 1),
(33, 'Kottayam', 'Kottayam', 9.59120144393329, 76.52192581986142, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_queries`
--

CREATE TABLE `tbl_queries` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_queries`
--

INSERT INTO `tbl_queries` (`id`, `name`, `email`, `phone`, `message`, `username`, `reply`, `status`) VALUES
(0, 'nikky', 'ligin532@gmail.com', '7594959975', 'sss', 'nikkygeorgephilip2018@gmail.co', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requirements`
--

CREATE TABLE `tbl_requirements` (
  `req_id` int(20) NOT NULL,
  `req_price` varchar(30) NOT NULL,
  `req_type` varchar(30) NOT NULL,
  `req_loc` varchar(50) NOT NULL,
  `furnish_status` varchar(20) NOT NULL,
  `parkspaces` varchar(20) NOT NULL,
  `createdDate` varchar(100) NOT NULL,
  `room` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `area` int(20) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requirements`
--

INSERT INTO `tbl_requirements` (`req_id`, `req_price`, `req_type`, `req_loc`, `furnish_status`, `parkspaces`, `createdDate`, `room`, `bathroom`, `bedroom`, `area`, `user_mail`, `status`) VALUES
(1, '250000', 'House', 'Kottayam', 'Semi-furnished', '1', '06/04/2022', 4, 4, 2, 3500, 'nikkygeorgephilip2018@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `r_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `c_date` varchar(30) NOT NULL,
  `review` varchar(100) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `agent_id` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`r_id`, `name`, `email`, `c_date`, `review`, `rating`, `agent_id`, `status`) VALUES
(18, 'vv', 'nikkygeorgephilip2018@gmail.com', '28/03/2022', 'nice service', '5', 3, 1),
(199, 'dd', 'nikkygeorgephilip2018@gmail.com', '03/04/2022', 'good dealing', '4', 4, 1),
(200, 'nikky', 'nikkygeorgephilip2018@gmail.com', '04/04/2022', 'nice work', '4', 7, 1),
(201, 'nikky', 'nikkygeorgephilip2018@gmail.com', '06/04/2022', 'nice work', '4', 6, 1),
(202, '', 'nikkygeorgephilip2018@gmail.com', '03/05/2022', 'good', '3.5', 2, 1),
(203, '', 'nikkygeorgephilip2018@gmail.com', '06/05/2022', 'good', '4', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sold_properties`
--

CREATE TABLE `tbl_sold_properties` (
  `id` int(20) NOT NULL,
  `agent` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  `sold_date` varchar(200) NOT NULL,
  `status` int(30) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sold_properties`
--

INSERT INTO `tbl_sold_properties` (`id`, `agent`, `title`, `price`, `image`, `sold_date`, `status`) VALUES
(5, 'nikky@gmail.com', 'Villa For Sale In Mundakkayam', '12000000', 'h2.jpg', '06/04/2022', 1),
(6, 'nikky@gmail.com', 'Apartment For Rent', '30000', 'ap5.jpg', '06/04/2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercredentials`
--

CREATE TABLE `tbl_usercredentials` (
  `user_id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `createdDate` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usercredentials`
--

INSERT INTO `tbl_usercredentials` (`user_id`, `email`, `pass`, `createdDate`, `role`, `status`) VALUES
(4, 'nikkygeorgephilip2018@gmail.com', 'bV4ExUM/y6Xt', '22/11/2021', 'user', 1),
(5, 'nikky@gmail.com', 'bV4ExUM/', '25/11/2021', 'user', 0),
(6, 'neena@gmail.com', 'fEwX0VYp3A==', '07/12/2021', 'user', 0),
(7, 'athul@gmail.com', 'bV4ExUM/', '08/12/2021', 'user', 1),
(8, 'ligin@gmail.com', 'MAVQmBhJza/n', '08/12/2021', 'user', 1),
(15, 'jerin@gmail.com', 'bV4ExUM/y6Xt', '08/12/2021', 'user', 1),
(16, 'jerin1@gmail.com', 'bV4ExUM/', '14/12/2021', 'user', 1),
(17, 'athul2@gmail.com', 'bV4ExUM/', '15/12/2021', 'user', 1),
(18, 'ligin789@gmail.com', 'HgNFnzY4zq4=', '05/04/2022', 'user', 1),
(19, 'ligin789@gmail.com\"', 'EAVQmBhJza/n', '05/04/2022', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userdetails`
--

CREATE TABLE `tbl_userdetails` (
  `user_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `place` varchar(100) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `createdDate` varchar(20) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userdetails`
--

INSERT INTO `tbl_userdetails` (`user_id`, `fname`, `address`, `phone`, `place`, `profile_pic`, `createdDate`, `status`) VALUES
(4, 'Nikky', '', '7594959975', 'Erumely', '', '22/11/2021', 1),
(5, 'nikky', '', '7594959975', '', '', '25/11/2021', 0),
(6, '   ', 'Parathodu', '8767890665', 'erumely1', '', '07/12/2021', 0),
(7, 'Athul', '', '8921347184', '', '', '08/12/2021', 1),
(8, 'Ligin', '', '6282522263', '', '', '08/12/2021', 1),
(15, 'jerin', '', '7594959975', '', '', '08/12/2021', 1),
(16, 'Jerin', '', '7594959975', 'Pala', '', '14/12/2021', 1),
(17, 'Athul', '', '7902341373', 'Kanjirappally', '', '15/12/2021', 1),
(18, 'Ligin', '', '6282525344', 'SHOW DATABASES;', '', '05/04/2022', 1),
(19, 'Werwrw', '', '9496865129', 'Ewerwerw', '', '05/04/2022', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_agents`
--
ALTER TABLE `tbl_agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `tbl_favourites`
--
ALTER TABLE `tbl_favourites`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `tbl_loanapplication`
--
ALTER TABLE `tbl_loanapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_places`
--
ALTER TABLE `tbl_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_requirements`
--
ALTER TABLE `tbl_requirements`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_sold_properties`
--
ALTER TABLE `tbl_sold_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_userdetails`
--
ALTER TABLE `tbl_userdetails`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  MODIFY `ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_agents`
--
ALTER TABLE `tbl_agents`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `en_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_favourites`
--
ALTER TABLE `tbl_favourites`
  MODIFY `fav_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_loanapplication`
--
ALTER TABLE `tbl_loanapplication`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_places`
--
ALTER TABLE `tbl_places`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_requirements`
--
ALTER TABLE `tbl_requirements`
  MODIFY `req_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `tbl_sold_properties`
--
ALTER TABLE `tbl_sold_properties`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_userdetails`
--
ALTER TABLE `tbl_userdetails`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
