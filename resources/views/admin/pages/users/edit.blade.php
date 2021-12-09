@extends('admin.master.master')

@section('title', 'Editar encargados')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('users.index')}}"><i class="fa fa-users" aria-hidden="true"></i> Encargados</a>
    </li>
    <li class="breadcrumb-item">
        <a href=""><i class="fa fa-edit" aria-hidden="true"></i> Editar Encargados</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    @include('admin.includes.alerts')
    <div class="page_user">
        <div class="row">
            <div class="col-md-12">
                <div class="panel shadow">



                <div class="col-md-14">
                    <div class="panel shadow">
                        <div class="header">
                            <h3 class="title"><i class="fas fa-address-card" aria-hidden="true"></i> Editar Informacion</h3>
                            {!! Form::open(['url' => '/admin/users/'.$user->id.'/edit', 'files' => true]) !!}
                    </div>
                        </div>
                        <div class="inside">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Nombre:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-keyboard" aria-hidden="true"></i> 
                                        </span>
                                    </div>
                                    {!! Form::text('name', $user->name,  [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>

                            <div class="col-md-4">
                                <label for="password">Cambiar contraseña:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-fingerprint" aria-hidden="true"></i> 
                                        </span>
                                    </div>
                                    {!! Form::password('password', [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>
                            <div class="col-md-4">
                                <label for="curp">CURP:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basuc-addon1">
                                            <i class="fas fa-passport"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('curp', $user->curp, [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>  
                            </div>
                            <div class="col-md-4 mtop16">
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-envelope-open" aria-hidden="true"></i> 
                                        </span>
                                    </div>
                                    {!! Form::text('email', $user->email,  [ 'class' => 'form-control', 'disabled']) !!}
                                </div>   
                            </div>
                            <div class="col-md-4 mtop16">
                                <label for="phone">Telefono:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-phone-square"></i> 
                                        </span>
                                    </div>
                                    {!! Form::text('phone', $user->phone,  [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>
                        </div>
                        {!! Form::submit('Actualizar', [ 'class' => 'btn btn-success mtop16']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection