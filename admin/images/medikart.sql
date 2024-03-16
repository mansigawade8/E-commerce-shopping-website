-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 03:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medikart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(6) NOT NULL,
  `elecid` int(6) NOT NULL,
  `userid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `elecid`, `userid`) VALUES
(1, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `elecid` int(9) NOT NULL,
  `title` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `elec_rating` int(3) NOT NULL,
  `image` varchar(90) NOT NULL,
  `description` varchar(800) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`elecid`, `title`, `category`, `elec_rating`, `image`, `description`, `price`) VALUES
(2, 'Dolo 650', 'HOMEOPATHY', 5, 'dolo.jpg', 'Dolo 650 Tablet is a medicine used to relieve pain and reduce fever', 32),
(3, 'Sinus 77 Tablet', 'HOMEOPATHY', 5, 'sinus77.jpg', ' used to treat the common cold and allergic symptoms like sneezing, watery eyes, or itchy/watery nose and throat.', 29),
(4, 'Omez D tablet', 'HOMEOPATHY', 5, 'omez.jpg', 'Omez-Dsr Capsule is a prescription medicine used to treat gastroesophageal reflux disease (Acid reflux) and peptic ulcer disease by relieving the symptoms such as heartburn, stomach pain, or irritation. It also neutralizes the acid in the stomach and promotes easy passage of gas to reduce stomach discomfort.', 178),
(5, 'Benadryl cough syrup', 'HOMEOPATHY', 5, 'benadryl.jpg', 'Benadryl Dry Cough & Nasal Congestion is used to relieve the symptoms of cold and cough such as runny nose, nasal congestion and dry cough.', 106),
(6, 'Crocin Pain Relief', 'HOMEOPATHY', 5, 'crocin.jpg', 'Crocin Pain Relief provides targeted pain relief. It provides symptomatic relief from mild to moderate pain e.g from headache, migraine, toothache and musculoskeletal pain. ', 66),
(7, 'Omega 3 Fish Oil', 'VITAMINSSUPPLEMENTS', 5, 'omega3.jpg', 'Omega-3s are nutrients you get from food (or supplements) that help build and maintain a healthy body.', 899),
(8, 'Vitamin C Tablets', 'VITAMINSSUPPLEMENTS', 5, 'vitaminc.jpg', 'Vitamin C, also known as ascorbic acid, is necessary for the growth, development and repair of all body tissues.', 299),
(9, 'Zincovit', 'VITAMINSSUPPLEMENTS', 5, 'zincovit.jpg', 'Zincovit tablet is a nutritional supplement that has a combination of grape seed extract and essential vitamins and minerals. It is used to prevent and treat vitamin and mineral deficiencies, boost immunity, and improve the overall health of an individual.', 85),
(10, 'Evion Vitamin E', 'VITAMINSSUPPLEMENTS', 5, 'evion.jpg', 'Evion 400 Capsule 10\'s contains Tocopherol (vitamin E), a fat-soluble vitamin that acts as an antioxidant with anti-inflammatory properties. It helps nourish and protect the skin from damage caused by free radicals. It may also decrease your heart disease risk, certain cancers, vision problems, and brain disorders', 10),
(11, 'Uprise-D3 60K', 'VITAMINSSUPPLEMENTS', 5, 'D3.JPG', 'Uprise-D3 60K Capsule is used in the treatment of vitamin D deficiency and osteoporosis. It helps the body to absorb calcium', 215);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'acd', '1234123412', 'abcd@gmail.com', '1234'),
(2, 'xyz', '1234567891', 'xyz@gmail.com', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`elecid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `elecid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
