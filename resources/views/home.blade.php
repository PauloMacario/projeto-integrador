@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><p>Dashboard</p> <a href="home/editar" class="btn btn-primary ml-auto">Editar Perfil</a></div>
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                        </div>
                    @endif
                        <ul>
                            <li> {{ Auth::user()->id }} </li>
                            <li> {{ Auth::user()->name }} </li>
                            <li> {{ Auth::user()->email }} </li>
                            <li> {{ Auth::user()->occupation }} </li>
                            <li> {{ Auth::user()->biography }} </li>
                            <li> {{ Auth::user()->areas }} </li>
                            <li> {{ Auth::user()->district }} </li>
                            <li> {{ Auth::user()->city }} </li>
                            <li> {{ Auth::user()->avatar }} </li>
                        </ul>    

            </div>
        </div>
    </div>
</div>

@endsection
