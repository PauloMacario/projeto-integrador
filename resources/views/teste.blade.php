@extends('layouts.app')
@section('content')
@if(isset($evento) || isset($ong) )

{{$evento}}
{{$ong}}



@else 




@endif

<div class="container mt-5 mb-5">
        <table id="table">
                <thead>
                    <th>IMG</th>
                    <th>NOME</th>
                    <th>DESCRICAO</th>
                </thead>




            </table>

</div>



@endsection

