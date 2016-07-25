-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2016 at 06:29 AM
-- Server version: 5.7.12-0ubuntu1
-- PHP Version: 5.6.22-4+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeetforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `position` varchar(200) NOT NULL,
  `value` text NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `position`, `value`, `status`) VALUES
(1, 'Tob Banner Left', '<img src="img/jumia.jpg" width="300px" height="190px">', 'active'),
(2, 'Top Banner Middle', '<img src="img/car.jpg" width="300px" height="190px">', 'active'),
(3, 'Top Banner Right', '<img src="img/yaat.jpg" width="300px" height="190px">', 'active'),
(4, 'Bottom Banner Left', '<p> 		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- TasuedForumResponsive --> <ins class="adsbygoogle"      style="display:block"      data-ad-client="ca-pub-2296801094693345"      data-ad-slot="5437162860"      data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script> </p>', 'active'),
(5, 'Bottom Banner Middle', '<p> 		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- TasuedForumResponsive --> <ins class="adsbygoogle"      style="display:block"      data-ad-client="ca-pub-2296801094693345"      data-ad-slot="5437162860"      data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script> </p>', 'active'),
(6, 'Bottom Banner Right', '<p> 		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- TasuedForumResponsive --> <ins class="adsbygoogle"      style="display:block"      data-ad-client="ca-pub-2296801094693345"      data-ad-slot="5437162860"      data-ad-format="auto"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script> </p>', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `parentid` int(10) NOT NULL DEFAULT '0',
  `status` enum('active','inactive') NOT NULL,
  `slug` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clikes`
--

CREATE TABLE `clikes` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `commentid` int(10) NOT NULL,
  `liken` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `attachment` varchar(300) NOT NULL,
  `attachment2` varchar(300) NOT NULL,
  `attachment3` varchar(300) NOT NULL,
  `attachment4` varchar(300) NOT NULL,
  `user` varchar(300) NOT NULL,
  `likes` longtext NOT NULL,
  `timecreated` varchar(500) NOT NULL,
  `lastseen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config_name` text NOT NULL,
  `config_value` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_name`, `config_value`, `id`) VALUES
('approve_thread', 'false', 1),
('site_image', '', 2),
('site_setup', 'pending', 4),
('thread_terms', '\r\n                                                        \r\n                                                        \r\n                                                        <strong>Please Observe The Following Rules:</strong><br>\r\n1. Please post on topic always. Don\'t derail or tribalize threads.<br>\r\n2. Don\'t abuse, bully, deliberately insult/provoke, fight, or wish harm to any forum member.<br>\r\n3. Don\'t advocate or encourage violent actions against any person, tribe, race, animals, or group of people.<br>\r\n4. Discussions of the art of love-making should be restricted to the hidden sexuality section.<br>\r\n5. Don\'t post pornographic or disgusting pictures or videos on any section of ZeetForum.<br>\r\n6. Don\'t post adverts or affiliate links outside the areas where adverts are explicitly allowed.<br>\r\n7. Don\'t say or do anything that\'s detrimental to the security, success, or IMAGE of ZeetForum.<br>\r\n8. Don\'t post false information on ZeetForum.<br>\r\n9. Don\'t use ZeetForum for illegal acts, e.g fraud, piracy, and spreading malware.<br>\r\n10. Don\'t expose the identity or post pictures of any forum member  without his/her consent.<br>\r\n11. Don\'t create distracting posts e.g. posts in giant fonts or ALL CAPS or with silly gifs.<br>\r\n12. Don\'t insert promotional signatures into your posts. Use the signature feature.<br>\r\n13. Please report any post or topic that violates the rules of ZeetForum.<br>\r\n14. Please search the forum before creating a new thread on ZeetForum.<br>\r\n15. Don\'t attempt to post censored words by misspelling them.<br>\r\n16. Don\'t promote MLM schemes, HYIPS, or other questionable schemes on ZeetForum.<br>\r\n18. Don\'t spam the forum by advertising in the wrong places or posting the same content many times.<br>\r\n19. Don\'t create a new account when banned for breaking a rule. If you do, make sure we don\'t find out.<br>\r\n20. Please cooperate with the moderators, super-moderators, and administrator. Treat them with respect.<br>\r\n21. Please spell words correctly when you post, and try to use perfect grammar and punctuation.                                                                                                                                                            ', 7),
('site_title', '', 8),
('site_timezone', 'Africa/Lagos', 9),
('site_registration', 'true', 10);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `liken` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `biography` longtext NOT NULL,
  `status` enum('active','inactive','banned') NOT NULL,
  `location` text NOT NULL,
  `phoneno` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `available` int(10) NOT NULL DEFAULT '0',
  `staff` int(10) NOT NULL DEFAULT '0',
  `sex` enum('male','female') NOT NULL,
  `securityq` int(10) NOT NULL,
  `securitya` varchar(300) NOT NULL,
  `admin` int(10) NOT NULL DEFAULT '0',
  `verify` int(10) NOT NULL DEFAULT '0',
  `usertype` enum('admin','member','moderator','vip') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `securityq`
--

CREATE TABLE `securityq` (
  `id` int(10) NOT NULL,
  `content` varchar(200) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securityq`
--

INSERT INTO `securityq` (`id`, `content`, `status`) VALUES
(6, 'What is your nickname?', 1),
(7, 'What is your mother\'s maiden name', 1),
(8, 'What is your favourite color', 1),
(9, 'What is your phone no', 1),
(10, 'What is the name of your favorite lecturer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` longtext NOT NULL,
  `attachment` varchar(300) NOT NULL,
  `attachment1` varchar(200) NOT NULL,
  `attachment3` varchar(300) NOT NULL,
  `attachment4` varchar(300) NOT NULL,
  `user` varchar(300) NOT NULL,
  `timecreated` varchar(500) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `featured` enum('true','false') NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `closed` enum('true','false') NOT NULL,
  `featuredtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `title`, `content`, `attachment`, `attachment1`, `attachment3`, `attachment4`, `user`, `timecreated`, `status`, `featured`, `category_id`, `slug`, `closed`, `featuredtime`) VALUES
(1, 'How To Place Targeted Ads', 'Dear Ladies & Gentlemen,\r\n\r\nThank you for your interest in advertising on <?php echo $site_title; ?>!\r\n\r\n<?php echo $site_title; ?>! runs a Targeted Ad Platform with which any <?php echo $site_title; ?>! member can place adverts on the sections of <?php echo $site_title; ?>! where the people he/she wants to reach are most likely to be found (for example, a political party could place ads on the Political Science section with it).\r\n\r\nTo place ads on <?php echo $site_title; ?>!, the first step is to get your ad banner designed by a good graphics designer. Your ad banner must be borderless, 300 pixels wide, 190 pixels tall, less than 100kb in size, and in the PNG or JPG format. Once it\'s ready, go to your email and send  your banner ad and landing page to admin@<?php echo $site_title; ?>.com, and wait for approval. (Your ad might not be approved if it\'s deceptive or illegal or morally questionable in some way).Don\'t Worry We are working on a way to make this step easier for you guys but just bear with us for now.\r\n\r\n\r\nWe look forward to doing business with you!\r\n\r\nBest regards,\r\nAdmin,\r\n<?php echo $site_title; ?>!', '', '', '', '', 'admin', '', 'active', 'true', 0, 'ads', 'true', '2016-07-25 04:44:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clikes`
--
ALTER TABLE `clikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `securityq`
--
ALTER TABLE `securityq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clikes`
--
ALTER TABLE `clikes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `securityq`
--
ALTER TABLE `securityq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
