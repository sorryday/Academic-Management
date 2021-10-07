/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.11-MariaDB : Database - project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;

USE `project`;

/*Table structure for table `academic` */

DROP TABLE IF EXISTS `academic`;

CREATE TABLE `academic` (
  `Name` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `Address` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `StudentID` int(8) NOT NULL,
  `Grade` varchar(5) COLLATE utf8mb4_bin DEFAULT NULL,
  `Birthday` varchar(12) COLLATE utf8mb4_bin DEFAULT NULL,
  `Professor` varchar(7) COLLATE utf8mb4_bin DEFAULT NULL,
  `College` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `Department` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `CoDepartment` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `academic` */

insert  into `academic`(`Name`,`Address`,`StudentID`,`Grade`,`Birthday`,`Professor`,`College`,`Department`,`CoDepartment`) values 
('123','234',123,'2','123','dddd','bnbn','jyj','aaaa'),
('이민재','경기도 포천시 ***',20161261,'2','1997-08-13','서혜선','휴먼IT공과대학','휴먼IT융합학부','컴퓨터공학전공');

/*Table structure for table `enrolment` */

DROP TABLE IF EXISTS `enrolment`;

CREATE TABLE `enrolment` (
  `Code` varchar(6) COLLATE utf8mb4_bin NOT NULL,
  `Subject` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `Major` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `Score` int(1) NOT NULL,
  `Professor` varchar(7) COLLATE utf8mb4_bin NOT NULL,
  `Time` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `enrolment` */

insert  into `enrolment`(`Code`,`Subject`,`Major`,`Score`,`Professor`,`Time`) values 
('122-98','COM','gener',3,'ABC','월 1:30~4:30'),
('123-12','AI','Major',3,'Kim','화,목 9:30~10:30'),
('324-46','IDK','Major',2,'LEE','목,금 3:00~4:00'),
('452-89','QWE','gener',2,'QQQ','수 4:30~6:30');

/*Table structure for table `noticeboard` */

DROP TABLE IF EXISTS `noticeboard`;

CREATE TABLE `noticeboard` (
  `No` int(6) NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `writer` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `contents` varchar(1500) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `noticeboard` */

insert  into `noticeboard`(`No`,`Title`,`writer`,`Date`,`Type`,`contents`) values 
(7,'1','admin','2020-06-26','일반','1'),
(8,'2','admin','2020-06-26','일반','2'),
(9,'3','admin','2020-06-26','일반','3'),
(10,'4','admin','2020-06-26','일반','4'),
(11,'5','admin','2020-06-26','일반','5'),
(12,'6','admin','2020-06-26','일반','6'),
(13,'7','admin','2020-06-26','일반','7'),
(14,'8','admin','2020-06-26','일반','8'),
(17,'11','admin','2020-06-27','일반','11'),
(18,'12','admin','2020-06-27','일반','12'),
(19,'13','admin','2020-06-27','일반','13'),
(20,'14','admin','2020-06-27','일반','14'),
(21,'1','admin','2020-06-27','학사','1'),
(22,'2','admin','2020-06-27','학사','2'),
(23,'3','admin','2020-06-27','학사','3'),
(24,'4','admin','2020-06-27','학사','4'),
(25,'5','admin','2020-06-27','학사','5'),
(26,'15','admin','2020-06-27','일반','15'),
(27,'16','admin','2020-06-27','일반','16'),
(28,'17','admin','2020-06-27','일반','17'),
(29,'18','admin','2020-06-27','일반','18'),
(30,'19','admin','2020-06-27','일반','19'),
(31,'20','admin','2020-06-27','일반',''),
(32,'21','admin','2020-06-27','일반',''),
(33,'22','admin','2020-06-27','일반',''),
(34,'23','admin','2020-06-27','일반',''),
(35,'24','admin','2020-06-27','일반',''),
(36,'25','admin','2020-06-27','일반',''),
(37,'26','admin','2020-06-27','일반',''),
(38,'27','admin','2020-06-27','일반',''),
(39,'28','admin','2020-06-27','일반',''),
(40,'29','admin','2020-06-27','일반',''),
(41,'30','admin','2020-06-27','일반',''),
(42,'31','admin','2020-06-27','일반',''),
(43,'32','admin','2020-06-27','일반',''),
(44,'33','admin','2020-06-27','일반',''),
(45,'34','admin','2020-06-27','일반',''),
(46,'35','admin','2020-06-27','일반',''),
(47,'36','admin','2020-06-27','일반',''),
(48,'37','admin','2020-06-27','일반',''),
(49,'38','admin','2020-06-27','일반',''),
(50,'39','admin','2020-06-27','일반',''),
(51,'40','admin','2020-06-27','일반',''),
(52,'41','admin','2020-06-27','일반',''),
(53,'42','admin','2020-06-27','일반',''),
(54,'43','admin','2020-06-27','일반',''),
(55,'44','admin','2020-06-27','일반',''),
(56,'45','admin','2020-06-27','일반',''),
(57,'46','admin','2020-06-27','일반',''),
(58,'47','admin','2020-06-27','일반',''),
(59,'48','admin','2020-06-27','일반',''),
(60,'49','admin','2020-06-27','일반',''),
(61,'50','admin','2020-06-27','일반',''),
(62,'51','admin','2020-06-27','일반',''),
(63,'52','admin','2020-06-27','일반',''),
(65,'54','admin','2020-06-27','일반',''),
(69,'공지사항 test - 2','admin','2020-06-27','학사','공지사항\r\n            test2\r\n                  중입니다\r\n\r\n     추가작성 중 입니다');

/*Table structure for table `stenrolment` */

DROP TABLE IF EXISTS `stenrolment`;

CREATE TABLE `stenrolment` (
  `Studentid` int(8) NOT NULL,
  `Code` varchar(6) COLLATE utf8mb4_bin NOT NULL,
  `Subject` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `Major` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `Score` int(1) NOT NULL,
  `Professor` varchar(7) COLLATE utf8mb4_bin NOT NULL,
  `Time` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `stScore` varchar(3) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `stenrolment` */

insert  into `stenrolment`(`Studentid`,`Code`,`Subject`,`Major`,`Score`,`Professor`,`Time`,`stScore`) values 
(123,'452-89','QWE','QQ',2,'QQQ','345678','b'),
(123,'123-12','AI','Major',3,'Kim','화,목 9:30~10:30','a'),
(20161261,'452-89','QWE','QQ',2,'QQQ','345678','A'),
(20161261,'122-98','COM','gener',3,'ABC','월 1:30~4:30','B');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `ID` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `PW` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `Name` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `Email` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `StudentID` int(8) NOT NULL,
  `Birthday` varchar(12) COLLATE utf8mb4_bin NOT NULL,
  `Usertype` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `user` */

insert  into `user`(`ID`,`PW`,`Name`,`Email`,`Address`,`StudentID`,`Birthday`,`Usertype`) values 
('Admin','123','admin','abc@abc.com','경기도 포천시',20161234,'0000-00-00','admin'),
('userid','userpw','이민재','user@abc.com','경기도 포천시 ***',20161261,'1997-08-13','user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
