<html lang="pt-br">
    <head>
        <title>Cadastrar - Marca</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="./css/mystyle.css" />
    </head>
    <body>
        <form name="dadosMarca" action="marca-c.php" method="POST">
            <table border="1">
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
        <br>
        <a href="index.html">Voltar ao início</a>
</body>          
</html>