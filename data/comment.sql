/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : db_champion

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-08 12:50:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT '0' COMMENT '1.志愿服务2.媒体资讯3.视频教程',
  `aid` int(10) DEFAULT '0' COMMENT '志愿服务/媒体资讯等评论ID',
  `mid` int(10) DEFAULT '0' COMMENT '评论用户ID',
  `content` text COMMENT '评论内容(图文)',
  `comment` int(4) DEFAULT '0' COMMENT '被评论数',
  `praise` int(4) DEFAULT '0' COMMENT '被点赞数',
  `createTime` datetime DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COMMENT='志愿服务/媒体资讯等评论';

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '1', '1', '<img src=\'/public/home/images/face/16.gif\' />', '0', '0', '2018-05-01 19:45:38');
INSERT INTO `comment` VALUES ('2', '1', '2', '1', '<img src=\'/public/home/images/face/42.gif\' />', '0', '0', '2018-05-02 09:51:57');
INSERT INTO `comment` VALUES ('3', '2', '5', '2', '<img src=\'/public/home/images/face/59.gif\' />', '0', '0', '2018-05-02 13:21:27');
INSERT INTO `comment` VALUES ('4', '2', '6', '1', '彬彬', '0', '0', '2018-05-03 15:02:41');
INSERT INTO `comment` VALUES ('5', '1', '11', '1', 'yyyy', '0', '2', '2018-05-08 10:54:18');
INSERT INTO `comment` VALUES ('6', '1', '4', '1', '恩快捷键', '0', '0', '2018-05-08 11:40:37');
INSERT INTO `comment` VALUES ('7', '1', '4', '1', '<img src=\'/public/home/images/face/44.gif\' />', '0', '0', '2018-05-08 11:41:36');
INSERT INTO `comment` VALUES ('8', '1', '12', '1', '点击', '0', '0', '2018-05-08 13:37:58');
INSERT INTO `comment` VALUES ('9', '2', '19', '1', '☺', '0', '2', '2018-05-08 17:02:36');
INSERT INTO `comment` VALUES ('10', '3', '5', '2', '', '0', '0', '2018-05-08 18:19:06');
INSERT INTO `comment` VALUES ('11', '3', '5', '2', '<img src=\'/public/home/images/face/21.gif\' />', '0', '1', '2018-05-08 18:19:18');
INSERT INTO `comment` VALUES ('12', '1', '5', '1', '123', '0', '0', '2018-05-09 12:56:27');
INSERT INTO `comment` VALUES ('13', '2', '16', '1', '测试', '0', '2', '2018-05-09 14:12:58');
INSERT INTO `comment` VALUES ('15', '2', '18', '2', '<img src=\'/public/home/images/face/57.gif\' />', '0', '19', '2018-05-10 16:37:50');
INSERT INTO `comment` VALUES ('14', '1', '11', '1', '123', '0', '2', '2018-05-10 15:31:03');
INSERT INTO `comment` VALUES ('16', '1', '13', '2', '', '0', '0', '2018-05-10 16:40:00');
INSERT INTO `comment` VALUES ('17', '1', '13', '2', '<img src=\'/public/home/images/face/5.gif\' />', '0', '1', '2018-05-10 16:40:07');
INSERT INTO `comment` VALUES ('18', '1', '11', '1', '88888', '0', '1', '2018-05-10 18:56:24');
INSERT INTO `comment` VALUES ('19', '2', '19', '1', '<img src=\'/public/home/images/face/57.gif\' />', '0', '1', '2018-05-11 10:25:58');
INSERT INTO `comment` VALUES ('20', '1', '11', '1', '测试', '0', '1', '2018-05-11 13:50:15');
INSERT INTO `comment` VALUES ('21', '2', '18', '1', '回复 比利测试', '0', '20', '2018-05-11 15:16:51');
INSERT INTO `comment` VALUES ('22', '2', '27', '1', '咯哦哦', '0', '1', '2018-05-14 09:27:23');
INSERT INTO `comment` VALUES ('23', '2', '27', '1', '123123', '0', '0', '2018-05-14 09:27:47');
INSERT INTO `comment` VALUES ('24', '1', '12', '86', '发kobe', '0', '2', '2018-05-15 09:50:48');
INSERT INTO `comment` VALUES ('25', '4', '1', '1', 'aaaa', '0', '1', '2018-05-16 17:26:39');
INSERT INTO `comment` VALUES ('26', '3', '2', '1', '<img src=\'/public/home/images/face/17.gif\' />', '0', '0', '2018-05-20 09:11:41');
INSERT INTO `comment` VALUES ('27', '2', '27', '2', '？', '0', '6', '2018-05-22 09:30:39');
INSERT INTO `comment` VALUES ('28', '2', '27', '2', '<img src=\'/public/home/images/face/14.gif\' />', '0', '2', '2018-05-22 09:32:47');
INSERT INTO `comment` VALUES ('29', '2', '16', '2', '<img src=\'/public/home/images/face/4.gif\' />', '0', '1', '2018-05-23 14:51:12');
INSERT INTO `comment` VALUES ('30', '3', '9', '2', '学习了', '0', '0', '2018-05-23 16:16:01');
INSERT INTO `comment` VALUES ('31', '3', '9', '1', '加强学习，提高能力。', '0', '0', '2018-05-28 14:46:32');
INSERT INTO `comment` VALUES ('32', '1', '11', '90', '<img src=\'/public/home/images/face/20.gif\' />', '0', '1', '2018-05-29 14:52:00');
INSERT INTO `comment` VALUES ('33', '1', '8', '91', '<img src=\'/public/home/images/face/11.gif\' />', '0', '1', '2018-05-30 16:01:47');
INSERT INTO `comment` VALUES ('68', '2', '49', '1', '好好好', '0', '0', null);
INSERT INTO `comment` VALUES ('70', '2', '48', '1', '哈哈', '0', '0', null);
