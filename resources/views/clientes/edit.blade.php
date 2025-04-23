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
                <h3 class="card-title">Editar <small>altere os dados no formulário</small></h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Existem Alguns problemas com os dados introduzidos!
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
                @endif
                
                <form method="post" action="{{route('admin.client.update', $clientes->id)}}" class="form-horizontal">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome do Cliente: <span class="text-red">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="cli_name" class="form-control" 
                                           value="{{ old('cli_name', $clientes->cli_name) }}"
                                           placeholder="Digite o nome do cliente">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail: <span class="text-red">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                    </div>
                                    <input type="text" name="cli_email" class="form-control"                                            
                                           value="{{ $clientes->cli_email }}"
                                           placeholder="Digite o e-mail do cliente">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Telefone: <span class="text-red">*</span></label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" 
                                           name="cli_phone" value="{{ $clientes->cli_phone }}"
                                           data-inputmask='"mask": "(999) 999 999 999"' data-mask>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Morada: <span class="text-red">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text" name="cli_address1" class="form-control" 
                                           value="{{ $clientes->cli_address1 }}"
                                           placeholder="Digite a morada">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text" name="cli_address2" class="form-control" 
                                           value="{{ $clientes->cli_address2 }}"
                                           placeholder="Digite a morada">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Código-Postal: <span class="text-red">*</span></label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" 
                                           name="cli_zipcode" value="{{ $clientes->cli_zipcode }}"
                                           data-inputmask='"mask": "9999-999"' data-mask>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Localidade: <span class="text-red">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" 
                                           name="cli_city" value="{{ $clientes->cli_city }}"
                                           placeholder="Digite a localidade">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">NIF: <span class="text-red">*</span></label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" 
                                           name="cli_nif" value="{{ $clientes->cli_nif }}"
                                           data-inputmask='"mask": "999999999"' data-mask>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Cartão RFID:</label>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-car"></i></span>
                                    </div>
                                    <select class="form-control" name="cli_rfidid" id="cli_rfidid">
                                        <option value="">Selecione um RFID...</option>
                                        @php 
                                            $oldRfid = '';
                                        @endphp
                                        @if($hasRFID)
                                            <option value="{{ $hasRFID->id}}" selected>{{ $hasRFID->rfid_mac }}</option>
                                            @php
                                                $oldRfid = $hasRFID->id;
                                            @endphp
                                        @endif
                                        @foreach ($RFIDs as $RFID)                                        
                                            <option value="{{ $RFID->id}}">{{ $RFID->rfid_mac }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="cli_old_rfidid" value="{{ $oldRfid }}">
                                </div>
                            </div>
                        </div>
                        <br><br>
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

