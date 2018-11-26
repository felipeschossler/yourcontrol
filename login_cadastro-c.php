<?php

    if(isset($_POST["acao"])){
        if ($_POST["acao"] == "entrar"){
            entrar();
        }
        if ($_POST["acao"] == "cadastrar"){
            cadastrar();
        }
    }

    //funcao que passa o local e as credenciais para logar no banco
    function abrirBancoFuncao(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //funcao que verifica a validade do login, caso válido loga no sistema, caso não, retorna erro na tela.
    function entrar(){
        $banco        = abrirBancoFuncao();
        $idUsuario    = $_POST['idUsuario'];
        $senhaUsuario = ($_POST['senhaUsuario']);
        $sql          = "SELECT * FROM Usuarios WHERE nomeUsuario = '$idUsuario' AND senhaUsuario = '$senhaUsuario'";
        $verifica = $banco->query($sql);

        //valida se existe o usuário digitado.
        if ($verifica->num_rows === 0)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
            die();
        }
        else
        {   
            session_start();
            $_SESSION['idUsuario'] = $idUsuario;
            header("Location:index.php");
        }
        

    }

    function cadastrar(){

        $banco        = abrirBancoFuncao();
        $idUsuario    = $_POST['idUsuario'];
        $senhaUsuario = $_POST['senhaUsuario'];
        $sql = "SELECT nomeUsuario FROM Usuarios WHERE nomeUsuario = '$idUsuario'";
        $verifica = $banco->query($sql);

        if($verifica->num_rows > 0)
        {
            echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='login.php';</script>";
            die();
        }
        else
        {
            $query = "INSERT INTO Usuarios (nomeUsuario,senhaUsuario) VALUES ('$idUsuario','$senhaUsuario')";
            $insert = $banco->query($query);
            
            if($insert)
            {   
                session_start();
                $_SESSION['idUsuario'] = $idUsuario;
                echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
            }
            else
            {
                echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='login.php'</script>";
            }
        }

        $banco->close();

    }
 

?>