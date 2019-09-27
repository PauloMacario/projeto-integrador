@extends('layouts.app')

@section('content')

<section id="busca-section" class="projeto-section">
	<div class="container ">
		<div class="row text-center">
			<div class="col-12 col-md-6  text-center heading-section ml-auto mr-auto">
				<h3>Busque aqui uma ONG para ajudar</h3>
				<form>
					  <div class="form-row align-items-center">
						<div class="col-sm-9 my-1">
							<input type="text" id="busca" class="form-control" required placeholder="Digite aqui qualquer palavra">
						</div>
						<div class="col-sm-3 my-1">
							<button type="" id="btn-busca" class="btn btn-success">Buscar</button>
						</div>
					</div>
				</form>
			</div>
        </div>
        <div class="row text-center">
            <div class="box-busca">
                <div id="box-result" style="display:none; max-height:800px; overflow:scroll; ">
                    <table id="tabela" class="table table-striped table-responsive-sm my-ongs">
                        <thead>
                            <tr >
                                <th scope="col" class="text-center" width="">Logo</th>
                                <th scope="col" class="text-center" width="30%">Nome</th>
                                <th scope="col" class="text-center" width="">Descrição</th>
                                <th scope="col" class="text-center" width="">Bairro</th>
                            </tr>
                        </thead>
                        <tbody id="busca-resultado">

                        </tbody>
                        </table>
                    </div>
                </div>
        </div>
	</section>

@endsection
