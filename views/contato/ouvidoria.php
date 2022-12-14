<div id="breadcrumb">
    <div class="container">
	<div class="row">
	    <div class="col-md-12">
		<h1 class="title text-uppercase">Ouvidoria</h1>
		<ul class="list-inline">
		    <li><a href="<?php echo BASE_URL ?>/home">Inicial</a></li>
		    <li><i class="fas fa-angle-double-right"></i> Contato</li>
		    <li><i class="fas fa-angle-double-right"></i> Ouvidoria</li>
		</ul>
	    </div>
	</div>
    </div>
</div>
<div id="container_dinamico">
    <div class="container">
	<div class="row">
	    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
		<h4 class="text-justify text-blue text-uppercase ">
		    <i class="fas fa-layer-group"></i> FUNÇÃO DA OUVIDORIA
		</h4>
		<ul class="list-unstyled">
		    <li><span class="text-yellow"><i class="fas fa-angle-right"></i></span>Receber, analisar, encaminhar e responder ao acadêmico suas demandas;</li>
		    <li><span class="text-yellow"><i class="fas fa-angle-right"></i></span>Fortalecer a participação da comunidade acadêmica no dia-a-dia da Instituição;</li>
		    <li><span class="text-yellow"><i class="fas fa-angle-right"></i></span>Ouvir as reclamações, denúncias, elogios, solicitações, sugestões ou esclarecer as dúvidas sobre os serviços prestados;</li>
		    <li><span class="text-yellow"><i class="fas fa-angle-right"></i></span>Receber, analisar e encaminhar as manifestações aos setores responsáveis;</li>
		    <li><span class="text-yellow"><i class="fas fa-angle-right"></i></span>Acompanhar as providências adotadas, cobrando soluções e mantendo o reclamante informado;</li>
		    <li><span class="text-yellow"><i class="fas fa-angle-right"></i></span>Responder com clareza as manifestações dos usuários no menor prazo possível.</li> 
		</ul>
		<br/>
		<?php if (isset($msg)): ?>
    		<div class="col-md-12">
    		    <div class="alert <?php echo (isset($msg['class'])) ? $msg['class'] : 'alert-warning'; ?> " role="alert" id="alert-msg">
    			<button class="close" data-hide="alert">&times;</button>
    			<div id="resposta"><?php echo (isset($msg['msg'])) ? $msg['msg'] : '<i class="fa fa-info-circle" aria-hidden="true"></i> Preencha os campos corretamente.'; ?></div>
    		    </div>
    		</div>
		<?php endif; ?>
		<form autocomplete="off" method="POST">
		    <div class="form-group col-md-12 <?php echo (isset($ouvidoria_error['categoria']['class'])) ? $ouvidoria_error['categoria']['class'] : ''; ?>">
			<label class="control-label" for="iCategoria"> Você é? * <?php echo (isset($ouvidoria_error['categoria']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $ouvidoria_error['categoria']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon " id="iconCategoria"><i class="far fa-question-circle"></i></span>
			    <select name="nCategoria" id="iCategoria" placeholder="Exemplo: João da Silva Conceição" class="form-control" aria-describedby="iconCategoria">
				<?php
				if (isset($ouvidoria['categoria'])) {
				    echo '<option value="" disabled="disabled">Selecione</option>';
				} else {
				    echo '<option value="" disabled="disabled" selected="selected">Selecione</option>';
				}
				$array = array('Aluno', 'Empresa', 'Funcionário', 'Mãe', 'Pai', 'Responsável', 'Visitante', 'Outros');
				for ($i = 0; $i < count($array); $i++) {
				    if ($array[$i] == $ouvidoria['categoria']) {
					echo '<option value="' . $array[$i] . '" selected="selected">' . $array[$i] . '</option>';
				    } else {
					echo '<option value="' . $array[$i] . '">' . $array[$i] . '</option>';
				    }
				}
				?>

			    </select>
			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($ouvidoria_error['nome']['class'])) ? $ouvidoria_error['nome']['class'] : ''; ?>">
			<label class="control-label" for="iNome"> Nome Completo: * <?php echo (isset($ouvidoria_error['nome']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $ouvidoria_error['nome']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon " id="iconNome"><i class="far fa-user"></i></span>
			    <input type="text" name="nNome" id="iNome" placeholder="Exemplo: João da Silva Conceição" class="form-control" aria-describedby="iconNome" value="<?php echo (isset($ouvidoria['nome']) && !empty($ouvidoria['nome'])) ? $ouvidoria['nome'] : ''; ?>"/>

			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($ouvidoria_error['email']['class'])) ? $ouvidoria_error['email']['class'] : ''; ?>">
			<label class="control-label" for="iEmail"> E-mail: * <?php echo (isset($ouvidoria_error['email']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $ouvidoria_error['email']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon" id="iconEmail"><i class="far fa-envelope"></i></span>
			    <input type="email" name="nEmail" id="iEmail" placeholder="Exemplo: joao.silva@gmail.com" class="form-control" aria-describedby="iconEmail" value="<?php echo (isset($ouvidoria['email']) && !empty($ouvidoria['email'])) ? $ouvidoria['email'] : ''; ?>"/>
			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($ouvidoria_error['telefone']['class'])) ? $ouvidoria_error['telefone']['class'] : ''; ?>">
			<label class="control-label" for="iTelefone">Telefone/Celular: * <?php echo (isset($ouvidoria_error['telefone']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $ouvidoria_error['telefone']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon " id="iconTelefone"><i class="fas fa-phone-alt"></i> </span>
			    <input type="text" name="nTelefone" id="iTelefone" placeholder="Exemplo: (93) 99204-4466" class="form-control" aria-describedby="iconTelefone" value="<?php echo (isset($ouvidoria['telefone']) && !empty($ouvidoria['telefone'])) ? $ouvidoria['telefone'] : ''; ?>"/>
			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($ouvidoria_error['assunto']['class'])) ? $ouvidoria_error['assunto']['class'] : ''; ?>">
			<label class="control-label" for="iAssunto"> O que você deseja? * <?php echo (isset($ouvidoria_error['assunto']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $ouvidoria_error['assunto']['msg'] . ' </small>' : ''; ?></label>
			<div class="input-group">
			    <span class="input-group-addon " id="iconDeseja"><i class="far fa-question-circle"></i></span>
			    <select name="nAssunto" id="iAssunto" class="form-control" aria-describedby="iconDeseja">

				<?php
				if (isset($ouvidoria['assunto'])) {
				    echo '<option value="" disabled="disabled">Selecione</option>';
				} else {
				    echo '<option value="" disabled="disabled" selected="selected">Selecione</option>';
				}
				$array = array('Sugestão', 'Solicitação', 'Informação', 'Denúncia', 'Elogío', 'Crítica');
				for ($i = 0; $i < count($array); $i++) {
				    if ($array[$i] == $ouvidoria['assunto']) {
					echo '<option value="' . $array[$i] . '" selected="selected">' . $array[$i] . '</option>';
				    } else {
					echo '<option value="' . $array[$i] . '">' . $array[$i] . '</option>';
				    }
				}
				?>
			    </select>
			</div>
		    </div>
		    <div class="form-group col-md-12 <?php echo (isset($ouvidoria_error['mensagem']['class'])) ? $ouvidoria_error['mensagem']['class'] : ''; ?>">
			<label class="control-label" for="iMensagem">Mensagem: * <?php echo (isset($ouvidoria_error['mensagem']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $ouvidoria_error['mensagem']['msg'] . ' </small>' : ''; ?></label>
			<textarea name="nMensagem"  id="iMensagem" rows="5" class="form-control" placeholder="Mensagem"><?php echo (isset($ouvidoria['mensagem']) && !empty($ouvidoria['mensagem'])) ? $ouvidoria['mensagem'] : ''; ?></textarea>
		    </div>
		    <div class="col-md-12">
			<p class="text-center"><button type="submit" class="btn btn-primary" value="Enviar" name="nEnviar">Enviar</button></p>
		    </div>
		</form>
	    </div>
	</div>
    </div>
</div>