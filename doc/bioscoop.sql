SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bioscoop`
--
DROP DATABASE IF EXISTS `bioscoop`;
CREATE DATABASE IF NOT EXISTS `bioscoop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bioscoop`;

--
-- Tabel: `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `leeftijd` int(11) DEFAULT NULL,
  `premiere` int(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Adventures of Zatoichi (Zatôichi sekisho yaburi) (Zatôichi 9)', 'Pellentesque at nulla.', 'comedy', '16', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Skin Game', 'Mauris ullamcorper purus sit amet nulla.', 'horror', '6', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Shoes of the Fisherman, The', 'Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia.', 'romantisch', '12', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('High Strung', 'In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem.', 'horror', '12', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Manolito Four Eyes', 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 'horror', '6', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('People vs. George Lucas, The', 'Nullam varius.', 'comedy', 'NULL', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('In the Soup', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue.', 'comedy', '6', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Bekännelsen (Confession, The)', 'Etiam faucibus cursus urna.', 'horror', '6', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Biutiful', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum.', 'horror', '16', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Dying Gaul, The', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis.', 'comedy', 'NULL', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Breakdown', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 'romantisch', '12', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('DMT: The Spirit Molecule', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 'horror', '12', 1);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Gridiron Gang', 'Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.', 'romantisch', 'NULL', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('S.O.B.', 'Etiam faucibus cursus urna. Ut tellus.', 'comedy', '6', 1);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Hurricane, The', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo.', 'horror', '16', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Charlie Chan''s Secret', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'comedy', '12', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Cocktail', 'Duis at velit eu est congue elementum. In hac habitasse platea dictumst.', 'horror', '6', 1);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Angels in the Outfield', 'Cras in purus eu magna vulputate luctus.', 'horror', 'NULL', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Great Train Robbery, The', 'Donec ut dolor.', 'romantisch', '16', 0);
insert into films (titel, beschrijving, genre, leeftijd, premiere) values ('Man Escaped, A (Un  condamné à mort s''est échappé ou Le vent souffle où il veut)', 'Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', 'romantisch', 'NULL', 0);
customer