<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title text-uppercase">notícias</h1>
                <ul class="list-inline">
                    <li><a href="<?php echo BASE_URL ?>/home">Inicial</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Notícias</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="container_dinamico">
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-blue"><?php echo (!empty($post['titulo'])) ? $post['titulo'] : '' ?> </h3>
            <p><i class="fas fa-calendar-check text-blue"></i> <?php echo (!empty($post['data'])) ? $this->formatDataViewComplete($post['data']) : '' ?>  | <i class="fas fa-bookmark text-blue"></i> <?php echo (!empty($post['categoria'])) ? $post['categoria'] : '' ?>  | <span class="text-blue"><i class="fas fa-user-circle"></i></span> <?php echo (!empty($post['nome'])) ? $post['nome'] : '' ?>  </p>
            <?php echo (!empty($post['texto'])) ? $post['texto'] : '' ?>  


            <?php
            if (isset($post['imagens']) && is_array($post['imagens'])) :
                foreach ($post['imagens'] as $indice) :
                    ?>
                    <div class="col-md-4 text-center"><a class="example-image-link" href="<?php echo BASE_URL_PAINEL . '/' . $indice['grande'] ?>" data-lightbox="example-set" data-title=""><img class="example-image img-responsive margin-bottom-10x" src="<?php echo BASE_URL_PAINEL . '/' . $indice['min'] ?>" alt=""/></a></div>
                            <?php
                        endforeach;
                    endif;
                    ?>

        </div>
    </div>
</div>