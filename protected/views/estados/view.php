<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estado'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Criar Estados', 'url'=>array('create')),
	array('label'=>'Atualizar Estados', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Apagar Estados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja apagar este item?')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Ver Estados #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sigla',
		'nome',
	),
)); ?>
