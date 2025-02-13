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
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.clientes')}}">Clientes</a></li>
                <li class="breadcrumb-item active">Info</li>
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
                <h3 class="card-title">Informações de {{ $clientes->cli_name }}</h3>
                <ul class="float-sm-right" style="list-style: none;">
                    <li>
                        <button type="button" class="btn btn-danger cancel-button" data-route="admin/clientes">
                            <i class="fas fa-angle-double-left"></i>
                            &nbsp;&nbsp;&nbsp;Voltar
                        </button>
                    </li>
                </ul>
            </div>
        <div class="card-body">
            

            <div class="form-group row">
                <b>ID:</b>&nbsp; {{ $clientes->id }}          
            </div>  
            
            <div class="form-group row">
                <b>Nome:</b>&nbsp; {{ $clientes->cli_name }}          
            </div>  
            
            <div class="form-group row">
                <b>E-mail:</b>&nbsp; {{ $clientes->cli_email }}         
            </div> 

            <div class="form-group row">
                <b>Número de Telefone:</b>&nbsp; {{ $clientes->cli_phone }}         
            </div>  
            
            <div class="form-group row">
                <b>Endereço:</b>&nbsp; {{ $clientes->cli_address1 }}         
            </div>
            <div class="form-group row">
                <b>Endereço secundário:</b>&nbsp; {{ $clientes->cli_address2 }}         
            </div>

            <div class="form-group row">
                <b>Código Postal:</b>&nbsp; {{ $clientes->cli_zipcode }}         
            </div> 

            <div class="form-group row">
                <b>Cidade:</b>&nbsp; {{ $clientes->cli_cddity }}          
            </div> 

            <div class="form-group row">
                <b>NIF:</b>&nbsp; {{ $clientes->cli_nif }}          
            </div>  

            <div class="form-group row">
                <b>RFID:</b>&nbsp; {{ $clientes->cli_rfidid }}          
            </div>  
      </div>
    </div>
</div>
@endsection