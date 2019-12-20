@extends("plantilla")
@section("principal")
<ul class="errores" style="color: red;">
    @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
    @endforeach
</ul>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Nuevo Producto</b></div>

                <div class="card-body">
                    <form method="POST" action="/agregarProducto" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="nombre" class="col-md-5 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-7">
                                <input id="nombre" type="text" name="nombre" class="form-control>"  autocomplete="nombre" autofocus value="{{old("nombre")}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-5 col-form-label text-md-right">Descripcion</label>

                            <div class="col-md-7">
                                <input id="descripcion" type="text" name="descripcion" class="form-control>"  autocomplete="descripcion" autofocus 
                                value="{{old("descripcion")}}"> 
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="detalle" class="col-md-5 col-form-label text-md-right">Detalle</label>

                            <div class="col-md-7">
                                <input id="detalle" type="text" name="detalle" class="form-control>"  autocomplete="detalle" autofocus value="{{old("detalle")}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="precio" class="col-md-5 col-form-label text-md-right">Precio</label>

                            <div class="col-md-7">
                                <input id="precio" type="text" name="precio" class="form-control>"  autocomplete="precio" autofocus value="{{old("precio")}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="imagen" class="col-md-5 col-form-label text-md-right">Imagen</label>

                            <div class="col-md-7">
                                <input id="imagen" type="file" name="imagen" class="form-control>" autocomplete="imagen" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-primary">
                                    Grabar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
