@extends('admin.master.master')

@section('title', 'Informações do usuário')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('users.index')}}"><i class="fa fa-users" aria-hidden="true"></i> Encargados</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('users.show', $user->id) }}"><i class="fas fa-user"></i> Informacion de encargados</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h3 class="title"><i class="fa fa-edit" aria-hidden="true"></i> Informacion de encargado</h3>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="page_user">
        <div class="row">
            <div class="col-md-6 mtop16">
                <div class="panel shadow">
                    <div class="inside">
                    @include('admin.includes.alerts')
                    <div class="mini_profile">
                        
                        <div class="info">
                            <span class="title"><i class="far fa-address-card" aria-hidden="true"></i> Nome:</span>
                            <span class="text">{{ $user->name}}</span>
                            <span class="title"><i class="fas fa-passport" aria-hidden="true"></i> CURP:</span>
                            <span class="text">{{ $user->curp}}</span>
                        </div>
                    </div>
                           
                    </div>
                </div>
            </div>
                <div class="col-md-6 mtop16">
                    <div class="panel shadow">
                        <div class="inside">
                        @include('admin.includes.alerts')
                        <div class="mini_profile">
                            <div class="info">
                                <span class="title"><i class="far fa-envelope" aria-hidden="true"></i> Email:</span>
                                <span class="text">{{ $user->email}}</span>
                                <span class="title"><i class="fas fa-phone-square" aria-hidden="true"></i> Telefono:</span>
                                <span class="text">{{ $user->phone}}</span>
                                <span class="title"><i class="far fa-calendar-alt" aria-hidden="true"></i> Registro:</span>
                                <span class="text">{{ $user->created_at}}</span>
                            </div>
                        </div>
                               
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection