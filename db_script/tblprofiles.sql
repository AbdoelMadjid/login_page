-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2020 at 08:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblprofiles`
--

CREATE TABLE `tblprofiles` (
  `ID` int(11) NOT NULL,
  `Data Taken From` varchar(30) DEFAULT NULL,
  `Subscription Type` varchar(100) DEFAULT NULL,
  `PID` varchar(20) NOT NULL,
  `FIRST NAME` varchar(50) DEFAULT NULL,
  `LAST NAME` varchar(50) DEFAULT NULL,
  `GENDER` varchar(10) NOT NULL,
  `HAS CHILDREN` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `BIRTH PLACE` varchar(150) DEFAULT NULL,
  `BIRTH TIME` time DEFAULT NULL,
  `MANGLIK` varchar(150) DEFAULT NULL,
  `BELIEVES IN HOROSCOPE` varchar(50) NOT NULL,
  `GOTRA` varchar(150) DEFAULT NULL,
  `MARITAL STATUS` varchar(20) NOT NULL,
  `HEIGHT` int(11) NOT NULL,
  `BODY TYPE` varchar(100) DEFAULT NULL,
  `EDUCATION` varchar(150) NOT NULL,
  `COLLEGE` varchar(150) DEFAULT NULL,
  `COUNTRY OF RESIDENCE` varchar(100) DEFAULT NULL,
  `STATE OF RESIDENCE` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) NOT NULL,
  `MOTHER TONGUE` varchar(50) NOT NULL,
  `FOOD HABITS` varchar(50) DEFAULT NULL,
  `DRINK` varchar(50) DEFAULT NULL,
  `SMOKE` varchar(50) DEFAULT NULL,
  `RELIGION` varchar(50) NOT NULL,
  `CASTE` varchar(50) NOT NULL,
  `SUB CASTE` varchar(50) DEFAULT NULL,
  `COMPLEXION` varchar(100) DEFAULT NULL,
  `WEIGHT` int(11) DEFAULT NULL,
  `EMPLOYED AS` varchar(100) DEFAULT NULL,
  `EMPLOYED WITH` varchar(100) DEFAULT NULL,
  `ANNUAL INCOME` varchar(50) DEFAULT NULL,
  `ABOUT` varchar(500) DEFAULT NULL,
  `FATHER IS` varchar(150) DEFAULT NULL,
  `MOTHER IS` varchar(150) DEFAULT NULL,
  `FAMILY VALUE` varchar(150) DEFAULT NULL,
  `AFFLUENCE LEVEL` varchar(50) DEFAULT NULL,
  `NATIVE COUNTRY` varchar(50) DEFAULT NULL,
  `NATIVE STATE` varchar(50) DEFAULT NULL,
  `UNMARRIED SISTERS` int(11) DEFAULT NULL,
  `MARRIED SISTERS` int(11) DEFAULT NULL,
  `UNMARRIED BROTHERS` int(11) DEFAULT NULL,
  `MARRIED BROTHERS` int(11) DEFAULT NULL,
  `CRIMINAL RECORD` varchar(150) DEFAULT NULL,
  `SPECIAL CASE` varchar(150) DEFAULT NULL,
  `PP SMOKER` varchar(150) DEFAULT NULL,
  `PP DRINKER` varchar(150) DEFAULT NULL,
  `PP VEG/NON VEG` varchar(150) DEFAULT NULL,
  `PP FROMAGE` int(11) DEFAULT NULL,
  `PP TOAGE` int(11) DEFAULT NULL,
  `PP CASTE` varchar(150) DEFAULT NULL,
  `PP EDUCATION QUALIFICATION` varchar(150) DEFAULT NULL,
  `PP MIN HEIGHT` int(11) DEFAULT NULL,
  `PP MAX HEIGHT` int(11) DEFAULT NULL,
  `PP MOTHER TONGUE` varchar(150) DEFAULT NULL,
  `PP RELIGION` varchar(150) DEFAULT NULL,
  `PP MANGLIK` varchar(150) DEFAULT NULL,
  `PP INCOME` varchar(150) DEFAULT NULL,
  `PP BODY TYPE` varchar(150) DEFAULT NULL,
  `PP CHALLENGED` varchar(150) DEFAULT NULL,
  `PP MARITAL STATUS` varchar(150) DEFAULT NULL,
  `PP COUNTRY` varchar(150) DEFAULT NULL,
  `PP STATE` varchar(500) DEFAULT NULL,
  `PP HAVE CHILDREN` varchar(150) DEFAULT NULL,
  `PHOTO URL` varchar(250) DEFAULT NULL,
  `EMAIL` varchar(150) DEFAULT NULL,
  `PHONE` varchar(20) DEFAULT NULL,
  `ADDED DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `ADDED BY` varchar(150) NOT NULL,
  `HOUSE` varchar(100) DEFAULT NULL,
  `ADDRESS` varchar(500) DEFAULT NULL,
  `SQUARE YARDS` int(11) DEFAULT NULL,
  `HAIR TYPE` varchar(50) DEFAULT NULL,
  `LOOKS` varchar(50) DEFAULT NULL,
  `SPECS` varchar(100) DEFAULT NULL,
  `NET WORTH` bigint(20) DEFAULT NULL,
  `INDUSTRY TYPE` varchar(100) DEFAULT NULL,
  `COMPANY NAME` varchar(100) DEFAULT NULL,
  `AADHAR VERIFIED` varchar(10) DEFAULT NULL,
  `MOBILE VERIFIED` varchar(10) DEFAULT NULL,
  `EMAILID VERIFIED` varchar(10) DEFAULT NULL,
  `AADHAR PROOF` varchar(100) DEFAULT NULL,
  `REGISTRATION FEE` int(11) DEFAULT NULL,
  `MEETING FEE` int(11) DEFAULT NULL,
  `ROKA CHARGE` int(11) DEFAULT NULL,
  `WEEKLY PROFILE` varchar(10) DEFAULT NULL,
  `DURATION` int(11) DEFAULT NULL,
  `PACKAGE TYPE` varchar(50) DEFAULT NULL,
  `SOLD BY` varchar(50) DEFAULT NULL,
  `MEETING FINALISED BY` varchar(50) DEFAULT NULL,
  `MEETING DATE` date DEFAULT NULL,
  `MEETING TIME` time DEFAULT NULL,
  `MEETING PLACE` varchar(100) DEFAULT NULL,
  `MEETING LVM ID` varchar(50) DEFAULT NULL,
  `CLIENT TYPE` varchar(50) DEFAULT NULL,
  `SCHOOL NAME` text DEFAULT NULL,
  `UG` text DEFAULT NULL,
  `PG` text DEFAULT NULL,
  `UG COLLEGE` text DEFAULT NULL,
  `PG COLLEGE` text DEFAULT NULL,
  `FAMILY BASED OUT OF` text DEFAULT NULL,
  `EMPLOYED IN` text DEFAULT NULL,
  `FAMILY INCOME` text DEFAULT NULL,
  `FAMILY TYPE` varchar(50) DEFAULT NULL,
  `ABOUT FAMILY` text DEFAULT NULL,
  `PP EMPLOYED AS` text DEFAULT NULL,
  `PP About Partner` text DEFAULT NULL,
  `Residential Status` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Property Details` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Vehicles` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Star` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Rassi` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Alternate Phone` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Whatsapp Number` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Permanent Address` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Instagram Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Facebook Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Linkedin Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Communication` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `PP Complexion` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `PP Cant Get Married To` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Last Calling Date` date DEFAULT NULL,
  `Calling Status` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Calling Comments` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Profile Shortlisted For` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Response Shared Profile` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Date` date DEFAULT NULL,
  `Lead Follow Up` date DEFAULT NULL,
  `Lead Follow Up Time` time DEFAULT NULL,
  `Lead Comment` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Shared Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Shortlisted Id` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Biodata` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Lead Matrimony Picture` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Meeting Status` varchar(250) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblprofiles`
--
ALTER TABLE `tblprofiles`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `IDX_UNK` (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblprofiles`
--
ALTER TABLE `tblprofiles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
