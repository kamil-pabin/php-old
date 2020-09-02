-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Mar 2019, 19:52
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bronie`
--

CREATE TABLE `bronie` (
  `ID` int(11) NOT NULL,
  `Zdjecie` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Rodzaj` int(11) NOT NULL,
  `Cena` int(11) NOT NULL,
  `Ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `bronie`
--

INSERT INTO `bronie` (`ID`, `Zdjecie`, `Nazwa`, `Rodzaj`, `Cena`, `Ilosc`) VALUES
(2, 'beretta.jpg', 'Beretta 92', 1, 1200, 10),
(3, 'glock19.jpg', 'Glock 19', 1, 2350, 10),
(4, 'ar15.jpg', 'AR-15', 2, 17800, 5),
(5, 'ak47.jpg', 'AK-47', 2, 13370, 25),
(6, 'mossberg.jpg', 'Mossberg 590', 3, 12000, 6),
(7, 'Sajga.jpg', 'Sajga 12', 3, 24000, 0),
(8, 'aeg.jpg', 'AEG DLV36', 2, 27800, 2),
(9, 'troy.jpg', 'Troy 308', 2, 21500, 12),
(10, 'famas.jpg', 'Famas F1', 2, 19900, 54),
(11, 'p1911.jpg', '1911', 1, 7900, 21),
(12, 'g36.jpg', 'G36', 2, 16800, 8),
(13, 'p250.jpg', 'P250', 1, 5800, 25),
(14, 'mp7.jpg', 'MP7', 1, 12800, 17),
(15, 'mac10.jpg', 'MAC-10', 1, 12000, 8),
(16, 'mp5.jpg', 'MP5', 1, 7000, 0),
(17, 'aug.jpg', 'Steyr Aug', 2, 25000, 64);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzaje`
--

CREATE TABLE `rodzaje` (
  `ID` int(11) NOT NULL,
  `nazwax` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `rodzaje`
--

INSERT INTO `rodzaje` (`ID`, `nazwax`) VALUES
(1, 'Pistolet'),
(2, 'Karabin'),
(3, 'Strzelba');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bronie`
--
ALTER TABLE `bronie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Rodzaj` (`Rodzaj`);

--
-- Indeksy dla tabeli `rodzaje`
--
ALTER TABLE `rodzaje`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `bronie`
--
ALTER TABLE `bronie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `rodzaje`
--
ALTER TABLE `rodzaje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `bronie`
--
ALTER TABLE `bronie`
  ADD CONSTRAINT `bronie_ibfk_1` FOREIGN KEY (`Rodzaj`) REFERENCES `rodzaje` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
