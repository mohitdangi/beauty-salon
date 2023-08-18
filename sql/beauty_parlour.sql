-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 12:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty_parlour`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `useremail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_id` int(11) NOT NULL,
  `productname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `useremail`, `pro_id`, `productname`, `qty`, `price`) VALUES
(4, 'user@mail.com', 4, 'Lipstick', 5, 550),
(19, 'sadia@gmail.com', 2, 'Focallure Lips Crayon', 10, 360);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'Hair Cut'),
(4, 'Makeup'),
(5, 'Facial'),
(6, 'Manicure'),
(7, 'Pedicure'),
(8, 'Body Massage');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `pro_id`, `name`, `email`, `comment`, `date`, `status`) VALUES
(5, 0, 'Clarice Starling', 'clarice@gmail.com', 'I love the hair treatment.', '2023-06-08 23:08:19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cetegory` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `stock`, `image`, `cetegory`, `description`) VALUES
(1, 'Focallure  Matte Lipstick', 390, 179, '1.jpg', 'make up', 'This lipsticks are waterproof.'),
(2, 'Focallure Lips Crayon', 360, 125, '2.jpg', 'make up', 'Semi matte lipsticks.5 colors are available.'),
(3, 'Focallure liquid Foundation', 350, 150, '4.jpg', 'make up', '8 shades are available.'),
(4, 'Focallure Pressed Powder', 480, 70, '3.jpg', 'make up', '3 shades are available.'),
(5, 'Focallure blush ', 470, 55, '5.jpg', 'make up', '3 shades are available.'),
(6, 'Focallure Eyeliner', 400, 150, '6.jpg', 'make up', 'Waterproof eyeliner.'),
(7, 'Focallure  maskara', 550, 100, '7.jpg', 'make up', 'It will give you a new look.'),
(8, 'Focallure loose powder', 440, 100, '8.jpg', 'make up', 'It will give you a oilfree look.'),
(9, 'Focallure Liquid Heavy Gliter ', 420, 200, '9.jpg', 'make up', '5 colors are available.'),
(10, 'Focallure Liquid Conceler', 420, 150, '10.jpg', 'make up', '4 shades are available.'),
(11, 'Focallure auto brows pen', 380, 50, '11.jpg', 'Select Category', '4 colors are available.'),
(12, 'Focallure Twilight Eyeshadow p', 790, 20, '12.jpg', 'make up', '18 colors are available.'),
(13, 'Focallure Brush set', 1650, 30, '13.webp', 'make up', '10 pieces of brushes in one set.'),
(14, 'Focallure Smoky Eye shadow pal', 750, 40, '13.jpg', 'make up', '6 colors are available.'),
(15, 'Focallure Lip Liner', 300, 40, '14.jpg', 'make up', '18 colors are available.'),
(16, 'Focallure Brows Gel Cream', 350, 60, '15.jpg', 'make up', '5 colors are available.'),
(17, 'Cake My Day', 500, 240, 'creammask.jpg', 'Facial', 'Hydrating Sprinkle Wash-Off Mask');

-- --------------------------------------------------------

--
-- Table structure for table `pro_order`
--

CREATE TABLE `pro_order` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(15) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `trxid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_order`
--

INSERT INTO `pro_order` (`id`, `name`, `email`, `mobile`, `pro_id`, `pro_name`, `qty`, `price`, `method`, `total`, `trxid`, `address`, `date`, `status`) VALUES
(7, 'sadia', 'nila@gmail.com', 2147483647, 6, 'facecream', 22, 600, 'cod', 13200, '', '24 basundhara', '2019-12-03 18:36:50', 0),
(8, 'nila', 'nila@gmail.com', 745745, 4, 'Lipstick', 14, 550, 'cod', 7700, '', '24 basundhara', '2019-12-03 19:56:13', 0),
(9, 'nila', 'nila@gmail.com', 745745, 6, 'facecream', 5, 600, 'cod', 3000, '', '24 basundhara', '2019-12-03 19:56:14', 0),
(10, 'sadia', 'nila@gmail.com', 643745744, 11, 'Focallure auto brows pen', 2, 380, 'cod', 760, '', '24 basundhara', '2019-12-03 22:14:47', 0),
(11, 'sadia', 'nila@gmail.com', 634573, 1, 'Focallure  Matte Lipstick', 5, 390, 'bkash', 1950, '463', '24 basundhara', '2019-12-05 01:49:11', 0),
(12, 'sadia', 'nila@gmail.com', 634573, 1, 'Focallure  Matte Lipstick', 1, 390, 'bkash', 390, '463', '24 basundhara', '2019-12-05 01:49:11', 0),
(13, 'sadia', 'nila@gmail.com', 634573, 2, 'Focallure Lips Crayon', 2, 360, 'bkash', 720, '463', '24 basundhara', '2019-12-05 01:49:11', 0),
(14, 'sadia', 'nila@gmail.com', 345346, 2, 'Focallure Lips Crayon', 3, 360, 'bkash', 1080, 'y4636', 'sdfghsfh', '2019-12-05 16:33:31', 0),
(15, 'nila', 'nila@gmail.com', 135455, 2, 'Focallure Lips Crayon', 3, 360, 'bkash', 1080, '144', '24 basundhara', '2019-12-08 13:01:34', 0),
(16, 'nila', 'nila@gmail.com', 135455, 1, 'Focallure  Matte Lipstick', 10, 390, 'bkash', 3900, '144', '24 basundhara', '2019-12-08 13:01:34', 1),
(17, 'sadia', 'sadia@gmail.com', 56654561, 2, 'Focallure Lips Crayon', 10, 360, 'cod', 3600, '', '24 basundhara', '2019-12-08 18:40:05', 0),
(18, 'sadia', 'nila@gmail.com', 151515151, 2, 'Focallure Lips Crayon', 10, 360, 'cod', 3600, '', 'prem', '2019-12-09 12:45:17', 0),
(19, 'sadia', 'nila@gmail.com', 2147483647, 1, 'Focallure  Matte Lipstick', 10, 390, 'cod', 3900, '', '24 basundhara', '2019-12-09 12:57:53', 0),
(20, 'Tauhid', 'nila@gmail.com', 151515151, 1, 'Focallure  Matte Lipstick', 10, 390, 'cod', 3900, '', 'dhaka', '2019-12-10 00:57:54', 0),
(21, 'Tauhid', 'nila@gmail.com', 151515151, 1, 'Focallure  Matte Lipstick', 1, 390, 'cod', 390, '', 'dhaka', '2019-12-10 00:57:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'test', 'admin', 7898799798, 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2023-06-25 15:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `home_service` varchar(5) NOT NULL,
  `Cost` int(100) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `home_service`, `Cost`, `payment`, `Status`) VALUES
(11, '856425726', 'sadia', 'sadia@gmail.com', 1766554499, '12/16/2019', '10:00 am', 'Bridal Mehedi (Both Hand)', 'yes', 0, '', '1'),
(12, '130353924', 'sadia', 'sadia@gmail.com', 1766554499, '11/27/2019', '12:00 pm', 'Bridal Mehedi (Both Hand & feet)', 'no', 0, '', '1'),
(13, '329938369', 'nipa', 'nipa@gmail.com', 1766554499, '12/14/2019', '12:00 pm', 'Party Make-Up', 'yes', 0, '', '2'),
(14, '357698955', 'sadia', 'sadia@gmail.com', 1766554499, '12/12/2019', '1:00 pm', 'Bridal Mehedi (Both Hand)', 'yes', 0, '', '2'),
(15, '474652297', 'sadia', 'sadia@gmail.com', 1766554499, '12/23/2019', '11:00 am', 'Bridal Make-Up', 'yes', 0, '', '0'),
(16, '344031907', 'new name', 'sadia@gmail.com', 1766554499, '11/13/2019', '12:00 pm', 'Facial', 'no', 0, '', '2'),
(17, '567767799', 'new2', 'sadiaafrin@gmail.com', 1766554499, '11/22/2019', '1:00 pm', 'Facial', 'yes', 500, '', '0'),
(18, '208898104', 'new3', 'info@arorabd.com', 15151515151, '12/19/2019', '1:00 pm', 'Menicure', 'no', 600, 'Paid', '1'),
(20, '834878139', 'sfsfsf', 'jhmasterlimon1@gmail.com', 1956758055, '12/14/2021', '10:00 am', 'Bridal Make-Up', 'no', 10000, '', '0'),
(21, '179651944', 'Clarice Starling', 'clarice@gmail.com', 8969636, '06/08/2023', '12:00 pm', '', 'no', 0, '', '2'),
(22, '384577838', 'Clarice Starling', 'clarice@gmail.com', 8969636, '06/08/2023', '12:00 pm', '', 'no', 0, '', '2'),
(23, '654249326', 'Clarice Starling', 'clarice@gmail.com', 8969636, '06/08/2023', '12:00 pm', '', 'no', 0, '', '0'),
(24, '850628427', 'Clarice Starling', 'clarice@gmail.com', 8969636, '06/08/2023', '12:00 pm', '', 'no', 0, '', '0'),
(25, '792888822', 'Clarice Starling', 'clarice@gmail.com', 8969636, '06/08/2023', '12:00 pm', '', 'no', 0, '', '2'),
(26, '939240162', 'Clarice Starling', 'clarice@gmail.com', 8969636, '06/08/2023', '12:00 pm', '', 'no', 0, '', '2'),
(27, '630476192', 'Clarice Starling', 'clarice@gmail.com', 8969636, '06/08/2023', '12:00 pm', '', 'no', 0, '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(6, 'nila', 'nila@gmail.com', 6576579, 'Female', 'hshd', '2019-12-03 14:05:28', NULL),
(7, 'sadia', 'sadia@gmail.com', 6576579, 'Female', '', '2019-12-03 14:14:21', NULL),
(8, 'rubi', 'rubi@gmail.com', 5236436, 'Female', '', '2019-12-03 15:41:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(20, 6, 24, 336846459, '2019-12-03 14:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbloffers`
--

CREATE TABLE `tbloffers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oldprice` int(11) NOT NULL,
  `newprice` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbloffers`
--

INSERT INTO `tbloffers` (`id`, `name`, `oldprice`, `newprice`, `creation_date`) VALUES
(1, 'Focallure Face Powder', 620, 500, '2019-12-03 18:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', '                                                                                                             About Us', '        							        							        							        							        							        							        							        							        							<p class=\"MsoNormal\" style=\"text-align:justify\">Chic Beauty Salon provides the\r\nbest quality of services at affordable prices. It offers services that include haircutting\r\nand style, make-up, bridal make-up, facial, manicure, pedicure, and body\r\nmessage. The salon is located at Lagro, Quezon City, Metro Manila. The salon was\r\nestablished on June 2022 and owned by Brother Bear Inc.<o:p></o:p></p>        	\r\n        						        	\r\n        						        	\r\n        						        	\r\n        						        	\r\n        						        	\r\n        						        	\r\n        						        	\r\n        						        	\r\n        						', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '        House no: 27, Road no: 13, Sector: 4, Uttara, Dhaka.', 'info@arorabd.com', 1672227458, NULL, '10:00 am to 10:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayments`
--

CREATE TABLE `tblpayments` (
  `id` int(11) NOT NULL,
  `pmnt_id` int(11) NOT NULL,
  `date_of_pmnt` datetime NOT NULL,
  `cus_id` int(11) NOT NULL,
  `services` varchar(900) NOT NULL,
  `method` varchar(900) NOT NULL,
  `paid_amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayments`
--

INSERT INTO `tblpayments` (`id`, `pmnt_id`, `date_of_pmnt`, `cus_id`, `services`, `method`, `paid_amount`) VALUES
(2, 1, '2022-01-15 17:03:38', 6, '14,15', 'Gcash', 14000);

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `description`, `CreationDate`) VALUES
(14, 'Bridal Makeup', 10000, 'Bridal Makeup starts from 10000-25000. We can makeover according to their choice.', '2019-12-03 11:53:31'),
(17, 'Makeup', 8000, 'Fixed Price', '2019-12-03 11:56:47'),
(18, 'Facial', 500, 'Starts from 500-7000.There are regular facial, Acne Reduction Facial, Fruit Facial Treatment,Aromatherapy Facial,Antioxidant Facial,Wine Facial,Anti-aging Facial,Collagen Facial,Diamond Facial,Gold Facial,Skin Lightening Facial.', '2019-12-03 11:57:06'),
(19, 'Pedicure', 300, 'Fixed Price', '2019-12-03 11:57:22'),
(20, 'Manicure', 200, 'Fixed Price', '2019-12-03 11:57:36'),
(21, 'Haircut', 500, 'Different hair cutting have different price.', '2019-12-03 12:01:17'),
(23, 'Body Massage', 500, 'Starts from 500-10000. Customer can customize according to their choice.', '2019-12-03 12:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `email`, `phone`, `password`) VALUES
(6, 'nila', 22, 'nila@gmail.com', '01766554499', '4cf49ed737012a026800eaf4607da43a'),
(7, 'sadia', 23, 'sadia@gmail.com', '01766554499', '91b5cd208feabcc9b01cd14b7e4e83ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_order`
--
ALTER TABLE `pro_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbloffers`
--
ALTER TABLE `tbloffers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpayments`
--
ALTER TABLE `tblpayments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pro_order`
--
ALTER TABLE `pro_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbloffers`
--
ALTER TABLE `tbloffers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpayments`
--
ALTER TABLE `tblpayments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
