<aside class="navbar navbar-vertical navbar-expand-sm navbar-light bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="#">
                <img src="https://preview.tabler.io/static/logo-white.svg" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div class="collapse navbar-collapse list-group" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3 ms-2" id="menu">
                <li class="nav-item border-top fs-3 @if (Route::getCurrentRoute()->uri == 'home') menu-selected rounded @endif">
                    <a class="nav-link" href="./home">
                        <span class="nav-link-title text-white">
                            <i class="ti ti-home-2 fs-1 me-1"></i>Home
                        </span>
                    </a>
                </li>
                <li class="nav-item border-top fs-3 @if (Route::getCurrentRoute()->uri == 'admin') menu-selected rounded @endif">
                    <a class="nav-link" href="{{route('horario.index')}}">
                        <span class="nav-link-title text-white">
                            <i class="ti ti-home-2 fs-1 me-1"></i>Horario
                        </span>
                    </a>
                </li>
                <li class="nav-item border-top fs-3 @if (Route::getCurrentRoute()->uri == 'admin') menu-selected rounded @endif">
                    <a class="nav-link" href="{{route('tarefa.index')}}">
                        <span class="nav-link-title text-white">
                            <i class="ti ti-home-2 fs-1 me-1"></i>Tarefa
                        </span>
                    </a>
                </li>
                <li class="nav-item border-top fs-3 @if (Route::getCurrentRoute()->uri == 'admin') menu-selected rounded @endif">
                    <a class="nav-link" href="{{route('tarefaespec.index')}}">
                        <span class="nav-link-title text-white">
                            <i class="ti ti-home-2 fs-1 me-1"></i>Tarefa Especifica
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</aside>
