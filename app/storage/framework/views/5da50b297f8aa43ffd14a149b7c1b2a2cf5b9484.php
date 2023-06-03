<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Sulplast - Trabalhe conosco</title>
</head>
<body>
	<h3>Sulplast - Trabalhe conosco</h3>
	<p>Há um novo curriculum disponível enviado através do website <a href="http://sulplast.com.br">sulplast.com.br</a>. As informações preenchidas pelo usuário estão listadas abaixo. O curriculum (se houver) está anexo neste contato. <strong>Atenção, só abra anexos caso você tenha certeza que o arquivo está livre de vírus. Em caso de dúvidas, solicite ajuda para o departamento de T.I, ou execute o antí-virus no arquivo antes de abri-lo.</strong></p>
	<hr>
	<ul>
		<?php if(isset($input['vaga'])): ?>
			<li><strong>Vaga:</strong> <?php echo e(!empty($input['vaga']) ? $input['vaga'] : 'Não informado(a)'); ?></li>
		<?php endif; ?>
		
		<li><strong>Nome completo:</strong> <?php echo e(!empty($input['nome_completo']) ? $input['nome_completo'] : 'Não informado(a)'); ?></li>
		<li><strong>E-mail:</strong> <?php echo !empty($input['email']) ?  '<a href="mailto:' . $input['email'] . '">' . $input['email'] . '</a>' : 'Não informado(a)'; ?></li>
		<li><strong>Telefone:</strong> <?php echo e(!empty($input['telefone']) ? $input['telefone'] : 'Não informado(a)'); ?></li>
		<li><strong>Cidade:</strong> <?php echo e(!empty($input['cidade']) ? $input['cidade'] : 'Não informado(a)'); ?></li>
		<li><strong>Estado:</strong> <?php echo e(!empty($input['estado']) ? $input['estado'] : 'Não informado(a)'); ?></li>
		<li><strong>Departamento de interesse:</strong> <?php echo e(!empty($input['departamento']) ? $input['departamento'] : 'Não informado(a)'); ?></li>
	</ul>
	<hr />
	<h4>Mensagem</h4>
	<p><?php echo e(!empty($input['mensagem']) ? $input['mensagem'] : 'Não informado(a)'); ?></p>
	<hr />
	<p><small>Este e-mail é enviado automaticamente através do formulário de contato do website <a href="http://sulplast.com.br">sulplast.com.br</a>. Mensagem enviada em <?php echo e(date('d/m/Y à\s H:i:s')); ?>.</small></p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/emails/trabalhe-conosco.blade.php ENDPATH**/ ?>