 
 
 @if(Auth::user()->activacion == 1)
 
 <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="50px"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <!-- /.menu-title -->
                    <h3 class="menu-title">Sistema</h3>
                     <li class="active">
                        <a href="{{ url('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Panel de control </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('admin') }}"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Administrador</a>
                    </li>
                     <h3 class="menu-title">Módulos</h3>
                    <li class="menu-item-has-children">
                        <a href="{{ url('alumnos') }}"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-user"></i>Alumnos</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('calificaciones') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Calificaciones</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('matriculas') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-book"></i>Matriculas</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('materias') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Materias</a>
                    </li>
                     <li class="menu-item-has-children">
                        <a href="{{ url('grados') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-list"></i>Grados</a>
                    </li>
                     <li class="menu-item-has-children">
                        <a href="{{ url('periodos') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-edit (alias)"></i>Periodos</a>
                    </li>
                    <h3 class="menu-title">Operaciones</h3>
                     <li class="active">
                        <a href="{{ url('cambiar-clave') }}"> <i class="menu-icon fa fa-dashboard"></i>Cambiar clave </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

@else
    
@endif