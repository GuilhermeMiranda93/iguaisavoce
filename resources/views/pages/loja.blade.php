@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div id="loja" class="row img-max-x">

		@foreach($produto as $item)
		<div class="col-sm-12 col-md-12 col-lg-6 row">
			<div class="col-12 col-sm-6">
				<img class="img-fluid" src="{{URL::asset($item->imagem)}}"/>
			</div>
			<div class="col-12 col-sm-6">
				<h2>{{$item->nome}}</h2>
				<p class="mb-0"><small>{{$item->autor}}</small></p>
				<p class="price">R$<big>{{$item->valor}}</big></p>

				<a href="{{url('/addprodutocarrinho/'.$item->id)}}" class="btn btn-primary mb-4">Adicionar ao Carrinho</a>
				<a href="{{url('/shopping/'.$item->id)}}" class="btn btn-secondary mb-4">+ Detalhes</a>
			</div>
		</div>
		@endforeach

	</div>

</div>
@stop