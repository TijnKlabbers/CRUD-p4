-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 jun 2022 om 10:02
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bookingen`
--

CREATE TABLE `bookingen` (
  `bookingen_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `flights_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bericht` text NOT NULL,
  `telefoonNummer` int(10) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`contact_id`, `naam`, `email`, `bericht`, `telefoonNummer`, `subject`) VALUES
(1, 'kelvin', 'kelvinlvb2002@hotmail.com', 'fkjehkjfhsjekhfkjwhf', 639116467, 'travel'),
(2, 'kelvin', 'kelvinlvb2002@hotmail.com', 'fkjehkjfhsjekhfkjwhf', 639116467, 'travel'),
(6, 'kelvin', 'kelvinlvb2002@hotmail.com', 'haoi ij oj fje jf9j', 2147483647, 'travel'),
(7, 'kelvin', 'kelvinlvb2002@hotmail.com', 'djioiwjdoiwjdoijawoidjoaiwjdoiajwoidjaoiwjoidjawoijfojngjhbrjfbrgrg', 123456789, 'travel');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `flights`
--

CREATE TABLE `flights` (
  `flights_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `persons` int(10) DEFAULT NULL,
  `destination` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `flights`
--

INSERT INTO `flights` (`flights_id`, `description`, `price`, `startDate`, `endDate`, `persons`, `destination`, `image`) VALUES
(11, 'ouhuhriuriudg', '150.00', '2022-06-23', '2022-06-27', 2, 'china', 'https://images.unsplash.com/photo-1508804052814-cd3ba865a116?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `flights_id` int(11) NOT NULL,
  `stars` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`reviews_id`, `flights_id`, `stars`) VALUES
(4, 1, 3),
(5, 1, 4),
(6, 4, 4),
(7, 4, 0),
(8, 4, 5),
(9, 4, 2),
(10, 3, 2),
(11, 3, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `admin`) VALUES
(1, 'admin', 'admin', 1),
(2, 'kelvin', 'kelvin', 0),
(4, 'tijn', 'tijn', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bookingen`
--
ALTER TABLE `bookingen`
  ADD PRIMARY KEY (`bookingen_id`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexen voor tabel `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flights_id`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bookingen`
--
ALTER TABLE `bookingen`
  MODIFY `bookingen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `flights`
--
ALTER TABLE `flights`
  MODIFY `flights_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
