# 网站开发班 信息收集公开站

---

###写在前面 | 建站目的

 1. 方便收集学校要求我们填写的各种信息
 2. 方便同学之间的信息获取 如：互相查看实习单位 共享通讯录等
 3. 以开源共享协作的方式编写代码，互相交流网站开发上的心得，取长补短，共同进步

###所用技术

 1. 服务器端php框架：[thinkphp][1]框架
 2. 数据库：mysql
 3. 前端页面：[bootstrap][2]框架
 4. 代码托管平台：[Coding][3] |  [GitHub][4]
 5. 代码部署平台：[新浪云平台][5]


  [1]: http://www.thinkphp.cn/
  [2]: http://bootcss.com
  [3]: https://coding.net/u/ninvfeng/p/ourclass/git
  [4]: https://github.com/ninvfeng/ourclass
  [5]: http://sae.sina.com.cn/

###数据库
```sql
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
```