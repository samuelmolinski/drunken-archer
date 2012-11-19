<?php
/* @var $this FaleConoscoController */
/* @var $model FaleConosco */

$this->breadcrumbs=array(
	'Fale Conoscos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaleConosco', 'url'=>array('index')),
	array('label'=>'Create FaleConosco', 'url'=>array('create')),
	array('label'=>'View FaleConosco', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FaleConosco', 'url'=>array('admin')),
);
?>

<h1>Update FaleConosco <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>