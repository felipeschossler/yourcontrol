<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<?php 
    include("movimentacao-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idMovimentacao	    = $_POST['idMovimentacao'];
    @$dataSaidaMovimentacao = $_POST['dataSaidaMovimentacao'];
    @$nomeFuncionario       = $_POST['nomeFuncionario'];  //FK
    @$nomeProduto           = $_POST['nomeProduto'];  //FK
    
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
                            <th>ID</th>
                            <th>Data Saida</th>
                            <th>Nome Funcionario</th>
                            <th>Nome Produto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grupoM as $Movs) { ?>
                            <tr>
                                <td><?=$Movs["idMovimentacao"]?></td>
                                <td><?=$Movs["dataSaidaMovimentacao"]?></td>
                                <td><?=$Movs["idFuncionario"]?></td>
                                <td><?=$Movs["idProduto"]?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>