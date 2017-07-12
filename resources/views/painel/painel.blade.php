<!DOCTYPE html>

<html lang="pt-Br">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">

    <title>Iguais a Você</title>

    <!--Declaração de CSS-->
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Froala Editor -->
    <link rel="stylesheet" href="{{URL::asset('lib/froala-editor/css/froala_editor.pkgd.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/froala-editor/css/froala_style.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

</head>
<body>

    <div class="row">

        <div id="navbar" class="navbar col-md-2">

            <ul class="nav navbar-nav" role="navigation">
                <li class="navbar-header"><img class="img-max-x" src="{{URL::asset('img/logo.png')}}"></li>

                <a href="/painel/assunto"><li><i class="fa fa-quote-left" aria-hidden="true"></i> Novo Assunto</li></a>
                <a href="/painel/audio"><li><i class="fa fa-play-circle" aria-hidden="true"></i> Novo Áudio</li></a>
                <a href="/painel/video"><li><i class="fa fa-youtube-play" aria-hidden="true"></i> Novo Vídeo</li></a>
                <a href="/painel/produto"><li><i class="fa fa-shopping-basket" aria-hidden="true"></i> Novo Produto</li></a>
                <a href="/painel/propaganda"><li><i class="fa fa-bullhorn" aria-hidden="true"></i> Nova Propaganda</li></a>
                <a href="{{url('https://www.google.com.br')}}"><li><i class="fa fa-user" aria-hidden="true"></i> Novo Usuário</li></a>
                <a href="{{url('https://www.google.com.br')}}"><li><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</li></a>

                

            </ul>

        </div>

        @yield('content')

    </div>

    <!--Declaração de bibliotecas javascript-->

    <!--JQuery-->
    <script src="{{URL::asset('lib/jquery/jquery.min.js')}}"></script>

    <!--Bootstrap-->
    <script src="{{URL::asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>

    <!--Dropzone-->
    <script src="{{URL::asset('lib/dropzone/dropzone.js')}}"></script>

    <!-- Froala Editor -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    <script src="{{URL::asset('lib/froala-editor/js/froala_editor.pkgd.min.js')}}"></script>

    <script src="{{URL::asset('js/script.js')}}"></script>

</body>
</html>