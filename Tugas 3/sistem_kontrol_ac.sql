-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 11:30 AM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_kontrol_ac`
--

-- --------------------------------------------------------

--
-- Table structure for table `histori_ac`
--

CREATE TABLE `histori_ac` (
  `id` int(11) NOT NULL,
  `suhu` decimal(5,2) NOT NULL,
  `kelembapan` decimal(5,2) NOT NULL,
  `status_ac` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `histori_ac`
--

INSERT INTO `histori_ac` (`id`, `suhu`, `kelembapan`, `status_ac`, `waktu`) VALUES
(1, 23.00, 34.00, 'Kondisi tidak terdefinisi', '2024-09-30 12:15:54'),
(2, 24.00, 41.00, 'AC Menyala Rendah', '2024-09-30 12:17:35'),
(3, 30.00, 65.00, 'AC Menyala Sedang', '2024-09-30 12:18:03'),
(4, 31.00, 72.00, 'AC Menyala Tinggi', '2024-09-30 12:18:45'),
(5, 23.00, 33.00, 'Kondisi tidak terdefinisi', '2024-09-30 12:59:19'),
(6, 45.00, 67.00, 'AC Menyala Tinggi', '2024-09-30 13:02:50'),
(7, 34.00, 67.00, 'AC Menyala Tinggi', '2024-09-30 13:04:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histori_ac`
--
ALTER TABLE `histori_ac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori_ac`
--
ALTER TABLE `histori_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
