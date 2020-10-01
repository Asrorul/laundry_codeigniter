-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2020 pada 03.41
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `user_admin` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `user_admin`, `password`, `foto`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
(24, 'admink', '54e2048c3d8120924621f6e4ec2653c2', 'admink_thumb.png', 'admin'),
(27, 'adminbaru', 'dbcddd2b55ec5b104a2a1a64b8707d4a', 'adminbaru_thumb.jpg', 'admin'),
(28, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin2_thumb.jpg', 'admin'),
(29, 'adminl', 'a46164baafbeea915c42240b3cc0f278', 'adminl_thumb.png', 'admin'),
(30, 'adminl', 'a46164baafbeea915c42240b3cc0f278', 'adminl_thumb.png', 'admin'),
(31, 'umam', '21232f297a57a5a743894a0e4a801fc3', '', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`username`, `password`, `nama_customer`, `email`, `nohp`, `alamat`, `level`) VALUES
('0', 'cfcd208495d565ef66e7dff9f98764da', '0', '0', '0', '0', 'user'),
('1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', '1', '1', 'user'),
('aAA', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 'aaa', 'aaa', 'aaa', 'user'),
('admin1', '21232f297a57a5a743894a0e4a801fc3', 'n', 'n', 'n', 'n', 'user'),
('algi', '5aa5e71ddf7f3ab843899fb694ee5308', 'm rafiaaaa', 'algi', '1212', 'asasasas', 'user'),
('cek', '6ab97dc5c706cfdc425ca52a65d97b0d', 'cek', 'cek', 'cek', 'cek', 'user'),
('contohuser', '21232f297a57a5a743894a0e4a801fc3', 'asrorul umam', 'umamasrorul@gmail.com', '082134867860', 'Cendono RT 4 RW 6 Dawe Kudus', 'user'),
('hjhj', '453046a5e7e9cae0ab1cd1a82789548d', 'hjhj', 'hjhj', 'hjhj', 'hjhj', 'user'),
('l', '2db95e8e1a9267b7a1188556b2013b33', 'l', 'l', 'l', 'l', 'user'),
('m', '6f8f57715090da2632453988d9a1501b', 'm', 'm', 'm', 'm', 'user'),
('q', '7694f4a66316e53c8cdd9d9954bd611d', 'q', 'q', 'q', 'q', 'user'),
('qwer', '962012d09b8170d912f0669f6d7d9d07', 'q', 'q', 'q', 'q', 'user'),
('re', '12eccbdd9b32918131341f38907cbbb5', 're', 're', 're', 're', 'user'),
('rt', '822050d9ae3c47f54bee71b85fce1487', 'rt', 'rt', 'rt', 'rt', 'user'),
('theo', '7938414aed691e4bf32edcad0d7df0c6', 'theo', 'theo@gmail.com', '08128534512', 'jl asas', 'admin'),
('theo1', '47a9f0aaf437274444874ab420b58e63', 'theo', 'thep1', 'thep', 'theo1', 'user'),
('user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1', 'user1@gmail.com', '123456789', 'user1alamat', 'user'),
('y', '415290769594460e2e485922904f345d', 'y', 'y', 'y', 'y', 'user'),
('zaskia', 'b9cfa62452f1d3fded178fc61244f6e8', 'zaski', 'a', 'aaaaaaaa', 'zaskia', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `tanggal_pesan` varchar(100) NOT NULL,
  `jam_pesan` varchar(200) NOT NULL,
  `berat_cucian` varchar(100) NOT NULL,
  `pewangi` varchar(100) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `status_cucian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `tanggal_pesan`, `jam_pesan`, `berat_cucian`, `pewangi`, `harga`, `status_cucian`) VALUES
(13, 'theo', '15-05-2017,', '09:07', '1', 'Pewangi 1', 'Rp 0', 2),
(18, 'algi', '15-05-2017,', '07:55', '12', 'Pewangi 1', 'Rp 48000', 1),
(19, 'algi', '15-05-2017,', '08:32', '4', 'Pewangi 3', 'Rp 16000', 2),
(21, 'theo', '16-05-2017,', '07:01', '-', 'Pewangi 1', '-', 0),
(22, 'theo', '17-05-2017,', '05:19', '7', 'Pewangi 3', 'Rp 28000', 1),
(23, 'algi', '18-05-2017,', '08:32', '5', 'Pewangi 4', 'Rp 20000', 2),
(25, 'algi', '18-05-2017,', '10:06', '9', 'Pewangi 3', 'Rp 36000', 2),
(27, 'contohuser', '18-05-2020,', '09:13', '2kg', 'Pewangi 1', 'Rp 8000', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
