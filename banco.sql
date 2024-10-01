create database db_api;

use db_api;

create table cliente(
idcli int auto_increment primary key,
nome varchar(50),
categoria varchar(30));

select * from cliente;