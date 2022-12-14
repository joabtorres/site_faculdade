<div id="slide-home">
    <?php if (isset($slides) && !empty($slides)): ?>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $qtd = count($slides);
                for ($i = 0; $i < $qtd; $i++) {
                    if ($i == 0) {
                        echo ' <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
                    } else {
                        echo '<li data-target="#carousel-example-generic" data-slide-to="' . $i . '"></li>';
                    }
                }
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $qtd = 0;
                foreach ($slides as $indice):
                    ?>
                    <div class="item <?php echo ($qtd == 0) ? 'active' : '' ?> ">
                        <?php
                        if (!empty($indice['link'])) {
                            echo '<a href="' . $indice['link'] . '">
                                        <img src="' . BASE_URL_PAINEL . '/' . $indice['imagem'] . '" alt="Slide do site" class="img-responsive">
                                    </a>';
                        } else {
                            echo '<img src="' . BASE_URL_PAINEL . '/' . $indice['imagem'] . '" alt="Slide do site" class="img-responsive">';
                        }
                        ?>
                    </div>
                    <?php
                    $qtd++;
                endforeach;
                ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <?php endif; ?>
</div>
<!--<div id="slide-home">-->
<!--fim do slide-->
<div id="container-noticias">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-destaque">
                    <h2 class="text-center text-uppercase">ULTIMAS Nóticias</h2>
                    <div class="sublinha"><span></span><i class="fas fa-layer-group fa-2x"></i><span></span></div>
                </div>
            </div>
        </div>
        <?php
        if (!empty($posts)) {
            ?>
            <?php
            $qtd = 0;
            foreach ($posts as $indice):
                ++$qtd;
                if ($qtd == 1) {
                    echo '  <div class="row">';
                }
                ?>
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo BASE_URL_PAINEL . '/' . $indice['imagem'] ?>" alt="postagem" class="img-responsive">
                        <div class="caption">
                            <a href="<?php echo BASE_URL . '/noticias/post/' . md5($indice['id']) ?>"><h3 class="text-blue"><?php echo $indice['titulo'] ?></h3></a>
                            <p><i class="fas fa-calendar-check text-blue"></i> <?php echo $this->formatDataViewComplete($indice['data']) ?> | <i class="fas fa-bookmark text-blue"></i> <?php echo $indice['categoria'] ?></p>
                            <p class="text-justify"> <?php echo $indice['previo'] ?>, ...  <a href="<?php echo BASE_URL . '/noticias/post/' . md5($indice['id']) ?>" class="text-blue"> continue lendo &raquo;</a></p>
                         </div>
                    </div>
                </div>
                <?php
                if ($qtd == 3) {
                    echo ' </div>';
                    $qtd = 0;
                }
            endforeach;
            if ($qtd > 0) {
                echo ' </div>';
            }
        }
        ?>
    </div>
</div>
<!--<div id="container-noticias">-->
<!--fim das noticias-->

<div id="container-dados">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-book fa-3x text-yellow"></i>
                <span class="qtd">3</span>
                <span class="descricao">CURSOS DISPONÍVEIS</span>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-users fa-3x text-yellow"></i>
                <span class="qtd">113</span>
                <span class="descricao text-uppercase">DISCENTES CURSANDO</span>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-graduation-cap text-yellow fa-3x"></i>
                <span class="qtd">0</span>
                <span class="descricao text-uppercase">EGRESSOS</span>
            </div>
        </div>
    </div>
</div>
<!--fim container-dados-->
<div id="container-cursos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-destaque">
                    <h2 class="text-center text-uppercase">gRADUAÇÕES</h2>
                    <div class="sublinha"><span></span><i class="fas fa-layer-group fa-2x"></i><span></span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="thumbnail">
                    <a href="<?php echo BASE_URL ?>/graduacao/administracao">
                        <img src="<?php echo BASE_URL ?>/assets/imagens/banner-adm.jpg" alt="postagem" class="img-responsive">
                        <div class="caption">
                            <p class="text-center">Administração</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="thumbnail">
                    <a href="<?php echo BASE_URL ?>/graduacao/ciencias_contabeis">
                        <img src="<?php echo BASE_URL ?>/assets/imagens/banner-cc.jpg" alt="Ciências Contabéis" class="img-responsive">
                        <div class="caption">
                            <p class="text-center">Ciências Contábeis</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="thumbnail">
                    <a href="<?php echo BASE_URL ?>/graduacao/sistemas_de_informacao">
                        <img src="<?php echo BASE_URL ?>/assets/imagens/banner-si.jpg" alt="Sistemas de informação" class="img-responsive">
                        <div class="caption">
                            <p class="text-center">Sistemas de Informação </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div id="container-cursos">-->
<!--fim container-cursos;-->