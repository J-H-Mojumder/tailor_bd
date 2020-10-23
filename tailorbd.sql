-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 07:16 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailorbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Day` varchar(2) NOT NULL,
  `Month` varchar(3) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Firstname`, `Lastname`, `Email`, `Password`, `Day`, `Month`, `Year`, `Gender`) VALUES
('emran', 'evan', 'evanemran@gmail.com', '56123', '31', 'Oct', '1996', 'MALE'),
('imtiaz', 'eemel', 'imtiazeemel@gmail.com', '78945', '16', 'Apr', '1995', 'MALE'),
('Jahidul', 'Hassan', 'jhmojumder97@gmail.com', '12345', '21', 'Nov', '1996', 'MALE'),
('Abdullah', 'Noman', 'nomanabdullah@gmail.com', '123456', '20', 'Jan', '1994', 'MALE'),
('Mashroor', 'Sakib', 'sakib@gmail.com', '159753', '20', 'Jul', '1997', 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `tailor`
--

CREATE TABLE `tailor` (
  `Shopname` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Catagory` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Day` varchar(50) NOT NULL,
  `Month` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `ShopPic` varchar(200) NOT NULL,
  `OwnerPic` varchar(200) NOT NULL,
  `PriceDetails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tailor`
--

INSERT INTO `tailor` (`Shopname`, `Location`, `Firstname`, `Lastname`, `Email`, `Catagory`, `Password`, `Contact`, `Day`, `Month`, `Year`, `Gender`, `ShopPic`, `OwnerPic`, `PriceDetails`) VALUES
('badda', 'badda', 'bad', 'da', 'badda@gmail.com', 'Men', '12345', '654984', '01', 'Jan', '2018', 'FEMALE', 'cheese.PNG', 'cheese.PNG', 'priceDetails.PNG'),
('banani tailor', 'banani', 'ban', 'ani', 'banani@gmail.com', 'Women', '12345', '5646016', '01', 'Jan', '2018', 'MALE', 'tailorshop1.jpg', 'owner1.jpg', 'priceDetails.PNG'),
('bashundhara tailor', 'bashundhara', 'boshu', 'dhora', 'boshu@gmail.com', 'Kids', '12345', '00656515', '01', 'Jan', '2018', 'MALE', 'tailorshop2.jpg', 'owner2.jpg', 'priceDetails.PNG'),
('Dhanmondi tailor', 'dhanmondi', 'dhan', 'MONDI', 'Dhanmondi@gmail.com', 'Kids', '12345', '654684546', '01', 'Jan', '2018', 'FEMALE', 'tailorshop3.jpg', 'owner3.jpg', 'priceDetails.PNG'),
('Farmgate tailor', 'Farmgate', 'farm', 'gate', 'Farmgate@gmail.com', 'Men', '123456', '6545684564', '01', 'Jan', '2018', 'FEMALE', 'tailorshop4.jpg', 'owner4.jpg', 'priceDetails.PNG'),
('gulshan tailor', 'gulshan', 'gul', 'shan', 'gulshan@gmail.com', 'Men', '12345', '56496045406', '01', 'Jan', '2018', 'MALE', 'tailorshop5.jpg', 'owner5.jpg', 'priceDetails.PNG'),
('uttora tailor', 'uttora', 'rakib', 'hasan', 'jhmojumder97@gmail.com', 'Women', '12345', '000001111', '01', 'Jan', '2018', 'MALE', 'tailorshop6.jpg', 'owner6.jpg', 'priceDetails.PNG'),
('Kakrail tailor', 'kakrail', 'kak', 'rail', 'Kakrail@gmail.com', 'Men', '12345', '54498684', '01', 'Jan', '2018', 'FEMALE', 'tailorshop7.jpg', 'owner7.jpg', 'priceDetails.PNG'),
('Malibag tailors', 'malibag', 'mali', 'bag', 'Malibag@gmail.com', 'Men', '12345', '36546546', '01', 'Jan', '2018', 'MALE', 'tailorshop8.jpg', 'owner8.jpg', 'priceDetails.PNG'),
('Mirpur tailor', 'mirpur', 'mir', 'pur', 'Mirpur@gmail.com', 'Kids', '12345', '65456465', '01', 'Jan', '2018', 'FEMALE', 'tailorshop9.jpg', 'owner9.jpg', 'priceDetails.PNG'),
('Mohammadpur tailor', 'mohammadpur', 'moha', 'mmad', 'Mohammadpur@gmail.com', 'Kids', '12345', '674984654658', '01', 'Jan', '2018', 'FEMALE', 'tailorshop10.jpg', 'owner10.jpg', 'priceDetails.PNG'),
('Shahabag tailor', 'shahbag', 'shah', 'bag', 'Shahabag@gmail.com', 'Men', '12345', '564564654', '01', 'Jan', '2018', 'FEMALE', 'tailorshop11.jpg', 'owner11.jpg', 'priceDetails.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `tailor`
--
ALTER TABLE `tailor`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
