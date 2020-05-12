/*
 Navicat Premium Data Transfer

 Source Server         : bar
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : theproper

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 12/05/2020 11:46:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for survei
-- ----------------------------
DROP TABLE IF EXISTS `survei`;
CREATE TABLE `survei`  (
  `id_survei` int(255) NOT NULL AUTO_INCREMENT,
  `kode_survei` int(255) NULL DEFAULT NULL,
  `kode_ruang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ruang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_instansi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_responden` int(255) NULL DEFAULT NULL,
  `waktu_survei` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_survei`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of survei
-- ----------------------------
INSERT INTO `survei` VALUES (1, 1, 'c-205', 'laboratorium', 'fpmipa', 30, '10-03-20', 1);
INSERT INTO `survei` VALUES (2, 2, 'c-206', 'kelas', 'fpbs', 25, '20-04-20', 1);

SET FOREIGN_KEY_CHECKS = 1;
