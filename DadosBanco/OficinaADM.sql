CREATE DATABASE oficina;

USE oficina;

CREATE TABLE cep (
    id_cep INT NOT NULL AUTO_INCREMENT,
    codigo_cep VARCHAR(10) UNIQUE NOT NULL,
    logadouro VARCHAR(255) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    PRIMARY KEY (id_cep)
);

CREATE TABLE cliente (
    id_cliente INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(60) UNIQUE NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    logadouro VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    id_cep INT NOT NULL,
    senha varchar(255) not null,
    PRIMARY KEY (id_cliente),
    foreign key (id_cep) references cep(id_cep)
);


CREATE TABLE carro (
    idcarro INT NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(30) NOT NULL,
    placa VARCHAR(7) UNIQUE NOT NULL,
    ano YEAR NOT NULL,
    cor VARCHAR(15) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    id_cliente INT NOT NULL,
    carro_concerto VARCHAR(20) NOT NULL,
    carro_venda VARCHAR(20) NOT NULL,
    PRIMARY KEY (idcarro),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE pedido (
    id_pedido INT NOT NULL AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    data_pedido DATE NOT NULL,
    valor_total DECIMAL(10, 2) NOT NULL,
    forma_pagamento VARCHAR(50) NOT NULL,
    status_2 VARCHAR(30) NOT NULL DEFAULT 'Pendente',
    dados_pagamento VARCHAR(255),
    descricao_pedido tinytext,
    PRIMARY KEY (id_pedido),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE oficina (
    id_oficina INT NOT NULL AUTO_INCREMENT,
    cnpj VARCHAR(14) UNIQUE NOT NULL,
    logadouro VARCHAR(255) NOT NULL,
    id_cep INT NOT NULL,
    PRIMARY KEY (id_oficina),
    FOREIGN KEY (id_cep) REFERENCES cep(id_cep)
);

CREATE TABLE funcionario (
    idfuncionario INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    cargo VARCHAR(45) NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    email VARCHAR(60) UNIQUE NOT NULL,
    salario DECIMAL(10, 2) NOT NULL,
    hora_entrada TIME NOT NULL,
    hora_saida TIME NOT NULL,
    escala VARCHAR(3),
    estado_civil VARCHAR(10),
    numero_conta BIGINT,
    id_oficina INT NOT NULL,
    PRIMARY KEY (idfuncionario),
    FOREIGN KEY (id_oficina) REFERENCES oficina(id_oficina)
);

CREATE TABLE estoque (
    idestoque INT NOT NULL AUTO_INCREMENT,
    produto VARCHAR(45) NOT NULL,
    setor VARCHAR(5) NOT NULL,
    requisicao DATE NOT NULL,
    aquisicao DATE NOT NULL,
    quantidade INT NOT NULL,
    id_oficina INT NOT NULL,
    PRIMARY KEY (idestoque),
    FOREIGN KEY (id_oficina) REFERENCES oficina(id_oficina)
);


CREATE TABLE fornecedores (
    idfornecedores INT NOT NULL AUTO_INCREMENT,
    CNPJ VARCHAR(14) UNIQUE NOT NULL,
    nome VARCHAR(45) NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    email VARCHAR(60) NOT NULL,
    logadouro VARCHAR(255) NOT NULL,
    id_cep INT NOT NULL,
    PRIMARY KEY (idfornecedores),
    FOREIGN KEY (id_cep) REFERENCES cep(id_cep)
);

CREATE TABLE compras (
    id_compra INT NOT NULL AUTO_INCREMENT,
    produto VARCHAR(100) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    data_compra DATE NOT NULL,
    id_oficina int not null,
    id_fornecedor int not null,
    PRIMARY KEY (id_compra),
    foreign key (id_oficina) references oficina(id_oficina),
     FOREIGN KEY (id_fornecedor) REFERENCES fornecedores(idfornecedores) ON DELETE CASCADE
);

CREATE TABLE Despesas (
    id_despesa INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(255) NOT NULL,
    data_despesa DATE NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    tipo_despesa VARCHAR(100) default "Saida",
    id_oficina int not null,
    foreign key (id_oficina) references oficina(id_oficina));

/*
select * from cliente;

select * from cep;
*/
/*
INSERT INTO cep (codigo_cep, logadouro, cidade, estado) VALUES 
('09028-367', 'Rua Fagundes Gomes', 'São Paulo', 'SP');
*/

/*select * from oficina;
*/
/*
INSERT INTO oficina (cnpj, logadouro, id_cep) VALUES
('23.457.659/8757-24', 'Rua Fagundes Gomes, 09028-367', 1);
*/
/*SET @id_oficina = LAST_INSERT_ID();

select * from funcionario;
*/
/*

INSERT INTO funcionario (nome, cargo, qntd_func, cpf, email, salario, hora_entrada, hora_saida, escala, estado_civil, numero_conta, id_oficina) 
VALUES 
  ('', 'Gerente', 1, '123.456.789-00', 'gerente@example.com', 1887.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Gerente', 2, '321.654.987-00', 'gerente2@example.com', 1887.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina), 
  ('', 'Mecânico', 1, '987.654.321-00', 'mecanico@example.com', 1354.00, '07:30:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Mecânico', 2, '654.321.987-00', 'mecanico2@example.com', 1354.00, '07:30:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Faxineiro(a)', 1, '321.684.987-90', 'faxineiro@example.com', 890.00, '09:00:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Contabilista', 1, '159.753.486-00', 'contabilista@example.com', 1631.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Contabilista', 2, '259.369.147-00', 'contabilista2@example.com', 1631.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Analista de logística', 1, '258.369.147-00', 'logistica@example.com', 1789.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Analista de logística', 2, '753.159.486-00', 'logistica2@example.com', 1789.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Gestor de Recursos Humanos', 1, '783.159.486-00', 'rh@example.com', 1897.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina),
  ('', 'Gestor de Recursos Humanos', 2, '159.765.486-00', 'rh2@example.com', 1897.00, '08:00:00', '16:00:00', '5x2', '', '', @id_oficina);
  
  */