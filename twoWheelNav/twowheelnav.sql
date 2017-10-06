/*
Navicat MySQL Data Transfer

Source Server         : David
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : twowheelnav

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-01 18:44:26
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `address`
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `addressID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `suburb` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` smallint(4) NOT NULL,
  PRIMARY KEY (`addressID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of address
-- ----------------------------

-- ----------------------------
-- Table structure for `business`
-- ----------------------------
DROP TABLE IF EXISTS `business`;
CREATE TABLE `business` (
  `businessID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `businessName` varchar(255) NOT NULL,
  `businessDescription` text NOT NULL,
  `businessAddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loginID` int(10) unsigned NOT NULL,
  `addressID` int(10) unsigned NOT NULL,
  `pointOfInterestID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`businessID`),
  KEY `bLoginID` (`loginID`),
  KEY `addressID` (`addressID`),
  KEY `bPointOfInterestID` (`pointOfInterestID`),
  CONSTRAINT `addressID` FOREIGN KEY (`addressID`) REFERENCES `address` (`addressID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bLoginID` FOREIGN KEY (`loginID`) REFERENCES `login` (`loginID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bPointOfInterestID` FOREIGN KEY (`pointOfInterestID`) REFERENCES `pointofinterest` (`pointOfInterestID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of business
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `categoryID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `loginID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`loginID`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('98', 'dgotoole', 'Trunks321123');

-- ----------------------------
-- Table structure for `pointofinterest`
-- ----------------------------
DROP TABLE IF EXISTS `pointofinterest`;
CREATE TABLE `pointofinterest` (
  `pointOfInterestID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pointOfInterestName` varchar(255) NOT NULL,
  `latitude` decimal(8,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `categoryID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pointOfInterestID`),
  KEY `categoryID` (`categoryID`),
  CONSTRAINT `categoryID` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pointofinterest
-- ----------------------------

-- ----------------------------
-- Table structure for `tourist`
-- ----------------------------
DROP TABLE IF EXISTS `tourist`;
CREATE TABLE `tourist` (
  `touristID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loginID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`touristID`),
  KEY `loginID` (`loginID`),
  CONSTRAINT `loginID` FOREIGN KEY (`loginID`) REFERENCES `login` (`loginID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tourist
-- ----------------------------
INSERT INTO `tourist` VALUES ('46', 'David', 'OToole', 'updated@update.com', '98');

-- ----------------------------
-- Table structure for `travelplan`
-- ----------------------------
DROP TABLE IF EXISTS `travelplan`;
CREATE TABLE `travelplan` (
  `travelPlanID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `travelPlanName` varchar(255) NOT NULL,
  `startPointLat` decimal(8,6) NOT NULL,
  `startPointLong` decimal(9,6) NOT NULL,
  `endPointLat` decimal(8,6) NOT NULL,
  `endPointLong` decimal(9,6) NOT NULL,
  `touristID` int(10) unsigned NOT NULL,
  `pointOfInterestID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`travelPlanID`),
  KEY `tTouristID` (`touristID`),
  KEY `tPointOfInterestID` (`pointOfInterestID`),
  CONSTRAINT `tPointOfInterestID` FOREIGN KEY (`pointOfInterestID`) REFERENCES `pointofinterest` (`pointOfInterestID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tTouristID` FOREIGN KEY (`touristID`) REFERENCES `tourist` (`touristID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of travelplan
-- ----------------------------
