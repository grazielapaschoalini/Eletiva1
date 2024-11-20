USE transportadora_db;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL, 
    nivel ENUM('adm', 'colab') NOT NULL
);

CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    email VARCHAR(100),
    telefone VARCHAR(20)
);

CREATE TABLE motorista (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cnh VARCHAR(9) NOT NULL,
    telefone VARCHAR(20)
);

CREATE TABLE carga (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    peso DECIMAL(10, 2) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    destino VARCHAR(255) NOT NULL
);

CREATE TABLE entregas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    motorista_id INT NOT NULL,
    carga_id INT NOT NULL,
    data_entrega DATE NOT NULL,
    
    FOREIGN KEY (cliente_id) REFERENCES cliente(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (motorista_id) REFERENCES motorista(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (carga_id) REFERENCES carga(id) ON DELETE CASCADE ON UPDATE CASCADE
);