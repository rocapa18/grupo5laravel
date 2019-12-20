@extends("plantilla")
@section("principal")
     <head>
          <link rel="stylesheet" href="/css/styleFaq.css">
     </head>
     <section>
               <div class="faq">
               
               <h1 class="titulo">Comentarios</h1>
               <a class="add" href="/contacto">[Agregar Nuevo Listado de Contacto]</a>

               <hr class="lineahorizontal">
                    <ol>                         
                    @foreach($contactos as $contacto)
                         <div class="FAQ"><li id="faq">
                         {{$contacto->email}}</li>  
                         <p>
                         {{$contacto->comentario}}
                         </p>
                         <p>
                              <a class="edit" href="/contactoEditar">[Modificar]</a>
                              <a class="remove" href="/contactoEliminar">[Eliminar]</a>
                         </p>
                         </div>    
                    @endforeach                    
                    </ol>
               </div>
     </section>
     {{$faqs->links()}}     
@endsection