-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Pon 29. kvě 2023, 13:02
-- Verze serveru: 5.7.24
-- Verze PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `evidence`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `brigadnici`
--

CREATE TABLE `brigadnici` (
  `poradove_cislo` int(7) NOT NULL,
  `jmeno` varchar(60) NOT NULL,
  `prijmeni` varchar(60) NOT NULL,
  `datum_narozeni` date NOT NULL,
  `datum_prace` date DEFAULT NULL,
  `pocet_hodin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `brigadnici`
--

INSERT INTO `brigadnici` (`poradove_cislo`, `jmeno`, `prijmeni`, `datum_narozeni`, `datum_prace`, `pocet_hodin`) VALUES
(1, 'Vaclav', 'Vydra', '2002-07-10', '2023-05-17', 4),
(2, 'Jan', 'Novák', '2000-10-01', '2023-05-01', 8),
(3, 'Josef', 'Bek', '1999-03-17', '2023-05-21', 8),
(4, 'Vaclav', 'Maly', '2001-10-23', '2023-05-02', 6),
(5, 'Petr', 'Jandus', '2000-03-21', '2023-05-03', 10),
(6, 'Roman', 'Wolf', '2001-08-31', '2023-05-15', 8),
(7, 'Karel', 'Nedoma', '1999-01-04', '2023-05-08', 8),
(8, 'Vaclav', 'Loskot', '2000-08-16', '2023-05-21', 8),
(9, 'Ivan', 'Hrozny', '1999-08-16', '2023-05-02', 10),
(10, 'Petr', 'Malina', '2000-08-15', '2023-05-21', 8),
(11, 'Franta', 'Flinta', '2000-05-01', '2020-05-21', 88),
(49, 'jan', 'Hus', '2023-05-11', '2023-05-06', 881);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `brigadnici`
--
ALTER TABLE `brigadnici`
  ADD PRIMARY KEY (`poradove_cislo`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `brigadnici`
--
ALTER TABLE `brigadnici`
  MODIFY `poradove_cislo` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
