<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Pet's Web</title>
        <link rel="stylesheet" href="/carrusel/css/bootstrap.min.css">
      <!-- style css -->
        <link rel="stylesheet" href="/carrusel/css/style.css">
      <!-- Responsive-->
        <link rel="stylesheet" href="/carrusel/css/responsive.css">
      <!-- fevicon -->
        <link rel="icon" href="/carrusel/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="/carrusel/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Font Awesome -->
        <link 
            rel="stylesheet" 
            href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
        <!-- Google Fonts Roboto -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- MDB -->
        <link rel="stylesheet" href="/Public_design/Css/mdb.min.css" />
        <link rel="shortcut icon" type="image/x-icon" href="/Public_design/Img/icons/icono.ico"/>

        <link rel="stylesheet" href="/Public_design/Css/style.css"/>

    </head>

    <body>

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">

                <div class="site-mobile-menu-header">
                  <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                  </div>
                </div>
                <div class="site-mobile-menu-body"></div>

            </div>

            <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

                <div class="row align-items-center">
                    
                    <div class="col-4 col-xl-2 text-center">
                        <h1 class="mb-0 site-logo" >
                            <a href="{{route('home')}}" class="h2 mb-0" >Pets Web.</a>
                        </h1>
                    </div>
        
                    <div class="col-12 col-md-10 d-none d-xl-block">

                        <nav class="site-navigation position-relative text-md-center">
        
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{route('home')}}" class="nav-link">Inicio</a></li>   
                                <li><a href="{{route('Servicios')}}" class="nav-link">Servicios</a></li>                            
                                <li><a href="{{route('Contacto')}}" class="nav-link">Contactanos</a></li>
                                <li><a href="{{route('Acerca')}}" class="nav-link">Nosotros</a></li>
                                
                                @guest
                            <li class="align-items-center">
                                <button
                                        type="button"
                                        class="btn btn-primary btn-sm nav-link"
                                        onclick="location.href='{{ route('login') }}'"
                                >{{ __('Login') }}
                                        <i class="fas fa-user-alt"></i>
                                    </button>
                            </li>
                            @if (Route::has('register'))
                                <li class="align-items-center m-md-1 mt-sm-1">
                                    <button
                                        type="button"
                                        class="btn btn-primary btn-sm nav-link"
                                        onclick="location.href='{{ route('register') }}'"
                                    >{{ __('Registrar') }}
                                        <i class="fas fa-user-circle"></i>
                                    </button>
                                </li>
                            @endif
                            @else
                            <li class="align-items-center">                            
                                    <button
                                        type="button"
                                        class="btn btn-primary btn-sm"
                                        onclick="location.href='{{ route('Sesion') }}'">

                                    {{ Auth::user()->name }}
                                    </button>

                                    <button
                                        type="button"
                                            class="btn btn-primary btn-sm"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                                >{{ __('Cerrar Sesion') }}
                                    </button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                                <li class="align-items-center m-md-1 mt-sm-1">

                                   <div class="input-group">
                                        <div class="form-outline">
                                            <form action="" method="POST">
                                                <div class="">
                                                    <input id="search-button" name="txtBusqueda" type="search" class="form-control border" />
                                                <label class="form-label" for="form1">Buscar</label>

                                                </div>
                                            {{ csrf_field() }}
                                                
                                            </form>
                                        </div>
                                    </div>
                                    
                                   <!--<div class="input-group">-->
                                   <!--   <div class="form-outline">-->
                                   <!--     <input id="search-input" type="search" id="form1" class="form-control" />-->
                                   <!--     <label class="form-label" for="form1">Search</label>-->
                                   <!--   </div>-->
                                   <!--   <button id="search-button" type="button" class="btn btn-primary">-->
                                   <!--     <i class="fas fa-search"></i>-->
                                   <!--   </button>-->
                                   <!-- </div>-->

                                </li>

                            </ul>
                            
                        </nav>

                    </div>
        
                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3 text-end bg-danger" style="position: relative; top: 3px;">
                        <button href="#" class="site-menu-toggle js-menu-toggle float-right">
                            <i class="fas fa-align-justify"></i>
                        </button>
                    </div>
      
                </div>
                
            </header>





            @yield('content')





            <footer class="mt-1 site-footer">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">

                                <div class="col-md-6">

                                    <h2 class="footer-heading mb-4">Acarca de la pagina</h2>
                                    <p>Una empresa que se ganara tu confianza demostrando su profesialismo</p>
                                
                                </div>

                                <div class="col-md-3 ml-auto">

                                    <h2 class="footer-heading mb-4">Enlaces rapidos</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="{{route('Servicios')}}" class="smoothscroll">Servicios</a></li>
                                        <li><a href="{{route('Contacto')}}" class="smoothscroll">Contactos</a></li>
                                        <li><a href="{{route('Acerca')}}" class="smoothscroll">Nosotros</a></li>
                                    </ul>

                                </div>

                                <div class="col-md-3">

                                    <h2 class="footer-heading mb-4">Siguenos en</h2>
                                    <a href="https://www.facebook.com/serv.petsweb/" class="pl-3 pr-3 row p-1">
                                        <i class="fab fa-facebook-f fa-2x"></i>
                                    </a>
                                    <a href="https://twitter.com/PetsWeb1" class="pl-3 pr-3 row p-1">
                                        <i class="fab fa-twitter fa-2x"></i>
                                    </a>
                                    <a href="https://www.instagram.com/servpetsweb/?hl=es" class="pl-3 pr-3 row p-1">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>


                </div>
                
                <!-- Load Facebook SDK for JavaScript -->
                  <div id="fb-root"></div>
                  <script>
                    window.fbAsyncInit = function() {
                      FB.init({
                        xfbml            : true,
                        version          : 'v10.0'
                      });
                    };
            
                    (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));</script>
            
                  <!-- Your Chat Plugin code -->
                  <div class="fb-customerchat"
                    attribution="setup_tool"
                    page_id="107714104703956">
                  </div>
                
            </footer>
           

        </div>
        
        <!-- MDB -->
        
        <script type="text/javascript" src="/Public_design/Js/mdb.min.js"></script>
        <!-- Custom scripts -->

        <script src="/Public_design/Js/jquery-3.3.1.min.js"></script>
        <script src="/Public_design/Js/jquery-ui.js"></script>
        <script src="/Public_design/Js/owl.carousel.min.js"></script>
        <script src="/Public_design/Js/jquery.countdown.min.js"></script>
        <script src="/Public_design/Js/aos.js"></script>
        <script src="/Public_design/Js/jquery.sticky.js"></script>
        <script src="/Public_design/Js/main.js"></script>
        

        <!-- pagos paypal -->
        
        <!-- ------------ -->

        