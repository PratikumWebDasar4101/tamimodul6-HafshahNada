-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 04:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `nim` int(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `nim` int(255) NOT NULL,
  `kelas` text NOT NULL,
  `jk` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `nim`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`) VALUES
('bowo', '7890', 'bowo y', 7890, 'd3mi4102', 'Perempuan', 'Membaca', 'FIF', 'dfghj'),
('lopo', '1234', 'lopo', 7894, 'd3mi4101', 'Laki-Laki', 'Menulis', 'FKB', 'xcvbnm'),
('none', '4567', 'none', 8123, 'd3mi4101', 'Laki-Laki', 'Menulis', 'FIF', 'k'),
('Lala', '1357', 'Lala M', 12345, 'd3mi4101', 'Perempuan', 'Membaca', 'FRI', 'dg'),
('lalala', '1234', 'Lalal', 12346, 'd3mi4101', 'Laki-Laki', 'Menulis', 'FIT', 'ass'),
('sasaa', '1234', 'sasaa', 18273, '1', 'perempuan', 'Membaca', 'FRI', 'jsxsaj'),
('Nada', '1357', 'Nada', 34242, 'd3mi4101', 'Laki-Laki', 'Menulis', 'FIF', 'ghj'),
('Nada', '135', 'Nada', 73647, 'd3mi4101', 'Perempuan', 'Membaca', 'FKB', 'asdfghj'),
('hana', '1234', 'hana', 76543, 'd3mi4101', 'Perempuan', 'Membaca', 'FIK', 'hahah'),
('Lala', '0987', 'Lala', 90876, 'd3mi4103', '', 'Basket', 'FKB', 'vbn'),
('Maulana', '7890', 'Lala Maulana', 123457, 'd3mi4102', 'Perempuan', 'Membaca', 'FRI', 'hjj'),
('Riska', '5678', 'Riska S', 782934, 'd3mi4102', 'Perempuan', 'Membaca', 'FEB', 'kjj'),
('Nadaaa', '4567', 'Nadaaaa', 908756, 'd3mi4101', 'Perempuan', 'Membaca', 'FRI', 'kk'),
('omo', '1234', 'omo', 1233324, 'd3mi4102', 'Perempuan', 'Membaca', 'FIT', ',kjj'),
('Nada', '1234', 'Nada', 7832642, '1', 'perempuan', 'Menggambar,Membaca', 'FIT', 'jklll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
