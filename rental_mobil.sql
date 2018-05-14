/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.31-MariaDB : Database - rental_mobil
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rental_mobil` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rental_mobil`;

/*Table structure for table `tb_bank` */

DROP TABLE IF EXISTS `tb_bank`;

CREATE TABLE `tb_bank` (
  `id_bank` int(8) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(50) NOT NULL,
  PRIMARY KEY (`id_bank`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_bank` */

insert  into `tb_bank`(`id_bank`,`nama_bank`) values 
(1,'BRI'),
(2,'BNI'),
(3,'MANDIRI'),
(4,'BCA'),
(5,'CIMB');

/*Table structure for table `tb_kota` */

DROP TABLE IF EXISTS `tb_kota`;

CREATE TABLE `tb_kota` (
  `id_kota` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kota` varchar(191) DEFAULT NULL,
  `id_provinsi` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_kota`),
  KEY `id_provinsi` (`id_provinsi`),
  CONSTRAINT `tb_kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kota` */

insert  into `tb_kota`(`id_kota`,`kota`,`id_provinsi`) values 
(9,'Banda Aceh',4),
(10,'Langsa',4),
(11,'Lhokseumawe',4),
(12,'Meulaboh',4),
(13,'Sabang',4),
(14,'Subulussalam',4),
(15,'Denpasar',17),
(16,'Pangkal Pinang',5),
(17,'Cilegon',18),
(18,'Serang',18),
(19,'Tangerang Selatan',18),
(20,'Tangerang',18),
(21,'Bengkulu',7),
(22,'Gorontalo',11),
(23,'Jakarta Barat',21),
(24,'Jakarta Pusat',21),
(25,'Jakarta Selatan',21),
(26,'Jakarta Timur',21),
(27,'Jakarta Utara',21),
(28,'Sungai Penuh',6),
(29,'Jambi',6),
(30,'Bandung',23),
(31,'Bekasi',23),
(32,'Bogor',23),
(33,'Cimahi',23),
(34,'Cirebon',23),
(35,'Depok',23),
(36,'Sukabumi',23),
(37,'Tasikmalaya',23),
(38,'Banjar',23),
(39,'Magelang',24),
(40,'Pekalongan',24),
(41,'Purwokerto',24),
(42,'Salatiga',24),
(43,'Semarang',24),
(44,'Surakarta',24),
(45,'Tegal',24),
(46,'Batu',25),
(47,'Blitar',25),
(48,'Kediri',25),
(49,'Madiun',25),
(50,'Malang',25),
(51,'Mojokerto',25),
(52,'Pasuruan',25),
(53,'Probolinggo',25),
(54,'Surabaya',25),
(55,'Pontianak',26),
(56,'Singkawang',26),
(57,'Banjarbaru',28),
(58,'Banjarmasin',28),
(59,'Palangkaraya',27),
(60,'Balikpapan',36),
(61,'Bontang',36),
(62,'Samarinda',36),
(63,'Tarakan',36),
(64,'Batam',2),
(65,'Tanjung Pinang',2),
(66,'Bandar Lampung',8),
(67,'Metro',8),
(69,'Ternate',16),
(70,'Tidore Kepulauan',9),
(71,'Ambon',16),
(72,'Tual',16),
(73,'Bima',31),
(74,'Mataram',31),
(75,'Kupang',32),
(76,'Sorong',34),
(77,'Jayapura',33),
(78,'Dumai',38),
(79,'Pekanbaru',38),
(80,'Makassar',12),
(81,'Palopo',12),
(82,'Parepare',12),
(83,'Palu',12),
(84,'Bau-bau',13),
(85,'Kendari',13),
(86,'Bitung',15),
(87,'Kotamobagu',15),
(88,'Manado',15),
(89,'Tomohon',15),
(90,'Bukittinggi',3),
(91,'Padang',3),
(92,'Pandangpanjang',3),
(93,'Parlaman',3),
(94,'Payakumbuh',3),
(95,'Sawahlunto',3),
(96,'Solok',3),
(97,'Lubuklinggau',10),
(98,'Pagaralam',10),
(99,'Palembang',10),
(100,'Prabumulih',10),
(101,'Binjai',1),
(102,'Medan',1),
(103,'Padang Sidempuan',1),
(104,'Pematangsiantar',1),
(105,'Sibolga',1),
(106,'Tanjungbalai',1),
(107,'Tebingtinggi',1),
(108,'Yogyakarta',35);

/*Table structure for table `tb_merk` */

DROP TABLE IF EXISTS `tb_merk`;

CREATE TABLE `tb_merk` (
  `id_merk` int(10) NOT NULL AUTO_INCREMENT,
  `merk` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tb_merk` */

insert  into `tb_merk`(`id_merk`,`merk`) values 
(1,'Toyota All New Avanza'),
(2,'Daihatsu Ayla'),
(3,'Suzuki Ertiga'),
(4,'Datsun Go'),
(5,'Daihatsu Sigra'),
(6,'Daihatsu All New Xenia'),
(7,'Toyota Grand Innova'),
(8,'Toyota Grand New Avanza'),
(9,'Hyundai H1'),
(10,'Nissan Serena'),
(11,'Toyota New Innova Reborn'),
(12,'Toyota Nav1'),
(13,'Isuzu Elf Van 14'),
(14,'Toyota All New Fortuner'),
(15,'Toyota Elf Long 17'),
(16,'Toyota Hiace Commuter'),
(17,'Toyota Hiace'),
(18,'Mitsubshi Pajero Sport'),
(19,'Toyota Vellfire'),
(20,'Toyota Camry New Hybrid'),
(21,'Toyota New Fortuner'),
(22,'Toyota New Alphard'),
(23,'Toyota New Alphard Transformer'),
(24,'Mercedes E200'),
(25,'Mercedes E250'),
(26,'Toyota Land Cruiser'),
(27,'Mercedes S300');

/*Table structure for table `tb_mobil` */

DROP TABLE IF EXISTS `tb_mobil`;

CREATE TABLE `tb_mobil` (
  `id_mobil` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor_polisi` varchar(191) DEFAULT NULL,
  `id_merk` int(10) DEFAULT NULL,
  `tipe_mobil` varchar(191) DEFAULT NULL,
  `tahun_rakit` varchar(191) DEFAULT NULL,
  `bahan_bakar` enum('Premium','Solar') DEFAULT NULL,
  `nomor_mesin` varchar(191) DEFAULT NULL,
  `nomor_rangka` varchar(191) DEFAULT NULL,
  `jlh_cc` varchar(191) DEFAULT NULL,
  `jlh_penumpang` varchar(191) DEFAULT NULL,
  `gbr_mobil` mediumblob,
  `gbr_bpkb` mediumblob,
  `gbr_stnk` mediumblob,
  `transmisi` enum('Matic','Manual') DEFAULT NULL,
  `biaya` varchar(191) DEFAULT NULL,
  `id_kota` int(10) unsigned DEFAULT NULL,
  `id_pemilik` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(191) DEFAULT 'unverified',
  `status_p` varchar(191) DEFAULT '1',
  PRIMARY KEY (`id_mobil`),
  UNIQUE KEY `nomor_polisi` (`nomor_polisi`,`nomor_mesin`,`nomor_rangka`),
  KEY `id_pemilik` (`id_pemilik`),
  CONSTRAINT `tb_mobil_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `tb_pemilik_mobil` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mobil` */

insert  into `tb_mobil`(`id_mobil`,`nomor_polisi`,`id_merk`,`tipe_mobil`,`tahun_rakit`,`bahan_bakar`,`nomor_mesin`,`nomor_rangka`,`jlh_cc`,`jlh_penumpang`,`gbr_mobil`,`gbr_bpkb`,`gbr_stnk`,`transmisi`,`biaya`,`id_kota`,`id_pemilik`,`created_at`,`status`,`status_p`) values 
(36,'B 445 UKI',3,'G','2015','Premium','ABC0E0000002','ABCDEFG0000000002','1300','8','Suzuki_Ertiga_L_1.jpg','Suzuki_Ertiga_L_1.jpg','Suzuki_Ertiga_L_1.jpg','Manual','250000',24,28,'2018-05-07 15:56:58','verified','1'),
(37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'exterior-3.jpg',NULL,NULL,NULL,'10000',NULL,28,'2018-04-26 09:31:50','unverified','1'),
(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'exterior-31.jpg',NULL,NULL,NULL,'10000',NULL,28,'2018-04-26 09:31:53','unverified','1'),
(39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'exterior-32.jpg',NULL,NULL,NULL,'10000',NULL,28,'2018-04-26 09:31:58','unverified','1'),
(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Daihatsu_Alya_L_12.jpg',NULL,NULL,NULL,'10000',NULL,NULL,'2018-04-24 08:54:25','unverified','1'),
(41,'DK 7890 PV',2,'G','2015','Solar','JFZ1E1020300','ABCDEFG0000000008','1300','4','Daihatsu_Alya_L_13.jpg','Daihatsu_Alya_L_13.jpg','Daihatsu_Alya_L_13.jpg','Manual','2300000',24,28,'2018-05-07 15:44:50','verified','1'),
(55,'DK 7890 PY',4,'G','2013','Premium','ABC0E0000003','ABCDEFG0000000003','1300','6','513.png',NULL,NULL,'Matic','230000',24,28,'2018-05-06 18:23:17','unverified','1'),
(56,'DK 7890 PW',1,'Veloz','2013','Premium','ABC0E0000005','ABCDEFG0000000005','1300','8','Daihatsu_Alya_L_16.jpg',NULL,NULL,'Manual','230000',15,29,'2018-05-07 15:51:57','verified','1'),
(57,'BK 1910 TS',6,'G','2013','Premium','ABC0E0000020','ABCDEFG0000000020','1300','3','warna-ertiga-suzuki-model-baru-20184583.png',NULL,NULL,'Matic','230000',24,28,'2018-05-11 11:24:16','verified','1');

/*Table structure for table `tb_pemesanan` */

DROP TABLE IF EXISTS `tb_pemesanan`;

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(10) unsigned DEFAULT NULL,
  `tgl_rental` date DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `id_mobil` int(10) unsigned DEFAULT NULL,
  `status` varchar(191) DEFAULT 'Masih di proses',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_rental` varchar(191) NOT NULL DEFAULT 'tidak',
  `ket` text,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemesanan` */

insert  into `tb_pemesanan`(`id_pemesanan`,`id_pengguna`,`tgl_rental`,`tgl_pengembalian`,`id_mobil`,`status`,`created_at`,`status_rental`,`ket`) values 
(59,27,'2018-04-30','2018-05-02',36,'Berhasil','2018-04-29 07:33:17','0000-00-00 00:00:00','hahahaha'),
(60,27,'2018-04-30','2018-05-10',36,'Berhasil','2018-05-01 20:58:00','0000-00-00 00:00:00','heheheh'),
(61,27,'2018-05-21','2018-05-23',36,'Masih di proses','2018-05-01 21:01:38','0000-00-00 00:00:00',NULL),
(62,27,'2018-05-08','2018-05-10',56,'Berhasil','2018-05-07 15:53:31','0000-00-00 00:00:00','hahaha'),
(63,27,'2018-05-19','2018-05-22',36,'Masih di proses','2018-05-11 12:30:58','tidak',NULL);

/*Table structure for table `tb_pemilik_mobil` */

DROP TABLE IF EXISTS `tb_pemilik_mobil`;

CREATE TABLE `tb_pemilik_mobil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) DEFAULT NULL,
  `nik` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `no_hp` varchar(191) DEFAULT NULL,
  `alamat` varchar(191) DEFAULT NULL,
  `id_kota` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`),
  UNIQUE KEY `nik` (`nik`),
  UNIQUE KEY `email` (`email`),
  KEY `id_kota` (`id_kota`),
  CONSTRAINT `tb_pemilik_mobil_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemilik_mobil` */

insert  into `tb_pemilik_mobil`(`id`,`nama`,`nik`,`email`,`password`,`no_hp`,`alamat`,`id_kota`,`created_at`,`updated_at`) values 
(8,'Raditya Dika','1272072410982223','radit@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',24,'2018-04-09 18:17:37','0000-00-00 00:00:00'),
(28,'Raffi Ahmad',NULL,'raffi@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jl. Cempaka No.11',24,'2018-05-01 22:52:47','0000-00-00 00:00:00'),
(29,'desi','1272072410980001','desi@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082237997747','jimbaran',15,'2018-05-07 15:49:07','0000-00-00 00:00:00');

/*Table structure for table `tb_pengguna` */

DROP TABLE IF EXISTS `tb_pengguna`;

CREATE TABLE `tb_pengguna` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `no_hp` varchar(191) DEFAULT NULL,
  `alamat` varchar(191) DEFAULT NULL,
  `id_kota` int(10) unsigned DEFAULT NULL,
  `status` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `id_kota` (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengguna` */

insert  into `tb_pengguna`(`id`,`nama`,`email`,`password`,`no_hp`,`alamat`,`id_kota`,`status`,`created_at`,`updated_at`) values 
(17,'EVAN HIMAWAN SARAGIH','evan@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','jalan merpati no.7',102,'admin','2018-04-20 22:39:02','0000-00-00 00:00:00'),
(24,'RADITYA DIKA','radit@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',23,'user','2018-04-09 19:44:31','0000-00-00 00:00:00'),
(26,'EVAN HIMAWAN SARAGIH','himawanevan24@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082237997747','Jalan Kompi No.8',104,'user','2018-04-11 05:06:10','0000-00-00 00:00:00'),
(27,'ATIKA SARAGIH','atika@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',64,'user','2018-04-14 14:50:02','0000-00-00 00:00:00');

/*Table structure for table `tb_provinsi` */

DROP TABLE IF EXISTS `tb_provinsi`;

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`),
  UNIQUE KEY `provinsi` (`provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `tb_provinsi` */

insert  into `tb_provinsi`(`id_provinsi`,`provinsi`) values 
(4,'Aceh'),
(17,'Bali'),
(5,'Bangka Belitung'),
(18,'Banten'),
(7,'Bengkulu'),
(11,'Gorontalo'),
(21,'Jakarta'),
(6,'Jambi'),
(23,'Jawa Barat'),
(24,'Jawa Tengah'),
(25,'Jawa Timur'),
(26,'Kalimantan Barat'),
(28,'Kalimantan Selatan'),
(27,'Kalimantan Tengah'),
(36,'Kalimantan Timur'),
(2,'Kepulauan Riau'),
(8,'Lampung'),
(16,'Maluku'),
(9,'Maluku Utara'),
(31,'Nusa Tenggara Barat'),
(32,'Nusa Tenggara Timur'),
(33,'Papua'),
(34,'Papua Barat'),
(38,'Riau'),
(12,'Sulawesi Selatan'),
(14,'Sulawesi Tengah'),
(13,'Sulawesi Tenggara'),
(15,'Sulawesi Utara'),
(3,'Sumatera Barat'),
(10,'Sumatera Selatan'),
(1,'Sumatera Utara'),
(35,'Yogyakarta');

/*!50106 set global event_scheduler = 1*/;

/* Event structure for event `cek_status` */

/*!50106 DROP EVENT IF EXISTS `cek_status`*/;

DELIMITER $$

/*!50106 CREATE DEFINER=`root`@`localhost` EVENT `cek_status` ON SCHEDULE EVERY 3 SECOND STARTS '2018-05-09 09:03:36' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
	    
	END */$$
DELIMITER ;

/* Procedure structure for procedure `validating_pesan` */

/*!50003 DROP PROCEDURE IF EXISTS  `validating_pesan` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `validating_pesan`()
BEGIN

	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
