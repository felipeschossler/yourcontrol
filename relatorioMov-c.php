<?php
    
    //funcao que passa o local e as credenciais para logar no banco
    function abrirBanco(){
        $conexao = new mysqli("localhost","root","","banco");
        return $conexao;
    }

    //SELECT TODOS PRODUTOS
    function selectRelatorio(){
        $banco = abrirBanco();
        //a consulta sql
        $sql = "SELECT * FROM RelatoriosMov";
        //executando a consulta
        $resultado = $banco->query($sql);
        //mostra todos os usuários dentro do array
        while ($row = mysqli_fetch_array($resultado)){
            $grupo [] = $row;
        }
        $banco->close();
        return $grupo;
    }
?>