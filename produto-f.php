<?php 
    //Modelo
    include("modelo-c.php");
    $grupo = selectTodos();
?>
<html lang="pt-BR">
<head>
    <title>Cadastrar - Produto</title>
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
            <form name="Produtos" action="produto-c.php" method="POST">
                <h3>Cadastro de Produto</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Código Produto</td>
                            <td><input type="text" name="idProduto" value="" disabled="true" /></td>
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
                            <td>Nome:</td>
                            <td><input type="text" name="nomeProduto" value="" /></td>
                        </tr>
                        <tr>
                            <td>Serial:</td>
                            <td><input type="text" name="serialProduto" value="" /></td>
                        </tr>
                        <tr>
                            <td>Data de Entrada:</td>
                            <td><input type="date" name="dataEntradaProduto" value="" /></td>
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