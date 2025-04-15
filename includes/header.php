<?php
// Inclui as configurações globais
require_once $_SERVER['DOCUMENT_ROOT'] . '/global/config.php';

// Verifica se a constante existe (redundância de segurança)
if (!defined('BASE_URL')) {
    die('Configurações não carregadas corretamente');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/styles.css">
    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="bg-navy text-white text-center py-3">
        <?php include $_SERVER['DOCUMENT_ROOT'] . BASE_URL . '/includes/nav.php'; ?>
    </header>