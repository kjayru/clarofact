<!doctype html>
<html class="no-js" lang="es">
    <head prefix="og: http://ogp.me/ns#">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $configure->title }}</title>
        <meta name="description" content=" {{ $configure->description }}">
        <meta name="kerwords" content="{{ $configure->keywords }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:url" content="{{ $configure->ogurl }}" />
        <meta property="og:type" content="{{ $configure->tiype }}" />
        <meta property="og:title" content="{{ $configure->ogtitle }}" />
        <meta property="og:description" content="{{ $configure->ogdescription }}" />
        <meta property="og:image" content="{{ $configure->ogimagen }}" />
    
        <link rel="shortcut icon" href="/favicon.ico" />
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/site-email.css?v=3">
        <link rel="stylesheet" href="/css/site-mobile.css?v={{ date('Mdhms') }}">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>


        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $configure->analitycs }}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
     
      gtag('config', '{{ $configure->analitycs }}');
    </script>
    </head>
    <body>
        
        <header>
            <div class="header">
                <div class="limit">
                    <div id="menuBoton" class="menuBoton">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <h1 class="header__h1"><img src="/img/claro.svg" alt="Claro" /></h1>
                    <a href="#" class="volverPagina"><img src="/img/fecha-izquierda-blanco-icono.svg" alt="">Atrás</a>
                    <div class="clear"></div>
                </div>
            </div>
           

        @include('partials.navigation')

        </header>
        @yield('content')
   
        @include('partials.footer')