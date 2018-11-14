@extends('admin.partes.index')

@section('title')
Pedidos registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Pedidos
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Pedidos</li>
        </ol>
    </section>
    <section class="content animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Fecha</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pedidos as $pedido)
                                <tr>
                                    <td align="center" width="10%">
                                    </td>
                                    <td class="text-center">{{$pedido->created_at}}</td>
                                    <td class="text-center">{{$pedido->cliente->nombre}}</td>
                                    <td class="text-center">{{$pedido->estado}}</td>
                                    <td class="text-center">
                                        <a type="button" href="/admin/pedidos/{{$pedido->id}}" title="Mostrar" class="btn btn-social-icon btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a type="button" href="/admin/pedidos/{{$pedido->id}}/edit" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Fecha</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <a title="Redactar un pedido" type="button" href="/admin/pedidos/create" class="btn btn-primary pull-right">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar un pedido
                        </a>                          
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@section('script') 
<script src="{{ asset('js/Pedidos.js') }}"></script>
@endsection