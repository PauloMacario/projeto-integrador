@extends('layouts.app')

@section('content')
<div class="container">
    <div class="box-editar">   
        <form action="/home/perfil-ong-atualizar/{{$ong->id}}" enctype="multipart/form-data" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group col-md-12 text-center mt-4">
                <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
            </div>
            <div class="form-group col-md-12">
                <h4 class="text-center">Atualize seus dados.</h4>
            </div>
            <div class="form-group col-md-12">
                <div class="form-row">
                  
                       
                        <input id="id" type="hidden" class="form-control-sm form-control" id="id" name="id" value="{{Auth::user()->id}}" >
                     
                    <div class="col-12 col-md-6" >
                        <label for="name" >Nome:</label>
                        <input id="name" type="text" class="form-control-sm form-control" id="name" name="nome" value="{{$ong->name}}"  required  autofocus>
                    </div>                            
                    <div class="col-12 col-md-6 mb-3">
                        
                        <label for="segmento">Segmento</label>
                        <select  class="form-control-sm form-control" id="segmento" name="segmento" value="">
                            <option selected>{{$ong->segment}}</option>
                            @foreach ($segmentos as $segmento)
                            <option >{{$segmento->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div> 
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="descricao">Descrção</label>
                        <textarea class="form-control-sm form-control" id="descricao" name="descricao" placeholder="max 500 caracteres ...">{{$ong->description}}</textarea>
                    </div>
                </div>
            </div>   
            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="col-12 col-md-4">
                        <label for="bairro">Email</label>
                        <input type="email" class="form-control-sm form-control" id="email" name="email" value="{{$ong->email}}" >
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="phone1">Telefone 1</label>
                        <input type="text" class="form-control-sm form-control" id="phone1" name="phone1" value="{{$ong->phone1}}" >
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="phone2">Telefone 2</label>
                        <input type="text" class="form-control-sm form-control" id="phone2" name="phone2" value="{{$ong->phone2}}" >
                    </div>
                </div> 
            </div>     

            <div class="form-group col-md-12">
                <div class="form-row">
                    <div class="col-12 col-md-4">
                        <label for="CEP">CEP:</label>
                        <input type="text" class="form-control-sm form-control" id="CEP" name="CEP">
                    </div>
                    <div class="col-12 col-md-8">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control-sm form-control" id="endereco" name="endereco" value="{{$ong->address}}">
                    </div>   
                </div>
            </div>
            <div class="form-group col-md-12">             
                <div class="form-row">
                    <div class="col-12 col-md-5 mt-2">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control-sm form-control" id="bairro" name="bairro" value="{{$ong->district}}" >
                    </div>
                    <div class="col-12 col-md-5 mt-2">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control-sm form-control" id="cidade" name="cidade" value="{{$ong->city}}" >
                    </div>
                    <div class="col-12 col-md-2 mt-2">
                        <label for="uf">Estado</label>
                        <input type="text" class="form-control-sm form-control" id="uf" name="uf" value="{{$ong->uf}}" >
                    </div>
                </div> 
            </div>    
            <div class="form-group col-md-12"> 
                <div class="form-row">  
                    <div class="col-12 col-md-6"> 
                        <label for="site1">Site 1</label>
                        <input type="text" class="form-control-sm form-control" id="site1" name="site1" value="{{$ong->website1}}">
                    </div>
                    <div class="col-12 col-md-6">     
                        <label for="site2">Site 2</label>
                        <input type="text" class="form-control-sm form-control" id="site2" name="site2" value="{{$ong->website2}}">
                    </div>    
                </div>    
            </div>
            <div class="form-group col-md-12"> 
                <div class="form-row"> 
                    <div class="col-12 col-md-6"> 
                        <label for="site3">Site 3</label>
                        <input type="text" class="form-control-sm form-control" id="site3" name="site3" value="{{$ong->website3}}" >
                    </div>
                    <div class="col-12 col-md-6">         
                        <label for="site4">Site 4</label>
                        <input type="text" class="form-control-sm form-control" id="site4" name="site4" value="{{$ong->website4}}" >
                    </div>
                </div>    
            </div>

            <div class="form-group col-md-12 mt-3">
                <div class="custom-file mt-3">
                    <input type="file" class="custom-file-input  id="imagem" name="imagem">
                    <label class="custom-file-label " for="">Escolha uma foto...</label>                                
                </div>
            </div>
            <div class="form-group col-md-12 mt-5" > 
                <div class="form-row"> 
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Atualizar') }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12"> 
                <div class="form-row"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                        </div>
                    @endif
                </div>
            </div>
        </div>         
</div>



@endsection