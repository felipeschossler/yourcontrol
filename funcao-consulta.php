<?php 
    include("funcao-c.php");
    $grupoF = selectTodasFuncoes();
    //var_dump($grupo);
?>
<html lang="pt-BR">
<head>
    <title>Consultar - Função</title>
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
                <h3>Consultar - Função</h3>
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
    </div>

</body>
</html>