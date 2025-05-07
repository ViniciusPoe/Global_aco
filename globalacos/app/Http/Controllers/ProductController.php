<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Método para Conexões
    public function showCategory($category)
    {
        $titles = [
            'tubos' => 'Tubos Galvanizados',
            'conexoes' => 'Conexões Galvanizadas',
            'valvulas' => 'Válvulas e Registros',
            'incendio' => 'Materiais para Combate a Incêndio',
        ];

        $descriptions = [
            'tubos' => 'Soluções para condução de fluidos e proteção estrutural.',
            'conexoes' => 'Sistemas completos para montagem de tubulações.',
            'valvulas' => 'Controle preciso de fluxo em sistemas hidráulicos.',
            'incendio' => 'Soluções completas para segurança e prevenção.',
        ];

        $headerImages = [
            'tubos' => 'tubos-gerais.webp',
            'conexoes' => 'linha-conexoes.webp',
            'valvulas' => 'valv-reg.webp',
            'incendio' => 'mat-inc.webp',
        ];

        $allProducts = config('produtos'); // Aqui você importa os dados do config/produtos.php

        $pageTitle = $titles[$category] ?? 'Produtos';
        $pageDescription = $descriptions[$category] ?? 'Confira nossos produtos disponíveis.';
        $headerImage = $headerImages[$category] ?? 'default.webp';
        $products = $allProducts[$category] ?? [];

        return view('categoria', compact('products', 'pageTitle', 'pageDescription', 'headerImage'));
    }
}
