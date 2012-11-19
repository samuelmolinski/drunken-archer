<?php
/* @var $this CidadesController */
/* @var $model Cidades */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cidades', 'url'=>array('index')),
	array('label'=>'Create Cidades', 'url'=>array('create')),
	array('label'=>'Update Cidades', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cidades', 'url'=>array('admin')),
);
?>

<h1>View Cidades #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_uf',
		'nome',
	),
)); ?>
