<div class="middleContainer">
	<div class="pgTitle clearfix">
		<h2>Fale Conosco</h2>
	</div>
</div><!--middleContainer-->
<div class="middleContainer">
	<?php
		$form = $this -> beginWidget('CActiveForm', array(
			'id' => 'faleConosco-form',
			'enableAjaxValidation' => false,
		));

	?>

	<?php echo $form->errorSummary($model); ?>

	<div id="columnLeft50" class="cabanaforms">
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
			<?php echo $form->dropDownList($model,'estado', CHtml::listData(Estados::model()->findAll(), 'id', 'nome'), array('empty'=>'Selecione um estado')); ?>
			<!-- <?php echo $form->error($model,'estado'); ?> -->
		</div>
	</div>
	<div id="columnRight50" class="cabanaforms">
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
	</div>
	<?php $this -> endWidget(); ?>
</div><!--middleContainer-->