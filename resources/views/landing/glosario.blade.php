@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

        <section class="pagina puntoautorizados">

            <ul class="pagina__breadcrumb limit">
                <li><a href="index.html">Inicio</a></li>/
                <li>Glosario</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
                <li><a href="index.html">Inicio</a></li>/
                <li>Glosario</li>
            </ul>
            
            <div class="limit" id="secc-L">
                <h2 class="pagina__titulo">Glosario</h2>
                <article class="glosario__listaContenedor">
                    <img class="glosario__listaContenedor__flecha glosario__left" src="img/calendario-left.png" alt="" />
                    <ul class="glosario__lista">
                        <div class="swiper-container slideGlosario">
                            <ul class="swiper-wrapper">
                                   <!--  <li class="swiper-slide glosario__item">
                                        <a href="#a">A</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#b">B</a>
                                    </li>-->
                                    <li class="swiper-slide glosario__item">
                                        <a href="#c" class="click act">C</a>
                                    <!-- </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#d">D</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#e">E</a>
                                    </li>-->
                                    <li class="swiper-slide glosario__item">
                                        <a href="#f" class="click">F</a>
                                    </li>
                                    <!-- <li class="swiper-slide glosario__item">
                                        <a href="#g">G</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#h">H</a>
                                    </li>-->
                                    <li class="swiper-slide glosario__item">
                                        <a href="#i" class="click">I</a>
                                    </li>
                                    <!--
                                    <li class="swiper-slide glosario__item">
                                        <a href="#j">J</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#k">K</a>
                                    </li>-->
                                    <li class="swiper-slide glosario__item">
                                        <a href="#l" class="click">L</a>
                                    </li>
                                    <!--
                                    <li class="swiper-slide glosario__item">
                                        <a href="#m">M</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#m">N</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#o">O</a>
                                    </li>-->
                                    <li class="swiper-slide glosario__item">
                                        <a href="#p" class="click">P</a>
                                    </li>
                                    <!--
                                    <li class="swiper-slide glosario__item">
                                        <a href="#q">Q</a>
                                    </li>-->
                                    <li class="swiper-slide glosario__item">
                                        <a href="#r" class="click">R</a>
                                    </li><!--
                                    <li class="swiper-slide glosario__item">
                                        <a href="#s">S</a>
                                    </li>-->
                                    <li class="swiper-slide glosario__item">
                                        <a href="#t" class="click">T</a>
                                    </li>
                                    <!--
                                    <li class="swiper-slide glosario__item">
                                        <a href="#u">U</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#v">V</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#w">W</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#x">X</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#y">Y</a>
                                    </li>
                                    <li class="swiper-slide glosario__item">
                                        <a href="#z">Z</a>
                                    </li>-->
                            </ul>
                        </div>
                    </ul>
                    <img class="glosario__listaContenedor__flecha glosario__right" src="img/calendario-right.png" alt="" />
                    <div class="swiper-scrollbar swiper-scrollbar--slideGlosario"></div>
                </article>
                <div class="limit listadoStandardContenedor">
                    <ul id="a" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="b" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="c" class="listadoStandard act">
                        <li>
                            <article>
                                <h3>Ciclo de facturación</h3>
                                <p>
                                    El ciclo de facturación es el periodo, con fecha de inicio y fin, formado por 30 días calendarios que corresponde al tiempo que has utilizado tu servicio contratado. Por tanto, ese intervalo de fechas de tu ciclo, indica el principio y fin de tu mes de facturación. El ciclo de facturación también sirve para medir el consumo de megas, minutos u otros servicios que has realizado durante ese periodo y en base a ello emitir tu recibo.<br><br>
                                    Claro cuenta con 19 ciclos de facturación para su servicio móvil.<br><br>
                                    <a href="simulador-de-facturacion.html">Prueba el simulador</a>
                                </p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h3>Código de pago</h3>
                                <p>Es el número que puedes entregar en establecimientos afiliados para realizar el pago de tu servicio. Lo encuentras en la sección “Datos del Cliente” ubicado en la parte superior derecha de tu recibo.</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h3>Cargo fijo mensual</h3>
                                <p>Indica la suma de los valores de voz, mensajes de texto y/o paquetes de megabytes que forman parte de tu plan contratado.</p>
                            </article>
                        </li>
                    </ul>
                    <ul id="d" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="e" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="f" class="listadoStandard">
                        <li>
                            <article>
                                <h3>Fecha de pago</h3>
                                <p>Es la fecha límite para pagar por los servicios de tu línea sin incurrir en atrasos y cargos por concepto de reconexión.<br><br><a href="simulador-de-facturacion.html">Prueba el simulador</a></p>
                            </article>
                        </li>
                    </ul>
                    <ul id="g" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="h" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="i" class="listadoStandard">
                        <li>
                            <article>
                                <h3>Inicio de ciclo</h3>
                                <p>Es el día en el que te entregan las unidades correspondientes a tu plan: minutos, megas, mensajes, paquetes contratados, etc. Puedes verificar cuando empieza tu ciclo en <a href="https://mi.claro.com.pe" target="_blank">Mi Claro</a>.</p>
                            </article>
                        </li>
                    </ul>
                    <ul id="j" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="k" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="l" class="listadoStandard">
                        <li>
                            <article>
                                <h3>Límite de consumo</h3>
                                <p>Existen 2 tipos de límite de consumo. Puedes optar por uno siempre que cuentes con una línea o plan postpago.</p>
                                <ul>
                                    <li>Consumo adicional. Obtén hasta un cargo adicional a tu plan para que sigas usando tus servicios, pero sin pasarte. El monto adicional dependerá del plan que tengas..</li>
                                    <li>Consumo abierto. Puedes generar tráfico adicional a tu plan sin límites. Éste será
                                    facturado en tu recibo según el consumo que realices.</li>
                                    <li>Consumo Exacto. Todo bajo control. Solicita este límite de consumo para que evites generar adicionales a tu plan. </li>
                                </ul>
                            </article>
                        </li>
                    </ul>
                    <ul id="m" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="n" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="o" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="p" class="listadoStandard">
                        <li>
                            <article>
                                <h3>Período de facturación</h3>
                                <p>Es el tiempo o plazo en el que puedes hacer uso de los beneficios de tu plan. Los periodos de facturación en Claro duran 30 días calendario.</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h3>Prorrateo</h3>
                                <p>Prorratear es dividir el coste de algo en varias partes. Aplicado a tu facturación, sería dividir el pago que haces de tu servicio, entre los días que dura un ciclo de facturación (Ej.: S/ 69 ÷ 30 días = S/ 2.30 por día). Ahora, es importante que sepas que tu recibo lo pagas por adelantado. Si durante el mes tu línea sufre un bloqueo por robo o cobranza, Claro te devolverá esos días que no tuviste el servicio activo como descuento en tu siguiente recibo.<br><br>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h3>Plazo de reposición</h3>
                                <p>Es el plazo de 30 días calendarios que tienes para adquirir un chip con tu mismo número. Usualmente este escenario se da luego de que el usuario bloquee su línea por robo o pérdida.</p>
                            </article>
                        </li>
                    </ul>
                    <ul id="q" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="r" class="listadoStandard">
                        <li>
                            <article>
                                <h3>Reconexión</h3>
                                <p>La reconexión se genera luego que una línea haya sufrido una suspensión o corte del servicio por cobro. El restablecimiento del servicio se da máximo 24 horas posteriores al pago de la deuda. El costo por dicha reconexión es S/ 10 y se carga en el siguiente recibo.</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h3>Reintegro del equipo</h3>
                                <p>Las empresas de telecomunicaciones subvencionan el costo del equipo cuando contratas un plan o servicio por un tiempo determinado (12 o 18 meses). De no culminar tu contrato, las empresas realizan una tasación en base al costo real del equipo y a los meses restantes que faltan para el término del contrato.</p>
                            </article>
                        </li>
                    </ul>
                    <ul id="s" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="t" class="listadoStandard">
                        <li>
                            <article>
                                <h3>Tráfico adicional</h3>
                                <p>Indica la suma montos excedentes por voz, mensajes y datos. Se entiende como excedente al consumo adicional de tu saldo otorgado, o si utilizaste un servicio fuera de tu plan.</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h3>Tráfico Larga Distancia Nacional</h3>
                                <p>Es la utilización de llamadas, mensajes y datos dentro del territorio nacional.</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h3>Tráfico Larga Distancia Internacional</h3>
                                <p>Es la utilización de llamadas, mensajes y datos fuera del territorio nacional.</p>
                            </article>
                        </li>
                    </ul>
                    <ul id="u" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="v" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="w" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="x" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="y" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                    <ul id="z" class="listadoStandard"> <li> <article> <p> Sin contenido </p> </article> </li> </ul>
                </div>
            </div>

        </section>

        <div class="puntoFooter"></div>
@endsection