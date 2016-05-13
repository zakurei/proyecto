/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : guia

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2016-05-13 14:42:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bebidas
-- ----------------------------
DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE `bebidas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` double(10,2) DEFAULT NULL,
  `id_locales_bebidas` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_locales_bebidas` (`id_locales_bebidas`),
  CONSTRAINT `id_locales_bebidas` FOREIGN KEY (`id_locales_bebidas`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bebidas
-- ----------------------------

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id` int(15) NOT NULL,
  `comentario` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuarios` int(10) DEFAULT NULL,
  `id_locales` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuarios` (`id_usuarios`) USING BTREE,
  KEY `id_locales` (`id_locales`) USING BTREE,
  CONSTRAINT `id_locales` FOREIGN KEY (`id_locales`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comentarios
-- ----------------------------

-- ----------------------------
-- Table structure for likes
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id` int(10) NOT NULL,
  `id_usuarios_likes` int(10) DEFAULT NULL,
  `id_locales_likes` int(10) DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuarios_likes` (`id_usuarios_likes`),
  KEY `id_locales_likes` (`id_locales_likes`),
  CONSTRAINT `id_locales_likes` FOREIGN KEY (`id_locales_likes`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_usuarios_likes` FOREIGN KEY (`id_usuarios_likes`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of likes
-- ----------------------------

-- ----------------------------
-- Table structure for locales
-- ----------------------------
DROP TABLE IF EXISTS `locales`;
CREATE TABLE `locales` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenido` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of locales
-- ----------------------------
INSERT INTO `locales` VALUES ('1', 'jokers', 'jokers.jpg', 'Ven a disfrutar de todo el deporte nacional e internacional en nuestras pantallas de 4x3m.<br/> Estate atent@ de los nuevos eventos en www.club-jokers.com!!');
INSERT INTO `locales` VALUES ('2', 'stereo', 'stereo.jpg', 'stereooooooooooooooooooooo');
INSERT INTO `locales` VALUES ('3', 'coco bongos', 'cocobongos.jpg', 'coco bongossssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('4', 'windsor', 'windsor.jpg', 'windsorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr');
INSERT INTO `locales` VALUES ('5', 'benny hill', 'bennyhill.jpg', 'benny hillllllllllllllllllllllllllllllllllllllllllllll');
INSERT INTO `locales` VALUES ('6', 'manos', 'manos.jpg', 'manosssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('7', 'dreams', 'dreams.jpg', 'dreamsssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('8', 'panama jack', 'panama.jpg', 'panama jackkkkkkkkkkkkkkkkkk');
INSERT INTO `locales` VALUES ('9', 'coyote ugly', 'coyote.jpg', 'coyote uglyyyyyyyyyyyyyyyyyyy');
INSERT INTO `locales` VALUES ('10', 'city lights', 'citylights.png', 'city lightttttttttttttttttttttttttttttttttttttt');
INSERT INTO `locales` VALUES ('11', 'red lion', 'redlion.jpg', 'red lionnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn');
INSERT INTO `locales` VALUES ('12', 'crystals', 'crystals.jpg', 'crystalsssssssssssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('13', 'office', 'office.jpg', 'officeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee');
INSERT INTO `locales` VALUES ('14', 'bonkers', 'bonkers.jpg', 'bonkersssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('15', 'mambos', 'mambos.jpg', 'mambossssssssssssssssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('16', 'alex', 'alex.jpg', 'alexxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `locales` VALUES ('17', 'chaplins', 'chaplins.jpg', 'chaplinsssssssssssssssssssssssssssssssssssssssssssss');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Pepe', '2991', 'usuarioAnonimo.jpg', '2');
