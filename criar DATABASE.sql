-- Sintaxe MySQL

create database leitecompera;
use leitecompera;

create table carrinho(
    id int AUTO_INCREMENT not null,
    idUsuario int not null,
    produto varchar(50) not null,
    imagem varchar(50) not null,
    preco decimal not null,
    quantidade int not null,
    Primary key (id)
);

create table extrato(
    id int AUTO_INCREMENT not null,
    idUsuario int not null,
    produto varchar(50) not null,
    imagem varchar(50) not null,
    preco decimal not null,
    quantidade int not null,
    Primary key (id)
);