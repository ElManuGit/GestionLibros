@extends('admin.partes.index') @section('title') Libro @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Edición del Libro
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Libros</li>
        </ol>
    </section>

    <!-- Inicio formulario de Libro -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')

                        <!-- Form de creación de Libro -->
                        <form action="/admin/libros/{{$libro->id}}" method="POST" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row"> 

                                <!-- Campo para titulo -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" value="{{$libro->titulo}}" name="titulo" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo para ISBN -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input type="text" value="{{$libro->isbn}}" name="isbn" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Género -->
                                <div class="form-group col-md-2">
                                    <label>Género:</label>
                                    <select style="width: 100%"  name="genero_id" id="genero_id" class="select2 form-control">
                                        @foreach($generos as $genero)
                                        <option value="{{$genero->id}}">{{$genero->nombre}}</option>                                                    
                                        @endforeach
                                    </select> 
                                </div>

                                <!-- Campo para Autor -->
                                <div class="form-group col-md-2">
                                    <label>Autor:</label>
                                    <select style="width: 100%"  name="autor_id" id="autor_id" class="select2 form-control">
                                        @foreach($autores as $autor)
                                        <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->apellido}}</option>                                                    
                                        @endforeach
                                    </select> 
                                </div>

                                <!-- Campo para Editorial -->
                                <div class="form-group col-md-2">
                                    <label>Editorial:</label>
                                    <select style="width: 100%"  name="editorial_id" id="editorial_id" class="select2 form-control">
                                        @foreach($editoriales as $editorial)
                                        <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>                                                    
                                        @endforeach
                                    </select> 
                                </div>


                                <!-- Campo para fecha publicación -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Año de publicación</label>
                                        <input type="number" name="year_publicacion" min="1" max="2050" value="{{$libro->year_publicacion}}" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Campo para edicion -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Edición</label>
                                        <input type="text" name="edicion" value="{{$libro->edicion}}" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo para redaccion de sinopsis -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Sinopsis</label>
                                        <textarea maxlength="5000" name="sinopsis" placeholder="Escriba aquí la sinopsis..." style="width: 100%;" rows="10" required>{{$libro->sinopsis}}</textarea>
                                    </div>
                                </div>

                                <!-- Campo para Tamaño -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Tamaño</label>
                                        <input type="text" name="tamano" min="1" max="3000" value="{{$libro->tamano}}" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Paginas -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Paginas</label>
                                        <input type="number" name="paginas" value="{{$libro->paginas}}" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Encuadernacion -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Encuadernación</label>
                                        <input type="text" name="encuadernacion" value="{{$libro->encuadernacion}}" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Lengua -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Lengua</label>
                                        <input type="text" name="lengua" value="{{$libro->lengua}}" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Presentación -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Presentación</label>
                                        <input type="text" name="presentacion" value="{{$libro->presentacion}}" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Stock -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Stock</label>
                                        <input type="number" name="stock" value="{{$libro->stock}}" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para carga de imágen -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imágen del libro</label>
                                        <img style="width:150px;height:150px" alt="User Avatar" class="img-responsive" src="http://localhost:8000/imagenes/libros/{{$libro->imagen}}">
                                        <br>
                                        <input name="imagen" id="imagen" type="file" class="">
                                    </div>
                                </div>

                                <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                            </div> 
                        </form>
                        <br>
                        <!-- Footer con boton de registro -->

                        <div class="box-footer">
                            <div class="row pull-right">
                                <div class="col-md-12">
                                    <a href="http://localhost:8000/admin/libros" title="Volver a la pantalla anterior" class="btn btn-default"><i class="fa fa-trash"></i>  Descartar</a>
                                    <button type="button" class="btn btn-primary" onclick="$('#boton_submit_update').click()">
                                        <i class="fa fa-plus-circle"></i> &nbsp;Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                               
            </div>
    </section>
</div>


@endsection 

@section('script')
<script src="{{ asset('js/Libros.js') }}"></script>

<script>
                                        //Con esa cosa seteamos el valor del select
                                        $('#editorial_id').val('{{$libro->editorial_id}}').trigger("change");
                                        $('#genero_id').val('{{$libro->genero_id}}').trigger("change");
</script>
@endsection