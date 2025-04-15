<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/global/config.php';
require_once INCLUDES_PATH . '/product_functions.php';
require_once DATA_PATH . '/produtos_data.php';

// Configurações específicas da página
$pageTitle = "Conexões Galvanizadas";
$pageDescription = "Conexões de alta qualidade para sistemas hidráulicos e pneumáticos";
$category = "conexoes";
$products = $conexoes;

// Inclui o template
include INCLUDES_PATH . '/products_template.php';
?>