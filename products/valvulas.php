<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/global/config.php';
require_once INCLUDES_PATH . '/product_functions.php';
require_once DATA_PATH . '/produtos_data.php';

// Configurações específicas da página
$pageTitle = "Valvulas e Registros";
$pageDescription = "Valvulas e Registros...";
$category = "valvula";
$products = $valvulas;

// Inclui o template
include INCLUDES_PATH . '/products_template.php';
?>