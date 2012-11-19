<?php
/* @var $this CidadesController */
/* @var $model Cidades */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cidades', 'url'=>array('index')),
	array('label'=>'Manage Cidades', 'url'=>array('admin')),
);
?>

<h1>Create Cidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>