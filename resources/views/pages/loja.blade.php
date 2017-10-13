@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div id="loja" class="row img-max-x">

		@foreach($produto as $item)
		<div class="card col-12 col-md-4 p-0">
			<img class="card-img-top" src="{{URL::asset($item->imagem)}}" alt="Card image cap">
			<div class="card-block my-2 text-center">
				<h4 class="card-title">{{$item->nome}}</h4>
				<p class="card-text text-muted text-center">R$ {{$item->valor}}</p>
				<a href="{{url('/shopping/'.$item->id)}}" class="text-muted text-center">+ Detalhes</a>
			</div>
			<div class="p-0 my-2 text-center">
				<a href="{{url('/addprodutocarrinho/'.$item->id)}}" class="btn btn-primary text-center">Adicionar ao Carrinho</a>
			</div>
		</div>

		@endforeach

	</div>

</div>
@stop