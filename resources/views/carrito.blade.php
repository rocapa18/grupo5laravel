@extends("plantilla")
@section("principal")

<head>
    
    <link rel="stylesheet" href="css/styleCarrito.css">
    <title>PruebaCarrito</title>
</head>
<body>
    <div class="contenedor">

        <div class="titulo">

            <h1>Carrito de Compras</h1>

            <img src="img/carrito.ico" alt="">

        </div>

        

        <div class="articulo">

            <ul class="img">
                <li><img class="borra" src="img/borrar.jpg" alt=""></li>
                <li><img class="curso" src="img\1.jpg" alt="curso"></li>
                <li><h2>PHP y MySQL</h2></li>
            </ul>
            <div class="subt">
                <ul class="subt">
                    <li><h2>Precio</h2></li>
                    <li><h2>Cantidad</h2></li>
                    <li><h2>Subtotal</h2></li>
                </ul>
            </div>
            <ul class="precio">
                
                <li><h2>12U$S</h2></li>
                <li><h2>1</h2></li>
                <li><h2>12U$S</h2></li>
            </ul>



        </div>

        <div class="articulo">

            <ul class="img">
                <li><img class="borra" src="img/borrar.jpg" alt=""></li>
                <li><img class="curso" src="img\2.jpg" alt="curso"></li>
                <li><h2>Bootstrap 4</h2></li>
            </ul>

            <div class="subt">
                <ul class="subt">
                    <li><h2>Precio</h2></li>
                    <li><h2>Cantidad</h2></li>
                    <li><h2>Subtotal</h2></li>
                </ul>
            </div>
            <ul class="precio">         
    
                <li><h2>10U$S</h2></li>
                <li><h2>1</h2></li>
                <li><h2>22U$S</h2></li>
            </ul>

        </div>

        <div class="pagar">
            <ul>
                <li><h2>Total: 22U$S</h2></li>
                <li><button>Pagar</button></li>
            </ul>

        </div>

        
    </div>

    
</body>
</html>
@endsection