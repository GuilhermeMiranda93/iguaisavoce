@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div id="loja" class="row img-max-x">

		@foreach($produto as $item)
		<div class="container mb-4">

			<div class="col-12 row">
				<div class="col-12 col-sm-6 col-md-4 ">
					<img class="img-fluid" src="{{URL::asset($item->imagem)}}"/>
				</div>
				<div class="col-12 col-sm-6 col-md-8 ">
					<h2>{{$item->nome}}</h2>
					<p class="mb-0"><small>{{$item->autor}}</small></p>
					<p class="price">R$<big>{{$item->valor}}</big></p>
					<a href="{{url('/shopping/'.$item->id)}}" class="btn btn-primary">Adicionar ao Carrinho</a>
				</div>
			</div>

		</div>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>{{$item->descricao}}</p>
				
					<h2>Detalhes do produto</h2>
					<ul>
						<li><strong>Formato:</strong> {{$item->largura}}cm X {{$item->altura}}cm X {{$item->profundidade}}cm</li>
						<li><strong>Peso:</strong> {{$item->peso}}g</li>
					</ul>
				</div>
			</div>
		</div>

		@endforeach

	</div>

</div>
@stop