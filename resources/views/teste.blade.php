@extends('layouts.app')
@section('content')


<div class="container mt-5 mb-5">
 <?php
var_dump($ongs);
exit;

?>

   <ul>
        @foreach ($dados as $dado)
           
            
        @endforeach
    </ul>
</div>



@endsection