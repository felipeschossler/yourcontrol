<html lang="pt-BR">
<head>
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
            <!--form-->
            <form name="dadosMarca" action="marca-c.php" method="POST">
                <table class="" border="1">
                    <tbody>
                        <tr>
                            <td>Código Marca:</td>
                            <td><input type="text" name="idMarca" value="" disabled="true" /></td>
                        </tr>   
                        <tr>
                            <td>Nome:</td>
                            <td><input type="text" name="nomeMarca" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="acao" value="Enviar" onclick="alert('Cadastro efetuado com sucesso.');"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

</body>          
</html>