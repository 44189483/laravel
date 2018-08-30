/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : db_champion

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-08 12:47:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) DEFAULT NULL COMMENT '微信用户ID',
  `nickname` varchar(20) DEFAULT NULL COMMENT '匿称',
  `realname` varchar(20) DEFAULT NULL COMMENT '真实姓名',
  `portraitUri` varchar(100) DEFAULT NULL COMMENT '头像',
  `sex` tinyint(1) DEFAULT '0' COMMENT '性别',
  `nation` varchar(20) DEFAULT NULL COMMENT '民族',
  `phone` varchar(20) DEFAULT NULL COMMENT '手机',
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱',
  `identificationNumber` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `job` varchar(50) DEFAULT NULL COMMENT '职业',
  `level` tinyint(1) DEFAULT '0' COMMENT '0.普通会员1.志愿者2.记者',
  `integral` int(10) DEFAULT '0' COMMENT '积分',
  `province` varchar(20) DEFAULT NULL COMMENT '省',
  `city` varchar(20) DEFAULT NULL COMMENT '市',
  `status` tinyint(1) DEFAULT '0' COMMENT '0.未审核1.已审核',
  `inviteCode` varchar(10) DEFAULT NULL COMMENT '邀请码',
  `mediaCompany` varchar(100) DEFAULT NULL COMMENT '新闻媒体公司',
  `sportEvent` varchar(50) DEFAULT NULL COMMENT '运动项目',
  `sportTeam` varchar(50) DEFAULT NULL COMMENT '运动队',
  `sportPrize` varchar(50) DEFAULT NULL COMMENT '运动奖项',
  `birth` date DEFAULT NULL,
  `birthAddress` varchar(100) DEFAULT NULL COMMENT '出生地',
  `liveAddress` varchar(100) DEFAULT NULL COMMENT '居住地',
  `contactAddress` varchar(100) DEFAULT NULL COMMENT '通讯地址',
  `createdAt` datetime DEFAULT NULL,
  `passwordHash` char(40) DEFAULT NULL,
  `passwordSalt` char(4) DEFAULT NULL,
  `activation` tinyint(1) DEFAULT '0' COMMENT '是否激活0.1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COMMENT='会员与WEBIM公用一个表';

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', null, '都市浪人', '孙国梁', 'http://101.37.107.121/upload/member/avatar/d6abc431469e2a91035e82c81727bb20.jpeg', '0', '汉', '18888888888', '44189483@qq.com', '231084798507213718', null, '1', '1213', null, null, '1', 'MK08C79', null, '田径', '国家田径队', '1000', null, '牡丹江', '大连', '黑龙江', '2018-05-04 10:33:28', 'e1c7ca7f434fe2dfc5b603426d55cb8de55fcf55', '1476', '1');
INSERT INTO `users` VALUES ('2', null, '比利', '北方晚报', 'http://101.37.107.121/upload/member/avatar/20180504657.jpg', '0', '', '16666666666', '', '', null, '2', '1130', null, null, '1', null, '北方晚报', null, null, null, null, '大连', '', '', '2018-05-08 18:15:24', 'e1c7ca7f434fe2dfc5b603426d55cb8de55fcf55', '1476', '1');