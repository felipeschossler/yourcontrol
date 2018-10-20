<?php 
    include("funcionario-c.php"); 
    $funcionarios = selectIdFuncionario($_POST["idFuncionario"]);

    //Setor
    include("setor-c.php");
    //$setores = selectIdSetor($_POST["idSetor"]);
    $grupoS = selectTodosSetores();

    //Funcao
    include("funcao-c.php");
    //$funcoes = selectIdFuncao($_POST["idFuncao"]);
    $grupoF = selectTodasFuncoes();
?>
<html lang="pt-BR">
<head>
    <title>Alterar - Funcionário</title>
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
            <form name="dadosFuncionario" action="funcionario-c.php" method="POST">
                <h3>Alterar - Funcionário</h3>
                <table class="table">
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