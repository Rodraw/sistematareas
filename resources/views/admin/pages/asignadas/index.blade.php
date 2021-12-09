@extends('admin.master.master')

@section('title', 'Tareas asignadas')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('asignadas.index')}}"><i class="fas fa-book-reader" aria-hidden="true"></i> Tareas asignadas</a>
    </li>
@endsection

@section('content')

<!-- <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cssGeneral.css') }} ">
</head> -->

<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h3 class="title"><i class="fas fa-book-reader" aria-hidden="true"></i> Tareas asignadas</h3>
        </div>
      
        </div>

        <div class="inside">
    
            <div class="mtop16">
                @include('admin.includes.alerts')
            </div>

           
            <div class="btns">
               <a href="{{ route('asignadas.create')}}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Asignar
                </a>
            </div>
          

            <div class="col-md-12 mtop16">
                {!! Form::open(['route' => 'asignadas.search']) !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-search">Buscar por fecha</i>
                        </span>
                    </div>
                    {!! Form::date('filter', null, ['class' => 'form-control',  'far fa-calendar-alt','mask-date', 'required']) !!}
                    <button class="btn btn-success" type="submit" id="button-addon2">Buscar</button>
                </div>
                {!! Form::close() !!}
            </div>

            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <td>Nombre de la tarea</td>
                        <td>Asignado por</td>
                        <td>Asignado a</td>
                        <td>Fecha de creación</td>
                        <td>Fecha de asignación</td>
                        <td>Fecha limite para su realización</td>
                        <td>Estatus</td>
                        <td width="110"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignadas as $asignada)
                        <tr>
                            <td>{{ $asignada->tarea->name }}</td>
                            <td>{{ $asignada->user->name }}</td>
                            <td>{{ $asignada->becario->name }}</td>
                            <td>{{ $asignada->becario->created_at }}</td>
                            <td>{{ date( 'd/m/Y' , strtotime($asignada->token_asignada)) }}</td>
                            <td>{{ date( 'd/m/Y' , strtotime($asignada->token_returned)) }}</td>
                            <td id="resp{{ $asignada->id }}">
                          <br>
                            @if($asignada->estatus == 0)
                            <button type="button" class="btn btn-sm btn-success">En espera</button>
                                @else
                                    @if($asignada->estatus == 1)
                                    <button type="button" class="btn btn-sm btn-success">Asignada</button>
                                    @else
                                        @if($asignada->estatus == 2)
                                        <button type="button" class="btn btn-sm btn-success">En proceso</button>
                                        @else
                                        <button type="button" class="btn btn-sm btn-danger">Finalizada</button>
                                        @endif
                                    @endif
                            @endif

                        </td>
                            <td>
                                <div class="opts">   
                                    
                                <a href="{{ route('asignadas.edit', $asignada->id) }}" data-toggle="tooltip" data-placement="top" title="Editar estatus">
                                        <i class="fa fa-edit" aria-hidden="true"></i></a>

                                    <a href="{{ url('/admin/asignada/'.$asignada->id.'/destroy') }}" data-toggle="tooltip" data-placement="top" title="Eliminar asinación">
                                        <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                    </a>   
                               </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script type="text/javascript">

    $.ajax({
        type: "GET",
        dataType: "json",
        //url: '/StatusAsignada',
        url: '{{ route('UpdateStatusAsig') }}',
        data: {'estatus': estatus, 'id': id},
        success: function(data){
            $('#resp' + id).html(data.var); 
            console.log(data.var)
         
        }
    })
});
</script>

@endsection