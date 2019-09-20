@extends('layouts.app')
@section('content')


<!--  =========================== Seção home do blog de noticias -  (INÍCIO)  ==========================  -->

<section class="home">
		<div class="overlay"></div>
		<div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/photo-gt.jpeg);">
			<a href="#titulo" class=""> 
				<div class="desc ">
					<h2><strong>Eventos</strong></h2>
					<span>Alguns de nossos eventos cadastrados</span>
						
					</div>
				</a>	
			</div>
		</section>

	<!--  =========================== Seção home do blog de noticias -  (FINAL)  ==========================  -->

	<!--  =========================== Seção Notícia do blog -  (INÍCIO)  ==========================  -->



		<section id="noticia" class="projeto-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-12 text-center heading-section" id="titulo">
						<h3>Bem-Vindo a área de eventos!</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet praesentium harum voluptatum minima perspiciatis? Natus provident unde est et. Dolore quas tempore commodi eveniet ab totam recusandae ad molestiae doloremque.</p>
					</div>
				</div>
			</div>

			@if($eventos->isEmpty())    
    <div class="container">
        <div class="titulo">
            <div class="col-md-12 col-md-offset-12 text-center heading-section ">
                <h3>Desculpe! Não temos Eventos para serem listadas.</h3>
            </div>
        </div>
    </div>
    <div class="container">
@else 

			<div class="container">
				<div class="row row-bottom-padded-md ">

						@foreach ($eventos as $evento)
					<div class="col-md-4 col-12 box-img-animate">
						<div class="noticia">
							<a href="{{url('eventos/'.$evento->id)}}">
								<img src="{{$evento->image}}" alt="">
								
								</a>
							<div class="noticia-text">
								<div class="noticia-title">
									<h3><a href=""#>{{$evento->title}}</a></h3>
									<span class="posted_by">{{$evento->date}}</span>
									
									<p>{{$evento->description}}</p>
									<p><a href="#">Leia mais...</a></p>
								</div>
							</div> 
						</div>
					</div>

					@endforeach

						</div>
					</div>
				</div>
				@endif
				<div class="row">
					<div class="col-md-12 col-md-offset-12 text-center ">
						
					</div>
				</div>
			</div>
		</section>
<!--  =========================== Seção Notícia do blog -  (FINAL)  ==========================  -->


@endsection		