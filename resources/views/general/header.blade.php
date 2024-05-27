<header class="container-fluid border">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{url('/')}}"><img class="logo"src="{{asset('img/logo2.png')}}" alt=""> <h1>MARLOS</h1></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      @if (Route::has('login'))
      @auth
          @if (auth()->user()->role == '1')
          
          @php
           $role = (auth()->user()->role == '1') ? "Administrador" : "Empleado";
          @endphp
          <li class="nav-item">
            <a class="nav-link active" href="{{route('productos.index')}}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('categorias.index')}}">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('proveedores.index')}}">Proveedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('inventario.index')}}">Inventario</a>
          </li>
          @endif

          @if (auth()->user()->role == '2')
          @php
           $role = (auth()->user()->role == '2') ? "Empleado" : "Administrador";
          @endphp
          <li class="nav-item">
            <a class="nav-link active" href="{{route('ventas.index')}}">Ventas</a>
          </li>
          @endif
          @endauth
      @endif
      
        
      </ul>
      @if (Route::has('login'))  
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                
                                <p class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">{{$role}}: {{ Auth::user()->name }}</p>
                                <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Iniciar Sesion
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Registrarse
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
    </div>
  </div>
</nav>
</header>