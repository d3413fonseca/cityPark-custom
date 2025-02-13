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
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de Clientes</h3>
          <ul class="float-sm-right" style="list-style: none;">
              <li>
                  <a href="{{route('admin.clientes.create')}}">
                      <button type="button" class="btn btn-success">
                          <i class="fa fa-plus-circle"></i>
                          &nbsp;&nbsp;&nbsp;Adicionar Cliente
                      </button>
                  </a>
              </li>
          </ul>
        </div>

        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 100px;">ID Cliente</th>
                            <th style="text-align: center;">Nome</th>
                            <th style="text-align: center;">E-mail</th>
                            <th style="text-align: center;">Nº Telefónico</th>
                            <th style="text-align: center;">RFID</th>
                            <th style="text-align: center; width: 150px;">Ferramentas</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($clientes as $value)
                        <tr>
                            <td style="vertical-align: middle"><b>{{$value->id}}</b></td>
                            <td style="vertical-align: middle; text-align: center;">{{$value->cli_name}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$value->cli_email}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$value->cli_phone}}</td>
                            <td style="vertical-align: middle; text-align: center;">{{$value->cli_rfidid}}</td>
                            <td style="width: 120px; text-align: center;">
                                <form action="{{ route('admin.clientes.destroy', $value->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.clientes.show', $value->id) }}"  class="btn btn-mini" title="Info">
                                        <i class="fa fa-info" style="color: #fff;"></i> 
                                    </a>
                                    <a href="{{ route('admin.clientes.edit', $value->id) }}"  class="btn btn-mini" title="Editar">
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
                            <th>ID Cliente</th>
                            <th style="text-align: center;">Nome</th>
                            <th style="text-align: center;">E-mail</th>
                            <th style="text-align: center;">Nº Telefónico</th>
                            <th style="text-align: center;">RFID</th>
                            <th style="text-align: center; width: 150px;">Ferramentas</th>
                        </tr>
                    </tfoot>
                </table>
        </div>  
        
        <div class="card-footer"></div>
      </div>
    </div>
</div>
@endsection