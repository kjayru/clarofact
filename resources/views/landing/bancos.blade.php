@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina pagina--quetepasoestemes">

    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li><a href="/lugares-de-pago">Bancos</a></li>/
        <li>{{ $post->title }} </li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--nomargin pagina__breadcrumb--mobile limit">
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        <li><a href="/lugares-de-pago">Bancos</a></li>/
        <li>{{ $post->title }} </li>
       
    </ul>

    <h2 class="pagina__titulo pagina__titulo--quetepasoestemes">Bancos</h2>
    <article class="contbox">
            @desktop
            <ul class="banco__lista">
               
                <li class="banco__item @if($post->slug=='Interbank') act @endif">
                    <a href="/lugares-de-pago/bancos/Interbank" >
                        <img src="/img/interbank.svg" alt="">
                    </a>
                </li>
                <li class="banco__item @if($post->slug =='BCP') act @endif">
                        <a href="/lugares-de-pago/bancos/bcp">
                            <img src="/img/bcp.svg" alt="">
                        </a>
                    </li>
                <li class="banco__item @if($post->slug=='BBVA') act @endif">
                    <a href="/lugares-de-pago/bancos/bbva">
                        <img src="/img/bbva.svg" alt="">
                    </a>
                </li>
                <li class="banco__item @if($post->slug=='Scotiabank') act @endif">
                    <a href="/lugares-de-pago/bancos/scotiabank">
                        <img src="/img/scotiabank.svg" alt="">
                    </a>
                </li>
                <li class="banco__item @if($post->slug=='banco-de-la-nacion') act @endif">
                    <a href="/lugares-de-pago/bancos/banco-de-la-nacion">
                        <img src="/img/banco-de-la-nacion.svg" alt="">
                    </a>
                </li>

            </ul>
            @enddesktop 
            @handheld
            <ul class="banco__lista">
               
                    <li class="banco__item-mobile  @if($post->slug=='Interbank') act @endif">
                        <a href="/lugares-de-pago/bancos/Interbank">
                            <img src="/img/interbank.svg" alt="">
                        </a>
                    </li>
                    <li class="banco__item-mobile @if($post->slug=='BCP') act @endif">
                            <a href="/lugares-de-pago/bancos/bcp">
                                <img src="/img/bcp.svg" alt="">
                            </a>
                        </li>
                    <li class="banco__item-mobile @if($post->slug=='BBVA') act @endif">
                        <a href="/lugares-de-pago/bancos/bbva">
                            <img src="/img/bbva.svg" alt="">
                        </a>
                    </li>
                    <li class="banco__item-mobile @if($post->slug=='Scotiabank') act @endif">
                        <a href="/lugares-de-pago/bancos/scotiabank">
                            <img src="/img/scotiabank.svg" alt="">
                        </a>
                    </li>
                    <li class="banco__item-mobile @if($post->slug=='banco-de-la-nacion') act @endif">
                        <a href="/lugares-de-pago/bancos/banco-de-la-nacion">
                            <img src="/img/banco-de-la-nacion.svg" alt="">
                        </a>
                    </li>
    
                </ul>
                <a href="#" class="capsula cap-bancos"><span class="boton-banco-open"></span></a>
            @endhandheld
    </article>
    @if(@$sliders[0])
    <div class="limit">
        <div class="acordeonContenedor--bancos">
            <div id="bcp" class="acordeon acordeon--estilo2 primero act">
                <div class="acordeon__item">
                    <div class="acordeon__boton act" data-target="a">
                        <strong>Vía Web <span>Sin comisión</span></strong>
                        <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido open act" data-target="a">
                        <div class="acordeon__contenido__detalle" data-target="a">
                            <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro">
                                    <div class="swiper-wrapper">
                                     @foreach($sliders[0]->slideritems as $slider)     
                                        
                                        <article class="swiper-slide">
                                            <img src="/storage/{{ $slider->imagen }}" alt="">
                                            {!! $slider->content !!}
                                        </article>
                                    @endforeach
                                       
                                    </div>
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left" />
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right" />
                            </div>
                        </div>
                    </div>
                </div>
     @endif
    @if(@$sliders[1])
                <div class="acordeon__item">
                    <div class="acordeon__boton" data-target="b">
                        <strong>Vía APP <span>Sin comisión</span></strong>
                        <img class="cerrado" src="/img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="/img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido" data-target="b">
                        <div class="acordeon__contenido__detalle" data-target="b">
                            <div class="swiper-container sliderClaroFacturacion sliderClaroFacturacion--miclaro">
                                    <div class="swiper-wrapper mobile">
                                      @foreach($sliders[1]->slideritems as $slider) 
                                        <article class="swiper-slide">
                                            <img src="/storage/{{ $slider->imagen }}" alt="" >
                                            {!! $slider->content !!}
                                        </article>
                                       
                                       @endforeach 
                                    </div>
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--left" />
                                    <img src="/img/sliderFlecha.png" alt="" class="sliderClaroFacturacion__flecha sliderClaroFacturacion__flecha--right" />
                            </div>
                        </div>
                    </div>
                </div>
    @endif
                {!! $post->body !!}
            </div>
           
            
        </div>
    </div>

</section>

<div class="puntoFooter"></div>
@endsection