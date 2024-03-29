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
                <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('carrinho') }}">Carrinho</a></li>
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
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Sua Loja de Roupas!</div>
        <div class="masthead-heading text-uppercase">Bem-vindo á loja Bacuá!</div>
        <a class="btn btn-dark btn-xl text-uppercase" href="#services">Ver mais</a>
    </div>
</header>
<!--
        <h2 class="titlle">Início</h2>
       -->
</section>

<!-- Services-->

<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Serviços</h2>
            <br>
            <br>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-warning"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Roupas Femininas</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-warning"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Roupas Masculinas</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-warning"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Acessórios Diversos</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Produtos</h2>
            <h3 class="section-subheading text-muted">Nossos destaques.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('img/home/img/portfolio/1.jpg')}}" alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Roupas Femininas</div>
                        <!-- <div class="portfolio-caption-subheading text-muted">Illustration</div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('img/home/img/portfolio/2.jpg')}}" alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Roupas Masculinas</div>
                        <!-- <div class="portfolio-caption-subheading text-muted">Graphic Design</div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('img/home/img/portfolio/3.jpg')}}" alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Roupas Social</div>
                        <!-- <div class="portfolio-caption-subheading text-muted">Identity</div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('img/home/img/portfolio/4.jpg')}}" alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Acessórios</div>
                        <!-- <div class="portfolio-caption-subheading text-muted">Branding</div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('img/home/img/portfolio/5.jpg')}}" alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Calçados</div>
                        <!-- <div class="portfolio-caption-subheading text-muted">Website Design</div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('img/home/img/portfolio/6.jpg')}}" alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Perfumes</div>
                        <!-- <div class="portfolio-caption-subheading text-muted">Diversas Marcas</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Sobre nós</h2>
            <h3 class="section-subheading text-muted">Aqui você irá encontrar...</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                 src="{{asset('img/home/img/about/1.jpg')}}" alt="..."/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <!-- <h4>2009-2011</h4> -->
                        <h4 class="subheading">Loja inteiramente unisex</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Trabalhamos com produtos para todos os gêneros</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                 src="{{asset('img/home/img/about/2.jpg')}}" alt="..."/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <!-- <h4>March 2011</h4> -->
                        <h4 class="subheading">Parcerias</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Parcerias com diversas perfumarias e relojarias de
                            alta qualidade</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                 src="{{asset('img/home/img/about/3.jpg')}}" alt="..."/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <!-- <h4>December 2015</h4> -->
                        <h4 class="subheading">Fundação da empresa</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Empresa fundada com intuito de fornecer produtos de
                            alta qualidade para nossos clientes</p></div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Faça parte
                        <br/>
                        da nossa
                        <br/>
                        história!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Team

<!-- Clients-->

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contate nos</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Your Name *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Your Email *"
                               data-sb-validations="required,email"/>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Your Message *"
                                  data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br/>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center"><a class="btn btn-dark btn-xl text-uppercase" type="submit">Send Message</a></div>
        </form>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Bacuá Tech 2023</div>
        </div>
    </div>
</footer>
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/home/img/close-icon.svg')}}"
                                                                  alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->

                            <div class="card-container">

                                {{--                            </div>--}}

                                {{--                            --}}
                                {{--                            <div class="card-container">--}}

                                @foreach($produtos as $produto)
                                    @if($produto->categoria == "camisa" && $produto->tipoP == "feminino")
                                        <div class="card mb-lg-4">
                                            <img
                                                src="/img/imgProdutos/{{$produto->caminho}}"
                                                alt="">
                                            <h3>{{$produto->nomeP}}</h3>
                                            <p>Preço R${{$produto->preco}}</p>
                                            <form action="{{ route('carrinhoAdd') }}" method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $produto->id }}">
                                                <input type="hidden" name="quantidade" value="1">
                                                <input type="hidden" name="nomeP" value="{{ $produto->nomeP }}">
                                                <input type="hidden" name="preco" value="{{ $produto->preco }}">
                                                <input type="hidden" name="img" value="{{$produto->caminho}}">
                                                <button type="submit" class="button">Carrinho</button>
                                            </form>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 2 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/home/img/close-icon.svg')}}"
                                                                  alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->

                            <div class="card-container">

                                {{--                            </div>--}}

                                {{--                            --}}
                                {{--                            <div class="card-container">--}}
                                @foreach($produtos as $produto)
                                    @if($produto->categoria == "camisa" && $produto->tipoP == "masculino")

                                    <div class="card mb-lg-4">
                                        <img
                                            src="/img/imgProdutos/{{$produto->caminho}}"
                                            alt="">
                                        <h3>{{$produto->nomeP}}</h3>
                                        <p>Preço R${{$produto->preco}}</p>
                                        <form action="{{ route('carrinhoAdd') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $produto->id }}">
                                            <input type="hidden" name="quantidade" value="1">
                                            <input type="hidden" name="nomeP" value="{{ $produto->nomeP }}">
                                            <input type="hidden" name="preco" value="{{ $produto->preco }}">
                                            <input type="hidden" name="img" value="{{$produto->caminho}}">
                                            <button type="submit" class="button">Carrinho</button>
                                            <br>
                                        </form>
                                    </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 3 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/home/img/close-icon.svg')}}"
                                                                  alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->

                            <div class="card-container">

                                {{--                            </div>--}}

                                {{--                            --}}
                                {{--                            <div class="card-container">--}}
                                @foreach($produtos as $produto)
                                    @if($produto->categoria == "roupasocial" && $produto->tipoP == "unisex")

                                    <div class="card mb-lg-4">
                                        <img
                                            src="/img/imgProdutos/{{$produto->caminho}}"
                                            alt="">
                                        <h3>{{$produto->nomeP}}</h3>
                                        <p>Preço R${{$produto->preco}}</p>
                                        <form action="{{ route('carrinhoAdd') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $produto->id }}">
                                            <input type="hidden" name="quantidade" value="1">
                                            <input type="hidden" name="nomeP" value="{{ $produto->nomeP }}">
                                            <input type="hidden" name="preco" value="{{ $produto->preco }}">
                                            <input type="hidden" name="img" value="{{$produto->caminho}}">
                                            <button type="submit" class="button">Carrinho</button>
                                        </form>
                                    </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/home/img/close-icon.svg')}}"
                                                                  alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->

                            <div class="card-container">

                                {{--                            </div>--}}

                                {{--                            --}}
                                {{--                            <div class="card-container">--}}
                                @foreach($produtos as $produto)
                                    @if($produto->categoria == "acessorio" && $produto->tipoP == "unisex")

                                    <div class="card mb-lg-4">
                                        <img
                                            src="/img/imgProdutos/{{$produto->caminho}}"
                                            alt="">
                                        <h3>{{$produto->nomeP}}</h3>
                                        <p>Preço R${{$produto->preco}}</p>
                                        <form action="{{ route('carrinhoAdd') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $produto->id }}">
                                            <input type="hidden" name="quantidade" value="1">
                                            <input type="hidden" name="nomeP" value="{{ $produto->nomeP }}">
                                            <input type="hidden" name="preco" value="{{ $produto->preco }}">
                                            <input type="hidden" name="img" value="{{$produto->caminho}}">
                                            <button type="submit" class="button">Carrinho</button>
                                        </form>
                                    </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 5 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/home/img/close-icon.svg')}}"
                                                                  alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->

                            <div class="card-container">

                                {{--                            </div>--}}

                                {{--                            --}}
                                {{--                            <div class="card-container">--}}
                                @foreach($produtos as $produto)
                                    @if($produto->categoria == "calcados" && $produto->tipoP == "unisex")

                                    <div class="card mb-lg-4">
                                        <img
                                            src="/img/imgProdutos/{{$produto->caminho}}"
                                            alt="">
                                        <h3>{{$produto->nomeP}}</h3>
                                        <p>Preço R${{$produto->preco}}</p>
                                        <form action="{{ route('carrinhoAdd') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $produto->id }}">
                                            <input type="hidden" name="quantidade" value="1">
                                            <input type="hidden" name="nomeP" value="{{ $produto->nomeP }}">
                                            <input type="hidden" name="preco" value="{{ $produto->preco }}">
                                            <input type="hidden" name="img" value="{{$produto->caminho}}">
                                            <button type="submit" class="button">Carrinho</button>
                                        </form>
                                    </div>
                                        @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 6 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('img/home/img/close-icon.svg')}}"
                                                                  alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->

                            <div class="card-container">

                                {{--                            </div>--}}

                                {{--                            --}}
                                {{--                            <div class="card-container">--}}
                                @foreach($produtos as $produto)
                                    @if($produto->categoria == "perfumes" && $produto->tipoP == "unisex")

                                    <div class="card mb-lg-4">
                                        <img
                                            src="/img/imgProdutos/{{$produto->caminho}}"
                                            alt="">
                                        <h3>{{$produto->nomeP}}</h3>
                                        <p>Preço R${{$produto->preco}}</p>
                                        <form action="{{ route('carrinhoAdd') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $produto->id }}">
                                            <input type="hidden" name="quantidade" value="1">
                                            <input type="hidden" name="nomeP" value="{{ $produto->nomeP }}">
                                            <input type="hidden" name="preco" value="{{ $produto->preco }}">
                                            <input type="hidden" name="img" value="{{$produto->caminho}}">
                                            <button type="submit" class="button">Carrinho</button>
                                        </form>
                                    </div>
                                        @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
{{--<!-- Core theme JS-->--}}
{{--<script src="{{asset('js/scripts.js')}}"></script>--}}
@vite(['resources/js/scripts.js','resources/js/teste.js'])
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
