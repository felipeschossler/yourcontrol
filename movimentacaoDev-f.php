<?php 
    //Movimentacao
    include("movimentacao-c.php");
    $grupoFalse = movFalse();
?>
<html lang="pt-BR">
<head>
    <title>Devolução</title>
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
            <form name="MovimentacoesDev" action="movimentacaoDev-c.php" method="POST">
                <h3>Devolução</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Código</td>
                            <td><input type="text" name="idMovimentacaoDev" value="" disabled="true" /></td>
                        </tr>
                        <tr>
                            <td>Emprestimo</td>
                            <td>
                                <select name="idMovimentacao">
                                    <?php
                                        foreach ($grupoFalse as $Movs)
                                        echo '<option name=" '.$Movs['idMovimentacao'].' " value=" ' . $Movs['idMovimentacao'] . '"> ' . $Movs['idMovimentacao'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Data de Entrada: </td>
                            <td><input type="date" name="dataEntradaMovimentacao" value="" /></td>
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