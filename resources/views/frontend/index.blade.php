<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>[ITACode]</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{asset('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
    <div class="banner">
        <header>
            <a href="#" class="logo">
                <img src="{{asset('img/logo.png')}}" width="200px">
            </a>
            <nav>
                <ul class="nav-links">
                    @foreach($cats as $cat)
                    <li class="text-uppercase"><a href="#{{$cat->rot}}" class="scroll-link">{{$cat->titulo}}</a></li>
                    @endforeach
                    <li class="text-uppercase"><a href="#contato" class="scroll-link"></a></li>
                </ul>
            </nav>
            <div class="menu">
                <i class="fa fa-bars" aria-hidden="true">
                </i>
            </div>
        </header>

        <img id="fundo" src="{{asset('img/fundo.png')}}">
        <div class="content" data-0-top="opacity:0;left:100px" data-200-top="opacity:1;left:0px">
            <a href=" #" class="logo">
                <img src="{{asset('img/logoicon.png')}}" width="120px">
            </a>
            <h2>Designer e Artes</h2>

        </div>
    </div>
    </section>
    <section class="services">
        <a name="{{$servico->rot}}"></a>
        <h2 class="heading text-uppercase" data-0-bottom="opacity:0;left:500px" data-center-center="opacity:1;left:0">
            {{$servico->titulo}} </h2>
        <p class="text" data-0-bottom="opacity:0;right:500px" data-center-center="opacity:1;right:0">
            {{$servico->descricao}} </p>
        <div class="container">
            <div class="serviceBx">
                <div>
                    <h2>Logomarcas</h2>
                    <br />
                    <img src="{{asset('img/icone1.png')}}">
                </div>
            </div>
            <div class="serviceBx">
                <div>
                    <h2>Cartões de Visitas</h2>
                    <br />
                    <img src="{{asset('img/icone2.png')}}">
                    <br /><br /><br />

                </div>
            </div>
            <div class="serviceBx">
                <div>
                    <h2>Diversos</h2>
                    <br>
                    <h3>Anúncios</h3>
                    <h3>Etiquetas</h3>
                    <h3>Folders</h3>
                    <h3>Cardápios</h3>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section class="clientes">
        <a name="{{$portifolio->rot}}"></a>
        <h2 class="heading" data-0-bottom="opacity:0;top:-100px" data-center-center="opacity:1;top:0">
            {{$portifolio->titulo}}
        </h2>
        <p class="text" data-0-bottom="opacity:0;bottom:-100px" data-center-center="opacity:1;bottom:0">
            {{$portifolio->descricao}}
        </p>
        <div class="imgBx">
            <img src="{{asset('img/logomarca05.png')}}" data-0-bottom="top:100px" data-center-center="top:0">
            <img src="{{asset('img/logomarca01.png')}}" data-0-bottom="top:150px" data-center-center="top:0">
            <img src="{{asset('img/logomarca04.png')}}" data-0-bottom="top:200px" data-center-center="top:0">
            <img src="{{asset('img/logomarca02.png')}}" data-0-bottom="top:250px" data-center-center="top:0">
        </div>
        <br />
        <div class="instagram" data-0-bottom="opacity:0;bottom:-100px" data-center-center="opacity:1;bottom:0">
            <a href="https://www.instagram.com/augusto.itacode/" target="_blank">
                <h3>Ver Mais</h3>
                <img src="{{asset('img/iconinstagram.ico')}}">
            </a>
        </div>
    </section>
    <section class="contato">
        <a name="contato"></a>
        <div data-0-bottom="opacity:0;left:-100px" data-center-center="opacity:1;left:0">
            <h2 class="heading">Entre em Contato</h2>
            <p class="text">Mande nos uma mensagem e solicite seu orçamento</p>
        </div>
    </section>
    <section class="sobre">
        <div class="contentBx color2">
            <div class="form" data-0-bottom="opacity:0;left:-400px" data-center-center="opacity:1;left:0px">
                <div class="inputBx">
                    <input type="text" name="" placeholder="Nome">
                </div>
                <div class="inputBx">
                    <input type="text" name="" placeholder="Email">
                </div>
                <div class="inputBx">
                    <input type="text" name="" placeholder="Telefone">
                </div>
                <div class="inputBx">
                    <textarea placeholder="Escreva sua mensagem"></textarea>
                </div>
                <div class="inputBx">
                    <input type="submit" name="" value="Enviar">
                </div>

            </div>
        </div>
        <div class="contentBx color2">
            <div data-0-bottom="opacity:0;left:500px" data-center-center="opacity:1;left:0px">
                <h3>
                    Cidade/Estado</h3>
                <p class="text">
                    {{$setups->endereco}}
                </p>
                <br>
                <h3>Telefone</h3>
                <p class="text">
                    {{$setups->contato}}
                </p>
                <br>
                <h3>E-mail</h3>
                <p class="text">
                    {{$setups->email}}
                </p>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="contentBx">
            <div>
                <img src="{{asset('img/logoicon.png')}}" width="25px">
                <img src="{{asset('img/logo.png')}}" width="130px">
            </div>
            <div>
                <p class="text">
                    © 2020 ITACode | Desenvolvido por <strong><a href="https://github.com/airtonfranca" target="_blank">
                            Airton França</a></strong>
                </p>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu').click(function() {
                $('nav').toggleClass('active')
            })
        })
    </script>
    <script src="{{asset('js/skrollr.js')}}"></script>
    <script type="text/javascript">
        function skrollrInit() {
            skrollr.init({
                smoothScrolling: false
            });
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                skrollr.init().destroy();
            }
        };
        var s = skrollrInit();
    </script>
</body>

</html>