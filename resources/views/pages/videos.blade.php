@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div class="row outros_assuntos">
		@foreach($texto as $video)
		<div class="col-12 col-xl-6 p-2">
			<iframe width="100%" height="315" src="{{$video->arquivo}}" frameborder="0" allowfullscreen></iframe>
		</div>
		@endforeach

	</div>

</div>
@stop