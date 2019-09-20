@extends('layouts.app')

@section('content')

{{--  @if (isset($ong) && isset($admin))
     {{$admin}}
@else 
    não
@endif
 

 --}}


<div class=""> 
    <div class="col-md-12">
        <div class="card">
      
            <section class="container-fluid perfil-user">
                <div class=" box-perfil">   
                    <div class="container-fluid emp-profile">
                        <div class="row ">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <div class="profile-img text-center">
                                      <a href="#">
                                        @if(!isset($ong))
                                            <img src="{{url('images/avatar-default.png')}}" alt=""  title="Adicione uma foto">
                                        @else
                                            <img src="{{url($ong->avatar)}}" alt="" title="Adicione uma foto">
                                        @endif 
                                    </a>    
                                </div>
                                    
                            </div>
                            <div class="col-md-7">
                                <div class="profile-head mr-3">

                                    <h4 class="text-center"><span>{{$ong->name}}</span></h4>
                                    <h5 class="text-center"><span>{{$ong->segment}}</span></h5>
                                    <p class="text-center"><span>{{$ong->description}}</span></p>
                                   
                                    @if(isset($ong) && $ong->website1 != null)
                                        <p class="text-center"><span class="mr-5"><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website1}}" target="_blank">{{$ong->website1}}</a></span> <span class="mr-5"><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website2}}" target="_blank">{{$ong->website1}} </a></span></p>

                                        <p class="text-center"><span class="mr-5"><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website3}}" target="_blank">{{$ong->website1}}</a></span><span class="mr-5"><i class="fas fa-globe-africa icone-perfil"></i><a href="htpp://{{$ong->website4}}" target="_blank">{{$ong->website1}} </a></span></p>
                                        

                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-4 ">
                                <div class="profile-work text-center">


                                
                                 
                                    <p><span><span><i class="fas fa-road icone-perfil"></i> </span>
                                        <span>{{$ong->address}}</span></span>
                                    </p>
                                    <p><span><span><i class="fas fa-map-signs icone-perfil"></i> </span>
                                        <span>{{$ong->district}}</span></span>
                                    </p>
                                    <p><span><span><i class="fas fa-map-marked-alt icone-perfil"></i> </span>
                                        <span>{{$ong->city}}</span></span>
                                    </p>
                                    <p><span><span><i class="fas fa-map-marked-alt icone-perfil"></i> </span>
                                        <span>{{$ong->uf}}</span></span>
                                    </p>

                                    @if(isset($ong) && $ong->phone1 != null)
                                        <p><span><span><i class="fas fa-phone-alt icone-perfil"></i></i> </span>
                                            <span>{{$ong->phone1}}</span></span>
                                        </p>
                                        <p><span><span><i class="fas fa-phone-alt icone-perfil"></i></i> </span>
                                            <span>{{$ong->phone2}}</span></span>
                                        </p>
                                        <p><span><span><i class="far fa-envelope icone-perfil"></i> </span>
                                            <span>{{$ong->email}}</span></span>
                                        </p>
                                    @endif 
                                    @if ($admin == 1)
                                    
                                    <div class="text-center mt-5">
                                        <p><a href="{{url('home/perfil-ong-editar')}}/{{$ong->id}}" class="btn-editar">Alterar informações</a></p>	    
                                        <p><a href="{{url('home/evento-criar')}}" class="btn-editar">Criar Evento</a></p> 
                                    </div>
                                    @endif


                                   
                                </div>
                            </div> 
                            <div class="col-md-7">
                                <div class="col-12 mt-3 mr-3 text-center">
                                    <h3>Eventos</h3> 
                                </div>
                                    <div class="col-12 mt-3 mr-3"> 
                                      {{--   <script>
                                            $(document).ready(function(){
                                                var id = $('#id-perfil').val()
                                                $.ajax({
                                                        method:'GET',
                                                        url: 'home/ong/'+id,                                             
                                                            success: function(response){
                                                                for(var i = 0 ; i < response.length; i++){
                                                                    var avatar = response[i].avatar  
                                                                    var nome = response[i].name  
                                                                    var descricao = response[i].description   
                                                                    $('#tabela').append('<tr><td><img src="'+avatar+'"></td> <td>'+nome+'</td><td>'+descricao+'</td></tr>')

                                                                    }
                                                                }

                                                               
                                                            })
                                                        });
                                        </script>

                                      
                                        <table id="tabela" class="table table-striped table-responsive-sm my-ongs">
                                            <thead>
                                                <tr >
                                                    <th scope="col" class="text-center" width="25%">Logo</th>
                                                    <th scope="col" class="text-center" width="25%">Nome</th>
                                                    <th scope="col" class="text-center" width="50%">Descrição</th>
                                                </tr>
                                            </thead>  
                                            <tbody>
                                                
                                            </tbody>
                                        </table> --}}
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
