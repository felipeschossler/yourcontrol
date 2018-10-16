<html lang="pt-BR">
    <head>
    <title>Cadastrar - Função</title>
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
                <form name="dadosFuncao" action="funcao-c.php" method="POST">
                    <h3>Cadastro - Função</h3>
                    <table class="" border="1">
                        <tbody>
                            <tr>
                                <td>Código Função:</td>
                                <td><input type="text" name="idFuncao" value="" disabled="true" /></td>
                            </tr>   
                            <tr>
                                <td>Função:</td>
                                <td><input type="text" name="nomeFuncao" value="" onkeyup="this.value = this.value.toUpperCase();"/></td>
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