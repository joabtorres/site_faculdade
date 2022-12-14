<?php

/**
 * A classe 'homeController' é responsável para fazer o carregamento da página home do sistema
 * 
 * @author Joab Torres <joabtorres1508@gmail.com>
 * @version 1.0
 * @copyright  (c) 2019, Joab Torres Alencar - Analista de Sistemas 
 * @access public
 * @package controllers
 * @example classe homeController
 */
class contatoController extends controller {

    /**
     * Está função pertence a uma action do controle MVC, ela é responśavel por carrega a view  presente no diretorio views/home.php, desde que o usuário esteja logado no sistema
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function index() {
	$view = "contato/fale-conosco";
	$dados = array();
	$contato = array();
	$contato_error = array();
	if (isset($_POST['nEnviar'])) {
	    //nome
	    if (isset($_POST['nNome']) && !empty($_POST['nNome'])) {
		$contato['nome'] = addslashes($_POST['nNome']);
	    } else {
		$contato_error['nome']['msg'] = 'Informe o nome';
		$contato_error['nome']['class'] = 'has-error';
	    }
	    //email
	    if (isset($_POST['nEmail']) && !empty($_POST['nEmail'])) {
		$contato['email'] = addslashes($_POST['nEmail']);
	    } else {
		$contato_error['email']['msg'] = 'Informe o email';
		$contato_error['email']['class'] = 'has-error';
	    }
	    //telefone
	    if (isset($_POST['nTelefone']) && !empty($_POST['nTelefone'])) {
		$contato['telefone'] = addslashes($_POST['nTelefone']);
	    } else {
		$contato_error['telefone']['msg'] = 'Informe o número de telefone';
		$contato_error['telefone']['class'] = 'has-error';
	    }
	    //telefone
	    if (isset($_POST['nMensagem']) && !empty($_POST['nMensagem'])) {
		$contato['mensagem'] = addslashes($_POST['nMensagem']);
	    } else {
		$contato_error['mensagem']['msg'] = 'Descreva uma mensagem';
		$contato_error['mensagem']['class'] = 'has-error';
	    }
	    if (is_array($contato_error) && !empty($contato_error)) {
		$dados['contato_error'] = $contato_error;
		$dados['contato'] = $contato;
		$dados['msg'] = array('class' => 'alert-danger', 'msg' => '<i class="fa fa-times"></i> Preenchar os campos obrigatórios.');
	    } else {
		$dados['msg'] = array('class' => 'alert-success', 'msg' => '<i class="fas fa-check-double"></i> Mensagem enviada com sucesso.');
		// envia email ao usuário
		$assunto = 'Contato - cavanis.edu.br - ' . $contato["nome"];
		$destinatario = 'contato@cavanis.edu.br';
		$mensagem = '<!DOCTYPE html>
			<html lang="pt-br">
			<head>
				<meta charset="UTF-8">
				<title>' . $assunto . '</title>
			</head>
			<body>
				<div style="width: 98%;display: block;margin: 10px auto;padding: 0;font-family: sans-serif, Arial;border : 2px solid #357ca5;">
				<h3 style="background: #357ca5;color: white;padding: 10px;margin: 0;">Faculdade Católica Cavanis - Fale conosco</h3>
					<p style="padding: 10px;line-height: 30px;">
					    Você tem uma nova mensagem enviada do portal www.cavanis.edu.br/contato, confira a mensagem a baixo.<br>
                                            <span style="font-weight:bold">Nome: </span><span style="color: #357ca5;">' . $contato["nome"] . '</span><br/>
                                            <span style="font-weight:bold">E-mail: </span><span style="color: #357ca5;">' . $contato["email"] . '</span><br/>
                                            <span style="font-weight:bold">Telefone: </span><span style="color: #357ca5;">' . $contato["telefone"] . '</span><br/>
                                            <span style="font-weight:bold">Mensagem: </span><br/><span style="color: #357ca5;">' . $contato["mensagem"] . ' </span><br/>
					</p>
				</div>
			</body>
			</html>';
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
		$headers .= 'From: ' . $assunto . ' <contato@cavanis.edu.br>' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();
		mail($destinatario, $assunto, $mensagem, $headers);
	    }
	}

	$this->loadTemplate($view, $dados);
    }

    public function ouvidoria() {
	$view = "contato/ouvidoria";
	$dados = array();
	$ouvidoria = array();
	$ouvidoria_error = array();
	if (isset($_POST['nEnviar'])) {

	    //identificacao
	    if (!empty($_POST['nCategoria'])) {
		$ouvidoria['categoria'] = addslashes($_POST['nCategoria']);
	    } else {
		$ouvidoria_error['categoria']['msg'] = 'Selecione uma das opções';
		$ouvidoria_error['categoria']['class'] = 'has-error';
	    }
	    //nome
	    if (isset($_POST['nNome']) && !empty($_POST['nNome'])) {
		$ouvidoria['nome'] = addslashes($_POST['nNome']);
	    } else {
		$ouvidoria_error['nome']['msg'] = 'Informe o nome';
		$ouvidoria_error['nome']['class'] = 'has-error';
	    }
	    //email
	    if (isset($_POST['nEmail']) && !empty($_POST['nEmail'])) {
		$ouvidoria['email'] = addslashes($_POST['nEmail']);
	    } else {
		$ouvidoria_error['email']['msg'] = 'Informe o email';
		$ouvidoria_error['email']['class'] = 'has-error';
	    }
	    //telefone
	    if (isset($_POST['nTelefone']) && !empty($_POST['nTelefone'])) {
		$ouvidoria['telefone'] = addslashes($_POST['nTelefone']);
	    } else {
		$ouvidoria_error['telefone']['msg'] = 'Informe o número de telefone';
		$ouvidoria_error['telefone']['class'] = 'has-error';
	    }
	    //assunto
	    if (!empty($_POST['nAssunto'])) {
		$ouvidoria['assunto'] = addslashes($_POST['nAssunto']);
	    } else {
		$ouvidoria_error['assunto']['msg'] = 'Selecione uma das opções';
		$ouvidoria_error['assunto']['class'] = 'has-error';
	    }
	    //mensagem
	    if (isset($_POST['nMensagem']) && !empty($_POST['nMensagem'])) {
		$ouvidoria['mensagem'] = addslashes($_POST['nMensagem']);
	    } else {
		$ouvidoria_error['mensagem']['msg'] = 'Descreva uma mensagem';
		$ouvidoria_error['mensagem']['class'] = 'has-error';
	    }
	    if (is_array($ouvidoria_error) && !empty($ouvidoria_error)) {
		$dados['ouvidoria_error'] = $ouvidoria_error;
		$dados['ouvidoria'] = $ouvidoria;
		$dados['msg'] = array('class' => 'alert-danger', 'msg' => '<i class="fa fa-times"></i> Preenchar os campos obrigatórios.');
	    } else {
		$dados['msg'] = array('class' => 'alert-success', 'msg' => '<i class="fas fa-check-double"></i> Mensagem enviada com sucesso.');
		// envia email ao usuário
		$assunto = 'Ouvidoria - cavanis.edu.br - ' . $ouvidoria["nome"];
		$destinatario = 'ouvidoria@cavanis.edu.br';
		$mensagem = '<!DOCTYPE html>
			<html lang="pt-br">
			<head>
				<meta charset="UTF-8">
				<title>' . $assunto . '</title>
			</head>
			<body>
				<div style="width: 98%;display: block;margin: 10px auto;padding: 0;font-family: sans-serif, Arial;border : 2px solid #357ca5;">
				<h3 style="background: #357ca5;color: white;padding: 10px;margin: 0;">Faculdade Católica Cavanis - Ouvidoria</h3>
					<p style="padding: 10px;line-height: 30px;">
					    Você tem uma nova mensagem enviada do portal www.cavanis.edu.br/ouvidoria, confira a mensagem a baixo.<br>
                                            <span style="font-weight:bold">Você é? </span><span style="color: #357ca5;">' . $ouvidoria["categoria"] . '</span><br/>
                                            <span style="font-weight:bold">Nome: </span><span style="color: #357ca5;">' . $ouvidoria["nome"] . '</span><br/>
                                            <span style="font-weight:bold">E-mail: </span><span style="color: #357ca5;">' . $ouvidoria["email"] . '</span><br/>
                                            <span style="font-weight:bold">Telefone: </span><span style="color: #357ca5;">' . $ouvidoria["telefone"] . '</span><br/>
                                            <span style="font-weight:bold">O que você deseja? </span><span style="color: #357ca5;">' . $ouvidoria["assunto"] . '</span><br/>
                                            <span style="font-weight:bold">Mensagem: </span><br/><span style="color: #357ca5;">' . $ouvidoria["mensagem"] . ' </span><br/>
					</p>
				</div>
			</body>
			</html>';
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
		$headers .= 'From: ' . $assunto . ' <contato@cavanis.edu.br>' . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();
		mail($destinatario, $assunto, $mensagem, $headers);
	    }
	}
	$this->loadTemplate($view, $dados);
    }
}
