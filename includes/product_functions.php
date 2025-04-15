<?php
function displayCategorySection($products, $category, $title, $description) {
    ob_start(); ?>
    <section class="category-section py-5">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($products as $product): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="product-card card h-100 border-0 shadow-sm">
                        <img src="<?= ASSETS_URL ?>/images/<?= htmlspecialchars($product['imagem']) ?>" 
                             class="card-img-top" 
                             alt="<?= htmlspecialchars($product['titulo']) ?>"
                             loading="lazy"
                             style="height: 400px;">
                             
                        <div class="card-body">
                            <h3 class="h5 text-navy"><?= htmlspecialchars($product['titulo']) ?></h3>
                            <p><?= htmlspecialchars($product['descricao']) ?></p>
                            
                            <div class="product-applications mt-3">
                                <h4 class="h6 text-navy">Principais Funções e Aplicações:</h4>
                                <ul class="ps-3">
                                    <?php foreach ($product['funcoes'] as $funcao): ?>
                                    <li><?= htmlspecialchars($funcao) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <?php if(!empty($product['normas'])): ?>
                            <p class="small text-muted mb-0">
                                <strong>Norma:</strong> <?= htmlspecialchars($product['normas']) ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php return ob_get_clean();
}
?>