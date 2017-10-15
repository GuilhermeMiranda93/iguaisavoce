@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8">


	<div id="loja" class="img-max-x">

		<div id="loading">
			<div>
				<img src="{{URL::asset('img/loader.gif')}}" alt="Carregando...">
			</div>
			
		</div>
		

		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th class="text-center">Quantidade</th>
					<th class="text-center">Valor</th>
					<th class="text-center"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($produto as $item)
				<tr>
					<td class="d-none">
						<input class="id_produto" value="{{$item->id}}" hidden>
					</td>
					<td>{{$item->nome}}</td>
					<td class="text-center">
						<input class="text-center numberinput" id="qtd{{$loop->index}}" min="1" type="number" name="quantidade" value="{{$item->qtdsession}}" required>
					</td>
					<td class="text-center valorcarrinho" value="{{$item->valor}}" id="valor{{$loop->index}}">R$ {{number_format($item->valor, 2, ',', '.')}}</td>
					<td class="text-center">
						<a href="{{url('/carrinho/removerprodutocarrinho/'.$item->id)}}" title="Excluir"><i class="fa fa-close"></i></a>
					</td>
				</tr>

				@endforeach

				<tr class="table-warning">
					<td colspan="2">Frete único para todo o Brasil</td>
					<td colspan="2" class="text-right" id="frete" value="10">R$ 10,00</td>
				</tr>

				<tr class="table-success">
					<td colspan="2">Valor Total</td>
					<td colspan="2" class="text-right" id="valorfinal"></td>
				</tr>
			</tbody>

		</table>

		<form id="comprar" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">

			<input type="hidden" name="code" id="code" value="" />

		</form>

		<button class="btn btn-primary mb-4" id="finalizar_compra">Finalizar compra</button>
		<a class="btn btn-primary mb-4" href="{{url('shopping')}}">Continuar comprando</a>

	</div>

</div>
@stop