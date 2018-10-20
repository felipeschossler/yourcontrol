<?php 
include("modelo-c.php"); 
$Modelos = selectIdModelo($_POST["idModelo"]);
?>
<html lang="pt-BR">
<head>
    <title>Alterar - Modelo</title>
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
            <form name="dadosModelo" action="modelo-c.php" method="POST">
                <h3>Alterar - Modelo</h3>
                <table class="table">
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
                            <td><input type="submit" name="enviar" value="Alterar" onclick="alert('Cadastro alterado com sucesso.');"/></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

</body>
</html>