@extends('painel/painel')
@section('content')
<div id="conteudo" class="conteudo painel col-md-10">

	<div class="container">

		<div class="row justify-content-center">
			<div class="col-md-8">
				<h3>Novo Produto</h3>
				<form enctype="multipart/form-data" action="/painel/produto/sav" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="titulo_input">Título</label>
						<input name="nome" type="text" class="form-control" id="titulo_input">
					</div>
					<div class="form-group">
						<label for="imagem_input">Carregar Imagem</label>
						<input name="imagem" accept="image/*" type="file" class="form-control-file" id="imagem_input" aria-describedby="fileHelp">
						<img class="" id="file-upload" src="../img/sem-imagem.jpg" />
					</div> 
					<div class="form-group">
						<label for="link_input">Descrição</label>
						<textarea name="descricao" type="text" class="form-control" id="link_input"></textarea> 
					</div> 
					<div class="form-group">
						<label for="valor_input">Valor</label>
						<input name="valor" type="number" class="form-control" id="valor_input" placeholder="R$">
					</div>
					<div class="form-group">
						<label for="autor_input">Autor</label>
						<input name="autor" type="text" class="form-control" id="autor_input">
					</div> 
					<div class="form-group row">

						<div class="col-6 col-md-3">
							<label for="largura_input">Largura</label>
							<input name="largura" type="number" class="form-control" id="largura_input" placeholder="cm">
						</div>
						<div class="col-6 col-md-3">
						<label for="altura_input">Altura</label>
							<input name="altura" type="number" class="form-control" id="altura_input" placeholder="cm">
						</div>
						<div class="col-6 col-md-3">
							<label for="profundidade_input">Profundidade</label>
							<input name="profundidade" type="number" class="form-control" id="profundidade_input" placeholder="cm">
						</div>
						<div class="col-6 col-md-3">
							<label for="peso_input">Peso</label>
							<input name="peso" type="number" class="form-control" id="peso_input" placeholder="gramas">
						</div>
						
						<small class="form-text text-muted">Preencha os dados para cálculo de frete.</small>
					</div>                    

					<button id="new" type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Novo</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Salvar</button>
					
				</form>
			</div>
		</div>



		<div class="row salvos-header">

			<div class="col-md-1 text-center">
				<i class="fa fa-navicon fa-2x" aria-hidden="true"></i>
			</div>
			<div class="col-md-8">
				<h4>Título</h4>
			</div>
			<div class="col-md-3 text-center">
				<h4>Opções</h4>
			</div>
		</div>

		@foreach($produto as $item)
		<div class="row salvos">
			<div class="col-md-1 text-center">
				<p>1</p>
			</div>
			<div class="col-md-8">
				<p>{{$item->nome}}</p>
			</div>
			<div class="col-md-3 text-center">
				@if($item->visivel == 1)
				<a href="{{url('/vis/'.$item->id)}}" title="Visível"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
				@else
				<a href="{{url('/vis/'.$item->id)}}" title="Invisível"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></a>
				@endif
				<a href="{{url('/del/'.$item->id)}}" title="Excluir"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
				<a href="{{url('/edit/'.$item->id)}}" title="Editar"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
		@endforeach

	</div>

</div>
@stop