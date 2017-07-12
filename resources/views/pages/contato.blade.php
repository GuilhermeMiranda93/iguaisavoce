@extends('base')
@section('content')
<div id="conteudo" class="conteudo contato col-md-8 row justify-content-center">

	<div class="col-md-6">
		<h3>Fale conosco</h3>
		<form name="sentMessage" method="POST" action="{{url('/sendContato')}}" novalidate>
		{{csrf_field()}}
		<div class="form-group">
				<label for="email_input">Nome</label>
				<input type="name" name="name" class="form-control" id="email_input" placeholder="Digite seu nome">
			</div>
			<div class="form-group">
				<label for="email_input">Email</label>
				<input type="email" name="email" class="form-control" id="email_input" placeholder="Digite seu email">
			</div>
			<div class="form-group">
				<label for="telefone_input">Telefone</label>
				<input type="phone" name="phone" class="form-control" id="telefone_input" placeholder="Digite seu telefone">
			</div>
			<div class="form-group">
				<label for="mensagem_input">Mensagem</label>
				<textarea class="form-control" name="message" id="mensagem_input" rows="3" placeholder="Digite sua mensagem"></textarea>
			</div>
			<div id="success"></div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-send" aria-hidden="true"></i> Enviar</button>
		</form>
	</div>

</div>
@stop