<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Sulplast - Converse com DPO</title>
</head>
<body>
	<h3>Sulplast - Converse com DPO</h3>
	<p>Converse com DPO foi enviado através do website <a href="http://sulplast.com.br">sulplast.com.br</a>. As informações preenchidas pelo usuário estão listadas abaixo.</p>
	<hr>
	<ul>
		<li><strong>Nome completo:</strong> {{ !empty($input['nome']) ? $input['nome'] : 'Não informado(a)' }}</li>
		<li><strong>E-mail:</strong> {!! !empty($input['email']) ?  '<a href="mailto:' . $input['email'] . '">' . $input['email'] . '</a>' : 'Não informado(a)' !!}</li>
		<li><strong>Telefone:</strong> {!! !empty($input['telefone']) ?  '<a href="tel:' . $input['telefone'] . '">' . $input['telefone'] . '</a>' : 'Não informado(a)' !!}</li>
		<li><strong>Assunto:</strong> {{ !empty($input['assunto']) ? $input['assunto'] : 'Não informado(a)' }}</li>
	</ul>
	<hr />
	<h4>Mensagem</h4>
	<p>{{ !empty($input['mensagem']) ? $input['mensagem'] : 'Não informado(a)' }}</p>
	<hr />
	<p><small>Este e-mail é enviado automaticamente através do formulário de contato do website <a href="http://sulplast.com.br">sulplast.com.br</a>. Mensagem enviada em {{ date('d/m/Y à\s H:i:s') }}.</small></p>
</body>
</html>
