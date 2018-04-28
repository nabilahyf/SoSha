-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2018 at 07:10 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosha`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikut_kegiatan`
--

CREATE TABLE `ikut_kegiatan` (
  `ikut_id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `view` int(1) NOT NULL,
  `joined_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `description` text NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `slot` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kegiatan_id`, `user_id`, `title`, `gambar`, `description`, `tanggal`, `tempat`, `slot`, `created_at`, `updated_at`) VALUES
(1, 2, 'Kanker Otak, Bisa Saya, Kamu, Dia, dan Mereka', '1524601140_contoh-seminar.jpg', 'Kanker Otak, Bisa Saya, Kamu, Dia, dan Mereka” ini merupakan bentuk kepedulian mahasiswa biokimia yang tergabung dalam Community of Research and Education in Biochemistry (CREB’s) tentang masalah kanker yang presentasenya meningkat dari tahun ke tahun. Sasaran peserta seminar ini adalah seluruh mahasiswa Institut Pertanian Bogor (IPB), mahasiswa non-IPB, dan masyarakat umum. Seminar ini melibatkan 50 orang panitia.', '2018-04-19', 'lembur kuring', 3, '2018-04-26 16:27:59', NULL),
(2, 2, 'PERANG MELAWAN NARKOBA', '1524758806_contoh-seminar.jpg', ' Saat ini maraknya penyebaran narkoba di negeri kita bisa dikatakan hampir mencapai tingkat kritis, pasalnya tidak hanya di kawasan kota saja bahkan narkoba masuk ke pelosok-pelosok atau pedesaan. Narkoba sama menghawatirkannya dengan korupsi, kedua hal tersebut yang membobrok nilai moral bangsa kita. Jum’at tanggal 20 september 2013 di adakannya seminar “PERANG MELAWAN NARKOBA UPAYA MENYELAMATKAN GENERASI PENERUS BANGSA” yang di selenggarakan di Teatrikal UIN Sunan Kalijaga Yogyakarta dengan pembicara : Bapak Budi Harso kepala Badan Narkotika Nasional (BNN) DIY, Bapak Hanung dari Badan Kesbalingnas DIY, serta perwakilan dari Dekan fakultas Ilmu sosial Humaniora (Fishum) bapak Fajar Iqbal. Seminar tersebut di adakan atas kerjasama antara Pemerintah DIY dan UIN Sunan Kalijaga guna membenahi remaja dampak-dampak negative menggunakan barang illegal tersebut.\r\n\r\nSebelum itu saya akan mendeskripsikan tentang Narkoba terlebih dahulu, Narkoba atau NAPZA adalah bahan / zat yang dapat mempengaruhi kondisi kejiwaan / psikologi seseorang ( pikiran, perasaan dan perilaku ) serta dapat menimbulkan ketergantungan fisik dan psikologi. Yang termasuk dalam NAPZA adalah : Narkotika, Psikotropika dan Zat Adiktif lainnya. Narkotika adalah suatu obat atau zat alami, sintetis maupun non sintetis yang dapat menyebabkan turunnya kesadaran, menghilangkan atau mengurangi hilang rasa atau nyeri dan perubahan kesadaran yang menimbulkan ketergantungna akan zat tersebut secara terus menerus. Contohnya ganja, heroin, kokain, morfin, amfetamin, dll.\r\n\r\nSebetulnya penggunaan narkotik, obat-obatan, psikotropika dan zat adiktif lainnya (NAPZA) untuk berbagai tujuan telah ada sejak jaman dahulu kala. Masalah timbul bila narkotik dan obat-obatan digunakan secara berlebihan sehingga cenderung kepada penyalahgunaan dan menimbulkan kecanduan (dalam bahasa Inggris disebut “substance abuse”). Dengan adanya penyakit-penyakit yang dapat ditularkan melalui pola hidup para pecandu, maka masalah penyalahgunaan NAPZA menjadi semakin serius. Lebih memprihatinkan lagi bila yang kecanduan adalah remaja yang merupakan masa depan bangsa, karena penyalahgunaan NAPZA ini sangat berpengaruh terhadap kesehatan, sosial dan Ekonomi suatu bangsa.\r\n\r\nDalam istilah sederhana NAPZA berarti zat apapun juga apabila dimasukkan keda1am tubuh manusia, dapat mengubah fungsi fisik dan/atau psikologis. NAPZA psikotropika berpengaruh terhadap system pusat syaraf (otak dan tulang belakang) yang dapat mempengaruhi perasaan, persepsi dan kesadaran seseorang. NARKOTIKA:\r\n\r\nMenurut UU RI No 22 / 1997, Narkotika adalah: zat atau obat yang berasal dari tanaman atau bukan tanaman baik sintetis maupun semisintetis yang dapat menyebabkan penurunan atau perubahan kesadaran, hilangnya rasa, mengurangi sampai menghilangkan rasa nyeri, dan dapat menimbulkan ketergantungan.\r\n\r\nNarkotika terdiri dari 3 Golongan :1. Golongan I : Narkotika yang hanya dapat digunakan untuk tujuan pengembangan ilmu pengetahuan dan tidak digunakan dalam terapi, serta mempunyai potensi sangat tinggi mengakibatkan ketergantungan. Contoh : Heroin, Kokain, Ganja. Narkotika golongan I tidak boleh digunakan untuk pengobatan (Budi H) 2. Golongan II : Narkotika yang berkhasiat pengobatan, digunakan sebagai pilihan terakhir dan dapat digunakan dalam terapi dan / atau untuk tujuan pengembangan ilmu pengetahuan serta mempunyai potensi tinggi mengakibatkan ketergantungan. Contoh : Morfin, Petidin. 3. Golongan III : Narkotika yang berkhasiat pengobatan dan banyak digunakan dalam terapi dan / atau tujuan pengebangan ilmu pengetahuan serta mempunyai potensi ringan mengakibatkan ketergantungan. ', '2018-04-30', 'UIN Sunan Kalijaga', 1, '2018-04-26 16:28:04', '2018-04-26 16:06:46'),
(3, 3, 'Mikrotik Training Seminar', '1524749168_seminar3.jpg', 'Untuk mempercepat menguasaan dan pemahaman terhadap Mikrotik RouterOS dan juga perangkat-perangkat wireless Mikrotik, kami mengadakan pelatihan Mikrotik, yang dapat diikuti oleh orang-orang yang berminat untuk dapat menggunakan Mikrotik. Citraweb Solusi Teknologi telah ditunjuk oleh Mikrotik sebagai Mikrotik Certified Training Partner, yang berhak untuk mengadakan acara-acara pelatihan dan mengeluarkan sertifikat yang juga terdaftar secara resmi di Mikrotik. ', '2018-04-29', 'Jakarta selatan', 4, '2018-04-27 18:39:21', NULL),
(4, 3, 'Seribu Berkah untuk Yatim dan Dhuafa', '1524749332_contoh-seminar.jpg', ' \r\n\r\nJAKARTA -- \"Aku dan pemelihara anak yatim, akan berada di surga kelak,\" sabda Nabi Muhammad SAW, sambil mengisyaratkan dan mensejajarkan kedua jari tengah dan telunjuknya dalam hadis yang diriwayatkan Bukhari. Dari hadis tersebut, Nabi Muhammad SAW, memiliki perhatian yang sangat besar kepada yatim piatu.\r\n\r\nSelaras dengan apa yang telah disabdakan oleh Nabi SAW, Keluarga Muslim City Bank (KMC) bersama Dompet Dhuafa menggelar acara bertajuk “Santunan S­­­­­­­­­­eribu Berkah untuk Yatim dan Dhuafa,” di Yayasan Yatim Piatu Bamadita Rahman, Lubang Buaya, Kamis (16/6). Acara santunan ini  merupakan salah satu program KMC, di mana semua dananya berasal dari zakat, infaq dan sedekah karyawan City Bank.\r\n\r\n“Donasi yang diberikan khusus untuk malam ini totalnya Rp. 150 juta, dengan rincian Rp. 69 juta untuk 460 anak yatim piatu Yayasan Bamadita Rahman. Sedangkan sisanya akan dibagikan melalui cabang-cabang Dompet Dhuafa yang tersebar di Indonesia. Dari santunan itu, masing-masing anak mendapatkan Rp. 150 ribu,” terang Ketua KMC, Riko Tasmaya.\r\n\r\nHj. Tati Bambang Madiyono selaku Ketua Yayasan Yatim Piatu Bamadita Rahman mengungkapkan kebahagiaannya, lantaran kegiatan seperti ini jarang terjadi. Pasalnya baru kali kedua Dompet Dhuafa dan KMC menyelenggarakan acara seperti itu. “Harapan ke depannya, kalau ingin menengok kembali anak-anak di sini, kami membuka  pintu seluas-luasnya dan yang jelas acara ini bermanfaat sekali bagi anak-anak kami di sini,” ungkapnya, saat ditemui di sela-sela acara tersebut.\r\n\r\nAcara ini adalah bagian dari program kerjasama KMC dan Dompet Dhuafa. Acara tersebut  merupakan salah satu langkah program pemberdayaan atau donasi zakat, infaq dan sedekah yang terhimpun dari para anggota KMC. Selain program santunan ada juga beberapa program yang sifatnya berkelanjutan, seperti program ekonomi dan pendidikan. “Kami harap ke depannya kerjasama ini terus terjalin. Karena tak terasa sudah tahun ke-5 kerjasama antara Dompet Dhuafa dan KMC,” tutup Sulis Tiqomah, selaku Penanggung Jawab penghimpunan ZISWAF Dompet Dhuafa. (Dompet Dhuafa/Mahfud)\r\n', '2018-05-03', 'Jakarta', 3, '2018-04-26 16:36:36', '2018-04-26 16:36:36'),
(5, 3, 'Sumbangan Warga Aceh untuk Pesawat RI', '1524749772_contoh-seminar-2.jpeg', 'JawaPos.com - Sang ahli arsiparis dokumen rasanya tak salah jika disematkan pada Nyak Sandang. Sebab ia telah menjaga dan merawat bukti kuitansi sumbangan untuk membeli pesawat pertama Indonesia, RI-001, puluhan tahun lamanya.\r\n\r\nBukti berupa secarik kertas ini, diterimanya ketika itu dari seorang utusan Wedaan atau Bupati Kabupaten Aceh Jaya, Aceh pada 1950. Hingga kini bukti itu masih utuh dan disimpannya dengan rapi. meski sudah berusia 68 tahun. Ia menjaganya sangat baik dan telaten.\r\n\r\nNyak Sandang ialah satu dari sekian warga Aceh yang ikut menyumbang. Lelaki ini lahir pada 4 Februari 1927 silam di Gampong Mukhan, Kecamatan Jaya, Aceh Jaya. Kini ia tinggal bersama istrinya, Fatimah, 88 dan rumahnya berdampingan dengan anak-anaknya.', '2018-04-17', 'Aceh', 2, '2018-04-27 18:48:01', NULL),
(6, 2, 'Bantuan untuk Korban Banjir Garut', '1524758908_contoh-seminar.jpg', '            HAMPIR mendekati setahun sejak terjadinya musibah banjir bandang yang melanda Garut pada 26 September 2016 lalu, rumah bantuan untuk para korban banjir bandang yang berlokasi di Kampung Papanggungan Desa Lengkongjaya, Kecamatan Karangpawitan, Kabupaten Garut, selesai dibangun dan diserahterimakan kepada Pemerintah Kabupaten Garut, mewakili para korban.\r\n\r\nPembangunan Rumah Rakyat Ramah Lingkungan (Rural), yang dibangun Dompet Dhuafa ini menggunakan teknologi Rumah Instan Sehat Sederhana (Risha) dari Indocement yang dipadukan dengan teknologi pengolahan limbah melalui biodigester, yang kemudian disalurkan kembali ke setiap rumah dalam bentuk energi terbarukan.\r\n\r\nRural yang dibangun merupakan rumah tipe 36. Sebanyak 30 unit Rural yang pembangunannya dikerjakan Dompet Dhuafa, 11 unit di antaranya merupakan sumbangan dari warganet yang menyumbang melalui platform kitabisa.com yang digagas Wali Kota Bandung Ridwan Kamil.', '2018-04-18', 'Garut', 6, '2018-04-28 05:43:01', '2018-04-26 16:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `jenkel` char(1) NOT NULL,
  `birthday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `foto`, `email`, `password`, `full_name`, `alamat`, `no_tlp`, `jenkel`, `birthday`) VALUES
(2, '1524510972_me.jpg', 'remonc97@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'Gugum Gumilar', 'Jln. Gandaria no 45 rt 02 rw 05 Kelurahan Serua Kecamatan Bojongsari - Depok (16516)', '085659666470', 'L', 'Subang / 24 Januari 1997'),
(3, '1524749080_me2.jpeg', 'test@t.com', 'e358efa489f58062f10dd7316b65649e', 'account tester', 'Jln. ', 'xxx', 'L', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikut_kegiatan`
--
ALTER TABLE `ikut_kegiatan`
  ADD PRIMARY KEY (`ikut_id`),
  ADD KEY `id_kegiatan` (`kegiatan_id`),
  ADD KEY `id_peserta` (`user_id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikut_kegiatan`
--
ALTER TABLE `ikut_kegiatan`
  MODIFY `ikut_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ikut_kegiatan`
--
ALTER TABLE `ikut_kegiatan`
  ADD CONSTRAINT `ikut_kegiatan_ibfk_1` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`kegiatan_id`),
  ADD CONSTRAINT `ikut_kegiatan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
