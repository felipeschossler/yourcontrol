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
<html lang="pt-BR">
<head>
    <title>Consultar - Produto</title>
    <?php
        include("tmpl/head.php");
    ?>
</head>

    <!--includes-->
    <?php 
        include("tmpl/header.php");
        include("tmpl/footer.php");
    ?>

    <!--table-->
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="form">
                <h3>Consultar - Produto</h3>
                <table class="table">
                    <thead class="thead-dark">
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
    </div>

</body>
</html>