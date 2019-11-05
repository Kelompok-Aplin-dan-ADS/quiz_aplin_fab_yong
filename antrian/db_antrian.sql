/*
SQLyog Ultimate
MySQL - 5.5.27 : Database - db_antrian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_antrian` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `antrian` */

DROP TABLE IF EXISTS `antrian`;

CREATE TABLE `antrian` (
  `antrian_id` int(11) NOT NULL AUTO_INCREMENT,
  `antrian_nomor` int(11) DEFAULT NULL,
  `loket_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`antrian_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `antrian` */

/*Table structure for table `loket` */

DROP TABLE IF EXISTS `loket`;

CREATE TABLE `loket` (
  `loket_id` int(11) NOT NULL AUTO_INCREMENT,
  `loket_nama` varchar(100) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `loket_antrian` int(11) DEFAULT '0',
  `loket_status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`loket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `loket` */

insert  into `loket`(`loket_id`,`loket_nama`,`user`,`loket_antrian`,`loket_status`) values 
(1,'Customer Service 1','loket1',0,1),
(2,'Customer Service 2','loket2',0,1),
(3,'Customer Service 3','loket3',0,1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`status`) values 
('loket1','loket1',1),
('loket2','loket2',1),
('loket3','loket3',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
