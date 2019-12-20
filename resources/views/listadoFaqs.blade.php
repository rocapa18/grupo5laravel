@extends("plantilla")
@section("principal")
     <head>
          <link rel="stylesheet" href="/css/styleFaq.css">
     </head>
     <section>
               <!-- <div class="faq">-->
               
               <h1 class="titulo">Preguntas Frecuentes</h1><a class="add" href="/faqNuevo"><!--[Agregar Nueva Pregunta]--></a>

               <hr class="lineahorizontal">
               <ul>                
               @foreach($faqs as $faq)
                    <div class="FAQ"> <li id="faq">
                    {{$faq->pregunta}}  </li> 
                    <!--
                    <a class="edit" href="/faqEditar">[Modificar]</a>
                    <a class="remove" href="/faqEliminar">[Eliminar]</a>
                    -->
                    <p>
                    {{$faq->respuesta}}
                    </p>
                    </div>    
               @endforeach                    
               </ul>
               <!-- </div> -->

     </section>
     {{$faqs->links()}}     
@endsection



