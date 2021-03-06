<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./img/favicon.ico">
        <title>Login - YourControl</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/login.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form method="POST" action="login_cadastro-c.php" class="form-signin">
            <img class="mb-4" src="./img/y-image.png" alt="Your Control icon" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Por favor faça o Login ou Cadastre-se</h1>
            <input type="text" id="idUsuario" name="idUsuario" class="form-control" placeholder="ID do usuário" required autofocus>
            <input type="password" id="senhaUsuario" name="senhaUsuario" class="form-control" placeholder="Senha" required>
            
            <button type="submit" id="entrar" name="acao" value="entrar" class="btn btn-lg btn-primary btn-block" >Entrar</button>
            <button type="submit" id="cadastrar" name="acao" value="cadastrar" class="btn btn-lg btn-primary btn-block">Cadastrar</button>
            <p class="mt-5 mb-3 text-muted">YourControl&copy; - 2018</p>
        </form>
    </body>
</html>
