
@extends("plantilla")
@section("principal")
     <head>
          <link rel="stylesheet" href="/css/styleFaq.css">
     </head>
     <section>
          <div class="animation">
               <div id="particles-js">
               </div>
          </div>
          <h1 class="titulo">Perfil</h1>
          <hr class="lineahorizontal">
          <img class="imagenperfil" src="/img/usuario.png" alt="Perfil de Usuario">
          <ul>     
          @foreach($perfiles as $perfil)       
              <p style="text-align: center;">
                  {{$perfil->name}}                                
              </p>
              <p style="text-align: center;">
               {{$perfil->email}}
               </p>
          </ul>
     </section>
@endsection