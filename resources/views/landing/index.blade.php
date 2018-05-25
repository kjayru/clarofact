@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

        <section class="sliderPrincipal bgCover">
            <div class="limit">
                <article class="sliderPrincipal__texto">
                    <strong>Conoce tu Recibo</strong><br>
                    <p>Empieza conociendo tu recibo <a href="conoce-tu-recibo.html">aquí</a></p>
                </article>
                <aside class="sliderPrincipal__texto--mobile">
                    <strong>Conoce<br>tu Recibo</strong><br>
                    <a href="conoce-tu-recibo.html">Empieza conociendo<br>tu recibo AQUÍ</a>
                </aside>
            </div>
        </section>

        <section class="home__quepaso">
            <h2 class="home__quepaso__titulo">¿Qué te pasó este mes?</h2>
            <p class="home__quepaso__texto">Conoce los escenarios que pueden presentarse en tu recibo</p>
            <article>
                <ul class="home__quepaso__lista">
                    <li class="home__quepaso__item">
                        <a href="que-te-paso-este-mes.html#tengo_una_nueva_linea">
                            <strong>Compré una<br>línea nueva</strong>
                            <img src="img/nueva-linea-n.svg" alt="">
                            <img src="img/tengo_una_nueva_linea_blanco.svg" alt="">
                        </a>
                    </li>
                    <li class="home__quepaso__item">
                        <a href="que-te-paso-este-mes.html#no_pague_a_tiempo">
                            <strong>No pagué<br>a tiempo</strong>
                            <img src="img/no-pague-a-tiempo-n.svg" alt="">
                            <img src="img/no_pague_a_tiempo_blanco.svg" alt="">
                        </a>
                    </li>
                    <li class="home__quepaso__item">
                        <a href="que-te-paso-este-mes.html#me_cobraron_mas">
                            <strong>Creo que me<br>cobraron demás</strong>
                            <img src="img/pague-mas-n.svg" alt="">
                            <img src="img/me_cobraron_mas_blanco.svg" alt="">
                        </a>
                    </li>
                    <li class="home__quepaso__item">
                        <a href="que-te-paso-este-mes.html#pague_menos">
                            <strong>Pagué<br>menos</strong>
                            <img src="img/pague-menos-n.svg" alt="">
                            <img src="img/pague_menos_blanco.svg" alt="">
                        </a>
                    </li>
                    <li class="home__quepaso__item">
                        <a href="que-te-paso-este-mes.html#me_robaron_mi_celular">
                            <strong>Me robaron<br>mi celular</strong>
                            <img src="img/robaron-mi-celular-n.svg" alt="">
                            <img src="img/me_robaron_mi_celular_blanco.svg" alt="">
                        </a>
                    </li>
                    <li class="home__quepaso__item">
                        <a href="que-te-paso-este-mes.html#sali_de_viaje">
                            <strong>Salí de<br>viaje</strong>
                            <img src="img/sali-de-viaje-n.svg" alt="">
                            <img src="img/sali_de_viaje_blanco.svg" alt="">
                        </a>
                    </li>
                </ul>
            </article>
            <h3><img src="img/glosario_ico.svg" alt="" class="home__quepaso__glosario"></h3>
            <article class="home__quepaso__glosario__texto">
                <p>
                    Algunas palabras<br noMobile> son difíciles de entender.<br>
                    <a href="glosario.html">Ir al Glosario</a>
                </p>
            </article>
            <article class="home__quepaso__glosario__texto">
                <p>

                    Conocer todo sobre los<br noMobile> límites de consumo<br>
                    <a href="glosario.html#l">Más información</a>
                </p>
            </article>
        </section>

        <section class="home__deutilidad">
            <h4 class="home__deutilidad__titulo">De utilidad</h4>
            <article class="home__deutilidad____texto">
                <p>
                    <a href="http://www.miclaro.com.pe" target="_blank">
                        <img src="img/deayuda_miclaro.svg" alt="" />
                        <span>
                            <strong>Mi Claro</strong><br>
                            Revisa tus consumos, paga tus<br>recibos, recarga.
                        </span>
                        <img src="img/deayuda_miclaro.svg" alt="" class="imgMobile" />
                    </a>
                </p>
            </article>
            <article class="home__deutilidad____texto">
                <p>
                    <a href="lugares-de-pago.html">
                        <img src="img/deayuda_lugares.svg" alt="" />
                        <span>
                            <strong>Lugares de pago</strong><br>
                            Conoce donde pagar tus<br>recibos.
                        </span>
                        <img src="img/deayuda_lugares.svg" alt="" class="imgMobile" />
                    </a>
                </p>
            </article>
        </section>
@endsection