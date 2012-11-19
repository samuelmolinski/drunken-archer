<?php
/* @var $this CidadesController */
/* @var $model Cidades */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cidades', 'url'=>array('index')),
	array('label'=>'Create Cidades', 'url'=>array('create')),
	array('label'=>'View Cidades', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cidades', 'url'=>array('admin')),
);
?>

<h1>Update Cidades <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>