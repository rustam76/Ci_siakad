-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 01:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_siakadadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(225) NOT NULL,
  `alamat_dosen` varchar(225) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `alamat_dosen`, `no_telepon`, `foto`) VALUES
('dosen_001', 'William, S.H', 'Jalan Ahmad Mustin', '081212343232', 'ian.jpg'),
('dosen_002', 'Donita, S.H', 'Jalan Mekar', '081212343770', '695332656_siti1.jpg'),
('dosen_003', 'Ahmad, S.H', 'Gangnam Dong', '081212343231', '1493061095_jabalnur.jpg'),
('dosen_004', 'Jecky, S.H', 'Jln. Segar', '08121243565432', '2022262632_guswan.jpg'),
('dosen_005', 'Guasman Tatawu, S.H', 'Jalan Lumba-lumba', '081212343232', 'yan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kd_jur` varchar(100) NOT NULL,
  `nama_jur` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kd_jur`, `nama_jur`) VALUES
('jur_001', 'EPIDEMIOLOGI'),
('jur_002', 'PROMOSI KESEHATAN'),
('jur_003', 'KESEHATAN LINGKUNGAN'),
('jur_004', 'ADMINISTRASI KEBIJAKAN KESEHATAN');

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `id` int(11) NOT NULL,
  `npm` varchar(200) NOT NULL,
  `kd_mk` varchar(200) NOT NULL,
  `semester` int(11) NOT NULL,
  `nilai` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`id`, `npm`, `kd_mk`, `semester`, `nilai`) VALUES
(1, 'H1005', 'kd_006', 1, 'A'),
(2, 'H1005', 'kd_006', 1, 'A'),
(3, 'H1005', 'kd_006', 1, 'B'),
(4, 'H1005', 'kd_006', 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `kd_krs` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `npm` varchar(200) NOT NULL,
  `kd_mk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kd_krs`, `semester`, `npm`, `kd_mk`) VALUES
(1, 1, 'H1001', 'kd_001'),
(2, 1, 'H1001', 'kd_002'),
(3, 1, 'H1001', 'kd_003'),
(4, 1, 'H1001', 'kd_004'),
(5, 1, 'H1002', 'kd_001'),
(6, 1, 'H1002', 'kd_002'),
(7, 1, 'H1006', 'kd_001'),
(8, 1, 'H1006', 'kd_002'),
(9, 1, 'H1005', 'kd_006'),
(10, 1, 'H1006', 'kd_001'),
(11, 1, 'H1006', 'kd_001'),
(12, 2, 'H1006', 'kd_002'),
(13, 1, 'H1006', 'kd_001'),
(14, 1, 'H1005', 'kd_004'),
(15, 2, 'H1005', 'kd_002');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(100) NOT NULL,
  `nama_mhs` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kd_jur` varchar(225) NOT NULL,
  `nip_pembimbing` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_mhs`, `alamat`, `kd_jur`, `nip_pembimbing`, `foto`) VALUES
('H1001', 'Messi', 'Indonesia Raya', 'jur_002', 'dosen_002', 'ayib2.jpg'),
('H1002', 'Ronaldo', 'Jalan Pancasila', 'jur_002', 'dosen_002', '170636974_arfa.png'),
('H1005', 'Jessi', 'Jalan Mekar', 'jur_001', 'dosen_001', '1730076664_deschika.jpg'),
('H1006', 'Dybala', 'Baruga', 'jur_003', 'dosen_002', 'download_(4).png');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kd_mk` varchar(100) NOT NULL,
  `nama_mk` varchar(220) NOT NULL,
  `sks` int(10) NOT NULL,
  `nip_dosen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kd_mk`, `nama_mk`, `sks`, `nip_dosen`) VALUES
('kd_001', 'EPIDEMIOLOGI DASAR', 6, 'dosen_001'),
('kd_002', 'PROMOSI KESEHATAN DASAR', 2, 'dosen_002'),
('kd_003', 'KESEHATAN LINGKUNGAN DASAR', 4, 'dosen_003'),
('kd_004', 'KESEHATAN DAN KESELAMATAN KERJA', 2, 'dosen_004'),
('kd_005', 'PEMETAAN POLA PENYAKIT', 2, 'dosen_005'),
('kd_006', 'PENYEBARAN PENYAKIT', 2, 'dosen_003');

-- --------------------------------------------------------

--
-- Table structure for table `root_id`
--

CREATE TABLE `root_id` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `root_id`
--

INSERT INTO `root_id` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `npm` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `password` varchar(200) NOT NULL,
  `row_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `npm`, `email`, `foto`, `password`, `row_id`) VALUES
(1, 'Diogenes', '1', 'xtmadhyenk@gmail.com', 'default.jpg', '$2y$10$mKi8aT0SgGRPpWb0fccMlObAGuMSNZTPp6AALVSbPAwZnbw360fqG', 1),
(2, 'Diogenes', '43', 'xtmadhyenk@gmail.com', 'default.jpg', '$2y$10$/IStYdjspwX2EnLQ/LvH/..QmfUURaBSMaDThTL1wztRJmTs89frK', 2),
(3, 'Komaril', '41', 'adink.adja95@gmail.com', 'default.jpg', '$2y$10$FLyyEx2RnAbdHe.VBEtN5eujVjSu2tp8iGvj2i4V.Q6SMDS5OIKSW', 2),
(4, 'Diogenes', '32', 'adink.adja95@gmail.com', 'default.jpg', '$2y$10$eb5g2mh01Bov3G8RYjYC3Ota9kccA9sQOflXGiAExU154S9pHOPru', 2),
(5, 'rezqwe', '5', 'muhammadrabidin04@gmail.com', 'default.jpg', '$2y$10$GuhJLP6Xi9G6HaPJlX4mpuYa4hwu.3Nn4uxBJtBWxh0uzVi6pTIYK', 2),
(6, 'Armin', '7', 'muhammadrabidin04@gmail.com', 'default.jpg', '$2y$10$7uwGuAZxLu5DtjCLEuFYE.EtN2wgJXaSIyBvWXRL5Lmtln6M04TKC', 2),
(7, 'Aeriel Lumine', '8', 'armindarfah24@gmail.com', 'default.jpg', '$2y$10$jUxxQYxL2ZxAhyE8PecAhu0KT4SnHg0a5..cbJvGA131.k9.oBwNm', 2),
(8, 'Rese', '76', 'laodemuhamad@gmail.com', 'default.jpg', '$2y$10$cGAyr7iE7RT4rwULUsT7he9RaBcmiRst.gwIBdgmLAZn4lEcITeQC', 2),
(9, 'Rossi', '46', 'muhammadrabidin04@gmail.com', 'default.jpg', '$2y$10$g6n0AnyKdHF98D6pdFWnRuWSmy28bPAL.UhsgFrLuDn.EM3/0h6cm', 2),
(10, 'Rahgul', '98', 'muhammadrabidin04@gmail.com', 'default.jpg', '$2y$10$81TJKSngjqeHhiOGjKybFebKege15rK9YANI/hQk6HTri4m1pXbxu', 2),
(11, 'Leviathan', '77', 'laodemuhamad@gmail.com', 'default.jpg', '$2y$10$7vA/uUUws74jjvYvRs1IHuHC0MBzTdUbsQk36N.fojJ.HQeIPIK1C', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jur`);

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`kd_krs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `root_id`
--
ALTER TABLE `root_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `kd_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `root_id`
--
ALTER TABLE `root_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
