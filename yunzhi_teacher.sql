/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : tp5

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-06-24 17:13:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yunzhi_teacher
-- ----------------------------
DROP TABLE IF EXISTS `yunzhi_teacher`;
CREATE TABLE `yunzhi_teacher` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT '' COMMENT '姓名',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0男，1女',
  `username` varchar(16) NOT NULL COMMENT '用户名',
  `email` varchar(30) DEFAULT '' COMMENT '邮箱',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yunzhi_teacher
-- ----------------------------
INSERT INTO `yunzhi_teacher` VALUES ('1', '张三', '0', 'zhangsan', 'zhangsan@mail.com', '123123', '123213');
INSERT INTO `yunzhi_teacher` VALUES ('2', '李四', '0', 'lisi', 'lisi@yunzhi.club', '123213', '1232');
INSERT INTO `yunzhi_teacher` VALUES ('3', '王五', '1', 'wangwu', 'wangwu@yunzhi.club', '0', '0');
INSERT INTO `yunzhi_teacher` VALUES ('4', '王五', '1', 'wangwu', 'wangwu@yunzhi.club', '0', '0');
INSERT INTO `yunzhi_teacher` VALUES ('5', '王五', '1', 'wangwu', 'wangwu@yunzhi.club', '0', '0');
INSERT INTO `yunzhi_teacher` VALUES ('6', '王五', '1', 'wangwu', 'wangwu@yunzhi.club', '0', '0');
INSERT INTO `yunzhi_teacher` VALUES ('7', '王五', '1', 'wangwu', 'wangwu@yunzhi.club', '0', '0');
INSERT INTO `yunzhi_teacher` VALUES ('8', '33', '0', '33', '33@qq.com', '0', '0');
INSERT INTO `yunzhi_teacher` VALUES ('9', '44', '0', '44', '44@qq.com', '0', '0');
INSERT INTO `yunzhi_teacher` VALUES ('10', '55', '0', '55', '55@qq.com', '1466755975', '0');
INSERT INTO `yunzhi_teacher` VALUES ('11', '66', '0', '66', '66@qq.com', '1466756267', '0');
INSERT INTO `yunzhi_teacher` VALUES ('12', '77', '0', '77', '77@qq.com', '1466756416', '1466756416');
INSERT INTO `yunzhi_teacher` VALUES ('13', '1', '0', '1', '1', '1466758105', '1466758105');
INSERT INTO `yunzhi_teacher` VALUES ('14', '12', '0', '12', '12', '1466758835', '1466758835');
INSERT INTO `yunzhi_teacher` VALUES ('15', '12', '0', '12', '12', '1466758853', '1466758853');
INSERT INTO `yunzhi_teacher` VALUES ('16', '33', '0', '33', '33', '1466758974', '1466758974');
INSERT INTO `yunzhi_teacher` VALUES ('17', '23', '0', '3', '23', '1466759011', '1466759011');
INSERT INTO `yunzhi_teacher` VALUES ('18', '222', '0', '22', '22', '1466759156', '1466759156');
SET FOREIGN_KEY_CHECKS=1;
