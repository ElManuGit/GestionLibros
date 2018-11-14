@extends('admin.partes.index') @section('title') Libro @endsection 
@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Registrar Libro
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
                        <form action="/admin/libros" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row"> 

                                <!-- Campo para titulo -->
                                <div class="col-md-3"> 
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" name="titulo" maxlength="50" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo para ISBN -->
                                <div class="col-md-1"> 
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input type="number" name="isbn" min="0000000000" max="9999999999999" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para fecha publicación -->
                                <div class="col-md-1"> 
                                    <div class="form-group">
                                        <label>Año</label>
                                        <input type="number" name="year_publicacion" min="1" max="2050" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para edicion -->
                                <div class="col-md-1"> 
                                    <div class="form-group">
                                        <label>Edición</label>
                                        <input type="text" name="edicion" class="form-control" maxlength="16" placeholder="Requerido" required>
                                    </div>
                                </div>

                                <!-- Campo para Idioma -->
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Idioma:</label>
                                        <select style="width: 100%"  name="idioma_id" class="form-control select2">
                                            <option></option>
                                            @foreach($idiomas as $idioma)
                                            <option value="{{$idioma->id}}">{{$idioma->nombre}}</option>                                                    
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>

                                <!-- Campo para redaccion de sinopsis -->
                                <div class="col-md-11"> 
                                    <div class="form-group">
                                        <label>Sinopsis</label>
                                        <textarea maxlength="5000" id="sinopsis" name="sinopsis" placeholder="Escriba aquí la sinopsis..." style="width: 100%;" rows="10" required></textarea>
                                    </div>
                                </div>

                                <!-- Campo para Género -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Género:</label>
                                        <select style="width: 100%"  name="genero_id" class="form-control select2">
                                            <option></option>
                                            @foreach($generos as $genero)
                                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>                                                    
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>

                                <!-- Campo para Autor -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Autor:</label>
                                        <select style="width: 100%"  name="autor_id" class="form-control select2">
                                            <option></option>
                                            @foreach($autores as $autor)
                                            <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->apellido}}</option>                                                    
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>

                                <!-- Campo para Editorial -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Editorial:</label>
                                        <select style="width: 100%"  name="editorial_id" class="form-control select2">
                                            <option></option>
                                            @foreach($editoriales as $editorial)
                                            <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>                                                    
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>

                                <!-- Campo para Tamaño -->
                                <div class="col-md-1"> 
                                    <div class="form-group">
                                        <label>Tamaño</label>
                                        <input type="text" name="tamano" maxlength="7" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Paginas -->
                                <div class="col-md-1"> 
                                    <div class="form-group">
                                        <label>Paginas</label>
                                        <input type="number" name="paginas" min="1" max="5000" class="form-control">
                                    </div>
                                </div>

                                <!-- Campo para Encuadernacion -->
                                <div class="col-md-2"> 
                                    <div class="form-group">
                                        <label>Encuadernación</label>
                                        <select style="width: 100%"  name="encuadernacion" class="form-control select2">
                                            <option value="Tapa blanda">Tapa blanda</option>
                                            <option value="Tapa Dura">Tapa dura</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Campo para carga de imagen -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imágen de portada</label>
                                        <input name="imagen" id="imagen" type="file" class="" >
                                    </div>
                                </div>
                                
                                <!-- Campo para Presentación -->
                                <div class="col-md-3"> 
                                    <div class="form-group">
                                        <label>Presentación</label>
                                        <input type="text" name="presentacion" maxlength="12" class="form-control">
                                    </div>
                                </div>

                                <button id="boton_submit_create" type="submit" class="btn btn-primary hide"></button>
                            </div> 
                        </form>
                        <br>
                        <!-- Footer con boton de registro -->

                        <div class="box-footer">
                            <div class="row pull-right">
                                <div class="col-md-12">
                                    <a href="http://localhost:8000/admin/libros" title="Volver a la pantalla anterior" class="btn btn-default"><i class="fa fa-trash"></i>  Descartar</a>
                                    <button type="button" class="btn btn-primary" onclick="$('#boton_submit_create').click()">
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
@endsection