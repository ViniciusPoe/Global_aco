<nav class="navbar navbar-expand-lg navbar-dark bg-navy">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand me-5" href="<?= BASE_URL ?>/index.php">
            <img src="<?= ASSETS_URL ?>/images/logo-global-acos.png" alt="Global Aços" height="40">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" 
                       href="<?= BASE_URL ?>/index.php">Início</a>
                </li>
                
                <!-- Menu Produtos (Dropdown Padrão) -->
                <li class="nav-item dropdown <?= in_array(basename($_SERVER['PHP_SELF']), ['tubos.php', 'conexoes.php', 'valvulas.php', 'incendio.php', 'produtos.php']) ? 'active' : '' ?>">
                    <a class="nav-link dropdown-toggle dropdown-toggle-simple" 
                    href="<?= BASE_URL ?>/produtos.php" 
                    id="produtosDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="produtosDropdown">
                        <li><a class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'produtos.php' ? 'active' : '' ?>" 
                            href="<?= BASE_URL ?>/produtos.php">Todos os Produtos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'tubos.php' ? 'active' : '' ?>" 
                            href="<?= BASE_URL ?>/products/tubos.php">Tubos</a></li>
                        <li><a class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'conexoes.php' ? 'active' : '' ?>" 
                            href="<?= BASE_URL ?>/products/conexoes.php">Conexões</a></li>
                        <li><a class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'valvulas.php' ? 'active' : '' ?>" 
                            href="<?= BASE_URL ?>/products/valvulas.php">Valvulas e Registros</a></li>
                        <li><a class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'incendio.php' ? 'active' : '' ?>" 
                            href="<?= BASE_URL ?>/products/incendio.php">Materiais de Incendio</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'sobre.php' ? 'active' : '' ?>" 
                       href="<?= BASE_URL ?>/sobre.php">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contato.php' ? 'active' : '' ?>" 
                       href="<?= BASE_URL ?>/contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>