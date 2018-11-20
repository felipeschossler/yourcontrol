<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<?php 
    include("modelo-c.php"); 
    $Modelos = selectIdModelo($_POST["idModelo"]);

    //Marca
    include("marca-c.php");
    //$marcas = selectIdMarca($_POST["idMarca"]);
    $grupoMarca = selectTodos();
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
                            <td>ID: </td>
                            <td><input type="text" name="idModelo" value="<?=$Modelos["idModelo"]?>" size="20" disabled="true" /></td>
                        </tr> 
                        <tr>
                            <td>Marca: </td>
                            <td>
                                <select name="idMarca">
                                    <?php
                                        foreach ($grupoMarca as $Marcas)
                                        echo '<option name=" '.$Marcas['idMarca'].' " value=" ' . $Marcas['idMarca'] . '"> ' . $Marcas['nomeMarca'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr> 
                        <tr>
                            <td>Nome:</td>
                            <td><input type="text" name="nomeModelo" value="<?=$Modelos["nomeModelo"]?>" /></td>
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