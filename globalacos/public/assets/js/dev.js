// Botão de Voltar ao Topo
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Mostrar/ocultar botão "Voltar ao Topo"
window.addEventListener('scroll', function() {
    const scrollTopBtn = document.querySelector('.scroll-top-button');
    if (window.scrollY > 300) {
        scrollTopBtn.classList.add('show');
    } else {
        scrollTopBtn.classList.remove('show');
    }
});

// ===== FORMULÁRIO DE CONTATO =====
document.addEventListener('DOMContentLoaded', function() {
    // Máscara de Telefone
    if (typeof $ != 'undefined' && $('#telefone').length) {
        $('#telefone').inputmask('(99) 99999-9999');
    }

    // Feedback Visual no Envio
    const formContato = document.getElementById('form-contato');
    if (formContato) {
        formContato.addEventListener('submit', function() {
            const submitText = document.getElementById('submit-text');
            const submitSpinner = document.getElementById('submit-spinner');
            const submitBtn = document.getElementById('submit-btn');
            
            if (submitText && submitSpinner && submitBtn) {
                submitText.classList.add('d-none');
                submitSpinner.classList.remove('d-none');
                submitBtn.disabled = true;
            }
        });

        // Validação em Tempo Real
        const inputs = formContato.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', () => {
                if (!input.checkValidity()) {
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
        });
    }
});