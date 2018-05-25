@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>



<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="index.html">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="index.html">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>

    <h2 class="pagina__titulo"><img src="img/deayuda_lugares.svg" alt="" /> Lugares de Pago</h2>

    <div class="limit">
        <ul class="lugaresdepago__opciones">
            <li class="lugaresdepago__item bancos">
                <strong>Bancos</strong>
                <span>
                    <img src="img/bancos.svg" alt="" class="imgWeb" />
                    <img src="img/bancos-blanco.svg" alt="" class="imgMobile" />
                </span>
                <ul class="bancos__listaSelect">
                    <li><a href="bancos.html#interbank">Interbank</a></li>
                    <li><a href="bancos.html#bbva">BBVA</a></li>
                    <li><a href="bancos.html#scotiabank">Scotibank</a></li>
                    <li><a href="bancos.html#bcp">BCP</a></li>
                    <li><a href="bancos.html#banco-de-la-nacion">Banco de la Nación</a></li>
                </ul>
            </li>
            <li class="lugaresdepago__item">
                <strong>Cajeros Claro</strong>
                <a href="cajeros-claro.html">
                    <img src="img/cajeros.svg" alt="" class="imgWeb" />
                    <img src="img/cajeros-blanco.svg" alt="" class="imgMobile" />
                </a>
            </li>
            <li class="lugaresdepago__item">
                <strong>Mi Claro</strong>
                <a href="mi-claro.html">
                    <img src="img/mi-claro.svg" alt="" class="imgWeb" />
                    <img src="img/mi-claro-blanco.svg" alt="" class="imgMobile" />
                </a>
            </li>
            <li class="lugaresdepago__item">
                <strong>Puntos autorizados</strong>
                <a href="puntos-autorizados.html">
                    <img src="img/puntos-autorizados.svg" alt="" class="imgWeb" />
                    <img src="img/puntos-autorizados-blanco.svg" alt="" class="imgMobile" />
                </a>
            </li>
        </ul>
    </div>

</section>

<div class="puntoFooter"></div>

@endsection