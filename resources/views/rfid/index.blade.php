@extends('dashboard')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">RFID</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">RFID</li>
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
                <h3 class="card-title">Lista de RFIDs</h3>
                <ul class="float-sm-right" style="list-style: none;">
                    <li>
                        <a href="{{route('admin.rfid.create')}}">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-plus-circle"></i>
                                &nbsp;&nbsp;&nbsp;Adicionar RFID
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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Cartão RFID</th>
                            <th style="text-align: center;">Estado</th>
                            <th style="text-align: center; width: 150px;">Ferramentas</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($rfid as $value)
                        <tr>
                            <td style="vertical-align: middle"><b>{{$value->rfid_mac}}</b></td>
                            <td style="vertical-align: middle; text-align: center;">{{$value->rfid_status}}</td>
                            <td style="width: 120px; text-align: center;">
                                <form action="{{route('admin.rfid.destroy', $value->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('admin.rfid.edit', $value->id)}}"  class="btn btn-mini" title="Editar">
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
                            <th>Cartão RFID</th>
                            <th style="text-align: center;">Estado</th>
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
@endsection

