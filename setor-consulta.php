<?php 
    include("setor-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<html lang="pt-BR">
<head>
    <title>Consulta - Setor</title>
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
            <table border="1">
                <thead>
                    <tr>
                        <th>Código:</th>
                        <th>Nome</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grupo as $setores) { ?>
                        <tr>
                            <td><?=$setores["idSetor"]?></td>
                            <td><?=$setores["nomeSetor"]?></td>
                            <td>
                                <form nome="alterar" action="setor-a.php" method="POST">
                                    <input type="hidden" name="idSetor" value=<?=$setores["idSetor"]?> />
                                    <input type="submit" name="Editar" value="Editar" />
                                </form>
                            </td>
                            <td>
                                <form name="excluir" action="setor-c.php" method="POST">
                                    <input type="hidden" name="idSetor" value=<?=$setores["idSetor"]?> />
                                    <input type="submit" name="acao" value="Excluir" onclick="alert('Cadastro excluído com sucesso.');"/>
                                </form>    
                            </td>
                        </tr>   
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>