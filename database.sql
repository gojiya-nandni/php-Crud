DROP DATABASE IF EXISTS `stud`;
CREATE DATABASE `stud`;
USE `stud`;

CREATE TABLE  `student`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    course VARCHAR(50),
    email VARCHAR(50),
    mobile INT,
    addr VARCHAR(100)
);