<?php  
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirModelo();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarModelo();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirModelo();
        }
    
    }
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }
    //funcao que redireciona para a página inicial
    function voltarIndex(){
        header("location:index.html");
    }
    //funcao que insere agencia
    function inserirConta(){
        $banco = abrirBanco();
        //declarando as variáveis usadas na inserção dos dados
        $idModelo      = $_POST['idModelo'];
        $idMarca    = $_POST['idMarca'];  //FK
        $nomeModelo = $_POST['nomeModelo'];
        //a consulta sql
        $sql = "INSERT INTO Modelos(
                    idModelo,
                    idMarca, 
                    nomeModelo) 
                VALUES (
                    'NULL',
                    '$idMarca',
                    '$nomeModelo')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndex();
    }
    function selectTodosConta(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Modelos ORDER BY nomeModelo";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhuma conta está cadastrada.");
                window.location.href = "index.html";
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
    function selectTodos(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Contas ORDER BY limiteConta";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        
        while ($row = mysqli_fetch_array($resultado)){
            $grupo [] = $row;
        }
        $banco->close();
        return $grupo;
    }
    //funcao que mostra as agencias já preenchido para a alteração
    function selectIdModelo($idModelo){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Modelos WHERE idModelo ='$idModelo'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Modelos = mysqli_fetch_assoc($resultado);
        return $Modelos;
    }
    //funcao que altera uma único agencia especifica
    function alterarModelo(){
        
        $banco = abrirBanco();
        
        //declarando as variáveis usadas no update
        $idModelo = $_POST["idModelo"];
        $nomeModelo = $_POST["nomeModelo"];
        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Modelos SET nomeModelo='$nomeModelo' WHERE idModelo='$idModelo'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }
    function excluirModelo(){
        
        $banco = abrirBanco();
        //variável id que vai ser usada na consulta
        $idModelo = $_POST["idModelo"]; 
        //delete do usuário específico 
        $sql = "DELETE FROM Modelos WHERE idModelo='$idModelo'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
        }
?>