create database biblioteca;

use biblioteca;

create table estoquelivros(
    codigolivro int primary key auto_increment,
    nomelivro varchar (100) not null,
    autorlivro varchar (100) not null,
    editoralivro varchar (100) not null,
    generolivro varchar (100) not null 
);

insert into estoquelivros (nomelivro, autorlivro, editoralivro, generolivro) values
(1, 2, 3, 4);
 
 select * from estoquelivros;
 