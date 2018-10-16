<?php  
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirFuncionario();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarFuncionario();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirFuncionario();
        }
    
    }

    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoFuncionario(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a página inicial
    function goConsulta(){
        header("location:index.php");
    }

    //funcao que insere produto
    function inserirFuncionario(){
        $banco = abrirBancoFuncionario();
        //declarando as variáveis usadas na inserção dos dados
        $idSetor         = $_POST['idSetor'];  //FK
        $idFuncao        = $_POST['idFuncao'];  //FK
        $nomeFuncionario = $_POST['nomeFuncionario'];
        $cpfFuncionario  = $_POST['cpfFuncionario'];
        //a consulta sql
        $sql = "INSERT INTO Funcionarios(
                    idSetor,
                    idFuncao,
                    nomeFuncionario,
                    cpfFuncionario) 
                VALUES (
                    '$idSetor',
                    '$idFuncao',
                    '$nomeFuncionario',
                    '$cpfFuncionario')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        goConsulta();
    }

    function selectTodosFuncionarios(){
        
        $banco = abrirBancoFuncionario();
        //a consulta sql
        $sql = "SELECT * FROM Funcionarios ORDER BY nomeFuncionario";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhum funcionário foi cadastrado.");
                window.location.href = "index.php";
                </script>
            <?php
        }else{
            while ($row = mysqli_fetch_array($resultado)){
                $grupo [] = $row;
            }
            $banco->close();
            return $grupo;
        }
    }

    //funcao que mostra os produtos já preenchido para a alteração
    function selectIdFuncionario($idFuncionario){
        
        $banco = abrirBancoFuncionario();
        //a consulta sql
        $sql = "SELECT * FROM Funcionarios WHERE idFuncionario ='$idFuncionario'";
        $resultado = $banco->query($sql);
        $banco->close();
        $funcionarios = mysqli_fetch_assoc($resultado);
        return $funcionarios;
    }

    //funcao que altera um único produto especifico
    function alterarFuncionario(){
        $banco = abrirBancoFuncionario();
        
        //declarando as variáveis usadas no update
        $idFuncionario   = $_POST["idFuncionario"];
        $idSetor         = $_POST["idSetor"];
        $idFuncao        = $_POST["idFuncao"];
        $nomeFuncionario = $_POST["nomeFuncionario"];
        $cpfFuncionario  = $_POST["cpfFuncionario"];

        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Funcionarios SET idSetor='$idSetor', idFuncao='$idFuncao', nomeFuncionario='$nomeFuncionario', cpfFuncionario='$cpfFuncionario' WHERE idFuncionario='$idFuncionario'";
        $banco->query($sql);
        $banco->close();
        goConsulta();
    }

    function excluirFuncionario(){
        $banco = abrirBancoFuncionario();

        //variável id que vai ser usada na consulta
        $idFuncionario = $_POST["idFuncionario"]; 
        //delete do usuário específico 
        $sql = "DELETE FROM Funcionarios WHERE idFuncionario='$idFuncionario'";
        $banco->query($sql);
        $banco->close();
        goConsulta();
        }
?>