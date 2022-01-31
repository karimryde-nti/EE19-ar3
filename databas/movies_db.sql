-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 31 jan 2022 kl 11:49
-- Serverversion: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP-version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `movies_db`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `titel` varchar(45) DEFAULT NULL,
  `inkomst` varchar(11) DEFAULT NULL,
  `datum` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `movies`
--

INSERT INTO `movies` (`id`, `titel`, `inkomst`, `datum`) VALUES
(1, 'Avatar', '$2787965087', 2009),
(2, 'Titanic', '$2187463944', 1997),
(3, 'Star Wars: The Force Awakens', '$2068223624', 2015),
(4, 'Avengers: Infinity War', '$2048359754', 2018),
(5, 'Jurassic World', '$1671713208', 2015),
(6, 'Avengers: Endgame film currently playing', '$1664151786', 2019),
(7, 'The Avengers', '$1518812988', 2012),
(8, 'Furious 7', '$1516045911', 2015),
(9, 'Avengers: Age of Ultron', '$1405403694', 2015),
(10, 'Black Panther', '$1346913161', 2018),
(11, 'Harry Potter and the Deathly Hallows – Part 2', '$1341693157', 2011),
(12, 'Star Wars: The Last Jedi', '$1332539889', 2017),
(13, 'Jurassic World: Fallen Kingdom', '$1309484461', 2018),
(14, 'Frozen', '$1290000000', 2013),
(15, 'Beauty and the Beast', '$1263521126', 2017),
(16, 'Incredibles 2', '$1242805359', 2018),
(17, 'The Fate of the Furious', '$1238764765', 2017),
(18, 'Iron Man 3', '$1214811252', 2013),
(19, 'Minions', '$1159398397', 2015),
(20, 'Captain America: Civil War', '$1153304495', 2016),
(21, 'Aquaman film currently playing', '$1147661807', 2018),
(22, 'Transformers: Dark of the Moon', '$1123794079', 2011),
(23, 'The Lord of the Rings: The Return of the King', '$1120237002', 2003),
(24, 'Captain Marvel film currently playing', '$1112776609', 2019),
(25, 'Skyfall', '$1108561013', 2012),
(26, 'Transformers: Age of Extinction', '$1104054072', 2014),
(27, 'The Dark Knight Rises', '$1084939099', 2012),
(28, 'Toy Story 3', '$1066969703', 2010),
(29, 'Pirates of the Caribbean: Dead Man\'s Chest', '$1066179725', 2006),
(30, 'Rogue One: A Star Wars Story', '$1056057273', 2016),
(31, 'Pirates of the Caribbean: On Stranger Tides', '$1045713802', 2011),
(32, 'Despicable Me 3', '$1034799409', 2017),
(33, 'Jurassic Park', '$1029939903', 1993),
(34, 'Finding Dory', '$1028570889', 2016),
(35, 'Star Wars: Episode I – The Phantom Menace', '$1027044677', 1999),
(36, 'Alice in Wonderland', '$1025467110', 2010),
(37, 'Zootopia', '$1023784195', 2016),
(38, 'The Hobbit: An Unexpected Journey', '$1021103568', 2012),
(39, 'The Dark Knight', '$1004558444', 2008),
(40, 'Harry Potter and the Philosopher\'s Stone', '$975051288', 2001),
(41, 'Despicable Me 2', '$970761885', 2013),
(42, 'The Lion King', '$968483777', 1994),
(43, 'The Jungle Book', '$966550600', 2016),
(44, 'Pirates of the Caribbean: At World\'s End', '$963420425', 2007),
(45, 'Jumanji: Welcome to the Jungle', '$962126927', 2017),
(46, 'Harry Potter and the Deathly Hallows – Part 1', '$960431568', 2010),
(47, 'The Hobbit: The Desolation of Smaug', '$958366855', 2013),
(48, 'The Hobbit: The Battle of the Five Armies', '$956019788', 2014),
(49, 'Finding Nemo', '$940335536', 2003),
(50, 'Harry Potter and the Order of the Phoenix', '$940018451', 2007);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
