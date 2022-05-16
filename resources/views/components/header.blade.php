<nav class="navbar navbar-expand-md navbar-light shadow-sm navbar-dark" style="background-color:#3297CD;"">
    <div class="container-fluid">
        <a class=" px-5 navbar-brand" href="{{ url('/') }}">
            {{ config('', 'UP-VITRINE') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
  
            </ul>
  
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                    
                        <li class="nav-item">
                            <a class="btn btn-dark btn-md mx-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
  
                    <li class="nav-item">
                      <a class="btn btn-dark btn-md mx-2" aria-current="page" href="#">Conectar-se</a>
                    </li>
  
                    <li class="nav-item dropdown">
                  <a class="nav-link color-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    VITRINES
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">FET</a></li>
                    <li><a class="dropdown-item" href="#">FACEP</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">ESCOG</a></li>
                  </ul>
                </li>
  
                   
                    <form class="d-flex px-5">
                      <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                      <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
                    </form>
                @else
  
                @if ( Auth::user()->admin || Auth::user()->manager )
  
                <li class="nav-item dropdown">
                  <a class="nav-link color-white dropdown-toggle   btn btn-sm btn-dark mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PAINEL
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    
                    <li><a class="dropdown-item" href="/faculdades">Faculdades</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/usuarios">Usuarios</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/publicacoes">Publicações</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/relatorios">Relatorios</a></li>
  
                  </ul>
                </li>
  
                @endif  
                
                <li class="nav-item dropdown">
                  <a class="nav-link color-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    VITRINES
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">FET</a></li>
                    <li><a class="dropdown-item" href="#">FACEP</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">ESCOG</a></li>
                  </ul>
                </li>
  
                
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
                </form>
  
  
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-dark btn-sm mx-5" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>
  
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
  
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
  
                
                @endguest
            </ul>
        </div>
    </div>
  </nav>
  
  
  
  
  
  
  
  
  
  <!--<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#026CAA;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGOMARCA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                VITRINES
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="btn btn-dark btn-md" aria-current="page" href="\login">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-dark btn-md mx-2" aria-current="page" href="#">Conectar-se</a>
            </li>
            
          </ul>
  
          
  
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>--> 