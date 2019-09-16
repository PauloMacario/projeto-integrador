@extends('layouts.app')

@section('content')
<div class="container">
<form>                                        
    <input id="id-perfil" type="hidden" value="{{Auth::user()->id}}">
</form>


<script>
        $(document).ready(function(){
           
            var id = $('#id-perfil').val()
           
            $.ajax({
                    method:'GET',
                    url: '/home/minhas-ongs/admin/'+id,                                             
                        success: function(response){
                            for(var i =0 ; i< response.length ; i++){
                               
                               
                                for(var j =0 ; j< response[i].ongs.length ; j++){
                                 if(response[i].ongs[j].pivot.permission_level == 1){ 
                                    console.log(response[i].ongs[j].name)
                                  

                                  $('#tabela').append('<tr><td><img src="{{url('+response[i].ongs[j].avatar+')}}"></td> <td>'+response[i].ongs[j].name+'</td><td>'+response[i].ongs[j].description+'</td><td><a href="'+response[i].ongs[j].id+'" class="btn btn-info">Editar</a></td></tr>') 
                                  } 
                                }
                            }



                           /*  console.log(response[0].ongs[0].pivot.id_ong) */
                           console.log(response)
                              }
                        })
                    });
    </script>
  
  <table id="tabela" class="table table-striped  my-ongs">
      <thead>
          <tr >
              <th scope="" class="text-center" width="25%">Logo</th>
              <th scope="" class="text-center" width="25%">Nome</th>
              <th scope="" class="text-center" width="20%">Descrição</th>
              <th scope="" class="text-center" width="20%">Ações</th>
            </tr>
        </thead>  
        <tbody>
            
        </tbody>
    </table>
</div>
    
    
    @endsection