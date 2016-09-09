-- phpMyAdmin SQL Dump
-- version 4.0.10.17
-- https://www.phpmyadmin.net
--
-- Host: qdm161717402.my3w.com
-- Generation Time: Sep 09, 2016 at 10:52 PM
-- Server version: 5.1.48-log
-- PHP Version: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qdm161717402_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `boss_consumer`
--

CREATE TABLE IF NOT EXISTS `boss_consumer` (
  `consumer_id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_bype` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `consumer_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `consumer_uintprice` float NOT NULL,
  `consumer_num` int(11) NOT NULL,
  `consumer_totalprice` int(11) NOT NULL,
  `consumer_year` year(4) NOT NULL,
  `consumer_date` date NOT NULL,
  `consumer_time` time NOT NULL,
  `consumer_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `consumer_week` int(11) NOT NULL,
  `consumer_mon` int(11) NOT NULL,
  `consumer_quarter` int(11) DEFAULT NULL,
  `consumer_datetime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `consumer_profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`consumer_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `boss_consumer`
--

INSERT INTO `boss_consumer` (`consumer_id`, `consumer_bype`, `consumer_name`, `consumer_uintprice`, `consumer_num`, `consumer_totalprice`, `consumer_year`, `consumer_date`, `consumer_time`, `consumer_timestamp`, `consumer_week`, `consumer_mon`, `consumer_quarter`, `consumer_datetime`, `user_id`, `consumer_profile`) VALUES
(1, '4', '早餐', 13, 1, 13, 2015, '2015-05-09', '13:06:35', '2015-05-09 05:08:55', 19, 5, 0, '2015-05-09 13:06:35', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `boss_user`
--

CREATE TABLE IF NOT EXISTS `boss_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `user_createtime` datetime NOT NULL,
  `user_email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `user_telephone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `boss_user`
--

INSERT INTO `boss_user` (`user_id`, `user_type`, `user_name`, `user_password`, `user_createtime`, `user_email`, `user_telephone`, `user_profile`) VALUES
(1, 'vid', 'zhangsan', '123456', '2015-05-06 10:46:45', 'sdfsdf@126.com', '', ''),
(2, 'vip', 'admin', '123456', '2015-05-09 15:09:40', 'llsf@126.com', '', ''),
(3, 'vip', 'wangwu', '123456', '2015-08-26 17:09:00', 'dfsfsf@125.com', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boss_consumer`
--
ALTER TABLE `boss_consumer`
  ADD CONSTRAINT `boss_consumer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `boss_user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
