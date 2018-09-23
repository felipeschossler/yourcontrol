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