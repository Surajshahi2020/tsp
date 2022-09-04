-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 08:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'kingshahi163@gmail.com', 'b46a991b0c11b64f40f6acb85efa9606', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `data_location`
--

CREATE TABLE `data_location` (
  `id` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_location`
--

INSERT INTO `data_location` (`id`, `desc`, `lat`, `lon`) VALUES
(1, 'Ibukota Provinsi Aceh', 5.550176, 95.319260),
(2, 'Ibukota Kab.Aceh Jaya', 4.727890, 95.601372),
(3, 'Ibukota Abdya', 3.818570, 96.831841),
(4, 'Ibukota Kotamadya Langsa', 4.476020, 97.952446),
(5, 'Ibukota Kotamadya Sabang', 5.909284, 95.304741),
(8, 'sdaefsfse', 27.700769, 85.300140);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `Founder` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `name`, `Founder`, `url`) VALUES
(15, 27.671396, 85.339096, 'School', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=manoj'),
(16, 27.670771, 85.340164, 'IT ', 'Krishna Sapkota', 'http://localhost/pictogram_completed/?u=sapkotakrishna'),
(17, 27.667658, 85.309464, 'All food Restaurant ', 'Bibek Basnet', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(18, 27.672709, 85.343712, 'Guider', 'Juli shah', 'http://localhost/pictogram_completed/?u=juli'),
(19, 28.704081, 77.182503, 'ss', 'ss', ''),
(20, 28.762241, 77.192802, 'mmmmm', 'mmmmmmmmm', ''),
(21, 28.781502, 77.271080, ';;;;;;;;;;;;lllllll', 'llllllllllll', ''),
(22, 27.695608, 85.357056, 'airport', 'airport', ''),
(23, 41.034901, 29.056238, 'Software company', 'Suraj Shahi', ''),
(24, 28.759834, 77.023888, ',,,,,,,,,lll', 'jjjjjjjjj', 'http://localhost/TSP/?u=Surajshahi'),
(25, 27.673510, 85.338631, 'civil corporation', 'Krishna Sapkota', 'http://localhost/TSP/?u=Surajshahi'),
(26, 0.000000, 0.000000, '', '', ''),
(27, 0.000000, 0.000000, '', '', ''),
(28, 27.674278, 85.342339, 'government', 'Suraj shahi', 'http://localhost/TSP/?u=Surajshahi'),
(29, 28.806173, 77.231941, 'suraj shoe ', 'suraj shahi', 'http://localhost/TSP/?u=Surajshahi'),
(30, 28.752008, 77.120705, 'hhhhhhhhhh', 'hhhhhhhhhhhhhhhh', 'https://www.facebook.com/home.php'),
(31, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(32, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(33, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(34, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(35, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(36, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(37, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(38, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(39, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(40, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(41, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(42, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(43, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(44, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(45, 28.733347, 77.082253, 'Oracle Passowrd', 'Cap.Bibek Basnet', 'http://localhost/pictogram_completed/?u=manoj'),
(46, 0.000000, 0.000000, '', '', ''),
(47, 28.739967, 77.365150, 'Oracle Passowrd', 'kkkkkkkkkkkkkkkkkkk', 'http://localhost/pictogram_completed/?u=manoj'),
(48, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(49, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(50, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(51, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(52, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(53, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(54, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(55, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(56, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(57, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(58, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(59, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(60, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(61, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(62, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(63, 28.767658, 77.062340, 'Oracle Passowrd', 'Manoj Sapkota', 'http://localhost/pictogram_completed/?u=Surajshahi'),
(64, 28.725517, 77.181816, 'sasasa', 'Manoj Sapkota', 'http://localhost/TSP/?u=Surajshahi'),
(65, 28.718412, 76.975136, 'saab', 'sjirijfe', 'http://localhost/TSP/?u=Surajshahi'),
(66, 28.795944, 77.170143, 'Restaurant', 'Suraj shahi', 'http://localhost/map/'),
(67, 27.668633, 85.337151, 'Male', 'Hemanta Adhikari', 'http://localhost/project/tsp/?u=krishna Transfortation');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `shop_id`, `product_name`, `image`, `price`) VALUES
(1, 1, 'Product1', 'img1.jpg', 100),
(2, 1, 'Product2', 'img2.jpg', 200),
(3, 1, 'Product3', 'img3.jpg', 320),
(4, 2, 'Product4', 'img4.jpg', 125),
(5, 2, 'Product5', 'img5.jpg', 325),
(6, 2, 'Product6', 'img6.jpg', 410);

-- --------------------------------------------------------

--
-- Table structure for table `search_results`
--

CREATE TABLE `search_results` (
  `id` int(11) NOT NULL,
  `distance_in_kilo` int(11) DEFAULT NULL,
  `distance_in_mile` int(11) DEFAULT NULL,
  `duration_in_text` varchar(255) DEFAULT NULL,
  `TravelMode` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `shop_name`, `latitude`, `longitude`) VALUES
(1, 'Greater Noida Sector 110', 28.443451, 77.466942),
(2, 'Noida Sector 18', 28.559120, 77.361427),
(3, 'book shop', 27.700769, 85.300140);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(8, 'Mount Everest', 'Natural Attraction', 'Nepal , Solukhombu', 2500, 'Pickup- drop facility', 'Mount Everestlies in the northern part of the Solukhumbu district. The Solukhumbu district is a part of Province 1 in Nepal. Sagarmatha National Park was established in 1976 AD. The objective of the park was to protect the ecology of the region. Sagarmatha National Park became a UNESCO world heritage site in 1979. The total area of Sagarmatha National Park is 1,148 square kilometers. The peak of Mount Everest lies on the northern border of the park. The Qomolangma National Nature Preserve in Tibet lies in the northern part of Sagarmatha National Park. The Rolwaling Valley lies on the west of Sagarmatha National Park and the Makalu Barun National Park lies on its east.', 'Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg', '2022-09-04 05:26:07', NULL),
(9, 'Mount Everest', 'Natural Attraction', 'Nepal , Solukhombu', 2500, 'Pickup- drop facility', 'Mount Everestlies in the northern part of the Solukhumbu district. The Solukhumbu district is a part of Province 1 in Nepal. Sagarmatha National Park was established in 1976 AD. The objective of the park was to protect the ecology of the region. Sagarmatha National Park became a UNESCO world heritage site in 1979. The total area of Sagarmatha National Park is 1,148 square kilometers. The peak of Mount Everest lies on the northern border of the park. The Qomolangma National Nature Preserve in Tibet lies in the northern part of Sagarmatha National Park. The Rolwaling Valley lies on the west of Sagarmatha National Park and the Makalu Barun National Park lies on its east.', 'Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg', '2022-09-04 05:37:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_location`
--
ALTER TABLE `data_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_results`
--
ALTER TABLE `search_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_location`
--
ALTER TABLE `data_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `search_results`
--
ALTER TABLE `search_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
