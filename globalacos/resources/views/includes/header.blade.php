<header class="bg-navy text-white text-center py-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-navy">
        <div class="container">
            <a class="navbar-brand me-5" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Global Aços" style="height: 70px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Início</a>
                    </li>

                    <!-- Produtos -->
                    <li class="nav-item dropdown {{ Request::is('produtos*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- Link para Todos os Produtos -->
                                <li><a class="dropdown-item {{ Request::is('produtos') ? 'active' : '' }}" href="{{ url('/produtos') }}">Todos os Produtos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <!-- Links para Categorias de Produtos -->
                                <li><a class="dropdown-item {{ Request::is('produtos/tubos') ? 'active' : '' }}" href="{{ route('produtos.categoria', ['categoria' => 'tubos']) }}">Tubos</a></li>
                                <li><a class="dropdown-item {{ Request::is('produtos/conexoes') ? 'active' : '' }}" href="{{ route('produtos.categoria', ['categoria' => 'conexoes']) }}">Conexões</a></li>
                                <li><a class="dropdown-item {{ Request::is('produtos/valvulas') ? 'active' : '' }}" href="{{ route('produtos.categoria', ['categoria' => 'valvulas']) }}">Válvulas</a></li>
                                <li><a class="dropdown-item {{ Request::is('produtos/incendio') ? 'active' : '' }}" href="{{ route('produtos.categoria', ['categoria' => 'incendio']) }}">Materiais de Incêndio</a></li>
                            </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('sobre') ? 'active' : '' }}" href="{{ url('/sobre') }}">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contato') ? 'active' : '' }}" href="{{ url('/contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
