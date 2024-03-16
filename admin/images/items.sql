-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 04:17 PM
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
-- Database: `online_medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `elecid` int(9) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `elec_rating` int(3) NOT NULL,
  `image` varchar(90) NOT NULL,
  `discription` varchar(800) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`elecid`, `Title`, `category`, `elec_rating`, `image`, `discription`, `price`) VALUES
(2, 'Lymphomyosot Rx Injectables', 'HOMEOPATHY', 3, 'lym.JPG', '', '80'),
(3, 'Serotonin Dopamine Liquescence', 'HOMEOPATHY', 2, 'amine.JPG', '', '320'),
(4, 'T-Relief Pain Gel', 'HOMEOPATHY', 5, 't-relife.JPG', '', '39'),
(5, 'BodyAnew Cleanse Oral Drops', 'HOMEOPATHY', 5, 'bodyanew.JPG', '', '999'),
(6, 'Inlife Multivitamin and Minerals Supplem', 'VITAMINSSUPPLEMENTS', 5, '81fcH-PvlxL._SL1500_.jpg', '', '635'),
(7, 'HealthKart Multivitamin with Ginseng Ext', 'VITAMINSSUPPLEMENTS', 5, '61UaZaYCHfL._SL1100_.jpg', '', '325'),
(8, 'NutrineLife Multivitamin Supplement with', 'VITAMINSSUPPLEMENTS', 5, '61MS9JgMncL._SL1450_.jpg', '', '963'),
(9, 'Sapien Body Total B Vitamin Complex - 60', 'VITAMINSSUPPLEMENTS', 5, '51LuEFQNgxL._SL1050_.jpg', '', '1500'),
(10, 'Purayati Multivitamin Tablets for Men - ', 'VITAMINSSUPPLEMENTS', 5, '51b1j63plTL._SL1024_.jpg', '', '70'),
(11, 'Himalaya Liv.52 Tablets - 100 Counts', 'AYURVEDA', 5, '61sus85P5BL._SL1000_.jpg', '', '520'),
(12, 'Zandu Kesari Jivan - 900 g', 'AYURVEDA', 5, '81J8thIJSnL._SL1500_.jpg', '', '521'),
(13, 'Dabur Chyawanprash - 1 kg with Free Dabu', 'AYURVEDA', 5, '61EhUbk23wL._SL1200_.jpg', '', '320'),
(14, 'Himalaya Confido Tablets - 60 Counts', 'AYURVEDA', 5, '61Cim3CxGOL._SL1000_.jpg', '', '300'),
(15, 'Himalaya Wellness Pure Herbs Ashvagandha', 'AYURVEDA', 5, '71WufUyijvL._SL1500_.jpg', '', '500'),
(16, 'Merck SevenSeas Original Cod liver Oil C', 'HEALTHFOOdDRINKS', 5, '51hFiMx0lQL.jpg', '', '400'),
(17, 'Herbalife Afresh Energy Drink- Lemon 50 ', 'HEALTHFOOdDRINKS', 5, '51tCiPwbkjL._SL1001_.jpg', '', '50'),
(18, 'Protinex Vanilla Delight - 400 g', 'HEALTHFOOdDRINKS', 5, '81cWOEqymLL._SL1500_.jpg', '', '420'),
(19, 'Neuherbs Organic Green Coffee Beans for ', 'HEALTHFOOdDRINKS', 5, '61D4KsVelyL._SL1500_.jpg', '', '40'),
(20, 'Wow Biotin Maximum Strength Veg Capsule ', 'HEALTHFOOdDRINKS', 5, '719yVsL8HEL._SL1500_.jpg', '', '360'),
(21, 'c-Rest Neck Massager Pillow,Massage Tool', 'HEALTHCAREDEVICES', 5, '612OHFmRX4L._SL1000_.jpg', '', '500'),
(22, 'Dr Physio (USA) Electric Heat Shiatsu Ma', 'HEALTHCAREDEVICES', 5, '81PfC3qz7WL._SL1500_.jpg', '', '1000'),
(23, 'Flamingo HC 1002 Orthopaedic Heating Bel', 'HEALTHCAREDEVICES', 5, '41lN8XJRKDL.jpg', '', '300'),
(24, 'Equinox Hot Water Bottle with Cover EQ-H', 'HEALTHCAREDEVICES', 5, '71Vn0S5iivL._SL1200_.jpg', '', '900'),
(25, 'Thermocare Gel Electric Warm Bag Multi C', 'HEALTHCAREDEVICES', 5, '71iJO1kqqdL._SL1500_.jpg', '', '1200'),
(26, 'Vaseline Intensive Care Deep Restore Bod', 'SKINCARE', 5, '51R-KubhnlL._SL1000_.jpg', '', '300'),
(27, 'Nivea Nourishing Lotion Body Milk with D', 'SKINCARE', 5, '71h3tcA8VUL._SL1500_.jpg', '', '400'),
(28, 'Parachute Advansed Body Lotion Deep Nour', 'SKINCARE', 5, '61Oc9yvHdPL._SL1500_.jpg', '', '450'),
(29, 'Lakme Absolute Perfect Radiance Skin Lig', 'SKINCARE', 5, '51amgXm0IwL._SL1000_.jpg', '', '260'),
(30, 'Lakme Blush and Glow Strawberry Gel Face', 'SKINCARE', 5, '616pyi18tXL._SL1000_.jpg', '', '420');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`elecid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `elecid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
