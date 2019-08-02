<?php


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Páginas do Bem&mdash; Estenda sua mão a quem precisa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Projeto Integrador DH" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center ">
					<h5 class="modal-title mr-auto ml-auto" id="exampleModalLabel">Login</h5>
					<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
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
							<a class="nav-link btn btn-warning" href="cadastro.php">Cadastrar</a> <!-- data-toggle="modal" data-target="#modalCadastro" -->
						</div>
					</form>

				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<div id="box-principal">
		<div id="page">

			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 text-right social">
							<a href="https://www.facebook.com/" class="grow"><i class="icon-facebook2" title="Facebook"></i></a>
							<a href="https://twitter.com/" class="grow"><i class="icon-twitter2" title="Twitter"></i></a>
							<a href="https://www.instagram.com/" class="grow"><i class="icon-instagram2" title="Instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<header id="header-section" class="sticky-banner">

				<div class="nav-header">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="home.php"><img src="images/logo.png" style="width:3,5vw; height:6vh;" alt="Páginas do bem" id="logo" title="Páginas do bem">
							Páginas do Bem</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item  ">
									<a class="nav-link" href="home.php">Home</a>
								</li>


								<!-- <li class="nav-item">
									<a class="nav-link links" href="">Projetos</a>
								</li> -->

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Participe já</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="#">Instituições </a>
										<a class="dropdown-item" href="#">Ações</a>
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
								<li class="nav-item">
									<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login</a>
								</li>


							</ul>

						</div>
					</nav>
				</div>
				<!-- Button trigger modal -->


				<!-- Modal -->


			</header>