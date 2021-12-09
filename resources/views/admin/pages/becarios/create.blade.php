@extends('admin.master.master')

@section('title', 'Nuevo becario')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('becarios.index')}}"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Becario</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{route('becarios.create')}}"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Nuevo becario</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h3 class="title"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Nuevo becario</h3>
            </div>

            <div class="inside">
            
            @include('admin.includes.alerts')

            {!! Form::open(['route' => 'becarios.store', 'files' => true]) !!}
            <div class="row">
                <div class="col-md-3">
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

                <div class="col-md-3">
                    <label for="correo">Correo:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basuc-addon1">
                                <i class="fas fa-passport"></i>
                            </span>
                        </div>
                        {!! Form::text('correo', null, [ 'class' => 'form-control']) !!}
                    </div>   
                </div>
                <div class="col-md-3 mtop16">
                    <label for="contraseña">Contraseña:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-keyboard" aria-hidden="true"></i> 
                            </span>
                        </div>
                        {!! Form::text('contraseña', null,  [ 'class' => 'form-control']) !!}
                    </div>   
                </div>
            
                <div class="col-md-3 mtop16">
                    <label for="telefono">Telefono:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basuc-addon1">
                                <i class="fas fa-mobile-alt"></i>
                            </span>
                        </div>
                        {!! Form::text('telefono', null, [ 'class' => 'form-control']) !!}
                    </div>   
                </div>
                <div class="row mtop16">
                    <div class="col-md-12">
                    {!! Form::submit('Registrar', [ 'class' => 'btn btn-success']) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection