<?php 
    include("modelo-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idModelo 	          = $_POST['idModelo'];
    @$nomeMarca         = $_POST['nomeMarca'];  //FK
    @$nomeModelo         = $_POST['nomeModelo'];
    
    $grupo = selectTodos();
    //var_dump($grupo);
?>

<table border="1">
    <thead>
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
                <td><?=$Contas["idModelo"]?></td>
                <td><?=$Contas["idMarca"]?></td>
                <td><?=$Contas["nomeModelo"]?></td>
                <td>
                    <form nome="alterar" action="modelo-a.php" method="POST">
                        <input type="hidden" name="idModelo" value=<?=$Modelos["idModelo"]?> />
                        <input type="submit" name="Editar" value="Editar" />
                    </form>
                </td>
                <td>
                    <form name="excluir" action="modelo-c.php" method="POST">
                        <input type="hidden" name="idModelo" value=<?=$Modelos["idModelo"]?> />
                        <input type="submit" name="acao" value="Excluir" />
                    </form>    
                    
                </td>
            </tr>   

        <?php } ?>

    </tbody>
</table>