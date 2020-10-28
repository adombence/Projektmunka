-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2020. Okt 28. 19:41
-- Kiszolgáló verziója: 5.7.31-log
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `projektmunka6`
--
CREATE DATABASE IF NOT EXISTS `projektmunka6` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `projektmunka6`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kapcsolo`
--

CREATE TABLE `kapcsolo` (
  `szerzoid` int(11) NOT NULL,
  `konyvid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kapcsolo`
--

INSERT INTO `kapcsolo` (`szerzoid`, `konyvid`) VALUES
(0, 0),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(3, 16),
(3, 18),
(15, 18),
(18, 19),
(19, 20),
(5, 21),
(21, 23),
(22, 24),
(11, 25),
(11, 26),
(21, 28),
(23, 29),
(23, 30),
(23, 31),
(24, 32),
(24, 33),
(24, 34),
(24, 35),
(24, 36),
(24, 37),
(24, 38),
(24, 39),
(24, 40),
(25, 41),
(26, 42),
(27, 43),
(3, 50),
(3, 51),
(4, 52),
(4, 53),
(4, 54),
(4, 55),
(4, 56),
(4, 57),
(8, 61),
(9, 61),
(9, 62),
(9, 63),
(9, 64),
(9, 65),
(9, 66),
(10, 67),
(6, 68),
(6, 69),
(6, 70),
(12, 71),
(12, 72),
(12, 73),
(12, 74),
(12, 75),
(12, 76),
(13, 77),
(13, 78),
(13, 79),
(13, 80),
(13, 81),
(13, 82),
(13, 83),
(13, 84),
(13, 85),
(13, 86),
(13, 87),
(13, 88),
(13, 89),
(13, 90),
(13, 91),
(13, 92),
(29, 93),
(29, 94),
(29, 95),
(29, 96),
(31, 97),
(31, 98),
(32, 99),
(30, 100),
(33, 101),
(12, 102),
(13, 103),
(30, 104),
(30, 105),
(17, 107),
(34, 108),
(39, 108),
(40, 108),
(41, 108),
(42, 108),
(43, 108),
(39, 113),
(43, 118),
(44, 119);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `konyv`
--

CREATE TABLE `konyv` (
  `id` int(11) NOT NULL,
  `cim` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `ISBN` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `kiadasiDatum` int(11) NOT NULL,
  `oldalSzam` int(11) NOT NULL,
  `eredetiNyelv` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `konyv`
--

INSERT INTO `konyv` (`id`, `cim`, `ISBN`, `kiadasiDatum`, `oldalSzam`, `eredetiNyelv`) VALUES
(1, 'A Babó', '9780618260300', 1937, 310, 'angol'),
(2, 'A Gyűrű Szövetsége', '0618346244', 1954, 423, 'angol'),
(3, 'A két torony', '0618346244', 1954, 352, 'angol'),
(4, 'A király visszatér', '0618346244', 1954, 416, 'angol'),
(5, 'A szilmarilok', '9789631438109', 1977, 380, 'angol'),
(6, 'A woottoni kovácsmester', '0007202474', 1967, 160, 'angol'),
(7, 'Lázálom', '9781592911219', 1982, 350, 'angol'),
(8, 'Trónok harca', '0553103547', 1996, 694, 'angol'),
(9, 'Királyok csatája', '0553108034', 1998, 761, 'angol'),
(10, 'Kardok vihara', '0553106635', 2000, 973, 'angol'),
(11, 'Varjak Lakomája', '0002247437', 2005, 753, 'angol'),
(12, 'Sárkányok tánca', '9780553801477', 2011, 1016, 'angol'),
(13, 'A kóbor lovag', '9780785125785', 1998, 160, 'angol'),
(14, 'A felesküdött kard', '9780785126508', 2003, 152, 'angol'),
(15, 'Az álneves lovag', '9780765320483', 2010, 104, 'angol'),
(16, 'A szél neve', '9780756404079', 2007, 662, 'angol'),
(18, 'Isteni színjáték', '9789632520247', 1323, 544, 'toszkán'),
(19, 'Bűn és bűnhődés', '9789634059011', 1866, 732, 'orosz'),
(20, 'Az öreg halász és a tenger', '9786155955907', 1952, 110, 'angol'),
(21, 'A marsi', '9786155514142', 2011, 358, 'angol'),
(22, 'Egerek és emberek', '9639708011', 1937, 107, 'angol'),
(23, 'Hamlet', '9789630799782', 1623, 584, 'angol'),
(24, 'Ne bántsátok a feketerigót!', '9786155331466', 1960, 432, 'angol'),
(25, '1984', '9789634058342', 1949, 328, 'angol'),
(26, 'Állatfarm', '9789634055037', 1945, 136, 'angol'),
(28, 'Rómeó és Júlia', '9789631437850', 1597, 160, 'angol'),
(29, 'Az idő rövid története', '9789632521213', 1988, 256, 'angol'),
(30, 'A nagy terv', '9789632520926', 2010, 208, 'angol'),
(31, 'A világegyetem dióhéjban', '9789632521114', 2001, 224, 'angol'),
(32, 'A bíborvörös dolgozószoba ', '9638199105', 1887, 132, 'angol'),
(33, 'A Négyek jele', '9789634973591', 1890, 212, 'angol'),
(34, 'A Sátán kutyája', '9789639492721', 1902, 218, 'angol'),
(35, 'A félelem völgye', '9630274760', 1915, 264, 'angol'),
(36, 'Sherlock Holmes kalandjai', '9789634973645', 1892, 376, 'angol'),
(37, 'Sherlock Holmes emlékiratai', '9789634973942', 1893, 296, 'angol'),
(38, 'Sherlock Holmes visszatér ', '9634229573', 1905, 264, 'angol'),
(39, 'Az utolsó meghajlás', '9789634974741', 1917, 244, 'angol'),
(40, 'Sherlock Holmes esetnaplója', '9789632279169', 1927, 124, 'angol'),
(41, 'Tanár úr kérem!', '', 1916, 0, 'magyar'),
(42, 'Az ember tragédiája', '9789633491621', 1862, 266, 'magyar'),
(43, 'Bánk bán', '9789631438437', 1820, 326, 'magyar'),
(49, 'Tempus', '', 1932, 118, 'magyar'),
(50, 'A szótlan tárgyak lassú szemlélése', '9789634040345', 2014, 161, 'angol'),
(51, 'A bölcs ember félelme', '9780756404734', 2011, 994, 'angol'),
(52, 'Galaxis útikalauz stopposoknak', '9639421634', 1979, 0, 'angol'),
(53, 'Vendéglő a világ végén', '963116864', 1992, 190, 'angol'),
(54, 'Az élet, a világmindenség meg minden', '979963800960', 1982, 160, 'angol'),
(55, 'Egy különc srác feljegyzései', '9789633570333', 1999, 240, 'angol'),
(56, 'Viszlát, és kösz a halakat!', '9638554843', 1984, 224, 'angol'),
(57, 'Jobbára ártalmatlan', '9638587504', 1992, 284, 'angol'),
(58, 'Tartuffe', '9637948899', 1664, 152, 'francia'),
(59, 'Ja, és még valami...', '9789636893705', 2009, 275, 'angol'),
(60, 'S.', '0316201642', 2013, 472, 'angol'),
(61, 'Cthulu hívása', '9631170314', 1992, 0, 'angol'),
(62, 'Eryx falai között', '9638541407', 1995, 0, 'angol'),
(63, 'Howard Phillips Lovecraft: Összes művei I. kötet', '9639393428', 2001, 0, 'angol'),
(64, 'Howard Phillips Lovecraft: Összes művei II. kötet', '9634970109', 2003, 0, 'angol'),
(65, 'Phillips Lovecraft: Összes művei III. kötet', '9634970613', 2005, 0, 'angol'),
(66, 'Howard Phillips Lovecraft legjobb művei', '9789634972150', 2011, 0, 'angol'),
(67, 'A holló', '9786155248269', 1845, 0, 'angol'),
(68, 'Tövisek Hercege', '9789639861688', 2011, 336, 'angol'),
(69, 'Tövisek Királya', '9789639861923', 2012, 597, 'angol'),
(70, 'Tövisek császára', '9786155514265', 2013, 574, 'angol'),
(71, 'A varázsló unokaöccse', '9789632884332', 1955, 204, 'angol'),
(72, 'Az oroszlán, a boszorkány és a ruhásszekrény', '9789632884349', 1950, 200, 'angol'),
(73, 'Caspian herceg', '9789632884479', 1951, 264, 'angol'),
(74, 'A hajnalvándor útja', '9789632884486 ', 1952, 284, 'angol'),
(75, 'Az ezüsttrón', '9789632884523', 1953, 280, 'angol'),
(76, 'A végső ütközet', '9789632884530', 1956, 244, 'angol'),
(77, 'A római vér', '9789639868779', 2003, 408, 'angol'),
(78, 'Róma', '9789637118630', 2007, 490, 'angol'),
(79, 'A végzet fegyvere', '9638648325', 2004, 344, 'angol'),
(80, 'Catilina rejtélye', '9786155049255', 1993, 476, 'angol'),
(81, 'A hét csoda', '9786155272042', 2012, 384, 'angol'),
(82, 'A vesta-szüzek háza', '9789637118609', 1977, 222, 'angol'),
(83, 'Venus kezében', '9637118160', 1995, 344, 'angol'),
(84, 'Birodalom', '9786155049361', 2010, 474, 'angol'),
(85, 'Rubicon', '9637118306', 1999, 244, 'angol'),
(86, 'Eltűnt Massiliában', '9637118497', 2000, 240, 'angol'),
(87, 'Próféciák köde', '9789637118807', 2002, 256, 'angol'),
(88, 'Caesar ítélete', '9789639868083', 2004, 302, 'angol'),
(89, 'Caesar diadala', '9789639868380', 2008, 234, 'angol'),
(90, 'A nílusi rablók', '9786155468100', 2014, 400, 'angol'),
(91, 'A holtak méltósága', '9786155272417', 200, 558, 'angol'),
(92, 'Caesar trónja', '9789634194224', 2018, 416, 'angol'),
(93, 'A Szigetvilág varázslója', '9631164209', 1968, 216, 'angol'),
(94, 'Autan sírjai', '9631167291', 1971, 168, 'angol'),
(95, 'A legtávolibb part', '963116800X', 1972, 248, 'angol'),
(96, 'Tehanu', '9631171795', 1990, 268, 'angol'),
(97, 'Elfújta a szél', '9630779617', 1936, 1776, 'angol'),
(98, 'Scarlett', '9630753693', 1991, 950, 'angol'),
(99, 'Madison megye hídjai', '963548867X ', 1999, 174, 'angol'),
(100, 'A Vándorló palota', '9789638857545', 2010, 332, 'angol'),
(101, 'Száll a kakukk fészkére', '9789630788533', 1962, 374, 'angol'),
(102, 'A ló és kis gazdája', '9789632884356', 1954, 248, 'angol'),
(103, 'Egy gladiátor csak egyszer hal meg', '9789639868243', 2005, 238, 'angol'),
(104, 'Az égi palota', '9789638901354', 1990, 262, 'angol'),
(105, 'A másik palota', '9786155131004', 2008, 302, 'angol'),
(107, 'Battle Royale', '9639602612', 1999, 738, 'Japán'),
(118, 'Álmodnak-e ​az androidok elektronikus bárányokkal?', '97896334190356', 1968, 248, 'angol');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szerzo`
--

CREATE TABLE `szerzo` (
  `id` int(11) NOT NULL,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `nem` tinyint(1) NOT NULL COMMENT 'nő = true, férfi = false',
  `szuletett` date NOT NULL,
  `elhunyt` date DEFAULT NULL,
  `szarmazas` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `szuletesihely` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `szerzo`
--

INSERT INTO `szerzo` (`id`, `nev`, `nem`, `szuletett`, `elhunyt`, `szarmazas`, `szuletesihely`) VALUES
(1, 'J. R. R. Tolkien', 1, '1892-01-03', '1973-09-02', 'Oranje Szabadállam', 'Bournemouth'),
(2, 'George R. R. Martin', 1, '1948-09-20', NULL, 'Amerikai Egyesült Államok', 'Bayonne, New Jersey'),
(3, 'Patrick Rothfuss', 1, '1973-06-06', NULL, 'Amerikai Egyesült Államok', 'Madison, Wisconsin'),
(4, 'Douglas Adams', 1, '1952-03-11', '2001-05-11', 'Egyesült Királyság', 'Cambridge'),
(5, 'Andy Weir', 1, '1972-06-16', NULL, 'Amerikai Egyesült Államok', 'Davis, California'),
(6, 'Mark Lawrence', 1, '1966-01-01', NULL, 'Amerikai Egyesült Államok', ''),
(8, 'J. J. Abrams', 1, '1966-06-27', NULL, 'Amerikai Egyesült Államok', 'New York'),
(9, 'Howard Phillips Lovecraft', 1, '1890-08-20', '1937-03-15', 'Amerikai Egyesült Államok', 'Providence, Rhode Island'),
(10, 'Edgar Allan Poe', 1, '1809-01-19', '1849-10-07', 'Amerikai Egyesült Államok', 'Boston, Massachusetts'),
(11, 'George Orwell', 1, '1903-07-25', '1950-01-21', 'Egyesült Királyság', 'Motihari, India'),
(12, 'C. S. Lewis', 1, '1898-11-29', '1963-11-22', 'Egyesült Királyság', 'Belfast, Észak-Írország'),
(13, 'Steven Saylor', 1, '1956-03-23', NULL, 'Egyesült Államok', 'Port Lavaca, Texas'),
(15, 'Dante Alighieri', 1, '1265-05-15', '1321-09-14', 'Olasz', 'Firenze'),
(17, 'Takami Kósun', 1, '1969-01-10', '0000-00-00', 'Japán', 'Amagaszaki, Hjógo prefektúra'),
(18, 'Fjodor Mihajlovics Dosztojevszkij', 1, '1821-11-11', '1881-02-09', 'Orosz', 'Moszkva, Orosz Birodalom'),
(19, 'Ernest Hemingway', 1, '1899-06-21', '1961-06-02', 'Amerikai Egyesült Államok', 'Ketchum, Idaho'),
(20, 'John Steinbeck', 1, '1902-02-27', '1968-12-20', 'Amerikai Egyesült Államok', 'New York, New York'),
(21, 'William Shakespeare', 1, '1564-04-23', '1616-04-23', 'Anglia', 'Stratford-upon-Avon'),
(22, 'Harper Lee', 0, '1926-04-28', '2016-02-19', 'Amerikai Egyesült Államok', 'Monroeville, Alabama'),
(23, 'Stephen Hawking', 1, '1942-01-08', '2018-03-14', 'Egyesült Királyság', 'Oxford'),
(24, 'Arthur Conan Doyle', 1, '1859-05-22', '1930-06-07', 'Skócia', 'Edinburgh'),
(25, 'Karinthy Frigyes', 1, '1887-06-25', '1938-08-29', 'Osztrák-Magyar Monarchia', 'Budapest'),
(26, 'Madách Imre', 1, '1823-01-20', '1864-10-05', 'Osztrák-Magyar Monarchia', 'Alsósztregova'),
(27, 'Katona József', 1, '1791-11-11', '1830-04-16', 'Habsburg Birodalom', 'Kecskemét'),
(28, 'Eoin Colfer', 1, '1965-05-14', '0000-00-00', 'Írország', 'Wexford'),
(29, 'Ursula K. Le Guin', 0, '1929-10-21', '2018-01-22', 'Amerikai Egyesült Államok', 'Berkeley, Kalifornia'),
(30, 'Diana Wynne Jones', 0, '1934-08-16', '2011-03-26', 'Egyesült Királyság', 'London'),
(31, 'Margaret Mitchell', 0, '1900-11-08', '1949-08-16', 'Amerikai Egyesült Államok', 'Atlanta, Georgia'),
(32, 'Robert James Waller', 1, '1939-08-01', '2017-03-10', 'Amerikai Egyesült Államok', 'Charles City, Iowa'),
(33, 'Kenneth Elton Kesey', 1, '1935-09-17', '2001-11-10', 'Amerikai Egyesült Államok', 'La Junta, Colorado'),
(43, 'Philip K. Dick', 1, '1928-12-16', '1982-03-02', 'Amerikai Egyesült Államok', 'Chicago, Illinois');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kapcsolo`
--
ALTER TABLE `kapcsolo`
  ADD PRIMARY KEY (`szerzoid`,`konyvid`),
  ADD KEY `konyvid` (`konyvid`);

--
-- A tábla indexei `konyv`
--
ALTER TABLE `konyv`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `szerzo`
--
ALTER TABLE `szerzo`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `konyv`
--
ALTER TABLE `konyv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT a táblához `szerzo`
--
ALTER TABLE `szerzo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
