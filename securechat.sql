-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2015 at 04:34 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `securechat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE IF NOT EXISTS `chat_messages` (
  `sender_username` varchar(50) NOT NULL,
  `reciver_username` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `message_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`sender_username`, `reciver_username`, `message`, `message_date`) VALUES
('msdusad', 'test7', 'jjh', '2015-10-25 00:13:07'),
('msdusad', 'test7', 'dd', '2015-10-25 00:48:17'),
('msdusad', 'test7', 'vfv', '2015-10-25 12:11:20'),
('msdusad', 'arunkumar', 'send to test1', '2015-10-25 12:43:31'),
('msdusad', 'arunkumar', 'test4 id', '2015-10-25 12:44:12'),
('msdusad', 'arunkumar', 'hhh', '2015-10-25 12:49:38'),
('msdusad', 'arunkumar', '2222', '2015-10-25 12:54:57'),
('msdusad', 'test2', 'again now', '2015-10-25 12:56:07'),
('msdusad', 'test6', '6test', '2015-10-25 12:56:34'),
('msdusad', 'test6', 'hgjh', '2015-10-25 12:58:48'),
('msdusad', 'test6', 'hgjh', '2015-10-25 12:58:48'),
('msdusad', 'test6', 'hgjh', '2015-10-25 12:58:49'),
('msdusad', 'test6', 'hgjh', '2015-10-25 12:58:49'),
('msdusad', 'test6', 'hgjh', '2015-10-25 12:58:49'),
('msdusad', 'test6', 'hgjh', '2015-10-25 12:58:49'),
('msdusad', 'test6', 'nn', '2015-10-25 12:59:43'),
('msdusad', 'test6', 'final', '2015-10-25 13:00:26'),
('msdusad', 'test6', '00', '2015-10-25 13:01:14'),
('msdusad', 'test6', 'hh', '2015-10-25 13:02:15'),
('msdusad', 'test6', ' cc', '2015-10-25 13:02:56'),
('test6', 'msdusad', 'll', '2015-10-25 13:04:23'),
('msdusad', 'test6', 'vdvfvdfvdfvdvdvdf', '2015-10-25 16:25:50'),
('msdusad', 'test4', 'hi...its me', '2015-10-26 01:02:17'),
('msdusad', 'test1', 'hghj', '2015-10-26 19:28:44'),
('msdusad', 'test1', 'lol', '2015-10-26 21:15:33'),
('msdusad', 'test1', 'hhh', '2015-10-27 00:16:13'),
('msdusad', 'test1', 'hghj', '2015-10-27 00:16:20'),
('msdusad', 'test1', 'yyyy', '2015-10-27 00:16:42'),
('msdusad', '', 'lol', '2015-11-02 22:17:09'),
('msdusad', 'arunkumar', 'gfnfffffffffffffffff  fggggggggggggggggg fhfghfhfgh hfghfgh hfghgf', '2015-11-02 22:47:48'),
('msdusad', '', 'hello test 7', '2015-11-03 01:10:07'),
('msdusad', '', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2015-11-03 13:20:39'),
('msdusad', '', '', '2015-11-03 13:20:41'),
('msdusad', '', '', '2015-11-03 23:02:45'),
('msdusad', 'test3', 'hi.....test3', '2015-12-02 23:41:48'),
('msdusad', 'test7', 'll', '2015-12-08 23:53:18'),
('msdusad', 'test7', '""''''''../', '2015-12-08 23:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `leave_message`
--

CREATE TABLE IF NOT EXISTS `leave_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `leave_message`
--

INSERT INTO `leave_message` (`id`, `name`, `email`, `message`) VALUES
(14, 'dfgdfg', 'fdgfd', 'fdgf'),
(15, 'dfgdfg', 'fdgfd', 'fdgf'),
(16, 'dfgdfg', 'fdgfd', 'fdgf'),
(17, 'fgdfg', 'fdg', 'fdg'),
(18, 'fdf', 'df', 'sddgdg'),
(19, 'fdf', 'df', 'sddgdg'),
(20, 'qq', 'qq', 'qq'),
(21, 'mmm', 'mm', 'mmm'),
(22, 'mmm', 'mm', 'mmm'),
(23, 'dsfsd', 'dsf', 'dsf'),
(24, 'sg', 'ss', 'ss'),
(25, 'hh', 'hhh', 'hh'),
(26, 'hh', 'hhh', 'hh'),
(27, 'hh', 'hhh', 'hh'),
(28, 'bb', 'bb', 'bb'),
(29, 'bb', 'bb', 'bb'),
(30, 'fdg', 'dg', 'dfg'),
(31, 'n', 'n', 'n'),
(32, 'n', 'n', 'n'),
(33, 'kk', 'kk', 'kk'),
(34, 'll', 'll', 'll'),
(35, 'a', 'a', 'a'),
(36, 'a', 'a', 'a'),
(37, 'aa', 'aa', 'aa'),
(38, 'ggg', 'g', 'g'),
(39, 'ff', 'ff', 'ff'),
(40, 'fdg', 'fff', 'ff'),
(41, 'f', 'f', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `join_date` datetime NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `last_login`, `status`, `join_date`) VALUES
('arunkumar', '722279e9e630b3e731464b69968ea4b4', '2015-09-11 01:12:22', 'Offline', '2015-09-06 18:14:29'),
('msd"', 'f294572a2042d5ec91e87a88fb4f38f1', '2015-10-09 22:43:55', 'Offline', '2015-10-09 22:43:55'),
('msdusad', 'ec1d31d4ff7a4bfa4e5ca1df85410003', '2015-12-02 23:06:42', 'Online', '2015-08-30 10:22:13'),
('test1', '42b72f913c3201fc62660d512f5ac746', '2015-09-07 00:21:55', 'Offline', '2015-09-07 00:16:16'),
('test10''"''', 'b6479d95d76c3ed54b9ae35f43c646c9', '2015-09-21 21:05:58', '', '2015-09-21 21:05:58'),
('test11''"''', '76dd0183cd0f72cff804d21d383a6a89', '2015-09-21 23:04:34', 'Online', '2015-09-21 21:10:20'),
('test12''''''"', 'a1fa25d1dd613a456f815e4d21b02459', '2015-09-22 00:46:03', 'Offline', '2015-09-22 00:29:16'),
('test13''''''"', 'bb6dd86e3cf39a91fb25f56e635fa1e7', '2015-09-22 00:48:48', '', '2015-09-22 00:48:48'),
('test2', '48b83a2a920f7284c9f0e1bf03012b68', '2015-09-07 00:17:11', 'Offline', '2015-09-07 00:17:11'),
('test3', 'e12234d4575a12bfd61d61294f32b086', '2015-09-16 22:29:12', 'Online', '2015-09-07 01:14:49'),
('test4', 'e125db4ab2e60069409c5857be05d01d', '2015-11-04 01:18:14', 'Online', '2015-09-07 01:15:30'),
('test6', '8ae9db4d88e6b21cfadffbf909a2c6b1', '2015-09-18 05:07:40', 'Offline', '2015-09-18 05:07:40'),
('test7', 'cb7127945eb632e244223d3befccd92a', '2015-12-07 21:47:12', 'Online', '2015-09-18 22:26:36'),
('test8', '63a8d0a081205ac5966769ad0b50b218', '2015-09-18 23:31:15', 'Offline', '2015-09-18 23:31:15'),
('vrf', '93656d3e8b20783e498522df4c0c7492', '2015-09-20 13:31:40', '', '2015-09-20 13:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `reciver_id` varchar(50) NOT NULL,
  `sender_id` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `reciver_type` varchar(20) NOT NULL,
  `sender_type` varchar(10) NOT NULL,
  `send_time` datetime NOT NULL,
  `reciver_delete` varchar(5) NOT NULL,
  `sender_delete` varchar(5) NOT NULL,
  `tokenid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`reciver_id`, `sender_id`, `subject`, `message`, `attachment`, `reciver_type`, `sender_type`, `send_time`, `reciver_delete`, `sender_delete`, `tokenid`) VALUES
('test3', 'msdusad', 'tr', '', '', 'Inbox', 'Trash', '2015-09-17 22:37:46', '', 'yes', 0),
('arunkumar', 'msdusad', '', '', '', 'Inbox', 'Trash', '2015-09-22 01:24:23', '', 'yes', 0),
('', 'msd\\', 'draft me', 'ccdcd', '', 'Draft', '', '2015-10-12 22:48:04', '', '', 0),
('', 'test7', 'df', 'df', '', 'Trash', '', '2015-10-12 22:51:38', 'yes', 'yes', 0),
('msdusad', 'test7', 'hi me test 7', 'vf', '', 'Trash', 'Trash', '2015-10-12 22:52:04', 'yes', 'yes', 0),
('', 'msdusad', 'fg', 'fgf', '', 'Draft', '', '2015-10-12 22:56:51', '', '', 0),
('msdusad', 'test7', 'vb', 'bvb', '', 'Trash', 'Sent', '2015-10-14 19:42:45', 'yes', '', 0),
('test1', 'msdusad', 'vv', '', '', 'Inbox', 'Sent', '2015-10-14 19:44:36', '', '', 0),
('test1', 'test7', 'fff', 'fff', '', 'Inbox', 'Sent', '2015-10-14 19:47:42', '', '', 0),
('test3', 'msdusad', 'ccc', 'cc', '', 'Inbox', 'Sent', '2015-10-14 19:48:00', '', '', 0),
('msdusad', 'test7', 'dfdf', 'fdfdf', '', 'Trash', 'Sent', '2015-10-14 19:51:33', 'yes', '', 0),
('', 'test7', '', 'ccxcxc', '', 'Draft', '', '2015-10-14 19:51:42', '', '', 0),
('', 'test7', 'xcxc', 'xcxc', '', 'Draft', '', '2015-10-14 19:51:57', '', '', 0),
('', 'msdusad', 'tokenchecking', 'fgfgf', '', 'Trash', '', '2015-10-16 00:43:40', 'yes', 'yes', 925979110),
('test3', 'msdusad', 'tv', '', '', 'Inbox', 'Sent', '2015-10-16 00:44:10', '', '', 939380037),
('msdusad', 'test7', 'file', 'got it', '2014-10-30 16.41.46.jpg', 'Inbox', 'Sent', '2015-10-18 11:41:23', '', '', 995297530),
('', 'msdusad', 'draft file jffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'vvfv', '', 'Draft', '', '2015-10-19 01:18:08', '', '', 886299685),
('', 'msdusad', 'cccc', 'ccc', 'contactus button.png', 'Trash', '', '2015-10-19 01:18:43', 'yes', 'yes', 915539796),
('arunkumar', 'msdusad', 'ccc', 'asasa', '2015-10-23 22.09.18.jpg', 'Draft', '', '2015-11-02 00:59:21', '', '', 844991503),
('arunkumar ', 'msdusad', 'ss', 'ss', '', 'Inbox', 'Sent', '2015-11-02 00:59:56', '', '', 238348281),
('', 'msdusad', ',m', '', '', 'Draft', '', '2015-11-02 01:02:59', '', '', 507719002),
('', 'msdusad', 'kjmjk', '', '', 'Draft', '', '2015-11-02 01:06:49', '', '', 44999852),
('msdusad', 'test7', 'testing pagination', 'no filled', '', 'Inbox', 'Sent', '2015-12-07 21:48:06', '', '', 3357153),
('msdusad', 'test7', '2nd', 'df', '', 'Inbox', 'Sent', '2015-12-07 21:49:41', '', '', 301623247),
('msdusad', 'test7', '333', 'ghfg', '', 'Inbox', 'Sent', '2015-12-07 21:50:07', '', '', 190503851),
('msdusad', 'test7', 'again ', 'fgfg', '', 'Inbox', 'Sent', '2015-12-07 21:50:58', '', '', 240995243),
('msdusad', 'test7', 'sd', 'sds', '', 'Inbox', 'Sent', '2015-12-07 21:51:12', '', '', 914423539),
('msdusad', 'test7', 'dfd', 'dfsd', '', 'Inbox', 'Sent', '2015-12-07 21:51:31', '', '', 23100593),
('msdusad', 'test7', 'sds', 'dsf', '', 'Inbox', 'Sent', '2015-12-07 21:51:43', '', '', 557050243),
('msdusad', 'test7', 'sds', 'sd', '', 'Inbox', 'Sent', '2015-12-07 21:51:56', '', '', 65025247),
('msdusad', 'test7', 'asd', 'dfa', '', 'Inbox', 'Sent', '2015-12-07 21:52:23', '', '', 602943076),
('msdusad', 'test7', 'sdas', 'ads', '', 'Inbox', 'Sent', '2015-12-07 21:52:32', '', '', 990006311);

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE IF NOT EXISTS `privacy` (
  `username` varchar(50) NOT NULL,
  `email_privacy` text NOT NULL,
  `contact_privacy` text NOT NULL,
  `full_profile_privacy` text NOT NULL,
  `message_privacy` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`username`, `email_privacy`, `contact_privacy`, `full_profile_privacy`, `message_privacy`) VALUES
('arunkumar', '', '', '', ''),
('msdusad', 'onlyyou', 'onlyyou', 'friends', 'friends');

-- --------------------------------------------------------

--
-- Table structure for table `professional_detail`
--

CREATE TABLE IF NOT EXISTS `professional_detail` (
  `username` varchar(50) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `expyear` varchar(4) NOT NULL,
  `expmonth` varchar(2) NOT NULL,
  `keyskills` varchar(300) NOT NULL,
  `last_update_pro` datetime NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_detail`
--

INSERT INTO `professional_detail` (`username`, `designation`, `expyear`, `expmonth`, `keyskills`, `last_update_pro`) VALUES
('arunkumar', 'Web Designer', '1', '1', 'html,css', '2015-09-06 18:16:47'),
('msd"', '', '', '', '', '2015-10-09 22:43:55'),
('msdusad', 'php developer', '2', '2', 'php,mysql', '2015-11-22 16:46:25'),
('test1', 'Test 1', '', '5', '', '2015-09-07 00:24:05'),
('test10''"''', '', '', '', '', '2015-09-21 21:05:58'),
('test11''"''', '', '', '', '', '2015-09-21 21:10:21'),
('test12''''''"', '', '', '', '', '2015-09-22 00:29:16'),
('test13''''''"', '', '', '', '', '2015-09-22 00:48:49'),
('test2', 'test2', '2', '', '', '2015-09-07 00:17:22'),
('test3', '', '', '', '', '2015-09-07 01:14:49'),
('test4', '', '', '', '', '2015-09-07 01:15:30'),
('test6', '', '', '', '', '2015-09-18 05:07:40'),
('test7', '', '', '', '', '2015-09-18 22:26:37'),
('test8', '', '', '', '', '2015-09-18 23:31:15'),
('vrf', '', '', '', '', '2015-09-20 13:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `trash_messages`
--

CREATE TABLE IF NOT EXISTS `trash_messages` (
  `username` varchar(50) NOT NULL,
  `reciver_id` varchar(50) NOT NULL,
  `sender_id` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `reciver_type` varchar(20) NOT NULL,
  `sender_type` varchar(20) NOT NULL,
  `send_time` datetime NOT NULL,
  `reciver_delete` varchar(5) NOT NULL,
  `sender_delete` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trash_messages`
--

INSERT INTO `trash_messages` (`username`, `reciver_id`, `sender_id`, `subject`, `message`, `attachment`, `reciver_type`, `sender_type`, `send_time`, `reciver_delete`, `sender_delete`) VALUES
('', 'test3', 'msdusad', 'tr', '', '', 'Inbox', 'Trash', '2015-09-17 22:37:46', '', ''),
('', 'test3', 'msdusad', 'tr', '', '', 'Inbox', 'Trash', '2015-09-17 22:37:46', '', ''),
('', 'test3', 'msdusad', 'tr', '', '', 'Inbox', 'Trash', '2015-09-17 22:37:46', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_friends`
--

CREATE TABLE IF NOT EXISTS `user_friends` (
  `username` varchar(50) NOT NULL,
  `friend_id` varchar(50) NOT NULL,
  `block_friend` int(11) NOT NULL,
  `friendship_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_friends`
--

INSERT INTO `user_friends` (`username`, `friend_id`, `block_friend`, `friendship_date`) VALUES
('msdusad', 'arunkumar', 0, '2015-09-07 20:27:05'),
('test6', 'msdusad', 0, '2015-09-18 22:31:49'),
('msdusad', 'test1', 0, '2015-09-07 20:28:48'),
('msdusad', 'test2', 0, '2015-09-12 00:58:44'),
('msdusad', 'test3', 0, '2015-09-12 00:58:47'),
('msdusad', 'test4', 0, '2015-09-07 23:32:29'),
('msdusad', 'test6', 0, '2015-09-18 22:17:37'),
('test6', 'test1', 0, '2015-09-18 22:41:26'),
('test6', 'test2', 0, '2015-09-18 22:41:29'),
('test6', 'arunkumar', 0, '2015-09-18 22:41:31'),
('test6', 'test3', 0, '2015-09-18 22:43:29'),
('test6', 'test4', 0, '2015-09-18 22:43:31'),
('test6', 'test7', 0, '2015-09-18 22:43:33'),
('msdusad', 'test7', 0, '2015-09-18 23:18:28'),
('msdusad', 'test7', 0, '2015-09-18 23:18:30'),
('msdusad', 'test7', 0, '2015-09-18 23:18:32'),
('test11''"''', 'arunkumar', 0, '2015-09-21 21:22:28'),
('test11''"''', 'msdusad', 0, '2015-09-21 21:22:32'),
('test13''''''"', 'arunkumar', 0, '2015-09-22 08:13:17'),
('test13''''''"', 'msdusad', 0, '2015-09-22 08:13:18'),
('test13''''''"', 'test8', 0, '2015-09-22 23:25:19'),
('test7', 'arunkumar', 0, '2015-10-02 17:14:43'),
('test7', 'arunkumar', 0, '2015-10-02 17:14:46'),
('test7', 'msdusad', 0, '2015-10-02 17:14:49'),
('test7', 'test1', 0, '2015-10-02 17:46:29'),
('test7', 'test4', 0, '2015-10-02 17:46:56'),
('test7', 'test6', 0, '2015-10-02 17:47:00'),
('test7', 'test8', 0, '2015-10-02 17:47:02'),
('test7', 'test10''', 0, '2015-10-02 18:26:32'),
('test7', 'test10''', 0, '2015-10-02 18:26:34'),
('test7', 'test11''', 0, '2015-10-02 18:26:35'),
('test7', 'test2', 0, '2015-10-02 18:26:38'),
('test7', 'test3', 0, '2015-10-02 18:26:41'),
('msdusad', 'test10''', 0, '2015-10-03 01:24:56'),
('msdusad', 'test8', 0, '2015-10-03 01:24:59'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:07'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:08'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:08'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:08'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:08'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:09'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:09'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:09'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:10'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:10'),
('msdusad', 'test10''', 0, '2015-10-03 01:25:11'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:30'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:31'),
('msdusad', 'test11''', 0, '2015-10-09 20:10:32'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:34'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:34'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:34'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:34'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:36'),
('msdusad', 'test10''', 0, '2015-10-09 20:10:44'),
('msdusad', 'test10''', 0, '2015-10-09 20:12:53'),
('test7', 'test10''', 0, '2015-10-09 22:39:07'),
('test7', 'test11''', 0, '2015-10-09 22:39:09'),
('test7', 'test11''', 0, '2015-10-09 22:39:10'),
('test7', 'test11''', 0, '2015-10-09 22:39:10'),
('test7', 'test11''', 0, '2015-10-09 22:39:11'),
('test7', 'test11''', 0, '2015-10-09 22:39:11'),
('test7', 'test12''''''', 0, '2015-10-09 22:39:12'),
('test7', 'test13''''''', 0, '2015-10-09 22:39:14'),
('test7', 'test13''''''', 0, '2015-10-09 22:39:59'),
('test7', 'test13''''''', 0, '2015-10-09 22:40:02'),
('test7', 'test13''''''', 0, '2015-10-09 22:40:03'),
('test7', 'test13''''''', 0, '2015-10-09 22:40:03'),
('test7', 'test10''', 0, '2015-10-09 22:43:00'),
('test7', 'test10''', 0, '2015-10-09 22:43:01'),
('test7', 'test11''', 0, '2015-10-09 22:43:02'),
('test7', 'test12''''''', 0, '2015-10-09 22:43:04'),
('test7', 'test12''''''', 0, '2015-10-09 22:43:04'),
('test7', 'test11''', 0, '2015-10-09 22:43:05'),
('test7', 'test10''', 0, '2015-10-09 22:43:06'),
('msd"', 'test10''', 0, '2015-10-09 22:44:19'),
('msd"', 'test1', 0, '2015-10-09 22:44:23'),
('msd"', 'test11''', 0, '2015-10-09 22:44:27'),
('msdusad', 'msd', 0, '2015-10-09 22:44:50'),
('msdusad', 'msd', 0, '2015-10-09 22:44:51'),
('msdusad', 'msd', 0, '2015-10-09 22:44:52'),
('msdusad', 'msd', 0, '2015-10-09 22:44:52'),
('msdusad', 'msd', 0, '2015-10-09 22:44:52'),
('msdusad', 'msd', 0, '2015-10-09 22:44:52'),
('msdusad', 'msd', 0, '2015-10-09 22:44:56'),
('msdusad', 'msd', 0, '2015-10-09 22:44:56'),
('msdusad', 'msd', 0, '2015-10-09 22:44:56'),
('msdusad', 'msd', 0, '2015-10-09 22:44:57'),
('msdusad', 'msd', 0, '2015-10-09 22:44:57'),
('msdusad', 'msd', 0, '2015-10-09 22:44:57'),
('msdusad', 'msd', 0, '2015-10-09 22:46:35'),
('msdusad', 'msd', 0, '2015-10-09 22:46:36'),
('msdusad', 'msd', 0, '2015-10-10 18:56:49'),
('msdusad', 'msd', 0, '2015-10-10 18:56:50'),
('msd"', 'arunkumar', 0, '2015-10-10 18:57:09'),
('msdusad', 'msd', 0, '2015-10-12 22:59:12'),
('msdusad', 'test10''', 0, '2015-10-12 22:59:15'),
('msdusad', 'msd', 0, '2015-10-22 16:52:27'),
('msdusad', 'test10''', 0, '2015-11-02 01:25:59'),
('msdusad', 'test10''', 0, '2015-11-02 01:26:00'),
('msdusad', 'test10''', 0, '2015-11-11 18:05:06'),
('msdusad', 'test12''''''', 0, '2015-11-11 18:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `username` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dobday` varchar(2) NOT NULL,
  `dobmonth` varchar(12) NOT NULL,
  `dobyear` varchar(4) NOT NULL,
  `gender` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `location` varchar(100) NOT NULL,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`username`, `first_name`, `last_name`, `email`, `dobday`, `dobmonth`, `dobyear`, `gender`, `pic`, `contactno`, `location`, `last_update`) VALUES
('arunkumar', 'Arun Kumar', '', 'ak@gmail.com', '9', 'May', '2000', 'Male', 'Love_Song.jpg', '8813865998', 'Noida', '2015-09-06 18:15:29'),
('msd"', 'New Test', '', 'msdusad@gmail.com', '', '', '', '', '', '', '', '2015-10-09 22:43:55'),
('msdusad', 'Mahender Singh ', 'Dusad', 'msdusad@gmail.com', '27', 'January', '1993', 'Male', 'maahi.jpg', '9991106434', 'New , Delhi (India) ', '2015-12-08 23:46:07'),
('test1', 'test1', '', 'test1@gmail.com', '3', 'February', '2007', 'Male', 'chat_bg.jpg', '', '', '2015-09-07 01:13:22'),
('test10''"''', 'test10""''''', '', 'test10@gmail.com', '', '', '', '', '', '', '', '2015-09-21 21:05:58'),
('test11''"''', 'test11"''''', '', 'test11@gmail.com', '', '', '', '', '', '', '', '2015-09-21 21:10:21'),
('test12''''''"', 'test12''''''"', '', 'test12@gmail.com', '', '', '', '', '', '', '', '2015-09-22 00:29:16'),
('test13''''''"', 'test13'''''' ''''''', 'TT''''''''', 'test8@gmail.com', '', '', '', 'Male', '', '', '', '2015-09-22 00:49:34'),
('test2', 'test2', '', 'test2@gmail.com', '', '', '', '', '', '', '', '2015-09-07 00:17:12'),
('test3', 'test3', '', 'test3@gmail.com', '', '', '', '', '', '', '', '2015-09-07 01:14:49'),
('test4', 'test4', '', 'test4@gmail.com', '', '', '', 'Male', 'Love_Song.jpg', '', '', '2015-09-07 01:28:07'),
('test6', 'test6', '', 'test6@gmail.com', '', '', '', '', '', '', '', '2015-09-18 05:07:40'),
('test7', 'test7 Apply', '', 'test7@gmail.com', '', '', '', 'Male', '2014-11-18 09.58.10.jpg', '999999', 'noida', '2015-10-02 17:45:55'),
('test8', 'test8', '', 'test8@gmail.com', '', '', '', '', '', '', '', '2015-09-18 23:31:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
