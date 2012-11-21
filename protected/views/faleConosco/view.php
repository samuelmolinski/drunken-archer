<?php
/* @var $this FaleConoscoController */
/* @var $model FaleConosco */

$this->breadcrumbs=array(
	'Fale Conoscos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FaleConosco', 'url'=>array('index')),
	array('label'=>'Create FaleConosco', 'url'=>array('create')),
	array('label'=>'Update FaleConosco', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FaleConosco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaleConosco', 'url'=>array('admin')),
);
?>

<h1>View FaleConosco #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'email',
		'cpf',
		'ddd',
		'telefone',
		'cidade',
		'estado',
		'loja',
		'assunto',
		'messagem',
	),
)); ?>
