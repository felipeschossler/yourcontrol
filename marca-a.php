<?php 
    include("marca-c.php"); 
    $Marcas = selectIdMarca($_POST["idMarca"]);
?>
<html lang="pt-BR">
<head>
    <title>Alterar - Marca</title>
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