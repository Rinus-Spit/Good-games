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
        <link rel="stylesheet" href="/css/main.css" />
    </head>
    <body class="is-preload">

        <!-- Header -->
            <header id="header">
                <a class="logo" href="index.html">Goodgames</a>
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>

        <!-- Nav -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="./">Home</a></li>
                    <li><a href="games">Games tonen</a></li>
                    <li><a href="addGames">Games toevoegen</a></li>
                    <li><a href="showGames">Games bewerken</a></li>
                </ul>
            </nav>

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
                        &copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>
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
