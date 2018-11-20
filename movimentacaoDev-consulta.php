<?php 
    include("movimentacaoDev-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idMovimentacaoDev	    = $_POST['idMovimentacaoDev'];
    @$idMovimentacao	    = $_POST['idMovimentacao']; //FK
    @$dataEntradaMovimentacao = $_POST['dataEntradaMovimentacao'];
    
    $grupoD = selectTodosMovsDev();
    //var_dump($grupo);
?>
<html lang="pt-BR">
<head>
    <title>Consulta - Devolução</title>
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
            <h3>Consulta de Devolução</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Data Entrada</th>
                            <th>ID Emprestimo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grupoD as $Devs) { ?>
                            <tr>
                                <td><?=$Devs["idMovimentacaoDev"]?></td>
                                <td><?=$Devs["dataEntradaMovimentacao"]?></td>
                                <td><?=$Devs["idMovimentacao"]?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>