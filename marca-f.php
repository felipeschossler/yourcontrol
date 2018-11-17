<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

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
                <h3>Cadastrar - Marca</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Código Marca:</td>
                                <td><input type="text" name="idMarca" value="" disabled="true" /></td>
                            </tr>   
                            <tr>
                                <td>Marca:</td>
                                <td><input type="text" name="nomeMarca" value="" /></td>
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