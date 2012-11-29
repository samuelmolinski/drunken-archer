<!-- <div class="middleContainer">
	<div class="pgTitle clearfix">
		<h2>Central de Atendimento</h2>
	</div>
</div> --><!--middleContainer-->
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
				<?php
		$form = $this -> beginWidget('CActiveForm', array(
			'id' => 'faleConosco-form',
			'enableAjaxValidation' => false,
			'action' => 'http://telhanorte.com.br/formularios/index.php/site/faleconosco'
		));

	?>

	<!-- <?php echo $form->errorSummary($model); ?> -->

		<div class="grp">
			<?php echo $form->labelEx($model,'nome', array('class' => 'obr')); ?>
			<?php echo $form->textField($model, 'nome', array('value'=>'', 'class'=>'fitext required')); ?>
			<!-- <?php echo $form->error($model,'nome'); ?> -->
		</div> 

		<div class="grp">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model, 'email', array('value'=>'', 'class'=>'fitext required')); ?>
			<!-- <?php echo $form->error($model,'email'); ?> -->
		</div>

		<div class="grp">
			<?php echo $form->labelEx($model,'cpf'); ?>
			<?php echo $form->textField($model, 'cpf', array('value'=>'', 'class'=>'fitext required onlyInt')); ?>
			<!-- <?php echo $form->error($model,'cpf'); ?> -->
		</div>

		<div class="grp fMulti fTelefone">
			<?php echo $form->labelEx($model,'telefone'); ?>
			<?php echo $form->textField($model, 'ddd', array('value'=>'', 'class'=>'DDD required onlyInt', 'maxlength'=>2)); ?>
			<?php echo $form->textField($model, 'telefone', array('value'=>'', 'class'=>' required onlyInt', 'maxlength'=>9)); ?>
			<!-- <?php echo $form->error($model,'ddd'); ?> -->
			<!-- <?php echo $form->error($model,'telefone'); ?> -->
		</div>

		<div class="grp">
			<?php echo $form->labelEx($model,'estado'); ?>
			<?php echo $form->dropDownList($model,'estado', CHtml::listData(Estados::model()->findAll(), 'nome', 'nome'), array('empty'=>'Selecione um estado','autocomplete'=>'off')); ?>
			<!-- <?php echo $form->error($model,'estado'); ?> -->
		</div>

		<div class="grp">
			<?php echo $form->labelEx($model,'cidade'); ?>
			<?php echo $form->dropDownList($model, 'cidade', array('empty'=>'Selecione uma cidade'), array('value'=>'', 'class'=>'required')); ?>
			<!-- <?php echo $form->error($model,'cidade'); ?> -->
		</div>

		<div class="grp">
			<?php echo $form->labelEx($model,'loja'); ?>
			<?php echo $form->textField($model, 'loja', array('value'=>'', 'class'=>'fitext required')); ?>
			<!-- <?php echo $form->error($model,'loja'); ?> -->
		</div>

		<div class="grp">
			<?php echo $form->labelEx($model,'assunto'); ?>
			<?php echo $form->dropDownList($model, 'assunto', array('informacoes'=>'Informações','sugestoes'=>'Sugestões','elogios'=>'Elogios','criticas'=>'Críticas','comentarios'=>'Comentários'), array('value'=>'', 'class'=>'required')); ?>
			<!-- <?php echo $form->error($model,'assunto'); ?> -->
		</div>

		<div class="grp">
			<?php echo $form->labelEx($model,'messagem'); ?>
			<?php echo $form->textArea($model, 'messagem', array('value'=>'', 'class'=>'required')); ?>
			<!-- <?php echo $form->error($model,'messagem'); ?> -->
		</div>

		<div class="grp enviar">
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