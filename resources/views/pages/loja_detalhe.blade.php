@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div id="loja" class="row img-max-x">

		@foreach($produto as $item)
		<div class="container mb-5">

			<div class="col-12 row">
				<div class="col-12 col-sm-6 col-md-4 ">
					<img class="img-fluid" src="{{URL::asset($item->imagem)}}"/>
				</div>
				<div class="col-12 col-sm-6 col-md-8 ">
					<h2>{{$item->nome}}</h2>
					<p class="mb-0"><small>{{$item->autor}}</small></p>
					<p class="price">R$<big>{{$item->valor}}</big></p>
					<a href="{{url('/addprodutocarrinho/'.$item->id)}}" class="btn btn-primary">Adicionar ao Carrinho</a>
				</div>
			</div>

		</div>

		@endforeach

		<div class="col-12">
			<hr>
		</div>

		<div class="container my-5">
			<div class="outros-produtos row m-0 img-max-x">
				<h4>Outros Produtos</h4>
				<div style="background-color: gray;width: 100%;height: 2px;"></div>
				@foreach($produtoextras as $item)
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

	</div>

</div>
@stop