@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div class="row audio img-max-x">

		@foreach($texto as $audio)
		<div class="col-md-6">
			<div class="card">
				<h3 class="card-header">{{$audio->titulo}}</h3>
				<div class="card-block">
					<p class="card-text">{{$audio->chamada}}</p>
					<audio controls>
						<source src="{{$audio->arquivo}}" type="audio/mpeg"/>
						Your browser does not support the audio element.
					</audio>
				</div>
			</div>
		</div>
		@endforeach


	</div>

</div>
@stop