<div class="middleContainer">
	<div class="pgTitle clearfix">
		<h2>Central de Atendimento</h2>
	</div>
</div><!--middleContainer-->
<div id="columnLeft">
	<div class="faixa"></div>
	<div class="menu-atendimento">
		<h3>Autoatendimento</h3>
		<ul>
			<li>
				<a href="http://www.telhanorte.com.br/nossaslojas">Nossas Lojas</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/empresa/cartaotelhanorte">Cartão Telhanorte</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/empresa/megasorte">Mega Sorte</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/empresa/obraprima">Obra Prima</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/fornecedores">Fornecedores</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/gruposaintgobain">Grupo Saint-Gobain</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/atendimento">Central de Atendimento</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/atendimento">Fale Conosco</a>
			</li>				
			<li>
				<a href="http://www.telhanorte.com.br/empresa/politicas/">Política de Entrega</a>
			</li>
			<li>
				<a href="http://www.telhanorte.com.br/empresa/trabalheconosco">Trabalhe Conosco</a>
			</li>
		</ul>
	</div>
</div>
<div id="columnMain">
	<div class="atendimento-email">
		<div class="faixa"></div>
		<div class="atendimentoEmailWrapper cabanaforms">
			<h4>Atendimento por e-mail</h4>
			<div class="faleConoscoWrapper">
				<!--<iframe width="325" height="515" frameborder="0" src="http://www.telhanorte.com.br/Site/FaleConosco.aspx" marginheight="0" marginwidth="0"></iframe>-->

				<?php
					$form = $this -> beginWidget('CActiveForm', array(
						'id'=>'televendas-form',
						'enableAjaxValidation' => false,
					));
				?>

				<!-- <?php echo $form->errorSummary($model); ?>-->

				<div class="grp">
					<?php echo $form->labelEx($model,'razaoSocial', array('class' => 'obr')); ?>
					<?php echo $form->textField($model, 'razaoSocial', array('class'=>'fitext required',)); ?>
					<!-- <?php echo $form->error($model,'razaoSocial'); ?> -->
				</div>  
				<div class="grp">
					<?php echo $form->labelEx($model,'cnpj', array('class' => 'obr')); ?>
					<?php echo $form->textField($model, 'cnpj', array('class'=>'fitext required')); ?>
					<!-- <?php echo $form->error($model,'cnpj'); ?> -->
				</div>
				<div class="grp fMulti fTelefone">
					<?php echo $form->labelEx($model,'telefone'); ?>
					<?php echo $form->textField($model, 'ddd', array('class'=>'DDD required onlyInt', 'maxlength'=>2)); ?>
					<?php echo $form->textField($model, 'telefone', array('class'=>'required onlyInt', 'maxlength'=>9)); ?>
					<?php echo $form->error($model,'ddd'); ?>
					<!-- <?php echo $form->error($model,'telefone'); ?> -->
				</div>
				<div class="grp">
					<?php echo $form->labelEx($model,'estado'); ?>
					<?php echo $form->dropDownList($model,'estado', CHtml::listData(Estados::model()->findAll(), 'id', 'nome'), array('empty'=>'Selecione um estado')); ?>
					<!-- <?php echo $form->error($model,'estado'); ?> -->
				</div>
				<div class="grp">
					<?php echo $form->labelEx($model,'cidade'); ?>
					<?php echo $form->dropDownList($model, 'cidade', array('empty'=>'Selecione uma cidade'), array('class'=>'required')); ?>
					<!-- <?php echo $form->error($model,'cidade'); ?> -->
				</div>
				<div class="grp">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model, 'email', array('class'=>'fitext required')); ?>
					<!-- <?php echo $form->error($model,'email'); ?> -->
				</div>
				<div class="grp">
					<?php echo $form->labelEx($model,'orcamentoDesejado'); ?>
					<?php echo $form->textField($model, 'orcamentoDesejado', array('class'=>'fitext required')); ?>
					<!-- <?php echo $form->error($model,'orcamentoDesejado'); ?> -->
				</div>

				<div class="grp enviar">
					<!-- <a id="ctl00_Conteudo_btnEnviar" title="Enviar" class="bt" href='javascript:'>Enviar</a>
					<?php //echo CHtml::submitButton('', array('id'=>'btnGravarUsuario', 'class'=>'bt','style'=>'display:none;', 'name'=>"btnGravar", 'value'=>'Enviar'));  ?> -->
					<?php echo CHtml::submitButton('', array('id'=>'btnGravarUsuario', 'class'=>'bt', 'name'=>"btnGravar", 'value'=>'Enviar'));//  ?>
				</div>
				<?php $this -> endWidget(); ?>
			</div>
		</div>
	</div>
	<div class="atendimento-tel">
		<div class="faixa"></div>
		<div class="atendimentoTelWrapper">
			<h4>Atendimento por telefone</h4>
			<div class="telefones">
				<p> <strong>Grande São Paulo: 11 4004-2444</strong>
				</p>
				<p> <strong>Demais Regiões: 0800-729-2444</strong>
				</p>
			</div>
		</div>
	</div><!--atendimento-tel-->
	<div class="clear"></div>
	<div class="faqWrapper">
		<div class="faixa"></div>
		<div class="faq" id="duvidas">
		<h4>Perguntas mais frequentes</h4>
			<ul>
				<li>
					<a href="javascript:void(0);" class="faqCategoria">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore?
					</a>
					<div>
						Phasellus velit lectus, elementum ut posuere eu, feugiat eu est. Cras eu dolor vel ante volutpat suscipit ac vel enim. Proin non justo et nisi placerat placerat. Morbi odio risus, placerat eget ultricies ut, faucibus vitae mauris. Vestibulum dui justo, rhoncus sit amet egestas consectetur Phasellus velit lectus, ]justo, rhoncus sit amet egestas consectetur
					</div>
				</li>
				<li>
					<a href="javascript:void(0);" class="faqCategoria">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore?
					</a>
					<div>
						Phasellus velit lectus, elementum ut posuere eu, feugiat eu est. Cras eu dolor vel ante volutpat suscipit ac vel enim. Proin non justo et nisi placerat placerat. Morbi odio risus, placerat eget ultricies ut, faucibus vitae mauris. Vestibulum dui justo, rhoncus sit amet egestas consectetur Phasellus velit lectus, ]justo, rhoncus sit amet egestas consectetur
					</div>
				</li>
			</ul>
		</div><!--faq-->
	</div><!--faqWrapper-->
</div><!--columnMain-->