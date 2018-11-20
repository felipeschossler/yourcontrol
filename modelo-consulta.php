<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<?php 
    include("modelo-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idModelo 	 = $_POST['idModelo'];
    @$nomeModelo = $_POST['nomeModelo'];
    @$nomeMarca  = $_POST['nomeMarca'];  //FK
    
    $grupo = selectTodosModelos();
    //var_dump($grupo);
    

?>
<html lang="pt-BR">
<head>
    <title>Consulta - Modelo</title>
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
            <h3>Consulta de Modelo</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Nome</th>
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
            </div>
        </div>
    </div>

</body>
</html>