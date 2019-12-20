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
          <div class="faq">

               <h1 class="titulo">Perfil de Usuario</h1>
               <hr class="lineahorizontal">

                    <div class="PERFIL" style="text-align: center;">
                    <img style="width: 150px; height: 150px;" class="imagenperfil" src="{{ Auth::user()->foto }}">
                    </div>
                    <div  style="color: white; text-align: center;">
                    {{ Auth::user()->name }}
                    {{ Auth::user()->surname }}<br>
                    {{ Auth::user()->email }}
                    </div>    

          </div>
     </section>
@endsection
