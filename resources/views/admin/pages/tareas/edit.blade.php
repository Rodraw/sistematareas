@extends('admin.master.master')

@section('title', 'Editar Tarea')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('admin/tareas')}}"><i class="fas fa-book" aria-hidden="true"></i> Tareas</a>
    </li>
    <li class="breadcrumb-item">
        <a href=""><i class="fa fa-edit" aria-hidden="true"></i> Editar Tarea</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="panel shadow">
                    <div class="header">
                        <h3 class="title"><i class="fa fa-edit" aria-hidden="true"></i> Editar Tarea</h3>
                    </div>
        
                    <div class="inside">
                        @include('admin.includes.alerts')
        
                        {!! Form::open(['url' => '/admin/tareas/'.$l->id.'/edit', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Nombre:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-keyboard" aria-hidden="true"></i> 
                                        </span>
                                    </div>
                                    {!! Form::text('name',$l->name,  [ 'class' => 'form-control']) !!}
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
                                            {!! Form::text('code', $l->code,  [ 'class' => 'form-control']) !!}
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
                                            {!! Form::text('edificio', $l->edificio, [ 'class' => 'form-control']) !!}
                                            </div>   
                                        </div>
            
            
                                <div class="row mtop16">
                                    <div class="col-md-12">
                                        <label for="description">Descripción:</label>
                                        {!! Form::textarea('description', $l->description, [ 'class' => 'form-control', 'id' => 'editor']) !!}
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
        </div>
    </div>
@endsection