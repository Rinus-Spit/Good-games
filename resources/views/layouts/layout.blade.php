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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600&display=swap" />
        <link rel="stylesheet" href="/css/main.css" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/all.min.css" />
        <!--<script src="https://use.fontawesome.com/7626226e024.js"></script>-->
    </head>
    <body class="">

        <!-- Header -->
            <header id="header">
                <a class="logo" href="./">Goodgames</a>
            <nav >
<!--                    <a href="#menu">Menu</a> -->
                <ul class="links">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/games') }}">Games tonen</a></li>
                    <li><a href="{{ url('/games/create') }}">Games toevoegen</a></li>
                    <li><a href="{{ url('/games/showgames') }}">Games bewerken</a></li>
                </ul>
                <ul class="links auth">
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
                </ul>
                </nav> 
        <!-- Nav 
            <nav id="menu">
                <ul class="links">
                    <li><a href="./">Home</a></li>
                    <li><a href="games">Games tonen</a></li>
                    <li><a href="games/create">Games toevoegen</a></li>
                    <li><a href="showGames">Games bewerken</a></li>
                </ul>
            </nav> -->

            </header>

        <!-- Banner -->
                                    @yield('banner')

        <!-- Content -->
            <section id="content">
                <div class="inner">
                                    @yield('content')
                </div>
            </section>


        <!-- Footer -->
            <footer id="footer">
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

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
