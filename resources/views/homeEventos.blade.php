@extends('layouts.app')

@section('content')






<div class="col-md-12">
    <div class="card">
            <section class="container perfil-user box-event">
                    @if (session('sucess'))

                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            <strong>  {{ session('sucess') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    @endif
                <div class=" box-perfil ">
                    <div class="container emp-profile box-perfil-event">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center ">
                                <div class="profile-event-img text-center">
                                    <a href="">
                                        <img src="{{url($evento->image)}}" alt="" title="{{$evento->title}}">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="profile-event-box text-center">
                                        <span><h3>{{$evento->title}}</h3></span>
                                        <div class="event-description ">
                                            <p><span>{{$evento->description}}</span>
                                                <span></span>
                                        </p>
                                    </div>

                                    <p> <span><i class="fas fa-map-marker-alt icone-perfil mt-3"></i>{{$evento->address}}</span>

                                        -<span>{{$evento->district}} </span>
                                        -<span>{{$evento->city}} </span>


                                    </p>

                                    <p><span><i class="fas fa-calendar-alt icone-perfil mt-3"></i>{{$evento->date}}</span>
                                        <span></span>
                                    </p>

                                </div>
                            </div>
                        </div>



                        <div class="row  mt-3">
                            <div class="col-md-12 ">
                                <div class="col-12 text-center mt-3">
                                    @if(!$evento->users->isEmpty())


                                        @foreach($evento->users as $item)

                                            @if($item->pivot->id_user == Auth::user()->id)

                                            {{ $participante = 'Você selecionou este evento para participar.'}}


                                                    <form class="mt-3" action="{{url('evento/cancelar/participacao')}}" method="post">
                                                        @csrf {{method_field('DELETE')}}
                                                        <input type="hidden" name="idEvento" value="{{$evento->id}}">
                                                        <input type="hidden" name="idUser" value="{{Auth::user()->id}}">

                                                        <button class="btn btn-danger" type="submit" >Cancelar participação</button>
                                                    </form>
                                                 @break


                                                @endif

                                        @endforeach

                                        @endif
                                        @if(!isset($participante))
                                            <p class="mr-3"><a href="{{url('evento/'.$evento->id.'/confirmar/')}}/{{Auth::user()->id}}" class="btn btn-info">Participar</a></p>
                                        @endif



                                        {{--          @foreach ($evento->users as $item)
                                            @if($item->pivot->id_user == Auth::user()->id)
                                                            <p>Você selecionou este evento para participar. Quer cancelar ?</p>




                                            @break
                                                 <p class="mr-3"><a href="{{url('evento/'.$evento->id.'/confirmar/')}}/{{Auth::user()->id}}" class="btn btn-info">Participar</a></p>
                                                @endforeach
                                                @break
                                    @endif


                                        </div>
 --}}
                                        @if(isset($total))

                                        <div class="row">
                                            <div class="col-md-12 mt-3 ">
                                                <div class="text-center">
                                                    <p>Participante(s)</p>

                                                </div>
                                                <div class=" d-flex justify-content-center align-items-center">
                                                    <div id="participantes" class="d-flex justify-content-center align-items-center">
                                                        {{$total}}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="col-12 mt-3 d-flex justify-content-center align-items-center">

                                            <div class="text-center mt-2 col-md-2">
                                                <p><a href="{{url('homeOng')}}/{{$ong->id}}" class="btn-editar form-control">Voltar</a></p>

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
