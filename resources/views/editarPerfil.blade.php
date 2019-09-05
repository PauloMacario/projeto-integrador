@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><p>Atualiza seus dados</p> </div>
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                        </div>
                    @endif

             <div class="container">
            
                    <form method="POST" action="">
                            @csrf
                    
                            <div class="form-group col-md-12 text-center">
                                <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
                            </div>
                            <div class="form-group col-md-12">
                                <h4 class="text-center"></h4>
                            </div>


                    
                           
                    
                                <div class="col-md-6 mb-3">
                                    <input id="name" type="text" class="form-control"  name="name" value="{{ Auth::user()->name  }}" placeholder="Nome" required  autofocus>
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                    <input id="email" type="email" class="form-control" name="email" value="{{  Auth::user()->email }}" placeholder="E-mail" required >
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input id="name" type="text" class="form-control"  name="occupation" value="{{  Auth::user()->occupation }}" placeholder="Ocupação">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input id="name" type="text" class="form-control"  name="biography" value="{{  Auth::user()->biography }}" placeholder="Biografia">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input id="name" type="text" class="form-control"  name="areas" value="{{ Auth::user()->areas  }}" placeholder="Areas de interesse">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input id="name" type="text" class="form-control"  name="district" value="{{  Auth::user()->district }}" placeholder="Bairro">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input id="name" type="text" class="form-control"  name="city" value="{{  Auth::user()->city }}" placeholder="Cidade">
                                </div>

                                
                            <div class=" mt-3">
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Atualizar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                
            </div>       
                       
            </div>
        </div>
    </div>
</div>

@endsection