<?php
	require_once("inc/header.php");
?>
   
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

        
<?php		
	require_once("inc/footer.php");
?>        