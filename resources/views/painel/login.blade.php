<!DOCTYPE html>

<html lang="pt-Br">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">

    <title>Iguais a Você</title>

    <!--Declaração de CSS-->
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}">

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

        <div id="conteudo" class="conteudo painel-login col-md-12 justify-content-center">

                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center">Entrar no Painel</h3>
                        <form action="{{url('/painel/assunto')}}">
                            <div class="form-group">
                                <label for="titulo_input">Login</label>
                                <input type="text" class="form-control" id="titulo_input">
                            </div>
                            <div class="form-group">
                                <label for="link_input">Senha</label>
                                <input type="password" class="form-control" id="link_input">
                            </div>                     

                            <button type="submit" class="btn">Entrar</button>
                            
                        </form>
                    </div>
                </div>

        </div>

    </div>

    <!--Declaração de bibliotecas javascript-->

    <!--JQuery-->
    <script src="{{URL::asset('lib/jquery/jquery.min.js')}}"></script>

    <!--Bootstrap-->
    <script src="{{URL::asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Froala Editor -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    <script src="{{URL::asset('lib/froala-editor/js/froala_editor.pkgd.min.js')}}"></script>

    <script src="{{URL::asset('js/script.js')}}"></script>

</body>
</html>