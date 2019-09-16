@extends('layouts.app')

@section('content')


@if(isset($ongs))
sssss
@else 
não
@endif

<div class=""> 
    <div class="col-md-12">
        <div class="card">
        @if (session('status'))
            <div class="warning warning-success" role="warning">
                {{ session('status') }}
                        
            </div>
        @endif
            <section class="container-fluid perfil-user">
                <div class=" box-perfil">   
                    <div class="container-fluid emp-profile">
                        <div class="row bg-success">
                            <div class="col-md-4 bg-warning">
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
                            <div class="col-md-8 bg-secondary">
                                <div class="profile-head bg-warning">

                                    <p class="text-center"><span>nome</span></p>
                                    <p class="text-center"><span>Segmento</span></p>
                                    <p class="text-center"><span> Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição Descrição</span></p>
                                    
                                    <p class="text-center"><span><i class="fas fa-globe-africa icone-perfil"></i> www.teste.com.br</span></p>
                                    <p class="text-center"><span><i class="fas fa-globe-africa icone-perfil"></i> www.teste.com.br</span></p>
                                    <p class="text-center"><span><i class="fas fa-globe-africa icone-perfil"></i> www.teste.com.br</span></p>
                                    <p class="text-center"><span><i class="fas fa-globe-africa icone-perfil"></i> www.teste.com.br</span></p>

                                    <form>                                        
                                        <input id="id-perfil" type="hidden" value="{{-- {{Auth::user()->id}} --}}">
                                    </form>
                                    <h4 class="text-center">{{-- {{ Auth::user()->name }} --}}</h4>
                                    <h5 class="text-center">{{-- {{ Auth::user()->occupation }} --}}</h5>
                                    
                                    <p class="proile-bio"> {{--  {{ Auth::user()->biography }} --}}</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row bg-danger">
                            <div class="col-md-4 bg-dark">
                                <div class="profile-work text-center">


                                

                                    <p><span><span><i class="fas fa-road icone-perfil"></i> </span>
                                        <span>Endereço</span></span>
                                    </p>
                                    <p><span><span><i class="fas fa-map-signs icone-perfil"></i> </span>
                                        <span>Bairro</span></span>
                                    </p>
                                    <p><span><span><i class="fas fa-map-marked-alt icone-perfil"></i> </span>
                                        <span>Cidade</span></span>
                                    </p>
                                    <p><span><span><i class="fas fa-phone-alt icone-perfil"></i></i> </span>
                                        <span>Fone</span></span>
                                    </p>
                                    <p><span><span><i class="fas fa-phone-alt icone-perfil"></i></i> </span>
                                        <span>Fone</span></span>
                                    </p>
                                    <p><span><span><i class="far fa-envelope icone-perfil"></i> </span>
                                        <span>Email</span></span>
                                    </p>




                                   
                                </div>
                            </div> 
                            <div class="col-md-8 bg-warning">
                                <div class="col-12 mt-3 text-center">
                                    <h3>Eventos</h3> 
                                </div>
                                    <div class="col-12 mt-3"> 
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
