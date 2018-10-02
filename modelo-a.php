<?php 
    include("modelo-c.php"); 
    $Modelos = selectIdModelo($_POST["idModelo"]);

    //Marca
    include("marca-c.php");
    $Marcas = selectIdMarca($_POST["idMarca"]);

?>
<html lang="pt-br">
<head>
    <title>Alterar Modelos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
</head>
<body>
    <form name="dadosModelo" action="modelo-c.php" method="POST">
        <table border="1">
            <tbody>
                <tr>
                    <td>Código Modelo</td>
                    <td><input type="text" name="idModelo" value="<?=$Modelos["idModelo"]?>" size="20" disabled="true" /></td>
                </tr>   
                <tr>
                    <td>Nome Modelo</td>
                    <td><input type="text" name="nomeModelo" value="<?=$Modelos["nomeModelo"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>Marca</td>
                    <td><input type="text" name="idMarca" value="<?=$Marcas["idMarca"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="acao" value="Alterar" />
                        <input type="hidden" name="idModelo" value="<?=$Modelos["idModelo"]?>" onkeyup="this.value = this.value.toUpperCase();"/>
                    </td>
                    <td><input type="submit" name="enviar" value="Alterar" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>