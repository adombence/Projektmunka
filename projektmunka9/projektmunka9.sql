SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `projektmunka9`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `gyarto`
--

CREATE TABLE `gyarto` (
  `gyartoId` int(11) NOT NULL,
  `gyartoNev` varchar(100) NOT NULL,
  `alapito` varchar(100) NOT NULL,
  `alapitasEve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `gyarto`
--

INSERT INTO `gyarto` (`gyartoId`, `gyartoNev`, `alapito`, `alapitasEve`) VALUES
(1, 'Seat', 'Instituto Nacional de Industria', 1950),
(2, 'Fiat', 'Giovanni Agnelli', 1899),
(3, 'Renault', ' Louis Renault, Marcel Renault, Fernand Renault', 1898),
(4, 'Opel', 'Adam Opel', 1862),
(5, 'Suzuki', 'Michio Suzuki', 1909),
(6, 'Honda', 'Honda Szóicsiró', 1948),
(7, 'Toyota', 'Tojoda Kiicsiró', 1936),
(8, 'Volkswagen', 'Ferdinand Porsche', 1937),
(9, 'Chevrolet', 'Louis Chevrolet, William C. Durant', 1911),
(10, ' Nissan', 'Yoshisuke Aikawa', 1930);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `modell`
--

CREATE TABLE `modell` (
  `gyartoId` int(11) NOT NULL,
  `modellNev` varchar(100) NOT NULL,
  `gyartasiEv` int(11) NOT NULL,
  `eladottDarabszam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `modell`
--

INSERT INTO `modell` (`gyartoId`, `modellNev`, `gyartasiEv`, `eladottDarabszam`) VALUES
(1, 'Toledo', 1991, 1026216),
(1, 'Leon mk1', 1998, 6080),
(1, 'Ibiza mk3', 2002, 197311),
(1, 'Altea', 2004, 46254),
(1, 'Ateca', 2016, 35833),
(2, 'Panda mk3', 2002, 2168491),
(2, 'Punto EVO', 2009, 39234),
(2, 'Bravo', 2007, 32835),
(2, 'Albea', 2002, 28837),
(2, 'Brava', 1995, 34584),
(3, 'Megane I', 1995, 25943),
(3, 'Scenic I', 1996, 22485),
(3, 'Espace I', 1984, 34267),
(3, 'Clio I', 1990, 24683),
(3, 'Captur', 2013, 243797),
(4, 'Agila A', 2000, 46356),
(4, 'Antara', 2006, 33876),
(4, 'Ascona A', 1970, 36452),
(4, 'Insignia G09', 2008, 26459),
(4, 'Kadett E', 1984, 36452),
(5, 'Baleno', 2015, 23875),
(5, 'Alto 5 generation', 1998, 34562),
(5, 'Swift RS', 2004, 26543),
(5, 'Ignis MF', 2016, 284523),
(5, 'WagonR MP31S', 2010, 24395),
(6, 'Accord 8 generation', 2008, 372789),
(6, 'Civic 8 generation', 2005, 308415),
(6, 'Jazz GD', 2001, 34),
(6, 'City GM2/3', 2008, 83156),
(6, 'Legend KA9', 1995, 65456),
(7, 'Supra A80', 1993, 12059),
(7, 'Yaris XP90', 2005, 223539),
(7, 'Auris E150', 2006, 32715),
(7, 'Rav4 XA20', 2000, 53777),
(7, 'Avensis T250', 2003, 67045),
(8, 'Bora', 1998, 5483),
(8, 'Golf Mk4/A4', 1997, 2807),
(8, 'Passat B7', 2010, 10534),
(8, 'Arteon', 2017, 3770),
(8, 'Tuareg 3 generation', 2018, 2022),
(9, 'Aveo T300', 2012, 26453),
(9, 'Bolt', 2017, 9054),
(9, 'Camaro 5 generation', 2010, 81299),
(9, 'Kalos T200', 2004, 8054),
(9, 'Lacetti J300', 2008, 12145),
(10, 'Qasqai J11', 2013, 226111),
(10, 'Juke F16', 2019, 68773),
(10, 'GT-R', 2007, 807),
(10, 'Cube 3 generation', 2008, 2534),
(10, 'Leaf ZE1', 2017, 5348);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szekhely`
--

CREATE TABLE `szekhely` (
  `gyartoId` int(11) NOT NULL,
  `orszag` varchar(100) NOT NULL,
  `varos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `szekhely`
--

INSERT INTO `szekhely` (`gyartoId`, `orszag`, `varos`) VALUES
(1, 'Spanyolország', 'Martorell'),
(2, 'Olaszország', ' Torino'),
(3, 'Franciaország', ' Boulogne-Billancourt'),
(4, 'Németország', ' Rüsselsheim'),
(5, 'Japán', 'Hamamacu, Sizuoka'),
(6, 'Japán', ' Tokió'),
(7, 'Japán', ' Tokió'),
(8, 'Svájc', ' Lausanne'),
(9, 'USA', ' Detroit, Michigan'),
(10, 'Japán', 'Jokohama');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `gyarto`
--
ALTER TABLE `gyarto`
  ADD PRIMARY KEY (`gyartoId`);

--
-- A tábla indexei `modell`
--
ALTER TABLE `modell`
  ADD KEY `gyartoId` (`gyartoId`);

--
-- A tábla indexei `szekhely`
--
ALTER TABLE `szekhely`
  ADD PRIMARY KEY (`gyartoId`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `gyarto`
--
ALTER TABLE `gyarto`
  MODIFY `gyartoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `modell`
--
ALTER TABLE `modell`
  ADD CONSTRAINT `modell_ibfk_1` FOREIGN KEY (`gyartoId`) REFERENCES `gyarto` (`gyartoId`) ON DELETE CASCADE;

--
-- Megkötések a táblához `szekhely`
--
ALTER TABLE `szekhely`
  ADD CONSTRAINT `szekhely_ibfk_1` FOREIGN KEY (`gyartoId`) REFERENCES `gyarto` (`gyartoId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
