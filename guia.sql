/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : guia

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2016-05-18 16:59:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bebidas
-- ----------------------------
DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE `bebidas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bebidas
-- ----------------------------
INSERT INTO `bebidas` VALUES ('1', '2h free bar/2h barra libre', '10.00');
INSERT INTO `bebidas` VALUES ('2', 'Spirit & Mixer/Cubalibre', '3.00');
INSERT INTO `bebidas` VALUES ('3', 'Cocktail Jug/Jarra de Cóctel', '8.00');
INSERT INTO `bebidas` VALUES ('4', 'Shots/Chupitos', '1.00');
INSERT INTO `bebidas` VALUES ('5', 'Pint Larger/Pinta de cerveza', '1.50');
INSERT INTO `bebidas` VALUES ('6', 'Premium Spirit & Mixer/Cubalibre', '5.00');

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuarios` int(10) DEFAULT NULL,
  `id_locales` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuarios` (`id_usuarios`) USING BTREE,
  KEY `id_locales` (`id_locales`) USING BTREE,
  CONSTRAINT `id_locales` FOREIGN KEY (`id_locales`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comentarios
-- ----------------------------
INSERT INTO `comentarios` VALUES ('1', 'El mejor sitio de la zona baja de magaluf para comer y cenar... Menús infantiles, platos,burguers,cocktails,personal encantador , buen precio y situación inmejorable. Recomendado 100%', '1', '1');
INSERT INTO `comentarios` VALUES ('2', 'Una fiesta espectacular con los amigos, muy buen ambiente, buen servicio, muchísima gente y muy buena música. Lo pasamos muy bien, repetiremos. Muchas gracias.', '1', '2');
INSERT INTO `comentarios` VALUES ('3', 'If you\'re comming to Magaluf, you must visit Coco Bongos!! I\'m secure you\'ll repeat. The workers are very nice, also the food and the music they offer is good', '2', '3');
INSERT INTO `comentarios` VALUES ('4', 'My favourite place in Mallorca. I can\'t fault one thing about Dreams bar. Fantastic cocktails, perfect staff, and lovely food. Can\'t wait to go back!!', '2', '7');
INSERT INTO `comentarios` VALUES ('5', 'Brilliant music , excellent place to end a night in Magaluf . Two for one on most drinks , staff can\'t do enough for you .', '2', '16');
INSERT INTO `comentarios` VALUES ('7', 'Comentario de Pepito random', '3', '14');
INSERT INTO `comentarios` VALUES ('8', 'Es una experiencia única no lejos de la película!', '3', '9');
INSERT INTO `comentarios` VALUES ('9', 'La comida estaba muuuuy buena!! Me gustó mucho que pudiese elegir entre patas fritas, hervidas o al horno, cuando llego la comida tenia muy buena pinta y estaba buenisima!', '1', '1');
INSERT INTO `comentarios` VALUES ('10', 'Sitio genial , precio asequibles y gran diversidad de nacionalidades. Siempre te lo encuentras abierto ya sea invierno o verano.', '1', '6');
INSERT INTO `comentarios` VALUES ('11', 'Great bar and great service - serving proper quality premium brand sprits in \"spanish\" measures. Great food at good prices served all day and night - Would recommend a visit.', '3', '4');
INSERT INTO `comentarios` VALUES ('12', 'I absolutely love this place and all the staff! So friendly, and you can have a good time! Such a chill enviroment, and good deals on drinks too :) I miss it!', '2', '5');
INSERT INTO `comentarios` VALUES ('13', 'Great place to drink chill out or party from the day through to the night! really busy and reasonable drink prices . Great range of music and fantastic atmosphere! Would definitely return', '3', '15');
INSERT INTO `comentarios` VALUES ('14', 'Very nice bar & outdoor terrace. Great DJ\'s, live entertainment, bull riding, and general lively atmosphere. ', '2', '15');
INSERT INTO `comentarios` VALUES ('15', 'Un bar que cuenta con un excelente ambiente acompañado de la mejor música del momento junto buenos cócteles. Buena ubicación y grato personal', '1', '10');

-- ----------------------------
-- Table structure for likes
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuarios_likes` int(10) DEFAULT NULL,
  `id_locales_likes` int(10) DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuarios_likes` (`id_usuarios_likes`),
  KEY `id_locales_likes` (`id_locales_likes`),
  CONSTRAINT `id_locales_likes` FOREIGN KEY (`id_locales_likes`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_usuarios_likes` FOREIGN KEY (`id_usuarios_likes`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of likes
-- ----------------------------
INSERT INTO `likes` VALUES ('1', '1', '1', 'si');
INSERT INTO `likes` VALUES ('2', '1', '2', 'si');
INSERT INTO `likes` VALUES ('3', '1', '3', 'si');
INSERT INTO `likes` VALUES ('4', '1', '4', 'si');
INSERT INTO `likes` VALUES ('5', '2', '1', 'si');
INSERT INTO `likes` VALUES ('6', '2', '2', 'si');
INSERT INTO `likes` VALUES ('7', '2', '3', 'si');
INSERT INTO `likes` VALUES ('8', '3', '1', 'si');
INSERT INTO `likes` VALUES ('9', '3', '2', 'si');
INSERT INTO `likes` VALUES ('10', '3', '3', 'si');
INSERT INTO `likes` VALUES ('11', '3', '4', 'si');
INSERT INTO `likes` VALUES ('12', '3', '5', 'si');
INSERT INTO `likes` VALUES ('13', '3', '6', 'si');
INSERT INTO `likes` VALUES ('14', '3', '7', 'si');
INSERT INTO `likes` VALUES ('15', '2', '8', 'si');
INSERT INTO `likes` VALUES ('16', '2', '9', 'si');
INSERT INTO `likes` VALUES ('17', '3', '10', 'si');
INSERT INTO `likes` VALUES ('18', '3', '11', 'si');
INSERT INTO `likes` VALUES ('19', '1', '11', 'si');
INSERT INTO `likes` VALUES ('20', '1', '10', 'si');
INSERT INTO `likes` VALUES ('21', '1', '9', 'si');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO `locales` VALUES ('10', 'city lights', 'citylights.jpg', 'city lightttttttttttttttttttttttttttttttttttttt');
INSERT INTO `locales` VALUES ('11', 'red lion', 'redlion.jpg', 'red lionnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn');
INSERT INTO `locales` VALUES ('12', 'crystals', 'crystals.jpg', 'crystalsssssssssssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('13', 'office', 'office.jpg', 'officeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee');
INSERT INTO `locales` VALUES ('14', 'bonkers', 'bonkers.jpg', 'bonkersssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('15', 'mambos', 'mambos.jpg', 'mambossssssssssssssssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('16', 'alex', 'alex.jpg', 'alexxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `locales` VALUES ('17', 'chaplins', 'chaplins.jpg', 'chaplinsssssssssssssssssssssssssssssssssssssssssssss');
INSERT INTO `locales` VALUES ('18', 'morgans', 'morgans.jpg', 'morgansssssssssssssssssssssssss');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Pepe', '1234', 'usuarioAnonimo.jpg', '2');
INSERT INTO `usuarios` VALUES ('2', 'Ivan', '1234', 'easyDevel.jpeg', '2');
INSERT INTO `usuarios` VALUES ('3', 'Pepito', '1234', 'road.jpg', '2');
