# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-06-27 18:11:28
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "buku"
#

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Judul_buku` varchar(20) DEFAULT NULL,
  `Pengarang` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "buku"
#

INSERT INTO `buku` VALUES (9,'sungai','dasdas'),(10,'belajar memasak','lukman'),(11,'asdas','das'),(12,'adas','sadas'),(13,'SADSADSADAS','sdadsadsadsa'),(14,'sadasdsadas','sadasdasdsadsa'),(15,'dsaasdsadasd','asdsadsadsadsa'),(16,'2213213','21312321'),(17,'dsadsad','1123213');

#
# Structure for table "detail_peminjaman"
#

DROP TABLE IF EXISTS `detail_peminjaman`;
CREATE TABLE `detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_peminjaman`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "detail_peminjaman"
#


#
# Structure for table "mahasiswa"
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `Nim_mhs` varchar(10) NOT NULL DEFAULT '',
  `Nama_mhs` varchar(20) DEFAULT NULL,
  `Almt_mhs` varchar(100) DEFAULT NULL,
  `Tlp_mhs` varchar(13) DEFAULT NULL,
  `Jurusan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Nim_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mahasiswa"
#

INSERT INTO `mahasiswa` VALUES ('1819111','Dhoni Khariri','tangerang','089123234312','RPL'),('1819120','ilham nur ramdani','tangerang kota','08982819689','sistem informasi'),('211244542','yulia','tangerang','098123','MM');

#
# Structure for table "peminjaman"
#

DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `nim_mahasiswa` varchar(10) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "peminjaman"
#


#
# Structure for table "pengembalian"
#

DROP TABLE IF EXISTS `pengembalian`;
CREATE TABLE `pengembalian` (
  `No_Pengembalian` char(6) NOT NULL DEFAULT '',
  `Tgl_Pengembalian` varchar(30) DEFAULT NULL,
  `No_Peminjaman` char(6) DEFAULT NULL,
  PRIMARY KEY (`No_Pengembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pengembalian"
#

INSERT INTO `pengembalian` VALUES ('P001','0000-00-00','P017'),('P002','10-Desember-2019','P017');
