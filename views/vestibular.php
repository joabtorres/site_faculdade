<div id="breadcrumb">
    <div class="container">
	<div class="row">
	    <div class="col-md-12">
		<h1 class="title text-uppercase">Vestibular</h1>
		<ul class="list-inline">
		    <li><a href="<?php echo BASE_URL ?>/home">Inicial</a></li>
		    <li><i class="fas fa-angle-double-right"></i> Vestibular</li>
		</ul>
	    </div>
	</div>
    </div>
</div>
<div id="container_dinamico">
    <div class="container">

	<div class="row">
	    <div class="col-xs-12">
		<h3 class="text-strong text-blue margin-bottom-0">Inscrição para o Vestibular 2020</h3>
		<p>Ficha de Inscrição - Vestibular - 2020</p>
	    </div>
	    <div class="col-xs-12">
		<div class="alert <?php echo (isset($erro['class'])) ? $erro['class'] : 'alert-warning'; ?> " role="alert" id="alert-msg">
		    <button class="close" data-hide="alert">&times;</button>
		    <div id="resposta"><?php echo (isset($erro['msg'])) ? $erro['msg'] : '<i class="fa fa-info-circle" aria-hidden="true"></i> Preencha os campos corretamente.'; ?></div>
		</div>
	    </div>
	    <div class="col-xs-12">
		<form method="POST" autocomplete="true">
		    <div class="panel panel-primary">
			<div class="panel-heading">
			    <h4 class="panel-title"><i class="fas fa-user"></i> Dados Pessoais</h4>
			</div>
			<div class="panel-body">
			    <div class="row">
				<div class="col-md-6 form-group <?php echo (isset($vestibular_erro['nome']['class'])) ? $vestibular_erro['nome']['class'] : ''; ?>">
				    <label class="control-label" for="iNome">Nome Completo: * <?php echo (isset($vestibular_erro['nome']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['nome']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nNome" id="iNome" placeholder="Exemplo: João Silva Felix" value="<?php echo isset($vestibular['nome']) && !empty($vestibular['nome']) ? $vestibular['nome'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['nascimento']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
				    <label class="control-label" for="iNascimento">Data Nascimento: * <?php echo (isset($vestibular_erro['nascimento']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['nascimento']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control input-data" name="nNascimento" id="iNascimento" placeholder="Exemplo: 15/02/2000" value="<?php echo isset($vestibular['nascimento']) && !empty($vestibular['nascimento']) ? $vestibular['nascimento'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['genero']['class'])) ? $vestibular_erro['genero']['class'] : ''; ?>">
				    <label class="control-label" for="iGenero">Gênero: * <?php echo (isset($vestibular_erro['genero']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['genero']['msg'] . ' </small>' : ''; ?></label>
				    <select class="form-control" name="nGenero" id="iGenero">
					<?php
					$array = array('Selecione', 'Masculino', 'Feminino');
					if (isset($vestibular['genero']) && !empty($vestibular['genero'])) {

					    for ($i = 0; $i < count($array); $i++) {
						if ($array[$i] == $vestibular['genero']) {
						    echo "<option value='" . $array[$i] . "' selected='selected'>" . $array[$i] . "</option>";
						} else {
						    echo "<option value='" . $array[$i] . "'>" . $array[$i] . "</option>";
						}
					    }
					} else {
					    for ($i = 0; $i < count($array); $i++) {

						if ($array[$i] == "Selecione") {
						    echo "<option selected='selected' disabled='disabled'>" . $array[$i] . "</option>";
						} else {
						    echo "<option value='" . $array[$i] . "'>" . $array[$i] . "</option>";
						}
					    }
					}
					?>
				    </select>
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['identidade']['class'] : ''; ?>">
				    <label class="control-label" for="iIdentidade">Identidade: * <?php echo (isset($vestibular_erro['identidade']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['identidade']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nIdentidade" id="iIdentidade" placeholder="Exemplo: Nº: 6404443" value="<?php echo isset($vestibular['identidade']) && !empty($vestibular['identidade']) ? $vestibular['identidade'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['orgao']['class'])) ? $vestibular_erro['orgao']['class'] : ''; ?>">
				    <label class="control-label" for="iOrgao">Órgão Expedidor: * <?php echo (isset($vestibular_erro['orgao']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['orgao']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nOrgao" id="iOrgao" placeholder="Exemplo:  PC / Policia Civil" value="<?php echo isset($vestibular['orgao']) && !empty($vestibular['orgao']) ? $vestibular['orgao'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['uf']['class'])) ? $vestibular_erro['uf']['class'] : ''; ?>">
				    <label class="control-label" for="iUF">UF: * <?php echo (isset($vestibular_erro['uf']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['uf']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nUF" id="iUF" placeholder="Exemplo: PA" value="<?php echo isset($vestibular['uf']) && !empty($vestibular['uf']) ? $vestibular['uf'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['data']['class'] : ''; ?>">
				    <label class="control-label" for="iData">Data da Emissão: * <?php echo (isset($vestibular_erro['data']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['data']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control input-data" name="nData" id="iData" placeholder="Exemplo:  20/02/2015" value="<?php echo isset($vestibular['data']) && !empty($vestibular['data']) ? $vestibular['data'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['cpf']['class'])) ? $vestibular_erro['cpf']['class'] : ''; ?>">
				    <label class="control-label" for="iCPF">CPF: * <?php echo (isset($vestibular_erro['cpf']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['cpf']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control input-cpf" name="nCPF" id="iCPF" placeholder="Exemplo: Nº: 000.555.444-20" value="<?php echo isset($vestibular['cpf']) && !empty($vestibular['cpf']) ? $vestibular['cpf'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['estado_civil']['class'])) ? $vestibular_erro['estado_civil']['class'] : ''; ?>">
				    <label class="control-label" for="iEstCivil">Estado Cívil: * <?php echo (isset($vestibular_erro['estado_civil']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['estado_civil']['msg'] . ' </small>' : ''; ?></label>
				    <select class="form-control" name="nEstCivil" id="iEstCivil">
					<?php
					$array = array('Selecione', 'Solteiro(a)', 'Casado(a)', 'Separado(a)', 'Divorciado(a)', 'Viuvo(a)');
					if (isset($vestibular['estado_civil']) && !empty($vestibular['estado_civil'])) {
					    for ($i = 0; $i < count($array); $i++) {
						if ($array[$i] == $vestibular['estado_civil']) {
						    echo "<option value='" . $array[$i] . "' selected='selected'>" . $array[$i] . "</option>";
						} else {
						    echo "<option value='" . $array[$i] . "'>" . $array[$i] . "</option>";
						}
					    }
					} else {
					    for ($i = 0; $i < count($array); $i++) {

						if ($array[$i] == "Selecione") {
						    echo "<option selected='selected' disabled='disabled'>" . $array[$i] . "</option>";
						} else {
						    echo "<option value='" . $array[$i] . "'>" . $array[$i] . "</option>";
						}
					    }
					}
					?>
				    </select>
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['naturalidade']['class'])) ? $vestibular_erro['naturalidade']['class'] : ''; ?>">
				    <label class="control-label" for="iNaturalidade">Naturalidade: * <?php echo (isset($vestibular_erro['naturalidade']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['naturalidade']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nNaturalidade" id="iNaturalidade" placeholder="Exemplo: Itaituba" value="<?php echo isset($vestibular['naturalidade']) && !empty($vestibular['naturalidade']) ? $vestibular['naturalidade'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['nacionalidade']['class'])) ? $vestibular_erro['nacionalidade']['class'] : ''; ?>">
				    <label class="control-label" for="iNacionalidade">Nacionalidade: * <?php echo (isset($vestibular_erro['nacionalidade']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['nacionalidade']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nNacionalidade" id="iNacionalidade" placeholder="Exemplo: Brasileiro" value="<?php echo isset($vestibular['nacionalidade']) && !empty($vestibular['nacionalidade']) ? $vestibular['nacionalidade'] : '' ?>">
				</div>
			    </div>
			</div>
		    </div>
		    <!--fim panel;-->
		    <div class="panel panel-primary">
			<div class="panel-heading">
			    <h4 class="panel-title"><i class="fas fa-users"></i> Familiares</h4>
			</div>
			<div class="panel-body">
			    <div class="row">				
				<div class="col-md-6 form-group <?php echo (isset($vestibular_erro['pai']['class'])) ? $vestibular_erro['pai']['class'] : ''; ?>">
				    <label class="control-label" for="iPai">Nome do Pai: * <?php echo (isset($vestibular_erro['pai']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['pai']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nPai" id="iPai" placeholder="Exemplo: Raimundo Soares Felix / Não registrado" value="<?php echo isset($vestibular['pai']) && !empty($vestibular['pai']) ? $vestibular['pai'] : '' ?>">
				</div>

				<div class="col-md-6 form-group <?php echo (isset($vestibular_erro['mae']['class'])) ? $vestibular_erro['mae']['class'] : ''; ?>">
				    <label class="control-label" for="iMae">Nome da Mãe: * <?php echo (isset($vestibular_erro['mae']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['mae']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nMae" id="iMae" placeholder="Exemplo: Maria Silva da Conceição / Não Registrada" value="<?php echo isset($vestibular['mae']) && !empty($vestibular['mae']) ? $vestibular['mae'] : '' ?>">
				</div>
			    </div>
			</div>
		    </div>
		    <!--fim panel;-->
		    <div class="panel panel-primary">
			<div class="panel-heading">
			    <h4 class="panel-title"><i class="fas fa-mail-bulk"></i> Contato</h4>
			</div>
			<div class="panel-body">
			    <div class="row">				
				<div class="col-md-6 form-group <?php echo (isset($vestibular_erro['email']['class'])) ? $vestibular_erro['email']['class'] : ''; ?>">
				    <label class="control-label" for="iemail">Email: * <?php echo (isset($vestibular_erro['email']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['email']['msg'] . ' </small>' : ''; ?></label>
				    <input type="email" class="form-control" name="nEmail" id="iemail" placeholder="Exemplo: joao.silva@gmail.com" value="<?php echo isset($vestibular['email']) && !empty($vestibular['email']) ? $vestibular['email'] : '' ?>">
				</div>

				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['telefone']['class'])) ? $vestibular_erro['telefone']['class'] : ''; ?>">
				    <label class="control-label" for="iTelefone">Telefone:  <?php echo (isset($vestibular_erro['telefone']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['telefone']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nTelefone" id="iTelefone" placeholder="Exemplo: (93) 3518-5544" value="<?php echo isset($vestibular['nome']) && !empty($vestibular['telefone']) ? $vestibular['telefone'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['celular']['class'])) ? $vestibular_erro['celular']['class'] : ''; ?>">
				    <label class="control-label" for="iCelular">Celular: * <?php echo (isset($vestibular_erro['celular']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['celular']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nCelular" id="iCelular" placeholder="Exemplo: (93) 99204-5544" value="<?php echo isset($vestibular['celular']) && !empty($vestibular['celular']) ? $vestibular['celular'] : '' ?>">
				</div>
			    </div>
			</div>
		    </div>
		    <!--fim panel;-->
		    <div class="panel panel-primary">
			<div class="panel-heading">
			    <h4 class="panel-title"><i class="fas fa-map-marked-alt"></i> Endereço</h4>
			</div>
			<div class="panel-body">
			    <div class="row">

				<div class="col-md-7 form-group <?php echo (isset($vestibular_erro['logradouro']['class'])) ? $vestibular_erro['logradouro']['class'] : ''; ?>">
				    <label class="control-label" for="iLogradouro">Logradouro: * <?php echo (isset($vestibular_erro['logradouro']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['logradouro']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nLogradouro" id="iLogradouro" placeholder="Exemplo: Rua da Patria" value="<?php echo isset($vestibular['logradouro']) && !empty($vestibular['logradouro']) ? $vestibular['logradouro'] : '' ?>">
				</div>
				<div class="col-md-2 form-group <?php echo (isset($vestibular_erro['numero']['class'])) ? $vestibular_erro['numero']['class'] : ''; ?>">
				    <label class="control-label" for="iNumero">Número: * <?php echo (isset($vestibular_erro['numero']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['numero']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nNumero" id="iNumero" placeholder="Exemplo: S/N" value="<?php echo isset($vestibular['numero']) && !empty($vestibular['numero']) ? $vestibular['numero'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['bairro']['class'])) ? $vestibular_erro['bairro']['class'] : ''; ?>">
				    <label class="control-label" for="iBairro">Bairro: * <?php echo (isset($vestibular_erro['bairro']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['bairro']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nBairro" id="iBairro" placeholder="Exemplo: Jardim Planalto" value="<?php echo isset($vestibular['bairro']) && !empty($vestibular['bairro']) ? $vestibular['bairro'] : '' ?>">
				</div>
				<div class="col-md-4 form-group">
				    <label class="control-label" for="iComplemento">Complemento:</label>
				    <input type="text" class="form-control" name="nComplemento" id="iComplemento" placeholder="Exemplo: Próximo ao supermecado castanha" value="<?php echo isset($vestibular['complemento']) && !empty($vestibular['complemento']) ? $vestibular['complemento'] : '' ?>">
				</div>
				<div class="col-md-2 form-group ">
				    <label class="control-label" for="iCEP">CEP: </label>
				    <input type="text" class="form-control" name="nCEP" id="iCEP" placeholder="Exemplo: 68193-000" value="<?php echo isset($vestibular['cep']) && !empty($vestibular['cep']) ? $vestibular['cep'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['cidade']['class'])) ? $vestibular_erro['cidade']['class'] : ''; ?>">
				    <label class="control-label" for="iCidade">Cidade: * <?php echo (isset($vestibular_erro['cidade']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['cidade']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nCidade" id="iCidade" placeholder="Exemplo:  Novo Progresso" value="<?php echo isset($vestibular['cidade']) && !empty($vestibular['cidade']) ? $vestibular['cidade'] : '' ?>">
				</div>
				<div class="col-md-3 form-group <?php echo (isset($vestibular_erro['estado']['class'])) ? $vestibular_erro['estado']['class'] : ''; ?>">
				    <label class="control-label" for="iEstado">Estado: * <?php echo (isset($vestibular_erro['estado']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['estado']['msg'] . ' </small>' : ''; ?></label>
				    <input type="text" class="form-control" name="nEstado" id="iEstado" placeholder="Exemplo:  PA" value="<?php echo isset($vestibular['estado']) && !empty($vestibular['estado']) ? $vestibular['estado'] : '' ?>">
				</div>
			    </div>
			</div>
		    </div>
		    <!--fim panel;-->
		    <div class="panel panel-primary">
			<div class="panel-heading">
			    <h4 class="panel-title"><i class="fas fa-graduation-cap"></i> Curso</h4>
			</div>
			<div class="panel-body">
			    <div class="row">
				<div class="col-md-12 <?php echo (isset($vestibular_erro['curso']['class'])) ? $vestibular_erro['curso']['class'] : ''; ?>">
				    <label class="control-label"> Qual curso tem interesse em fazer? * <?php echo (isset($vestibular_erro['curso']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['curso']['msg'] . ' </small>' : ''; ?></label>
				</div>
				<div class="form-group col-md-4 <?php echo (isset($vestibular_erro['curso']['class'])) ? $vestibular_erro['curso']['class'] : ''; ?>">
				    <div class="input-group">
					<span class="input-group-addon " id="iconNome"><input type="radio" name="nCurso" id="iADM" value="Administração" <?php echo!empty($vestibular['curso']) && $vestibular['curso'] == 'Administração' ? ' checked="checked" ' : '' ?>/></span>
					<label class="form-control" aria-describedby="iconNome" for="iADM">Administração</label>
				    </div>
				</div>
				<div class="form-group col-md-4 <?php echo (isset($vestibular_erro['curso']['class'])) ? $vestibular_erro['curso']['class'] : ''; ?>">
				    <div class="input-group">
					<span class="input-group-addon " id="iconNome"><input type="radio" name="nCurso" id="iCC" value="Ciências Contábeis" <?php echo!empty($vestibular['curso']) && $vestibular['curso'] == 'Ciências Contábeis' ? ' checked="checked" ' : '' ?>/></span>
					<label class="form-control" aria-describedby="iconNome" for="iCC">Ciências Contábeis</label>
				    </div>
				</div>
				<div class="form-group col-md-4 <?php echo (isset($vestibular_erro['curso']['class'])) ? $vestibular_erro['curso']['class'] : ''; ?>">
				    <div class="input-group">
					<span class="input-group-addon" id="iconNome"><input type="radio" name="nCurso" id="iSI" value="Sistemas de Informação" <?php echo!empty($vestibular['curso']) && $vestibular['curso'] == 'Sistemas de Informação' ? ' checked="checked" ' : '' ?>/></span>
					<label class="form-control" aria-describedby="iconNome" for="iSI">Sistemas de Informação</label>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		    <!--fim panel;-->
    		    <div class="panel panel-primary">
    			<div class="panel-heading">
    			    <h4 class="panel-title"><i class="fas fa-hands-helping"></i> Informações Adicionais</h4>
    			</div>
    			<div class="panel-body">
    			    <div class="row">
    				<div class="col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <label class="control-label"> Alguma deficiência? * <?php echo (isset($vestibular_erro['nascimento']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['nascimento']['msg'] . ' </small>' : ''; ?></label>
    				</div>
    				<div class="form-group col-md-3 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon " id="iconNome"><input type="checkbox" name="nCurso" id="iNenhuma" value="Nenhuma"/></span>
    					<label class="form-control" aria-describedby="iconNome" for="iNenhuma">Nenhuma</label>
    				    </div>
    				</div>
    				<div class="form-group col-md-3 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon " id="iconNome"><input type="checkbox" name="nCurso" id="iAuditiva" value="Auditiva"/></span>
    					<label class="form-control" aria-describedby="iconNome" for="iAuditiva">Auditiva</label>
    				    </div>
    				</div>
    				<div class="form-group col-md-3 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon" id="iconNome"><input type="checkbox" name="nCurso" id="iVisual" value="Visual"/></span>
    					<label class="form-control" aria-describedby="iconNome" for="iVisual">Visual</label>
    				    </div>
    				</div>
    				<div class="form-group col-md-3 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon" id="iconNome"><input type="checkbox" name="nCurso" id="iFisica" value="Física"/></span>
    					<label class="form-control" aria-describedby="iconNome" for="iFisica">Física</label>
    				    </div>
    				</div>
    			    </div>
    			    <div class="row">
    				<div class="col-md-3 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <label class="control-label"> Cadeirante? * <?php echo (isset($vestibular_erro['nascimento']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['nascimento']['msg'] . ' </small>' : ''; ?></label>
    				    <div class="row">
    					<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    					    <div class="input-group">
    						<span class="input-group-addon " id="iconNome"><input type="radio" name="nCurso" id="iCC" value="Ciências Contábeis"/></span>
    						<label class="form-control" aria-describedby="iconNome" for="iCC" style="width: auto;">Não</label>
    					    </div>
    					</div>
    					<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    					    <div class="input-group">
    						<span class="input-group-addon" id="iconNome"><input type="radio" name="nCurso" id="iSI" value="Sistemas de Informação"/></span>
    						<label class="form-control" aria-describedby="iconNome" for="iSI" style="width: auto;">Sim</label>
    					    </div>
    					</div>
    				    </div>
    				</div>
    				<div class="col-md-9 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <label class="control-label"> Necessita de tratamento especial? * <?php echo (isset($vestibular_erro['nascimento']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['nascimento']['msg'] . ' </small>' : ''; ?></label>
    				    <div class="row">
    					<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    					    <div class="input-group">
    						<span class="input-group-addon " id="iconNome"><input type="radio" name="nCurso" id="iCC" value="Ciências Contábeis"/></span>
    						<label class="form-control" aria-describedby="iconNome" for="iCC" style="width: auto;">Não</label>
    					    </div>
    					</div>
    					<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    					    <div class="input-group">
    						<span class="input-group-addon" id="iconNome"><input type="radio" name="nCurso" id="iSI" value="Sistemas de Informação"/> Sim, Qual?</span>
    						<input type="text" class="form-control" name="nIndentidade" id="iIndentidade" placeholder="Descreva em que tipo de tratamento você precisa" value="<?php echo isset($vestibular['nome']) && !empty($vestibular['nascimento']) ? $vestibular['nascimento'] : '' ?>">
    					    </div>
    					</div>
    				    </div>
    				</div>
    			    </div>
			    <?php $teste = false; if($teste):?>
    			    <div class="row">
    				<div class="col-md-12"><br><hr/><br></div>
    				<div class="col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <label class="control-label"> Como nos conheceu? <?php echo (isset($vestibular_erro['nascimento']['msg'])) ? '<small><span class="glyphicon glyphicon-remove"></span> ' . $vestibular_erro['nascimento']['msg'] . ' </small>' : ''; ?></label>
    				</div>
    				<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon " id="iconNome"><input type="checkbox" name="nCurso" id="iNenhuma" value="Nenhuma"/></span>
    					<label class="form-control" aria-describedby="iconNome" for="iNenhuma" style="width: auto;">Publicidade no WhatesApp</label>
    				    </div>
    				</div>
    				<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon " id="iconNome"><input type="checkbox" name="n" id="iAuditiva" value="Auditiva"/></span>
    					<label class="form-control" aria-describedby="iconNome" for="iAuditiva" style="width: auto;">Propaganda de Rua</label>
    				    </div>
    				</div>
    				<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon" id="iconNome"><input type="checkbox" name="nCurso" id="iVisual" value="Visual"/></span>
    					<label class="form-control" aria-describedby="iconNome" for="iVisual" style="width: auto;">Através do Facebook</label>
    				    </div>
    				</div>
    				<div class="form-group col-md-12 <?php echo (isset($vestibular_erro['identidade']['class'])) ? $vestibular_erro['nascimento']['class'] : ''; ?>">
    				    <div class="input-group">
    					<span class="input-group-addon" id="iconNome"><input type="checkbox" name="nCurso" id="iFisica" value="Física"/> Outra forma, escreva para nós.</span>
    					<input type="text" aria-describedby="iconNome" class="form-control" name="nIndentidade" id="iIndentidade" placeholder="Exemplo: Atráves de amigos/Familiares" value="<?php echo isset($vestibular['nome']) && !empty($vestibular['nascimento']) ? $vestibular['nascimento'] : '' ?>">
    				    </div>
    				</div>
    			    </div>
			    <?php endif;?>
    			</div>
			
    		    </div>
		    <!--fim panel;-->
		    <div class="row">
			<div class="col-md-12">
			    <p class="text-strong">Declaro ainda ter lido o edital simplificado do concurso vestibular, estou ciente e de acordo com as normas nelas constantes, bem como estou ciente do valor da inscrição - R$50,00 (Cinquenta reais).</p>

			    <p class="text-strong">O Boleto de inscrição pode ser retirado pessoalmente na secretaria da Faculdade no Colégio Hiper Ideal ou receber via E-mail, selecione abaixo a opção de como gostariade receber o Boleto da Instrição. *</p>

			    <p<?php echo (isset($vestibular_erro['boleto']['msg'])) ? ' style="padding: 5px; background: #a94442; color: white;"' : ''; ?> > <?php echo (isset($vestibular_erro['boleto']['msg'])) ? $vestibular_erro['boleto']['msg'] . ' </p>' : ' </p>'; ?>
				<label><input type="radio" name="nBoleto" value="Receber por E-mail" <?php echo!empty($vestibular['boleto']) && $vestibular['boleto'] == 'Receber por E-mail' ? ' checked="checked" ' : '' ?>> Receber por E-mail </label>
				<label><input type="radio" name="nBoleto" value="Retirar Pessoalmente" <?php echo!empty($vestibular['boleto']) && $vestibular['boleto'] == 'Retirar Pessoalmente' ? ' checked="checked" ' : '' ?>> Retirar Pessoalmente </label>
			</div>
			<div class="col-md-12">
			    <button type="submit" name="nEnviar" value="enviar" class="btn btn-primary btn-lg">Enviar</button>
			</div>
		    </div>

		</form>
	    </div>
	</div>
    </div>
</div>