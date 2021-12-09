@extends('admin.master.master')

@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h3 class="title"><i class="fas fa-chart-bar" aria-hidden="true"></i> Estadisticas</h3>
            </div>

            <div class="row mtop16">
                <div class="col-md-3">
                    <div class="panel shadow">
                        <div class="header">
                            <h3 class="title"><i class="fas fa-users" aria-hidden="true"></i>Encargados</h3>
                        </div>
                        <div class="inside">
                            <div class="big_count">{{ $totalUsers }}</div>
                        </div>
                        <div class="infor">
                            <a href="{{route('users.index')}}">Más información <i class="fas fa-arrow-circle-right"></i></a>
                         </div>
                    </div>
                </div>

                    <div class="col-md-3">
                        <div class="panel shadow">
                            <div class="header">
                                <h3 class="title"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Becarios</h3>
                            </div>
                            <div class="inside">
                                <div class="big_count">{{ $totalBecarios }}</div>
                            </div>
                            <div class="infor">
                                <a href="{{route('becarios.index')}}">Más información <i class="fas fa-arrow-circle-right"></i></a>
                             </div>
                        </div>
                    </div>

                <div class="col-md-3">
                    <div class="panel shadow">
                        <div class="header">
                            <h3 class="title"><i class="fas fa-book" aria-hidden="true"></i> Tareas</h3>
                        </div>
                        <div class="inside">
                            <div class="big_count">{{ $totalTareas }}</div>
                        </div>
                        <div class="infor">
                            <a href="{{route('tareas.index')}}">Más información <i class="fas fa-arrow-circle-right"></i></a>
                         </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel shadow">
                        <div class="header">
                            <h3 class="title"><i class="fas fa-book-reader" aria-hidden="true"></i> Tareas asignadas</h3>
                        </div>
                        <div class="inside">
                            <div class="big_count">{{ $totalAsignadas }}</div>
                        </div>
                        <div class="infor">
                           <a href="{{route('asignadas.index')}}">Más información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection