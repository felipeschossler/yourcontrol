<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        include("head.php");
    ?>
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--home-->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <!--cadastrar-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastrar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="marca-f.php">Cadastrar Marca</a>
                        <a class="dropdown-item" href="modelo-f.php">Cadastrar Modelo</a>
                        <a class="dropdown-item" href="produto-f.php">Cadastrar Produto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="funcao-f.php">Cadastrar Função</a>
                        <a class="dropdown-item" href="setor-f.php">Cadastrar Setor</a>
                        <a class="dropdown-item" href="funcionario-f.php">Cadastrar Funcionário</a>
                    </div>
                </li>
                <!--consultar-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="marca-consulta.php">Consultar Marca</a>
                        <a class="dropdown-item" href="modelo-consulta.php">Consultar Modelo</a>
                        <a class="dropdown-item" href="produto-consulta.php">Consultar Produto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="funcao-consulta.php">Consultar Função</a>
                        <a class="dropdown-item" href="setor-consulta.php">Consultar Setor</a>
                        <a class="dropdown-item" href="funcionario-consulta.php">Consultar Funcionário</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Movimentação
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="movimentacao-f.php">Emprestimo</a>
                        <a class="dropdown-item" href="movimentacaoDev-f.php">Devolução</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="movimentacao-consulta.php">Consultar Emprestimo</a>
                        <a class="dropdown-item" href="movimentacaoDev-consulta.php">Consultar Devolução</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="relatorioMov-consulta.php" id="relatorioMov" role="button" aria-expanded="false">
                        Relatório Mov
                    </a>
                </li>
            </ul>
            <!--sair-->
            <a class="btn btn-secondary" href="logout.php">
                Sair
            </a>
        </div>
    </nav>
</body>
</html>