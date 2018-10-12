<?php 
    include("funcao-c.php");
    $grupoF = selectTodasFuncoes();
    //var_dump($grupo);
?>
<html lang="pt-BR">
<head>
    <title>Consulta - Função</title>
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
        <h3>Consulta de Função</h3>
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
                    <?php foreach ($grupoF as $funcoes) { ?>
                        <tr>
                            <td><?=$funcoes["idFuncao"]?></td>
                            <td><?=$funcoes["nomeFuncao"]?></td>
                            <td>
                                <form nome="alterar" action="funcao-a.php" method="POST">
                                    <input type="hidden" name="idFuncao" value=<?=$funcoes["idFuncao"]?> />
                                    <input type="submit" name="Editar" value="Editar" />
                                </form>
                            </td>
                            <td>
                                <form name="excluir" action="funcao-c.php" method="POST">
                                    <input type="hidden" name="idFuncao" value=<?=$funcoes["idFuncao"]?> />
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