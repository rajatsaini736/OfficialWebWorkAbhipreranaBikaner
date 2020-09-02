-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2020 at 11:08 AM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhiprerana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'kapil', 'kapil@gmail.com', 'kapil');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `title`, `name`, `date`) VALUES
(1, 'asasasasasasas', '20200620093626-Screenshot (1).png', '2020-06-20'),
(2, 'asdsasd', '20200620093743-Screenshot (12).png', '2020-06-20'),
(3, 'ead', '20200620093755-Screenshot (17).png', '2020-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`mid`, `title`, `name`, `date`) VALUES
(1, 'asas', '20200620093422-filename (1).xls', '2020-06-20'),
(2, 'asd', '20200620093520-filename (1).xls', '2020-06-20'),
(3, 'asd', '20200620093544-filename (1).xls', '2020-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `tid` int(100) NOT NULL AUTO_INCREMENT,
  `ORDERID` varchar(100) NOT NULL,
  `MID` varchar(100) NOT NULL,
  `TXNID` varchar(100) NOT NULL,
  `TXNAMOUNT` varchar(100) NOT NULL,
  `PAYMENTMODE` varchar(50) NOT NULL,
  `CURRENCY` varchar(50) NOT NULL,
  `TXNDATE` varchar(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `RESPCODE` varchar(50) NOT NULL,
  `RESPMSG` varchar(500) NOT NULL,
  `GATEWAYNAME` varchar(50) NOT NULL,
  `BANKTXNID` varchar(50) DEFAULT NULL,
  `BANKNAME` varchar(500) DEFAULT NULL,
  `CHECKSUMHASH` varchar(110) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tid`, `ORDERID`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `STATUS`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`) VALUES
(1, 'ORDS56503347', 'QkuVSt95559359872808', '20200719111212800110168133636789231', '500.00', 'UPI', 'INR', '2020-07-19 12:08:53.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'YJgl5w9cos3dwlQGMnK2AjSO4F9Ld31kksK5VJbxh7WjvNE8Q7xm14nk8/5A9AFqZqFJLSpEcau3i2pwO8E3rVQ8Ea8cILT9U3v+e+C23jg='),
(2, 'ORDS56503347', 'QkuVSt95559359872808', '20200719111212800110168133636789231', '500.00', 'UPI', 'INR', '2020-07-19 12:08:53.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'YJgl5w9cos3dwlQGMnK2AjSO4F9Ld31kksK5VJbxh7WjvNE8Q7xm14nk8/5A9AFqZqFJLSpEcau3i2pwO8E3rVQ8Ea8cILT9U3v+e+C23jg='),
(3, 'ORDS56503347', 'QkuVSt95559359872808', '20200719111212800110168133636789231', '500.00', 'UPI', 'INR', '2020-07-19 12:08:53.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'YJgl5w9cos3dwlQGMnK2AjSO4F9Ld31kksK5VJbxh7WjvNE8Q7xm14nk8/5A9AFqZqFJLSpEcau3i2pwO8E3rVQ8Ea8cILT9U3v+e+C23jg='),
(4, 'ORDS56503347', 'QkuVSt95559359872808', '20200719111212800110168133636789231', '500.00', 'UPI', 'INR', '2020-07-19 12:08:53.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'YJgl5w9cos3dwlQGMnK2AjSO4F9Ld31kksK5VJbxh7WjvNE8Q7xm14nk8/5A9AFqZqFJLSpEcau3i2pwO8E3rVQ8Ea8cILT9U3v+e+C23jg='),
(5, 'ORDS56503347', 'QkuVSt95559359872808', '20200719111212800110168133636789231', '500.00', 'UPI', 'INR', '2020-07-19 12:08:53.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'YJgl5w9cos3dwlQGMnK2AjSO4F9Ld31kksK5VJbxh7WjvNE8Q7xm14nk8/5A9AFqZqFJLSpEcau3i2pwO8E3rVQ8Ea8cILT9U3v+e+C23jg='),
(6, 'ORDS97542066', 'QkuVSt95559359872808', '20200719111212800110168131336835550', '500.00', 'UPI', 'INR', '2020-07-19 12:19:31.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'FJRTh0Lpdq7Sz/xNnnm1+XDKdhdoHNilSJbEmNBgidIKJ+1XoW+ZwUdiBMy7sl6wl/YvMaWUPtocn58bOHkaNLiE0/uC8Ad3VEhLJiEFOHA='),
(7, 'ORDS97542066', 'QkuVSt95559359872808', '20200719111212800110168131336835550', '500.00', 'UPI', 'INR', '2020-07-19 12:19:31.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'FJRTh0Lpdq7Sz/xNnnm1+XDKdhdoHNilSJbEmNBgidIKJ+1XoW+ZwUdiBMy7sl6wl/YvMaWUPtocn58bOHkaNLiE0/uC8Ad3VEhLJiEFOHA='),
(8, 'ORDS97542066', 'QkuVSt95559359872808', '20200719111212800110168131336835550', '500.00', 'UPI', 'INR', '2020-07-19 12:19:31.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'FJRTh0Lpdq7Sz/xNnnm1+XDKdhdoHNilSJbEmNBgidIKJ+1XoW+ZwUdiBMy7sl6wl/YvMaWUPtocn58bOHkaNLiE0/uC8Ad3VEhLJiEFOHA='),
(9, 'ORDS99348548', 'QkuVSt95559359872808', '20200719111212800110168641536472955', '600.00', 'UPI', 'INR', '2020-07-19 12:30:29.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'fFiIkUIKuPKBf68GYGZ1aa0yMRDUoxZkDuD3cvF5Ax4yN2dicf7NNWbili7WxszIPxv3yKQ1i+oVRr5eTv4gqcB+wmFSwq+OgEWyyvoJr84='),
(10, 'ORDS62123495', 'QkuVSt95559359872808', '20200719111212800110168249336873821', '1000.00', 'UPI', 'INR', '2020-07-19 12:42:11.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', '4RzHZpagThcH1rlhWTxfb+NJ5xxDZWatsW2vvlEt35VZVf+hIEWqLK0I0jVKVcEHXwmWx5kXVV+tGdrHt3ZLU4P9pg7tXX4VFGKDSea9bsQ='),
(11, 'ORDS78663895', 'QkuVSt95559359872808', '20200719111212800110168843236770097', '600.00', 'UPI', 'INR', '2020-07-19 12:43:19.0', 'TXN_FAILURE', '227', 'Payment request was declined by payer. Please try again or use a different method to complete the payment.', 'PPBLC', '', '', 'KICE+f1dwoFekoSlgweXPAwiOTfnXeQRKOtLQ6J0y49Fd7txkchOprFtnCkwy8YwU9C0oQSoCJbMMeqNLBpkAUefO8LLangFSZ3K+qoCbAQ=');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'ruddy', 'ruddy@gmail.com', '7073491568', 'ruddy'),
(2, 'ef', 'ef', 'ef', 'ef'),
(3, 'kapil', 'kapil@gmail.com', '7073491568', 'kapil'),
(4, 'Abhiprerana', 'abhiprerana@gmail.com', '7073491568', 'rajat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
