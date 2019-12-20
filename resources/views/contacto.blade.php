@extends("plantilla")
@section("principal")
<ul class="errores" style="color: red;">
    @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
    @endforeach
</ul>
<head>
    <link rel="stylesheet" href="/css/styleContacto.css">
</head>
<!--
<div class="animation">
    <div id="particles-js">
    </div>
</div>
   -->       
<div class="contacto">
    <h1 class="titulo">Contacto</h1>
    <!--
    <a style="text-align: center;" href="/contactoListado">[Ver Listado de Contactos]</a>-->
    <hr class="lineahorizontal">

    <form action="/contacto" method="post">
        {{csrf_field()}}
        <div class=email>
            <label for="email">Email</label>
            <div >
            <input type="email" id="email" name="email" value="{{old("email")}}">
            </div>
        </div> 

        <div class=comentario>
            <label for="comentario">Comentarios</label>
            <div id="textarea">
            <textarea name="comentario" id="comentario" cols="90" rows="5" value="{{old("comentario")}}">                    
            </textarea>
            </div>
        </div> 
        <div>
            <button class="btn btn-warning mb-2 boton-submit">Enviar Comentario</button>
        </div>      
    </form>
</div>

@endsection