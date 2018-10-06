/* Create Database and Table */
create database anak_kos;
 
use anak_kos;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `jurusan` varchar(100),
  `lineid` varchar(15),
  PRIMARY KEY  (`id`)
);