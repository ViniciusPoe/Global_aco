<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/global/config.php';
include INCLUDES_PATH . '/header.php';
?>

<!-- Carrossel -->
<section class="container-fluid px-0">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Controles do Carrossel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo BASE_URL; ?>/assets/images/tubos-gerais.jpg" 
                    class="d-block w-100" 
                    style="height: 500px; object-fit: cover;"
                    alt="Tubos Galvanizado">
            </div>
            <div class="carousel-item">
                <img src="<?php echo BASE_URL; ?>/assets/images/conexoes-galvanizadas.jpg" 
                    class="d-block w-100" 
                    style="height: 500px; object-fit: cover;"
                    alt="Conexões Galvanizadas">
            </div>
            <div class="carousel-item">
                <img src="<?php echo BASE_URL; ?>/assets/images/valvulas-registros.jpg" 
                    class="d-block w-100" 
                    style="height: 500px; object-fit: cover;"
                    alt="Válvulas e Registros">
            </div>
            <div class="carousel-item">
                <img src="<?php echo BASE_URL; ?>/assets/images/incendio.jpg" 
                    class="d-block w-100" 
                    style="height: 500px; object-fit: cover;"
                    alt="Materiais de Incendio">
            </div>
        </div>
    </div>
</section>
<!-- Sobre Nossa Empresa -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?php echo BASE_URL; ?>/assets/images/sobre-empresa.jpg" alt="global aços" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="text-navy mb-4">Sobre Nossa Empresa</h2>
                <p class="lead">Referência no mercado de tubos e conexões galvanizados há mais de 15 anos.</p>
                <p>Nossa empresa se orgulha de atender às necessidades de clientes em diversos setores, desde construção civil até indústrias, com soluções que combinam tecnologia, resistência e eficiência.</p>
                <ul class="list-check mb-4">
                    <li>Produtos certificados</li>
                    <li>Atendimento personalizado</li>
                    <li>Entrega rápida</li>
                </ul>
                <a href="sobre.php" class="btn btn-navy">Saiba Mais</a>
            </div>
        </div>
    </div>
</section>

<!-- Nossos Diferenciais -->
<section class="section bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-navy">Nossos Diferenciais</h2>
            <p class="lead">O que nos torna a melhor escolha para seus projetos</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-navy text-white mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="text-navy">Qualidade Garantida</h4>
                        <p>Produtos testados e aprovados com garantia de durabilidade e resistência.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-navy text-white mb-3">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="text-navy">Suporte Técnico</h4>
                        <p>Equipe especializada para orientar na escolha dos melhores produtos.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-navy text-white mb-3">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4 class="text-navy">Logística Ágil</h4>
                        <p>Entregamos em todo o território nacional com prazos competitivos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nossos Produtos -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-navy">Nossos Produtos</h2>
            <p class="lead">Conheça nossas linhas completas de produtos</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="product-card card h-100 border-0 shadow-sm">
                    <img src="<?php echo BASE_URL; ?>/assets/images/tubos-galvanizados.jpg" class="card-img-top" alt="Tubos">
                    <div class="card-body">
                        <h4 class="text-navy">Tubos Galvanizados</h4>
                        <p>Fabricados conforme normas NBR 5580 e NBR 5590 para máxima resistência.</p>
                        <a href="produtos.php?categoria=galvanizados" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="product-card card h-100 border-0 shadow-sm">
                    <img src="<?php echo BASE_URL; ?>/assets/images/conexoes-galvanizadas.jpg" class="card-img-top" alt="Conexões">
                    <div class="card-body">
                        <h4 class="text-navy">Conexões</h4>
                        <p>Ampla variedade de conexões galvanizadas para todos os tipos de instalação.</p>
                        <a href="produtos.php?categoria=conexoes" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="product-card card h-100 border-0 shadow-sm">
                    <img src="<?php echo BASE_URL; ?>/assets/images/valvulas-registros.jpg" class="card-img-top" alt="Válvulas">
                    <div class="card-body">
                        <h4 class="text-navy">Válvulas</h4>
                        <p>Soluções completas para controle de fluxo em sistemas industriais.</p>
                        <a href="produtos.php?categoria=valvulas" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="product-card card h-100 border-0 shadow-sm">
                    <img src="<?php echo BASE_URL; ?>/assets/images/incendio.jpg" class="card-img-top" alt="Incêndio">
                    <div class="card-body">
                        <h4 class="text-navy">Materiais para Incêndio</h4>
                        <p>Equipamentos certificados para sistemas de combate a incêndio.</p>
                        <a href="produtos.php?categoria=incendio" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="produtos.php" class="btn btn-navy btn-lg">Ver Todos os Produtos</a>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/orcamento.php'; ?>

<?php include INCLUDES_PATH . '/footer.php'; ?>