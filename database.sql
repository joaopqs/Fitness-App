CREATE DATABASE IF NOT EXISTS fitness_tracker;
USE fitness_tracker;

CREATE TABLE suplementos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL, -- Ex: Creatina Pura, Whey Protein
    marca VARCHAR(100) NOT NULL,
    peso_total_gramas INT NOT NULL, -- Ex: 2000 (2kg)
    dose_diaria_gramas INT NOT NULL, -- Ex: 5
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);