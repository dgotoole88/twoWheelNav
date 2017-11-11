/*
Navicat MySQL Data Transfer

Source Server         : David
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : twowheelnav

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-11 23:02:31
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `categoryID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('252', 'admin', '$2y$10$w2SRtiyb7l6y7gkfn/5A..cRb5K5g0ZWiS92wMqGZDm4pzEhQyeZC');
INSERT INTO `login` VALUES ('257', 'bob', '$2y$10$fQRH3lvOMLN4X1i8Vv4lpe3tD90kKIWKcRc8qntcDAP6.1l0DGI/i');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pointofinterest
-- ----------------------------

-- ----------------------------
-- Table structure for `savedroute`
-- ----------------------------
DROP TABLE IF EXISTS `savedroute`;
CREATE TABLE `savedroute` (
  `routeID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `startPoint` varchar(255) NOT NULL,
  `endPoint` varchar(255) NOT NULL,
  `routeName` varchar(255) NOT NULL,
  `touristID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`routeID`),
  KEY `touristID` (`touristID`),
  CONSTRAINT `touristID` FOREIGN KEY (`touristID`) REFERENCES `tourist` (`touristID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of savedroute
-- ----------------------------
INSERT INTO `savedroute` VALUES ('75', 'Launceston, Tasmania, Australia', 'Hobart, Tasmania, Australia', 'LongRoad', '199');
INSERT INTO `savedroute` VALUES ('77', 'Kingston, Tasmania, Australia', 'Kettering, Tasmania, Australia', 'Wooos', '199');

-- ----------------------------
-- Table structure for `tourist`
-- ----------------------------
DROP TABLE IF EXISTS `tourist`;
CREATE TABLE `tourist` (
  `touristID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `loginID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`touristID`),
  KEY `loginID` (`loginID`),
  CONSTRAINT `loginID` FOREIGN KEY (`loginID`) REFERENCES `login` (`loginID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tourist
-- ----------------------------
INSERT INTO `tourist` VALUES ('199', 'David', 'OToole', 'cell321@hotmail.com', '../View/images/profilePictures/adminORXZ310.jpg', '252');
INSERT INTO `tourist` VALUES ('204', 'David', 'OToole', 'cell321@hotmail.com', '../View/images/profilePictures/unknown.jpg', '257');
