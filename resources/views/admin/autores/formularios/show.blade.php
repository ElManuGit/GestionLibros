@extends('admin.partes.index') @section('title') Autor @endsection 
@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Autor

        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Autores</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <!-- Perfil del autor -->
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-body box-profile text-center">
                                <img style="width:90px;height:90px" alt="User Avatar" class="profile-user-img img-responsive img-circle" src="http://localhost:8000/imagenes/autores/{{$autor->imagen}}">
                                <h3 class="profile-username text-center">{{$autor->nombre}}</h3>
                                <a class="text-center" href="{{$autor->apellido}}">{{$autor->apellido}}</a>
                                <ul class="list-group list-group-unbordered">

                                    <li class="list-group-item">
                                        <b>Nacionalidad</b> <a class="pull-right"></a>
                                        <br>
                                        <a class="text-center">{{$autor->nacionalidad}}</a><br>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Géneros</b> <a class="pull-right"></a>
                                        <br>
                                        <a class="text-center">Novela Poesia Cuento</a><br>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Cantidad de libros</b> <a class="pull-right"></a>
                                        <br>
                                        <label class="text-info">24</label><br>
                                    </li>
                                </ul>

                                <!-- Botones edición/eliminación-->
                                <div class="row">
                                    <div class="col-md-6 pull-left">
                                        <a href="http://localhost:8000/admin/autores" title="Volver a la pantalla anterior" class="btn btn-default btn-sm pull-left"><i class="fa fa-arrow-left"></i>  Volver</a>
                                    </div>
                                    <div class="col-md-3 pull-right">
                                        <a type="button" href="/admin/autores/{{$autor->id}}/edit" title="Editar" class="btn btn-warning btn-block btn-sm"><i class="fa fa-pencil">Editar</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-body">
                                <h3 class="profile-username text-center">Biografía</h3><br>
                                {{$autor->biografia}}
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
<script src="{{ asset('js/Autores.js') }}"></script>

<script>
                                                var token = '{{ csrf_token() }}';
</script>
@endsection
