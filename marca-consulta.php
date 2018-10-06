<?php include("marca-c.php");
    $grupo = selectTodos();
    //var_dump($grupo);
?>
<html lang="pt-br">
<head>
    <title>Consulta - Marca</title>
    <meta charset="utf-8">
</head>
<body>
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
            <?php foreach ($grupo as $Marcas) { ?>
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
    <br>
    <a href="index.html">Voltar ao início</a>
</body>
</html>