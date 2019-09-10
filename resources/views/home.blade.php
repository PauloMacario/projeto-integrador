@extends('layouts.app')

@section('content')

<div class="">
   {{--  <div class=""> --}}
        <div class="col-md-12">
            <div class="card">
         
                <?php 
               /*  echo "<pre>";
                    var_dump(Auth::user());
                    exit; */

                    ?>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                        </div>
                    @endif

                    <section class="container-fluid perfil-user">
                            <div class=" box-perfil">   
                                <div class="container-fluid emp-profile">
                                   
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="profile-img text-center">
                                                 @if(Auth::user()->avatar == NULL)
                                                    <img src="{{url('images/avatar-default.png')}}" alt=""  title="Adicione uma foto">
                                                 @else
                                                    <img src="{{url(Auth::user()->avatar)}}" alt="" title="Adicione uma foto">

                                                 @endif

                                                </div>
                                               
                                            </div>
                                            <div class="col-md-8">

                                                <div class="profile-head">
                                                    <form>
                                                       
                                                        <input id="id-perfil" type="hidden" value="{{Auth::user()->id}}">
                                                    </form>
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
                                                        <a href="{{url('home/editar')}}" class="btn btn-secondary">Alterar Perfil</a>
                                                    </div>
                                                    <div class="text-center mt-5">    
                                                        <a href="{{url('ongs/adicionar')}}" class="btn btn-warning">Criar Ong</a> 
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- <div class="col-md-4">
                        
                                            </div>    -->     
                                            <div class="col-md-8">

                                                    <div class="col-12 mt-3 text-center">
                                                        <h3>Ongs que acompanho.</h3> 
                                                    </div>  

                                                 <div class="col-12 mt-3"> 
                                                    <script>
                                                        $(document).ready(function(){

                                                            var id = $('#id-perfil').val()
                                                            console.log(id)
                                                            $.ajax({
                                                                method:'GET',
                                                                url: 'home/ong/'+id,
                                                               
                                                              
                                                                           
                                                                success: function(response){
                                                                            for(var i = 0 ; i < response.length; i++){
                                                                                var imagem = response[i].image  
                                                                                var nome = response[i].name  
                                                                                var descricao = response[i].description   
                                                                                $('#tabela').append('<tr><td><img src="'+imagem+'"></td> <td>'+nome+'</td><td>'+descricao+'</td></tr>')

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
                                                    </table>
    

                                                            @if(isset($user))
                                                            ssss

                                                           {{--  <table class="table">
                                                                <tbody>
                                                            
                                                            @foreach ($user as $item)
                                                                <tr>
                                                                   
                                                                    <td> <img src="{{url($item->image)}}" alt="" title="{{$item->name}}" widh="80px" height="80px"></td>
                                                                    <td> {{$item->name}}</td>
                                                                    <td> {{$item->description}}</td>
                                                                 
                                                                    
                                                                </tr>
                                                            @endforeach
                                                                </tbody>
                                                            </table> --}}

                                                            




                                                            @endif
                                                            
                                                        
                                                    </div>
                                                   {{--  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                            Todos eventos
                                                    </div> --}}
                                                    
                                                </div>
                                            </div>
                                        </div>
                                             
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
  {{--   </div> --}}
</div>



@endsection
