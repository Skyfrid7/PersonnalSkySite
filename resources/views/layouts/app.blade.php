<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DesiWeb - @yield('title')</title>
        <meta name="description" content="@yield('description')">
        @yield('noindex')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <!-- Js -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-E96MS6BFB6"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E96MS6BFB6');
        </script>
    </head>

    <body>

        <nav id="navbar">

            <div class="logo">
                <a href="{{ route('welcome') }}"><img src="{{ asset('assets/img/DesiWeb-png-2.png') }}" alt="logo de l'entrepise DesiWeb"></a>
            </div>

            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>

            <ul>
                <li>
                    <a href="{{ route('welcome') }}">Accueil</a>
                    <div class="{{ (request()->routeIs('welcome')) ? 'active' : '' }}"></div>
                </li>
                <li>
                    <a href="{{ route('services') }}">Services</a>
                    <div class="{{ (request()->routeIs('services')) ? 'active' : '' }}"></div>
                </li>
                <li>
                    <a href="{{ route('realisations') }}">Réalisations</a>
                    <div class="{{ (request()->routeIs('realisations')) ? 'active' : '' }}"></div>
                </li>
                <li class="contact {{ (request()->routeIs('contact.create')) ? 'contact-active' : '' }}">
                    <a href="{{ route('contact.create') }}">Contact</a>
                </li>
            </ul>

        </nav>

        <div id="main">
            @yield('content')
        </div>

        <div class="footer-pre-banner">

            <div class="footer-infos-container">

                <div class="infos-wrapper">

                    <div class="icons">
                        <img src="{{ asset('assets/svg/map-marker-alt-solid.svg') }}" alt="Icône de Position">
                        <img src="{{ asset('assets/svg/phone-solid.svg') }}" alt="Icône de Téléphone">
                        <img src="{{ asset('assets/svg/envelope-solid.svg') }}" alt="Icône de Mail">
                    </div>
                    
                    <div class="texts">
                        <span>Région de Belfort (90)</span>
                        <a href="tel:0781074110">07 81 07 41 10</a>
                        <a href="mailto:contact@desiweb.fr">contact@desiweb.fr</a>
                    </div>
                    
                </div>

                <a href="{{ route('contact.create') }}" class="btn footer-btn">Me contacter</a>

            </div>

            <img class="portrait" src="{{ asset("assets/img/photo-portrait.jpg") }}" alt="Photo de moi">

        </div>

        <footer>

            <div class="footer-links">

                <div class="presentation">
                    <img src="{{ asset("assets/img/DesiWeb-png-2.png") }}" alt="logo de l'entreprise">
                    <span>Guillaume Sutty - Création de sites webs: conception, réalisation, optimisation, hébergement et maintenance.
                        Je vous accompagne dans votre projet pour un rendu qui vous satisfera à coup sûr.</span>
                </div>

                <div class="infos-pages-container">

                    <div class="other-pages">
                        <h5>Voir aussi</h5>
                        <ul>
                            <li><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('realisations') }}">Réalisations</a></li>
                        </ul>
                    </div>

                    <div class="contact-infos">
                        <h5>Contact</h5>
                        <ul>
                            <li><a href="tel:0781074110">Tél: 07 81 07 41 10</a></li>
                            <li><a href="mailto:contact@desiweb.fr">Mail: contact@desiweb.fr</a></li>
                            <li><a href="{{ route('contact.create') }}">Me contacter</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <hr>

            <div class="credits">
                <span>©2021 Guillaume Sutty - DesiWeb - Tous droits réservés | <a href="{{ route('mentions-legales') }}">Mentions Légales</a>  | <a href="{{ route('CGV') }}">CGV</a></span>
            </div>

        </footer>
        
    </body>
</html>
