<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirMov();
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
        $idFuncionario         = $_POST["idFuncionario"];
        $idProduto             = $_POST["idProduto"];
        $dataSaidaMovimentacao = $_POST["dataSaidaMovimentacao"];
        $statusMovimentacao    = $_POST["statusMovimentacao"];

        //a consulta sql
        $sql = "INSERT INTO Movimentacoes(dataSaidaMovimentacao, idFuncionario, idProduto, statusMovimentacao) VALUES ('$dataSaidaMovimentacao', '$idFuncionario', '$idProduto', '1')";
        $update = "UPDATE Produtos SET statusProduto='1' WHERE (idProduto='$idProduto')";
                
        //executando a inclusão
        $banco->query($sql);
        $banco->query($update);
        //fechando a conexao com o banco
        $banco->close();
        goToConsulta();
    }

    function selectTodosMovs(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Movimentacoes ORDER BY dataSaidaMovimentacao";
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
    function selectIdMov($idMovimentacao){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Movimentacoes WHERE idMovimentacao ='$idMovimentacao'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Movs = mysqli_fetch_assoc($resultado);
        return $Movs;
    }

    function movFalse(){
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Movimentacoes WHERE statusMovimentacao='1'";
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
    
?>