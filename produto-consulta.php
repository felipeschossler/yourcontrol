<?php 
    include("produto-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idProduto         = $_POST['idProduto'];
    @$nomeProduto       = $_POST['nomeProduto'];
    @$idModelo          = $_POST['idModelo'];  //FK
    @$serialProduto     = $_POST['serialProduto'];
    @$quantidadeProduto = $_POST['quantidadeProduto'];
    
    $grupo = selectTodosProdutos();
    //var_dump($grupo);
?>
<html lang="pt-br">
<head>
    <title>Consulta - Produto</title>
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
                        <th>ID Produto</th>
                        <th>ID Modelo</th>
                        <th>Nome Produto</th>
                        <th>Serial Produto</th>
                        <th>Quantidade Produto</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grupo as $Produtos) { ?>
                        <tr>
                            <td><?=$Produtos["idProduto"]?></td>
                            <td><?=$Produtos["idModelo"]?></td>
                            <td><?=$Produtos["nomeProduto"]?></td>
                            <td><?=$Produtos["serialProduto"]?></td>
                            <td><?=$Produtos["quantidadeProduto"]?></td>
                            <td>
                                <form nome="alterar" action="produto-a.php" method="POST">
                                    <input type="hidden" name="idProduto" value=<?=$Produtos["idProduto"]?> />
                                    <input type="submit" name="Editar" value="Editar" />
                                </form>
                            </td>
                            <td>
                                <form name="excluir" action="produto-c.php" method="POST">
                                    <input type="hidden" name="idProduto" value=<?=$Produtos["idProduto"]?> />
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