<?php

Breadcrumbs::register('inicio', function($b) {
	$b->push(__('breadcrumbs.inicio'), url_locale('inicio'));
});

// Empresa
Breadcrumbs::register('empresa', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.empresa'), url_locale('empresa'));
});
Breadcrumbs::register('empresa-missao-e-visao', function($b) {
	$b->parent('empresa');
	$b->push(__('breadcrumbs.empresa-missao-e-visao'), url_locale('empresa.missao-e-visao'));
});
Breadcrumbs::register('empresa-codigo-conduta-etica', function($b) {
	$b->parent('empresa');
	$b->push(__('breadcrumbs.empresa-codigo-conduta-etica'), url_locale('empresa.codigo-conduta-etica'));
});
Breadcrumbs::register('empresa-plano-de-contingencia', function($b) {
	$b->parent('empresa');
	$b->push(__('breadcrumbs.empresa-plano-de-contingencia'), url_locale('empresa.plano-de-contingencia'));
});
Breadcrumbs::register('empresa-politica-da-saude-e-seguranca', function($b) {
	$b->parent('empresa');
	$b->push(__('breadcrumbs.empresa-politica-da-saude-e-seguranca'), url_locale('empresa.politica-da-saude-e-seguranca'));
});

// Certificados e prêmios
Breadcrumbs::register('certificacoes-e-premios', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.certificacoes-e-premios'), url_locale('certificacoes-e-premios'));
});

// Tecnologias e processos
Breadcrumbs::register('tecnologia-e-processos', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.tecnologia-e-processos'), url_locale('tecnologia-e-processos'));
});
Breadcrumbs::register('tecnologia-e-processos-termoplastico', function($b) {
	$b->parent('tecnologia-e-processos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-termoplastico'), url_locale('tecnologia-e-processos.termoplastico'));
});
Breadcrumbs::register('tecnologia-e-processos-fibra-de-vidro', function($b) {
	$b->parent('tecnologia-e-processos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-fibra-de-vidro'), url_locale('tecnologia-e-processos.fibra-de-vidro'));
});
Breadcrumbs::register('tecnologia-e-processos-pintura', function($b) {
	$b->parent('tecnologia-e-processos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-pintura'), url_locale('tecnologia-e-processos.pintura'));
});
Breadcrumbs::register('tecnologia-e-processos-desenvolvimento-de-produtos', function($b) {
	$b->parent('tecnologia-e-processos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-desenvolvimento-de-produtos'), url_locale('tecnologia-e-processos.desenvolvimento-de-produtos'));
});

// Termoplástico
Breadcrumbs::register('tecnologia-e-processos-termoplastico-extrusao', function($b) {
	$b->parent('tecnologia-e-processos-termoplastico');
	$b->push(__('breadcrumbs.tecnologia-e-processos-termoplastico.extrusao'), url_locale('tecnologia-e-processos.termoplastico.extrusao'));
});
Breadcrumbs::register('tecnologia-e-processos-termoplastico-vacuum-forming', function($b) {
	$b->parent('tecnologia-e-processos-termoplastico');
	$b->push(__('breadcrumbs.tecnologia-e-processos-termoplastico.vacuum-forming'), url_locale('tecnologia-e-processos.termoplastico.vacuum-forming'));
});
Breadcrumbs::register('tecnologia-e-processos-termoplastico-rotomoldagem', function($b) {
	$b->parent('tecnologia-e-processos-termoplastico');
	$b->push(__('breadcrumbs.tecnologia-e-processos-termoplastico.rotomoldagem'), url_locale('tecnologia-e-processos.termoplastico.rotomoldagem'));
});
Breadcrumbs::register('tecnologia-e-processos-termoplastico-acabamento-robotizado', function($b) {
	$b->parent('tecnologia-e-processos-termoplastico');
	$b->push(__('breadcrumbs.tecnologia-e-processos-termoplastico.acabamento-robotizado'), url_locale('tecnologia-e-processos.termoplastico.acabamento-robotizado'));
});
Breadcrumbs::register('tecnologia-e-processos-termoplastico-injecao', function($b) {
	$b->parent('tecnologia-e-processos-termoplastico');
	$b->push(__('breadcrumbs.tecnologia-e-processos-termoplastico.injecao'), url_locale('tecnologia-e-processos.termoplastico.injecao'));
});

// Fibra de vidro
Breadcrumbs::register('tecnologia-e-processos-fibra-de-vidro-hlu', function($b) {
	$b->parent('tecnologia-e-processos-fibra-de-vidro');
	$b->push(__('breadcrumbs.tecnologia-e-processos-fibra-de-vidro-hlu'), url_locale('tecnologia-e-processos.fibra-de-vidro.hlu'));
});
Breadcrumbs::register('tecnologia-e-processos-fibra-de-vidro-rtm-light', function($b) {
	$b->parent('tecnologia-e-processos-fibra-de-vidro');
	$b->push(__('breadcrumbs.tecnologia-e-processos-fibra-de-vidro-rtm-light'), url_locale('tecnologia-e-processos.fibra-de-vidro.rtm-light'));
});
Breadcrumbs::register('tecnologia-e-processos-fibra-de-vidro-rtm-skin', function($b) {
	$b->parent('tecnologia-e-processos-fibra-de-vidro');
	$b->push(__('breadcrumbs.tecnologia-e-processos-fibra-de-vidro-rtm-skin'), url_locale('tecnologia-e-processos.fibra-de-vidro.rtm-skin'));
});

// Desenvolvimento de produtos
Breadcrumbs::register('tecnologia-e-processos-desenvolvimento-de-produtos-engenharia-de-produtos', function($b) {
	$b->parent('tecnologia-e-processos-desenvolvimento-de-produtos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-desenvolvimento-de-produtos-engenharia-de-produtos'), url_locale('tecnologia-e-processos-desenvolvimento-de-produtos-engenharia-de-produtos'));
});
Breadcrumbs::register('tecnologia-e-processos-desenvolvimento-de-produtos-laboratorio', function($b) {
	$b->parent('tecnologia-e-processos-desenvolvimento-de-produtos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-desenvolvimento-de-produtos-laboratorio'), url_locale('tecnologia-e-processos-desenvolvimento-de-produtos-laboratorio'));
});
Breadcrumbs::register('tecnologia-e-processos-desenvolvimento-de-produtos-controle-de-qualidade-e-pos-venda', function($b) {
	$b->parent('tecnologia-e-processos-desenvolvimento-de-produtos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-desenvolvimento-de-produtos-controle-de-qualidade-e-pos-venda'), url_locale('tecnologia-e-processos-desenvolvimento-de-produtos-controle-de-qualidade-e-pos-venda'));
});
Breadcrumbs::register('tecnologia-e-processos-desenvolvimento-de-produtos-gestao-do-sistema-da-qualidade', function($b) {
	$b->parent('tecnologia-e-processos-desenvolvimento-de-produtos');
	$b->push(__('breadcrumbs.tecnologia-e-processos-desenvolvimento-de-produtos-gestao-do-sistema-da-qualidade'), url_locale('tecnologia-e-processos-desenvolvimento-de-produtos-gestao-do-sistema-da-qualidade'));
});

// Meio ambiente
Breadcrumbs::register('meio-ambiente', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.meio-ambiente'), url_locale('meio-ambiente'));
});
Breadcrumbs::register('meio-ambiente-fornecedores-e-meio-ambiente', function($b) {
	$b->parent('meio-ambiente');
	$b->push(__('breadcrumbs.meio-ambiente-fornecedores-e-meio-ambiente'), url_locale('meio-ambiente.fornecedores-e-meio-ambiente'));
});
Breadcrumbs::register('meio-ambiente-ciclo-de-vida-do-produto', function($b) {
	$b->parent('meio-ambiente');
	$b->push(__('breadcrumbs.meio-ambiente-ciclo-de-vida-do-produto'), url_locale('meio-ambiente.ciclo-de-vida-do-produto'));
});

// Fale conosco
Breadcrumbs::register('fale-conosco', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.fale-conosco'), url_locale('fale-conosco'));
});
Breadcrumbs::register('fale-conosco-localizacao', function($b) {
	$b->parent('fale-conosco');
	$b->push(__('breadcrumbs.fale-conosco-localizacao'), url_locale('fale-conosco.localizacao'));
});

// Trabalhe conosco
Breadcrumbs::register('trabalhe-conosco', function($b) {
	$b->parent('fale-conosco');
	$b->push(__('breadcrumbs.trabalhe-conosco'), url_locale('trabalhe-conosco'));
});

// Notícias
Breadcrumbs::register('noticias', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.noticias'), url_locale('noticias'));
});
Breadcrumbs::register('noticia', function($b, $noticia) {
	$b->parent('noticias');
	$b->push($noticia->titulo, url('noticia/' . $noticia->slug));
});

// Governança e Compliance
Breadcrumbs::register('governanca-e-compliance', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.governanca-e-compliance'), url_locale('governanca-e-compliance'));
});

// Canal de transparência
Breadcrumbs::register('canal-de-transparencia', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.canal-de-transparencia'), url_locale('canal-de-transparencia'));
});

// Comunicações ambientais
Breadcrumbs::register('comunicacoes-ambientais', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.comunicacoes-ambientais'), url_locale('comunicacoes-ambientais'));
});

// Comunicações ambientais
Breadcrumbs::register('converse-dpo', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.converse-dpo'), url_locale('converse-dpo'));
});

// Comercial
Breadcrumbs::register('comercial', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.comercial'), url_locale('comercial'));
});

// Outros assuntos
Breadcrumbs::register('outros-assuntos', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.outros-assuntos'), url_locale('outros-assuntos'));
});

// Vagas
Breadcrumbs::register('vagas', function($b) {
	$b->parent('inicio');
	$b->push(__('breadcrumbs.vagas'), url_locale('vagas'));
});