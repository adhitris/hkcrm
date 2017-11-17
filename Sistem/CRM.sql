-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 10:02 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_crm`
--
CREATE DATABASE `db_crm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_crm`;

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

CREATE TABLE IF NOT EXISTS `m_customer` (
  `CUSTOMER_ID` varchar(255) NOT NULL,
  `USER_FK` varchar(255) DEFAULT NULL,
  `SALES_FK` varchar(255) DEFAULT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHONE_NUMBER` varchar(255) DEFAULT NULL,
  `ADDRESS` longtext,
  `CITY` varchar(255) DEFAULT NULL,
  `PROVINCE` varchar(255) DEFAULT NULL,
  `POSTAL_CODE` varchar(255) DEFAULT NULL,
  `COUNTRY` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CUSTOMER_ID`),
  KEY `CUSTOMER_SALES` (`SALES_FK`),
  KEY `CUSTOMER_USER` (`USER_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_customer`
--

INSERT INTO `m_customer` (`CUSTOMER_ID`, `USER_FK`, `SALES_FK`, `NAME`, `EMAIL`, `PHONE_NUMBER`, `ADDRESS`, `CITY`, `PROVINCE`, `POSTAL_CODE`, `COUNTRY`) VALUES
('', NULL, NULL, 'Wawan', 'kurniawanditya11@gmail.com', '085861168385', 'Jl Panday', 'Cimahi', 'Jawa Barat', '40523', 'Indonesia'),
('8173', NULL, 'KF', 'HENDRA KURNIAWAN', NULL, '08122315035', 'JL. KOMPLEKS KERTALAKSANA 2 NO 5', 'BANDUNG', 'JAWA BARAT', '40182', 'INDONESIA');

-- --------------------------------------------------------

--
-- Table structure for table `m_sales`
--

CREATE TABLE IF NOT EXISTS `m_sales` (
  `SALES_ID` varchar(255) NOT NULL,
  `USER_FK` varchar(255) DEFAULT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SALES_ID`),
  KEY `SALES_USER` (`USER_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_sales`
--

INSERT INTO `m_sales` (`SALES_ID`, `USER_FK`, `NAME`, `EMAIL`) VALUES
('KF', NULL, 'KIUNFONG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'superadmin'),
(2, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `t_complaint`
--

CREATE TABLE IF NOT EXISTS `t_complaint` (
  `COMPLAINT_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `DATE` datetime DEFAULT NULL,
  `CUSTOMER_FK` varchar(255) DEFAULT NULL,
  `SO_NUMBER` varchar(255) DEFAULT NULL,
  `NOTE` longtext,
  `SAMPLE_UPLOAD` varchar(255) DEFAULT NULL,
  `PIC_NAME` varchar(255) DEFAULT NULL,
  `PIC_PHONE_NUMBER` varchar(255) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `FOLLOW_UP_BY` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`COMPLAINT_ID`),
  KEY `COMPLAINT_CUSTOMER` (`CUSTOMER_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_monitoring`
--

CREATE TABLE IF NOT EXISTS `t_monitoring` (
  `MONITORING_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UPLOAD_DATE` datetime DEFAULT NULL,
  `SO_NUMBER` varchar(255) DEFAULT NULL,
  `SO_DATE` datetime DEFAULT NULL,
  `CUSTOMER_FK` varchar(255) DEFAULT NULL,
  `PO_NUMBER` varchar(255) DEFAULT NULL,
  `YARN` varchar(255) DEFAULT NULL,
  `KNITTING` varchar(255) DEFAULT NULL,
  `COLOUR` varchar(255) DEFAULT NULL,
  `MOTIF` varchar(255) DEFAULT NULL,
  `MOTIF_COLOUR` varchar(255) DEFAULT NULL,
  `QTY_SO` double DEFAULT NULL,
  `QTY_PROCESS` double DEFAULT NULL,
  `QTY_SENT` double DEFAULT NULL,
  `UNIT` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`MONITORING_ID`),
  KEY `MONITORING_CUSTOMER` (`CUSTOMER_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_request_order_dtl`
--

CREATE TABLE IF NOT EXISTS `t_request_order_dtl` (
  `REQUEST_ORDER_DTL_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `REQUEST_ORDER_HDR_FK` bigint(20) DEFAULT NULL,
  `YARN` varchar(255) DEFAULT NULL,
  `KNITTING` varchar(255) DEFAULT NULL,
  `COLOUR` varchar(255) DEFAULT NULL,
  `MOTIF` varchar(255) DEFAULT NULL,
  `MOTIF_COLOUR` varchar(255) DEFAULT NULL,
  `QTY` double DEFAULT NULL,
  `UNIT` varchar(50) DEFAULT NULL,
  `SAMPLE_UPLOAD` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`REQUEST_ORDER_DTL_ID`),
  KEY `REQUEST_ORDER_DTL_REQUEST_ORDER_HDR` (`REQUEST_ORDER_HDR_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_request_order_hdr`
--

CREATE TABLE IF NOT EXISTS `t_request_order_hdr` (
  `REQUEST_ORDER_HDR_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `DATE` datetime DEFAULT NULL,
  `CUSTOMER_FK` varchar(255) DEFAULT NULL,
  `NOTE` longtext,
  `STATUS` varchar(50) DEFAULT NULL,
  `FOLLOW_UP_BY` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`REQUEST_ORDER_HDR_ID`),
  KEY `REQUEST_ORDER_CUSTOMER` (`CUSTOMER_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_sales_dss`
--

CREATE TABLE IF NOT EXISTS `t_sales_dss` (
  `SALES_DSS_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MONTH` varchar(50) DEFAULT NULL,
  `YEAR` int(4) DEFAULT NULL,
  `CUSTOMER_FK` varchar(255) DEFAULT NULL,
  `SALES_FK` varchar(255) DEFAULT NULL,
  `YARN` varchar(255) DEFAULT NULL,
  `KNITTING` varchar(255) DEFAULT NULL,
  `KG` double DEFAULT NULL,
  PRIMARY KEY (`SALES_DSS_ID`),
  KEY `SALES_DSS_CUSTOMER` (`CUSTOMER_FK`),
  KEY `SALES_DSS_SALES` (`SALES_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'jimmy', '0192023a7bbd73250516f069df18b500', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_customer`
--
ALTER TABLE `m_customer`
  ADD CONSTRAINT `CUSTOMER_SALES` FOREIGN KEY (`SALES_FK`) REFERENCES `m_sales` (`SALES_ID`);

--
-- Constraints for table `t_complaint`
--
ALTER TABLE `t_complaint`
  ADD CONSTRAINT `COMPLAINT_CUSTOMER` FOREIGN KEY (`CUSTOMER_FK`) REFERENCES `m_customer` (`CUSTOMER_ID`);

--
-- Constraints for table `t_monitoring`
--
ALTER TABLE `t_monitoring`
  ADD CONSTRAINT `MONITORING_CUSTOMER` FOREIGN KEY (`CUSTOMER_FK`) REFERENCES `m_customer` (`CUSTOMER_ID`);

--
-- Constraints for table `t_request_order_dtl`
--
ALTER TABLE `t_request_order_dtl`
  ADD CONSTRAINT `REQUEST_ORDER_DTL_REQUEST_ORDER_HDR` FOREIGN KEY (`REQUEST_ORDER_HDR_FK`) REFERENCES `t_request_order_hdr` (`REQUEST_ORDER_HDR_ID`);

--
-- Constraints for table `t_request_order_hdr`
--
ALTER TABLE `t_request_order_hdr`
  ADD CONSTRAINT `REQUEST_ORDER_CUSTOMER` FOREIGN KEY (`CUSTOMER_FK`) REFERENCES `m_customer` (`CUSTOMER_ID`);

--
-- Constraints for table `t_sales_dss`
--
ALTER TABLE `t_sales_dss`
  ADD CONSTRAINT `SALES_DSS_CUSTOMER` FOREIGN KEY (`CUSTOMER_FK`) REFERENCES `m_customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `SALES_DSS_SALES` FOREIGN KEY (`SALES_FK`) REFERENCES `m_sales` (`SALES_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
