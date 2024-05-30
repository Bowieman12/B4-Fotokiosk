--
-- Database: `makelaar`
--
DROP DATABASE IF EXISTS `makelaar`;
CREATE DATABASE IF NOT EXISTS `makelaar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `makelaar`;

--
-- Tabel: `huizen`
--

DROP TABLE IF EXISTS `huizen`;
CREATE TABLE IF NOT EXISTS `huizen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `advertentie` int(1) DEFAULT 0,
  `categorie` varchar(255) NOT NULL,
  `makelaar` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('52814 Granby Junction', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 0, 'appartement', 'Flannigan');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('0756 Valley Edge Lane', 'Nulla ut erat id mauris vulputate elementum. Nullam varius.', 1, 'studio', 'Turban');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('232 Hagan Drive', 'Vivamus vestibulum sagittis sapien.', 0, 'woonhuis', 'Lamberth');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('3 Bellgrove Terrace', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 1, 'appartement', 'Haugh');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('8030 Charing Cross Court', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', 1, 'woonhuis', 'Ceschini');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('825 Meadow Ridge Alley', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 0, 'appartement', 'Stain');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('058 Bonner Place', 'Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 1, 'woonhuis', 'Geertje');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('83 Esch Plaza', 'Aliquam quis turpis eget elit sodales scelerisque.', 0, 'appartement', 'Kesby');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('4 Maple Wood Junction', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy.', 0, 'studio', null);
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('278 Stoughton Pass', 'Nulla tellus. In sagittis dui vel nisl.', 0, 'appartement', 'Franek');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('59 Waywood Point', 'Suspendisse potenti. In eleifend quam a odio.', 0, 'appartement', 'Crofts');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('12039 Division Way', 'Aliquam non mauris.', 0, 'woonhuis', 'Byng');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('23361 Ridgeview Lane', 'Pellentesque ultrices mattis odio. Donec vitae nisi.', 0, 'appartement', 'Civitillo');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('3 Chive Hill', 'Vestibulum sed magna at nunc commodo placerat.', 0, 'appartement', 'McKendry');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('82 Melby Junction', 'Suspendisse accumsan tortor quis turpis. Sed ante.', 0, 'studio', 'Dulieu');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('9 Riverside Avenue', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst.', 0, 'woonhuis', 'Pinsent');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('5 Stone Corner Place', 'Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 0, 'woonhuis', 'Rennix');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('938 Transport Street', 'Duis mattis egestas metus. Aenean fermentum.', 1, 'appartement', 'Cordeau');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('663 Steensland Terrace', 'Morbi a ipsum. Integer a nibh.', 0, 'woonhuis', 'Peele');
insert into huizen (titel, beschrijving, advertentie, categorie, makelaar) values ('7 Helena Avenue', 'Integer a nibh. In quis justo.', 0, 'woonhuis', 'Snooks');
