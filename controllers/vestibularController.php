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
class vestibularController extends controller {

    /**
     * Está função pertence a uma action do controle MVC, ela é responśavel por carrega a view  presente no diretorio views/home.php, desde que o usuário esteja logado no sistema
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function index() {
	$view = "vestibular";
	$dados = array();

	$vestibular = array();
	if (isset($_POST['nEnviar'])) {
	    //nome
	    if (!empty($_POST['nNome'])) {
		$vestibular['nome'] = addslashes($_POST['nNome']);
	    } else {
		$dados['vestibular_erro']['nome']['msg'] = 'Informe o nome';
		$dados['vestibular_erro']['nome']['class'] = 'has-error';
	    }
	    //nascimento
	    if (!empty($_POST['nNascimento'])) {
		$vestibular['nascimento'] = addslashes($_POST['nNascimento']);
	    } else {
		$dados['vestibular_erro']['nascimento']['msg'] = 'Informe a data';
		$dados['vestibular_erro']['nascimento']['class'] = 'has-error';
	    }

	    //nGenero
	    if (!empty($_POST['nGenero'])) {
		$vestibular['genero'] = addslashes($_POST['nGenero']);
	    } else {
		$dados['vestibular_erro']['genero']['msg'] = 'Selecione o Gênero';
		$dados['vestibular_erro']['genero']['class'] = 'has-error';
	    }

	    //nIdentidade
	    if (!empty($_POST['nIdentidade'])) {
		$vestibular['identidade'] = addslashes($_POST['nIdentidade']);
	    } else {
		$dados['vestibular_erro']['identidade']['msg'] = 'informe a identidade';
		$dados['vestibular_erro']['identidade']['class'] = 'has-error';
	    }

	    //nUF
	    if (!empty($_POST['nUF'])) {
		$vestibular['uf'] = addslashes($_POST['nUF']);
	    } else {
		$dados['vestibular_erro']['uf']['msg'] = 'Informe UF da Identidade';
		$dados['vestibular_erro']['uf']['class'] = 'has-error';
	    }

	    //nOrgao
	    if (!empty($_POST['nOrgao'])) {
		$vestibular['orgao'] = addslashes($_POST['nOrgao']);
	    } else {
		$dados['vestibular_erro']['orgao']['msg'] = 'Informe Orgão de Expedição da Identidade';
		$dados['vestibular_erro']['orgao']['class'] = 'has-error';
	    }
	    //nData
	    if (!empty($_POST['nData'])) {
		$vestibular['data'] = addslashes($_POST['nData']);
	    } else {
		$dados['vestibular_erro']['data']['msg'] = 'Informe Data de Emissão da Identidade';
		$dados['vestibular_erro']['data']['class'] = 'has-error';
	    }
	    //nCPF
	    if (!empty($_POST['nCPF'])) {
		$vestibular['cpf'] = addslashes($_POST['nCPF']);
	    } else {
		$dados['vestibular_erro']['cpf']['msg'] = 'Informe o CPF';
		$dados['vestibular_erro']['cpf']['class'] = 'has-error';
	    }
	    //nEstCivil
	    if (!empty($_POST['nEstCivil'])) {
		$vestibular['estado_civil'] = addslashes($_POST['nEstCivil']);
	    } else {
		$dados['vestibular_erro']['estado_civil']['msg'] = 'Informe o Estado Cívil';
		$dados['vestibular_erro']['estado_civil']['class'] = 'has-error';
	    }
	    //nNaturalidade
	    if (!empty($_POST['nNaturalidade'])) {
		$vestibular['naturalidade'] = addslashes($_POST['nNaturalidade']);
	    } else {
		$dados['vestibular_erro']['naturalidade']['msg'] = 'Informe a Naturalidade';
		$dados['vestibular_erro']['naturalidade']['class'] = 'has-error';
	    }
	    //nNacionalidade
	    if (!empty($_POST['nNacionalidade'])) {
		$vestibular['nacionalidade'] = addslashes($_POST['nNacionalidade']);
	    } else {
		$dados['vestibular_erro']['nacionalidade']['msg'] = 'Informe a Nacionalidade';
		$dados['vestibular_erro']['nacionalidade']['class'] = 'has-error';
	    }
	    //familiares
	    //nPai
	    if (!empty($_POST['nPai'])) {
		$vestibular['pai'] = addslashes($_POST['nPai']);
	    } else {
		$dados['vestibular_erro']['pai']['msg'] = 'Informe o nome do Pai';
		$dados['vestibular_erro']['pai']['class'] = 'has-error';
	    }

	    //nPai
	    if (!empty($_POST['nMae'])) {
		$vestibular['mae'] = addslashes($_POST['nMae']);
	    } else {
		$dados['vestibular_erro']['mae']['msg'] = 'Informe o nome da Mãe';
		$dados['vestibular_erro']['mae']['class'] = 'has-error';
	    }

	    //CONTATO
	    //nEmail
	    if (!empty($_POST['nEmail'])) {
		$vestibular['email'] = addslashes($_POST['nEmail']);
	    } else {
		$dados['vestibular_erro']['email']['msg'] = 'Informe o email';
		$dados['vestibular_erro']['email']['class'] = 'has-error';
	    }
	    //nTelefone
	    if (!empty($_POST['nTelefone'])) {
		$vestibular['telefone'] = addslashes($_POST['nTelefone']);
	    }
	    
	    //nCelular
	    if (!empty($_POST['nCelular'])) {
		$vestibular['celular'] = addslashes($_POST['nCelular']);
	    } else {
		$dados['vestibular_erro']['celular']['msg'] = 'Informe o celular';
		$dados['vestibular_erro']['celular']['class'] = 'has-error';
	    }

	    //endereço
	    //nLogradouro
	    if (!empty($_POST['nLogradouro'])) {
		$vestibular['logradouro'] = addslashes($_POST['nLogradouro']);
	    } else {
		$dados['vestibular_erro']['logradouro']['msg'] = 'Informe o logradouro';
		$dados['vestibular_erro']['logradouro']['class'] = 'has-error';
	    }

	    //nLogradouro
	    if (!empty($_POST['nNumero'])) {
		$vestibular['numero'] = addslashes($_POST['nNumero']);
	    } else {
		$dados['vestibular_erro']['numero']['msg'] = 'Informe o numero';
		$dados['vestibular_erro']['numero']['class'] = 'has-error';
	    }

	    //nBairro
	    if (!empty($_POST['nBairro'])) {
		$vestibular['bairro'] = addslashes($_POST['nBairro']);
	    } else {
		$dados['vestibular_erro']['bairro']['msg'] = 'Informe o numero';
		$dados['vestibular_erro']['bairro']['class'] = 'has-error';
	    }
	    //nComplemento    
	    $vestibular['complemento'] = addslashes($_POST['nComplemento']);

	    $vestibular['cep'] = addslashes($_POST['nCEP']);

	    //nLogradouro
	    if (!empty($_POST['nCidade'])) {
		$vestibular['cidade'] = addslashes($_POST['nCidade']);
	    } else {
		$dados['vestibular_erro']['cidade']['msg'] = 'Informe a Cidade';
		$dados['vestibular_erro']['cidade']['class'] = 'has-error';
	    }
	    //nLogradouro
	    if (!empty($_POST['nEstado'])) {
		$vestibular['estado'] = addslashes($_POST['nEstado']);
	    } else {
		$dados['vestibular_erro']['estado']['msg'] = 'Informe o estado';
		$dados['vestibular_erro']['estado']['class'] = 'has-error';
	    }
	    //curso
	    //nLogradouro
	    if (!empty($_POST['nCurso'])) {
		$vestibular['curso'] = addslashes($_POST['nCurso']);
	    } else {
		$dados['vestibular_erro']['curso']['msg'] = 'Informe o Curso';
		$dados['vestibular_erro']['curso']['class'] = 'has-error';
	    }

	    //boleto
	    //nLogradouro
	    if (!empty($_POST['nBoleto'])) {
		$vestibular['boleto'] = addslashes($_POST['nBoleto']);
	    } else {
		$dados['vestibular_erro']['boleto']['msg'] = 'Selecione uma das opções de recebimento do boleto!';
	    }


	    if (isset($dados['vestibular_erro']) && !empty($dados['vestibular_erro'])) {
		$dados['erro']['msg'] = '<i class="fa fa-info-circle" aria-hidden="true"></i> Preencha todos os campos obrigatórios (*).';
		$dados['erro']['class'] = 'alert-danger';
		$dados['vestibular'] = $vestibular;
	    } else {
		$dados['erro']['msg'] = '<i class="fa fa-check" aria-hidden="true"></i> Formulário Enviado sucesso!';
		$dados['erro']['class'] = 'alert-success';
		$this->enviarForms($vestibular);
		$_POST = array();
	    }
	}

	$this->loadTemplate($view, $dados);
    }

    public function enviarForms($vestibular) {
	$mensagem = '<!DOCTYPE html>
			<html lang="pt-br">
			<head>
				<meta charset="UTF-8">
				<title>Inscrição de Vestibular 2020 - ' . $vestibular["nome"] . '</title>
			</head>
			<body>
				<div style="width: 98%;display: block;margin: 10px auto;padding: 0;font-family: sans-serif, Arial;border : 2px solid #357ca5;">
				<h3 style="background: #357ca5;color: white;padding: 10px;margin: 0;">Inscrição de Vestibular 2020 - ' . $vestibular["nome"] . ' <br/></h3>';

	foreach ($vestibular as $indice => $key) {
	    $mensagem .= '<p style="padding: 0 5px;"><b>' . ucfirst($indice) . ": </b>" . $key . '</p>';
	}
	$mensagem .= '		</div>
			</body>
			</html>';

	// envia email ao usuário
	$assunto = 'Inscrição de Vestibular 2020 - ' . $vestibular["nome"];
	$destinatario = 'contato@cavanis.edu.br';

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: ' . $assunto . ' <contato@cavanis.edu.br>' . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();
	mail($destinatario, $assunto, $mensagem, $headers);
    }

}
