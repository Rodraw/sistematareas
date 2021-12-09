@extends('admin.master.master')

@section('title', 'Nueva tarea asignada')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('asignadas.index')}}"><i class="fas fa-book-reader" aria-hidden="true"></i> Nueva tarea asignada</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h3 class="title"><i class="fas fa-book-reader" aria-hidden="true"></i> Nueva tarea asignada</h3>
        </div>

        <div class="inside">
        
        @include('admin.includes.alerts')

        {!! Form::open(['route' => 'asignadas.store']) !!}
        <div class="row">
        
            <div class="col-md-4">
            <label for="tareas_id">Tarea:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basuc-addon1">
                            <i class="fas fa-book" aria-hidden="true"></i> 
                        </span>
                    </div>
                    {!! Form::select('tareas_id', $tareas, 0, ['class' => 'custom-select']) !!}
                </div>   
            </div>
            <div class="col-md-4">
            <label for="user_id">Asignada por:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basuc-addon1">
                            <i class="fa fa-user" aria-hidden="true"></i> 
                        </span>
                    </div>
                    {!! Form::select('user_id', $users, 0, ['class' => 'custom-select']) !!}
                </div>   
            </div>
            <div class="col-md-4">
                <label for="name_std">Responsable:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-user" aria-hidden="true"></i> 
                        </span>
                    </div>
                    {!! Form::text('name_std', null,  [ 'class' => 'form-control']) !!}
                    </div>   
                </div>
            <div class="col-md-4 mtop16">
            <label for="becario_id">Asignada a :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basuc-addon1">
                            <i class="fas fa-graduation-cap" aria-hidden="true"></i> 
                        </span>
                    </div>
                    {!! Form::select('becario_id', $becarios, 0, ['class' => 'custom-select']) !!}
                </div>   
            </div>
            <div class="col-md-4 mtop16">
                <label for="token_asignada">Fecha de asignación:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    {!! Form::date('token_asignada', null, [ 'class' => 'form-control', 'mask-date']) !!}
                </div>   
            </div>
            <div class="col-md-4 mtop16">
                <label for="token_returned">Fecha que limite para realizar:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    {!! Form::date('token_returned', null, [ 'class' => 'form-control', 'mask-date']) !!}
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