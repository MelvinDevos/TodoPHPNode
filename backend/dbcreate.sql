DROP DATABASE IF EXISTS TODO_webdev;

CREATE database TODO_webdev;

USE TODO_webdev;

CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(255) NOT NULL unique,
  `password` varchar(1024) NOT NULL
);
