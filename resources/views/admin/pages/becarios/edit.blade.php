@extends('admin.master.master')

@section('title', 'Editar becario')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('becarios.index')}}"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Becarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href=""><i class="fa fa-edit" aria-hidden="true"></i> Editar Becario</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h3 class="title"><i class="fa fa-edit" aria-hidden="true"></i> Editar Becario</h3>
            </div>

            <div class="inside">
            
            @include('admin.includes.alerts')

            {!! Form::open(['url' => '/admin/becarios/'.$becario->id.'/edit' ]) !!}
            <div class="row">
                <div class="col-md-3">
                    <label for="name">Nome:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-keyboard" aria-hidden="true"></i> 
                            </span>
                        </div>
                        {!! Form::text('name', $becario->name,  [ 'class' => 'form-control']) !!}
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
                        {!! Form::text('correo', $becario->correo, [ 'class' => 'form-control','disabled']) !!}
                    </div>   
                </div>
                <div class="col-md-3 mtop16">
                    <label for="contraseña">contraseña:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-keyboard" aria-hidden="true"></i> 
                            </span>
                        </div>
                        {!! Form::text('contraseña', $becario->contraseña,  [ 'class' => 'form-control']) !!}
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
                        {!! Form::text('telefono', $becario->telefono, [ 'class' => 'form-control']) !!}
                    </div>   
                </div>
                <div class="row mtop16">
                    <div class="col-md-12">
                    {!! Form::submit('Actualizar', [ 'class' => 'btn btn-success']) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection