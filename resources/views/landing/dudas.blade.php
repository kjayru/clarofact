@extends('layouts.master')

@section('content')
<div class="espacioHeader"></div>
        <section class="pagina">
            <ul>
                @foreach ($categorias as $cat)
                    <li><a href="{{ $path }}/{{$cat->slug}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>
        </section>

<div class="puntoFooter"></div>

@endsection