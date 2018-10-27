<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirMov();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarMov();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirMov();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a consulta
    function goToConsulta(){
        header("location:movimentacao-consulta.php");
    }
    
    //funcao que insere mov
    function inserirMov(){
        $banco = abrirBanco();
        //declarando as variáveis usadas na inserção dos dados
        $idFuncionario = $_POST["idFuncionario"];
        $idProduto     = $_POST["idProduto"];
        $dataEnt       = $_POST["dataEnt"];

        //a consulta sql
        $sql = "INSERT INTO Movimentacoes(idFuncionario, idProduto, dataEnt) VALUES ('$idFuncionario', '$idProduto', '$dataEnt')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        goToConsulta();
    }

    function selectTodosMovs(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Movimentacoes ORDER BY dataEnt";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra um alert se não tiver nem um dado na table
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhuma movimentação foi cadastrada.");
                window.location.href = "index.php";
                </script>
            <?php
        }
        else{
            //mostra todos os usuários dentro do array
            while ($row = mysqli_fetch_array($resultado)){
                $grupo [] = $row;
            }
            
            $banco->close();
            return $grupo;
        }
    }
    //funcao que mostra as movs já preenchido para a alteração
    function selectIdMov($idMov){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Movimentacoes WHERE idMov ='$idMov'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Movs = mysqli_fetch_assoc($resultado);
        return $Movs;
    }
    
    //funcao que altera uma única marca especifica
    function alterarMov(){
        
        $banco = abrirBanco();
        
        //declarando as variáveis usadas no update
        $idMov         = $_POST["idMov"];
        $idFuncionario = $_POST["idFuncionario"];
        $idProduto     = $_POST["idProduto"];
        $dataEnt       = $_POST["dataEnt"];

        //update na mov especifica no qual já deve existir a informação
        $sql = "UPDATE Movimentacoes SET idFuncionario='$idFuncionario', idProduto='$idProduto', dataEnt='$dataEnt' WHERE idMov='$idMov'";
        $banco->query($sql);
        $banco->close();
        goToConsulta();
    }
    
?>