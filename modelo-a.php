<?php 
include("modelo-c.php"); 
$Modelos = selectIdModelo($_POST["idModelo"]);
?>
<html lang="pt-br">
<head>
    <title>Alterar - Modelo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
</head>
<body>
    <form name="dadosModelo" action="modelo-c.php" method="POST">
        <table border="1">
            <tbody>
                <tr>
                    <td>Código Modelo:</td>
                    <td><input type="text" name="idModelo" value="<?=$Modelos["idModelo"]?>" size="20" disabled="true" /></td>
                </tr>   
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nomeModelo" value="<?=$Modelos["nomeModelo"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="acao" value="Alterar" />
                        <input type="hidden" name="idModelo" value="<?=$Modelos["idModelo"]?>" />
                    </td>
                    <td><input type="submit" name="enviar" value="Alterar" /></td>
                </tr>
            </tbody>
        </table>
    </form>
    <a href="index.html">Voltar ao início</a>
</body>
</html>