-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: dbTikiku
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


--
-- Table structure for table `transaksiPengirimanBarang`
--

DROP TABLE IF EXISTS `transaksiPengirimanBarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksiPengirimanBarang` (
  `resiPengiriman` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `namaPengirim` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamatPengirim` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noTeleponPengirim` int(12) COLLATE utf8_unicode_ci NOT NULL,

  `kodeProvinsiPengirim` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `kodeKotaKabupatenPengirim` char(4) COLLATE utf8_unicode_ci NOT NULL,

  `namaPenerima` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamatPenerima` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noTeleponPenerima` int(12) COLLATE utf8_unicode_ci NOT NULL,

  `kodeProvinsiPenerima` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `kodeKotaKabupatenPenerima` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `kodeKecamatanPenerima` char(7) COLLATE utf8_unicode_ci NOT NULL,

  `kodeProdukPengiriman` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `kodeJenisBarang` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `beratBarang` int(3) COLLATE utf8_unicode_ci NOT NULL,

  `kodeStatusPengirimanBarang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggalTransaksi` datetime() COLLATE utf8_unicode_ci NOT NULL,
  `biayaPengirimanBarang` bigint(15) COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`resiPengiriman`),
  KEY `kodeProvinsiPengirim_index` (`kodeProvinsiPengirim`),
  KEY `kodeKotaKabupatenPengirim_index` (`kodeKotaKabupatenPengirim`),
  KEY `kodeProvinsiPenerima_index` (`kodeProvinsiPenerima`),
  KEY `kodeKotaKabupatenPenerima_index` (`kodeKotaKabupatenPenerima`),
  KEY `kodeKecamatanPenerima_index` (`kodeKecamatanPenerima`),
  KEY `kodeProdukPengirimanTransaksi_index` (`kodeprodukPengiriman`),
  KEY `kodeJenisBarangTransaksi_index` (`kodeJenisBarang`),
  KEY `kodeStatusPengirimanBarang_index` (`kodeStatusPengirimanBarang`),

  CONSTRAINT `kodeProvinsiPengirim_id_index` FOREIGN KEY (`kodeProvinsiPengirim`) REFERENCES `provinsi` (`kodeProvinsi`),
  CONSTRAINT `kodeKotaKabupatenPengirim_id_index` FOREIGN KEY (`kodeKotaKabupatenPengirim`) REFERENCES `kotaKabupaten` (`kodekotaKabupaten`),
  CONSTRAINT `kodeProvinsiPenerima_id_index` FOREIGN KEY (`kodeProvinsiPenerima`) REFERENCES `provinsi` (`kodeProvinsi`),
  CONSTRAINT `kodeKotaKabupatenPenerima_id_index` FOREIGN KEY (`kodeKotaKabupatenPenerima`) REFERENCES `kotaKabupaten` (`kodekotaKabupaten`),
  CONSTRAINT `kodeKecamatanPenerima_id_index` FOREIGN KEY (`kodeKecamatanPenerima`) REFERENCES `kecamatan` (`kodeKecamatan`),
  CONSTRAINT `kodeProdukPengirimanTransaksi_id_index` FOREIGN KEY (`kodeProdukPengiriman`) REFERENCES `produkPengiriman` (`kodeProdukPengiriman`),
  CONSTRAINT `kodeJenisBarangTransaksi_id_index` FOREIGN KEY (`kodeJenisBarang`) REFERENCES `jenisBarang` (`kodeJenisBarang`),
  CONSTRAINT `kodeStatusPengirimanBarang_id_index` FOREIGN KEY (`kodeStatusPengirimanBarang`) REFERENCES `statusPengirimanBarang` (`kodeStatusPengirimanBarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksiPengirimanBarang`
--											;											
											
-- Dump completed on 2017-04-29 14:57:02



--
-- Table structure for table `statusTransaksiPengirimanBarang`
--

DROP TABLE IF EXISTS `statusTransaksiPengirimanBarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statusTransaksiPengirimanBarang` (
  `idStatusTransaksi` int(4) COLLATE utf8_unicode_ci NOT NULL,
  `resiPengiriman` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `statusPengirimanBarang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggalTransaksi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`idStatusTransaksi`),
  
  KEY `statusTransaksiresiPengiriman_index` (`resiPengiriman`),
  KEY `statusTransaksiKodeStatusPengiriman_index` (`statusPengirimanBarang`),

  CONSTRAINT `tatusTransaksiresiPengiriman_index` FOREIGN KEY (`resiPengiriman`) REFERENCES `transaksiPengirimanBarang` (`resiPengiriman`),
  CONSTRAINT `statusTransaksiKodeStatusPengiriman_index` FOREIGN KEY (`statusPengirimanBarang`) REFERENCES `statusPengirimanBarang` (`kodeStatusPengirimanBarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statusTransaksiPengirimanBarang`
--											;											
											
-- Dump completed on 2017-04-29 14:57:02

