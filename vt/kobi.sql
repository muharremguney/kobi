-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 09 Ara 2021, 23:08:45
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kobi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `kullanıcı_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`kullanıcı_ad`, `eposta`, `sifre`) VALUES
('admin', 'admin@gmail.com', 123456);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelen_urun`
--

DROP TABLE IF EXISTS `gelen_urun`;
CREATE TABLE IF NOT EXISTS `gelen_urun` (
  `urun_id` int(7) NOT NULL,
  `urun_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mevcut_miktar` int(7) NOT NULL,
  `siparis_miktari` int(7) NOT NULL,
  `gelen_miktar` int(7) NOT NULL,
  KEY `urun_id` (`urun_id`),
  KEY `mevcut_miktar` (`mevcut_miktar`),
  KEY `siparis_miktari` (`siparis_miktari`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gelen_urun`
--

INSERT INTO `gelen_urun` (`urun_id`, `urun_ad`, `mevcut_miktar`, `siparis_miktari`, `gelen_miktar`) VALUES
(1, 'cikolata', 200, 50, 150),
(2, 'gofret', 250, 79, 181),
(3, 'kek', 175, 100, 75),
(4, 'yogurt', 50, 10, 40),
(5, 'su', 75, 6, 69),
(6, 'enerji icecegi', 125, 120, 5),
(7, 'kola', 300, 150, 150),
(8, 'sakiz', 400, 320, 80),
(9, 'kraker', 160, 140, 20),
(10, 'deterjan', 65, 5, 60),
(11, 'bulaşık deterjanı', 85, 12, 73),
(12, 'cips', 99, 15, 84);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

DROP TABLE IF EXISTS `siparis`;
CREATE TABLE IF NOT EXISTS `siparis` (
  `urun_id` int(7) NOT NULL,
  `urun_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_id` int(7) NOT NULL,
  `siparis_miktari` int(7) NOT NULL,
  `siparis_verilen_tarih` date NOT NULL,
  PRIMARY KEY (`siparis_miktari`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`urun_id`, `urun_ad`, `siparis_id`, `siparis_miktari`, `siparis_verilen_tarih`) VALUES
(10, 'deterjan', 10, 5, '2021-12-25'),
(5, 'su', 5, 6, '2021-12-19'),
(4, 'yogurt', 4, 10, '2021-12-14'),
(11, 'bulaşık deterjanı', 11, 12, '2021-12-28'),
(12, 'cips', 12, 15, '2021-09-09'),
(1, 'cikolata', 1, 50, '2021-12-03'),
(2, 'gofret', 2, 79, '2021-12-05'),
(3, 'kek', 3, 100, '2021-12-07'),
(6, 'enerji icecegi', 6, 120, '2021-12-23'),
(9, 'kraker', 9, 140, '2021-12-31'),
(7, 'kola', 7, 150, '2021-12-07'),
(8, 'sakiz', 8, 320, '2021-12-01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stok_durumu`
--

DROP TABLE IF EXISTS `stok_durumu`;
CREATE TABLE IF NOT EXISTS `stok_durumu` (
  `urun_id` int(7) NOT NULL,
  `urun_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mevcut_miktar` int(7) NOT NULL,
  `min_miktar` int(7) NOT NULL,
  PRIMARY KEY (`mevcut_miktar`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `stok_durumu`
--

INSERT INTO `stok_durumu` (`urun_id`, `urun_ad`, `mevcut_miktar`, `min_miktar`) VALUES
(4, 'yogurt', 50, 100),
(10, 'deterjan', 65, 50),
(5, 'su', 75, 50),
(11, 'bulaşık deterjanı', 85, 99),
(12, 'cips', 99, 105),
(6, 'enerji icecegi', 125, 125),
(9, 'kraker', 160, 150),
(3, 'kek', 175, 225),
(1, 'cikolata', 200, 250),
(2, 'gofret', 250, 300),
(7, 'kola', 300, 275),
(8, 'sakiz', 400, 300);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(7) NOT NULL,
  `urun_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` float NOT NULL,
  `mevcut_miktar` int(7) NOT NULL,
  `urun_uretim_tarihi` date NOT NULL,
  `urun_skt` date NOT NULL,
  PRIMARY KEY (`urun_id`),
  KEY `mevcut_miktar` (`mevcut_miktar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_fiyat`, `mevcut_miktar`, `urun_uretim_tarihi`, `urun_skt`) VALUES
(1, 'cikolata', 3.45, 200, '2021-12-01', '2022-12-01'),
(2, 'gofret', 2.99, 250, '2021-12-02', '2022-04-01'),
(3, 'kek', 2.5, 175, '2021-12-05', '2022-01-05'),
(4, 'yogurt', 13, 50, '2021-12-08', '2022-01-08'),
(5, 'su', 7.5, 75, '2021-12-01', '2023-02-15'),
(6, 'enerji icecegi', 8, 125, '2021-12-10', '2022-11-10'),
(7, 'kola', 10, 300, '2021-12-06', '2022-12-06'),
(8, 'sakiz', 0.5, 400, '2021-11-15', '2022-11-15'),
(9, 'kraker', 2, 160, '2021-09-15', '2021-12-20'),
(10, 'deterjan', 52, 65, '2021-12-20', '2023-04-20'),
(11, 'bulaşık deterjanı', 9, 85, '2021-09-15', '2022-10-19'),
(12, 'cips', 8.5, 99, '2021-05-20', '2021-08-16'),
(13, 'makarna', 3.5, 200, '2021-10-09', '2021-12-09'),
(14, 'peynir', 25.9, 125, '2021-12-10', '2022-01-09');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `gelen_urun`
--
ALTER TABLE `gelen_urun`
  ADD CONSTRAINT `gelen_urun_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gelen_urun_ibfk_2` FOREIGN KEY (`mevcut_miktar`) REFERENCES `stok_durumu` (`mevcut_miktar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gelen_urun_ibfk_3` FOREIGN KEY (`siparis_miktari`) REFERENCES `siparis` (`siparis_miktari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `siparis`
--
ALTER TABLE `siparis`
  ADD CONSTRAINT `siparis_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `stok_durumu`
--
ALTER TABLE `stok_durumu`
  ADD CONSTRAINT `stok_durumu_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`mevcut_miktar`) REFERENCES `stok_durumu` (`mevcut_miktar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
