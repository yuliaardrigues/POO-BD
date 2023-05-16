-- 1º Executar esse primeiro
CREATE DATABASE IF NOT EXISTS db_cia_aerea;

-- 2º Executar esse
use db_cia_aerea;

-- 3º Executar todos os CREATE
CREATE TABLE passageiro (
	idPassageiro int not null primary key auto_increment,
    cpf varchar(11),
    nome varchar(120),
    dataNascimento DATE,
    email varchar(120),
    telefone varchar(20)
);

CREATE TABLE passagem (
	idPassagem int not null primary key auto_increment,
    codigoAssento varchar(20),
    idVoo int,
    idPassageiro int
);

CREATE TABLE voo (
	idVoo int not null primary key auto_increment,
    qtAssentos int,
    horarioPartida varchar(8),
    horarioChegada varchar(8),
    idAeroporto int,
    idAviao int
);

CREATE TABLE aeroporto (
	idAeroporto int not null primary key auto_increment,
    nome varchar(120),
    cidade varchar(120),
    estado varchar(120),
    cep varchar(20)
);

CREATE TABLE aviao (
	idAviao int not null primary key auto_increment,
    modelo varchar(120),
    capacidade int,
    fabricante varchar(120)
);

-- 4º Executar todos os ALTER
ALTER TABLE passagem
ADD CONSTRAINT idVoo
FOREIGN KEY (idVoo) REFERENCES voo(idVoo);

ALTER TABLE passagem
ADD CONSTRAINT idPassageiro
FOREIGN KEY (idPassageiro) REFERENCES passageiro(idPassageiro);

ALTER TABLE voo
ADD CONSTRAINT idAeroporto
FOREIGN KEY (idAeroporto) REFERENCES aeroporto(idAeroporto);

ALTER TABLE voo
ADD CONSTRAINT idAviao
FOREIGN KEY (idAviao) REFERENCES aviao(idAviao);
