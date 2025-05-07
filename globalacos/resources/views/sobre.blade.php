@extends ('layouts.app')
@section('content')

<div class="container-fluid px-0">
    <div class="w-100">
        <img src="{{ asset('assets/images/sobre.webp') }}" 
             alt="Sobre" 
             class="img-fluid w-100" 
             style="object-fit: contain; object-position: center; height:500px;">
    </div>
</div>


<!-- Sobre -->
<section class="section bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="fw-bold mb-4 text-navy">Nossa Jornada</h2>
                
                <p class="lead">A Global Aços nasceu da visão de profissional onde encontrou uma lacuna no mercado: a necessidade de um fornecedor que unisse excelência técnica com um relacionamento próximo aos clientes.</p>
                
                <p class="lead">Em 2023, demos nosso primeiro passo com uma linha essencial de tubos galvanizados. Hoje, orgulhosamente oferecemos:</p>
                
                <ul class="feature-list mb-4">
                    <li><i class="fas fa-check-circle text-secondary me-2"></i> <strong>Tubos industriais</strong> que atendem aos padrões internacionais mais rigorosos</li>
                    <li><i class="fas fa-check-circle text-secondary me-2"></i> <strong>Conexões especializadas</strong> para os mais diversos projetos de infraestrutura</li>
                    <li><i class="fas fa-check-circle text-secondary me-2"></i> <strong>Soluções completas</strong> para sistemas de combate a incêndio</li>
                </ul>
                
            </div>
        </div>
    </div>
</section>

<!-- Filosofia de Trabalho -->
<section class="section bg-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="fw-bold mb-5 text-center text-navy">Por que escolher a Global Aços?</h2>
                
                <div class="philosophy-item mb-5">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="icon-container bg-light-blue text-center p-4 rounded">
                                <i class="fas fa-people-carry fa-3x text-navy mb-3"></i>
                                <h3 class="h4">Parceria Real</h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p>Na Global Aços, redefinimos o conceito de fornecedor. Não nos limitamos a entregar produtos - nos tornamos extensão da sua equipe. Nossos engenheiros trabalham lado a lado com seus projetistas para identificar as melhores soluções técnicas e econômicas para cada desafio.</p>
                            <p>Esta abordagem já ajudou mais de 120 clientes a otimizarem seus projetos, reduzindo custos sem comprometer a qualidade.</p>
                        </div>
                    </div>
                </div>
                
                <div class="philosophy-item">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3 mb-md-0 order-md-2">
                            <div class="icon-container bg-light-blue text-center p-4 rounded">
                                <i class="fas fa-medal fa-3x text-navy mb-3"></i>
                                <h3 class="h4">Excelência Garantida</h3>
                            </div>
                        </div>
                        <div class="col-md-8 order-md-1">
                            <p>Cada tubo, conexão ou componente que sai de nossos centros de distribuição passa por um rigoroso processo de controle de qualidade. Nossos padrões superam as exigências normativas porque acreditamos que a verdadeira qualidade se mede pela durabilidade no campo, não apenas por certificados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Localização - Integração com Maps -->
<section class="section bg-light py-5">
    <div class="container">
        <h2 class="fw-bold mb-5 text-center text-navy">Nosso Endereço</h2>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="location-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3 class="h4 mb-3"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Matriz Global Aços</h3>
                    <p class="mb-4">Rua Alexandre Ciccarelli, 49<br>São Mateus<br>São Paulo - SP<br>CEP: 03966-000</p>
                    
                    <div class="contact-info">
                        <p class="mb-1"><strong><i class="fas fa-phone-alt text-secondary me-2"></i> Telefone:</strong> (11) 2894-4607</p>
                        <p class="mb-1"><strong><i class="fas fa-envelope text-secondary me-2"></i> Email:</strong> viviane.tubos@gmail.com.br</p>
                        <p class="mb-0"><strong><i class="fas fa-clock text-secondary me-2"></i> Horário:</strong> Seg-Sex: 8h às 18h</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="map-container ratio ratio-16x9 rounded shadow overflow-hidden">
                    <!-- Inserção do Google Maps -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.2273704941163!2d-46.47915112454496!3d-23.596177262872377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6632e77f1539%3A0xc38225dcb765d285!2sRua%20Alexandre%20Ciccarelli%2C%2049%20-%20Cidade%20S%C3%A3o%20Mateus%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003966-000!5e0!3m2!1spt-BR!2sbr!4v1744740123647!5m2!1spt-BR!2sbr" 
                            allowfullscreen="" loading="lazy" class="w-100 h-100"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection