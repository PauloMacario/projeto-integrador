@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="">
        <div class="col-md-12">
            <div class="card">
         
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                        </div>
                    @endif

                    <section class="container-fluid perfil-user">
                            <div class=" box-perfil">   
                                <div class="container-fluid emp-profile">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="profile-img text-center">
                                                 @if(Auth::user()->avatar)
                                                    <img src="{{Auth::user()->avatar}}" alt="" title="Adicione uma foto">
                                                 @else
                                                    <img src="{{url('images/avatar-default.png')}}" alt=""  title="Adicione uma foto">

                                                 @endif

                                                </div>
                                               
                                            </div>
                                            <div class="col-md-8">
                                                <div class="profile-head">
                                                    <h4 class="text-center">{{ Auth::user()->name }}</h4>
                                                    <h5 class="text-center">{{ Auth::user()->occupation }}</h5>
                                                    <p class="proile-bio">{{ Auth::user()->biography }}</p>
                                                    <ul>
                                                        <li>Interesses:  {{ Auth::user()->areas }} </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="profile-work text-center">
                                                    <p>E-mail:
                                                            <span> {{ Auth::user()->email }} </span>
                                                    </p>
                                                    <p>Site:
                                                        <span>www.site.com.br</span>
                                                    </p>
                                                    <p>Bairro:
                                                        <span>{{ Auth::user()->district }}</span>
                                                    </p>
                                                    <p>Cidade:
                                                        <span>{{ Auth::user()->city }}</span>
                                                    </p>
                                                    
                                                    <div class="text-center mt-5 mb-4">
                                                        <a href="home/editar" class="btn btn-secondary">Alterar Perfil</a>
                                                    </div>
                                                    <div class="text-center mt-5">    
                                                        <a href="ongs/adicionar" class="btn btn-warning">Criar Ong</a> 
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- <div class="col-md-4">
                        
                                            </div>    -->     
                                            <div class="col-md-8">
                                                <div class="tab-content profile-tab" id="myTabContent">
                        
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Meus Eventos</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Todos Eventos</a>
                                                        </li>
                                                    
                                                    </ul>
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                                Tabela meus eventos
                                                    </div>
                                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                            Todos eventos
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>           
                                </div>
                            </div>
                        </section>  
                       {{--  <ul>
                            <li> {{ Auth::user()->id }} </li>
                            <li> {{ Auth::user()->name }} </li>
                            <li> {{ Auth::user()->email }} </li>
                            <li> {{ Auth::user()->occupation }} </li>
                            <li> {{ Auth::user()->biography }} </li>
                            <li> {{ Auth::user()->areas }} </li>
                            <li> {{ Auth::user()->district }} </li>
                            <li> {{ Auth::user()->city }} </li>
                            <li><img src="{{ Auth::user()->avatar }}" alt="" title="{{ Auth::user()->name }}"></li>
                        </ul>    
 --}}
            </div>
        </div>
    </div>
</div>

@endsection
