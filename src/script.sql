CREATE DATABASE databasepdo;
use databasepdo;

CREATE TABLE produtos(
    id int(11) NOT NULL AUTO_INCREMENT,
    descricao varchar(50) DEFAULT NULL,
    PRIMARY KEY(id)
);