@extends('layouts.app')
@section('content')

<!-- Carrossel -->
<section style="margin: 0; padding: 0;">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
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
                <div style="width: 100%; background-color: #f8f9fa;">
                    <img src="{{ asset('assets/images/tubos-gerais.webp') }}" 
                         style="width: 100%; height: 500px; object-fit: contain;" 
                         alt="Tubos Galvanizado">
                </div>
            </div>
            <div class="carousel-item">
                <div style="width: 100%; background-color: #f8f9fa;">
                    <img src="{{ asset('assets/images/linha-conexoes.webp') }}" 
                         style="width: 100%; height: 500px; object-fit: contain;" 
                         alt="Conexões Galvanizadas">
                </div>
            </div>
            <div class="carousel-item">
                <div style="width: 100%; background-color: #f8f9fa;">
                    <img src="{{ asset('assets/images/valv-reg.webp') }}" 
                         style="width: 100%;height: 500px; object-fit: contain;" 
                         alt="Válvulas e Registros">
                </div>
            </div>
            <div class="carousel-item">
                <div style="width: 100%; background-color: #f8f9fa;">
                    <img src="{{ asset('assets/images/mat-inc.webp') }}" 
                         style="width: 100%; height: 500px; object-fit: contain;" 
                         alt="Materiais de Incêndio">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Sobre Nossa Empresa -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="text-navy mb-4">Sobre Nossa Empresa</h2>
                <p class="lead">Referência no mercado de tubos e conexões galvanizados há mais de 15 anos.</p>
                <p>Nossa empresa se orgulha de atender às necessidades de clientes em diversos setores, desde construção civil até indústrias, com soluções que combinam tecnologia, resistência e eficiência.</p>
                <ul class="list-check mb-4">
                    <li>Produtos certificados</li>
                    <li>Atendimento personalizado</li>
                    <li>Entrega rápida</li>
                </ul>
                <!-- Ajuste aqui para a rota 'sobre' -->
                <a href="{{ route('sobre') }}" class="btn btn-navy">Saiba Mais</a>
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
                    <img src="{{ asset('assets/images/tubos-galvanizados.webp') }}" class="card-img-top" alt="Tubos">
                    <div class="card-body">
                        <h4 class="text-navy">Tubos Galvanizados</h4>
                        <p>Fabricados conforme normas NBR 5580 e NBR 5590 para máxima resistência.</p>
                        <a href="{{ route('produtos.categoria', ['categoria' => 'galvanizados']) }}" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="product-card card h-100 border-0 shadow-sm">
                    <img src="{{ asset('assets/images/conexoes-galvanizadas.webp') }}" class="card-img-top" alt="Conexões">
                    <div class="card-body">
                        <h4 class="text-navy">Conexões</h4>
                        <p>Ampla variedade de conexões galvanizadas para todos os tipos de instalação.</p>
                        <a href="{{ route('produtos.categoria', ['categoria' => 'conexoes']) }}" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="product-card card h-100 border-0 shadow-sm">
                    <img src="{{ asset('assets/images/valvulas-registros.webp') }}" class="card-img-top" alt="Válvulas">
                    <div class="card-body">
                        <h4 class="text-navy">Válvulas</h4>
                        <p>Soluções completas para controle de fluxo em sistemas industriais.</p>
                        <a href="{{ route('produtos.categoria', ['categoria' => 'valvulas']) }}" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="product-card card h-100 border-0 shadow-sm">
                    <img src="{{ asset('assets/images/incendio.webp') }}" class="card-img-top" alt="Incêndio">
                    <div class="card-body">
                        <h4 class="text-navy">Materiais para Incêndio</h4>
                        <p>Equipamentos certificados para sistemas de combate a incêndio.</p>
                        <a href="{{ route('produtos.categoria', ['categoria' => 'incendio']) }}" class="btn btn-sm btn-navy stretched-link">Ver Produtos</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('produtos') }}" class="btn btn-navy btn-lg">Ver Todos os Produtos</a>
        </div>
    </div>
</section>
@endsection