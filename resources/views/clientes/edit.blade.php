@extends('dashboard')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cliente</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.clientes')}}">Clientes</a></li>
                        <li class="breadcrumb-item active">Editar</li>
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
                <h3 class="card-title">Editar <small>preencha o formulário</small></h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <b>Existem alguns problemas com os dados introduzidos!</b>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
                @endif
                
                <form action="{{ route('admin.clientes.update', $clientes->id) }}" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <!-- NOME -->
                        <div class="form-group row">
                            <label for="cli_name" class="col-sm-2 col-form-label">Nome*:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_name }}" type="text" name="cli_name" class="form-control" placeholder="Digite o seu nome">
                                </div>
                            </div>
                        </div>

                        <!-- E-MAIL -->
                        <div class="form-group row">
                            <label for="cli_email" class="col-sm-2 col-form-label">E-mail*:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_email }}" type="text" name="cli_email" class="form-control" placeholder="Digite o seu e-mail">
                                </div>
                            </div>
                        </div>

                        <!-- NÚMERO DE TELEMÓVEL -->
                        <div class="form-group row">
                            <label for="cli_phone" class="col-sm-2 col-form-label">Número de telefone:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_phone }}" type="text" name="cli_phone" class="form-control" placeholder="Digite o seu número de telefone">
                                </div>
                            </div>
                        </div>

                        <!-- ENDEREÇO -->
                        <div class="form-group row">
                            <label for="cli_address1" class="col-sm-2 col-form-label">Endereço*:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_address1 }}" type="text" name="cli_address1" class="form-control" placeholder="Digite o seu endereço">
                                </div>
                            </div>
                        </div>

                        <!-- ENDEREÇO SECUNDÁRIO -->
                        <div class="form-group row">
                            <label for="cli_address2" class="col-sm-2 col-form-label">Endereço secundário:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_address2 }}" type="text" name="cli_address2" class="form-control" placeholder="Digite o seu endereço secundário">
                                </div>
                            </div>
                        </div>

                        <!-- CÓDIGO POSTAL -->
                        <div class="form-group row">
                            <label for="cli_zipcode" class="col-sm-2 col-form-label">Código Postal*:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_zipcode }}" type="text" name="cli_zipcode" class="form-control" placeholder="Digite o seu código postal">
                                </div>
                            </div>
                        </div>

                        <!-- CIDADE -->
                        <div class="form-group row">
                            <label for="cli_city" class="col-sm-2 col-form-label">Cidade*:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_city }}" type="text" name="cli_city" class="form-control" placeholder="Digite a sua cidade">
                                </div>
                            </div>
                        </div>

                        <!-- NIF -->
                        <div class="form-group row">
                            <label for="cli_nif" class="col-sm-2 col-form-label">NIF*:</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input value="{{ $clientes->cli_nif }}" type="text" name="cli_nif" class="form-control" placeholder="Digite o seu NIF">
                                </div>
                            </div>
                        </div>

                        <!-- RFID - dropdown (fazer depois) -->
                        <div class="form-group row">
                            <label for="cli_rfidid" class="col-sm-2 col-form-label">RFID*:</label>
                            <div class="col-sm-10">
                                <select name="cli_rfidid" class="form-control">
                                    <option value="{{ $clientes->cli_rfidid }}" selected disabled>Selecione um RFID</option>
                                    @foreach ($rfid as $anrfid)
                                        <option value="{{ $anrfid->id }}" {{ $clientes->cli_rfidid == $anrfid->id ? 'selected' : '' }} >{{ $anrfid->rfid_mac }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <i>*Obrigatório</i>
                        </div>
                        
                        <div class="row">
                            <div class="col-6 ">
                                <button class="btn btn-primary float-sm-right cancel-button" data-route="admin/clientes">Cancelar</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.content -->
</div>
@endsection

