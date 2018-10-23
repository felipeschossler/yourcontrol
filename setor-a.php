<?php 
    include("setor-c.php"); 
    $setores = selectIdSetor($_POST["idSetor"]);
?>
<html lang="pt-BR">
<head>
    <title>Alterar - Setor</title>
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
            <form name="dadosSetor" action="setor-c.php" method="POST">
                <h3>Alterar - Setor</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Código Setor:</td>
                            <td><input type="text" name="idSetor" value="<?=$setores["idSetor"]?>" size="20" disabled="true" /></td>
                        </tr>   
                        <tr>
                            <td>Nome:</td>
                            <td><input type="text" name="nomeSetor" value="<?=$setores["nomeSetor"]?>" /></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="acao" value="Alterar" />
                                <input type="hidden" name="idSetor" value="<?=$setores["idSetor"]?>" />
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