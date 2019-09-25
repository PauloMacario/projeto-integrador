@extends('layouts.app')

@section('content')

<div class="">
    <div class="col-md-12">
        <div class="card pt-5">
        @if (session('ong'))
        <div class="alert alert-success alert-dismissible fade show mt-4 ml-4 ml-4 mr-4" role="alert">
                Sua <strong>Ong </strong> foi criada com sucesso !.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-4 ml-4 ml-4 mr-4" role="alert">
                    <strong>Você já possui um Ong cadastrada.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <section class="container-fluid perfil-user">
                <div class=" box-perfil">
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
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
                        <div class="col-md-10 row">
                            <div class="text-left col-md-12">                      
                                <span class="pr-3">
                                    <i class="far fa-user icone-perfil"></i>
                                </span>
                                
                                <span class="pr-3"> {{ Auth::user()->name }} </span>
                                    
                                <span class="pr-3">
                                    <i class="fa fa-briefcase icone-perfil"></i>
                                </span>

                                <span class="pr-3"> {{ Auth::user()->occupation }} </span>
                                    
                                <span class="pr-3">
                                    <i class="far fa-envelope icone-perfil"></i>
                                </span>
                                
                                <span class="pr-3"> {{ Auth::user()->email }} </span>
                                    
                                <span class="pr-3">
                                    <i class="fas fa-globe-africa icone-perfil"></i>
                                </span>
                                
                                @if (Auth::user()->website == NULL)
                                    <span class="pr-3">Meu website</span>
                                @else
                                    <span class="pr-3">
                                        <a href="{{ Auth::user()->website1 }}">{{ Auth::user()->website1 }}</a>
                                    </span>
                                @endif
                            </div>
                            <div class="text-left col-md-12">
                                <span class="pr-3">
                                    <i class="fas fa-map-signs icone-perfil"></i>
                                </span>
    
                                @if (Auth::user()->district == NULL)
                                    <span class="pr-3">Meu bairro</span>
                                @else
                                    <span class="pr-3">{{ Auth::user()->district }}</span>
                                @endif
                            
                                <span class="pr-3">
                                    <i class="fas fa-map-marked-alt icone-perfil"></i>
                                </span>
    
                                @if (Auth::user()->city == NULL)
                                    <span class="pr-3">Minha cidade</span>
                                @else
                                    <span>{{ Auth::user()->city }}</span>
                                @endif

                                <span class="pr-3"></span>
                                   <i class="fa fa-pencil icone-perfil"></i>

                                <p class="proile-bio">  {{ Auth::user()->biography }}</p>

                                
    
                                @if (Auth::user()->areas == NULL)
                                <span>
                                        Causas: Adiciona a causa de seu interesse 
                                    </span>
                                @else
                                    <span class="pr-3">
                                            <i class="fa fa-sign-language icone-perfil"></i>
                                        Causas: {{ Auth::user()->areas }}
                                    </span>
                                @endif
                            </div>
                                

                            <form>
                                <input id="id-perfil" type="hidden" value="{{Auth::user()->id}}">
                            </form>
                        </div>
                    </div>
                </div>
                
                                <div class="text-left mt-2 col-md-2">
                                    <p><a href="{{url('home/perfil-editar')}}" class="btn-editar form-control">Alterar Perfil</a></p>
                                    <p><a href="{{url('home/ong-criar')}}" class="btn-editar form-control">Criar Ong</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=" d-flex justify-content-center flex-column ">  
                            <div class="col-12 col-md-12 mt-3 text-center">
                                <h3 class="d-flex justify-content-center">Minha ONG</h3>
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
            </section>
    </div>
</div>
@endsection
