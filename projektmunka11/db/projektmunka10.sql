SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Adatbázis: `projektmunka10`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `festmeny`
--

CREATE TABLE `festmeny` (
  `muvesz` varchar(100) NOT NULL COMMENT 'A művész neve',
  `cim` varchar(100) NOT NULL COMMENT 'Alkotás címe',
  `keletkezeseve` int(11) NOT NULL COMMENT 'Keletkezés éve',
  `stilus` varchar(100) NOT NULL COMMENT 'Stílus',
  `anyag` varchar(100) NOT NULL COMMENT 'Anyag',
  `meretx` int(11) NOT NULL COMMENT 'Szélesség',
  `merety` int(11) NOT NULL COMMENT 'Magasság',
  `id` int(255) NOT NULL COMMENT 'Festmény azonosítója',
  `muveszid` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='a festmenyek adatai';

--
-- A tábla adatainak kiíratása `festmeny`
--

INSERT INTO `festmeny` (`muvesz`, `cim`, `keletkezeseve`, `stilus`, `anyag`, `meretx`, `merety`, `id`, `muveszid`) VALUES
('Barabás Miklós', 'A menyasszony érkezése', 1856, 'klaszicizmus', 'olaj - vászon', 127, 159, 1, 1),
('Munkácsy Mihály', 'Ásító inas', 1868, 'biedermeier', 'olaj - fa', 31, 24, 2, 2),
('Pablo Picasso', 'Bathers', 1918, 'kubizmus', 'olaj - vászon', 26, 22, 3, 3),
('Anders Zorn', 'Castles in the Air', 1885, 'impresszionizmus', 'vízfesték - gouache - papír', 37, 26, 4, 10),
('Vincent van Gogh', 'Csillagos éj', 1889, 'posztimpresszionizmus', 'olaj - vászon', 92, 74, 5, 9),
('Pablo Picasso', 'Don Quixote', 1955, 'kubizmus', 'olaj - vászon', 65, 60, 6, 3),
('Munkácsy Mihály', 'Ecce Homo', 1896, 'akadémikus', 'olaj - vászon', 403, 650, 7, 2),
('Frida Kahlo', 'Frieda and Diego Rivera', 1391, 'szürrealizmus', 'olaj - vászon', 100, 79, 8, 7),
('Claude Monet', 'Garden at Sainte-Adresse', 1867, 'impresszionizmus', 'olaj - vászon', 130, 98, 9, 5),
('Pablo Picasso', 'Girl in a chemise', 1903, 'kubizmus', 'olaj - vászon', 100, 70, 10, 3),
('Munkácsy Mihály', 'Golgota', 1884, 'akadémikus', 'olaj - vászon', 460, 712, 11, 2),
('Pablo Picasso', 'Guernica', 1937, 'kubizmus - szürrealizmus', 'olaj - vászon', 349, 776, 12, 3),
('Frida Kahlo', 'Henry Ford Hospital', 1932, 'szürrealizmus', 'olaj - fém', 39, 31, 13, 7),
('Barabás Miklós', 'Hölgy portréja', 1846, 'klaszicizmus', 'olaj - vászon', 128, 38, 14, 1),
('Thomas Eakins', 'Home scene', 1871, 'realizmus', 'olaj - vászon', 46, 55, 15, 8),
('Claude Monet', 'Impresszió a felkelő nap', 0, 'impresszionizmus', 'olaj - vászon', 48, 63, 16, 5),
('Anders Zorn', 'Isabella Stewart Gardner in Venice', 1894, 'impresszionuzmus', 'olaj - vászon', 66, 91, 17, 10),
('Claude Monet', 'Japan`s', 1876, 'japonizmus', 'olaj - vászon', 142, 232, 18, 5),
('Munkácsy Mihály', 'Krisztus Pilátus előtt', 1881, 'akadémikus', 'olaj - vászon', 417, 636, 19, 2),
('Caspar David Friedrich', 'Landscape with rainbow', 1810, 'romantikus', 'olaj - vászon', 59, 85, 20, 4),
('Barabás Miklós', 'Liszt Ferenc portréja', 1847, 'klaszicizmus', 'olaj - vászon', 132, 102, 21, 1),
('Anders Zorn', 'Love Nymph', 1885, 'akademikus', 'vízfesték - gouache - papír', 7, 65, 22, 10),
('Anders Zorn', 'Midsummer dance', 1903, 'impresszionizmus', 'olaj - vászon', 118, 90, 23, 10),
('Francisco Goya', 'Nude Maja', 1800, 'romantikus', 'olaj - vászon', 98, 191, 24, 6),
('Barabás Miklós', 'Önarckép', 1839, 'klaszicizmus', 'elefántcsont', 9, 7, 25, 1),
('Vincent van Gogh', 'Quay with men unloading sand barges', 1888, 'posztimpresszionizmus', 'olaj - vászon', 55, 66, 26, 9),
('Munkácsy Mihály', 'Rőzsehordó nő', 1873, 'realizmus', 'olaj - fa', 100, 80, 27, 2),
('Francisco Goya', 'Saturn Devouring One of His Sons', 1819, 'romantikus', 'olaj - vászon', 83, 146, 28, 6),
('Vincent van Gogh', 'Skull with Burning Cigarette', 1886, 'posztimpreszionizmus (vanitas)', '', 25, 32, 29, 9),
('Thomas Eakins', 'Street Scene in Sevilla', 1870, 'realizmus', 'olaj - vászon', 107, 159, 30, 8),
('Barabás Miklós', 'Széchényi István portréja', 1836, 'klaszicizmus', 'olaj - vászon', 31, 25, 31, 1),
('Thomas Eakins', 'The Biglin Brothers Racing', 1873, 'realizmus', 'olaj - vászon', 92, 61, 32, 8),
('Frida Kahlo', 'The broken column', 1944, 'szürrealizmus', 'olaj - masonit', 31, 39, 33, 7),
('Thomas Eakins', 'The Champion Single Sculls', 1871, 'realizmus', 'olaj - vászon', 118, 83, 34, 8),
('Francisco Goya', 'The Clothed Maja', 1800, 'romantikus', 'olaj - vászon', 95, 190, 35, 6),
('Francisco Goya', 'The Colossus', 1812, 'romantikus', 'olaj - vászon', 116, 105, 36, 6),
('Thomas Eakins', 'The Gross Clinic', 1875, 'realizmus', 'olaj - vászon', 198, 244, 37, 8),
('Claude Monet', 'The Hotel des Roches Noires at Trouville', 1870, 'impresszionizmus', '1870', 59, 81, 38, 5),
('Anders Zorn', 'The Little Brewery', 1890, 'realizmus', 'olaj - vászon', 48, 78, 39, 10),
('Francisco Goya', 'The Madhouse', 1812, 'romantikus', 'olaj - vászon', 45, 72, 40, 6),
('Pablo Picasso', 'The old blind guitarist', 1903, 'kubizmus', 'olaj - vászon', 121, 83, 41, 3),
('Vincent van Gogh', 'The Pink Peach tree', 1888, 'posztimpresszionizmus', 'olaj - vászon', 81, 60, 42, 9),
('Caspar David Friedrich', 'The Stages of Life', 1835, 'romantikus', 'olaj - vászon', 73, 94, 43, 4),
('Caspar David Friedrich', 'The Tree of Crows', 1822, 'romantikus', 'olaj - vászon', 73, 59, 44, 4),
('Frida Kahlo', 'The Two Fridas', 1938, 'szürrealizmus', 'olaj - vászon', 174, 173, 45, 7),
('Caspar David Friedrich', 'The Wanderer Above the Sea of Fog', 1818, 'romantikus', 'olaj - vászon', 95, 75, 46, 4),
('Frida Kahlo', 'The Wounded Deer', 1946, 'szürrealizmus', 'olaj - masonit', 22, 30, 47, 7),
('Caspar David Friedrich', 'Two Men Contemplating the Moon', 1825, 'romantikus', 'olaj - vászon', 35, 44, 48, 4),
('Vincent van Gogh', 'Wheatfield with Crows', 1889, 'posztimpresszionizmus', 'olaj - vászon', 50, 41, 49, 9),
('Claude Monet', 'Women in the garden', 1866, 'impresszionizmus', 'olaj - vászon', 205, 255, 50, 5);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `lokacio`
--

CREATE TABLE `lokacio` (
  `cim` varchar(100) NOT NULL COMMENT 'Festmény címe',
  `orszag` varchar(100) NOT NULL COMMENT 'Ország',
  `varos` varchar(100) NOT NULL COMMENT 'Város',
  `kiallitohely` varchar(100) NOT NULL COMMENT 'Kiállítóhely',
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Az alkotások kiállítási helyei';

--
-- A tábla adatainak kiíratása `lokacio`
--

INSERT INTO `lokacio` (`cim`, `orszag`, `varos`, `kiallitohely`, `id`) VALUES
('A menyasszony érkezése', 'Magyarország', 'Budapest', 'Magyar Nemzeti Galéria', 1),
('Ásító inas', 'Magyarország', 'Budapest', 'Magyar Nemzeti Galéria', 2),
('Bathers', '-', '-', 'magángyűjtemény', 3),
('Castles in the Air', 'Svédország', 'Stockholm', 'Nationalmuseum', 4),
('Csillagos éj', 'USA', 'New York', 'Museum of Modern Art', 5),
('Don Quixote', '-', '-', 'magángyűjtemény', 6),
('Ecce Homo', 'Magyarország', 'Debrecen', 'Déri Múzeum', 7),
('Frieda and Diego Rivera', 'USA', 'San Francisco', 'San Francisco Museum of Modern Art', 8),
('Garden at Sainte-Adresse', 'USA', 'New York', 'Metropolitan Museum of Art', 9),
('Girl in a chemise', 'UK', 'London', 'Tate Modern', 10),
('Golgota', 'Magyarország', 'Debrecen', 'Déri Múzeum', 11),
('Guernica', 'Spanyolország', 'Madrid', 'Museo Nacional Centro de Arte Reina Sofía', 12),
('Henry Ford Hospital', 'Mexikó', 'Mexikóváros', 'Dolores Olmedo Collection', 13),
('Hölgy portréja', 'Magyarország', 'Budapest', 'Magyar Nemzeti Galéria', 14),
('Home scene', 'USA', 'New York', 'Brooklyn Museum', 15),
('Impresszió a felkelő nap', 'Franciaország', 'Párizs', 'Musée Marmottan Monet', 16),
('Isabella Stewart Gardner in Venice', 'USA', 'Boston', 'Isabella Stewart Gardner Museum', 17),
('Japan`s', 'USA', 'Boston', 'Museum of Fine Arts', 18),
('Krisztus Pilátus előtt', 'Magyarország', 'Debrecen', 'Déri Múzeum', 19),
('Landscape with rainbow', 'Németország', 'Essen', 'Museum Folkwang', 20),
('Liszt Ferenc portréja', 'Magyarország', 'Budapest', 'Magyar Nemzeti Múzeum', 21),
('Love Nymph', 'UK', 'London', 'magángyűjtemény', 22),
('Midsummer dance', 'Svédország', 'Stockholm', 'Nationalmuseum', 23),
('Nude Maja', 'Spanyolország', 'Madrid', 'Museo del Prado', 24),
('Önarckép', 'Magyarország', 'Budapest', 'Magyar Nemzeti Galéria', 25),
('Pink Peach Trees', 'Hollandia', 'Amsterdam', 'Van Gogh Museum', 26),
('Quay with men unloading sand barges', 'USA', 'New York', 'Cooper Hewitt Museum', 27),
('Rőzsehordó nő', 'Magyarország', 'Budapest', 'Magyar Nemzeti Galéria', 28),
('Saturn Devouring One of His Sons', 'Spanyolország', 'Madrid', 'Museo del Prado', 29),
('Skull with Burning Cigarette', 'Hollandia', 'Amsterdam', 'Van Gogh Museum', 30),
('Street Scene in Sevilla', '-', '-', 'magángyűjtemény', 31),
('Széchényi István portréja', 'Magyarország', 'Budapest', 'Magyar Tudományos Akadémia', 32),
('The Biglin Brothers Racing', 'USA', 'Washinton', 'National Gallery of Art', 33),
('The broken column', 'Mexikó', 'Mexikóváros', 'Dolores Olmedo Collection', 34),
('The Champion Single Sculls', 'USA', 'New York', 'Metropolitan Museum of Art', 35),
('The Clothed Maja', 'Spanyolország', 'Madrid', 'Museo del Prado', 36),
('The Colossus', 'Franciaország', 'Párizs', 'Bibliothèque nationale de France', 37),
('The Gross Clinic', 'USA', 'Philadelphia', 'Philadelphia Museum of Art', 38),
('The Hotel des Roches Noires at Trouville', 'Franciaország', 'Párizs', 'Musée d`Orsay', 39),
('The Little Brewery', 'Svédország', 'Stockholm', 'Nationalmuseum', 40),
('The Madhouse', 'Spanyolország', 'Madrid', 'Real Academia de Bellas Artes de San Fernando', 41),
('The old blind guitarist', 'USA', 'Chicago', 'Art Institute of Chicago', 42),
('The Stages of Life', 'Németország', 'Leipzig', 'Museum der Bildenden Kunste', 43),
('The Tree of Crows', 'Franciaország', 'Párizs', 'Louvre', 44),
('The Two Fridas', 'Mexikó', 'Mexikóváros', 'Museo de Arte Moderno', 45),
('The Wanderer Above the Sea of Fog', 'Németország', 'Hamburg', 'Kunsthalle Hamburg', 46),
('The Wounded Deer', 'USA', 'Houston', 'Collection of Carolyn Farb', 47),
('Two Men Contemplating the Moon', 'Németország', 'Dresden', 'Galerie Neue Meister', 48),
('Wheatfield with Crows', 'Hollandia', 'Amsterdam', 'Van Gogh Museum', 49),
('Women in the garden', 'Franciaország', 'Párizs', 'Musée d`Orsay', 50);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `muvesz`
--

CREATE TABLE `muvesz` (
  `nev` varchar(100) NOT NULL COMMENT 'A művész neve',
  `szuletes` int(11) NOT NULL COMMENT 'A művész születési dátuma',
  `halalozas` int(11) DEFAULT NULL COMMENT 'A művész halálának dátuma',
  `szarmazas` varchar(100) NOT NULL COMMENT 'A művész nemzetisége',
  `stilus` varchar(100) NOT NULL COMMENT 'Stílus(ok)/irányzatok amiben alkotott ',
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `muvesz`
--

INSERT INTO `muvesz` (`nev`, `szuletes`, `halalozas`, `szarmazas`, `stilus`, `id`) VALUES
('Barabás Miklós', 1810, 1898, 'magyar', 'biedermeier - klaszicizmus', 1),
('Munkácsy Mihály', 1844, 1900, 'magyar', 'romantika - realzimus', 2),
('Pablo Picasso', 1881, 1973, 'sapnyol', 'kubizmus', 3),
('Caspar David Friedrich', 1774, 1840, 'német', 'romantika', 4),
('Claude Monet', 1832, 1883, 'francia', 'realizmus - impresszionizmus', 5),
('Francisco Goya', 1746, 1828, 'spanyol', 'romantika', 6),
('Frida Kahlo', 1907, 1954, 'mexikó', 'szürrealizmus', 7),
('Thomas Eakins', 1844, 1916, 'usa', 'realizmus', 8),
('Vincent van Gogh', 1853, 1890, 'holland', 'posztimpresszionizmus', 9),
('Anders Zorn', 1860, 1920, 'svéd', 'impresszionizmus', 10);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `festmeny`
--
ALTER TABLE `festmeny`
  ADD PRIMARY KEY (`id`),
  ADD KEY `muveszid` (`muveszid`);

--
-- A tábla indexei `lokacio`
--
ALTER TABLE `lokacio`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `muvesz`
--
ALTER TABLE `muvesz`
  ADD PRIMARY KEY (`id`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `festmeny`
--
ALTER TABLE `festmeny`
  ADD CONSTRAINT `festmeny_ibfk_1` FOREIGN KEY (`muveszid`) REFERENCES `muvesz` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `lokacio`
--
ALTER TABLE `lokacio`
  ADD CONSTRAINT `lokacio_ibfk_1` FOREIGN KEY (`id`) REFERENCES `festmeny` (`id`) ON DELETE CASCADE;
COMMIT;