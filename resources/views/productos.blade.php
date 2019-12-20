@extends("plantilla")
@section("principal")

<head>
<link rel="stylesheet" href="/css/styleProductos.css">
</head>

@guest
@else
  <div>
    @if (Auth::user()->admin == 1)
    <a class="add" href="/productosNuevo">Agregar Nuevo Curso</a>  
    @endif
  </div>
@endguest

  @forelse($productos as $producto)
    <article class="product">
          <div class="photo-container">
            @if ($producto->imagen)
              <img src="/storage/{{$producto->imagen}}">
            @else
              <img src="/img/1.jpg">
            @endif
          </div>
          <div class="titulo">
            <h2>{{$producto->nombre}}</h2>
          </div>
          <div class="descripcion">
            <p>{{$producto->descripcion}}</p>
          </div>
          <div class="botones">
          <a class="more" href="/detalle/{{$producto->id}}">Detalle</a>
          <a class="more" href="/carritoProductoAgregar/{{$producto->id}}">Comprar</a>
          </div>
          
          @guest
          @else
            <div>
              @if (Auth::user()->admin == 1)
                    <a class="edit" 
                    href="/detalleEditar/{{$producto->id}}">Modificar</a>
                    <a class="remove" href="/productosEliminar/{{$producto->id}}">Eliminar</a>
              @endif
            </div>
          @endguest

    </article>
  @empty
    <article style="text-align: center; color: white;">
      <br><br><br>
      <h4>No hay productos disponibles</h4>
    </article>
  @endforelse
    
<!--
</section>
-->


@endsection