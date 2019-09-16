@extends('layouts.app')

@section('content')
<div class="container">
  
                <div class="box-editar">   
                    <form action="/home/perfil-atualizar/{{ Auth::user()->id }}" enctype="multipart/form-data" method="post">
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
                                <div class="col-12 col-md-6" >
                                    <label for="name" >Nome:</label>
                                    <input id="name" type="text" class="form-control" id="name" name="nome" value="{{ Auth::user()->name  }}"  required  autofocus>
                                </div>                            
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="email">E-mail:</label>
                                    <input id="email" type="email" class="form-control" id="email" name="email" value="{{  Auth::user()->email }}"  required >
                                </div>
                            </div>
                        </div> 
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <div class="col-12 col-md-6">
                                    <label for="occupation">Ocupação:</label>
                                    <input id="name" type="text" class="form-control" id="ocuppation" name="ocupacao" value="{{  Auth::user()->occupation }}" >
                                </div>                            
                                <div class="col-md-6 mb-3">
                                    <label for="biography">Áreas de interesses:</label>
                                    <input id="name" type="text" class="form-control" id="areas" name="areas" value="{{ Auth::user()->areas  }}" >
                                </div>
                            </div>
                        </div>   
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <div class="col-12 col-md-4">
                                    <label>CEP:</label>
                                    <input type="text" class="form-control" id="CEP" name="CEP">
                                </div>   
                                <div class="col-12 col-md-4">
                                    <label>Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="{{  Auth::user()->district }}" >
                                </div>       
                                <div class="col-12 col-md-4">
                                    <label>Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{  Auth::user()->city }}" >
                                </div>
                                <div class="">
                                    <input type="hidden" class="form-control" id="endereco" name="endereco" value="">
                                </div>
                                <div class="">
                                    <input type="hidden" class="form-control" id="uf" name="uf" value="">
                                </div>
                            </div>
                        </div> 
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <div class="col-12">
                                    <label for="biography">Biografia:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="biografia" rows="3">{{  Auth::user()->biography }}</textarea>                                       
                                </div>       
                            </div>
                        </div> 
                        <div class="form-group col-md-12">
                            <div class="form-row">
                                <div class="col-12">
                                    <label for="imagem">Imagem:</label>
                                    <input type="file" class="form-control-file" id="imagem" name="imagem">
                                </div>       
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-5">
                            <div class="form-row">                         
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Atualizar') }}
                                    </button>
                                </div>
                            </div>
                        </div>                         
                        <div class="form-group col-md-12 mt-5">    
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                
                                </div>
                            @endif
                        </div>    
                    </form>
                </div>     
         
</div>



@endsection