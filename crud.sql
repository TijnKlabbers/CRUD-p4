-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 jun 2022 om 14:18
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
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bookingen`
--

CREATE TABLE `bookingen` (
  `bookingen_id` int(11) NOT NULL
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
(6, 'kelvin', 'kelvinlvb2002@hotmail.com', 'haoi ij oj fje jf9j', 2147483647, 'travel');

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
(1, 'text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '120.00', '2022-06-13', '2022-06-16', 3, 'Spain', 'https://images.unsplash.com/photo-1495562569060-2eec283d3391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'),
(2, 'text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic', '130.00', '2022-06-20', '2022-06-30', 2, 'China', 'https://images.unsplash.com/photo-1508804052814-cd3ba865a116?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'),
(3, 'Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five Centuries, But Also The Leap Into Electronic Typesetting, Remaining Essentially Unchanged. It Was Popularised In', '200.00', '2022-06-20', '2022-06-30', 2, 'paris', 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=873&q=80'),
(4, 'iojfewoiejoiejoifjoisjfoijseoifjsoeijfoisejfoijse', '100.00', '2022-06-21', '2022-06-23', 3, 'china', 'https://images.unsplash.com/photo-1508804052814-cd3ba865a116?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'),
(5, 'iojfewoiejoiejoifjoisjfoijseoifjsoeijfoisejfoijse', '100.00', '2022-06-21', '2022-06-23', 3, 'china', 'https://images.unsplash.com/photo-1508804052814-cd3ba865a116?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'),
(6, 'adfasdf', '10.00', '2022-06-15', '2022-06-18', 2, 'asfs', 'dsfsdf'),
(7, 'adfasdf', '10.00', '2022-06-15', '2022-06-18', 2, 'asfs', 'dsfsdf'),
(8, 'adfasdf', '10.00', '2022-06-15', '2022-06-18', 2, 'asfs', 'dsfsdf');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `titel` int(11) NOT NULL,
  `datum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'kelvin', 'kelvin', 0);

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
  MODIFY `bookingen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `flights`
--
ALTER TABLE `flights`
  MODIFY `flights_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `users` FOREIGN KEY (`reviews_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
