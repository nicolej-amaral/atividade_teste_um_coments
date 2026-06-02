-- Criar um banco de dados, neste caso "sistema_simples".
CREATE DATABASE sistema_simples;

-- Acessar o banco de dados criado anteriormente.
USE sistema_simples;

-- Criar uma tabela dentro do banco de dados, neste caso a tabela "users".
CREATE TABLE users (
    -- Declarar, dentro da tabela a variável id, e dar a ela o título de chave primária.
    id INT AUTO_INCREMENT PRIMARY KEY,
    -- Declarar, dentro da tabela a variável username.
    username VARCHAR(255) NOT NULL,
    -- Declarar, dentro da tabela a variável password.
    password VARCHAR(255) NOT NULL
);

-- Inserir dentro da tabela "users" o username: "admin", e a password: "123".
INSERT INTO users (username, password) VALUES ('admin', '123');