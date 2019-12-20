@extends("plantilla")
@section("principal")

     <head>
          <link rel="stylesheet" href="/css/styleDetalle.css">

     </head>

<div class="contenedor">
        <div class="cursos">
          <section id="video">
            <article class="curso">
              <div id="titulo">
                <h1  class="titulo">{{$producto->nombre}}</h1>
                <h2>Acerca de este curso</h2>
                <p>{{$producto->descripcion}}</p>
                <p> </p>
                <h3>Características</h3>
              </div>

              <video controls>
                
                <source src=\videos\video1.mp4 type=video/mp4>
                <source src=\videos\video1.mp4 type=video/ogg>
                
              </video> 
            </article>

            <div class="enlace">
                <a href="/carritoProductoAgregar/{{$producto->id}}" class="btn btn-warning btn-lg btn-block"><b>Comprar</b></a>
            {{-- </div>
            <div class="enlace"> --}}
                <a href="/carritoProductoAgregar/{{$producto->id}}" class="btn btn-primary btn-lg btn-block"><b>Ver mas productos</b></a>
            </div>
            <div class="precio">
              <h2>Precio</h2>
              <div class="circulo">
                <h3>$ {{$producto->precio}}</h3>
              </div>
            </div>
   
          </section>
        </div>
@endsection