use geneguarda;
START TRANSACTION;

insert into sexo values ('m', 'masculino');
insert into sexo values ('f', 'feminino');

insert into raca VALUES ('NEL', 'Nelore');
insert into raca VALUES ('ABDA', 'Aberdeen Angus');
insert into raca VALUES ('HRF', 'Hereford');

insert into proprietario (razao_social, CNPJ, email, numero_telefone, DDD, senha) VALUES ('Fazenda Pedaço do Céu', '58259708000141', 'fazendapdc@email.com', '998761234', '34', '123456');

SET @ultimo_proprietario = LAST_INSERT_ID();

insert into animal (brinco, nome, peso, sexo, cod_raca, id_proprietario) VALUES ('A123', 'Bernardo', 500, 'm', 'NEL', @ultimo_proprietario);
SET @id_macho = LAST_INSERT_ID();

insert into animal (brinco, nome, peso, sexo, cod_raca, id_proprietario) VALUES ('B123', 'Mimosa', 400, 'f', 'ABDA', @ultimo_proprietario);
SET @id_femea = LAST_INSERT_ID();

insert into animal (brinco, nome, peso, sexo, cod_raca, id_proprietario) VALUES ('C123', 'Pantera', 450, 'f', 'HRF', @ultimo_proprietario);

INSERT INTO embriao (id_macho, id_femea, data_fecundacao) VALUES (@id_macho, @id_femea, CURDATE());

COMMIT;



SELECT * FROM raca;
SELECT * FROM proprietario;
SELECT * FROM animal;
SELECT * FROM embriao;

DELETE FROM embriao;
DELETE FROM materialdoador;
DELETE FROM materialdoadora;
DELETE FROM animal;
DELETE FROM proprietario;
DELETE FROM raca;
DELETE FROM sexo;
