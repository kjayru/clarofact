@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
    @foreach($slider as $k => $sli)
     @desktop 
        <section class="sliderPrincipal" style="background-image: url( storage/{{ $sli->slideritems[0]->background }});">
     @enddesktop
     @tablet
     <section class="sliderPrincipal" style="background-image: url( storage/{{ $sli->slideritems[0]->background }});">
     @endtablet
     @mobile
     <section class="sliderPrincipal" style="background-image: url( storage/{{ $sli->slideritems[1]->imagen }});">
     @endmobile
            <div class="limit slides-conoce">
                <article class="sliderPrincipal__texto">
                    <strong> {{ $sli->slideritems[$k]->title }} </strong><br>
             {!! $sli->slideritems[$k]->content !!}
                </article>
                <aside class="sliderPrincipal__texto--mobile">
                    <h1> {{ $sli->slideritems[$k]->title }}  <a href="/como-leer-tu-recibo-movil">AQUÍ</a> </h1> <br>
                  
                </aside>
            </div>
        </section>
    @endforeach
    {!! $page->body !!}
<div class="puntoFooter"></div>   
@endsection