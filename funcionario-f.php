<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<?php 
    //Funcao
    include("funcao-c.php");
    $grupoF = selectTodasFuncoes();

    //Setor
    include("setor-c.php");
    $grupoS = selectTodosSetores();
?>
<html lang="pt-BR">
    <head>
        <title>Cadastrar - Funcionário</title>
        <?php
            include("tmpl/head.php");
        ?>
    </head>
    <body>

        <!--includes-->
        <?php 
            include("tmpl/header.php");
            include("tmpl/footer.php");
        ?> 

        <!--form-->
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <form name="Funcionario" action="funcionario-c.php" method="POST">
                    <h3>Cadastro - Funcionário</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Código Funcionário</td>
                                <td><input type="text" name="idFuncionario" value="" disabled="true" /></td>
                            </tr> 
                            <tr>
                                <td>Setor</td>
                                <td>
                                    <select name="idSetor">
                                        <?php
                                            foreach ($grupoS as $setores)
                                            echo '<option name=" '.$setores['idSetor'].' " value=" ' . $setores['idSetor'] . '"> ' . $setores['nomeSetor'] . ' </option>';
                                        ?>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Função</td>
                                <td>
                                    <select name="idFuncao">
                                        <?php
                                            foreach ($grupoF as $funcoes)
                                            echo '<option name=" '.$funcoes['idFuncao'].' " value=" ' . $funcoes['idFuncao'] . '"> ' . $funcoes['nomeFuncao'] . ' </option>';
                                        ?>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Nome Funcionario:</td>
                                <td><input type="text" name="nomeFuncionario" value="" /></td>
                            </tr>
                            <tr>
                                <td>CPF:</td>
                                <td><input type="text" name="cpfFuncionario" value="" /></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="acao" value="Enviar" onclick="alert('Cadastro efetuado com sucesso.');"/></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>