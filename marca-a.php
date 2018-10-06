<?php 
include("marca-c.php"); 
$Marcas = selectIdMarca($_POST["idMarca"]);
?>
<html lang="pt-br">
<head>
    <title>Alterar - Marca</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
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
            <form name="dadosMarca" action="marca-c.php" method="POST">
                <table border="1">
                    <tbody>
                        <tr>
                            <td>Código Marca:</td>
                            <td><input type="text" name="idMarca" value="<?=$Marcas["idMarca"]?>" size="20" disabled="true" /></td>
                        </tr>   
                        <tr>
                            <td>Nome:</td>
                            <td><input type="text" name="nomeMarca" value="<?=$Marcas["nomeMarca"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="acao" value="Alterar" />
                                <input type="hidden" name="idMarca" value="<?=$Marcas["idMarca"]?>" />
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