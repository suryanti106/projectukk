-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 02:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_toko`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `detail_kategori` (IN `idNya` INT)   select * from kategori where id_kategori=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `detail_penjualan` (IN `idNya` INT(3))   select * from penjualan where id_penjualan=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `detail_produk` (IN `idNya` INT(3))   select * from produk where id_produk=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `detail_satuan` (IN `idNya` INT)   select * from satuan where id_satuan=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `detail_user` (IN `idNya` INT)   select * from user where id_user=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hapus_detailPenjualan` (IN `idNya` INT(3))   DELETE from detailpenjualan where id_detail=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hapus_kategori` (IN `idNya` INT)   DELETE from kategori where id_kategori=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hapus_produk` (IN `idNya` INT)   DELETE from produk where id_produk=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hapus_satuan` (IN `idNya` INT)   DELETE from satuan where id_satuan=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hapus_user` (IN `idNya` INT)   DELETE from user where id_user=idNya$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_detailProduk` ()   SELECT produk.id_produk,
       produk.kode_produk,
       produk.nama_produk,
       produk.harga_beli,
       satuan.nama_satuan,
       kategori.nama_kategori,
       produk.stok
       FROM produk
       JOIN satuan ON
       satuan.id_satuan=produk.id_satuan
       JOIN kategori ON
       kategori.id_kategori=produk.id_kategori
       where produk.stok > 0$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_stok` ()   SELECT 
	   produk.nama_produk,
       produk.harga_beli,
       produk.harga_jual,
       produk.stok
FROM produk
ORDER BY produk.stok ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tambah_produk` (IN `kodeNya` VARCHAR(25), IN `namaNya` VARCHAR(50), IN `hargabeliNya` INT(11), IN `hargajualNya` INT(11), IN `idSatuanNya` INT(3), IN `idKategoriNya` INT(3), IN `stokNya` INT(11))   INSERT INTO produk(kode_produk,nama_produk,harga_beli,harga_jual,id_satuan,id_kategori,stok)
VALUES (kodeNya,namaNya,hargabeliNya,hargajualNya,idsatuanNya,idkategoriNya,stokNya)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_kategori` ()   select * from kategori$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_penjualan` ()   SELECT * FROM penjualan$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_produk` ()   SELECT produk.kode_produk, produk.nama_produk, produk.harga_beli, produk.harga_jual, satuan.nama_satuan, kategori.nama_kategori, produk.stok
FROM produk
JOIN satuan ON satuan.id_satuan=produk.id_satuan
JOIN kategori ON kategori.id_kategori=produk.id_kategori$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_satuan` ()   SELECT * FROM satuan$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_user` ()   SELECT * FROM user$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_kategori` (IN `idNya` INT, IN `namaNya` INT)   BEGIN
UPDATE kategori SET id_kategori=idNya, nama_kategori=namaNya
WHERE id_kategori=idNya;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_produk` (IN `idNya` INT(3), IN `kodeNya` VARCHAR(25), IN `namaNya` VARCHAR(50), IN `hargabeliNya` INT(11), IN `hargajualNya` INT(11), IN `idsatuanNya` INT(3), IN `idKategoriNya` INT(3), IN `stokNya` INT(11))   BEGIN
UPDATE produk SET id_produk=idNya, kode_produk=kodeNya,nama_produk=namaNya,harga_beli=hargabeliNya,harga_jual=hargajualNya,id_satuan=idsatuanNya,id_kategori=idkategoriNya,stok=stokNya
WHERE id_produk=idNya;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_satuan` (IN `idNya` INT(3), IN `namaNya` VARCHAR(50))   BEGIN
UPDATE satuan SET id_satuan=idNya, nama_satuan=namaNya
WHERE id_satuan=idNya;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_user` (IN `idNya` INT(3), IN `namaNya` VARCHAR(50), IN `usernameNya` VARCHAR(50), IN `passswordNya` INT, IN `levelNya` INT)   BEGIN
UPDATE user SET id_user=idNya, nama_user=namaNya,username=usernameNya,password=passwordNya,level=levelNya
WHERE id_user=idNya;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `id_detail` int(3) NOT NULL,
  `id_penjualan` int(3) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `id_produk` int(3) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `qyt` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'pewangi'),
(4, 'sabun'),
(5, 'ciki');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(3) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `waktu` time NOT NULL,
  `grand_total` int(11) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(3) NOT NULL,
  `kode_produk` varchar(25) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `id_satuan` int(3) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga_beli`, `harga_jual`, `id_satuan`, `id_kategori`, `stok`) VALUES
(9, 'R001', 'Roti Aoka', 2000, 3000, 1, 1, 20),
(11, '1', 'Rinso', 10000, 13000, 2, 4, 40),
(13, 'B002', 'Teh Botol', 4000, 5000, 1, 2, 10),
(14, 'b003', 'Susu ', 3000, 6000, 1, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(3) NOT NULL,
  `nama_satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nama_satuan`) VALUES
(1, 'pcs'),
(2, 'renceng'),
(3, 'dus'),
(4, 'kg'),
(5, 'box');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','kasir','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(3, 'Alvina', 'vina', '999', 'kasir'),
(4, 'raisa', 'raisamark', '123', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_satuan` (`id_satuan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `id_detail` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD CONSTRAINT `detailpenjualan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `satuan` (`id_satuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
