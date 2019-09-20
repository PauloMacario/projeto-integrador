@extends('layouts.app')

@section('content')




<div class=""> 
    <div class="col-md-12">
        <div class="card">
        @if (session('ong'))
        <div class="alert alert-success alert-dismissible fade show mt-4 ml-4 ml-4 mr-4" role="alert">
                Sua <strong>Ong </strong> foi criada com sucesso !.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
            @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-4 ml-4 ml-4 mr-4" role="alert">
                    <strong>Você já possui um Ong cadastrada. </strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <section class="container-fluid perfil-user">
                <div class=" box-perfil">   
                    <div class="container-fluid emp-profile">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <div class="profile-img text-center">
                                    <a href="#">
                                        @if(Auth::user()->avatar == NULL)
                                            <img src="{{url('images/avatar-default.png')}}" alt="" title="Adicione uma foto">
                                        @else
                                            <img src="{{url(Auth::user()->avatar)}}" alt="" title="Adicione uma foto">
                                        @endif
                                    </a>    
                                </div>
                                    
                            </div>
                            <div class="col-md-7">
                                <div class="profile-head">
                                    <form>                                        
                                        <input id="id-perfil" type="hidden" value="{{Auth::user()->id}}">
                                    </form>
                                    <h4 class="text-center">{{ Auth::user()->name }}</h4>
                                    <h5 class="text-center">{{ Auth::user()->occupation }}</h5>
                                    
                                    <p class="proile-bio">  {{ Auth::user()->biography }}</p>
                                    <ul>
                                        <li>Interesses:  {{ Auth::user()->areas }} </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-work text-center">
                                    <p><span><i class="far fa-envelope icone-perfil"></i> </span>
                                            <span> {{ Auth::user()->email }} </span>
                                    </p>
                                    <p> <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                        <span><a href="{{ Auth::user()->website1 }}">{{ Auth::user()->website1 }}</a></span>
                                    </p>
                                    <p><span><i class="fas fa-map-signs icone-perfil"></i> </span>
                                        <span>{{ Auth::user()->district }}</span>
                                    </p>
                                    <p><span><i class="fas fa-map-marked-alt icone-perfil"></i> </span>
                                        <span>{{ Auth::user()->city }}</span>
                                    </p>
                                    
                                  {{--   <div class="text-center mt-5 mb-4">
                                        <a href="{{url('home/perfilEditar')}}" class="btn btn-secondary">Alterar Perfil</a>
                                    </div> --}}
                                    <div class="text-center mt-5">
                                        <p><a href="{{url('home/perfil-editar')}}" class="btn-editar">Alterar Perfil</a></p>	    
                                        <p></p><a href="{{url('home/ong-criar')}}" class="btn-editar">Criar Ong</a></p> 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-7">
                                <div class="col-12 col-md-12 mt-3 text-center">
                                    <h3>Minha Ong.</h3> 
                                </div>
                                    <div class="col-12 mt-3"> 
                                      
                                        <div class="col-12">
                                        <table id="tabela" class="table table-striped  my-ongs">
                                            <thead>
                                                <tr >
                                                    <th class="text-center" width="25%">Logo</th>
                                                    <th class="text-center" width="25%">Nome</th>
                                                    <th class="text-center" width="50%">Descrição</th>
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
               
            </section>                       
    </div>
</div>
@endsection
