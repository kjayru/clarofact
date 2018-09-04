@extends('layouts.master')

@section('content')




<div class="espacioHeader"></div>

<section class="pagina pagina--limitedeconsumo">

	<ul class="pagina__breadcrumb limit">
			<li><a href="/">Inicio</a></li>/
			<li>¿Dudas sobre tu recibo?</li>
	</ul>
	<ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
			<li><a href="/">Inicio</a></li>/
			<li>¿Dudas sobre tu recibo?</li>
	</ul>

	<div class="limit">

		<div class="lineanuevapost_main">

			<h2 class="pagina__titulo">¿Dudas sobre tu recibo?</h2>
			<h4>Sabemos lo importante que es entender tu recibo. Por eso recogimos los casos más<br> comunes sobre facturación y te los explicamos paso a paso.   </h4>
			
			<div class="box_content">
				<div class="box1">
					<div class="img_box1"></div>
				</div>

				<div class="box2">
					<div class="content_box2">
					
					@foreach ($categorias as $cat)
							

						<a href="{{ $path }}/{{$cat->slug}}">
							<div class="text_box2">
								<i class="ico_arrow2"></i>
								<p>{{$cat->name}}</p>
							</div>
						</a>
						

					@endforeach

					</div>
				</div>
			</div>

		</div>

	</div>

</section>
				

<div class="puntoFooter"></div>
@endsection