-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Şub 2023, 14:05:13
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `breezed`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_arka_plan_renk` varchar(1000) DEFAULT NULL,
  `banner_baslik` varchar(1000) DEFAULT NULL,
  `banner_aciklama` varchar(1000) DEFAULT NULL,
  `banner_buton_metni` varchar(1000) DEFAULT NULL,
  `banner_buton_link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_arka_plan_renk`, `banner_baslik`, `banner_aciklama`, `banner_buton_metni`, `banner_buton_link`) VALUES
(2, '#ff0000', 'Banner Başlık', 'Banner Açıklama', 'İletişim', '#contact');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmetler_id` int(11) NOT NULL,
  `hizmetler_baslik` varchar(1000) NOT NULL,
  `hizmetler_aciklama` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kul_id` int(11) NOT NULL,
  `kul_isim` varchar(1000) DEFAULT NULL,
  `kul_mail` varchar(1000) DEFAULT NULL,
  `kul_telefon` varchar(1000) DEFAULT NULL,
  `kul_sifre` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kul_id`, `kul_isim`, `kul_mail`, `kul_telefon`, `kul_sifre`) VALUES
(1, 'Tolga Demir', 'tolga@tolgademir.dev', '0551 123 7591', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `navbar`
--

CREATE TABLE `navbar` (
  `navbar_id` int(11) NOT NULL,
  `navbar_calisma_saatleri` varchar(1000) DEFAULT NULL,
  `navbar_telefon_numarasi` varchar(1000) DEFAULT NULL,
  `navbar_arka_plan_renk` varchar(1000) NOT NULL,
  `navbar_sosyal_medya_1` varchar(1000) DEFAULT NULL,
  `navbar_sosyal_medya_2` varchar(1000) DEFAULT NULL,
  `navbar_sosyal_medya_3` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `navbar`
--

INSERT INTO `navbar` (`navbar_id`, `navbar_calisma_saatleri`, `navbar_telefon_numarasi`, `navbar_arka_plan_renk`, `navbar_sosyal_medya_1`, `navbar_sosyal_medya_2`, `navbar_sosyal_medya_3`) VALUES
(3, 'Pazartesi - Cuma | 09:30 - 18:00', '0 000 000 00 00', '#1e00ff', 'tolga', 'tolgademir.dev', 'tolgademirdev');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `panel_ayarlar`
--

CREATE TABLE `panel_ayarlar` (
  `id` int(11) NOT NULL,
  `panel_aciklama` varchar(1000) DEFAULT NULL,
  `panel_logo` varchar(1000) DEFAULT NULL,
  `panel_footer_yazi` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `panel_ayarlar`
--

INSERT INTO `panel_ayarlar` (`id`, `panel_aciklama`, `panel_logo`, `panel_footer_yazi`) VALUES
(5, 'Panel v.2.0', '184670favicon.jpg', 'Panel v.2.0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) NOT NULL,
  `seo_baslik` varchar(1000) NOT NULL,
  `seo_site_logo_yazi` varchar(1000) DEFAULT NULL,
  `seo_aciklama` varchar(1000) NOT NULL,
  `seo_favicon` varchar(1000) NOT NULL,
  `seo_keyword_1` varchar(1000) NOT NULL,
  `seo_keyword_2` varchar(1000) NOT NULL,
  `seo_keyword_3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `seo`
--

INSERT INTO `seo` (`seo_id`, `seo_baslik`, `seo_site_logo_yazi`, `seo_aciklama`, `seo_favicon`, `seo_keyword_1`, `seo_keyword_2`, `seo_keyword_3`) VALUES
(2, 'Seo Başlık', 'tolgademir.dev', 'Seo Açıklama', '820453breezed-favicon.png', 'Seo Anahtar Kelime 1', 'Seo Anahtar Kelime 2', 'Seo Anahtar Kelime 3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_resim` varchar(1000) DEFAULT NULL,
  `slider_baslik` varchar(1000) DEFAULT NULL,
  `slider_aciklama` varchar(1000) DEFAULT NULL,
  `slider_buton_metni` varchar(1000) DEFAULT NULL,
  `slider_buton_linki` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmetler_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kul_id`);

--
-- Tablo için indeksler `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`navbar_id`);

--
-- Tablo için indeksler `panel_ayarlar`
--
ALTER TABLE `panel_ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmetler_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `navbar`
--
ALTER TABLE `navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `panel_ayarlar`
--
ALTER TABLE `panel_ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `seo`
--
ALTER TABLE `seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
