
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sxxx`
-- ----------------------------
DROP TABLE IF EXISTS `sxxx`;
CREATE TABLE `sxxx` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `studentid` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `truename` varchar(255) DEFAULT NULL,
  `native_place` varchar(255) DEFAULT NULL,
  `dormitory` varchar(255) DEFAULT NULL,
  `whether_in_school` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `parents` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
