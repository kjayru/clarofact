@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina pagina--quetepasoestemes">

    <ul class="pagina__breadcrumb  limit">
        <li><a href="/">Inicio</a></li>/
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
        
        <li>{{ $post->title }} </li>
    </ul>
    <ul class="pagina__breadcrumb  pagina__breadcrumb--mobile limit">
        <li><a href="/lugares-de-pago">Lugares y medios de pago</a></li>/
       
        <li>{{ $post->title }} </li>
       
    </ul>
    @if($post->slug ==  'mi-claro')
        <h2 class="pagina__titulo pagina__titulo--miclaro"><img src="/img/mi-claro.svg" alt="" class="miclarotitulo"> <strong>Cómo pagar en Mi Claro</strong></h2>
   
    @else
        <h2 class="pagina__titulo pagina__titulo--miclaro">Cajeros Claro</h2>
    @endif
@if($post->slug ==  'mi-claro')
    <div class="limit">
            <div class="acordeonContenedor--bancos">
                    <div class="acordeon acordeon--estilo2 primero act">
        @if(@$sliders[0])  
        
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
            </div>  
        </div>     
    
    </div>
@else
    <div class="limit">
        @if(@$sliders[0])  
                   
                   
                       
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
                        
                   
                
        @endif
        @if(@$sliders[1])
           
                
               
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
                
           
        @endif
           
    
    </div>
@endif
</section>

<div class="puntoFooter"></div>
@endsection