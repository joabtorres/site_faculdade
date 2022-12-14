
<!DOCTYPE html>
<html lang="pt-br">

    <head>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148460222-1"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-148460222-1');
		</script>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PTSVC6F');</script>
		<!-- End Google Tag Manager -->

	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/gif" href="<?php echo BASE_URL ?>/assets/imagens/icon.png" sizes="32x32" />
        <meta property="ogg:title" content="Faculdade Católica Cavanis">
        <meta property="ogg:description" content=" A Faculdade Católica Cavanis do Sudoeste do Pará - FCCSPA é uma instituição de ensino superioer localizada na cidade de Novo Progresso, no estado do Pará ">
        <title> Faculdade Católica Cavanis</title>
        <!-- Bootstrap -->
        <link href="<?php echo BASE_URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/estilo.css">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/lightbox.css">


    </head>

    <body>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTSVC6F"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script>
	<div class="bg-azul-claro">
	    <div class="container" id="heade-topo">
		<div class="row">
		    <div class="col-md-6">
			<a href="https://portal.sponteeducacional.net.br/secop" target="_blank" class="text-white"><i class="fas fa-user-graduate"></i> Portal do Aluno</a>
		    </div>
		    <div class="col-md-6 text-right">
			<span><i class="fas fa-phone-alt"></i> (93) 98422-4055 - 98102-3173</span>
			<span><i class="fas fa-envelope"></i> contato@cavanis.edu.br</span>
		    </div>
		</div>
	    </div>
	</div>
	<!--FIM <div class="bg-azul-claro container-fluid">;-->
	<nav class="navbar navbar-default">
	    <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="#"><img src="<?php echo BASE_URL ?>/assets/imagens/logo.png"/></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo BASE_URL ?>/home">INICIAL</a></li>
			<li><a href="<?php echo BASE_URL ?>/graduacao">GRADUAÇÃO</a></li>
			<li><a href="<?php echo BASE_URL ?>/posgraduacao">PÓS-GRADUAÇÃO</a></li>
			<li><a href="<?php echo BASE_URL ?>/extensao">EXTENSÃO</a></li>
			<li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVIÇOS <span class="caret"></span></a>
			    <ul class="dropdown-menu">
				<li><a href="<?php echo BASE_URL ?>/servicos/cpa">CPA</a></li>
				<li><a href="<?php echo BASE_URL ?>/servicos/documentosinstitucionais">DOCUMENTOS INSTITUCIONAIS</a></li>
				<!--<li><a href="/servicos/infraestrutura">INFRAESTRUTURA</a></li>-->
			    </ul>
			</li>
			<li><a href="<?php echo BASE_URL; ?>/institucional">INSTITUCIONAL</a></li>
			<li><a href="<?php echo BASE_URL ?>/noticias">NOTÍCIAS</a></li>
			<li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTATO <span class="caret"></span></a>
			    <ul class="dropdown-menu">
				<li><a href="<?php echo BASE_URL; ?>/contato">FALE CONOSCO</a></li>
				<li><a href="<?php echo BASE_URL; ?>/contato/ouvidoria">OUVIDORIA</a></li>
			    </ul>
			</li>
			<li><a href="<?php echo BASE_URL; ?>/vestibular" class="btn btn-primary"><span class="text-yellow"><i class="fas fa-graduation-cap"></i></span> VESTIBULAR</a></li>
		    </ul>
		</div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	</nav>
	<!--<nav class="navbar navbar-default">-->
	<!--fim do menu;-->

	<?php $this->loadViewInTemplate($viewName, $viewData) ?>

	<footer id="rodape" class="bg-azul-claro">
	    <div class="container">
		<div class="row">
		    <div class="col-md-4">
			<img src="<?php echo BASE_URL ?>/assets/imagens/logo-rodape.png" alt="Logo rodape da faculdade catolica cavanis" class="img-responsive">
		    </div>
		    <div class="col-md-4">
			<ul class="list-unstyled">
			    <li><h5>INSTITUIÇÃO</h5></li>
			    <li><br/></li>
			    <li>Faculdade Católica Cavanis do Sudoeste do Pará -FCCSPA</li>
				<li>Portaria MEC Nº1.120 | D.O.U. 11/10/2016</li>
				<li>Mantenedora: Sociedade Educacional Católica do Oeste do Pará - SECOP </li>
				<li><br/></li>
			    <li><i class="fas fa-home"></i> Rua Novo Progresso, 59, Rui Pires de Lima - CEP 68193-000</li>
			</ul>
		    </div>
		    <div class="col-md-4">
			<div class="fb-page" data-href="https://www.facebook.com/faculdadecatolicacavanis/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/faculdadecatolicacavanis/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/faculdadecatolicacavanis/">Faculdade Católica Cavanis</a></blockquote></div>
		    </div>
		</div>
	    </div>
	</footer>
	<footer>
	    <div class="container">
		<div class="row">
		    <div class="col-md-12">
			<div class="text-center" style="margin: 10px;">&copy; 2016-2019 cavanis.edu.br | todos os direitos reservados.</div>
		    </div>
		</div>
	    </div>
	</footer>
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="<?php echo BASE_URL ?>/assets/js/jquery-3.1.1.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDf9N7ej7iKz6t_-zk4hsyuq3B01rUkOdA"></script>
        <script src="<?php echo BASE_URL ?>/assets/js/lightbox-plus-jquery.min.js"></script>
        <script src="<?php echo BASE_URL ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL ?>/assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo BASE_URL ?>/assets/js/jquery.maskMoney.js"></script>
        <script src="<?php echo BASE_URL ?>/assets/js/script.js"  ></script>
        <script src="<?php echo BASE_URL ?>/assets/js/fontawesome-all.min.js"  ></script>

    </body>

</html>
