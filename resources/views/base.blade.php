<!DOCTYPE html>

<html lang="pt-Br">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">

    <meta name="apple-itunes-app" content="app-id=1247615206"/>

    <title>Iguais a Você</title>

    <!--Declaração de CSS-->
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}">

    <!--Font Awesome-->
    <link rel="stylesheet" href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}">

    <!-- Froala Editor -->
    <link rel="stylesheet" href="{{URL::asset('lib/froala-editor/css/froala_editor.pkgd.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('lib/froala-editor/css/froala_style.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

</head>
<body>

    <!-- <div class="row">
        <div id="banner" class="banner"></div>
    </div>
 -->
    <div class="row">

        <div id="navbar" class="navbar col-md-2">

            <ul class="nav navbar-nav" role="navigation">
                <li class="navbar-header"><img class="img-max-x" src="{{URL::asset('img/logo.png')}}"></li>

                <a href="{{url('/')}}"><li><i class="fa fa-home" aria-hidden="true"></i> Início</li></a>

                <a href="#" data-toggle="collapse" data-target="#assuntos"><li><i class="fa fa-quote-left" aria-hidden="true"></i> Assuntos</li></a>
                <ul class="collapse" id="assuntos">
                    <a href="{{url('/assuntos/1')}}"><li>Comportamento</li></a>
                    <a href="{{url('/assuntos/2')}}"><li>Cotidiano</li></a>
                    <a href="{{url('/assuntos/3')}}"><li>Relacionamento</li></a>
                    <a href="{{url('/assuntos/4')}}"><li>Beleza e Saúde</li></a>
                </ul>

                <a href="{{url('/audios')}}"><li><i class="fa fa-play-circle" aria-hidden="true"></i> Áudios</li></a>

                <a href="{{url('/videos')}}"><li><i class="fa fa-youtube-play" aria-hidden="true"></i> Vídeos</li></a>

                <a href="{{url('/contato')}}"><li><i class="fa fa-comments" aria-hidden="true"></i> Fale Conosco</li></a>

                <!-- <a href="#" data-toggle="collapse" data-target="#loja"><li><i class="fa fa-shopping-basket" aria-hidden="true"></i> Loja</li></a> -->
                <div class="collapse" id="loja">
                    <span><i class="fa fa-shopping-basket fa-4x"></i></span>
                    <p>Seu Carrinho</p>
                    <p class="valor">R$ <big>0</big></p>
                    <a class="btn btn-default" href="#">FINALIZAR COMPRA</a>
                </div>

            </ul>

        </div>

        @yield('content')

        
        <div id="merchan" class="merchan col-md-2">
            @foreach($propaganda as $prop)
            <img class="img-max-x" src="{{url('img/'.$prop->arquivo)}}"/>
            @endforeach
        </div>

    </div>

    <!--Declaração de bibliotecas javascript-->

    <!--JQuery-->
    <script type="text/javascript" src="{{URL::asset('lib/jquery/jquery.min.js')}}"></script>

    <!--Bootstrap-->
    <script type="text/javascript" src="{{URL::asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>

    <!-- Froala Editor -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('lib/froala-editor/js/froala_editor.pkgd.min.js')}}"></script>

</body>
</html>