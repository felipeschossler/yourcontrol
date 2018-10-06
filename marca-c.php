<?php
    
    //verificando valor da acao para redirecionar para a determinada acao
    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "Enviar"){
            inserirMarca();
        }
        if ($_POST["acao"] == "Alterar"){
            alterarMarca();
        }
        if ($_POST["acao"] == "Excluir"){
            excluirMarca();
        }
        
    }
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }
    //funcao que redireciona para a página inicial
    function voltarIndex(){
        header("location:index.php");
    }
    //funcao que insere marca
    function inserirMarca(){
        $banco = abrirBanco();
        //declarando as variáveis usadas na inserção dos dados
        $nomeMarca = $_POST["nomeMarca"];
        //a consulta sql
        $sql = "INSERT INTO Marcas(nomeMarca) VALUES ('$nomeMarca')";
        
        //executando a inclusão
        $banco->query($sql);
        //fechando a conexao com o banco
        $banco->close();
        voltarIndex();
    }
    function selectTodos(){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Marcas ORDER BY nomeMarca";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra um alert se não tiver nem um dado na table
        if($resultado->num_rows === 0){
            ?>
                <script type="text/javascript">
                alert("Nenhuma marca foi cadastrada.");
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
    //funcao que mostra as marcas já preenchido para a alteração
    function selectIdMarca($idMarca){
        
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM Marcas WHERE idMarca ='$idMarca'";
        $resultado = $banco->query($sql);
        $banco->close();
        $Marcas = mysqli_fetch_assoc($resultado);
        return $Marcas;
    }
    
    //funcao que altera uma única marca especifica
    function alterarMarca(){
        
        $banco = abrirBanco();
        
        //declarando as variáveis usadas no update
        $idMarca = $_POST["idMarca"];
        $nomeMarca = $_POST["nomeMarca"];
        //update no usuario especifico no qual já deve existir a informação
        $sql = "UPDATE Marcas SET nomeMarca='$nomeMarca' WHERE idMarca='$idMarca'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }
    function excluirMarca(){
        
        $banco = abrirBanco();
        //variável id que vai ser usada na consulta
        $idMarca = $_POST["idMarca"]; 
        //delete da marca específica 
        $sql = "DELETE FROM Marcas WHERE idMarca='$idMarca'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }
?>