@extends('painel/painel')
@section('content')
<div id="conteudo" class="conteudo painel col-md-10">

	<div class="container">

		<div class="row justify-content-center">
			<div class="col-md-8">
				<h3>Editar Assunto</h3>
				<form enctype="multipart/form-data" action="/painel/assunto/sav" method="POST">
				{{csrf_field()}}
				@foreach($texto as $txt)
					<div class="form-group">
						<label for="titulo_input">{{$txt->titulo}}</label>
						<input name="titulo" type="text" class="form-control" id="titulo_input">
					</div>
					<div class="form-group">
						<label for="autor_input">{{$txt->autor}}</label>
						<input name="autor" type="text" class="form-control" id="autor_input" value="Guilherme" >
					</div>
					<div class="form-group">
						<label for="chamada_input">{{$txt->chamada}}</label>
						<textarea name="chamada" class="form-control" id="chamada_input" rows="3">{{$txt->chamada}}</textarea>
					</div>
					<div class="form-group">
						<label for="imagem_input">Carregar Imagem</label>
						<input name="arquivo" accept="image/*" type="file" class="form-control-file" id="imagem_input" aria-describedby="fileHelp">
						<img class="" id="file-upload" src="../img/{{$txt->arquivo}}" />
					</div>

					<div class="form-group">
						<label for="imagem_input">Categoria</label>
						<select selected="{{$txt->categoria}}" name="categoria" class="form-control">
							<option value="1">Comportamento</option>
							<option value="2">Cotidiano</option>
							<option value="3">Relacionamento</option>
							<option value="4">Beleza e Saúde</option>
						</select>
					</div>

					<div class="form-group">
						<label for="froala-editor">Texto</label>
						<textarea class="form-control" id="texto_input" rows="3">{!!$txt->texto!!}</textarea>
					</div>

					<textarea name="texto" hidden id="preview"></textarea>
					@endforeach
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

		@foreach($texto_salvos as $txt)
		<div class="row salvos">
			<div class="col-md-1 text-center">
				<p>1</p>
			</div>
			<div class="col-md-8">
				<p>{{$txt->titulo}}</p>
			</div>
			<div class="col-md-3 text-center">
				@if($txt->visivel == 1)
				<a href="{{url('/vis/'.$txt->id)}}" title="Visível"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
				@else
				<a href="{{url('/vis/'.$txt->id)}}" title="Invisível"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></a>
				@endif
				<a href="{{url('/del/'.$txt->id)}}" title="Excluir"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
				<a href="{{url('/edit/'.$txt->id)}}" title="Editar"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
		@endforeach

	</div>

</div>
@stop