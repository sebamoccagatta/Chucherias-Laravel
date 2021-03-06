@extends('layouts.app')

@section('content')
  <section class="Supercontenedor separaciontop">
    <article class="contenedor1">
        <div class="centro">
          <h2>Centro de ayuda</h2>
          <br>
          <ul id="menu">
            <li><input type="checkbox" name="list" id="preguntasf" checked=""> <label for="preguntasf">Preguntas frecuentes</label>
              <ul class="interior">
                <li><a href="#r">Preguntas frecuentes</a></li>
              </ul>
            </li>
           <li><input type="checkbox"name="list" id="pagos"><label for="pagos">Pagos</label>
              <ul class="interior">
                <li><a href="#"id="pagos1">Formas de pago</a></li>
                <li><a href="#"id="pagos2">Pago seguro</a></li>
                <li><a href="#"id="pagos3">MercadoPago</a></li>
              </ul>
           </li>
           <li><input type="checkbox" name="list" id="facturacion"><label for="facturacion">Facturacion</label>
             <ul class="interior">
               <li><a href="#r"id="fac1">Formas de facturacion</a></li>
               <li><a href="#r"id="fac2"></a>Factura B</li>
             </ul>
           </li>
           <li><input type="checkbox" name="list" id="tucuenta"><label for="tucuenta">Tu cuenta</label>
             <ul class="interior">
               <li><a href="#">Como registrarse </a></li>
               <li><a href="#">Beneficios de crear una cuenta</a></li>
               <li><a href="#">Olvide mi contraseña</a></li>
               <li><a href="#">Modifica tus datos de contacto</a></li>
             </ul>
           </li>
           <li><input type="checkbox" name="list" id="envios"><label for="envios">Envios</label>
             <ul class="interior">
               <li><a href="#">Tipos de envio</a></li>
               <li><a href="#">Mira el estado de tu pedido</a></li>
               <li><a href="#">No llego mi producto</a></li>
               <li><a href="#">Historial de pedidos</a></li>
             </ul>compras
           </li>
           <li><input type="checkbox" name="list" id="compras"><label for="compras">Compras</label>
             <ul class="interior">
               <li><a href="#r">Como Comprar</a></li>
               <li><a href="#r">Comprar como invitado</a></li>
               <li><a href="#r"></a>Ver mis compras</li>
             </ul>
           </li>
           <li><input type="checkbox" name="list" id="devoluciones"><label for="devoluciones">Devoluciones</label>
             <ul class="interior">
               <li><a href="#r" id="dev1">Cancelar un pedido</a></li>
               <li><a href="#r"id="dev2">Garantias</a></li>
               <li><a href="#r"id="dev3">Devoluciones</a></li>
             </ul>
           </li>
           <li><a href="#r">Contactanos</a></li>
       </ul>
     </div>
   </article>
   {{-- preguntas frecuentes --}}
    <article class="contenedor2" >
      <div class="preg">
    <h2 id="subt">Preguntas frecuentes</h2>
    <br>
    <br>
    <div id="cambio">
    <ul>
    <li>¿Cómo busco mi producto?</li>
    <br>
    <p>Dentro del sitio contamos con un buscador de productos localizado a en la parte superior de nuestra página, al introducir el artículo te daremos sugerencias para ayudarte a encontrar el artículo que estas buscando o artículos similares</p>
    <br>
    <br>
    <li>¿Cómo hago para retirar el pedido en la tienda?</li>
    <br>
    <p>Al momento del ingresar tus datos, elegí la opción Retiro en tienda.</p>
    <br>
    <br>
    <li>¿Que pasa si:
      No puedo comprar el artículo/ No lo puedo agregar a carrito o si Aparece como no disponible?</li>
    <br>
    <p>Nuestro inventario tiene alta rotación y es probable que en el momento que desees comprar ya no tengamos el artículo disponible. Estamos actualizando y surtiendo nuestros inventarios constantemente, pero no queremos vender algo que no podremos entregar. Recuerda que puedes usar la opción de “Notificarme cuando esté disponible” para que en cuanto el producto este en existencia te llegue un correo y lo puedas comprar.</p>
    <br>
    <br>
    <li>¿Cómo cancelo mi pedido?</li>
    <br>
    <p>Para cancelar la compra deberás llamar al 0810-444-4444, indicando el N° de pedido. En el caso de pago en línea la cancelación y reintegro del monto abonado, puede demorar hasta 48 hs hábiles.</p>
    <br>
    <br>
    <li>¿Puedo tener más de una dirección de entrega?</li>
    <br>
    <p>Sí, podes tener más de una dirección de entrega (ej. Casa, oficina) Para agregar una dirección de entrega nueva tenés que seguir los siguientes pasos:</p>
    <br>
    <br>
      <ul>
          <li>Ingresá a la página con tu usuario</li>
          <li>Hacé click en el botón "Actualizar Registro", sobre el margen superior derecho</li>
          <li>Una vez dentro de la actualización, clickeá sobre la solapa "Mis Direcciones</li>
          <li>Agregá direcciones de entrega o edita las ya existentes</li>
          <li>Guardá los cambios con el botón "Guardar"</li>
      </ul>
    <br>
    <br>
    <li>¿Cuáles son los costos de envío? ¿Cómo se calculan?</li>
    <br>
    <p>Los costos de envío se calcularán de acuerdo al lugar de entrega, tipo o tiempo, piezas enviadas y dimensiones del pedido.
    Nos aliamos con nuestras paqueterías para hacer las entregas de los pedidos y te aseguramos que tenemos precios bajos, hasta en el envío.
    Puedes encontrar el costo de tu envío en el resúmen de tu pedido una vez ingresanda la dirección de entrega.</p>
    <br>
    <br>
    <li>¿Cómo saber si se hizo o no el pago?</li>
    <br>
    <p>Si tu pago fue realizado, recibirás un correo electrónico con un mensaje de confirmación. En caso de que esto no suceda comunicate con nosotros.</p>
    <br>
    <br>
    <li>¿Cuáles son los medios de pago habilitados?</li>
    <br>
    <p>MercadoPago (aplica para envío a domicilio y retiro en sucursal). Podés consultar las promociones vigentes de Mercadopago aquí
      Pago contra entrega (aplica únicamente para retiro en sucursal). Podés consultar las promociones vigentes para esta modalidad aquí</p>
    <br>
    <br>
    <li>¿Qué pasa si no hay nadie en el domicilio al momento de la entrega?</li>
    <br>
    <p>Nuestro personal se comunicará con vos para reprogramar la entrega.</p>
    <br>
    <br>
    <li>¿Puedo dejar un pedido sin confirmar y continuar haciéndolo en otro momento, una vez que salí de la página?</li>

    <br>
    <p>Podes dejar pendiente de confirmación un pedido y continuar haciéndolo más tarde, sin perder los productos que habías seleccionado en tu carrito.</p>
    <br>
    <br>
    </ul>
    </div>
    </div>
    </article>
  </section>
  <script  src="/js/preguntasFrecuentes.js" type="application/javascript"></script>

@endsection
