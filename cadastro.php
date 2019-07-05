<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body class="background">
        <div class="cadastro">
        <form action="" method="POST">
        <div class="form-group">
            <label>Digite seu Login</label>
            <input type="text" class="form-control" id="login" placeholder=" Digite seu login de acesso" name="login" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Crie sua senha Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirme sua senha Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Digite seu nome Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome" required>
        </div>
            <button type="submit" href="login.php" class="btn btn-primary">Voltar</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        </div>
        </body>
</html>