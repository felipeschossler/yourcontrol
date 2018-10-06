<?php 
    include("modelo-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idModelo 	          = $_POST['idModelo'];
    @$nomeModelo         = $_POST['nomeModelo'];
    @$nomeMarca         = $_POST['nomeMarca'];  //FK
    
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<html lang="pt-br">
<head>
    <title>Consulta - Modelo</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

    <!--includes-->
    <?php
        include("header.html");
        include("footer.html");
    ?>

    <!--table-->
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <table border="1">
                <thead>
                    <tr>
                        <th>ID Modelo</th>
                        <th>ID Marca</th>
                        <th>Nome Modelo</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grupo as $Modelos) { ?>
                        <tr>
                            <td><?=$Modelos["idModelo"]?></td>
                            <td><?=$Modelos["idMarca"]?></td>
                            <td><?=$Modelos["nomeModelo"]?></td>
                            <td>
                                <form nome="alterar" action="modelo-a.php" method="POST">
                                    <input type="hidden" name="idModelo" value=<?=$Modelos["idModelo"]?> />
                                    <input type="submit" name="Editar" value="Editar" />
                                </form>
                            </td>
                            <td>
                                <form name="excluir" action="modelo-c.php" method="POST">
                                    <input type="hidden" name="idModelo" value=<?=$Modelos["idModelo"]?> />
                                    <input type="submit" name="acao" value="Excluir" onclick="alert('Cadastro excluído com sucesso.');"/>
                                </form>    
                                
                            </td>
                        </tr>   

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

</body>
</html>