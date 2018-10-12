<?php 
    include("funcao-c.php"); 
    $funcoes = selectIdFuncao($_POST["idFuncao"]);
?>
<html lang="pt-BR">
<head>
    <title>Alterar - Funcao</title>
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
            <form name="dadosFuncao" action="funcao-c.php" method="POST">
                <table border="1">
                    <tbody>
                        <tr>
                            <td>Código Função:</td>
                            <td><input type="text" name="idFuncao" value="<?=$funcoes["idFuncao"]?>" size="20" disabled="true" /></td>
                        </tr>   
                        <tr>
                            <td>Nome:</td>
                            <td><input type="text" name="nomeFuncao" value="<?=$funcoes["nomeFuncao"]?>" onkeyup="this.value = this.value.toUpperCase();"/></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="acao" value="Alterar" />
                                <input type="hidden" name="idFuncao" value="<?=$funcoes["idFuncao"]?>" />
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