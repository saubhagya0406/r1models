-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2017 at 07:40 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `R1Models`
--

-- --------------------------------------------------------

--
-- Table structure for table `About`
--

CREATE TABLE `About` (
  `Username` varchar(255) NOT NULL,
  `FName` varchar(255) DEFAULT NULL,
  `LName` varchar(255) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Zip` varchar(10) DEFAULT NULL,
  `Web` varchar(255) DEFAULT NULL,
  `About` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `About`
--

INSERT INTO `About` (`Username`, `FName`, `LName`, `Phone`, `State`, `City`, `Zip`, `Web`, `About`) VALUES
('$2y$12$Bbz.pAHZ3IYR7G3QyeLhBeDLqoOBau25Hi8hCVC3GJZVwSG9t21Ke', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Abhishek', 'Abhishek', 'Banerjee', '7004677759', 'JAmshedpur', 'Jharkhand', '831005', '', ''),
('akabt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('aktbt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ami', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amitabh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amitabhbn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amitabhbn19', 'Amitabh', 'Banerjee', '8906127739', 'Sikkim', 'ajhitar', '831188', '', ''),
('codeweb', 'Tejasiwni', 'Sapkota', '8906127739', 'Sikkim', 'Majhitar', '831005', '', ''),
('edit', 'Amitabh', 'Banerjee', '8906127739', 'Sikkim', 'Majhitar', '831005', 'www.facebook.com', ''),
('Rick', 'Abhishek', 'BAnerjee', '7288989899', 'ajsh', 'jkbh', '882928', '', ''),
('s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('some', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('somet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('st', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('tejas997', 'Tejasiwni', 'Sapkota', '8906127739', 'Sikkim', 'Majhitar', '831005', 'something.com', 'Something abou me');

-- --------------------------------------------------------

--
-- Table structure for table `Bio`
--

CREATE TABLE `Bio` (
  `Username` varchar(255) NOT NULL,
  `Height` varchar(10) DEFAULT NULL,
  `Weight` varchar(10) DEFAULT NULL,
  `Age` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bio`
--

INSERT INTO `Bio` (`Username`, `Height`, `Weight`, `Age`) VALUES
('$2y$12$Bbz.pAHZ3IYR7G3QyeLhBeDLqoOBau25Hi8hCVC3GJZVwSG9t21Ke', NULL, NULL, NULL),
('Abhishek', '5.8', '62', '17'),
('akabt', NULL, NULL, NULL),
('aktbt', NULL, NULL, NULL),
('ami', NULL, NULL, NULL),
('amit', NULL, NULL, NULL),
('amita', NULL, NULL, NULL),
('amitabh', NULL, NULL, NULL),
('amitabhbn', NULL, NULL, NULL),
('amitabhbn19', '6.8', '56', '26'),
('codeweb', '7.6', '77', '34'),
('edit', '5.6', '45', '45'),
('Rick', '34', '456', '45'),
('s', NULL, NULL, NULL),
('some', NULL, NULL, NULL),
('somet', NULL, NULL, NULL),
('st', NULL, NULL, NULL),
('tejas997', '4.5', '56', '23');

-- --------------------------------------------------------

--
-- Table structure for table `Connect`
--

CREATE TABLE `Connect` (
  `Username` varchar(255) NOT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `Instagram` varchar(255) DEFAULT NULL,
  `Twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Connect`
--

INSERT INTO `Connect` (`Username`, `Facebook`, `Instagram`, `Twitter`) VALUES
('Abhishek', 'https://www.facebook.com/abhishek.banerjee.77964201?ref=bookmarks', 'https://www.instagram.com/cypherxv/', ''),
('akabt', NULL, NULL, NULL),
('aktbt', NULL, NULL, NULL),
('amitabh', NULL, NULL, NULL),
('amitabhbn19', 'facebook.com/amitabhbnrj', '', ''),
('amo', 'facebook.com/amitabhbnrj', '', ''),
('codeweb', 'facebook.com/amitabhbnrj', 'instagram.com/amitabhxv', ''),
('edit', 'facebook.com/amitabhbnrj', 'instagram.com/amitabhxv', ''),
('Rick', 'https://www.facebook.com/abhishek.banerjee.77964201?ref=bookmarks', 'https://www.instagram.com/cypherxv/', ''),
('s', NULL, NULL, NULL),
('tejas997', 'facebook.com/amitabhbnrj', 'https://www.instagram.com/cypherxv/', '');

-- --------------------------------------------------------

--
-- Table structure for table `Gallery`
--

CREATE TABLE `Gallery` (
  `Username` varchar(255) NOT NULL,
  `DPath` varchar(255) DEFAULT NULL,
  `GCount` int(5) NOT NULL DEFAULT '0',
  `GStatus` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Gallery`
--

INSERT INTO `Gallery` (`Username`, `DPath`, `GCount`, `GStatus`) VALUES
('Abhishek', 'gallery/3bc8471bb664e23c0ce91ea1872fcb85d', 0, 'Y'),
('akabt', NULL, 0, 'N'),
('aktbt', NULL, 0, 'N'),
('ami', NULL, 0, 'N'),
('amit', NULL, 0, 'N'),
('amita', NULL, 0, 'N'),
('amitabh', NULL, 0, 'N'),
('amitabhbn', NULL, 0, 'N'),
('amitabhbn19', 'gallery/6b55a3b73a75269d6980c270231103a2d16', 0, 'Y'),
('amo', 'gallery/3d5390642ff7a7fd9b7ab8bac4ec3ec5d14', 0, 'Y'),
('codeweb', 'gallery/513fca0e1da9e02fa50c8953c6ee6bc4d15', 0, 'Y'),
('edit', 'gallery/de95b43bceeb4b998aed4aed5cef1ae7d', 0, 'Y'),
('Rick', 'gallery/17ad55a9b8384777496330d23e59d520d', 0, 'Y'),
('s', NULL, 0, 'N'),
('some', NULL, 0, 'N'),
('somet', NULL, 0, 'N'),
('st', NULL, 0, 'N'),
('tejas997', 'gallery/914bb5da9e87cc9b1a767cb402856c66d', 0, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `Main`
--

CREATE TABLE `Main` (
  `ID` int(100) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Main`
--

INSERT INTO `Main` (`ID`, `Username`, `Email`, `Hash`) VALUES
(3, 'asg', 'sahkjvk@jkas.as', '$2y$12$4dcdyvotsIQBjev5sGIYkOdMnmIaZSWPr84VC41DBQMexUIr8BaoC'),
(1, 'asjhdvj', 'hkbaksdab@aks.as', '$2y$12$txQwaIsaT0ZAmCYWJ990j.parRmJoje0H4V1NBLg8ThAT5oQIXjte'),
(2, 'asyuf', 'jhavsjh@jhasv.as', '$2y$12$S.pf9T6yj5NvMXGjAkaGVevvz/0S/F98tSLOlhbmTxIhVNRhhvWuy'),
(20, 'edit', 'amitabhbnrj@gmail.com', '$2y$12$6Ci0fuLAqGU9M6UBlximk.IQBJDS6A41MFnqwj9cbabVqG7obEq6K'),
(24, 'Rick', 'angelariana.sel@gmail.com', '$2y$12$xZuXxijJ7sYRF7UP6QgDkezCWg2Q5EHSg2DI6h8u6M1/MDrdy2Qza'),
(21, 's', 'k@hdsf.df', '$2y$12$orc1tK28ZG29ONbOSWIyfO6z4QU5zIXwigpaBSApoDpbQjsVCWUIi'),
(6, 'some', 'amitabh@gmail.com', '$2y$12$lVwZrVfmmLchvEPIjYpe1.lK6t/2lAYTUon9EkMzq6AvaWrByj2cq'),
(7, 'somet', 'amit@hmail.com', '$2y$12$WecamE91XaDAbkB6FGonNuVaYJrSvzAdFKsOXIPw39Bd9Mqk5XFre'),
(8, 'st', 'a@gm.c', '$2y$12$QZFyOhaGbbLtBHtOaA8Weu3sHdv34jrc2OpBrbF.AXBHASAijVtkK'),
(25, 'tejas997', 'tejaswinisapkota997@gmail.com', '$2y$12$brOKoydLByaOfiu0q6jQ3e5ULyHC0TQJ2lQyroE4D14NMolqvmzpu');

-- --------------------------------------------------------

--
-- Table structure for table `Profile`
--

CREATE TABLE `Profile` (
  `Username` varchar(255) NOT NULL,
  `PP` varchar(100) NOT NULL,
  `PViews` bigint(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Profile`
--

INSERT INTO `Profile` (`Username`, `PP`, `PViews`) VALUES
('Abhishek', 'Snapchat-422363593.jpg', 0),
('akabt', '', 0),
('aktbt', '', 0),
('amitabh', '', 0),
('amitabhbn19', 'IMG-20170619-WA0062.jpg', 0),
('amo', 'Snapchat-891862076.jpg', 0),
('codeweb', 'IMG_95841.JPG', 0),
('edit', 'DSC_0158.JPG', 0),
('Rick', 'Snapchat-422363593.jpg', 0),
('s', '', 0),
('tejas997', 'IMG_95871.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Pwd_Recov`
--

CREATE TABLE `Pwd_Recov` (
  `ID` int(100) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `Current` bigint(100) NOT NULL,
  `Expiry` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pwd_Recov`
--

INSERT INTO `Pwd_Recov` (`ID`, `Username`, `Token`, `Current`, `Expiry`) VALUES
(6, 'edit', '57c5235ef39a0b2a7601c6b92875469e', 1498275815, 1498319015),
(4, 'tejas997', 'af3f1c1349db8cceb24deb53a9a5c6b3', 1498251525, 1498294725);

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE `Status` (
  `Username` varchar(255) NOT NULL,
  `CStatus` char(1) NOT NULL DEFAULT 'N',
  `Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Status`
--

INSERT INTO `Status` (`Username`, `CStatus`, `Code`) VALUES
('$2y$12$Bbz.pAHZ3IYR7G3QyeLhBeDLqoOBau25Hi8hCVC3GJZVwSG9t21Ke', 'N', 'dcb6a52c075255333ec4d55cbd223c2ba55f731c'),
('Abhishek', 'Y', '9acb8ba75c3084662b8b73436297b4b30e7b106f'),
('akabt', 'N', 'de1c586a78d5a82dac07b72467538f6a05fd0d25'),
('aktbt', 'N', 'f66dfaec50438aae610d3f5e01491da4d62151ab'),
('ami', 'N', '519902d4d850872cb6d6a04745c6ffea91721740'),
('amit', 'N', '76b1832478b510fa51d4b2ef52dfd59ca0400db1'),
('amita', 'N', '488c687c429b1edc2f2dda9b7c89c0155367cd10'),
('amitabh', 'N', '3f64a28c0037c6d0cf547a334664e64c0ada33fe'),
('amitabhbn', 'N', 'be1d2bfb701c11ae926581420a0c68f8cf0f5d1d'),
('amitabhbn19', 'Y', 'c796704c7eeee0b934eeb1b9bfb545b58076d5f1'),
('amo', 'Y', '4c1a001f022326227d97a40bd9a753101f23bbfa'),
('asg', 'N', 'f14d672a97c92aaff11d4ccef8a5013f039ae2f0'),
('codeweb', 'Y', '02df02b02177f812e9da6942f136bbd6ec5840bd'),
('edit', 'Y', '9ead47a82a0d25985f22f10651d1f93b3abba317'),
('Rick', 'Y', '0ad953696db51b3125a0ac9ef2fb8a0f59e2c0ae'),
('s', 'N', 'a0f1490a20d0211c997b44bc357e1972deab8ae3'),
('some', 'N', 'eb875812858d27b22cb2b75f992dffadc1b05c66'),
('somet', 'N', '62643c7d95803b1d9455e9c107cc20cbbcc9bd6d'),
('st', 'N', '9b02d9974c14e623c9ffbed7360beacbf0dcb95f'),
('tejas997', 'Y', '2dcd4ab88dd584abbd89eb365d681d0dd11768ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `About`
--
ALTER TABLE `About`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Bio`
--
ALTER TABLE `Bio`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Connect`
--
ALTER TABLE `Connect`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Gallery`
--
ALTER TABLE `Gallery`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `DPath` (`DPath`);

--
-- Indexes for table `Main`
--
ALTER TABLE `Main`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `modindex` (`ID`);

--
-- Indexes for table `Profile`
--
ALTER TABLE `Profile`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Pwd_Recov`
--
ALTER TABLE `Pwd_Recov`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Token` (`Token`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Main`
--
ALTER TABLE `Main`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `Pwd_Recov`
--
ALTER TABLE `Pwd_Recov`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
