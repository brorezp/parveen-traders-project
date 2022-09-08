-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2022 pada 01.04
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parveen-traders-project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `active-plan`
--

CREATE TABLE `active-plan` (
  `id` int(5) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `pair` varchar(20) NOT NULL,
  `timeframe` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `stoploss` float NOT NULL,
  `point` float NOT NULL,
  `tp-1` float NOT NULL,
  `tp-2` float NOT NULL,
  `tp-3` float NOT NULL,
  `chart` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `active-plan`
--

INSERT INTO `active-plan` (`id`, `date`, `pair`, `timeframe`, `position`, `price`, `stoploss`, `point`, `tp-1`, `tp-2`, `tp-3`, `chart`, `created_at`, `updated_at`) VALUES
(1, '2022-09-08', 'EURAUD', '1H', 'BUY', 1.4607, 1.4552, 0.0055, 1.4662, 1.4717, 1.4772, 'https://www.tradingview.com/x/cXgehtD4/', '2022-09-08 00:46:50', '2022-09-08 00:46:50'),
(2, '2022-09-07', 'EURCHF', '1H', 'BUY', 0.9784, 0.9743, 0.0041, 0.9825, 0.9866, 0.9907, 'https://www.tradingview.com/x/wBbumnMJ/', '2022-09-08 00:52:38', '2022-09-08 00:52:38'),
(9, '08-09-2022', 'GBPAUD', '1 HOUR', 'BUY', 1.7032, 1.6979, 0.0053, 1.7085, 1.7138, 1.7191, 'https://www.tradingview.com/x/NG2gAsfP/', '2022-09-08 08:43:47', '2022-09-08 08:43:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sltp`
--

CREATE TABLE `sltp` (
  `id` int(5) NOT NULL,
  `pair` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `position` varchar(20) NOT NULL,
  `stoploss` float NOT NULL,
  `margin-point` int(20) NOT NULL,
  `tp-1` float NOT NULL,
  `tp-2` float NOT NULL,
  `tp-3` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sltp`
--

INSERT INTO `sltp` (`id`, `pair`, `price`, `position`, `stoploss`, `margin-point`, `tp-1`, `tp-2`, `tp-3`, `created_at`, `updated_at`) VALUES
(1, 'EURUSD', 1.24881, 'BUY', 1.12388, 300, 1.12389, 1.12313, 1.19869, '2022-09-06 14:11:31', '2022-09-06 14:11:31'),
(2, 'USDJPY', 1.281, 'SELL', 1.123, 30, 1.112, 1.289, 1.465, '2022-09-06 14:11:31', '2022-09-06 14:11:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `active-plan`
--
ALTER TABLE `active-plan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sltp`
--
ALTER TABLE `sltp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `active-plan`
--
ALTER TABLE `active-plan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sltp`
--
ALTER TABLE `sltp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
