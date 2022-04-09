    <!-- {{request()->routeIs('Portafolio')}} -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="{{route('Inicio')}}">Navegacion</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item {{ setActive('Inicio')  }}">
                    <a class="nav-link" href="{{ route('Inicio') }}">@lang('Home')<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ setActive('AcercaDe')  }}">
                    <a class="nav-link" href="{{ route('AcercaDe') }}">@lang('About')</a>
                </li>
                <li class="nav-item {{ setActive('Portafolio')  }}">
                    <a class="nav-link" href="{{ route('Portafolio') }}">@lang('Portfolio')</a>
                </li>
                <li class="nav-item {{ setActive('Contacto')  }}">
                    <a class="nav-link" href="{{ route('Contacto') }}">@lang('Contact')</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    </nav>