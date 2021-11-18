/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : php_oop

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 18/11/2021 10:33:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user_products
-- ----------------------------
DROP TABLE IF EXISTS `user_products`;
CREATE TABLE `user_products`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `product_id` int NULL DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_products
-- ----------------------------
INSERT INTO `user_products` VALUES (1, 64, 1, 'Coffee');
INSERT INTO `user_products` VALUES (2, 65, 2, 'Rum');
INSERT INTO `user_products` VALUES (3, 74, 3, 'Sugar');
INSERT INTO `user_products` VALUES (4, 64, 2, 'Strawberry');
INSERT INTO `user_products` VALUES (6, 65, 1, 'Coffee');
INSERT INTO `user_products` VALUES (11, 64, 4, 'Apple');
INSERT INTO `user_products` VALUES (12, 64, 4, 'Apple');
INSERT INTO `user_products` VALUES (13, 64, 4, 'Apple');
INSERT INTO `user_products` VALUES (14, 64, 4, 'Apple');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 113 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (97, 'b', 'zzz@mail.ru', '$2y$10$uZXWlf6yWT6GMMbVv16kQ.qATpTGh/o6WXtF8Djmesx.7lXabJr0u');
INSERT INTO `users` VALUES (98, 'b', 'zzzz@mail.ru', '$2y$10$oNi5OKF6n74bjfCAfC4NaOpAOd6j2.SgquNbytstjntB4sGSIpqZq');
INSERT INTO `users` VALUES (99, 'b', 'zzzzz@mail.ru', '$2y$10$EqR2DFOtJGeLXCd.BrkFV.cGiWRV2YefWwqX83DWtVyzW.vJGnX3y');
INSERT INTO `users` VALUES (100, 'b', 'zzzzzz@mail.ru', '$2y$10$WsY2pPLmp8ohq.k7qV6v2eZ8/ifHFa5a7CLHwYA.m8VWQKno8GnNu');
INSERT INTO `users` VALUES (101, 'b', 'zzzzzzf@mail.ru', '$2y$10$O5OaGlJKOCGmuH//xr0b8eWGtrUMVW6T/Hgja4WzVpUpYf3GGabda');
INSERT INTO `users` VALUES (102, 'n', 'n@mail.ru', '$2y$10$HzR0PCAxAJqpdeanhKxhNOI4pmprCkGO6Vo88eKIKOO3hMXHu25yO');
INSERT INTO `users` VALUES (103, 'rrr', 'rrr@mail.ru', '$2y$10$MTbVRsZZ4dNT72OEEfVR6.NouQ5sFNovLRXUAmVgEVdpk2c5Ssgeu');
INSERT INTO `users` VALUES (104, 'f@gmail.com', 'f@gmail.com', '$2y$10$G/2HxbbcRwtARXoHYdbI0uVX6HVHJlnj2C4mU9jTYSRbWZgxGxo02');
INSERT INTO `users` VALUES (105, 'fzz', 'fzz@gmail.com', '$2y$10$SCxeDow9tZw0t1xwB8oGJOsXjQdAvnJuVHC2qaBdAtDrIGrnAWKw.');
INSERT INTO `users` VALUES (106, 'ttt', 'ttt@mail.ru', '$2y$10$Ul5pd0WW1Pyhj0os84Q/oeZYG6abHXwiPrjl9jHuJCp4B9kvDzQNO');
INSERT INTO `users` VALUES (107, 'ttt', 'ffr@gmail.com', '$2y$10$uP7Nn6MygUZOLU9VxKV6wul63tOru1DWvEnp.sWLZI8U92x0NdVXy');
INSERT INTO `users` VALUES (109, 'e', 'e@mail.ru', '$2y$10$CLyl7kjGX2LagVHPyZngBOAbrGfg4wuddZtKT/zzZnNHi/OwgWGZK');
INSERT INTO `users` VALUES (110, 'e', 'eee@mail.ru', '$2y$10$T.zkKMsFUvQxxy.6AjSAHecYSrMntVrOsHFrrKz9lNUp7B1UHD7Vu');
INSERT INTO `users` VALUES (111, 'r', 'r@mail.ru', '$2y$10$cgaQh8Loy3c6p5KBalOfyuQyrNcMOoknXfJq.I7oM29vUHVMpUFhC');
INSERT INTO `users` VALUES (112, 'r', 'rr@mail.ru', '$2y$10$DhJoRm0FIKv98QPoFpF15.48cLe9uQHwpiMgua7ZHuW2oDJKeiKPK');

SET FOREIGN_KEY_CHECKS = 1;
