<?php 
    //Marca
    include("marca-c.php");
    $grupo = selectTodos();
?>
<html lang="pt-BR">
<head>
    <title>Cadastrar - Modelo</title>
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
            <form name="Modelos" action="modelo-c.php" method="POST">
                <h3>Cadastro de Modelo</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Código Modelo</td>
                            <td><input type="text" name="idModelo" value="" disabled="true" /></td>
                        </tr> 
                        <tr>
                            <td>Modelo:</td>
                            <td><input type="text" name="nomeModelo" value="" /></td>
                        </tr>
                        <tr>
                            <td>Marca</td>
                            <td>
                                <select name="idMarca">
                                    <?php
                                        foreach ($grupo as $Marcas)
                                        echo '<option name=" '.$Marcas['idMarca'].' " value=" ' . $Marcas['idMarca'] . '"> ' . $Marcas['nomeMarca'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
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