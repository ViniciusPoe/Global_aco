<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/global/config.php';
include INCLUDES_PATH . '/header.php';
?>

<div class="products-overview">
    <!-- Banner -->
    <div class="bg-navy text-white py-5">
        <div class="container text-center">
            <h1 class="display-5 mb-3 text-white">Soluções Completas em Tubulação e Segurança</h1>
            <p class="lead mb-4">Produtos de qualidade para aplicações industriais, prediais e de segurança</p>
        </div>
    </div>

    <!-- Seções de Produtos -->
    <div class="container py-5">
        <!-- Seção Tubos -->
        <div class="category-section mb-5 bg-white">
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= ASSETS_URL ?>/images/tubos-galvanizados.jpg" alt="Tubos Galvanizados" class="img-fluid rounded shadow img-hover-zoom" loading="lazy">
                </div>
                <div class="col-md-7">
                    <h2 class="text-navy mb-3">Tubos Galvanizados</h2>
                    <p class="lead">Soluções para condução de fluidos e proteção estrutural</p>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check-circle text-primary"></i> Diversos Tubos ideiais para sua obra </li>
                        <li><i class="fas fa-check-circle text-primary"></i> Galvanizados, Eletrodutos e em Aço Carbono</li>
                    </ul>
                    <a href="<?= BASE_URL ?>/products/tubos.php" class="btn btn-navy">
                        Ver Especificações <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Seção Conexões -->
        <div class="category-section mb-5 py-4 bg-light rounded">
            <div class="row align-items-center">
                <div class="col-md-7 order-md-1 order-2">
                    <h2 class="text-navy mb-3">Conexões Galvanizadas</h2>
                    <p class="lead">Sistemas completos para montagem de tubulações</p>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check-circle text-primary"></i> Linha completa de conexões</li>
                        <li><i class="fas fa-check-circle text-primary"></i> Acabamento galvanizadas e  em Aço Carbono</li>
                    </ul>
                    <a href="<?= BASE_URL ?>/products/conexoes.php" class="btn btn-navy">
                        Ver Catálogo Completo <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-md-5 order-md-2 order-1 mb-4 mb-md-0">
                    <img src="<?= ASSETS_URL ?>/images/conexoes-galvanizadas.jpg" alt="Conexões Industriais" class="img-fluid rounded shadow img-hover-zoom" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Seção Válvulas -->
        <div class="category-section mb-5 bg-white">
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= ASSETS_URL ?>/images/valvulas-registros.jpg" alt="Válvulas Industriais" 
                    class="img-fluid rounded shadow img-hover-zoom" loading="lazy" style="height: 300px;">
                </div>
                <div class="col-md-7">
                    <h2 class="text-navy mb-3">Válvulas e Registros</h2>
                    <p class="lead">Controle preciso de fluxo em sistemas hidráulicos</p>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check-circle text-primary"></i> Muitas variedades de valvulas </li>
                        <li><i class="fas fa-check-circle text-primary"></i> Para aplicações industriais e prediais</li>
                    </ul>
                    <a href="<?= BASE_URL ?>/products/valvulas.php" class="btn btn-navy">
                        Conhecer Modelos <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Seção Materiais de Incêndio -->
        <div class="category-section py-4 bg-light rounded">
            <div class="row align-items-center">
                <div class="col-md-7 order-md-1 order-2">
                    <h2 class="text-navy mb-3">Materiais para Combate a Incêndio</h2>
                    <p class="lead">Soluções completas para segurança e prevenção</p>
                    <ul class="feature-list mb-4">
                        <li><i class="fas fa-check-circle text-primary"></i> Uma gama de materiais para controle de incendio</li>
                        <li><i class="fas fa-check-circle text-primary"></i> Equipamentos certificados</li>
                    </ul>
                    <a href="<?= BASE_URL ?>/products/incendio.php" class="btn btn-navy">
                        Ver Equipamentos <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-md-5 order-md-2 order-1 mb-4 mb-md-0">
                    <img src="<?= ASSETS_URL ?>/images/incendio.jpg" alt="Materiais de Incêndio" class="img-fluid rounded shadow img-hover-zoom" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include INCLUDES_PATH . '/orcamento.php'; ?>

<?php include INCLUDES_PATH . '/footer.php'; ?>