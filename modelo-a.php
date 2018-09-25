<?php 
include("modelo-c.php"); 
$Modelos = selectIdModelo($_POST["idModelo"]);
?>
<head>
    <title>Alterar Modelo</title>
    <meta charset="utf-8">
</head>
<form name="dadosModelo" action="modelo-c.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código Modelo</td>
                <td><input type="text" name="idModelo" value="<?=$Modelos["idModelo"]?>" size="20" disabled="true" /></td>
            </tr>   
            <tr>
                <td>Nome Modelo</td>
                <td><input type="text" name="nomeModelo" value="<?=$Modelos["nomeModelo"]?>" /></td>
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