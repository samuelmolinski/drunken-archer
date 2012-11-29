<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estado'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Criar Estados</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>