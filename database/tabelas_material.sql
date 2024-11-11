USE geneguarda;

CREATE TABLE MaterialDoador (
	IdMaterial INT AUTO_INCREMENT,
	Quantidade DOUBLE(7,2) NOT NULL,
	id_animal INT NOT NULL,
	CONSTRAINT PK_MaterialDoador PRIMARY KEY (IdMaterial),
	CONSTRAINT FK_MaterialDoador_Animal FOREIGN KEY (id_animal) REFERENCES animal(id_animal)
);

CREATE TABLE MaterialDoadora (
	IdMaterial INT AUTO_INCREMENT,
	Quantidade DOUBLE(7,2) NOT NULL,
	id_animal INT NOT NULL,
	CONSTRAINT PK_MaterialDoadora PRIMARY KEY (IdMaterial),
	CONSTRAINT FK_MaterialDoadoar_Animal FOREIGN KEY (id_animal) REFERENCES animal(id_animal)
);