<?php 
    include("produto-c.php"); 
    $Produtos = selectIdProduto($_POST["idProduto"]);

    //Modelo
    include("modelo-c.php");
    $Modelos = selectIdModelo($_POST["idModelo"]);
    $grupo = selectTodos();
?>
<html lang="pt-BR">
<head>
    <title>Alterar - Produto</title>
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
                <h3>Alterar - Produto</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Código Produto</td>
                            <td><input type="text" name="idProduto" value="<?=$Produtos["idProduto"]?>" size="20" disabled="true" /></td>
                        </tr>   
                        <tr>
                        <td>Modelo</td>
                            <td>
                                <select name="idModelo">
                                    <?php
                                        foreach ($grupo as $Modelos)
                                        echo '<option name=" '.$Modelos['idModelo'].' " value=" ' . $Modelos['idModelo'] . '"> ' . $Modelos['nomeModelo'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>Nome Produto</td>
                            <td><input type="text" name="nomeProduto" value="<?=$Produtos["nomeProduto"]?>" /></td>
                        </tr>
                        <tr>
                            <td>Serial Produto</td>
                            <td><input type="text" name="serialProduto" value="<?=$Produtos["serialProduto"]?>" /></td>
                        </tr>
                        <tr>
                            <td>Quantidade Produto</td>
                            <td><input type="text" name="quantidadeProduto" value="<?=$Produtos["quantidadeProduto"]?>" /></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="acao" value="Alterar" />
                                <input type="hidden" name="idProduto" value="<?=$Produtos["idProduto"]?>" />
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