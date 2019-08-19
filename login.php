
<!-- ====== Cabeçalho HEAD (INÍCIO)  ======== -->
<?php  require_once("inc/head.php"); ?>


<body>
	<main id="box-principal">
		<div id="page">

 <!-- ====== Header e Menu de navegação (INÍCIO)  ========  -->
<?php  require_once("inc/header.php");
?>

   

<section class="box-login">
<form>
    <div class="form-row ">
       
    </div>
    <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <img src="images/logo_2.png" style="width:50px; height:50px;" alt="">
            </div>
            <div class="form-group col-md-12">
            <h4 class="text-center">Login</h4>
            </div>
            <div class="form-group col-md-12">
            <!--  <label for="nome">Nome</label> -->
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group col-md-12">
                <!-- <label for="sobrenome">Sobrenome</label> -->
                <input type="text" class="form-control" id="sobrenome" placeholder="Digite seu sobrenome">
            </div>
            <div class="form-group col-md-12">
              <a href="#">Esqueci minha senha.</a>
            </div>
    </div>
   
    
    
    <div class="form-row ">
            <div class="form-group col-12  ">    
                <button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
            </div>  
            <a href="cadastro.php">Cadastre-se</a> 
           
    </div>            
</form>
</section>



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

        
<?php		
	require_once("inc/footer.php");
?>        