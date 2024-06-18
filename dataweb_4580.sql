-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 08:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataweb_4580`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_gambar` varchar(25) NOT NULL,
  `berita_tanggal` date NOT NULL,
  `user_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_gambar`, `berita_tanggal`, `user_nama`) VALUES
(0, 'Timnas Indonesia Lolos Ke Ronde 3 Kualifikasi Piala Dunia 2026', 'Timnas Indonesia merebut tiket ke Putaran Ketiga Kualifikasi Piala Dunia 2026 sebagai runner-up Grup F putaran kedua. Skuad Garuda hanya kalah bersaing dari Irak.\r\n\r\nKesuksesan ini bukan hanya mengantar Timnas Indonesia ke Putaran Ketiga Kualifikasi Piala Dunia 2026. Melainkan juga menyegel satu tempat bagi Skuad Garuda di Piala Asia 2027.\r\n\r\nBerikut adalah hasil pembagian pot drawing putaran ketiga Kualifikasi Piala Dunia 2026 zona Asia:\r\n\r\nPot 1: Jepang, Iran, Korea Selatan\r\nPot 2: Australia, Qatar, Irak\r\nPot 3: Arab Saudi, Uzbekistan, Yordania\r\nPot 4: Uni Emirat Arab, Oman, Bahrain\r\nPot 5: China, Palestina, Kirgisztan\r\nPot 6: Korea Utara, Indonesia, Kuwait\r\n\r\nDi putaran ketiga nanti, setiap tim akan menempuh 10 pertandingan, 5 laga kandang, 5 laga tandang. Berikut gambaran jadwal pertandingan Kualifikasi Piala Dunia 2026 Zona Asia Ronde 3 selengkapnya:\r\n\r\nMatchday 1 | 5 September 2024\r\nMatchday 2 | 10 September 2024\r\nMatchday 3 | 10 Oktober 2024\r\nMatchday 4 | 15 Oktober 2024\r\nMatchday 5 | 14 November 2024\r\nMatchday 6 | 19 November 2024\r\nMatchday 7 | 20 Maret 2025\r\nMatchday 8 |25 Maret 2025\r\nMatchday 9 | 5 Juni 2025\r\nMatchday 10 | 10 Juni 2025', 'uploads/timnas.jpg', '0000-00-00', 'zefan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_namalengkap` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `user_password`, `user_namalengkap`, `user_email`) VALUES
('tio@admin', '123', 'Zefan', 'admin@berita.com'),
('zefan', 'tio', 'Zefantio', 'zefan@web.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`),
  ADD KEY `user_nama` (`user_nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`user_nama`) REFERENCES `user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
