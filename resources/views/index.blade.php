@extends('layouts.app')
@section('content')
<!--  =========================== Seção home - Seja voluntário  (INÍCIO)  ==========================  -->

<a href="login" target="_blank" class="">
		<section class="home" id="home">
			<div class="overlay"></div>
			<div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/cover_nature_01.jpg);background-size: cover; background-repeat: no-repeat;">
				<a href="login" class="">
					<div class="desc ">
						<h2><strong>Seja voluntário!</strong></h2>
						<span>Encontre aqui um trabalho voluntário para participar </span>
						<button type="button" class="btn btn-success">Comece já</button>
					</div>
				</a>
			</div>
		</section>
	</a>

<!--  =========================== Seção home - Seja voluntário  (FINAL)  ==========================  -->


<!--  =========================== Seção descritiva do site dos Projetos -  (INÍCIO)  ==========================  -->

	<div id="projeto" class="projeto-section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading-section ">
					<h3>Encontre um evento para participar</h3>
				</div>
			</div>

			<div class="row row-bottom-padded-md " >
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="eventos" >
						<div class="projeto-img">
							<p>
								<img src="{{ url ('images/photo-children.jpg')}}" alt="Criança e Adolescente" title="Criança e Adolescente"class="img-responsive img-large img-projeto">
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
					<a href="eventos" >
						<div class="projeto-img">
							<p>
								<img src="{{ url ('images/cover_animals_2.jpg')}}" alt="Proteção aos Animais" title="Proteção aos Animais" class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Proteção aos Animais</h3>
							<div class="projeto-paragrafo">
								<p>Encontre aqui uma ação e seja um voluntário para auxílio em eventos de adoção de animais, veterinários ou formandos em veterinária para cuidados com os animais, etc.!</p>
							</div>
						</div>

						<div class="projeto-paragrafo text-center">
							<button class=" btn btn-primary">Ver Mais...</button>
						</div>

					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-center">
					<a href="eventos" >
						<div class="projeto-img">
							<p>
								<img src="{{ url ('images/cover_meio_3.jpg')}}" alt="Meio Ambiente" title="Meio Ambiente" class="img-responsive img-large img-projeto">
							</p>
						</div>
						<div class="projeto-text">
							<h3>Meio Ambiente</h3>
							<div class="projeto-paragrafo">
								<p>Todos nós sabemos que o planeta Terra não está bem e que precisa da ajuda de todos os cidadãos. Seja um voluntário para contribuir com as ações práticas de conservação do meio ambiente!</p>
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
		<div class="row text-center">
			<div class="col-12 col-md-6  text-center heading-section ml-auto mr-auto">
				<h3>Busque aqui uma ONG para ajudar</h3>
				<form>
					  <div class="form-row align-items-center">
						<div class="col-sm-9 my-1">
							<input type="text" id="busca" class="form-control" required placeholder="Digite aqui qualquer palavra">
						</div>
						<div class="col-sm-3 my-1">
							<button type="" id="btn-busca" class="btn btn-success">Buscar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container ">
		<div class="row">
			<div class="col-md-12" id="box-busca">
				<div class="alert alert-danger text-center" style="display:none;" id="alert-busca">
					Digite uma palavra no campo.
				</div>


				<div id="box-result" style="display:none; max-height:800px; overflow:scroll; ">
					<table id="tabela" class="table table-striped table-responsive-sm my-ongs">
						<thead>
							<tr >
								<th scope="col" class="text-center" width="25%">Logo</th>
								<th scope="col" class="text-center" width="25%">Nome</th>
								<th scope="col" class="text-center" width="25%">Descrição</th>
								<th scope="col" class="text-center" width="25%">Bairro</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
						</table>
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
						<h3>Conheça as  ONGs participantes</h3>

					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-12 col-sm-12 box-img-animate">
						<div class="noticia">
						<img width="100%" height="280" src="{{url('images/photo-education.jpg')}}" >
							<div class="noticia-text">
								<div class="noticia-title">
									<h3><a href="{{url('eventos')}}">Escola da família</a></h3>
									<p>Eventos diversos para toda a família se divertir e contribuir com suas idéias.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 box-img-animate">
						<div class="noticia">
						<img width="100%" height="280" src="{{url('images/photo-bazar.jpg')}}" >
							<div class="noticia-text">
								<div class="noticia-title">
									<h3><a href="{{url('eventos')}}">Bazar do inverno comunitário </a></h3>
									<p>Bazar realizado com intuíto de doação e arrecadação de roupas para pessoas necessitadas, venha nos ajudar a ajudar.</p>
								</div>
							</div>
						</div>

					</div>
					<div class="clearfix visible-sm-block"></div>
						<div class="col-lg-4 col-md-12 col-sm-12 box-img-animate">
							<div class="noticia">
								<img width="100%" height="280" src="{{url('images/photo-dog1.jpg')}}" >
								<div class="noticia-text">
									<div class="noticia-title">
										<h3><a href="{{url('eventos')}}">Doação de Pets</a></h3>
										<p>Doação de Caẽs e gatos, você que gosta de animais e tem a intenção de adotar um animalzinho, venha conhecer nossa ong e nossos amiguinhos</p>

									</div>
								</div>
							</div>
						</div>
					<div class="clearfix visible-md-block"></div>
				</div>
				<!-- <div class="row">
					<div class="col-md-12 col-md-12 text-center ">
						<a href="eventos" class="btn btn-success btn-lg">Mais Eventos</a>
					</div>
				</div> -->
			</div>
			<div class="projeto-paragrafo text-center mt-4">
					<button class=" btn btn-primary">Ver Mais...</button>
				</div>
		</div>

        <!--  =========================== Seção resumo das notícias -  (FINAL)  ==========================  -->


@endsection

