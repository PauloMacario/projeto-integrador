@extends('layouts.app')
@section('content')




<section class="box-cadastro-ong">
<form action="/home/ong-salvar/{{ Auth::user()->id }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group col-md-12 text-center">
                <img src="{{ asset('images/logo_2.png')}}" style="width:50px; height:50px;" alt="">
            </div>
            <div class="form-group col-md-12">
                    <h4 class="text-center">Crie uma Ong</h4>
            </div>
    
        <div class="form-row">
               {{--  <div class="form-group col-md-8">
                <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                </div> --}}
            <div class="form-group col-md-8">
                <label for="nome">Nome da Ong</label>
                <input type="text" class="form-control" id="nome" name="nome"  required>
            </div>
            <div class="form-group col-12 col-md-4">
                {{-- <input type="text" class="form-control" id="segmento" name="segmento" placeholder="Segmento" required> --}}

                <label for="segmento">Segmento</label>
                <select class="form-control" id="segmento" name="segmento" value="">
                    <option selected>...</option>
                  @foreach ($segmentos as $segmento)
                 <option >{{$segmento->name}}</option>
                  @endforeach
                </select>



            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="descricao">Descrção</label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="max 500 caracteres ..."  required ></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="nome">CEP</label>
                <input type="text" class="form-control" id="CEP" name="CEP"  required>
            </div>
            <div class="form-group col-md-8">
                <label for="nome">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco"  required>
            </div>
        </div>
        <div class="form-row ">
            <div class="form-group col-md-5">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro"  required>
            </div>
            <div class="form-group col-md-5">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade"  required>
            </div>
            <div class="form-group col-md-2">
                <label for="uf">Estado</label>
                <input type="text" class="form-control" id="uf" name="uf" required>
            </div>
        </div> 
        <div class="form-row ">
                <div class="form-group col-md-12 mt-3">
                        <div class="custom-file mt-3">
                            <input type="file" class="custom-file-input" id="imagem" name="imagem">
                            <label class="custom-file-label" for="">Escolha uma foto...</label>                                
                        </div>
                    </div>
            </div>    
            <div class="form-row mb-4">
                <div class="text-center preview-text "style="">
                    <h6 >Pré-Visualização</h6>
                </div>
                <div class="preview-img d-flex justify-content-center">
                   <div>
                       <img src="{{url('images/preview-default.png')}}" alt="" title="Pré-Visualização" id="preview">
                   </div>
                  
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