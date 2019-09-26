@extends('layouts.app')

@section('content')

@if(isset($ong))

<div class="">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <section class="container perfil-user">
                    <div class=" box-perfil">
                        <div class="container-fluid emp-profile">

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

                                    <div class="col-md-12 profile-head ">

                                        <h3 class="text-center"><span>{{$ong->name}}</span></h3>
                                        <h5 class="text-center">Segmento: <span>{{$ong->segment}}</span></h5>
                                        <p><span>{{$ong->description}}</span></p>

                                    </div>
                                </div>

                        </div>

                            <div class="col-md-12 ong-contact ">
                                <div class="profile-work text-center" style="overflow-x:scroll">

                                 {{--    <div class="row ong-description">
                                        <div class="col-md-12  text-right"> --}}
                                            <table class="table table-borderless ">
                                                <tbody>
                                                        <tr>
                                                            <td class="text-left">
                                                                <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                            </td>
                                                            <td class="text-left">
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
                                                                <td class="text-left">
                                                                    <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                                </td>
                                                                <td class="text-left">
                                                                   <span><a href="htpp://{{$ong->website2}}" target="_blank" >{{$ong->website2}}</a></span>

                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if ($ong->website3 == NULL)
                                                        @else
                                                            <tr>
                                                                <td class="text-left">
                                                                    <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span><a href="htpp://{{$ong->website3}}" target="_blank">{{$ong->website3}}</a></span>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if ($ong->website4 == NULL)
                                                        @else
                                                            <tr>
                                                                <td class="text-left">
                                                                    <span><i class="fas fa-globe-africa icone-perfil"></i> </span>
                                                                </td>
                                                                <td class="text-left"
                                                                    <span><a href="htpp://{{$ong->website4}}" target="_blank">{{$ong->website4}}</a></span>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                            <tr>
                                                                <td class="text-left"><i class="fas fa-phone-alt icone-perfil"></td>
                                                        @if ($ong->phone1 == NULL)
                                                                <td  class="text-left">Adicione um número de contato</td>
                                                        @else
                                                                <td class="text-left">{{$ong->phone1}}</td>
                                                            </tr>
                                                        @endif
                                                        @if ($ong->phone2 == NULL)
                                                        @else
                                                        <tr>
                                                            <td class="text-left"><i class="fas fa-phone-alt icone-perfil"></td>
                                                            <td class="text-left">{{$ong->phone2}}</td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td class="text-left"><i class="far fa-envelope icone-perfil"></td>
                                                            <td class="text-left">{{$ong->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><i class="fas fa-road icone-perfil"></i></td>
                                                            <td class="text-left">{{$ong->address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><i class="fas fa-map-signs icone-perfil"></i></td>
                                                            <td class="text-left">{{$ong->district}}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><i class="fas fa-map-marked-alt icone-perfil"></i></td>
                                                            <td class="text-left">{{$ong->city}}</span></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><i class="fas fa-map-marked-alt icone-perfil"></i></td>
                                                            <td class="text-left">{{$ong->uf}}</td>
                                                        </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div class="col-12 col-md-12 ml-2 mt-5 text-center">

                                         @foreach ($ong->users as $item)
                                                @if($item->pivot->id_user == Auth::user()->id && $item->pivot->permission_level == 1)
                                                    <p class="mr-3"><a href="{{url('homeOng/perfil-ong-editar')}}/{{$ong->id}}" class="btn-editar">Alterar informações</a></p>
                                                    <p class="mr-3"><a href="{{url('homeOng/evento/criar/'.$ong->id)}}" class="btn-editar">Criar Evento</a></p>
                                                    <p><a href="{{url('homeOng/galeria/postar/'.$ong->id)}}" class="btn-editar">Postar foto</a></p>

                                                @endif

                                            @endforeach
                                                @if(isset($curtir))
                                                    <p><a href="{{url('')}}" class="btn-editar">Seguir</a></p>

                                                @endif
                                                @if(!$ong->users->isEmpty())


                                                @foreach ($ong->users as $item)

                                                @if($item->pivot->id_user == Auth::user()->id && $item->pivot->permission_level == 0)



                                                <form class="mt-3" action="{{url('')}}" method="post">
                                                        @csrf {{method_field('DELETE')}}
                                                      {{--  <input type="hidden" name="idEvento" value="{{$evento->id}}">
                                                        <input type="hidden" name="idUser" value="{{Auth::user()->id}}"> --}}

                                                        <button class="btn btn-danger" type="" >Não seguir</button>   {{-- Add metodo deixar de seguir ong --}}
                                                    </form>

                                                    <p class="mt-2">{{ $seguidor = "Status"}} </p>

                                                        @endif

                                                @endforeach

                                                @endif
                                                @if(!isset($seguidor))
                                                    <p class="mt-2"><a href="{{url('')}}" class="btn btn-info">Seguir</a></p>  {{-- Add metodo de seguir ong --}}
                                                @endif







                                        </div>
                                    {{-- </div>
                                </div>    --}}
                            </div>

                    </div>




                </section>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-8">

                <div class="col-12 mt-3 mr-3 text-center">
                    <h3>Eventos</h3>
                </div>

                    <div class="col-12 mt-3 mr-3 box-eventos">
                        <table id="tabela-eventos" class="table table-striped table-responsive-sm my-ongs">

                            <tbody>

                                @if($eventos->isEmpty())
                                    <h6>Ainda não possui eventos cadastrados!</h6>

                                @else
                                    @foreach ($eventos as $evento)
                                        <tr >
                                            <td class="text-center" ><a href="{{url('eventos/'.$evento->id)}}" ><img src="{{url($evento->image)}}" ></a></td>
                                            <td class="text-center" >{{$evento->title}}</td>
                                            <td class="text-center text-truncate" style="max-width: 150px;"  >{{$evento->description}}</td>
                                            <td class="text-center" >{{$evento->date}}</td>



                                        @if($item->pivot->id_user == Auth::user()->id && $item->pivot->permission_level == 1)
                                        <td class="text-center" >
                                            <form action="" method="post">
                                            <input type="hidden" id="idEvento" name="idEvento" value="{{$evento->id}}">
                                            <button type="submit"><i class="fas fa-trash-alt"></i></button>

                                            </form>
                                        </td>

                                        <td class="text-center" >
                                                <form action="" method="post">
                                                <input type="hidden" id="idEvento" name="idEvento" value="{{$evento->id}}">
                                                <button type="submit"><i class="fas fa-edit"></i></button>

                                                </form>
                                        </td>
                                        @endif
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $eventos->links() }}
                    </div>

                <div class="col-12 mt-3 text-center">
                    <h3>Fotos</h3>
                </div>
                <div class="col-12 mt-3">
                    <div class="col-12">

                        @if($fotos->isEmpty())
                            <h6>Ainda não possui fotos cadastrados!</h6>
                        @else
                        <div id="foto-homeOng" class="" >
                            @foreach ($fotos as $foto)
                                    <div class="fotos  box-img-animate ">
                                        <a href="{{url($foto->image)}}" class="galeria" data-lightbox="photos">
                                            <img src="{{url($foto->image)}}" title="{{$foto->name}}">
                                        </a>
                                    </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>

                </div>

            </div>
        </div>

  @endif

@endsection


