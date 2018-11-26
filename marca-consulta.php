<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<?php 
    include("marca-c.php");
    $grupoMarca = selectTodos();
    //var_dump($grupoMarca);
?>
<html lang="pt-BR">
<head>
    <title>Consulta - Marca</title>
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

    <!--table-->
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="form">
                <h3>Consultar - Marca</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Código:</th>
                            <th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grupoMarca as $Marcas) { ?>
                            <tr>
                                <td><?=$Marcas["idMarca"]?></td>
                                <td><?=$Marcas["nomeMarca"]?></td>
                                <td>
                                    <form nome="alterar" action="marca-a.php" method="POST">
                                        <input type="hidden" name="idMarca" value=<?=$Marcas["idMarca"]?> />
                                        <input type="submit" name="Editar" value="Editar" />
                                    </form>
                                </td>
                                <td>
                                    <form name="excluir" action="marca-c.php" method="POST">
                                        <input type="hidden" name="idMarca" value=<?=$Marcas["idMarca"]?> />
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