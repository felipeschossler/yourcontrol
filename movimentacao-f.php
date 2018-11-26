<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<?php 
    //Produto
    include("produto-c.php");
    $grupoFalse = produtoFalse();

    //Funcionarios
    include("funcionario-c.php");
    $grupoF = selectTodosFuncionarios();
?>
<html lang="pt-BR">
<head>
    <title>Cadastrar - Movimentação</title>
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
            <form name="Movimentacoes" action="movimentacao-c.php" method="POST">
                <h3>Emprestimo</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Código</td>
                            <td><input type="text" name="idMovimentacao" value="" disabled="true" /></td>
                        </tr>
                        <tr>
                            <td>Funcionário</td>
                            <td>
                                <select name="idFuncionario">
                                    <?php
                                        foreach ($grupoF as $Funcionarios)
                                        echo '<option name=" '.$Funcionarios['idFuncionario'].' " value=" ' . $Funcionarios['idFuncionario'] . '"> ' . $Funcionarios['nomeFuncionario'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Produto</td>
                            <td>
                                <select name="idProduto">
                                    <?php
                                        foreach ($grupoFalse as $Produtos){
                                            echo '<option name=" '.$Produtos['idProduto'].' " value=" ' . $Produtos['idProduto'] . '"> ' . $Produtos['nomeProduto'] . ' </option>';
                                        }
                                    ?>
                                </select> 
                            </td>
                        </tr> 
                        <tr>
                            <td>Data de Saída: </td>
                            <td><input type="date" name="dataSaidaMovimentacao" value="" /></td>
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