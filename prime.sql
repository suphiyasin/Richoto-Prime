-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Eyl 2022, 14:00:46
-- Sunucu sürümü: 8.0.27
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `prime`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dmlistesi`
--

DROP TABLE IF EXISTS `dmlistesi`;
CREATE TABLE IF NOT EXISTS `dmlistesi` (
  `Username` text NOT NULL,
  `PK` text NOT NULL,
  `Takipci` text NOT NULL,
  `Tik` text NOT NULL,
  `Statu` int NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesaplar`
--

DROP TABLE IF EXISTS `hesaplar`;
CREATE TABLE IF NOT EXISTS `hesaplar` (
  `kadi` text NOT NULL,
  `sifre` text NOT NULL,
  `Cookie` text NOT NULL,
  `SesID` text NOT NULL,
  `Adid` text NOT NULL,
  `Mid` text NOT NULL,
  `Statu` int NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `smtp`
--

DROP TABLE IF EXISTS `smtp`;
CREATE TABLE IF NOT EXISTS `smtp` (
  `host` text NOT NULL,
  `port` text NOT NULL,
  `email` text NOT NULL,
  `sifre` text NOT NULL,
  `kimden` text NOT NULL,
  `baslik` text NOT NULL,
  `taslak` text NOT NULL,
  `Statu` int NOT NULL,
  `Link` text NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `toplananhesaplar`
--

DROP TABLE IF EXISTS `toplananhesaplar`;
CREATE TABLE IF NOT EXISTS `toplananhesaplar` (
  `Username` text NOT NULL,
  `PK` text NOT NULL,
  `Takipci` text NOT NULL,
  `Tik` text NOT NULL,
  `Mail` text NOT NULL,
  `Tel` text NOT NULL,
  `Statu` int NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1582 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
