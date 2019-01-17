<?php 
    include("relatorioMov-c.php");
    $grupoRelatorio = selectRelatorio();
    //var_dump($grupo);
?>
<html lang="pt-BR">
<head>
    <title>Relatório</title>
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
            <h3>Relatório</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Order</th>
                            <th>ID Marca</th>
                            <th>ID Modelo</th>
                            <th>ID Produto</th>
                            <th>ID Funcionario</th>
                            <th>ID Emprestimo</th>
                            <th>ID Devolução</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grupoRelatorio as $Rel) { ?>
                            <tr>
                                <td><?=$Rel["idRelatorioMov"]?></td>
                                <td><?=$Rel["idMarcaRel"]?></td>
                                <td><?=$Rel["idModeloRel"]?></td>
                                <td><?=$Rel["idProdutoRel"]?></td>
                                <td><?=$Rel["idFuncionarioRel"]?></td>
                                <td><?=$Rel["idMovimentaçãoRel"]?></td>
                                <td><?=$Rel["idMovimentaçãoDevRel"]?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>