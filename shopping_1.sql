-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 07 Haz 2023, 20:26:12
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `shopping`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_name` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` int(10) NOT NULL,
  `urun_adet` int(5) NOT NULL,
  `urun_foto` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_name`, `urun_fiyat`, `urun_adet`, `urun_foto`) VALUES
(1, 'kareli cepli gomlek', 250, 0, '\\web proje\\jpg\\gomlek1.jpg'),
(2, 'kareli gri gömlek', 200, 3, '\\web proje\\jpg\\gomlek2.jpg'),
(3, 'beyaz gömlek', 400, 5, '\\web proje\\jpg\\gomlek3.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `user_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_password` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_mail`, `user_password`) VALUES
(1, 'oguzcum', 'oguzcuum@gmail.com', 'og123321'),
(2, 'deneme', 'deneme@gmail.com', 'deneme123'),
(3, 'zafer', 'zafer@gmail.com', 'zafer123'),
(4, 'asdasd123', 'asdasdasd@gmail.com', '12341234'),
(5, 'arkakapÄ±', 'arkakapi@gmail.com', 'asdasd123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_urun`
--

DROP TABLE IF EXISTS `user_urun`;
CREATE TABLE IF NOT EXISTS `user_urun` (
  `user_urun_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  KEY `user_urun_id` (`user_urun_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user_urun`
--

INSERT INTO `user_urun` (`user_urun_id`, `urun_id`) VALUES
(1, 1),
(1, 3),
(1, 2),
(1, 2),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(1, 2),
(3, 1),
(3, 1),
(3, 2),
(4, 3),
(4, 2),
(4, 3);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `user_urun`
--
ALTER TABLE `user_urun`
  ADD CONSTRAINT `user_urun_ibfk_1` FOREIGN KEY (`user_urun_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_urun_ibfk_2` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
