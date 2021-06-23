-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Sty 2021, 14:02
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `katering`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `id_typ` int(11) NOT NULL,
  `nazwa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`id_typ`, `nazwa`) VALUES
(1, 'Danie główne'),
(2, 'Przystawka'),
(3, 'Napój');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id_klient` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` text NOT NULL,
  `miasto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id_klient`, `imie`, `nazwisko`, `adres`, `telefon`, `miasto`) VALUES
(5, 'dominik', 'choroś', 'listopadowa 13', '532603074', 'jabłonna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `id_zamowienia` int(11) NOT NULL,
  `id_potrawa` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `potrawa`
--

CREATE TABLE `potrawa` (
  `id_potrawa` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `id_typ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `potrawa`
--

INSERT INTO `potrawa` (`id_potrawa`, `nazwa`, `cena`, `id_typ`) VALUES
(1, 'Przystawka z wędzonym łososiem', '15', 2),
(2, 'Przystawki na grillowanym chlebie', '18', 2),
(3, 'Zapiekanka z łososiem, ziemniakami i brokułami', '25', 1),
(4, 'Podpłomyk ze sznyclem', '30', 1),
(5, 'Napoje gazowane', '6', 3),
(6, 'Kompot z świeżych owoców', '4', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id_zamowienie` int(11) NOT NULL,
  `data_zamowienia` date NOT NULL,
  `data_realizacji` date NOT NULL,
  `id_klient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienie`
--

INSERT INTO `zamowienie` (`id_zamowienie`, `data_zamowienia`, `data_realizacji`, `id_klient`) VALUES
(5, '2021-01-10', '2021-01-27', 5),
(6, '2021-01-10', '2021-01-27', 5),
(7, '2021-01-10', '2021-03-25', 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id_typ`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id_klient`);

--
-- Indeksy dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`id_zamowienia`),
  ADD KEY `klucz_potrawa_koszyk` (`id_potrawa`);

--
-- Indeksy dla tabeli `potrawa`
--
ALTER TABLE `potrawa`
  ADD PRIMARY KEY (`id_potrawa`),
  ADD KEY `klucz_katergoria_potrawy` (`id_typ`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id_zamowienie`),
  ADD KEY `klucz_klient_zamowienie` (`id_klient`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `id_typ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id_klient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `potrawa`
--
ALTER TABLE `potrawa`
  MODIFY `id_potrawa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id_zamowienie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD CONSTRAINT `klucz_potrawa_koszyk` FOREIGN KEY (`id_potrawa`) REFERENCES `potrawa` (`id_potrawa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `klucz_zamowienie_koszyk` FOREIGN KEY (`id_zamowienia`) REFERENCES `zamowienie` (`id_zamowienie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `potrawa`
--
ALTER TABLE `potrawa`
  ADD CONSTRAINT `klucz_katergoria_potrawy` FOREIGN KEY (`id_typ`) REFERENCES `kategoria` (`id_typ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `klucz_klient_zamowienie` FOREIGN KEY (`id_klient`) REFERENCES `klient` (`id_klient`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
