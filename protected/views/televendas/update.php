<?php
/* @var $this TelevendasController */
/* @var $model Televendas */

$this->breadcrumbs=array(
	'Televendases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Televendas', 'url'=>array('index')),
	array('label'=>'Create Televendas', 'url'=>array('create')),
	array('label'=>'View Televendas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Televendas', 'url'=>array('admin')),
);
?>

<h1>Update Televendas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>