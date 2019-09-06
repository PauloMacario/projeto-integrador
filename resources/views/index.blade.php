@extends('layouts.app')
@section('content')
<!--  =========================== Seção home - Seja voluntário  (INÍCIO)  ==========================  -->

<a href="eventos" target="_blank" class=""> 
		<section class="home "" id="home">
			<div class="overlay"></div>
			<div class="home-cover text-center " data-stellar-background-ratio="1" style="background-image: url(images/cover_nature_01.jpg);background-size: cover; background-repeat: no-repeat;">
				<div class="desc ">
					<h2><strong>Seja voluntário!</strong></h2>
					<span>Encontre aqui um trabalho voluntário para participar </span>
					<button type="button" class="btn btn-success">Comece já</button>
				</div>
			</div>
		</section>
	</a>

<!--  =========================== Seção home - Seja voluntário  (FINAL)  ==========================  -->


<!--  =========================== Seção descritiva do site dos Projetos -  (INÍCIO)  ==========================  -->

	<div id="projeto" class="projeto-section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading-section ">
					<h3>Encontre sua causa</h3>
					<p>Clique numa causa e encontre organizações em São Paulo.</p>
				</div>
			</div>

			<div class="row row-bottom-padded-md ">
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="#" >
						<div class="projeto-img">	
							<p>
								<img src="images/photo-children.jpg" alt="Criança e Adolescente" title="Criança e Adolescente"class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Criança e Adolescente</h3>
							<div class="projeto-paragrafo">	
								<p>Encontre aqui organizações que ajudam escolas, orfanatos, creches, hospitais e outras ações que promovam melhorias e apoio para a vida de crianças e adolescentes!</p>
							</div>	
						</div>	
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="#" >
						<div class="projeto-img">	
							<p>
								<img src="images/cover_animals_2.jpg" alt="Proteção aos Animais" title="Proteção aos Animais" class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Proteção aos Animais</h3>
							<div class="projeto-paragrafo">
								<p>Encontre aqui uma ação e seja um voluntário para auxílio em eventos de adoção de animais, veterinários ou formandos em veterinária para cuidados com os animais, etc.!</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="#" >
						<div class="projeto-img">
							<p>
								<img src="images/cover_meio_3.jpg" alt="Meio Ambiente" title="Meio Ambiente" class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Meio Ambiente</h3>
							<div class="projeto-paragrafo">
								<p>Todos nós sabemos que o planeta Terra não está bem e que precisa da ajuda de todos os cidadãos. Seja um voluntário para contribuir com as ações práticas de conservação do meio ambiente!<p>
							</div>
						</div>
					</a>
				</div>				
			</div>
		</div>
	</div>	

<!--  =========================== Seção descritiva do site dos Projetos -  (FINAL)  ==========================  -->	


<!--  =========================== Seção motor de busca co filtros -  (INÍCIO)  ==========================  -->
		
		<div id="busca-section" class="projeto-section">
			<div class="container ">
				<div class="row">
					<div class="col-md-12  text-center heading-section">
						<h3>Busque aqui uma Ong para ajudar</h3>
						<form>
  							<div class="form-row align-items-center">
    							<div class="col-sm-3 my-1">										
									<select id="inputState" class="form-control">
										<option selected>Estado</option>
										<option>São Paulo</option>
									</select>
								</div>
								
								<div class="col-sm-3 my-1">										
									<select id="bairro" class="form-control">
										<option selected>Bairro</option>
										<option >Bairro - 1</option>
										<option >Bairro - 2</option>
										<option >Bairro - 3</option>
										<option >Bairro - 4</option>
										<option >Bairro - 5</option>
										<option >Bairro - 6</option>
										<option >Bairro - 7</option>											
									</select>
								</div>
								<div class="col-sm-3 my-1">										
										<select id="bairro" class="form-control">
											<option selected>Segmento</option>
											<option >Saúde</option>
											<option >Meio Ambiente</option>
											<option >Educação</option>
											<option >Social</option>
											<option >Moradia</option>																				
										</select>
									</div>
								<div class="col-sm-3 my-1">
									<button type="submit" class="btn btn-success">Buscar</button>	
								</div>								
							</div>	
						</form>
					</div> 
				</div>
			</div>
			<div class="container ">
				<div class="row">
						<div class="col-md-12">
						<div class="mapa text-center "  style="background-image: url(images/photo-08.jpeg);background-size: cover; background-repeat: no-repeat; height:80vh;">
								
							
						</div>
					</div> 					
				</div>
			</div>
		</div>
<!--  =========================== Seção motor de busca com filtros -  (FINAL)  ==========================  -->

<!--  =========================== Seção resumo das notícias -  (INÍCIO)  ==========================  -->
		
		<div id="noticia-section" class="projeto-section">
			<div class="container ">
				<div class="row">
					<div class="col-md-12 col-md-offset-12 text-center heading-section">
						<h3>Eventos</h3>
						<p>Esteja sempre preparado para nossos eventos.</p>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="noticia">
						<iframe width="100%" height="280" src="https://www.youtube.com/embed/j8L1CcanjT8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="noticia-text">
								<div class="noticia-title">
									<h3><a href=""#>Conheça os 17 Objetivos de Desenvolvimento Sustentável</a></h3>
									<p>Acesse aqui a Agenda 2030 na íntegra, com o documento final adotado na Cúpula das Nações Unidas sobre o Desenvolvimento Sustentável.</p>									
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="noticia">
						<iframe width="100%" height="280" src="https://www.youtube.com/embed/soT7jdW5bvE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="noticia-text">
								<div class="noticia-title">
									<h3><a href=""#>Um olhar sobre o futuro do Santuário de Elefantes Brasil.</a></h3>
									<p>Breve descrição da notícia.</p>									
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="noticia">
							<iframe width="100%" height="280" src="https://www.youtube.com/embed/_oeYCEYpaRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<div class="noticia-text">
									<div class="noticia-title">
										<h3><a href=""#>O trabalho infantil no Brasil</a></h3>
										<p>Breve descrição da notícia.</p>
										
									</div>
								</div> 
							</div>
						</div>
					<div class="clearfix visible-md-block"></div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-12 text-center ">
						<a href="eventos" class="btn btn-success btn-lg">Mais Eventos</a>
					</div>
				</div>
			</div>
		</div>
        <!--  =========================== Seção resumo das notícias -  (FINAL)  ==========================  -->
        
        
@endsection		
