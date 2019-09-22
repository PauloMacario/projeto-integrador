@extends('layouts.app')

@section('content')

@if(isset($ong) )


<div class="">
    <div class="col-md-12">
        <div class="card">

            <section class="container perfil-user">
                <div class=" box-perfil">
                    <div class="container-fluid emp-profile">
                        <div class="row ">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="profile-ong-img text-center">
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
                        <div class="row ">
                            <div class="col-md-4 ong-contact ">
                                <div class="profile-work text-center ">




                                    @if(isset($ong) && $ong->website1 != null)
                                    <p class=" ml-2"><span class=""><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website1}}" target="_blank">{{$ong->website1}}</a></span></p>
                                    <p class=" ml-2"><span class=""><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website2}}" target="_blank">{{$ong->website1}} </a></span></p>

                                    <p class=" ml-2"><span class=""><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website3}}" target="_blank">{{$ong->website1}}</a></span></p>
                                    <p class=" ml-2"><span class=""><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website4}}" target="_blank">{{$ong->website1}} </a></span></p>


                                    <p class=" ml-2"><span><span><i class="fas fa-road icone-perfil"></i> </span>
                                        <span>{{$ong->address}}</span></span>
                                    </p>
                                    <p class=" ml-2"><span><span><i class="fas fa-map-signs icone-perfil"></i> </span>
                                        <span>{{$ong->district}}</span></span>
                                    </p>
                                    <p class=" ml-2"><span><span><i class="fas fa-map-marked-alt icone-perfil"></i> </span>
                                        <span>{{$ong->city}}</span></span>
                                    </p>
                                    <p class=" ml-2"><span><span><i class="fas fa-map-marked-alt icone-perfil"></i> </span>
                                        <span>{{$ong->uf}}</span></span>
                                    </p>

                                    @if(isset($ong) && $ong->phone1 != null)
                                        <p class=" ml-2"><span><span><i class="fas fa-phone-alt icone-perfil"></i></i> </span>
                                            <span>{{$ong->phone1}}</span></span>
                                        </p>
                                        <p class=" ml-2"><span><span><i class="fas fa-phone-alt icone-perfil"></i></i> </span>
                                            <span>{{$ong->phone2}}</span></span>
                                        </p>
                                        <p class=" ml-2"><span><span><i class="far fa-envelope icone-perfil"></i> </span>
                                            <span>{{$ong->email}}</span></span>
                                        </p>
                                    @endif


                                    @endif
                                    <div class=" ml-2 mt-5">
                                        @foreach ($ong->users as $item)
                                            @if($item->pivot->id_user == Auth::user()->id && $item->pivot->permission_level == 1)
                                                <p><a href="{{url('homeOng/perfil-ong-editar')}}/{{$ong->id}}" class="btn-editar">Alterar informações</a></p>
                                                <p><a href="{{url('homeOng/evento/criar/'.$ong->id)}}" class="btn-editar">Criar Evento</a></p>
                                            @endif
                                    @endforeach

                                    </div>
                                    @endif



                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="col-12 mt-3 mr-3 text-center">
                                    <h3>Eventos</h3>
                                </div>
                                    <div class="col-12 mt-3 mr-3">



                                        <table id="tabela" class="table table-striped table-responsive-sm my-ongs">
                                            <thead>
                                                <tr >
                                                    <th scope="col" class="text-center" width="25%"></th>
                                                    <th scope="col" class="text-center" width="25%">Nome</th>
                                                    <th scope="col" class="text-center" width="50%">Descrição</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                        <div class="col-12 mt-3 text-center">
                                            <h3>Fotos</h3>
                                        </div>
                                    <div class="col-12 mt-3">
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
