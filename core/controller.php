<?php

/**
 * A classe 'controller' é responsável por fazer o carregamento das views, concebe paginação e verifica nível de usuário
 * 
 * @author Joab Torres <joabtorres1508@gmail.com>
 * @version 1.0
 * @copyright  (c) 2019, Joab Torres Alencar - Analista de Sistemas 
 * @access public
 * @package core
 * @example classe controller
 */
class controller {

    /**
     * Está função verifica se a $_SESSION['usuario_siasif'] está inicializada, caso esteja então verifica se o usuario tem permissao de acesso e sua conta esteja ativa.
     * @return int 
     * @access protected
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    protected function checkUser() {
        if (isset($_SESSION['usuario_siasif']) && is_array($_SESSION['usuario_siasif']) && isset($_SESSION['usuario_siasif']['statu'])) {
            if ($_SESSION['usuario_siasif']['statu'] == 1) {
                return $_SESSION['usuario_siasif']['nivel'];
            }
        } else {
            header("Location: /login");
            return 0;
        }
    }

    /**
     * Está função é responsável para carrega uma view;
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . ".php";
    }

    /**
     * Está função é responsável para carrega um template estático, a onde ela chama chama uma função lo;
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function loadTemplate($viewName, $viewData = array()) {
        include 'views/template.php';
    }

    /**
     * Está função é responsável para carrega uma view dinamica dentro de um template estático
     * @param String viewName - nome da view;
     * @param array $viewData - Dados para serem carregados na view
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . ".php";
    }

    /**
     * Está função é responsável para converte uma data do padrão 'ano-mes-dia' para 'dia/mes/ano'
     * @param String $date - data solicitada pelo parametro
     * r
     * @access protected
     * @return $date - data formatada no padrão brasileiro
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    protected function formatDateView($date) {
        $arrayDate = explode("-", $date);
        if (count($arrayDate) == 3) {
            return $arrayDate[2] . '/' . $arrayDate[1] . '/' . $arrayDate[0];
        } else {
            return false;
        }
    }

    /**
     * Está função é responsável para converte uma data do padrão 'dia/mes/ano' para 'ano-mes-dia'
     * @param String $date - data solicitada pelo parametro
     * r
     * @access protected
     * @return $date - data formatada no padrão banco MySQL
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    protected function formatDateBD($date) {
        $arrayDate = explode("/", $date);
        if (count($arrayDate) == 3) {
            return $arrayDate[2] . '-' . $arrayDate[1] . '-' . $arrayDate[0];
        } else {
            return false;
        }
    }

    /**
     * Está função é responsável para converte uma data do padrão 'ano-mes-dia' para 'dia de mes de ano'
     * @param String $date - data solicitada pelo parametro
     * r
     * @access protected
     * @return $resultado - retorna a data dia de mês de ano 15 de agosto de 2019
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    protected function formatDataViewComplete($date) {
        $arrayDate = explode("-", $date);
        if (count($arrayDate) == 3) {
            $resultado = $arrayDate[2] . ' de ' . $this->getMes($arrayDate[1]) . ' de ' . $arrayDate[0];
            return $resultado;
        } else {
            return false;
        }
    }

    /**
     * Está função é responsável para retorna o nome do més
     * @param String $mes = mês selecionado
     * @access protected
     * @return $resultado -  retorna os valores  'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setemmbro', 'outubro', 'novembro', 'dezembro'
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    protected function getMes($mes) {
        $array = array('janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setemmbro', 'outubro', 'novembro', 'dezembro');
        $resultado = "";
        for ($i = 0; $i < count($array); $i++) {
            if (($i + 1) == $mes) {
                $resultado = $array[$i];
            }
        }
        return $resultado;
    }

}
