<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('static/images/logo.png')}}" class="img-fluid">
        </div>

        <div class="user">
            <span class="subtitle">Hola:</span>
            <div class="name">
                {{Auth::user()->name}}
            </div>
            <div class="email">{{Auth::user()->email}}</div>
        </div>
    </div>

    <div class="main">
        <ul>

            
            <li>
                <a href="{{route('dashboard.index')}}" class="lk-dashboard.index"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
            </li>
            
            <li>
                <a href="{{route('users.index')}}" class="lk-users.index lk-users.create lk-users.edit"><i class="fa fa-users" aria-hidden="true"></i>Encargados</a>
            </li>
            
            <li>
                <a href="{{route('becarios.index')}}" class="lk-becarios.index lk-becarios.create lk-becarios.edit lk-becarios.show lk-becarios.destroy ">
                    <i class="fas fa-graduation-cap"></i>Becarios</a>
            </li>

            <li>
                <a href="{{url('/admin/tareas')}}" class="lk-tareas.index lk-tareas.create lk-tareas.edit lk-tareas.destroy ">
                    <i class="fas fa-book"></i>Tareas</a>
            </li>
            
            <li>
                <a href="{{route('asignadas.index')}}" class="lk-asignadas.index lk-asignadas.edit lk-asignadas.destroy ">
                    <i class="fas fa-book-reader"></i>Tareas asignadas</a>
            </li>

            
            <li>
                <a href="{{ route('web.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Salir</a>
            </li>
        </ul>
    </div>
</div>