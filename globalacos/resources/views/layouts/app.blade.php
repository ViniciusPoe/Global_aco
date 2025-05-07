<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Global Aços')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    @stack('styles') <!-- Para empilhar CSS extra, se necessário -->
</head>
<body>

    @include('includes.header')

    <main>
        @yield('content')
    </main>

    <!-- Condicional para não incluir orcamento.blade.php na página de contato -->
    @if(!request()->is('contato'))
        @include('includes.orcamento')
    @endif

    @include('includes.footer')

        <!-- Botão WhatsApp (lado esquerdo) -->
    <a href="https://wa.me/SEUNUMERO" class="whatsapp-button" target="_blank" aria-label="Fale conosco pelo WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Botão Voltar ao Topo (lado direito) -->
    <button onclick="scrollToTop()" class="scroll-top-button" aria-label="Voltar ao topo">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/dev.js') }}"></script>
    <!-- Inputmask (CDN no final do body) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
</body>
</html>
