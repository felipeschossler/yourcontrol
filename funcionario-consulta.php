<?php 
    include("funcionario-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idFuncionario     = $_POST['idFuncionario'];
    @$nomeFuncionario   = $_POST['nomeFuncionario'];
    @$idSetor           = $_POST['idSetor'];  //FK
    @$idFuncao          = $_POST['idFuncao'];  //FK
    @$cpfFuncionario    = $_POST['cpfFuncionario'];
    
    $grupoF = selectTodosFuncionarios();
    //var_dump($grupo);
?>
<html lang="pt-BR">
    <head>
        <title>Consultar - Funcionário</title>
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
                <h3>Consulta de Funcionário</h3>
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
                        <?php foreach ($grupoF as $funcionarios) { ?>
                            <tr>
                                <td><?=$funcionarios["idFuncionario"]?></td>
                                <td><?=$funcionarios["idSetor"]?></td>
                                <td><?=$funcionarios["idFuncao"]?></td>
                                <td><?=$funcionarios["nomeFuncionario"]?></td>
                                <td><?=$funcionarios["cpfFuncionario"]?></td>
                                <td>
                                    <form nome="alterar" action="funcionario-a.php" method="POST">
                                        <input type="hidden" name="idFuncionario" value=<?=$funcionarios["idFuncionario"]?> />
                                        <input type="submit" name="Editar" value="Editar" />
                                    </form>
                                </td>
                                <td>
                                    <form name="excluir" action="funcionario-c.php" method="POST">
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