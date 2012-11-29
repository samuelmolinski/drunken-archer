<?php
/* @var $this CidadesController */
/* @var $model Cidades */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Cidades', 'url'=>array('index')),
	array('label'=>'Criar Cidades', 'url'=>array('create')),
	array('label'=>'Atualizar Cidades', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Apagar Cidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja apagar este item?')),
	array('label'=>'Administrar Cidades', 'url'=>array('admin')),
);
?>

<h1>Ver Cidades #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_uf',
		'nome',
	),
)); ?>
