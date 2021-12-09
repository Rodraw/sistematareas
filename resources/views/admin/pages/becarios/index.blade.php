@extends('admin.master.master')

@section('title', 'Becarios')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('admin/becarios')}}"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Becarios</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h3 class="title"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Becarios</h3>
        </div>
      
        </div>

        <div class="inside">
    
            <div class="mtop16">
                @include('admin.includes.alerts')
            </div>

           
            <div class="btns">
               <a href="{{ route('becarios.create')}}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Nuevo
                </a>
            </div>
          

            <div class="col-md-12 mtop16">
                {!! Form::open(['route' => 'becarios.search']) !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    {!! Form::text('filter', null, ['class' => 'form-control',  'placeholder' => 'Escriba el nombre o correo', 'required']) !!}
                    <button class="btn btn-success" type="submit" id="button-addon2">Buscar</button>
                </div>
                {!! Form::close() !!}
            </div>

            <table class="table table-striped mtop16">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Telefono</td>
                        <td width="160"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($becarios as $becario)
                        <tr>
                            <td>{{ $becario->name }}</td>
                            <td>{{ $becario->correo }}</td>
                            <td>{{ $becario->telefono }}</td>
                            
    
                            <td>
                                <div class="opts">

                                    <a href="{{ route('becarios.show', $becario->id) }}" data-toggle="tooltip" data-placement="top" title="Informacion del becario">
                                        <i class="fas fa-graduation-cap"></i></a>
                                   
                                    <a href="{{ route('becarios.edit', $becario->id) }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                        <i class="fa fa-edit" aria-hidden="true"></i></a>
                                    
                                    
                                        <a href="{{ url('/admin/becarios/'.$becario->id.'/destroy') }}" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-trash-alt" aria-hidden="true"></i></a>

                                    
                               </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection