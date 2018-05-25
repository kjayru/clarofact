@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>
        <section class="pagina">

            <ul class="pagina__breadcrumb limit">
                <li><a href="index.html">Inicio</a></li>/
                <li>Conoce tu recibo móvil</li>
            </ul>
            <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
                <li><a href="index.html">Inicio</a></li>/
                <li>Conoce tu recibo móvil</li>
            </ul>

            <h2 class="pagina__titulo pagina__titulo--miclaro">Conoce tu recibo móvil</h2>
            
            <div class="dominaturecibo">
                <ul class="dominaturecibo__opciones">
                    <li><a href="#hoja1" class="act">Hoja 1</a></li>
                    <li><a href="#hoja2">Hoja 2</a></li>
                    <li><a href="#hoja3">Hoja 3</a></li>
                </ul>
                <div class="hoja hoja1 act">
                    <div class="dominaturecibo__contenido">
                        <div class="dominaturecibo__recibo recibo--web">
                                <img class="dominaturecibo__recibo__imagen" src="img/dominaturecibo-1.jpg" alt="">
                                <div class="dominaturecibo__recibo__puntos" style="top:50px; left:130px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">1</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Datos del Recibo</strong>
                                        <p>Se muestra el número de tu recibo, fecha de emisión, número celular y periodo de facturación.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:60px; left:370px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">2</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Total a pagar</strong>
                                        <p>Puedes visualizar el monto total a pagar, la fecha de vencimiento y tu código de pago.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:150px; left:110px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">3</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Datos del cliente</strong>
                                        <p>Se muestran los datos principales del titular de la línea: DNI, número de cuenta y dirección.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:140px; left:320px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">4</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Historial facturado</strong>
                                        <p>Puedes observar los últimos 6 meses y las variaciones en los montos facturados.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:255px; left:160px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">5</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Cargos mensuales</strong> 
                                        <p>Aquí podrás ver tu plan contratado, el tipo de Límite de consumo y lo consumido según cada servicio: voz, RPC, datos, SMS, etc.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:314px; left:120px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">6</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Adicionales</strong>
                                        <p>Refieren a servicios contratados como Claro Música, Claro Video, Roaming, telefonía larga distancia o servicios de entretenimiento como: juegos, chistes, noticias, etc.<br><br>Puedes ver el detalle en la hoja 3 de tu recibo.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:340px; left:80px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">7</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Cargos no recurrentes</strong>
                                        <p>Estos pueden venir por Paquetes de internet facturados o reconexiones<br><br>Puedes ver el detalle en la hoja 3 de tu recibo.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:564px; left:370px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">8</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Total facturado</strong>
                                        <p>Suma total de los cargos más el IGV.</p>
                                    </article>
                                </div>
                        </div>
                        <div class="dominaturecibo__recibo recibo--mobile">
                                <img class="dominaturecibo__recibo__imagen" src="img/dominaturecibo-1.jpg" alt="">
                                <div class="dominaturecibo__recibo__puntos" style="top:30px; left:130px;" data-hash="hoja1-1">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">1</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:30px; left:240px;" data-hash="hoja1-2">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">2</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:90px; left:80px;" data-hash="hoja1-3">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">3</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:90px; left:220px;" data-hash="hoja1-4">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">4</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:160px; left:160px;" data-hash="hoja1-5">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">5</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:200px; left:130px;" data-hash="hoja1-6">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">6</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:220px; left:50px;" data-hash="hoja1-7">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">7</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:360px; left:237px;" data-hash="hoja1-8">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">8</strong>
                                </div>
                        </div>
                    </div>
                    <ul class="dominaturecibo__recibo__lista--mobile">
                        <li id="hoja1-1">
                            <article>
                                <strong><span>1</span>Datos del Recibo</strong>
                                <p>Se muestra el número de tu recibo, fecha de emisión, número celular y ciclo de facturación.</p>
                            </article>
                        </li>
                        <li id="hoja1-2">
                            <article>
                                <strong><span>2</span>Total a pagar</strong>
                                <p>Puedes visualizar el monto total a pagar, la fecha de vencimiento y tu código de pago.</p>
                            </article>
                        </li>
                        <li id="hoja1-3">
                            <article>
                                <strong><span>3</span>Datos del cliente</strong>
                                <p>Se muestran los datos principales del titular de la línea: DNI, número de cuenta y dirección.</p>
                            </article>
                        </li>
                        <li id="hoja1-4">
                            <article>
                                <strong><span>4</span>Historial facturado</strong>
                                <p>Puedes observar los últimos 6 meses y las variaciones en los montos facturados.</p>
                            </article>
                        </li>
                        <li id="hoja1-5">
                            <article>
                                <strong><span>5</span>Cargos mensuales</strong>
                                <p>Aquí podrás ver tu plan contratado, tipo de Tope de consumo y lo consumido según cada servicio: voz, RPC, datos, SMS, etc.</p>
                            </article>
                        </li>
                        <li id="hoja1-6">
                            <article>
                                <strong><span>6</span>Adicionales</strong>
                                <p>Refieren a servicios contratados como Claro Música, Claro Video, Roaming, telefonía larga distancia, juegos, chistes, noticias, entre otros.<br><br>Puedes ver el detalle en la hoja 3 de tu recibo.</p>
                            </article>
                        </li>
                        <li id="hoja1-7">
                            <article>
                                <strong><span>7</span>Cargos no recurrentes</strong>
                                <p>Estos pueden venir por Paquetes de internet facturados o reconexiones<br><br>Puedes ver el detalle en la hoja 3 de tu recibo.</p>
                            </article>
                        </li>
                        <li id="hoja1-8">
                            <article>
                                <strong><span>8</span>Total facturado</strong>
                                <p>Suma total de los cargos más el IGV.</p>
                            </article>
                        </li>
                    </ul>
                </div>
                <div class="hoja hoja2">
                    <div class="dominaturecibo__contenido">
                        <div class="dominaturecibo__recibo recibo--web">
                                <img class="dominaturecibo__recibo__imagen" src="img/dominaturecibo-2.jpg" alt="">
                                <div class="dominaturecibo__recibo__puntos" style="top:150px; left:225px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">1</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Sección ClaroClub</strong>
                                        <p>Información referente al programa de beneficios Claro club.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:500px; left:100px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">2</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Lugares de pago</strong>
                                        <p>Información referente a establecimientos afiliados donde podrás realizar el pago de tu recibo.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:500px; left:320px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">3</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Atención al cliente</strong>
                                        <p>Se muestra los números de atención al cliente en caso tengas consultas sobre tu recibo</p>
                                    </article>
                                </div>
                        </div>
                        <div class="dominaturecibo__recibo recibo--mobile">
                                <img class="dominaturecibo__recibo__imagen" src="img/dominaturecibo-2.jpg" alt="">
                                <div class="dominaturecibo__recibo__puntos" style="top:100px; left:140px;" data-hash="hoja2-1">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">1</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:320px; left:60px;" data-hash="hoja2-2">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">2</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:320px; left:206px;" data-hash="hoja2-3">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">3</strong>
                                </div>
                        </div>
                    </div>
                    <ul class="dominaturecibo__recibo__lista--mobile">
                        <li id="hoja2-1">
                            <article>
                                <strong><span>1</span>Sección ClaroClub</strong>
                                <p>Información referente al programa de beneficios Claro club.</p>
                            </article>
                        </li>
                        <li id="hoja2-2">
                            <article>
                                <strong><span>2</span>Lugares de pago</strong>
                                <p>Información referente a establecimientos afiliados donde podrás realizar el pago de tu recibo.</p>
                            </article>
                        </li>
                        <li id="hoja2-3">
                            <article>
                                <strong><span>3</span>Atención al cliente</strong>
                                <p>Se muestra los números de atención al cliente en caso tengas consultas sobre tu recibo</p>
                            </article>
                        </li>
                    </ul>
                </div>
                <div class="hoja hoja3">
                    <div class="dominaturecibo__contenido">
                        <div class="dominaturecibo__recibo recibo--web">
                                <img class="dominaturecibo__recibo__imagen" src="img/dominaturecibo-3.jpg" alt="">
                                <div class="dominaturecibo__recibo__puntos" style="top:180px; left:230px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">1</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Detalle de Adicionales</strong>
                                        <p>Aquí visualizas el detalle de los servicios que hayas facturado como adicionales a tu plan. Los conceptos puedes ser por Telefonía móvil, Internet, SMS Contenido de otros proveedores, Telefonía fija, Claro Música, Claro Video, etc.</p>
                                    </article>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:560px; left:230px;">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">2</strong>
                                    <strong class="dominaturecibo__recibo__puntos--cerrar">x</strong>
                                    <article class="dominaturecibo__recibo__puntos__contenido">
                                        <strong>Categoría Otros</strong>
                                        <p>Agrupa y describe los consumos de la respectiva categoría. Es una forma más fácil y rápida de entender el porqué del monto a pagar.</p>
                                    </article>
                                </div>
                        </div>
                        <div class="dominaturecibo__recibo recibo--mobile">
                                <img class="dominaturecibo__recibo__imagen" src="img/dominaturecibo-3.jpg" alt="">
                                <div class="dominaturecibo__recibo__puntos" style="top:120px; left:140px;" data-hash="hoja3-1">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">1</strong>
                                </div>
                                <div class="dominaturecibo__recibo__puntos" style="top:360px; left:140px;" data-hash="hoja3-2">
                                    <strong class="dominaturecibo__recibo__puntos--abrir act">2</strong>
                                </div>
                        </div>
                    </div>
                    <ul class="dominaturecibo__recibo__lista--mobile">
                        <li id="hoja3-1">
                            <article>
                                <strong><span>1</span>Detalle de Adicionales</strong>
                                <p>Aquí visualizas el detalle de los servicios que hayas facturado como adicionales a tu plan. Los conceptos puedes ser por Telefonía móvil, Internet, SMS Contenido de otros proveedores, Telefonía fija, Claro Música, Claro Video, etc.</p>
                            </article>
                        </li>
                        <li id="hoja3-2">
                            <article>
                                <strong><span>2</span>Categoría Otros</strong>
                                <p>Agrupa y describe los consumos de la respectiva categoría. Es una forma más fácil y rápida de entender el porqué del monto a pagar.</p>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>

        </section>

        <div class="puntoFooter"></div>

        @endsection