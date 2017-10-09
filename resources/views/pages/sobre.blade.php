@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div class="sobre img-max-x">

		@foreach($texto as $sobre)
		<div class="row mb-3">
			<div class="col-12">
				<h4 class="relacionamentos">{{$sobre->titulo}}</h4>
				<div style="background-color: #C95959;width: 100%;height: 6px;"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-justify">
				{!! $sobre->texto !!}
			</div>
		</div>
		@endforeach


	</div>

</div>
@stop