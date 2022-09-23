-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2021 at 12:42 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopygndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `first_name`, `last_name`, `email`, `amount`) VALUES
('96911', 'sadfsadf', '2423', 'w3423', '234234'),
('56b67d20fc2b89dbffdd', 'zdsd', 'sdfsd', 'sfsdf', '23423'),
('5928a3b13023cc8a0cde', 'ei', 'ei', 'asdf', '23423'),
('ae09a0c193102cd9852e', 'dfgsdf', 'sdfsdf', 'w323', '23523'),
('08dc1d2b0da1a75a1ba3', 'dgsd', 'werfsdf', '234', '234234'),
('ce5a438a2d69f6abef9a', 'asdfsd', 'sadfsd', 'wrw3', '2323423'),
('ec11fad4ce19d0c09808', 'aar', 'aar', 'aa', 'adsfasdf343'),
('8cb1691ccfd8c417af0e', 'aar', 'aar', 'aa', 'adsfasdf343'),
('593f866dcd01569a3170', 'a', 'sw', 'sdfsd', '2323'),
('7e9369afb93d6ea1e9bf', 'Wq', 'Sd', 'Djdjfdff', '1000'),
('4664c040040549564adf', 'sadfsd', 'asdfas', 'werw', 'w34wsr34523'),
('c2acb0a7a2ab1cfa4fae', 'sadfsd', 'asdfas', 'werw', 'w34wsr34523'),
('94aaeafd9cce1196e2a6', '', '', '', ''),
('c52cc313b3c7a1a34973', 'asdfsd', 'aar', 'aa', 'adsfasdf343'),
('51900bfe9621c7f4c599', 'sdfgsdf', 'werwe', 'sfs', 'sfsd'),
('5d4e39a9bcd7b065fcdc', 'asdfsd', 'sdfsdf', 'werwe', 'werwer'),
('8081a635d0139db268fc', 'sdfsd', 'sdfsd', 'sfsd', 'sdfsdf'),
('68edee4c6c09bd4a47c1', 'sdfsd', 'sdfsd', 'sfsd', 'sdfsdf'),
('3b864937255089abd163', 'sadfsad', 'assad', 'sadfasd', 'w23423'),
('54aa5fe6b97dd4553aac', 'sadsdf', 'sdfsd', 'sdfsd', '235235'),
('d050c854b9379f036fa6', 'sadgsdf', 'asdfasd', '234523', 'swfsdfsdf'),
('057b3739c69bed72b7ae', 'asdfsda', 'asfd', 'werwe', 'wewer'),
('75a1bd40f52fac8cfa92', 'asdfsd', 'sdfsdf', '234', '23423'),
('d733db1b9d54b9193c5b', 'aa', 'aa', 'aungphonewiki', '123'),
('5bf61dffbbda145f6e66', 'sadfsda', 'asfsad', 'asdfdsa', 'afads');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_description` text NOT NULL,
  `item_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_code`, `item_description`, `item_price`) VALUES
(1, 'Grease', 'HP38AST', 'General purpose Grease', '50'),
(2, 'Adhesive Epoxy', 'AS38DM33', 'Sealing epoxy', '20'),
(3, 'Connector 2 Way', 'PH848383', 'To be used for power supply connection in ABB Molding Machine', '500'),
(4, 'Laser Sensor', 'D383', 'Laser sensor for cutting machine', '10'),
(5, 'Power Supply 24V', 'D098', '24 Volt power supply for meter unit packing dept', '5'),
(6, 'V Belt 4', 'S34', 'V Belt for motor coupling drive used in milling machine, cutting machine, vibrator, seprator', '30'),
(7, 'Pressure Sensor', 'P38AST-3938B', 'Pressure sensor 4-20mA unit for storage tanks', '6'),
(8, 'LED Light Bulb', 'L24V3', '\n  LED ights', '100'),
(9, 'Item 1', 'Code1', 'Description1', '10'),
(10, 'Item 2', 'Code 2', 'Description 2', '20'),
(11, 'Item 3Â ', 'Code 3Â ', 'Description 3Â ', '30'),
(12, 'adfsd', 'sadf', 'sadfs', '2423'),
(13, 'Gg', 'Hh', 'Thh', 'Yhh'),
(14, 'as', 'as', 'asd', 'as'),
(15, 'as', 'as', 'asd', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `uni_id` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `township` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Qty` varchar(255) NOT NULL,
  `Unit` varchar(255) NOT NULL,
  `Pure` varchar(255) NOT NULL,
  `Sale` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Remark` varchar(255) NOT NULL,
  `entrydate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
