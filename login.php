<?php
	require_once("inc/header.php");
?>
   
        <div class="teste">
        <form action="home.html" method="POST">
        <div class="form-group">
            <label>Login</label>
            <input type="text" class="form-control" id="login" placeholder="Login" name="login" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
        </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="cadastro.php" class="btn btn-primary">Cadastrar</a> 
        </form>
        </div>
<?php		
	require_once("inc/footer.php");
?>