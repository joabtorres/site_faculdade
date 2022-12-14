<div id="breadcrumb">
    <div class="container">
	<div class="row">
	    <div class="col-md-12">
		<h1 class="title text-uppercase">fale conosco</h1>
		<ul class="list-inline">
		    <li><a href="<?php echo BASE_URL ?>/home">Inicial</a></li>
		    <li><i class="fas fa-angle-double-right"></i> Contato</li>
		    <li><i class="fas fa-angle-double-right"></i> Fale Conosco</li>
		</ul>
	    </div>
	</div>
    </div>
</div>
<div id="container_dinamico">
    <div class="container">
	<div class="row">
	    <div class="col-md-12 hidden-sm">
		<div id="mapa_contato"></div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-6">
		<p class="text-center">Preencha o formulário abaixo com sua dúvida, crítica ou sugestão.<br/>
		    <strong class="text-blue">Será um prazer atendê-lo!</strong></p>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-6">
		<?php if (isset($msg)): ?>
    		<div class="col-md-12">
    		    <div class="alert <?php echo (isset($msg['class'])) ? $msg['class'] : 'alert-warning'; ?> " role="alert" id="alert-msg">
    			<button class="close" data-hide="alert">&times;</button>
    			<div id="resposta"><?php echo (isset($msg['msg'])) ? $msg['msg'] : '<i class="fa fa-info-circle" aria-hidden="true"></i> Preencha os campos corretamente.'; ?></div>
    		    </div>
    		</div>
		<?php endif; ?>
		<form autocomplete="off" method="POST">
		    <div class="form-group col-md-12 <?php echo (isset($contato_error['nome']['class'])) ? $contato_error['nome']['class'] : ''; ?>">
			<label class="control-label" for="iNome"> Nome Completo: * <?php echo (isset($contato_error['nome']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $contato_error['nome']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon " id="iconNome"><i class="far fa-user"></i></span>
			    <input type="text" name="nNome" id="iNome" placeholder="Exemplo: João da Silva Conceição" class="form-control" aria-describedby="iconNome" value="<?php echo (isset($ouvidoria['nome']) && !empty($ouvidoria['nome'])) ? $ouvidoria['nome'] : ''; ?>"/>
			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($contato_error['email']['class'])) ? $contato_error['email']['class'] : ''; ?>">
			<label class="control-label" for="iEmail"> E-mail: * <?php echo (isset($contato_error['email']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $contato_error['email']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon" id="iconEmail"><i class="far fa-envelope"></i></span>
			    <input type="email" name="nEmail" id="iEmail" placeholder="Exemplo: joao.silva@gmail.com" class="form-control" aria-describedby="iconEmail" value="<?php echo (isset($ouvidoria['email']) && !empty($ouvidoria['email'])) ? $ouvidoria['email'] : ''; ?>"/>
			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($contato_error['telefone']['class'])) ? $contato_error['telefone']['class'] : ''; ?>">
			<label class="control-label" for="iTelefone">Celular: * <?php echo (isset($contato_error['telefone']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $contato_error['telefone']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon " id="iconTelefone"><i class="fas fa-phone-alt"></i> </span>
			    <input type="text" name="nTelefone" id="iTelefone" placeholder="Exemplo: (93) 99204-4466" class="form-control" aria-describedby="iconTelefone" value="<?php echo (isset($ouvidoria['telefone']) && !empty($ouvidoria['telefone'])) ? $ouvidoria['telefone'] : ''; ?>"/>
			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($contato_error['mensagem']['class'])) ? $contato_error['mensagem']['class'] : ''; ?>">
			<label class="control-label" for="iMensagem">Mensagem: <?php echo (isset($contato_error['mensagem']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $contato_error['mensagem']['msg'] . ' </small>' : ''; ?></label>
			<textarea name="nMensagem"  id="iMensagem" rows="5" class="form-control" placeholder="Mensagem"><?php echo (isset($ouvidoria['mensagem']) && !empty($ouvidoria['mensagem'])) ? $ouvidoria['mensagem'] : ''; ?></textarea>
		    </div>
		    <div class="col-md-12">
			<p class="text-center"><button type="submit" class="btn btn-primary" value="Enviar" name="nEnviar">ENVIAR</button></p>
		    </div>

		</form>
	    </div>
	    <div class=" col-md-offset-1 col-md-5">
		<br>
		<h4 class="text-uppercase text-blue">FALE CONOSCO</h4>
		<p> <i class="fas fa-mobile-alt text-yellow"></i> (93) 98422-4055 - 98102-3173</p>
		<p><i class="far fa-envelope text-yellow"></i> contato@cavanis.edu.br</p>
		<p>De segunda a sexta-feira, das 13h30min às 23h <br/> Aos sábados, das 8h às 12h</p>
		<h4 class="text-uppercase text-blue">INSTITUIÇÃO</h4>
		<p>Faculdade Católica Cavanis do Sudoeste do Pará - FCCSPA</p>
		<p>Portaria MEC Nº1.120 | D.O.U. 11/10/2016</p>
		<p>Mantenedora: Sociedade Educacional Católica do Oeste do Pará - SECOP</p>
		<p><i class="fas fa-home text-yellow"></i> Novo Progresso, 59, Rui Pires de Lima - CEP 68193-000</p>
	    </div>
	</div>
    </div>
</div>
</div>