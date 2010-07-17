/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 50148
 Source Host           : localhost
 Source Database       : winn_guestbook

 Target Server Type    : MySQL
 Target Server Version : 50148
 File Encoding         : utf-8

 Date: 07/17/2010 00:10:50 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `wgb_users`
-- ----------------------------
DROP TABLE IF EXISTS `wgb_users`;
CREATE TABLE `wgb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `session_id` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `wgb_users`
-- ----------------------------
BEGIN;
INSERT INTO `wgb_users` VALUES ('1', 'admin', 'greg@winn.ws', 'cc03e747a6afbbcbf8be7668acfebee5', '1', '1', '2010-07-06 19:11:22', '84e03eb3f777d44936e039f2ee937fdf');
COMMIT;

