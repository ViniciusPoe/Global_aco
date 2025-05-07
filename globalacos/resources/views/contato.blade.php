@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="w-100">
        <img src="{{ asset('assets/images/contato.webp') }}" 
             alt="Sobre" 
             class="img-fluid w-100" 
             style="object-fit: contain; object-position: center; height:500px;">
    </div>
</div>

<!-- Formulário e Informações -->
<section class="section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Formulário de Contato -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <h2 class="h4 fw-bold mb-4 text-navy">Solicite sua Cotação</h2>
                        
                        <form action="{{ route('contato.enviar') }}" method="post" id="form-contato">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                        <label for="nome">Nome*</label>
                                        <div class="invalid-feedback">Preencha este campo.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa">
                                        <label for="empresa">Empresa*</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                        <label for="email">E-mail*</label>
                                        <div class="invalid-feedback">E-mail inválido.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                                        <label for="telefone">Telefone*</label>
                                        <div class="invalid-feedback">Telefone inválido.</div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="assunto" name="assunto" required>
                                            <option value="" selected disabled>Selecione um assunto</option>
                                            <option value="cotacao">Solicitação de Cotação</option>
                                            <option value="duvida">Dúvida Técnica</option>
                                            <option value="outro">Outro Assunto</option>
                                        </select>
                                        <label for="assunto">Assunto*</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="mensagem" name="mensagem" style="height: 150px" placeholder="Mensagem" required></textarea>
                                        <label for="mensagem">Mensagem*</label>
                                        <small class="text-muted">Para cotações, informe os produtos, quantidades e especificações técnicas</small>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" checked>
                                        <label class="form-check-label" for="newsletter">
                                            Desejo receber novidades e promoções por e-mail
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" id="submit-btn" class="btn btn-navy btn-lg w-100 py-3">
                                        <span id="submit-text"><i class="fas fa-paper-plane me-2"></i> Enviar Solicitação</span>
                                        <span id="submit-spinner" class="spinner-border spinner-border-sm d-none"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Informações de Contato -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <h2 class="h4 fw-bold mb-4 text-navy">Nossos Canais</h2>
                        
                        <div class="contact-info mb-4">
                            <div class="d-flex mb-3">
                                <div class="icon-box bg-light-blue text-navy rounded-circle flex-shrink-0 me-3">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h3 class="h6 fw-bold mb-1">Endereço</h3>
                                    <p class="mb-0">Rua Alexandre Ciccarelli, 49<br>Bairro São Mateus - São Paulo/SP<br>CEP: 03966-000</p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <div class="icon-box bg-light-blue text-navy rounded-circle flex-shrink-0 me-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h3 class="h6 fw-bold mb-1">Telefones</h3>
                                    <p class="mb-0">(11) 2894-4607<br>(11) 97616-3588 (WhatsApp)</p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <div class="icon-box bg-light-blue text-navy rounded-circle flex-shrink-0 me-3">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h3 class="h6 fw-bold mb-1">E-mails</h3>
                                    <p class="mb-0">viviane.tubos@gmail.com</p>
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="icon-box bg-light-blue text-navy rounded-circle flex-shrink-0 me-3">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h3 class="h6 fw-bold mb-1">Horário de Atendimento</h3>
                                    <p class="mb-0">Segunda a Sexta: 8h às 18h<br> </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="map-container ratio ratio-16x9 rounded overflow-hidden mb-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.2273704941163!2d-46.47915112454496!3d-23.596177262872377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6632e77f1539%3A0xc38225dcb765d285!2sRua%20Alexandre%20Ciccarelli%2C%2049%20-%20Cidade%20S%C3%A3o%20Mateus%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003966-000!5e0!3m2!1spt-BR!2sbr!4v1744740123647!5m2!1spt-BR!2sbr" 
                                    allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        
                        <div class="social-links d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-outline-navy rounded-circle"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="btn btn-outline-navy rounded-circle"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-outline-navy rounded-circle"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection