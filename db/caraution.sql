/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 100128
Source Host           : localhost:3306
Source Database       : caraution

Target Server Type    : MYSQL
Target Server Version : 100128
File Encoding         : 65001

Date: 2018-04-27 03:14:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auctions
-- ----------------------------
DROP TABLE IF EXISTS `auctions`;
CREATE TABLE `auctions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Auction` varchar(255) NOT NULL,
  `Live` varchar(20) NOT NULL,
  `Location` int(11) NOT NULL,
  `Date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of auctions
-- ----------------------------
INSERT INTO `auctions` VALUES ('1', 'Xyz Auction', 'Yes', '1', '2018-04-27', '2', '2018-04-27 01:41:21');
INSERT INTO `auctions` VALUES ('2', 'Abc Auction', ' No', '1', '2018-04-28', '2', '2018-04-27 01:42:04');

-- ----------------------------
-- Table structure for currency
-- ----------------------------
DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Symbol` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of currency
-- ----------------------------

-- ----------------------------
-- Table structure for inventory
-- ----------------------------
DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inventory
-- ----------------------------
INSERT INTO `inventory` VALUES ('1', 'HYUNDAI ELITE I20 SERIE', '1', '2012', '1', '1', 'FL - ORLANDO', '151 WEST TAFT VINELAND ROAD', 'READY FOR SALE', '2018-04-28', 'LANE B - ITEM #3160', '', '', '16895693', '1', 'SE', '999999 NOT ACTUAL', 'CANADIAN REGISTRATION (FLORIDA)', 'CANADIAN EXPORTERS ONLY', 'COLLISION', 'LEFT SIDE; FRONT END', '15,769', '13,387', '2C4RDGBG3CR256397', 'BLACK', 'BLACK', 'VAN PASSENGER 4 DOOR', '2WD MINIVANS', '3.6L', '6 CYL', 'FLEXIBLE FUEL', 'AUTOMATIC', 'FWD', 'US', 'PRESENT', 'WON\'T START', '2', '2018-04-27 02:22:22');

-- ----------------------------
-- Table structure for inventory_images
-- ----------------------------
DROP TABLE IF EXISTS `inventory_images`;
CREATE TABLE `inventory_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inventory_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inventory_images
-- ----------------------------
INSERT INTO `inventory_images` VALUES ('4', '1', '/uploads/big-1.jpg');
INSERT INTO `inventory_images` VALUES ('5', '1', '/uploads/big-2.jpg');
INSERT INTO `inventory_images` VALUES ('6', '1', '/uploads/big-3.jpg');

-- ----------------------------
-- Table structure for language
-- ----------------------------
DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Short_Name` varchar(100) NOT NULL,
  `Icon` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of language
-- ----------------------------
INSERT INTO `language` VALUES ('1', 'English', 'end', '', '2', '2018-04-24 02:14:03');
INSERT INTO `language` VALUES ('2', 'Franch', 'fra', '', '2', '2018-04-24 02:14:19');

-- ----------------------------
-- Table structure for locations
-- ----------------------------
DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `Pickup_Time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Pickup_Note` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of locations
-- ----------------------------
INSERT INTO `locations` VALUES ('1', 'Mystery Spot Road, Santa Cruz, CA, USA', 'CA - Santa Cruz', 'United States', 'CA', 'California', 'Santa Cruz', '95065', 'brien dabson', 'Mon, Fri 8am-5pm', '234567890', '0987654321', 'Mon, Fri 8am-5pm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '0000-00-00 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '2', null);

-- ----------------------------
-- Table structure for makes
-- ----------------------------
DROP TABLE IF EXISTS `makes`;
CREATE TABLE `makes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of makes
-- ----------------------------
INSERT INTO `makes` VALUES ('1', 'DODGE', '2', '2018-04-24 17:40:00');

-- ----------------------------
-- Table structure for models
-- ----------------------------
DROP TABLE IF EXISTS `models`;
CREATE TABLE `models` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Make` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of models
-- ----------------------------
INSERT INTO `models` VALUES ('1', 'CARAVAN', '1', '2', '2018-04-24 17:40:18');

-- ----------------------------
-- Table structure for modules
-- ----------------------------
DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `main_name` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of modules
-- ----------------------------
INSERT INTO `modules` VALUES ('2', 'Dashboard', 'dashboard', '1', 'home', 'home', '4');
INSERT INTO `modules` VALUES ('3', 'Modules', 'modules', '4', 'store', 'modules', '4');
INSERT INTO `modules` VALUES ('5', 'Role/Permission', 'role', '2', 'verified_user', 'role', '4');
INSERT INTO `modules` VALUES ('7', 'Users', 'user', '3', 'account_circle', 'users', '2');
INSERT INTO `modules` VALUES ('19', 'Vehicle Type', 'vehicle_type', '6', 'wb_cloudy', 'vehicle_type', '2');
INSERT INTO `modules` VALUES ('20', 'Makes', 'makes', '7', 'add_to_queue', 'makes', '2');
INSERT INTO `modules` VALUES ('21', 'Models', 'models', '7', 'view_module', 'models', '2');
INSERT INTO `modules` VALUES ('22', 'Inventory', 'inventory', '7', 'list', 'inventory', '2');
INSERT INTO `modules` VALUES ('24', 'Language', 'language', '7', 'language', 'language', '2');
INSERT INTO `modules` VALUES ('25', 'Currency', 'currency', '6', 'euro_symbol', 'currency', '2');
INSERT INTO `modules` VALUES ('26', 'Subscriptions', 'subscriptions', '7', 'subscriptions', 'subscriptions', '2');
INSERT INTO `modules` VALUES ('27', 'Tickets', 'tickets', '7', 'assignment_turned_in', 'tickets', '2');
INSERT INTO `modules` VALUES ('28', 'Pages', 'pages', '6', 'pages', 'pages', '2');
INSERT INTO `modules` VALUES ('29', 'Locations', 'locations', '6', 'home', 'locations', '2');
INSERT INTO `modules` VALUES ('30', 'Auctions', 'auctions', '7', 'home', 'auctions', '2');

-- ----------------------------
-- Table structure for modules_fileds
-- ----------------------------
DROP TABLE IF EXISTS `modules_fileds`;
CREATE TABLE `modules_fileds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `value_column` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of modules_fileds
-- ----------------------------
INSERT INTO `modules_fileds` VALUES ('1', 'name', 'VARCHAR', 'input', '', '100', '1', '15', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('2', 'gender', 'VARCHAR', 'radio', 'male,female', '100', '1', '15', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('3', 'relationship_status', 'VARCHAR', 'select', 'single,married,divorced,widowed', '100', '1', '15', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('4', 'image', 'VARCHAR', 'file', 'jpg,png,jpeg,gif', '100', '1', '15', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('5', 'education', 'VARCHAR', 'checkbox', 'matric,inter,bachlor', '255', '1', '15', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('6', 'message', 'TEXT', 'textarea', '', '255', '1', '15', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('7', 'Name', 'VARCHAR', 'input', '', '100', '1', '16', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('8', 'Icon', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', '255', '1', '16', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('9', 'Name', 'VARCHAR', 'input', '', '100', '1', '17', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('10', 'Icon', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', '255', '1', '17', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('11', 'Title', 'VARCHAR', 'input', '', '255', '1', '18', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('12', 'Description', 'TEXT', 'textarea', '', '500', '1', '18', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('13', 'category', 'INT', 'input', '', '11', '1', '18', '1', 'id', 'blog_category', 'Name');
INSERT INTO `modules_fileds` VALUES ('14', 'image', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', '255', '1', '18', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('15', 'Name', 'VARCHAR', 'input', '', '100', '1', '19', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('16', 'Image', 'VARCHAR', 'file', 'jpg,jpeg,png,gif', '255', '1', '19', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('17', 'Name', 'VARCHAR', 'input', '', '100', '1', '20', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('19', 'Name', 'VARCHAR', 'input', '', '100', '1', '23', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('20', 'Name', 'VARCHAR', 'input', '', '100', '1', '24', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('21', 'Short_Name', 'VARCHAR', 'input', '', '100', '1', '24', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('22', 'Icon', 'VARCHAR', 'file', 'jpg,jpeg,png,gif', '255', '1', '24', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('23', 'Name', 'VARCHAR', 'input', '', '100', '1', '21', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('24', 'Make', 'INT', 'input', '', '11', '1', '21', '1', 'id', 'makes', 'Name');
INSERT INTO `modules_fileds` VALUES ('25', 'Name', 'VARCHAR', 'input', '', '100', '1', '25', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('26', 'Symbol', 'VARCHAR', 'input', '', '10', '1', '25', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('27', 'Email', 'VARCHAR', 'input', '', '255', '1', '26', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('133', 'Name', 'VARCHAR', 'input', '', '255', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('134', 'Images', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', '500', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('135', 'Make', 'INT', 'input', '', '100', '1', '22', '1', 'id', 'makes', 'Name');
INSERT INTO `modules_fileds` VALUES ('136', 'Year', 'VARCHAR', 'input', '', '100', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('137', 'Model', 'INT', 'input', '', '11', '1', '22', '1', 'id', 'models', 'Name');
INSERT INTO `modules_fileds` VALUES ('138', 'Sale_Location', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('139', 'Vehicle_Location', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('140', 'Sale_Status', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('141', 'Sale_Date', 'DATE', 'input', '', '100', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('142', 'Item', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('143', 'Destination', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('144', 'Shipping_Price', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('145', 'Stock_ID', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('146', 'Type', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('147', 'Series', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('148', 'Odometer', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('149', 'Sale_Document', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('150', 'Sale_Document_Notes', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('151', 'Loss', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('152', 'Damage_Type', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('153', 'ACV', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('154', 'Estimated_Repair_Coast', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('155', 'VIN', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('156', 'Exterior_Color', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('157', 'Interior_Color', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('158', 'Body_Style', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('159', 'Vehicle_Class', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('160', 'Engine', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('161', 'Cylinder', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('162', 'Fuel_Type', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('163', 'Transmission', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('164', 'Driver_Type_', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('165', 'Manufactured_In', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('166', 'Key_item', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('167', 'Start_Code', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('168', 'Priority', 'VARCHAR', 'select', 'Normal,Medium,High,Urgent,Emegrency,Critical', '255', '1', '27', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('169', 'Subject', 'VARCHAR', 'input', '', '255', '1', '27', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('170', 'Message', 'TEXT', 'textarea', '', '500', '0', '27', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('171', 'FIle', 'VARCHAR', 'file', 'png,jpeg,jpg,gif,pdf,doc,docx,xlx,xlxs,txt,csv', '255', '0', '27', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('172', 'Name', 'VARCHAR', 'input', '', '255', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('173', 'Images', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', '500', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('174', 'Make', 'INT', 'input', '', '100', '1', '22', '1', 'id', 'makes', 'Name');
INSERT INTO `modules_fileds` VALUES ('175', 'Year', 'VARCHAR', 'input', '', '100', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('176', 'Model', 'INT', 'input', '', '11', '1', '22', '1', 'id', 'models', 'Name');
INSERT INTO `modules_fileds` VALUES ('177', 'Sale_Location', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('178', 'Vehicle_Location', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('179', 'Sale_Status', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('180', 'Sale_Date', 'DATE', 'input', '', '100', '1', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('181', 'Item#', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('182', 'Destination', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('183', 'Shipping_Price', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('184', 'Stock_ID', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('185', 'Type', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('186', 'Series', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('187', 'Odometer', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('188', 'Sale_Document', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('189', 'Sale_Document_Notes', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('190', 'Loss', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('191', 'Damage_Type', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('192', 'ACV', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('193', 'Estimated_Repair_Coast', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('194', 'VIN', 'VARCHAR', 'input', '', '100', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('195', 'Exterior_Color', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('196', 'Interior_Color', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('197', 'Body_Style', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('198', 'Vehicle_Class', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('199', 'Engine', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('200', 'Cylinder', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('201', 'Fuel_Type', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('202', 'Transmission', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('203', 'Driver_Type_', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('204', 'Manufactured_In', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('205', 'Key', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('206', 'Start_Code', 'VARCHAR', 'input', '', '255', '0', '22', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('207', 'Name', 'VARCHAR', 'input', '', '100', '1', '28', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('208', 'Url', 'INT', 'input', '', '255', '1', '28', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('209', 'Content', 'TEXT', 'textarea', '', '5000', '1', '28', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('210', 'Auction', 'VARCHAR', 'input', '', '255', '1', '30', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('211', 'Live', 'VARCHAR', 'radio', 'Yes, No', '20', '1', '30', '0', null, null, null);
INSERT INTO `modules_fileds` VALUES ('212', 'Location', 'INT', 'input', '', '11', '1', '30', '1', 'id', 'locations', 'Address');
INSERT INTO `modules_fileds` VALUES ('213', 'Date', 'DATE', 'input', '', '0', '1', '30', '0', null, null, null);

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Url` int(255) NOT NULL,
  `Content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pages
-- ----------------------------

-- ----------------------------
-- Table structure for permission
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `view_all` int(11) NOT NULL DEFAULT '0',
  `created` int(11) DEFAULT '0',
  `edit` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `disable` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=307 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of permission
-- ----------------------------
INSERT INTO `permission` VALUES ('292', '2', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('293', '3', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('294', '5', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('295', '7', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('296', '19', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('297', '20', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('298', '21', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('299', '22', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('300', '24', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('301', '25', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('302', '26', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('303', '27', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('304', '28', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('305', '29', '2', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `permission` VALUES ('306', '30', '2', '1', '1', '1', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for subscriptions
-- ----------------------------
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subscriptions
-- ----------------------------

-- ----------------------------
-- Table structure for tickets
-- ----------------------------
DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Priority` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `FIle` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tickets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'Super', 'Admin', 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', '1');
INSERT INTO `users` VALUES ('28', 'Brien', 'Dabson', 'brien.dabson@gmail.com', 'brien.dabson@gmail.com', '6a9c2d841da5779e46cebc20fcc599ff', '2');

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES ('1', 'Admin', '2');
INSERT INTO `user_type` VALUES ('2', 'User', '2');

-- ----------------------------
-- Table structure for vehicle_type
-- ----------------------------
DROP TABLE IF EXISTS `vehicle_type`;
CREATE TABLE `vehicle_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vehicle_type
-- ----------------------------
INSERT INTO `vehicle_type` VALUES ('1', 'Automobile', '/uploads/automobile.jpg', '2', '2018-03-26 23:28:11');
