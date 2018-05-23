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
  PRIMARY KEY (`id_mobil`),
  UNIQUE KEY `nomor_polisi` (`nomor_polisi`,`nomor_mesin`,`nomor_rangka`),
  KEY `id_pemilik` (`id_pemilik`),
  KEY `id_merk` (`id_merk`),
  KEY `id_kota` (`id_kota`),
  CONSTRAINT `tb_mobil_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `tb_pemilik_mobil` (`id`),
  CONSTRAINT `tb_mobil_ibfk_2` FOREIGN KEY (`id_merk`) REFERENCES `tb_merk` (`id_merk`),
  CONSTRAINT `tb_mobil_ibfk_3` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mobil` */

insert  into `tb_mobil`(`id_mobil`,`nomor_polisi`,`id_merk`,`tipe_mobil`,`tahun_rakit`,`bahan_bakar`,`nomor_mesin`,`nomor_rangka`,`jlh_cc`,`jlh_penumpang`,`gbr_mobil`,`gbr_bpkb`,`gbr_stnk`,`transmisi`,`biaya`,`id_kota`,`id_pemilik`,`created_at`,`status`) values 
(59,'B 2672 XCX',1,'Veloz','2015','Premium','JFZ1E1020001','ABCDEFG0000000001','1500','8','toyota-avanza-front-angle-low-view-970685.jpg','bpkb.JPG','stnk.jpg','Manual','200000',24,8,'2018-05-21 23:04:48','verified'),
(60,'B 2828 IT',2,'G','2013','Premium','JFZ1E1020002','ABCDEFG0000000002','1000','5','5.png','bpkb1.JPG','stnk1.jpg','Matic','200000',24,8,'2018-05-21 23:04:54','verified'),
(61,'B 8808 WX',3,'G','2015','Premium','JFZ1E1020003','ABCDEFG0000000003','1300','7','Suzuki_Ertiga_L_1.jpg','bpkb2.JPG','stnk2.jpg','Matic','230000',24,8,'2018-05-21 23:05:01','verified'),
(62,'B 778 ZJS',4,'G','2013','Premium','JFZ1E1020004','ABCDEFG0000000004','1300','5','datsun-go-plus-front-angle-low-view-900998.jpg','bpkb3.JPG','stnk3.jpg','Matic','230000',24,28,'2018-05-21 23:12:22','verified'),
(63,'B 864 QR',4,'G','2015','Premium','JFZ1E1020005','ABCDEFG0000000005','1300','5','datsun-go.jpg','bpkb4.JPG','stnk4.jpg','Manual','230000',24,28,'2018-05-21 23:12:27','verified'),
(64,'B 137 NJ',7,'G','2013','Solar','JFZ1E1020006','ABCDEFG0000000006','2500','8','All-New-Kijang-Innova.jpg','bpkb5.JPG','stnk5.jpg','Manual','300000',24,28,'2018-05-21 23:12:34','verified'),
(65,'DK 1589 YL',8,'Veloz','2015','Premium','JFZ1E1020007','ABCDEFG0000000007','1500','8','download.jpg','bpkb6.JPG','stnk6.jpg','Manual','230000',15,29,'2018-05-21 23:20:18','verified'),
(66,'DK 1619 KQ',3,'G','2015','Premium','JFZ1E1020008','ABCDEFG0000000008','1300','7','warna-ertiga-suzuki-model-baru-20184583.png','bpkb7.JPG','stnk7.jpg','Manual','250000',15,29,'2018-05-21 23:20:22','verified'),
(67,'DK 1775 ZJ',13,'G','2015','Solar','JFZ1E1020009','ABCDEFG0000000009','2500','8','exterior-3.jpg','bpkb8.JPG','stnk8.jpg','Manual','300000',15,29,'2018-05-21 23:20:38','verified'),
(68,'B 7745 WE',21,'VRZ','2017','Solar','JFZ1E1020010','ABCDEFG0000000010','2500','8','fit.png','bpkb9.JPG','stnk9.jpg','Matic','450000',24,8,'2018-05-22 09:45:44','verified'),
(71,'BK 1910 TS',22,'New Vellfire','2017','Premium','JFZ1E1020011','ABCDEFG0000000011','2700','8','gallery_new-car-carlist-toyota-vellfire-mpv-malaysia_3675193_4gTN19AJf99GiNvCxxQEl82.jpg','bpkb12.JPG','stnk12.jpg','Matic','1000000',102,30,'2018-05-22 09:47:30','verified'),
(72,'BK 1777 WE',11,'V LUXURY','2017','Premium','JFZ1E1020012','ABCDEFG0000000012','2000','8','All-New-Kijang-Innova1.jpg','bpkb13.JPG','stnk13.jpg','Matic','450000',102,30,'2018-05-22 09:47:37','verified'),
(73,'BK 2780 WS',18,'ULTIMATE','2017','Solar','JFZ1E1020013','ABCDEFG0000000013','2500','8','18my_pajero_sport_spinner001.png','bpkb14.JPG','stnk14.jpg','Matic','525000',102,30,'2018-05-22 09:47:41','verified'),
(74,'BK 7870 TP',14,'SRZ','2017','Premium','JFZ1E1020014','ABCDEFG0000000014','2700','8','fit1.png','bpkb15.JPG','stnk15.jpg','Matic','550000',102,30,'2018-05-22 09:47:46','verified'),
(75,'BK 5803 TX',26,'SUV','2015','Premium','JFZ1E1020015','ABCDEFG0000000015','2700','8','exterior-31.jpg','bpkb16.JPG','stnk16.jpg','Matic','870000',104,31,'2018-05-22 09:48:20','verified'),
(76,'BK 1300 WC',10,'G SERIES','2015','Premium','JFZ1E1020016','ABCDEFG0000000016','2000','8','Serena_white_sml_jpg_ximg_m_12_h_smart.jpg','bpkb17.JPG','stnk17.jpg','Manual','380000',104,31,'2018-05-22 09:48:24','verified');

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
  PRIMARY KEY (`id_pemesanan`),
  KEY `id_mobil` (`id_mobil`),
  KEY `id_pengguna` (`id_pengguna`),
  CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `tb_mobil` (`id_mobil`),
  CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemesanan` */

insert  into `tb_pemesanan`(`id_pemesanan`,`id_pengguna`,`tgl_rental`,`tgl_pengembalian`,`id_mobil`,`status`,`created_at`,`status_rental`,`ket`) values 
(2,27,'2018-05-23','2018-05-25',59,'Berhasil','2018-05-22 09:55:40','tidak','terimakasih sudah merental mobil ini, anda dapat menghubungi kami, terkait rental mobil ini.'),
(3,27,'2018-05-25','2018-05-26',60,'Masih di proses','2018-05-22 10:20:18','tidak',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemilik_mobil` */

insert  into `tb_pemilik_mobil`(`id`,`nama`,`nik`,`email`,`password`,`no_hp`,`alamat`,`id_kota`,`created_at`,`updated_at`) values 
(8,'Raditya Dika','1272072410982223','radit@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',24,'2018-04-09 18:17:37','0000-00-00 00:00:00'),
(28,'Raffi Ahmad','1272072410980003','raffi@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jl. Cempaka No.11',24,'2018-05-21 23:07:55','0000-00-00 00:00:00'),
(29,'Desi Ratnasari','1272072410980001','desi@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082237997747','jimbaran',15,'2018-05-21 23:13:18','0000-00-00 00:00:00'),
(30,'HOTMAN HUTAPEA','1272072410982245','hotman@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082237997747','Jalan Sei Karang No.118',102,'2018-05-22 09:28:39','0000-00-00 00:00:00'),
(31,'RUHUT SITOMPUL','1272072410982246','ruhut@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082237997745','Jalan Patroli No.11',104,'2018-05-22 09:40:43','0000-00-00 00:00:00');

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
  KEY `id_kota` (`id_kota`),
  CONSTRAINT `tb_pengguna_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengguna` */

insert  into `tb_pengguna`(`id`,`nama`,`email`,`password`,`no_hp`,`alamat`,`id_kota`,`status`,`created_at`,`updated_at`) values 
(17,'EVAN HIMAWAN SARAGIH','evan@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','jalan merpati no.7',102,'admin','2018-04-20 22:39:02','0000-00-00 00:00:00'),
(24,'RADITYA DIKA','radit@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',23,'user','2018-04-09 19:44:31','0000-00-00 00:00:00'),
(26,'EVAN HIMAWAN SARAGIH','himawanevan24@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082237997747','Jalan Kompi No.8',104,'user','2018-04-11 05:06:10','0000-00-00 00:00:00'),
(27,'ATIKA SARAGIH','atika@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',24,'user','2018-05-22 09:09:09','0000-00-00 00:00:00');

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

/* Procedure structure for procedure `filter` */

/*!50003 DROP PROCEDURE IF EXISTS  `filter` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `filter`(
in kota int,
in tgl_r date,
in tgl_p date)
BEGIN

	SELECT tb_pemesanan.`id_pemesanan`,tb_mobil.`id_mobil`, tb_mobil.`nomor_polisi`, tb_mobil.`id_kota`, tb_kota.`kota`, tb_provinsi.`provinsi`,
	tb_mobil.`tipe_mobil`, tb_mobil.`transmisi`, tb_mobil.`bahan_bakar`, tb_mobil.`jlh_penumpang`, 
	tb_mobil.`gbr_mobil`, tb_pemilik_mobil.`nama`, tb_merk.`merk`, tb_pemesanan.`tgl_rental`, tb_pemesanan.`tgl_pengembalian`, tb_mobil.`status` AS s_mobil, tb_pemesanan.`status`
	FROM tb_mobil
	LEFT JOIN tb_pemesanan ON tb_pemesanan.`id_mobil` = tb_mobil.`id_mobil`
	LEFT JOIN tb_merk ON tb_merk.`id_merk` = tb_mobil.`id_merk`
	LEFT JOIN tb_pemilik_mobil ON tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`
	LEFT JOIN tb_kota ON tb_kota.`id_kota` = tb_pemilik_mobil.`id_kota`
	LEFT JOIN tb_provinsi ON tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`
	WHERE tb_pemesanan.`status` !='Berhasil' AND tb_pemesanan.`tgl_rental` NOT BETWEEN tgl_r AND tgl_p 
	AND tb_pemesanan.`tgl_pengembalian`  NOT BETWEEN tgl_r AND tgl_p 
	OR tb_pemesanan.`tgl_rental` IS NULL AND tb_mobil.`status` = 'verified' AND tb_mobil.`id_kota` = kota
	GROUP BY tb_mobil.`id_mobil`;
	
	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
