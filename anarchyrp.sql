-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 20. 05 2020 kl. 15:14:08
-- Serverversion: 10.4.6-MariaDB
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anarchyrp`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `devapps`
--

CREATE TABLE `devapps` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `qualities` text NOT NULL,
  `future` text NOT NULL,
  `reference` varchar(50) NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `staffaccounts`
--

CREATE TABLE `staffaccounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stafflevel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `staffaccounts`
--

INSERT INTO `staffaccounts` (`id`, `username`, `password`, `email`, `stafflevel`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', 'Executive');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `staffapps`
--

CREATE TABLE `staffapps` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `steamid` varchar(30) DEFAULT NULL,
  `howlong` varchar(50) DEFAULT NULL,
  `why` text DEFAULT NULL,
  `what` text DEFAULT NULL,
  `microphone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `staffapps`
--

INSERT INTO `staffapps` (`id`, `fname`, `country`, `timezone`, `reference`, `sent_date`, `steamid`, `howlong`, `why`, `what`, `microphone`) VALUES
(1, 'd', 'd', 'd', 'd', '2020-01-07 19:24:48', 'd', 'd', 'd', 'd', 'Ja'),
(2, 'd', 'd', 'd', 'd', '2020-01-07 19:25:01', 'd', 'd', 'd', 'd', 'Ja'),
(3, 'd', 'd', 'd', 'd', '2020-01-07 19:25:59', 'd', 'd', 'd', 'd', 'Ja'),
(4, 'd', 'd', 'd', 'd', '2020-01-07 19:26:28', 'd', 'd', 'd', 'd', 'Ja');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `supportcases`
--

CREATE TABLE `supportcases` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `steamid` varchar(30) NOT NULL,
  `discord` varchar(30) NOT NULL,
  `punishment` varchar(30) NOT NULL,
  `casesubject` varchar(30) DEFAULT NULL,
  `staffmember` varchar(30) NOT NULL,
  `reason` text DEFAULT NULL,
  `evidence` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `devapps`
--
ALTER TABLE `devapps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `staffaccounts`
--
ALTER TABLE `staffaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `staffapps`
--
ALTER TABLE `staffapps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `supportcases`
--
ALTER TABLE `supportcases`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `devapps`
--
ALTER TABLE `devapps`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `staffaccounts`
--
ALTER TABLE `staffaccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tilføj AUTO_INCREMENT i tabel `staffapps`
--
ALTER TABLE `staffapps`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tilføj AUTO_INCREMENT i tabel `supportcases`
--
ALTER TABLE `supportcases`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
