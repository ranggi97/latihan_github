-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 03:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisataku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `pass_admin` varchar(16) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `pass_admin`, `last_login`) VALUES
(5, 'Rezel', 'rezel@gmail.com', '123', '2023-12-02 08:59:44'),
(6, 'Prof Yana', 'yahahawahyu@gmail.com', '123', '0000-00-00 00:00:00'),
(7, 'ido', 'ido123@gmail.com', '123', '0000-00-00 00:00:00'),
(8, 'agi', 'agi@gmail.com', '123', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(3) NOT NULL,
  `id_wisata` int(3) NOT NULL,
  `id_trans` int(3) NOT NULL,
  `tgl_kunjung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_wisata`, `id_trans`, `tgl_kunjung`) VALUES
(26, 43, 71, '2023-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `total_harga` double NOT NULL,
  `jumlah_pengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_user`, `total_harga`, `jumlah_pengunjung`) VALUES
(36, 1, 200000, 1),
(37, 1, 1000000, 5),
(38, 1, 400000, 2),
(65, 123, 300000, 1),
(66, 123, 250000, 1),
(67, 123, 300000, 1),
(68, 123, 200000, 1),
(69, 123, 200000, 1),
(70, 123, 100000, 1),
(71, 123, 100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `email_user` varchar(25) NOT NULL,
  `pass_user` varchar(16) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `pass_user`, `no_telp`) VALUES
(1, 'faisal', 'putrasena21@gmail.com', 'admin', '082141094350'),
(2, 'faisal', 'fais@mail.com', '123', '00000077678'),
(123, 'rezel', 'rezel@gmail.com', '123', '0202093930'),
(124, 'rezel', 'rezel@gmail.com', '123', '08919919'),
(125, 'user', 'user@gmail.com', '123', '010101010');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(3) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `harga_weekend` double NOT NULL,
  `harga_weekday` double NOT NULL,
  `deskripsi` text NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `harga_weekend`, `harga_weekday`, `deskripsi`, `thumbnail`) VALUES
(43, 'Air Terjun Curug Cimahi', 2000000, 100000, '<p><ul style=\"border: 0px; border-collapse: collapse; border-spacing: 0px; list-style: none; margin: 0px; padding: 0px; color: rgb(113, 119, 125); font-family: Roboto, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></ul></p><h1 style=\"border: 0px; border-collapse: collapse; border-spacing: 0px; list-style: none; margin: 0px; padding: 0px 0px 10px; font-style: normal; font-variant: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-stretch: normal; font-size: 18px; line-height: 22px; font-family: Roboto, sans-serif; color: rgb(113, 119, 125); letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Curug Cimahi, juga dikenal sebagai Air Terjun Cimahi, merupakan salah satu objek wisata alam yang menakjubkan di daerah Bandung, Jawa Barat, Indonesia. Berikut adalah deskripsi tentang Curug Cimahi: Ketinggian dan Keindahan Air Terjun: Curug Cimahi merupakan air terjun setinggi sekitar 87 meter, menjadikannya salah satu air terjun tertinggi di wilayah Jawa Barat. Air terjun ini mengalir deras dan membentuk pemandangan alam yang sangat indah. Lokasi yang Strategis: Curug Cimahi terletak tidak terlalu jauh dari pusat Kota Bandung, sehingga mudah diakses oleh para wisatawan. Meskipun berada di dekat perkotaan, tetapi air terjun ini tetap mempertahankan keaslian dan kealamian lingkungannya. Hijauan alam dan Suasana Sejuk: Sekitar Curug Cimahi terdapat hutan-hutan hijau yang lebat, memberikan suasana sejuk dan segar. Pengunjung dapat menikmati udara segar sambil mendengarkan gemericik air terjun dan merasakan ketenangan alam. Jalur Pendakian dan Trekking: Bagi para pecinta petualangan, Curug Cimahi menyediakan jalur pendakian dan trekking yang memungkinkan pengunjung untuk menikmati keindahan alam sekitarnya. Perjalanan menuju air terjun ini menawarkan pemandangan alam yang menakjubkan sepanjang perjalanan. Fasilitas Wisata: Di sekitar area Curug Cimahi, terdapat fasilitas-fasilitas wisata yang mendukung kenyamanan pengunjung, seperti tempat istirahat, warung makan, dan area parkir. Aktivitas Fotografi: Keindahan alam Curug Cimahi membuatnya menjadi tempat yang populer bagi para pecinta fotografi. Pengunjung dapat mengabadikan momen indah air terjun, hutan hijau, dan keelokan alam sekitarnya. Keunikan Batu Cincin: Di sekitar Curug Cimahi, terdapat formasi batu-batu besar yang dikenal sebagai \"Batu Cincin.\" Batu-batu ini menambah daya tarik visual dan menjadi objek menarik untuk dieksplorasi oleh pengunjung. Curug Cimahi adalah destinasi wisata yang ideal bagi mereka yang mencari pengalaman alam yang menenangkan dan menakjubkan. Keindahan air terjun, paduan hijaun</h1>', 'f8c2da18f1f4c715a1fc4c26adc5c462.jpeg'),
(45, 'Tangkuban Parahu', 200000, 10000, '<p></p><ul style=\"border: 0px; border-collapse: collapse; border-spacing: 0px; list-style: none; margin: 0px; padding: 0px; color: rgb(113, 119, 125); font-family: Roboto, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></ul><p></p><h1 style=\"border: 0px; border-collapse: collapse; border-spacing: 0px; list-style: none; margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 18px; line-height: 22px; font-family: Roboto, sans-serif; color: rgb(113, 119, 125);\">Gunung Tangkuban Perahu adalah sebuah gunung berapi yang terletak sekitar 30 kilometer utara Kota Bandung, Jawa Barat, Indonesia.Berikut adalah deskripsi tentang Gunung Tangkuban Perahu: Bentuk yang Unik: Salah satu ciri khas Gunung Tangkuban Perahu adalah bentuknya yang unik. Nama \"Tangkuban Perahu\" sendiri berasal dari bahasa Sunda yang berarti \"perahu terbalik.\" Jika dilihat dari kejauhan, gunung ini memang menyerupai perahu yang terbalik. Kawah yang Menakjubkan: Gunung Tangkuban Perahu memiliki beberapa kawah yang menakjubkan dan sangat terkenal. Kawah Ratu adalah yang paling besar dan paling terkenal di antaranya. Kawah ini memiliki pemandangan yang spektakuler dengan dinding kawah yang tinggi dan dikelilingi oleh asap dan uap belerang. Aktivitas Fumarol dan Belerang: Di sekitar kawah-kawah Gunung Tangkuban Perahu, terdapat aktivitas fumarol dan belerang yang menciptakan pemandangan alam yang sangat unik. Uap dan asap yang keluar dari kawah memberikan suasana misterius dan memikat. Aksesibilitas yang Baik: Gunung Tangkuban Perahu mudah diakses dari pusat Kota Bandung. Terdapat jalan raya yang membawa pengunjung hingga ke puncak gunung, memudahkan wisatawan untuk menikmati pemandangan tanpa harus melewati perjalanan yang sulit. Kegiatan Wisata: Di sekitar kawasan Gunung Tangkuban Perahu, terdapat berbagai fasilitas wisata seperti toko suvenir, tempat makan, dan area parkir. Pengunjung juga dapat melakukan trekking ringan di sekitar kawah-kawah gunung untuk mendapatkan pengalaman yang lebih dekat dengan keindahan alamnya. Pemandangan Alam yang Indah: Dari puncak Gunung Tangkuban Perahu, pengunjung dapat menikmati pemandangan alam yang menakjubkan, termasuk lembah-lembah hijau dan pegunungan di sekitarnya. Pemandangan ini membuat perjalanan ke gunung ini menjadi pengalaman yang tak terlupakan.</h1>', '82ab0da36fa98cbd0461fc73ca6fc58d.jpeg'),
(46, 'Pantai Pangandaraan', 10000, 5400, '<h1 style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 18px; line-height: 22px; font-family: Roboto, sans-serif; margin-top: 0px; margin-bottom: 0px; color: rgb(113, 119, 125); border: 0px; border-collapse: collapse; border-spacing: 0px; list-style: none; padding: 0px 0px 10px;\">Pangandaran adalah sebuah destinasi wisata pantai yang terletak di Kabupaten Pangandaran, Jawa Barat, Indonesia. Pantai Pangandaran terkenal karena keindahan alamnya yang memikat, pasir putihnya yang lembut, dan ombaknya yang cocok untuk berselancar. Berikut adalah deskripsi tentang Pantai Pangandaran: Pasir Putih yang Lembut: Pantai Pangandaran memiliki sepanjang garis pantai dengan pasir putih yang lembut, menciptakan suasana yang menyenangkan untuk berjalan-jalan atau sekadar bersantai di tepi pantai. Ombak yang Cocok untuk Berselancar: Bagi para penggemar olahraga air, Pantai Pangandaran menawarkan ombak yang cukup besar dan stabil, membuatnya menjadi tempat yang populer untuk berselancar. Pemandangan laut yang indah menjadi latar belakang yang sempurna untuk menikmati kegiatan berselancar.</h1>', '9e3a75632fa6a1460555fb4eae7b531b.jpeg'),
(47, 'Taman Wisata Lembang', 20000, 10000, '<p>Taman Wisata Alam Lembang, atau sering disebut juga sebagai Taman Wisata Marga Satwa dan Budaya Kinangkara, merupakan destinasi wisata populer di Lembang, Bandung, Jawa Barat. Berikut adalah deskripsi tentang Taman Wisata Alam Lembang:<br></p>', 'c48afe046dead7b8c2ab574cdcd7df91.jpeg'),
(48, 'Kampung Naga Tasikmalaya', 15000, 10000, '<p>Kampung Naga adalah sebuah kampung tradisional yang terletak di Kabupaten Tasikmalaya, Jawa Barat, Indonesia. Kampung ini menjadi salah satu contoh kampung adat Sunda yang masih mempertahankan keaslian budaya dan tradisi lokal. Berikut adalah deskripsi tentang Kampung Naga:<br></p>', '94a0ae8a19234f715c1bfe4e6c6eecb3.jpeg'),
(49, 'Museumgeologi Bandung', 3000, 2900, '<p>Museum Geologi Bandung adalah sebuah institusi museum yang terletak di Kota Bandung, Jawa Barat, Indonesia. Museum ini menjadi salah satu destinasi wisata edukatif yang menawarkan wawasan tentang geologi, fosil, mineral, dan kekayaan alam Indonesia. Berikut adalah deskripsi tentang Museum Geologi Bandung:<br></p>', 'bdbff21bb0ac57c4e824f00b14df1ee7.jpeg'),
(50, 'Danau Toba Sumatra', 10000, 3900, '<p>Danau Toba adalah danau vulkanik terbesar di dunia dan merupakan salah satu keajaiban alam Indonesia. Terletak di Pulau Sumatra, danau ini memiliki karakteristik unik dan keindahan yang memukau. Berikut adalah deskripsi tentang Danau Toba<br></p>', 'fa156085f73b99ab0a891eaee7d39ade.jpeg'),
(51, 'Gunung Merapi Jawa', 3000, 10000, '<p>Gunung Merapi adalah sebuah gunung berapi yang terletak di Pulau Jawa, Indonesia. Nama \"Merapi\" berasal dari bahasa Jawa yang artinya \"gunung berapi.\" Gunung Merapi merupakan salah satu gunung berapi yang paling aktif di dunia dan seringkali mengalami letusan yang cukup besar.<br></p>', 'e3d53ef67df930117406c19a7827bf88.jpeg'),
(52, 'Pantai Kuta. Bali.', 10000, 9000, '<p>Pantai Kuta adalah salah satu pantai paling terkenal dan populer di Bali, Indonesia. Terletak di sebelah selatan pulau, pantai ini menawarkan pesona alam yang menakjubkan, pasir putih halus, dan ombak yang cocok untuk berselancar<br></p>', '4bbc58dcbcce480bc286f0f494dfe97b.jpeg'),
(53, 'Raja Ampat, Papua Barat', 600000, 10000, '<p>Raja Ampat adalah destinasi wisata yang luar biasa di Provinsi Papua Barat, Indonesia. Dikenal sebagai salah satu tujuan penyelaman terbaik di dunia, Raja Ampat memiliki keindahan bawah laut yang menakjubkan dan keanekaragaman hayati laut yang luar biasa. Berikut adalah deskripsi Raja Ampat<br></p>', 'cd5c65221dbcc6ac03a5ad36a50a57b9.jpeg'),
(54, 'Kepulauan Mentawai, Sumatra Barat', 90000, 54000, '<p>Kepulauan Mentawai adalah gugusan pulau-pulau yang terletak di lepas pantai barat Sumatra, Indonesia. Berikut adalah deskripsi mengenai Kepulauan Mentawai:<br></p>', 'e3e667f27b90ab895a1714861b46aded.jpeg'),
(55, 'Candi Borobudur', 50000, 10000, '<p>Candi Borobudur adalah sebuah kompleks candi Buddha yang megah, terletak di Kabupaten Magelang, Jawa Tengah, Indonesia. Berikut adalah deskripsi mengenai Candi Borobudur&nbsp;<br></p>', 'daafa05d255effb7d6e9c55ff7c6fa01.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `fk_wisata` (`id_wisata`),
  ADD KEY `fk_trans` (`id_trans`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `fk_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_trans`) REFERENCES `transaksi` (`id_trans`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
