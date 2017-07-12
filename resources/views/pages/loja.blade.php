@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div class="row loja img-max-x">

		@foreach($produto as $produtos)
		<div class="col-md-6">
			<div class="card">
				<h3 class="card-header">{{$produtos->titulo}}</h3>
				<div class="card-block">
					<p class="card-text">{{$produtos->chamada}}</p>
					<audio controls>
						<source src="audio/{{$audio->arquivo}}" type="audio/mpeg"/>
						Your browser does not support the audio element.
					</audio>
				</div>
			</div>
		</div>
		@endforeach

		<div class="col-md-6 row">
			<div class="col-4">
				<img class="img-fluid" src="{{URL::asset('img/livro.jpg')}}"/>
			</div>
			<div class="col-8">
				<h2>Título</h2>
				<p><small>Autor</small></p>
				<p class="price">R$ 17,90</p>
				<a href="#" class="btn btn-primary">COMPRAR</a>
			</div>
		</div>

		<div class="col-md-6 row">
			<div class="col-4">
				<img class="img-fluid" src="img/livro.jpg"/>
			</div>
			<div class="col-8">
				<h2>Título</h2>
				<p><small>Autor</small></p>
				<p class="price">R$ 17,90</p>
				<a href="#" class="btn btn-primary">COMPRAR</a>
			</div>
		</div>


	</div>

</div>
@stop