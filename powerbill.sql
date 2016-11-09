/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 100108
Source Host           : localhost:3306
Source Database       : powerbill

Target Server Type    : MYSQL
Target Server Version : 100108
File Encoding         : 65001

Date: 2016-11-09 12:49:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agent
-- ----------------------------
DROP TABLE IF EXISTS `agent`;
CREATE TABLE `agent` (
  `IdAgent` int(5) NOT NULL AUTO_INCREMENT,
  `KdAgent` varchar(5) DEFAULT NULL,
  `Agent` varchar(15) DEFAULT NULL,
  `NamaAsli` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdAgent`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agent
-- ----------------------------
INSERT INTO `agent` VALUES ('1', 'CCSLA', 'ATILA', 'AGUNG');
INSERT INTO `agent` VALUES ('2', 'CCSLE', 'ANDREW', 'ERIK BAGUS PRAMONO');
INSERT INTO `agent` VALUES ('3', 'CCSLE', 'AUDREY', 'ENI ISTIQOMAH');
INSERT INTO `agent` VALUES ('4', 'CCSLA', 'BAYU', 'AHMAD FIRDAOES');
INSERT INTO `agent` VALUES ('5', 'CCSLM', 'BEATICE', 'MAYA EKA W');
INSERT INTO `agent` VALUES ('6', 'CCSLT', 'BERNARD', 'TEDDY SUTOPO');
INSERT INTO `agent` VALUES ('7', 'CCSLI', 'BETTY', 'IKA DEWI S');

-- ----------------------------
-- Table structure for angsuran
-- ----------------------------
DROP TABLE IF EXISTS `angsuran`;
CREATE TABLE `angsuran` (
  `NoAng` int(10) NOT NULL AUTO_INCREMENT,
  `Tgl` date DEFAULT NULL,
  `TglTempo` date DEFAULT NULL,
  `AgsKe` int(10) DEFAULT NULL,
  `No` int(10) DEFAULT NULL,
  `IdNasabah` int(10) DEFAULT NULL,
  PRIMARY KEY (`NoAng`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of angsuran
-- ----------------------------

-- ----------------------------
-- Table structure for lama
-- ----------------------------
DROP TABLE IF EXISTS `lama`;
CREATE TABLE `lama` (
  `IdLama` int(6) NOT NULL AUTO_INCREMENT,
  `Lama` int(100) DEFAULT NULL,
  PRIMARY KEY (`IdLama`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lama
-- ----------------------------
INSERT INTO `lama` VALUES ('1', '3');
INSERT INTO `lama` VALUES ('2', '6');
INSERT INTO `lama` VALUES ('3', '12');
INSERT INTO `lama` VALUES ('4', '18');

-- ----------------------------
-- Table structure for limitp
-- ----------------------------
DROP TABLE IF EXISTS `limitp`;
CREATE TABLE `limitp` (
  `IdLimit` int(10) NOT NULL AUTO_INCREMENT,
  `LimitP` int(100) DEFAULT NULL,
  PRIMARY KEY (`IdLimit`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of limitp
-- ----------------------------
INSERT INTO `limitp` VALUES ('1', '1000000');
INSERT INTO `limitp` VALUES ('2', '2000000');
INSERT INTO `limitp` VALUES ('3', '3000000');
INSERT INTO `limitp` VALUES ('4', '4000000');
INSERT INTO `limitp` VALUES ('5', '5000000');
INSERT INTO `limitp` VALUES ('6', '6000000');
INSERT INTO `limitp` VALUES ('7', '7000000');
INSERT INTO `limitp` VALUES ('8', '8000000');
INSERT INTO `limitp` VALUES ('9', '9000000');
INSERT INTO `limitp` VALUES ('11', '10000000');

-- ----------------------------
-- Table structure for nasabah
-- ----------------------------
DROP TABLE IF EXISTS `nasabah`;
CREATE TABLE `nasabah` (
  `IdNasabah` int(10) NOT NULL AUTO_INCREMENT,
  `NoKartuCc` int(16) DEFAULT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Ktp` varchar(40) DEFAULT NULL,
  `TmptLahir` varchar(100) DEFAULT NULL,
  `TglLahir` date DEFAULT NULL,
  `IbuKandung` varchar(100) DEFAULT NULL,
  `Alamat` text,
  `Telpon` varchar(15) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IdNasabah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nasabah
-- ----------------------------
INSERT INTO `nasabah` VALUES ('1', '900200', 'Rosita Farida', '3603281606920003', 'Lebak', '1994-03-02', 'Sulistiowati', 'Kp Hamberang', '085776676567', 'rosita@gmail.com');
INSERT INTO `nasabah` VALUES ('2', '200900800', 'Puji Lestari', '3603281606920003', 'Lebak', '1997-03-02', 'Lestari', 'Kp. Hamberang', '085776676567', 'puji@gmail.com');

-- ----------------------------
-- Table structure for pinjaman
-- ----------------------------
DROP TABLE IF EXISTS `pinjaman`;
CREATE TABLE `pinjaman` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tgl` date DEFAULT NULL,
  `LimitP` int(100) DEFAULT NULL,
  `Lama` int(10) DEFAULT NULL,
  `Bunga` float DEFAULT NULL,
  `Angsuran` int(100) DEFAULT NULL,
  `Status` enum('belum','lunas') DEFAULT NULL,
  `IdNasabah` int(10) DEFAULT NULL,
  `NoRek` varchar(255) DEFAULT NULL,
  `NmBank` varchar(255) DEFAULT NULL,
  `AlamatBank` varchar(255) DEFAULT NULL,
  `IdAgent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pinjaman
-- ----------------------------

-- ----------------------------
-- Table structure for provider
-- ----------------------------
DROP TABLE IF EXISTS `provider`;
CREATE TABLE `provider` (
  `IdProv` int(11) NOT NULL AUTO_INCREMENT,
  `KdProv` varchar(5) DEFAULT NULL,
  `JenisProvider` varchar(10) DEFAULT NULL,
  `NamaProvider` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdProv`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of provider
-- ----------------------------
INSERT INTO `provider` VALUES ('1', '', 'TV KABEL', 'AORA TV');
INSERT INTO `provider` VALUES ('2', '', 'SELULER', 'INDOSAT');
INSERT INTO `provider` VALUES ('3', '', 'TV KABEL', 'INDOVISION');
INSERT INTO `provider` VALUES ('4', '', 'PLN', 'PLN');
INSERT INTO `provider` VALUES ('5', '', 'SELULER', 'SMART');
INSERT INTO `provider` VALUES ('6', '', 'INTERNET', 'SPEEDY');
INSERT INTO `provider` VALUES ('7', '', 'SELULER', 'TELKOM');
INSERT INTO `provider` VALUES ('8', '', 'SELULER', 'TELKOMSEL');
INSERT INTO `provider` VALUES ('9', '', 'TV KABEL', 'TELKOMVISION');
INSERT INTO `provider` VALUES ('10', '', 'SELULER', 'THREE');
INSERT INTO `provider` VALUES ('11', '', 'TV KABEL', 'TOP TV');
INSERT INTO `provider` VALUES ('12', '', 'SELULER', 'XL');
INSERT INTO `provider` VALUES ('13', '', 'PAM', 'PAM');

-- ----------------------------
-- Table structure for targetinsentif
-- ----------------------------
DROP TABLE IF EXISTS `targetinsentif`;
CREATE TABLE `targetinsentif` (
  `IdTarget` int(11) NOT NULL AUTO_INCREMENT,
  `Target` varchar(255) DEFAULT NULL,
  `Insentif` varchar(255) DEFAULT NULL,
  `Program` enum('powerbill','powerchase') DEFAULT NULL,
  PRIMARY KEY (`IdTarget`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of targetinsentif
-- ----------------------------
INSERT INTO `targetinsentif` VALUES ('1', '100', '750000', 'powerbill');
INSERT INTO `targetinsentif` VALUES ('3', '150', '200000', 'powerbill');
INSERT INTO `targetinsentif` VALUES ('4', '150', '750000', 'powerchase');
INSERT INTO `targetinsentif` VALUES ('5', '200', '750000', 'powerchase');

-- ----------------------------
-- Table structure for trxpowerbill
-- ----------------------------
DROP TABLE IF EXISTS `trxpowerbill`;
CREATE TABLE `trxpowerbill` (
  `IdTrx` int(10) NOT NULL AUTO_INCREMENT,
  `IdNasabah` int(10) DEFAULT NULL,
  `IdProv` int(10) DEFAULT NULL,
  `NoPelanggan` varchar(100) DEFAULT NULL,
  `IdAgent` int(10) DEFAULT NULL,
  `TglTrx` date DEFAULT NULL,
  PRIMARY KEY (`IdTrx`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trxpowerbill
-- ----------------------------
INSERT INTO `trxpowerbill` VALUES ('1', '2', '2', '085776676567', '7', '2016-10-21');
INSERT INTO `trxpowerbill` VALUES ('2', '1', '6', '00089789', '1', '2016-10-21');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `IdUser` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `level` enum('admin','agent') DEFAULT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '12345', null);
INSERT INTO `user` VALUES ('3', 'luqman', '12345', null);
