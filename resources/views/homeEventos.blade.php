@extends('layouts.app')

@section('content')




<div class=""> 
    <div class="col-md-12">
        <div class="card">
            <section class="container perfil-user box-event">
                <div class=" box-perfil">   
                    <div class="container-fluid emp-profile">
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
                                    <div class="col-12 col-md-12 text-center">
                                        
                                    <a href="{{url('home/ong/'.$ong->id.'/user/'.Auth::user()->id)}}" class="">
                                         <p>Publicação: <span class="badge badge-info">{{$ong->name}}</span></p> </p> 
                                    </a>
                                    </div>
                                    <div class="col-12 mt-3"> 
                                        
                                        
                                    </div>

                                </div>
                            </div>    
                        </div>                                            
                    </div>
               
            </section>                       
    </div>
</div>
@endsection
