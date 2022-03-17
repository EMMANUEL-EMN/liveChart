DROP DATABASE IF EXISTS `javan`;
CREATE DATABASE `javan`;
USE `javan`;
SET NAMES utf8;
SET character_set_client=utf8mb4;

CREATE TABLE `user`(
`id` int(255) AUTO_INCREMENT NOT NULL PRIMARY KEY,
`username` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`rollno` int(3) NOT NULL,
`password` varchar(50) NOT NULL,
`image` varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `friends`(
`id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`email` varchar(50) NOT NULL,
`friend_email` varchar(50) NOT NULL,
`status` varchar(30) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `charts`(
`id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`sender` varchar(50) NOT NULL,
`text` LONGTEXT NOT NULL,
`receiver` varchar(50) NOT NULL,
`uploads` varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `status`(
`id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`email` varchar(50) NOT NULL,
`uploads` varchar(255) NOT NULL,
`text` LONGTEXT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `personal_info`(
`id` int(255) AUTO_INCREMENT NOT NULL PRIMARY KEY,
`email` varchar(50) NOT NULL,
`marital status` varchar(50) NOT NULL,
`university` varchar(100) NOT NULL,
`college` varchar(100) NOT NULL,
`residential area` varchar(50) NOT NULL,
`mobile number` int(10) NOT NULL,
`high school` varchar(100) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;