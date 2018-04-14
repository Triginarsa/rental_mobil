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
  `status` enum('verifikasi','belum') DEFAULT 'belum',
  PRIMARY KEY (`id_mobil`),
  UNIQUE KEY `nomor_polisi` (`nomor_polisi`,`nomor_mesin`,`nomor_rangka`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mobil` */

insert  into `tb_mobil`(`id_mobil`,`nomor_polisi`,`id_merk`,`tipe_mobil`,`tahun_rakit`,`bahan_bakar`,`nomor_mesin`,`nomor_rangka`,`jlh_cc`,`jlh_penumpang`,`gbr_mobil`,`gbr_bpkb`,`gbr_stnk`,`transmisi`,`biaya`,`id_kota`,`id_pemilik`,`created_at`,`status`) values 
(29,'BK 1077 WE',1,'G','2013','Premium','JFZ1E1020380','MHJ1FJZ113GK01478','1300','8','download.jpg','toyota-avanza-rear-cross-side-view-341276.jpg','toyota-avanza-front-angle-low-view-970685.jpg','Manual','2300000',24,8,'2018-04-14 16:12:46','belum');

/*Table structure for table `tb_pemesanan` */

DROP TABLE IF EXISTS `tb_pemesanan`;

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(10) unsigned DEFAULT NULL,
  `tgl_rental` date DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `id_mobil` int(10) unsigned DEFAULT NULL,
  `status` enum('berhasil','gagal','menunggu') DEFAULT 'menunggu',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemesanan` */

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemilik_mobil` */

insert  into `tb_pemilik_mobil`(`id`,`nama`,`nik`,`email`,`password`,`no_hp`,`alamat`,`id_kota`,`created_at`,`updated_at`) values 
(8,'Raditya Dika','1272072410982223','radit@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',24,'2018-04-09 18:17:37','0000-00-00 00:00:00'),
(13,'Justin Bieber','1272072410982224','justin@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',60,'2018-04-14 14:16:45','0000-00-00 00:00:00'),
(14,'Katty Perry','1272072410982225','katty@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',61,'2018-04-14 14:18:00','0000-00-00 00:00:00'),
(15,'Justin Timberlake','1272072410982228','timber@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','Jalan Megah No.9',58,'2018-04-14 14:20:41','0000-00-00 00:00:00'),
(24,'Jonas Blue','1272072410982256','jonas@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','08223799772','medan',66,'2018-04-14 14:41:11','0000-00-00 00:00:00'),
(25,'Kodaline','1272072410982289','koda@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','08223799772','medan',64,'2018-04-14 14:42:34','0000-00-00 00:00:00'),
(26,'Kodalines','1272072410982234','kodas@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','08223799772','medan',66,'2018-04-14 14:43:14','0000-00-00 00:00:00');

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
(17,'EVAN HIMAWAN SARAGIH','imelda@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4','082235678448','jalan merpati no.7',102,'admin','2018-04-12 19:10:16','0000-00-00 00:00:00'),
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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
