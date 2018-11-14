@extends('admin.partes.index') @section('title') Colecciones @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Registrar Colección
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Colecciones</li>
        </ol>
    </section>

    <form action="/admin/colecciones" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

        <!-- Inicio formulario de Libro -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">


                    <section id="wizard">
                        <div id="rootwizard">
                            <!-- Pestañas -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li id="cabecera-principal" class="active"><a href="#principal" data-toggle="tab" onfocus="activar_panel_colecciones()">Datos de la colección</a></li>
                                    <li id="cabecera-secundaria"><a href="#secundario" data-toggle="tab" onfocus="activar_panel_libros()">Libros</a></li>
                                    <li id="cabecera-finalizar"><a href="#finalizar" data-toggle="tab" onfocus="activar_panel_finalizar()">Finalizar</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="bar" class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                    </div>

                                    <!-- Panel de datos de la colección -->
                                    <div class="tab-pane active" id="principal">
                                        <div class="box-body ">

                                            <!-- Campo para titulo -->
                                            <div class="col-md-3"> 
                                                <div class="form-group">
                                                    <br>
                                                    <label>Nombre</label>
                                                    <input type="text" id="nombre" name="nombre" class="form-control" onchange="asignar_valores()" placeholder="Campo obligatorio" required>
                                                </div>
                                            </div>

                                            <!-- Campo para tipo -->
                                            <div class="col-md-2"> 
                                                <div class="form-group">
                                                    <br><label>Tipo</label>
                                                    <input type="text" id="tipo" name="tipo" class="form-control" onchange="asignar_valores()" placeholder="Campo obligatorio" required>
                                                </div>
                                            </div>

                                            <!-- Campo para redaccion de descripción -->
                                            <div class="col-md-11"> 
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea  id="descripcion" name="descripcion" onchange="asignar_valores()" placeholder="Escriba aquí una breve descripción..." style="width: 100%;" rows="10" required></textarea>
                                                </div>
                                            </div>

                                            <!--Footer con botones que se acomodan a la resolución de la pantalla-->
                                            <div class="box-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="pull-right">
                                                            <a type="button" onclick="activar_panel_libros()" class="btn btn-primary">
                                                                <i class="fa fa-arrow-right"></i> &nbsp;Siguiente
                                                            </a>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Panel de libros -->
                                    <div class="tab-pane" id="secundario">
                                        <div class="box-body ">

                                            <!--Tabla de libros para agregar a la coleccion-->
                                            <table id="example" class="display example" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Portada</th>
                                                        <th class="text-center">Título</th>
                                                        <th class="text-center">Autor</th>
                                                        <th class="text-center">Edicion</th>
                                                        <th class="text-center">Stock</th>
                                                        <th class="none text-center">ISBN</th>
                                                        <th class="none text-center">Año de publicación</th>
                                                        <th class="none text-center">Editorial</th>
                                                        <th class="none text-center">Género</th>
                                                        <th class="none text-center">Lengua</th>
                                                        <th class="none text-center">Páginas</th>
                                                        <th class="none text-center">Tamaño</th>
                                                        <th class="none text-center">Disponible a clientes</th>
                                                        <th class="text-center">Tildar para agregar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($libros as $libro)
                                                    <tr>
                                                        <td align="center" width="10%">
                                                            <img style="width:50px;height:50px" class="img-responsive" src="http://localhost:8000/imagenes/libros/{{$libro->imagen}}">
                                                        </td>
                                                        <td class="text-center">{{$libro->titulo}}</td>

                                                        <td class="text-center">
                                                            @foreach($libro->Autores as $autor)
                                                            {{$autor->nombre}} {{$autor->apellido}}
                                                            @endforeach
                                                        </td>
                                                        <td class="text-center">{{$libro->edicion}}</td>
                                                        <td class="text-center">{{$libro->stock}}</td>
                                                        <td class="text-center">{{$libro->isbn}}</td>
                                                        <td class="text-center">{{$libro->year_publicacion}}</td>
                                                        <td class="text-center">{{$libro->editorial->nombre}}</td>
                                                        <td class="text-center">{{$libro->genero->nombre}}</td>
                                                        <td class="text-center">{{$libro->lengua}}</td>
                                                        <td class="text-center">{{$libro->paginas}}</td>
                                                        <td class="text-center">{{$libro->tamano}}</td>
                                                        @if ($libro->estado)
                                                        <td class="text-center"> Si</td>
                                                        @elseif (!$libro->estado)
                                                        <td class="text-center"> No</td>
                                                        @endif

                                                        <td class="text-center" width="100">
                                                            <input type="checkbox" class="checkbox-agregar-coleccion" id="check-{{$libro->id}}" id_elemento="{{$libro->id}}" onChange="actualizar_array('{{$libro->id}}')"/>
                                                        </td>    

                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-center">Portada</th>
                                                        <th class="text-center">Título</th>
                                                        <th class="text-center">Autor</th>
                                                        <th class="text-center">Edicion</th>
                                                        <th class="text-center">Stock</th>
                                                        <th class="none text-center">ISBN</th>
                                                        <th class="none text-center">Año de publicación</th>
                                                        <th class="none text-center">Editorial</th>
                                                        <th class="none text-center">Género</th>
                                                        <th class="none text-center">Lengua</th>
                                                        <th class="none text-center">Páginas</th>
                                                        <th class="none text-center">Tamaño</th>
                                                        <th class="none text-center">Disponible a clientes</th>
                                                        <th class="text-center">Tildar para agregar</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <input type="hidden" id="libros" name="libros[]"/>
                                        </div>
                                        <!--Footer con botones que se acomodan a la resolución de la pantalla-->
                                        <div class="box-footer">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="">
                                                        <a type="button" onclick="activar_panel_colecciones()" class="btn btn-primary pull-left">
                                                            <i class="fa fa-arrow-left"></i> &nbsp;Atras
                                                        </a>
                                                        <a type="button" onclick="activar_panel_finalizar()" class="btn btn-primary pull-right">
                                                            <i class="fa fa-arrow-right"></i> &nbsp;Siguiente
                                                        </a>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Panel finalizar -->
                                    <div class="tab-pane" id="finalizar">
                                        <div class="box-body ">
                                            <!-- Campo para titulo -->
                                            <div class="col-md-3"> 
                                                <div class="form-group">
                                                    <br>
                                                    <label>Nombre</label>
                                                    <input type="text" id="nombre-final" class="form-control" disabled>
                                                </div>
                                            </div>

                                            <!-- Campo para tipo -->
                                            <div class="col-md-2"> 
                                                <div class="form-group">
                                                    <br><label>Tipo</label>
                                                    <input type="text" id="tipo-final" class="form-control" disabled>
                                                </div>
                                            </div>

                                            <!-- Campo para tipo -->
                                            <div class="col-md-2"> 
                                                <div class="form-group">
                                                    <br><label>Cantidad de libros</label>
                                                    <input type="number" id="cantidad_libros" class="form-control" disabled>
                                                </div>
                                            </div>

                                            <!-- Campo para redaccion de descripción -->
                                            <div class="col-md-11"> 
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea  id="descripcion-final" disabled rows="10" style="width: 100%;"></textarea>
                                                </div>
                                            </div>
                                            <button id="boton_submit_create" type="submit" class="btn btn-primary hide"></button>
                                            <div class="box-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="">
                                                            <a type="button" onclick="activar_panel_libros()" class="btn btn-primary pull-left">
                                                                <i class="fa fa-arrow-left"></i> &nbsp;Atras
                                                            </a>
                                                            <a type="button" onclick="$('#boton_submit_create').click()" class="btn btn-primary pull-right">
                                                                <i class="fa fa-arrow-right"></i> &nbsp;Guardar
                                                            </a>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div> 
        </section>
    </form>
</div>
@endsection 
@section('script')
<script src="{{ asset('js/Colecciones.js') }}"></script>
<script>
                                                                                //Setear la barra al 30%
                                                                                $('#rootwizard .progress-bar').css({width: '33%'});
                                                                                $(document).ready(function () {
                                                                        $('#rootwizard').bootstrapWizard({onNext: function (tab, navigation, index) {

                                                                        // Set the name for the next tab
                                                                        $('#finalizar').html('Resumen de: ' + $('#nombre').val());
                                                                        }, onTabShow: function (tab, navigation, index) {
                                                                        var $total = navigation.find('li').length;
                                                                                var $current = index + 1;
                                                                                var $percent = ($current / $total) * 100;
                                                                        }});
                                                                                window.prettyPrint && prettyPrint()
                                                                        });
</script>
@endsection