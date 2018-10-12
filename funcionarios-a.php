<?php 
    include("funcionarios-c.php"); 
    $funcionarios = selectIdFuncionario($_POST["idFuncionario"]);

    //Funcao
    include("funcao-c.php");
    $funcoes = selectIdFuncao($_POST["idFuncao"]);
    $grupo = selectTodos();

     //Setor
     include("setor-c.php");
     $setores = selectIdSetor($_POST["idSetor"]);
     $grupo = selectTodos();
?>
<html lang="pt-BR">
<head>
    <title>Alterar - Funcionarios</title>
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
            <form name="dadosProduto" action="produto-c.php" method="POST">
                <table border="1">
                    <tbody>
                        <tr>
                            <td>Código Funcionario</td>
                            <td><input type="text" name="idFuncionario" value="<?=$funcionarios["idFuncionario"]?>" size="20" disabled="true" /></td>
                        </tr>   
                        <tr>
                            <td>Setor</td>
                            <td>
                                <select name="idSetor">
                                    <?php
                                        foreach ($grupo as $setores)
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
                                        foreach ($grupo as $funcoes)
                                        echo '<option name=" '.$funcoes['idFuncao'].' " value=" ' . $funcoes['idFuncao'] . '"> ' . $funcoes['nomeFuncao'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>Nome</td>
                            <td><input type="text" name="nomeFuncionario" value="<?=$funcionarios["nomeFuncionario"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                        </tr>
                        <tr>
                            <td>CPF</td>
                            <td><input type="text" name="cpfFuncionario" value="<?=$funcionarios["cpfFuncionario"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="acao" value="Alterar" />
                                <input type="hidden" name="idFuncionario" value="<?=$funcionarios["idFuncionario"]?>" onkeyup="this.value = this.value.toUpperCase();"/>
                            </td>
                            <td><input type="submit" name="enviar" value="Alterar" onclick="alert('Cadastro alterado com sucesso.');"/></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

</body>
</html>