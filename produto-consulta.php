<?php 
    include("produto-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idProduto          = $_POST['idProduto'];
    @$nomeProduto        = $_POST['nomeProduto'];
    @$idModelo           = $_POST['idModelo'];  //FK
    @$serialProduto      = $_POST['serialProduto'];
    @$dataEntradaProduto = $_POST['dataEntradaProduto'];
    
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
                            <th>ID: </th>
                            <th>Modelo: </th>
                            <th>Nome: </th>
                            <th>Serial: </th>
                            <th>Data de Entrada: </th>
                            <th>Status</th>
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
                                <td><?=$Produtos["dataEntradaProduto"]?></td>
                                <td><?=$Produtos["statusProduto"]?></td>
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