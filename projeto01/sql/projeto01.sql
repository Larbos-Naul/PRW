-- Drop banco de dados
-- drop database projeto01;
drop database projeto01;

-- Criação de Banco de Dados
create database projeto01;

-- Selecionar Banco de Dados
use projeto01;

-- Criação da tabela usuário
create table usuario (
	id_usuario          int        not null auto_increment,
    nome_usuario        varchar(100)   not null,
    email_usuario       varchar(100)   not null,
    telefone_usuario    varchar(30)    not null,
    primary key (id_usuario)
);