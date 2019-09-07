@extends('layouts.app')
@section('content')


<!--  =========================== Seção Faq perguntas e respostas - (INÍCIO)  ==========================  -->
<section class="">
		<div id="faq" class="">
			<div class="container container-faq">	
			<div class="titulo">
					<div class="col-md-12 col-md-offset-12 text-center heading-section ">
						<h3>Perguntas mais frequentes:</h3>
					</div>
			</div>	
				<div id="accordion">
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link link-faq" data-toggle="collapse" href="#collapseOne">
									Quem somos?
							</a>
						</div>
						<div id="collapseOne" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Esta é uma plataforma onde pessoas podem encontrar facilmente uma instituição ou uma ação social em que esteja interessado em participar.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseTwo">
									Qual o custo de participar?
							</a>
						</div>
						<div id="collapseTwo" class="collapse" data-parent="#accordion">
							<div class="card-body">
									A Páginas do Bem é uma plataforma gratuita e fica a critério do usuário a doação e a participação em instituições que solicitem alguma forma de contribuição financeira.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseThree">
							Posso participar em quantas ações?
							</a>
						</div>
						<div id="collapseThree" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Você é livre para participar em quantas ações quiser! Mas lembre-se de organizar sua agenda para não esquecer ou marcar duas ações no mesmo dia!
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
								<strong >Sou uma instituição e gostaria de divulgar
							</a>
						</div>
						<div id="collapseFour" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Estamos abertos a divulgar a sua página e/ou ação sem custo! Basta clicar na opção <em>Sou instituição</em>.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link " data-toggle="collapse" href="#collapseFive">
								Pergunta #5
							</a>
						</div>
						<div id="collapseFive" class="collapse" data-parent="#accordion">
							<div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

<!--  =========================== Seção Faq perguntas e respostas - (FINAL)  ==========================  -->

@endsection		