<?php 
    include("produto-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idProduto   = $_POST['idProduto'];
    @$nomeProduto = $_POST['nomeProduto'];
    @$nomeModelo  = $_POST['nomeModelo'];  //FK
    
    $grupo = selectTodos();
    //var_dump($grupo);
?>

<table border="1">
    <thead>
        <tr>
            <th>ID Produto</th>
            <th>ID Modelo</th>
            <th>Nome Produto</th>
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
                <td>
                    <form nome="alterar" action="modelo-a.php" method="POST">
                        <input type="hidden" name="idProduto" value=<?=$Produtos["idProduto"]?> />
                        <input type="submit" name="Editar" value="Editar" />
                    </form>
                </td>
                <td>
                    <form name="excluir" action="produto-c.php" method="POST">
                        <input type="hidden" name="idProduto" value=<?=$Produtos["idProduto"]?> />
                        <input type="submit" name="acao" value="Excluir" />
                    </form>    
                    
                </td>
            </tr>   

        <?php } ?>

    </tbody>
</table>