/*cria o banco de dados*/

CREATE DATABASE dbyourcontrol CHARACTER SET utf8 COLLATE utf8_general_ci;

/*tabela Marcas*/

CREATE TABLE Marcas 
( 
    idMarca INT NOT NULL AUTO_INCREMENT , 
    descricaoMarca VARCHAR(40) NOT NULL ,
    PRIMARY KEY (idMarca)
); 

/*tabela Modelos*/

CREATE TABLE Modelos
( 
    idModelo INT NOT NULL AUTO_INCREMENT , 
    descricaoModelo VARCHAR(40) NOT NULL , 
    PRIMARY KEY (idModelo)
);

/*tabela Produtos*/

CREATE TABLE Produtos 
( 
    idMarca INT NOT NULL ,
    idModelo INT NOT NULL ,
    idProduto INT NOT NULL AUTO_INCREMENT , 
    descricaoProduto VARCHAR(30) NOT NULL ,
    quantidadeProduto INT(5) NOT NULL ,
    PRIMARY KEY (idProduto) , 
    CONSTRAINT fk_MarcaProduto FOREIGN KEY (idMarca) REFERENCES Marcas (idMarca) ,
    CONSTRAINT fk_ModeloProduto FOREIGN KEY (idModelo) REFERENCES Modelos (idModelo) 
);

/*tabela Funcoes*/

CREATE TABLE Funcoes
( 
    idFuncao INT NOT NULL AUTO_INCREMENT , 
    descricaoFuncao VARCHAR(40) NOT NULL , 
    PRIMARY KEY (idFuncao)
);

/*tabela Setores*/

CREATE TABLE Setores
( 
    idSetor INT NOT NULL AUTO_INCREMENT , 
    descricaoSetor VARCHAR(40) NOT NULL , 
    PRIMARY KEY (idSetor)
);

/*tabela Funcionarios*/

CREATE TABLE Funcionarios
( 
    idFuncao INT NOT NULL ,
    idModelo INT NOT NULL ,
    idFuncionario INT NOT NULL AUTO_INCREMENT , 
    descricaoFuncionario VARCHAR(40) NOT NULL , 
    PRIMARY KEY (idFuncionario)
    CONSTRAINT fk_FuncaoFuncionario FOREIGN KEY (idFuncao) REFERENCES Funcoes (idFuncao) ,
    CONSTRAINT fk_SetorFuncionario FOREIGN KEY (idSetor) REFERENCES Funcoes (idSetor)
);