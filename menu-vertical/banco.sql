CREATE DATABASE curso;
USE curso;

CREATE TABLE cursos(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_curso VARCHAR(30) NOT NULL,
  descricao VARCHAR(50) NOT NULL
);

CREATE TABLE modulo_curso(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_modulo VARCHAR(30) NOT NULL,
  descricao VARCHAR(50) NOT NULL,
  id_curso int,
  FOREIGN KEY (id_curso) REFERENCES cursos(id)
);

CREATE TABLE item_modulo(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_item VARCHAR(30) NOT NULL,
  cod_video VARCHAR(30) NOT NULL,
  id_modulo int,
  FOREIGN KEY (id_modulo) REFERENCES modulo_curso(id)
);
