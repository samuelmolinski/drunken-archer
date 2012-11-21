<!-- <div class="middleContainer">
	<div class="pgTitle clearfix">
		<h2>Televendas</h2>
	</div>
</div> --><!--middleContainer-->

<div class="middleContainer">
	<?php
		$form = $this -> beginWidget('CActiveForm', array(
			'id'=>'televendas-form',
			'enableAjaxValidation' => false,
		));
	?>
	<!-- <?php echo $form->errorSummary($model); ?>-->
	<div id="columnLeft50" class="cabanaforms">

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
	</div>
	<div id="columnRight50" class="cabanaforms">
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
	</div>
	<?php $this -> endWidget(); ?>

</div><!--middleContainer-->