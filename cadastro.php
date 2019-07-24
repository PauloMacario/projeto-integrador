<?php
	require_once("inc/header.php");
?>







   
<div class="box-cadastro">
   <div class="cadastro">

   <form>
    <div class="form-row">
            <div class="form-group col-md-4">
            <!--  <label for="nome">Nome</label> -->
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group col-md-8">
                <!-- <label for="sobrenome">Sobrenome</label> -->
                <input type="text" class="form-control" id="sobrenome" placeholder="Digite seu sobrenome">
            </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
                <!-- <label for="email">Email</label> -->
                <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail">
            </div>
            <div class="form-group col-md-6">
            <!-- <label for="email2">Email</label> -->
                    <input type="email" class="form-control" id="email2" placeholder="Confirme E-mail">
            </div>
    </div>    
    <div class="form-row ">
        <div class="form-group col-md-6">
        <!-- <label for="inputCity">City</label> -->
        <input type="password" class="form-control" id="senha" placeholder="Crie uma senha">
        </div>
        <div class="form-group col-md-6">
        <!-- <label for="inputCity">City</label> -->
        <input type="password" class="form-control" id="senha2" placeholder="Confirme a senha">
        </div>
    </div>
    <div class="form-row ">
        <div class="form-group col-md-8">
        <label for="nascimento">Data de nascimento</label> 
        <input type="date" class="form-control" id="nascimento" placeholder="">
        </div>
        <div class="form-group col-md-4">
        <label for="tipo">Tipo de cadastro</label> 
            <select id="tipo" class="form-control">
                <option selected>...</option>
                <option>Ong</option>
                <option>Voluntário</option>
                <option>Parceiro</option>
            </select>
        </div>
  </div>
  <div class="form-row ">
            <div class="form-group col-6">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <!-- <label class="form-check-label" for="gridCheck"> -->
                    Termos de uso do Site
                </label>
                </div>
            </div>
            <div class="form-group col-6">
                   
            <a href="#" class="" data-toggle="modal" data-target="#exampleModalScrollable">Leia o termo</a>
                    
            </div>
    </div>
    <div class="form-row ">
            <div class="form-group col-6  ">    
                <button type="submit" class="btn btn-success btn-sm btn-block">Cadastrar</button>
            </div>   
            <div class="form-group col-6  ">      
          <a href="home.php" class="btn btn-sm btn-block btn-info text-center" >SAIR</a> 
            </div>
    </div>            
</form>




</div> 
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Termos de uso.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
      </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deleniti unde aliquam dicta corrupti itaque culpa 
                    exercitationem magnam corporis dolor temporibus, mollitia iure! Voluptas adipisci architecto, quasi assumenda doloribus quod!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deleniti unde aliquam dicta corrupti itaque culpa 
                    exercitationem magnam corporis dolor temporibus, mollitia iure! Voluptas adipisci architecto, quasi assumenda doloribus quod!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    
                </div>
    </div>
  </div>
</div>





        <!-- <div class="cadastro">
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
        </div> -->

        
<?php		
	require_once("inc/footer.php");
?>        