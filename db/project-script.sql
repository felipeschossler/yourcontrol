/*cria o banco de dados*/

CREATE DATABASE banco CHARACTER SET utf8 COLLATE utf8_general_ci;

/*tabela Marcas*/

CREATE TABLE Marcas 
( 
    idMarca INT NOT NULL AUTO_INCREMENT , 
    nomeMarca VARCHAR(40) NOT NULL ,
    PRIMARY KEY (idMarca)
); 

/*tabela Modelos*/

CREATE TABLE Modelos
( 
    idMarca INT NOT NULL ,
    idModelo INT NOT NULL AUTO_INCREMENT , 
    nomeModelo VARCHAR(40) NOT NULL , 
    PRIMARY KEY (idModelo) ,
    CONSTRAINT fk_MarcaProduto FOREIGN KEY (idMarca) REFERENCES Marcas (idMarca) 
);

/*tabela Produtos*/

CREATE TABLE Produtos 
( 
    idModelo INT NOT NULL ,
    idProduto INT NOT NULL AUTO_INCREMENT , 
    nomeProduto VARCHAR(30) NOT NULL ,
    serialProduto VARCHAR(50) NOT NULL ,
    dataEntradaProduto DATE NOT NULL,
    PRIMARY KEY (idProduto) , 
    CONSTRAINT fk_ModeloProduto FOREIGN KEY (idModelo) REFERENCES Modelos (idModelo) 
);

/*tabela Funcoes*/

CREATE TABLE Funcoes
( 
    idFuncao INT NOT NULL AUTO_INCREMENT , 
    nomeFuncao VARCHAR(40) NOT NULL , 
    PRIMARY KEY (idFuncao)
);

/*tabela Setores*/

CREATE TABLE Setores
( 
    idSetor INT NOT NULL AUTO_INCREMENT , 
    nomeSetor VARCHAR(40) NOT NULL , 
    PRIMARY KEY (idSetor)
);

/*tabela Funcionarios*/

CREATE TABLE Funcionarios
( 
    idFuncao INT NOT NULL ,
    idSetor INT NOT NULL , 
    idFuncionario INT NOT NULL AUTO_INCREMENT , 
    nomeFuncionario VARCHAR(40) NOT NULL ,
    cpfFuncionario VARCHAR(11) NOT NULL ,
    PRIMARY KEY (idFuncionario) ,
    CONSTRAINT fk_FuncaoFuncionario FOREIGN KEY (idFuncao) REFERENCES Funcoes (idFuncao) ,
    CONSTRAINT fk_SetorFuncionario FOREIGN KEY (idSetor) REFERENCES Setores (idSetor)
);

CREATE TABLE Movimentacoes
( 
    idMovimentacao INT NOT NULL AUTO_INCREMENT ,
    dataSaidaMovimentacao DATE NOT NULL ,
    dataEntradaMovimentacao DATE NOT NULL ,
    idFuncionario INT NOT NULL ,
    idProduto INT NOT NULL ,
    PRIMARY KEY (idMovimentacao) ,
    CONSTRAINT fk_FuncionarioMovimentacao FOREIGN KEY (idFuncionario) REFERENCES Funcionarios (idFuncionario) ,
    CONSTRAINT fk_ProdutoMovimentacao FOREIGN KEY (idProduto) REFERENCES Produtos (idProduto)
);