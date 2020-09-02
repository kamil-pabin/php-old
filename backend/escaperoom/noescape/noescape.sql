-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Sie 2020, 01:57
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `noescape`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cmentarz`
--

CREATE TABLE `cmentarz` (
  `ID` int(11) NOT NULL,
  `Zdjecie` text NOT NULL,
  `Nazwa` text NOT NULL,
  `Czas` int(11) NOT NULL,
  `statuspodpowiedzi` int(11) NOT NULL,
  `zegarukryj` int(11) NOT NULL,
  `delay` float NOT NULL,
  `onstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `cmentarz`
--

INSERT INTO `cmentarz` (`ID`, `Zdjecie`, `Nazwa`, `Czas`, `statuspodpowiedzi`, `zegarukryj`, `delay`, `onstatus`) VALUES
(1, 'cmentarz.jpg', '   ', 1224, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kosmos`
--

CREATE TABLE `kosmos` (
  `ID` int(11) NOT NULL,
  `Zdjecie` text NOT NULL,
  `Nazwa` text NOT NULL,
  `Czas` int(11) NOT NULL,
  `statuspodpowiedzi` int(11) NOT NULL,
  `zegarukryj` int(11) NOT NULL,
  `delay` float NOT NULL,
  `onstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kosmos`
--

INSERT INTO `kosmos` (`ID`, `Zdjecie`, `Nazwa`, `Czas`, `statuspodpowiedzi`, `zegarukryj`, `delay`, `onstatus`) VALUES
(1, 'kosmos.jpg', 'Według informacji z panelu musicie odpowiednio ustawić parametry na konsoli', 3376, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyspa`
--

CREATE TABLE `wyspa` (
  `ID` int(11) NOT NULL,
  `Zdjecie` text NOT NULL,
  `Nazwa` text NOT NULL,
  `Czas` int(11) NOT NULL,
  `statuspodpowiedzi` int(11) NOT NULL,
  `zegarukryj` int(11) NOT NULL,
  `delay` float NOT NULL,
  `onstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wyspa`
--

INSERT INTO `wyspa` (`ID`, `Zdjecie`, `Nazwa`, `Czas`, `statuspodpowiedzi`, `zegarukryj`, `delay`, `onstatus`) VALUES
(1, 'bg.jpg', 'jhkgkjgbkj', 3017, 1, 0, 0, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cmentarz`
--
ALTER TABLE `cmentarz`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `kosmos`
--
ALTER TABLE `kosmos`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `wyspa`
--
ALTER TABLE `wyspa`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
