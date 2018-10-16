<?php 
    include("modelo-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idModelo 	          = $_POST['idModelo'];
    @$nomeModelo         = $_POST['nomeModelo'];
    @$nomeMarca         = $_POST['nomeMarca'];  //FK
    
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<html lang="pt-BR">
<head>
    <title>Consultar - Modelo</title>
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
            <form name="#" action="#" method="#">
                <h3>Consultar - Modelo</h3>
                <table class="table">
                    <thead class="thead-dark">
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
            </form>
        </div>
    </div>

</body>
</html>