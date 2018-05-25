<!doctype html>
<html class="no-js" lang="es">
    <head prefix="og: http://ogp.me/ns#">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Claro Facturación</title>
        <meta name="description" content="">
        <meta name="kerwords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:url" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />
    
        <link rel="shortcut icon" href="favicon.ico" />
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/site.css?v=2">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

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
                    <h1 class="header__h1"><img src="img/claro.svg" alt="Claro" /></h1>
                    <a href="#" class="volverPagina"><img src="img/fecha-izquierda-blanco-icono.svg" alt="">Atrás</a>
                    <div class="clear"></div>
                </div>
            </div>
           

        @include('partials.navigation')

        </header>
        @yield('content')
   
        @include('partials.footer')