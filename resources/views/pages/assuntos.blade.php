@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">

	<div class="row outros_assuntos assuntos">
		<div class="col-md-12">

			@php

			switch( $id ){
			case 1:
			echo '<h4 class="comportamento">Comportamento</h4>
			<div style="background-color: #8e44ad;width: 100%;height: 6px;"></div>';
			$categoria = 'comportamento';
			break;
			case 2:
			echo '<h4 class="cotidiano">Cotidiano</h4>
			<div style="background-color: #15A2FF;width: 100%;height: 6px;"></div>';
			$categoria = 'cotidiano';
			break;
			case 3:
			echo '<h4 class="relacionamentos">Relacionamentos</h4>
			<div style="background-color: #C95959;width: 100%;height: 6px;"></div>';
			$categoria = 'relacionamentos';
			break;
			case 4:
			echo '<h4 class="beleza">Beleza e Saúde</h4>
			<div style="background-color: #26BB91;width: 100%;height: 6px;"></div>';
			$categoria = 'beleza';
			break;
			default:
			echo '<h4 class="comportamento">Comportamento</h4>
			<div style="background-color: #8e44ad;width: 100%;height: 6px;"></div>';
			$categoria = 'comportamento';
			break;
		}

		@endphp


		@foreach($texto as $prop)
		<div class="row">
			<div class="col-md-3">
				<img src="{{url('img/'.$prop->arquivo)}}"/>
			</div>
			<div class="col-md-9 blog_resumo">
				<a href="{{URL::asset('assuntos/post/'.$prop->id)}}"><h5 class="{{$categoria}}">{{$prop->titulo}}</h5>
					<p>{{$prop->chamada}}</p>
					<p><small>Texto por: {{$prop->autor}}</small></p>
				</a>
			</div>
		</div>
		@endforeach

	</div>
</div>

</div>
@stop