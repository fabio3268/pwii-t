create schema `bd-inf-3at` collate utf8mb4_general_ci;
use `bd-inf-3at`;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `name` varchar(45) NOT NULL,
                         `email` varchar(45) NOT NULL,
                         `password` varchar(45) NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4