@extends('layouts.app')
@section('content')



<section class="box-cadastro">
<form action="{{ asset('/home/novaOng/salvar') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-row ">
            <div class="form-group col-md-12">
                <h4 class="text-center">Crie uma Ong</h4>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
            <input type="hidden" class="form-control" id="id" name="id" value="{{$user->id}}">
            </div>
            <div class="form-group col-md-8">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Ong" required>
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="segmento" name="segmento" placeholder="Segmento" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="descrição" required>
            </div>
            <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="CEP" name="CEP" placeholder="CEP" required>
            </div>
            <div class="form-group col-md-8">
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required>
            </div>
        </div>
        <div class="form-row ">
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
            </div>
            <div class="form-group col-md-2">
                <input type="text" class="form-control" id="uf" name="uf" placeholder="Estado" required>
            </div>
        </div> 
        <div class="form-row ">
           
            <div class="form-group col-md-12">
                <label for="imagem">Imagem</label> 
                <input type="file" class="form-control" id="imagem" name="imagem">
            </div>
        </div>
       
        
        <div class="form-row ">
            <div class="form-group col-12  ">
                <button type="submit" class="btn btn-success btn-lg btn-block">Gravar</button>
            </div>

        </div>
    </form>

   

</section>


@endsection