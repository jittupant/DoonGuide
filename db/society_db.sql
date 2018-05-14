-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 06:19 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `DbKey` int(11) NOT NULL,
  `UniqId` varchar(80) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `EncryptPass` text NOT NULL,
  `Salt` text NOT NULL,
  `CreatedOn` varchar(50) NOT NULL,
  `UpdatedOn` varchar(50) DEFAULT NULL,
  `UserType` varchar(250) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`DbKey`, `UniqId`, `UserName`, `Email`, `Phone`, `EncryptPass`, `Salt`, `CreatedOn`, `UpdatedOn`, `UserType`, `Status`) VALUES
(1, '59f71ebe85fb94.24073241', 'Alok', 'Jittupant12@gmail.com', '9876543210', 'F99Mett4MqOgSR8E2sdfQkxWL0I0OTc5MDhkM2Y4', '497908d3f8', '29-11-2017 17:21:05', NULL, 'SUPERADMIN', 1),
(2, '5a27dde6b012a8.41741818', 'User', 'user@gmail.com', '1212121212', 'FagZiop8RJJ/jd4Z93RlCD3TeuY5NmMyNmJmNWQx', '96c26bf5d1', '06-12-2017 17:39:10', '06-12-2017 17:47:47', '', 0),
(3, '5a2a20a8878b64.13444500', 'Omkar', 'omkar@gmail.com', '9876543210', 'lEKpa3yw/szQB/RPD1cbV3btSJQ3MzRmZTgyY2Jl', '734fe82cbe', '08-12-2017 10:48:32', '15-12-2017 14:22:20', '', 1),
(4, '5a34c657572618.53313598', 'newuser', 'newuser@gmail.com', '9898989898', 'sezUWko6PnLo4e1po0aFz8FbdyRmMTUxZjM5NjRi', 'f151f3964b', '16-12-2017 12:38:07', '10-01-2018 15:33:31', '', 0),
(5, '5a54b7c866a130.49850138', 'Sasasas', 'sasasa@gmail.com', '9898989898', 'Z8zlTYxqMv6XcxkjUwqTsmojEgE4OTQ0NjUzMGE2', '89446530a6', '09-01-2018 18:08:32', '10-01-2018 18:13:25', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`DbKey`),
  ADD UNIQUE KEY `UniqId` (`UniqId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
