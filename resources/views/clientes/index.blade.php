@extends('dashboard')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista de Clientes</h3>
                <ul class="float-sm-right" style="list-style: none;">
                    <li>
                        <a href="{{route('admin.client.create')}}">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-plus-circle"></i>
                                &nbsp;&nbsp;&nbsp;Adicionar Cliente
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success" style="vertical-align: middle;">
                    <p style="font-weight: bold; font-size: 14px; margin-top: 10px;">{{$message}}</p>
                </div>
                @endif
                <table id="clientsTable" class="table table-bordered table-striped datatableList">
                    <thead>
                        <tr>
                            <th>Nome do Cliente</th>
                            <th>Email</th>
                            <th style="text-align: center;">Telefone</th>
                            <th style="text-align: center; width: 150px;">Ferramentas</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($clients as $client)
                        <tr>
                            <td style="vertical-align: middle">
                                <b>{{$client->cli_name}}</b>
                                <a href='#' data-toggle='modal' data-target='#clientInformation' data-title='{{$client->cli_name}}' data-id='{{$client->id}}' data-topico='Informação do Cliente' class='btn-xs'><i class="fa fa-info-circle blue"></i></a>
                            </td>
                            <td style="vertical-align: middle"><b>{{$client->cli_email}}</b></td>
                            <td style="vertical-align: middle; text-align: center;">{{$client->cli_phone}}</td>
                            <td style="width: 120px; text-align: center;">
                                <form action="{{route('admin.client.destroy', $client->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('admin.client.edit', $client->id)}}"  class="btn btn-mini" title="Editar">
                                        <i class="fa fa-edit" style="color: #fff;"></i> 
                                    </a>
                                    <button type="submit" class="btn btn-mini" title="Eliminar"><i class="fa fa-trash" style="color: #fff;"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nome do Cliente</th>
                            <th>Email</th>
                            <th style="text-align: center;">Telefone</th>
                            <th style="text-align: center; width: 150px;">Ferramentas</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer"></div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.content -->
</div>

<!-- Modal Client Information -->
<div class="modal fade" id="clientInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="informationTitle">Informação do Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="margin-top: -25px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Preload GIF (hidden initially) -->
                <div id="preload" style="display: none; text-align: center;">
                    <img src="{{ URL::asset('images/orderPreload.gif') }}" alt="Carregando..." />
                </div>
                <!-- Content (hidden during preload) -->
                <div id="content" style="display: none;">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td style="text-align: right;"><strong>Nome do Cliente: </strong></td>
                                <td style="width: 300px;"><span id="cli_name"></span></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;"><strong>E-mail: </strong></td>
                                <td><span id="cli_email"></span></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;"><strong>Telefone: </strong></td>
                                <td><span id="cli_phone"></span></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;"><strong>Morada: </strong></td>
                                <td><span id="cli_address1"></span></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;"><strong></strong></td>
                                <td><span id="cli_address2"></span></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;"><strong>Código Postal: </strong></td>
                                <td><span id="cli_zipcode"></span></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;"><strong>Localidade: </strong></td>
                                <td><span id="cli_city"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" value="" id="registo">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

@endsection

