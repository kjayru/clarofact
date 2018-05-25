@extends('layouts.master')

@section('content')

<div class="espacioHeader"></div>

<section class="pagina">

    <ul class="pagina__breadcrumb limit">
        <li><a href="index.html">Inicio</a></li>/
        <li>Preguntas frecuentes</li>
    </ul>
    <ul class="pagina__breadcrumb pagina__breadcrumb--mobile limit">
        <li><a href="index.html">Inicio</a></li>/
        <li>Preguntas frecuentes</li>
    </ul>

    <h2 class="pagina__titulo">Preguntas frecuentes</h2>

    <div class="limit">

        <div class="acordeon--preguntasfrecuentes">
            <div class="acordeon acordeon--estilo2">
                <div class="acordeon__item">
                    <div class="acordeon__boton act" data-target="a">
                        <strong>Tengo una deuda antigua ¿Qué puedo hacer?</strong>
                        <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido open act" data-target="a">
                        <div class="acordeon__contenido__detalle" data-target="a">
                            <article>
                                <p>
                                    Si mantienes una deuda antigua y quieres regularizar el pago pendiente, solicita tu código de cliente o customer ID llamando a 123 o acercándote a un Centro de Atención al Cliente con tu documento de identidad. También puedes solicitar información sobre el detalle de la misma. 
                                    <br><br>
                                    Puedes realizar el pago en el mismo Centro de atención o en establecimientos afiliados indicando la letra H + código del cliente. 
                                    <br><br>
                                    Ejemplo: H10003438
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="acordeon__item">
                    <div class="acordeon__boton" data-target="b">
                        <strong>¿Puedo refinanciar una deuda?</strong>
                        <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido" data-target="b">
                        <div class="acordeon__contenido__detalle" data-target="b">
                            <article>
                                <p>Si puedes. El servicio de financiamiento puede ser por uno o más recibos con deuda. El monto mínimo a financiar es de S/ 50 y la cuota mínima a pagar es S/20. Sin embargo, debes considerar lo siguiente:</p>
                                <ul>
                                    <li>El monto a financiar puede ser por el cargo fijo, servicios o una penalidad.</li>
                                    <li>Para acceder al financiamiento, debes haber cancelado el segundo recibo emitido.</li>
                                    <li>Se pueden financiar documentos vencidos y no vencidos.</li>
                                    <li>El financiamiento procede una vez cada 365 días, el conteo no es anual.</li>
                                    <li>El financiamiento se realiza mínimo en 1 cuota y máximo en 12 cuotas.</li>
                                    <li>Debes pagar la cuota inicial en un plazo máximo de 48 horas, de lo contrario la solicitud será anulada.</li>
                                </ul>
                                <p>Puedes solicitar el financiamiento de tu deuda en un Centro de Atención al Cliente vía call Center llamando al 123 desde un móvil Claro o 0800-00123 desde un teléfono fijo.</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="acordeon__item">
                    <div class="acordeon__boton" data-target="c">
                        <strong>¿Cómo sé que Límite de consumo tiene mi línea?</strong>
                        <img class="cerrado" src="img/flecha-abajo-turquesa-icono.svg" alt="">
                        <img class="abierto" src="img/flecha-arriba-turquesa-icono.svg" alt="">
                    </div>
                    <div class="acordeon__contenido" data-target="c">
                        <div class="acordeon__contenido__detalle" data-target="c">
                            <article>
                                <p>Puedes consultar el límite de consumo de tu línea a través de los siguientes canales:</p>
                                <ul>
                                    <li>1. Llamando al 123, opción 2, opción 9</li>
                                    <li>2. Acercándote a cualquier Centro de Atención al Cliente</li>
                                    <li>3. Verificando la opción en tu recibo</li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

</section>

<div class="puntoFooter"></div>

@endsection