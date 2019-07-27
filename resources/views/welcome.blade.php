<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="css/style.css" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body, html{
    width: 100%;
    height: 100%;
   
}


nav a{
    float: right;
}
.acesso{
    background-color: #203864;
    height: 10%;
    width: 100%;
}
.botao{
  background-color: #A34201;  
  border-radius: 4px;
  border: none;
  color: #fff;
  width: 100%;
  padding: 10px;
}

form h1{
    text-align: center;
    color: #fff;
    margin-bottom: 3%;
}
.acesso form{
    margin-top: 20%;
    margin-bottom: 38%;
    width: 60%;
}
.acesso form .form-group input{
    margin-bottom: 30px;
}

.acesso form p{
    color: red;
}

.conteudo{
    display: flex;
    flex-wrap: wrap;
    /* align-content: center; */
}

.inicio{
    margin-left: 15%;
    margin-right: 15%;
}
.inicio h1{
    text-align: center;
    margin-bottom: 3%;
    font-size: 40px;
   
}

.inicio > h1 > span{
    text-align: center;
    margin-bottom: 3%;
    font-size: 40px;
   
    color: #C55A11;
}
.conteudo > a {
    background-color: #203864;
    padding-bottom: 7%;
    padding-top: 6%;
    margin-bottom: 5%;
    width: 30%;
    height: 150px;
}
.conteudo > a:hover{
    cursor: pointer;
    background-color: #C55A11;
    text-decoration: none;
    

}
.conteudo > a:active{
    background-color: #203864;
}

.conteudo > a > p{
  vertical-align: center;
  text-align: center;
  color: #fff;
  font-size: 25px;
  
}

.caixa-md{
    margin-left: 5%;
    margin-right: 5%;
}

footer{
    text-align: center;
    font-size: 25px;
}

footer > span {
    color: #A6A6A6;
}
footer > span > span {
    color: rgb(161, 7, 7);
} 




    </style>
</head>
<body>
<div id="app ">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="../img/BG.JPG" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div class="inicio">
        <h1 class="pt-5">SOFTWARE DE <span>GESTÃO EMPRESARIAL</span></h1>
        <div class="conteudo">
            <a href="#">
                <p>Relação com Cliente<br></p>
            </a>
        
            <a class="caixa-md" href="#">
                <p>Facturação</p>
            </a>

            <a  href="/servico">
                <p>Logística | Serviços</p>
            </a>

            <a style="background-color: #a5a5a5;">
                <p>Contabilidade</p>
            </a>

            <a class="caixa-md" style="background-color: #a5a5a5;">
                <p>Recursos Humanos</p>
            </a>

            <a style="background-color: #a5a5a5;">
                <p>Relatórios</p>
            </a>
        </div>
    </div>
    <footer class="container"style="font-size: 12px;">
        <span> <span>&#x000AEInnoGest </span> Software </span> | Desenvolvido pela Innovatus Holding, LDA
    </footer>
</body>