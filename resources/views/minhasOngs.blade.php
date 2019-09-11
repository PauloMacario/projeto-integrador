@extends('layouts.app')

@section('content')



<form>                                        
    <input id="id-perfil" type="hidden" value="{{Auth::user()->id}}">
</form>
 
 
<script>
    $(document).ready(function(){
        var id = $('#id-perfil').val()
        $.ajax({
                method:'GET',
                url: 'home/ong/admin'+id,                                             
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
</table>


@endsection