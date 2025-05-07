<h2>Nova Solicitação de Contato</h2>

<p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
<p><strong>Empresa:</strong> {{ $dados['empresa'] ?? '-' }}</p>
<p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
<p><strong>Telefone:</strong> {{ $dados['telefone'] }}</p>
<p><strong>Assunto:</strong> {{ $dados['assunto'] }}</p>
<p><strong>Mensagem:</strong><br>{{ $dados['mensagem'] }}</p>
