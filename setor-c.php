<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirSetor();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarSetor();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirSetor();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoSetor(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }
    //funcao que redireciona para a página inicial
    function goToConsulta(){
        header("location:setor-consulta.php");
    }
    //funcao que insere setor
    function inserirSetor(){
        $banco = abrirBancoSetor();
        //declarando as variáveis usadas na inserção dos dados
        $nomeSetor = $_POST["nomeSetor"];
        //a consulta sql
        $sql = "INSERT INTO Setores(nomeSetor) VALUES ('$nomeSetor')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        goToConsulta();
    }
    function selectTodosSetores(){
        
        $banco = abrirBancoSetor();
        //a consulta sql
        $sql = "SELECT * FROM Setores ORDER BY nomeSetor";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra um alert se não tiver nem um dado na table
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhum setor foi cadastrado.");
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
    //funcao que mostra os setores já preenchido para a alteração
    function selectIdSetor($idSetor){
        
        $banco = abrirBancoSetor();
        //a consulta sql
        $sql = "SELECT * FROM Setores WHERE idSetor ='$idSetor'";
        $resultado = $banco->query($sql);
        $banco->close();
        $setores = mysqli_fetch_assoc($resultado);
        return $setores;
    }
    
    //funcao que altera um único setor especifico
    function alterarSetor(){
        
        $banco = abrirBancoSetor();
        
        //declarando as variáveis usadas no update
        $idSetor = $_POST["idSetor"];
        $nomeSetor = $_POST["nomeSetor"];
        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Setores SET nomeSetor='$nomeSetor' WHERE idSetor='$idSetor'";
        $banco->query($sql);
        $banco->close();
        goToConsulta();
    }
    function excluirSetor(){
        
        $banco = abrirBancoSetor();
        //variável id que vai ser usada na consulta
        $idSetor = $_POST["idSetor"]; 
        //delete da funcao específica 
        $sql = "DELETE FROM Setores WHERE idSetor='$idSetor'";
        $banco->query($sql);
        $banco->close();
        goToConsulta();
    }
?>