-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 04:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rybkowo`
--

-- --------------------------------------------------------

--
-- Table structure for table `gatunek`
--

CREATE TABLE `gatunek` (
  `id` int(11) NOT NULL,
  `gatunek` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gatunek`
--

INSERT INTO `gatunek` (`id`, `gatunek`) VALUES
(1, 'glonojad');

-- --------------------------------------------------------

--
-- Table structure for table `kolory`
--

CREATE TABLE `kolory` (
  `id` int(11) NOT NULL,
  `kolor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kolory`
--

INSERT INTO `kolory` (`id`, `kolor`) VALUES
(1, 'Czerwony');

-- --------------------------------------------------------

--
-- Table structure for table `ryby`
--

CREATE TABLE `ryby` (
  `id` int(11) NOT NULL,
  `imie` varchar(100) DEFAULT NULL,
  `data_dodania` date DEFAULT current_timestamp(),
  `data_ur` date DEFAULT NULL,
  `kolor` int(11) DEFAULT NULL,
  `gatunek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ryby`
--

INSERT INTO `ryby` (`id`, `imie`, `data_dodania`, `data_ur`, `kolor`, `gatunek`) VALUES
(1, 'Józef', '0000-00-00', '2024-11-08', 1, 1),
(3, 'Stefan', '2024-11-09', '2024-11-10', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gatunek`
--
ALTER TABLE `gatunek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kolory`
--
ALTER TABLE `kolory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ryby`
--
ALTER TABLE `ryby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kolor` (`kolor`),
  ADD KEY `gatunek` (`gatunek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gatunek`
--
ALTER TABLE `gatunek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kolory`
--
ALTER TABLE `kolory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ryby`
--
ALTER TABLE `ryby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ryby`
--
ALTER TABLE `ryby`
  ADD CONSTRAINT `ryby_ibfk_1` FOREIGN KEY (`kolor`) REFERENCES `kolory` (`id`),
  ADD CONSTRAINT `ryby_ibfk_2` FOREIGN KEY (`gatunek`) REFERENCES `gatunek` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
