@extends('layouts.master')
@section('content')



<section class="box-login">
    <form>
        <div class="form-row ">

        </div>
        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <img src="images/logo_2.png" style="width:50px; height:50px;" alt="">
            </div>
            <div class="form-group col-md-12">
                <h4 class="text-center">Login</h4>
            </div>
            <div class="form-group col-md-12">
                <!--  <label for="nome">Nome</label> -->
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group col-md-12">
                <!-- <label for="sobrenome">Sobrenome</label> -->
                <input type="text" class="form-control" id="sobrenome" placeholder="Digite seu sobrenome">
            </div>
            <div class="form-group col-md-12">
                <a href="#">Esqueci minha senha.</a>
            </div>
        </div>



        <div class="form-row ">
            <div class="form-group col-12  ">
                <button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
            </div>
            <a href="cadastro">Cadastre-se</a>

        </div>
    </form>
</section>



@endsection