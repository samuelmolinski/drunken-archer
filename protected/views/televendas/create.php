<?php
/* @var $this TelevendasController */
/* @var $model Televendas */

$this->breadcrumbs=array(
	'Televendases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Televendas', 'url'=>array('index')),
	array('label'=>'Manage Televendas', 'url'=>array('admin')),
);
?>

<h1>Create Televendas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>