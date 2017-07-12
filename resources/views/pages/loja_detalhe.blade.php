@extends('base')
@section('content')
<div id="conteudo" class="conteudo col-md-8 row ">


	<div class="row loja img-max-x">

		<div class="col-12 row">
			<div class="col-2">
				<img class="img-fluid" src="{{URL::asset('img/livro.jpg')}}"/>
			</div>
			<div class="col-7">
				<h2>Título</h2>
				<p><small>Autor</small></p>
				<p class="price">R$ 17,90</p>
			</div>
			<div class="col-3">
				<a href="#" class="btn btn-primary">COMPRAR</a>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Descrição</h2>
					<p>O Desejado de Todas as Nações na Linguagem de Hoje.</p>
					<br><br>
					<p>Esta é a história de um audacioso resgate. A autora nos conta como Jesus Cristo, o Filho de Deus, arriscou tudo para vir à Terra reconquistar este planeta renegado. Ele não poderia ter feito isso se ficasse no conforto e segurança do Céu, onde era reverenciado. Foi preciso deixar tudo para trás, nascer neste mundo como um bebê, em uma família humilde, e viver como um de nós.</p>
					<p>O inimigo estava decidido a causar eterna separação entre Deus e o homem; mas ao assumir nossa natureza, Jesus Se uniu ao ser humano por um laço que nunca será desfeito. "Porque Deus tanto amou o mundo que deu o Seu Filho unigênito, para que todo o que nEle crer não pereça, mas tenha a vida eterna" (Jo 3:16).</p>
					<p>O Libertador é uma das melhores e mais completas  biografias de Jesus. É um convite para acompanhar de perto a incrível trajetória do Salvador da humanidade, desde o nascimento até Sua triunfante apresentação diante do Pai. Prepare-se para ver o que está além da cortina e conhecer os surpreendentes detalhes do maior ato de amor do Universo, que ligou para sempre a Terra ao Céu.</p>
					<br><br>
					<h2>Detalhes do produto</h2>
					<ul>
						<li><strong>Formato:</strong> 14,0x21,0</li>
						<li><strong>Número de páginas:</strong> 480</li>
						<li><strong>Acabamento:</strong> Brochura</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

</div>
@stop