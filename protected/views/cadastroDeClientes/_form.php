<?php
/* @var $this CadastroDeClientesController */
/* @var $model CadastroDeClientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cadastro-de-clientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeCompleto'); ?>
		<?php echo $form->textField($model,'nomeCompleto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nomeCompleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade'); ?>
		<?php echo $form->error($model,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cep'); ?>
		<?php echo $form->textField($model,'cep'); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataDeNascimento'); ?>
		<?php echo $form->textField($model,'dataDeNascimento'); ?>
		<?php echo $form->error($model,'dataDeNascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo'); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'escolaridade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profissao'); ?>
		<?php echo $form->textField($model,'profissao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'profissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadaCivil'); ?>
		<?php echo $form->textField($model,'estadaCivil',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'estadaCivil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentoDeIdentidade'); ?>
		<?php echo $form->textField($model,'documentoDeIdentidade',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'documentoDeIdentidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ddd'); ?>
		<?php echo $form->textField($model,'ddd'); ?>
		<?php echo $form->error($model,'ddd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone'); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dddc'); ?>
		<?php echo $form->textField($model,'dddc'); ?>
		<?php echo $form->error($model,'dddc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular'); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ofertasDeSMS'); ?>
		<?php echo $form->textField($model,'ofertasDeSMS'); ?>
		<?php echo $form->error($model,'ofertasDeSMS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ofertasDeEmail'); ?>
		<?php echo $form->textField($model,'ofertasDeEmail'); ?>
		<?php echo $form->error($model,'ofertasDeEmail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->