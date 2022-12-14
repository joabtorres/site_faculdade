<?php

/**
 * A classe 'core' é responsável para fazer o controle da navegação via url, setando as classes controllers e suas respectivas actions e params 
 * 
 * @author Joab Torres <joabtorres1508@gmail.com>
 * @version 1.0
 * @copyright  (c) 2019, Joab Torres Alencar - Analista de Sistemas 
 * @access public
 * @package core
 * @example classe core
 */
class core {

    /**
     * String $url - referente aos caminhos acessados na url do navegador
     * @access private
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    private $url;

    /**
     * String $controller - referente a classe controller
     * @access private
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    private $controller;

    /**
     * String $action - referente a ação ou método presente na classe da variavel $controller
     * @access private
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    private $action;

    /**
     * Array $params - referente aos parametros que serão setados na action solicitada 
     * @access private
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    private $params;

    /**
     * Está função tem como objetivo: captura um $_GET['url] e armazena na váriavel $url para que possa fazer o controle de requisção digitado na url, sendo acessa um controller, action e params.
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function run() {
        $this->goHTTPS();
        $this->url = (isset($_GET['url']) && !empty($_GET['url'])) ? $_GET['url'] : "";
        $this->params = array();
        if (!empty($this->url) && $this->url != '/') {
            $this->url = explode('/', $this->url);

            //Definindo o controller
            if (isset($this->url[0]) && !empty($this->url[0])) {
                $this->controller = $this->url[0] . 'Controller';
                array_shift($this->url);
            } else {
                $this->controller = 'homeController';
            }

            //Definindo a Action
            if (isset($this->url[0]) && !empty($this->url[0])) {
                $this->action = $this->url[0];
                array_shift($this->url);
            } else {
                $this->action = 'index';
            }

            // Depois de executar array_shift duas vezes na $url, só vai sobrar um array com os parâmetros para as Actions
            if (count($this->url) > 0) {
                $this->params = $this->url;
            }
        } else {
            $this->controller = 'homeController';
            $this->action = 'index';
        }
        //requisitando classe controller
        require_once('core/controller.php');

        /* $c = new $this->controller();
          call_user_func_array(array($c, $this->action), $this->params); */


        if (class_exists($this->controller) && method_exists($this->controller, $this->action)) {
            $c = new $this->controller();
            call_user_func_array(array($c, $this->action), $this->params);
        } else {
            $co = new controller();
            $co->loadView('404');
        }
    }

    /**
     * Está função tem como objetivo:  redirecionar automaticamente o endereço HTTP para o HTTPS.
     * @access private
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    private function goHTTPS() {

        if (!isset($_SERVER['HTTPS']) && ENVIRONMENT == "prodution") {
            if ($_SERVER['HTTPS'] != "on") {
                header('Location: https://' . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI']);
            }
        }
    }

}
