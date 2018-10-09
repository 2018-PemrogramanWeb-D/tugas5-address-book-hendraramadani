create database address_book;
 
use address_book;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `address` varchar(100),
  `mobile` varchar(15),
  `email` varchar(100),
  `pos` varchar(5),
  PRIMARY KEY  (`id`)
);