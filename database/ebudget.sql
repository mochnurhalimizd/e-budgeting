/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 10.1.21-MariaDB : Database - ebudget
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ebudget` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ebudget`;

/*Table structure for table `dtl_gapok_kecamatan` */

DROP TABLE IF EXISTS `dtl_gapok_kecamatan`;

CREATE TABLE `dtl_gapok_kecamatan` (
  `id_dtl` int(10) NOT NULL AUTO_INCREMENT,
  `kd_rek_kecamatan` varchar(50) DEFAULT NULL,
  `kd_golongan` varchar(20) DEFAULT NULL,
  `gapok` double DEFAULT NULL,
  PRIMARY KEY (`id_dtl`),
  KEY `kd_rek_kecamatan` (`kd_rek_kecamatan`),
  KEY `kd_golongan` (`kd_golongan`),
  CONSTRAINT `dtl_gapok_kecamatan_ibfk_1` FOREIGN KEY (`kd_rek_kecamatan`) REFERENCES `kecamatan` (`kd_rek_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dtl_gapok_kecamatan_ibfk_2` FOREIGN KEY (`kd_golongan`) REFERENCES `golongan` (`kd_golongan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `dtl_gapok_kecamatan` */

insert  into `dtl_gapok_kecamatan`(`id_dtl`,`kd_rek_kecamatan`,`kd_golongan`,`gapok`) values 
(2,'parongpong','II',2586100),
(3,'parongpong','III',3528100),
(4,'parongpong','IV',4206500),
(5,'cisarua','IV',4250600),
(6,'cisarua','III',3491500),
(7,'cisarua','II',2381100),
(8,'cisarua','I',2038100),
(9,'lembang','IV',4522500),
(10,'lembang','III',3565000),
(11,'lembang','II',2533400),
(12,'lembang','I',1955400),
(13,'padalarang','IV',4522500),
(14,'padalarang','III',3565000),
(15,'padalarang','II',2613200);

/*Table structure for table `dtl_gapok_skpd` */

DROP TABLE IF EXISTS `dtl_gapok_skpd`;

CREATE TABLE `dtl_gapok_skpd` (
  `id_dtl` int(10) NOT NULL AUTO_INCREMENT,
  `kd_rek_skpd` varchar(50) DEFAULT NULL,
  `kd_golongan` varchar(20) DEFAULT NULL,
  `gapok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dtl`),
  KEY `kd_rek_skpd` (`kd_rek_skpd`),
  KEY `kd_golongan` (`kd_golongan`),
  CONSTRAINT `dtl_gapok_skpd_ibfk_1` FOREIGN KEY (`kd_rek_skpd`) REFERENCES `skpd` (`kd_rek_skpd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dtl_gapok_skpd_ibfk_2` FOREIGN KEY (`kd_golongan`) REFERENCES `golongan` (`kd_golongan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `dtl_gapok_skpd` */

insert  into `dtl_gapok_skpd`(`id_dtl`,`kd_rek_skpd`,`kd_golongan`,`gapok`) values 
(2,'BPKD','II',2533500),
(3,'BPKD','III',3247500),
(4,'BPKD','IV',4206500),
(10,'DISKOPUKM','II',0),
(11,'DISKOPUKM','III',3148300),
(12,'DISKOPUKM','IV',4384400),
(13,'DISDUKCAPIL','IV',4384400),
(14,'DISDUKCAPIL','III',3639200),
(15,'DISDUKCAPIL','II',2356400),
(16,'DISBUDPAR','IV',4206500),
(17,'DISBUDPAR','III',3455300),
(18,'DISBUDPAR','II',2237900),
(19,'DPMPTSP','IV',3953600),
(20,'DPMPTSP','III',3281500),
(21,'DPMPTSP','II',2533400),
(22,'DISPORA','IV',4223000),
(23,'DISPORA','III',3084200),
(24,'DISPORA','II',2723700);

/*Table structure for table `dtl_tunjangan_golongan` */

DROP TABLE IF EXISTS `dtl_tunjangan_golongan`;

CREATE TABLE `dtl_tunjangan_golongan` (
  `id_dtl_tunj_gol` int(10) NOT NULL AUTO_INCREMENT,
  `kd_rek_skpd` varchar(50) DEFAULT NULL,
  `kd_rek_kecamatan` varchar(50) DEFAULT NULL,
  `kd_rek_tunjangan` varchar(50) DEFAULT NULL,
  `kd_golongan` varchar(10) DEFAULT NULL,
  `kd_eselon` varchar(10) DEFAULT NULL,
  `harga_satuan` double DEFAULT NULL,
  PRIMARY KEY (`id_dtl_tunj_gol`),
  KEY `kd_rek_skpd` (`kd_rek_skpd`),
  KEY `kd_rek_tunjangan` (`kd_rek_tunjangan`),
  KEY `kd_golongan` (`kd_golongan`),
  KEY `kd_eselon` (`kd_eselon`),
  KEY `kd_rek_kecamatan` (`kd_rek_kecamatan`),
  CONSTRAINT `dtl_tunjangan_golongan_ibfk_1` FOREIGN KEY (`kd_rek_skpd`) REFERENCES `skpd` (`kd_rek_skpd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dtl_tunjangan_golongan_ibfk_2` FOREIGN KEY (`kd_rek_tunjangan`) REFERENCES `tunjangan` (`kd_rek_tunjangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dtl_tunjangan_golongan_ibfk_3` FOREIGN KEY (`kd_golongan`) REFERENCES `golongan` (`kd_golongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dtl_tunjangan_golongan_ibfk_4` FOREIGN KEY (`kd_eselon`) REFERENCES `eselon` (`kd_eselon`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dtl_tunjangan_golongan_ibfk_5` FOREIGN KEY (`kd_rek_kecamatan`) REFERENCES `kecamatan` (`kd_rek_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;

/*Data for the table `dtl_tunjangan_golongan` */

insert  into `dtl_tunjangan_golongan`(`id_dtl_tunj_gol`,`kd_rek_skpd`,`kd_rek_kecamatan`,`kd_rek_tunjangan`,`kd_golongan`,`kd_eselon`,`harga_satuan`) values 
(23,'DISKOPUKM',NULL,'5.1.1.01.02','III',NULL,164600),
(24,'DISKOPUKM',NULL,'5.1.1.01.02','IV',NULL,263100),
(25,'DISKOPUKM',NULL,'5.1.1.01.03',NULL,'II/B',2025000),
(26,'DISKOPUKM',NULL,'5.1.1.01.03',NULL,'III/A',1260000),
(27,'DISKOPUKM',NULL,'5.1.1.01.03',NULL,'III/B',980000),
(28,'DISKOPUKM',NULL,'5.1.1.01.03',NULL,'IV/A',540000),
(29,'DISKOPUKM',NULL,'5.1.1.01.06','III',NULL,72420),
(30,'DISKOPUKM',NULL,'5.1.1.01.06','IV',NULL,72420),
(31,'DISKOPUKM',NULL,'5.1.1.01.07','III',NULL,31500),
(32,'DISKOPUKM',NULL,'5.1.1.01.07','IV',NULL,39300),
(33,'DISKOPUKM',NULL,'5.1.1.01.08','III',NULL,87),
(34,'DISKOPUKM',NULL,'5.1.1.01.08','IV',NULL,87),
(35,'BPKD',NULL,'5.1.1.01.02','II',NULL,118200),
(36,'BPKD',NULL,'5.1.1.01.02','III',NULL,157700),
(37,'BPKD',NULL,'5.1.1.01.02','IV',NULL,197800),
(38,'BPKD',NULL,'5.1.1.01.03',NULL,'II/B',2025000),
(39,'BPKD',NULL,'5.1.1.01.03',NULL,'III/A',1260000),
(40,'BPKD',NULL,'5.1.1.01.03',NULL,'III/B',980000),
(41,'BPKD',NULL,'5.1.1.01.05','IV',NULL,190000),
(42,'BPKD',NULL,'5.1.1.01.05','III',NULL,185000),
(43,'BPKD',NULL,'5.1.1.01.05','II',NULL,180000),
(44,'BPKD',NULL,'5.1.1.01.06','IV',NULL,72420),
(45,'BPKD',NULL,'5.1.1.01.06','III',NULL,72420),
(46,'BPKD',NULL,'5.1.1.01.06','II',NULL,72420),
(47,'BPKD',NULL,'5.1.1.01.07','IV',NULL,41800),
(48,'BPKD',NULL,'5.1.1.01.07','III',NULL,21300),
(49,'BPKD',NULL,'5.1.1.01.07','II',NULL,11200),
(50,'BPKD',NULL,'5.1.1.01.08','IV',NULL,74),
(51,'BPKD',NULL,'5.1.1.01.08','III',NULL,67),
(52,'BPKD',NULL,'5.1.1.01.08','II',NULL,65),
(53,'BPKD',NULL,'5.1.1.01.03',NULL,'IV/A',540000),
(54,'0','parongpong','5.1.1.01.02','IV',NULL,228200),
(55,'0','parongpong','5.1.1.01.02','III',NULL,172800),
(56,'0','parongpong','5.1.1.01.02','II',NULL,148600),
(57,'0','parongpong','5.1.1.01.03',NULL,'III/a',1260000),
(58,'0','parongpong','5.1.1.01.03',NULL,'III/b',980000),
(59,'0','parongpong','5.1.1.01.03',NULL,'IV/a',540000),
(60,'0','parongpong','5.1.1.01.03',NULL,'IV/b',490000),
(61,'0','parongpong','5.1.1.01.05','III',NULL,185000),
(62,'0','parongpong','5.1.1.01.05','II',NULL,180000),
(63,'0','parongpong','5.1.1.01.06','IV',NULL,72420),
(64,'0','parongpong','5.1.1.01.06','III',NULL,72420),
(65,'0','parongpong','5.1.1.01.06','II',NULL,72420),
(66,'0','parongpong','5.1.1.01.07','IV',NULL,41600),
(67,'0','parongpong','5.1.1.01.08','IV',NULL,93),
(68,'0','parongpong','5.1.1.01.08','III',NULL,89),
(69,'0','parongpong','5.1.1.01.08','II',NULL,77),
(70,NULL,'cisarua','5.1.1.01.02','IV',NULL,216800),
(71,NULL,'cisarua','5.1.1.01.02','III',NULL,187600),
(72,NULL,'cisarua','5.1.1.01.02','II',NULL,116400),
(73,NULL,'cisarua','5.1.1.01.02','I',NULL,91400),
(74,NULL,'cisarua','5.1.1.01.03','0','III/a',1260000),
(75,NULL,'cisarua','5.1.1.01.03',NULL,'III/b',980000),
(76,NULL,'cisarua','5.1.1.01.03',NULL,'IV/a',540000),
(77,NULL,'cisarua','5.1.1.01.03',NULL,'IV/b',490000),
(78,NULL,'cisarua','5.1.1.01.05','III',NULL,185000),
(79,NULL,'cisarua','5.1.1.01.05','II',NULL,180000),
(80,NULL,'cisarua','5.1.1.01.05','I',NULL,175000),
(81,NULL,'cisarua','5.1.1.01.06','IV',NULL,72420),
(82,NULL,'cisarua','5.1.1.01.06','III',NULL,72420),
(83,NULL,'cisarua','5.1.1.01.06','II',NULL,72420),
(84,NULL,'cisarua','5.1.1.01.06','I',NULL,72420),
(85,NULL,'cisarua','5.1.1.01.07','IV',NULL,38800),
(86,NULL,'cisarua','5.1.1.01.07','III',NULL,1400),
(87,NULL,'cisarua','5.1.1.01.08','IV',NULL,90),
(88,NULL,'cisarua','5.1.1.01.08','III',NULL,87),
(89,NULL,'cisarua','5.1.1.01.08','II',NULL,85),
(90,NULL,'cisarua','5.1.1.01.08','I',NULL,72),
(91,NULL,'lembang','5.1.1.01.02','IV',NULL,108800),
(92,NULL,'lembang','5.1.1.01.02','III',NULL,180200),
(93,NULL,'lembang','5.1.1.01.02','II',NULL,129600),
(94,NULL,'lembang','5.1.1.01.02','I',NULL,106600),
(95,NULL,'lembang','5.1.1.01.03','0','III/a',1260000),
(96,NULL,'lembang','5.1.1.01.03',NULL,'III/b',980000),
(97,NULL,'lembang','5.1.1.01.03',NULL,'IV/a',540000),
(98,NULL,'lembang','5.1.1.01.03',NULL,'IV/b',490000),
(99,NULL,'lembang','5.1.1.01.05','III',NULL,185000),
(100,NULL,'lembang','5.1.1.01.05','II',NULL,180000),
(101,NULL,'lembang','5.1.1.01.05','I',NULL,175000),
(102,NULL,'lembang','5.1.1.01.06','IV',NULL,72420),
(103,NULL,'lembang','5.1.1.01.06','III',NULL,72420),
(104,NULL,'lembang','5.1.1.01.06','II',NULL,72420),
(105,NULL,'lembang','5.1.1.01.06','I',NULL,72420),
(106,NULL,'lembang','5.1.1.01.07','IV',NULL,35600),
(107,NULL,'lembang','5.1.1.01.08','IV',NULL,52),
(108,NULL,'lembang','5.1.1.01.08','III',NULL,63),
(109,NULL,'lembang','5.1.1.01.08','II',NULL,74),
(110,NULL,'lembang','5.1.1.01.08','I',NULL,75),
(111,NULL,'padalarang','5.1.1.01.02','IV',NULL,257400),
(112,NULL,'padalarang','5.1.1.01.02','III',NULL,175200),
(113,NULL,'padalarang','5.1.1.01.02','II',NULL,132800),
(114,NULL,'padalarang','5.1.1.01.03','0','III/a',1260000),
(115,NULL,'padalarang','5.1.1.01.03',NULL,'III/b',980000),
(116,NULL,'padalarang','5.1.1.01.03',NULL,'IV/a',540000),
(117,NULL,'padalarang','5.1.1.01.03',NULL,'IV/b',490000),
(118,NULL,'padalarang','5.1.1.01.05','III',NULL,185000),
(119,NULL,'padalarang','5.1.1.01.05','II',NULL,180000),
(120,NULL,'padalarang','5.1.1.01.06','IV',NULL,72420),
(121,NULL,'padalarang','5.1.1.01.06','III',NULL,72420),
(122,NULL,'padalarang','5.1.1.01.06','II',NULL,72420),
(123,NULL,'padalarang','5.1.1.01.07','IV',NULL,38200),
(124,NULL,'padalarang','5.1.1.01.07','III',NULL,35200),
(125,NULL,'padalarang','5.1.1.01.07','II',NULL,18100),
(126,NULL,'padalarang','5.1.1.01.08','IV',NULL,89),
(127,NULL,'padalarang','5.1.1.01.08','III',NULL,87),
(128,NULL,'padalarang','5.1.1.01.08','II',NULL,82),
(129,'DISDUKCAPIL',NULL,'5.1.1.01.02','IV',NULL,254600),
(130,'DISDUKCAPIL',NULL,'5.1.1.01.02','III',NULL,203400),
(131,'DISDUKCAPIL',NULL,'5.1.1.01.02','II',NULL,153800),
(132,'DISDUKCAPIL',NULL,'5.1.1.01.03','0','II/b',2025000),
(133,'DISDUKCAPIL',NULL,'5.1.1.01.03','0','III/a',1260000),
(134,'DISDUKCAPIL',NULL,'5.1.1.01.03',NULL,'III/b',980000),
(135,'DISDUKCAPIL',NULL,'5.1.1.01.03',NULL,'IV/a',540000),
(136,'DISDUKCAPIL',NULL,'5.1.1.01.05','III',NULL,185000),
(137,'DISDUKCAPIL',NULL,'5.1.1.01.05','II',NULL,180000),
(138,'DISDUKCAPIL',NULL,'5.1.1.01.06','IV',NULL,72420),
(139,'DISDUKCAPIL',NULL,'5.1.1.01.06','III',NULL,72420),
(140,'DISDUKCAPIL',NULL,'5.1.1.01.06','II',NULL,72420),
(141,'DISDUKCAPIL',NULL,'5.1.1.01.07','IV',NULL,37500),
(142,'DISDUKCAPIL',NULL,'5.1.1.01.07','III',NULL,900),
(143,'DISDUKCAPIL',NULL,'5.1.1.01.08','IV',NULL,79),
(144,'DISDUKCAPIL',NULL,'5.1.1.01.08','III',NULL,75),
(145,'DISDUKCAPIL',NULL,'5.1.1.01.08','II',NULL,74),
(146,'DISBUDPAR',NULL,'5.1.1.01.02','IV',NULL,228300),
(147,'DISBUDPAR',NULL,'5.1.1.01.02','III',NULL,148400),
(148,'DISBUDPAR',NULL,'5.1.1.01.02','II',NULL,117900),
(149,'DISBUDPAR',NULL,'5.1.1.01.03','0','II/b',2025000),
(150,'DISBUDPAR',NULL,'5.1.1.01.03',NULL,'III/a',1260000),
(151,'DISBUDPAR',NULL,'5.1.1.01.03',NULL,'III/b',980000),
(152,'DISBUDPAR',NULL,'5.1.1.01.03',NULL,'IV/a',540000),
(153,'DISBUDPAR',NULL,'5.1.1.01.05','IV',NULL,190000),
(154,'DISBUDPAR',NULL,'5.1.1.01.05','III',NULL,185000),
(155,'DISBUDPAR',NULL,'5.1.1.01.05','II',NULL,180000),
(156,'DISBUDPAR',NULL,'5.1.1.01.06','IV',NULL,72420),
(157,'DISBUDPAR',NULL,'5.1.1.01.06','III',NULL,72420),
(158,'DISBUDPAR',NULL,'5.1.1.01.06','II',NULL,72420),
(159,'DISBUDPAR',NULL,'5.1.1.01.07','IV',NULL,43400),
(160,'DISBUDPAR',NULL,'5.1.1.01.07','III',NULL,15600),
(161,'DISBUDPAR',NULL,'5.1.1.01.08','IV',NULL,85),
(162,'DISBUDPAR',NULL,'5.1.1.01.08','III',NULL,69),
(163,'DISBUDPAR',NULL,'5.1.1.01.08','II',NULL,68),
(164,'DPMPTSP',NULL,'5.1.1.01.02','IV',NULL,206400),
(165,'DPMPTSP',NULL,'5.1.1.01.02','III',NULL,187600),
(166,'DPMPTSP',NULL,'5.1.1.01.02','II',NULL,135400),
(167,'DPMPTSP',NULL,'5.1.1.01.03',NULL,'II/b',2025000),
(168,'DPMPTSP',NULL,'5.1.1.01.03',NULL,'III/a',1260000),
(169,'DPMPTSP',NULL,'5.1.1.01.03',NULL,'III/b',980000),
(170,'DPMPTSP',NULL,'5.1.1.01.03',NULL,'IV/a',540000),
(171,'DPMPTSP',NULL,'5.1.1.01.05','III',NULL,185000),
(172,'DPMPTSP',NULL,'5.1.1.01.05','II',NULL,180000),
(173,'DPMPTSP',NULL,'5.1.1.01.06','IV',NULL,72420),
(174,'DPMPTSP',NULL,'5.1.1.01.06','III',NULL,72420),
(175,'DPMPTSP',NULL,'5.1.1.01.06','II',NULL,72420),
(176,'DPMPTSP',NULL,'5.1.1.01.07','IV',NULL,59300),
(177,'DPMPTSP',NULL,'5.1.1.01.08','IV',NULL,92),
(178,'DPMPTSP',NULL,'5.1.1.01.08','III',NULL,88),
(179,'DPMPTSP',NULL,'5.1.1.01.08','II',NULL,69),
(180,'DISPORA',NULL,'5.1.1.01.02','IV',NULL,225000),
(181,'DISPORA',NULL,'5.1.1.01.02','III',NULL,151100),
(182,'DISPORA',NULL,'5.1.1.01.02','II',NULL,140500),
(183,'DISPORA',NULL,'5.1.1.01.03',NULL,'II/b',2025000),
(184,'DISPORA',NULL,'5.1.1.01.03',NULL,'III/a',1260000),
(185,'DISPORA',NULL,'5.1.1.01.03',NULL,'III/b',980000),
(186,'DISPORA',NULL,'5.1.1.01.03',NULL,'IV/a',540000),
(187,'DISPORA',NULL,'5.1.1.01.06','IV',NULL,72420),
(188,'DISPORA',NULL,'5.1.1.01.06','III',NULL,72420),
(189,'DISPORA',NULL,'5.1.1.01.06','II',NULL,72420),
(190,'DISPORA',NULL,'5.1.1.01.07','IV',NULL,51800),
(191,'DISPORA',NULL,'5.1.1.01.07','III',NULL,21600),
(192,'DISPORA',NULL,'5.1.1.01.07','II',NULL,14800),
(193,'DISPORA',NULL,'5.1.1.01.08','IV',NULL,76),
(194,'DISPORA',NULL,'5.1.1.01.08','III',NULL,75),
(195,'DISPORA',NULL,'5.1.1.01.08','II',NULL,69);

/*Table structure for table `eselon` */

DROP TABLE IF EXISTS `eselon`;

CREATE TABLE `eselon` (
  `kd_eselon` varchar(10) NOT NULL,
  `nama_eselon` varchar(20) DEFAULT NULL,
  `kd_rek_tunjangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_eselon`),
  KEY `nama_tunjangan` (`kd_rek_tunjangan`),
  CONSTRAINT `eselon_ibfk_1` FOREIGN KEY (`kd_rek_tunjangan`) REFERENCES `tunjangan` (`kd_rek_tunjangan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `eselon` */

insert  into `eselon`(`kd_eselon`,`nama_eselon`,`kd_rek_tunjangan`) values 
('0','0','0'),
('I/A','Eselon I/A','5.1.1.01.03'),
('I/B','Eselon I/B','5.1.1.01.03'),
('II/A','Eselon II/A','5.1.1.01.03'),
('II/B','Eselon II/B','5.1.1.01.03'),
('III/A','Eselon III/A','5.1.1.01.03'),
('III/B','Eselon III/B','5.1.1.01.03'),
('IV/A','Eselon IV/A','5.1.1.01.03'),
('IV/B','Eselon IV/B','5.1.1.01.03'),
('V/A','Eselon V/A','5.1.1.01.03');

/*Table structure for table `golongan` */

DROP TABLE IF EXISTS `golongan`;

CREATE TABLE `golongan` (
  `kd_golongan` varchar(10) NOT NULL,
  `nama_golongan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kd_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `golongan` */

insert  into `golongan`(`kd_golongan`,`nama_golongan`) values 
('0','Belum ada Golongan'),
('I','Golongan I'),
('II','Golongan II'),
('III','Golongan III'),
('IV','Golongan IV');

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `kd_rek_kecamatan` varchar(50) NOT NULL,
  `nama_kecamatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kd_rek_kecamatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`kd_rek_kecamatan`,`nama_kecamatan`) values 
('0','Belum ada kecamatan'),
('cisarua','kecamatan cisarua'),
('lembang','kecamatan lembang'),
('padalarang','kecamtana padalarang'),
('parongpong','Kecamatan Parongpong');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status_perkawinan` enum('Lajang','Kawin','Janda','Duda') DEFAULT NULL,
  `kd_rek_skpd` varchar(50) DEFAULT NULL,
  `kd_golongan` varchar(10) DEFAULT NULL,
  `kd_rek_kecamatan` varchar(50) DEFAULT NULL,
  `eselon` varchar(10) DEFAULT NULL,
  `jml_anak` enum('1','2','0') DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `kd_rek_skpd` (`kd_rek_skpd`),
  KEY `kd_golongan` (`kd_golongan`),
  KEY `kd_rek_kecamatan` (`kd_rek_kecamatan`),
  CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`kd_rek_skpd`) REFERENCES `skpd` (`kd_rek_skpd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`kd_golongan`) REFERENCES `golongan` (`kd_golongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pegawai_ibfk_3` FOREIGN KEY (`kd_rek_kecamatan`) REFERENCES `kecamatan` (`kd_rek_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`nip`,`nama`,`tempat_lahir`,`tgl_lahir`,`jenis_kelamin`,`alamat`,`status_perkawinan`,`kd_rek_skpd`,`kd_golongan`,`kd_rek_kecamatan`,`eselon`,`jml_anak`) values 
('10210127','lufi','jepang','2017-10-06','Laki-Laki','Bandung','Kawin','BPKD','IV','0','0','1'),
('10210135','Oky Prasetyolllll','Bandung','0000-00-00','Laki-Laki','Bandung','Kawin','BPKD','IV','0','-','2'),
('10210136','henri wijaksana','Medan','2017-11-16','Laki-Laki','Bandung','Kawin','BPKD','IV','0','0','2'),
('10210137','Ilham Muillolo','Bandung','0000-00-00','Laki-Laki','Bandung','Kawin','BPKD','IV','0','-','2'),
('10210138','Hana Nuril','Bandung','2017-11-17','Perempuan','Bandung','Kawin','BPKD','IV','0','0','1'),
('10210139','Nicolas Saputra ucul','Bandung','0000-00-00','Laki-Laki','Bandung','Kawin','BPKD','IV','0','-','1'),
('10210140','Maryani Suprapto','Bandung','2017-11-14','Perempuan','Bandung','Kawin','BPKD','IV','0','0','1'),
('10210141','Sulaiman Sukandar','Bandung','2017-11-08','Laki-Laki','Bandung','Kawin','BPKD','IV','0','0','1'),
('10210142','Agus Sungkono','Cianjur','2017-11-04','Laki-Laki','Bandung','Kawin','BPKD','IV','0','0','1'),
('10210143','Bondan Sumitro','Bandung','2017-11-14','Laki-Laki','Bandung','Lajang','BPKD','III','0','III/a',''),
('10210144','BAYU ANGGA DWIGUNA     ','Bandung','2017-11-01','Laki-Laki','Bandung','Lajang','BPKD','III','0','V',''),
('10210145','ARIEF ARDY BUDIMAN       ','Bandung','2017-11-01','Laki-Laki','Bandung','Lajang','BPKD','III','0','V',''),
('10210146','LUKY NURDIANSYAH  ','Bandung','2017-11-01','Laki-Laki','Bandung','Lajang','BPKD','III','0','V',''),
('10210147','AGUNG WAHYUDA   ','Bandung','2017-11-01','Laki-Laki','Bandung','Lajang','BPKD','III','0','III/b',''),
('10210148','ABHISEKA PAMBUDI UTOMO   ','Bandung','2017-11-01','Laki-Laki','Bandung','Lajang','BPKD','III','0','III/b',''),
('10210149','WISNU BIMA PRASETYO      ','Bandung','2017-10-30','Laki-Laki','Bandung','Lajang','BPKD','III','0','III/b',''),
('10210150','ARDES SETIAWAN      ','Jakarta','2017-11-01','Laki-Laki','Bandung','Lajang','BPKD','III','0','III/b',''),
('10210151','ALFIAN PRAYUDI','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','III/b',''),
('10210152',' RADEN DWI REZA PRAMUYUDHA','Jakarta','2017-10-31','Laki-Laki','Bandung','Lajang','BPKD','III','0','III/b',''),
('10210153','JAKA SEPTIAN ','Garut','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','V',''),
('10210154','MUHAMMAD FARIS RIZA AFZAL','Karawang','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','0',''),
('10210155','RIFKY RAKHMANSYAH','Jakarta','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','0',''),
('10210156','RIAN SUTANDI','Garut','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','0',''),
('10210157','RIYADH FIRDAUS AHMAD','Karawang','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','0',''),
('10210158','GRACEVINA HERMAWAN','Garut','2017-10-30','Perempuan','Bandung','Lajang','BPKD','III','0','0',''),
('10210159','PRAMUDA DADANG WASNARDI','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','0',''),
('10210160','ALINTIA ROSSI','Karawang','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','0',''),
('10210161','HENDRA APRIAN JAYA','Jakarta','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','III','0','V',''),
('10210162','DELSY SEPTRIZAL          ','Bandung','2017-10-31','Perempuan','Bandung','Kawin','BPKD','III','0','V','2'),
('10210163','JEJEN JENAL ABIDIN','Garut','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210164','RISKA ENDANG APRIANTI    ','Bandung','2017-10-29','Perempuan','Bandung','Kawin','BPKD','III','0','V','2'),
('10210165','HENRA SETIA NUGRAHA','Karawang','2017-11-01','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210166','MUHAMMAD F R KAISUPY','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210167','ANISAH FAUZIYYAH         ','Garut','2017-10-29','Perempuan','Bandung','Kawin','BPKD','III','0','V','2'),
('10210168','MUHAMMAD RIZKI AL JABARI ','Jakarta','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210169','DERA FADLY HAMDANI','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210170','RIYAN ANGGUN PERMANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210171','VILEP GILIO LARWUY','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210172','MOCHAMAD GANI SETIAWAN','Jakarta','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210173','ZAINI AKHMAD RAHMAD','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210174','M RIZKY ANDRA MUCHLIS','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210175','DUDE BAHRUL HAYAT','Karawang','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210176','AHMAD MAULANA','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210177','ANGGA DWI RAMADHAN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210178','KHASEMY RAFSANJANY','Bandung','2017-10-29','Perempuan','Bandung','Kawin','BPKD','III','0','V','2'),
('10210179','OKI JANUAR INSANI MULYANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210180','M AZIZ CATUR WICAKSONO','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210181','TEGUH PRAMUTIANA PUTRA','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210182','FERNANDO SIHOMBING','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210183','PURWANTO NUGROHO ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210184','FIRMAN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210185','JONATHAN SIBURIAN','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210186','ADI LESMANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210187','AZIS AHMAD SODIK','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210188','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210189','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210190','BAYU ANGGA DWIGUNA       ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210191','ARIEF ARDY BUDIMAN       ','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210192','LUKY NURDIANSYAH         ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210193','AGUNG WAHYUDA RIZKI      ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210194','ABHISEKA PAMBUDI UTOMO   ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210195','WISNU BIMA PRASETYO      ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210196','ARDES SETIAWAN           ','Bandung','2017-11-05','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210197','ALFIAN PRAYUDI           ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210198','RADEN DWI REZA PRAMUYUDHA','Bandung','2017-11-01','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210199','JAKA SEPTIAN             ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210200','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210201','RIFKY RAKHMANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210202','RIAN SUTANDI             ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210203','RIYADH FIRDAUS AHMAD','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210204','GRACEVINA HERMAWAN','Bandung','2017-10-29','Perempuan','Bandung','Kawin','BPKD','III','0','V','2'),
('10210205','PRAMUDA DADANG WASNARDI','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210206','ALINTIA ROSSI','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210207','HENDRA APRIAN JAYA','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210208','DELSY SEPTRIZAL          ','Bandung','2017-11-01','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210209','JEJEN JENAL ABIDIN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210210','RISKA ENDANG APRIANTI    ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210211','HENRA SETIA NUGRAHA','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210212','MUHAMMAD F R KAISUPY','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','III','0','V','2'),
('10210213','ANISAH FAUZIYYAH         ','Bandung','2017-10-31','Perempuan','Bandung','Kawin','BPKD','III','0','V','2'),
('10210215','DERA FADLY HAMDANI','Bandung','2017-11-05','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210216','RIYAN ANGGUN PERMANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210217','VILEP GILIO LARWUY','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210218','MOCHAMAD GANI SETIAWAN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210219','ZAINI AKHMAD RAHMAD','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210220','M RIZKY ANDRA MUCHLIS','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210221','DUDE BAHRUL HAYAT','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210222','AHMAD MAULANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210224','ANGGA DWI RAMADHAN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210225','KHASEMY RAFSANJANY','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210226','OKI JANUAR INSANI MULYANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210227','M AZIZ CATUR WICAKSONO','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210229','TEGUH PRAMUTIANA PUTRA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','2'),
('10210230','FERNANDO SIHOMBING','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','1'),
('10210231','PURWANTO NUGROHO ','Bandung','2017-10-29','Perempuan','Bandung','Kawin','BPKD','II','0','IV/a','1'),
('10210232','FIRMAN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','1'),
('10210233','JONATHAN SIBURIAN','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','1'),
('10210234','ADI LESMANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','BPKD','II','0','IV/a','1'),
('10210235','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','II','0','IV/a',''),
('10210236','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','II','0','IV/a',''),
('10210237','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','II','0','IV/a',''),
('10210238','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Lajang','BPKD','II','0','0',''),
('10210239','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','BPKD','II','0','0',''),
('10210240','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','BPKD','III','0','0','2'),
('10211100','BAYU ANGGA DWIGUNA       ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','DISKOPUKM','IV','0','0','2'),
('10211101','ARIEF ARDY BUDIMAN       ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','DISKOPUKM','IV','0','III/a','2'),
('10211102','LUKY NURDIANSYAH         ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','DISKOPUKM','IV','0','II/b','2'),
('10211103','AGUNG WAHYUDA RIZKI      ','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','DISKOPUKM','IV','0','0','2'),
('10211104','ABHISEKA PAMBUDI UTOMO   ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','III/b','2'),
('10211105','WISNU BIMA PRASETYO      ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','III/b','2'),
('10211106','ARDES SETIAWAN           ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','2'),
('10211107','ALFIAN PRAYUDI           ','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','2'),
('10211108','RADEN DWI REZA PRAMUYUDHA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','2'),
('10211109','JAKA SEPTIAN             ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','1'),
('10211110','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','1'),
('10211111','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','1'),
('10211112','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','1'),
('10211113','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','DISKOPUKM','III','0','IV/a','1'),
('10220100','RIFKY RAKHMANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','IV','parongpong','III/a','2'),
('10220101','RIAN SUTANDI             ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','IV','parongpong','0','1'),
('10220102','RIAN SUTANDI             ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','parongpong','IV/a','1'),
('10220103','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','parongpong','IV/a','1'),
('10220104','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','parongpong','III/b','1'),
('10220105','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','III','parongpong','IV/a','1'),
('10220106','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','parongpong','V','1'),
('10220107','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','parongpong','V','1'),
('10220108','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','parongpong','0','1'),
('10220109','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','parongpong','V','1'),
('10220110','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','parongpong','IV/a','1'),
('10220111','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-11-01','Laki-Laki','Bandung','Kawin','0','III','parongpong','IV/a','1'),
('10220112','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','III','parongpong','V','1'),
('10220113','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','parongpong','V','2'),
('10220114','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','parongpong','0','2'),
('10220115','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','parongpong','0','2'),
('10220116','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','parongpong','0','2'),
('10220117','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','parongpong','0','2'),
('10220118','Iqra Hamida','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','parongpong','0','1'),
('10220119','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','parongpong','IV/b','1'),
('10220120','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','parongpong','IV/b','1'),
('10220121','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','parongpong','0','1'),
('10220122','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','parongpong','0','1'),
('10221100','RIYADH FIRDAUS AHMAD','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','IV','cisarua','III/a','1'),
('10221101','GRACEVINA HERMAWAN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','IV','cisarua','III/b','1'),
('10221102','PRAMUDA DADANG WASNARDI','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','IV','cisarua','0','1'),
('10221103','ALINTIA ROSSI','Bandung','2017-10-31','Perempuan','Bandung','Kawin','0','III','cisarua','0','2'),
('10221104','ALINTIA ROSSI','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','III','cisarua','IV/a','2'),
('10221105','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','cisarua','IV/a','2'),
('10221106','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','III','cisarua','IV/a','2'),
('10221107','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','cisarua','IV/a','2'),
('10221108','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','cisarua','IV/a','2'),
('10221109','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','cisarua','V','2'),
('10221110','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','cisarua','V','1'),
('10221111','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','III','cisarua','0','1'),
('10221112','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','cisarua','V','1'),
('10221113','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','cisarua','V','1'),
('10221114','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','cisarua','V','1'),
('10221115','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-31','Laki-Laki','Bandung','Lajang','0','III','cisarua','V','1'),
('10221116','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','cisarua','0','2'),
('10221117','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','cisarua','0','2'),
('10221118','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','cisarua','0','2'),
('10221119','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','cisarua','IV/b','2'),
('10221120','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','cisarua','IV/b','1'),
('10221121','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','I','cisarua','0','1'),
('10222100','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','IV','padalarang','0','2'),
('10222101','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','IV','padalarang','0','1'),
('10222102','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','padalarang','III/a','0'),
('10222103','DELSY SEPTRIZAL          ','Bandung','2017-10-31','Perempuan','Bandung','Kawin','0','III','padalarang','IV/a','0'),
('10222104','JEJEN JENAL ABIDIN','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','III','padalarang','IV/a','0'),
('10222105','RISKA ENDANG APRIANTI    ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','padalarang','IV/a','0'),
('10222106','HENRA SETIA NUGRAHA','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','padalarang','IV/a','0'),
('10222107','MUHAMMAD F R KAISUPY','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','padalarang','IV/a','0'),
('10222108','ANISAH FAUZIYYAH         ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','padalarang','V','0'),
('10222109','MUHAMMAD RIZKI AL JABARI ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','padalarang','V','0'),
('10222110','DERA FADLY HAMDANI','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','padalarang','V','0'),
('10222111','RIYAN ANGGUN PERMANA','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','padalarang','III/b','0'),
('10222112','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','padalarang','IV/b','0'),
('10222113','VILEP GILIO LARWUY','Jakarta','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','padalarang','IV/b','0'),
('10222114','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','padalarang','0','0'),
('10222115','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','padalarang','0','0'),
('10222116','MUHAMMAD FARIS RIZA AFZAL','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','padalarang','0','0'),
('10222117','MOCHAMAD GANI SETIAWAN','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','padalarang','0','0'),
('10222118','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','padalarang','0','0'),
('10222119','SATRYA ALQIRANA ANUGRAH','Bandung','2017-11-06','Laki-Laki','Bandung','Kawin','0','II','padalarang','0','0'),
('10222120','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','padalarang','0','0'),
('10223100','ZAINI AKHMAD RAHMAD','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','IV','lembang','0','2'),
('10223101','M RIZKY ANDRA MUCHLIS','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','IV','lembang','0','1'),
('10223102','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','lembang','III/a','2'),
('10223103','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','lembang','0','2'),
('10223104','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','lembang','0','2'),
('10223105','EVAN DIMAS','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','lembang','0','2'),
('10223106','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','lembang','0','1'),
('10223107','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','lembang','V','1'),
('10223108','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','lembang','V','1'),
('10223109','ANISAH FAUZIYYAH         ','Bandung','2017-10-30','Perempuan','Bandung','Kawin','0','III','lembang','V','1'),
('10223110','DEDE YANUAR FERDIANSYAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','III','lembang','V','1'),
('10223111','FERNANDO SIHOMBING','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','III','lembang','V','1'),
('10223112','GRACEVINA HERMAWAN','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','0','III','lembang','V','0'),
('10223113','TEGUH PRAMUTIANA PUTRA','Bandung','2017-10-30','Laki-Laki','Bandung','Lajang','0','III','lembang','III/b','0'),
('10223114','EVAN DIMAS','Bandung','2017-10-30','Laki-Laki','Bandung','Lajang','0','III','lembang','0','0'),
('10223115','PURWANTO NUGROHO ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','lembang','0','2'),
('10223116','WISNU BIMA PRASETYO      ','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','lembang','IV/a','2'),
('10223117','OKI JANUAR INSANI MULYANA','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','lembang','IV/a','2'),
('10223118','BAYU ANGGA DWIGUNA     ','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','II','lembang','IV/a','2'),
('10223119','DELSY SEPTRIZAL          ','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','lembang','0','1'),
('10223120','HENRA SETIA NUGRAHA','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','lembang','0','1'),
('10223121','DADANG JUNED','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','lembang','0','1'),
('10223122','ALINTIA ROSSI','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','lembang','0','0'),
('10223123','IQRA HAMIDA','Bandung','2017-10-31','Laki-Laki','Bandung','Kawin','0','II','lembang','0','0'),
('10223124','SATRYA ALQIRANA ANUGRAH','Bandung','2017-10-30','Laki-Laki','Bandung','Kawin','0','II','lembang','IV/b','2'),
('10223125','JAKA SEPTIAN ','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','0','II','lembang','IV/b','0'),
('10223126','KHASEMY RAFSANJANY','Bandung','2017-10-31','Laki-Laki','Bandung','Lajang','0','II','lembang','IV/a','0'),
('10223127','UDIN NGANGA','Bandung','2017-10-29','Laki-Laki','Bandung','Lajang','0','II','lembang','IV/a','0'),
('10223128','HERU JOKO','Bandung','2017-10-29','Laki-Laki','Bandung','Kawin','0','I','lembang','0','1'),
('197601112009102003','DINAR SUPRAPTO','Bandung','2017-11-06','Laki-Laki','Bandung','Kawin','DISPORA','IV','0','IV/B','1');

/*Table structure for table `skpd` */

DROP TABLE IF EXISTS `skpd`;

CREATE TABLE `skpd` (
  `kd_rek_skpd` varchar(50) NOT NULL,
  `nama_skpd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_rek_skpd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `skpd` */

insert  into `skpd`(`kd_rek_skpd`,`nama_skpd`) values 
('0','belum ada SKPD'),
('BPKD','Badan Pengelola Keuangan Daerah'),
('DISBUDPAR','Dinas Kebudayaan dan Pariwisata'),
('DISDUKCAPIL','Dinas Kependudukan dan Catatan Sipil'),
('DISKOPUKM','Dinas Koperasi, Usaha Kecil dan Menengah'),
('DISPORA','Dinas Kepemudaan dan Olahraga'),
('DPMPTSP','Dinas Penanaman Modal dan Pelayanan Terpadu Satu P');

/*Table structure for table `tunjangan` */

DROP TABLE IF EXISTS `tunjangan`;

CREATE TABLE `tunjangan` (
  `kd_rek_tunjangan` varchar(50) NOT NULL,
  `nama_tunjangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_rek_tunjangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tunjangan` */

insert  into `tunjangan`(`kd_rek_tunjangan`,`nama_tunjangan`) values 
('0','belum ada tunjangan'),
('5.1.1.01.02','Tunjangan Keluarga'),
('5.1.1.01.03','Tunjangan Jabatan'),
('5.1.1.01.05','Tunjangan Umum'),
('5.1.1.01.06','Tunjangan Beras'),
('5.1.1.01.07','Tunjangan PPh/Tunjangan Khusus'),
('5.1.1.01.08','Pembulatan Gaji'),
('5.1.1.01.21','Iuran Asuransi Ketenagakerjaan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
