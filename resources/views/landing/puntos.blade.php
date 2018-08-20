@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
        <section class="pagina puntoautorizados">

            <ul class="pagina__breadcrumb limit">
                <li><a href="/">Inicio</a></li>/
                <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
                <li>Puntos autorizados</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
                <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
                <li>Puntos autorizados</li>
            </ul>
            
            <div class="limit">
                <h2 class="pagina__titulo">Puntos autorizados</h2>
                <div class="acordeonContenedor--puntos">
                    <div class="acordeon acordeon--estilo2 ">
                       @foreach($post as $pos) 
                       @foreach($pos->posts as $k => $p)
                        <div class="acordeon__item">
                            <div class="acordeon__boton @if($k==0) act @endif">
                                <strong> {{ $p->title }}</strong>
                                <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                                <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                            </div>
                            <div class="acordeon__contenido open @if($k==0) act @endif">
                                <div class="acordeon__contenido__detalle">
                                   {!! $p->body !!}
                                </div>
                            </div>
                        </div>
                       @endforeach
                    @endforeach
                    </div>
                </div>
                
            </div>

        </section>

        <div class="puntoFooter"></div>
@endsection