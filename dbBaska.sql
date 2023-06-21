create database nbaDraft;
use nbaDraft; 
create table players(
id INTEGER primary key NOT NULL AUTO_INCREMENT,
nome varchar(150) NOT NULL,
altura float NOT NULL,
peso int NOT NULL,
nascimento date NOT NULL,
universidade varchar(30) NOT NULL,
pickYear year NOT NULL,
pickRd int NOT NULL,
pickNum int NOT NULL,
pickTeam CHAR not null);