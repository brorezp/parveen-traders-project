-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2022 pada 15.07
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
  `date` varchar(200) DEFAULT NULL,
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
  `cancel` varchar(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `active-plan`
--

INSERT INTO `active-plan` (`id`, `date`, `pair`, `timeframe`, `position`, `price`, `stoploss`, `point`, `tp-1`, `tp-2`, `tp-3`, `chart`, `cancel`, `created_at`, `updated_at`) VALUES
(9, '09-09-2022', 'EURUSD', '1 HOUR', 'BUY', 1.7032, 1.6979, 0.0053, 1.7085, 1.7138, 1.7191, 'https://www.tradingview.com/x/NG2gAsfP/', 'FALSE', '2022-09-09 07:54:54', '2022-09-09 07:54:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `running-transaction`
--

CREATE TABLE `running-transaction` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `pair` varchar(20) NOT NULL,
  `timeframe` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `stoploss` float NOT NULL,
  `point` float NOT NULL,
  `chart` varchar(200) DEFAULT NULL,
  `tp-1` varchar(200) DEFAULT NULL,
  `tp-2` varchar(200) DEFAULT NULL,
  `tp-3` varchar(200) DEFAULT NULL,
  `finish` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `running-transaction`
--

INSERT INTO `running-transaction` (`id`, `date`, `pair`, `timeframe`, `position`, `price`, `stoploss`, `point`, `chart`, `tp-1`, `tp-2`, `tp-3`, `finish`, `created_at`, `updated_at`) VALUES
(4, '09-09-2022', 'GBPAUD', '1 HOUR', 'BUY', 1.7032, 1.6979, 0.0053, NULL, '', '', '', 'FALSE', '2022-09-09 07:29:07', '2022-09-09 07:29:07'),
(5, '09-09-2022', 'EURUSD', '1 HOUR', 'BUY', 1.7032, 1.6979, 0.0053, 'https://www.tradingview.com/x/NG2gAsfP/', '', '', '', 'FALSE', '2022-09-09 07:36:01', '2022-09-09 07:36:01');

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
-- Indeks untuk tabel `running-transaction`
--
ALTER TABLE `running-transaction`
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
-- AUTO_INCREMENT untuk tabel `running-transaction`
--
ALTER TABLE `running-transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sltp`
--
ALTER TABLE `sltp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
