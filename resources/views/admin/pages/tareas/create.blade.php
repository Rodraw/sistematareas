@extends('admin.master.master')

@section('title', 'Nueva tarea')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('tareas.index')}}"><i class="fas fa-book" aria-hidden="true"></i> Tareas</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{route('tareas.create')}}"><i class="fas fa-book" aria-hidden="true"></i> Nueva tarea</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h3 class="title"><i class="fa fa-plus" aria-hidden="true"></i> Nueva tarea</h3>
            </div>

            <div class="inside">
            
            @include('admin.includes.alerts')

            {!! Form::open(['route' => 'tareas.store', 'files' => true]) !!}
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
                        <label for="code">Codigo:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basuc-addon1">
                                        <i class="fa fa-layer-group" aria-hidden="true"></i> 
                                    </span>
                                </div>
                                {!! Form::text('code', null,  [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>
                    <div class="col-md-6 mtop16">
                        <label for="code">Edificio o salón:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basuc-addon1">
                                        <i class="fa fa-keyboard" aria-hidden="true"></i> 
                                    </span>
                                </div>
                                {!! Form::text('edificio', null, [ 'class' => 'form-control']) !!}
                                </div>   
                            </div>


                    <div class="row mtop16">
                        <div class="col-md-12">
                            <label for="description">Descripcion:</label>
                            {!! Form::textarea('description', null, [ 'class' => 'form-control', 'id' => 'editor']) !!}
                        </div>
                    </div>
                    <div class="row mtop16">
                        <div class="col-md-12">
                        {!! Form::submit('Crear tarea', [ 'class' => 'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection