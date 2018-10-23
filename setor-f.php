<html lang="pt-BR">
    <head>
    <title>Cadastrar - Setor</title>
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
                <form name="dadosSetor" action="setor-c.php" method="POST">
                    <h3>Cadastro de Setor</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Código Setor:</td>
                                <td><input type="text" name="idSetor" value="" disabled="true" /></td>
                            </tr>   
                            <tr>
                                <td>Setor:</td>
                                <td><input type="text" name="nomeSetor" value="" /></td>
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