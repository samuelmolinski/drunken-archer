<?php
/* @var $this TelevendasController */
/* @var $model Televendas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'televendas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'razaoSocial'); ?>
		<?php echo $form->textField($model,'razaoSocial',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'razaoSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone'); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orcamentoDesejado'); ?>
		<?php echo $form->textField($model,'orcamentoDesejado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'orcamentoDesejado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->