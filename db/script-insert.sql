/*tabela Marcas*/
INSERT INTO Marcas (nomeMarca) VALUES ('DELL');
INSERT INTO Marcas (nomeMarca) VALUES ('BROTHER');
INSERT INTO Marcas (nomeMarca) VALUES ('LOGITECH');
INSERT INTO Marcas (nomeMarca) VALUES ('HP');
INSERT INTO Marcas (nomeMarca) VALUES ('GENIUS');

/*tabela Modelos*/
INSERT INTO Modelos (idMarca, nomeModelo) VALUES ('1', 'INSPIRON');
INSERT INTO Modelos (idMarca, nomeModelo) VALUES ('2', 'DCP-1606');
INSERT INTO Modelos (idMarca, nomeModelo) VALUES ('3', 'G403');
INSERT INTO Modelos (idMarca, nomeModelo) VALUES ('4', '12C');
INSERT INTO Modelos (idMarca, nomeModelo) VALUES ('5', 'KB-8000X');

/*tabela Produtos*/
INSERT INTO Produtos (idModelo, nomeProduto, serialProduto, dataEntradaProduto) VALUES ('1','NOTEBOOK','922929','2018-11-22');
INSERT INTO Produtos (idModelo, nomeProduto, serialProduto, dataEntradaProduto) VALUES ('2','IMPRESSORA','1345-21321','2018-07-13');
INSERT INTO Produtos (idModelo, nomeProduto, serialProduto, dataEntradaProduto) VALUES ('3','MOUSE','75753-1312','2017-03-11');
INSERT INTO Produtos (idModelo, nomeProduto, serialProduto, dataEntradaProduto) VALUES ('4','CALCULADORA','9998-25251','2016-08-01');
INSERT INTO Produtos (idModelo, nomeProduto, serialProduto, dataEntradaProduto) VALUES ('5','TECLADO','0091','2018-01-15');

/*tabela Funcoes*/
INSERT INTO Funcoes (nomeFuncao) VALUES ('INFRA');
INSERT INTO Funcoes (nomeFuncao) VALUES ('RH');
INSERT INTO Funcoes (nomeFuncao) VALUES ('DESENVOLVIMENTO');
INSERT INTO Funcoes (nomeFuncao) VALUES ('CONTABILIDADE');
INSERT INTO Funcoes (nomeFuncao) VALUES ('GERENCIA');

/*tabela Setores*/
INSERT INTO Setores (nomeSetor) VALUES ('SALA 404');
INSERT INTO Setores (nomeSetor) VALUES ('SALA 403');
INSERT INTO Setores (nomeSetor) VALUES ('SALA 503');

/*tabela Funcionarios*/
INSERT INTO Funcionarios (idFuncao, idSetor, nomeFuncionario, cpfFuncionario) VALUES ('1','1','FELIPE ALVES SCHOSSLER','84588487990');
INSERT INTO Funcionarios (idFuncao, idSetor, nomeFuncionario, cpfFuncionario) VALUES ('1','1','MARCIO JOAO DA SILVA','72666521098');
INSERT INTO Funcionarios (idFuncao, idSetor, nomeFuncionario, cpfFuncionario) VALUES ('2','1','ROZANE ALMEIDA','7665432189');
INSERT INTO Funcionarios (idFuncao, idSetor, nomeFuncionario, cpfFuncionario) VALUES ('3','2','RAFAEL ALBERTO SOUZA','90874765431');
INSERT INTO Funcionarios (idFuncao, idSetor, nomeFuncionario, cpfFuncionario) VALUES ('3','3','BRUNO DUARTE','33248979801');
INSERT INTO Funcionarios (idFuncao, idSetor, nomeFuncionario, cpfFuncionario) VALUES ('1','1','ANDERSON MUNIZ','77658436291');

/*tabela Setores*/
INSERT INTO Usuarios (nomeUsuario, senhaUsuario) VALUES ('admin', 'admin');