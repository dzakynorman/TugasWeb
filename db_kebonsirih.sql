-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 03:13 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kebonsirih`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `cabang` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `cabang`, `telp`, `alamat`, `keterangan`, `lat`, `lng`) VALUES
(1, 'Tanah Abang', '0811864011', 'Jl. Kebon Sirih Raya.', 'Buka Tiap Hari dari jam 11.00 - 02.00', '-6.183317', '106.825728'),
(2, 'Lebak Bulus', '(021)7666302', 'Jl. Karang Tengah Raya no.1c', 'Buka tiap hari dari jam 11.00-23.00', '-6.266844', '106.800501'),
(3, 'Pasaraya Grande', '085945040267', 'Jl. Dapur raya PG Lt LG #W1', 'Buka tiap hari dari jam 10.00-21.00', '-6.243947', '106.802905'),
(4, 'Bintaro Exchange Mall', '085727555723', 'Food Exchange,Lt 1 BEMall', 'Buka tiap hari dari jam 10.00-22.00', '-6.285386', '106.728054'),
(5, 'Taman Kuliner', '085776567351', 'Jl. Otista Raya,Ciputat', 'Buka tiap hari dari jam 04.00-23.00', '-6.322897', '106.745194'),
(6, 'Tangerang Selatan', '(021) 7415881', 'Jl. Pajajaran no.45, Pamulang', 'buka tiap hari dari jam 11.00-23.00', '-6.340167', '106.738612');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `jenis`, `nama`, `gambar`, `deskripsi`, `harga`) VALUES
(1, 'Makanan', 'Nasi Goreng Kambing', 'images/menuu.jpg', 'Nasi Goreng dengan daging kambing yang empuk dan kaya akan rempah. Lezat banget!', 41000),
(2, 'Makanan', 'Nasi Goreng Kambing 1/2 Porsi', 'images/menuu.jpg', 'Nasi Goreng dengan daging kambing yang empuk dan kaya akan rempah. Lezat banget! Cocok untuk kalian yang gak pengen terlalu kenyang', 31000),
(3, 'Makanan', 'Nasi Goreng Ayam', 'images/menu6.jpg', 'Nasi Goreng dengan daging ayam pilihan yang empuk dan kaya akan rempah. Top markotop!', 41000),
(4, 'Makanan', 'Nasi Goreng Ayam 1/2 Porsi', 'images/menu6.jpg', 'Nasi Goreng dengan daging ayam pilihan yang empuk dan kaya akan rempah. Top markotop! Pengen makan enak tapi gak pengen kekenyangan? Bisa!', 31000),
(5, 'Makanan', 'Nasi Goreng Sosis Bakso', 'images/menu12.jpg', 'Nasi Goreng dengan tambahan sosis dan bakso dan kaya akan rempah. Dijamin puas!', 41000),
(6, 'Makanan', 'Nasi Goreng Sosis Bakso 1/2 Porsi', 'images/menu12.jpg', 'Nasi Goreng dengan tambahan sosis dan bakso dan kaya akan rempah. Dijamin puas! Kini hadir dalam porsi 1/2', 31000),
(7, 'Makanan', 'Nasi Goreng Polos', 'images/menu6.jpg', 'Nasi Goreng yang penuh dengan rempah-rempah dan menimbulkan rasa lezat di mulut!', 27000),
(8, 'Makanan', 'Nasi Goreng Polos 1/2 Porsi', 'images/menu6.jpg', 'Nasi Goreng yang penuh dengan rempah-rempah dan menimbulkan rasa lezat di mulut! 1/2 porsi oke juga!', 22000),
(9, 'Makanan', 'Nasi Goreng Jumbo', 'images/menuu7.jpg', 'Porsi besar lebih puas! Rasa tetap ganas!', 67000),
(10, 'Makanan', 'Nasi Ala Kambing Guling', 'images/menu14.jpg', 'Sensasi Kambing yang empuk dan tidak bau ditambah dengan hangatnya nasi putih yang membuat sensasi rasa enak di mulut.', 50000),
(11, 'Minuman', 'Aneka Juice', 'images/drink1.jpg', 'Manisnya rasa buah membuat hati jadi senang.', 15000),
(12, 'Minuman', 'Mix Juice', 'images/drink2.jpg', 'Percampuran aneka buah membuat rasa baru di mulut.', 18000),
(13, 'Minuman', 'Es Kelapa Muda', 'images/drink3.jpg', 'Dipilih dari kelapa muda pilihan, dijamin segernye Nampolll', 20000),
(14, 'Minuman', 'Es Jeruk/Panas', 'images/drink4.jpg', 'Asem manis seger di mulut.', 10000),
(15, 'Minuman', 'Es Lemon Tea', 'images/drink5.jpg', 'Asem seger di mulut.', 8000),
(16, 'Minuman', 'Es Teh Manis/Panas', 'images/drink6.jpg', 'Manis segerr di mulut.', 5000),
(17, 'Minuman', 'Es Teh Tawar', 'images/drink12.jpg', 'Bagi yang gak suka manis nih minumannye.', 4000),
(18, 'Minuman', 'Teh Tawar Hangat', 'images/drink11.jpg', 'Bagi yang gak suka manis dan pingin yang anget-anget nih minumannye.', 2000),
(19, 'Minuman', 'Soda Susu', 'images/drink9.jpg', 'Soda nya bikin enak di dada. Rasakan sensasinye!', 15000),
(20, 'Minuman', 'Soda Gembira', 'images/drink10.jpg', 'Soda nya dijamin bikin gembira deh!', 15000),
(21, 'Minuman', 'Aneka Soft Drink', 'images/drink13.jpg', 'Bisa pilih Coca Cola, Fanta, atau Sprite. Segar pastinya!', 6000),
(22, 'Minuman', 'Kopi Hitam', 'images/drink8.jpg', 'Kopi hitam pilihan, pas banget nih buat yang demen ngopi.', 5000),
(23, 'Minuman', 'Air Mineral', 'images/drink7.jpg', 'Buat yang demen bening-bening.', 5000),
(24, 'Snack', 'Kerupuk Kampung', 'images/snack3.jpg', 'Kriuk-kriuk sedaaap!!!', 2000),
(25, 'Snack', 'Kerupuk Bangka', 'images/snack1.jpg', 'Rasa Ikan Tenggiri, Gurih dan renyah!', 7000),
(26, 'Snack', 'Emping', 'images/snack2.jpg', 'Melinjo asli, super renyah', 15000),
(27, 'Makanan', 'Mie Goreng Kari Kambing', 'images/menu10.jpg', 'Mie dengan banyaknya rempah-rempah dengan Daging Kambing membuat variasi baru yang wajib untuk dicoba! ', 38000),
(28, 'Makanan', 'Sate Kambing', 'images/menu2.jpg', 'Empuknye daging kambing membuat rasanya kebayang-bayang. Isi 8 tusuk.', 60000),
(29, 'Makanan', 'Sate Hati Kambing', 'images/menu9.jpg', 'Variasi baru yang wajib dicobain nih semuanye! Isi 8 tusuk.', 60000),
(30, 'Makanan', 'Sate Ayam', 'images/menu15.jpg', 'Wajib rasakan bedanye saus kacang di sate ayam punye kite. Isi 10 tusuk.', 35000),
(31, 'Makanan', 'Sop Kambing', 'images/menu3.jpg', 'Mau makan yang seger-seger? Wajib cobain sop kambing punye kite!', 40000),
(32, 'Makanan', 'Kambing Guling', 'images/menu8.jpg', 'Yang mau nyobain rasa kambing utuh silahkan dicoba yang satu ini.', 40000),
(33, 'Makanan', 'Telor Dadar/Ceplok', 'images/menu16.jpg', 'Yang satu ini tambahan buat makan kite.', 6000),
(34, 'Makanan', 'Nasi Putih', 'images/menu13.jpg', 'Nasi putih hangat siap santap.', 7000),
(35, 'Makanan', 'Rendanggg', '', 'Mantap', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `waktu_ambil` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_order` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `saldo` int(11) UNSIGNED DEFAULT '30000',
  `level` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `saldo`, `level`, `created_at`) VALUES
(1, 'Test', 'test@test.com', 'a8f5f167f44f4964e6c998dee827110c', 300000, 0, '2018-10-29 08:48:32'),
(2, 'Guest', 'guest@guest.com', 'efe6398127928f1b2e9ef3207fb82663', 30000, 0, '2018-11-06 16:56:30'),
(3, 'Vicky', 'vickysultan08@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 99840000, 0, '2018-11-19 16:33:13'),
(4, 'dzaky', 'dzaky@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 300000, 0, '2018-11-23 13:54:19'),
(5, 'Haha', 'haha@gaga.com', '4e4d6c332b6fe62a63afe56171fd3725', 30000, 0, '2018-11-25 14:34:54'),
(6, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 30000, 1, '2018-11-25 14:59:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD KEY `username` (`username`),
  ADD KEY `INDEX` (`id_order`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
