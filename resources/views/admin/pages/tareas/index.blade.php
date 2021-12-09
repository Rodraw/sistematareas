@extends('admin.master.master')

@section('title', 'Tareas')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('/admin/tareas')}}"><i class="fas fa-book" aria-hidden="true"></i> Tareas</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h3 class="title"><i class="fas fa-book" aria-hidden="true"></i> Tareas</h3>
            </div>
          
            </div>

            <div class="inside">
        
                <div class="mtop16">
                    @include('admin.includes.alerts')
                </div>

               
                <div class="btns">
                   <a href="{{ route('tareas.create')}}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Nueva
                    </a>
                </div>
              

                <div class="col-md-12 mtop16">
                    {!! Form::open(['route' => 'tareas.search']) !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        {!! Form::text('filter', null, ['class' => 'form-control',  'placeholder' => 'Digite el nombre o codigo de la tarea', 'required']) !!}
                        <button class="btn btn-success" type="submit" id="button-addon2">Buscar</button>
                    </div>
                    {!! Form::close() !!}
                </div>

                <table class="table table-striped mtop16">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Código</td>
                            
                            <td width="110"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tareas as $tarea)
                            <tr>
                                <td width="50">{{ $tarea->id }}</td>
                                <td>{{ $tarea->name }}</td>
                                <td>{{ $tarea->code }}</td>
                                
                                
                                <td>
                                    <div class="opts">
                                       
                                        <a href="{{ route('tareas.edit', $tarea->id) }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fa fa-edit" aria-hidden="true"></i></a>
                                        
                                        
                                        <a href="{{ url('/admin/tarea/'.$tarea->id.'/destroy') }}" data-toggle="tooltip" data-placement="top" title="Eliminar">
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