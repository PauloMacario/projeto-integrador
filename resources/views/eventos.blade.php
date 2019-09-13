@extends('layouts.app')
@section('content')

@if($eventos)
sim 
@else 


@endif

<!--  =========================== Seção home do blog de noticias -  (INÍCIO)  ==========================  -->

<section class="home">
		<div class="overlay"></div>
		<div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/photo-gt.jpeg);">
			<div class="desc ">
				<h2><strong>Eventos</strong></h2>
				<span>Últimos eventos cadastrados</span>
					<!-- <span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span> -->
			</div>
		</div>
	</section>

	<!--  =========================== Seção home do blog de noticias -  (FINAL)  ==========================  -->

	<!--  =========================== Seção Notícia do blog -  (INÍCIO)  ==========================  -->

		<section id="noticia" class="projeto-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-12 text-center heading-section ">
						<h3>Bem-Vindo a área de eventos!</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet praesentium harum voluptatum minima perspiciatis? Natus provident unde est et. Dolore quas tempore commodi eveniet ab totam recusandae ad molestiae doloremque.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md ">

						@foreach ($eventos as $evento)


					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="noticia">
							<a href="#"><img class="img-responsive" src="images/photo-dog1.jpg"  width="360" height= "240" alt="">{{$evento->image}}</a>
							<div class="noticia-text">
								<div class="noticia-title">
									<h3><a href=""#>{{$evento->title}}</a></h3>
									<span class="posted_by">Sep. 15th</span>
									<span class="comment"><a href="">21<i class="fas fa-comment"></i></a></span>
									<p>Certifique-se de que seus cosméticos e produtos de limpeza são livres de crueldade (Cruelty Free)..</p>
									<p><a href="#">Leia mais...</a></p>
								</div>
							</div> 
						</div>
					</div>

					@endforeach

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-12 text-center ">
						
					</div>
				</div>
			</div>
		</section>
<!--  =========================== Seção Notícia do blog -  (FINAL)  ==========================  -->


@endsection		