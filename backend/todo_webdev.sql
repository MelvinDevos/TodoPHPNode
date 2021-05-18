-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 mei 2021 om 10:49
-- Serverversie: 5.7.17
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_webdev`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `date` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `todos`
--

INSERT INTO `todos` (`id`, `title`, `date`, `user_id`) VALUES
(1, 'plsss', '3:40:23', 1),
(2, ' Trying out spaces', '3:40:49', 1),
(3, ' Trying out spaces', '2021-5-18 03:42', 1),
(4, ' Trying out spaces', '2021-5-18 03:43', 1),
(5, ' Trying out spaces', '2021-5-18 03:46', 1),
(6, 'Yipiejakee', '2021-5-18 03:47', 1),
(7, 'Trying out spaces', '2021-5-18 03:50', 1),
(8, 'Yipiejakee', '2021-5-18 03:50', 1),
(21, 'Poetsen', '2021-5-18 10:18', 3),
(17, 'Leren school', '2021-5-18 09:54', 3),
(18, 'i do not know what to type here but this is a verry long text', '2021-5-18 09:59', 1),
(12, 'Vaatwas ledigen', '2021-5-18 04:25', 3),
(19, 'Werken', '2021-5-18 10:01', 4),
(20, 'testing', '2021-5-18 10:02', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2y$10$HvRj9rah1xhP7rbOF3MroOZzujqXxr4hy.ehFJaXV8RqTd2zOIGra'),
(2, 'best@test.com', '$2y$10$ypmhpopB6tE/LftsuNfGeuRuMrUUYYV12y2Hcz/FZLTQHckMM2WwW'),
(3, 'melvin.devoss@gmail.com', '$2y$10$uahk4wYZIUMmzNZOkv/lrew9/8gaaZyRKutNu9PAIQK5xQsdMkzPa'),
(4, '123@123.com', '$2y$10$W56SgDLis3hFsDTLEMht4Ou0vPsZQL6qDSO5bapTjtLygvxBfetL2');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
