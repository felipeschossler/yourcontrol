<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<?php 
    include("funcionario-c.php");
    //pega por post o componente codigo do formulario -F.
    @$idFuncionario     = $_POST['idFuncionario'];
    @$idSetor           = $_POST['idSetor'];  //FK
    @$idFuncao          = $_POST['idFuncao'];  //FK
    @$nomeFuncionario   = $_POST['nomeFuncionario'];
    @$cpfFuncionario    = $_POST['cpfFuncionario'];
    
    $grupoE = selectTodosFuncionarios();
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
                <div class="form">
                    <h3>Consulta de Funcionário</h3>
                    <table class="table">
                        <thead class="thead-dark">
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
                            <?php foreach ($grupoE as $funcionarios) { ?>
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
        </div>

    </body>
</html>