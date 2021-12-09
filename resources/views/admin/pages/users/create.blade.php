@extends('admin.master.master')

@section('title', 'Nuevo encargado')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('users.index')}}"><i class="fa fa-users" aria-hidden="true"></i> Encargados</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{route('users.create')}}"><i class="fa fa-users" aria-hidden="true"></i> Nuevo encargado</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    @include('admin.includes.alerts')
    <div class="page_user">
        <div class="row">
            <div class="col-md-4">
            {!! Form::open(['route' => 'users.store', 'files' => true]) !!}
                <div class="panel shadow mtop16">
                    <div class="header">
                        <h3 class="title"><i class="fas fa-fingerprint"></i> Crear contraseña</h3>
                    </div>
                    <div class="inside">
                        <div class="row mto16">
                            <div class="col-md-12">
                                <label for="password">Crear contraseña:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-fingerprint" aria-hidden="true"></i> 
                                        </span>
                                    </div>
                                    {!! Form::password('password', [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mtop16"></div>
                </div>

                <div class="col-md-8">
                    <div class="panel shadow">
                        <div class="header">
                            <h3 class="title"><i class="fas fa-address-card" aria-hidden="true"></i> Información</h3>
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
                                    {!! Form::text('name', null,  [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>
                            <div class="col-md-4">
                                <label for="curp">Curp:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basuc-addon1">
                                            <i class="fas fa-passport"></i>
                                        </span>
                                    </div>
                                    {!! Form::text('curp', null, [ 'class' => 'form-control']) !!}
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
                                    {!! Form::text('email',null,  [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>
                            <div class="col-md-4 mtop16">
                                <label for="phone">Celular:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-mobile-alt"></i> 
                                        </span>
                                    </div>
                                    {!! Form::text('phone', null,  [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>
                        </div>
                        {!! Form::submit('Guardar', [ 'class' => 'btn btn-success mtop16']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection