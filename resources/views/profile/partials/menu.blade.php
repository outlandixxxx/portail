<nav class="navbar navbar-expand navbar-light  py-4 py-lg-0 shadow">
    <div class="container ">
      <a class="navbar-brand ms-auto " href="#">lOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

                  <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">

                    
                  <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form> -->
                  </div> 

      
        <ul class="navbar-nav ">
        
              <li class="{{ 'home' == request()->path() ? 'a' : ''}} ">
                <a class="nav-link " aria-current="page" href=" {{ url('/home') }}">Accuiel</a>
              </li>
              <li class="nav-item {{ (request()->path() == 'a') ? 'active' : '' }}">
                <a class="nav-link " aria-current="page" href=" {{ url('/home') }}">test</a>
                </li>
              <li class="{{ 'dossier' == request()->path() ? 'a' : ''}} ">
                <a class="nav-link " aria-current="page" href="{{ url('dossier')}}">Mutuelle</a>
              </li>
              <li class="nav-item dropdown" data-bs-toggle="dropdown">
                <a class="nav-link dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"  data-bs-toggle="dropdown" >
                  <li class="{{ 'situation' == request()->path() ? 'a' : ''}} " ><a class="dropdown-item"  href="#">Situation Administrative</a></li>
                  <li class="{{ 'remboursement' == request()->path() ? 'a' : ''}} " ><a class="dropdown-item" href="{{ url('dossier')}}">Rembouresement</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li class="{{ 'pec' == request()->path() ? 'a' : ''}} "><a class="dropdown-item" href="#">Prise En Charge</a></li>
                </ul>
    
                <li class="{{ 'partenaire' == request()->path() ? 'a' : ''}} ">
                  <a class="nav-link " aria-current="page" href="#">Partenaire</a>
                </li>
    
                <li class="{{ 'reclamation' == request()->path() ? 'a' : ''}} ">
                  <a class="nav-link " aria-current="page" href="{{ url('reclamation')}}">Reclamation</a>
                </li>

        </ul>

       

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav pd-2 ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown" data-bs-toggle="dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" data-bs-toggle="dropdown">
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



  </nav>

