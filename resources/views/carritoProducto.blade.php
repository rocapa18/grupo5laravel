@extends("plantilla")
@section("principal")


<head>
    <link rel="stylesheet" href="/css/styleCarrito.css">
    <title>Carrito</title>
</head>
<body>
    <div class="contenedor">
        <div class="titulo">
            <h1>Carrito de Compras</h1> 
            <h2 style="color: white;">Total: $ {{number_format($importeTotal, 2)}} </h2> 
        </div>
       
        @forelse($carritosProductos as $carritoProducto) 
        <div>       
            <div class="articulo">
                <ul class="img">
                    <li><a class="remove" href="/carritoProductoEliminar/{{$carritoProducto->id}}"><img class="borra" src="/img/borrar.jpg" alt="">
                    </a></li>
                    
                    <li><img class="curso" src="
                        @if($carritoProducto->producto)
                            /storage/{{$carritoProducto->producto->imagen}}
                        @else 
                            /img/1.jpg
                        @endif
                        " alt="curso"></li>
                    <li>
                        <h2>
                            @if($carritoProducto->producto)
                                 {{$carritoProducto->producto->nombre}}
                            @endif
                        </h2>
                    </li>                    

                </ul>                
                <div class="subt">
                    <ul class="subt">
                        <li><h2>Precio</h2></li>
                        <li><h2>Cantidad</h2></li>
                        <li><h2>Subtotal</h2></li>
                    </ul>
                </div>                
                <ul class="precio">
                    <li><h2>{{number_format($carritoProducto->precio, 2)}}</h2></li>
                    <li><h2>1</h2></li>
                    <li><h2>{{number_format($carritoProducto->precio, 2)}}</h2></li>
                </ul>
            </div>
        </div>       
        @empty
            <article style="text-align: center; color: white;">
              <br><br><br><br><br><br>
              <h4>No existen productos Seleccionados para comprar !...</h4>
              <br><br><br>
              <br><br>  
            </article>            
        @endforelse
    </div>
    @if($importeTotal > 0)
        <div class="pagar">
            <ul>
                <li><h2>Total: $ {{number_format($importeTotal, 2)}}</h2></li>
                <li>
                <a mp-mode="dftl" href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=22762820-ac215979-3e5c-4916-9d44-2fc5f08b6e90" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar</a>
                <script type="text/javascript">
                (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                </script>
                </li>
            </ul>
        </div>     
    @endif
    <div class="pagar" style="text-align: center;">
        <a href="/productos"><button class="btn btn-warning mb-2 boton-submit">Volver a Productos</button></a>
        <a href="/carritoProductoNuevo"><button class="btn btn-primary mb-2 boton-submit">Nueva Compra</button></a>        
    </div>
</body>
</html>

@endsection
