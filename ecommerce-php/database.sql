CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE pessoas(
  id int auto_increment primary key,
  nome varchar(30) not null,
  cpf varchar(11) not null,
  rg varchar(10) not null,
  data_nasc datetime,
  endereco varchar(40)
);

CREATE TABLE clientes(
  id int auto_increment primary key,
  id_pessoa int,
  usuario varchar(20) not null,
  senha varchar(32) not null,
  FOREIGN KEY (id_pessoa) REFERENCES pessoas(id)
);

CREATE TABLE permissoes(
  id int auto_increment primary key,
  descricao varchar(10)
);
INSERT INTO permissoes(descricao) values ('GERENTE');
INSERT INTO permissoes(descricao) values ('FUNCIONARIO');

CREATE TABLE administradores(
  id int auto_increment primary key,
  id_pessoa int,
  usuario varchar(20) not null,
  senha varchar(32) not null,
  permissao_id int,
  FOREIGN KEY (id_pessoa) REFERENCES pessoas(id),
  FOREIGN KEY (permissao_id) REFERENCES permissoes(id)
);

CREATE TABLE produtos(
  id int auto_increment primary key,
  nome varchar(20) not null,
  descricao varchar(120) not null,
  estoque int(3) not null
);

CREATE TABLE anuncio_produto(
  id int auto_increment primary key,
  responsavel_id int,
  produto_id int,
  quantidade int not null,
  preco_un decimal(5),
  FOREIGN KEY (responsavel_id) REFERENCES administradores(id),
  FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

CREATE TABLE carrinhos(
  id int auto_increment primary key,
  comprador_id int,
  FOREIGN KEY (comprador_id) REFERENCES clientes(id)
);

CREATE TABLE itens_carrinho(
  id int auto_increment primary key,
  id_carrinho int,
  anuncio_id int,
  quantidade_compra int(3),
  FOREIGN KEY (id_carrinho) REFERENCES carrinhos(id),
  FOREIGN KEY (anuncio_id) REFERENCES anuncio_produto(id)
);
CREATE TABlE status_compra(
  id int auto_increment primary key,
  descricao varchar(10)
);
INSERT INTO status_compra (descricao) VALUES ('pendente');
INSERT INTO status_compra (descricao) VALUES ('em analise');
INSERT INTO status_compra (descricao) VALUES ('enviada para transportadora');
INSERT INTO status_compra (descricao) VALUES ('cancelada');
INSERT INTO status_compra (descricao) VALUES ('devolvida');

CREATE TABLE compras(
  id int auto_increment primary key,
  carrinho_id int,
  data_compra timestamp,
  id_status int,
  FOREIGN KEY (id_status) REFERENCES status_compra(id),
  FOREIGN KEY (carrinho_id) REFERENCES carrinhos(id)
);

CREATE TABLE log(
  id int auto_increment primary key,
  descricao varchar(20),
  responsavel_id int,
  FOREIGN KEY (responsavel_id) REFERENCES administradores(id)
);
