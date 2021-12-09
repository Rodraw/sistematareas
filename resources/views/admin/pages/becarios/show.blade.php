@extends('admin.master.master')

@section('title', 'Informacion del becario')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('becarios.index')}}"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Becarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('becarios.show', $becario->id)}}"><i class="fas fa-graduation-cap"></i> Informacion del becario</a>
    </li>
@endsection

@section('content')

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h3 class="title"><i class="fa fa-edit" aria-hidden="true"></i> Informacion del becario</h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="page_user">
        <div class="row">
            <div class="col-md-4 mtop16">
                <div class="panel shadow">
                    <div class="inside">
                    @include('admin.includes.alerts')
                        <div class="mini_profile">
                            <div class="info">
                                <span class="title"><i class="far fa-address-card" aria-hidden="true"></i> Nombre:</span>
                                <span class="text">{{ $becario->name}}</span>
                                <span class="title"><i class="fas fa-restroom" aria-hidden="true"></i> Telefono:</span>
                                <span class="text">{{ $becario->telefono}}</span>
                                <span class="title"><i class="fas fa-passport" aria-hidden="true"></i> Correo:</span>
                                <span class="text">{{ $becario->correo}}</span>
                                <span class="title"><i class="fas fa-passport" aria-hidden="true"></i> Fecha de nacimiento:</span>
                                <span class="text">{{ $becario->contraseña}}</span>
                                
                                
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection