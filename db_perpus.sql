-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 06:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `nis` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `thn_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelas`, `thn_masuk`) VALUES
(1213245, 'udin', 'pekanbaru', '2022-02-03', 'L', 'kelas 12', '2022'),
(19183788, 'ALFI MUZAKI', 'PEKANBARU', '2003-03-19', 'L', 'Kelas 12', '2019'),
(19184532, 'ABDUL', 'PEKANBARU', '2003-07-25', 'L', 'Kelas 12', '2019'),
(20183741, 'RIDHO', 'PEKANBARU', '2004-09-15', 'L', 'Kelas 11', '2020'),
(20183745, 'ALVIN ', 'PEKANBARU', '2004-11-23', 'L', 'Kelas 11', '2020'),
(20183765, 'NURDIANSYAH', 'PEKANBARU', '2004-06-23', 'L', 'Kelas 11', '2020'),
(20183768, 'SUCI RAMHADANI', 'PEKANBARU', '2004-03-17', 'P', 'Kelas 11', '2020'),
(21554310, 'GINA NELDAJANI', 'PEKANBARU', '2005-07-20', 'P', 'Kelas 10', '2021'),
(21554315, 'HAIKAL', 'PEKANBARU', '2005-02-25', 'L', 'Kelas 10', '2021'),
(21554320, 'FAUZIAH', 'PEKANBARU', '2005-07-07', 'P', 'Kelas 10', '2021'),
(21554332, 'ANUGRAH', 'PEKANBARU', '2005-04-03', 'L', 'Kelas 10', '2021'),
(2147483647, 'pipi', 'medan', '2022-02-16', 'P', 'kelas 11', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(1, 'BIOLOGI KELAS X MIPA', 'DRA. IRNANINGTYAS', 'ERLANGGA', '2015', ' 9786022987727', 487, 'rak1', '2022-01-29 05:09:58'),
(2, 'MATEMATIKA (MINAT) KELAS X MIPA', 'MARTHEN KANGINAN', 'Yrama Widya', '2015', '978-602-374-285-1', 288, 'rak1', '2022-01-29 05:22:01'),
(3, 'MATEMATIKA (WAJIB) KELAS X MIPA', 'Suwah Sembiring & Marsito', 'Yrama Widya', '2015', ' 978-602-374-506-7', 272, 'rak1', '2022-01-29 05:25:20'),
(4, 'KIMIA KELAS X MIPA', 'MICHAEL PURBA-ETI SARWIYATI', 'ERLANGGA', '2015', '0045400240', 352, 'rak1', '2022-01-29 05:29:38'),
(5, 'FISIKA KELAS X MIPA', 'NI KETUT LASMI', 'ERLANGGA', '2015', '9786024340261', 159, 'rak1', '2022-01-29 05:36:18'),
(6, 'PKN KELAS X', 'Nuryadi dan Tolib', 'KEMENDIKBUD', '2015', '9786024270902', 342, 'rak1', '2022-01-29 05:37:59'),
(7, 'BAHASA INDONESIA KELAS X ', 'Nihil Obstat', 'KEMENDIKBUD', '', '9786024270988', 212, 'rak1', '2022-01-29 05:47:35'),
(8, 'PAI KELAS X', 'Khairiyah', 'KEMENDIKBUD', '2015', '9786024270469', 345, 'rak1', '2022-01-29 05:52:13'),
(9, 'BAHASA INGGRIS KELAS X', 'Zuliati Rohmah', 'KEMENDIKBUD', '2015', '9786024271077', 224, 'rak1', '2022-01-29 05:55:41'),
(10, 'SEJARAH INDONESIA KELAS X', 'Restu Gunawan', 'KEMENDIKBUD', '2015', '9786024271220', 280, 'rak1', '2022-01-29 05:57:43'),
(11, 'PJOK KELAS X ', 'Khairul Hadziq', 'Yrama Widya', '2015', '978-602-374-494-7', 196, 'rak1', '2022-01-29 06:07:08'),
(12, 'BMR KELAS X', ' Taufik Ikram', 'KEMENDIKBUD', '2015', '9786239382612', 158, 'rak1', '2022-01-29 06:11:20'),
(13, 'SENI BUDAYA KELAS X ', 'Harry D. Fauzi ', 'Yrama Widya', '2015', '978-602-374-482-4', 252, 'rak1', '2022-01-29 07:25:05'),
(14, 'PKWU KELAS X', 'Hindraswari Enggar Dwipeni', 'Yrama Widya', '2015', '978-602-382-183-9', 144, 'rak1', '2022-01-29 07:27:24'),
(15, 'EKONOMI KELAS X IPS', 'KINANTI GEMINASTITI', 'Yrama Widya', '2015', '978-602-374-293-6', 309, 'rak1', '2022-01-29 07:31:30'),
(16, 'GEOGRAFI KELAS X IPS', 'Gatot Hermanto', 'Yrama Widya', '2015', ' 978-602-374-452-7', 206, 'rak1', '2022-01-29 07:32:22'),
(17, 'SOSIOLOGI KELAS X IPS', 'SLAMET TRIYONO & HERMANTO', 'Yrama Widya', '2015', '978-602-374-085-6', 207, 'rak1', '2022-01-29 07:33:49'),
(18, 'PAI KELAS XI', 'Mustahdi dan Mustakim', 'KEMENDIKBUD', '2015', ' 978-602-282-403-9', 202, 'rak2', '2022-01-29 07:34:51'),
(19, 'PKN KELAS XI', 'Muhammad Taupan dan Ine Ariyani Suwita', 'Yrama Widya', '2015', '978-602-374-491-6', 221, 'rak2', '2022-01-29 07:37:23'),
(20, 'BAHASA INDONESIA KELAS XI', 'Suherli, Prof, Dr, M.Pd.', 'KEMENDIKBUD', '2015', '786024270988', 312, 'rak2', '2022-01-29 07:41:09'),
(21, 'BAHASA INGGRIS KELAS XI', 'Mahrukh Bashir', 'KEMENDIKBUD', '2015', '9786022824794', 115, 'rak2', '2022-01-29 07:42:55'),
(22, 'BIOLOGI KELAS XI MIPA', 'DRA. IRNANINGTYAS', 'ERLANGGA', '2015', '0045700121', 304, 'rak2', '2022-01-29 08:05:05'),
(23, 'MATEMATIKA (MINAT)  KELAS XI MIPA', 'Marthen Kanginan', 'Yrama Widya', '2015', '978-602-374-286-8', 367, 'rak2', '2022-01-29 08:06:20'),
(24, 'MATEMATIKA (WAJIB) KELAS XI MIPA', 'B.K. NOORMANDIRI', 'ERLANGGA', '2015', '9786022987284', 392, 'rak2', '2022-01-29 08:09:26'),
(25, 'SEJARAH INDONESIA KELAS XI', 'SAMSUL FARID', 'ERLANGGA', '2015', '978-602-374-479-4', 192, 'rak2', '2022-01-29 08:11:26'),
(26, 'SENI BUDAYA KELAS XI', 'SUGIYANTO', 'ERLANGGA', '2015', '9786024341718', 368, 'rak2', '2022-01-29 08:14:02'),
(27, 'PJOK KELAS XI', 'Khairul Hadziq dan Anwar Musadad', 'Yrama Widya', '2015', '978-602-374-495-4', 176, 'rak2', '2022-01-29 08:19:40'),
(28, 'PKWU KELAS XI', 'Pesanggrahan Guru', 'Yrama Widya', '2015', ' 978-602-277-297-2', 192, 'rak2', '2022-01-29 08:20:14'),
(29, 'BMR KELAS XI', ' Taufik Ikram', 'KEMENDIKBUD', '2015', '9786239382629', 160, 'rak2', '2022-01-29 08:28:35'),
(30, 'KIMIA KELAS XI MIPA', 'UNGGUL SUDARMO', 'ERLANGGA', '2015', '9786022988397', 384, 'rak2', '2022-01-29 08:29:35'),
(31, 'FISIKA KELAS XI MIPA', 'Ketut Kamajaya & Wawan Purnam', 'GRAFINDO', '2015', '978-602-01-1769-0', 304, 'rak2', '2022-01-29 08:34:16'),
(32, 'SOSIOLOGI KELAS XI IPS', 'Muhammad Taupan dan Ine Ariyani', 'Yrama Widya', '2015', '978-602-374-318-6', 271, 'rak2', '2022-01-29 08:41:46'),
(33, 'EKONOMI KELAS XI IPS', ' KINANTI GEMINASTITI & NELLA NURLITA', 'Yrama Widya', '2015', '978-602-374-294-3', 271, 'rak2', '2022-01-29 08:44:27'),
(34, 'GEOGRAFI KELAS XI IPS', 'Gatot Harmanto', 'Yrama Widya', '2015', '978-602-374-462-6', 240, 'rak2', '2022-01-29 08:47:06'),
(35, 'PAI KELAS XII', 'Nurlailah, Endang Zenal, dan Daruri', 'Yrama Widya', '2015', '978-602-374-504-3', 256, 'rak3', '2022-01-29 08:48:04'),
(36, 'PKN KELAS XII', 'Muhammad Taupan dan Ine Ariyani Suwita', 'Yrama Widya', '2015', '978-602-374-492-3', 160, 'rak3', '2022-01-29 08:52:33'),
(37, 'BAHASA INDONESIA KELAS XII', 'Maman Suryaman, Dr, M.Pd', 'KEMENDIKBUD', '2015', '9786024270988', 266, 'rak3', '2022-01-29 08:53:19'),
(38, 'BAHASA INGGRIS KELAS XII', 'Ratna Juwita ningsih', 'Yrama Widya', '2015', '978-602-374-303-2', 256, 'rak3', '2022-01-29 08:55:52'),
(40, 'MATEMATIKA (WAJIB) KELAS XII', ' Taufik Ikram', 'ERLANGGA', '2015', '2142343', 266, 'rak3', '2022-01-30 16:12:57'),
(41, 'MATEMATIKA (WAJIB) KELAS X MIPA', 'Nihil Obstat', 'KEMENDIKBUD', '2015', '9786024270988', 272, 'rak2', '2022-02-01 14:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`) VALUES
(32, 'BAHASA INDONESIA KELAS X ', 5, 'zamzmi', '03-02-2022', '10-02-2022', 'Pinjam', ''),
(33, 'BMR KELAS X', 5, 'zamzmi', '03-02-2022', '10-02-2022', 'Pinjam', ''),
(34, 'PAI KELAS XI', 5, 'zamzmi', '03-02-2022', '10-02-2022', 'Pinjam', ''),
(35, 'PAI KELAS XI', 5, 'zamzmi', '03-02-2022', '10-02-2022', 'Pinjam', ''),
(36, 'BAHASA INGGRIS KELAS XI', 8, 'udin', '03-02-2022', '10-02-2022', 'Pinjam', ''),
(37, 'BAHASA INGGRIS KELAS XI', 8, 'udin', '03-02-2022', '10-02-2022', 'Pinjam', ''),
(38, 'MATEMATIKA (MINAT)  KELAS XI MIPA', 9, 'alvin', '03-02-2022', '10-02-2022', 'Pinjam', ''),
(39, 'PKN KELAS XI', 8, 'udin', '03-02-2022', '10-02-2022', 'Pinjam', 'meminjam'),
(40, 'BIOLOGI KELAS X MIPA', 8, 'udin', '04-02-2022', '11-02-2022', 'Pinjam', 'meminjam'),
(41, 'SOSIOLOGI KELAS X IPS', 8, 'udin', '04-02-2022', '11-02-2022', 'Pinjam', 'meminjam'),
(42, 'PJOK KELAS X ', 8, 'udin', '04-02-2022', '11-02-2022', 'Pinjam', 'meminjam'),
(43, 'PKN KELAS XI', 8, 'udin', '04-02-2022', '11-02-2022', 'Pinjam', 'meminjam'),
(44, 'BAHASA INDONESIA KELAS XI', 5, 'zamzmi', '04-02-2022', '11-02-2022', 'Pinjam', 'meminjam'),
(45, 'BMR KELAS X', 10, 'rul', '11-02-2022', '18-02-2022', 'Pinjam', 'meminjam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `email`, `level`) VALUES
(1, 'Tengku Indah Novrianti', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'iqbalrizqipurnama@gmail.com', 'admin'),
(5, 'zamzmi', 'zam', '02c425157ecd32f259548b33402ff6d3', 'tengkuarulan@gmail.com', 'user'),
(8, 'udin', 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'indahnovrianti5@gmail.com', 'user'),
(9, 'alvin', 'alvin', '81dc9bdb52d04dc20036dbd8313ed055', 'yaudahlah704@gmail.com', 'user'),
(10, 'rul', 'rul', '81dc9bdb52d04dc20036dbd8313ed055', 'yaudahlah704@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
