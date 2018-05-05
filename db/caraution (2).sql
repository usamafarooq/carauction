-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 10:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caraution`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` int(11) UNSIGNED NOT NULL,
  `Auction` varchar(255) NOT NULL,
  `Live` varchar(20) NOT NULL,
  `Location` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `Auction`, `Live`, `Location`, `Date`, `user_id`, `created_at`) VALUES
(1, 'Xyz Auction', 'Yes', 1, '2018-04-30 01:00:00', 2, '2018-04-30 08:14:45'),
(2, 'Abc Auction', 'No', 1, '2018-04-28 00:00:00', 2, '2018-04-27 07:36:52'),
(3, 'Xyz Auctionsss', 'No', 2, '2018-05-03 14:12:00', 2, '2018-04-30 05:08:23'),
(4, 'testing auction', 'Yes', 1, '2018-05-31 13:00:00', 2, '2018-05-02 05:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Symbol` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Make` int(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Model` int(11) NOT NULL,
  `Auction` int(11) DEFAULT NULL,
  `Sale_Location` varchar(255) DEFAULT NULL,
  `Vehicle_Location` varchar(255) DEFAULT NULL,
  `Sale_Status` varchar(100) DEFAULT NULL,
  `Sale_Date` date NOT NULL,
  `Item` varchar(100) DEFAULT NULL,
  `Destination` varchar(255) DEFAULT NULL,
  `Shipping_Price` varchar(255) DEFAULT NULL,
  `Stock_ID` varchar(100) DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `Series` varchar(100) DEFAULT NULL,
  `Odometer` varchar(255) DEFAULT NULL,
  `Sale_Document` varchar(255) DEFAULT NULL,
  `Sale_Document_Notes` varchar(255) DEFAULT NULL,
  `Loss` varchar(255) DEFAULT NULL,
  `Damage_Type` varchar(255) DEFAULT NULL,
  `ACV` varchar(255) DEFAULT NULL,
  `Estimated_Repair_Coast` varchar(255) DEFAULT NULL,
  `VIN` varchar(100) DEFAULT NULL,
  `Exterior_Color` varchar(255) DEFAULT NULL,
  `Interior_Color` varchar(255) DEFAULT NULL,
  `Body_Style` varchar(255) DEFAULT NULL,
  `Vehicle_Class` varchar(255) DEFAULT NULL,
  `Engine` varchar(255) DEFAULT NULL,
  `Cylinder` varchar(255) DEFAULT NULL,
  `Fuel_Type` varchar(255) DEFAULT NULL,
  `Transmission` varchar(255) DEFAULT NULL,
  `Driver_Type_` varchar(255) DEFAULT NULL,
  `Manufactured_In` varchar(255) DEFAULT NULL,
  `Key_item` varchar(255) DEFAULT NULL,
  `Start_Code` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `Name`, `Make`, `Year`, `Model`, `Auction`, `Sale_Location`, `Vehicle_Location`, `Sale_Status`, `Sale_Date`, `Item`, `Destination`, `Shipping_Price`, `Stock_ID`, `Type`, `Series`, `Odometer`, `Sale_Document`, `Sale_Document_Notes`, `Loss`, `Damage_Type`, `ACV`, `Estimated_Repair_Coast`, `VIN`, `Exterior_Color`, `Interior_Color`, `Body_Style`, `Vehicle_Class`, `Engine`, `Cylinder`, `Fuel_Type`, `Transmission`, `Driver_Type_`, `Manufactured_In`, `Key_item`, `Start_Code`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 'HYUNDAI ELITE I20 SERIE', 1, '2012', 1, 3, 'FL - ORLANDO', '151 WEST TAFT VINELAND ROAD', 'READY FOR SALE', '2018-04-28', 'LANE B - ITEM #3160', '', '', '168956931', '1', 'SE', '999999 NOT ACTUAL', 'CANADIAN REGISTRATION (FLORIDA)', 'CANADIAN EXPORTERS ONLY', 'COLLISION', 'LEFT SIDE; FRONT END', '15,769', '13,387', '2C4RDGBG3CR256397', 'BLACK', 'BLACK', 'VAN PASSENGER 4 DOOR', '2WD MINIVANS', '3.6L', '6 CYL', 'FLEXIBLE FUEL', 'AUTOMATIC', 'FWD', 'US', 'PRESENT', 'WON''T START', 2, '2018-04-30 07:40:25', '2018-04-30 07:39:02'),
(2, 'HYUNDAI ELITE I20 SERIE', 1, '2012', 1, 1, 'FL - ORLANDO', '151 WEST TAFT VINELAND ROAD', 'READY FOR SALE', '2018-04-28', 'LANE B - ITEM #3160', '', '', '168956931', '1', 'SE', '999999 NOT ACTUAL', 'CANADIAN REGISTRATION (FLORIDA)', 'CANADIAN EXPORTERS ONLY', 'COLLISION', 'LEFT SIDE; FRONT END', '15,769', '13,387', '2C4RDGBG3CR256397', 'BLACK', 'BLACK', 'VAN PASSENGER 4 DOOR', '2WD MINIVANS', '3.6L', '6 CYL', 'FLEXIBLE FUEL', 'AUTOMATIC', 'FWD', 'US', 'PRESENT', 'WON''T START', 2, '2018-04-30 07:40:25', '2018-04-30 07:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_images`
--

CREATE TABLE `inventory_images` (
  `id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_images`
--

INSERT INTO `inventory_images` (`id`, `inventory_id`, `images`) VALUES
(4, 1, '/uploads/big-1.jpg'),
(5, 1, '/uploads/big-2.jpg'),
(6, 1, '/uploads/big-3.jpg'),
(7, 2, '/uploads/big-1.jpg'),
(8, 2, '/uploads/big-2.jpg'),
(9, 2, '/uploads/big-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Short_Name` varchar(100) NOT NULL,
  `Icon` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `Name`, `Short_Name`, `Icon`, `user_id`, `created_at`) VALUES
(1, 'English', 'end', '', 2, '2018-04-23 21:14:03'),
(2, 'Franch', 'fra', '', 2, '2018-04-23 21:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `State_Full` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Zip_Code` varchar(255) NOT NULL,
  `Manager` varchar(255) NOT NULL,
  `Office_Hours` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Fax` varchar(255) DEFAULT NULL,
  `Preview_Time` varchar(255) NOT NULL,
  `Preview_Note` varchar(255) DEFAULT NULL,
  `Pickup_Time` varchar(255) DEFAULT NULL,
  `Pickup_Note` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `Address`, `Location`, `Country`, `State`, `State_Full`, `City`, `Zip_Code`, `Manager`, `Office_Hours`, `Phone`, `Fax`, `Preview_Time`, `Preview_Note`, `Pickup_Time`, `Pickup_Note`, `user_id`, `created_at`) VALUES
(1, 'Mystery Spot Road, Santa Cruz, CA, USA', 'CA - Santa Cruz', 'United States', 'CA', 'California', 'Santa Cruz', '95065', 'brien dabson', 'Mon, Fri 8am-5pm', '234567890', '0987654321', 'Mon, Fri 8am-5pm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '0000-00-00 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 2, NULL),
(2, 'Mystery Avenue, Wasilla, AK, USA', 'AK - Wasilla', 'United States', 'AK', 'Alaska', 'Wasilla', '99654', 'Brien Dabson', 'Mon - Fri 8am - 5pm (AKT) ', '+1 907-376-5364 ', '+1 907-376-3749 ', 'Day before the sale 8:30 - 4:30 (AKT) ', 'Only vehicles assigned to actual sale may be previewed prior to sale. Please always check with the auction facility before visiting for hours of operation.', '0000-00-00 00:00:00', 'Auction lots close earlier than offices to allow extra time for the loading and unloading of vehicles.', 2, '2018-04-26 03:59:59'),
(3, 'South Vermont Avenue, Los Angeles, CA, USA', 'CA - Los Angeles', 'United States', 'CA', 'California', 'Los Angeles', '90248', 'Alberto Maldonado', 'Mon,Tue,Wed,Thu 8am - 5pm (PT) ', '+1 310-965-0499 ', '', 'Wednesday 9:00 AM - 4:00 PM (PT) and Thursday 8:00 AM - 9:00 AM (PT) ', 'Only vehicles assigned to actual sale may be previewed prior to sale. Please always check with the auction facility before visiting for hours of operation.', '0000-00-00 00:00:00', 'Auction lots close earlier than offices to allow extra time for the loading and unloading of vehicles.', 2, '2018-04-26 04:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `Name`, `user_id`, `created_at`) VALUES
(1, 'DODGE', 2, '2018-04-24 12:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Make` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `Name`, `Make`, `user_id`, `created_at`) VALUES
(1, 'CARAVAN', 1, 2, '2018-04-24 12:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `main_name` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `main_name`, `sort`, `icon`, `url`, `user_id`) VALUES
(2, 'Dashboard', 'dashboard', 1, 'home', 'home', 4),
(3, 'Modules', 'modules', 4, 'store', 'modules', 4),
(5, 'Role/Permission', 'role', 2, 'verified_user', 'role', 4),
(7, 'Users', 'user', 3, 'account_circle', 'users', 2),
(19, 'Vehicle Type', 'vehicle_type', 6, 'wb_cloudy', 'vehicle_type', 2),
(20, 'Makes', 'makes', 7, 'add_to_queue', 'makes', 2),
(21, 'Models', 'models', 7, 'view_module', 'models', 2),
(22, 'Inventory', 'inventory', 7, 'list', 'inventory', 2),
(24, 'Language', 'language', 7, 'language', 'language', 2),
(25, 'Currency', 'currency', 6, 'euro_symbol', 'currency', 2),
(26, 'Subscriptions', 'subscriptions', 7, 'subscriptions', 'subscriptions', 2),
(27, 'Tickets', 'tickets', 7, 'assignment_turned_in', 'tickets', 2),
(28, 'Pages', 'pages', 6, 'pages', 'pages', 2),
(29, 'Locations', 'locations', 6, 'location_on', 'locations', 2),
(30, 'Auctions', 'auctions', 7, 'gavel', 'auctions', 2),
(31, 'Packages', 'packages', 9, 'layers', 'packages', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules_fileds`
--

CREATE TABLE `modules_fileds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `filed_type` varchar(100) NOT NULL,
  `options` varchar(255) NOT NULL,
  `length` int(11) NOT NULL,
  `required` int(11) NOT NULL DEFAULT '0',
  `module_id` int(11) NOT NULL,
  `is_relation` int(11) NOT NULL,
  `relation_column` varchar(100) DEFAULT NULL,
  `relation_table` varchar(100) DEFAULT NULL,
  `value_column` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_fileds`
--

INSERT INTO `modules_fileds` (`id`, `name`, `type`, `filed_type`, `options`, `length`, `required`, `module_id`, `is_relation`, `relation_column`, `relation_table`, `value_column`) VALUES
(1, 'name', 'VARCHAR', 'input', '', 100, 1, 15, 0, NULL, NULL, NULL),
(2, 'gender', 'VARCHAR', 'radio', 'male,female', 100, 1, 15, 0, NULL, NULL, NULL),
(3, 'relationship_status', 'VARCHAR', 'select', 'single,married,divorced,widowed', 100, 1, 15, 0, NULL, NULL, NULL),
(4, 'image', 'VARCHAR', 'file', 'jpg,png,jpeg,gif', 100, 1, 15, 0, NULL, NULL, NULL),
(5, 'education', 'VARCHAR', 'checkbox', 'matric,inter,bachlor', 255, 1, 15, 0, NULL, NULL, NULL),
(6, 'message', 'TEXT', 'textarea', '', 255, 1, 15, 0, NULL, NULL, NULL),
(7, 'Name', 'VARCHAR', 'input', '', 100, 1, 16, 0, NULL, NULL, NULL),
(8, 'Icon', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 16, 0, NULL, NULL, NULL),
(9, 'Name', 'VARCHAR', 'input', '', 100, 1, 17, 0, NULL, NULL, NULL),
(10, 'Icon', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 17, 0, NULL, NULL, NULL),
(11, 'Title', 'VARCHAR', 'input', '', 255, 1, 18, 0, NULL, NULL, NULL),
(12, 'Description', 'TEXT', 'textarea', '', 500, 1, 18, 0, NULL, NULL, NULL),
(13, 'category', 'INT', 'input', '', 11, 1, 18, 1, 'id', 'blog_category', 'Name'),
(14, 'image', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 255, 1, 18, 0, NULL, NULL, NULL),
(15, 'Name', 'VARCHAR', 'input', '', 100, 1, 19, 0, NULL, NULL, NULL),
(16, 'Image', 'VARCHAR', 'file', 'jpg,jpeg,png,gif', 255, 1, 19, 0, NULL, NULL, NULL),
(17, 'Name', 'VARCHAR', 'input', '', 100, 1, 20, 0, NULL, NULL, NULL),
(19, 'Name', 'VARCHAR', 'input', '', 100, 1, 23, 0, NULL, NULL, NULL),
(20, 'Name', 'VARCHAR', 'input', '', 100, 1, 24, 0, NULL, NULL, NULL),
(21, 'Short_Name', 'VARCHAR', 'input', '', 100, 1, 24, 0, NULL, NULL, NULL),
(22, 'Icon', 'VARCHAR', 'file', 'jpg,jpeg,png,gif', 255, 1, 24, 0, NULL, NULL, NULL),
(23, 'Name', 'VARCHAR', 'input', '', 100, 1, 21, 0, NULL, NULL, NULL),
(24, 'Make', 'INT', 'input', '', 11, 1, 21, 1, 'id', 'makes', 'Name'),
(25, 'Name', 'VARCHAR', 'input', '', 100, 1, 25, 0, NULL, NULL, NULL),
(26, 'Symbol', 'VARCHAR', 'input', '', 10, 1, 25, 0, NULL, NULL, NULL),
(27, 'Email', 'VARCHAR', 'input', '', 255, 1, 26, 0, NULL, NULL, NULL),
(133, 'Name', 'VARCHAR', 'input', '', 255, 1, 22, 0, NULL, NULL, NULL),
(134, 'Images', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 500, 1, 22, 0, NULL, NULL, NULL),
(135, 'Make', 'INT', 'input', '', 100, 1, 22, 1, 'id', 'makes', 'Name'),
(136, 'Year', 'VARCHAR', 'input', '', 100, 1, 22, 0, NULL, NULL, NULL),
(137, 'Model', 'INT', 'input', '', 11, 1, 22, 1, 'id', 'models', 'Name'),
(138, 'Sale_Location', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(139, 'Vehicle_Location', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(140, 'Sale_Status', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(141, 'Sale_Date', 'DATE', 'input', '', 100, 1, 22, 0, NULL, NULL, NULL),
(142, 'Item', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(143, 'Destination', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(144, 'Shipping_Price', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(145, 'Stock_ID', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(146, 'Type', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(147, 'Series', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(148, 'Odometer', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(149, 'Sale_Document', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(150, 'Sale_Document_Notes', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(151, 'Loss', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(152, 'Damage_Type', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(153, 'ACV', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(154, 'Estimated_Repair_Coast', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(155, 'VIN', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(156, 'Exterior_Color', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(157, 'Interior_Color', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(158, 'Body_Style', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(159, 'Vehicle_Class', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(160, 'Engine', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(161, 'Cylinder', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(162, 'Fuel_Type', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(163, 'Transmission', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(164, 'Driver_Type_', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(165, 'Manufactured_In', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(166, 'Key_item', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(167, 'Start_Code', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(168, 'Priority', 'VARCHAR', 'select', 'Normal,Medium,High,Urgent,Emegrency,Critical', 255, 1, 27, 0, NULL, NULL, NULL),
(169, 'Subject', 'VARCHAR', 'input', '', 255, 1, 27, 0, NULL, NULL, NULL),
(170, 'Message', 'TEXT', 'textarea', '', 500, 0, 27, 0, NULL, NULL, NULL),
(171, 'FIle', 'VARCHAR', 'file', 'png,jpeg,jpg,gif,pdf,doc,docx,xlx,xlxs,txt,csv', 255, 0, 27, 0, NULL, NULL, NULL),
(172, 'Name', 'VARCHAR', 'input', '', 255, 1, 22, 0, NULL, NULL, NULL),
(173, 'Images', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 500, 1, 22, 0, NULL, NULL, NULL),
(174, 'Make', 'INT', 'input', '', 100, 1, 22, 1, 'id', 'makes', 'Name'),
(175, 'Year', 'VARCHAR', 'input', '', 100, 1, 22, 0, NULL, NULL, NULL),
(176, 'Model', 'INT', 'input', '', 11, 1, 22, 1, 'id', 'models', 'Name'),
(177, 'Sale_Location', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(178, 'Vehicle_Location', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(179, 'Sale_Status', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(180, 'Sale_Date', 'DATE', 'input', '', 100, 1, 22, 0, NULL, NULL, NULL),
(181, 'Item#', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(182, 'Destination', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(183, 'Shipping_Price', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(184, 'Stock_ID', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(185, 'Type', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(186, 'Series', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(187, 'Odometer', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(188, 'Sale_Document', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(189, 'Sale_Document_Notes', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(190, 'Loss', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(191, 'Damage_Type', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(192, 'ACV', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(193, 'Estimated_Repair_Coast', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(194, 'VIN', 'VARCHAR', 'input', '', 100, 0, 22, 0, NULL, NULL, NULL),
(195, 'Exterior_Color', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(196, 'Interior_Color', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(197, 'Body_Style', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(198, 'Vehicle_Class', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(199, 'Engine', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(200, 'Cylinder', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(201, 'Fuel_Type', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(202, 'Transmission', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(203, 'Driver_Type_', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(204, 'Manufactured_In', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(205, 'Key', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(206, 'Start_Code', 'VARCHAR', 'input', '', 255, 0, 22, 0, NULL, NULL, NULL),
(207, 'Name', 'VARCHAR', 'input', '', 100, 1, 28, 0, NULL, NULL, NULL),
(208, 'Url', 'INT', 'input', '', 255, 1, 28, 0, NULL, NULL, NULL),
(209, 'Content', 'TEXT', 'textarea', '', 5000, 1, 28, 0, NULL, NULL, NULL),
(210, 'Auction', 'VARCHAR', 'input', '', 255, 1, 30, 0, NULL, NULL, NULL),
(211, 'Live', 'VARCHAR', 'radio', 'Yes, No', 20, 1, 30, 0, NULL, NULL, NULL),
(212, 'Location', 'INT', 'input', '', 11, 1, 30, 1, 'id', 'locations', 'Address'),
(213, 'Date', 'DATE', 'input', '', 0, 1, 30, 0, NULL, NULL, NULL),
(214, 'Name', 'VARCHAR', 'input', '', 255, 1, 31, 0, NULL, NULL, NULL),
(215, 'Create_Watchlist_and_Saved_Searches', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(216, 'Watchlist_SMS_Notifications', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(217, 'I_Buy_Fast', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(218, 'Proxy_Bid', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(219, 'On_Site_Vehicle_Preview', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(220, 'Bidder_Number', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(221, 'I_Bid_Live', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(222, 'Transaction_fee', 'VARCHAR', 'input', '', 100, 1, 31, 0, NULL, NULL, NULL),
(223, 'Free_Car_Auction_History_Reports', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL),
(224, 'Price', 'VARCHAR', 'input', '', 100, 1, 31, 0, NULL, NULL, NULL),
(225, 'Include_Deposit', 'VARCHAR', 'radio', 'Yes,No', 10, 1, 31, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Create_Watchlist_and_Saved_Searches` varchar(10) NOT NULL,
  `Watchlist_SMS_Notifications` varchar(10) NOT NULL,
  `I_Buy_Fast` varchar(10) NOT NULL,
  `Proxy_Bid` varchar(10) NOT NULL,
  `On_Site_Vehicle_Preview` varchar(10) NOT NULL,
  `Bidder_Number` varchar(10) NOT NULL,
  `I_Bid_Live` varchar(10) NOT NULL,
  `Transaction_fee` varchar(100) NOT NULL,
  `Free_Car_Auction_History_Reports` varchar(10) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Include_Deposit` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `Name`, `Create_Watchlist_and_Saved_Searches`, `Watchlist_SMS_Notifications`, `I_Buy_Fast`, `Proxy_Bid`, `On_Site_Vehicle_Preview`, `Bidder_Number`, `I_Bid_Live`, `Transaction_fee`, `Free_Car_Auction_History_Reports`, `Price`, `Include_Deposit`, `user_id`, `created_at`) VALUES
(1, 'BASIC', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', 'No', '0', 'No', 2, '2018-05-03 04:55:12'),
(2, 'PREMIER', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '$250 or 5%', 'Yes', '150', 'No', 2, '2018-05-03 04:55:57'),
(3, 'GOLD', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '$250', 'Yes', '250', 'Yes', 2, '2018-05-03 04:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `Name`, `Url`, `Content`, `user_id`, `created_at`) VALUES
(1, 'How It Work', 'how-it-work', '<!-- Our Services Five -->\r\n    <section class="featured-area animatedParent animateOnce">\r\n        <div class="container">\r\n          <div class="row">\r\n            <div class="col-md-6 col-md-offset-3">\r\n              <div class="section-title">\r\n                <h3>How Its Works, 4 Easy Steps</h3>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div class="container">\r\n            <div class="row">\r\n                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-250 go set-steps">\r\n                        <i class="fa fa-lock" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>REGISTER</h4>\r\n                            <p>Sign-up is free. All you need is a valid email address, Facebook account or Google account and a valid form of ID. Select from three flexible memberships and start bidding right away.</p>\r\n                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div> \r\n                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-500 go set-steps">\r\n                        <i class="fa fa-bullhorn" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>SEARCH & BID</h4>\r\n                            <p>Search through our vast inventory. Use our extensive notification tools to keep an eye on items you are interested in. With our flexible bidding options, you can pre-bid online.</p>\r\n                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div> \r\n                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-750 go set-steps">\r\n                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>CLAIM IT</h4>\r\n                            <p>Congratulations on your purchase! Once your bid is accepted, you will receive an email with your invoice and payment instructions. Once payment is received, claim your vehicle immediately.</p>\r\n                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div> \r\n                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-five text-center animated fadeInLeftShort slow delay-1000 go set-steps  ">\r\n                        <i class="fa fa-ship" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>SHIP IT</h4>\r\n                            <p>Have your vehicle shipped. Shipping is not an easy task, and requires a lot of know-how. Leave it to us. We take the hassle out of shipping so you can concentrate on more important things.</p>\r\n                            <a class="btn btn-default my-btn" href="#" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div> \r\n            </div>\r\n    </section>\r\n\r\n    <!--Promo Box Style One -->\r\n    <section class="promo-box-style-one"> \r\n        <div class="container">\r\n            <div class="row promo-box-one" style="margin-left:  0px;margin-right:  0px;"> \r\n                <div class="col-sm-8">\r\n                    <div class="promo-area-one center-767">\r\n                        <h3>We Give Our Services To All </h3>\r\n                        <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\r\n                    </div>  \r\n                </div>\r\n                <div class="col-sm-4">\r\n                    <div class="promo-area-one text-right center-767">\r\n                        <a class="btn btn-default custom-btn-one my-btn-lg" href="#" role="button">Read More</a>\r\n                    </div>  \r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>\r\n        \r\n\r\n       <!-- accordion Style One -->\r\n    <section class="accordion-style-one">\r\n        <div class="container">\r\n            <div class="row"> \r\n                <div class="col-md-12 column-margin"> \r\n                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">\r\n                        <div class="panel panel-default">\r\n                            <div class="panel-heading" role="tab" id="headingOne">\r\n                                <h4 class="panel-title">\r\n                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">\r\n                                      STEP 1 | Registration\r\n                                    </a>\r\n                                </h4>\r\n                            </div>\r\n                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">\r\n                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velmmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore a aliquam erat vesse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velit esse molestie consequat, vel illum dolore eu consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</div>\r\n                            </div>\r\n                        </div>\r\n                        <div class="panel panel-default">\r\n                            <div class="panel-heading" role="tab" id="headingTwo">\r\n                                 <h4 class="panel-title">\r\n                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">\r\n                                      STEP 2 | Bidding\r\n                                    </a>\r\n                                </h4>\r\n                            </div>\r\n                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">\r\n                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velmmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore a aliquam erat vesse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velit esse molestie consequat, vel illum dolore eu consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</div>\r\n                            </div>\r\n                        </div>\r\n                        <div class="panel panel-default">\r\n                            <div class="panel-heading" role="tab" id="headingThree">\r\n                                 <h4 class="panel-title">\r\n                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">\r\n                                      STEP 3 | Payment\r\n                                    </a>\r\n                                </h4>\r\n                            </div>\r\n                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">\r\n                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velmmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore a aliquam erat vesse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velit esse molestie consequat, vel illum dolore eu consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</div>\r\n                            </div>\r\n                        </div>\r\n                        <div class="panel panel-default">\r\n                            <div class="panel-heading" role="tab" id="headingFour">\r\n                                <h4 class="panel-title">\r\n                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">\r\n                                      STEP 4 | Transportation\r\n                                    </a>\r\n                                </h4>\r\n                            </div>\r\n                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">\r\n                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velmmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut werit in vulputate velit esse molestie consequat, vel illum dolore a aliquam erat vesse molestie consequat, vel illum dolore eu feugiat nulla facilisis t in vulputate velit esse molestie consequat, vel illum dolore eu consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>', 2, '2018-04-30 09:13:51'),
(2, 'Faqs', 'faqs', '<!-- Our Services Five -->\r\n    <section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">\r\n        <div class="container">\r\n          <div class="row">\r\n            <div class="col-md-6 col-md-offset-3">\r\n              <div class="section-title">\r\n                <h3>Frequently Asked Questions</h3>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    </section>    \r\n        <!-- Our Services four -->\r\n    <section class="services-style-four" >\r\n        <div class="container">\r\n            <div class="row">\r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-id-card" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Registration & membership</h4>\r\n                            <p>As a member of SCA, you will have access to a large network of car deals that are only offered to licensed dealerships.</p>\r\n                            <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div>  \r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-shield" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Security Deposit</h4>\r\n                            <p>In order for SCA to be protected from members who fail to pay for awarded vehicles, a security deposit is required.</p>\r\n                            <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div>  \r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-bullhorn" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Placing your Bid</h4>\r\n                            <p>Bidding on a vehicle requires registering as a member of SCA. Registration is free and there are three memberships to choose from:</p>\r\n                            <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div>  \r\n            </div>\r\n            <div class="row" style="margin: 50px -15px;">\r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-info" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Vehicle Information</h4>\r\n                            <p>All available vehicle information is displayed in the vehicle’s listing page. SCA’s registered members can visit auction locations.</p>\r\n                           <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div>  \r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-credit-card" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Paying for Vehicles</h4>\r\n                            <p>Fees are based on a member’s level of membership. There are two membership options: Basic and Premier. For Basic members </p>\r\n                            <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div>  \r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-ship" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Vehicle Shipping</h4>\r\n                            <p>Shipping is considered an additional cost and is not part of the final price. Members are responsible for making their...</p>\r\n                            <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div>\r\n            </div>\r\n          <div class="row" style="margin: 50px 0px;">\r\n            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-file" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Documentation</h4>\r\n                            <p>Once a member has won a bid, the bid price for the vehicle will need to be paid in full before the documents for the purchase...</p>\r\n                            <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div>  \r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-question" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Miscellaneous Questions</h4>\r\n                            <p>SCA can be contacted three ways:   Call +1 (786) 655-8855   Email us at support@sca.auction   Mail any correspondence...</p>\r\n                           <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div> \r\n                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column-margin">\r\n                    <div class="services-features-four text-center">\r\n                        <i class="fa fa-bars" aria-hidden="true"></i>\r\n                        <div class="back-color">\r\n                            <h4>Glossary of Terms</h4>\r\n                            <p>Actual cash value. The suggested cash value of a vehicle in its pre-damaged condition, provided by the seller.</p>\r\n                           <a class="btn btn-default custom-btn-four my-btn-sm" href="registration-membership.html" role="button">Read More</a>\r\n                        </div>\r\n                    </div>  \r\n                </div> \r\n          </div>         \r\n        </div>      \r\n    </section>\r\n\r\n\r\n    <!--Promo Box Style One -->\r\n    <section class="promo-box-style-one"> \r\n        <div class="container">\r\n            <div class="row promo-box-one" style="margin-left:  0px;margin-right:  0px;"> \r\n                <div class="col-sm-8">\r\n                    <div class="promo-area-one center-767">\r\n                        <h3>We Give Our Services To All </h3>\r\n                        <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\r\n                    </div>  \r\n                </div>\r\n                <div class="col-sm-4">\r\n                    <div class="promo-area-one text-right center-767">\r\n                        <a class="btn btn-default custom-btn-one my-btn-lg" href="#" role="button">Read More</a>\r\n                    </div>  \r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>', 2, '2018-04-30 09:14:03'),
(3, 'Contact Us', 'contact-us', ' <!-- Featured Car start -->\r\n   <section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">\r\n        <div class="container">\r\n          <div class="row">\r\n            <div class="col-md-6 col-md-offset-3">\r\n              <div class="section-title">\r\n                <h3>Contact Us</h3>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    </section>\r\n\r\n   <!-- Contact info start -->\r\n    <section class="contact-info-area">\r\n        <div class="container">\r\n            <div class="section-content">\r\n                <div class="row">\r\n                    <div class="col-sm-12 col-md-4 col-lg-4">\r\n                        <div class="service-item style-1 border-1px">\r\n                            <div class="service-icon">\r\n                                <i class="fa fa-map-o" aria-hidden="true"></i>\r\n                            </div>\r\n                            <div class="content">\r\n                                <h5><a href="#">Contact Info</a></h5>\r\n                                <p>5B Streat, City 50987 New Town US, <br>Khulna, BD</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class="col-sm-12 col-md-4 col-lg-4">\r\n                        <div class="service-item style-1 border-1px">\r\n                            <div class="">\r\n                                <i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                            </div>\r\n                            <div class="content">\r\n                                <h5><a href="#">Business Hours</a></h5>\r\n                                <p>Monday to Friday: 6am to 6pm EDT </br> Saturday to Sunday: Closed</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class="col-sm-12 col-md-4 col-lg-4">\r\n                        <div class="service-item style-1 border-1px">\r\n                            <div class="">\r\n                                <i class="fa fa-envelope-o" aria-hidden="true"></i>\r\n                            </div>\r\n                            <div class="content">\r\n                                <h5><a href="#">Email</a></h5>\r\n                                <p><a href="#">info@abc.com</a> <br> <a href="#">support@abc.com</a> </p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class="row">\r\n                    <div class="col-sm-12 col-md-4 col-lg-4">\r\n                        <div class="service-item style-1 border-1px">\r\n                            <div class="service-icon">\r\n                                <i class="fa fa-phone" aria-hidden="true"></i>\r\n                            </div>\r\n                            <div class="content">\r\n                                <h5><a href="#">Call Us</a></h5>\r\n                                <p>Member Support: +1 786-655-8855 <br> <button class="btn btn-deafult contact-cus" href="#">Have Us To Call You</button> </p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class="col-sm-12 col-md-4 col-lg-4">\r\n                        <div class="service-item style-1 border-1px">\r\n                            <div class="">\r\n                                <i class="fa fa-users" aria-hidden="true"></i>\r\n                            </div>\r\n                            <div class="content">\r\n                                <h5><a href="#">Social Network</a></h5>\r\n                                <p><button class="btn btn-default faebook-con">Facebook</button> <br><button class="btn btn-default google-con">Google</button></p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class="col-sm-12 col-md-4 col-lg-4">\r\n                        <div class="service-item style-1 border-1px">\r\n                            <div class="">\r\n                                <i class="fa fa-chat" aria-hidden="true"></i>\r\n                            </div>\r\n                            <div class="content">\r\n                                <h5><a href="#">Chat With Us</a></h5>\r\n                                <p><a href="#">Our Support Availble 24/7</a> <br> <button class="btn btn-deafult live-cus" href="#">Live Chat</button> </p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>\r\n\r\n    <!-- Contact form start -->\r\n    <section class="contact-area">\r\n        <div class="container">\r\n            <div class="section-content">\r\n                <div class="row">\r\n                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">\r\n                        <form id="ajax-contact" method="post" action="#">\r\n                            <div class="row">\r\n                                <div class="form-group col-md-6">\r\n                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>\r\n                                </div>\r\n                                <div class="form-group col-md-6">\r\n                                    <input type="number" name="name" id="name2" class="form-control" placeholder="Phone" required>\r\n                                </div>\r\n                                <div class="form-group col-md-12">\r\n                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email"  required>\r\n                                </div>\r\n                                <div class="form-group col-md-12">\r\n                                    <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" required>\r\n                                </div>\r\n                                <div class="form-group col-md-12">\r\n                                    <div class="contact-textarea">\r\n                                        <textarea class="form-control" rows="6" placeholder="Wright Message" id="message" name="message" required></textarea>\r\n                                        <button class="btn btn-theme mt-4" type="submit" value="Submit Form">Send Message</button>\r\n                                    </div>\r\n                                </div>\r\n                                <div id="form-messages"></div>\r\n                            </div>\r\n                        </form>\r\n                    </div>\r\n                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">\r\n                        <div id="map1" class="theme-color"></div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>', 2, '2018-04-30 09:20:35'),
(4, 'Privacy Policy', 'privacy-policy', '<!-- Featured Car start -->\r\n   <section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">\r\n        <div class="container">\r\n          <div class="row">\r\n            <div class="col-md-6 col-md-offset-3">\r\n              <div class="section-title">\r\n                <h3>Privacy Policy</h3>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    </section>\r\n\r\n        <!-- Car Details start -->\r\n    <section class="car-details-area" style="padding: 0px 0px 100px 0px;">\r\n      <div class="container">\r\n        <div class="row">\r\n            <div class="col-lg-12 col-md-12 color-bg">\r\n            <div class="content-faq">  \r\n              <h3>Last updated: February 1, 2016</h3>\r\n              <p>This policy is to disclose to users of SCA AUCTIONS, LLC’s site the methods by which SCA gathers, handles and uses information obtained through registrations, email correspondence, contents, newsletters, announcements or completion of forms via the site and related entities. This Privacy Policy does not apply to information gathered by SCA AUCTIONS, LLC from entities other than this site.</p>\r\n              <hr class="faq-line">\r\n              <p>By accessing and using the site, the user agrees to be bound by all policies within this Privacy Policy. If the user does not agree with the Privacy Policy for any reason, he or she must exit and discontinue use of this site.</p>\r\n              <hr class="faq-line">\r\n              <p>SCA AUCTIONS, LLC may alter this Privacy Policy at any time without notification. It is advised by SCA AUCTIONS, LLC that users frequently visit this page and policy to determine if any changes have been made. If, for any reason, a user does not agree with the Privacy Policy or the changes made thereto, the user is advised to immediately terminate use of the site by exiting the site immediately and by not providing any personally identifiable information.</p>\r\n              <hr class="faq-line">\r\n              <h3>Personally Identifiable Information</h3>\r\n              <p>Personal information is not required to browse this site; however, there will come a time when in order to have full access to the services provided by this site, users will be required to provide personally identifiable information. It will become apparent that such information needs to be shared by having to fill out a form where personally identifiable information will be asked to be given to the site for the purposes of joining contests, making purchases, receiving newsletters or receiving promotional emails. Personal names, email addresses, home addresses, shipping addresses, age and phone numbers may be collected for the purposes of completing transactions, sending promotional materials, entering contests, joining mailing lists, subscribing to newsletters, viewing auction lists or receiving information for the purposes of learning about new products and website changes or answering customer inquiries. It is SCA’s policy to notify users as to when and why such information will be gathered. It is also SCA’s policy that the information gathered can only be used for the purposes for which it was obtained. If for any reason a user refuses to share information, the site can still be accessed and browsed, but placing orders, participating in contests and receiving information will be hindered or not available for those who have chosen to not provide personally identifiable information.</p>\r\n              <hr class="faq-line">\r\n              <p>Once personally identifiable information is shared through this site, you will automatically be placed on our mailing list where you will receive communication regarding to new products, product information, sales, deals, contests and special offers. If you do not wish to receive our emails, you may unsubscribe at any time via the link in any email from us or by contacting “Member Support.” SCA AUCTIONS, LLC maintains a “no spam” policy and ensures your email will not be given to any third parties without your consent or otherwise stated in this agreement.</p>\r\n              <hr class="faq-line">\r\n              <p>Member Support is also available in the event you want your information deleted from our system or changed within our system. Every possible attempt will be made to implement your decision.</p>\r\n              <hr class="faq-line">\r\n              <h3>Collective Data and Cookies</h3>\r\n              <p>SCA fully discloses that our site deposits “cookies” into a visitor’s computer. Cookies send information to your web browser. This information will be stored within your computer. Cookies cannot read the files on your computer. Cookies are also unable to read cookies from another site nor can they cause any alterations to your computer. Cookies send information back to your web browser when you return to a specific site in order to enhance your browsing experience. Cookies allow SCA to know what parts of the site are frequented most and how often. Cookies cannot read any personally identifiable information.</p>\r\n              <hr class="faq-line">\r\n              <p>Third-party vendors may use cookies to obtain your browsing history in order to post our advertisements on other sites. You may stop this action from happening by visiting the Network Advertising Initiative’s opt-out page.</p>\r\n              <hr class="faq-line">\r\n              <p>You can personally change your cookie settings through your browser. You may block cookies totally or receive alerts as to when a cookie is being sent. If you choose to block all cookies, it should be understood that users will no longer have full access to the site, meaning purchases may not be completed and certain services will no longer be available.</p>\r\n              <hr class="faq-line">\r\n              <p>All computers that use the Internet are given a domain name and an Internet Protocol, or IP, address. This address does not provide any personally identifiable information. The purpose of an IP address is to monitor site traffic and create statistics based off of users’ site visit frequency. The site can only gather personally identifiable information when a visitor/user provides that information.</p>\r\n              <hr class="faq-line">\r\n              <h3>Purchasing and/or Registering Products or Services</h3>\r\n              <p>When a user decides to purchase a product from SCA, the user must provide personal information such as name, address, shipping address, email address, etc., in order to process transactions and send notifications on products in transit and future promotional items. The information provided will not be shared with third parties for any reason except otherwise stated in this agreement. Our site uses industry-standard secure shopping via Secure Sockets Layer (SSL) encrypted servers. Information shared between the user and this site will be rendered indecipherable by any outside parties trying to acquire the information. You will know the site is secure when the web address begins with https.</p>\r\n              <hr class="faq-line">\r\n              <p>Disclosure of Information to Outside Third Parties and Special Cases</p>\r\n              <hr class="faq-line">\r\n              <p>SCA will never share your personally identifiable information with anyone for any reason except the following:</p>\r\n              <hr class="faq-line">\r\n              <p>When the sharing of personal information is required by law or it is in good faith that the action is necessary;</p>\r\n              <ul>\r\n                <li>To cooperate with authorities in the investigation of unlawful activities;</li>\r\n                <li>To cooperate with a court-ordered subpoena or any other actions required by the court;</li>\r\n                <li>To protect the rights of our members and visitors;</li>\r\n                <li>To protect the rights of SCA; or</li>\r\n                <li>To identify any entities that may be violating the rights of third parties.</li>\r\n              </ul>\r\n              <hr class="faq-line">\r\n              <p>SCA may share some non-personal information with advertisers, sponsors and non-affiliated third parties in order to customize the site and enhance customer experience when visiting the site.</p>\r\n              <hr class="faq-line">\r\n              <p>SCA takes reasonable measures to secure the privacy of information shared across our site; however, SCA will not be held responsible for errors in the transmission of information, failed security or third parties who make efforts to obtain your information through their own means.</p>\r\n              <hr class="faq-line">\r\n              <p>In the event that SCA is purchased by another company, merges with another entity or is involved in a corporate takeover, users’ personal information will be sold or transferred with SCA. SCA will be able to transfer this information without your consent as long as the transferee honors the privacy agreements. You may make a written request to stop the sharing of your personal information by contacting our marketing department.</p>\r\n              <hr class="faq-line">\r\n              <h3>Links to Other Sites</h3>\r\n              <p>SCA provides our users with links to other sites in order to enhance their Internet experience. SCA chooses sites that are in line with our ethics and the ethics of our visitors. SCA, however, does not take responsibility for other sites and does not endorse the views or practices of other sites. SCA is not affiliated with or responsible for the privacy practices of sites that are linked to SCA. SCA will never share your personal information with sites that are linked to SCA.</p>\r\n              <hr class="faq-line">\r\n              <h3>Children’s and Minors’ Online Privacy</h3>\r\n              <p>SCA complies with the Children’s Online Privacy Protection Act (COPPA). Websites cannot obtain private information from children under the age of 13 unless approved by the child’s parent. Children are not eligible to receive any products, make any purchases or join any contests or promotions on this site. SCA never knowingly receives or gathers information on anyone under the age of 18. Persons under the age of 18 may not participate in the site. A user must be 18 years of age or older to join SCA and participate in any contests, purchases or special offers. Persons under the age of 18 may only participate in conjunction with the participation of their parent or guardian.</p>\r\n              <hr class="faq-line">\r\n              <h3>Your Consent to This Privacy Policy</h3>\r\n              <p>Using this site means all users agree to the terms set forth in this privacy policy. Use of SCA’s site binds all users to this privacy policy and gives user’s consent to being bound by this policy and all terms herein.</p>\r\n              <hr class="faq-line">\r\n              <p>Any changes made to this policy shall be posted on this specific page for review. Changes may affect the way SCA shares, discloses or keeps private personal information.</p>\r\n              <hr class="faq-line">\r\n              <p>Unless otherwise indicated, all material on this site © 2016 SCA AUCTIONS, LLC. All rights reserved.</p>\r\n              <h3>V5 PP (02.01.2016)</h3>\r\n            </div>\r\n          </div>\r\n          \r\n        </div>\r\n      </div>\r\n    </section>', 2, '2018-04-30 09:33:20'),
(5, 'Website Terms of Use', 'website-terms', '<!-- Featured Car start -->\r\n   <section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">\r\n        <div class="container">\r\n          <div class="row">\r\n            <div class="col-md-6 col-md-offset-3">\r\n              <div class="section-title">\r\n                <h3>Website Terms of Use</h3>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    </section>\r\n\r\n        <!-- Car Details start -->\r\n    <section class="car-details-area" style="padding: 0px 0px 100px 0px;">\r\n      <div class="container">\r\n        <div class="row">\r\n            <div class="col-lg-12 col-md-12 color-bg">\r\n            <div class="content-faq">  \r\n              <h3>Last updated: February 2, 2016</h3>\r\n              <p>All information on this website is provided by SCA AUCTIONS, LLC under the following terms and conditions:</p>\r\n              <ol>\r\n                <li>Upon use of this site, whether browsing or using the service, the user understands what he or she has read in regard to Terms of Use, and the user agrees to the conditions and terms established in this document. The user also agrees to the applicable rules and laws that govern this document. If for whatever reason the user does not or will not agree to these terms, then termination of the use of this site is highly encouraged.</li>\r\n                <li>All information, services, images, photos, pictures, etc., contained on this site in all of its entirety are protected by copyright and should be utilized for informational purposes only. All content is owned by SCA, its licensors, business partners and affiliates. Unless otherwise noted, SCA is also sole owner of all service marks or trademarks on this site regardless of registration. All registered service or trademarks are registered with the United States of America and all relevant jurisdictions.</li>\r\n                <li>The user has permission to print, reformat or display the content of this page only for the use of personal, non-commercial purposes as long as the original content is not changed for any reason and all the copyright notices are adhered to when using the content. Under no circumstances can content found on this site be reproduced, sold, resold, distributed, downloaded, linked or exploited for commercial purposes unless written permission to do so is granted by SCA.</li>\r\n                <li>By using this site, users agree to not modify, delete, add, manipulate or tamper with the content of this site. Users may also not reverse engineer or decompile or disassemble the content or portions of the content for unlawful purposes. It is also agreed upon by using the site that users may not under any circumstances assist any persons or third parties in any of these activities.</li>\r\n                <li>SCA shall not be held responsible for damages, including, without limitation, any direct and indirect, consequential, punitive or other damages, including, without limitation, damages in the event of lost profits or revenue. SCA is also not liable for loss of information or business that may occur from the use or inaccessibility to use the content or the site even if SCA is aware of the chance of these damages.</li>\r\n                <li>SCA will make all conscionable efforts to provide accurate information located on this site. SCA will not be held responsible for any unanticipated or unforeseen events that typically occur while monitoring a computer-related service, including, but not limited to, (a) the failure of the site, the Internet software and hardware or Internet provider to provide, send and receive timely and accurate transmissions, (b) the inability to access the site in whole or any of its parts, (c) the accuracy and quality of the content including any errors or omissions, (d) human error or (e) any acts of God.</li>\r\n                <li>The use of this site waives any rights (if applicable) to receive from SCA the ability to sue or blame the directors, employees, representatives or officers of SCA for any costs, expenses, losses or damages whether they be indirect or direct, conscionable or unconscionable, or unforeseen or foreseen while using this site or any parts therein.</li>\r\n                <li>In using this site, the user will access and handle all content, and the user will rely on accuracy, usefulness and completeness of this site at his or her own risk. The user also agrees that the site is provided as it is and any hyperlinks or links to third-party sites are to be used at the user’s own discretion. SCA is in no way liable for any content or damages that may occur from knowingly using a third party’s link or site. SCA has no jurisdiction over third-party sites and, therefore, may not be held accountable for what happens when a user chooses of his or her own volition to use those links or sites.</li>\r\n                <li>SCA disowns any and all warranties of any kind with this site. SCA makes no warranty that (a) the site will satisfy users’ requirements, (b) the site will be free of errors, viruses, interruptions, disruptions or security malfunctions, (c) the site will provide accurate and correct information, (d) items purchased through the site will meet buyers’ expectations or (e) site errors will be rectified.</li>\r\n                <li>By using this site and creating an account, the user has the sole responsibility for maintaining the confidentiality of their password and user name. SCA is not liable for the loss or theft of any confidential sign-in information.</li>\r\n                <li>Users are urged to read our Privacy Policy containing information on the obtaining and use of personal information on this site. SCA reserves the right to share personal information without notice if required by law to disclose that information, upon good belief that disclosing information is necessary in order to comply with the law, to protect the rights and property of SCA or to respond effectively in an emergency. Specific and various parts of this site may contain different and unique terms related to the handling of personal information collected from those specific areas.</li>\r\n                <li>SCA under no circumstances needs to notify any users of this site in regard to changes made to these Terms of Use at any time. All future changes will be made to this page, and it is highly recommended that users frequently visit this page in order to be kept up to date on all changes to the Terms of Use. If for any reason a user does not agree to the terms set forth in this document, it is in the user’s best interest to immediately discontinue using this site. Use of this site binds any and all users to the terms set forth in this document.</li>\r\n                <li>The Terms of Use in this document, for this site, shall be governed by the state of Montana and its laws, which shall override all other laws. If for any reason any of these terms is deemed unlawful or unenforceable, they shall be severed from this document without affecting the validity of the remaining provisions.</li>\r\n              </ol>\r\n              <hr class="faq-line">\r\n              <p>If the user does not agree to the above terms, the user must terminate use of this site immediately.</p>\r\n              <hr class="faq-line">\r\n              <p>Be advised: Registered SCA members may be bound by additional conditions and terms. Members are encouraged to review the Terms and Conditions for additional information. Also, certain areas or pages of this site might contain additional, unique or different terms in relation to the use of this website or the rights or obligations of SCA members or SCA. If specific terms conflict with the Terms of Use, the specific terms will be followed.</p>\r\n              <hr class="faq-line">\r\n              <p>Unless otherwise indicated, all material on this site © 2016 SCA AUCTIONS, LLC. All rights reserved.</p>\r\n              <h3>V4 TOU (02.02.2016)</h3>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </section>', 2, '2018-04-30 09:34:15');
INSERT INTO `pages` (`id`, `Name`, `Url`, `Content`, `user_id`, `created_at`) VALUES
(6, 'Member Terms & Conditions', 'member-terms', '<!-- Featured Car start -->\r\n   <section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">\r\n        <div class="container">\r\n          <div class="row">\r\n            <div class="col-md-6 col-md-offset-3">\r\n              <div class="section-title">\r\n                <h3>Member Terms & Conditions</h3>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    </section>\r\n\r\n        <!-- Car Details start -->\r\n    <section class="car-details-area" style="padding: 0px 0px 100px 0px;">\r\n      <div class="container">\r\n        <div class="row">\r\n            <div class="col-lg-12 col-md-12 color-bg">\r\n            <div class="content-faq">  \r\n              <h3>Last updated: February 1, 2016</h3>\r\n              <p>SCA AUCTIONS LLC is pleased to provide this Website and your membership therein. SCA AUCTIONS LLC is a Florida limited liability company, with a principal place of business located at 15173B NE 21ST Avenue, North Miami Beach, FL 33162 USA.</p>\r\n              <hr class="faq-line">\r\n              <p>These Terms are a legally binding Agreement between Members and us. Therefore, please read these Terms carefully, and, if you do not agree to be bound thereby, please immediately discontinue your use of the Website and do not register as a Member. IAA shall not be a party to this Agreement; all vehicle purchases are made via us and not IAA.</p>\r\n              <ol>\r\n                <li><b>Definitions</b>\r\n                  <p>“Services” refers to the services we offer, including providing a platform through which Members may place bids on vehicle auctions and vehicle transportation services.</p>\r\n                  <p>“We,” “us” and “our” refer to SCA AUCTIONS LLC.</p>\r\n                  <p>“You,” “your” and “Member” refer to a member of the Website.</p>\r\n                  <p>“Website” refers to the Website https://sca.auction/en and any related website provided by us.</p>\r\n                </li>\r\n                <li><b>Registration & Membership</b>\r\n                  <p>2.1.      Registration for Membership; Use of Accounts: The use of the Website is free; however, only our Members may access our Services. We offer two (2) membership options: Basic and Premier. By registering with us as a Member or otherwise utilizing the Website you agree to be bound by these Terms and Conditions. These Terms and Conditions are also subject to our Privacy Policy. By registering as a Member you warrant that all information you provide upon registration is complete and accurate, and you agree to timely update all information should it change. You agree to hold your login credentials in the strictest confidence, and you agree and acknowledge that you are responsible for all use of your Account, regardless of whether you consented to such use. This includes all bids submitted under your Account through the Website, IAA’s Website, or at auction facilities.</p>\r\n                  <p>2.2.      Restrictions on Membership: Membership shall be restricted to those persons who: (1) are eighteen (18) years of age or older and have the capacity to enter into a legally binding contract; (2) are residents of non-embargoed countries; and (3) provide a valid passport or government-issued form of identification for verification of identity purposes. Members may only have one (1) account and may not sell, assign, or otherwise transfer the account.</p>\r\n                  <p>2.3.      Prohibited Uses of Accounts: Members may not at any time use the Website or their Accounts to violate any local, state, federal, or international laws, rules, ordinances or regulations; solicit others to violate any local, state, federal, or international laws, rules, ordinances or regulations; harass, abuse, insult, defame, slander, intimidate, disparage, discriminate, or harm any other person, including but not limited to on the basis of religion, gender, sexual orientation, religion, nationality, race, ethnicity, disability, or age; transmit or otherwise distribute any virus or malware that would harm the functioning of the Website or any other Website; for immoral and obscene purposes; to violate our intellectual or moral rights or the intellectual or moral rights of any third party; to commit fraud or misrepresentations, whether fraudulent, intentional, or negligent; or to violate our Privacy Policy or the privacy of any third party.</p>\r\n                  <p>2.4.      Basic Membership: Members who have registered as Basic Members shall pay a Transaction fee of Two Hundred Fifty U.S. Dollars and No Cents ($250.00) or five percent (5%) of the purchase price per vehicle, whichever is greater. Basic Memberships have no expiration dates and may be upgraded at any time; Basic Members are limited to Proxy Bids only and may not participate in Live Auctions.</p>\r\n                  <p>2.5.      Premier Membership: Members who have registered as Premier Members shall pay a reduced Transaction Fee of Two Hundred Fifty U.S. Dollars and No Cents ($250.00) per vehicle and can participate in Live Auctions,<span style="background-color:rgb(255, 255, 221); font-family:verdana,sans-serif; font-size:12px"> for an annual fee of One Hundred Fifty U.S. Dollars and No Cents ($150.00).</span> Premier Memberships are good for one (1) year, where at the end of the year they shall downgrade automatically to a Basic Membership unless renewed by the Member.</p>\r\n                  <p>2.6.      Cancellation of Membership: You may cancel your Membership at any time by contacting us. No fees paid by you shall be refunded, for any reason whatsoever, in the event you elect to cancel your Account.</p>\r\n                  <p>2.7.      Revocation of Membership: We reserve the right to suspend, revoke, or otherwise terminate your Membership at any time and for any reason whatsoever, in our sole and exclusive discretion. Examples of why a Membership may be terminated include but are not limited to violations of Section 2.3 or nonpayment of any fees due. No fees paid by you shall be refunded, for any reason whatsoever, in the event your Membership is suspended, revoked, or otherwise terminated, nor shall we be liable for said suspension, revocation, or termination or any damages related to or arising therefrom.</p>\r\n                  <p>2.8.      Membership Fees: Basic Memberships are free. One-year Premier Memberships are subject to a nonrefundable <span style="background-color:rgb(255, 255, 221); font-family:verdana,sans-serif; font-size:12px"> fee of One Hundred Fifty U.S. Dollars and No Cents ($150.00) </span>payable upon registration or Account upgrade from a lower Membership type via major credit or debit card or wire transfer or as otherwise set forth upon checkout. We may change the Membership Fees at any time, in our sole and exclusive discretion.</p>\r\n                </li>\r\n                <li><b>Vehicle Sales & Bidding</b>\r\n                  <p>3.1.      IAA: In addition to our Terms, all vehicle sales shall be additionally subject to the IAA auction rules; therefore, you are encouraged to review IAA’s auction rules prior to placing any bid. All terms not defined herein shall be given the definition as set forth in IAA’s auction rules.</p>\r\n                  <p>3.2.      Bids: Bid carefully! Once submitted, bids cannot be changed or retracted. We are unable to guarantee that IAA may accept your bid, and IAA may reject a Member’s bid for any reason in IAA’s sole and exclusive discretion. You agree that we shall have no liability in the event that a bid you place is rejected. In the event of a tie, a live bidder shall always prevail over a proxy bidder. If both parties are proxies, they will be requested to place follow-up bids to resolve the tie, or, if doing so does not break the tie, the vehicle will be awarded to the person who bid first, or, alternatively, all bids will be canceled and the vehicle relisted for bidding.</p>\r\n                  <p>3.3.      Cancellations; Reversals: IAA may from time to time and in its sole discretion postpone or otherwise cancel an auction. You agree that we shall have no liability in the event that an auction is canceled. IAA may also from time to time and in its sole discretion reverse or cancel any sale in the event it suspects fraud, misrepresentation, or defect. You agree that we shall have no liability in the event that a sale is canceled or reversed. Should a sale be canceled after payment, reimbursement of the paid amount shall come first to us, and then we shall remit the same to the Member. Reimbursements for canceled sales may take several weeks to process and post to a Member’s Account.</p>\r\n                  <p>3.4.      On-Call Sales: On-Call Sales require the approval and acceptance of a sale by the Seller and shall not be final until such acceptance is given, in Seller’s sole and exclusive discretion. Such acceptance may take up to twenty-four (24) hours.</p>\r\n                  <p>3.5.      Affiliate Brokers: We may, from time to time, utilize the services of affiliate dealers and brokers. You agree to this practice and further agree to defend, indemnify and hold harmless any and all such affiliates to the same extent as ourselves as provided for herein.</p>\r\n                  <p>3.6.      Yard Visits: Upon payment of a Fifty U.S. Dollar and No Cent ($50.00) per-person fee, with a prepaid amount of Twenty-Five U.S. Dollars and No Cents ($25.00), you may visit IAA yards during the bidding period. IAA requires compliance with all IAA yard visit rules and regulations as well as laws during such yard visits and strictly prosecutes persons who damage or steal yard vehicles or vehicle keys. Such rules include but may not be limited to a prohibition against cameras and bags while on the yard and restrictions on vehicular repairs and work. To apply for a yard visit pass, please visit the Website and file a request for inspection via the “Buy Inspection Pass” option. Passes are valid from the date of purchase until the date of auction and are available for the following yard locations: Alaska: Anchorage; Arizona: Phoenix and Tucson; California: Anaheim, Colton, East Bay, Fontana, Fremont, Fresno, High Desert, Los Angeles, North Hollywood, Sacramento and San Diego; Colorado: Denver and Western Colorado; Hawaii: Honolulu; Idaho: Boise; Montana: Billings and Missoula; New Mexico: Albuquerque; Nevada: Reno and Las Vegas; Oregon: Eugene and Portland; Utah: Salt Lake City; and Washington: Seattle and Spokane.</p>\r\n                </li>\r\n                <li><b>Titles, Possession & Shipping</b>\r\n                  <p>4.1.      Assumption of the Risk: You agree and acknowledge that you assume the risk and responsibility for all losses and damages to a purchased vehicle from the time your bid is accepted. IAA and/or we act merely as bailees of vehicles from the time of purchase until the time of pickup and shall not be responsible for any loss or damage thereto or to any part of the vehicle.</p>\r\n                  4.2.      Removal of Vehicles: In the event you purchase a vehicle from us, you should endeavor to remove it from the IAA facility the same day. All removals shall be conducted via a towing or trailer system, as purchased vehicles may not be driven prior to their registration and, if required, state-mandated inspections, regardless of driving condition and title status. This statement serves as a non-driving affidavit. In removing a vehicle you agree to comply with any and all applicable rules, laws, and regulations and shall ensure that at all times the vehicle has been properly secured for safe removal. IAA and/or we shall have no liability for improperly secured or loaded vehicles, including instances where an IAA or our employee or contractor assists with loading and securing the vehicle, and you agree that we shall not be liable for any damages that may during loading, securing or transport.\r\n                  <p>4.3.      Shipment of Vehicles: You may elect SCA to have your purchased vehicle shipped to you instead of arranging for its pickup. In such an event we shall act as your shipping agent and will contract with a shipping carrier on your behalf for the shipment, storage, and delivery of your purchased vehicle, FOB. We expressly disclaim all liability for any and all loss, damage, expense or delay to any shipped vehicle. No vehicles shall be shipped prior to full and complete payment of all shipping costs and other applicable fees, which may include loading fees, keys, and export documentation. You may also incur storage fees in the amount of Forty U.S. Dollars and No Cents ($40.00) per day in the event we are unable to pick up your vehicle from the IAA facility within the pickup period, and we expressly disclaim that we do not guarantee your vehicle will be picked up during the pickup period. All shipping costs displayed on our Website are estimates only and shall not be binding until provided directly by us in writing.</p>\r\n                  <p>4.4.      Exportation/Importation of Vehicles: In the event you reside outside of the United States, we generally will arrange for the exportation of your vehicle. You agree and acknowledge that you shall be solely responsible for compliance with all import and export regulations for the vehicle, including all licensing and emissions requirements for the final destination of the vehicle and shall provide the same, if requested pursuant to per 15 CFR § 758.3(b). All such exportations shall be governed by U.S. export law, including but not limited to the U.S. Foreign Corrupt Practices Act of 1977 (the “FCPA”), the U.S. Foreign Trade Regulations (the "FTR"), and the U.S. Export Administration Regulations (the "EAR"). You expressly agree and acknowledge to strictly comply with all exportation rules set forth by the EAR General Prohibitions found at 15 CFR Part 736, regarding exportation to restricted and/or embargoed countries. In the event you do not wish for us to assist with the exportation of your purchased vehicle, a Routed Export Transaction, we shall not be the exporter or your exporting agent, and you shall act as the Foreign Principal Party in Interest, pursuant to the regulations of the FTR and EAR, and shall locate and authorize a forwarding agent to facilitate the export on your behalf via a Power of Attorney, which you shall provide to us, upon demand together with your Electronic Export Information submitted to the Automated Export System (the “AES”), pursuant to the requirements of 15 CFR §30.3(e)(2). We shall cooperate with your exporting agent and shall provide to him, her or it the Harmonized Tariff Schedule ("HTS") code, Export Control Classification Number (the "ECCN"), and other export information required under 15 CFR§ 30.3(e)(1) upon your or your agent’s written request. Unless we have agreed to do so in writing, we will not facilitate import clearance; you shall be identified as the Importer of Record for each vehicle at all times, including but not limited to on all governmental paperwork, fees, taxes, customs inspections, and proof of emissions compliances.</p>\r\n                  <p>4.6.      Post-Bid Vehicle Damages and Discrepancies: In the event that at the time of pickup a purchased vehicle has been damaged or differs from the condition of the vehicle at the time of purchase you may cancel the sale or purchase the vehicle at the original purchase price. Differences in odometer readings of 2,000 miles or fewer shall not be considered a discrepancy in the purchase or listing condition and will not be a basis for cancellation of a sale.</p>\r\n                  <p>4.5.      Release of Title: Vehicle titles are first transmitted by IAA to us and then reassigned to the purchaser upon e-signature of documents pertaining to the sale and provision of a government-issued form of identification together with payment of all dues. We reserve the right to deny the release of a title to any person for any reason whatsoever.</p>\r\n                  <p>4.6.      Title Type: We do not guarantee the title type that may be given for any vehicle or any vehicle purchased.</p>\r\n                  <p>4.7.      Repairs to Vehicles; Members may not repair or dismantle any purchased vehicles on any IAA or vehicle storage facility premise and must arrange for pickup without doing so.</p>\r\n                </li>\r\n                <li><b>Sales Fees & Other Costs</b>\r\n                  <p>5.1.      Security Deposits: Deposits are not generally required to use and access the Website; however, all Members who wish to make any bids must have a minimum deposited with us of One Thousand U.S. Dollars and No Cents ($1,000.00) per vehicle to be used as a security deposit (the “Security Deposit”). Deposits of this amount shall entitle a Member to bid up to Six Thousand Six Hundred U.S. Dollars and No Cents ($6,600.00) on a single vehicle. In the event that you wish to place a higher bid, you shall be required to place an additional One Hundred U.S. Dollars and No Cents ($100.00) in Deposit money for each Six Hundred Sixty U.S. Dollars and No Cents ($660.00) bid. Provided that the Purchase Price has been fully paid and the purchased vehicle picked up, the Security Deposit is fully refundable (barring off-set against other fees) via a request from your Account, with most refunds being returned via the same payment method used to make the Security Deposit. In the event that a refund is requested 120 days or more after the date of the Security Deposit payment, U.S. and Canadian residents will receive their refunds via a paper check, with all other Members receiving refunds via wire transfer with the Member responsible for any and all wire transfer fees. Refund requests may not be made in writing or verbally and must be made exclusively through your Member Account and shall not be valid until a confirmation email is received by you from us.</p>\r\n                  <p>5.2.      Transaction Fees: All sales shall be subject to a per-purchase Transaction Fee in the amount of Two Hundred Fifty U.S. Dollars and No Cents ($250.00) or five percent (5%) of the purchase price for Basic Members and Two Hundred Fifty U.S. Dollars and No Cents ($250.00) for Premier Members. Notwithstanding the foregoing, Florida residents whose purchase will be registered in Florida shall be subject to a Transaction Fee in the amount of Three Hundred Ninety Nine U.S. Dollars and No Cents ($399.00) for Premier members and Four Hundred Ninety Nine U.S. Dollars and No Cents ($499.00) for Basic members. Transaction Fees shall not be refundable for any reason whatsoever.</p>\r\n                  <p>5.3.      Purchase Fees: The purchase price (“Purchase Fees”) of any vehicle shall be due within two (2) business days of the date of sale and shall be made directly to us via wire transfer. No other methods of payment are accepted at this time. In the event that full payment of the Purchase Fee plus any applicable Late Fee as set forth in Section 5.4, supra, is not made within the payment date set by the auction facility (generally, eight (8) to ten (10) calendar days) the vehicle shall be deemed forfeited and shall be relisted by us without recourse by or refund to you.</p>\r\n                  <p>5.4.      Late Payments: In the event that a Purchase Fee remains unpaid after three (3) business days, a nonrefundable Late Fee in the amount of Fifty U.S. Dollars and No Cents ($50.00) per-purchased vehicle or two percent (2%) of the vehicle sale price will become due and owing. Bidding privileges may be suspended until payment for vehicle is received.</p>\r\n                  <p>5.5.      Relisting Fees: In the event that timely payment is not made of all associated fees we may, in our sole and exclusive discretion, cancel the sale and relist the vehicle. In such an event Member shall be responsible for the payment of a Relisting Fee of the greater of One Thousand U.S. Dollars and No Cents ($1,000.00) or fifteen percent (15%) of the vehicle sale price, deducted from Member’s Security Deposit plus any additional fees and costs, such as collection costs and attorneys’ fees, including but not limited to the Transaction Fee. Relisting Fees are strictly nonrefundable, and multiple failures to pay and resulting relists shall result in termination of your privileges and suspension of your Account.</p>\r\n                  <p>5.6.      Auction House Fees: All sales are subject to Auction House <a href="#">fees.</a> Prior to placing any bid you are encouraged to review and understand the Auction House Fees and Fee Structure of IAA, as sales will not be canceled based on a lack of knowledge of the applicable Auction House Fees.</p>\r\n                  <p>5.7.      Vehicle Storage Fees; Vehicle Abandonment: In the event that a purchased vehicle is not picked up within five* (5) business days, including the day of purchase, your purchase will incur Storage Fees in the amount of Forty U.S. Dollars and No Cents ($40.00) per day. In the event that a vehicle is not removed from an IAA facility within twenty (20) days of sale, said vehicle may be removed from IAA’s facility and transferred to our own storage facilities. In such an event you will be responsible for all removal and storage fees. Further information regarding vehicle storage and pickup may be found in Paragraph 4.3.</p>\r\n                  <p>*The following IAA locations require the following alternative pickup time frames before Storage Fees begin to accrue: pickup within three (3) business days is required in North Hollywood, San Diego, Anaheim, Fontana, Los Angeles, Portland, Eugene, Omaha, Minneapolis/St. Paul, Wichita, Des Moines, Long Island, New Castle, Rochester and Hartford; pickup within four (4) business days is required in Fresno, Milwaukee, Taunton and Burlington.</p>\r\n                  <p>In the event that a vehicle is not picked up from our storage facilities following transfer from an IAA storage facility within ten (10) business days, it will be deemed abandoned, and you will be considered to have forfeited all rights in your purchased vehicle. In such an event the vehicle will become our property and shall be relisted by us. In the event its ultimate sale price is less than the fees for its storage and transport as well as any other outstanding fees, you shall remain liable for the payment of the difference, upon demand.</p>\r\n                  <p>5.8.      Documentation Fee: Every transaction will be subject to a nonrefundable Documentation Fee of Fifty-Five U.S. Dollars and No Cents ($55.00).</p>\r\n                  <p>5.9.      Sales Tax: You may purchase a vehicle wholesale with a valid showing of sales tax exemption. In such a circumstance you will indemnify, defend, and hold us harmless against fines, damages, and assessments where a tax should have been paid.</p>\r\n                  <p>5.10.    Special Sales Tax Provision for Florida Residents and Florida Sales: Florida residents must pay a Florida sales tax of six percent (6%) of the vehicle sale price discretionary county sales surtaxes based on the county where the purchasing Member lives. (<a href="#">Click here</a> for more information.) Non-Florida residents may also be required to pay a state sales tax if they pick up their purchased vehicles directly from an auction house or facility located in Florida. To claim tax exemption, you should complete, sign, and have notarized and sent to SCA the Florida Department of Revenue Form DR-123 prior to shipping. All shipments facilitated by us to a non-Florida address shall be automatically exempt from this tax requirement, without the necessity for Form <a href="#">DR-123.</a> In the event you are a non-Florida resident and pay or have paid Florida sales tax for the purchase of any vehicle through us within the previous three (3) years, you may qualify for a refund of said sales tax. To apply for such a refund, please contact us with proof of out-of-state transportation, such as a Bill of Lading or Dock Receipt.</p>\r\n                  <p>5.11.    Nonpayment of Fees; Collection: In the event any of the foregoing Fees remain unpaid, we shall first apply any payments made, including your Security Deposit, to any unpaid Membership Fees, Registration Fees, storage, shipping and gate fees, late payment fees, Relisting Fees, and Transaction Fees followed by the application of the payment to the sales price of the vehicle. Any outstanding debts will be directly deducted from the payment method provided by you upon registration, as amended from time to time, without your further approval or notice. We shall not be under any obligation to release a vehicle into your possession until any and all fees and costs have been paid to our complete satisfaction. Should you pay for any fee contemplated herein by a credit or debit card, you agree to authorize SCA AUCTIONS LLC to initiate debit/credit entries from your bank account or credit/debit card.</p>\r\n                  <p>5.12.    Refunds and Disputes: Except as set forth herein, no fees or other payments shall be refundable to you for any reason. In the event you object to any fees or costs assessed to you, please contact us at SCA AUCTIONS LLC, 15173B NE 21ST Avenue,  North Miami Beach, FL 33162 USA.</p>\r\n                </li>\r\n                <li><b>DISCLAIMERS OF WARRANTY & LIMITATIONS OF LIABILITY</b>\r\n                  <p>6.1.      ALL VEHICLES ARE SOLD “AS IS”; Disclaimers of Warranty: Every vehicle, including all vehicle types, sold through us is sold “as is where is.” No vehicle is represented as being road-worthy, drivable or mechanically sound and any vehicle may require substantial repairs. As such, it is sold without any warranties WHATSOEVER.</p>\r\n                  <p>6.2.      Non-Liability for Inaccurate Information: We expressly disclaim any and all liability related to accuracy and/or inaccuracy or completeness of the information provided via the Website, including but not limited to vehicle year, make, model, ACV, previous damages, condition for driving, accessories and parts, mileage and odometer reading, key availability, Vehicle Identification Number (“VIN”), availability of VIN plates, emissions testing readiness and/or passability, repairs needed, title history and loss history. All information provided is for general information purposes only and should not be used as the sole basis for making any decision regarding a purchase or bid amount, and you should thoroughly research all vehicles independently prior to making any bids.</p>\r\n                  <p>6.3.      Disclaimer of Registration. We expressly disclaim any and all liability that any vehicle may be registered in any state or country. You shall be solely and exclusively responsible for ensuring that the vehicle purchased may be registered or resold, and you accept all responsibility therefore.</p>\r\n                  <p>6.4.      Motor Vehicle Department Disclaimers: We expressly disclaim any and all liability for any defects, errors and/or omissions in the information related to a vehicle’s motor vehicle department registration and paperwork or by any other department, department of revenue or other entity.</p>\r\n                  <p>6.5.      National Motor Vehicle Title Information System Disclaimer: All vehicles sold have been reported to the National Motor Vehicle Title Information System, and all purchases shall be reported in our sole and exclusive discretion. You agree and accept all risks associated with the purchase of any vehicle and reporting of the same to the National Motor Vehicle Title Information System. More information may be found at vehiclehistory.gov.</p>\r\n                  <p>6.6.      Disclosures: You agree and acknowledge that we may disclose your personal information, including transaction information, to the extent necessary to comply with any and all applicable laws and if required to do so in any judicial or administrative proceeding.</p>\r\n                  <p>6.7.      Damage by Us: In the event we are solely and uniquely responsible for any damage to a purchased vehicle, damages therefore shall be limited to the lesser of the auction sale price or diminution in value of the vehicle. We may, at our discretion, resell any damaged vehicle with the diminution in value being limited to the difference between the original sale price and the resale price.</p>\r\n                  <p>6.8.      Limitation of Liability: You hereby agree to release us, IAA, and our respective directors, officers, employees, contractors, agents, parent subsidiaries, partners, vendors, and affiliates against any and all claims and liabilities for any and all damages, losses, claims, and expenses, whether direct or indirect, known or unknown, foreseen or unforeseen, for any personal injury, property or any and all other damages occurring on our or IAA’s properties, and/or related to or arising from any and all transactions via the Website, including any and all claims of negligence, personal injury, property damage, pain and suffering, direct damages, special damages, circumstantial damages, and/or incidental damages.</p>\r\n                  <p>6.9.     Release and Waiver by California Residents: If you or your guest is a California resident you hereby waive California Civil Code §1542, which reads: "A general release does not extend to claims which the creditor does not know or suspect to exist in his favor at the time of executing the release, which if known by him must have materially affected his settlement with the debtor."</p>\r\n                  <p>6.10.    Indemnification: You agree to defend, indemnify, and hold harmless us, IAA, and respective officers, directors, members, employees, contractors, agents, parents, subsidiaries, partners, vendors, and affiliates from and against any and all costs, expenses, fees, demands, claims and liabilities for any and all damages arising from or related to your use of the Website, purchase of any vehicle, visit to any auction facility or yard, pickup and/or use of a purchased vehicle.</p>\r\n                </li>\r\n                <li><b>Miscellaneous</b>\r\n                  <p>7.1.      Choice of Law; Jurisdiction: The laws of the state of Florida shall apply to this Agreement. The Parties agree that the courts located in Florida, will have exclusive jurisdiction, subject to Section 7.2.</p>\r\n                  <p>7.2.      Dispute Resolution; Binding Arbitration: The Parties agree to submit to binding arbitration pursuant to the rules of the American Arbitration Association and the laws of the state of Florida, by a single arbitrator located in Florida.</p>\r\n                  <p>7.3.      Entire Agreement: These Terms shall be the entire agreement related to the subject matter hereof.</p>\r\n                  <p>7.4.      Severability: In the event that any of these Terms are determined to be unenforceable they shall be severed from the remainder, which shall remain in effect.</p>\r\n                  <p>7.5.      Modification and Changes to Terms. We may modify or change our Terms at any time, without notice to you, and with immediate effect. If you continue to use the Website after the change or modification you will have accepted the same.</p>\r\n                  <p>7.6.      Modification and Changes to the Website: We may modify or change our Website at any time, without notice to you, and with immediate effect. If you continue to use the Website after the change or modification you will have accepted the same.</p>\r\n                  <p>7.7.      Right of Refusal and Limitation: We reserve the right to refuse to provide or limit your access to the Website and/or your Account or the services we offer for any reason whatsoever at any time in our sole and exclusive discretion, without recourse to you.</p>\r\n                </li>\r\n              </ol>\r\n              <hr class="faq-line">\r\n              <h3>V15 MTC (02.01.2016)</h3>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </section>', 2, '2018-04-30 09:35:13');
INSERT INTO `pages` (`id`, `Name`, `Url`, `Content`, `user_id`, `created_at`) VALUES
(7, 'Call Back', 'call-back', '<!-- Featured Car start -->\r\n   <section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">\r\n        <div class="container">\r\n          <div class="row">\r\n            <div class="col-md-6 col-md-offset-3">\r\n              <div class="section-title">\r\n                <h3>Call Sheduling</h3>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    </section>\r\n\r\n    <!-- Contact form start -->\r\n    <section class="contact-area">\r\n        <div class="container">\r\n            <div class="section-content">\r\n                <div class="row">\r\n                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">\r\n                        <form id="ajax-contact" method="post" action="#">\r\n                            <div class="row">\r\n                                <div class="form-group col-md-6">\r\n                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>\r\n                                </div>\r\n                                <div class="form-group col-md-6">\r\n                                    <input type="number" name="name" id="name2" class="form-control" placeholder="Phone" required>\r\n                                </div>\r\n                                <div class="form-group col-md-12">\r\n                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email"  required>\r\n                                </div>\r\n                                <div class="form-group col-md-12">\r\n                                    <select class="form-control">\r\n                                      <option value="AF">Afghanistan</option>\r\n                                      <option value="AX">Åland Islands</option>\r\n                                      <option value="AL">Albania</option>\r\n                                      <option value="DZ">Algeria</option>\r\n                                      <option value="AS">American Samoa</option>\r\n                                      <option value="AD">Andorra</option>\r\n                                      <option value="AO">Angola</option>\r\n                                      <option value="AI">Anguilla</option>\r\n                                      <option value="AQ">Antarctica</option>\r\n                                      <option value="AG">Antigua and Barbuda</option>\r\n                                      <option value="AR">Argentina</option>\r\n                                      <option value="AM">Armenia</option>\r\n                                      <option value="AW">Aruba</option>\r\n                                      <option value="AU">Australia</option>\r\n                                      <option value="AT">Austria</option>\r\n                                      <option value="AZ">Azerbaijan</option>\r\n                                      <option value="BS">Bahamas</option>\r\n                                      <option value="BH">Bahrain</option>\r\n                                      <option value="BD">Bangladesh</option>\r\n                                      <option value="BB">Barbados</option>\r\n                                      <option value="BY">Belarus</option>\r\n                                      <option value="BE">Belgium</option>\r\n                                      <option value="BZ">Belize</option>\r\n                                      <option value="BJ">Benin</option>\r\n                                      <option value="BM">Bermuda</option>\r\n                                      <option value="BT">Bhutan</option>\r\n                                      <option value="BO">Bolivia, Plurinational State of</option>\r\n                                      <option value="BQ">Bonaire, Sint Eustatius and Saba</option>\r\n                                      <option value="BA">Bosnia and Herzegovina</option>\r\n                                      <option value="BW">Botswana</option>\r\n                                      <option value="BV">Bouvet Island</option>\r\n                                      <option value="BR">Brazil</option>\r\n                                      <option value="IO">British Indian Ocean Territory</option>\r\n                                      <option value="BN">Brunei Darussalam</option>\r\n                                      <option value="BG">Bulgaria</option>\r\n                                      <option value="BF">Burkina Faso</option>\r\n                                      <option value="BI">Burundi</option>\r\n                                      <option value="KH">Cambodia</option>\r\n                                      <option value="CM">Cameroon</option>\r\n                                      <option value="CA">Canada</option>\r\n                                      <option value="CV">Cape Verde</option>\r\n                                      <option value="KY">Cayman Islands</option>\r\n                                      <option value="CF">Central African Republic</option>\r\n                                      <option value="TD">Chad</option>\r\n                                      <option value="CL">Chile</option>\r\n                                      <option value="CN">China</option>\r\n                                      <option value="CX">Christmas Island</option>\r\n                                      <option value="CC">Cocos (Keeling) Islands</option>\r\n                                      <option value="CO">Colombia</option>\r\n                                      <option value="KM">Comoros</option>\r\n                                      <option value="CG">Congo</option>\r\n                                      <option value="CD">Congo, the Democratic Republic of the</option>\r\n                                      <option value="CK">Cook Islands</option>\r\n                                      <option value="CR">Costa Rica</option>\r\n                                      <option value="CI">Côte d''Ivoire</option>\r\n                                      <option value="HR">Croatia</option>\r\n                                      <option value="CU">Cuba</option>\r\n                                      <option value="CW">Curaçao</option>\r\n                                      <option value="CY">Cyprus</option>\r\n                                      <option value="CZ">Czech Republic</option>\r\n                                      <option value="DK">Denmark</option>\r\n                                      <option value="DJ">Djibouti</option>\r\n                                      <option value="DM">Dominica</option>\r\n                                      <option value="DO">Dominican Republic</option>\r\n                                      <option value="EC">Ecuador</option>\r\n                                      <option value="EG">Egypt</option>\r\n                                      <option value="SV">El Salvador</option>\r\n                                      <option value="GQ">Equatorial Guinea</option>\r\n                                      <option value="ER">Eritrea</option>\r\n                                      <option value="EE">Estonia</option>\r\n                                      <option value="ET">Ethiopia</option>\r\n                                      <option value="FK">Falkland Islands (Malvinas)</option>\r\n                                      <option value="FO">Faroe Islands</option>\r\n                                      <option value="FJ">Fiji</option>\r\n                                      <option value="FI">Finland</option>\r\n                                      <option value="FR">France</option>\r\n                                      <option value="GF">French Guiana</option>\r\n                                      <option value="PF">French Polynesia</option>\r\n                                      <option value="TF">French Southern Territories</option>\r\n                                      <option value="GA">Gabon</option>\r\n                                      <option value="GM">Gambia</option>\r\n                                      <option value="GE">Georgia</option>\r\n                                      <option value="DE">Germany</option>\r\n                                      <option value="GH">Ghana</option>\r\n                                      <option value="GI">Gibraltar</option>\r\n                                      <option value="GR">Greece</option>\r\n                                      <option value="GL">Greenland</option>\r\n                                      <option value="GD">Grenada</option>\r\n                                      <option value="GP">Guadeloupe</option>\r\n                                      <option value="GU">Guam</option>\r\n                                      <option value="GT">Guatemala</option>\r\n                                      <option value="GG">Guernsey</option>\r\n                                      <option value="GN">Guinea</option>\r\n                                      <option value="GW">Guinea-Bissau</option>\r\n                                      <option value="GY">Guyana</option>\r\n                                      <option value="HT">Haiti</option>\r\n                                      <option value="HM">Heard Island and McDonald Islands</option>\r\n                                      <option value="VA">Holy See (Vatican City State)</option>\r\n                                      <option value="HN">Honduras</option>\r\n                                      <option value="HK">Hong Kong</option>\r\n                                      <option value="HU">Hungary</option>\r\n                                      <option value="IS">Iceland</option>\r\n                                      <option value="IN">India</option>\r\n                                      <option value="ID">Indonesia</option>\r\n                                      <option value="IR">Iran, Islamic Republic of</option>\r\n                                      <option value="IQ">Iraq</option>\r\n                                      <option value="IE">Ireland</option>\r\n                                      <option value="IM">Isle of Man</option>\r\n                                      <option value="IL">Israel</option>\r\n                                      <option value="IT">Italy</option>\r\n                                      <option value="JM">Jamaica</option>\r\n                                      <option value="JP">Japan</option>\r\n                                      <option value="JE">Jersey</option>\r\n                                      <option value="JO">Jordan</option>\r\n                                      <option value="KZ">Kazakhstan</option>\r\n                                      <option value="KE">Kenya</option>\r\n                                      <option value="KI">Kiribati</option>\r\n                                      <option value="KP">Korea, Democratic People''s Republic of</option>\r\n                                      <option value="KR">Korea, Republic of</option>\r\n                                      <option value="KW">Kuwait</option>\r\n                                      <option value="KG">Kyrgyzstan</option>\r\n                                      <option value="LA">Lao People''s Democratic Republic</option>\r\n                                      <option value="LV">Latvia</option>\r\n                                      <option value="LB">Lebanon</option>\r\n                                      <option value="LS">Lesotho</option>\r\n                                      <option value="LR">Liberia</option>\r\n                                      <option value="LY">Libya</option>\r\n                                      <option value="LI">Liechtenstein</option>\r\n                                      <option value="LT">Lithuania</option>\r\n                                      <option value="LU">Luxembourg</option>\r\n                                      <option value="MO">Macao</option>\r\n                                      <option value="MK">Macedonia, the former Yugoslav Republic of</option>\r\n                                      <option value="MG">Madagascar</option>\r\n                                      <option value="MW">Malawi</option>\r\n                                      <option value="MY">Malaysia</option>\r\n                                      <option value="MV">Maldives</option>\r\n                                      <option value="ML">Mali</option>\r\n                                      <option value="MT">Malta</option>\r\n                                      <option value="MH">Marshall Islands</option>\r\n                                      <option value="MQ">Martinique</option>\r\n                                      <option value="MR">Mauritania</option>\r\n                                      <option value="MU">Mauritius</option>\r\n                                      <option value="YT">Mayotte</option>\r\n                                      <option value="MX">Mexico</option>\r\n                                      <option value="FM">Micronesia, Federated States of</option>\r\n                                      <option value="MD">Moldova, Republic of</option>\r\n                                      <option value="MC">Monaco</option>\r\n                                      <option value="MN">Mongolia</option>\r\n                                      <option value="ME">Montenegro</option>\r\n                                      <option value="MS">Montserrat</option>\r\n                                      <option value="MA">Morocco</option>\r\n                                      <option value="MZ">Mozambique</option>\r\n                                      <option value="MM">Myanmar</option>\r\n                                      <option value="NA">Namibia</option>\r\n                                      <option value="NR">Nauru</option>\r\n                                      <option value="NP">Nepal</option>\r\n                                      <option value="NL">Netherlands</option>\r\n                                      <option value="NC">New Caledonia</option>\r\n                                      <option value="NZ">New Zealand</option>\r\n                                      <option value="NI">Nicaragua</option>\r\n                                      <option value="NE">Niger</option>\r\n                                      <option value="NG">Nigeria</option>\r\n                                      <option value="NU">Niue</option>\r\n                                      <option value="NF">Norfolk Island</option>\r\n                                      <option value="MP">Northern Mariana Islands</option>\r\n                                      <option value="NO">Norway</option>\r\n                                      <option value="OM">Oman</option>\r\n                                      <option value="PK">Pakistan</option>\r\n                                      <option value="PW">Palau</option>\r\n                                      <option value="PS">Palestinian Territory, Occupied</option>\r\n                                      <option value="PA">Panama</option>\r\n                                      <option value="PG">Papua New Guinea</option>\r\n                                      <option value="PY">Paraguay</option>\r\n                                      <option value="PE">Peru</option>\r\n                                      <option value="PH">Philippines</option>\r\n                                      <option value="PN">Pitcairn</option>\r\n                                      <option value="PL">Poland</option>\r\n                                      <option value="PT">Portugal</option>\r\n                                      <option value="PR">Puerto Rico</option>\r\n                                      <option value="QA">Qatar</option>\r\n                                      <option value="RE">Réunion</option>\r\n                                      <option value="RO">Romania</option>\r\n                                      <option value="RU">Russian Federation</option>\r\n                                      <option value="RW">Rwanda</option>\r\n                                      <option value="BL">Saint Barthélemy</option>\r\n                                      <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>\r\n                                      <option value="KN">Saint Kitts and Nevis</option>\r\n                                      <option value="LC">Saint Lucia</option>\r\n                                      <option value="MF">Saint Martin (French part)</option>\r\n                                      <option value="PM">Saint Pierre and Miquelon</option>\r\n                                      <option value="VC">Saint Vincent and the Grenadines</option>\r\n                                      <option value="WS">Samoa</option>\r\n                                      <option value="SM">San Marino</option>\r\n                                      <option value="ST">Sao Tome and Principe</option>\r\n                                      <option value="SA">Saudi Arabia</option>\r\n                                      <option value="SN">Senegal</option>\r\n                                      <option value="RS">Serbia</option>\r\n                                      <option value="SC">Seychelles</option>\r\n                                      <option value="SL">Sierra Leone</option>\r\n                                      <option value="SG">Singapore</option>\r\n                                      <option value="SX">Sint Maarten (Dutch part)</option>\r\n                                      <option value="SK">Slovakia</option>\r\n                                      <option value="SI">Slovenia</option>\r\n                                      <option value="SB">Solomon Islands</option>\r\n                                      <option value="SO">Somalia</option>\r\n                                      <option value="ZA">South Africa</option>\r\n                                      <option value="GS">South Georgia and the South Sandwich Islands</option>\r\n                                      <option value="SS">South Sudan</option>\r\n                                      <option value="ES">Spain</option>\r\n                                      <option value="LK">Sri Lanka</option>\r\n                                      <option value="SD">Sudan</option>\r\n                                      <option value="SR">Suriname</option>\r\n                                      <option value="SJ">Svalbard and Jan Mayen</option>\r\n                                      <option value="SZ">Swaziland</option>\r\n                                      <option value="SE">Sweden</option>\r\n                                      <option value="CH">Switzerland</option>\r\n                                      <option value="SY">Syrian Arab Republic</option>\r\n                                      <option value="TW">Taiwan, Province of China</option>\r\n                                      <option value="TJ">Tajikistan</option>\r\n                                      <option value="TZ">Tanzania, United Republic of</option>\r\n                                      <option value="TH">Thailand</option>\r\n                                      <option value="TL">Timor-Leste</option>\r\n                                      <option value="TG">Togo</option>\r\n                                      <option value="TK">Tokelau</option>\r\n                                      <option value="TO">Tonga</option>\r\n                                      <option value="TT">Trinidad and Tobago</option>\r\n                                      <option value="TN">Tunisia</option>\r\n                                      <option value="TR">Turkey</option>\r\n                                      <option value="TM">Turkmenistan</option>\r\n                                      <option value="TC">Turks and Caicos Islands</option>\r\n                                      <option value="TV">Tuvalu</option>\r\n                                      <option value="UG">Uganda</option>\r\n                                      <option value="UA">Ukraine</option>\r\n                                      <option value="AE">United Arab Emirates</option>\r\n                                      <option value="GB">United Kingdom</option>\r\n                                      <option value="US">United States</option>\r\n                                      <option value="UM">United States Minor Outlying Islands</option>\r\n                                      <option value="UY">Uruguay</option>\r\n                                      <option value="UZ">Uzbekistan</option>\r\n                                      <option value="VU">Vanuatu</option>\r\n                                      <option value="VE">Venezuela, Bolivarian Republic of</option>\r\n                                      <option value="VN">Viet Nam</option>\r\n                                      <option value="VG">Virgin Islands, British</option>\r\n                                      <option value="VI">Virgin Islands, U.S.</option>\r\n                                      <option value="WF">Wallis and Futuna</option>\r\n                                      <option value="EH">Western Sahara</option>\r\n                                      <option value="YE">Yemen</option>\r\n                                      <option value="ZM">Zambia</option>\r\n                                      <option value="ZW">Zimbabwe</option>\r\n                                    </select>\r\n                                </div>\r\n                                <div class="form-group col-md-12">\r\n                                    <div class="contact-textarea">\r\n                                        <textarea class="form-control" rows="6" placeholder="Wright Message" id="message" name="message"></textarea>\r\n                                        <div class="g-recaptcha" data-sitekey="6Lf-VVAUAAAAAMKiLmnD_GOB8TOlFl3XLqMYP8zm"></div>\r\n                                        <button class="btn btn-theme mt-4" type="submit" value="Submit Form">Send Message</button>\r\n                                    </div>\r\n                                </div>\r\n                                <div id="form-messages"></div>\r\n                            </div>\r\n                        </form>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>', 2, '2018-04-30 09:37:08');
INSERT INTO `pages` (`id`, `Name`, `Url`, `Content`, `user_id`, `created_at`) VALUES
(8, 'Terms & Condition', 'term-condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body><!-- Featured Car start -->\r\n<section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-6 col-md-offset-3">\r\n<div class="section-title">\r\n<h3>Accept Terms &amp; Conditions</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nam id maiores, accusantium, optio explicabo nemo nulla.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!-- Car Details start -->\r\n\r\n<section class="car-details-area" style="padding: 0px 0px 100px 0px;">\r\n<div class="container">\r\n<div class="row ex2">\r\n<div class="col-lg-12 col-md-12 color-bg">\r\n<div class="content-faq">\r\n<h3>Last updated: February 1, 2016</h3>\r\n\r\n<p>SCA AUCTIONS LLC is pleased to provide this Website and your membership therein. SCA AUCTIONS LLC is a Florida limited liability company, with a principal place of business located at 15173B NE 21ST Avenue, North Miami Beach, FL 33162 USA.</p>\r\n\r\n<hr class="faq-line" />\r\n<p>These Terms are a legally binding Agreement between Members and us. Therefore, please read these Terms carefully, and, if you do not agree to be bound thereby, please immediately discontinue your use of the Website and do not register as a Member. IAA shall not be a party to this Agreement; all vehicle purchases are made via us and not IAA.</p>\r\n\r\n<ol>\r\n	<li><b>Definitions</b>\r\n\r\n	<p>&ldquo;Services&rdquo; refers to the services we offer, including providing a platform through which Members may place bids on vehicle auctions and vehicle transportation services.</p>\r\n\r\n	<p>&ldquo;We,&rdquo; &ldquo;us&rdquo; and &ldquo;our&rdquo; refer to SCA AUCTIONS LLC.</p>\r\n\r\n	<p>&ldquo;You,&rdquo; &ldquo;your&rdquo; and &ldquo;Member&rdquo; refer to a member of the Website.</p>\r\n\r\n	<p>&ldquo;Website&rdquo; refers to the Website https://sca.auction/en and any related website provided by us.</p>\r\n	</li>\r\n	<li><b>Registration &amp; Membership</b>\r\n	<p>2.1. Registration for Membership; Use of Accounts: The use of the Website is free; however, only our Members may access our Services. We offer two (2) membership options: Basic and Premier. By registering with us as a Member or otherwise utilizing the Website you agree to be bound by these Terms and Conditions. These Terms and Conditions are also subject to our Privacy Policy. By registering as a Member you warrant that all information you provide upon registration is complete and accurate, and you agree to timely update all information should it change. You agree to hold your login credentials in the strictest confidence, and you agree and acknowledge that you are responsible for all use of your Account, regardless of whether you consented to such use. This includes all bids submitted under your Account through the Website, IAA&rsquo;s Website, or at auction facilities.</p>\r\n\r\n	<p>2.2. Restrictions on Membership: Membership shall be restricted to those persons who: (1) are eighteen (18) years of age or older and have the capacity to enter into a legally binding contract; (2) are residents of non-embargoed countries; and (3) provide a valid passport or government-issued form of identification for verification of identity purposes. Members may only have one (1) account and may not sell, assign, or otherwise transfer the account.</p>\r\n\r\n	<p>2.3. Prohibited Uses of Accounts: Members may not at any time use the Website or their Accounts to violate any local, state, federal, or international laws, rules, ordinances or regulations; solicit others to violate any local, state, federal, or international laws, rules, ordinances or regulations; harass, abuse, insult, defame, slander, intimidate, disparage, discriminate, or harm any other person, including but not limited to on the basis of religion, gender, sexual orientation, religion, nationality, race, ethnicity, disability, or age; transmit or otherwise distribute any virus or malware that would harm the functioning of the Website or any other Website; for immoral and obscene purposes; to violate our intellectual or moral rights or the intellectual or moral rights of any third party; to commit fraud or misrepresentations, whether fraudulent, intentional, or negligent; or to violate our Privacy Policy or the privacy of any third party.</p>\r\n\r\n	<p>2.4. Basic Membership: Members who have registered as Basic Members shall pay a Transaction fee of Two Hundred Fifty U.S. Dollars and No Cents ($250.00) or five percent (5%) of the purchase price per vehicle, whichever is greater. Basic Memberships have no expiration dates and may be upgraded at any time; Basic Members are limited to Proxy Bids only and may not participate in Live Auctions.</p>\r\n\r\n	<p>2.5. Premier Membership: Members who have registered as Premier Members shall pay a reduced Transaction Fee of Two Hundred Fifty U.S. Dollars and No Cents ($250.00) per vehicle and can participate in Live Auctions,<span style="background-color:rgb(255, 255, 221); font-family:verdana,sans-serif; font-size:12px"> for an annual fee of One Hundred Fifty U.S. Dollars and No Cents ($150.00).</span> Premier Memberships are good for one (1) year, where at the end of the year they shall downgrade automatically to a Basic Membership unless renewed by the Member.</p>\r\n\r\n	<p>2.6. Cancellation of Membership: You may cancel your Membership at any time by contacting us. No fees paid by you shall be refunded, for any reason whatsoever, in the event you elect to cancel your Account.</p>\r\n\r\n	<p>2.7. Revocation of Membership: We reserve the right to suspend, revoke, or otherwise terminate your Membership at any time and for any reason whatsoever, in our sole and exclusive discretion. Examples of why a Membership may be terminated include but are not limited to violations of Section 2.3 or nonpayment of any fees due. No fees paid by you shall be refunded, for any reason whatsoever, in the event your Membership is suspended, revoked, or otherwise terminated, nor shall we be liable for said suspension, revocation, or termination or any damages related to or arising therefrom.</p>\r\n\r\n	<p>2.8. Membership Fees: Basic Memberships are free. One-year Premier Memberships are subject to a nonrefundable <span style="background-color:rgb(255, 255, 221); font-family:verdana,sans-serif; font-size:12px"> fee of One Hundred Fifty U.S. Dollars and No Cents ($150.00) </span>payable upon registration or Account upgrade from a lower Membership type via major credit or debit card or wire transfer or as otherwise set forth upon checkout. We may change the Membership Fees at any time, in our sole and exclusive discretion.</p>\r\n	</li>\r\n	<li><b>Vehicle Sales &amp; Bidding</b>\r\n	<p>3.1. IAA: In addition to our Terms, all vehicle sales shall be additionally subject to the IAA auction rules; therefore, you are encouraged to review IAA&rsquo;s auction rules prior to placing any bid. All terms not defined herein shall be given the definition as set forth in IAA&rsquo;s auction rules.</p>\r\n\r\n	<p>3.2. Bids: Bid carefully! Once submitted, bids cannot be changed or retracted. We are unable to guarantee that IAA may accept your bid, and IAA may reject a Member&rsquo;s bid for any reason in IAA&rsquo;s sole and exclusive discretion. You agree that we shall have no liability in the event that a bid you place is rejected. In the event of a tie, a live bidder shall always prevail over a proxy bidder. If both parties are proxies, they will be requested to place follow-up bids to resolve the tie, or, if doing so does not break the tie, the vehicle will be awarded to the person who bid first, or, alternatively, all bids will be canceled and the vehicle relisted for bidding.</p>\r\n\r\n	<p>3.3. Cancellations; Reversals: IAA may from time to time and in its sole discretion postpone or otherwise cancel an auction. You agree that we shall have no liability in the event that an auction is canceled. IAA may also from time to time and in its sole discretion reverse or cancel any sale in the event it suspects fraud, misrepresentation, or defect. You agree that we shall have no liability in the event that a sale is canceled or reversed. Should a sale be canceled after payment, reimbursement of the paid amount shall come first to us, and then we shall remit the same to the Member. Reimbursements for canceled sales may take several weeks to process and post to a Member&rsquo;s Account.</p>\r\n\r\n	<p>3.4. On-Call Sales: On-Call Sales require the approval and acceptance of a sale by the Seller and shall not be final until such acceptance is given, in Seller&rsquo;s sole and exclusive discretion. Such acceptance may take up to twenty-four (24) hours.</p>\r\n\r\n	<p>3.5. Affiliate Brokers: We may, from time to time, utilize the services of affiliate dealers and brokers. You agree to this practice and further agree to defend, indemnify and hold harmless any and all such affiliates to the same extent as ourselves as provided for herein.</p>\r\n\r\n	<p>3.6. Yard Visits: Upon payment of a Fifty U.S. Dollar and No Cent ($50.00) per-person fee, with a prepaid amount of Twenty-Five U.S. Dollars and No Cents ($25.00), you may visit IAA yards during the bidding period. IAA requires compliance with all IAA yard visit rules and regulations as well as laws during such yard visits and strictly prosecutes persons who damage or steal yard vehicles or vehicle keys. Such rules include but may not be limited to a prohibition against cameras and bags while on the yard and restrictions on vehicular repairs and work. To apply for a yard visit pass, please visit the Website and file a request for inspection via the &ldquo;Buy Inspection Pass&rdquo; option. Passes are valid from the date of purchase until the date of auction and are available for the following yard locations: Alaska: Anchorage; Arizona: Phoenix and Tucson; California: Anaheim, Colton, East Bay, Fontana, Fremont, Fresno, High Desert, Los Angeles, North Hollywood, Sacramento and San Diego; Colorado: Denver and Western Colorado; Hawaii: Honolulu; Idaho: Boise; Montana: Billings and Missoula; New Mexico: Albuquerque; Nevada: Reno and Las Vegas; Oregon: Eugene and Portland; Utah: Salt Lake City; and Washington: Seattle and Spokane.</p>\r\n	</li>\r\n	<li><b>Titles, Possession &amp; Shipping</b>\r\n	<p>4.1. Assumption of the Risk: You agree and acknowledge that you assume the risk and responsibility for all losses and damages to a purchased vehicle from the time your bid is accepted. IAA and/or we act merely as bailees of vehicles from the time of purchase until the time of pickup and shall not be responsible for any loss or damage thereto or to any part of the vehicle.</p>\r\n	4.2. Removal of Vehicles: In the event you purchase a vehicle from us, you should endeavor to remove it from the IAA facility the same day. All removals shall be conducted via a towing or trailer system, as purchased vehicles may not be driven prior to their registration and, if required, state-mandated inspections, regardless of driving condition and title status. This statement serves as a non-driving affidavit. In removing a vehicle you agree to comply with any and all applicable rules, laws, and regulations and shall ensure that at all times the vehicle has been properly secured for safe removal. IAA and/or we shall have no liability for improperly secured or loaded vehicles, including instances where an IAA or our employee or contractor assists with loading and securing the vehicle, and you agree that we shall not be liable for any damages that may during loading, securing or transport.\r\n\r\n	<p>4.3. Shipment of Vehicles: You may elect SCA to have your purchased vehicle shipped to you instead of arranging for its pickup. In such an event we shall act as your shipping agent and will contract with a shipping carrier on your behalf for the shipment, storage, and delivery of your purchased vehicle, FOB. We expressly disclaim all liability for any and all loss, damage, expense or delay to any shipped vehicle. No vehicles shall be shipped prior to full and complete payment of all shipping costs and other applicable fees, which may include loading fees, keys, and export documentation. You may also incur storage fees in the amount of Forty U.S. Dollars and No Cents ($40.00) per day in the event we are unable to pick up your vehicle from the IAA facility within the pickup period, and we expressly disclaim that we do not guarantee your vehicle will be picked up during the pickup period. All shipping costs displayed on our Website are estimates only and shall not be binding until provided directly by us in writing.</p>\r\n\r\n	<p>4.4. Exportation/Importation of Vehicles: In the event you reside outside of the United States, we generally will arrange for the exportation of your vehicle. You agree and acknowledge that you shall be solely responsible for compliance with all import and export regulations for the vehicle, including all licensing and emissions requirements for the final destination of the vehicle and shall provide the same, if requested pursuant to per 15 CFR &sect; 758.3(b). All such exportations shall be governed by U.S. export law, including but not limited to the U.S. Foreign Corrupt Practices Act of 1977 (the &ldquo;FCPA&rdquo;), the U.S. Foreign Trade Regulations (the &quot;FTR&quot;), and the U.S. Export Administration Regulations (the &quot;EAR&quot;). You expressly agree and acknowledge to strictly comply with all exportation rules set forth by the EAR General Prohibitions found at 15 CFR Part 736, regarding exportation to restricted and/or embargoed countries. In the event you do not wish for us to assist with the exportation of your purchased vehicle, a Routed Export Transaction, we shall not be the exporter or your exporting agent, and you shall act as the Foreign Principal Party in Interest, pursuant to the regulations of the FTR and EAR, and shall locate and authorize a forwarding agent to facilitate the export on your behalf via a Power of Attorney, which you shall provide to us, upon demand together with your Electronic Export Information submitted to the Automated Export System (the &ldquo;AES&rdquo;), pursuant to the requirements of 15 CFR &sect;30.3(e)(2). We shall cooperate with your exporting agent and shall provide to him, her or it the Harmonized Tariff Schedule (&quot;HTS&quot;) code, Export Control Classification Number (the &quot;ECCN&quot;), and other export information required under 15 CFR&sect; 30.3(e)(1) upon your or your agent&rsquo;s written request. Unless we have agreed to do so in writing, we will not facilitate import clearance; you shall be identified as the Importer of Record for each vehicle at all times, including but not limited to on all governmental paperwork, fees, taxes, customs inspections, and proof of emissions compliances.</p>\r\n\r\n	<p>4.6. Post-Bid Vehicle Damages and Discrepancies: In the event that at the time of pickup a purchased vehicle has been damaged or differs from the condition of the vehicle at the time of purchase you may cancel the sale or purchase the vehicle at the original purchase price. Differences in odometer readings of 2,000 miles or fewer shall not be considered a discrepancy in the purchase or listing condition and will not be a basis for cancellation of a sale.</p>\r\n\r\n	<p>4.5. Release of Title: Vehicle titles are first transmitted by IAA to us and then reassigned to the purchaser upon e-signature of documents pertaining to the sale and provision of a government-issued form of identification together with payment of all dues. We reserve the right to deny the release of a title to any person for any reason whatsoever.</p>\r\n\r\n	<p>4.6. Title Type: We do not guarantee the title type that may be given for any vehicle or any vehicle purchased.</p>\r\n\r\n	<p>4.7. Repairs to Vehicles; Members may not repair or dismantle any purchased vehicles on any IAA or vehicle storage facility premise and must arrange for pickup without doing so.</p>\r\n	</li>\r\n	<li><b>Sales Fees &amp; Other Costs</b>\r\n	<p>5.1. Security Deposits: Deposits are not generally required to use and access the Website; however, all Members who wish to make any bids must have a minimum deposited with us of One Thousand U.S. Dollars and No Cents ($1,000.00) per vehicle to be used as a security deposit (the &ldquo;Security Deposit&rdquo;). Deposits of this amount shall entitle a Member to bid up to Six Thousand Six Hundred U.S. Dollars and No Cents ($6,600.00) on a single vehicle. In the event that you wish to place a higher bid, you shall be required to place an additional One Hundred U.S. Dollars and No Cents ($100.00) in Deposit money for each Six Hundred Sixty U.S. Dollars and No Cents ($660.00) bid. Provided that the Purchase Price has been fully paid and the purchased vehicle picked up, the Security Deposit is fully refundable (barring off-set against other fees) via a request from your Account, with most refunds being returned via the same payment method used to make the Security Deposit. In the event that a refund is requested 120 days or more after the date of the Security Deposit payment, U.S. and Canadian residents will receive their refunds via a paper check, with all other Members receiving refunds via wire transfer with the Member responsible for any and all wire transfer fees. Refund requests may not be made in writing or verbally and must be made exclusively through your Member Account and shall not be valid until a confirmation email is received by you from us.</p>\r\n\r\n	<p>5.2. Transaction Fees: All sales shall be subject to a per-purchase Transaction Fee in the amount of Two Hundred Fifty U.S. Dollars and No Cents ($250.00) or five percent (5%) of the purchase price for Basic Members and Two Hundred Fifty U.S. Dollars and No Cents ($250.00) for Premier Members. Notwithstanding the foregoing, Florida residents whose purchase will be registered in Florida shall be subject to a Transaction Fee in the amount of Three Hundred Ninety Nine U.S. Dollars and No Cents ($399.00) for Premier members and Four Hundred Ninety Nine U.S. Dollars and No Cents ($499.00) for Basic members. Transaction Fees shall not be refundable for any reason whatsoever.</p>\r\n\r\n	<p>5.3. Purchase Fees: The purchase price (&ldquo;Purchase Fees&rdquo;) of any vehicle shall be due within two (2) business days of the date of sale and shall be made directly to us via wire transfer. No other methods of payment are accepted at this time. In the event that full payment of the Purchase Fee plus any applicable Late Fee as set forth in Section 5.4, supra, is not made within the payment date set by the auction facility (generally, eight (8) to ten (10) calendar days) the vehicle shall be deemed forfeited and shall be relisted by us without recourse by or refund to you.</p>\r\n\r\n	<p>5.4. Late Payments: In the event that a Purchase Fee remains unpaid after three (3) business days, a nonrefundable Late Fee in the amount of Fifty U.S. Dollars and No Cents ($50.00) per-purchased vehicle or two percent (2%) of the vehicle sale price will become due and owing. Bidding privileges may be suspended until payment for vehicle is received.</p>\r\n\r\n	<p>5.5. Relisting Fees: In the event that timely payment is not made of all associated fees we may, in our sole and exclusive discretion, cancel the sale and relist the vehicle. In such an event Member shall be responsible for the payment of a Relisting Fee of the greater of One Thousand U.S. Dollars and No Cents ($1,000.00) or fifteen percent (15%) of the vehicle sale price, deducted from Member&rsquo;s Security Deposit plus any additional fees and costs, such as collection costs and attorneys&rsquo; fees, including but not limited to the Transaction Fee. Relisting Fees are strictly nonrefundable, and multiple failures to pay and resulting relists shall result in termination of your privileges and suspension of your Account.</p>\r\n\r\n	<p>5.6. Auction House Fees: All sales are subject to Auction House <a href="#">fees.</a> Prior to placing any bid you are encouraged to review and understand the Auction House Fees and Fee Structure of IAA, as sales will not be canceled based on a lack of knowledge of the applicable Auction House Fees.</p>\r\n\r\n	<p>5.7. Vehicle Storage Fees; Vehicle Abandonment: In the event that a purchased vehicle is not picked up within five* (5) business days, including the day of purchase, your purchase will incur Storage Fees in the amount of Forty U.S. Dollars and No Cents ($40.00) per day. In the event that a vehicle is not removed from an IAA facility within twenty (20) days of sale, said vehicle may be removed from IAA&rsquo;s facility and transferred to our own storage facilities. In such an event you will be responsible for all removal and storage fees. Further information regarding vehicle storage and pickup may be found in Paragraph 4.3.</p>\r\n\r\n	<p>*The following IAA locations require the following alternative pickup time frames before Storage Fees begin to accrue: pickup within three (3) business days is required in North Hollywood, San Diego, Anaheim, Fontana, Los Angeles, Portland, Eugene, Omaha, Minneapolis/St. Paul, Wichita, Des Moines, Long Island, New Castle, Rochester and Hartford; pickup within four (4) business days is required in Fresno, Milwaukee, Taunton and Burlington.</p>\r\n\r\n	<p>In the event that a vehicle is not picked up from our storage facilities following transfer from an IAA storage facility within ten (10) business days, it will be deemed abandoned, and you will be considered to have forfeited all rights in your purchased vehicle. In such an event the vehicle will become our property and shall be relisted by us. In the event its ultimate sale price is less than the fees for its storage and transport as well as any other outstanding fees, you shall remain liable for the payment of the difference, upon demand.</p>\r\n\r\n	<p>5.8. Documentation Fee: Every transaction will be subject to a nonrefundable Documentation Fee of Fifty-Five U.S. Dollars and No Cents ($55.00).</p>\r\n\r\n	<p>5.9. Sales Tax: You may purchase a vehicle wholesale with a valid showing of sales tax exemption. In such a circumstance you will indemnify, defend, and hold us harmless against fines, damages, and assessments where a tax should have been paid.</p>\r\n\r\n	<p>5.10. Special Sales Tax Provision for Florida Residents and Florida Sales: Florida residents must pay a Florida sales tax of six percent (6%) of the vehicle sale price discretionary county sales surtaxes based on the county where the purchasing Member lives. (<a href="#">Click here</a> for more information.) Non-Florida residents may also be required to pay a state sales tax if they pick up their purchased vehicles directly from an auction house or facility located in Florida. To claim tax exemption, you should complete, sign, and have notarized and sent to SCA the Florida Department of Revenue Form DR-123 prior to shipping. All shipments facilitated by us to a non-Florida address shall be automatically exempt from this tax requirement, without the necessity for Form <a href="#">DR-123.</a> In the event you are a non-Florida resident and pay or have paid Florida sales tax for the purchase of any vehicle through us within the previous three (3) years, you may qualify for a refund of said sales tax. To apply for such a refund, please contact us with proof of out-of-state transportation, such as a Bill of Lading or Dock Receipt.</p>\r\n\r\n	<p>5.11. Nonpayment of Fees; Collection: In the event any of the foregoing Fees remain unpaid, we shall first apply any payments made, including your Security Deposit, to any unpaid Membership Fees, Registration Fees, storage, shipping and gate fees, late payment fees, Relisting Fees, and Transaction Fees followed by the application of the payment to the sales price of the vehicle. Any outstanding debts will be directly deducted from the payment method provided by you upon registration, as amended from time to time, without your further approval or notice. We shall not be under any obligation to release a vehicle into your possession until any and all fees and costs have been paid to our complete satisfaction. Should you pay for any fee contemplated herein by a credit or debit card, you agree to authorize SCA AUCTIONS LLC to initiate debit/credit entries from your bank account or credit/debit card.</p>\r\n\r\n	<p>5.12. Refunds and Disputes: Except as set forth herein, no fees or other payments shall be refundable to you for any reason. In the event you object to any fees or costs assessed to you, please contact us at SCA AUCTIONS LLC, 15173B NE 21ST Avenue, North Miami Beach, FL 33162 USA.</p>\r\n	</li>\r\n	<li><b>DISCLAIMERS OF WARRANTY &amp; LIMITATIONS OF LIABILITY</b>\r\n	<p>6.1. ALL VEHICLES ARE SOLD &ldquo;AS IS&rdquo;; Disclaimers of Warranty: Every vehicle, including all vehicle types, sold through us is sold &ldquo;as is where is.&rdquo; No vehicle is represented as being road-worthy, drivable or mechanically sound and any vehicle may require substantial repairs. As such, it is sold without any warranties WHATSOEVER.</p>\r\n\r\n	<p>6.2. Non-Liability for Inaccurate Information: We expressly disclaim any and all liability related to accuracy and/or inaccuracy or completeness of the information provided via the Website, including but not limited to vehicle year, make, model, ACV, previous damages, condition for driving, accessories and parts, mileage and odometer reading, key availability, Vehicle Identification Number (&ldquo;VIN&rdquo;), availability of VIN plates, emissions testing readiness and/or passability, repairs needed, title history and loss history. All information provided is for general information purposes only and should not be used as the sole basis for making any decision regarding a purchase or bid amount, and you should thoroughly research all vehicles independently prior to making any bids.</p>\r\n\r\n	<p>6.3. Disclaimer of Registration. We expressly disclaim any and all liability that any vehicle may be registered in any state or country. You shall be solely and exclusively responsible for ensuring that the vehicle purchased may be registered or resold, and you accept all responsibility therefore.</p>\r\n\r\n	<p>6.4. Motor Vehicle Department Disclaimers: We expressly disclaim any and all liability for any defects, errors and/or omissions in the information related to a vehicle&rsquo;s motor vehicle department registration and paperwork or by any other department, department of revenue or other entity.</p>\r\n\r\n	<p>6.5. National Motor Vehicle Title Information System Disclaimer: All vehicles sold have been reported to the National Motor Vehicle Title Information System, and all purchases shall be reported in our sole and exclusive discretion. You agree and accept all risks associated with the purchase of any vehicle and reporting of the same to the National Motor Vehicle Title Information System. More information may be found at vehiclehistory.gov.</p>\r\n\r\n	<p>6.6. Disclosures: You agree and acknowledge that we may disclose your personal information, including transaction information, to the extent necessary to comply with any and all applicable laws and if required to do so in any judicial or administrative proceeding.</p>\r\n\r\n	<p>6.7. Damage by Us: In the event we are solely and uniquely responsible for any damage to a purchased vehicle, damages therefore shall be limited to the lesser of the auction sale price or diminution in value of the vehicle. We may, at our discretion, resell any damaged vehicle with the diminution in value being limited to the difference between the original sale price and the resale price.</p>\r\n\r\n	<p>6.8. Limitation of Liability: You hereby agree to release us, IAA, and our respective directors, officers, employees, contractors, agents, parent subsidiaries, partners, vendors, and affiliates against any and all claims and liabilities for any and all damages, losses, claims, and expenses, whether direct or indirect, known or unknown, foreseen or unforeseen, for any personal injury, property or any and all other damages occurring on our or IAA&rsquo;s properties, and/or related to or arising from any and all transactions via the Website, including any and all claims of negligence, personal injury, property damage, pain and suffering, direct damages, special damages, circumstantial damages, and/or incidental damages.</p>\r\n\r\n	<p>6.9. Release and Waiver by California Residents: If you or your guest is a California resident you hereby waive California Civil Code &sect;1542, which reads: &quot;A general release does not extend to claims which the creditor does not know or suspect to exist in his favor at the time of executing the release, which if known by him must have materially affected his settlement with the debtor.&quot;</p>\r\n\r\n	<p>6.10. Indemnification: You agree to defend, indemnify, and hold harmless us, IAA, and respective officers, directors, members, employees, contractors, agents, parents, subsidiaries, partners, vendors, and affiliates from and against any and all costs, expenses, fees, demands, claims and liabilities for any and all damages arising from or related to your use of the Website, purchase of any vehicle, visit to any auction facility or yard, pickup and/or use of a purchased vehicle.</p>\r\n	</li>\r\n	<li><b>Miscellaneous</b>\r\n	<p>7.1. Choice of Law; Jurisdiction: The laws of the state of Florida shall apply to this Agreement. The Parties agree that the courts located in Florida, will have exclusive jurisdiction, subject to Section 7.2.</p>\r\n\r\n	<p>7.2. Dispute Resolution; Binding Arbitration: The Parties agree to submit to binding arbitration pursuant to the rules of the American Arbitration Association and the laws of the state of Florida, by a single arbitrator located in Florida.</p>\r\n\r\n	<p>7.3. Entire Agreement: These Terms shall be the entire agreement related to the subject matter hereof.</p>\r\n\r\n	<p>7.4. Severability: In the event that any of these Terms are determined to be unenforceable they shall be severed from the remainder, which shall remain in effect.</p>\r\n\r\n	<p>7.5. Modification and Changes to Terms. We may modify or change our Terms at any time, without notice to you, and with immediate effect. If you continue to use the Website after the change or modification you will have accepted the same.</p>\r\n\r\n	<p>7.6. Modification and Changes to the Website: We may modify or change our Website at any time, without notice to you, and with immediate effect. If you continue to use the Website after the change or modification you will have accepted the same.</p>\r\n\r\n	<p>7.7. Right of Refusal and Limitation: We reserve the right to refuse to provide or limit your access to the Website and/or your Account or the services we offer for any reason whatsoever at any time in our sole and exclusive discretion, without recourse to you.</p>\r\n	</li>\r\n</ol>\r\n\r\n<hr class="faq-line" />\r\n<h3>V15 MTC (02.01.2016)</h3>\r\n</div>\r\n</div>\r\n</div>\r\n<button class="btn btn-default agree-btn" onclick="window.close();\r\n">I Agree to The Terms</button></div>\r\n</section>\r\n</body>\r\n</html>\r\n', 2, '2018-05-05 05:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `view_all` int(11) NOT NULL DEFAULT '0',
  `created` int(11) DEFAULT '0',
  `edit` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `disable` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `module_id`, `user_id`, `user_type_id`, `view`, `view_all`, `created`, `edit`, `deleted`, `disable`) VALUES
(307, 2, 2, 1, 1, 1, 1, 1, 1, 1),
(308, 3, 2, 1, 1, 1, 1, 1, 1, 1),
(309, 5, 2, 1, 1, 1, 1, 1, 1, 1),
(310, 7, 2, 1, 1, 1, 1, 1, 1, 1),
(311, 19, 2, 1, 1, 1, 1, 1, 1, 1),
(312, 20, 2, 1, 1, 1, 1, 1, 1, 1),
(313, 21, 2, 1, 1, 1, 1, 1, 1, 1),
(314, 22, 2, 1, 1, 1, 1, 1, 1, 1),
(315, 24, 2, 1, 1, 1, 1, 1, 1, 1),
(316, 25, 2, 1, 1, 1, 1, 1, 1, 1),
(317, 26, 2, 1, 1, 1, 1, 1, 1, 1),
(318, 27, 2, 1, 1, 1, 1, 1, 1, 1),
(319, 28, 2, 1, 1, 1, 1, 1, 1, 1),
(320, 29, 2, 1, 1, 1, 1, 1, 1, 1),
(321, 30, 2, 1, 1, 1, 1, 1, 1, 1),
(322, 31, 2, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) UNSIGNED NOT NULL,
  `Email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `Email`, `user_id`, `created_at`) VALUES
(1, 'test@gmail.com', 0, '2018-05-02 04:58:00'),
(2, 'talha@gmail.com', 0, '2018-05-02 05:06:25'),
(3, 'talha1@gmail.com', 0, '2018-05-02 05:09:39'),
(4, 'talha2@gmail.com', 0, '2018-05-02 05:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `Priority` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `FIle` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `use_company_name` int(11) NOT NULL DEFAULT '0',
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mailing_same` int(11) NOT NULL DEFAULT '1',
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `name`, `email`, `password`, `company`, `use_company_name`, `country`, `state`, `city`, `address`, `zip`, `phone`, `mailing_same`, `role`) VALUES
(2, 'Super', 'Admin', 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', '', 0, '', '', '', '', 0, '', 1, 1),
(30, 'brien', 'dabson', 'brien.dabson@gmail.com', 'brien.dabson@gmail.com', '6a9c2d841da5779e46cebc20fcc599ff', '', 0, '', '', '', '', 0, '', 1, 2),
(31, 'testing', 'tesing', 'testing@gmail.com', 'testing@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', 'test', 1, 'Pakistan', 'Sindh', 'Karachi', 'xyz', 123456, '123545667777', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_document`
--

CREATE TABLE `user_document` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_document`
--

INSERT INTO `user_document` (`id`, `user_id`, `file`, `created_at`) VALUES
(5, 31, '/uploads/2018-01-24-15-38-174.JPG', '0000-00-00 00:00:00'),
(6, 31, '/uploads/2018-01-24-15-38-175.JPG', '0000-00-00 00:00:00'),
(7, 31, '/uploads/2018-01-24-15-38-176.JPG', '0000-00-00 00:00:00'),
(8, 31, '/uploads/2018-01-24-15-38-177.JPG', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_package`
--

CREATE TABLE `user_package` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_package`
--

INSERT INTO `user_package` (`id`, `user_id`, `package_id`, `created_at`) VALUES
(1, 30, 1, '2018-05-03 05:26:48'),
(2, 30, 2, '2018-05-03 05:39:38'),
(3, 30, 1, '2018-05-03 06:26:55'),
(4, 31, 1, '2018-05-05 05:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `user_id`) VALUES
(1, 'Admin', 2),
(2, 'User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `Name`, `Image`, `user_id`, `created_at`) VALUES
(1, 'Automobile', '/uploads/Automobiles.jpg', 2, '2018-04-30 08:55:17'),
(2, 'Motorcycle', '/uploads/Motorbikes.jpg', 2, '2018-04-30 08:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_images`
--
ALTER TABLE `inventory_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules_fileds`
--
ALTER TABLE `modules_fileds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user_document`
--
ALTER TABLE `user_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_package`
--
ALTER TABLE `user_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inventory_images`
--
ALTER TABLE `inventory_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `modules_fileds`
--
ALTER TABLE `modules_fileds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user_document`
--
ALTER TABLE `user_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_package`
--
ALTER TABLE `user_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
