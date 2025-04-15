<footer class="bg-gradient-navy text-white pt-5 pb-4">
    <div class="container">
        <div class="row g-4">
            <!-- Coluna 1: Logo e Sobre -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-brand mb-3">
                    <img src="<?php echo BASE_URL; ?>/assets/img/logo-white.png" alt="Logo" class="img-fluid mb-3" style="max-height: 50px;">
                    <p class="text-white-75">Soluções em tubos e conexões de alta qualidade para seu projeto.</p>
                </div>
                <div class="footer-newsletter">
                    <h6 class="mb-3 text-white">Receba nossas novidades</h6>
                    <form class="d-flex">
                        <input type="email" class="form-control rounded-0" placeholder="Seu e-mail">
                        <button class="btn btn-secondary rounded-0" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Coluna 2: Links Rápidos -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="text-uppercase mb-4 footer-title">Links Rápidos</h5>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>/index.php" class="text-white-75 text-decoration-none d-flex align-items-center"><i class="fas fa-chevron-right me-2 small"></i>Início</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>/sobre.php" class="text-white-75 text-decoration-none d-flex align-items-center"><i class="fas fa-chevron-right me-2 small"></i>Sobre Nós</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>/produtos.php" class="text-white-75 text-decoration-none d-flex align-items-center"><i class="fas fa-chevron-right me-2 small"></i>Produtos</a></li>
                    <li class="mb-2"><a href="<?php echo BASE_URL; ?>/contato.php" class="text-white-75 text-decoration-none d-flex align-items-center"><i class="fas fa-chevron-right me-2 small"></i>Contato</a></li>
                </ul>
            </div>

            <!-- Coluna 3: Contato -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-4 footer-title">Contato</h5>
                <ul class="list-unstyled footer-contact">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-map-marker-alt mt-1 me-3"></i>
                        <div>
                            <strong>Endereço:</strong>
                            <p class="mb-0 text-white-75">Rua Alexandre Ciccarelli, 49 <br> São Mateus <br> São Paulo - SP <br> 03966-000</p>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-phone me-3"></i>
                        <div>
                            <strong>Telefone:</strong>
                            <p class="mb-0 text-white-75">(11) 2894-4607</p>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-envelope me-3"></i>
                        <div>
                            <strong>Email:</strong>
                            <p class="mb-0 text-white-75">viviane.tubos@gmail.com</p>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-clock me-3"></i>
                        <div>
                            <strong>Horário:</strong>
                            <p class="mb-0 text-white-75">Seg-Sex: 8h-18h</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Coluna 4: Redes Sociais -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-4 footer-title">Redes Sociais</h5>
                <p class="text-white-75 mb-4">Siga-nos nas redes sociais para ficar por dentro das novidades.</p>
                
                <div class="social-icons mb-4">
                    <a href="#" class="text-white me-2 rounded-circle d-inline-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2 rounded-circle d-inline-flex align-items-center justify-content-center"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-2 rounded-circle d-inline-flex align-items-center justify-content-center"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white me-2 rounded-circle d-inline-flex align-items-center justify-content-center"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white me-2 rounded-circle d-inline-flex align-items-center justify-content-center"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <!-- Direitos Autorais e Links Adicionais -->
        <div class="row pt-3 mt-3 border-top border-light">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 small text-white-75">&copy; <?php echo date("Y"); ?> Global Aço. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Arquivo JavaScript -->
    <script src="<?php echo BASE_URL; ?>/assets/js/dev.js"></script>

    <!-- Botão de Voltar ao Topo -->
    <button id="backToTop" class="btn btn-secondary btn-back-to-top" title="Voltar ao Topo">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>