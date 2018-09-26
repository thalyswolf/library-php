CREATE DATABASE suporte;
USE suporte;

CREATE TABLE usuario (
    usuarioid INT (4) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (50) NOT NULL,
    senha VARCHAR (50) NULL,
    nivel INT (2) NOT NULL);

CREATE TABLE estadoretorno (
    estadoid INT (6) PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR (100) NOT NULL);

CREATE TABLE movimentacao (
    movimentacaoid INT (10) PRIMARY KEY AUTO_INCREMENT,
    usuarioid INT (4) NULL,
    estadoid INT (2) NULL,
    horacadastro DATE NOT NULL);

CREATE TABLE retorno (
    retornoid INT (10) PRIMARY KEY AUTO_INCREMENT,
    link VARCHAR (200) NOT NULL,
    hora DATE NULL,
    enviado INT (2) NULL,
    observacao VARCHAR (200) NULL,
    estadoid INT (2) NULL,
    usuarioid INT (4) NOT NULL,
    movimentacaoid INT (10) NULL,
    FOREIGN KEY (estadoid) REFERENCES estadoretorno(estadoid),
    FOREIGN KEY (usuarioid) REFERENCES usuario(usuarioid),
    FOREIGN KEY (movimentacaoid) REFERENCES movimentacao(movimentacaoid));

CREATE TABLE notificacao (
    movimentacaoid INT (10) PRIMARY KEY AUTO_INCREMENT,
    usuarioid INT (4) NULL,
    retornoid INT(10) NOT NULL,
    FOREIGN KEY (usuarioid) REFERENCES usuario(usuarioid),
    FOREIGN KEY (retornoid) REFERENCES retorno(retornoid));

    DELIMITER ;;
    CREATE PROCEDURE `sp_users_save`(
    pnome VARCHAR(50),
    psenha VARCHAR(50),
    pnivel VARCHAR(2)
    )
    BEGIN

        DECLARE vidperson INT;
    
    	INSERT INTO tb_persons (name, cpf, cep, city, uf)
        VALUES(pname, pcpf, pcep, pcity, puf);

        SET vidperson = LAST_INSERT_ID();

        INSERT INTO tb_users (user, password, id_person)
        VALUES(puser, ppassword, vidperson);

        SELECT * FROM tb_users a INNER JOIN tb_persons b USING(id) WHERE a.id = LAST_INSERT_ID();

    END ;;
    DELIMITER ;
