@extends('base')
@section('content')

<div id="conteudo" class="conteudo col-md-8 row ">



	<!-- Aqui começa os blogs -->

	<div class="col-xs-12 col-xl-3 nested-items">

		@foreach($texto as $texto_home)

		<a href="{{URL::asset('assuntos/post/'.$texto_home->id)}}" class="blog_preview mb-4">
			<div class="card item-1">
				<div class="div-img">
					<img class="card-img-top img-max-x" src="img/{{$texto_home->arquivo}}" alt="Card image cap"/>
				</div>
				<div class="card-block">
					<h4 class="card-title cotidiano">{{$texto_home->titulo}}</h4>
					<p class="card-text">{{$texto_home->chamada}}</p>
				</div>
			</div>
		</a>
		@endforeach

	</div>



	<div class="col-xs-12 col-xl-9">
		@foreach($texto2 as $texto_home)
		<a href="{{URL::asset('assuntos/post/'.$texto_home->id)}}" class="blog_preview">
			<div class="card item-3">
				<div class="div-img"><img class="card-img-top img-max-x" src="img/{{$texto_home->arquivo}}" alt="Card image cap"/></div>
				<div class="card-block">
					<h4 class="card-title comportamento">{{$texto_home->titulo}}</h4>
					<p class="card-text">{{$texto_home->chamada}}</p>
				</div>
			</div>
		</a>
		@endforeach
	</div>

	<!-- Aqui termina os blogs -->






	<div class="row outros_assuntos">


		<div class="col-md-12">

			<h4 class="comportamento">Comportamento</h4>
			<div style="background-color: #8e44ad;width: 100%;height: 6px;"></div>
			@foreach($texto_comportamento as $texto_home)
			<div class="row">
				<div class="col-md-3">
					<img src="img/{{$texto_home->arquivo}}"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="comportamento">{{$texto_home->titulo}}</h5>
						<p>{{$texto_home->chamada}}</p>
						<p><small>{{$texto_home->autor}}</small></p>
					</a>
				</div>
			</div>
			@endforeach


			<h4 class="cotidiano">Cotidiano</h4>
			<div style="background-color: #15A2FF;width: 100%;height: 6px;"></div>
			@foreach($texto_cotidiano as $texto_home)
			<div class="row">
				<div class="col-md-3">
					<img src="img/{{$texto_home->arquivo}}"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="cotidiano">{{$texto_home->titulo}}</h5>
						<p>{{$texto_home->chamada}}</p>
						<p><small>{{$texto_home->autor}}</small></p>
					</a>
				</div>
			</div>
			@endforeach

			<h4 class="relacionamentos">Relacionamento</h4>
			<div style="background-color: #EB5055;width: 100%;height: 6px;"></div>
			@foreach($texto_relacionamento as $texto_home)
			<div class="row">
				<div class="col-md-3">
					<img src="img/{{$texto_home->arquivo}}"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="relacionamentos">{{$texto_home->titulo}}</h5>
						<p>{{$texto_home->chamada}}</p>
						<p><small>{{$texto_home->autor}}</small></p>
					</a>
				</div>
			</div>
			@endforeach

			<h4 class="beleza">Beleza e Saúde</h4>
			<div style="background-color: #26BB91;width: 100%;height: 6px;"></div>
			@foreach($texto_beleza as $texto_home)
			<div class="row">
				<div class="col-md-3">
					<img src="img/{{$texto_home->arquivo}}"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="beleza">{{$texto_home->titulo}}</h5>
						<p>{{$texto_home->chamada}}</p>
						<p><small>{{$texto_home->autor}}</small></p>
					</a>
				</div>
			</div>
			@endforeach



		</div>
	</div>

</div>

@stop