@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div class="row outros_assuntos">
		@foreach($texto as $video)
		<div class="col-md-6">
			<iframe width="560" height="315" src="{{$video->arquivo}}" frameborder="0" allowfullscreen></iframe>
		</div>
		@endforeach

	</div>

</div>
@stop