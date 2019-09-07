@extends('layouts.app')
@section('content')

<!--  =========================== Seção Home Galeria - (INÍCIO)  ==========================  -->

<section class="home">
    <div class="overlay"></div>
    <div class="home-cover text-center" data-stellar-background-ratio="1" style="background-image: url(images/photo-dog.jpeg);background-size: cover; background-repeat: no-repeat;"">
            <div class=" desc animate-box">
        <h2> <strong>Sirva, ame, dê o seu melhor</strong></h2>
        
    </div>
    </div>
</section>
<!--  =========================== Seção Home Galeria - (FINAL)  ==========================  -->

<!--  ===================== Seção Galeria de fotos da Ongs - (INÍCIO)  ====================  -->

<section id="galeria" class="galeria-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-md-offset-12 text-center heading-section animate-box">
                <h3>Galeria de Fotos</h3>
                <p>Galeria que vale mil palavras</p>
            </div>
        </div>
        <div class="row row-bottom-padded-md animate-box">
            <div class="col-12 ">
                <ul id="galeria-list">
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo_01.jpeg); ">
                        <!-- <a href="#" class="color-3">
                            <div class="case-studies-summary">
                                <span>Foi uma oportunidade excepcional para a prática do bem e da solidariedade</span>
                                <h2>AMIGOS DO BEM</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-children.jpg); ">
                        <!-- <a href="#" class="color-3">
                            <div class="case-studies-summary">
                                <span>Ex: 2</span>
                                <h2>Título 2</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-volunteer1.jpg); ">
                        <!-- <a href="#" class="color-4">
                            <div class="case-studies-summary">
                                <span>Voluntários</span>
                                <h2>Acção do Bem</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-plastic.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxxx</span>
                                <h2>xxxxxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-5.jpg); ">
                        <!-- <a href="#" class="color-6">
                            <div class="case-studies-summary">
                                <span>Vamos Lutar contra a extinção</span>
                                <h2>BELEZA AMEAÇADA</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-4.jpeg); ">
                        <!-- <a href="#" class="color-3">
                            <div class="case-studies-summary">
                                <span>Adotar um animal é um ato de amor</span>
                                <h2>ADOTE UM AMIGO</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-03.jpeg); ">
                        <!-- <a href="#" class="color-4">
                            <div class="case-studies-summary">
                                <span>A elefanta Guida, foi uma das primeiras moradoras do primeiro Santuário de Elefantes da América Latina, localizado em Chapada dos Guimarães, a 65 de km de Cuiabá.</span>
                                <h2>PRA SEMPRE GUIDA</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-6.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxx</span>
                                <h2>xxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-plastic1.jpg); ">
                        <!-- <a href="#" class="color-4">
                            <div class="case-studies-summary">
                                <span>xxxx</span>
                                <h2>xxxxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-horta.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxxx</span>
                                <h2>xxxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-foof.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxxx</span>
                                <h2>xxxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-people.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxxx</span>
                                <h2>xxxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-construcao.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxxx</span>
                                <h2>xxxxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-bazar.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxxr</span>
                                <h2>xxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo_caridade.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxx</span>
                                <h2>xxx</h2>
                            </div>
                        </a> -->
                    </li>
                    <li class="one-third" data-animate-effect="fadeIn" style="background-image: url(images/photo-volunteer2.jpg); ">
                        <!-- <a href="#" class="color-5">
                            <div class="case-studies-summary">
                                <span>xxxx</span>
                                <h2>xxxx</h2>
                            </div>
                        </a> -->
                    </li>
                </ul>
            </div>
        </div>

        <!--  ===================== Seção Galeria de fotos da Ongs - (INÍCIO)  ====================  -->


        <!--  ===================== Botao seja voluntário - (INÍCIO)  ====================  -->
        <div class="row botao-voluntario">
            <div class="col-md-12 col-md-12 text-center animate-box">
                <a href="#" class="btn btn-success btn-lg">Seja um Voluntário</a>
            </div>
        </div>
    </div>
</section>
<!--  ===================== Botao seja voluntário - (FINAL)  ====================  -->


@endsection