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
class graduacaoController extends controller {

    /**
     * Está função pertence a uma action do controle MVC, ela é responśavel por carrega a view  presente no diretorio views/home.php, desde que o usuário esteja logado no sistema
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function index() {
	$view = "graduacao/graduacao";
	$dados = array();
	$this->loadTemplate($view, $dados);
    }

    public function administracao() {
	$view = "graduacao/administracao";
	$dados = array();
	$this->loadTemplate($view, $dados);
    }

    public function ciencias_contabeis() {
	$view = "graduacao/ciencias_contabeis";
	$dados = array();
	$this->loadTemplate($view, $dados);
    }

    public function sistemas_de_informacao() {
	$view = "graduacao/sistemas_de_informacao";
	$dados = array();
	$this->loadTemplate($view, $dados);
    }

}
