--
-- Database: `krant`
--
DROP DATABASE IF EXISTS `krant`;
CREATE DATABASE IF NOT EXISTS `krant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `krant`;

--
-- Tabel: `nieuws`
--

DROP TABLE IF EXISTS `nieuws`;
CREATE TABLE IF NOT EXISTS `nieuws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `auteur` text DEFAULT NULL,
  `uitgelicht` int(1) DEFAULT 0,
  `regio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Pellentesque ultrices mattis odio.', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum.', 'Maëlla', 1, 'oosterhout');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Duis bibendum.', 'Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla.', 'Audréanne', 1, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Cras non velit nec nisi vulputate nonummy.', 'Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', null, 0, 'oosterhout');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Cras pellentesque volutpat dui.', 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'Lorène', 1, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', null, 0, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Etiam faucibus cursus urna.', 'Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl.', null, 1, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Nullam sit amet turpis elementum ligula vehicula consequat.', 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue.', 'Åslög', 0, 'roosendaal');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Nulla tellus.', 'In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem.', null, 0, 'roosendaal');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Donec posuere metus vitae ipsum.', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla.', 'Estève', 1, 'roosendaal');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 'Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.', null, 0, 'roosendaal');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula.', 'Cléa', 1, 'roosendaal');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.', 'Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis.', null, 1, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Duis bibendum.', 'Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', 'Agnès', 0, 'roosendaal');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Suspendisse potenti.', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue. Etiam justo. Etiam pretium iaculis justo.', 'Kuí', 1, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Cras non velit nec nisi vulputate nonummy.', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis.', 'Magdalène', 0, 'roosendaal');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Nulla ut erat id mauris vulputate elementum.', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'Salomé', 0, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Integer non velit.', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam.', 'Pénélope', 0, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Nulla ac enim.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis.', 'Agnès', 0, 'oosterhout');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Nulla ut erat id mauris vulputate elementum.', 'Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', 'Renée', 1, 'breda');
insert into nieuws (titel, beschrijving, auteur, uitgelicht, regio) values ('Fusce posuere felis sed lacus.', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.', 'Maëly', 0, 'breda');
