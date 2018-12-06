/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.1.30-community : Database - zfgs
*********************************************************************
Server version : 5.1.30-community
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `zfgs`;

USE `zfgs`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `Price` decimal(11,2) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`product_id`,`name`,`qty`,`Price`,`amount`) values (1,'Pancit canton Origanal',10,'9.00','90.00'),(2,'milo',20,'6.00','120.00'),(3,'egg',10,'6.00','60.00'),(4,'hotdog',10,'5.00','50.00');

/*Table structure for table `tbl_account` */

DROP TABLE IF EXISTS `tbl_account`;

CREATE TABLE `tbl_account` (
  `acc_num` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `acc_bal` float DEFAULT NULL,
  `custID` int(5) DEFAULT NULL,
  PRIMARY KEY (`acc_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_account` */

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(20) DEFAULT NULL,
  `admin_password` varchar(20) DEFAULT NULL,
  `admin_role` int(1) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`admin_id`,`admin_username`,`admin_password`,`admin_role`) values (1,'Mxola','11',2),(2,'Zanele','23',2),(3,NULL,NULL,NULL);

/*Table structure for table `tbl_booking` */

DROP TABLE IF EXISTS `tbl_booking`;

CREATE TABLE `tbl_booking` (
  `bk_num` int(10) NOT NULL AUTO_INCREMENT,
  `bk_desc` varchar(100) DEFAULT NULL,
  `bk_servDate` date DEFAULT NULL,
  `bk_datePlaced` date DEFAULT NULL,
  `bk_address` varchar(100) DEFAULT NULL,
  `bk_startTime` varchar(20) DEFAULT NULL,
  `bk_price` decimal(12,2) DEFAULT NULL,
  `cust_ID` int(5) DEFAULT NULL,
  PRIMARY KEY (`bk_num`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_booking` */

insert  into `tbl_booking`(`bk_num`,`bk_desc`,`bk_servDate`,`bk_datePlaced`,`bk_address`,`bk_startTime`,`bk_price`,`cust_ID`) values (1,'',NULL,NULL,NULL,NULL,NULL,NULL),(24,'4 Bedrooms,3 Toilets, Bathrooms,5 Kitchens,1 Lounces','0000-00-00','2018-11-16',',,,',NULL,NULL,NULL),(25,'1 Bedrooms,0 Toilets,0 Bathrooms,8 Kitchens,3 Lounces','0000-00-00','2018-11-16',',mkhulu,tompies,34',NULL,NULL,NULL),(26,'0 Bedrooms,6 Toilets,0 Bathrooms,9 Kitchens,0 Lounces','0000-00-00','2018-11-16','SELECT CITY,,,',NULL,'1140.00',NULL),(27,' Bedrooms, Toilets,2 Bathrooms,2 Kitchens, Lounces','0000-00-00','2018-11-16','SELECT CITY,,,',NULL,'300.00',NULL),(28,'09 Bedrooms,0 Toilets,0 Bathrooms,0 Kitchens,0 Lounces','0000-00-00','2018-11-16','Middleburg,ty,ggt,76',NULL,'810.00',NULL),(29,'0 Bedrooms,0 Toilets,0 Bathrooms,0 Kitchens,0 Lounces','0000-00-00','2018-11-16','Witbank,rere,popo,45','08:30','0.00',NULL);

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

/*Table structure for table `tbl_customer` */

DROP TABLE IF EXISTS `tbl_customer`;

CREATE TABLE `tbl_customer` (
  `cust_id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cust_fName` varchar(20) DEFAULT NULL,
  `cust_lName` varchar(20) DEFAULT NULL,
  `cust_gender` varchar(20) DEFAULT NULL,
  `cust_title` varchar(15) DEFAULT NULL,
  `cust_idNum` int(13) DEFAULT NULL,
  `cust_email` varchar(30) DEFAULT NULL,
  `cust_city` varchar(20) DEFAULT NULL,
  `cust_profPic` varchar(100) DEFAULT NULL,
  `cust_active` varchar(1) DEFAULT 'Y',
  `cust_password` varchar(30) DEFAULT NULL,
  `cust_role` int(1) DEFAULT '1',
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_customer` */

insert  into `tbl_customer`(`cust_id`,`cust_fName`,`cust_lName`,`cust_gender`,`cust_title`,`cust_idNum`,`cust_email`,`cust_city`,`cust_profPic`,`cust_active`,`cust_password`,`cust_role`) values (00001,'faith332','potinere','Male',NULL,19921011,'faith@gmail.com','Ogies',NULL,'Y','1212',1),(00002,'Tshehlas','potegelos','Male',NULL,0,'12344','',NULL,'Y','',1),(00003,'west','faithfuls','Male',NULL,12212,'faith@yahoo.com','Witbank',NULL,'Y','123123',1),(00004,'Ntsako','Khoza','Male',NULL,12321,'ntsako','Middleburg',NULL,'Y','1212',1);

/*Table structure for table `tbl_role` */

DROP TABLE IF EXISTS `tbl_role`;

CREATE TABLE `tbl_role` (
  `role_id` int(5) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_role` */

insert  into `tbl_role`(`role_id`,`role_name`) values (1,'cust'),(2,'admi'),(3,'staf');

/*Table structure for table `tbl_service` */

DROP TABLE IF EXISTS `tbl_service`;

CREATE TABLE `tbl_service` (
  `serv_id` int(10) NOT NULL AUTO_INCREMENT,
  `serv_name` varchar(30) DEFAULT NULL,
  `serv_desc` varchar(30) DEFAULT NULL,
  `serv_cost` float DEFAULT NULL,
  `serv_image` varchar(30) DEFAULT NULL,
  `serv_categ` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_service` */

insert  into `tbl_service`(`serv_id`,`serv_name`,`serv_desc`,`serv_cost`,`serv_image`,`serv_categ`) values (1,'weftr','er',12.3,NULL,''),(2,'reeds','goods',23,NULL,'Landscaping'),(3,'abcgf',';k',12.23,NULL,'Landscaping');

/*Table structure for table `tbl_staff` */

DROP TABLE IF EXISTS `tbl_staff`;

CREATE TABLE `tbl_staff` (
  `staff_id` int(5) NOT NULL AUTO_INCREMENT,
  `staff_lName` varchar(15) DEFAULT NULL,
  `staff_fName` varchar(15) DEFAULT NULL,
  `staff_gender` varchar(15) DEFAULT NULL,
  `staff_idNo` varchar(30) DEFAULT NULL,
  `staff_email` varchar(30) DEFAULT NULL,
  `staff_password` varchar(50) DEFAULT NULL,
  `staff_hireDate` varchar(50) DEFAULT NULL,
  `staff_role` int(1) DEFAULT '3',
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_staff` */

insert  into `tbl_staff`(`staff_id`,`staff_lName`,`staff_fName`,`staff_gender`,`staff_idNo`,`staff_email`,`staff_password`,`staff_hireDate`,`staff_role`) values (1,'Maseko','Zanele','Female','9508300250084','zet@gmail.com','123456','08 August 2018',3),(2,'Netshilo','Livhu','Male','9407150250084','livhu@gmail.com','123456','08 March 2018',3),(3,'Tshehla','Faith','Male','9407150250084','faith@gmail.com','123456','30 April 2018',3),(4,'','','Female','9407150250084','','123456','01 November 2018',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
