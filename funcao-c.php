<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirFuncao();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarFuncao();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirFuncao();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoFuncao(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }
    //funcao que redireciona para a página inicial
    function gotoConsultaFuncao(){
        header("location:funcao-consulta.php");
    }
    //funcao que insere funcao
    function inserirFuncao(){
        $banco = abrirBancoFuncao();
        //declarando as variáveis usadas na inserção dos dados
        $nomeFuncao = $_POST["nomeFuncao"];
        //a consulta sql
        $sql = "INSERT INTO Funcoes(nomeFuncao) VALUES ('$nomeFuncao')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        gotoConsultaFuncao();
    }
    function selectTodasFuncoes(){
        
        $banco = abrirBancoFuncao();
        //a consulta sql
        $sql = "SELECT * FROM Funcoes ORDER BY nomeFuncao";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra um alert se não tiver nem um dado na table
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhuma função foi cadastrada.");
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
    //funcao que mostra as funcoes já preenchido para a alteração
    function selectIdFuncao($idFuncao){
        
        $banco = abrirBancoFuncao();
        //a consulta sql
        $sql = "SELECT * FROM Funcoes WHERE idFuncao ='$idFuncao'";
        $resultado = $banco->query($sql);
        $banco->close();
        $funcoes = mysqli_fetch_assoc($resultado);
        return $funcoes;
    }
    
    //funcao que altera uma única marca especifica
    function alterarFuncao(){
        
        $banco = abrirBancoFuncao();
        
        //declarando as variáveis usadas no update
        $idFuncao = $_POST["idFuncao"];
        $nomeFuncao = $_POST["nomeFuncao"];
        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Funcoes SET nomeFuncao='$nomeFuncao' WHERE idFuncao='$idFuncao'";
        $banco->query($sql);
        $banco->close();
        gotoConsultaFuncao();
    }
    function excluirFuncao(){
        
        $banco = abrirBancoFuncao();
        //variável id que vai ser usada na consulta
        $idFuncao = $_POST["idFuncao"]; 
        //delete da funcao específica 
        $sql = "DELETE FROM Funcoes WHERE idFuncao='$idFuncao'";
        $banco->query($sql);
        $banco->close();
        gotoConsultaFuncao();
    }
?>