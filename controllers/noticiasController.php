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
class noticiasController extends controller {

    /**
     * Está função pertence a uma action do controle MVC, ela é responśavel por carrega a view  presente no diretorio views/home.php, desde que o usuário esteja logado no sistema
     * @access public
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function index($page = 1) {
        $view = "noticias/noticias";
        $dados = array();
        $crud = new crud_db();
        $dados = array();
        $dados['categorias'] = $crud->read("SELECT * FROM categoria WHERE status = 1 ORDER BY nome ASC");
        $dados['usuarios'] = $crud->read("SELECT * FROM usuario WHERE status = 1 ORDER BY nome ASC");
        $arraySearch = array();
        $sql = "SELECT p.*, c.nome as categoria, u.nome FROM post AS p INNER JOIN categoria as c INNER JOIN usuario as u WHERE p.id_categoria=c.id AND  p.id_usuario=u.id AND p.status=1 ";
        $parametros = "";
        if (isset($_GET['nBuscarBT'])) {
            $parametros = "?nCategoria=" . $_GET['nCategoria'] . "?nUsuario=" . $_GET['nUsuario'] . "?nTitulo=" . $_GET['nTitulo'] . "&nBuscarBT=BuscarBT";
            //nTitulo
            if (!empty($_GET['nCategoria'])) {
                $sql = $sql . " AND id_categoria=:categoria ";
                $arraySearch['categoria'] = addslashes($_GET['nCategoria']);
            }
            //nTitulo
            if (!empty($_GET['nUsuario'])) {
                $sql = $sql . " AND id_usuario=:id_usuario ";
                $arraySearch['id_usuario'] = addslashes($_GET['nUsuario']);
            }
            //nTitulo
            if (!empty($_GET['nTitulo'])) {
                $sql = $sql . " AND titulo LIKE :titulo ";
                $arraySearch['titulo'] = "%" . $_GET['nTitulo'] . "%";
            }
            //paginacao
            $limite = 10;
            $total_registro = $crud->read($sql, $arraySearch);
            $total_registro = is_array($total_registro) ? count($total_registro) : 1;
            $paginas = $total_registro / $limite;
            $indice = 0;
            $pagina_atual = (isset($page) && !empty($page)) ? addslashes($page) : 1;
            $indice = ($pagina_atual - 1) * $limite;
            $dados["paginas"] = $paginas;
            $dados["pagina_atual"] = $pagina_atual;
            $dados['metodo_buscar'] = $parametros;
            $sql .= " ORDER BY p.id DESC LIMIT $indice,$limite ";

            $dados['posts'] = $crud->read($sql, $arraySearch);
        } else {
            //paginacao
            $limite = 10;
            $total_registro = $crud->read($sql);
            $total_registro = is_array($total_registro) ? count($total_registro) : 1;
            $paginas = $total_registro / $limite;
            $indice = 0;
            $pagina_atual = (isset($page) && !empty($page)) ? addslashes($page) : 1;
            $indice = ($pagina_atual - 1) * $limite;
            $dados["paginas"] = $paginas;
            $dados["pagina_atual"] = $pagina_atual;
            $dados['metodo_buscar'] = $parametros;
            $sql .= " ORDER BY p.id DESC LIMIT $indice,$limite ";

            $dados['posts'] = $crud->read($sql);
        }
        $this->loadTemplate($view, $dados);
    }

    public function post($id = null) {
        if (empty($id)) {
            $url = "location: " . BASE_URL . '/home';
            header($url);
        }
        $view = "noticias/post";
        $dados = array();
        $crudModel = new crud_db();
        $sql = "SELECT p.*, c.nome as categoria, u.nome FROM post AS p INNER JOIN categoria as c INNER JOIN usuario as u WHERE p.id_categoria=c.id AND  p.id_usuario=u.id AND md5(p.id)=:id";
        $post = $crudModel->read_specific($sql, array('id' => $id));
        if (is_array($post)) {
            $imgs_grande = $crudModel->read("SELECT * FROM post_img where id_post=:id", array('id' => $post['id']));
            $imgs_min = $crudModel->read("SELECT * FROM post_img_min where id_post=:id", array('id' => $post['id']));
            if (is_array($imgs_min) && is_array($imgs_grande)) {
                foreach ($imgs_grande as $key => $value) {
                    $post['imagens'][$key]['grande'] = $value['imagem'];
                }
                foreach ($imgs_min as $key => $value) {
                    $post['imagens'][$key]['min'] = $value['imagem'];
                }
            }
        }
        $dados['post'] = $post;
        $this->loadTemplate($view, $dados);
    }

}
