<?php 
    include("produto-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idProduto         = $_POST['idProduto'];
    @$nomeProduto       = $_POST['nomeProduto'];
    @$idModelo          = $_POST['idModelo'];  //FK
    @$serialProduto     = $_POST['serialProduto'];
    @$quantidadeProduto = $_POST['quantidadeProduto'];
    
    $grupo = selectTodosProdutos();
    //var_dump($grupo);
?>
<html lang="pt-BR">
    <head>
        <title>Consulta - Funcionario</title>
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
                <table border="1">
                    <thead>
                        <tr>
                            <th>ID Funcionario</th>
                            <th>ID Setor</th>
                            <th>ID Funcao</th>
                            <th>Nome Funcionario</th>
                            <th>CPF Funcionario</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grupo as $Funcionarios) { ?>
                            <tr>
                                <td><?=$Funcionarios["idFuncionario"]?></td>
                                <td><?=$Funcionarios["idSetor"]?></td>
                                <td><?=$Funcionarios["idFuncao"]?></td>
                                <td><?=$Funcionarios["nomeFuncionario"]?></td>
                                <td><?=$Funcionarios["cpfFuncionario"]?></td>
                                <td>
                                    <form nome="alterar" action="funcionarios-a.php" method="POST">
                                        <input type="hidden" name="idFuncionario" value=<?=$funcionarios["idFuncionario"]?> />
                                        <input type="submit" name="Editar" value="Editar" />
                                    </form>
                                </td>
                                <td>
                                    <form name="excluir" action="funcionarios-c.php" method="POST">
                                        <input type="hidden" name="idFuncionario" value=<?=$funcionarios["idFuncionario"]?> />
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