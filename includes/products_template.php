<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/global/config.php';
include INCLUDES_PATH . '/header.php';

$headerImages = [
    'tubo' => 'tubos-gerais.jpg',
    'conexoes' => 'conexoes-gerais.jpg',
    'valvula' => 'valvulas-gerais.jpg',
    'incendio' => 'incendio-gerais.jpg'
];

$headerImage = $headerImages[$category] ?? 'default-gerais.jpg';
?>

<main class="products-page">
    <!-- Cabeçalho -->
    <div class="category-header text-center bg-light py-4">
        <div class="container">
            <img src="<?= ASSETS_URL ?>/images/<?= $headerImage ?>" 
                 alt="<?= htmlspecialchars($pageTitle) ?>" 
                 class="img-fluid d-block header-image-contain"
                 style="max-height: 400px;">
        </div>
    </div>

    <!-- Título e Descrição -->
    <div class="container my-4">
        <div class="text-center">
            <h1 class="display-5 fw-bold text-navy mb-3"><?= htmlspecialchars($pageTitle) ?></h1>
            <p class="lead text-muted"><?= htmlspecialchars($pageDescription) ?></p>
        </div>
    </div>

    </div>
    <!-- Conteúdo Principal -->
    <div class="container py-5">
        <?php 
        if (function_exists('displayCategorySection')) {
            echo displayCategorySection($products, $category, $pageTitle, $pageDescription);
        }
        ?>
        
        <!-- Seção de Todos os Produtos -->
        <div class="container mt-5">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="all-products-promo bg-light-blue rounded-4 p-4 h-100 position-relative overflow-hidden border border-light">
                        <div class="position-relative z-2 text-center">
                            <div class="icon-wrapper bg-navy text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-boxes fa-2x"></i>
                            </div>
                            
                            <h2 class="fw-bold text-navy mb-3">Conheça Nossa Linha Completa</h2>
                            <p class="text-muted mb-4">Explore todos os produtos disponíveis em nosso catálogo</p>
                            
                            <a href="<?= BASE_URL ?>/produtos.php" class="btn btn-navy btn-lg px-4">
                                <i class="fas fa-search me-2"></i> Ver Produtos
                            </a>
                            
                            <div class="mt-3">
                                <p class="small text-muted mb-1"><i class="fas fa-th-large text-navy me-2"></i>+50 itens disponíveis</p>
                                <p class="small text-muted"><i class="fas fa-tags text-navy me-2"></i>Diversas categorias</p>
                            </div>
                        </div>
                        
                        <!-- Elemento decorativo -->
                        <div class="position-absolute bottom-0 end-0 opacity-10 z-1">
                            <i class="fas fa-box-open" style="font-size: 8rem; color: var(--primary-color);"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Seção "Cotação" -->
                <div class="col-md-6">
                    <div class="quotation-cta rounded-4 p-4 h-100 position-relative overflow-hidden text-white"
                    style="background-color: var(--primary-color);">
                        <div class="position-relative z-2 text-center">
                            <div class="icon-wrapper bg-white text-navy rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-file-invoice-dollar fa-2x"></i>
                            </div>
                            
                            <h2 class="fw-bold text-white mb-3">Solicite Seu Orçamento</h2>
                            
                            <a href="<?= BASE_URL ?>/contato.php" class="btn btn-light btn-lg px-4 me-2">
                                <i class="fas fa-paper-plane me-2"></i> Cotação Online
                            </a>
                            
                            <div class="mt-3">
                                <p class="small text-white-75 mb-1"><i class="fas fa-clock me-2"></i>Resposta em 24h</p>
                                <p class="small text-white-75"><i class="fas fa-check-circle me-2"></i>Sem compromisso</p>
                            </div>
                        </div>
                        
                        <!-- Elemento decorativo -->
                        <div class="position-absolute top-0 start-0 opacity-10 z-1">
                            <i class="fas fa-chart-line" style="font-size: 8rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include INCLUDES_PATH . '/footer.php'; ?>