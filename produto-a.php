<?php 
    include("produto-c.php"); 
    $Produtos = selectIdProduto($_POST["idProduto"]);

    //Modelo
    include("modelo-c.php");
    $Modelos = selectIdModelo($_POST["idModelo"]);
    $grupo = selectTodos();
?>
<html lang="pt-br">
<head>
    <title>Alterar Produto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
</head>
<body>
    <form name="dadosProduto" action="produto-c.php" method="POST">
        <table border="1">
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
                    <td><input type="text" name="nomeProduto" value="<?=$Produtos["nomeProduto"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>Serial Produto</td>
                    <td><input type="text" name="serialProduto" value="<?=$Produtos["serialProduto"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>Quantidade Produto</td>
                    <td><input type="text" name="quantidadeProduto" value="<?=$Produtos["quantidadeProduto"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="acao" value="Alterar" />
                        <input type="hidden" name="idProduto" value="<?=$Produtos["idProduto"]?>" onkeyup="this.value = this.value.toUpperCase();"/>
                    </td>
                    <td><input type="submit" name="enviar" value="Alterar" /></td>
                </tr>
            </tbody>
        </table>
    </form>
    <a href="produto-consulta.php">Voltar</a>
    </body>
</body>
</html>