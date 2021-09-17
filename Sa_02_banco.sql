CREATE DATABASE Banco_Sa_02;

USE Banco_Sa_02;

CREATE TABLE Cadastromedico (
id_medico INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome VARCHAR(45),
rua VARCHAR(30),
numero INT,
bairro VARCHAR(40),
cep CHAR(9),
complemento VARCHAR(30),
email VARCHAR(40),
celular CHAR(15),
telefonefixo BIGINT(15),
telefonesecundario BIGINT(15)
);

CREATE TABLE CadastroEspecialidade (
id_especialidade INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome_especialidade VARCHAR(45)
);


CREATE TABLE CadastroProcedimento (
id_procedimento INT NOT NULL AUTO_INCREMENT,
codigo INT NOT NULL,
nomeproc VARCHAR(30),
valor DECIMAL,
genero VARCHAR(35),
addexcecao VARCHAR(40),
PRIMARY KEY (id_procedimento, codigo)
);

SELECT * FROM Cadastromedico;

SELECT * FROM CadastroEspecialidade;

SELECT * FROM CadastroProcedimento;

#DROP DATABASE Banco_Sa_02;