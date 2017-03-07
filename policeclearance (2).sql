-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 07, 2017 at 10:44 AM
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
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clearanceforms`
--

INSERT INTO `clearanceforms` (`id`, `fileno`, `orno`, `firstname`, `middlename`, `lastname`, `address`, `sex`, `civilstatus`, `dateofbirth`, `placeofbirth`, `comtaxno`, `issuedat`, `issuedon`, `purpose`, `contactnumber`, `payment`, `created_at`, `updated_at`) VALUES
(2, '235235', '235', 'jinja', 'jinja', 'jinja', 'dfaadfadf', 'Female', 'Widower', '2017-02-15', 'Davao City', '35235', 'Davao Del Sur', '0000-00-00', 'test purpose', 2147483647, '', 1487953193, 1487953193),
(3, '2342', 'fadf', 'Leila', 'de', 'Lima', 'fadfadf', 'Male', 'Single', '2017-03-01', 'davao', 'dfad', 'january1', '2017-03-29', 'SSS Requirements', 2147483647, 'PHP 25', 1488351937, 1488853952);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'NtgTF8q6Z9UyyUwQS7Ma5Bvj+uTrK/F66iMji9su1XY=', 100, 'phil@example.com', 1488854462, '2f430d0958cd42eab38c9a60097d1224d6a27584', 'a:0:{}', 1487948189, NULL),
(2, 'codekidie', 'hpXgdGzYDbwLCuh096bbjQDe6jMPti+rxm/fck2I5nw=', 1, 'leila@gmail.com', 1488346960, 'b726c7654819c1fe1b151ab1cd56c2dacf78eae9', 'a:4:{s:9:"firstname";s:5:"Leila";s:10:"middlename";s:2:"De";s:8:"lastname";s:4:"Lima";s:8:"filename";s:51:"16939256_1690082947673990_8147794026829199941_n.jpg";}', 1488346934, NULL),
(3, 'leila', '9u/fe6cZsfUQCsqMzKGDFA4yssGJ6jcTPlVZHIq+/7w=', 50, 'leilad@gmail.com', 1488852071, '396b499e5b64dd91ef8350cff08aafcd0eecf337', 'a:4:{s:9:"firstname";s:5:"Leila";s:10:"middlename";s:2:"de";s:8:"lastname";s:4:"Lima";s:8:"filename";s:51:"16939256_1690082947673990_8147794026829199941_n.jpg";}', 1488347021, NULL),
(4, 'cabage', 'wPtg7fY+iguEJsVn6FxsxDfkEWz10E2J8pyUHFEz8zI=', 50, 'cabage@gmail.com', 1488422450, 'e4a038530d14b8f6c5a71c46596bc172210d8357', 'a:4:{s:9:"firstname";s:7:"cabage1";s:10:"middlename";s:7:"cabage2";s:8:"lastname";s:7:"cabage3";s:8:"filename";s:23:"1403060163593064484.jpg";}', 1488422427, NULL),
(5, 'green', '6Pz7dFGjkTqraVbU+IaTkjJnJZHSLp3udEkfg4bECS4=', 50, 'green@gmail.com', 1488437298, 'b1051b847809cb2348a08b5a148c2c86f5b2014b', 'a:4:{s:9:"firstname";s:5:"green";s:10:"middlename";s:7:"cabbage";s:8:"lastname";s:4:"lote";s:8:"filename";s:23:"1403060163593064484.jpg";}', 1488437287, NULL);

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
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
