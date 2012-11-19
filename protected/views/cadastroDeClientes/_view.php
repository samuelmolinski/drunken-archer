<?php
/* @var $this CadastroDeClientesController */
/* @var $data CadastroDeClientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeCompleto')); ?>:</b>
	<?php echo CHtml::encode($data->nomeCompleto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enderecoCompleto')); ?>:</b>
	<?php echo CHtml::encode($data->enderecoCompleto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataDeNascimento')); ?>:</b>
	<?php echo CHtml::encode($data->dataDeNascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridade')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profissao')); ?>:</b>
	<?php echo CHtml::encode($data->profissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadaCivil')); ?>:</b>
	<?php echo CHtml::encode($data->estadaCivil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentoDeIdentidade')); ?>:</b>
	<?php echo CHtml::encode($data->documentoDeIdentidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ofertasDeSMS')); ?>:</b>
	<?php echo CHtml::encode($data->ofertasDeSMS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ofertasDeEmail')); ?>:</b>
	<?php echo CHtml::encode($data->ofertasDeEmail); ?>
	<br />

	*/ ?>

</div>