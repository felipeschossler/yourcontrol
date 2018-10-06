<?php 
include("marca-c.php"); 
$Marcas = selectIdMarca($_POST["idMarca"]);
?>
<html lang="pt-br">
<head>
    <title>Alterar - Marca</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
</head>
<body>
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
                    <td><input type="submit" name="enviar" value="Alterar" /></td>
                </tr>
            </tbody>
        </table>
    </form>
    <a href="index.html">Voltar ao início</a>
</body>
</html>