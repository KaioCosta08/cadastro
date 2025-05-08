CREATE DATABASE sistema;
USE sistema;

-- Excluindo o banco de dados
DROP DATABASE sistema;


CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL UNIQUE
);

SELECT * FROM usuario;