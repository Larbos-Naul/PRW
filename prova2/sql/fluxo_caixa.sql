drop database if exists Prova2;

create database Prova2;

use Prova2;

CREATE TABLE fluxo_caixa (

    id            INTEGER         NOT NULL AUTO_INCREMENT,
    data          DATE            NOT NULL,
    tipo          VARCHAR(10)     NOT NULL,
    valor         DECIMAL(10,2)   NOT NULL,
    historico     VARCHAR(150)    NOT NULL,
    cheque        VARCHAR(3)      NOT NULL,
    PRIMARY KEY (id)
);