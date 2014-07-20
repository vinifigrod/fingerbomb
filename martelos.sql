create database if not exists marteladas;

use marteladas;

create table if not exists jogadas(
	id int primary key auto_increment,
	nome varchar(80) not null,
	pontos int not null
);