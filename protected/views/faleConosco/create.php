<?php
/* @var $this FaleConoscoController */
/* @var $model FaleConosco */

$this->breadcrumbs=array(
	'Fale Conoscos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FaleConosco', 'url'=>array('index')),
	array('label'=>'Manage FaleConosco', 'url'=>array('admin')),
);
?>

<h1>Create FaleConosco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>