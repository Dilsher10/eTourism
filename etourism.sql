-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 09:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `admin_name`, `email`, `admin_password`) VALUES
(1, 'admin', '', 'admin123'),
(6, 'ali', 'ali@gmail.com', '55555'),
(7, 'adil', 'adil@gmail.com', '44444'),
(9, 'ali1', 'ali1@gmail.com', '999999'),
(11, 'Sangi', 'hussainmushahid803@gmail.com', 'sangi803');

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `id` int(11) NOT NULL,
  `airline_name` varchar(50) NOT NULL,
  `airline_from` varchar(50) NOT NULL,
  `airline_to` varchar(50) NOT NULL,
  `airline_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`id`, `airline_name`, `airline_from`, `airline_to`, `airline_price`) VALUES
(2, 'PIA', 'Karachi', 'Lahore', '18000');

-- --------------------------------------------------------

--
-- Table structure for table `airline_booking`
--

CREATE TABLE `airline_booking` (
  `id` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `customerPhone` varchar(50) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `airline_name` varchar(50) NOT NULL,
  `airline_from` varchar(50) NOT NULL,
  `airline_to` varchar(50) NOT NULL,
  `airline_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airline_booking`
--

INSERT INTO `airline_booking` (`id`, `customerName`, `customerPhone`, `customerEmail`, `airline_name`, `airline_from`, `airline_to`, `airline_price`) VALUES
(1, 'ali', '123', 'ali@gmail.com', 'PIA', 'Karachi', 'Lahore', '18000'),
(2, 'noman', '444', 'noman@gmail.com', 'PIA', 'Karachi', 'Lahore', '18000'),
(3, 'ali', '123', 'ali@gmail.com', 'PIA', 'Karachi', 'Lahore', '18000');

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `Id` int(11) NOT NULL,
  `where_to` varchar(100) NOT NULL,
  `how_many` int(11) NOT NULL,
  `arrivals` varchar(100) NOT NULL,
  `leaving` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`Id`, `where_to`, `how_many`, `arrivals`, `leaving`) VALUES
(1, '0', 2, '2021', '2021'),
(2, '0', 2, '2021', '2021'),
(3, '0', 3, '2021', '2021'),
(4, 'sukkur', 3, '2021-11-05', '2021-12-31'),
(5, 'Hyderabad', 2, '2021-11-10', '2021-12-11'),
(6, 'Moro', 1, '2021-11-29', '2021-11-30'),
(7, 'Moro', 1, '2021-11-29', '2021-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(50) NOT NULL,
  `bus_from` varchar(50) NOT NULL,
  `bus_to` varchar(50) NOT NULL,
  `bus_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `bus_from`, `bus_to`, `bus_price`) VALUES
(2, 'Faisal Movers', 'Karachi', 'Peshawar', '5000'),
(3, 'Dewao', 'Karachi', 'Quetta', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `bus_booking`
--

CREATE TABLE `bus_booking` (
  `id` int(11) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerPhone` varchar(100) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_from` varchar(100) NOT NULL,
  `bus_to` varchar(100) NOT NULL,
  `bus_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_booking`
--

INSERT INTO `bus_booking` (`id`, `customerName`, `customerPhone`, `customerEmail`, `bus_name`, `bus_from`, `bus_to`, `bus_price`) VALUES
(1, 'ali', '123', 'ali@gmail.com', 'Faisal Movers', 'Karachi', 'Peshawar', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `customorders`
--

CREATE TABLE `customorders` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Where_To` varchar(100) NOT NULL,
  `Departure` varchar(100) NOT NULL,
  `Arrival` varchar(100) NOT NULL,
  `How_Many` varchar(100) NOT NULL,
  `Room` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customorders`
--

INSERT INTO `customorders` (`Id`, `Name`, `Phone`, `Email`, `Where_To`, `Departure`, `Arrival`, `How_Many`, `Room`) VALUES
(1, 'ali', '7777', 'a@gmail.com', 'moro', '2021-12-10', '2022-01-08', '1', 1),
(2, 'tttttttttt', '777777777', 'a@gmail.com', 'moro', '2021-12-11', '2022-01-01', '33', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `Id` int(11) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerPhone` varchar(100) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `departureDate` varchar(100) NOT NULL,
  `packageName` varchar(100) NOT NULL,
  `packagePrice` varchar(100) NOT NULL,
  `packageCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`Id`, `customerName`, `customerPhone`, `customerEmail`, `departureDate`, `packageName`, `packagePrice`, `packageCategory`) VALUES
(1, 'ABC', '3333', 'a@gmail.com', '2021-12-23', 'USA', '200', 'Luxury Packages'),
(2, 'aa', '3333', 'a@gmail.com', '2021-12-11', 'USA', '200', 'Luxury Packages'),
(3, 'aa', '3333', 'a@gmail.com', '2021-12-11', 'USA', '200', 'Luxury Packages'),
(4, 'ABC', '123', 'a@gmail.com', '2021-12-10', 'USA', '200', 'Luxury Packages'),
(5, 'ABC', '123', 'a@gmail.com', '2021-12-10', 'USA', '200', 'Luxury Packages'),
(6, 'ABC', '123', 'a@gmail.com', '2021-12-10', 'USA', '200', 'Luxury Packages'),
(7, 'aa', '3333', 'a@gmail.com', '2021-12-11', 'USA', '200', 'Luxury Packages'),
(8, 'ABC', '6666', 'c@gmail.com', '2022-01-01', 'USA', '200', 'Luxury Packages'),
(9, 'ABC', '6666', 'c@gmail.com', '2022-01-01', 'USA', '200', 'Luxury Packages'),
(10, 'ABC', '6666', 'c@gmail.com', '2022-01-01', 'USA', '200', 'Luxury Packages'),
(11, 'ABC', '123', 'a@gmail.com', '2021-12-04', 'USA', '200', 'Luxury Packages'),
(12, 'ABC', '123', 'a@gmail.com', '2021-12-04', 'USA', '200', 'Luxury Packages'),
(13, 'Mail Test', '123', 'mail@gmail.com', '2021-12-21', 'USA', '200', 'Luxury Packages'),
(14, 'Mail Test', '123', 'mail@gmail.com', '2021-12-21', 'USA', '200', 'Luxury Packages'),
(15, 'Mail Test', '123', 'mail@gmail.com', '2021-12-21', 'USA', '200', 'Luxury Packages'),
(16, 'Mail Test', '123', 'mail@gmail.com', '2021-12-21', 'USA', '200', 'Luxury Packages'),
(17, 'ABC', '3333', 'mail@gmail.com', '2021-12-17', 'USA', '200', 'Luxury Packages'),
(18, 'ABC', '123', 'mail@gmail.com', '2021-11-30', 'USA', '200', 'Luxury Packages'),
(19, 'gggggggggggggggg', '777777777777777777', 'a@gmail.com', '2021-12-24', 'Sharjah', '7007', 'Luxury Packages'),
(20, 'Dilsher', '6666', 'c@gmail.com', '2021-12-18', '', '', 'Luxury Packages'),
(21, 'Dilsher', '6666', 'c@gmail.com', '2021-12-18', '', '', 'Luxury Packages'),
(22, 'Dilsher', '6666', 'c@gmail.com', '2021-12-18', '', '', 'Luxury Packages'),
(23, 'Dilsher', '6666', 'c@gmail.com', '2021-12-18', '', '', 'Luxury Packages'),
(24, 'Dilsher', '6666', 'c@gmail.com', '2021-12-18', '', '', 'Luxury Packages'),
(25, 'Dilsher', '6666', 'c@gmail.com', '2021-12-18', '', '', 'Luxury Packages'),
(26, 'ABC', '3333', 'c@gmail.com', '2021-12-25', '', '', 'Luxury Packages'),
(27, 'ABC', '3333', 'Test@gmail.com', '2022-01-07', '', '', ''),
(28, 'ABC', '3333', 'Test@gmail.com', '2022-01-07', '', '', ''),
(29, 'Dilsher', '123', 'mail@gmail.com', '2022-01-06', '', '', ''),
(30, 'Dilsher', '123', 'mail@gmail.com', '2022-01-06', '', '', ''),
(31, 'Dilsher', '123', 'mail@gmail.com', '2022-01-06', '', '', ''),
(32, 'ABC', '3333', 'Test@gmail.com', '2022-01-08', '', '', ''),
(33, 'Ali', '123', 'Ali@gmail.com', '2021-12-25', '', '', ''),
(34, 'Dilsher', '6666', 'Test@gmail.com', '2022-01-06', '', '', ''),
(35, 'Tester', '00000627251611', 'test@test.com', '3116-01-31', '', '', ''),
(36, 'Mushahid ', '03403562204', 'Hussain', '2021-11-09', '', '', ''),
(37, 'vender', '22222', 'ali@gmail.com', '2022-01-21', '', '', ''),
(38, 'vender', '22222', 'ali@gmail.com', '2022-01-21', '', '', ''),
(39, 'admin', '111', 'ali@gmail.com', '2022-01-28', 'Lahore', '40000', 'Car Packages'),
(40, 'v1', '3456', 'ali@gmail.com', '2022-02-05', '', '', ''),
(41, 'gorakh', '12345', 'ali@gmail.com', '2022-01-18', 'Gorakh hill', '7000', 'Economic Packages'),
(42, 'new', '12345', 'ali@gmail.com', '2022-01-22', 'Sharjah', '200000', 'Luxury Packages'),
(43, 'new', '12345', 'ali@gmail.com', '2022-01-22', 'Sharjah', '200000', 'Luxury Packages'),
(44, 'Ali Ali', '12345', 'ali@gmail.com', '2022-01-27', 'Lahore', '40000', 'Car Packages'),
(45, 'Ali Ali', '12345', 'ali@gmail.com', '2022-01-27', 'Lahore', '40000', 'Car Packages'),
(46, 'Ali Ali', '12345', 'ali@gmail.com', '2022-01-22', 'Karachi', '20000', 'Farm Packages'),
(47, 'ali', '123', 'ali@gmail.com', '2022-06-30', 'London', '100000', 'Hotel Packages'),
(48, 'ali', '123', 'ali@gmail.com', '2022-06-23', 'London', '100000', 'Hotel Packages'),
(49, 'Mushahid', '03403562204', 'sangi@803.com', '2022-07-12', 'Gorakh hill', '7000', 'Economic Packages'),
(50, 'new', '123', 'ali@gmail.com', '2022-07-06', 'Karachi', '20000', 'Farm Packages'),
(51, 'mycheck', '123', 'ali@gmail.com', '2022-08-04', 'London', '100000', 'Hotel Packages'),
(52, 'ali', '123', 'dilsher.dahri10@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(53, 'ali', '123', 'dilsher.dahri10@gmail.com', '2022-08-05', 'Gorakh hill', '7000', 'Economic Packages'),
(54, 'ali', '123', 'dilsher.dahri10@gmail.com', '2022-08-05', 'Gorakh hill', '7000', 'Economic Packages'),
(55, 'new', '123', 'dilsher.dahri10@gmail.com', '2022-08-05', 'Karachi', '20000', 'Farm Packages'),
(56, 'ali', '123', 'dilsher.dahri10@gmail.com', '2022-07-28', 'Karachi', '20000', 'Farm Packages'),
(57, 'mycheck', '123', 'ali@gmail.com', '2022-07-22', 'Karachi', '20000', 'Farm Packages'),
(58, 'ali', '123', 'dilsher.dahri10@gmail.com', '2022-07-29', 'Karachi', '20000', 'Farm Packages'),
(59, 'ali', '123', 'ali@gmail.com', '2022-07-22', 'Karachi', '20000', 'Farm Packages'),
(60, 'ali', '123', 'jonnyleo482@gmail.com', '2022-07-29', 'Karachi', '20000', 'Farm Packages'),
(61, 'ali', '123', 'dilsher.dahri10@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(62, 'new', '123', 'jonnyleo482@gmail.com', '2022-08-05', 'Karachi', '20000', 'Farm Packages'),
(63, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(64, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(65, 'new', '123', 'waheedalidahri6@gmail.com', '2022-07-16', 'Karachi', '20000', 'Farm Packages'),
(66, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(67, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-07-30', 'Karachi', '20000', 'Farm Packages'),
(68, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(69, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-07-22', 'Karachi', '20000', 'Farm Packages'),
(70, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-07-29', 'Karachi', '20000', 'Farm Packages'),
(71, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(72, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-07-30', 'Karachi', '20000', 'Farm Packages'),
(73, 'ali', '123', 'ali@gmail.com', '2022-07-23', 'Karachi', '20000', 'Farm Packages'),
(74, 'ali', '123', 'ali@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(75, 'ali', '123', 'ali@gmail.com', '2022-07-30', 'Karachi', '20000', 'Farm Packages'),
(76, 'ali', '123', 'waheedalidahri6@gmail.com', '2022-08-06', 'Karachi', '20000', 'Farm Packages'),
(77, 'new', '123', 'waheedalidahri6@gmail.com', '2022-07-22', 'Karachi', '20000', 'Farm Packages');

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `Id` int(11) NOT NULL,
  `packageName` varchar(100) NOT NULL,
  `packagePrice` varchar(100) NOT NULL,
  `packageImage` varchar(200) NOT NULL,
  `packageCategory` varchar(100) NOT NULL,
  `packageDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`Id`, `packageName`, `packagePrice`, `packageImage`, `packageCategory`, `packageDescription`) VALUES
(8, 'London', '100000', '../Uploadimage/c3.jpg', 'Hotel Packages', 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.'),
(10, 'Karachi', '20000', '../Uploadimage/c1.jpg', 'Farm Packages', ' Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.'),
(11, 'Lahore', '40000', '../Uploadimage/c2.jpg', 'Car Packages', ' Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.'),
(12, 'Sharjah', '200000', '../Uploadimage/h2.jpg', 'Luxury Packages', ' Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.'),
(13, 'USA', '300000', '../Uploadimage/c4.jpg', 'Luxury Packages', ' Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.'),
(14, 'UK', '150000', '../Uploadimage/c5.jpg', 'Luxury Packages', ' Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.'),
(15, 'Canada', '500000', '../Uploadimage/5.jpg', 'Luxury Packages', 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.'),
(16, 'New York', '520000', '../Uploadimage/h4.jpg', 'Luxury Packages', 'This is luxury package'),
(18, 'Gorakh hill', '7000', '../Uploadimage/download.jpg', 'Economic Packages', 'stay 2 nights \r\nfree dj\r\nbbq\r\ntransport\r\nfree photografy '),
(23, 'Demo', '5000', '../Uploadimage/3.jpg', 'luxuryPackages', 'hhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'dilsher', 3, 'ddd', 1655881608),
(2, 'Shahbaz', 5, 'Wow', 1655881689),
(3, 'Nawaz', 5, 'Nice', 1655881716),
(4, 'Ali', 5, 'Good', 1655882240),
(5, 'admin', 4, 'ggg', 1655882756),
(6, 'hhh', 4, 'jjjj', 1655920586),
(7, 'hhh', 4, 'jjjj', 1655920588),
(8, 'hhh', 4, 'jjjj', 1655920589),
(9, 'hhh', 4, 'jjjj', 1655920589),
(10, 'hhh', 4, 'jjjj', 1655920589),
(11, 'hhh', 4, 'jjjj', 1655920590),
(12, 'hhh', 4, 'jjjj', 1655920591),
(13, 'hhh', 4, 'jjjj', 1655920591),
(14, 'hhh', 4, 'jjjj', 1655920591),
(15, 'hhh', 4, 'jjjj', 1655920591),
(16, 'h', 3, 'h', 1655923262),
(17, 'New', 5, 'Good', 1655956965),
(18, 'Check', 1, 'Bad', 1655957625),
(19, 'Test', 5, 'ggg', 1655959388),
(20, 'check', 5, 'sss', 1658241795);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userphone` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `useremail`, `userphone`, `userpassword`) VALUES
(1, 'ali', 'ali@gmail.com', '123', '11111'),
(2, 'ali', 'a@gmail.com', '555', '33333'),
(3, 'fayaz', 'fayaz@gmail.com', '4444', '4444'),
(4, 'usman', 'usman@gmail.com', '888', '888'),
(5, 'mushahid', 'hussainmushahid803@gmail.com', '468856', '1234566'),
(6, 'Tester Account', 'test@test.com', '0333336373', 'abcd1234'),
(7, '975-2018', 'hussainmushhid803@gmail.com', '03403562204', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vender`
--

CREATE TABLE `vender` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vender`
--

INSERT INTO `vender` (`Id`, `username`, `email`, `password`) VALUES
(1, 'vender', 'vender@gmail.com', 'vender123');

-- --------------------------------------------------------

--
-- Table structure for table `vender_orders`
--

CREATE TABLE `vender_orders` (
  `Id` int(11) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerPhone` varchar(100) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `departureDate` varchar(100) NOT NULL,
  `packageName` varchar(100) NOT NULL,
  `packagePrice` varchar(100) NOT NULL,
  `packageCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vender_orders`
--

INSERT INTO `vender_orders` (`Id`, `customerName`, `customerPhone`, `customerEmail`, `departureDate`, `packageName`, `packagePrice`, `packageCategory`) VALUES
(1, 'v1', '3456', 'ali@gmail.com', '2022-02-05', '', '', ''),
(2, 'v2', '12345', 'ali@gmail.com', '2022-01-27', '', '', ''),
(3, 'v2', '12345', 'ali@gmail.com', '2022-01-27', '', '', ''),
(4, 'v1', '3456', 'ali@gmail.com', '2022-02-05', '', '', ''),
(5, 'vender demo', '12345', 'ali@gmail.com', '2022-01-26', '', '', ''),
(6, 'ggg', '12345', 'ali@gmail.com', '2022-01-16', 'Demo', '5000', 'Luxury Packages'),
(7, 'ggg', '12345', 'ali@gmail.com', '2022-01-16', 'Demo', '5000', 'Luxury Packages'),
(8, 'new', '12345', 'ali@gmail.com', '2022-01-22', 'Vender Package', '5233333', 'luxuryPackages'),
(9, 'ali', '123', 'ali@gmail.com', '2022-06-29', 'Demo', '5000', 'Luxury Packages'),
(10, 'ali', '123', 'ali@gmail.com', '2022-07-02', 'Demo', '5000', 'Luxury Packages');

-- --------------------------------------------------------

--
-- Table structure for table `vender_packages`
--

CREATE TABLE `vender_packages` (
  `Id` int(11) NOT NULL,
  `packageName` varchar(100) NOT NULL,
  `packagePrice` varchar(100) NOT NULL,
  `packageImage` varchar(100) NOT NULL,
  `packageCategory` varchar(100) NOT NULL,
  `packageDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vender_packages`
--

INSERT INTO `vender_packages` (`Id`, `packageName`, `packagePrice`, `packageImage`, `packageCategory`, `packageDescription`) VALUES
(3, 'Vender Package', '5233333', '../Uploadimage/1.jpg', 'luxuryPackages', 'hhhhhhhhhhhhh'),
(8, 'Demo', '5000', '../Uploadimage/3.jpg', 'Luxury Packages', 'hhhhhhhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airline_booking`
--
ALTER TABLE `airline_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_booking`
--
ALTER TABLE `bus_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customorders`
--
ALTER TABLE `customorders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vender`
--
ALTER TABLE `vender`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vender_orders`
--
ALTER TABLE `vender_orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vender_packages`
--
ALTER TABLE `vender_packages`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airline_booking`
--
ALTER TABLE `airline_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bus_booking`
--
ALTER TABLE `bus_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customorders`
--
ALTER TABLE `customorders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vender`
--
ALTER TABLE `vender`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vender_orders`
--
ALTER TABLE `vender_orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vender_packages`
--
ALTER TABLE `vender_packages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
