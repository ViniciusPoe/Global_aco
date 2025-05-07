@extends('layouts.app')

@section('content')
    <main class="products-page">
        <div class="container-fluid px-0">
            <div class="w-100">
                <img src="{{ asset('assets/images/' . $headerImage) }}"
                     alt="Imagem ilustrativa da categoria {{ $pageTitle }}"
                     class="img-fluid w-100"
                     style="object-fit:contain; object-position:center; height:500px">
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-4">
                @forelse($products as $product)
                    <div class="col-md-6 col-lg-4">
                        <div class="product-card card h-100 border-0 shadow-sm">
                            <img src="{{ asset('assets/images/' . $product['imagem']) }}"
                                class="card-img-top"
                                alt="Imagem do produto {{ $product['titulo'] }}"
                                loading="lazy"
                                style="height: 400px;">
                            <div class="card-body">
                                <h3 class="h5 text-navy">{{ $product['titulo'] }}</h3>
                                <p>{{ $product['descricao'] }}</p>
                                @if(!empty($product['funcoes']))
                                    <div class="product-applications mt-3">
                                        <h4 class="h6 text-navy">Principais Funções e Aplicações:</h4>
                                        <ul class="ps-3">
                                            @foreach($product['funcoes'] as $funcao)
                                                <li>{{ $funcao }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            @if(!empty($product['normas']))
                                <div class="card-footer bg-white border-0 pt-0">
                                    <span class="badge bg-navy text-white">Norma: {{ $product['normas'] }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-muted">Nenhum produto encontrado para esta categoria.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>
@endsection
