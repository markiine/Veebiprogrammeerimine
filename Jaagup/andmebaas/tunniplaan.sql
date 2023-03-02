-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 20, 2022 at 06:31 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunniplaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kassid`
--

CREATE TABLE `kassid` (
  `id` int(11) NOT NULL,
  `nimi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kassid`
--

INSERT INTO `kassid` (`id`, `nimi`, `toon`) VALUES
(1, 'Virsik', 'rosybrown'),
(2, 'Kookos', 'gray'),
(3, 'Seiko', 'brown'),
(4, 'Aruba', 'saddlebrown'),
(5, 'Bahama', 'beige');

-- --------------------------------------------------------

--
-- Table structure for table `koerad`
--

CREATE TABLE `koerad` (
  `id` int(11) NOT NULL,
  `nimi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kirjeldus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pildiaadress` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koerad`
--

INSERT INTO `koerad` (`id`, `nimi`, `kirjeldus`, `pildiaadress`) VALUES
(1, 'Herta', 'musta-kuldne emane rottweiler', 'https://www.purina.co.uk/sites/default/files/2022-08/Rottweiler.jpg?itok=6lA0l2Qr'),
(2, 'Säde', 'kolmevärviline emane papillon', 'https://www.purina.co.uk/sites/default/files/2022-07/Papillon.jpg?itok=XJNt5n1Q'),
(3, 'Desiree', 'emane saksalamba koer', 'https://www.purina.co.uk/sites/default/files/2022-07/German-Shepherd-Dog.jpg?itok=eQlRJxqe');

-- --------------------------------------------------------

--
-- Table structure for table `lehed`
--

CREATE TABLE `lehed` (
  `id` int(11) NOT NULL,
  `pealkiri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sisu` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lehed`
--

INSERT INTO `lehed` (`id`, `pealkiri`, `sisu`) VALUES
(1, 'Ilmateade', 'Kuiv ilm.'),
(2, 'Korvpall', 'Treening reedel\r\nkell 18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kassid`
--
ALTER TABLE `kassid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `koerad`
--
ALTER TABLE `koerad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lehed`
--
ALTER TABLE `lehed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kassid`
--
ALTER TABLE `kassid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `koerad`
--
ALTER TABLE `koerad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lehed`
--
ALTER TABLE `lehed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
