@extends('painel/painel')
@section('content')
<div id="conteudo" class="conteudo painel col-md-10">

	<div class="container">

		<div class="row justify-content-center">
			<div class="col-md-8">
				<h3>Editar Assunto</h3>
				<form enctype="multipart/form-data" action="/painel/sobre/sav" method="POST">
				{{csrf_field()}}
				@foreach($texto as $txt)
					<div class="form-group">
						<label for="titulo_input">Título</label>
						<input name="titulo" type="text" class="form-control" value="{{$txt->titulo}}" id="titulo_input">
					</div>

					<div class="form-group">
						<label for="froala-editor">Texto</label>
						<textarea class="form-control" id="texto_input" rows="3">{!!$txt->texto!!}</textarea>
					</div>

					<textarea name="texto" hidden id="preview"></textarea>
					@endforeach
					<button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Salvar</button>

				</form>
			</div>
		</div>
	</div>

</div>
@stop