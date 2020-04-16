<!DOCTYPE HTML>
<html>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/goodgames.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600&display=swap" />
        <link rel="stylesheet" href="/css/goodgames.css" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/all.min.css" /> -->
        <!--<script src="https://use.fontawesome.com/7626226e024.js"></script>-->
    </head>
    <body class="">
        <div class="container main">

        <!-- Header -->
            <header id="header" class="text-light">
                <h1><a class="logo" href="./">Goodgames</a></h1>
                <img class="img-fluid" src="{{ asset('images/robert-2.jpg') }}" alt="Photo by Robert Coelho on Unsplash">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="links auth">
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

            </header>

            <nav  class="navbar navbar-expand-md navbar-dark bg-dark">
<!--                    <a href="#menu">Menu</a> -->
                <ul class="links">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/games') }}">Games tonen</a></li>
                    <li><a href="{{ url('/games/create') }}">Games toevoegen</a></li>
                    <li><a href="{{ url('/games/showgames') }}">Games bewerken</a></li>
                    <li><a href="{{ url('/categories') }}">Categorieën bewerken</a></li>
                </ul>
                </nav> 
        <!-- Banner -->
                                    @yield('banner')

        <!-- Content -->
            <section id="content" class="text-primary">
                <div class="inner">
                                    @yield('content')
                </div>
            </section>


        <!-- Footer -->
            <footer id="footer" class="text-light">
                <div class="inner">
                    <div class="content">
                        <section>
                                    @yield('footer')
                        </section>
                    </div>
                    <div class="copyright">
                        &copy; Rinus Spit 
                    </div>
                </div>
            </footer>


        </div>
        <!-- Scripts -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/browser.min.js') }}"></script>
            <script src="{{ asset('js/breakpoints.min.js') }}"></script>
            <script src="{{ asset('js/util.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>
            @yield('javascript')

    </body>
</html>
