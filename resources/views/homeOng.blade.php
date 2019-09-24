@extends('layouts.app')

@section('content')

@if(isset($ong))


<div class="">
    <div class="col-md-12">
        <div class="card">

            <section class="container perfil-user">
                <div class=" box-perfil">
                    <div class="container-fluid emp-profile">
                        <div class="row ">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="profile-ong-img text-center">
                                      
                                        <form>
                                            <input id="id-ong" type="hidden" value="{{$ong->id}}">
                                        </form>
                                    
                                    <a href="#">
                                        @if($ong->avatar == NULL)
                                            <img src="{{url('images/avatar-ong-default.png')}}" alt=""  title="Adicione uma foto">
                                        @else
                                            <img src="{{url($ong->avatar)}}" alt="" title="Adicione uma foto">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 ong-description d-flex justify-content-center align-items-center">

                                <div class="col-md-8 profile-head ">

                                    <h3 class="text-center"><span>{{$ong->name}}</span></h3>
                                    <h5 class="text-center">Segmento: <span>{{$ong->segment}}</span></h5>
                                    <p><span>{{$ong->description}}</span></p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ong-contact ">
                                <div class="profile-work text-center">

                                <div class="row ong-description">        
                                    <div class="col-md-6  text-right">
                                        <table class="table">
                                            <tbody>
                                                    <tr>
                                                        <td align="right">
                                                            <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                        </td>
                                                        <td align="left">
                                                            @if ($ong->website1 == NULL)
                                                            Adicione seu website
                                                            @else
                                                            <span><a href="htpp://{{$ong->website1}}" target="_blank">{{$ong->website1}}</a></span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @if ($ong->website2 == NULL)                                        
                                                    @else
                                                        <tr>
                                                            <td align="right">
                                                                <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                            </td>
                                                            <td align="left">
                                                                <span><a href="htpp://{{$ong->website2}}" target="_blank">{{$ong->website2}}</a></span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @if ($ong->website3 == NULL)                                        
                                                    @else
                                                        <tr>
                                                            <td align="right">
                                                                <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                            </td>
                                                            <td align="left">
                                                                <span><a href="htpp://{{$ong->website3}}" target="_blank">{{$ong->website3}}</a></span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    @if ($ong->website4 == NULL)
                                                    @else
                                                        <tr>
                                                            <td align="right">
                                                                <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                            </td>
                                                            <td align="left">
                                                                <span><a href="htpp://{{$ong->website4}}" target="_blank">{{$ong->website4}}</a></span>
                                                            </td>
                                                        </tr>
                                                    @endif                                                    
                                                        <tr>
                                                            <td align="right"><i class="fas fa-phone-alt icone-perfil"></td>
                                                    @if ($ong->phone1 == NULL)
                                                            <td align="left">Adicione um número de contato</td>
                                                    @else
                                                            <td align="left">{{$ong->phone1}}</td>
                                                        </tr>
                                                    @endif
                                                    @if ($ong->phone2 == NULL)
                                                    @else
                                                    <tr>
                                                        <td align="right"><i class="fas fa-phone-alt icone-perfil"></td>
                                                        <td align="left">{{$ong->phone2}}</td>
                                                    </tr>
                                                    @endif
                                                    <tr>
                                                        <td align="right"><i class="far fa-envelope icone-perfil"></td>
                                                        <td align="left">{{$ong->email}}</td>
                                                    </tr>     
                                            </tbody>
                                        </table>
                                    </div>

                                    
                                    <div class="col-md-6 text-right">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td align="right"><i class="fas fa-road icone-perfil"></i></td>
                                                    <td align="left">{{$ong->address}}</td>
                                                </tr>
                                                <tr>
                                                    <td align="right"><i class="fas fa-map-signs icone-perfil"></i></td>
                                                    <td align="left">{{$ong->district}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td align="right"><i class="fas fa-map-marked-alt icone-perfil"></i></td>
                                                    <td align="left">{{$ong->city}}</span></span></td>                                               
                                                </tr>
                                                <tr>
                                                    <td align="right"><i class="fas fa-map-marked-alt icone-perfil"></i></td>
                                                    <td align="left">{{$ong->uf}}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                
                                    <div class="col-12 col-md-12 ml-2 mt-5 d-flex flex-wrap justify-content-center">

                                        @foreach ($ong->users as $item)
                                            @if($item->pivot->id_user == Auth::user()->id && $item->pivot->permission_level == 1)
                                                <p class="mr-3"><a href="{{url('homeOng/perfil-ong-editar')}}/{{$ong->id}}" class="btn-editar">Alterar informações</a></p>
                                                <p class="mr-3"><a href="{{url('homeOng/evento/criar/'.$ong->id)}}" class="btn-editar">Criar Evento</a></p>
                                                <p><a href="{{url('homeOng/galeria/postar/'.$ong->id)}}" class="btn-editar">Postar foto</a></p>
                                            @endif
                                        @endforeach

                                    </div>
                                 
@endif
                            </div>
                            <div class="col-md-12">
                                <div class="col-12 mt-3 mr-3 text-center">
                                    <h3>Eventos</h3>
                                </div>
                                    <div class="col-12 mt-3 mr-3">



                                        <table id="tabela-eventos" class="table table-striped table-responsive-sm my-ongs">
                                            <thead>
                                                <tr >
                                                    <th scope="col" class="text-center" width="10%"></th>
                                                    <th scope="col" class="text-center" width="20%">Nome</th>
                                                    <th scope="col" class="text-center" width="40%">Descrição</th>
                                                    <th scope="col" class="text-center" width="40%">Data</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($eventos as $evento)
                                                <tr >
                                                <td class="text-center" width="10%"><a href="{{url('eventos/'.$evento->id)}}" ><img src="{{url($evento->image)}}" ></a></td>
                                                    <td class="text-center" width="20%">{{$evento->title}}</td>
                                                    <td class="text-center" width="40%">{{$evento->description}}</td>
                                                    <td class="text-center" width="30%">{{$evento->date}}</td>
                                                </tr>


                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                        <div class="col-12 mt-3 text-center">
                                            <h3>Fotos</h3>
                                        </div>
                                        <div class="col-12 mt-3">

                                                <div class="col-12">
                                                <div id="foto-homeOng" class="" >
                                                   
                                                </div>
        
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
</div>


@endsection
