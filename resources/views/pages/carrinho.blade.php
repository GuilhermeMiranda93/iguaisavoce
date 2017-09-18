@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8">


	<div id="loja" class="img-max-x">

		<div id="loading">
			<div>
				<img src="{{URL::asset('img/loading.gif')}}" alt="Carregando...">
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
					<td>{{$item->nome}}</td>
					<td class="text-center">
						<input class="text-center numberinput" id="qtd{{$loop->index}}" min="1" type="number" name="quantidade" value="1" required>
					</td>
					<td class="text-center valorcarrinho" value="{{$item->valor}}" id="valor{{$loop->index}}">R$ {{number_format($item->valor, 2, ',', '.')}}</td>
					<td class="text-center">
						<a href="{{url('/carrinho/removerprodutocarrinho/'.$item->id)}}" title="Excluir"><i class="fa fa-close"></i></a>
					</td>
				</tr>

				@endforeach

				<tr class="table-warning">
					<td colspan="2">Frete</td>
					<td colspan="2" class="text-right" id="frete" value="0">R$ 0</td>
				</tr>

				<tr class="table-success">
					<td colspan="2">Valor Total</td>
					<td colspan="2" class="text-right" id="valorfinal"></td>
				</tr>
			</tbody>

		</table>


		<form class="mb-4">
			{{csrf_field()}}
			<div class="form-group">
				<input type="number" class="form-control" name="sCepDestino" id="destino" placeholder="Digite seu CEP">
				<small>Somente números</small>
			</div>

			<input type="text" name="nCdServico" value="41106" placeholder="Serviço de envio" hidden>

			<fieldset class="form-group">
				<legend>Escolha a opção de envio</legend>
				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="optionsRadios" id="servico1" value="40010" checked>
						SEDEX
					</label>
				</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="optionsRadios" id="servico2" value="41106">
						PAC
					</label>
				</div>

			</fieldset>

			<input type="text" name="nVlPeso" value="0.100" id="peso" placeholder="Peso" hidden>
			<input type="number" name="nVlComprimento" value="25" id="comprimento" placeholder="Comprimento" hidden>
			<input type="number" name="nVlAltura" value="30" id="altura" placeholder="Altura" hidden>
			<input type="number" name="nVlLargura" value="25" id="largura" placeholder="Largura" hidden>

		</form>

		<button class="btn btn-primary mb-4" id="calcular_frete">Calcular Frete</button>
		<button class="btn btn-primary mb-4" id="finalizar_compra">Finalizar compra</button>

	</div>

</div>
@stop