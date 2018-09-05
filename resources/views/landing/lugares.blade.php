@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>



<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="/">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="/">Inicio</a></li>/
        <li>Lugares y medios de pago</li>
    </ul>

    <h2 class="pagina__titulo"><img src="/img/deayuda_lugares.png" alt="Lugares de pago" /> Lugares de Pago</h2>
    <p style="text-align:center;">Conoce los canales disponibles para realizar el pago de tu recibo</p>
    <div class="limit">
        <ul class="lugaresdepago__opciones">
           
           @foreach($lugares as $key => $lugar )
            <li class="lugaresdepago__item  @if($key === 0) bancos @endif">
                <strong>{{$lugar->name}}</strong>
               @if($key === 0) 
                 {!! $lugar->descripcion !!}
                    <ul class="bancos__listaSelect">
                        @foreach($lugar->posts as $post)
                        <li><a href="/lugares-de-pago/{{ $lugar->slug }}/{{ $post->slug}}">{{ $post->title }}</a></li>
                        @endforeach
                    </ul>
                @else
                <a href="/lugares-de-pago/{{ $lugar->slug }}">
                    {!! $lugar->descripcion !!} 
                 </a>
                @endif
            </li>
           @endforeach
           
           
       
        </ul>
    </div>

</section>

<div class="puntoFooter"></div>

@endsection