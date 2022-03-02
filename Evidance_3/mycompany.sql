-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 05:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycompany`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `product_entry` (IN `name` VARCHAR(50), IN `product_details` VARCHAR(100), IN `product_price` VARCHAR(50))  BEGIN 
insert into product values('',name, product_details,product_price);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_details` varchar(200) NOT NULL,
  `product_price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `product_details`, `product_price`) VALUES
(1, 'chal', 'al amin', '200.00'),
(2, 'dal', 'gjdrjfgjfgdjnn', '999.99'),
(3, 'Vivo Y11', 'vary good', '999.99');

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `Update_trigger` BEFORE UPDATE ON `product` FOR EACH ROW INSERT INTO product_log VALUES
(NULL,
 OLD.name,
 OLD.product_price,
 'UPDATE',
 now(),
 OLD.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_trigger` BEFORE DELETE ON `product` FOR EACH ROW INSERT INTO product_log VALUES
(NULL,
 OLD.name,
 OLD.product_price,
 'DELETE',
 now(),
 OLD.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_trigger` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO product_log VALUES
(NULL,
 NEW.name,
 NEW.product_price,
 'INSERT',
 now(),
 NEW.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_log`
--

CREATE TABLE `product_log` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_price` decimal(5,2) NOT NULL,
  `action` varchar(10) NOT NULL,
  `time` datetime NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_log`
--

INSERT INTO `product_log` (`id`, `name`, `product_price`, `action`, `time`, `product_id`) VALUES
(1, 'chal', '100.00', 'INSERT', '2022-03-02 13:03:34', 1),
(2, 'chal', '100.00', 'UPDATE', '2022-03-02 13:15:36', 1),
(3, 'chal', '100.00', 'UPDATE', '2022-03-02 13:16:41', 1),
(4, 'chal', '200.00', 'UPDATE', '2022-03-02 13:19:13', 1),
(5, 'dal', '700.00', 'INSERT', '2022-03-02 13:20:05', 2),
(6, 'Vivo Y11', '999.99', 'INSERT', '2022-03-02 22:36:43', 3);

-- --------------------------------------------------------

--
-- Table structure for table `uesr`
--

CREATE TABLE `uesr` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uesr`
--

INSERT INTO `uesr` (`id`, `username`, `password`) VALUES
(1, 'shanto', '016fd6c48e8573e4bb71c5ee01794f26bf8c8865');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_log`
--
ALTER TABLE `product_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uesr`
--
ALTER TABLE `uesr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_log`
--
ALTER TABLE `product_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uesr`
--
ALTER TABLE `uesr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
