<?php 
    //Modelo
    include("modelo-c.php");
    $grupo = selectTodos();
?>
<html lang="pt-br">
<head>
    <title>Cadastrar - Produto</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <!--includes-->
    <?php
        include("header.html");
        include("footer.html");
    ?>

    <!--form-->
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form name="Produtos" action="produto-c.php" method="POST">
                <table border="1">
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
                            <td><input type="text" name="nomeProduto" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                        </tr>
                        <tr>
                            <td>Serial:</td>
                            <td><input type="text" name="serialProduto" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                        </tr>
                        <tr>
                            <td>Quantidade:</td>
                            <td><input type="text" name="quantidadeProduto" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
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