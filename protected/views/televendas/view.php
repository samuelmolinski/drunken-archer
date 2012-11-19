<?php
/* @var $this TelevendasController */
/* @var $model Televendas */

$this->breadcrumbs=array(
	'Televendases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Televendas', 'url'=>array('index')),
	array('label'=>'Create Televendas', 'url'=>array('create')),
	array('label'=>'Update Televendas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Televendas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Televendas', 'url'=>array('admin')),
);
?>

<h1>View Televendas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'razaoSocial',
		'cnpj',
		'telefone',
		'cidade',
		'estado',
		'email',
		'orcamentoDesejado',
	),
)); ?>
