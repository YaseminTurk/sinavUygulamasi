-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Mar 2022, 20:28:37
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `arge_yazilim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ad`, `soyad`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'Yasemin', 'Türk', 'yasemin', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `kullanici_kadi`, `kullanici_sifre`) VALUES
(1, 'Nimesay', 'Türk', 'nimesay', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sinav`
--

CREATE TABLE IF NOT EXISTS `sinav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soru` text COLLATE utf8_turkish_ci NOT NULL,
  `A` text COLLATE utf8_turkish_ci NOT NULL,
  `B` text COLLATE utf8_turkish_ci NOT NULL,
  `C` text COLLATE utf8_turkish_ci NOT NULL,
  `D` text COLLATE utf8_turkish_ci NOT NULL,
  `dogru_cevap` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `sinav`
--

INSERT INTO `sinav` (`id`, `soru`, `A`, `B`, `C`, `D`, `dogru_cevap`) VALUES
(1, 'soru1', 'cevap1a', 'cevap1b', 'cevap1c', 'cevap1d', 'cevap1b'),
(2, 'soru2', 'cevap2a', 'cevap2b', 'cevap2c', 'cevap2d', 'cevap2a'),
(3, 'soru3', 'cevap3a', 'cevap3b', 'cevap3c', 'cevap3d', 'cevap3d'),
(4, 'soru4', 'cevap4a', 'cevap4b', 'cevap4c', 'cevap4d', 'cevap4c'),
(5, 'soru5', 'cevap5a', 'cevap5b', 'cevap5c', 'cevap5d', 'cevap5b'),
(6, 'soru6', 'cevap6a', 'cevap6b', 'cevap6c', 'cevap6d', 'cevap6a'),
(7, 'soru7', 'cevap7a', 'cevap7b', 'cevap7c', 'cevap7d', 'cevap7a'),
(8, 'soru8', 'cevap8a', 'cevap8b', 'cevap8c', 'cevap8d', 'cevap8d'),
(9, 'soru9', 'cevap9a', 'cevap9b', 'cevap9c', 'cevap9d', 'cevap9b'),
(10, 'soru10', 'cevap10a', 'cevap10b', 'cevap10c', 'cevap10d', 'cevap10c'),
(11, 'soru11', 'cevap11a', 'cevap11b', 'cevap11c', 'cevap11d', 'cevap11a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
