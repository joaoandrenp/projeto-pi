<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Loja - Bacuá</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('img/home/favicon.ico')}}"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    {{--    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    @vite(['resources/css/styles.css','resources/js/app.js'])
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar fixed-top" id="mainNav">
    <div class="container">
        <!-- <a  class="navbar-brand" href="#page-top"><img id="logo" src="assets/img/novasimagens/Bacuá.png" alt="..." /></a> -->
        <a class="navbar-brand" href="#page-top"><img src="{{asset('img/home/img/navbar-logo.png')}}"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            {{--            @yield('content')--}}
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{url('/#services')}}">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/#portfolio')}}">Produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/#about')}}">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/#contact')}}">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('carrinho')}}">Carrinho</a></li>
                {{--                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"--}}
                {{--                                        aria-controls="offcanvasScrolling" href="#">Carrinho</a></li>--}}
                {{--                --}}
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->admin)
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    {{ __('Painel') }}
                                </a>
                                <div class="dropdown-divider"></div>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                {{--                @if (Route::has('login'))--}}

                {{--                    @auth--}}
                {{--                        <li class="nav-item"><a--}}
                {{--                                href="{{ (Auth::user()->admin) ? url('/administrador') : url('/home') }}"--}}
                {{--                                class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>--}}
                {{--                    @else--}}
                {{--                        <li class="nav-item"><a href="{{ route('login') }}"--}}
                {{--                                                class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Log--}}
                {{--                                in</a></li>--}}

                {{--                        @if (Route::has('register'))--}}
                {{--                            <li class="nav-item"><a href="{{ route('register') }}"--}}
                {{--                                                    class="nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
                {{--                            </li>--}}
                {{--                        @endif--}}
                {{--                    @endauth--}}

                {{--                @endif--}}
            </ul>
        </div>
    </div>
</nav>


<section>
    <div class="row container">
        <h5>Meu Carrinho:</h5>
            <table class="stripe">
                <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th></th>

                </tr>
                </thead>

                <tbody>
                @foreach($itens as $item)
                    <tr>
                        <td>
                            <img
                                src="/img/imgProdutos/{{$item->attributes->image}}"
                                alt="">
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <form style="display: inline-block" action="{{ route('removerItem') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                            <button class="btn btn-warning btn-circle me-2"><i class="fas fa-minus"></i></button>
                            </form>

                            <form style="display: inline-block" action="{{ route('addItem') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-warning btn-circle  ms-2 me-2"><i class="fas fa-plus"></i></button>
                            </form>

                            <form style="display: inline-block" action="{{ route('carrinhoRemover') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button class="btn btn-danger btn-circle ms-2"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</section>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="{{url('/#portfolio') }}"><button class="btn btn-primary"><i class="fas fa-arrow-left"></i>Continuar Comprando</button></a>
    <a href="{{route('finalizar') }}"><button class="btn btn-success"><i class="fas fa-check"></i>Finalizar</button></a>

</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
{{--<!-- Core theme JS-->--}}
{{--<script src="{{asset('js/scripts.js')}}"></script>--}}
@vite(['resources/js/scripts.js'])

<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
