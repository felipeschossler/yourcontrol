<?php 
    include("movimentacao-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idMov	          = $_POST['idModelo'];
    @$dataEnt         = $_POST['dataEnt'];
    @$nomeFuncionario = $_POST['nomeFuncionario'];  //FK
    @$nomeProduto     = $_POST['nomeProduto'];  //FK
    
    $grupoM = selectTodosMovs();
    //var_dump($grupo);
?>
<html lang="pt-BR">
<head>
    <title>Consulta - Movimentação</title>
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
            <h3>Consulta de Movimentação</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Mov</th>
                            <th>Data Entrada</th>
                            <th>Nome Funcionario</th>
                            <th>Nome Produto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grupoM as $Movs) { ?>
                            <tr>
                                <td><?=$Movs["idMov"]?></td>
                                <td><?=$Movs["dataEnt"]?></td>
                                <td><?=$Movs["idFuncionario"]?></td>
                                <td><?=$Movs["idProduto"]?></td>
                                <td>
                                    <form nome="#" action="#" method="POST">
                                        <input type="hidden" name="idModelo" value=<?=$Modelos["idModelo"]?> />
                                        <input type="submit" name="Editar" value="Editar" />
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