@extends('layouts.app')
@section('content')

<!--  =========================== Seção Ações -  (INÍCIO)  ==========================  -->
<section class="home">
		<div class="overlay"></div>
		<div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/photo_caridade.jpg);">
			<div class="desc animate-box">
				<h2><strong>Ongs</strong></h2>
				<span>Confira abaixo as Ongs participantes.</span>
					<!-- <span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span> -->
			</div>
		</div>
	</section>
<section id="noticia" class="projeto-section">
@if($ongs->isEmpty())    
    <div class="container">
        <div class="titulo">
            <div class="col-md-12 col-md-offset-12 text-center heading-section animate-box">
                <h3>Desculpe! Não temos Ongs para serem listadas.</h3>
            </div>
        </div>
    </div>
    <div class="container">
@else 
    <div class="container">
            <div class="titulo">
                <div class="col-md-12 col-md-offset-12 text-center heading-section animate-box">
                    <h3>Conheça as Ongs e Instituições participantes.</h3>
                </div>
            </div>
        </div>
        <div class="container">   

        <div class="row row-bottom-padded-md">

    @foreach ($ongs as $ong)
        
      

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="noticia animate-box">
                    <a href="#"><img class="img-responsive" src="" alt="">
                        <div class="noticia-text">
                            <div class="noticia-title">
                            <h3>{{$ong->name}}</h3>
                                <p>{{$ong->description}}</p>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
    @endforeach        
        </div>
    </div> 
@endif    
</section>
<!--  =========================== Seção Ações -  (FINAL)  ==========================  -->

@endsection