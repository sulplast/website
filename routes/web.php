<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['prefix' => 'pt_BR', 'middleware' => 'setlocale'], function() {
	Route::get('/', 'FrontendController@index');
	Route::get('inicio', 'FrontendController@index');
	Route::get('home', 'FrontendController@index');
	Route::post('aplicar', 'FrontendController@aplicar');

	// Empresa
	Route::get('empresa', 'EmpresaController@index');
	Route::get('empresa/politica-da-qualidade', 'EmpresaController@politicaDaQualidade');
	Route::get('empresa/missao-e-visao', 'EmpresaController@missaoVisao');
	Route::get('empresa/codigo-de-conduta-e-etica', 'EmpresaController@codigoCondutaEtica');
	Route::get('empresa/politica-de-etica-empresarial-e-sustentabilidade', 'EmpresaController@codigoCondutaEtica');
	Route::get('empresa/plano-de-contingencia', 'EmpresaController@planoDecontingencia');
	Route::get('empresa/politica-da-saude-e-seguranca', 'EmpresaController@politicaDaSaudeESegurancao');

	// Certificações e prêmios
	Route::get('certificacoes-e-premios', 'CertificacoesPremiosController@index');

	// Tecnologias e processo
	Route::get('tecnologia-e-processos', 'TecnologiaProcessosController@index');
	Route::get('tecnologia-e-processos/termoplastico', 'TecnologiaProcessosController@termoplastico');
	Route::get('tecnologia-e-processos/fibra-de-vidro', 'TecnologiaProcessosController@fibraDeVidro');
	Route::get('tecnologia-e-processos/pintura', 'TecnologiaProcessosController@pintura');
	Route::get('tecnologia-e-processos/desenvolvimento-de-produtos', 'TecnologiaProcessosController@desenvolvimentoDeProdutos');

	// Termoplástico
	Route::get('tecnologia-e-processos/termoplastico/extrusao', 'TecnologiaProcessosController@termoplasticoExtrusao');
	Route::get('tecnologia-e-processos/termoplastico/vacuum-forming', 'TecnologiaProcessosController@termoplasticoVacuumForming');
	Route::get('tecnologia-e-processos/termoplastico/rotomoldagem', 'TecnologiaProcessosController@termoplasticoRotomoldagem');
	Route::get('tecnologia-e-processos/termoplastico/acabamento-robotizado', 'TecnologiaProcessosController@termoplasticoAcabamentoRobotizado');
	Route::get('tecnologia-e-processos/termoplastico/injecao', 'TecnologiaProcessosController@termoplasticoAcabamentoInjecao');

	// Fibra de vidro
	Route::get('tecnologia-e-processos/fibra-de-vidro/hlu', 'TecnologiaProcessosController@fibraDeVidroHlu');
	Route::get('tecnologia-e-processos/fibra-de-vidro/rtm-light', 'TecnologiaProcessosController@fibraDeVidroRtmLight');
	Route::get('tecnologia-e-processos/fibra-de-vidro/rtm-skin', 'TecnologiaProcessosController@fibraDeVidroRtmSkin');

	// Desenvolvimento de produtos
	Route::get('tecnologia-e-processos/desenvolvimento-de-produtos/engenharia-de-produtos', 'TecnologiaProcessosController@desenvolvimentoDeProdutosEngenhariaDeProdutos');
	Route::get('tecnologia-e-processos/desenvolvimento-de-produtos/laboratorio', 'TecnologiaProcessosController@desenvolvimentoDeProdutosLaboratorio');
	Route::get('tecnologia-e-processos/desenvolvimento-de-produtos/gestao-do-sistema-da-qualidade', 'TecnologiaProcessosController@desenvolvimentoDeProdutosGestaoDoSistemaDaQualidade');
	Route::get('tecnologia-e-processos/desenvolvimento-de-produtos/controle-de-qualidade-e-pos-venda', 'TecnologiaProcessosController@desenvolvimentoDeProdutosControleDeQualidadeEPosVenda');

	// Meio ambiente
	Route::get('meio-ambiente', 'MeioAmbienteController@index');
	Route::get('meio-ambiente/fornecedores-e-meio-ambiente', 'MeioAmbienteController@fornecedoresMeioAmbiente');
	Route::get('meio-ambiente/ciclo-de-vida-do-produto', 'MeioAmbienteController@cicloDeVidaDoProduto');

	// Fale conosco
	Route::get('fale-conosco', 'FaleConoscoController@index');
	Route::post('fale-conosco', 'FaleConoscoController@enviar');
	Route::get('fale-conosco/localizacao', 'FaleConoscoController@localizacao');
	Route::match(['get', 'post'], 'trabalhe-conosco', 'TrabalheConoscoController@index');

	// Notícias
	Route::resource('admin/noticia', 'AdminNoticiaController');
	Route::get('noticias/{slug}', 'NoticiasController@ver');
	Route::get('noticias', 'NoticiasController@index');
	Route::patch('noticias-atualizar/{noticia}', 'NoticiasController@atualizar');

	Route::get('governanca-e-compliance', 'GovernancaComplianceController@index');
	Route::match(['get', 'post'], 'canal-de-transparencia', 'CanalTransparenciaController@index');
	Route::match(['get', 'post'], 'comunicacoes-ambientais', 'ComunicacoesAmbientaisController@index');
	Route::match(['get', 'post'], 'converse-com-o-dpo', 'ConverseDPOController@index');

	Route::match(['get', 'post'], 'comercial', 'ComercialController@index');
	Route::match(['get', 'post'], 'outros-assuntos', 'OutrosAssuntosController@index');

	Route::get('vagas', 'VagasController@index');

});

Route::group(['prefix' => 'en_US', 'middleware' => 'setlocale'], function() {
	Route::get('/', 'FrontendController@index');
	Route::get('home', 'FrontendController@index');
	Route::post('aplicar', 'FrontendController@aplicar');

	// Empresa
	Route::get('company', 'EmpresaController@index');
	Route::get('company/quality-policy', 'EmpresaController@politicaDaQualidade');
	Route::get('company/mission-and-vision', 'EmpresaController@missaoVisao');
	Route::get('company/our-code-of-conduct-and-ethics', 'EmpresaController@codigoCondutaEtica');
	Route::get('company/contingency-plan', 'EmpresaController@planoDecontingencia');

	// Certificações e prêmios
	Route::get('our-certifications-and-awards', 'CertificacoesPremiosController@index');

	// Tecnologias e processo
	Route::get('technologies-and-processes', 'TecnologiaProcessosController@index');
	Route::get('technologies-and-processes/thermoplastic', 'TecnologiaProcessosController@termoplastico');
	Route::get('technologies-and-processes/fiberglass', 'TecnologiaProcessosController@fibraDeVidro');
	Route::get('technologies-and-processes/painting', 'TecnologiaProcessosController@pintura');
	Route::get('technologies-and-processes/product-development', 'TecnologiaProcessosController@desenvolvimentoDeProdutos');

	// Termoplástico
	Route::get('technologies-and-processes/thermoplastic/sheet-extrusion', 'TecnologiaProcessosController@termoplasticoExtrusao');
	Route::get('technologies-and-processes/thermoplastic/vacuum-forming', 'TecnologiaProcessosController@termoplasticoVacuumForming');
	Route::get('technologies-and-processes/thermoplastic/rotomolding', 'TecnologiaProcessosController@termoplasticoRotomoldagem');
	Route::get('technologies-and-processes/thermoplastic/robotic-finishing', 'TecnologiaProcessosController@termoplasticoAcabamentoRobotizado');
	Route::get('technologies-and-processes/thermoplastic/injection', 'TecnologiaProcessosController@termoplasticoAcabamentoInjecao');

	// Fibra de vidro
	Route::get('technologies-and-processes/fiberglass/hlu', 'TecnologiaProcessosController@fibraDeVidroHlu');
	Route::get('technologies-and-processes/fiberglass/rtm-light', 'TecnologiaProcessosController@fibraDeVidroRtmLight');
	Route::get('technologies-and-processes/fiberglass/rtm-skin', 'TecnologiaProcessosController@fibraDeVidroRtmSkin');

	// Desenvolvimento de produtos
	Route::get('technologies-and-processes/product-development/product-engineering', 'TecnologiaProcessosController@desenvolvimentoDeProdutosEngenhariaDeProdutos');
	Route::get('technologies-and-processes/product-development/Laboratory', 'TecnologiaProcessosController@desenvolvimentoDeProdutosLaboratorio');
	Route::get('technologies-and-processes/product-development/quality-system-management', 'TecnologiaProcessosController@desenvolvimentoDeProdutosGestaoDoSistemaDaQualidade');
	Route::get('technologies-and-processes/product-development/quality-control-and-after-sales', 'TecnologiaProcessosController@desenvolvimentoDeProdutosControleDeQualidadeEPosVenda');

	// Meio ambiente
	Route::get('environment', 'MeioAmbienteController@index');
	Route::get('environment/suppliers-and-the-environment', 'MeioAmbienteController@fornecedoresMeioAmbiente');
	Route::get('environment/product-life-cycle-analysis', 'MeioAmbienteController@cicloDeVidaDoProduto');

	// Fale conosco
	Route::get('contact-us', 'FaleConoscoController@index');
	Route::post('contact-us', 'FaleConoscoController@enviar');
	Route::get('contact-us/localization', 'FaleConoscoController@localizacao');
	Route::match(['get', 'post'], 'work-with-us', 'TrabalheConoscoController@index');

	// Notícias
	Route::resource('admin/noticia', 'AdminNoticiaController');
	Route::get('news/{slug}', 'NoticiasController@ver');
	Route::get('news', 'NoticiasController@index');
	Route::patch('noticias-atualizar/{noticia}', 'NoticiasController@atualizar');
});

// Catch all
Route::any('{catch}', function($page) {
	$redirectArray = [
		'empresa', 
		'empresa/codigo-de-conduta-e-etica', 
		'empresa/missao-e-visao', 
		'empresa/politica-da-qualidade', 
		'fale-conosco', 
		'fale-conosco/localizacao', 
		'home', 
		'inicio', 
		'meio-ambiente', 
		'meio-ambiente/ciclo-de-vida-do-produto', 
		'meio-ambiente/fornecedores-e-meio-ambiente', 
		'noticias', 
		'tecnologia-e-processos', 
		'tecnologia-e-processos/desenvolvimento-de-produtos', 
		'tecnologia-e-processos/desenvolvimento-de-produtos/controle-de-qualidade-e-pos-venda', 
		'tecnologia-e-processos/desenvolvimento-de-produtos/engenharia-de-produtos', 
		'tecnologia-e-processos/desenvolvimento-de-produtos/gestao-do-sistema-da-qualidade', 
		'tecnologia-e-processos/desenvolvimento-de-produtos/laboratorio', 
		'tecnologia-e-processos/fibra-de-vidro', 
		'tecnologia-e-processos/fibra-de-vidro/hlu', 
		'tecnologia-e-processos/fibra-de-vidro/rtm-light', 
		'tecnologia-e-processos/fibra-de-vidro/rtm-skin', 
		'tecnologia-e-processos/pintura', 
		'tecnologia-e-processos/termoplastico', 
		'tecnologia-e-processos/termoplastico/acabamento-robotizado', 
		'tecnologia-e-processos/termoplastico/extrusao', 
		'tecnologia-e-processos/termoplastico/injecao', 
		'tecnologia-e-processos/termoplastico/rotomoldagem', 
		'tecnologia-e-processos/termoplastico/vacuum-forming', 
		'trabalhe-conosco', 
	];

	if (in_array($page, $redirectArray)) {
		return redirect('pt_BR/' . $page);
	} else {
    	return redirect('pt_BR');
	}

})->where('catch', '(.*)');