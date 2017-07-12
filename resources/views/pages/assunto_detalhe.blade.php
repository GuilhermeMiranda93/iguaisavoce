@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">



	@foreach($texto as $post)

	@php
	switch( $post->categoria ){
	case 1:
	$categoria = '#8e44ad';
	$categoria_nome = 'comportamento';
	break;
	case 2:
	$categoria = '#15A2FF';
	$categoria_nome = 'cotidiano';
	break;
	case 3:
	$categoria = '#C95959';
	$categoria_nome = 'relacionamentos';
	break;
	case 4:
	$categoria = '#26BB91';
	$categoria_nome = 'beleza';
	break;
	default:
	$categoria = '#8e44ad';
	$categoria_nome = 'comportamento';
	break;
}
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$novadata = strftime('%A, %d de %B de %Y', strtotime($post->data));


@endphp

<div class="image_blog" style="background-image:url('{{url('img/'.$post->arquivo)}}')">
</div>

<div class="texto_blog container">
	<h4 class="{{$categoria_nome}} text-center">{{$post->titulo}}</h4>

	<div class="blog_line"><div style="background-color: {{$categoria}};"></div><i class="fa fa-heart" style="color: {{$categoria}};" aria-hidden="true"></i><div style="background-color: {{$categoria}};"></div></div>

	<br>
	<div class="blog_creditos">
		<p><strong>{{$post->autor}}</strong></p>
		<p class="data-post"><strong>{{$novadata}}</strong></p>
	</div>

	{!!$post->texto!!}

	<button class="btn btn-secondary" onclick="goBack()">Voltar</button>
	<script>
		function goBack(){
			window.history.back();
		}
	</script>
</div>

@endforeach	

</div>
@stop