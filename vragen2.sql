-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 dec 2021 om 10:06
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vragen2`
--

CREATE TABLE `vragen2` (
  `id` int(11) NOT NULL,
  `vraag` text NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `vragen2`
--

INSERT INTO `vragen2` (`id`, `vraag`, `user`) VALUES
(35, '<span id=\"icon_bubble\" style=\"background-color: rgb(255, 115, 21);float: right; \">USER</span><br><br><div id=\"user_message\">a</div>', 'USER'),
(36, '<span id=\"icon_bubble\" style=\"background-color: rgb(44, 149, 235); \">BOT</span><br><br><div id=\"bot_message\">Hoe zien de roosters er uit?\r\n    De roosters worden per elke periode vrij gegeven en kunnen soms tussen door gewijzigd worden \r\n    met eventuele studie dagen of andere evenementen. De student kan zelf de roosters zien op de elo \r\n    <a href=\"https://rooster.glu.nl/schedule\">HIER</a> \r\n    en kan ook het rooster vinden op de \r\n    <a href=\"https://play.google.com/store/apps/details?id=com.stucomm.glu&hl=en&gl=US\">GLU APP</a>\r\n    </div>', 'BOT'),
(37, '<span id=\"icon_bubble\" style=\"background-color: rgb(44, 149, 235); \">BOT</span><br><br><div id=\"bot_message\"><div id=\"bot_message\">Wat te doen als uw kind ziek is?\r\n    U kunt de school zelf bellen op het ziek meld nummer: 030 280 70 86\r\n    en u zal worden doorverwezen om zelf uw kind ziek te melden aan de telefoon. \r\n    </div>', 'BOT'),
(38, '<span id=\"icon_bubble\" style=\"background-color: rgb(44, 149, 235); \">BOT</span><br><br><div id=\"bot_message\">\r\n    Herfstvakantie: 18 oktober tot 24 oktober 2021 <br>\r\n    Kerstvakantie: 27 december 2021 tot 9 januari 2022  <br>\r\n    Voorjaarsvakantie: 28 februari tot 6 maart 2022  <br>\r\n    Goede Vrijdag: 15 april 2022  <br>\r\n    Tweede Paasdag: 18 april 2022  <br>\r\n    Koningsdag: 27 april 2022  <br>\r\n    Meivakantie: 2 mei tot 6 mei 2022  <br>\r\n    Bevrijdingsdag: 5 mei 2022  <br>\r\n    Hemelvaartsdag: 26 mei 2022  <br>\r\n    Tweede Pinksterdag: 6 juni 2022  <br>\r\n    Zomervakantie: 11 juli tot 22 augustus \r\n    <br>\r\n    <a href=\"https://www.glu.nl/jaarkalender/\">of click hier voor de jaar kalender</a>\r\n    </div>', 'BOT'),
(39, '<span id=\"icon_bubble\" style=\"background-color: rgb(255, 115, 21);float: right; \">USER</span><br><br><div id=\"user_message\">yes</div>', 'USER');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `vragen2`
--
ALTER TABLE `vragen2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `vragen2`
--
ALTER TABLE `vragen2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
