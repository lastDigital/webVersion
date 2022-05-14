-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 05:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lastdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `destektalep`
--

CREATE TABLE `destektalep` (
  `eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `detaylar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `ip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `destektalep`
--

INSERT INTO `destektalep` (`eposta`, `konu`, `detaylar`, `durum`, `tarih`, `ip`, `id`) VALUES
('test@mail.com', '2', 'asd', '0', '0000-00-00 00:00:00', '::1', 19);

-- --------------------------------------------------------

--
-- Table structure for table `m`
--

CREATE TABLE `m` (
  `m_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `zipcode` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `iban` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uye`
--

CREATE TABLE `uye` (
  `eposta` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` int(20) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bakiye` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `uye`
--

INSERT INTO `uye` (`eposta`, `isim`, `sehir`, `zipcode`, `telefon`, `sifre`, `bakiye`, `ip`, `tarih`, `id`) VALUES
('test@mail.com', 'test', 21, 21070, '05999999999', '3632233996', '42', '127.0.0.1', '2013-03-13 21:53:03', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destektalep`
--
ALTER TABLE `destektalep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m`
--
ALTER TABLE `m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destektalep`
--
ALTER TABLE `destektalep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `m`
--
ALTER TABLE `m`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uye`
--
ALTER TABLE `uye`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
