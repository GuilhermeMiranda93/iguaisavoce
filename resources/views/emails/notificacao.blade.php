<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		p{
			background-color: lightgreen;
			padding: 1em;
			border-radius: 5px;
			color: darkgreen;
			font-size: 18pt;
			width: 500px;
			text-align: center;
		}
		body{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
			width: 100%;
		}
	</style>
</head>
<body>

	<p>Mensagem enviada com sucesso!</p>

	<a href="{{url('/')}}" class="text-center btn btn-primary">Voltar Ao Site</a>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>