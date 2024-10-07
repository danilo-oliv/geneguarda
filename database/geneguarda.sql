DROP SCHEMA IF EXISTS  geneguarda;

CREATE SCHEMA IF NOT EXISTS geneguarda;
USE geneguarda;


CREATE TABLE CategoriaProcedimento (
                cod_categoria_proc CHAR(5) NOT NULL,
                descricao VARCHAR(25) NOT NULL,
                PRIMARY KEY (cod_categoria_proc)
);


CREATE TABLE Raca (
                cod_raca CHAR(4) NOT NULL,
                descricao VARCHAR(30) NOT NULL,
                PRIMARY KEY (cod_raca)
);


CREATE TABLE Sexo (
                sexo CHAR(1) NOT NULL,
                descricao VARCHAR(10) NOT NULL,
                PRIMARY KEY (sexo)
);


CREATE TABLE Veterinario (
                cod_vet SMALLINT NOT NULL,
                CRMV INT NOT NULL,
                DDD TINYINT NOT NULL,
                numero_telefone INT NOT NULL,
                nome VARCHAR(100) NOT NULL,
                email VARCHAR(150) NOT NULL,
                PRIMARY KEY (cod_vet)
);


CREATE TABLE Proprietario (
                id_proprietario SMALLINT AUTO_INCREMENT NOT NULL,
                razao_social VARCHAR(100) NOT NULL,
                CNPJ CHAR(14) NOT NULL,
                email VARCHAR(150) NOT NULL,
                numero_telefone INT NOT NULL,
                DDD TINYINT NOT NULL,
                PRIMARY KEY (id_proprietario)
);


CREATE TABLE Fazenda (
                id_proprietario SMALLINT NOT NULL,
                sequencia TINYINT NOT NULL,
                nome VARCHAR(100) NOT NULL,
                tamanho INT,
                municipio VARCHAR(100) NOT NULL,
                PRIMARY KEY (id_proprietario, sequencia)
);


CREATE TABLE Animal (
                id_animal INT NOT NULL,
                brinco VARCHAR(8) NOT NULL,
                nome VARCHAR(50),
                peso SMALLINT,
                sexo CHAR(1) NOT NULL,
                cod_raca CHAR(4) NOT NULL,
                id_proprietario SMALLINT NOT NULL,
                PRIMARY KEY (id_animal)
);


CREATE TABLE Procedimento (
                data_proc DATE NOT NULL,
                cod_categoria_proc CHAR(5) NOT NULL,
                cod_vet SMALLINT NOT NULL,
                id_animal INT NOT NULL,
                PRIMARY KEY (data_proc, cod_categoria_proc)
);


CREATE TABLE Embriao (
                cod_embriao INT NOT NULL,
                id_macho INT NOT NULL,
                id_femea INT NOT NULL,
                data_fecundacao DATE NOT NULL,
                data_congelamento DATE,
                data_descongelamento DATE,
                PRIMARY KEY (cod_embriao)
);


CREATE TABLE Receptora (
                id_animal INT NOT NULL,
                cod_embriao INT NOT NULL,
                PRIMARY KEY (id_animal)
);


ALTER TABLE Procedimento ADD CONSTRAINT categoriaprocedimento_procedimento_fk
FOREIGN KEY (cod_categoria_proc)
REFERENCES CategoriaProcedimento (cod_categoria_proc)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Animal ADD CONSTRAINT raca_animal_fk
FOREIGN KEY (cod_raca)
REFERENCES Raca (cod_raca)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Animal ADD CONSTRAINT sexo_animal_fk
FOREIGN KEY (sexo)
REFERENCES sexo (Sexo)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Procedimento ADD CONSTRAINT veterinario_procedimento_fk
FOREIGN KEY (cod_vet)
REFERENCES Veterinario (cod_vet)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Animal ADD CONSTRAINT proprietario_animal_fk
FOREIGN KEY (id_proprietario)
REFERENCES Proprietario (id_proprietario)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Fazenda ADD CONSTRAINT proprietario_fazenda_fk
FOREIGN KEY (id_proprietario)
REFERENCES Proprietario (id_proprietario)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Embriao ADD CONSTRAINT animal_embriao_fk
FOREIGN KEY (id_macho)
REFERENCES Animal (id_animal)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Embriao ADD CONSTRAINT animal_embriao_fk1
FOREIGN KEY (id_femea)
REFERENCES Animal (id_animal)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Procedimento ADD CONSTRAINT animal_procedimento_fk
FOREIGN KEY (id_animal)
REFERENCES Animal (id_animal)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Receptora ADD CONSTRAINT animal_receptora_fk
FOREIGN KEY (id_animal)
REFERENCES Animal (id_animal)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Receptora ADD CONSTRAINT embriao_receptora_fk
FOREIGN KEY (cod_embriao)
REFERENCES Embriao (cod_embriao)
ON DELETE NO ACTION
ON UPDATE NO ACTION;