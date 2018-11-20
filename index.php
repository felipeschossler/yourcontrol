<?php
    session_start();
    if(empty($_SESSION)){
        echo "<script language='javascript' type='text/javascript'>alert('Faça o login no sistema.');window.location.href='login.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Your Control - Gerenciamento de Produtos</title>
    <?php
        include("tmpl/head.php");
    ?>
</head>
<body>
    <?php
        include("tmpl/header.php");
        include("tmpl/footer.php");
    ?>
</body>
</html>