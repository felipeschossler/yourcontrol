<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirDev();
        }
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a consulta de DEVOLUÇÃO
    function goToConsultaDev(){
        header("location:movimentacaoDev-consulta.php");
    }

    //funcao que insere devoluçao
    function inserirDev(){
        $banco = abrirBanco();
        //declarando as variáveis usadas na inserção dos dados
        $idMovimentacao          = $_POST["idMovimentacao"];
        $dataEntradaMovimentacao = $_POST["dataEntradaMovimentacao"];

        //a consulta sql
        $sql = "INSERT INTO MovimentacoesDev(dataEntradaMovimentacao, idMovimentacao) VALUES ('$dataEntradaMovimentacao', '$idMovimentacao')";
        $update = "UPDATE Movimentacoes SET statusMovimentacao='0' WHERE (idMovimentacao='$idMovimentacao')";
        $update2 = "UPDATE Produtos SET statusProduto='0' WHERE (SELECT idProduto FROM Movimentacoes WHERE idMovimentacao='$idMovimentacao')";
        
        //executando a inclusão
        $banco->query($sql);
        $banco->query($update);
        $banco->query($update2);
        //fechando a conexao com o banco
        $banco->close();
        goToConsultaDev();
    }

    //DEVOLUÇÃO
    function selectTodosMovsDev(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM MovimentacoesDev ORDER BY dataEntradaMovimentacao";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra um alert se não tiver nem um dado na table
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhuma devolução foi cadastrada.");
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
    function selectIdDev($idMovimentacaoDev){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM MovimentacoesDev WHERE idMovimentacaoDev ='$idMovimentacaoDev'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Movs = mysqli_fetch_assoc($resultado);
        return $Movs;
    }
    
?>