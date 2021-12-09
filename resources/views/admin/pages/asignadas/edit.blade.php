@extends('admin.master.master')

@section('title', 'Editar Asignada')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('asignadas.index')}}"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Asignadas</a>
    </li>
    <li class="breadcrumb-item">
        <a href=""><i class="fa fa-edit" aria-hidden="true"></i> Editar Asignada</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h3 class="title"><i class="fa fa-edit" aria-hidden="true"></i> Editar estatus de asignacion</h3>
                <td>
                    <h4>0= En espera</4>
                    <h4>1= Asignada</4>
                    <h4>2= En proceso</4>
                    <h4>3= En finalizada</4>
                </td>
            </div>

            <div class="inside">
            
            @include('admin.includes.alerts')

            {!! Form::open(['url' => '/admin/asignadas/'.$asignada->id.'/edit' ]) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="estatus">Estatus(Ingrese un numero equivalente al estatus):</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-keyboard" aria-hidden="true"></i> 
                            </span>
                        </div>
                        {!! Form::text('estatus', $asignada->estatus,  [ 'class' => 'form-control']) !!}
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