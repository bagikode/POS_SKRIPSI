-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2019 at 07:07 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_foodo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('dapur','kasir','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `role`) VALUES
(1, 'dapur', 'de20b1d289dd6005ba8116085122f144', 'dapur'),
(2, 'kasir', 'c7911af3adbd12a035b289556d96470a', 'kasir'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_order` varchar(11) DEFAULT NULL,
  `id_menu` int(11) NOT NULL,
  `no_meja` int(2) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `jenis_menu` varchar(7) NOT NULL,
  `total_harga` int(8) NOT NULL,
  `total_barang` int(2) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('waiting','done','finish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keranjang`
--

INSERT INTO `tbl_keranjang` (`id_keranjang`, `id_order`, `id_menu`, `no_meja`, `nama_menu`, `jenis_menu`, `total_harga`, `total_barang`, `tanggal`, `status`) VALUES
(1, '1', 1, 1, 'Sayur Asem', 'makanan', 10000, 2, '2019-01-16 13:37:36', 'finish'),
(2, '1', 10, 1, 'Teh Tarik', 'minuman', 24000, 2, '2019-01-16 13:38:04', 'finish');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meja`
--

CREATE TABLE `tbl_meja` (
  `id_meja` int(2) NOT NULL,
  `no_meja` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_meja`
--

INSERT INTO `tbl_meja` (`id_meja`, `no_meja`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `jenis_menu` enum('makanan','minuman','','') NOT NULL,
  `harga` int(7) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_menu`, `jenis_menu`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Bean Sprouts', 'makanan', 5000, 'Air (Water)	 : 90.6 g\r\nEnergi (Energy)	 : 37 Kal\r\nProtein (Protein)	 : 4.4 g\r\nLemak (Fat)	 : 0.5 g\r\nKarbohidrat (CHO)	 : 3.8 g\r\nSerat (Fibre)	 : 1.7 g\r\nAbu (ASH)	 : 0.7 g\r\nKalsium (Ca)	 : 50 mg\r\nFosfor (P)	 : 248 mg\r\nBesi (Fe)	 : 2.0 mg\r\nNatrium (Na)	 : 2 mg\r\nKalium (K)	 : 105.0 mg\r\nTembaga (Cu)	 : 0.16 mg\r\nSeng (Zn)	 : 0.4 mg\r\nRetinol (Vit. A)	 : 0 mcg\r\nBeta-Karoten (Carotenes)	 : 0 mcg\r\nKaroten Total (Re)	 : 35 mcg\r\nThiamin (Vit. B1)	 : 0.02 mg\r\nRiboflavin (Vit. B2)	 : 0.09 mg\r\nNiasin (Niacin)	 : 0.6 mg\r\nVitamin C (Vit. C)	 : 46 mg', 'http://192.168.5.225/skripsi_foodo/assets/menu/toge.pg.jpg'),
(2, 'Ikan Asin', 'makanan', 3000, ' Ikan asin adalah bahan makanan yang terbuat dari daging ikan yang diawetkan dengan menambahkan banyak garam. Dengan metode pengawetan ini daging ikan yang biasanya membusuk dalam waktu singkat dapat disimpan di suhu kamar untuk jangka waktu berbulan-bulan, walaupun biasanya harus ditutup rapat.Selain itu daging ikan yang diasinkan akan bertahan lebih lama dan terhindar dari kerusakan fisik akibat infestasi serangga, ulat lalat dan beberapa jasad renik perusak lainnya.', 'http://192.168.5.225/skripsi_foodo/assets/menu/asin.jpg'),
(3, 'Ati Ampela', 'makanan', 7000, ' Salah satu hidangan yang selalu ada di waktu Lebaran adalah sambal goreng kentang hati sapi. Kadang dilengkapi juga dengan petai. Untuk hati sapi bisa diganti juga dengan ati ampela. Bila memasak dalam jumlah banyak, supaya lebih awet taruh dalam lemari es atau supaya lebih tahan lama lagi taruh dalam freezer, lalu saat akan dikonsumsi tinggal dipanaskan dalam microwave', 'http://192.168.5.225/skripsi_foodo/assets/menu/ati.jpg'),
(4, 'Ayam Goreng', 'makanan', 7000, ' Ayam goreng adalah hidangan yang dibuat dari daging ayam dicampur tepung bumbu yang digoreng dalam minyak goreng panas. Beberapa rumah makan siap saji secara khusus menghidangkan ayam goreng, misalnya Kentucky Fried Chicken. Sementara itu beberapa rumah makan di Indonesia juga menghidangkan ayam goreng tradisional Indonesia seperti Ayam Goreng Suharti, Fatmawati dan Mbok Berek', 'http://192.168.5.225/skripsi_foodo/assets/menu/ayam.jpg'),
(5, 'Daging Babat', 'makanan', 9000, ' Babat adalah daging yang berasal dari lambung hewan, biasanya sapi, yang diolah dan disantap sebagai lauk atau sebagai bagian dari masakan lain, misalnya soto babat, nasi goreng babat dan sebagainya', 'http://192.168.5.225/skripsi_foodo/assets/menu/babat.jpg'),
(6, 'Bandeng Presto', 'makanan', 6000, ' Bandeng presto adalah makanan khas Indonesia yang berasal dari Kota Semarang, Jawa Tengah. Makanan ini dibuat dari ikan bandeng (Chanos chanos) yang dibumbui dengan bawang putih, kunyit dan garam. Ikan bandeng ini kemudian dimasak pada alas daun pisang dengan cara presto. Presto adalah cara memasak dengan uap air yang bertekanan tinggi', 'http://192.168.5.225/skripsi_foodo/assets/menu/bandeng.jpg'),
(7, 'Sayur Cap cai', 'makanan', 5000, ' Cap cai adalah dialek Hokkian yang berarti harfiah \"aneka ragam sayur\". Cap cai adalah nama hidangan khas Tionghoa yang populer yang khas karena dimasak dari banyak macam sayuran. Jumlah sayuran tidak tentu, namun banyak yang salah kaprah mengira bahwa cap cai harus mengandung 10 macam sayuran karena secara harfiah adalah berarti \"sepuluh sayur\". Cap di dalam dialek Hokkian juga berarti \"sepuluh\", dan cai berarti sayur', 'http://192.168.5.225/skripsi_foodo/assets/menu/capcay.jpg'),
(8, 'Ikan Cue', 'makanan', 5000, 'Pindang merupakan hasil olahan ikan dengan cara kombinasi perebusan (pemasakan) dan penggaraman. Produk yang dihasilkan merupakan produk awetan ikan dengan kadar garam rendah. Menurut Kamus Besar Bahasa Indonesia, pindang memiliki pengertian \"ikan yg digarami dan dibumbui kemudian diasapi atau direbus sampai kering agar dapat tahan lama\". Setelah selesai pemasakan, biasanya wadah di mana ikan disusun langsung digunakan sebagai wadah penyimpanan dan pengangkutan untuk dipasarkan', 'http://192.168.5.225/skripsi_foodo/assets/menu/cue.jpg'),
(9, 'Sayur Kacang Panjang', 'makanan', 3000, ' Kacang panjang merupakan tumbuhan yang dijadikan sayur atau lalapan. Ia tumbuh dengan cara memanjat atau melilit. Bagian yang dijadikan sayur atau lalapan adalah buah yang masih muda dan serat-seratnya masih lunak, kacang panjang ini mudah didapati di kawasan panas di Asia. Daunnya disebut dengan lembayung dan dapat dijadikan sayuran hijau', 'http://192.168.5.225/skripsi_foodo/assets/menu/kacang.jpg'),
(10, 'Teh Tarik', 'minuman', 12000, 'Teh Tarik', 'http://192.168.5.225/skripsi_foodo/assets/menu/tehtarik.jpg'),
(11, 'Kopi Cappucino', 'minuman', 13000, ' Cappuccino adalah minuman khas Italia yang dibuat dari espresso dan susu', 'http://192.168.5.225/skripsi_foodo/assets/menu/kopi.jpg'),
(12, 'Thai Tea', 'minuman', 12000, ' Thai Tea adalah varian teh asal negeri gajah putih Thailand yang kini sudah mendunia', 'http://192.168.5.225/skripsi_foodo/assets/menu/thaitea.jpg'),
(13, 'Jus Buah', 'makanan', 10000, ' Juice adalah cairan yang secara alami terkandung dalam buah dan sayuran', 'http://192.168.5.225/skripsi_foodo/assets/menu/jus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `no_meja` int(2) NOT NULL,
  `total` int(8) NOT NULL,
  `total_barang` int(2) NOT NULL,
  `bayar` int(8) NOT NULL,
  `kembali` int(8) NOT NULL,
  `tanggal_kasir` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `no_meja`, `total`, `total_barang`, `bayar`, `kembali`, `tanggal_kasir`) VALUES
(1, 1, 34000, 4, 50000, 16000, '2019-01-16 13:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi`
--

CREATE TABLE `tbl_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `rasa` int(11) DEFAULT NULL,
  `kebersihan` int(11) DEFAULT NULL,
  `penampilan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rekomendasi`
--

INSERT INTO `tbl_rekomendasi` (`id_rekomendasi`, `id_menu`, `rasa`, `kebersihan`, `penampilan`) VALUES
(1, 1, 4, 4, 4),
(2, 2, 4, 5, 5),
(3, 3, 2, 2, 4),
(4, 4, 1, 1, 1),
(5, 5, 1, 1, 1),
(6, 6, 1, 1, 1),
(7, 7, 1, 1, 1),
(8, 8, 1, 1, 1),
(9, 9, 1, 1, 1),
(10, 10, 4, 4, 4),
(11, 11, 1, 1, 1),
(12, 12, 1, 1, 1),
(13, 13, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `tbl_meja`
--
ALTER TABLE `tbl_meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`),
  ADD KEY `id_menu` (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_meja`
--
ALTER TABLE `tbl_meja`
  MODIFY `id_meja` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
