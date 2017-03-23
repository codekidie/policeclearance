-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 24, 2017 at 02:52 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `policeclearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `clearanceforms`
--

CREATE TABLE `clearanceforms` (
  `id` int(11) unsigned NOT NULL,
  `fileno` varchar(255) NOT NULL,
  `orno` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `comtaxno` varchar(255) NOT NULL,
  `issuedat` varchar(255) NOT NULL,
  `issuedon` date NOT NULL,
  `purpose` text NOT NULL,
  `contactnumber` int(12) NOT NULL,
  `payment` text NOT NULL,
  `schedule` date NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `isprinted` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clearanceforms`
--

INSERT INTO `clearanceforms` (`id`, `fileno`, `orno`, `firstname`, `middlename`, `lastname`, `address`, `sex`, `civilstatus`, `dateofbirth`, `placeofbirth`, `comtaxno`, `issuedat`, `issuedon`, `purpose`, `contactnumber`, `payment`, `schedule`, `created_at`, `updated_at`, `isprinted`) VALUES
(2, '2', '235', 'jinja', 'jinja', 'jinja', 'dfaadfadf', 'Female', 'Widower', '2017-02-15', 'Davao City', '35235', 'Davao Del Sur', '0000-00-00', 'Local Employment', 2147483647, 'PHP 25', '2017-03-01', 1487953193, 1489927874, 0),
(5, '5', '35fsdf', 'Leila', 'de', 'Lima', 'Shrine Hills Matina Davao City, Shrine Hills Matina Davao City', 'Male', 'Single', '2017-03-10', 'Davao City', '24235', 'Davao Del Sur', '2017-03-10', 'Local Employment', 2147483647, 'PHP 25', '2017-03-01', 1489131696, 1489799615, 1),
(6, 'adf', '35fsdf', 'Leila', 'De', 'Lima', 'Shrine Hills Matina Davao City, Shrine Hills Matina Davao City', 'Male', 'Single', '2017-03-10', 'Davao City', '24235', 'Davao Del Sur', '2017-03-10', 'Bank Requirement', 2147483647, 'PHP 25', '2017-03-10', 1489131776, 1489131776, 1),
(7, '5', '35fsdf', 'Leila', 'de', 'Lima', 'Shrine Hills Matina Davao City, Shrine Hills Matina Davao City', 'Male', 'Single', '2017-03-10', 'Davao City', '24235', 'Davao Del Sur', '2017-03-10', 'Local Employment', 2147483647, 'PHP 25', '2017-02-08', 1489131783, 1489809908, 0),
(8, '5', '35fsdf', 'Leila', 'de', 'Lima', 'Shrine Hills Matina Davao City, Shrine Hills Matina Davao City', 'Male', 'Single', '2017-03-10', 'Davao City', '24235', 'Davao Del Sur', '2017-03-10', 'Local Employment', 2147483647, 'PHP 25', '2017-04-28', 1489131798, 1489799627, 0),
(9, '5', '35fsdf', 'Leila', 'de', 'Lima', 'Shrine Hills Matina Davao City, Shrine Hills Matina Davao City', 'Male', 'Single', '2017-03-10', 'Davao City', '24235', 'Davao Del Sur', '2017-03-10', 'Local Employment', 2147483647, 'PHP 25', '2017-03-23', 1489412063, 1489808535, 0),
(10, '5', '35fsdf', 'Leila', 'de', 'Lima', 'Shrine Hills Matina Davao City, Shrine Hills Matina Davao City', 'Male', 'Single', '2017-03-10', 'Davao City', '24235', 'Davao Del Sur', '2017-03-10', 'Local Employment', 2147483647, 'PHP 25', '2017-03-14', 1489412114, 1489799463, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_users'),
('app', 'default', '002_create_clearanceforms'),
('app', 'default', '003_create_registers');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'NtgTF8q6Z9UyyUwQS7Ma5Bvj+uTrK/F66iMji9su1XY=', 100, 'phil@example.com', 1489990997, 'caa029642f8cbc3b865917a9a58cfa0efecd8582', 'a:0:{}', 1487948189, NULL),
(2, 'codekidie', 'hpXgdGzYDbwLCuh096bbjQDe6jMPti+rxm/fck2I5nw=', 1, 'leila@gmail.com', 1489059218, '7e08b88fb33413c3e974eb17005a2724b0441f14', 'a:4:{s:9:"firstname";s:5:"Leila";s:10:"middlename";s:2:"De";s:8:"lastname";s:4:"Lima";s:8:"filename";s:51:"16939256_1690082947673990_8147794026829199941_n.jpg";}', 1488346934, NULL),
(3, 'leila', 'Equd2DHG5BFhSmKMiTvY5jV83FREejofgN+rAVVxMxM=', 50, 'leilad@gmail.com', 1490290296, 'cc8a2bd3bb72cf59fde42d3a7b016e3e47fe946e', 'a:4:{s:9:"firstname";s:5:"Leila";s:10:"middlename";s:2:"de";s:8:"lastname";s:4:"Lima";s:8:"filename";s:51:"16939256_1690082947673990_8147794026829199941_n.jpg";}', 1488347021, NULL),
(4, 'cabage', 'wPtg7fY+iguEJsVn6FxsxDfkEWz10E2J8pyUHFEz8zI=', 50, 'cabage@gmail.com', 1488422450, 'e4a038530d14b8f6c5a71c46596bc172210d8357', 'a:4:{s:9:"firstname";s:7:"cabage1";s:10:"middlename";s:7:"cabage2";s:8:"lastname";s:7:"cabage3";s:8:"filename";s:23:"1403060163593064484.jpg";}', 1488422427, NULL),
(5, 'green', '6Pz7dFGjkTqraVbU+IaTkjJnJZHSLp3udEkfg4bECS4=', 50, 'green@gmail.com', 1488437298, 'b1051b847809cb2348a08b5a148c2c86f5b2014b', 'a:4:{s:9:"firstname";s:5:"green";s:10:"middlename";s:7:"cabbage";s:8:"lastname";s:4:"lote";s:8:"filename";s:23:"1403060163593064484.jpg";}', 1488437287, NULL),
(6, 'user1', 'RgBfQE6+atyiUm9QfsYZtX25o5ZWRLGUku5xENKa9rA=', 50, 'user1@gmail.com', 0, '', 'a:4:{s:9:"firstname";s:5:"user1";s:10:"middlename";s:5:"user1";s:8:"lastname";s:5:"user1";s:8:"filename";s:0:"";}', 1489412943, NULL),
(7, 'adfafdsf', 'XQ79zpMtuU/9rAiT23+8xX5Iz7y7BZg8OPL9wQxCQRM=', 50, 'adfafdsf@gmail.com', 0, '', 'a:4:{s:9:"firstname";s:7:"adfadsf";s:10:"middlename";s:8:"adfafdsf";s:8:"lastname";s:8:"adfafdsf";s:8:"filename";s:0:"";}', 1489413123, NULL),
(8, 'adfafdsaf@gmail.com', 'ZL//VsjE8c1sejZ+x1nlIefTLGWFV1bqVYSe1gAo4eU=', 50, 'adfafdsaf@gmail.com', 0, '', 'a:4:{s:9:"firstname";s:7:"adfadsf";s:10:"middlename";s:8:"adfafdsf";s:8:"lastname";s:8:"adfafdsf";s:8:"filename";s:0:"";}', 1489413217, NULL),
(9, 'user2', 'GidNoQYpSlAVyI2FTjF31KXIksvV9t65PLaddOnPDyU=', 50, 'user2@gmail.com', 1489413244, '39317a14dec106e5f45f1525e22c6038e2c39848', 'a:4:{s:9:"firstname";s:5:"user2";s:10:"middlename";s:5:"user2";s:8:"lastname";s:5:"user2";s:8:"filename";s:0:"";}', 1489413236, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clearanceforms`
--
ALTER TABLE `clearanceforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clearanceforms`
--
ALTER TABLE `clearanceforms`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
