/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50133
Source Host           : localhost:3306
Source Database       : wacai

Target Server Type    : MYSQL
Target Server Version : 50133
File Encoding         : 65001

Date: 2014-11-21 16:59:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `wacai_account`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_account`;
CREATE TABLE `wacai_account` (
  `account_id` int(15) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(150) DEFAULT NULL COMMENT '账户名称',
  `account_type` varchar(50) DEFAULT NULL COMMENT '账户类型',
  `account_statistical_id` int(15) DEFAULT NULL COMMENT '账户统计币种',
  `account_remarks` varchar(2000) DEFAULT NULL COMMENT '账户备注',
  `account_remainder` varchar(1500) DEFAULT NULL COMMENT '账户余额（币种，金额）序列化',
  `account_company_id` int(15) DEFAULT NULL COMMENT '发卡行/公司的id',
  `account_company_name` varchar(150) DEFAULT NULL COMMENT '发卡行/公司的名称',
  `account_card_number` varchar(30) DEFAULT NULL COMMENT '卡号',
  `account_user_id` int(15) DEFAULT NULL COMMENT '用户id',
  `account_addtime` int(15) DEFAULT NULL,
  `account_edittime` int(15) DEFAULT NULL,
  `account_ip` varchar(20) DEFAULT NULL COMMENT '用户ip',
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_account
-- ----------------------------
INSERT INTO wacai_account VALUES ('9', '招行信用卡', 'credit', '1', '唯一的信用卡', 'a:1:{i:1;s:6:\"157.28\";}', '3', '招商银行', '6225768721788881', '1', '1416212319', '1416212319', '127.0.0.1');
INSERT INTO wacai_account VALUES ('7', '现金', 'cash', '1', '钱包里的钱', 'a:1:{i:1;s:4:\"1200\";}', '0', '', '0', '1', '1416211885', '1416211885', '127.0.0.1');
INSERT INTO wacai_account VALUES ('10', '工行普通卡', 'deposit', '1', '工行普通卡', 'a:1:{i:1;s:3:\"723\";}', '2', '工商银行', '6212263901009583663', '1', '1416212441', '1416212441', '127.0.0.1');
INSERT INTO wacai_account VALUES ('11', '工行金卡', 'deposit', '1', '工行金卡', 'a:1:{i:1;s:4:\"2000\";}', '2', '工商银行', '6222083901005383743', '1', '1416212567', '1416212567', '127.0.0.1');
INSERT INTO wacai_account VALUES ('12', '华夏基金', 'investment', '1', '华夏基金', 'a:1:{i:1;s:5:\"36000\";}', '105', '华夏基金管理有限公司', '60001210', '1', '1416212645', '1416212645', '127.0.0.1');
INSERT INTO wacai_account VALUES ('13', '三江超市购物卡', 'shopping', '1', '三江超市购物卡', 'a:1:{i:1;s:3:\"200\";}', '0', '', '', '1', '1416212703', '1416212703', '127.0.0.1');
INSERT INTO wacai_account VALUES ('14', '米兰理发卡', 'beauty', '1', '米兰理发卡', 'a:1:{i:1;s:3:\"100\";}', '0', '', '', '1', '1416212723', '1416212723', '127.0.0.1');
INSERT INTO wacai_account VALUES ('15', '宁波公交卡', 'bus', '1', '宁波公交卡', 'a:1:{i:1;s:3:\"208\";}', '0', '', '', '1', '1416212775', '1416212775', '127.0.0.1');
INSERT INTO wacai_account VALUES ('16', '杭电饭卡', 'dining', '1', '杭电饭卡', 'a:1:{i:1;s:3:\"300\";}', '0', '', '', '1', '1416212791', '1416212791', '127.0.0.1');
INSERT INTO wacai_account VALUES ('17', '支付宝', 'internet', '1', '支付宝', 'a:1:{i:1;s:5:\"32000\";}', '0', '', '', '1', '1416212809', '1416212809', '127.0.0.1');
INSERT INTO wacai_account VALUES ('18', '财付通', 'internet', '1', '财付通', 'a:1:{i:1;s:1:\"8\";}', '0', '', '', '1', '1416212825', '1416212825', '127.0.0.1');
INSERT INTO wacai_account VALUES ('19', 'okcoin比特币', 'virtual', '1', 'okcoin比特币', 'a:1:{i:45;s:4:\"0.47\";}', '0', '', '', '1', '1416212922', '1416212922', '127.0.0.1');
INSERT INTO wacai_account VALUES ('20', '债权', 'loan', '0', '债权', 'a:1:{i:1;s:3:\"100\";}', '0', '', '', '1', '1416212942', '1416212942', '127.0.0.1');
INSERT INTO wacai_account VALUES ('21', '多币种现金', 'cash', '1', '多币种现金', 'a:3:{i:1;s:3:\"100\";i:3;s:3:\"200\";i:4;s:3:\"300\";}', '0', '', '', '1', '1416537151', '1416537151', '127.0.0.1');

-- ----------------------------
-- Table structure for `wacai_company`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_company`;
CREATE TABLE `wacai_company` (
  `company_id` int(15) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) DEFAULT NULL,
  `company_addtime` int(15) DEFAULT NULL,
  `company_edittime` int(15) DEFAULT NULL,
  `company_user_id` int(15) DEFAULT '-1' COMMENT '-1是系统设定的公司',
  `company_type` varchar(50) DEFAULT NULL COMMENT '1是银行，2是投资公司，3是网络账户',
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_company
-- ----------------------------
INSERT INTO wacai_company VALUES ('1', '中国银行', '1415586776', '1415586776', '1', 'bank');
INSERT INTO wacai_company VALUES ('2', '工商银行', '1415586784', '1415586784', '1', 'bank');
INSERT INTO wacai_company VALUES ('3', '招商银行', '1415586789', '1415586789', '1', 'bank');
INSERT INTO wacai_company VALUES ('4', '建设银行', '1415586792', '1415586792', '1', 'bank');
INSERT INTO wacai_company VALUES ('5', '农业银行', '1415586796', '1415586796', '1', 'bank');
INSERT INTO wacai_company VALUES ('6', '交通银行', '1415586799', '1415586799', '1', 'bank');
INSERT INTO wacai_company VALUES ('7', '广发银行', '1415586807', '1415586807', '1', 'bank');
INSERT INTO wacai_company VALUES ('8', '民生银行', '1415586813', '1415586813', '1', 'bank');
INSERT INTO wacai_company VALUES ('9', '其他银行', '1415586818', '1415586818', '1', 'bank');
INSERT INTO wacai_company VALUES ('10', '邮政储蓄', '1415586822', '1415586822', '1', 'bank');
INSERT INTO wacai_company VALUES ('11', '中信银行', '1415586825', '1415586825', '1', 'bank');
INSERT INTO wacai_company VALUES ('12', '光大银行', '1415586828', '1415586828', '1', 'bank');
INSERT INTO wacai_company VALUES ('13', '浦发银行', '1415586833', '1415586833', '1', 'bank');
INSERT INTO wacai_company VALUES ('14', '平安银行', '1415586838', '1415586838', '1', 'bank');
INSERT INTO wacai_company VALUES ('15', '兴业银行', '1415586841', '1415586841', '1', 'bank');
INSERT INTO wacai_company VALUES ('16', '华夏银行', '1415586848', '1415586848', '1', 'bank');
INSERT INTO wacai_company VALUES ('17', '宁波银行', '1415586851', '1415586851', '1', 'bank');
INSERT INTO wacai_company VALUES ('18', '杭州银行', '1415586856', '1415586856', '1', 'bank');
INSERT INTO wacai_company VALUES ('19', '乌鲁木齐商业银行', '1415586858', '1415586858', '1', 'bank');
INSERT INTO wacai_company VALUES ('20', '重庆银行', '1415586863', '1415586863', '1', 'bank');
INSERT INTO wacai_company VALUES ('21', '福建农信', '1415586868', '1415586868', '1', 'bank');
INSERT INTO wacai_company VALUES ('22', '宁夏银行', '1415586872', '1415586872', '1', 'bank');
INSERT INTO wacai_company VALUES ('23', '上海银行', '1415586894', '1415586894', '1', 'bank');
INSERT INTO wacai_company VALUES ('24', '齐鲁银行', '1415586898', '1415586898', '1', 'bank');
INSERT INTO wacai_company VALUES ('25', '花旗银行', '1415586901', '1415586901', '1', 'bank');
INSERT INTO wacai_company VALUES ('26', '东亚银行', '1415586905', '1415586905', '1', 'bank');
INSERT INTO wacai_company VALUES ('27', '恒生银行', '1415586908', '1415586908', '1', 'bank');
INSERT INTO wacai_company VALUES ('28', '渣打银行', '1415586912', '1415586912', '1', 'bank');
INSERT INTO wacai_company VALUES ('29', '美国银行', '1415586923', '1415586923', '1', 'bank');
INSERT INTO wacai_company VALUES ('30', '汇丰银行', '1415586928', '1415586928', '1', 'bank');
INSERT INTO wacai_company VALUES ('31', '华侨银行', '1415586931', '1415586931', '1', 'bank');
INSERT INTO wacai_company VALUES ('32', '满地可银行', '1415586937', '1415586937', '1', 'bank');
INSERT INTO wacai_company VALUES ('33', '大连银行', '1415587022', '1415587022', '1', 'bank');
INSERT INTO wacai_company VALUES ('34', '北京银行', '1415587025', '1415587025', '1', 'bank');
INSERT INTO wacai_company VALUES ('35', '温州银行', '1415587028', '1415587028', '1', 'bank');
INSERT INTO wacai_company VALUES ('36', '台州银行', '1415587033', '1415587033', '1', 'bank');
INSERT INTO wacai_company VALUES ('37', '长沙银行', '1415587036', '1415587036', '1', 'bank');
INSERT INTO wacai_company VALUES ('38', '广州银行', '1415587039', '1415587039', '1', 'bank');
INSERT INTO wacai_company VALUES ('39', '农工商', '1415587050', '1415587050', '1', 'bank');
INSERT INTO wacai_company VALUES ('40', '农发行', '1415587053', '1415587053', '1', 'bank');
INSERT INTO wacai_company VALUES ('41', '成都银行', '1415587057', '1415587057', '1', 'bank');
INSERT INTO wacai_company VALUES ('42', '江苏银行', '1415587061', '1415587061', '1', 'bank');
INSERT INTO wacai_company VALUES ('43', '徽商银行', '1415587093', '1415587093', '1', 'bank');
INSERT INTO wacai_company VALUES ('44', '南充商行', '1415587099', '1415587099', '1', 'bank');
INSERT INTO wacai_company VALUES ('45', '铁岭银行', '1415587107', '1415587107', '1', 'bank');
INSERT INTO wacai_company VALUES ('46', '哈尔滨银行', '1415587110', '1415587110', '1', 'bank');
INSERT INTO wacai_company VALUES ('47', '民泰银行', '1415587113', '1415587113', '1', 'bank');
INSERT INTO wacai_company VALUES ('48', '龙江银行', '1415587116', '1415587116', '1', 'bank');
INSERT INTO wacai_company VALUES ('49', '富滇银行', '1415587129', '1415587129', '1', 'bank');
INSERT INTO wacai_company VALUES ('50', '昆仑银行', '1415587132', '1415587132', '1', 'bank');
INSERT INTO wacai_company VALUES ('51', '甘肃银行', '1415587135', '1415587135', '1', 'bank');
INSERT INTO wacai_company VALUES ('52', '兰州银行', '1415587138', '1415587138', '1', 'bank');
INSERT INTO wacai_company VALUES ('53', '汉口银行', '1415587141', '1415587141', '1', 'bank');
INSERT INTO wacai_company VALUES ('54', '杭州联合银行', '1415587147', '1415587147', '1', 'bank');
INSERT INTO wacai_company VALUES ('55', '沧州银行', '1415587152', '1415587152', '1', 'bank');
INSERT INTO wacai_company VALUES ('56', '长江银行', '1415587154', '1415587154', '1', 'bank');
INSERT INTO wacai_company VALUES ('57', '济宁银行', '1415587158', '1415587158', '1', 'bank');
INSERT INTO wacai_company VALUES ('58', '上饶银行', '1415587161', '1415587161', '1', 'bank');
INSERT INTO wacai_company VALUES ('59', '晋商银行', '1415587164', '1415587164', '1', 'bank');
INSERT INTO wacai_company VALUES ('60', '安徽农金', '1415587177', '1415587177', '1', 'bank');
INSERT INTO wacai_company VALUES ('61', '南京银行', '1415587191', '1415587191', '1', 'bank');
INSERT INTO wacai_company VALUES ('62', '锦州银行', '1415587195', '1415587195', '1', 'bank');
INSERT INTO wacai_company VALUES ('63', '桂林银行', '1415587221', '1415587221', '1', 'bank');
INSERT INTO wacai_company VALUES ('64', '内蒙古银行', '1415587224', '1415587224', '1', 'bank');
INSERT INTO wacai_company VALUES ('65', '南充商行', '1415587227', '1415587227', '1', 'bank');
INSERT INTO wacai_company VALUES ('66', '广西北部湾银行', '1415587230', '1415587230', '1', 'bank');
INSERT INTO wacai_company VALUES ('67', '齐商银行', '1415587233', '1415587233', '1', 'bank');
INSERT INTO wacai_company VALUES ('68', '莱商银行', '1415587236', '1415587236', '1', 'bank');
INSERT INTO wacai_company VALUES ('69', '九江银行', '1415587239', '1415587239', '1', 'bank');
INSERT INTO wacai_company VALUES ('70', '包商银行', '1415587244', '1415587244', '1', 'bank');
INSERT INTO wacai_company VALUES ('71', '华融湘江银行', '1415587247', '1415587247', '1', 'bank');
INSERT INTO wacai_company VALUES ('72', '广东南粤银行', '1415587250', '1415587250', '1', 'bank');
INSERT INTO wacai_company VALUES ('73', '鄞州银行', '1415587253', '1415587253', '1', 'bank');
INSERT INTO wacai_company VALUES ('74', '河北银行', '1415587257', '1415587257', '1', 'bank');
INSERT INTO wacai_company VALUES ('75', '成都农商银行', '1415587260', '1415587260', '1', 'bank');
INSERT INTO wacai_company VALUES ('76', '重庆农村商业银行', '1415587263', '1415587263', '1', 'bank');
INSERT INTO wacai_company VALUES ('77', '北京农商银行', '1415587266', '1415587266', '1', 'bank');
INSERT INTO wacai_company VALUES ('78', '青岛银行', '1415587269', '1415587269', '1', 'bank');
INSERT INTO wacai_company VALUES ('79', '青海银行', '1415587273', '1415587273', '1', 'bank');
INSERT INTO wacai_company VALUES ('80', '尧都农村商业银行', '1415587278', '1415587278', '1', 'bank');
INSERT INTO wacai_company VALUES ('81', '珠海华润银行', '1415587282', '1415587282', '1', 'bank');
INSERT INTO wacai_company VALUES ('82', '农村商业银行', '1415587286', '1415587286', '1', 'bank');
INSERT INTO wacai_company VALUES ('83', '深圳发展银行', '1415587289', '1415587289', '1', 'bank');
INSERT INTO wacai_company VALUES ('84', '云南省农村信用社', '1415587292', '1415587292', '1', 'bank');
INSERT INTO wacai_company VALUES ('85', '吉林银行', '1415587295', '1415587295', '1', 'bank');
INSERT INTO wacai_company VALUES ('86', '柳州银行', '1415587298', '1415587298', '1', 'bank');
INSERT INTO wacai_company VALUES ('87', '广州农商银行', '1415587301', '1415587301', '1', 'bank');
INSERT INTO wacai_company VALUES ('88', '商丘银行', '1415587308', '1415587308', '1', 'bank');
INSERT INTO wacai_company VALUES ('89', '农村信用社', '1415587311', '1415587311', '1', 'bank');
INSERT INTO wacai_company VALUES ('90', '吴江农村商业银行', '1415587314', '1415587314', '1', 'bank');
INSERT INTO wacai_company VALUES ('91', '湖南省农村信用社', '1415587317', '1415587317', '1', 'bank');
INSERT INTO wacai_company VALUES ('92', '盛京银行', '1415587320', '1415587320', '1', 'bank');
INSERT INTO wacai_company VALUES ('93', '玉山銀行', '1415587324', '1415587324', '1', 'bank');
INSERT INTO wacai_company VALUES ('94', '广西农村信用社', '1415587327', '1415587327', '1', 'bank');
INSERT INTO wacai_company VALUES ('95', '上饶银行', '1415587330', '1415587330', '1', 'bank');
INSERT INTO wacai_company VALUES ('96', '淘宝', '1415587334', '1415587334', '1', 'bank');
INSERT INTO wacai_company VALUES ('97', '陕西信合', '1415587337', '1415587337', '1', 'bank');
INSERT INTO wacai_company VALUES ('98', '财付通', '1415587341', '1415587341', '1', 'bank');
INSERT INTO wacai_company VALUES ('99', '黄河农村商业银行', '1415587345', '1415587345', '1', 'bank');
INSERT INTO wacai_company VALUES ('100', '常熟农商银行', '1415587348', '1415587348', '1', 'bank');
INSERT INTO wacai_company VALUES ('101', '上海农商银行', '1415587351', '1415587351', '1', 'bank');
INSERT INTO wacai_company VALUES ('102', '江南农村商业银行', '1415587356', '1415587356', '1', 'bank');
INSERT INTO wacai_company VALUES ('103', '武汉农村商业银行', '1415587360', '1415587360', '1', 'bank');
INSERT INTO wacai_company VALUES ('104', '天津银行', '1415587364', '1415587364', '1', 'bank');
INSERT INTO wacai_company VALUES ('105', '华夏基金管理有限公司', '1415595549', '1415595549', '1', 'investment');
INSERT INTO wacai_company VALUES ('106', '华夏基金管理有限公司', '1415597318', '1415597318', '1', 'investment');
INSERT INTO wacai_company VALUES ('107', '华安基金管理有限公司', '1415597323', '1415597323', '1', 'investment');
INSERT INTO wacai_company VALUES ('108', '大成基金管理有限公司', '1415597327', '1415597327', '1', 'investment');
INSERT INTO wacai_company VALUES ('109', '上投摩根基金管理有限公司', '1415597331', '1415597331', '1', 'investment');
INSERT INTO wacai_company VALUES ('110', '汇添富基金管理股份有限公司', '1415597334', '1415597334', '1', 'investment');
INSERT INTO wacai_company VALUES ('111', '建信基金管理有限责任公司', '1415597337', '1415597337', '1', 'investment');
INSERT INTO wacai_company VALUES ('112', '银华基金管理有限公司', '1415597341', '1415597341', '1', 'investment');
INSERT INTO wacai_company VALUES ('113', '富国基金管理有限公司', '1415597344', '1415597344', '1', 'investment');
INSERT INTO wacai_company VALUES ('114', '景顺长城基金管理有限公司', '1415597348', '1415597348', '1', 'investment');
INSERT INTO wacai_company VALUES ('115', '鹏华基金管理有限公司', '1415597351', '1415597351', '1', 'investment');
INSERT INTO wacai_company VALUES ('116', '招商基金管理有限公司', '1415597357', '1415597357', '1', 'investment');
INSERT INTO wacai_company VALUES ('117', '天弘基金管理有限公司', '1415597359', '1415597359', '1', 'investment');
INSERT INTO wacai_company VALUES ('118', '交银施罗德基金管理有限公司', '1415597363', '1415597363', '1', 'investment');
INSERT INTO wacai_company VALUES ('119', '中信证券', '1415597370', '1415597370', '1', 'investment');
INSERT INTO wacai_company VALUES ('120', '海通证券', '1415597373', '1415597373', '1', 'investment');
INSERT INTO wacai_company VALUES ('121', '广发证券', '1415597377', '1415597377', '1', 'investment');
INSERT INTO wacai_company VALUES ('122', '招商证券', '1415597380', '1415597380', '1', 'investment');
INSERT INTO wacai_company VALUES ('123', '国泰君安', '1415597383', '1415597383', '1', 'investment');
INSERT INTO wacai_company VALUES ('124', '国信证券', '1415597386', '1415597386', '1', 'investment');
INSERT INTO wacai_company VALUES ('125', '华泰证券', '1415597389', '1415597389', '1', 'investment');
INSERT INTO wacai_company VALUES ('126', '银河证券', '1415597396', '1415597396', '1', 'investment');
INSERT INTO wacai_company VALUES ('127', '中信建投', '1415597400', '1415597400', '1', 'investment');
INSERT INTO wacai_company VALUES ('128', '嘉实基金管理有限公司', '1415597403', '1415597403', '1', 'investment');
INSERT INTO wacai_company VALUES ('129', '光大证券', '1415597406', '1415597406', '1', 'investment');
INSERT INTO wacai_company VALUES ('130', '易方达基金管理有限公司', '1415597410', '1415597410', '1', 'investment');
INSERT INTO wacai_company VALUES ('131', '南方基金管理有限公司', '1415597413', '1415597413', '1', 'investment');
INSERT INTO wacai_company VALUES ('132', '中银基金管理有限公司', '1415597418', '1415597418', '1', 'investment');
INSERT INTO wacai_company VALUES ('133', '广发基金管理有限公司', '1415597421', '1415597421', '1', 'investment');
INSERT INTO wacai_company VALUES ('134', '工银瑞信基金管理有限公司', '1415597424', '1415597424', '1', 'investment');
INSERT INTO wacai_company VALUES ('135', '博时基金管理有限公司', '1415597428', '1415597428', '1', 'investment');
INSERT INTO wacai_company VALUES ('136', '支付宝', '1415597456', '1415597456', '1', 'internet');
INSERT INTO wacai_company VALUES ('137', '财付通', '1415597461', '1415597461', '1', 'internet');

-- ----------------------------
-- Table structure for `wacai_crdact_info`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_crdact_info`;
CREATE TABLE `wacai_crdact_info` (
  `crdact_account_id` int(15) DEFAULT NULL COMMENT '对应的账户id',
  `crdact_debt` varchar(1000) DEFAULT NULL COMMENT '多个欠款（币种，金额）序列化',
  `crdact_credit_line` varchar(1000) DEFAULT NULL COMMENT '多个信用额度（币种，金额）序列化',
  `crdact_bill_date` int(15) DEFAULT NULL COMMENT '账单日',
  `crdact_repayment_date` int(15) DEFAULT NULL COMMENT '还款日',
  `crdact_remind_type` int(10) DEFAULT NULL COMMENT '还款提醒方式',
  `crdact_is_current_period` int(5) DEFAULT NULL COMMENT '账单日消费算在本期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_crdact_info
-- ----------------------------
INSERT INTO wacai_crdact_info VALUES ('9', 'a:1:{i:1;s:6:\"157.28\";}', 'a:1:{i:1;s:4:\"6000\";}', '15', '3', '3', '1');

-- ----------------------------
-- Table structure for `wacai_currency`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_currency`;
CREATE TABLE `wacai_currency` (
  `currency_id` int(15) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(100) DEFAULT NULL,
  `currency_addtime` int(15) DEFAULT NULL,
  `currency_edittime` int(15) DEFAULT NULL,
  `currency_rate` float(10,4) DEFAULT '1.0000',
  `currency_abbreviation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_currency
-- ----------------------------
INSERT INTO wacai_currency VALUES ('1', '人民币', '1415582439', '1415582439', '1.0000', 'CNY');
INSERT INTO wacai_currency VALUES ('3', '美元', '1415584046', '1415584046', '6.1200', 'USD');
INSERT INTO wacai_currency VALUES ('4', '港币', '1415584083', '1415584083', '0.7900', 'HKD');
INSERT INTO wacai_currency VALUES ('5', '欧元', '1415584091', '1415584091', '7.6400', 'ECU');
INSERT INTO wacai_currency VALUES ('6', '英镑', '1415584097', '1415584097', '7.6400', 'GBP');
INSERT INTO wacai_currency VALUES ('7', '新台币', '1415584102', '1415584102', '0.2001', 'NTD');
INSERT INTO wacai_currency VALUES ('8', '日元', '1415584108', '1415584108', '0.0500', 'JPY');
INSERT INTO wacai_currency VALUES ('9', '韩元', '1415584117', '1415584117', '0.0100', 'KOW');
INSERT INTO wacai_currency VALUES ('10', '马来币', '1415584123', '1415584123', '1.8300', 'MYR');
INSERT INTO wacai_currency VALUES ('11', '新西兰元', '1415584129', '1415584129', '4.7400', 'NZD');
INSERT INTO wacai_currency VALUES ('12', '阿根廷比索', '1415584135', '1415584135', '0.7245', 'ARA');
INSERT INTO wacai_currency VALUES ('13', '埃及镑', '1415584143', '1415584143', '0.8600', 'EGP');
INSERT INTO wacai_currency VALUES ('14', '澳大利亚元', '1415584149', '1415584149', '5.3000', 'AUD');
INSERT INTO wacai_currency VALUES ('15', '澳门元', '1415584155', '1415584155', '0.7700', 'MOP');
INSERT INTO wacai_currency VALUES ('16', '巴基斯坦卢比', '1415584161', '1415584161', '0.0600', 'PKR');
INSERT INTO wacai_currency VALUES ('17', '巴西雷亚尔', '1415584171', '1415584171', '2.3879', 'BRC');
INSERT INTO wacai_currency VALUES ('18', '朝鲜元', '1415584179', '1415584179', '0.0068', 'KPW');
INSERT INTO wacai_currency VALUES ('19', '德国马克', '1415584184', '1415584184', '3.9009', 'DEM');
INSERT INTO wacai_currency VALUES ('20', '俄罗斯卢布', '1415584190', '1415584190', '0.1300', 'RUR');
INSERT INTO wacai_currency VALUES ('21', '法郎', '1415584196', '1415584196', '1.1631', 'FRF');
INSERT INTO wacai_currency VALUES ('22', '俄罗斯卢布', '1415584204', '1415584204', '0.1400', 'RUR');
INSERT INTO wacai_currency VALUES ('23', '荷兰盾', '1415584210', '1415584210', '3.4620', 'NLG');
INSERT INTO wacai_currency VALUES ('24', '加拿大元', '1415584216', '1415584216', '5.4100', 'CAD');
INSERT INTO wacai_currency VALUES ('25', '马尔代夫卢非亚', '1415584221', '1415584221', '0.3986', 'MVR');
INSERT INTO wacai_currency VALUES ('26', '缅甸元', '1415584233', '1415584233', '0.0060', 'BUK');
INSERT INTO wacai_currency VALUES ('27', '葡萄牙埃斯库多', '1415584242', '1415584242', '0.0380', 'PTE');
INSERT INTO wacai_currency VALUES ('28', '沙特阿拉伯亚尔', '1415584248', '1415584248', '1.6320', 'SAR');
INSERT INTO wacai_currency VALUES ('29', '泰铢', '1415584252', '1415584252', '0.1900', 'THB');
INSERT INTO wacai_currency VALUES ('30', '委内瑞拉玻利瓦尔', '1415584258', '1415584258', '0.9743', 'VEB');
INSERT INTO wacai_currency VALUES ('31', '西班牙比塞塔', '1415584264', '1415584264', '0.0458', 'SPP');
INSERT INTO wacai_currency VALUES ('32', '希腊德拉马克', '1415584269', '1415584269', '0.0224', 'GRD');
INSERT INTO wacai_currency VALUES ('33', '新加坡元', '1415584277', '1415584277', '4.7400', 'SGD');
INSERT INTO wacai_currency VALUES ('34', '意大利里拉', '1415584284', '1415584284', '0.0039', 'ITL');
INSERT INTO wacai_currency VALUES ('35', '印度卢比', '1415584290', '1415584290', '0.1000', 'INR');
INSERT INTO wacai_currency VALUES ('36', '印尼盾', '1415584295', '1415584295', '0.0005', 'IDR');
INSERT INTO wacai_currency VALUES ('37', '越南盾', '1415584303', '1415584303', '0.0003', 'VND');
INSERT INTO wacai_currency VALUES ('38', '柬埔寨瑞尔', '1415584310', '1415584310', '0.0015', 'KHR');
INSERT INTO wacai_currency VALUES ('39', '瑞典克朗', '1415584316', '1415584316', '0.8278', 'SEK');
INSERT INTO wacai_currency VALUES ('40', '匈牙利福林', '1415584322', '1415584322', '0.0247', 'HUF');
INSERT INTO wacai_currency VALUES ('41', '阿联酋迪拉姆', '1415584329', '1415584329', '1.6671', 'DIR');
INSERT INTO wacai_currency VALUES ('42', '瑞士法郎', '1415584335', '1415584335', '6.3406', 'SWF');
INSERT INTO wacai_currency VALUES ('43', '西非法郎', '1415584342', '1415584342', '0.0116', 'FCFA');
INSERT INTO wacai_currency VALUES ('45', '比特币', '1416212899', '1416212899', '2307.0000', null);

-- ----------------------------
-- Table structure for `wacai_income_category`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_income_category`;
CREATE TABLE `wacai_income_category` (
  `income_catid` int(15) NOT NULL AUTO_INCREMENT,
  `income_catname` varchar(30) DEFAULT NULL,
  `income_addtime` int(15) DEFAULT NULL,
  `income_edittime` int(15) DEFAULT NULL,
  `income_user_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`income_catid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_income_category
-- ----------------------------
INSERT INTO wacai_income_category VALUES ('1', '工资薪水', '1415239706', '1415239706', '1');
INSERT INTO wacai_income_category VALUES ('2', '奖金', '1415239706', '1415239706', '1');
INSERT INTO wacai_income_category VALUES ('3', '兼职外快', '1415239848', '1415239848', '1');
INSERT INTO wacai_income_category VALUES ('4', '福利补贴', '1415239864', '1415239864', '1');
INSERT INTO wacai_income_category VALUES ('5', '生活费', '1415239913', '1415239913', '1');
INSERT INTO wacai_income_category VALUES ('6', '公积金', '1415239920', '1415239920', '1');
INSERT INTO wacai_income_category VALUES ('7', '退款返款', '1415239925', '1415239925', '1');
INSERT INTO wacai_income_category VALUES ('8', '礼金', '1415239930', '1415239930', '1');
INSERT INTO wacai_income_category VALUES ('9', '红包', '1415239935', '1415239935', '1');
INSERT INTO wacai_income_category VALUES ('10', '赔付款', '1415239940', '1415239940', '1');
INSERT INTO wacai_income_category VALUES ('11', '漏记款', '1415239945', '1415239945', '1');
INSERT INTO wacai_income_category VALUES ('12', '报销款', '1415239951', '1415239951', '1');
INSERT INTO wacai_income_category VALUES ('13', '利息', '1415239956', '1415239956', '1');
INSERT INTO wacai_income_category VALUES ('14', '余额宝', '1415239960', '1415239960', '1');
INSERT INTO wacai_income_category VALUES ('15', '基金', '1415239965', '1415239965', '1');
INSERT INTO wacai_income_category VALUES ('16', '分红', '1415239970', '1415239970', '1');
INSERT INTO wacai_income_category VALUES ('17', '租金', '1415239974', '1415239974', '1');
INSERT INTO wacai_income_category VALUES ('18', '股票', '1415239979', '1415239979', '1');
INSERT INTO wacai_income_category VALUES ('19', '销售款', '1415239984', '1415239984', '1');
INSERT INTO wacai_income_category VALUES ('20', '应收款', '1415239992', '1415239992', '1');
INSERT INTO wacai_income_category VALUES ('21', '营业收入', '1415240004', '1415240004', '1');
INSERT INTO wacai_income_category VALUES ('22', '工程款', '1415240011', '1415240011', '1');
INSERT INTO wacai_income_category VALUES ('23', '其他', '1415240018', '1415240018', '1');

-- ----------------------------
-- Table structure for `wacai_income_payer`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_income_payer`;
CREATE TABLE `wacai_income_payer` (
  `income_payer_id` int(15) NOT NULL,
  `income_payer_name` varchar(100) DEFAULT NULL,
  `income_payer_user_id` int(15) DEFAULT NULL,
  `income_payer_addtime` int(15) DEFAULT NULL,
  `income_payer_edittime` int(15) DEFAULT NULL,
  PRIMARY KEY (`income_payer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_income_payer
-- ----------------------------

-- ----------------------------
-- Table structure for `wacai_income_record`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_income_record`;
CREATE TABLE `wacai_income_record` (
  `income_id` int(15) NOT NULL AUTO_INCREMENT,
  `income_money` float(15,2) DEFAULT NULL,
  `income_catid` int(15) DEFAULT NULL,
  `income_payer_id` int(15) DEFAULT NULL,
  `income_account_id` int(15) DEFAULT NULL,
  `income_time` int(15) DEFAULT NULL,
  `income_project_id` int(15) DEFAULT NULL,
  `income_member_id` int(15) DEFAULT NULL,
  `income_remark` varchar(400) DEFAULT NULL,
  `income_addtime` int(15) DEFAULT NULL,
  `income_edittime` int(15) DEFAULT NULL,
  `income_user_id` int(15) DEFAULT NULL,
  `income_currency_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`income_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_income_record
-- ----------------------------

-- ----------------------------
-- Table structure for `wacai_loaner`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_loaner`;
CREATE TABLE `wacai_loaner` (
  `loaner_id` int(15) NOT NULL AUTO_INCREMENT,
  `loaner_name` varchar(150) DEFAULT NULL,
  `loaner_user_id` int(15) DEFAULT NULL,
  `loaner_addtime` int(15) DEFAULT NULL,
  `loaner_edittime` int(15) DEFAULT NULL,
  PRIMARY KEY (`loaner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_loaner
-- ----------------------------

-- ----------------------------
-- Table structure for `wacai_loan_record`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_loan_record`;
CREATE TABLE `wacai_loan_record` (
  `loan_id` int(15) NOT NULL AUTO_INCREMENT,
  `loan_money` float(15,2) DEFAULT NULL,
  `loan_catid` int(15) DEFAULT NULL,
  `loan_loaner_id` int(15) DEFAULT NULL,
  `loan_account_id` int(15) DEFAULT NULL,
  `loan_time` int(15) DEFAULT NULL,
  `loan_repayment_id` int(15) DEFAULT NULL,
  `loan_remind_is` int(2) DEFAULT NULL,
  `loan_remark` varchar(400) DEFAULT NULL,
  `loan_addtime` int(15) DEFAULT NULL,
  `loan_edittime` int(15) DEFAULT NULL,
  `loan_user_id` int(15) DEFAULT NULL,
  `loan_currency` int(15) DEFAULT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_loan_record
-- ----------------------------

-- ----------------------------
-- Table structure for `wacai_member`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_member`;
CREATE TABLE `wacai_member` (
  `member_id` int(15) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(150) DEFAULT NULL,
  `member_user_id` int(15) DEFAULT NULL,
  `member_addtime` int(15) DEFAULT NULL,
  `member_edittime` int(15) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_member
-- ----------------------------
INSERT INTO wacai_member VALUES ('2', '自己', '1', '1415243329', '1415243329');
INSERT INTO wacai_member VALUES ('3', '配偶', '1', '1415243336', '1415243336');
INSERT INTO wacai_member VALUES ('4', '孩子', '1', '1415243344', '1415243344');
INSERT INTO wacai_member VALUES ('5', '父母', '1', '1415243350', '1415243350');
INSERT INTO wacai_member VALUES ('6', '朋友', '1', '1415243355', '1415243355');
INSERT INTO wacai_member VALUES ('7', '家庭公用', '1', '1415243360', '1415243360');

-- ----------------------------
-- Table structure for `wacai_pay_category`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_pay_category`;
CREATE TABLE `wacai_pay_category` (
  `pay_catid` int(15) NOT NULL AUTO_INCREMENT,
  `pay_catname` varchar(30) DEFAULT NULL,
  `pay_parent_id` int(15) DEFAULT NULL,
  `pay_parent_allid` int(15) DEFAULT NULL,
  `pay_addtime` int(15) DEFAULT NULL,
  `pay_edittime` int(15) DEFAULT NULL,
  `pay_user_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`pay_catid`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_pay_category
-- ----------------------------
INSERT INTO wacai_pay_category VALUES ('1', '餐饮', '0', '0', '1415163540', '1415163540', '1');
INSERT INTO wacai_pay_category VALUES ('2', '交通', '0', '0', '1415163548', '1415163548', '1');
INSERT INTO wacai_pay_category VALUES ('3', '购物', '0', '0', '1415163562', '1415163562', '1');
INSERT INTO wacai_pay_category VALUES ('4', '娱乐', '0', '0', '1415163569', '1415163569', '1');
INSERT INTO wacai_pay_category VALUES ('5', '医教', '0', '0', '1415163575', '1415163575', '1');
INSERT INTO wacai_pay_category VALUES ('6', '居家', '0', '0', '1415163581', '1415163581', '1');
INSERT INTO wacai_pay_category VALUES ('7', '投资', '0', '0', '1415163586', '1415163586', '1');
INSERT INTO wacai_pay_category VALUES ('8', '人情', '0', '0', '1415163592', '1415163592', '1');
INSERT INTO wacai_pay_category VALUES ('9', '生意', '0', '0', '1415163597', '1415163597', '1');
INSERT INTO wacai_pay_category VALUES ('15', '早餐', '1', '1', '1415163625', '1415163625', '1');
INSERT INTO wacai_pay_category VALUES ('16', '午餐', '1', '1', '1415163632', '1415163632', '1');
INSERT INTO wacai_pay_category VALUES ('17', '晚餐 ', '1', '1', '1415163639', '1415163639', '1');
INSERT INTO wacai_pay_category VALUES ('18', '饮料水果 ', '1', '1', '1415163660', '1415163660', '1');
INSERT INTO wacai_pay_category VALUES ('19', '零食', '1', '1', '1415163668', '1415163668', '1');
INSERT INTO wacai_pay_category VALUES ('20', '买菜原料', '1', '1', '1415163686', '1415163686', '1');
INSERT INTO wacai_pay_category VALUES ('21', '夜宵', '1', '1', '1415163696', '1415163696', '1');
INSERT INTO wacai_pay_category VALUES ('22', '油盐酱醋', '1', '1', '1415163707', '1415163707', '1');
INSERT INTO wacai_pay_category VALUES ('23', '餐饮其他', '1', '1', '1415163715', '1415163715', '1');
INSERT INTO wacai_pay_category VALUES ('24', '打车', '2', '2', '1415163739', '1415163739', '1');
INSERT INTO wacai_pay_category VALUES ('25', '公交', '2', '2', '1415163745', '1415163745', '1');
INSERT INTO wacai_pay_category VALUES ('26', '加油', '2', '2', '1415163752', '1415163752', '1');
INSERT INTO wacai_pay_category VALUES ('27', '停车费', '2', '2', '1415163758', '1415163758', '1');
INSERT INTO wacai_pay_category VALUES ('28', '地铁', '2', '2', '1415163766', '1415163766', '1');
INSERT INTO wacai_pay_category VALUES ('29', '火车', '2', '2', '1415163774', '1415163774', '1');
INSERT INTO wacai_pay_category VALUES ('30', '长途汽车', '2', '2', '1415163781', '1415163781', '1');
INSERT INTO wacai_pay_category VALUES ('31', '过路过桥', '2', '2', '1415163787', '1415163787', '1');
INSERT INTO wacai_pay_category VALUES ('32', '保养维修', '2', '2', '1415163793', '1415163793', '1');
INSERT INTO wacai_pay_category VALUES ('33', '飞机', '2', '2', '1415163799', '1415163799', '1');
INSERT INTO wacai_pay_category VALUES ('34', '车款车贷', '2', '2', '1415163804', '1415163804', '1');
INSERT INTO wacai_pay_category VALUES ('35', '罚款赔偿', '2', '2', '1415163810', '1415163810', '1');
INSERT INTO wacai_pay_category VALUES ('36', '车险', '2', '2', '1415163816', '1415163816', '1');
INSERT INTO wacai_pay_category VALUES ('37', '自行车', '2', '2', '1415163821', '1415163821', '1');
INSERT INTO wacai_pay_category VALUES ('38', '船舶', '2', '2', '1415163827', '1415163827', '1');
INSERT INTO wacai_pay_category VALUES ('39', '驾照费用', '2', '2', '1415163832', '1415163832', '1');
INSERT INTO wacai_pay_category VALUES ('40', '交通其他', '2', '2', '1415163838', '1415163838', '1');
INSERT INTO wacai_pay_category VALUES ('41', '服饰鞋包', '3', '3', '1415163845', '1415163845', '1');
INSERT INTO wacai_pay_category VALUES ('42', '家居百货', '3', '3', '1415163856', '1415163856', '1');
INSERT INTO wacai_pay_category VALUES ('43', '烟酒', '3', '3', '1415164298', '1415164298', '1');
INSERT INTO wacai_pay_category VALUES ('44', '化妆护肤', '3', '3', '1415164306', '1415164306', '1');
INSERT INTO wacai_pay_category VALUES ('45', '电子数码', '3', '3', '1415164310', '1415164310', '1');
INSERT INTO wacai_pay_category VALUES ('46', '宝宝用品', '3', '3', '1415164315', '1415164315', '1');
INSERT INTO wacai_pay_category VALUES ('47', '家具家纺', '3', '3', '1415164320', '1415164320', '1');
INSERT INTO wacai_pay_category VALUES ('48', '报刊书籍', '3', '3', '1415164324', '1415164324', '1');
INSERT INTO wacai_pay_category VALUES ('49', '电器', '3', '3', '1415164329', '1415164329', '1');
INSERT INTO wacai_pay_category VALUES ('50', '珠宝首饰', '3', '3', '1415164334', '1415164334', '1');
INSERT INTO wacai_pay_category VALUES ('51', '文具玩具', '3', '3', '1415164338', '1415164338', '1');
INSERT INTO wacai_pay_category VALUES ('52', '保健用品', '3', '3', '1415164342', '1415164342', '1');
INSERT INTO wacai_pay_category VALUES ('53', '摄影文印', '3', '3', '1415164348', '1415164348', '1');
INSERT INTO wacai_pay_category VALUES ('54', '购物其他', '3', '3', '1415164353', '1415164353', '1');
INSERT INTO wacai_pay_category VALUES ('55', '旅游度假', '4', '4', '1415164369', '1415164369', '1');
INSERT INTO wacai_pay_category VALUES ('56', '网游电玩', '4', '4', '1415164373', '1415164373', '1');
INSERT INTO wacai_pay_category VALUES ('57', '电影', '4', '4', '1415164378', '1415164378', '1');
INSERT INTO wacai_pay_category VALUES ('58', '洗浴足浴', '4', '4', '1415164383', '1415164383', '1');
INSERT INTO wacai_pay_category VALUES ('59', '运动健身', '4', '4', '1415164388', '1415164388', '1');
INSERT INTO wacai_pay_category VALUES ('60', '卡拉OK', '4', '4', '1415164394', '1415164394', '1');
INSERT INTO wacai_pay_category VALUES ('61', '茶酒咖啡', '4', '4', '1415164398', '1415164398', '1');
INSERT INTO wacai_pay_category VALUES ('62', '歌舞演出', '4', '4', '1415164403', '1415164403', '1');
INSERT INTO wacai_pay_category VALUES ('63', '电视', '4', '4', '1415164408', '1415164408', '1');
INSERT INTO wacai_pay_category VALUES ('64', '娱乐其他', '4', '4', '1415164412', '1415164412', '1');
INSERT INTO wacai_pay_category VALUES ('65', '花鸟宠物', '4', '4', '1415164417', '1415164417', '1');
INSERT INTO wacai_pay_category VALUES ('66', '麻将棋牌', '4', '4', '1415164422', '1415164422', '1');
INSERT INTO wacai_pay_category VALUES ('67', '聚会玩乐', '4', '4', '1415164426', '1415164426', '1');
INSERT INTO wacai_pay_category VALUES ('68', '医疗药品', '5', '5', '1415164438', '1415164438', '1');
INSERT INTO wacai_pay_category VALUES ('69', '挂号门诊', '5', '5', '1415164443', '1415164443', '1');
INSERT INTO wacai_pay_category VALUES ('70', '养生保健', '5', '5', '1415164447', '1415164447', '1');
INSERT INTO wacai_pay_category VALUES ('71', '住院费', '5', '5', '1415164452', '1415164452', '1');
INSERT INTO wacai_pay_category VALUES ('72', '养老院', '5', '5', '1415164457', '1415164457', '1');
INSERT INTO wacai_pay_category VALUES ('73', '学杂教材', '5', '5', '1415164462', '1415164462', '1');
INSERT INTO wacai_pay_category VALUES ('74', '培训考试', '5', '5', '1415164467', '1415164467', '1');
INSERT INTO wacai_pay_category VALUES ('75', '家教补习', '5', '5', '1415164472', '1415164472', '1');
INSERT INTO wacai_pay_category VALUES ('76', '学费', '5', '5', '1415164476', '1415164476', '1');
INSERT INTO wacai_pay_category VALUES ('77', '幼儿教育', '5', '5', '1415164481', '1415164481', '1');
INSERT INTO wacai_pay_category VALUES ('78', '出国留学', '5', '5', '1415164485', '1415164485', '1');
INSERT INTO wacai_pay_category VALUES ('79', '助学贷款', '5', '5', '1415164489', '1415164489', '1');
INSERT INTO wacai_pay_category VALUES ('80', '医教其他', '5', '5', '1415164494', '1415164494', '1');
INSERT INTO wacai_pay_category VALUES ('81', '手机电话', '6', '6', '1415164511', '1415164511', '1');
INSERT INTO wacai_pay_category VALUES ('82', '房款房贷', '6', '6', '1415164516', '1415164516', '1');
INSERT INTO wacai_pay_category VALUES ('83', '水电燃气', '6', '6', '1415164521', '1415164521', '1');
INSERT INTO wacai_pay_category VALUES ('84', '美发美容', '6', '6', '1415164525', '1415164525', '1');
INSERT INTO wacai_pay_category VALUES ('85', '住宿房租', '6', '6', '1415164530', '1415164530', '1');
INSERT INTO wacai_pay_category VALUES ('86', '材料建材', '6', '6', '1415164534', '1415164534', '1');
INSERT INTO wacai_pay_category VALUES ('87', '电脑宽带', '6', '6', '1415164538', '1415164538', '1');
INSERT INTO wacai_pay_category VALUES ('88', '快递邮政', '6', '6', '1415164543', '1415164543', '1');
INSERT INTO wacai_pay_category VALUES ('89', '物业', '6', '6', '1415164548', '1415164548', '1');
INSERT INTO wacai_pay_category VALUES ('90', '家政服务', '6', '6', '1415164552', '1415164552', '1');
INSERT INTO wacai_pay_category VALUES ('91', '生活费', '6', '6', '1415164556', '1415164556', '1');
INSERT INTO wacai_pay_category VALUES ('92', '婚庆摄影', '6', '6', '1415164560', '1415164560', '1');
INSERT INTO wacai_pay_category VALUES ('93', '漏记款', '6', '6', '1415164566', '1415164566', '1');
INSERT INTO wacai_pay_category VALUES ('94', '保险费', '6', '6', '1415164570', '1415164570', '1');
INSERT INTO wacai_pay_category VALUES ('95', '消费贷款', '6', '6', '1415164575', '1415164575', '1');
INSERT INTO wacai_pay_category VALUES ('96', '税费手续费', '6', '6', '1415164579', '1415164579', '1');
INSERT INTO wacai_pay_category VALUES ('97', '居家其他', '6', '6', '1415164584', '1415164584', '1');
INSERT INTO wacai_pay_category VALUES ('98', '股票', '7', '7', '1415164597', '1415164597', '1');
INSERT INTO wacai_pay_category VALUES ('99', '基金', '7', '7', '1415164601', '1415164601', '1');
INSERT INTO wacai_pay_category VALUES ('100', '理财产品', '7', '7', '1415164604', '1415164604', '1');
INSERT INTO wacai_pay_category VALUES ('101', '余额宝', '7', '7', '1415164609', '1415164609', '1');
INSERT INTO wacai_pay_category VALUES ('102', '银行存款', '7', '7', '1415164613', '1415164613', '1');
INSERT INTO wacai_pay_category VALUES ('103', '保险', '7', '7', '1415164618', '1415164618', '1');
INSERT INTO wacai_pay_category VALUES ('104', 'P2P', '7', '7', '1415164625', '1415164625', '1');
INSERT INTO wacai_pay_category VALUES ('105', '证券期货', '7', '7', '1415164630', '1415164630', '1');
INSERT INTO wacai_pay_category VALUES ('106', '出资', '7', '7', '1415164634', '1415164634', '1');
INSERT INTO wacai_pay_category VALUES ('107', '贵金属', '7', '7', '1415164638', '1415164638', '1');
INSERT INTO wacai_pay_category VALUES ('108', '投资贷款', '7', '7', '1415164642', '1415164642', '1');
INSERT INTO wacai_pay_category VALUES ('109', '外汇', '7', '7', '1415164646', '1415164646', '1');
INSERT INTO wacai_pay_category VALUES ('110', '收藏品', '7', '7', '1415164651', '1415164651', '1');
INSERT INTO wacai_pay_category VALUES ('111', '利息支出', '7', '7', '1415164655', '1415164655', '1');
INSERT INTO wacai_pay_category VALUES ('112', '投资其他', '7', '7', '1415164659', '1415164659', '1');
INSERT INTO wacai_pay_category VALUES ('113', '礼金红包', '8', '8', '1415164670', '1415164670', '1');
INSERT INTO wacai_pay_category VALUES ('114', '物品', '8', '8', '1415164675', '1415164675', '1');
INSERT INTO wacai_pay_category VALUES ('115', '请客', '8', '8', '1415164681', '1415164681', '1');
INSERT INTO wacai_pay_category VALUES ('116', '代付款', '8', '8', '1415164685', '1415164685', '1');
INSERT INTO wacai_pay_category VALUES ('117', '孝敬', '8', '8', '1415164689', '1415164689', '1');
INSERT INTO wacai_pay_category VALUES ('118', '给予', '8', '8', '1415164696', '1415164696', '1');
INSERT INTO wacai_pay_category VALUES ('119', '人情其他', '8', '8', '1415164700', '1415164700', '1');
INSERT INTO wacai_pay_category VALUES ('120', '进货采购', '9', '9', '1415164712', '1415164712', '1');
INSERT INTO wacai_pay_category VALUES ('121', '人工支出', '9', '9', '1415164716', '1415164716', '1');
INSERT INTO wacai_pay_category VALUES ('122', '材料辅料', '9', '9', '1415164720', '1415164720', '1');
INSERT INTO wacai_pay_category VALUES ('123', '工程付款', '9', '9', '1415164725', '1415164725', '1');

-- ----------------------------
-- Table structure for `wacai_pay_category_copy`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_pay_category_copy`;
CREATE TABLE `wacai_pay_category_copy` (
  `pay_catid` int(15) NOT NULL AUTO_INCREMENT,
  `pay_catname` varchar(30) DEFAULT NULL,
  `pay_parent_id` int(15) DEFAULT NULL,
  `pay_parent_allid` int(15) DEFAULT NULL,
  `pay_addtime` int(15) DEFAULT NULL,
  `pay_edittime` int(15) DEFAULT NULL,
  `pay_user_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`pay_catid`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_pay_category_copy
-- ----------------------------
INSERT INTO wacai_pay_category_copy VALUES ('1', '餐饮', '0', '0', '1415163540', '1415163540', '1');
INSERT INTO wacai_pay_category_copy VALUES ('2', '交通', '0', '0', '1415163548', '1415163548', '1');
INSERT INTO wacai_pay_category_copy VALUES ('3', '购物', '0', '0', '1415163562', '1415163562', '1');
INSERT INTO wacai_pay_category_copy VALUES ('4', '娱乐', '0', '0', '1415163569', '1415163569', '1');
INSERT INTO wacai_pay_category_copy VALUES ('5', '医教', '0', '0', '1415163575', '1415163575', '1');
INSERT INTO wacai_pay_category_copy VALUES ('6', '居家', '0', '0', '1415163581', '1415163581', '1');
INSERT INTO wacai_pay_category_copy VALUES ('7', '投资', '0', '0', '1415163586', '1415163586', '1');
INSERT INTO wacai_pay_category_copy VALUES ('8', '人情', '0', '0', '1415163592', '1415163592', '1');
INSERT INTO wacai_pay_category_copy VALUES ('9', '生意', '0', '0', '1415163597', '1415163597', '1');
INSERT INTO wacai_pay_category_copy VALUES ('15', '早餐', '1', '1', '1415163625', '1415163625', '1');
INSERT INTO wacai_pay_category_copy VALUES ('16', '午餐', '1', '1', '1415163632', '1415163632', '1');
INSERT INTO wacai_pay_category_copy VALUES ('17', '晚餐 ', '1', '1', '1415163639', '1415163639', '1');
INSERT INTO wacai_pay_category_copy VALUES ('18', '饮料水果 ', '1', '1', '1415163660', '1415163660', '1');
INSERT INTO wacai_pay_category_copy VALUES ('19', '零食', '1', '1', '1415163668', '1415163668', '1');
INSERT INTO wacai_pay_category_copy VALUES ('20', '买菜原料', '1', '1', '1415163686', '1415163686', '1');
INSERT INTO wacai_pay_category_copy VALUES ('21', '夜宵', '1', '1', '1415163696', '1415163696', '1');
INSERT INTO wacai_pay_category_copy VALUES ('22', '油盐酱醋', '1', '1', '1415163707', '1415163707', '1');
INSERT INTO wacai_pay_category_copy VALUES ('23', '餐饮其他', '1', '1', '1415163715', '1415163715', '1');
INSERT INTO wacai_pay_category_copy VALUES ('24', '打车', '2', '2', '1415163739', '1415163739', '1');
INSERT INTO wacai_pay_category_copy VALUES ('25', '公交', '2', '2', '1415163745', '1415163745', '1');
INSERT INTO wacai_pay_category_copy VALUES ('26', '加油', '2', '2', '1415163752', '1415163752', '1');
INSERT INTO wacai_pay_category_copy VALUES ('27', '停车费', '2', '2', '1415163758', '1415163758', '1');
INSERT INTO wacai_pay_category_copy VALUES ('28', '地铁', '2', '2', '1415163766', '1415163766', '1');
INSERT INTO wacai_pay_category_copy VALUES ('29', '火车', '2', '2', '1415163774', '1415163774', '1');
INSERT INTO wacai_pay_category_copy VALUES ('30', '长途汽车', '2', '2', '1415163781', '1415163781', '1');
INSERT INTO wacai_pay_category_copy VALUES ('31', '过路过桥', '2', '2', '1415163787', '1415163787', '1');
INSERT INTO wacai_pay_category_copy VALUES ('32', '保养维修', '2', '2', '1415163793', '1415163793', '1');
INSERT INTO wacai_pay_category_copy VALUES ('33', '飞机', '2', '2', '1415163799', '1415163799', '1');
INSERT INTO wacai_pay_category_copy VALUES ('34', '车款车贷', '2', '2', '1415163804', '1415163804', '1');
INSERT INTO wacai_pay_category_copy VALUES ('35', '罚款赔偿', '2', '2', '1415163810', '1415163810', '1');
INSERT INTO wacai_pay_category_copy VALUES ('36', '车险', '2', '2', '1415163816', '1415163816', '1');
INSERT INTO wacai_pay_category_copy VALUES ('37', '自行车', '2', '2', '1415163821', '1415163821', '1');
INSERT INTO wacai_pay_category_copy VALUES ('38', '船舶', '2', '2', '1415163827', '1415163827', '1');
INSERT INTO wacai_pay_category_copy VALUES ('39', '驾照费用', '2', '2', '1415163832', '1415163832', '1');
INSERT INTO wacai_pay_category_copy VALUES ('40', '交通其他', '2', '2', '1415163838', '1415163838', '1');
INSERT INTO wacai_pay_category_copy VALUES ('41', '服饰鞋包', '3', '3', '1415163845', '1415163845', '1');
INSERT INTO wacai_pay_category_copy VALUES ('42', '家居百货', '3', '3', '1415163856', '1415163856', '1');
INSERT INTO wacai_pay_category_copy VALUES ('43', '烟酒', '3', '3', '1415164298', '1415164298', '1');
INSERT INTO wacai_pay_category_copy VALUES ('44', '化妆护肤', '3', '3', '1415164306', '1415164306', '1');
INSERT INTO wacai_pay_category_copy VALUES ('45', '电子数码', '3', '3', '1415164310', '1415164310', '1');
INSERT INTO wacai_pay_category_copy VALUES ('46', '宝宝用品', '3', '3', '1415164315', '1415164315', '1');
INSERT INTO wacai_pay_category_copy VALUES ('47', '家具家纺', '3', '3', '1415164320', '1415164320', '1');
INSERT INTO wacai_pay_category_copy VALUES ('48', '报刊书籍', '3', '3', '1415164324', '1415164324', '1');
INSERT INTO wacai_pay_category_copy VALUES ('49', '电器', '3', '3', '1415164329', '1415164329', '1');
INSERT INTO wacai_pay_category_copy VALUES ('50', '珠宝首饰', '3', '3', '1415164334', '1415164334', '1');
INSERT INTO wacai_pay_category_copy VALUES ('51', '文具玩具', '3', '3', '1415164338', '1415164338', '1');
INSERT INTO wacai_pay_category_copy VALUES ('52', '保健用品', '3', '3', '1415164342', '1415164342', '1');
INSERT INTO wacai_pay_category_copy VALUES ('53', '摄影文印', '3', '3', '1415164348', '1415164348', '1');
INSERT INTO wacai_pay_category_copy VALUES ('54', '购物其他', '3', '3', '1415164353', '1415164353', '1');
INSERT INTO wacai_pay_category_copy VALUES ('55', '旅游度假', '4', '4', '1415164369', '1415164369', '1');
INSERT INTO wacai_pay_category_copy VALUES ('56', '网游电玩', '4', '4', '1415164373', '1415164373', '1');
INSERT INTO wacai_pay_category_copy VALUES ('57', '电影', '4', '4', '1415164378', '1415164378', '1');
INSERT INTO wacai_pay_category_copy VALUES ('58', '洗浴足浴', '4', '4', '1415164383', '1415164383', '1');
INSERT INTO wacai_pay_category_copy VALUES ('59', '运动健身', '4', '4', '1415164388', '1415164388', '1');
INSERT INTO wacai_pay_category_copy VALUES ('60', '卡拉OK', '4', '4', '1415164394', '1415164394', '1');
INSERT INTO wacai_pay_category_copy VALUES ('61', '茶酒咖啡', '4', '4', '1415164398', '1415164398', '1');
INSERT INTO wacai_pay_category_copy VALUES ('62', '歌舞演出', '4', '4', '1415164403', '1415164403', '1');
INSERT INTO wacai_pay_category_copy VALUES ('63', '电视', '4', '4', '1415164408', '1415164408', '1');
INSERT INTO wacai_pay_category_copy VALUES ('64', '娱乐其他', '4', '4', '1415164412', '1415164412', '1');
INSERT INTO wacai_pay_category_copy VALUES ('65', '花鸟宠物', '4', '4', '1415164417', '1415164417', '1');
INSERT INTO wacai_pay_category_copy VALUES ('66', '麻将棋牌', '4', '4', '1415164422', '1415164422', '1');
INSERT INTO wacai_pay_category_copy VALUES ('67', '聚会玩乐', '4', '4', '1415164426', '1415164426', '1');
INSERT INTO wacai_pay_category_copy VALUES ('68', '医疗药品', '5', '5', '1415164438', '1415164438', '1');
INSERT INTO wacai_pay_category_copy VALUES ('69', '挂号门诊', '5', '5', '1415164443', '1415164443', '1');
INSERT INTO wacai_pay_category_copy VALUES ('70', '养生保健', '5', '5', '1415164447', '1415164447', '1');
INSERT INTO wacai_pay_category_copy VALUES ('71', '住院费', '5', '5', '1415164452', '1415164452', '1');
INSERT INTO wacai_pay_category_copy VALUES ('72', '养老院', '5', '5', '1415164457', '1415164457', '1');
INSERT INTO wacai_pay_category_copy VALUES ('73', '学杂教材', '5', '5', '1415164462', '1415164462', '1');
INSERT INTO wacai_pay_category_copy VALUES ('74', '培训考试', '5', '5', '1415164467', '1415164467', '1');
INSERT INTO wacai_pay_category_copy VALUES ('75', '家教补习', '5', '5', '1415164472', '1415164472', '1');
INSERT INTO wacai_pay_category_copy VALUES ('76', '学费', '5', '5', '1415164476', '1415164476', '1');
INSERT INTO wacai_pay_category_copy VALUES ('77', '幼儿教育', '5', '5', '1415164481', '1415164481', '1');
INSERT INTO wacai_pay_category_copy VALUES ('78', '出国留学', '5', '5', '1415164485', '1415164485', '1');
INSERT INTO wacai_pay_category_copy VALUES ('79', '助学贷款', '5', '5', '1415164489', '1415164489', '1');
INSERT INTO wacai_pay_category_copy VALUES ('80', '医教其他', '5', '5', '1415164494', '1415164494', '1');
INSERT INTO wacai_pay_category_copy VALUES ('81', '手机电话', '6', '6', '1415164511', '1415164511', '1');
INSERT INTO wacai_pay_category_copy VALUES ('82', '房款房贷', '6', '6', '1415164516', '1415164516', '1');
INSERT INTO wacai_pay_category_copy VALUES ('83', '水电燃气', '6', '6', '1415164521', '1415164521', '1');
INSERT INTO wacai_pay_category_copy VALUES ('84', '美发美容', '6', '6', '1415164525', '1415164525', '1');
INSERT INTO wacai_pay_category_copy VALUES ('85', '住宿房租', '6', '6', '1415164530', '1415164530', '1');
INSERT INTO wacai_pay_category_copy VALUES ('86', '材料建材', '6', '6', '1415164534', '1415164534', '1');
INSERT INTO wacai_pay_category_copy VALUES ('87', '电脑宽带', '6', '6', '1415164538', '1415164538', '1');
INSERT INTO wacai_pay_category_copy VALUES ('88', '快递邮政', '6', '6', '1415164543', '1415164543', '1');
INSERT INTO wacai_pay_category_copy VALUES ('89', '物业', '6', '6', '1415164548', '1415164548', '1');
INSERT INTO wacai_pay_category_copy VALUES ('90', '家政服务', '6', '6', '1415164552', '1415164552', '1');
INSERT INTO wacai_pay_category_copy VALUES ('91', '生活费', '6', '6', '1415164556', '1415164556', '1');
INSERT INTO wacai_pay_category_copy VALUES ('92', '婚庆摄影', '6', '6', '1415164560', '1415164560', '1');
INSERT INTO wacai_pay_category_copy VALUES ('93', '漏记款', '6', '6', '1415164566', '1415164566', '1');
INSERT INTO wacai_pay_category_copy VALUES ('94', '保险费', '6', '6', '1415164570', '1415164570', '1');
INSERT INTO wacai_pay_category_copy VALUES ('95', '消费贷款', '6', '6', '1415164575', '1415164575', '1');
INSERT INTO wacai_pay_category_copy VALUES ('96', '税费手续费', '6', '6', '1415164579', '1415164579', '1');
INSERT INTO wacai_pay_category_copy VALUES ('97', '居家其他', '6', '6', '1415164584', '1415164584', '1');
INSERT INTO wacai_pay_category_copy VALUES ('98', '股票', '7', '7', '1415164597', '1415164597', '1');
INSERT INTO wacai_pay_category_copy VALUES ('99', '基金', '7', '7', '1415164601', '1415164601', '1');
INSERT INTO wacai_pay_category_copy VALUES ('100', '理财产品', '7', '7', '1415164604', '1415164604', '1');
INSERT INTO wacai_pay_category_copy VALUES ('101', '余额宝', '7', '7', '1415164609', '1415164609', '1');
INSERT INTO wacai_pay_category_copy VALUES ('102', '银行存款', '7', '7', '1415164613', '1415164613', '1');
INSERT INTO wacai_pay_category_copy VALUES ('103', '保险', '7', '7', '1415164618', '1415164618', '1');
INSERT INTO wacai_pay_category_copy VALUES ('104', 'P2P', '7', '7', '1415164625', '1415164625', '1');
INSERT INTO wacai_pay_category_copy VALUES ('105', '证券期货', '7', '7', '1415164630', '1415164630', '1');
INSERT INTO wacai_pay_category_copy VALUES ('106', '出资', '7', '7', '1415164634', '1415164634', '1');
INSERT INTO wacai_pay_category_copy VALUES ('107', '贵金属', '7', '7', '1415164638', '1415164638', '1');
INSERT INTO wacai_pay_category_copy VALUES ('108', '投资贷款', '7', '7', '1415164642', '1415164642', '1');
INSERT INTO wacai_pay_category_copy VALUES ('109', '外汇', '7', '7', '1415164646', '1415164646', '1');
INSERT INTO wacai_pay_category_copy VALUES ('110', '收藏品', '7', '7', '1415164651', '1415164651', '1');
INSERT INTO wacai_pay_category_copy VALUES ('111', '利息支出', '7', '7', '1415164655', '1415164655', '1');
INSERT INTO wacai_pay_category_copy VALUES ('112', '投资其他', '7', '7', '1415164659', '1415164659', '1');
INSERT INTO wacai_pay_category_copy VALUES ('113', '礼金红包', '8', '8', '1415164670', '1415164670', '1');
INSERT INTO wacai_pay_category_copy VALUES ('114', '物品', '8', '8', '1415164675', '1415164675', '1');
INSERT INTO wacai_pay_category_copy VALUES ('115', '请客', '8', '8', '1415164681', '1415164681', '1');
INSERT INTO wacai_pay_category_copy VALUES ('116', '代付款', '8', '8', '1415164685', '1415164685', '1');
INSERT INTO wacai_pay_category_copy VALUES ('117', '孝敬', '8', '8', '1415164689', '1415164689', '1');
INSERT INTO wacai_pay_category_copy VALUES ('118', '给予', '8', '8', '1415164696', '1415164696', '1');
INSERT INTO wacai_pay_category_copy VALUES ('119', '人情其他', '8', '8', '1415164700', '1415164700', '1');
INSERT INTO wacai_pay_category_copy VALUES ('120', '进货采购', '9', '9', '1415164712', '1415164712', '1');
INSERT INTO wacai_pay_category_copy VALUES ('121', '人工支出', '9', '9', '1415164716', '1415164716', '1');
INSERT INTO wacai_pay_category_copy VALUES ('122', '材料辅料', '9', '9', '1415164720', '1415164720', '1');
INSERT INTO wacai_pay_category_copy VALUES ('123', '工程付款', '9', '9', '1415164725', '1415164725', '1');

-- ----------------------------
-- Table structure for `wacai_pay_record`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_pay_record`;
CREATE TABLE `wacai_pay_record` (
  `pay_id` int(15) NOT NULL AUTO_INCREMENT,
  `pay_money` float(15,2) NOT NULL,
  `pay_catid` int(15) DEFAULT NULL,
  `pay_shop_id` int(15) DEFAULT NULL,
  `pay_time` int(15) DEFAULT NULL,
  `pay_project_id` int(15) DEFAULT NULL,
  `pay_member_id` int(15) DEFAULT NULL,
  `pay_remark` varchar(400) DEFAULT NULL,
  `pay_write_off` int(2) DEFAULT NULL,
  `pay_picpath` varchar(150) DEFAULT NULL,
  `pay_addtime` int(15) DEFAULT NULL,
  `pay_edittime` int(15) DEFAULT NULL,
  `pay_user_id` int(15) DEFAULT NULL,
  `pay_currency_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_pay_record
-- ----------------------------

-- ----------------------------
-- Table structure for `wacai_pay_shop`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_pay_shop`;
CREATE TABLE `wacai_pay_shop` (
  `pay_shop_id` int(15) NOT NULL AUTO_INCREMENT,
  `pay_shop_name` varchar(100) DEFAULT NULL,
  `pay_shop_addtime` int(15) DEFAULT NULL,
  `pay_shop_edittime` int(15) DEFAULT NULL,
  `pay_shop_user_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`pay_shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_pay_shop
-- ----------------------------
INSERT INTO wacai_pay_shop VALUES ('1', '便利店', '1415244054', '1415244054', '1');
INSERT INTO wacai_pay_shop VALUES ('2', '小笼包店', '1415244067', '1415244067', '1');

-- ----------------------------
-- Table structure for `wacai_project`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_project`;
CREATE TABLE `wacai_project` (
  `project_id` int(15) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(150) DEFAULT NULL,
  `project_user_id` int(15) DEFAULT NULL,
  `project_addtime` int(15) DEFAULT NULL,
  `project_edittime` int(15) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_project
-- ----------------------------
INSERT INTO wacai_project VALUES ('1', '日常', '1', '1415243611', '1415243611');
INSERT INTO wacai_project VALUES ('2', '房产', '1', '1415243625', '1415243625');
INSERT INTO wacai_project VALUES ('3', '装修', '1', '1415243631', '1415243631');
INSERT INTO wacai_project VALUES ('4', '婚嫁', '1', '1415243635', '1415243635');
INSERT INTO wacai_project VALUES ('5', '公司', '1', '1415243641', '1415243641');
INSERT INTO wacai_project VALUES ('6', '旅游', '1', '1415243646', '1415243646');

-- ----------------------------
-- Table structure for `wacai_transfer_record`
-- ----------------------------
DROP TABLE IF EXISTS `wacai_transfer_record`;
CREATE TABLE `wacai_transfer_record` (
  `transfer_id` int(15) NOT NULL AUTO_INCREMENT,
  `transfer_money` float(15,2) DEFAULT NULL,
  `transfer_out_account_id` int(15) DEFAULT NULL,
  `transfer_in_account_id` int(15) DEFAULT NULL,
  `transfer_time` int(15) DEFAULT NULL,
  `transfer_remark` varchar(400) DEFAULT NULL,
  `transfer_addtime` int(15) DEFAULT NULL,
  `transfer_edittime` int(15) DEFAULT NULL,
  `transfer_user_id` int(15) DEFAULT NULL,
  `transfer_currency_id` int(15) DEFAULT NULL,
  PRIMARY KEY (`transfer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wacai_transfer_record
-- ----------------------------
