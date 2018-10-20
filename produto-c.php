<?php  
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirProduto();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarProduto();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirProduto();
        }
    
    }

    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoProduto(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que redireciona para a página inicial
    function goToConsultaProd(){
        header("location:produto-consulta.php");
    }

    //funcao que insere produto
    function inserirProduto(){
        $banco = abrirBancoProduto();
        //declarando as variáveis usadas na inserção dos dados
        $idModelo          = $_POST['idModelo'];  //FK
        $nomeProduto       = $_POST['nomeProduto'];
        $serialProduto     = $_POST['serialProduto'];
        $quantidadeProduto = $_POST['quantidadeProduto'];
        //a consulta sql
        $sql = "INSERT INTO Produtos(
                    idModelo,
                    nomeProduto,
                    serialProduto,
                    quantidadeProduto) 
                VALUES (
                    '$idModelo',
                    '$nomeProduto',
                    '$serialProduto',
                    '$quantidadeProduto')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        goToConsultaProd();
    }

    function selectTodosProdutos(){
        
        $banco = abrirBancoProduto();
        //a consulta sql
        $sql = "SELECT * FROM Produtos ORDER BY nomeProduto";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhum produto foi cadastrado.");
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
    function selectIdProduto($idProduto){
        
        $banco = abrirBancoProduto();
        //a consulta sql
        $sql = "SELECT * FROM Produtos WHERE idProduto ='$idProduto'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Produtos = mysqli_fetch_assoc($resultado);
        return $Produtos;
    }

    //funcao que altera um único produto especifico
    function alterarProduto(){
        $banco = abrirBancoProduto();
        
        //declarando as variáveis usadas no update
        $idProduto     = $_POST["idProduto"];
        $idModelo      = $_POST["idModelo"];
        $nomeProduto   = $_POST["nomeProduto"];
        $serialProduto = $_POST["serialProduto"];
        $quantidadeProduto = $_POST["quantidadeProduto"];

        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Produtos SET idModelo='$idModelo', nomeProduto='$nomeProduto', serialProduto='$serialProduto', quantidadeProduto='$quantidadeProduto' WHERE idProduto='$idProduto'";
        $banco->query($sql);
        $banco->close();
        goToConsultaProd();
    }

    function excluirProduto(){
        $banco = abrirBancoProduto();

        //variável id que vai ser usada na consulta
        $idProduto = $_POST["idProduto"]; 
        //delete do usuário específico 
        $sql = "DELETE FROM Produtos WHERE idProduto='$idProduto'";
        $banco->query($sql);
        $banco->close();
        goToConsultaProd();
        }
?>