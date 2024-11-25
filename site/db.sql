
drop database meu_banco;

CREATE DATABASE meu_banco;
USE meu_banco;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

ALTER TABLE produtos ADD COLUMN imagem VARCHAR(255) NOT NULL;

INSERT INTO usuarios (nome, email, senha) 
VALUES ('admin', 'admin@admin.com', ('123'));

CREATE TABLE orcamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    telefone_cliente VARCHAR(20) NOT NULL,
    email_cliente VARCHAR(100) NOT NULL,
    defeito TEXT NOT NULL,
    ano_carro INT NOT NULL,
    tipo_gasolina VARCHAR(20) NOT NULL,
    foto_carro VARCHAR(255) NOT NULL,
    data_orcamento TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    telefone_cliente VARCHAR(20) NOT NULL,
    email_cliente VARCHAR(100) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    cor VARCHAR(30) NOT NULL,
    placa VARCHAR(10) NOT NULL,
    ano_carro INT NOT NULL,
    tipo_gasolina VARCHAR(20) NOT NULL,
    defeito TEXT NOT NULL,
    foto_carro VARCHAR(255) NOT NULL,
    data_orcamento TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
