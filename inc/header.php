
	<!--  ==================== Modal do form de login (inicialmente oculto) - (INÍCIO) ======================  -->

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center ">
					<h5 class="modal-title ml-auto" id="exampleModalLabel">Login</h5>
					<button type="button" class="close modal-title ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="home.html" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" id="login" placeholder="Login" name="login" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success col-12">Login</button>
						</div>
						<div class="form-group">
							<a class="nav-link btn btn-warning" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar</a> <!-- data-toggle="modal" data-target="#modalCadastro" -->
						</div>
						<div class="form-group">
							<a href="#" class="">Esqueci minha senha.</a>
						</div>
					</form>
				</div>
			</div> 
		</div>
	</div>
	<!--  ==================== Modal do form de login (inicialmente oculto) (FINAL) =======================  -->


	<!--  ==================== Modal do form de login (inicialmente oculto) (FINAL) =======================  -->


	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header text-center ">
					<h5 class="modal-title ml-auto" id="exampleModalLabel">Cadastre-se</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="container " style="padding:2%;">
					<form>
						<div class="form-row">
							<div class="form-group col-12 col-md-4">
								<input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
							</div>
							<div class="form-group col-12 col-md-8">
								<input type="text" class="form-control" id="sobrenome" placeholder="Digite seu sobrenome">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-md-6">
								<input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" required>
							</div>
							<div class="form-group col-12 col-md-6">
								<input type="email" class="form-control" id="email2" placeholder="Confirme E-mail" required>
							</div>
						</div>
						<div class="form-row ">
							<div class="form-group col-12 col-md-6">
								<input type="password" class="form-control" id="senha" placeholder="Crie uma senha">
							</div>
							<div class="form-group col-12 col-md-6">
								<input type="password" class="form-control" id="senha2" placeholder="Confirme a senha" required>
							</div>
						</div>
						<div class="form-row ">
							<div class="form-group col-12 col-md-8">

								<input type="text" class="form-control" id="nascimento" placeholder="Nascimento">
							</div>
							<div class="form-group col-12 col-md-4">
								<select id="tipo" class="form-control">

									<option>Tipo</option>
									<option>Voluntário</option>
									<option>Parceiro</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12 col-md-12 justify-content-center">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck" required>
									Concordo com os termos
								</div>
							</div>
							<div class="form-group col-12 col-md-12">
								<a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Leia os termos de uso.</a>
								<div class="row">
									<div class="col">
										<div class="collapse multi-collapse" id="multiCollapseExample1">
											<div class="card card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-8">
								<button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--  ==================== Modal do form de login (inicialmente oculto) (FINAL) =======================  -->

	

<!--  ==================== Cabeçalho do site - (INÍCIO) =======================  -->

			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-sm-12 text-right social">
							<a href="https://www.facebook.com/" class="grow"><!-- <i class="icon-facebook2"></i> --> <i class="fab fa-facebook-square" title="Facebook"></i></a>
							<a href="https://twitter.com/" class="grow"><!-- <i class="icon-twitter2"></i> --> <i class="fab fa-twitter-square" title="Twitter"></i></a>
							<a href="https://www.instagram.com/" class="grow"><!-- <i class="icon-instagram2"></i> --><i class="fab fa-instagram" title="Instagram""></i></a>
						</div>
					</div>
				</div>
			</div>

<!--  ==================== Menu de navegação e logo - (INÍCIO) =======================  -->
			<header id="header-section" class="sticky-banner">
				<div class="nav-header">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
							<span class="navbar-toggler-icon"></span>
						</button>
						<a class="navbar-brand" href="home.php"><img src="images/logo_2.png" style="width:3,5vw; height:6vh;" alt="Páginas do Bem" title="Páginas do Bem">
							Páginas do Bem</a>

						<div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item  ">
									<a class="nav-link" href="home.php">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Participe já</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="acoes.php">Ações</a>
										<a class="dropdown-item" href="instituicoes.php">Instituições </a>
										<a class="dropdown-item" href="#">Sou instituição</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre nós</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="galeria.php">Fotos</a>
										<a class="dropdown-item" href="blog.php">Blog</a>
										<a class="dropdown-item" href="faq.php">FAQ</a>
										<a class="dropdown-item" href="contato.php">Contato</a>
									</div>
								</li>
							</ul>
						</div>
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Login</button>
					</nav>
				</div>			
			</header>
<!--  ==================== Menu de navegação e logo - (FINAL) =======================  -->			

<!--  ==================== Cabeçalho do site e Menu (FINAL) =======================  -->