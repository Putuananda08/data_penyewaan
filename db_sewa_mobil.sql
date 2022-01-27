-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 09:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sewa_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_mobil`
--

CREATE TABLE `tb_daftar_mobil` (
  `id_mobil` varchar(50) NOT NULL,
  `jenis_mobil` varchar(100) NOT NULL,
  `ket_mobil` text NOT NULL,
  `harga_mobil` varchar(100) NOT NULL,
  `gambar_mobil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daftar_mobil`
--

INSERT INTO `tb_daftar_mobil` (`id_mobil`, `jenis_mobil`, `ket_mobil`, `harga_mobil`, `gambar_mobil`) VALUES
('12322', 'avanza', 'mobil dalam keadaan baik, kabin yang luas dan nyaman, fitur entertainment dan Keselamatan yang Lengkap', '1500000', 'toyota-avanza-veloz_169.jpeg'),
('12323', 'rush', 'Mobil dalam keadaan baik, memiliki Fitur Entertainment dan Keselamatan yang Lengkap, tersedia AC pada bagian belakang', '2500000', 'toyota-rush1.jpg'),
('12324', 'carry', 'mobil dalam keadaan baik, kabin yang luas dan nyaman, dapat mengangkut barang dengan jumlah banyak.', '1000000', 'Suzuki-New-Carry01.jpg'),
('12325', 'alphard', 'Mobil dalam keadaan baik, memiliki Fitur Entertainment dan Keselamatan yang Lengkap, kabin mobil yang luas.', '5000000', '74d69c6a-18a4-4c16-8565-1c98f9f4388e_169.jpeg'),
('12326', 'xpender', 'Mobil dalam keadaan baik, memiliki Fitur Entertainment dan Keselamatan yang baik, mobil berjenis LMPV', '1500000', '5a3a0122150ba00f5683dacb_1559024706.jpg'),
('12327', 'ertiga', 'Mobil dalam keadaan baik, memiliki Fitur Entertainment dan Keselamatan yang baik, mobil berjenis LMPV.', '2000000', 'all-new-ertiga.jpg'),
('12328', 'yaris', 'Mobil dalam keadaan baik, memiliki Fitur Entertainment dan Keselamatan yang baik, mobil berjenis hatchback.', '1000000', '4 Alasan Memilih Mobil Hatchback.jpg'),
('12329', 'agya', 'Mobil dalam keadaan baik, memiliki Fitur Entertainment dan Keselamatan yang baik, mobil berjenis hatchback.', '2000000', '1041394_720.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_penyewaan` int(10) NOT NULL,
  `nama_penyewa` text NOT NULL,
  `jenis_mobil` varchar(250) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_penyewaan`, `nama_penyewa`, `jenis_mobil`, `tanggal`) VALUES
(2, 'alfan', 'carry', '8 agustus 2022'),
(3, 'arik', 'inova', '8 agustus 2022'),
(4, 'alfan', 'avanza', '1 januari 2022'),
(5, 'rio', 'jazz', '5 januari 2022'),
(6, 'rio', 'inova', '8 agustus 2022'),
(7, 'rio', 'inova', '8 agustus 2022'),
(8, 'rio', 'avanza', '8 agustus 2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `hak_akses`) VALUES
(1, 'putuananda', 'putu', 'putu', 'admin'),
(2, 'arik mahayana', 'arik', 'arik', 'operator'),
(3, 'agus alfan', 'alfan', 'alfan', 'operator'),
(4, 'rio satrio', 'rio', 'rio', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar_mobil`
--
ALTER TABLE `tb_daftar_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id_penyewaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
